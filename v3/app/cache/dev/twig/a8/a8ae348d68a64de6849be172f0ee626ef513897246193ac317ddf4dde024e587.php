<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_7a895d997fcc2900fd50f54a7aaabb4847e074c163c716c0cde663a997ec3125 extends Twig_Template
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
        $__internal_c49f38ce79c35a73043cb76c643c36be5f8054dba693da339a63a83a2611dd3c = $this->env->getExtension("native_profiler");
        $__internal_c49f38ce79c35a73043cb76c643c36be5f8054dba693da339a63a83a2611dd3c->enter($__internal_c49f38ce79c35a73043cb76c643c36be5f8054dba693da339a63a83a2611dd3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_c49f38ce79c35a73043cb76c643c36be5f8054dba693da339a63a83a2611dd3c->leave($__internal_c49f38ce79c35a73043cb76c643c36be5f8054dba693da339a63a83a2611dd3c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
