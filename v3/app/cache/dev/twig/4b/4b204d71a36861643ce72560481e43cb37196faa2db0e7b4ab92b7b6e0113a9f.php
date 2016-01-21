<?php

/* ::base.html.twig */
class __TwigTemplate_6ab83946c953bf97c341fafa07e8f1fa58f94cebbdb0b7be1de1a32e33884c4f extends Twig_Template
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
        $__internal_a1a0e1809631f156ae6165a636bfaca82e3c0b0cb621a72ac33da7c8fe1e99d7 = $this->env->getExtension("native_profiler");
        $__internal_a1a0e1809631f156ae6165a636bfaca82e3c0b0cb621a72ac33da7c8fe1e99d7->enter($__internal_a1a0e1809631f156ae6165a636bfaca82e3c0b0cb621a72ac33da7c8fe1e99d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_a1a0e1809631f156ae6165a636bfaca82e3c0b0cb621a72ac33da7c8fe1e99d7->leave($__internal_a1a0e1809631f156ae6165a636bfaca82e3c0b0cb621a72ac33da7c8fe1e99d7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_421a85d9247094d9081c4d86dd9219965617e0eabd58ad429d1e00c9609177dc = $this->env->getExtension("native_profiler");
        $__internal_421a85d9247094d9081c4d86dd9219965617e0eabd58ad429d1e00c9609177dc->enter($__internal_421a85d9247094d9081c4d86dd9219965617e0eabd58ad429d1e00c9609177dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_421a85d9247094d9081c4d86dd9219965617e0eabd58ad429d1e00c9609177dc->leave($__internal_421a85d9247094d9081c4d86dd9219965617e0eabd58ad429d1e00c9609177dc_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4b21cbfd01916fea4c97154eef667fba7ab70ffd2bab97226738317b5aa155b5 = $this->env->getExtension("native_profiler");
        $__internal_4b21cbfd01916fea4c97154eef667fba7ab70ffd2bab97226738317b5aa155b5->enter($__internal_4b21cbfd01916fea4c97154eef667fba7ab70ffd2bab97226738317b5aa155b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_4b21cbfd01916fea4c97154eef667fba7ab70ffd2bab97226738317b5aa155b5->leave($__internal_4b21cbfd01916fea4c97154eef667fba7ab70ffd2bab97226738317b5aa155b5_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1bee825ea56f5365a1fef6c6b3e3d03408600a39931c0c32bdd2d5486a9f85d6 = $this->env->getExtension("native_profiler");
        $__internal_1bee825ea56f5365a1fef6c6b3e3d03408600a39931c0c32bdd2d5486a9f85d6->enter($__internal_1bee825ea56f5365a1fef6c6b3e3d03408600a39931c0c32bdd2d5486a9f85d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1bee825ea56f5365a1fef6c6b3e3d03408600a39931c0c32bdd2d5486a9f85d6->leave($__internal_1bee825ea56f5365a1fef6c6b3e3d03408600a39931c0c32bdd2d5486a9f85d6_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1880b1ba8da810bc13076b0ae3e32d1c3fa2ba8d131c484da0844e53c413d909 = $this->env->getExtension("native_profiler");
        $__internal_1880b1ba8da810bc13076b0ae3e32d1c3fa2ba8d131c484da0844e53c413d909->enter($__internal_1880b1ba8da810bc13076b0ae3e32d1c3fa2ba8d131c484da0844e53c413d909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1880b1ba8da810bc13076b0ae3e32d1c3fa2ba8d131c484da0844e53c413d909->leave($__internal_1880b1ba8da810bc13076b0ae3e32d1c3fa2ba8d131c484da0844e53c413d909_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
