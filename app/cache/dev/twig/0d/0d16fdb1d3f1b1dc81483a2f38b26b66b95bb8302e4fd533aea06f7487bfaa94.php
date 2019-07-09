<?php

/* blog/comment_form_error.html.twig */
class __TwigTemplate_7437cd8e965e133b1f44f2e3b2e089e5829362ddc2d9dc06a8185fbfeff39472 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog/comment_form_error.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4aaa6537617e62b049c39c68d42a18380bc0924dcbb672e8f195b1a362f6c284 = $this->env->getExtension("native_profiler");
        $__internal_4aaa6537617e62b049c39c68d42a18380bc0924dcbb672e8f195b1a362f6c284->enter($__internal_4aaa6537617e62b049c39c68d42a18380bc0924dcbb672e8f195b1a362f6c284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/comment_form_error.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4aaa6537617e62b049c39c68d42a18380bc0924dcbb672e8f195b1a362f6c284->leave($__internal_4aaa6537617e62b049c39c68d42a18380bc0924dcbb672e8f195b1a362f6c284_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_1672ee5bbdaa5a958eda99db9e75d45ca034e83d2005f17dcc68636d321f4282 = $this->env->getExtension("native_profiler");
        $__internal_1672ee5bbdaa5a958eda99db9e75d45ca034e83d2005f17dcc68636d321f4282->enter($__internal_1672ee5bbdaa5a958eda99db9e75d45ca034e83d2005f17dcc68636d321f4282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "comment_form_error";
        
        $__internal_1672ee5bbdaa5a958eda99db9e75d45ca034e83d2005f17dcc68636d321f4282->leave($__internal_1672ee5bbdaa5a958eda99db9e75d45ca034e83d2005f17dcc68636d321f4282_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_6ddb8557285cd6ee2ea0f880e6f5732e771fb7b8933e7a6f8e3a77b9acbb3428 = $this->env->getExtension("native_profiler");
        $__internal_6ddb8557285cd6ee2ea0f880e6f5732e771fb7b8933e7a6f8e3a77b9acbb3428->enter($__internal_6ddb8557285cd6ee2ea0f880e6f5732e771fb7b8933e7a6f8e3a77b9acbb3428_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    <h1 class=\"text-danger\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.comment_error"), "html", null, true);
        echo "</h1>

    <div class=\"well\">
        ";
        // line 9
        echo twig_include($this->env, $context, "blog/_comment_form.html.twig");
        echo "
    </div>
";
        
        $__internal_6ddb8557285cd6ee2ea0f880e6f5732e771fb7b8933e7a6f8e3a77b9acbb3428->leave($__internal_6ddb8557285cd6ee2ea0f880e6f5732e771fb7b8933e7a6f8e3a77b9acbb3428_prof);

    }

    public function getTemplateName()
    {
        return "blog/comment_form_error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 9,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body_id 'comment_form_error' %}*/
/* */
/* {% block main %}*/
/*     <h1 class="text-danger">{{ 'title.comment_error'|trans }}</h1>*/
/* */
/*     <div class="well">*/
/*         {{ include('blog/_comment_form.html.twig') }}*/
/*     </div>*/
/* {% endblock %}*/
/* */
