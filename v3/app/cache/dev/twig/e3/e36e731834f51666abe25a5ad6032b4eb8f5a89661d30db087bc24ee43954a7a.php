<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_5ed047c85391461df441532a068c8274fd808f0a14436dd8b1f31673e85c4626 extends Twig_Template
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
        $__internal_ca6b75394cd906536613983b7ea007736118d24133c281066d57bf98fce9fc52 = $this->env->getExtension("native_profiler");
        $__internal_ca6b75394cd906536613983b7ea007736118d24133c281066d57bf98fce9fc52->enter($__internal_ca6b75394cd906536613983b7ea007736118d24133c281066d57bf98fce9fc52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_ca6b75394cd906536613983b7ea007736118d24133c281066d57bf98fce9fc52->leave($__internal_ca6b75394cd906536613983b7ea007736118d24133c281066d57bf98fce9fc52_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
