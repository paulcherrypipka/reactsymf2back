<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_4100f6bfa1c9e5f93c71b1028f4b9a0996f4a9fcef9b554f810a079c007ac1c0 extends Twig_Template
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
        $__internal_4614b3059006ea293fb3aa13a33ef871ce64412dd5b877906f70d692aef518ff = $this->env->getExtension("native_profiler");
        $__internal_4614b3059006ea293fb3aa13a33ef871ce64412dd5b877906f70d692aef518ff->enter($__internal_4614b3059006ea293fb3aa13a33ef871ce64412dd5b877906f70d692aef518ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_4614b3059006ea293fb3aa13a33ef871ce64412dd5b877906f70d692aef518ff->leave($__internal_4614b3059006ea293fb3aa13a33ef871ce64412dd5b877906f70d692aef518ff_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
