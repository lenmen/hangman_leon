<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_5df5b2053460f6e1fb2b0069afc94cffd49df17bc2be107662c40c80479c742c extends Twig_Template
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
        $__internal_409fd32544664002d3643666269aab537391c8798e884e25b475771c3beab4b1 = $this->env->getExtension("native_profiler");
        $__internal_409fd32544664002d3643666269aab537391c8798e884e25b475771c3beab4b1->enter($__internal_409fd32544664002d3643666269aab537391c8798e884e25b475771c3beab4b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_409fd32544664002d3643666269aab537391c8798e884e25b475771c3beab4b1->leave($__internal_409fd32544664002d3643666269aab537391c8798e884e25b475771c3beab4b1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
