<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_58354314964bdd6688052dcd85bfdc11dd1c409f7d7e6c69fe06f44319e13418 extends Twig_Template
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
        $__internal_77601092e0b6a90f76de42347a1b8e86d77cadc558794919f3586e4183ba1475 = $this->env->getExtension("native_profiler");
        $__internal_77601092e0b6a90f76de42347a1b8e86d77cadc558794919f3586e4183ba1475->enter($__internal_77601092e0b6a90f76de42347a1b8e86d77cadc558794919f3586e4183ba1475_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_77601092e0b6a90f76de42347a1b8e86d77cadc558794919f3586e4183ba1475->leave($__internal_77601092e0b6a90f76de42347a1b8e86d77cadc558794919f3586e4183ba1475_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
