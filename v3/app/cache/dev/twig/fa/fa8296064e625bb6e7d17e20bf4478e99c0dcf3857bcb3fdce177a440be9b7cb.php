<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_71a28e2e1facfc13ad7d9a2ae9a470c84f6cd2902a2ce526bb103454293850ac extends Twig_Template
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
        $__internal_fb060cc942761581f2c7d8510eeb4aa2b4b8d58d7e639370ac1165a7b0794191 = $this->env->getExtension("native_profiler");
        $__internal_fb060cc942761581f2c7d8510eeb4aa2b4b8d58d7e639370ac1165a7b0794191->enter($__internal_fb060cc942761581f2c7d8510eeb4aa2b4b8d58d7e639370ac1165a7b0794191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_fb060cc942761581f2c7d8510eeb4aa2b4b8d58d7e639370ac1165a7b0794191->leave($__internal_fb060cc942761581f2c7d8510eeb4aa2b4b8d58d7e639370ac1165a7b0794191_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
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
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
