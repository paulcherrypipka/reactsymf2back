<?php

/* :admin/blog:edit.html.twig */
class __TwigTemplate_5abd0848a3f406abc03f30b75f34e962446d5ac1415127aa9ea76d0385c65130 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", ":admin/blog:edit.html.twig", 1);
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
        $__internal_c09bcb36a6fd12e4b7a6f049ccc0a01b15e8d165228c2e6acc553775a91e06da = $this->env->getExtension("native_profiler");
        $__internal_c09bcb36a6fd12e4b7a6f049ccc0a01b15e8d165228c2e6acc553775a91e06da->enter($__internal_c09bcb36a6fd12e4b7a6f049ccc0a01b15e8d165228c2e6acc553775a91e06da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin/blog:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c09bcb36a6fd12e4b7a6f049ccc0a01b15e8d165228c2e6acc553775a91e06da->leave($__internal_c09bcb36a6fd12e4b7a6f049ccc0a01b15e8d165228c2e6acc553775a91e06da_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_6cfd15589ba90bed6fa694384eb29d1d1b2a26e14b7fdf0d9ff52583dd4ed529 = $this->env->getExtension("native_profiler");
        $__internal_6cfd15589ba90bed6fa694384eb29d1d1b2a26e14b7fdf0d9ff52583dd4ed529->enter($__internal_6cfd15589ba90bed6fa694384eb29d1d1b2a26e14b7fdf0d9ff52583dd4ed529_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "admin_post_edit";
        
        $__internal_6cfd15589ba90bed6fa694384eb29d1d1b2a26e14b7fdf0d9ff52583dd4ed529->leave($__internal_6cfd15589ba90bed6fa694384eb29d1d1b2a26e14b7fdf0d9ff52583dd4ed529_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_ef6637e09c0a8a43ef0405cc979e9d9eb40f95d7835cc0f51efd3e4d16708fe5 = $this->env->getExtension("native_profiler");
        $__internal_ef6637e09c0a8a43ef0405cc979e9d9eb40f95d7835cc0f51efd3e4d16708fe5->enter($__internal_ef6637e09c0a8a43ef0405cc979e9d9eb40f95d7835cc0f51efd3e4d16708fe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_ef6637e09c0a8a43ef0405cc979e9d9eb40f95d7835cc0f51efd3e4d16708fe5->leave($__internal_ef6637e09c0a8a43ef0405cc979e9d9eb40f95d7835cc0f51efd3e4d16708fe5_prof);

    }

    // line 17
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_50a27faabd2354768d271421e413d4f472e296cddced9b7dbde5726589a84db5 = $this->env->getExtension("native_profiler");
        $__internal_50a27faabd2354768d271421e413d4f472e296cddced9b7dbde5726589a84db5->enter($__internal_50a27faabd2354768d271421e413d4f472e296cddced9b7dbde5726589a84db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

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
        
        $__internal_50a27faabd2354768d271421e413d4f472e296cddced9b7dbde5726589a84db5->leave($__internal_50a27faabd2354768d271421e413d4f472e296cddced9b7dbde5726589a84db5_prof);

    }

    public function getTemplateName()
    {
        return ":admin/blog:edit.html.twig";
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
