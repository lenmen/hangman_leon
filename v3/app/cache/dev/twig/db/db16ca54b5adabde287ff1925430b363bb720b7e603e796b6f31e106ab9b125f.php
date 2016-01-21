<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_e3b56ae21986e488cfe7a3b84ebd46350088b08d92c731e0b46b474deadc9e75 extends Twig_Template
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
        $__internal_3a5685f366622cf185935457b1d60646fd708f8a5aa0c122b39fee81f63d5266 = $this->env->getExtension("native_profiler");
        $__internal_3a5685f366622cf185935457b1d60646fd708f8a5aa0c122b39fee81f63d5266->enter($__internal_3a5685f366622cf185935457b1d60646fd708f8a5aa0c122b39fee81f63d5266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_3a5685f366622cf185935457b1d60646fd708f8a5aa0c122b39fee81f63d5266->leave($__internal_3a5685f366622cf185935457b1d60646fd708f8a5aa0c122b39fee81f63d5266_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
