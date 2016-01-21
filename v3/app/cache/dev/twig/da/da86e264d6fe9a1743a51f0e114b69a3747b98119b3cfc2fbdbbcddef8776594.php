<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_578c7c34e62cbffa79b50773cdb71a30e5bd4d518ece15d420d6a52b703fc8c4 extends Twig_Template
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
        $__internal_21be6b863b594ebc689194afb0389dd159066c521896fc46eb5f33cb6b4e3450 = $this->env->getExtension("native_profiler");
        $__internal_21be6b863b594ebc689194afb0389dd159066c521896fc46eb5f33cb6b4e3450->enter($__internal_21be6b863b594ebc689194afb0389dd159066c521896fc46eb5f33cb6b4e3450_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_21be6b863b594ebc689194afb0389dd159066c521896fc46eb5f33cb6b4e3450->leave($__internal_21be6b863b594ebc689194afb0389dd159066c521896fc46eb5f33cb6b4e3450_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
