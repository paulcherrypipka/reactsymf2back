<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_05446269446caddeed146368c1186f349d4cd8eb105e343bb64fe299a9ac2371 extends Twig_Template
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
        $__internal_22c84fac0273872daafa65c0c631f95e9cf11c11dd06e17ad98f0014cd43f538 = $this->env->getExtension("native_profiler");
        $__internal_22c84fac0273872daafa65c0c631f95e9cf11c11dd06e17ad98f0014cd43f538->enter($__internal_22c84fac0273872daafa65c0c631f95e9cf11c11dd06e17ad98f0014cd43f538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_22c84fac0273872daafa65c0c631f95e9cf11c11dd06e17ad98f0014cd43f538->leave($__internal_22c84fac0273872daafa65c0c631f95e9cf11c11dd06e17ad98f0014cd43f538_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
