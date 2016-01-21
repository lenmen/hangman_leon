<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_ed4d6bbe32fe493257a3bce776cd260496966bfe0c7e7ffdd6fa3fc27def3357 extends Twig_Template
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
        $__internal_c85dcf2b4620d89cc67844f72d2668a73bcd6668901413dfe1f5e3455817e6ef = $this->env->getExtension("native_profiler");
        $__internal_c85dcf2b4620d89cc67844f72d2668a73bcd6668901413dfe1f5e3455817e6ef->enter($__internal_c85dcf2b4620d89cc67844f72d2668a73bcd6668901413dfe1f5e3455817e6ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_c85dcf2b4620d89cc67844f72d2668a73bcd6668901413dfe1f5e3455817e6ef->leave($__internal_c85dcf2b4620d89cc67844f72d2668a73bcd6668901413dfe1f5e3455817e6ef_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
