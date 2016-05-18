<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use BlogBundle\Entity\Entry;
use BlogBundle\Form\EntryType;

class EntryController extends Controller {

    private $session;

    public function __construct() {
        $this->session = new Session();
    }
    
    public function ListcategoriesAction()
    {
       $em = $this->getDoctrine()->getEntityManager();
        $category_repo=$em->getRepository("BlogBundle:Category");
        
        $categories = $category_repo->findAll();
        
        return $this->render("BlogBundle:Category:menu.categories.html.twig",array(
            "categories" => $categories,
        ));      
    }
    
    public function indexAction(Request $request, $page)
    {
        //Traducción
        //var_dump($request->getSession()->get("_locale"));
        //var_dump($this->get("translator")->trans("btn_edit"));
        
        $em = $this->getDoctrine()->getEntityManager();
        $entry_repo=$em->getRepository("BlogBundle:Entry");
        $category_repo=$em->getRepository("BlogBundle:Category");
        $categories = $category_repo->findAll();
        
        
        //$entries = $entry_repo->findAll();
        //$entries = $entry_repo->findBy(array(), array('id'=>'desc'));        
        
        //Crear paginación
        $pageSize = 5;
        $entries = $entry_repo->getPaginateEntries($pageSize, $page);
        
        $totalItems = count($entries);
        $pagesCount = ceil($totalItems/$pageSize);
        
        
        
        return $this->render("BlogBundle:Entry:index.html.twig",array(
            "entries"=> $entries,
            "categories" => $categories,
            "totalItems" => $totalItems,
            "pagesCount" => $pagesCount,
            "page" => $page,
            "page_m" => $page,
        ));
    }


    public function addAction(Request $request) {

        $entry = new Entry();
        $form = $this->createForm(EntryType::class, $entry);

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {

                /* Añadimos una entrada */
                $em = $this->getDoctrine()->getEntityManager();
                $category_repo=$em->getRepository("BlogBundle:Category");
                $entry_repo=$em->getRepository("BlogBundle:Entry");
                
                
                $entry = new Entry();
                $entry->setTitle($form->get("title")->getData());
                $entry->setContent($form->get("content")->getData());
                $entry->setStatus($form->get("status")->getData());
                
                //Añadimos la imagen
                $file=$form["imagen"]->getData();
                 
                //Si $file no viene vacio "empty"
                if(!empty($file) && $file != NULL){
                    $ext=$file->guessExtension();
                    $file_name=time().".".$ext;
                    $file->move("uploads", $file_name);
                    $entry->setImagen($file_name);
                }else{
                    $entry->setImagen(NULL);
                }
                //Añadimos la categoria
                $category = $category_repo->find($form->get("category")->getData());
                $entry->setCategory($category);
                
                //Añadimos el usuario desde la session user
                $user=$this->getUser();
                $entry->setUser($user);
                
                $em->persist($entry);
                $flush = $em->flush();
                
                $entry_repo->saveEntryTags(
                        $form->get("tags")->getData(),
                        $form->get("title")->getData(),
                        $category,
                        $user
                     );
                
                
                if ($flush == NULL) {
                    $status = "La entrada se ha creado correctamente";
                    $css = "success";
                } else {
                    $status = "Error al añadir la entrada";
                    $css = "danger";
                }
                                 
            } else {
                $status = "La entrada no se ha creado porque el formulario no es valido!!";
                $css = "danger";
            }

            $this->session->getFlashBag()->add("status", array(
                "status"=>$status,
                "css"=>$css,
                ));
            return $this->redirectToRoute("blog_homepage");

        }

        return $this->render("BlogBundle:Entry:add.html.twig", array(
                    "form" => $form->createView(),
        ));
    }
    
    public function deleteAction($id)
    {
        /* Borramos una entrada */
        $em = $this->getDoctrine()->getEntityManager();
        $entry_repo=$em->getRepository("BlogBundle:Entry");
        $entry_tag_repo=$em->getRepository("BlogBundle:EntryTag");
        
        $entry=$entry_repo->find($id);
        
        $entry_tags = $entry_tag_repo->findBy(array("entry"=>$entry));
       //Boramos las etiquetas de las entradas
        foreach($entry_tags as $et)
            if(is_object($et))
            {
                $em->remove($et);
                $em->flush();
            }
        
        $em->remove($entry);
        $em->flush();    

        $this->session->getFlashBag()->add("status", array(
            "status"=>"La entrada ha sido borradara correctamente",
            "css"=>"warning",
         ));
        return $this->redirectToRoute("blog_homepage");        
    }
    
    public function editAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $entry_repo = $em->getRepository("BlogBundle:Entry");
        $category_repo = $em->getRepository("BlogBundle:Category");
      
        $entry = $entry_repo->find($id);
        $file_name = $entry->getImagen();
               
        $tags = array();
        //Recoger etiquetas
        foreach($entry->getEntryTag() as $entryTag)
        {
           array_push($tags, $entryTag->getTag()->getName());
        }
        
        
        
        
        $form = $this->createForm(EntryType::class, $entry);
        
        $form->handleRequest($request);
        
        if($form->isSubmitted())
        {
            if($form->isValid())
            {
                //No hace falta ponerlo, ya lo hace "createForm" y "handleRequest"
                /*
                $entry->setTitle($form->get("title")->getData());
                $entry->setContent($form->get("content")->getData());
                $entry->setStatus($form->get("status")->getData());
                 */
                
                //Añadimos la imagen
                $file=$form["imagen"]->getData();
                if(!empty($file) && $file != NULL)
                {
                    $ext=$file->guessExtension();
                    $file_name=time().".".$ext;
                    $file->move("uploads", $file_name);
                }else{
                    $entry->setImagen($file_name);
                }
                
                //Añadimos la categoria
                $category = $category_repo->find($form->get("category")->getData());
                $entry->setCategory($category);
               
                //Añadimos el usuario desde la session user
                $user=$this->getUser();
                $entry->setUser($user);
                
                $em->persist($entry);
                $flush = $em->flush();

                //Boramos las etiquetas anteriores
                $entry_tag_repo=$em->getRepository("BlogBundle:EntryTag");
                $entry=$entry_repo->find($id);
                        
                        
                $entry_tags = $entry_tag_repo->findBy(array("entry"=>$entry));
               //Boramos las etiquetas de las entradas
                foreach($entry_tags as $et)
                    if(is_object($et))
                    {
                        $em->remove($et);
                        $em->flush();
                    }

                
                    $entry_repo->saveEntryTags(
                        $form->get("tags")->getData(),
                        $form->get("title")->getData(),
                        $category,
                        $user
                     );
                
                if($flush==NULL)
                {
                   $status = "La entrada se ha editado correctamente";
                   $css = "success"; 
                }else{
                   $status = "La entrada se ha editado mal";
                   $css = "danger";
                }
                
            }else{
                $status = "El formulario no es valido";
                $css = "danger";
            }
            
            $this->session->getFlashBag()->add("status", array(
                "status"=>$status,
                "css"=>$css,
                ));
            return $this->redirectToRoute("blog_homepage");
        }
        
        return $this->render("BlogBundle:Entry:edit.html.twig", array(
            "form"=> $form->createView(),
            "entry"=> $entry,
            "tags"=> implode($tags,','),
        ));
    }

}
