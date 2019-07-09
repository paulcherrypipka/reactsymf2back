<?php

/* @SensioDistribution/Configurator/layout.html.twig */
class __TwigTemplate_eee2e71437010d3fc438fe55715357bd1e899a1d4e6cc3abaf07bad49fb2cd98 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "@SensioDistribution/Configurator/layout.html.twig", 1);
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
        $__internal_d35b860e7136e4ec844907d3d438df157b803e0899a54160260e94cfa7556904 = $this->env->getExtension("native_profiler");
        $__internal_d35b860e7136e4ec844907d3d438df157b803e0899a54160260e94cfa7556904->enter($__internal_d35b860e7136e4ec844907d3d438df157b803e0899a54160260e94cfa7556904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d35b860e7136e4ec844907d3d438df157b803e0899a54160260e94cfa7556904->leave($__internal_d35b860e7136e4ec844907d3d438df157b803e0899a54160260e94cfa7556904_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b4719e329315d169f91081e250db275d97705e7af5aaef2061f6b53b275509e5 = $this->env->getExtension("native_profiler");
        $__internal_b4719e329315d169f91081e250db275d97705e7af5aaef2061f6b53b275509e5->enter($__internal_b4719e329315d169f91081e250db275d97705e7af5aaef2061f6b53b275509e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_b4719e329315d169f91081e250db275d97705e7af5aaef2061f6b53b275509e5->leave($__internal_b4719e329315d169f91081e250db275d97705e7af5aaef2061f6b53b275509e5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_094e9720a9f489208358800095efdde1c5de932766498e939385dcfd9577dd41 = $this->env->getExtension("native_profiler");
        $__internal_094e9720a9f489208358800095efdde1c5de932766498e939385dcfd9577dd41->enter($__internal_094e9720a9f489208358800095efdde1c5de932766498e939385dcfd9577dd41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_094e9720a9f489208358800095efdde1c5de932766498e939385dcfd9577dd41->leave($__internal_094e9720a9f489208358800095efdde1c5de932766498e939385dcfd9577dd41_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_fef051afe78e09332322600bf71d9e8b726d333f71508c06edbbde468e06eea9 = $this->env->getExtension("native_profiler");
        $__internal_fef051afe78e09332322600bf71d9e8b726d333f71508c06edbbde468e06eea9->enter($__internal_fef051afe78e09332322600bf71d9e8b726d333f71508c06edbbde468e06eea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fef051afe78e09332322600bf71d9e8b726d333f71508c06edbbde468e06eea9->leave($__internal_fef051afe78e09332322600bf71d9e8b726d333f71508c06edbbde468e06eea9_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_57a568751947447d3477decaa2bbbc6070538d7df834f8592090278656750110 = $this->env->getExtension("native_profiler");
        $__internal_57a568751947447d3477decaa2bbbc6070538d7df834f8592090278656750110->enter($__internal_57a568751947447d3477decaa2bbbc6070538d7df834f8592090278656750110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_57a568751947447d3477decaa2bbbc6070538d7df834f8592090278656750110->leave($__internal_57a568751947447d3477decaa2bbbc6070538d7df834f8592090278656750110_prof);

    }

    public function getTemplateName()
    {
        return "@SensioDistribution/Configurator/layout.html.twig";
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
