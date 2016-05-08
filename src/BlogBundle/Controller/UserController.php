<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use BlogBundle\Entity\User;
use BlogBundle\Form\UserType;

class UserController extends Controller {

    public function loginAction(Request $request)
    {
        $authenticationUtils = $this->get("security.authentication_utils");
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUserName = $authenticationUtils->getLastUsername();
        
        //CREAMOS EL FORMULARIO DE REGISTRO
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
       
       $form->handleRequest($request);      
       if($form->isValid())
       {
           $user = new User();
           $user->setName($form->get("name")->getData());
           $user->setSurname($form->get("surname")->getData());
           $user->setEmail($form->get("email")->getData());
           $user->setPassword($form->get("password")->getData());
           $user->setRole("ROLE_USER");
           $user->setImagen(NULL);
           
           $em = $this->getDoctrine()->getEntityManager();
           $em->persist($user);
           $flush = $em->flush();
           
           if($flush==NULL)
           {
                $status = "El usuario se ha creado correctamente";
           }else{
                $status = "No te has registrado correctamente";
           }
           
           $status = "El usuario se ha creado correctamente";
           
       }else{
           $status = "No te has registrado correctamente";
       }
       
       
        return $this->render("BlogBundle:user:login.html.twig", array(
            "error"=>$error,
            "last_username"=> $lastUserName,
            "form"=> $form->createView(),
        ));
    }
}
