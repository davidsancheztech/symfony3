<?php

/* BlogBundle:Entry:add.html.twig */
class __TwigTemplate_a97fb857ba6a59942d3c8ab936cad9ee61a09084dfc513f2a0c1116a31b394ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogBundle::layout.html.twig", "BlogBundle:Entry:add.html.twig", 1);
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
        $__internal_cfffddbb2cfbfbe7adb49197b6fa23ce2b17e57bff79578b454e4be38e34407e = $this->env->getExtension("native_profiler");
        $__internal_cfffddbb2cfbfbe7adb49197b6fa23ce2b17e57bff79578b454e4be38e34407e->enter($__internal_cfffddbb2cfbfbe7adb49197b6fa23ce2b17e57bff79578b454e4be38e34407e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Entry:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cfffddbb2cfbfbe7adb49197b6fa23ce2b17e57bff79578b454e4be38e34407e->leave($__internal_cfffddbb2cfbfbe7adb49197b6fa23ce2b17e57bff79578b454e4be38e34407e_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_2b5cc035f1ba84a2f17837944e728a0b766c0c005e34a7cdb3f6e2b0fe2337dd = $this->env->getExtension("native_profiler");
        $__internal_2b5cc035f1ba84a2f17837944e728a0b766c0c005e34a7cdb3f6e2b0fe2337dd->enter($__internal_2b5cc035f1ba84a2f17837944e728a0b766c0c005e34a7cdb3f6e2b0fe2337dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <div class=\"col-lg-6\">
        <h2>Añadir entrada</h2>
        ";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("enctype" => "multipart/form-data"));
        echo "
        ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
    <div class=\"clearfix\"></div>
";
        
        $__internal_2b5cc035f1ba84a2f17837944e728a0b766c0c005e34a7cdb3f6e2b0fe2337dd->leave($__internal_2b5cc035f1ba84a2f17837944e728a0b766c0c005e34a7cdb3f6e2b0fe2337dd_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Entry:add.html.twig";
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
/*         <h2>Añadir entrada</h2>*/
/*         {{ form_start(form, {'enctype':'multipart/form-data'}) }}*/
/*         {{ form_end(form) }}*/
/*     </div>*/
/*     <div class="clearfix"></div>*/
/* {% endblock %}*/
/* */
