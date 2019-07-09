<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_7e9f68557f1f15c80657e6af7c4b498add52103139f52f5429be27dc4a7bcd49 extends Twig_Template
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
        $__internal_c34fc4be166ba5af7f6f1ac561dd0a2bde0dc7b341881fab0c3ec5e160b9fc38 = $this->env->getExtension("native_profiler");
        $__internal_c34fc4be166ba5af7f6f1ac561dd0a2bde0dc7b341881fab0c3ec5e160b9fc38->enter($__internal_c34fc4be166ba5af7f6f1ac561dd0a2bde0dc7b341881fab0c3ec5e160b9fc38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_c34fc4be166ba5af7f6f1ac561dd0a2bde0dc7b341881fab0c3ec5e160b9fc38->leave($__internal_c34fc4be166ba5af7f6f1ac561dd0a2bde0dc7b341881fab0c3ec5e160b9fc38_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
