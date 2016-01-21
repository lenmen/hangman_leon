<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_2654b15dcaecf90b745619ba8363bbe7429d5dd047010670a267b62f6b055ef0 extends Twig_Template
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
        $__internal_88573a5f44ca42c108823336de746b274cd588e2d53a038784fc73624c24b493 = $this->env->getExtension("native_profiler");
        $__internal_88573a5f44ca42c108823336de746b274cd588e2d53a038784fc73624c24b493->enter($__internal_88573a5f44ca42c108823336de746b274cd588e2d53a038784fc73624c24b493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_88573a5f44ca42c108823336de746b274cd588e2d53a038784fc73624c24b493->leave($__internal_88573a5f44ca42c108823336de746b274cd588e2d53a038784fc73624c24b493_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
