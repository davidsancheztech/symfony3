<?php

/* AppBundle::layout.html.twig */
class __TwigTemplate_04b1f30afb592c11e4e4950ac145083d07b13e65da3ca1fc349840ff0c789108 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aca41f6bf691febc278001e1c8bf30fd466746a8c9dfc0d82d6bee78d3bc5e30 = $this->env->getExtension("native_profiler");
        $__internal_aca41f6bf691febc278001e1c8bf30fd466746a8c9dfc0d82d6bee78d3bc5e30->enter($__internal_aca41f6bf691febc278001e1c8bf30fd466746a8c9dfc0d82d6bee78d3bc5e30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle::layout.html.twig"));

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
                        <a class=\"navbar-brand\" href=\"#\">Blog Symfony3!!</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                        <ul class=\"nav navbar-nav\">
                            <li class=\"active\"><a href=\"#\">Link <span class=\"sr-only\">(current)</span></a></li>
                            <li><a href=\"#\">Link</a></li>
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"#\">Action</a></li>
                                    <li><a href=\"#\">Another action</a></li>
                                    <li><a href=\"#\">Something else here</a></li>
                                    <li role=\"separator\" class=\"divider\"></li>
                                    <li><a href=\"#\">Separated link</a></li>
                                    <li role=\"separator\" class=\"divider\"></li>
                                    <li><a href=\"#\">One more separated link</a></li>
                                </ul>
                            </li>
                        </ul>
                        <form class=\"navbar-form navbar-left\" role=\"search\">
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
                            </div>
                            <button type=\"submit\" class=\"btn btn-default\">Submit</button>
                        </form>
                        <ul class=\"nav navbar-nav navbar-right\">
                            <li><a href=\"#\">Link</a></li>
                            <li class=\"dropdown\">
                                <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown <span class=\"caret\"></span></a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"#\">Action</a></li>
                                    <li><a href=\"#\">Another action</a></li>
                                    <li><a href=\"#\">Something else here</a></li>
                                    <li role=\"separator\" class=\"divider\"></li>
                                    <li><a href=\"#\">Separated link</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
        </header>
        <section id=\"content\">
            ";
        // line 67
        $this->displayBlock('content', $context, $blocks);
        // line 68
        echo "        </section>
        <footer>
            Curso de Symfony3 - David Sánchez &copy;
        </footer>
    </body>
</html>";
        
        $__internal_aca41f6bf691febc278001e1c8bf30fd466746a8c9dfc0d82d6bee78d3bc5e30->leave($__internal_aca41f6bf691febc278001e1c8bf30fd466746a8c9dfc0d82d6bee78d3bc5e30_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4c133c46b6f8c138d6f0fa9a6d4a4d345fba7ae6f388b8db42d7ae456f4ab3d0 = $this->env->getExtension("native_profiler");
        $__internal_4c133c46b6f8c138d6f0fa9a6d4a4d345fba7ae6f388b8db42d7ae456f4ab3d0->enter($__internal_4c133c46b6f8c138d6f0fa9a6d4a4d345fba7ae6f388b8db42d7ae456f4ab3d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Blog con Symfony3";
        
        $__internal_4c133c46b6f8c138d6f0fa9a6d4a4d345fba7ae6f388b8db42d7ae456f4ab3d0->leave($__internal_4c133c46b6f8c138d6f0fa9a6d4a4d345fba7ae6f388b8db42d7ae456f4ab3d0_prof);

    }

    // line 67
    public function block_content($context, array $blocks = array())
    {
        $__internal_f0871296bbdf70c1fe68dc239a3c26d6e4e86afc6cd4cd117a84bd7870089e16 = $this->env->getExtension("native_profiler");
        $__internal_f0871296bbdf70c1fe68dc239a3c26d6e4e86afc6cd4cd117a84bd7870089e16->enter($__internal_f0871296bbdf70c1fe68dc239a3c26d6e4e86afc6cd4cd117a84bd7870089e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo " Contenido default ";
        
        $__internal_f0871296bbdf70c1fe68dc239a3c26d6e4e86afc6cd4cd117a84bd7870089e16->leave($__internal_f0871296bbdf70c1fe68dc239a3c26d6e4e86afc6cd4cd117a84bd7870089e16_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  121 => 67,  109 => 5,  97 => 68,  95 => 67,  30 => 5,  24 => 1,);
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
/*                         <a class="navbar-brand" href="#">Blog Symfony3!!</a>*/
/*                     </div>*/
/* */
/*                     <!-- Collect the nav links, forms, and other content for toggling -->*/
/*                     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*                         <ul class="nav navbar-nav">*/
/*                             <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>*/
/*                             <li><a href="#">Link</a></li>*/
/*                             <li class="dropdown">*/
/*                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>*/
/*                                 <ul class="dropdown-menu">*/
/*                                     <li><a href="#">Action</a></li>*/
/*                                     <li><a href="#">Another action</a></li>*/
/*                                     <li><a href="#">Something else here</a></li>*/
/*                                     <li role="separator" class="divider"></li>*/
/*                                     <li><a href="#">Separated link</a></li>*/
/*                                     <li role="separator" class="divider"></li>*/
/*                                     <li><a href="#">One more separated link</a></li>*/
/*                                 </ul>*/
/*                             </li>*/
/*                         </ul>*/
/*                         <form class="navbar-form navbar-left" role="search">*/
/*                             <div class="form-group">*/
/*                                 <input type="text" class="form-control" placeholder="Search">*/
/*                             </div>*/
/*                             <button type="submit" class="btn btn-default">Submit</button>*/
/*                         </form>*/
/*                         <ul class="nav navbar-nav navbar-right">*/
/*                             <li><a href="#">Link</a></li>*/
/*                             <li class="dropdown">*/
/*                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>*/
/*                                 <ul class="dropdown-menu">*/
/*                                     <li><a href="#">Action</a></li>*/
/*                                     <li><a href="#">Another action</a></li>*/
/*                                     <li><a href="#">Something else here</a></li>*/
/*                                     <li role="separator" class="divider"></li>*/
/*                                     <li><a href="#">Separated link</a></li>*/
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
