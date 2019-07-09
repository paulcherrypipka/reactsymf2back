<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_c3a6c464f37909d5919ee6b6121250c7eb62936ea7a12ed0af66d8bc246facbc extends Twig_Template
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
        $__internal_a5515e29b943441d1c268e988f18aa63ef70eb9593e16c591747e754868100a2 = $this->env->getExtension("native_profiler");
        $__internal_a5515e29b943441d1c268e988f18aa63ef70eb9593e16c591747e754868100a2->enter($__internal_a5515e29b943441d1c268e988f18aa63ef70eb9593e16c591747e754868100a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_a5515e29b943441d1c268e988f18aa63ef70eb9593e16c591747e754868100a2->leave($__internal_a5515e29b943441d1c268e988f18aa63ef70eb9593e16c591747e754868100a2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
