<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_11d4ec4a500a6494d6d121add0c0e474a2f4f722feaabfd8f1b591e53a18b468 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_42f0702b1047fbefb5110a4423b136c1fd44e5335a6be24c5b22d2c46404dee3 = $this->env->getExtension("native_profiler");
        $__internal_42f0702b1047fbefb5110a4423b136c1fd44e5335a6be24c5b22d2c46404dee3->enter($__internal_42f0702b1047fbefb5110a4423b136c1fd44e5335a6be24c5b22d2c46404dee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_42f0702b1047fbefb5110a4423b136c1fd44e5335a6be24c5b22d2c46404dee3->leave($__internal_42f0702b1047fbefb5110a4423b136c1fd44e5335a6be24c5b22d2c46404dee3_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fe9e7b8206124d23a26651a23b84f22cf8519d9873c7c7466a76a73becc706e7 = $this->env->getExtension("native_profiler");
        $__internal_fe9e7b8206124d23a26651a23b84f22cf8519d9873c7c7466a76a73becc706e7->enter($__internal_fe9e7b8206124d23a26651a23b84f22cf8519d9873c7c7466a76a73becc706e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fe9e7b8206124d23a26651a23b84f22cf8519d9873c7c7466a76a73becc706e7->leave($__internal_fe9e7b8206124d23a26651a23b84f22cf8519d9873c7c7466a76a73becc706e7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_73806b371b78672b2461e94c77656573eaa69cb98e223a51044b1d96cb0abb69 = $this->env->getExtension("native_profiler");
        $__internal_73806b371b78672b2461e94c77656573eaa69cb98e223a51044b1d96cb0abb69->enter($__internal_73806b371b78672b2461e94c77656573eaa69cb98e223a51044b1d96cb0abb69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_73806b371b78672b2461e94c77656573eaa69cb98e223a51044b1d96cb0abb69->leave($__internal_73806b371b78672b2461e94c77656573eaa69cb98e223a51044b1d96cb0abb69_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ac9aa8425d15dac1c04f84f034006e3c9550a2f94dc0bf90ee99da549179a19e = $this->env->getExtension("native_profiler");
        $__internal_ac9aa8425d15dac1c04f84f034006e3c9550a2f94dc0bf90ee99da549179a19e->enter($__internal_ac9aa8425d15dac1c04f84f034006e3c9550a2f94dc0bf90ee99da549179a19e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ac9aa8425d15dac1c04f84f034006e3c9550a2f94dc0bf90ee99da549179a19e->leave($__internal_ac9aa8425d15dac1c04f84f034006e3c9550a2f94dc0bf90ee99da549179a19e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
