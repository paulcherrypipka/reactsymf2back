<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_7654f9f98142ee19cfa349cd7b170ed3db9693af4be5e3f689b1951c206fdd7b extends Twig_Template
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
        $__internal_e34cc74aef7e4fa597a0df00f13fed3696251dd86fab38f4f16245d00d273540 = $this->env->getExtension("native_profiler");
        $__internal_e34cc74aef7e4fa597a0df00f13fed3696251dd86fab38f4f16245d00d273540->enter($__internal_e34cc74aef7e4fa597a0df00f13fed3696251dd86fab38f4f16245d00d273540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_e34cc74aef7e4fa597a0df00f13fed3696251dd86fab38f4f16245d00d273540->leave($__internal_e34cc74aef7e4fa597a0df00f13fed3696251dd86fab38f4f16245d00d273540_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
