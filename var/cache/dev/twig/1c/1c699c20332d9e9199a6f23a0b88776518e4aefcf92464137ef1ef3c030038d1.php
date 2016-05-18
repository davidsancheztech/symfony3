<?php

/* ::layout.html.twig */
class __TwigTemplate_7dbee208d190b8ff75d2c7c4d062b9fb8dbfe7585b22c038915478ee2f0d7882 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'container' => array($this, 'block_container'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <style>
            .container
            {
                border: 1px solid black;
                width: 85%;
                min-height: 300px;
                background: #ccc;
            }
        </style>
    </head>
    <body>
        <div class=\"container\">
            ";
        // line 20
        $this->displayBlock('container', $context, $blocks);
        // line 23
        echo "        </div>
        ";
        // line 24
        $this->displayBlock('javascripts', $context, $blocks);
        // line 25
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "LAYOUT!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 20
    public function block_container($context, array $blocks = array())
    {
        // line 21
        echo "                Contenido por defecto
            ";
    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 24,  79 => 21,  76 => 20,  71 => 6,  65 => 5,  59 => 25,  57 => 24,  54 => 23,  52 => 20,  35 => 7,  33 => 6,  29 => 5,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}LAYOUT!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         <style>*/
/*             .container*/
/*             {*/
/*                 border: 1px solid black;*/
/*                 width: 85%;*/
/*                 min-height: 300px;*/
/*                 background: #ccc;*/
/*             }*/
/*         </style>*/
/*     </head>*/
/*     <body>*/
/*         <div class="container">*/
/*             {% block container %}*/
/*                 Contenido por defecto*/
/*             {% endblock %}*/
/*         </div>*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
