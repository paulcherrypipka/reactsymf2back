<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_c216c2d9ed082ec97127f8efa6c59b08c427f7f99f5d6d507cbf3d5ba8430d38 extends Twig_Template
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
        $__internal_e1627c5a652f098228eaf05425e25d239d3dba4a8abe937d78fcde7e602ee452 = $this->env->getExtension("native_profiler");
        $__internal_e1627c5a652f098228eaf05425e25d239d3dba4a8abe937d78fcde7e602ee452->enter($__internal_e1627c5a652f098228eaf05425e25d239d3dba4a8abe937d78fcde7e602ee452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_e1627c5a652f098228eaf05425e25d239d3dba4a8abe937d78fcde7e602ee452->leave($__internal_e1627c5a652f098228eaf05425e25d239d3dba4a8abe937d78fcde7e602ee452_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
