<?php

/* ::layout.html.twig */
class __TwigTemplate_3eda55077b5675938617d183b8979603a8bb21fe96bcdd925a752263d9bc5efe extends Twig_Template
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
        $__internal_3f5195b8b58528a14d9862074c5f67b11549b2445d3b706a11b11074aef0cbf5 = $this->env->getExtension("native_profiler");
        $__internal_3f5195b8b58528a14d9862074c5f67b11549b2445d3b706a11b11074aef0cbf5->enter($__internal_3f5195b8b58528a14d9862074c5f67b11549b2445d3b706a11b11074aef0cbf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

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
        
        $__internal_3f5195b8b58528a14d9862074c5f67b11549b2445d3b706a11b11074aef0cbf5->leave($__internal_3f5195b8b58528a14d9862074c5f67b11549b2445d3b706a11b11074aef0cbf5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a6286a2513137457ec644a5ab3ccabc45551a10e88b395de15f9312a3f847571 = $this->env->getExtension("native_profiler");
        $__internal_a6286a2513137457ec644a5ab3ccabc45551a10e88b395de15f9312a3f847571->enter($__internal_a6286a2513137457ec644a5ab3ccabc45551a10e88b395de15f9312a3f847571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "LAYOUT!";
        
        $__internal_a6286a2513137457ec644a5ab3ccabc45551a10e88b395de15f9312a3f847571->leave($__internal_a6286a2513137457ec644a5ab3ccabc45551a10e88b395de15f9312a3f847571_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_687a9ffb31d663c95b5555ef81ad32b4485adcc9173e63d93527b77517f37cce = $this->env->getExtension("native_profiler");
        $__internal_687a9ffb31d663c95b5555ef81ad32b4485adcc9173e63d93527b77517f37cce->enter($__internal_687a9ffb31d663c95b5555ef81ad32b4485adcc9173e63d93527b77517f37cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_687a9ffb31d663c95b5555ef81ad32b4485adcc9173e63d93527b77517f37cce->leave($__internal_687a9ffb31d663c95b5555ef81ad32b4485adcc9173e63d93527b77517f37cce_prof);

    }

    // line 20
    public function block_container($context, array $blocks = array())
    {
        $__internal_b7ba8a628b6d2a44e21ec21562d67205eea2f75d031590eae9b8536439218b76 = $this->env->getExtension("native_profiler");
        $__internal_b7ba8a628b6d2a44e21ec21562d67205eea2f75d031590eae9b8536439218b76->enter($__internal_b7ba8a628b6d2a44e21ec21562d67205eea2f75d031590eae9b8536439218b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 21
        echo "                Contenido por defecto
            ";
        
        $__internal_b7ba8a628b6d2a44e21ec21562d67205eea2f75d031590eae9b8536439218b76->leave($__internal_b7ba8a628b6d2a44e21ec21562d67205eea2f75d031590eae9b8536439218b76_prof);

    }

    // line 24
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ad0f6f840d0dca44adce3e0ac7b417c8b85e9c889c4a8bc4561d59205c3b522b = $this->env->getExtension("native_profiler");
        $__internal_ad0f6f840d0dca44adce3e0ac7b417c8b85e9c889c4a8bc4561d59205c3b522b->enter($__internal_ad0f6f840d0dca44adce3e0ac7b417c8b85e9c889c4a8bc4561d59205c3b522b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ad0f6f840d0dca44adce3e0ac7b417c8b85e9c889c4a8bc4561d59205c3b522b->leave($__internal_ad0f6f840d0dca44adce3e0ac7b417c8b85e9c889c4a8bc4561d59205c3b522b_prof);

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
        return array (  108 => 24,  100 => 21,  94 => 20,  83 => 6,  71 => 5,  62 => 25,  60 => 24,  57 => 23,  55 => 20,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
