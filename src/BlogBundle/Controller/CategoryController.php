<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use BlogBundle\Entity\Category;
use BlogBundle\Form\CategoryType;

class CategoryController extends Controller {

    private $session;

    public function __construct() {
        $this->session = new Session();
    }

    public function indexAction(Request $request) {
        /* Añadimos la etiqueta */
        $em = $this->getDoctrine()->getEntityManager();
        $category_repo = $em->getRepository("BlogBundle:Category");
        $categories = $category_repo->findAll();


        return $this->render("BlogBundle:Category:index.html.twig", array(
                    "categories" => $categories,
        ));
    }

    public function addAction(Request $request) {

        $category = new Category();
        $form = $this->createForm(CategoryType::class, $category);

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {

                /* Añadimos la etiqueta */
                $em = $this->getDoctrine()->getEntityManager();

                $category = new Category();
                $category->setName($form->get("name")->getData());
                $category->setDescription($form->get("description")->getData());

                $em->persist($category);
                $flush = $em->flush();

                if ($flush == NULL) {
                    $status = "La categoria se ha creado correctamente";
                    $css = "success";
                } else {
                    $status = "Error al añadir la categoria";
                    $css = "danger";
                }
            } else {
                $status = "La categoria no se ha creado porque el formulario no es valido!!";
                $css = "danger";
            }

            $this->session->getFlashBag()->add("status", array(
                "status"=>$status,
                "css"=>$css,
                ));
            return $this->redirectToRoute("blog_index_category");
        }

        return $this->render("BlogBundle:Category:add.html.twig", array(
                    "form" => $form->createView(),
        ));
    }

    public function deleteAction($id) {
        /* Borramos la categoria */
        $em = $this->getDoctrine()->getEntityManager();
        $category_repo = $em->getRepository("BlogBundle:Category");
        $category = $category_repo->find($id);

        if (count($category->getEntries()) == 0) {
            $em->remove($category);
            $em->flush();
        }else{

            $this->session->getFlashBag()->add("status", array(
                "status"=>"La categoria no se puede borrar",
                "css"=>"danger",
                ));
        }
        return $this->redirectToRoute("blog_index_category");
    }

    public function editAction(Request $request, $id)
    {
         /* Editamos la categoria */
        $em = $this->getDoctrine()->getEntityManager();
        $category_repo = $em->getRepository("BlogBundle:Category");
        $category = $category_repo->find($id);
        
        $form = $this->createForm(CategoryType::class, $category);
        
        $form->handleRequest($request);
        
        if ($form->isSubmitted()) {
            if ($form->isValid()) {

                $category->setName($form->get("name")->getData());
                $category->setDescription($form->get("description")->getData());

                $em->persist($category);
                $flush = $em->flush();

                if ($flush == NULL) {
                    $status = "La categoria se ha editado correctamente";
                    $css = "success";
                } else {
                    $status = "Error al editar la categoria";
                    $css = "danger";
                }
            } else {
                $status = "La categoria no se ha editado porque el formulario no es valido!!";
                $css = "danger";
            }

            $this->session->getFlashBag()->add("status", array(
                "status"=>$status,
                "css"=>$css,
                ));
            return $this->redirectToRoute("blog_index_category");
        }
        
        return $this->render("BlogBundle:Category:edit.html.twig", array(
                    "form" => $form->createView(),
        ));
    }
    
    public function categoryAction($id, $page)
    {
        $em = $this->getDoctrine()->getEntityManager();
        $category_repo = $em->getRepository("BlogBundle:Category");
        $category = $category_repo->find($id); 
        
        $pageSize = 5;
        $entry_repo = $em->getRepository("BlogBundle:Entry");
        $entries =  $entry_repo->getCategoryEntries($category, $pageSize, $page);
        
        $totalItems = count($entries);
        $pagesCount = ceil($totalItems/$pageSize);
        
        return $this->render("BlogBundle:Category:category.html.twig", array(
            "category" => $category,
            "entries" => $entries,
            "totalItems" => $totalItems,
            "pagesCount" => $pagesCount,
            "page" => $page,
            "page_m" => $page,
        ));
    }
}
