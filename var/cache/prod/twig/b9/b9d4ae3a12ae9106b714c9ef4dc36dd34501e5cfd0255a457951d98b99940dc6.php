<?php

/* BlogBundle:Category:category.html.twig */
class __TwigTemplate_d355128ed66df7e495610c3db72a90384c56df98bca1e09821979bce095739e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogBundle::layout.html.twig", "BlogBundle:Category:category.html.twig", 1);
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
        $__internal_9b0f95410e448a250ba23155aa31586df4d2b718e5cf323d815055d210304d7a = $this->env->getExtension("native_profiler");
        $__internal_9b0f95410e448a250ba23155aa31586df4d2b718e5cf323d815055d210304d7a->enter($__internal_9b0f95410e448a250ba23155aa31586df4d2b718e5cf323d815055d210304d7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Category:category.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b0f95410e448a250ba23155aa31586df4d2b718e5cf323d815055d210304d7a->leave($__internal_9b0f95410e448a250ba23155aa31586df4d2b718e5cf323d815055d210304d7a_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_45ad38a684bbd0b2061a25c164fa82ac0928a19fbfe94715c7ca3a3a432cb042 = $this->env->getExtension("native_profiler");
        $__internal_45ad38a684bbd0b2061a25c164fa82ac0928a19fbfe94715c7ca3a3a432cb042->enter($__internal_45ad38a684bbd0b2061a25c164fa82ac0928a19fbfe94715c7ca3a3a432cb042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "
";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entries"]) ? $context["entries"] : $this->getContext($context, "entries")));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 5
            echo "    <div class=\"col-lg-11\">
        ";
            // line 6
            if ($this->getAttribute($context["entry"], "imagen", array())) {
                // line 7
                echo "        <p class=\"pull-left\" style=\"margin-right: 10px;\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/" . $this->getAttribute($context["entry"], "imagen", array()))), "html", null, true);
                echo "\" style=\"width:200px;\"/></img></p>
        ";
            }
            // line 9
            echo "        <p><strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "title", array()), "html", null, true);
            echo "</strong></p>
        <p>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "category", array()), "name", array()), "html", null, true);
            echo "<p/>
        <p>Autor: ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "user", array()), "name", array()), "html", null, true);
            echo "<p/>
        <p>
            ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["entry"], "entryTag", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["et"]) {
                // line 14
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["et"], "tag", array()), "name", array()), "html", null, true);
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['et'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "        </p>
        ";
            // line 18
            echo "        ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "id", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($context["entry"], "user", array()), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())))) {
                // line 19
                echo "        <p>
            <a class=\"btn btn-danger\" href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_delete_entry", array("id" => $this->getAttribute($context["entry"], "id", array()))), "html", null, true);
                echo "\">Eliminar</a>
            <a class=\"btn btn-warning\" href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_edit_entry", array("id" => $this->getAttribute($context["entry"], "id", array()))), "html", null, true);
                echo "\">Editar</a>
        </p>
        ";
            }
            // line 24
            echo "    <div class=\"clearfix\"></div>    
    <hr/>        
    </div>
    <div class=\"clearfix\"></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "
<ul class=\"pagination\">
    ";
        // line 31
        if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) == 1)) {
            // line 32
            echo "        
    ";
        } else {
            // line 34
            echo "        ";
            $context["page"] = ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 1);
            // line 35
            echo "    ";
        }
        // line 36
        echo "    
    
    <li><a href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_read_category", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id", array()), "page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))), "html", null, true);
        echo "\">&laquo;</a></li>
    ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["pagesCount"]) ? $context["pagesCount"] : $this->getContext($context, "pagesCount"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 40
            echo "    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_read_category", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id", array()), "page" => $context["i"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "    
    
    ";
        // line 44
        if (((isset($context["page_m"]) ? $context["page_m"] : $this->getContext($context, "page_m")) == (isset($context["pagesCount"]) ? $context["pagesCount"] : $this->getContext($context, "pagesCount")))) {
            // line 45
            echo "        
    ";
        } else {
            // line 47
            echo "        ";
            $context["page_m"] = ((isset($context["page_m"]) ? $context["page_m"] : $this->getContext($context, "page_m")) + 1);
            // line 48
            echo "    ";
        }
        // line 49
        echo "    <li><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_read_category", array("id" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "id", array()), "page" => (isset($context["page_m"]) ? $context["page_m"] : $this->getContext($context, "page_m")))), "html", null, true);
        echo "\">&raquo;</a></li>
</ul>
    
";
        
        $__internal_45ad38a684bbd0b2061a25c164fa82ac0928a19fbfe94715c7ca3a3a432cb042->leave($__internal_45ad38a684bbd0b2061a25c164fa82ac0928a19fbfe94715c7ca3a3a432cb042_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Category:category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 49,  166 => 48,  163 => 47,  159 => 45,  157 => 44,  153 => 42,  142 => 40,  138 => 39,  134 => 38,  130 => 36,  127 => 35,  124 => 34,  120 => 32,  118 => 31,  114 => 29,  104 => 24,  98 => 21,  94 => 20,  91 => 19,  88 => 18,  85 => 16,  76 => 14,  72 => 13,  67 => 11,  63 => 10,  58 => 9,  52 => 7,  50 => 6,  47 => 5,  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/*  {% extends "BlogBundle::layout.html.twig" %}*/
/* {% block content %}*/
/* */
/* {% for entry in entries %}*/
/*     <div class="col-lg-11">*/
/*         {% if entry.imagen %}*/
/*         <p class="pull-left" style="margin-right: 10px;"><img src="{{ asset("uploads/"~entry.imagen) }}" style="width:200px;"/></img></p>*/
/*         {% endif %}*/
/*         <p><strong>{{ entry.title }}</strong></p>*/
/*         <p>{{ entry.category.name }}<p/>*/
/*         <p>Autor: {{ entry.user.name }}<p/>*/
/*         <p>*/
/*             {% for et in entry.entryTag %}*/
/*                 {{ et.tag.name }}*/
/*             {% endfor %}*/
/*         </p>*/
/*         {# Mostrar unicamente cuando el usuario a iniciado sesión #}*/
/*         {% if (app.user.id is defined) and entry.user.id == app.user.id %}*/
/*         <p>*/
/*             <a class="btn btn-danger" href="{{ path("blog_delete_entry", {"id":entry.id}) }}">Eliminar</a>*/
/*             <a class="btn btn-warning" href="{{ path("blog_edit_entry", {"id":entry.id}) }}">Editar</a>*/
/*         </p>*/
/*         {% endif %}*/
/*     <div class="clearfix"></div>    */
/*     <hr/>        */
/*     </div>*/
/*     <div class="clearfix"></div>*/
/* {% endfor %}*/
/* */
/* <ul class="pagination">*/
/*     {% if(page == 1) %}*/
/*         */
/*     {% else %}*/
/*         {% set page = page-1 %}*/
/*     {% endif %}*/
/*     */
/*     */
/*     <li><a href="{{ path('blog_read_category', {"id": category.id, "page":page}) }}">&laquo;</a></li>*/
/*     {% for i in 1..pagesCount %}*/
/*     <li><a href="{{ path('blog_read_category', {"id": category.id, "page":i}) }}">{{i}}</a></li>*/
/*     {% endfor %}*/
/*     */
/*     */
/*     {% if(page_m == pagesCount) %}*/
/*         */
/*     {% else %}*/
/*         {% set page_m = page_m+1 %}*/
/*     {% endif %}*/
/*     <li><a href="{{ path('blog_read_category', {"id": category.id, "page":page_m}) }}">&raquo;</a></li>*/
/* </ul>*/
/*     */
/* {% endblock %}*/
/* */
