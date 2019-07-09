<?php

/* admin/blog/edit.html.twig */
class __TwigTemplate_1f98072deafe58e373c3e63bb4d416cb28bf06646a185abac724eccf1d255d23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/blog/edit.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'main' => array($this, 'block_main'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "admin/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b56c1f92436f00534cf42c775600fd64f5c0f15f4e20eaadfc4276e5539fbe19 = $this->env->getExtension("native_profiler");
        $__internal_b56c1f92436f00534cf42c775600fd64f5c0f15f4e20eaadfc4276e5539fbe19->enter($__internal_b56c1f92436f00534cf42c775600fd64f5c0f15f4e20eaadfc4276e5539fbe19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/blog/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b56c1f92436f00534cf42c775600fd64f5c0f15f4e20eaadfc4276e5539fbe19->leave($__internal_b56c1f92436f00534cf42c775600fd64f5c0f15f4e20eaadfc4276e5539fbe19_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_1c071b1720c7c6aa8fe4cf798a252acb5d0c0b3082ffb98d16845c5965cb603a = $this->env->getExtension("native_profiler");
        $__internal_1c071b1720c7c6aa8fe4cf798a252acb5d0c0b3082ffb98d16845c5965cb603a->enter($__internal_1c071b1720c7c6aa8fe4cf798a252acb5d0c0b3082ffb98d16845c5965cb603a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "admin_post_edit";
        
        $__internal_1c071b1720c7c6aa8fe4cf798a252acb5d0c0b3082ffb98d16845c5965cb603a->leave($__internal_1c071b1720c7c6aa8fe4cf798a252acb5d0c0b3082ffb98d16845c5965cb603a_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_30025948d82cb97619698b70ee00f0d2d60a722edbde1da9d9db0e7277c5eacc = $this->env->getExtension("native_profiler");
        $__internal_30025948d82cb97619698b70ee00f0d2d60a722edbde1da9d9db0e7277c5eacc->enter($__internal_30025948d82cb97619698b70ee00f0d2d60a722edbde1da9d9db0e7277c5eacc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.edit_post", array("%id%" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()))), "html", null, true);
        echo "</h1>

    ";
        // line 8
        echo twig_include($this->env, $context, "default/_flash_messages.html.twig");
        echo "

    ";
        // line 10
        echo twig_include($this->env, $context, "admin/blog/_form.html.twig", array("form" =>         // line 11
(isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "button_label" => $this->env->getExtension('translator')->trans("action.save"), "include_back_to_home_link" => true), false);
        // line 14
        echo "
";
        
        $__internal_30025948d82cb97619698b70ee00f0d2d60a722edbde1da9d9db0e7277c5eacc->leave($__internal_30025948d82cb97619698b70ee00f0d2d60a722edbde1da9d9db0e7277c5eacc_prof);

    }

    // line 17
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_b048790479d9d043bd1e79484dad2e13d317d6633ca3ee2485095f21dcf55a92 = $this->env->getExtension("native_profiler");
        $__internal_b048790479d9d043bd1e79484dad2e13d317d6633ca3ee2485095f21dcf55a92->enter($__internal_b048790479d9d043bd1e79484dad2e13d317d6633ca3ee2485095f21dcf55a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 18
        echo "    <div class=\"section actions\">
        ";
        // line 19
        echo twig_include($this->env, $context, "admin/blog/_form.html.twig", array("form" =>         // line 20
(isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "button_label" => $this->env->getExtension('translator')->trans("action.delete_post"), "button_css" => "btn btn-lg btn-block btn-danger", "show_confirmation" => true), false);
        // line 24
        echo "
    </div>

    ";
        // line 27
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 29
        echo $this->env->getExtension('code_explorer_source_code')->showSourceCode($this->env, $this);
        echo "
";
        
        $__internal_b048790479d9d043bd1e79484dad2e13d317d6633ca3ee2485095f21dcf55a92->leave($__internal_b048790479d9d043bd1e79484dad2e13d317d6633ca3ee2485095f21dcf55a92_prof);

    }

    public function getTemplateName()
    {
        return "admin/blog/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 29,  93 => 27,  88 => 24,  86 => 20,  85 => 19,  82 => 18,  76 => 17,  68 => 14,  66 => 11,  65 => 10,  60 => 8,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'admin/layout.html.twig' %}*/
/* */
/* {% block body_id 'admin_post_edit' %}*/
/* */
/* {% block main %}*/
/*     <h1>{{ 'title.edit_post'|trans({'%id%': post.id}) }}</h1>*/
/* */
/*     {{ include('default/_flash_messages.html.twig') }}*/
/* */
/*     {{ include('admin/blog/_form.html.twig', {*/
/*         form: edit_form,*/
/*         button_label: 'action.save'|trans,*/
/*         include_back_to_home_link: true,*/
/*     }, with_context = false) }}*/
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/*     <div class="section actions">*/
/*         {{ include('admin/blog/_form.html.twig', {*/
/*             form: delete_form,*/
/*             button_label: 'action.delete_post'|trans,*/
/*             button_css: 'btn btn-lg btn-block btn-danger',*/
/*             show_confirmation: true,*/
/*         }, with_context = false) }}*/
/*     </div>*/
/* */
/*     {{ parent() }}*/
/* */
/*     {{ show_source_code(_self) }}*/
/* {% endblock %}*/
/* */
