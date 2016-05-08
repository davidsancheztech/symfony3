<?php
namespace AppBundle\Repository;

class CursoRepository extends \Doctrine\ORM\EntityRepository
{
    public function getCursos()
    {
        echo 'aaa'; die();
        /*
        $em = $this->getEntityManager();
        $query = $this->createQueryBuilder("c")
                ->where("c.precio > :precio")
                ->setParameter("precio", "79")
                ->orderBy("c.descripcion", "DESC")
                ->getQuery();
         $cursos = $query->getResult();
         return $cursos;
                  */
    }
}
