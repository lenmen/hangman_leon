<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_d3f51130a21a75492f904fbb3418b3cac09a30c580a7d6a50b307acad47a2551 extends Twig_Template
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
        $__internal_e28599d87f9ca8fc3d1e89891b38541170b58fdeebe884021d9e65b6a68bb266 = $this->env->getExtension("native_profiler");
        $__internal_e28599d87f9ca8fc3d1e89891b38541170b58fdeebe884021d9e65b6a68bb266->enter($__internal_e28599d87f9ca8fc3d1e89891b38541170b58fdeebe884021d9e65b6a68bb266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_e28599d87f9ca8fc3d1e89891b38541170b58fdeebe884021d9e65b6a68bb266->leave($__internal_e28599d87f9ca8fc3d1e89891b38541170b58fdeebe884021d9e65b6a68bb266_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
