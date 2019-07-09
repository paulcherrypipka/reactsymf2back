<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_b5ded310bea66c0ba63c037caac95496b2a26291e3cb060b35d13c8a92e7546f extends Twig_Template
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
        $__internal_b3748c6547039e418e82a7fab003e62adab5e9fc1cd1fe6161b2f9134392931a = $this->env->getExtension("native_profiler");
        $__internal_b3748c6547039e418e82a7fab003e62adab5e9fc1cd1fe6161b2f9134392931a->enter($__internal_b3748c6547039e418e82a7fab003e62adab5e9fc1cd1fe6161b2f9134392931a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_b3748c6547039e418e82a7fab003e62adab5e9fc1cd1fe6161b2f9134392931a->leave($__internal_b3748c6547039e418e82a7fab003e62adab5e9fc1cd1fe6161b2f9134392931a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
