<?php

/* BlogBundle:Category:add.html.twig */
class __TwigTemplate_f60516b2f9925ff7ec5fbb31bc8a5a4826c39f0965e8c1d8cba93ae8aac9c2f1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogBundle::layout.html.twig", "BlogBundle:Category:add.html.twig", 1);
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
        $__internal_b5311a06a94a5221ddab1e0ca480bef3133d5987c6ee843d4d8c96aabc0a3efb = $this->env->getExtension("native_profiler");
        $__internal_b5311a06a94a5221ddab1e0ca480bef3133d5987c6ee843d4d8c96aabc0a3efb->enter($__internal_b5311a06a94a5221ddab1e0ca480bef3133d5987c6ee843d4d8c96aabc0a3efb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Category:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5311a06a94a5221ddab1e0ca480bef3133d5987c6ee843d4d8c96aabc0a3efb->leave($__internal_b5311a06a94a5221ddab1e0ca480bef3133d5987c6ee843d4d8c96aabc0a3efb_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_c6beaca0dd3719a70193a6bee509691a5acd8a45f4c29ce02282582fe9b71466 = $this->env->getExtension("native_profiler");
        $__internal_c6beaca0dd3719a70193a6bee509691a5acd8a45f4c29ce02282582fe9b71466->enter($__internal_c6beaca0dd3719a70193a6bee509691a5acd8a45f4c29ce02282582fe9b71466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <div class=\"col-lg-6\">
        <h2>Añadir categorias</h2>
        ";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
        <div class=\"clearfix\"></div>
";
        
        $__internal_c6beaca0dd3719a70193a6bee509691a5acd8a45f4c29ce02282582fe9b71466->leave($__internal_c6beaca0dd3719a70193a6bee509691a5acd8a45f4c29ce02282582fe9b71466_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Category:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 6,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "BlogBundle::layout.html.twig" %}*/
/* {% block content %}*/
/*     <div class="col-lg-6">*/
/*         <h2>Añadir categorias</h2>*/
/*         {{ form_start(form) }}*/
/*         {{ form_end(form) }}*/
/*     </div>*/
/*         <div class="clearfix"></div>*/
/* {% endblock %}*/
/* */
