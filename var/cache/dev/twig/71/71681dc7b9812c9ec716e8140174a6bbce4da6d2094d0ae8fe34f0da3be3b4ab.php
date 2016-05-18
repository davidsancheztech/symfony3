<?php

/* BlogBundle:Entry:index.html.twig */
class __TwigTemplate_458abbafad7d21a127ad1d6ecdba121f98ebff28f7a39aa7c78218b7a4db2778 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array(), "method"), "get", array(0 => "status"), "method"));
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
        $context['_seq'] = twig_ensure_traversable((isset($context["entries"]) ? $context["entries"] : null));
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
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "id", array(), "any", true, true) && ($this->getAttribute($this->getAttribute($context["entry"], "user", array()), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array())))) {
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
        if (((isset($context["page"]) ? $context["page"] : null) == 1)) {
            // line 41
            echo "        
    ";
        } else {
            // line 43
            echo "        ";
            $context["page"] = ((isset($context["page"]) ? $context["page"] : null) - 1);
            // line 44
            echo "    ";
        }
        // line 45
        echo "    
    
    <li><a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_homepage", array("page" => (isset($context["page"]) ? $context["page"] : null))), "html", null, true);
        echo "\">&laquo;</a></li>
    ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["pagesCount"]) ? $context["pagesCount"] : null)));
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
        if (((isset($context["page_m"]) ? $context["page_m"] : null) == (isset($context["pagesCount"]) ? $context["pagesCount"] : null))) {
            // line 54
            echo "        
    ";
        } else {
            // line 56
            echo "        ";
            $context["page_m"] = ((isset($context["page_m"]) ? $context["page_m"] : null) + 1);
            // line 57
            echo "    ";
        }
        // line 58
        echo "    <li><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_homepage", array("page" => (isset($context["page_m"]) ? $context["page_m"] : null))), "html", null, true);
        echo "\">&raquo;</a></li>
</ul>

";
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
        return array (  180 => 58,  177 => 57,  174 => 56,  170 => 54,  168 => 53,  164 => 51,  153 => 49,  149 => 48,  145 => 47,  141 => 45,  138 => 44,  135 => 43,  131 => 41,  129 => 40,  125 => 38,  115 => 33,  107 => 30,  103 => 29,  100 => 28,  97 => 27,  94 => 25,  85 => 23,  81 => 22,  76 => 20,  72 => 19,  67 => 18,  61 => 16,  59 => 15,  56 => 14,  52 => 13,  49 => 12,  38 => 10,  34 => 9,  31 => 8,  28 => 7,  11 => 1,);
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
