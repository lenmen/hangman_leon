<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_09ffe955adaa26d415e2533077461c2b0111c73d0bd3881fd82c1d8667dfbda7 extends Twig_Template
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
        $__internal_5d719121e63a96e1948ad2e7093fa46477bb8877951ea0c1158b1b89d7151334 = $this->env->getExtension("native_profiler");
        $__internal_5d719121e63a96e1948ad2e7093fa46477bb8877951ea0c1158b1b89d7151334->enter($__internal_5d719121e63a96e1948ad2e7093fa46477bb8877951ea0c1158b1b89d7151334_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_5d719121e63a96e1948ad2e7093fa46477bb8877951ea0c1158b1b89d7151334->leave($__internal_5d719121e63a96e1948ad2e7093fa46477bb8877951ea0c1158b1b89d7151334_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
