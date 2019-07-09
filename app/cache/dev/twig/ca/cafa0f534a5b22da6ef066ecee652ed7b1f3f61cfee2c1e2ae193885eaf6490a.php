<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_6357a06e89329ec3b65d3f70ab04ae9ad5d2cc35b2a1b7406fd48982ef710fec extends Twig_Template
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
        $__internal_245423808ae14798d4c399629ae42642d6495311c02b9bec693f6b79bd045e63 = $this->env->getExtension("native_profiler");
        $__internal_245423808ae14798d4c399629ae42642d6495311c02b9bec693f6b79bd045e63->enter($__internal_245423808ae14798d4c399629ae42642d6495311c02b9bec693f6b79bd045e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_245423808ae14798d4c399629ae42642d6495311c02b9bec693f6b79bd045e63->leave($__internal_245423808ae14798d4c399629ae42642d6495311c02b9bec693f6b79bd045e63_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
