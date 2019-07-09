<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_4842cad5084b2c7e08ca54de16e1121552a35ebd1695d5d39df34378ce511fd1 extends Twig_Template
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
        $__internal_94301f1ff048aa3643dd6de9e829023a5f4e34f314262cd256ad7bcfce5abfe1 = $this->env->getExtension("native_profiler");
        $__internal_94301f1ff048aa3643dd6de9e829023a5f4e34f314262cd256ad7bcfce5abfe1->enter($__internal_94301f1ff048aa3643dd6de9e829023a5f4e34f314262cd256ad7bcfce5abfe1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_94301f1ff048aa3643dd6de9e829023a5f4e34f314262cd256ad7bcfce5abfe1->leave($__internal_94301f1ff048aa3643dd6de9e829023a5f4e34f314262cd256ad7bcfce5abfe1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
