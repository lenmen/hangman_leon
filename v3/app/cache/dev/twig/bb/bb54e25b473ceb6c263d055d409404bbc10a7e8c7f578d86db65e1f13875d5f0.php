<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_1481935c788ce49fd6c63824c268ebe352172a58609ce7e204bdac854fc5e5d6 extends Twig_Template
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
        $__internal_41b47feeb89dbf630ee08c4c5105a25b8fa684bfad023d7a353532de2765f603 = $this->env->getExtension("native_profiler");
        $__internal_41b47feeb89dbf630ee08c4c5105a25b8fa684bfad023d7a353532de2765f603->enter($__internal_41b47feeb89dbf630ee08c4c5105a25b8fa684bfad023d7a353532de2765f603_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_41b47feeb89dbf630ee08c4c5105a25b8fa684bfad023d7a353532de2765f603->leave($__internal_41b47feeb89dbf630ee08c4c5105a25b8fa684bfad023d7a353532de2765f603_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
