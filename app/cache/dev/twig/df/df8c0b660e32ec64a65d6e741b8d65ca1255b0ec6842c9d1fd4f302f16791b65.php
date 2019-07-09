<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_1d4bfa0e2c30c7512b4272e6c05402cbf0589769bbe2d5a3ed66345b3a9d8103 extends Twig_Template
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
        $__internal_004ebc090d8ff524075755b483ce3a47eaf9d364eb030f4c47aef72eeb2d35ba = $this->env->getExtension("native_profiler");
        $__internal_004ebc090d8ff524075755b483ce3a47eaf9d364eb030f4c47aef72eeb2d35ba->enter($__internal_004ebc090d8ff524075755b483ce3a47eaf9d364eb030f4c47aef72eeb2d35ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_004ebc090d8ff524075755b483ce3a47eaf9d364eb030f4c47aef72eeb2d35ba->leave($__internal_004ebc090d8ff524075755b483ce3a47eaf9d364eb030f4c47aef72eeb2d35ba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
