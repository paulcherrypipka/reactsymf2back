<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_da8af4c2c0e480b9809e8dc6a59175d14889cd93718cdff24745d8d45d2449b0 extends Twig_Template
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
        $__internal_d111d1cd1ca701cbb8e911a1947a96c02ac31b2b7e87b076c27369181f09c195 = $this->env->getExtension("native_profiler");
        $__internal_d111d1cd1ca701cbb8e911a1947a96c02ac31b2b7e87b076c27369181f09c195->enter($__internal_d111d1cd1ca701cbb8e911a1947a96c02ac31b2b7e87b076c27369181f09c195_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_d111d1cd1ca701cbb8e911a1947a96c02ac31b2b7e87b076c27369181f09c195->leave($__internal_d111d1cd1ca701cbb8e911a1947a96c02ac31b2b7e87b076c27369181f09c195_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
