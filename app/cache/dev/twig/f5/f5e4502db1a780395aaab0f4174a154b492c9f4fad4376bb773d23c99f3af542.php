<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_253a9bc7466ecb04f62a0c989e1b7eabe3c968b927890b8656c42278172f3a15 extends Twig_Template
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
        $__internal_4152af6f85680c50bf56e1aa3fe77dd0da7cdc279c6bea75cb0646efc9cbcaf7 = $this->env->getExtension("native_profiler");
        $__internal_4152af6f85680c50bf56e1aa3fe77dd0da7cdc279c6bea75cb0646efc9cbcaf7->enter($__internal_4152af6f85680c50bf56e1aa3fe77dd0da7cdc279c6bea75cb0646efc9cbcaf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_4152af6f85680c50bf56e1aa3fe77dd0da7cdc279c6bea75cb0646efc9cbcaf7->leave($__internal_4152af6f85680c50bf56e1aa3fe77dd0da7cdc279c6bea75cb0646efc9cbcaf7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
