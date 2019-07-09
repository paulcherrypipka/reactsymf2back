<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_807019de34ce9e2e466e0f4cca83ccfb0bd2a4eddcff1ba6a46b4237481ea614 extends Twig_Template
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
        $__internal_4f15a21523335160baf141002b67385313db48697444d5bdfdb172717f3c8763 = $this->env->getExtension("native_profiler");
        $__internal_4f15a21523335160baf141002b67385313db48697444d5bdfdb172717f3c8763->enter($__internal_4f15a21523335160baf141002b67385313db48697444d5bdfdb172717f3c8763_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_4f15a21523335160baf141002b67385313db48697444d5bdfdb172717f3c8763->leave($__internal_4f15a21523335160baf141002b67385313db48697444d5bdfdb172717f3c8763_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
