<?php

/* AppBundle:pruebas:form.html.twig */
class __TwigTemplate_db8ec491c2598164fac77af99184f4b272837acec01ab29e21c8be012a94d9c2 extends Twig_Template
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
        // line 1
        echo "<h2>Formulario con Symfony3</h2>

";
        // line 3
        if ((((isset($context["status"]) ? $context["status"] : null) != null) && ((isset($context["data"]) ? $context["data"] : null) != null))) {
            // line 4
            echo "    <h3>";
            echo twig_escape_filter($this->env, (isset($context["status"]) ? $context["status"] : null), "html", null, true);
            echo "</h3>
    ";
            // line 5
            echo $this->env->getExtension('dump')->dump($this->env, $context, (isset($context["data"]) ? $context["data"] : null));
            echo "
";
        }
        // line 7
        echo "
";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("action" => "", "method" => "POST"));
        echo "
    ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'errors');
        echo "
    ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
        echo "
";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
    }

    public function getTemplateName()
    {
        return "AppBundle:pruebas:form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 11,  46 => 10,  42 => 9,  38 => 8,  35 => 7,  30 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }
}
/* <h2>Formulario con Symfony3</h2>*/
/* */
/* {% if (status != NULL) and (data != NULL) %}*/
/*     <h3>{{status}}</h3>*/
/*     {{dump(data)}}*/
/* {%endif%}*/
/* */
/* {{form_start(form, {'action':'','method':'POST'})}}*/
/*     {{form_errors(form)}}*/
/*     {{form_widget(form)}}*/
/* {{form_end(form)}}*/
