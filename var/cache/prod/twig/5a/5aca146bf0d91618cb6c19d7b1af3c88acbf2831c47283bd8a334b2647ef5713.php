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
        $__internal_9d186b7ec90b795e7a1ea33138c146626473fae1ffc3e4095e3658415a630409 = $this->env->getExtension("native_profiler");
        $__internal_9d186b7ec90b795e7a1ea33138c146626473fae1ffc3e4095e3658415a630409->enter($__internal_9d186b7ec90b795e7a1ea33138c146626473fae1ffc3e4095e3658415a630409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9d186b7ec90b795e7a1ea33138c146626473fae1ffc3e4095e3658415a630409->leave($__internal_9d186b7ec90b795e7a1ea33138c146626473fae1ffc3e4095e3658415a630409_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f7394de6d298c7d142651b1760ce19e2c164e3d95d11f11df4d8126b50f1d465 = $this->env->getExtension("native_profiler");
        $__internal_f7394de6d298c7d142651b1760ce19e2c164e3d95d11f11df4d8126b50f1d465->enter($__internal_f7394de6d298c7d142651b1760ce19e2c164e3d95d11f11df4d8126b50f1d465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f7394de6d298c7d142651b1760ce19e2c164e3d95d11f11df4d8126b50f1d465->leave($__internal_f7394de6d298c7d142651b1760ce19e2c164e3d95d11f11df4d8126b50f1d465_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c5598ece3567dac3cce43d330db87e65f30a4e3ec17f6bb57d156eee309dc7e4 = $this->env->getExtension("native_profiler");
        $__internal_c5598ece3567dac3cce43d330db87e65f30a4e3ec17f6bb57d156eee309dc7e4->enter($__internal_c5598ece3567dac3cce43d330db87e65f30a4e3ec17f6bb57d156eee309dc7e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_c5598ece3567dac3cce43d330db87e65f30a4e3ec17f6bb57d156eee309dc7e4->leave($__internal_c5598ece3567dac3cce43d330db87e65f30a4e3ec17f6bb57d156eee309dc7e4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a27257b4e6028b1632e662bd0cdb7020d28aaee86eec5349aafac8373a9c640c = $this->env->getExtension("native_profiler");
        $__internal_a27257b4e6028b1632e662bd0cdb7020d28aaee86eec5349aafac8373a9c640c->enter($__internal_a27257b4e6028b1632e662bd0cdb7020d28aaee86eec5349aafac8373a9c640c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_a27257b4e6028b1632e662bd0cdb7020d28aaee86eec5349aafac8373a9c640c->leave($__internal_a27257b4e6028b1632e662bd0cdb7020d28aaee86eec5349aafac8373a9c640c_prof);

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
