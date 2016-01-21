<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_cf2fd484e186713353577cb801586f66d9c6a6bd3bca43a7471cfee475dbdb16 extends Twig_Template
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
        $__internal_d377eb85c080771d5292ad35e25288120c62489c2c948c5df4d05f7317de017a = $this->env->getExtension("native_profiler");
        $__internal_d377eb85c080771d5292ad35e25288120c62489c2c948c5df4d05f7317de017a->enter($__internal_d377eb85c080771d5292ad35e25288120c62489c2c948c5df4d05f7317de017a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_d377eb85c080771d5292ad35e25288120c62489c2c948c5df4d05f7317de017a->leave($__internal_d377eb85c080771d5292ad35e25288120c62489c2c948c5df4d05f7317de017a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
