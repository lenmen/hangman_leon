<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_f4b135ace0f0c7f13cd70d62587bf88c3435ca9a0a8ea92d8abb4750786f3bae extends Twig_Template
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
        $__internal_fb659f19168425243e557d662cbc1d78030747edda7df049dec00264f4a235c8 = $this->env->getExtension("native_profiler");
        $__internal_fb659f19168425243e557d662cbc1d78030747edda7df049dec00264f4a235c8->enter($__internal_fb659f19168425243e557d662cbc1d78030747edda7df049dec00264f4a235c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_fb659f19168425243e557d662cbc1d78030747edda7df049dec00264f4a235c8->leave($__internal_fb659f19168425243e557d662cbc1d78030747edda7df049dec00264f4a235c8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
