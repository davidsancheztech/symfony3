<?php

/* BlogBundle::layout.html.twig */
class __TwigTemplate_aee5d60852576460167f109160dfaad4b09b6f2560bcbabd45b3eb4eddfc09b3 extends Twig_Template
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
        $__internal_2a7ada6ad6d2214c734e5f7c2a681e23f8b180fbbb3e681fa75be6d23ef4d4bb = $this->env->getExtension("native_profiler");
        $__internal_2a7ada6ad6d2214c734e5f7c2a681e23f8b180fbbb3e681fa75be6d23ef4d4bb->enter($__internal_2a7ada6ad6d2214c734e5f7c2a681e23f8b180fbbb3e681fa75be6d23ef4d4bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle::layout.html.twig"));

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
        // line 32
        echo "                        </ul>
                        <ul class=\"nav navbar-nav navbar-right\">
                            <li>
                                <a href=\"#\">
                             ";
        // line 36
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) != null)) {
            // line 37
            echo "                                 Bienvenido, ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "name", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "surname", array()), "html", null, true);
            echo "
                             ";
        }
        // line 39
        echo "                                </a>
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><span class=\"glyphicon glyphicon-cog\"></span> <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\">
                                    ";
        // line 44
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) == null)) {
            // line 45
            echo "                                    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\">Entrar</a></li>
                                    ";
        } else {
            // line 47
            echo "                                    <li><a href=\"";
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
        
        $__internal_2a7ada6ad6d2214c734e5f7c2a681e23f8b180fbbb3e681fa75be6d23ef4d4bb->leave($__internal_2a7ada6ad6d2214c734e5f7c2a681e23f8b180fbbb3e681fa75be6d23ef4d4bb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e0be71d378c6f6ed62472b64db28d0d5a5e3b582dc3891c34e91b1dba45df7ea = $this->env->getExtension("native_profiler");
        $__internal_e0be71d378c6f6ed62472b64db28d0d5a5e3b582dc3891c34e91b1dba45df7ea->enter($__internal_e0be71d378c6f6ed62472b64db28d0d5a5e3b582dc3891c34e91b1dba45df7ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Blog con Symfony3";
        
        $__internal_e0be71d378c6f6ed62472b64db28d0d5a5e3b582dc3891c34e91b1dba45df7ea->leave($__internal_e0be71d378c6f6ed62472b64db28d0d5a5e3b582dc3891c34e91b1dba45df7ea_prof);

    }

    // line 28
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6ff5ef7465c000a8fb418fe6d77438ed7da7adc2ebd9c77a2bb3b21e9c2fa0fd = $this->env->getExtension("native_profiler");
        $__internal_6ff5ef7465c000a8fb418fe6d77438ed7da7adc2ebd9c77a2bb3b21e9c2fa0fd->enter($__internal_6ff5ef7465c000a8fb418fe6d77438ed7da7adc2ebd9c77a2bb3b21e9c2fa0fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 29
        echo "                            <li class=\"active\"><a href=\"#\">Link <span class=\"sr-only\">(current)</span></a></li>
                            <li><a href=\"#\">Link</a></li>
                            ";
        
        $__internal_6ff5ef7465c000a8fb418fe6d77438ed7da7adc2ebd9c77a2bb3b21e9c2fa0fd->leave($__internal_6ff5ef7465c000a8fb418fe6d77438ed7da7adc2ebd9c77a2bb3b21e9c2fa0fd_prof);

    }

    // line 61
    public function block_content($context, array $blocks = array())
    {
        $__internal_b41f3e10a0974f4c7e15c4d105b7a6a0a7ec95fc16ad1f0b1f5d1fc92eda5de3 = $this->env->getExtension("native_profiler");
        $__internal_b41f3e10a0974f4c7e15c4d105b7a6a0a7ec95fc16ad1f0b1f5d1fc92eda5de3->enter($__internal_b41f3e10a0974f4c7e15c4d105b7a6a0a7ec95fc16ad1f0b1f5d1fc92eda5de3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo " Contenido default ";
        
        $__internal_b41f3e10a0974f4c7e15c4d105b7a6a0a7ec95fc16ad1f0b1f5d1fc92eda5de3->leave($__internal_b41f3e10a0974f4c7e15c4d105b7a6a0a7ec95fc16ad1f0b1f5d1fc92eda5de3_prof);

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
        return array (  160 => 61,  151 => 29,  145 => 28,  133 => 5,  121 => 62,  119 => 61,  108 => 52,  103 => 50,  98 => 48,  93 => 47,  87 => 45,  85 => 44,  78 => 39,  70 => 37,  68 => 36,  62 => 32,  60 => 28,  51 => 22,  31 => 5,  25 => 1,);
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
/*                             <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>*/
/*                             <li><a href="#">Link</a></li>*/
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
/*                                     <li><a href="{{ path("blog_index_tag") }}">Etiquetas</a></li>*/
/*                                      <li><a href="{{ path("blog_index_category") }}">Categorias</a></li>*/
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
