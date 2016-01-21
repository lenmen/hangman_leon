<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_a59236bd5e2196c50e04397c79260dc500ced00133f0f9755b26675182c3be00 extends Twig_Template
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
        $__internal_baabd4e497167bdb74f51a4f48061bc1feaa9edd703539c374030dcb75b6ffdf = $this->env->getExtension("native_profiler");
        $__internal_baabd4e497167bdb74f51a4f48061bc1feaa9edd703539c374030dcb75b6ffdf->enter($__internal_baabd4e497167bdb74f51a4f48061bc1feaa9edd703539c374030dcb75b6ffdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_baabd4e497167bdb74f51a4f48061bc1feaa9edd703539c374030dcb75b6ffdf->leave($__internal_baabd4e497167bdb74f51a4f48061bc1feaa9edd703539c374030dcb75b6ffdf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
