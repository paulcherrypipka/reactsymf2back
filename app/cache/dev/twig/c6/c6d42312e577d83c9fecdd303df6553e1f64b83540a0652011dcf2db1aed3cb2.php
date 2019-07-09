<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_df9f766d4ceef8e1701fc681e910660f43db26e3afbc209bab85517fbdfef60d extends Twig_Template
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
        $__internal_67f9b6a5a5baa97b48b0b92d01640b7c0f5e3ac1d3c9a47a8c128429186e7dcd = $this->env->getExtension("native_profiler");
        $__internal_67f9b6a5a5baa97b48b0b92d01640b7c0f5e3ac1d3c9a47a8c128429186e7dcd->enter($__internal_67f9b6a5a5baa97b48b0b92d01640b7c0f5e3ac1d3c9a47a8c128429186e7dcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_67f9b6a5a5baa97b48b0b92d01640b7c0f5e3ac1d3c9a47a8c128429186e7dcd->leave($__internal_67f9b6a5a5baa97b48b0b92d01640b7c0f5e3ac1d3c9a47a8c128429186e7dcd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
