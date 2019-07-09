<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_3072ed45ac9a6d3ece41fe5f43e84ad269b456c40b566042ee41fc5f0778f494 extends Twig_Template
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
        $__internal_7fd3da268cec57a9e719df5c621bb8ede5672aed94991b2c2187185ba42d10ad = $this->env->getExtension("native_profiler");
        $__internal_7fd3da268cec57a9e719df5c621bb8ede5672aed94991b2c2187185ba42d10ad->enter($__internal_7fd3da268cec57a9e719df5c621bb8ede5672aed94991b2c2187185ba42d10ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_7fd3da268cec57a9e719df5c621bb8ede5672aed94991b2c2187185ba42d10ad->leave($__internal_7fd3da268cec57a9e719df5c621bb8ede5672aed94991b2c2187185ba42d10ad_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
