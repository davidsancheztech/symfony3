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
        $__internal_c7adaef70d5e3ebe49ef47087da54ed452e9f66caea08ef86fdbadcb4b925e4a = $this->env->getExtension("native_profiler");
        $__internal_c7adaef70d5e3ebe49ef47087da54ed452e9f66caea08ef86fdbadcb4b925e4a->enter($__internal_c7adaef70d5e3ebe49ef47087da54ed452e9f66caea08ef86fdbadcb4b925e4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Category:menu.categories.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 2
            echo "     <li><a href=\"#\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</a></li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_c7adaef70d5e3ebe49ef47087da54ed452e9f66caea08ef86fdbadcb4b925e4a->leave($__internal_c7adaef70d5e3ebe49ef47087da54ed452e9f66caea08ef86fdbadcb4b925e4a_prof);

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
/*      <li><a href="#">{{ category.name }}</a></li>*/
/* {% endfor %}*/
