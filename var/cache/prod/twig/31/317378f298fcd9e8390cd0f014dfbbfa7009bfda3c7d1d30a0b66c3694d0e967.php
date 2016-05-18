<?php

/* BlogBundle:Entry:edit.html.twig */
class __TwigTemplate_318a33edf28e24dc19bf2d3e46cd9d10fbd4ebb7d146a54f91b59d9ada489681 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogBundle::layout.html.twig", "BlogBundle:Entry:edit.html.twig", 1);
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
        $__internal_3d0d3e83e3385f0937890e54b9877b2a7e1a17305e4d591b8d28b67a5149ea02 = $this->env->getExtension("native_profiler");
        $__internal_3d0d3e83e3385f0937890e54b9877b2a7e1a17305e4d591b8d28b67a5149ea02->enter($__internal_3d0d3e83e3385f0937890e54b9877b2a7e1a17305e4d591b8d28b67a5149ea02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Entry:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d0d3e83e3385f0937890e54b9877b2a7e1a17305e4d591b8d28b67a5149ea02->leave($__internal_3d0d3e83e3385f0937890e54b9877b2a7e1a17305e4d591b8d28b67a5149ea02_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_ca82ac728a4b63d9b977e99174116e753ce7449f0b73f653917b47fe695255c3 = $this->env->getExtension("native_profiler");
        $__internal_ca82ac728a4b63d9b977e99174116e753ce7449f0b73f653917b47fe695255c3->enter($__internal_ca82ac728a4b63d9b977e99174116e753ce7449f0b73f653917b47fe695255c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <div class=\"col-lg-6\">
        <h2>Editar entrada: ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "title", array()), "html", null, true);
        echo "</h2>
        ";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("enctype" => "multipart/form-data"));
        echo "
        <label>Imagen:</label>
        <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/" . $this->getAttribute((isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "imagen", array()))), "html", null, true);
        echo "\" style=\"width:200px;\"/></img>
        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "imagen", array()), 'widget');
        echo "
        <label> ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tags", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label> 
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tags", array()), 'widget', array("value" => (isset($context["tags"]) ? $context["tags"] : $this->getContext($context, "tags"))));
        echo "
        ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
    <div class=\"clearfix\"></div>
";
        
        $__internal_ca82ac728a4b63d9b977e99174116e753ce7449f0b73f653917b47fe695255c3->leave($__internal_ca82ac728a4b63d9b977e99174116e753ce7449f0b73f653917b47fe695255c3_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Entry:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 11,  64 => 10,  60 => 9,  56 => 8,  52 => 7,  47 => 5,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "BlogBundle::layout.html.twig" %}*/
/* {% block content %}*/
/*     <div class="col-lg-6">*/
/*         <h2>Editar entrada: {{ entry.title }}</h2>*/
/*         {{ form_start(form, {'enctype':'multipart/form-data'}) }}*/
/*         <label>Imagen:</label>*/
/*         <img src="{{ asset("uploads/"~entry.imagen) }}" style="width:200px;"/></img>*/
/*         {{ form_widget(form.imagen) }}*/
/*         <label> {{ form.tags.vars.label }}</label> */
/*         {{ form_widget(form.tags, {'value':tags}) }}*/
/*         {{ form_end(form) }}*/
/*     </div>*/
/*     <div class="clearfix"></div>*/
/* {% endblock %}*/
/* */
