<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_3aa08545e4e754c8f6c1fcc28e693b01db6c2c39123a668930980bc83ccbd42a extends Twig_Template
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
        $__internal_c7c0c3dd844b2443c7a3794cc937e2ae8582eba55fc2dad070503ea1db04a412 = $this->env->getExtension("native_profiler");
        $__internal_c7c0c3dd844b2443c7a3794cc937e2ae8582eba55fc2dad070503ea1db04a412->enter($__internal_c7c0c3dd844b2443c7a3794cc937e2ae8582eba55fc2dad070503ea1db04a412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_c7c0c3dd844b2443c7a3794cc937e2ae8582eba55fc2dad070503ea1db04a412->leave($__internal_c7c0c3dd844b2443c7a3794cc937e2ae8582eba55fc2dad070503ea1db04a412_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
