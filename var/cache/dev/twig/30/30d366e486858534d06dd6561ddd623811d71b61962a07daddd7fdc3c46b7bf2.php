<?php

/* BlogBundle:Entry:edit.html.twig */
class __TwigTemplate_fb98cf900e3bee7fd9f64e54a1ea081858a98e9180dcee471a0ef017683cf394 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "    <div class=\"col-lg-6\">
        <h2>Editar entrada: ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "title", array()), "html", null, true);
        echo "</h2>
        ";
        // line 5
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("enctype" => "multipart/form-data"));
        echo "
        <label>Imagen:</label>
        <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/" . $this->getAttribute((isset($context["entry"]) ? $context["entry"] : null), "imagen", array()))), "html", null, true);
        echo "\" style=\"width:200px;\"/></img>
        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "imagen", array()), 'widget');
        echo "
        <label> ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tags", array()), "vars", array()), "label", array()), "html", null, true);
        echo "</label> 
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "tags", array()), 'widget', array("value" => (isset($context["tags"]) ? $context["tags"] : null)));
        echo "
        ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
    </div>
    <div class=\"clearfix\"></div>
";
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
        return array (  59 => 11,  55 => 10,  51 => 9,  47 => 8,  43 => 7,  38 => 5,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
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
