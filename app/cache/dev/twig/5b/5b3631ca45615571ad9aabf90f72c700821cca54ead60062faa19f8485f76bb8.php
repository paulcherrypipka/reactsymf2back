<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_05396d68a2ea55836efeebaf3e5e9e796e9b4dcb7a7c7334d188a7afb8b85708 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_90f14a60aa6b9fc55653fa2934c267034693778f3d29bd0ab42ca5302791c570 = $this->env->getExtension("native_profiler");
        $__internal_90f14a60aa6b9fc55653fa2934c267034693778f3d29bd0ab42ca5302791c570->enter($__internal_90f14a60aa6b9fc55653fa2934c267034693778f3d29bd0ab42ca5302791c570_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_90f14a60aa6b9fc55653fa2934c267034693778f3d29bd0ab42ca5302791c570->leave($__internal_90f14a60aa6b9fc55653fa2934c267034693778f3d29bd0ab42ca5302791c570_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_c2613dbad01bdab047ef87a509aba2ff0b53d4d6d2e94d4b92cc07b2aab1141c = $this->env->getExtension("native_profiler");
        $__internal_c2613dbad01bdab047ef87a509aba2ff0b53d4d6d2e94d4b92cc07b2aab1141c->enter($__internal_c2613dbad01bdab047ef87a509aba2ff0b53d4d6d2e94d4b92cc07b2aab1141c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_c2613dbad01bdab047ef87a509aba2ff0b53d4d6d2e94d4b92cc07b2aab1141c->leave($__internal_c2613dbad01bdab047ef87a509aba2ff0b53d4d6d2e94d4b92cc07b2aab1141c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
