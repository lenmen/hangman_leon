<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_304fbb75e0ba7e398f6d85de73b1d3a6a73bcc8b192dbcf0d5c078296ace13c4 extends Twig_Template
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
        $__internal_0ae88ff3f702aa8a00306d6911e92d7a4c4d610e6789108f51917f18edf104c8 = $this->env->getExtension("native_profiler");
        $__internal_0ae88ff3f702aa8a00306d6911e92d7a4c4d610e6789108f51917f18edf104c8->enter($__internal_0ae88ff3f702aa8a00306d6911e92d7a4c4d610e6789108f51917f18edf104c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_0ae88ff3f702aa8a00306d6911e92d7a4c4d610e6789108f51917f18edf104c8->leave($__internal_0ae88ff3f702aa8a00306d6911e92d7a4c4d610e6789108f51917f18edf104c8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
