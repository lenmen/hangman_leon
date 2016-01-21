<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_4331214ba66dce0ca4ddd4e1c594446e2e5b23d173bea6704ade2700a1683ae1 extends Twig_Template
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
        $__internal_237273990f8f9abdc48ab26ce5bdfc2140180d3fbabe8bada8398045deccf4ef = $this->env->getExtension("native_profiler");
        $__internal_237273990f8f9abdc48ab26ce5bdfc2140180d3fbabe8bada8398045deccf4ef->enter($__internal_237273990f8f9abdc48ab26ce5bdfc2140180d3fbabe8bada8398045deccf4ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_237273990f8f9abdc48ab26ce5bdfc2140180d3fbabe8bada8398045deccf4ef->leave($__internal_237273990f8f9abdc48ab26ce5bdfc2140180d3fbabe8bada8398045deccf4ef_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
