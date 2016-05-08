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
        $__internal_2952e732a0d19fd9eea017b18fe475dfad53c6a1d7d55134fc47ecfeb830b5ec = $this->env->getExtension("native_profiler");
        $__internal_2952e732a0d19fd9eea017b18fe475dfad53c6a1d7d55134fc47ecfeb830b5ec->enter($__internal_2952e732a0d19fd9eea017b18fe475dfad53c6a1d7d55134fc47ecfeb830b5ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2952e732a0d19fd9eea017b18fe475dfad53c6a1d7d55134fc47ecfeb830b5ec->leave($__internal_2952e732a0d19fd9eea017b18fe475dfad53c6a1d7d55134fc47ecfeb830b5ec_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_d64e4576cb1e1d6a22cb2847243a81bbde663306109a35da4987cc41fc6a5534 = $this->env->getExtension("native_profiler");
        $__internal_d64e4576cb1e1d6a22cb2847243a81bbde663306109a35da4987cc41fc6a5534->enter($__internal_d64e4576cb1e1d6a22cb2847243a81bbde663306109a35da4987cc41fc6a5534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<h1>Hello World!</h1>
";
        
        $__internal_d64e4576cb1e1d6a22cb2847243a81bbde663306109a35da4987cc41fc6a5534->leave($__internal_d64e4576cb1e1d6a22cb2847243a81bbde663306109a35da4987cc41fc6a5534_prof);

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
