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
        $__internal_b4d60c9c3db8a4e9bbcb4798cb86520b24baeb3bae7c1f03045b36bd41739a89 = $this->env->getExtension("native_profiler");
        $__internal_b4d60c9c3db8a4e9bbcb4798cb86520b24baeb3bae7c1f03045b36bd41739a89->enter($__internal_b4d60c9c3db8a4e9bbcb4798cb86520b24baeb3bae7c1f03045b36bd41739a89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:user:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b4d60c9c3db8a4e9bbcb4798cb86520b24baeb3bae7c1f03045b36bd41739a89->leave($__internal_b4d60c9c3db8a4e9bbcb4798cb86520b24baeb3bae7c1f03045b36bd41739a89_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_9002b79a33d5e0336ae5e985fee84820cc676c2b73cdbbfa50fb6269e84d27cc = $this->env->getExtension("native_profiler");
        $__internal_9002b79a33d5e0336ae5e985fee84820cc676c2b73cdbbfa50fb6269e84d27cc->enter($__internal_9002b79a33d5e0336ae5e985fee84820cc676c2b73cdbbfa50fb6269e84d27cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array(), "method"), "get", array(0 => "status"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 35
            echo "        <div class=\"alert alert-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "css", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "status", array()), "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "   ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("action" => "", "method" => "POST"));
        echo "
   ";
        // line 38
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
    
    <div class=\"clearfix\"></div>
";
        
        $__internal_9002b79a33d5e0336ae5e985fee84820cc676c2b73cdbbfa50fb6269e84d27cc->leave($__internal_9002b79a33d5e0336ae5e985fee84820cc676c2b73cdbbfa50fb6269e84d27cc_prof);

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
        return array (  103 => 38,  98 => 37,  87 => 35,  83 => 34,  68 => 22,  63 => 20,  57 => 16,  51 => 13,  45 => 9,  42 => 8,  40 => 3,  34 => 2,  11 => 1,);
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
/*     {% for message in app.session.flashbag().get("status") %}*/
/*         <div class="alert alert-{{message.css}}">{{ message.status }}</div>*/
/*     {% endfor %}*/
/*    {{ form_start(form, {'action':'', 'method':'POST'}) }}*/
/*    {{ form_end(form) }}*/
/*     </div>*/
/*     */
/*     <div class="clearfix"></div>*/
/* {% endblock %}*/
