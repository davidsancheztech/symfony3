<?php

/* BlogBundle:Category:edit.html.twig */
class __TwigTemplate_499a455a16923187de56fc018f1f83788dd61f781f20ec151567a297f66c1373 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogBundle::layout.html.twig", "BlogBundle:Category:edit.html.twig", 1);
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
        $__internal_5ada2b30ad38ea98fad0e413bf037c09ddf221911489e65a5eeeb53e2187b341 = $this->env->getExtension("native_profiler");
        $__internal_5ada2b30ad38ea98fad0e413bf037c09ddf221911489e65a5eeeb53e2187b341->enter($__internal_5ada2b30ad38ea98fad0e413bf037c09ddf221911489e65a5eeeb53e2187b341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Category:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5ada2b30ad38ea98fad0e413bf037c09ddf221911489e65a5eeeb53e2187b341->leave($__internal_5ada2b30ad38ea98fad0e413bf037c09ddf221911489e65a5eeeb53e2187b341_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_8451bfd5ace67527b075c3a2e7de3ba3238f639d94bdf691e22bcd2b544eb9c9 = $this->env->getExtension("native_profiler");
        $__internal_8451bfd5ace67527b075c3a2e7de3ba3238f639d94bdf691e22bcd2b544eb9c9->enter($__internal_8451bfd5ace67527b075c3a2e7de3ba3238f639d94bdf691e22bcd2b544eb9c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <div class=\"col-lg-6\">
        <h2>Editar categoria</h2>
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
        
        $__internal_8451bfd5ace67527b075c3a2e7de3ba3238f639d94bdf691e22bcd2b544eb9c9->leave($__internal_8451bfd5ace67527b075c3a2e7de3ba3238f639d94bdf691e22bcd2b544eb9c9_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Category:edit.html.twig";
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
/*         <h2>Editar categoria</h2>*/
/*         {{ form_start(form) }}*/
/*         {{ form_end(form) }}*/
/*     </div>*/
/*         <div class="clearfix"></div>*/
/* {% endblock %}*/
/* */
