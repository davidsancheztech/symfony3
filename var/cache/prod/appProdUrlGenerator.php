<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BlogBundle\\Controller\\UserController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'blog_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BlogBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'blog_index_tag' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BlogBundle\\Controller\\TagController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/tags',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'blog_add_tag' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BlogBundle\\Controller\\TagController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/tags/add',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'blog_delete_tag' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'BlogBundle\\Controller\\TagController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/tags/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'blog_index_category' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BlogBundle\\Controller\\CategoryController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/categories',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'blog_add_category' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BlogBundle\\Controller\\CategoryController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/categories/add/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'blog_delete_category' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'BlogBundle\\Controller\\CategoryController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/categories/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'blog_edit_category' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'BlogBundle\\Controller\\CategoryController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/categories/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'blog_add_entry' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'BlogBundle\\Controller\\EntryController::addAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/entries/add/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mi_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MiBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/mi-bundle',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pruebas_index' => array (  0 =>   array (    0 => 'lang',    1 => 'name',    2 => 'page',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PruebasController::indexAction',    'lang' => 'es',    'name' => 'nombre_por_defecto',    'page' => 1,  ),  2 =>   array (    'name' => '[a-zA-Z]*',    'page' => '\\d+',    'lang' => 'es|en|fr',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'page',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[a-zA-Z]*',      3 => 'name',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => 'es|en|fr',      3 => 'lang',    ),    3 =>     array (      0 => 'text',      1 => '/pruebas',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pruebas_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PruebasController::createAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/pruebas/create',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pruebas_read' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PruebasController::readAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/pruebas/read',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pruebas_update' => array (  0 =>   array (    0 => 'id',    1 => 'titulo',    2 => 'descripcion',    3 => 'precio',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PruebasController::updateAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'precio',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'descripcion',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'titulo',    ),    3 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    4 =>     array (      0 => 'text',      1 => '/pruebas/update',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pruebas_detele' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PruebasController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/pruebas/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pruebas_native' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PruebasController::nativeSqlAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/pruebas/native',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pruebas_form' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PruebasController::formAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/pruebas/form',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'pruebas_validate_email' => array (  0 =>   array (    0 => 'email',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PruebasController::validarEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'email',    ),    1 =>     array (      0 => 'text',      1 => '/pruebas/validar-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'helloWorld' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::helloWorldAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/hello-world',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
