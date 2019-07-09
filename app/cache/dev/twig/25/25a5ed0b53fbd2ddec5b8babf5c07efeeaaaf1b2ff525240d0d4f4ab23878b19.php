<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_4664f87aaeef6d23bd0dfcd14513488bd0a92fa06a6f171fb55d4d47eab8ebc3 extends Twig_Template
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
        $__internal_f66e8c9c80629bf6fa0c45ec96477173f04e275d9111d4e428d655b8f84652c3 = $this->env->getExtension("native_profiler");
        $__internal_f66e8c9c80629bf6fa0c45ec96477173f04e275d9111d4e428d655b8f84652c3->enter($__internal_f66e8c9c80629bf6fa0c45ec96477173f04e275d9111d4e428d655b8f84652c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_f66e8c9c80629bf6fa0c45ec96477173f04e275d9111d4e428d655b8f84652c3->leave($__internal_f66e8c9c80629bf6fa0c45ec96477173f04e275d9111d4e428d655b8f84652c3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
