<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_bce4f26e9a24de20ca3b04202dc8d62bc2d1d6f2954bc7430bbd3e8ed76b6bc9 extends Twig_Template
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
        $__internal_fe2e9f2f00c13ec7c4774f2086f753e4eba57c9d88e5ce4714f2a56e589dadab = $this->env->getExtension("native_profiler");
        $__internal_fe2e9f2f00c13ec7c4774f2086f753e4eba57c9d88e5ce4714f2a56e589dadab->enter($__internal_fe2e9f2f00c13ec7c4774f2086f753e4eba57c9d88e5ce4714f2a56e589dadab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_fe2e9f2f00c13ec7c4774f2086f753e4eba57c9d88e5ce4714f2a56e589dadab->leave($__internal_fe2e9f2f00c13ec7c4774f2086f753e4eba57c9d88e5ce4714f2a56e589dadab_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
