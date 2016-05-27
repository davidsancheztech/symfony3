<?php

/* AppBundle:Pruebas:index.html.twig */
class __TwigTemplate_34a877f71e902d6d9f79d6fa80c445eecac8f8ae648e257659f54ae35c987026 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "AppBundle:Pruebas:index.html.twig", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ccfe92a7e212027ea543de207eb6ec9cc337b8ed60ca3557864d462b7b39d119 = $this->env->getExtension("native_profiler");
        $__internal_ccfe92a7e212027ea543de207eb6ec9cc337b8ed60ca3557864d462b7b39d119->enter($__internal_ccfe92a7e212027ea543de207eb6ec9cc337b8ed60ca3557864d462b7b39d119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Pruebas:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ccfe92a7e212027ea543de207eb6ec9cc337b8ed60ca3557864d462b7b39d119->leave($__internal_ccfe92a7e212027ea543de207eb6ec9cc337b8ed60ca3557864d462b7b39d119_prof);

    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        $__internal_ec9c509a0fdafb4218e1421ed86ed6286ad26b6d60371ce081d90ce10a527498 = $this->env->getExtension("native_profiler");
        $__internal_ec9c509a0fdafb4218e1421ed86ed6286ad26b6d60371ce081d90ce10a527498->enter($__internal_ec9c509a0fdafb4218e1421ed86ed6286ad26b6d60371ce081d90ce10a527498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 3
        echo "    ";
        $this->displayParentBlock("container", $context, $blocks);
        echo "
    ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["texto"]) ? $context["texto"] : $this->getContext($context, "texto")), "html", null, true);
        echo "
    
    ";
        // line 10
        echo "    <hr>
    ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fruta"]) ? $context["fruta"] : $this->getContext($context, "fruta")), "pera", array()), "html", null, true);
        echo "
    ";
        // line 12
        if ((is_string($__internal_fd1bad4268d7a08db8307011bda531396a897c7aadc06e11628e450fab48f081 = $this->getAttribute((isset($context["fruta"]) ? $context["fruta"] : $this->getContext($context, "fruta")), "pera", array())) && is_string($__internal_74ca8aecab2b65e868c333ebd356e1f8d6182845325dd8b6ae7e531da958db89 = "r") && ('' === $__internal_74ca8aecab2b65e868c333ebd356e1f8d6182845325dd8b6ae7e531da958db89 || 0 === strpos($__internal_fd1bad4268d7a08db8307011bda531396a897c7aadc06e11628e450fab48f081, $__internal_74ca8aecab2b65e868c333ebd356e1f8d6182845325dd8b6ae7e531da958db89)))) {
            // line 13
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fruta"]) ? $context["fruta"] : $this->getContext($context, "fruta")), "manzana", array()), "html", null, true);
            echo "
    ";
        }
        // line 15
        echo "    <hr>
    ";
        // line 16
        $context["variable"] = "hola Twig";
        // line 17
        echo "    ";
        echo twig_escape_filter($this->env, (isset($context["variable"]) ? $context["variable"] : $this->getContext($context, "variable")), "html", null, true);
        echo "
    
    <hr>
    ";
        // line 20
        if ((twig_length_filter($this->env, (isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos"))) > 4)) {
            // line 21
            echo "    <ul>
    ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")));
            foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
                // line 23
                echo "        <li>
            ";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "producto", array()), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "precio", array()), "html", null, true);
                echo "  
            ";
                // line 25
                if (($this->getAttribute($context["producto"], "producto", array()) == "camiseta 2")) {
                    echo " ¡¡Desctadado!!";
                } elseif (($this->getAttribute($context["producto"], "producto", array()) == "camiseta 4")) {
                    echo "¡¡Importante!!";
                }
                // line 26
                echo "        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "    </ul>
    ";
        }
        // line 30
        echo "     <hr> 
     ";
        // line 31
        $context["fecha"] = twig_date_converter($this->env, " -2 days", "Europe/Madrid");
        // line 32
        echo "     ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["fecha"]) ? $context["fecha"] : $this->getContext($context, "fecha")), "date", array()), "d/m/Y"), "html", null, true);
        echo "
     
     <hr> 
     ";
        // line 35
        $context["texto"] = "Esto es, un ejemplo,";
        // line 36
        echo "     ";
        echo twig_escape_filter($this->env, trim((isset($context["texto"]) ? $context["texto"] : $this->getContext($context, "texto")), ","), "html", null, true);
        echo "
     
     <hr>
     ";
        // line 39
        echo twig_include($this->env, $context, "AppBundle:pruebas:partial.html.twig");
        echo "
     ";
        // line 40
        echo twig_escape_filter($this->env, min(array(0 => 76, 1 => 99, 2 => 58, 3 => 12)), "html", null, true);
        echo "
     ";
        // line 41
        echo twig_escape_filter($this->env, twig_random($this->env, array(0 => "Batman", 1 => "Juegos del hambre", 2 => "Gran torino")), "html", null, true);
        echo "
     <hr/>
      ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 25, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 44
            echo "          ";
            echo twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "<br>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "    <hr/>
    ";
        // line 47
        echo $this->env->getExtension('app_bundle')->generateTable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")));
        echo "
    ";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('app_bundle')->getName(), "html", null, true);
        echo "
    <hr/>
    ";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Filter Vista')->addText("cadena de texto", 2), "html", null, true);
        echo "
    
";
        
        $__internal_ec9c509a0fdafb4218e1421ed86ed6286ad26b6d60371ce081d90ce10a527498->leave($__internal_ec9c509a0fdafb4218e1421ed86ed6286ad26b6d60371ce081d90ce10a527498_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Pruebas:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 50,  166 => 48,  162 => 47,  159 => 46,  150 => 44,  146 => 43,  141 => 41,  137 => 40,  133 => 39,  126 => 36,  124 => 35,  117 => 32,  115 => 31,  112 => 30,  108 => 28,  101 => 26,  95 => 25,  89 => 24,  86 => 23,  82 => 22,  79 => 21,  77 => 20,  70 => 17,  68 => 16,  65 => 15,  59 => 13,  57 => 12,  53 => 11,  50 => 10,  45 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig"%}*/
/* {% block container %}*/
/*     {{ parent()}}*/
/*     {{texto}}*/
/*     */
/*     {# COMENTARIO*/
/*     */
/*         ESTO ES UN EJEMPLO DE COMENTARIOS*/
/*     #}*/
/*     <hr>*/
/*     {{fruta.pera}}*/
/*     {% if fruta.pera starts with "r" %}*/
/*         {{fruta.manzana}}*/
/*     {% endif %}*/
/*     <hr>*/
/*     {% set variable = "hola Twig" %}*/
/*     {{variable}}*/
/*     */
/*     <hr>*/
/*     {% if productos|length > 4 %}*/
/*     <ul>*/
/*     {% for producto in productos %}*/
/*         <li>*/
/*             {{ producto.producto }} - {{ producto.precio }}  */
/*             {% if producto.producto == "camiseta 2" %} ¡¡Desctadado!!{% elseif producto.producto == "camiseta 4" %}¡¡Importante!!{% endif %}*/
/*         </li>*/
/*     {% endfor %}*/
/*     </ul>*/
/*     {% endif %}*/
/*      <hr> */
/*      {% set fecha = date(" -2 days", "Europe/Madrid") %}*/
/*      {{fecha.date|date("d/m/Y")}}*/
/*      */
/*      <hr> */
/*      {% set texto = "Esto es, un ejemplo," %}*/
/*      {{texto|trim(",")}}*/
/*      */
/*      <hr>*/
/*      {{ include('AppBundle:pruebas:partial.html.twig') }}*/
/*      {{ min([76,99,58,12]) }}*/
/*      {{ random(["Batman","Juegos del hambre","Gran torino"]) }}*/
/*      <hr/>*/
/*       {% for i in range(0,25,3) %}*/
/*           {{i}}<br>*/
/*     {% endfor %}*/
/*     <hr/>*/
/*     {{ generateTable(productos)|raw }}*/
/*     {{ getNamePrueba()}}*/
/*     <hr/>*/
/*     {{"cadena de texto"|addText(2)}}*/
/*     */
/* {%endblock%}*/
