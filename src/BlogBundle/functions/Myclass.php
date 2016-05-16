<?php

namespace BlogBundle\functions;

use BlogBundle\functions\Prueba;

class Myclass extends Prueba
{
    public function MyFunction()
    {
        return prueba::MyFunctionPrueba();
    }
 
}