<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_be2d801bb5a8ae91f7ae7fe5f72399eb3a7951f697524a9fd58e8228ba9b4fc5 extends Twig_Template
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
        $__internal_3543355c99c95f5bbcea10dbd81e5d509c1079ddfb4faab33b9f9801c09b5302 = $this->env->getExtension("native_profiler");
        $__internal_3543355c99c95f5bbcea10dbd81e5d509c1079ddfb4faab33b9f9801c09b5302->enter($__internal_3543355c99c95f5bbcea10dbd81e5d509c1079ddfb4faab33b9f9801c09b5302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_3543355c99c95f5bbcea10dbd81e5d509c1079ddfb4faab33b9f9801c09b5302->leave($__internal_3543355c99c95f5bbcea10dbd81e5d509c1079ddfb4faab33b9f9801c09b5302_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
