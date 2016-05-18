<?php

/* BlogBundle::layout.html.twig */
class __TwigTemplate_a8ddbe280b897de9445d3bb8902a26a698cc054303bd5e6c6336d01d46997729 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'menu' => array($this, 'block_menu'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>
<html lang=\"es\">
    <head>
        <meta charset=\"utf-8\"/>
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\" rel=\"stylesheet\">
        <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>
    </head>
    <body>
        <header>
            <nav class=\"navbar navbar-default\">
                <div class=\"container-fluid\">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand\" href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("blog_homepage");
        echo "\">Blog Symfony3!!</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                        <ul class=\"nav navbar-nav\">
                            ";
        // line 28
        $this->displayBlock('menu', $context, $blocks);
        // line 31
        echo "                        </ul>
                        <ul class=\"nav navbar-nav navbar-right\">
                            <li>
                                <a href=\"#\">
                             ";
        // line 35
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) != null)) {
            // line 36
            echo "                                 Bienvenido, ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "surname", array()), "html", null, true);
            echo "
                             ";
        }
        // line 38
        echo "                                </a>
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><span class=\"glyphicon glyphicon-cog\"></span> <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\">
                                    ";
        // line 43
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) == null)) {
            // line 44
            echo "                                    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\">Entrar</a></li>
                                    ";
        } else {
            // line 46
            echo "                                    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("blog_add_entry");
            echo "\">Añadir entrada</a></li>
                                    <li><a href=\"";
            // line 47
            echo $this->env->getExtension('routing')->getPath("blog_index_tag");
            echo "\">Etiquetas</a></li>
                                    <li><a href=\"";
            // line 48
            echo $this->env->getExtension('routing')->getPath("blog_index_category");
            echo "\">Categorias</a></li>
                                    <li role=\"separator\" class=\"divider\"></li>
                                    <li><a href=\"";
            // line 50
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">Salir</a></li>
                                    ";
        }
        // line 52
        echo "                                    <li><a href=\"#\">Ayuda</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </header>
        <section id=\"content\">
            ";
        // line 61
        $this->displayBlock('content', $context, $blocks);
        // line 62
        echo "        </section>
        <footer>
            Curso de Symfony3 - David Sánchez &copy;
        </footer>
    </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Blog con Symfony3";
    }

    // line 28
    public function block_menu($context, array $blocks = array())
    {
        // line 29
        echo "                            ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("BlogBundle:Entry:Listcategories"));
        echo "                              
                            ";
    }

    // line 61
    public function block_content($context, array $blocks = array())
    {
        echo " Contenido default ";
    }

    public function getTemplateName()
    {
        return "BlogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 61,  140 => 29,  137 => 28,  131 => 5,  122 => 62,  120 => 61,  109 => 52,  104 => 50,  99 => 48,  95 => 47,  90 => 46,  84 => 44,  82 => 43,  75 => 38,  67 => 36,  65 => 35,  59 => 31,  57 => 28,  48 => 22,  28 => 5,  22 => 1,);
    }
}
/* <!DOCTYPE HTML>*/
/* <html lang="es">*/
/*     <head>*/
/*         <meta charset="utf-8"/>*/
/*         <title>{% block title %}Blog con Symfony3{% endblock %}</title>*/
/*         <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">*/
/*         <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>*/
/*         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>*/
/*     </head>*/
/*     <body>*/
/*         <header>*/
/*             <nav class="navbar navbar-default">*/
/*                 <div class="container-fluid">*/
/*                     <!-- Brand and toggle get grouped for better mobile display -->*/
/*                     <div class="navbar-header">*/
/*                         <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">*/
/*                             <span class="sr-only">Toggle navigation</span>*/
/*                             <span class="icon-bar"></span>*/
/*                             <span class="icon-bar"></span>*/
/*                             <span class="icon-bar"></span>*/
/*                         </button>*/
/*                         <a class="navbar-brand" href="{{ path("blog_homepage") }}">Blog Symfony3!!</a>*/
/*                     </div>*/
/* */
/*                     <!-- Collect the nav links, forms, and other content for toggling -->*/
/*                     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*                         <ul class="nav navbar-nav">*/
/*                             {% block menu %}*/
/*                             {{ render(controller('BlogBundle:Entry:Listcategories')) }}                              */
/*                             {% endblock %}*/
/*                         </ul>*/
/*                         <ul class="nav navbar-nav navbar-right">*/
/*                             <li>*/
/*                                 <a href="#">*/
/*                              {% if app.user != null %}*/
/*                                  Bienvenido, {{ app.user.name }} {{ app.user.surname }}*/
/*                              {% endif %}*/
/*                                 </a>*/
/*                             </li>*/
/*                             <li class="dropdown">*/
/*                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-cog"></span> <span class="caret"></span></a>*/
/*                                 <ul class="dropdown-menu">*/
/*                                     {% if app.user == null %}*/
/*                                     <li><a href="{{ path("login") }}">Entrar</a></li>*/
/*                                     {% else %}*/
/*                                     <li><a href="{{ path("blog_add_entry") }}">Añadir entrada</a></li>*/
/*                                     <li><a href="{{ path("blog_index_tag") }}">Etiquetas</a></li>*/
/*                                     <li><a href="{{ path("blog_index_category") }}">Categorias</a></li>*/
/*                                     <li role="separator" class="divider"></li>*/
/*                                     <li><a href="{{ path("logout") }}">Salir</a></li>*/
/*                                     {% endif %}*/
/*                                     <li><a href="#">Ayuda</a></li>*/
/*                                 </ul>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </div><!-- /.navbar-collapse -->*/
/*                 </div><!-- /.container-fluid -->*/
/*             </nav>*/
/*         </header>*/
/*         <section id="content">*/
/*             {% block content %} Contenido default {% endblock %}*/
/*         </section>*/
/*         <footer>*/
/*             Curso de Symfony3 - David Sánchez &copy;*/
/*         </footer>*/
/*     </body>*/
/* </html>*/
