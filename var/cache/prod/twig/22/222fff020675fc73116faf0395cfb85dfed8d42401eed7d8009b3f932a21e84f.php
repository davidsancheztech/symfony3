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
        $__internal_32f94cb990021d77ee2f741b955ad60d29546c7c4766486e7756d49dab5f0e13 = $this->env->getExtension("native_profiler");
        $__internal_32f94cb990021d77ee2f741b955ad60d29546c7c4766486e7756d49dab5f0e13->enter($__internal_32f94cb990021d77ee2f741b955ad60d29546c7c4766486e7756d49dab5f0e13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32f94cb990021d77ee2f741b955ad60d29546c7c4766486e7756d49dab5f0e13->leave($__internal_32f94cb990021d77ee2f741b955ad60d29546c7c4766486e7756d49dab5f0e13_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_cad1b047e6a5a4e05daee7bd2d2101f6283b15dabbb402bd201544bcca5a92c6 = $this->env->getExtension("native_profiler");
        $__internal_cad1b047e6a5a4e05daee7bd2d2101f6283b15dabbb402bd201544bcca5a92c6->enter($__internal_cad1b047e6a5a4e05daee7bd2d2101f6283b15dabbb402bd201544bcca5a92c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<h1>Hello World!</h1>
";
        
        $__internal_cad1b047e6a5a4e05daee7bd2d2101f6283b15dabbb402bd201544bcca5a92c6->leave($__internal_cad1b047e6a5a4e05daee7bd2d2101f6283b15dabbb402bd201544bcca5a92c6_prof);

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
