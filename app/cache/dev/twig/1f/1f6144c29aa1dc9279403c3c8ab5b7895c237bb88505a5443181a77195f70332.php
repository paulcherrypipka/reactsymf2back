<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_35ecededbcba8f8acf9fb48edf1bfb890dc915ffd8696b42cf7640e3a9dd1e30 extends Twig_Template
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
        $__internal_bd6f675b7c34359b13c3225f389db2b3d72e10e59a3a01e7a2d3b931bf512a9a = $this->env->getExtension("native_profiler");
        $__internal_bd6f675b7c34359b13c3225f389db2b3d72e10e59a3a01e7a2d3b931bf512a9a->enter($__internal_bd6f675b7c34359b13c3225f389db2b3d72e10e59a3a01e7a2d3b931bf512a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_bd6f675b7c34359b13c3225f389db2b3d72e10e59a3a01e7a2d3b931bf512a9a->leave($__internal_bd6f675b7c34359b13c3225f389db2b3d72e10e59a3a01e7a2d3b931bf512a9a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
