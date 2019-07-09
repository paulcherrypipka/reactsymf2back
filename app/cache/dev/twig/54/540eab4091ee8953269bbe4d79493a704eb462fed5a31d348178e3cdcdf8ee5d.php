<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_720d20eb94e96a62b311b346d5b4737489517ac7cfd675236c6ebda18674bfed extends Twig_Template
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
        $__internal_2a4b04ff4b83230cc0663f50c2d2e5e0a3636373841e29a932f1f66a31ef9599 = $this->env->getExtension("native_profiler");
        $__internal_2a4b04ff4b83230cc0663f50c2d2e5e0a3636373841e29a932f1f66a31ef9599->enter($__internal_2a4b04ff4b83230cc0663f50c2d2e5e0a3636373841e29a932f1f66a31ef9599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_2a4b04ff4b83230cc0663f50c2d2e5e0a3636373841e29a932f1f66a31ef9599->leave($__internal_2a4b04ff4b83230cc0663f50c2d2e5e0a3636373841e29a932f1f66a31ef9599_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
