<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_910d327c59f18e949027d39907a4c8f893095299553a711f5c7218ed95eb00c6 extends Twig_Template
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
        $__internal_7091b944374b73458fe0ad551dd9625a0d8e616b08c4d33e61b9e96580798eb3 = $this->env->getExtension("native_profiler");
        $__internal_7091b944374b73458fe0ad551dd9625a0d8e616b08c4d33e61b9e96580798eb3->enter($__internal_7091b944374b73458fe0ad551dd9625a0d8e616b08c4d33e61b9e96580798eb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_7091b944374b73458fe0ad551dd9625a0d8e616b08c4d33e61b9e96580798eb3->leave($__internal_7091b944374b73458fe0ad551dd9625a0d8e616b08c4d33e61b9e96580798eb3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
