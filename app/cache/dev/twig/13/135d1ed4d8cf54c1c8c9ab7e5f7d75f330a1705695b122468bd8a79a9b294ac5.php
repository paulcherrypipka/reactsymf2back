<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_8f6619d99f8d9bbcd9d9c2355bd54eb4cb4b6c6c4cf246fbaef4f50713a64cba extends Twig_Template
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
        $__internal_df7c2d24de5869dbb1d556e083f363177a300f8bc06fe48520333fff2a08252b = $this->env->getExtension("native_profiler");
        $__internal_df7c2d24de5869dbb1d556e083f363177a300f8bc06fe48520333fff2a08252b->enter($__internal_df7c2d24de5869dbb1d556e083f363177a300f8bc06fe48520333fff2a08252b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_df7c2d24de5869dbb1d556e083f363177a300f8bc06fe48520333fff2a08252b->leave($__internal_df7c2d24de5869dbb1d556e083f363177a300f8bc06fe48520333fff2a08252b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
