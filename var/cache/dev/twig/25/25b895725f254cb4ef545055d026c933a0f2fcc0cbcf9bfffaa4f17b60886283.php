<?php

/* BlogBundle:Category:index.html.twig */
class __TwigTemplate_56edca695d0f88b868ae08cbced72cf919b194643d0cf84fb1b51361d08349f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogBundle::layout.html.twig", "BlogBundle:Category:index.html.twig", 1);
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
        echo "     <div class=\"col-lg-6\">
         <h2>Todas las categorias</h2>
         <hr/>
         <a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("blog_add_category");
        echo "\" class=\"btn btn-success\">Añadir categoria</a>
         <hr/>
        ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array(), "method"), "get", array(0 => "status"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 9
            echo "            <div class=\"alert alert-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "css", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "status", array()), "html", null, true);
            echo "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "         
         <table class=\"table table-bordered\">
             <tr>
                 <th>Nombre</th>
                 <th>Descripción</th>
                 <th>Editar</th>
                 <th>Eliminar</th>
             </tr>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 19
            echo "            <tr>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "description", array()), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_edit_category", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning\">Editar</a></td>
                <td>
                    ";
            // line 24
            if ((twig_length_filter($this->env, $this->getAttribute($context["category"], "entries", array())) == 0)) {
                // line 25
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_delete_category", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-danger\">Eliminar</a>
                    ";
            } else {
                // line 27
                echo "                     Categoria en uso
                    ";
            }
            // line 29
            echo "                </td>
            </tr>
       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "         </table>
     </div>
         <div class=\"clearfix\"></div>
 ";
    }

    public function getTemplateName()
    {
        return "BlogBundle:Category:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 32,  98 => 29,  94 => 27,  88 => 25,  86 => 24,  81 => 22,  77 => 21,  73 => 20,  70 => 19,  66 => 18,  56 => 10,  45 => 9,  41 => 8,  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/*  {% extends "BlogBundle::layout.html.twig" %}*/
/*  {% block content %}*/
/*      <div class="col-lg-6">*/
/*          <h2>Todas las categorias</h2>*/
/*          <hr/>*/
/*          <a href="{{ path("blog_add_category") }}" class="btn btn-success">Añadir categoria</a>*/
/*          <hr/>*/
/*         {% for message in app.session.flashbag().get("status") %}*/
/*             <div class="alert alert-{{message.css}}">{{ message.status }}</div>*/
/*         {% endfor %}         */
/*          <table class="table table-bordered">*/
/*              <tr>*/
/*                  <th>Nombre</th>*/
/*                  <th>Descripción</th>*/
/*                  <th>Editar</th>*/
/*                  <th>Eliminar</th>*/
/*              </tr>*/
/*         {% for category in categories %}*/
/*             <tr>*/
/*                 <td>{{ category.name }}</td>*/
/*                 <td>{{ category.description }}</td>*/
/*                 <td><a href="{{ path("blog_edit_category", {"id":category.id}) }}" class="btn btn-warning">Editar</a></td>*/
/*                 <td>*/
/*                     {% if category.entries|length == 0 %}*/
/*                     <a href="{{ path("blog_delete_category", {"id":category.id}) }}" class="btn btn-danger">Eliminar</a>*/
/*                     {% else %}*/
/*                      Categoria en uso*/
/*                     {% endif %}*/
/*                 </td>*/
/*             </tr>*/
/*        {% endfor %}*/
/*          </table>*/
/*      </div>*/
/*          <div class="clearfix"></div>*/
/*  {% endblock %}*/
/* */
