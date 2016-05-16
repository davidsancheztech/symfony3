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
                $ext=$file->guessExtension();
                $file_name=time().".".$ext;
                $file->move("uploads", $file_name);
                $entry->setImagen($file_name);
                
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
            //return $this->redirectToRoute("blog_index_category");

        }

        return $this->render("BlogBundle:Entry:add.html.twig", array(
                    "form" => $form->createView(),
        ));
    }

}
