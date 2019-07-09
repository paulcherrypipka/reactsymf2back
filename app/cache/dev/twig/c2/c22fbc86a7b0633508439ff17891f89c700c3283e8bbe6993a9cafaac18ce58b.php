<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_2fb24e72e5d7fb961f9d38ae1e9e2e14671c4206a91ef1d37539f3c53958da49 extends Twig_Template
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
        $__internal_af2125e9f123874dfb9bdd447e0e746950657814bf3e615160919a71e53261f3 = $this->env->getExtension("native_profiler");
        $__internal_af2125e9f123874dfb9bdd447e0e746950657814bf3e615160919a71e53261f3->enter($__internal_af2125e9f123874dfb9bdd447e0e746950657814bf3e615160919a71e53261f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_af2125e9f123874dfb9bdd447e0e746950657814bf3e615160919a71e53261f3->leave($__internal_af2125e9f123874dfb9bdd447e0e746950657814bf3e615160919a71e53261f3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
