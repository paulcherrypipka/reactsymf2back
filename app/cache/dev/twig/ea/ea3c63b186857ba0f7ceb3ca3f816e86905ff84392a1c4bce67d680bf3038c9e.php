<?php

/* lucky/number.html.twig */
class __TwigTemplate_1a6137e7edf7eb8924464f3da7e3c60a293e82044a06b89476d62f5804128f0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "lucky/number.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2734212b8b43396b3791e4a7e8e5f1a30fb72ea7f19e9ac49e4c0352cab21773 = $this->env->getExtension("native_profiler");
        $__internal_2734212b8b43396b3791e4a7e8e5f1a30fb72ea7f19e9ac49e4c0352cab21773->enter($__internal_2734212b8b43396b3791e4a7e8e5f1a30fb72ea7f19e9ac49e4c0352cab21773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "lucky/number.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2734212b8b43396b3791e4a7e8e5f1a30fb72ea7f19e9ac49e4c0352cab21773->leave($__internal_2734212b8b43396b3791e4a7e8e5f1a30fb72ea7f19e9ac49e4c0352cab21773_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b08d93fef0da1d4082b2c0bf7d9d4a181d2e31d899c597845842f7262ab8fbb = $this->env->getExtension("native_profiler");
        $__internal_4b08d93fef0da1d4082b2c0bf7d9d4a181d2e31d899c597845842f7262ab8fbb->enter($__internal_4b08d93fef0da1d4082b2c0bf7d9d4a181d2e31d899c597845842f7262ab8fbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Rand number list: ";
        echo twig_escape_filter($this->env, (isset($context["luckyNumberList"]) ? $context["luckyNumberList"] : $this->getContext($context, "luckyNumberList")), "html", null, true);
        echo "</h1>
";
        
        $__internal_4b08d93fef0da1d4082b2c0bf7d9d4a181d2e31d899c597845842f7262ab8fbb->leave($__internal_4b08d93fef0da1d4082b2c0bf7d9d4a181d2e31d899c597845842f7262ab8fbb_prof);

    }

    public function getTemplateName()
    {
        return "lucky/number.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Rand number list: {{ luckyNumberList }}</h1>*/
/* {% endblock %}*/
