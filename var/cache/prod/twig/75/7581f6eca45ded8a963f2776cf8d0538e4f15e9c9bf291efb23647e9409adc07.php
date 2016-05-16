<?php

/* BlogBundle:Tag:add.html.twig */
class __TwigTemplate_b9e010b0d1fbf71f44ba87fdd4a7cf77c24596c3641362f7b5917571a132c20f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogBundle::layout.html.twig", "BlogBundle:Tag:add.html.twig", 1);
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
        $__internal_b20925fcae5ebd86b5adc87b5318559887eeab12dccf96264561a23c0566b685 = $this->env->getExtension("native_profiler");
        $__internal_b20925fcae5ebd86b5adc87b5318559887eeab12dccf96264561a23c0566b685->enter($__internal_b20925fcae5ebd86b5adc87b5318559887eeab12dccf96264561a23c0566b685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Tag:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b20925fcae5ebd86b5adc87b5318559887eeab12dccf96264561a23c0566b685->leave($__internal_b20925fcae5ebd86b5adc87b5318559887eeab12dccf96264561a23c0566b685_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_27aec5b4ab8809cc1c6d710e7b8b87a44f4436da589f6f06aed2638fbc8fa133 = $this->env->getExtension("native_profiler");
        $__internal_27aec5b4ab8809cc1c6d710e7b8b87a44f4436da589f6f06aed2638fbc8fa133->enter($__internal_27aec5b4ab8809cc1c6d710e7b8b87a44f4436da589f6f06aed2638fbc8fa133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <div class=\"col-lg-6\">
        <h2>Añadir etiquetas</h2>
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
        
        $__internal_27aec5b4ab8809cc1c6d710e7b8b87a44f4436da589f6f06aed2638fbc8fa133->leave($__internal_27aec5b4ab8809cc1c6d710e7b8b87a44f4436da589f6f06aed2638fbc8fa133_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Tag:add.html.twig";
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
/*         <h2>Añadir etiquetas</h2>*/
/*         {{ form_start(form) }}*/
/*         {{ form_end(form) }}*/
/*     </div>*/
/*         <div class="clearfix"></div>*/
/* {% endblock %}*/
/* */
