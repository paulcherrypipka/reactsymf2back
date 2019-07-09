<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_ee267a06763452d44a16e47c965f64507f6e42ab7a272372e8e25f06c6f61b3e extends Twig_Template
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
        $__internal_75bb3a73b57c80354ac231cf55a7374774b542526f599aabab59f7794945a586 = $this->env->getExtension("native_profiler");
        $__internal_75bb3a73b57c80354ac231cf55a7374774b542526f599aabab59f7794945a586->enter($__internal_75bb3a73b57c80354ac231cf55a7374774b542526f599aabab59f7794945a586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_75bb3a73b57c80354ac231cf55a7374774b542526f599aabab59f7794945a586->leave($__internal_75bb3a73b57c80354ac231cf55a7374774b542526f599aabab59f7794945a586_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
