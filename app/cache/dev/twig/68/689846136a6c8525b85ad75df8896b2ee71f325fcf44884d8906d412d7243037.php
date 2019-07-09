<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_2bafb89618ce6ba9319ccf6b9de747bfa38d895b9413fdcf00d02d51097a99a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cdf3a18c6b65be6436e134efe032f9c3a705e0bcf3e973a0b010afc4792b8365 = $this->env->getExtension("native_profiler");
        $__internal_cdf3a18c6b65be6436e134efe032f9c3a705e0bcf3e973a0b010afc4792b8365->enter($__internal_cdf3a18c6b65be6436e134efe032f9c3a705e0bcf3e973a0b010afc4792b8365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cdf3a18c6b65be6436e134efe032f9c3a705e0bcf3e973a0b010afc4792b8365->leave($__internal_cdf3a18c6b65be6436e134efe032f9c3a705e0bcf3e973a0b010afc4792b8365_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9962e6b1bb11a2027a900986bf4ab0ffff46b096e105672262937a4a9c79dd01 = $this->env->getExtension("native_profiler");
        $__internal_9962e6b1bb11a2027a900986bf4ab0ffff46b096e105672262937a4a9c79dd01->enter($__internal_9962e6b1bb11a2027a900986bf4ab0ffff46b096e105672262937a4a9c79dd01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9962e6b1bb11a2027a900986bf4ab0ffff46b096e105672262937a4a9c79dd01->leave($__internal_9962e6b1bb11a2027a900986bf4ab0ffff46b096e105672262937a4a9c79dd01_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c1a0da727c3d89b7112a66c5a7ef0c3230be328b2461179ae49f39a762fb1e0a = $this->env->getExtension("native_profiler");
        $__internal_c1a0da727c3d89b7112a66c5a7ef0c3230be328b2461179ae49f39a762fb1e0a->enter($__internal_c1a0da727c3d89b7112a66c5a7ef0c3230be328b2461179ae49f39a762fb1e0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c1a0da727c3d89b7112a66c5a7ef0c3230be328b2461179ae49f39a762fb1e0a->leave($__internal_c1a0da727c3d89b7112a66c5a7ef0c3230be328b2461179ae49f39a762fb1e0a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_51f44e281e7f708c992085a27f612c5518c4e052e80db7137dca34f1a7996a98 = $this->env->getExtension("native_profiler");
        $__internal_51f44e281e7f708c992085a27f612c5518c4e052e80db7137dca34f1a7996a98->enter($__internal_51f44e281e7f708c992085a27f612c5518c4e052e80db7137dca34f1a7996a98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_51f44e281e7f708c992085a27f612c5518c4e052e80db7137dca34f1a7996a98->leave($__internal_51f44e281e7f708c992085a27f612c5518c4e052e80db7137dca34f1a7996a98_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
