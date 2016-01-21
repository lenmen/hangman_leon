<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_bfc9e9bf050d1b4a413524f1d904b9d7b5aa308e471e5fbbf49e81fb95537ff7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_513dfdc2273c1db1a13db769fd06a8e95210674218e5ab2c456f15b344956921 = $this->env->getExtension("native_profiler");
        $__internal_513dfdc2273c1db1a13db769fd06a8e95210674218e5ab2c456f15b344956921->enter($__internal_513dfdc2273c1db1a13db769fd06a8e95210674218e5ab2c456f15b344956921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_513dfdc2273c1db1a13db769fd06a8e95210674218e5ab2c456f15b344956921->leave($__internal_513dfdc2273c1db1a13db769fd06a8e95210674218e5ab2c456f15b344956921_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c6bdb2c4e64ece782c575147243c55d20fd4fc8d65edee5273cd76fa36c93c9a = $this->env->getExtension("native_profiler");
        $__internal_c6bdb2c4e64ece782c575147243c55d20fd4fc8d65edee5273cd76fa36c93c9a->enter($__internal_c6bdb2c4e64ece782c575147243c55d20fd4fc8d65edee5273cd76fa36c93c9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c6bdb2c4e64ece782c575147243c55d20fd4fc8d65edee5273cd76fa36c93c9a->leave($__internal_c6bdb2c4e64ece782c575147243c55d20fd4fc8d65edee5273cd76fa36c93c9a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_53ca9c810b45e966174ff1cb3cbc48694ff61c2d68bda65ca3fb157fe430735f = $this->env->getExtension("native_profiler");
        $__internal_53ca9c810b45e966174ff1cb3cbc48694ff61c2d68bda65ca3fb157fe430735f->enter($__internal_53ca9c810b45e966174ff1cb3cbc48694ff61c2d68bda65ca3fb157fe430735f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_53ca9c810b45e966174ff1cb3cbc48694ff61c2d68bda65ca3fb157fe430735f->leave($__internal_53ca9c810b45e966174ff1cb3cbc48694ff61c2d68bda65ca3fb157fe430735f_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ed5efbd13fb85de5a1a622a73ade5ffaae5e84f6d8672f8c447e6caf0db16537 = $this->env->getExtension("native_profiler");
        $__internal_ed5efbd13fb85de5a1a622a73ade5ffaae5e84f6d8672f8c447e6caf0db16537->enter($__internal_ed5efbd13fb85de5a1a622a73ade5ffaae5e84f6d8672f8c447e6caf0db16537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_ed5efbd13fb85de5a1a622a73ade5ffaae5e84f6d8672f8c447e6caf0db16537->leave($__internal_ed5efbd13fb85de5a1a622a73ade5ffaae5e84f6d8672f8c447e6caf0db16537_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
