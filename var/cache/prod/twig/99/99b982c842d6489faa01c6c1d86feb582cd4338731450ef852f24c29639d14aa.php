<?php

/* BlogBundle:Entry:index.html.twig */
class __TwigTemplate_a4fc70f9d4da922e5f258c207e9b7467907cceed3ba8feddf8f22fe898b69456 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogBundle::layout.html.twig", "BlogBundle:Entry:index.html.twig", 1);
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
        $__internal_d49a81ee46b291a5368e1a8ef64ab0812eaa34518acfa2a1cb5ce79a323221f9 = $this->env->getExtension("native_profiler");
        $__internal_d49a81ee46b291a5368e1a8ef64ab0812eaa34518acfa2a1cb5ce79a323221f9->enter($__internal_d49a81ee46b291a5368e1a8ef64ab0812eaa34518acfa2a1cb5ce79a323221f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Entry:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d49a81ee46b291a5368e1a8ef64ab0812eaa34518acfa2a1cb5ce79a323221f9->leave($__internal_d49a81ee46b291a5368e1a8ef64ab0812eaa34518acfa2a1cb5ce79a323221f9_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_410f9813f5ed164313d37af29b7ee1a5a6daaeafd167ac05934589c9749c88bb = $this->env->getExtension("native_profiler");
        $__internal_410f9813f5ed164313d37af29b7ee1a5a6daaeafd167ac05934589c9749c88bb->enter($__internal_410f9813f5ed164313d37af29b7ee1a5a6daaeafd167ac05934589c9749c88bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "
";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array(), "method"), "get", array(0 => "status"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 10
            echo "    <div class=\"alert alert-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "css", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "status", array()), "html", null, true);
            echo "</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "
";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entries"]) ? $context["entries"] : $this->getContext($context, "entries")));
        foreach ($context['_seq'] as $context["_key"] => $context["entry"]) {
            // line 14
            echo "    <div class=\"col-lg-11\">
        ";
            // line 15
            if ($this->getAttribute($context["entry"], "imagen", array())) {
                // line 16
                echo "        <p class=\"pull-left\" style=\"margin-right: 10px;\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/" . $this->getAttribute($context["entry"], "imagen", array()))), "html", null, true);
                echo "\" style=\"width:200px;\"/></img></p>
        ";
            }
            // line 18
            echo "        <p><strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entry"], "title", array()), "html", null, true);
            echo "</strong></p>
        <p>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "category", array()), "name", array()), "html", null, true);
            echo "<p/>
        <p>Autor: ";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entry"], "user", array()), "name", array()), "html", null, true);
            echo "<p/>
        <p>
            ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["entry"], "entryTag", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["et"]) {
                // line 23
                echo "                ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["et"], "tag", array()), "name", array()), "html", null, true);
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['et'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "        </p>
        ";
            // line 27
            echo "        ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "id", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($context["entry"], "user", array()), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())))) {
                // line 28
                echo "        <p>
            <a class=\"btn btn-danger\" href=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_delete_entry", array("id" => $this->getAttribute($context["entry"], "id", array()))), "html", null, true);
                echo "\">Eliminar</a>
            <a class=\"btn btn-warning\" href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_edit_entry", array("id" => $this->getAttribute($context["entry"], "id", array()))), "html", null, true);
                echo "\">";
                echo $this->env->getExtension('translator')->getTranslator()->trans("btn_edit", array(), "messages");
                echo "</a>
        </p>
        ";
            }
            // line 33
            echo "    <div class=\"clearfix\"></div>    
    <hr/>        
    </div>
    <div class=\"clearfix\"></div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entry'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "
<ul class=\"pagination\">
    ";
        // line 40
        if (((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) == 1)) {
            // line 41
            echo "        
    ";
        } else {
            // line 43
            echo "        ";
            $context["page"] = ((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")) - 1);
            // line 44
            echo "    ";
        }
        // line 45
        echo "    
    
    <li><a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_homepage", array("page" => (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))), "html", null, true);
        echo "\">&laquo;</a></li>
    ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["pagesCount"]) ? $context["pagesCount"] : $this->getContext($context, "pagesCount"))));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 49
            echo "    <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_homepage", array("page" => $context["i"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "    
    
    ";
        // line 53
        if (((isset($context["page_m"]) ? $context["page_m"] : $this->getContext($context, "page_m")) == (isset($context["pagesCount"]) ? $context["pagesCount"] : $this->getContext($context, "pagesCount")))) {
            // line 54
            echo "        
    ";
        } else {
            // line 56
            echo "        ";
            $context["page_m"] = ((isset($context["page_m"]) ? $context["page_m"] : $this->getContext($context, "page_m")) + 1);
            // line 57
            echo "    ";
        }
        // line 58
        echo "    <li><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_homepage", array("page" => (isset($context["page_m"]) ? $context["page_m"] : $this->getContext($context, "page_m")))), "html", null, true);
        echo "\">&raquo;</a></li>
</ul>

";
        
        $__internal_410f9813f5ed164313d37af29b7ee1a5a6daaeafd167ac05934589c9749c88bb->leave($__internal_410f9813f5ed164313d37af29b7ee1a5a6daaeafd167ac05934589c9749c88bb_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Entry:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 58,  186 => 57,  183 => 56,  179 => 54,  177 => 53,  173 => 51,  162 => 49,  158 => 48,  154 => 47,  150 => 45,  147 => 44,  144 => 43,  140 => 41,  138 => 40,  134 => 38,  124 => 33,  116 => 30,  112 => 29,  109 => 28,  106 => 27,  103 => 25,  94 => 23,  90 => 22,  85 => 20,  81 => 19,  76 => 18,  70 => 16,  68 => 15,  65 => 14,  61 => 13,  58 => 12,  47 => 10,  43 => 9,  40 => 8,  34 => 7,  11 => 1,);
    }
}
/* {% extends "BlogBundle::layout.html.twig" %}*/
/* */
/* {#% block menu %}*/
/*     {% include "BlogBundle:Category:menu.categories.html.twig" with {'categories': categories} %}*/
/* {% endblock %#}*/
/* */
/* {% block content %}*/
/* */
/* {% for message in app.session.flashbag().get("status") %}*/
/*     <div class="alert alert-{{message.css}}">{{ message.status }}</div>*/
/* {% endfor %}*/
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
/*             <a class="btn btn-warning" href="{{ path("blog_edit_entry", {"id":entry.id}) }}">{% trans %}btn_edit{% endtrans %}</a>*/
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
/*     <li><a href="{{ path('blog_homepage', {"page":page}) }}">&laquo;</a></li>*/
/*     {% for i in 1..pagesCount %}*/
/*     <li><a href="{{ path('blog_homepage', {"page":i}) }}">{{i}}</a></li>*/
/*     {% endfor %}*/
/*     */
/*     */
/*     {% if(page_m == pagesCount) %}*/
/*         */
/*     {% else %}*/
/*         {% set page_m = page_m+1 %}*/
/*     {% endif %}*/
/*     <li><a href="{{ path('blog_homepage', {"page":page_m}) }}">&raquo;</a></li>*/
/* </ul>*/
/* */
/* {% endblock %}*/
/* */
