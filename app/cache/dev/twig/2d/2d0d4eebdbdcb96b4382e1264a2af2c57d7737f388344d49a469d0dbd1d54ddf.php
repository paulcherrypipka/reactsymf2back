<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_c52ceb8f96272efefcab9085386c30926bfba379c300617e1ac7ca60253594bf extends Twig_Template
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
        $__internal_3be34c1b2123e0733ad40a2f845064b0f562cd9ae605b02a5c40c221146c2c1d = $this->env->getExtension("native_profiler");
        $__internal_3be34c1b2123e0733ad40a2f845064b0f562cd9ae605b02a5c40c221146c2c1d->enter($__internal_3be34c1b2123e0733ad40a2f845064b0f562cd9ae605b02a5c40c221146c2c1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_3be34c1b2123e0733ad40a2f845064b0f562cd9ae605b02a5c40c221146c2c1d->leave($__internal_3be34c1b2123e0733ad40a2f845064b0f562cd9ae605b02a5c40c221146c2c1d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
