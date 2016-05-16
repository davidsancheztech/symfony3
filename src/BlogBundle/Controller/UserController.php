<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;
use BlogBundle\Entity\User;
use BlogBundle\Form\UserType;


class UserController extends Controller 
{
    private $session;
    
    public function __construct() {
        $this->session= new Session();
    }

    public function loginAction(Request $request)
    {
        $authenticationUtils = $this->get("security.authentication_utils");
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUserName = $authenticationUtils->getLastUsername();
        
        //CREAMOS EL FORMULARIO DE REGISTRO
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
       
       $form->handleRequest($request); 
       
       if($form->isSubmitted())
       {
            if($form->isValid())
            {
                //Comprobar si el email ya existe
                $em=$this->getDoctrine()->getEntityManager();
                $user_repo=$em->getRepository("BlogBundle:User");
                $user = $user_repo->findOneBy(array("email"=>$form->get("email")->getData()));
                        
                if(count($user)==0)
                {
                    $user = new User();
                    $user->setName($form->get("name")->getData());
                    $user->setSurname($form->get("surname")->getData());
                    $user->setEmail($form->get("email")->getData());

                    //Cifrado de contaseña "config/security.ytml"
                    $factory = $this->get("security.encoder_factory");
                    $encoder = $factory->getEncoder($user);
                    $password = $encoder->encodePassword($form->get("password")->getData(), $user->getSalt());

                    $user->setPassword($password);
                    $user->setRole("ROLE_USER");
                    $user->setImagen(NULL);   

                    $em = $this->getDoctrine()->getEntityManager();
                    $em->persist($user);
                    $flush = $em->flush();

                    if($flush==NULL)
                    {
                         $status = "El usuario se ha creado correctamente";
                          $css = "success";
                    }else{
                         $status = "No te has registrado correctamente";
                         $css = "danger";
                    }

                    $status = "El usuario se ha creado correctamente";
                    $css = "success";

                }else{
                    $status = "El usuario ya existe!!!";
                    $css = "danger";
                }
            }else{
                $status = "No te has registrado correctamente";
                 $css = "danger";
            }

            $this->session->getFlashBag()->add("status", array(
                "status"=>$status,
                "css"=>$css,
                ));
       }
       
        return $this->render("BlogBundle:user:login.html.twig", array(
            "error"=>$error,
            "last_username"=> $lastUserName,
            "form"=> $form->createView(),
        ));
    }
}
