<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_331a054b57a04149a08e3ee72e29ee4d3afbc1c2d48d19e0b91c0d7f6d0876ef extends Twig_Template
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
        $__internal_ceda204f5d7d23a7390bd6ff4a747a8bbd5eb30005bd4c1d013315bf184ff843 = $this->env->getExtension("native_profiler");
        $__internal_ceda204f5d7d23a7390bd6ff4a747a8bbd5eb30005bd4c1d013315bf184ff843->enter($__internal_ceda204f5d7d23a7390bd6ff4a747a8bbd5eb30005bd4c1d013315bf184ff843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_ceda204f5d7d23a7390bd6ff4a747a8bbd5eb30005bd4c1d013315bf184ff843->leave($__internal_ceda204f5d7d23a7390bd6ff4a747a8bbd5eb30005bd4c1d013315bf184ff843_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
