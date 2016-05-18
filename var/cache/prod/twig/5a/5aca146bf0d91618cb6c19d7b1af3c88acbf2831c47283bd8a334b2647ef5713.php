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
        $__internal_305927a8d735c873648c5712a4ded364a0fd75e3301124b887004893a3eedcd3 = $this->env->getExtension("native_profiler");
        $__internal_305927a8d735c873648c5712a4ded364a0fd75e3301124b887004893a3eedcd3->enter($__internal_305927a8d735c873648c5712a4ded364a0fd75e3301124b887004893a3eedcd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_305927a8d735c873648c5712a4ded364a0fd75e3301124b887004893a3eedcd3->leave($__internal_305927a8d735c873648c5712a4ded364a0fd75e3301124b887004893a3eedcd3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_59d1aa8ff1d715ece1b5b8124176cb1a26b3d70fc8a3fc756418e3ea4fa2b847 = $this->env->getExtension("native_profiler");
        $__internal_59d1aa8ff1d715ece1b5b8124176cb1a26b3d70fc8a3fc756418e3ea4fa2b847->enter($__internal_59d1aa8ff1d715ece1b5b8124176cb1a26b3d70fc8a3fc756418e3ea4fa2b847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_59d1aa8ff1d715ece1b5b8124176cb1a26b3d70fc8a3fc756418e3ea4fa2b847->leave($__internal_59d1aa8ff1d715ece1b5b8124176cb1a26b3d70fc8a3fc756418e3ea4fa2b847_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_100991617e8c3727bd7263e056b4fb351d8fee76b5a1e0080764a9822bc85a95 = $this->env->getExtension("native_profiler");
        $__internal_100991617e8c3727bd7263e056b4fb351d8fee76b5a1e0080764a9822bc85a95->enter($__internal_100991617e8c3727bd7263e056b4fb351d8fee76b5a1e0080764a9822bc85a95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_100991617e8c3727bd7263e056b4fb351d8fee76b5a1e0080764a9822bc85a95->leave($__internal_100991617e8c3727bd7263e056b4fb351d8fee76b5a1e0080764a9822bc85a95_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_18a45d95d5d68f5e6e5419eb190a8546e33bdb6e3108f94d39603b9d1673e73b = $this->env->getExtension("native_profiler");
        $__internal_18a45d95d5d68f5e6e5419eb190a8546e33bdb6e3108f94d39603b9d1673e73b->enter($__internal_18a45d95d5d68f5e6e5419eb190a8546e33bdb6e3108f94d39603b9d1673e73b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_18a45d95d5d68f5e6e5419eb190a8546e33bdb6e3108f94d39603b9d1673e73b->leave($__internal_18a45d95d5d68f5e6e5419eb190a8546e33bdb6e3108f94d39603b9d1673e73b_prof);

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
