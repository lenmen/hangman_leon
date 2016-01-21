<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_059c755665304addf007f00d65d669fc62bacf59b4591e3f5c7275a4ca6aba45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1f42a6de1a6b51352fe579125cdf6df3a9e8a5c6a8f4f945f27ee08411bcc06e = $this->env->getExtension("native_profiler");
        $__internal_1f42a6de1a6b51352fe579125cdf6df3a9e8a5c6a8f4f945f27ee08411bcc06e->enter($__internal_1f42a6de1a6b51352fe579125cdf6df3a9e8a5c6a8f4f945f27ee08411bcc06e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_1f42a6de1a6b51352fe579125cdf6df3a9e8a5c6a8f4f945f27ee08411bcc06e->leave($__internal_1f42a6de1a6b51352fe579125cdf6df3a9e8a5c6a8f4f945f27ee08411bcc06e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_a404a746df458cc0c75ffa24dd1d4e97d61c5bc81ae667cff36c7dc206ee746a = $this->env->getExtension("native_profiler");
        $__internal_a404a746df458cc0c75ffa24dd1d4e97d61c5bc81ae667cff36c7dc206ee746a->enter($__internal_a404a746df458cc0c75ffa24dd1d4e97d61c5bc81ae667cff36c7dc206ee746a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_a404a746df458cc0c75ffa24dd1d4e97d61c5bc81ae667cff36c7dc206ee746a->leave($__internal_a404a746df458cc0c75ffa24dd1d4e97d61c5bc81ae667cff36c7dc206ee746a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
