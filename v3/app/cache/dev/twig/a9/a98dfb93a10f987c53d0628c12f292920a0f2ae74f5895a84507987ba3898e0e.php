<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_a639408153395e8fe1b7e500560099c0898ac8b8a6a4fbfd2c26c961b73cc059 extends Twig_Template
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
        $__internal_92eb5b259d3d41553d3a17c6d9319773a3ed4d8fb5a07a293cb9f0f851248004 = $this->env->getExtension("native_profiler");
        $__internal_92eb5b259d3d41553d3a17c6d9319773a3ed4d8fb5a07a293cb9f0f851248004->enter($__internal_92eb5b259d3d41553d3a17c6d9319773a3ed4d8fb5a07a293cb9f0f851248004_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_92eb5b259d3d41553d3a17c6d9319773a3ed4d8fb5a07a293cb9f0f851248004->leave($__internal_92eb5b259d3d41553d3a17c6d9319773a3ed4d8fb5a07a293cb9f0f851248004_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
