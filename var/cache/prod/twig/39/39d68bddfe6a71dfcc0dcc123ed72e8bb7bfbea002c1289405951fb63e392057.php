<?php

/* BlogBundle:Tag:index.html.twig */
class __TwigTemplate_4dcf9f3c96f8150c4674118c07457cff18b4089b9eb6feb08d92762027f40f22 extends Twig_Template
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
        $__internal_ab9bec7756bd4e7a716bd11023f542e78487ed353792b66e4bcc47eaf567ae32 = $this->env->getExtension("native_profiler");
        $__internal_ab9bec7756bd4e7a716bd11023f542e78487ed353792b66e4bcc47eaf567ae32->enter($__internal_ab9bec7756bd4e7a716bd11023f542e78487ed353792b66e4bcc47eaf567ae32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Tag:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab9bec7756bd4e7a716bd11023f542e78487ed353792b66e4bcc47eaf567ae32->leave($__internal_ab9bec7756bd4e7a716bd11023f542e78487ed353792b66e4bcc47eaf567ae32_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_7c6844e8acf82a0de3392fd877d303d4c0544b2ca10e9add2a289f159eca828b = $this->env->getExtension("native_profiler");
        $__internal_7c6844e8acf82a0de3392fd877d303d4c0544b2ca10e9add2a289f159eca828b->enter($__internal_7c6844e8acf82a0de3392fd877d303d4c0544b2ca10e9add2a289f159eca828b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array(), "method"), "get", array(0 => "status"), "method"));
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
        $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : $this->getContext($context, "tags")));
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
        
        $__internal_7c6844e8acf82a0de3392fd877d303d4c0544b2ca10e9add2a289f159eca828b->leave($__internal_7c6844e8acf82a0de3392fd877d303d4c0544b2ca10e9add2a289f159eca828b_prof);

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
        return array (  110 => 30,  102 => 27,  98 => 25,  92 => 23,  90 => 22,  85 => 20,  81 => 19,  78 => 18,  74 => 17,  65 => 10,  54 => 9,  50 => 8,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
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
