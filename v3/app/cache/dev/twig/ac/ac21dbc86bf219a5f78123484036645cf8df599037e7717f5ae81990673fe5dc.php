<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_fce1254cbeecbc088c2b1b1a4221a6b4d10666ef1b7186a152b6ec685da39f86 extends Twig_Template
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
        $__internal_ee7bcf5248c19890bd913663aa0ce03cb726557807e77adf99c815976f4d5237 = $this->env->getExtension("native_profiler");
        $__internal_ee7bcf5248c19890bd913663aa0ce03cb726557807e77adf99c815976f4d5237->enter($__internal_ee7bcf5248c19890bd913663aa0ce03cb726557807e77adf99c815976f4d5237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_ee7bcf5248c19890bd913663aa0ce03cb726557807e77adf99c815976f4d5237->leave($__internal_ee7bcf5248c19890bd913663aa0ce03cb726557807e77adf99c815976f4d5237_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
