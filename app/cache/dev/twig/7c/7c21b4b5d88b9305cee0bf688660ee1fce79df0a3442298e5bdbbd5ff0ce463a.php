<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_00b711a813fca8760e8a783fea69de2c8bf65aff5f7891a96ba3e6932b44f0dd extends Twig_Template
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
        $__internal_4083fe500954661d779113d720c4c1d3bff980d9d8b2503c26ae6f8cd60a78ed = $this->env->getExtension("native_profiler");
        $__internal_4083fe500954661d779113d720c4c1d3bff980d9d8b2503c26ae6f8cd60a78ed->enter($__internal_4083fe500954661d779113d720c4c1d3bff980d9d8b2503c26ae6f8cd60a78ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_4083fe500954661d779113d720c4c1d3bff980d9d8b2503c26ae6f8cd60a78ed->leave($__internal_4083fe500954661d779113d720c4c1d3bff980d9d8b2503c26ae6f8cd60a78ed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
