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
        $__internal_fd4a90876e4d9118e90b681151bc69999a0ebd78042bfd9375a633aa57f0ad77 = $this->env->getExtension("native_profiler");
        $__internal_fd4a90876e4d9118e90b681151bc69999a0ebd78042bfd9375a633aa57f0ad77->enter($__internal_fd4a90876e4d9118e90b681151bc69999a0ebd78042bfd9375a633aa57f0ad77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle::layout.html.twig"));

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
                                    <li role=\"separator\" class=\"divider\"></li>
                                    <li><a href=\"";
            // line 49
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\">Salir</a></li>
                                    ";
        }
        // line 51
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
        // line 60
        $this->displayBlock('content', $context, $blocks);
        // line 61
        echo "        </section>
        <footer>
            Curso de Symfony3 - David Sánchez &copy;
        </footer>
    </body>
</html>";
        
        $__internal_fd4a90876e4d9118e90b681151bc69999a0ebd78042bfd9375a633aa57f0ad77->leave($__internal_fd4a90876e4d9118e90b681151bc69999a0ebd78042bfd9375a633aa57f0ad77_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6ab8344e04040b49cb8be30910ec01534e1c0840c957ec9500420133243031ff = $this->env->getExtension("native_profiler");
        $__internal_6ab8344e04040b49cb8be30910ec01534e1c0840c957ec9500420133243031ff->enter($__internal_6ab8344e04040b49cb8be30910ec01534e1c0840c957ec9500420133243031ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Blog con Symfony3";
        
        $__internal_6ab8344e04040b49cb8be30910ec01534e1c0840c957ec9500420133243031ff->leave($__internal_6ab8344e04040b49cb8be30910ec01534e1c0840c957ec9500420133243031ff_prof);

    }

    // line 28
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d4a520161bdae303158c5cac6d662fbd37549ebfaaa2cea7a0f3ca075366c5f4 = $this->env->getExtension("native_profiler");
        $__internal_d4a520161bdae303158c5cac6d662fbd37549ebfaaa2cea7a0f3ca075366c5f4->enter($__internal_d4a520161bdae303158c5cac6d662fbd37549ebfaaa2cea7a0f3ca075366c5f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 29
        echo "                            <li class=\"active\"><a href=\"#\">Link <span class=\"sr-only\">(current)</span></a></li>
                            <li><a href=\"#\">Link</a></li>
                            ";
        
        $__internal_d4a520161bdae303158c5cac6d662fbd37549ebfaaa2cea7a0f3ca075366c5f4->leave($__internal_d4a520161bdae303158c5cac6d662fbd37549ebfaaa2cea7a0f3ca075366c5f4_prof);

    }

    // line 60
    public function block_content($context, array $blocks = array())
    {
        $__internal_acf3467ee2d78ae886466837c6b7a7bcdcb4bd7c16c5a22515618c153a46a0d5 = $this->env->getExtension("native_profiler");
        $__internal_acf3467ee2d78ae886466837c6b7a7bcdcb4bd7c16c5a22515618c153a46a0d5->enter($__internal_acf3467ee2d78ae886466837c6b7a7bcdcb4bd7c16c5a22515618c153a46a0d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo " Contenido default ";
        
        $__internal_acf3467ee2d78ae886466837c6b7a7bcdcb4bd7c16c5a22515618c153a46a0d5->leave($__internal_acf3467ee2d78ae886466837c6b7a7bcdcb4bd7c16c5a22515618c153a46a0d5_prof);

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
        return array (  156 => 60,  147 => 29,  141 => 28,  129 => 5,  117 => 61,  115 => 60,  104 => 51,  99 => 49,  93 => 47,  87 => 45,  85 => 44,  78 => 39,  70 => 37,  68 => 36,  62 => 32,  60 => 28,  51 => 22,  31 => 5,  25 => 1,);
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
