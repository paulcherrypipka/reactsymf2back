<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_895480b958468a206bb9267dc02aa9c2bfe5ac8a9444a332b1fc4a4f25862fc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
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
        $__internal_f1531607b6b1bc0a065759f95bcfa2ece440a49dbb36089ec9e144660b50ec8e = $this->env->getExtension("native_profiler");
        $__internal_f1531607b6b1bc0a065759f95bcfa2ece440a49dbb36089ec9e144660b50ec8e->enter($__internal_f1531607b6b1bc0a065759f95bcfa2ece440a49dbb36089ec9e144660b50ec8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1531607b6b1bc0a065759f95bcfa2ece440a49dbb36089ec9e144660b50ec8e->leave($__internal_f1531607b6b1bc0a065759f95bcfa2ece440a49dbb36089ec9e144660b50ec8e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_99a90fa1b9589e23aa3035b7eb9307363e45233b9ca3187c67f995d914bf1be3 = $this->env->getExtension("native_profiler");
        $__internal_99a90fa1b9589e23aa3035b7eb9307363e45233b9ca3187c67f995d914bf1be3->enter($__internal_99a90fa1b9589e23aa3035b7eb9307363e45233b9ca3187c67f995d914bf1be3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_99a90fa1b9589e23aa3035b7eb9307363e45233b9ca3187c67f995d914bf1be3->leave($__internal_99a90fa1b9589e23aa3035b7eb9307363e45233b9ca3187c67f995d914bf1be3_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_214e46b597e2d3a699eb6f76996205f831f66461ab65b8481ca8804d2adb4b42 = $this->env->getExtension("native_profiler");
        $__internal_214e46b597e2d3a699eb6f76996205f831f66461ab65b8481ca8804d2adb4b42->enter($__internal_214e46b597e2d3a699eb6f76996205f831f66461ab65b8481ca8804d2adb4b42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_214e46b597e2d3a699eb6f76996205f831f66461ab65b8481ca8804d2adb4b42->leave($__internal_214e46b597e2d3a699eb6f76996205f831f66461ab65b8481ca8804d2adb4b42_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fdacb5a19ad726b00f8c5cc96dca840e86e5697ec452b96b62c1b4bcdb5bc583 = $this->env->getExtension("native_profiler");
        $__internal_fdacb5a19ad726b00f8c5cc96dca840e86e5697ec452b96b62c1b4bcdb5bc583->enter($__internal_fdacb5a19ad726b00f8c5cc96dca840e86e5697ec452b96b62c1b4bcdb5bc583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fdacb5a19ad726b00f8c5cc96dca840e86e5697ec452b96b62c1b4bcdb5bc583->leave($__internal_fdacb5a19ad726b00f8c5cc96dca840e86e5697ec452b96b62c1b4bcdb5bc583_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
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
