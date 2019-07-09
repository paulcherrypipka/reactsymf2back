<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_2f2783311428e454c59ba081cab93dec7c8304b54b324bce2fde9ae6b3b66167 extends Twig_Template
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
        $__internal_11dcfa347d70e4bfef4257bfb9611572b1771d9ee8b1d783571ccc1d1c793cd8 = $this->env->getExtension("native_profiler");
        $__internal_11dcfa347d70e4bfef4257bfb9611572b1771d9ee8b1d783571ccc1d1c793cd8->enter($__internal_11dcfa347d70e4bfef4257bfb9611572b1771d9ee8b1d783571ccc1d1c793cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_11dcfa347d70e4bfef4257bfb9611572b1771d9ee8b1d783571ccc1d1c793cd8->leave($__internal_11dcfa347d70e4bfef4257bfb9611572b1771d9ee8b1d783571ccc1d1c793cd8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
