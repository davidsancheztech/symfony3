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
        $__internal_b43077ea38427835717de3d0ddaec16877d7e6cfe18121990bd42477f437a27b = $this->env->getExtension("native_profiler");
        $__internal_b43077ea38427835717de3d0ddaec16877d7e6cfe18121990bd42477f437a27b->enter($__internal_b43077ea38427835717de3d0ddaec16877d7e6cfe18121990bd42477f437a27b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b43077ea38427835717de3d0ddaec16877d7e6cfe18121990bd42477f437a27b->leave($__internal_b43077ea38427835717de3d0ddaec16877d7e6cfe18121990bd42477f437a27b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b4876b10ca898c34d562a97dcd3b1b009796b36af3782355c158479bdeda236b = $this->env->getExtension("native_profiler");
        $__internal_b4876b10ca898c34d562a97dcd3b1b009796b36af3782355c158479bdeda236b->enter($__internal_b4876b10ca898c34d562a97dcd3b1b009796b36af3782355c158479bdeda236b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_b4876b10ca898c34d562a97dcd3b1b009796b36af3782355c158479bdeda236b->leave($__internal_b4876b10ca898c34d562a97dcd3b1b009796b36af3782355c158479bdeda236b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fcb8dcb75228447b0c32864d0addaf9a3cf57291dcdde3939916b179e0a95441 = $this->env->getExtension("native_profiler");
        $__internal_fcb8dcb75228447b0c32864d0addaf9a3cf57291dcdde3939916b179e0a95441->enter($__internal_fcb8dcb75228447b0c32864d0addaf9a3cf57291dcdde3939916b179e0a95441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_fcb8dcb75228447b0c32864d0addaf9a3cf57291dcdde3939916b179e0a95441->leave($__internal_fcb8dcb75228447b0c32864d0addaf9a3cf57291dcdde3939916b179e0a95441_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_989deae5efcc1ab67f7ff033fd98ed53c51dd08874f6ca02ffd1486c5f2faae9 = $this->env->getExtension("native_profiler");
        $__internal_989deae5efcc1ab67f7ff033fd98ed53c51dd08874f6ca02ffd1486c5f2faae9->enter($__internal_989deae5efcc1ab67f7ff033fd98ed53c51dd08874f6ca02ffd1486c5f2faae9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_989deae5efcc1ab67f7ff033fd98ed53c51dd08874f6ca02ffd1486c5f2faae9->leave($__internal_989deae5efcc1ab67f7ff033fd98ed53c51dd08874f6ca02ffd1486c5f2faae9_prof);

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
