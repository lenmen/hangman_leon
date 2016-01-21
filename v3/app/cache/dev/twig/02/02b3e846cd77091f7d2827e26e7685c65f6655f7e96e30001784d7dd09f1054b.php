<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_705cbbedf410e49608c4577269c9903d36998305cce9f2a2de43bc5b9887d077 extends Twig_Template
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
        $__internal_70910d0e01eea3014a5a3fcb21de9cb523fe442e9ac78e51f9122bd722b27f4f = $this->env->getExtension("native_profiler");
        $__internal_70910d0e01eea3014a5a3fcb21de9cb523fe442e9ac78e51f9122bd722b27f4f->enter($__internal_70910d0e01eea3014a5a3fcb21de9cb523fe442e9ac78e51f9122bd722b27f4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_70910d0e01eea3014a5a3fcb21de9cb523fe442e9ac78e51f9122bd722b27f4f->leave($__internal_70910d0e01eea3014a5a3fcb21de9cb523fe442e9ac78e51f9122bd722b27f4f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
