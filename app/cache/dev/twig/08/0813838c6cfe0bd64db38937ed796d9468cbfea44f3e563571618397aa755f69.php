<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_ddd993ee0202f63137e80c846540ae24ce01bc5ee83b73ae6f8be32869d27872 extends Twig_Template
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
        $__internal_01d2028f6b015329381d16fe5d6865fc88c4d0f5ed8a843d4beaf83fe1bbf375 = $this->env->getExtension("native_profiler");
        $__internal_01d2028f6b015329381d16fe5d6865fc88c4d0f5ed8a843d4beaf83fe1bbf375->enter($__internal_01d2028f6b015329381d16fe5d6865fc88c4d0f5ed8a843d4beaf83fe1bbf375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_01d2028f6b015329381d16fe5d6865fc88c4d0f5ed8a843d4beaf83fe1bbf375->leave($__internal_01d2028f6b015329381d16fe5d6865fc88c4d0f5ed8a843d4beaf83fe1bbf375_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
