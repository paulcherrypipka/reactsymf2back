<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_21c60560fb9020d8a9d2dc3c06953afbe2b4f361869decafd9121d65616599e3 extends Twig_Template
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
        $__internal_d877d1310b9f784717daf4fc5a18afd8ed21d896d31644da6f7b1c5d2b68e348 = $this->env->getExtension("native_profiler");
        $__internal_d877d1310b9f784717daf4fc5a18afd8ed21d896d31644da6f7b1c5d2b68e348->enter($__internal_d877d1310b9f784717daf4fc5a18afd8ed21d896d31644da6f7b1c5d2b68e348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_d877d1310b9f784717daf4fc5a18afd8ed21d896d31644da6f7b1c5d2b68e348->leave($__internal_d877d1310b9f784717daf4fc5a18afd8ed21d896d31644da6f7b1c5d2b68e348_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
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
