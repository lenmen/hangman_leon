<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_1026223c50aeb9387a64768274b9c2e9454d38626a480339725166d3e85419a0 extends Twig_Template
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
        $__internal_c382d808a1d02917bad29fe4df4d7cec2e737dc31ee3c6402ef22973a50e7621 = $this->env->getExtension("native_profiler");
        $__internal_c382d808a1d02917bad29fe4df4d7cec2e737dc31ee3c6402ef22973a50e7621->enter($__internal_c382d808a1d02917bad29fe4df4d7cec2e737dc31ee3c6402ef22973a50e7621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_c382d808a1d02917bad29fe4df4d7cec2e737dc31ee3c6402ef22973a50e7621->leave($__internal_c382d808a1d02917bad29fe4df4d7cec2e737dc31ee3c6402ef22973a50e7621_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
