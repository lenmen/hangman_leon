<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_df45c91669a15a98104562ff67b75a6e6e566b1a1283045153b8d2b057de5e13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7d16807c605a0e2651601ff7d1deaf36a271cc89b7c46ad9ecfb8256ea38d7da = $this->env->getExtension("native_profiler");
        $__internal_7d16807c605a0e2651601ff7d1deaf36a271cc89b7c46ad9ecfb8256ea38d7da->enter($__internal_7d16807c605a0e2651601ff7d1deaf36a271cc89b7c46ad9ecfb8256ea38d7da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7d16807c605a0e2651601ff7d1deaf36a271cc89b7c46ad9ecfb8256ea38d7da->leave($__internal_7d16807c605a0e2651601ff7d1deaf36a271cc89b7c46ad9ecfb8256ea38d7da_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6a9414616b9c47cc1c1f3c983712aaf48bf3ce5bb3f9f08d41915f06abb10b56 = $this->env->getExtension("native_profiler");
        $__internal_6a9414616b9c47cc1c1f3c983712aaf48bf3ce5bb3f9f08d41915f06abb10b56->enter($__internal_6a9414616b9c47cc1c1f3c983712aaf48bf3ce5bb3f9f08d41915f06abb10b56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_6a9414616b9c47cc1c1f3c983712aaf48bf3ce5bb3f9f08d41915f06abb10b56->leave($__internal_6a9414616b9c47cc1c1f3c983712aaf48bf3ce5bb3f9f08d41915f06abb10b56_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_05096a3de07a851be0a4fd806dd52505bf74b068a7260508b793df470a95a7b8 = $this->env->getExtension("native_profiler");
        $__internal_05096a3de07a851be0a4fd806dd52505bf74b068a7260508b793df470a95a7b8->enter($__internal_05096a3de07a851be0a4fd806dd52505bf74b068a7260508b793df470a95a7b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_05096a3de07a851be0a4fd806dd52505bf74b068a7260508b793df470a95a7b8->leave($__internal_05096a3de07a851be0a4fd806dd52505bf74b068a7260508b793df470a95a7b8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
