<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_7d3819e716023cefd0869c2b28b1991dd330e273c4af310b46fc3b31d113e1ec extends Twig_Template
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
        $__internal_d8c2b9a17007e8605d8221718f520a06afa39c336bd63d5b18172168f6056cbe = $this->env->getExtension("native_profiler");
        $__internal_d8c2b9a17007e8605d8221718f520a06afa39c336bd63d5b18172168f6056cbe->enter($__internal_d8c2b9a17007e8605d8221718f520a06afa39c336bd63d5b18172168f6056cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_d8c2b9a17007e8605d8221718f520a06afa39c336bd63d5b18172168f6056cbe->leave($__internal_d8c2b9a17007e8605d8221718f520a06afa39c336bd63d5b18172168f6056cbe_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
