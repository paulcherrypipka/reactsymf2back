<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_937ea5cde223e0533d3a66f331e7fe13f542086de8551cd5ba3d251da8d0bf5c extends Twig_Template
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
        $__internal_9993fc65d1d0becf23f316562498000bc01d987c94b557eede3d542bc9af29e7 = $this->env->getExtension("native_profiler");
        $__internal_9993fc65d1d0becf23f316562498000bc01d987c94b557eede3d542bc9af29e7->enter($__internal_9993fc65d1d0becf23f316562498000bc01d987c94b557eede3d542bc9af29e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_9993fc65d1d0becf23f316562498000bc01d987c94b557eede3d542bc9af29e7->leave($__internal_9993fc65d1d0becf23f316562498000bc01d987c94b557eede3d542bc9af29e7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
