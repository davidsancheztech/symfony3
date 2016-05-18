<?php

/* BlogBundle:Category:menu.categories.html.twig */
class __TwigTemplate_2ebb88f0018e6183b34e5dac6df08f4d7cdd22b95f05827981a331bf6a20a64f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e8f6ac7a0d7baeb4110d05a5711c39d1cda7886950dc26837e2282fd1ebb9928 = $this->env->getExtension("native_profiler");
        $__internal_e8f6ac7a0d7baeb4110d05a5711c39d1cda7886950dc26837e2282fd1ebb9928->enter($__internal_e8f6ac7a0d7baeb4110d05a5711c39d1cda7886950dc26837e2282fd1ebb9928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Category:menu.categories.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 2
            echo "     <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_read_category", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</a></li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_e8f6ac7a0d7baeb4110d05a5711c39d1cda7886950dc26837e2282fd1ebb9928->leave($__internal_e8f6ac7a0d7baeb4110d05a5711c39d1cda7886950dc26837e2282fd1ebb9928_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Category:menu.categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  22 => 1,);
    }
}
/* {% for category in categories %}*/
/*      <li><a href="{{ path("blog_read_category", {"id":category.id}) }}">{{ category.name }}</a></li>*/
/* {% endfor %}*/
