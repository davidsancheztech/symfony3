<?php

/* BlogBundle:User:login.html.twig */
class __TwigTemplate_301effaffdd78cb52291ebd3f23d190a2be5f003a29b32d2df1ece9eb5d31529 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("BlogBundle::layout.html.twig", "BlogBundle:User:login.html.twig", 1);
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
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array(), "method"), "get", array(0 => "status"), "method"));
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
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_start', array("action" => "", "method" => "POST"));
        echo "
   ";
        // line 38
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form_end');
        echo "
    </div>
    
    <div class=\"clearfix\"></div>
";
    }

    public function getTemplateName()
    {
        return "BlogBundle:User:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 38,  89 => 37,  78 => 35,  74 => 34,  59 => 22,  54 => 20,  48 => 16,  42 => 13,  36 => 9,  33 => 8,  31 => 3,  28 => 2,  11 => 1,);
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
