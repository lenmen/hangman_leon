<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_6b4d2632acd02e7568a1e2b1f34b5307b733aebbccc143f45546ad6a5dc9fcd7 extends Twig_Template
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
        $__internal_7ce926cbefc8fab4bdc7d9ea62f3ca1a9bd3935bb4dd64f026a9c4345f6c4214 = $this->env->getExtension("native_profiler");
        $__internal_7ce926cbefc8fab4bdc7d9ea62f3ca1a9bd3935bb4dd64f026a9c4345f6c4214->enter($__internal_7ce926cbefc8fab4bdc7d9ea62f3ca1a9bd3935bb4dd64f026a9c4345f6c4214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_7ce926cbefc8fab4bdc7d9ea62f3ca1a9bd3935bb4dd64f026a9c4345f6c4214->leave($__internal_7ce926cbefc8fab4bdc7d9ea62f3ca1a9bd3935bb4dd64f026a9c4345f6c4214_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
