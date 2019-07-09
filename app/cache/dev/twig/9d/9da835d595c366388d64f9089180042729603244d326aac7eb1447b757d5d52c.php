<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_01b6c85311450c8989813e352f658740b09b98b1ca4d966a01e7c50ab0abfc3d extends Twig_Template
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
        $__internal_fba4617397e4397480465814ad8fb7851ea52b03c86dae4aa069410666f05630 = $this->env->getExtension("native_profiler");
        $__internal_fba4617397e4397480465814ad8fb7851ea52b03c86dae4aa069410666f05630->enter($__internal_fba4617397e4397480465814ad8fb7851ea52b03c86dae4aa069410666f05630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_fba4617397e4397480465814ad8fb7851ea52b03c86dae4aa069410666f05630->leave($__internal_fba4617397e4397480465814ad8fb7851ea52b03c86dae4aa069410666f05630_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
