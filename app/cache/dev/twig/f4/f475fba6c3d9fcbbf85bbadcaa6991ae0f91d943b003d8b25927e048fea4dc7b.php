<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_eb0e5f60fda1cdadd4f65366e17c6f267ab7709313f5df3c8ce3ad8f8d0792c7 extends Twig_Template
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
        $__internal_eda860532a44c336629cef9d6590c4894979c30ee4de86871cd65d545e5c331b = $this->env->getExtension("native_profiler");
        $__internal_eda860532a44c336629cef9d6590c4894979c30ee4de86871cd65d545e5c331b->enter($__internal_eda860532a44c336629cef9d6590c4894979c30ee4de86871cd65d545e5c331b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_eda860532a44c336629cef9d6590c4894979c30ee4de86871cd65d545e5c331b->leave($__internal_eda860532a44c336629cef9d6590c4894979c30ee4de86871cd65d545e5c331b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
