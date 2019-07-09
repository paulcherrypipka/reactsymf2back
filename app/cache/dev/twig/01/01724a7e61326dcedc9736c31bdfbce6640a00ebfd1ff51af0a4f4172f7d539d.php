<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_33cc398e0f89dd59d65f998163e52cf46c4a6a4a4ff2e878e163e9239fd2abc4 extends Twig_Template
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
        $__internal_16f9b57f364695aa27bd49496d427af1e7e3619df192bb66ced9dc716f5d9d0d = $this->env->getExtension("native_profiler");
        $__internal_16f9b57f364695aa27bd49496d427af1e7e3619df192bb66ced9dc716f5d9d0d->enter($__internal_16f9b57f364695aa27bd49496d427af1e7e3619df192bb66ced9dc716f5d9d0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_16f9b57f364695aa27bd49496d427af1e7e3619df192bb66ced9dc716f5d9d0d->leave($__internal_16f9b57f364695aa27bd49496d427af1e7e3619df192bb66ced9dc716f5d9d0d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
