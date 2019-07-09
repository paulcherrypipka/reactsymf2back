<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_bbe9591880320663e4efe405f1f36d017017d4f1c36a488d5b437cac6d4d1ec1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_6ec31de17bf7e737232f69463242a71e356f61119f511df4faf41c704f4469eb = $this->env->getExtension("native_profiler");
        $__internal_6ec31de17bf7e737232f69463242a71e356f61119f511df4faf41c704f4469eb->enter($__internal_6ec31de17bf7e737232f69463242a71e356f61119f511df4faf41c704f4469eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ec31de17bf7e737232f69463242a71e356f61119f511df4faf41c704f4469eb->leave($__internal_6ec31de17bf7e737232f69463242a71e356f61119f511df4faf41c704f4469eb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cb4294f19d79c1d4209c592814ec551e9e4927c60fffb91969eb8c5e61dd9bcb = $this->env->getExtension("native_profiler");
        $__internal_cb4294f19d79c1d4209c592814ec551e9e4927c60fffb91969eb8c5e61dd9bcb->enter($__internal_cb4294f19d79c1d4209c592814ec551e9e4927c60fffb91969eb8c5e61dd9bcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_cb4294f19d79c1d4209c592814ec551e9e4927c60fffb91969eb8c5e61dd9bcb->leave($__internal_cb4294f19d79c1d4209c592814ec551e9e4927c60fffb91969eb8c5e61dd9bcb_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_2761a99f524f2f433fd16579e0085f2ae25c9c3295fe71c5e90ce925030dab10 = $this->env->getExtension("native_profiler");
        $__internal_2761a99f524f2f433fd16579e0085f2ae25c9c3295fe71c5e90ce925030dab10->enter($__internal_2761a99f524f2f433fd16579e0085f2ae25c9c3295fe71c5e90ce925030dab10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_2761a99f524f2f433fd16579e0085f2ae25c9c3295fe71c5e90ce925030dab10->leave($__internal_2761a99f524f2f433fd16579e0085f2ae25c9c3295fe71c5e90ce925030dab10_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
