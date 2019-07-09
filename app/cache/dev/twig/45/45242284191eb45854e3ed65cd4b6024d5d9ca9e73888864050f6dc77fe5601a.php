<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_1cc11d6878b991e19b68d95f7eb3b9d90a1edc77ce2860dd7432bb039d306a97 extends Twig_Template
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
        $__internal_3018fc81e5b0354ad8221a78577a21e185e4984e6d9f16e16bcf63f29a7eaac5 = $this->env->getExtension("native_profiler");
        $__internal_3018fc81e5b0354ad8221a78577a21e185e4984e6d9f16e16bcf63f29a7eaac5->enter($__internal_3018fc81e5b0354ad8221a78577a21e185e4984e6d9f16e16bcf63f29a7eaac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_3018fc81e5b0354ad8221a78577a21e185e4984e6d9f16e16bcf63f29a7eaac5->leave($__internal_3018fc81e5b0354ad8221a78577a21e185e4984e6d9f16e16bcf63f29a7eaac5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
