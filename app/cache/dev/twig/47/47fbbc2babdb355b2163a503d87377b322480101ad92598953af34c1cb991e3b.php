<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_d027ba4f137a5e09185943c1b71ac4198d125c43760435a8c447220814a6d121 extends Twig_Template
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
        $__internal_99d0048c5a3ead13ee9e0c1a9a0a0faeef5340fb90b409b4b25186db78d4bce3 = $this->env->getExtension("native_profiler");
        $__internal_99d0048c5a3ead13ee9e0c1a9a0a0faeef5340fb90b409b4b25186db78d4bce3->enter($__internal_99d0048c5a3ead13ee9e0c1a9a0a0faeef5340fb90b409b4b25186db78d4bce3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_99d0048c5a3ead13ee9e0c1a9a0a0faeef5340fb90b409b4b25186db78d4bce3->leave($__internal_99d0048c5a3ead13ee9e0c1a9a0a0faeef5340fb90b409b4b25186db78d4bce3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
