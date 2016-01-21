<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_5e921746427a0a02b7db36ea8be357d7abff665919c72f70028edd5ca9030790 extends Twig_Template
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
        $__internal_926e05b1da0428867b5a50eb9c4b340f0ff016277e11d1819c9e84fc2dc7d71d = $this->env->getExtension("native_profiler");
        $__internal_926e05b1da0428867b5a50eb9c4b340f0ff016277e11d1819c9e84fc2dc7d71d->enter($__internal_926e05b1da0428867b5a50eb9c4b340f0ff016277e11d1819c9e84fc2dc7d71d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_926e05b1da0428867b5a50eb9c4b340f0ff016277e11d1819c9e84fc2dc7d71d->leave($__internal_926e05b1da0428867b5a50eb9c4b340f0ff016277e11d1819c9e84fc2dc7d71d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
