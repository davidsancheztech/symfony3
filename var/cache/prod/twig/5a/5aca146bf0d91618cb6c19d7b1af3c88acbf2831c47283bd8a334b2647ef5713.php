<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_6d5beadc245e3b5afa74d86f08e468cecec91295169b6aba81697c7bd569477c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_07339f55baa184a3bbfa87639bbcf51f198b9fc60e2d0dd85f4d5ae5d5277c5a = $this->env->getExtension("native_profiler");
        $__internal_07339f55baa184a3bbfa87639bbcf51f198b9fc60e2d0dd85f4d5ae5d5277c5a->enter($__internal_07339f55baa184a3bbfa87639bbcf51f198b9fc60e2d0dd85f4d5ae5d5277c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07339f55baa184a3bbfa87639bbcf51f198b9fc60e2d0dd85f4d5ae5d5277c5a->leave($__internal_07339f55baa184a3bbfa87639bbcf51f198b9fc60e2d0dd85f4d5ae5d5277c5a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_7b1f677696fa835ab95a90497a7bac0aaf7ac35a9aa2a79b2dd4ce0e493b19e8 = $this->env->getExtension("native_profiler");
        $__internal_7b1f677696fa835ab95a90497a7bac0aaf7ac35a9aa2a79b2dd4ce0e493b19e8->enter($__internal_7b1f677696fa835ab95a90497a7bac0aaf7ac35a9aa2a79b2dd4ce0e493b19e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_7b1f677696fa835ab95a90497a7bac0aaf7ac35a9aa2a79b2dd4ce0e493b19e8->leave($__internal_7b1f677696fa835ab95a90497a7bac0aaf7ac35a9aa2a79b2dd4ce0e493b19e8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_95d4a5c00fc003fc637f317959f653254cbea3bd36badd3f420da96f42f4571f = $this->env->getExtension("native_profiler");
        $__internal_95d4a5c00fc003fc637f317959f653254cbea3bd36badd3f420da96f42f4571f->enter($__internal_95d4a5c00fc003fc637f317959f653254cbea3bd36badd3f420da96f42f4571f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_95d4a5c00fc003fc637f317959f653254cbea3bd36badd3f420da96f42f4571f->leave($__internal_95d4a5c00fc003fc637f317959f653254cbea3bd36badd3f420da96f42f4571f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d5444931dd3c62fe5208e93cff40d32b12fdae1f6cfc253fb9848012026f01c5 = $this->env->getExtension("native_profiler");
        $__internal_d5444931dd3c62fe5208e93cff40d32b12fdae1f6cfc253fb9848012026f01c5->enter($__internal_d5444931dd3c62fe5208e93cff40d32b12fdae1f6cfc253fb9848012026f01c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d5444931dd3c62fe5208e93cff40d32b12fdae1f6cfc253fb9848012026f01c5->leave($__internal_d5444931dd3c62fe5208e93cff40d32b12fdae1f6cfc253fb9848012026f01c5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
