<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_dfcf430d5a6e5b8a432810bdfb451587fcbc2f91b1b9192eff82513d45acde02 extends Twig_Template
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
        $__internal_39c23b8368bfe93f60f974839929825645faa79210e22ad289381f77bdbea705 = $this->env->getExtension("native_profiler");
        $__internal_39c23b8368bfe93f60f974839929825645faa79210e22ad289381f77bdbea705->enter($__internal_39c23b8368bfe93f60f974839929825645faa79210e22ad289381f77bdbea705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_39c23b8368bfe93f60f974839929825645faa79210e22ad289381f77bdbea705->leave($__internal_39c23b8368bfe93f60f974839929825645faa79210e22ad289381f77bdbea705_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
