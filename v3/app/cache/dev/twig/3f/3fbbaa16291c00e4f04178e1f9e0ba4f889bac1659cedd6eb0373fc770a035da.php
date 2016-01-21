<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_5ea9ff0d6abef8a3b8275cef2196701107f9ab6db74e4f255e733a49a7ac235a extends Twig_Template
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
        $__internal_12aa8075acaf1dcab624addc2c3955d71cf6fa4a154616dacf93614d71f4086c = $this->env->getExtension("native_profiler");
        $__internal_12aa8075acaf1dcab624addc2c3955d71cf6fa4a154616dacf93614d71f4086c->enter($__internal_12aa8075acaf1dcab624addc2c3955d71cf6fa4a154616dacf93614d71f4086c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_12aa8075acaf1dcab624addc2c3955d71cf6fa4a154616dacf93614d71f4086c->leave($__internal_12aa8075acaf1dcab624addc2c3955d71cf6fa4a154616dacf93614d71f4086c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
