<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_634a344ecf59748d07993e2e83c398bfc7ad1849dffbfa44741e2abd466789fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_033a5fb02069c23d6af0e33f0de8fe65493684e8834958b8c8341e3550c32793 = $this->env->getExtension("native_profiler");
        $__internal_033a5fb02069c23d6af0e33f0de8fe65493684e8834958b8c8341e3550c32793->enter($__internal_033a5fb02069c23d6af0e33f0de8fe65493684e8834958b8c8341e3550c32793_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_033a5fb02069c23d6af0e33f0de8fe65493684e8834958b8c8341e3550c32793->leave($__internal_033a5fb02069c23d6af0e33f0de8fe65493684e8834958b8c8341e3550c32793_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b17755325e3aa9347c7c265a3570b844b41411fba96bcaad2abed7e3a71fa59e = $this->env->getExtension("native_profiler");
        $__internal_b17755325e3aa9347c7c265a3570b844b41411fba96bcaad2abed7e3a71fa59e->enter($__internal_b17755325e3aa9347c7c265a3570b844b41411fba96bcaad2abed7e3a71fa59e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_b17755325e3aa9347c7c265a3570b844b41411fba96bcaad2abed7e3a71fa59e->leave($__internal_b17755325e3aa9347c7c265a3570b844b41411fba96bcaad2abed7e3a71fa59e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_97a8d1d540135be39b80239cfd03cd0e989dd32d38eb87e0b64b6a4be4f8d87f = $this->env->getExtension("native_profiler");
        $__internal_97a8d1d540135be39b80239cfd03cd0e989dd32d38eb87e0b64b6a4be4f8d87f->enter($__internal_97a8d1d540135be39b80239cfd03cd0e989dd32d38eb87e0b64b6a4be4f8d87f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_97a8d1d540135be39b80239cfd03cd0e989dd32d38eb87e0b64b6a4be4f8d87f->leave($__internal_97a8d1d540135be39b80239cfd03cd0e989dd32d38eb87e0b64b6a4be4f8d87f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
