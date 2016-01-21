<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_99199b960c2c16cf37ca497ce2ccab0639e0c3a384a33a48f5d05cb1a8c8134b extends Twig_Template
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
        $__internal_5f3a3a98e305ac371ae9b7f163582244a8a32d8406503143122e11462ecb16f2 = $this->env->getExtension("native_profiler");
        $__internal_5f3a3a98e305ac371ae9b7f163582244a8a32d8406503143122e11462ecb16f2->enter($__internal_5f3a3a98e305ac371ae9b7f163582244a8a32d8406503143122e11462ecb16f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_5f3a3a98e305ac371ae9b7f163582244a8a32d8406503143122e11462ecb16f2->leave($__internal_5f3a3a98e305ac371ae9b7f163582244a8a32d8406503143122e11462ecb16f2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
