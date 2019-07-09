<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_8a51b19d679df8d0779f262ef3a16d712a9a1564955109fdf8d237cf38723713 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dac1d4d9804f760e9e8f6d4c2a47d336ffa0956e3baaa7e06b550e1d6c12ce8d = $this->env->getExtension("native_profiler");
        $__internal_dac1d4d9804f760e9e8f6d4c2a47d336ffa0956e3baaa7e06b550e1d6c12ce8d->enter($__internal_dac1d4d9804f760e9e8f6d4c2a47d336ffa0956e3baaa7e06b550e1d6c12ce8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dac1d4d9804f760e9e8f6d4c2a47d336ffa0956e3baaa7e06b550e1d6c12ce8d->leave($__internal_dac1d4d9804f760e9e8f6d4c2a47d336ffa0956e3baaa7e06b550e1d6c12ce8d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9daaa27c840c72d565ccaa6345d19dfe7d43eb786ad3966f2ab6f0e8fa24d309 = $this->env->getExtension("native_profiler");
        $__internal_9daaa27c840c72d565ccaa6345d19dfe7d43eb786ad3966f2ab6f0e8fa24d309->enter($__internal_9daaa27c840c72d565ccaa6345d19dfe7d43eb786ad3966f2ab6f0e8fa24d309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9daaa27c840c72d565ccaa6345d19dfe7d43eb786ad3966f2ab6f0e8fa24d309->leave($__internal_9daaa27c840c72d565ccaa6345d19dfe7d43eb786ad3966f2ab6f0e8fa24d309_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5fa38267fdc4fb194e6080a5061b769a2d6a3c1f7feb54d36fd22ad4703bd0b9 = $this->env->getExtension("native_profiler");
        $__internal_5fa38267fdc4fb194e6080a5061b769a2d6a3c1f7feb54d36fd22ad4703bd0b9->enter($__internal_5fa38267fdc4fb194e6080a5061b769a2d6a3c1f7feb54d36fd22ad4703bd0b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5fa38267fdc4fb194e6080a5061b769a2d6a3c1f7feb54d36fd22ad4703bd0b9->leave($__internal_5fa38267fdc4fb194e6080a5061b769a2d6a3c1f7feb54d36fd22ad4703bd0b9_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ca1a377a59e8d3938c0854af0f76b9c39a37b2fa496044971301ed46d4bc29e = $this->env->getExtension("native_profiler");
        $__internal_7ca1a377a59e8d3938c0854af0f76b9c39a37b2fa496044971301ed46d4bc29e->enter($__internal_7ca1a377a59e8d3938c0854af0f76b9c39a37b2fa496044971301ed46d4bc29e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_7ca1a377a59e8d3938c0854af0f76b9c39a37b2fa496044971301ed46d4bc29e->leave($__internal_7ca1a377a59e8d3938c0854af0f76b9c39a37b2fa496044971301ed46d4bc29e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
