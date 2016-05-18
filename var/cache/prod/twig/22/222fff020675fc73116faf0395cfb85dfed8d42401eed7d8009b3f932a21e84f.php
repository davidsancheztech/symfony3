<?php

/* BlogBundle:Default:index.html.twig */
class __TwigTemplate_290e1e2d7336b6d79bc7042c4f0506799a5b910ae025303ee32ee59da88b8c19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogBundle::layout.html.twig", "BlogBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cdad2d8d4bb110610926720b6eeeea9b39a80d4a83ededf2662e970380109e0b = $this->env->getExtension("native_profiler");
        $__internal_cdad2d8d4bb110610926720b6eeeea9b39a80d4a83ededf2662e970380109e0b->enter($__internal_cdad2d8d4bb110610926720b6eeeea9b39a80d4a83ededf2662e970380109e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cdad2d8d4bb110610926720b6eeeea9b39a80d4a83ededf2662e970380109e0b->leave($__internal_cdad2d8d4bb110610926720b6eeeea9b39a80d4a83ededf2662e970380109e0b_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_be2259aeac6bb8acb21b05f8d731564527e39e80a4b2e8fbeed5771d9f8a7399 = $this->env->getExtension("native_profiler");
        $__internal_be2259aeac6bb8acb21b05f8d731564527e39e80a4b2e8fbeed5771d9f8a7399->enter($__internal_be2259aeac6bb8acb21b05f8d731564527e39e80a4b2e8fbeed5771d9f8a7399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<h1>Hello World!</h1>
";
        
        $__internal_be2259aeac6bb8acb21b05f8d731564527e39e80a4b2e8fbeed5771d9f8a7399->leave($__internal_be2259aeac6bb8acb21b05f8d731564527e39e80a4b2e8fbeed5771d9f8a7399_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "BlogBundle::layout.html.twig" %}*/
/* */
/* {% block content %}*/
/* <h1>Hello World!</h1>*/
/* {% endblock %}*/
/* */
