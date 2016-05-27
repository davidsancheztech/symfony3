<?php

/* base.html.twig */
class __TwigTemplate_2d7fa30de74c047b11caf49c17102fec2fd264b12745d83f0fc31a36360621bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_005570cc5096ff2edcbfbf271bc1d043e2be018f57811d03b9ecfa758904812f = $this->env->getExtension("native_profiler");
        $__internal_005570cc5096ff2edcbfbf271bc1d043e2be018f57811d03b9ecfa758904812f->enter($__internal_005570cc5096ff2edcbfbf271bc1d043e2be018f57811d03b9ecfa758904812f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_005570cc5096ff2edcbfbf271bc1d043e2be018f57811d03b9ecfa758904812f->leave($__internal_005570cc5096ff2edcbfbf271bc1d043e2be018f57811d03b9ecfa758904812f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bd0755515e39dce60ee7cf1bbd160e5f3b4b4b3f2c8a02d7fbf28c6290a95dcb = $this->env->getExtension("native_profiler");
        $__internal_bd0755515e39dce60ee7cf1bbd160e5f3b4b4b3f2c8a02d7fbf28c6290a95dcb->enter($__internal_bd0755515e39dce60ee7cf1bbd160e5f3b4b4b3f2c8a02d7fbf28c6290a95dcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_bd0755515e39dce60ee7cf1bbd160e5f3b4b4b3f2c8a02d7fbf28c6290a95dcb->leave($__internal_bd0755515e39dce60ee7cf1bbd160e5f3b4b4b3f2c8a02d7fbf28c6290a95dcb_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_00da69c91af8c6e7553b4b96fe39c5be6156cf162fdf8ccdb5e2f04270b164ab = $this->env->getExtension("native_profiler");
        $__internal_00da69c91af8c6e7553b4b96fe39c5be6156cf162fdf8ccdb5e2f04270b164ab->enter($__internal_00da69c91af8c6e7553b4b96fe39c5be6156cf162fdf8ccdb5e2f04270b164ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_00da69c91af8c6e7553b4b96fe39c5be6156cf162fdf8ccdb5e2f04270b164ab->leave($__internal_00da69c91af8c6e7553b4b96fe39c5be6156cf162fdf8ccdb5e2f04270b164ab_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_3cba4b3d19c4d75118c73825129384533b76147bed768afe1f3a549023a8f09c = $this->env->getExtension("native_profiler");
        $__internal_3cba4b3d19c4d75118c73825129384533b76147bed768afe1f3a549023a8f09c->enter($__internal_3cba4b3d19c4d75118c73825129384533b76147bed768afe1f3a549023a8f09c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3cba4b3d19c4d75118c73825129384533b76147bed768afe1f3a549023a8f09c->leave($__internal_3cba4b3d19c4d75118c73825129384533b76147bed768afe1f3a549023a8f09c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9f347392ff26942bf57873ae59b23ea3159ed106410aca9700b6cbf1d9b8b3fa = $this->env->getExtension("native_profiler");
        $__internal_9f347392ff26942bf57873ae59b23ea3159ed106410aca9700b6cbf1d9b8b3fa->enter($__internal_9f347392ff26942bf57873ae59b23ea3159ed106410aca9700b6cbf1d9b8b3fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9f347392ff26942bf57873ae59b23ea3159ed106410aca9700b6cbf1d9b8b3fa->leave($__internal_9f347392ff26942bf57873ae59b23ea3159ed106410aca9700b6cbf1d9b8b3fa_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
