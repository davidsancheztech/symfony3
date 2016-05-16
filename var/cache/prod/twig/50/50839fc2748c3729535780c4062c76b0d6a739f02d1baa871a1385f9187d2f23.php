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
        $__internal_5dcf56318a1c8a3f822258f9e40ae7492df5fa6b8ad8dec45427e770861d94b8 = $this->env->getExtension("native_profiler");
        $__internal_5dcf56318a1c8a3f822258f9e40ae7492df5fa6b8ad8dec45427e770861d94b8->enter($__internal_5dcf56318a1c8a3f822258f9e40ae7492df5fa6b8ad8dec45427e770861d94b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Entry:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5dcf56318a1c8a3f822258f9e40ae7492df5fa6b8ad8dec45427e770861d94b8->leave($__internal_5dcf56318a1c8a3f822258f9e40ae7492df5fa6b8ad8dec45427e770861d94b8_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_76818f74e75f7f14ffb5e01e7e9f9d2fd4b102977c7ad8cc7bf5737475b80b97 = $this->env->getExtension("native_profiler");
        $__internal_76818f74e75f7f14ffb5e01e7e9f9d2fd4b102977c7ad8cc7bf5737475b80b97->enter($__internal_76818f74e75f7f14ffb5e01e7e9f9d2fd4b102977c7ad8cc7bf5737475b80b97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_76818f74e75f7f14ffb5e01e7e9f9d2fd4b102977c7ad8cc7bf5737475b80b97->leave($__internal_76818f74e75f7f14ffb5e01e7e9f9d2fd4b102977c7ad8cc7bf5737475b80b97_prof);

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
