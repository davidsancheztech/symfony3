<?php

/* AppBundle:pruebas:index.html.twig */
class __TwigTemplate_cb26431b640ed62061be5125a16e41069107f3bac396525f4ae9a04e0ffc40f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "AppBundle:pruebas:index.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $this->displayParentBlock("container", $context, $blocks);
        echo "
    ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["texto"]) ? $context["texto"] : null), "html", null, true);
        echo "
    
    ";
        // line 10
        echo "    <hr>
    ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fruta"]) ? $context["fruta"] : null), "pera", array()), "html", null, true);
        echo "
    ";
        // line 12
        if ((is_string($__internal_14d6edf55a3349fb83c924e754aaf5ccce40ca20502162c94248489242f6d14b = $this->getAttribute((isset($context["fruta"]) ? $context["fruta"] : null), "pera", array())) && is_string($__internal_7051b4ad8d4785190a54ec16caa41f30a101563439376a024de60ab40a25e7d9 = "r") && ('' === $__internal_7051b4ad8d4785190a54ec16caa41f30a101563439376a024de60ab40a25e7d9 || 0 === strpos($__internal_14d6edf55a3349fb83c924e754aaf5ccce40ca20502162c94248489242f6d14b, $__internal_7051b4ad8d4785190a54ec16caa41f30a101563439376a024de60ab40a25e7d9)))) {
            // line 13
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["fruta"]) ? $context["fruta"] : null), "manzana", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["variable"]) ? $context["variable"] : null), "html", null, true);
        echo "
    
    <hr>
    ";
        // line 20
        if ((twig_length_filter($this->env, (isset($context["productos"]) ? $context["productos"] : null)) > 4)) {
            // line 21
            echo "    <ul>
    ";
            // line 22
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : null));
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
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["fecha"]) ? $context["fecha"] : null), "date", array()), "d/m/Y"), "html", null, true);
        echo "
     
     <hr> 
     ";
        // line 35
        $context["texto"] = "Esto es, un ejemplo,";
        // line 36
        echo "     ";
        echo twig_escape_filter($this->env, trim((isset($context["texto"]) ? $context["texto"] : null), ","), "html", null, true);
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
        echo $this->env->getExtension('app_bundle')->generateTable((isset($context["productos"]) ? $context["productos"] : null));
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
    }

    public function getTemplateName()
    {
        return "AppBundle:pruebas:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 50,  157 => 48,  153 => 47,  150 => 46,  141 => 44,  137 => 43,  132 => 41,  128 => 40,  124 => 39,  117 => 36,  115 => 35,  108 => 32,  106 => 31,  103 => 30,  99 => 28,  92 => 26,  86 => 25,  80 => 24,  77 => 23,  73 => 22,  70 => 21,  68 => 20,  61 => 17,  59 => 16,  56 => 15,  50 => 13,  48 => 12,  44 => 11,  41 => 10,  36 => 4,  31 => 3,  28 => 2,  11 => 1,);
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
