<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_46d40dbfb31ddb25be841d64d7d108a808aac776e23a75464f8d5be6c96c282d extends Twig_Template
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
        $__internal_894a0c3ba32d286cb9dbb025cac53761882173ce269c454dd95d26bc4a6434ab = $this->env->getExtension("native_profiler");
        $__internal_894a0c3ba32d286cb9dbb025cac53761882173ce269c454dd95d26bc4a6434ab->enter($__internal_894a0c3ba32d286cb9dbb025cac53761882173ce269c454dd95d26bc4a6434ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_894a0c3ba32d286cb9dbb025cac53761882173ce269c454dd95d26bc4a6434ab->leave($__internal_894a0c3ba32d286cb9dbb025cac53761882173ce269c454dd95d26bc4a6434ab_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
