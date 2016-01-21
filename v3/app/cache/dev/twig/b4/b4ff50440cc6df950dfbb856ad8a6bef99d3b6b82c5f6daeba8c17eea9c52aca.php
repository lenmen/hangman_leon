<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_d5ea790994e55b7219b83ab4bce5c6f1d4f0b5ee9a02bfd2e1197ef4ec836b76 extends Twig_Template
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
        $__internal_b09322b23d7ed90d7590e279b0ff5728916295a169e88a2621db08a602a08a0d = $this->env->getExtension("native_profiler");
        $__internal_b09322b23d7ed90d7590e279b0ff5728916295a169e88a2621db08a602a08a0d->enter($__internal_b09322b23d7ed90d7590e279b0ff5728916295a169e88a2621db08a602a08a0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_b09322b23d7ed90d7590e279b0ff5728916295a169e88a2621db08a602a08a0d->leave($__internal_b09322b23d7ed90d7590e279b0ff5728916295a169e88a2621db08a602a08a0d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
