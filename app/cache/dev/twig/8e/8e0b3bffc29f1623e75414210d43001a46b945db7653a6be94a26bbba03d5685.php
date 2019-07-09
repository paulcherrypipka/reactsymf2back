<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_305c0e25211a9dc84eaba2481862037cf24d6823637ff4606762ecb4015a14d9 extends Twig_Template
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
        $__internal_35041c29f7b56229b64867e7c4b49c3a4b85e8294188ec857e1b086eb0b0d8cb = $this->env->getExtension("native_profiler");
        $__internal_35041c29f7b56229b64867e7c4b49c3a4b85e8294188ec857e1b086eb0b0d8cb->enter($__internal_35041c29f7b56229b64867e7c4b49c3a4b85e8294188ec857e1b086eb0b0d8cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

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
        
        $__internal_35041c29f7b56229b64867e7c4b49c3a4b85e8294188ec857e1b086eb0b0d8cb->leave($__internal_35041c29f7b56229b64867e7c4b49c3a4b85e8294188ec857e1b086eb0b0d8cb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
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
