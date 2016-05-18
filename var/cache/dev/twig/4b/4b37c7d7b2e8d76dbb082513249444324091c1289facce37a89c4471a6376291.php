<?php

/* BlogBundle:Tag:index.html.twig */
class __TwigTemplate_ec92526473538ef71107e3dfed4b57d11edbd47a120e07fa2b5c3b03c6487050 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogBundle::layout.html.twig", "BlogBundle:Tag:index.html.twig", 1);
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
         <h2>Todas las etiquetas</h2>
         <hr/>
         <a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("blog_add_tag");
        echo "\" class=\"btn btn-success\">Añadir etiqueta</a>
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
                 <th>Eliminar</th>
             </tr>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 18
            echo "            <tr>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "description", array()), "html", null, true);
            echo "</td>
                <td>
                    ";
            // line 22
            if ((twig_length_filter($this->env, $this->getAttribute($context["tag"], "entryTag", array())) == 0)) {
                // line 23
                echo "                    <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_delete_tag", array("id" => $this->getAttribute($context["tag"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-danger\">Eliminar</a>
                    ";
            } else {
                // line 25
                echo "                     Etiqueta en uso
                    ";
            }
            // line 27
            echo "                </td>
            </tr>
       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "         </table>
     </div>
         <div class=\"clearfix\"></div>
 ";
    }

    public function getTemplateName()
    {
        return "BlogBundle:Tag:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 30,  93 => 27,  89 => 25,  83 => 23,  81 => 22,  76 => 20,  72 => 19,  69 => 18,  65 => 17,  56 => 10,  45 => 9,  41 => 8,  36 => 6,  31 => 3,  28 => 2,  11 => 1,);
    }
}
/*  {% extends "BlogBundle::layout.html.twig" %}*/
/*  {% block content %}*/
/*      <div class="col-lg-6">*/
/*          <h2>Todas las etiquetas</h2>*/
/*          <hr/>*/
/*          <a href="{{ path("blog_add_tag") }}" class="btn btn-success">Añadir etiqueta</a>*/
/*          <hr/>*/
/*         {% for message in app.session.flashbag().get("status") %}*/
/*             <div class="alert alert-{{message.css}}">{{ message.status }}</div>*/
/*         {% endfor %}         */
/*          <table class="table table-bordered">*/
/*              <tr>*/
/*                  <th>Nombre</th>*/
/*                  <th>Descripción</th>*/
/*                  <th>Eliminar</th>*/
/*              </tr>*/
/*         {% for tag in tags %}*/
/*             <tr>*/
/*                 <td>{{ tag.name }}</td>*/
/*                 <td>{{ tag.description }}</td>*/
/*                 <td>*/
/*                     {% if tag.entryTag|length == 0 %}*/
/*                     <a href="{{ path("blog_delete_tag", {"id":tag.id}) }}" class="btn btn-danger">Eliminar</a>*/
/*                     {% else %}*/
/*                      Etiqueta en uso*/
/*                     {% endif %}*/
/*                 </td>*/
/*             </tr>*/
/*        {% endfor %}*/
/*          </table>*/
/*      </div>*/
/*          <div class="clearfix"></div>*/
/*  {% endblock %}*/
/* */
