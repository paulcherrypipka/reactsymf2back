<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_bff722065b3b5344297ff0acc9fd2c0ff159f84c7fe5e9db86b7dd494d13c550 extends Twig_Template
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
        $__internal_5219ae16e7456b0d87a4276fd68a251cb0ac6e2ff47b20903fc2f450277a18d4 = $this->env->getExtension("native_profiler");
        $__internal_5219ae16e7456b0d87a4276fd68a251cb0ac6e2ff47b20903fc2f450277a18d4->enter($__internal_5219ae16e7456b0d87a4276fd68a251cb0ac6e2ff47b20903fc2f450277a18d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_5219ae16e7456b0d87a4276fd68a251cb0ac6e2ff47b20903fc2f450277a18d4->leave($__internal_5219ae16e7456b0d87a4276fd68a251cb0ac6e2ff47b20903fc2f450277a18d4_prof);

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
