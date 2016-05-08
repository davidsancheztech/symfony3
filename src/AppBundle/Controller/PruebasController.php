<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Curso;
use AppBundle\Form\CursoType;
use Symfony\Component\Validator\Constraints as Assert;

class PruebasController extends Controller {

    /**
     * "@"  Route("/pruebas-index2", name="PruebasIndex")
     */
    public function indexAction(Request $request, $lang, $name, $page) {
        //$this->generateUrl(name_Route)
        //$this->container->get("router")->getContext()->getBaseUrl()
        //return $this->redirect($request->getBaseUrl()."/hello-world?hola=true");
        //var_dump($request->query->get("hola"));
        //var_dump($request->get("hola-post"));
        //die();

        $productos = array(
            array('producto' => 'camiseta 1', 'precio' => '12'),
            array('producto' => 'camiseta 2', 'precio' => '23'),
            array('producto' => 'camiseta 3', 'precio' => '54'),
            array('producto' => 'camiseta 4', 'precio' => '31'),
            array('producto' => 'camiseta 5', 'precio' => '45'),
        );

        $fruta = array('manzana' => 'golden', 'pera' => 'rica');

        // replace this example code with whatever you need
        return $this->render('AppBundle:Pruebas:index.html.twig', [
                    'texto' => 'Idioma: ' . $lang . ' <br> Dime tu nombre ' . $name . ' - ' . $page,
                    'productos' => $productos,
                    'fruta' => $fruta,
        ]);
    }

    public function createAction() {
        $curso = new Cursos();
        $curso->setTitulo("Curso de Symfony3 de Victor Robles");
        $curso->setDescripcion("Curso completo de Symfony3");
        $curso->setPrecio("80");

        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($curso);
        $flush = $em->flush();


        if ($flush <> NULL) {
            echo "El curso no se ha creado bien";
        } else {
            echo "Este es tu curso: ";
            var_dump($flush);
        }
        die();
    }

    public function readAction() {
        $em = $this->getDoctrine()->getEntityManager();
        $curso = $em->getRepository("AppBundle:Cursos");
        $listCursos = $curso->findAll();



        //FINBY
        $listCursos = $curso->findBy(array('precio' => 35));

        //FINBY
        $listCursos = $curso->findOneByPrecio('35');
        echo $listCursos->getDescripcion() . '<br>';


        foreach ($listCursos as $curso) {
            echo $curso->getId() . '<br>';
            echo $curso->getTitulo() . '<br>';
            echo $curso->getDescripcion() . '<br>';
            echo $curso->getPrecio() . '<br><hr/>';
        }


        die();
    }

    public function nativeSqlAction() {
        $em = $this->getDoctrine()->getEntityManager();
        
        /*
          $db = $em->getConnection();
          $query = "SELECT * FROM CURSOS";

          $stmt = $db->prepare($query);
          $params = array();
          $stmt->execute($params);

          $crusos = $stmt->fetchAll();
          foreach($crusos as $curso)
          {
          echo  $curso['titulo'].'<hr/>';
          }
         */

         /*
        //DQL, QUERY PERSONALIZADAS 
        $query = $em->createQuery("
                SELECT c FROM AppBundle:Cursos c
                WHERE c.precio > :precio
               ")->setParameter("precio", "79");
        $cursos = $query->getResult();
        
        foreach ($cursos as $curso) {
           echo $curso->getId() . '<br>';
            echo $curso->getTitulo() . '<br>';
            echo $curso->getDescripcion() . '<br>';
            echo $curso->getPrecio() . '<br><hr/>';
        }
        */
        
       /* 
        //QUERY BUILDER
        $cursos_repo = $em->getRepository("AppBundle:Cursos");
        
        $query = $cursos_repo->createQueryBuilder("c")
                ->where("c.precio > :precio")
                ->setParameter("precio", "79")
                ->orderBy("c.descripcion", "DESC")
                ->getQuery();
         $cursos = $query->getResult();
        */
        
        
      
        $cursos_repo = $em->getRepository("AppBundle:Cursos");
        $cursos = $cursos_repo->getCursos();
       
        foreach ($cursos as $curso) {
           echo $curso->getId() . '<br>';
            echo $curso->getTitulo() . '<br>';
            echo $curso->getDescripcion() . '<br>';
            echo $curso->getPrecio() . '<br><hr/>';
        }
        
        die();
    }

    public function updateAction($id, $titulo, $descripcion, $precio) {
        $em = $this->getDoctrine()->getEntityManager();
        $cursos_repo = $em->getRepository("AppBundle:Cursos");

        $curso = $cursos_repo->find($id);
        $curso->setTitulo($titulo);
        $curso->setDescripcion($descripcion);
        $curso->setPrecio($precio);

        $em->persist($curso);
        $flush = $em->flush();

        if ($flush <> NULL) {
            echo 'El curso no se ha actualizado';
        } else {
            echo 'El curso se ha azutlizado correctamente';
            var_dump($flush);
        }
        die();
    }

    public function deleteAction($id) {
        $em = $this->getDoctrine()->getEntityManager();
        $cursos_repo = $em->getRepository("AppBundle:Cursos");

        $curso = $cursos_repo->find($id);

        $em->remove($curso);
        $flush = $em->flush();

        if ($flush) {
            echo 'El curso no se ha borrado';
        } else {
            echo 'El curso se ha borrado correctamente';
            var_dump($flush);
        }
        die();
    }

    public function formAction(Request $request)
    {
       $curso = new Curso();
       $form = $this->createForm(CursoType::class, $curso);
       
       $form->handleRequest($request);      
       if($form->isValid())
       {
           $status = "Formulario válido";
           $data = array(
               "titulo"=>$form->get("titulo")->getData(),
               "descripcion"=>$form->get("descripcion")->getData(),
               "precio"=>$form->get("precio")->getData(),
           );
       }else{
           $status = NULL;
           $data = NULL;
       }
               
      return $this->render('AppBundle:Pruebas:form.html.twig',
        array(
            'form'=>$form->createView(),
            'status'=> $status,
            'data'=> $data,
        ));  
    }
    
    public function validarEmailAction($email)
    {
        $emailConstraint = new Assert\Email();
        $emailConstraint->message = "Pasame un buen correo";
        
        $error = $this->get("validator")->validate(
                $email,
                $emailConstraint
                );
        if(count($error)==0)
        {
            echo "Correo valido";
        } else{
            var_dump($error);
        }
        die();
    }
}
