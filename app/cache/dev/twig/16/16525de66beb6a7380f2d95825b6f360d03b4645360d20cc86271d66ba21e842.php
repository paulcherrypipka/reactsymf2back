<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_d9187f2f92ba3ae202655c8ea73eef667ae581dab87c549eb8f3de91f6f6e9f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ddb25bb1cf95fba7aee16d47b9aa83b90664907c00b854affb9cae803a851abb = $this->env->getExtension("native_profiler");
        $__internal_ddb25bb1cf95fba7aee16d47b9aa83b90664907c00b854affb9cae803a851abb->enter($__internal_ddb25bb1cf95fba7aee16d47b9aa83b90664907c00b854affb9cae803a851abb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ddb25bb1cf95fba7aee16d47b9aa83b90664907c00b854affb9cae803a851abb->leave($__internal_ddb25bb1cf95fba7aee16d47b9aa83b90664907c00b854affb9cae803a851abb_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_32d6d082990f3d61f571c2dc442f1f90360e9d3152850036f0dab5a5c5f6d980 = $this->env->getExtension("native_profiler");
        $__internal_32d6d082990f3d61f571c2dc442f1f90360e9d3152850036f0dab5a5c5f6d980->enter($__internal_32d6d082990f3d61f571c2dc442f1f90360e9d3152850036f0dab5a5c5f6d980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_32d6d082990f3d61f571c2dc442f1f90360e9d3152850036f0dab5a5c5f6d980->leave($__internal_32d6d082990f3d61f571c2dc442f1f90360e9d3152850036f0dab5a5c5f6d980_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fe325942fc273c46ccc728265ed7ccbbfe9f768f40f22ece695fc3aa0b85235e = $this->env->getExtension("native_profiler");
        $__internal_fe325942fc273c46ccc728265ed7ccbbfe9f768f40f22ece695fc3aa0b85235e->enter($__internal_fe325942fc273c46ccc728265ed7ccbbfe9f768f40f22ece695fc3aa0b85235e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_fe325942fc273c46ccc728265ed7ccbbfe9f768f40f22ece695fc3aa0b85235e->leave($__internal_fe325942fc273c46ccc728265ed7ccbbfe9f768f40f22ece695fc3aa0b85235e_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_782e7a83768f38c72f80677763756e318b9b3009de83c7a2d66ff2c15866f595 = $this->env->getExtension("native_profiler");
        $__internal_782e7a83768f38c72f80677763756e318b9b3009de83c7a2d66ff2c15866f595->enter($__internal_782e7a83768f38c72f80677763756e318b9b3009de83c7a2d66ff2c15866f595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_782e7a83768f38c72f80677763756e318b9b3009de83c7a2d66ff2c15866f595->leave($__internal_782e7a83768f38c72f80677763756e318b9b3009de83c7a2d66ff2c15866f595_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_fd9ded22555d708b6c9fd423a0b4c2b75132acf054ecb8b677c356070a46ac78 = $this->env->getExtension("native_profiler");
        $__internal_fd9ded22555d708b6c9fd423a0b4c2b75132acf054ecb8b677c356070a46ac78->enter($__internal_fd9ded22555d708b6c9fd423a0b4c2b75132acf054ecb8b677c356070a46ac78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_fd9ded22555d708b6c9fd423a0b4c2b75132acf054ecb8b677c356070a46ac78->leave($__internal_fd9ded22555d708b6c9fd423a0b4c2b75132acf054ecb8b677c356070a46ac78_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "TwigBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block title 'Web Configurator Bundle' %}*/
/* */
/* {% block body %}*/
/*     <div class="block">*/
/*         {% block content %}{% endblock %}*/
/*     </div>*/
/*     <div class="version">Symfony Standard Edition v.{{ version }}</div>*/
/* {% endblock %}*/
/* */
