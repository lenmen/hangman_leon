<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_68b5f286755d2f51997582c7265c1a37720cf8909ebcec036a392e7bbfb2f7cb extends Twig_Template
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
        $__internal_05c93ef438aa0d3036a454cf798e2fdd34ad3ecf6f658d9de8a35db71872e44f = $this->env->getExtension("native_profiler");
        $__internal_05c93ef438aa0d3036a454cf798e2fdd34ad3ecf6f658d9de8a35db71872e44f->enter($__internal_05c93ef438aa0d3036a454cf798e2fdd34ad3ecf6f658d9de8a35db71872e44f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_05c93ef438aa0d3036a454cf798e2fdd34ad3ecf6f658d9de8a35db71872e44f->leave($__internal_05c93ef438aa0d3036a454cf798e2fdd34ad3ecf6f658d9de8a35db71872e44f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
