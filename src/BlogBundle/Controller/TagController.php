<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use BlogBundle\Entity\Tag;
use BlogBundle\Form\TagType;

class TagController extends Controller {

    private $session;

    public function __construct() {
        $this->session = new Session();
    }

    public function indexAction(Request $request) {
        /* Añadimos la etiqueta */
        $em = $this->getDoctrine()->getEntityManager();
        $tag_repo = $em->getRepository("BlogBundle:Tag");
        $tags = $tag_repo->findAll();


        return $this->render("BlogBundle:Tag:index.html.twig", array(
                    "tags" => $tags,
        ));
    }

    public function addAction(Request $request) {

        $tag = new Tag();
        $form = $this->createForm(TagType::class, $tag);

        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {

                /* Añadimos la etiqueta */
                $em = $this->getDoctrine()->getEntityManager();

                $tag = new tag();
                $tag->setName($form->get("name")->getData());
                $tag->setDescription($form->get("description")->getData());

                $em->persist($tag);
                $flush = $em->flush();

                if ($flush == NULL) {
                    $status = "La etiqueta se ha creado correctamente";
                    $css = "success";
                } else {
                    $status = "Error al añadir la etiqueta";
                    $css = "danger";
                }
            } else {
                $status = "La etiqueta no se ha creado porque el formulario no es valido!!";
                $css = "danger";
            }

            $this->session->getFlashBag()->add("status", array(
                "status"=>$status,
                "css"=>$css,
                ));
            return $this->redirectToRoute("blog_index_tag");
        }

        return $this->render("BlogBundle:Tag:add.html.twig", array(
                    "form" => $form->createView(),
        ));
    }

    public function deleteAction($id) {
        /* Borramos la etiqueta */
        $em = $this->getDoctrine()->getEntityManager();
        $tag_repo = $em->getRepository("BlogBundle:Tag");
        $tag = $tag_repo->find($id);

        if (count($tag->getEntryTag()) == 0) {
            $em->remove($tag);
            $em->flush();
        }else{

            $this->session->getFlashBag()->add("status", array(
                "status"=>"La etiqueta no se puede borrar",
                "css"=>"danger",
                ));
        }
        return $this->redirectToRoute("blog_index_tag");
    }

}
