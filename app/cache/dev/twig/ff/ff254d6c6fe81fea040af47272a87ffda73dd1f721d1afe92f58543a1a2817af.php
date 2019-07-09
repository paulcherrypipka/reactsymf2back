<?php

/* :lucky:number.html.twig */
class __TwigTemplate_bbd11a6f377a823228bddfd95a386d168688ba8f180b83aef2e1b6b01c594a46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":lucky:number.html.twig", 1);
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
        $__internal_3769117b0b440bc7f9d8f0385450a6dfa4f3ed8beebe730c9a61dcd9fafe6499 = $this->env->getExtension("native_profiler");
        $__internal_3769117b0b440bc7f9d8f0385450a6dfa4f3ed8beebe730c9a61dcd9fafe6499->enter($__internal_3769117b0b440bc7f9d8f0385450a6dfa4f3ed8beebe730c9a61dcd9fafe6499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":lucky:number.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3769117b0b440bc7f9d8f0385450a6dfa4f3ed8beebe730c9a61dcd9fafe6499->leave($__internal_3769117b0b440bc7f9d8f0385450a6dfa4f3ed8beebe730c9a61dcd9fafe6499_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_dbe5aab8863f7afdd471bcd97939147d08c4f06e2c32ec60e94d4331424f8373 = $this->env->getExtension("native_profiler");
        $__internal_dbe5aab8863f7afdd471bcd97939147d08c4f06e2c32ec60e94d4331424f8373->enter($__internal_dbe5aab8863f7afdd471bcd97939147d08c4f06e2c32ec60e94d4331424f8373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Rand number list: ";
        echo twig_escape_filter($this->env, (isset($context["luckyNumberList"]) ? $context["luckyNumberList"] : $this->getContext($context, "luckyNumberList")), "html", null, true);
        echo "</h1>
";
        
        $__internal_dbe5aab8863f7afdd471bcd97939147d08c4f06e2c32ec60e94d4331424f8373->leave($__internal_dbe5aab8863f7afdd471bcd97939147d08c4f06e2c32ec60e94d4331424f8373_prof);

    }

    public function getTemplateName()
    {
        return ":lucky:number.html.twig";
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
