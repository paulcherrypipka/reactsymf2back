<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_d4a9fcf3fabf98bbf822856a39685a65680b07668bd4dd4c2cf3c531cd00677a extends Twig_Template
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
        $__internal_20c5e06f9e2b2551529f36d49268222b96a79deca23598eeb9cdc28e770fc9d0 = $this->env->getExtension("native_profiler");
        $__internal_20c5e06f9e2b2551529f36d49268222b96a79deca23598eeb9cdc28e770fc9d0->enter($__internal_20c5e06f9e2b2551529f36d49268222b96a79deca23598eeb9cdc28e770fc9d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_20c5e06f9e2b2551529f36d49268222b96a79deca23598eeb9cdc28e770fc9d0->leave($__internal_20c5e06f9e2b2551529f36d49268222b96a79deca23598eeb9cdc28e770fc9d0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
