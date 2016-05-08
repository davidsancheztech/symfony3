<?php

/* BlogBundle:user:login.html.twig */
class __TwigTemplate_8f0602768aa0d7b97ed7e90027131e72b7c6ade88841f1023bee4fe805ef421f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogBundle::layout.html.twig", "BlogBundle:user:login.html.twig", 1);
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
        $__internal_144199edc487de78500be243ca9f82311f505fe9f41f64222e3f65721be1151c = $this->env->getExtension("native_profiler");
        $__internal_144199edc487de78500be243ca9f82311f505fe9f41f64222e3f65721be1151c->enter($__internal_144199edc487de78500be243ca9f82311f505fe9f41f64222e3f65721be1151c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:user:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_144199edc487de78500be243ca9f82311f505fe9f41f64222e3f65721be1151c->leave($__internal_144199edc487de78500be243ca9f82311f505fe9f41f64222e3f65721be1151c_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_b95e37329be8ca3f12195bd2636fed5090079036a523b83e2936b0793897e47a = $this->env->getExtension("native_profiler");
        $__internal_b95e37329be8ca3f12195bd2636fed5090079036a523b83e2936b0793897e47a->enter($__internal_b95e37329be8ca3f12195bd2636fed5090079036a523b83e2936b0793897e47a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    ";
        // line 8
        echo "    ";
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 9
            echo "        <strong>
            Estas logeado como usuario normal
        </strong>
    ";
        } elseif ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 13
            echo "        <strong>
            Estas logeado como usuario ADMINISTRADOR TODOPODEROSO
        </strong>
    ";
        }
        // line 16
        echo " 
    <div class=\"col-lg-4\">
    <h2>Identifícate</h2>
    <hr/>
    <form action=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
        <label>Email:</label>
        <input type=\"email\" id=\"username\" name=\"_username\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" class=\"form-control\"/>
        <br/>
        <label>Contraseña:</label>
        <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\"/>
        <br/>
        <input type=\"submit\" value=\"Entrar\" class=\"btn btn-success\"/>
        <input type=\"hidden\" name=\"_target_path\" value=\"/login\" />
    </form>
    </div>
    <div class=\"col-lg-4\">
    <h2>Registrate</h2>
    <hr/>
   ";
        // line 34
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => "", "method" => "POST"));
        echo "
   ";
        // line 35
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
    
    <div class=\"clearfix\"></div>
";
        
        $__internal_b95e37329be8ca3f12195bd2636fed5090079036a523b83e2936b0793897e47a->leave($__internal_b95e37329be8ca3f12195bd2636fed5090079036a523b83e2936b0793897e47a_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:user:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 35,  83 => 34,  68 => 22,  63 => 20,  57 => 16,  51 => 13,  45 => 9,  42 => 8,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "BlogBundle::layout.html.twig" %}*/
/* {% block content %}*/
/*     {#*/
/*     {% if app.user != null %}*/
/*     {{ dump(app.user) }}*/
/*     {% endif %}*/
/*     #}*/
/*     {% if is_granted('ROLE_USER') %}*/
/*         <strong>*/
/*             Estas logeado como usuario normal*/
/*         </strong>*/
/*     {% elseif is_granted('ROLE_ADMIN') %}*/
/*         <strong>*/
/*             Estas logeado como usuario ADMINISTRADOR TODOPODEROSO*/
/*         </strong>*/
/*     {% endif %} */
/*     <div class="col-lg-4">*/
/*     <h2>Identifícate</h2>*/
/*     <hr/>*/
/*     <form action="{{path("login_check")}}" method="post">*/
/*         <label>Email:</label>*/
/*         <input type="email" id="username" name="_username" value="{{ last_username }}" class="form-control"/>*/
/*         <br/>*/
/*         <label>Contraseña:</label>*/
/*         <input type="password" id="password" name="_password" class="form-control"/>*/
/*         <br/>*/
/*         <input type="submit" value="Entrar" class="btn btn-success"/>*/
/*         <input type="hidden" name="_target_path" value="/login" />*/
/*     </form>*/
/*     </div>*/
/*     <div class="col-lg-4">*/
/*     <h2>Registrate</h2>*/
/*     <hr/>*/
/*    {{ form_start(form, {'action':'', 'method':'POST'}) }}*/
/*    {{ form_end(form) }}*/
/*     </div>*/
/*     */
/*     <div class="clearfix"></div>*/
/* {% endblock %}*/
