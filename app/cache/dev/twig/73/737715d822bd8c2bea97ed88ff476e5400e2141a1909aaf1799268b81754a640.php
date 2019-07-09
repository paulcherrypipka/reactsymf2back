<?php

/* :admin/blog:new.html.twig */
class __TwigTemplate_8e7368f5883188e68af0bc8a20d51c23bdd2ebc7246b3d1aa99f9a6406b7e415 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", ":admin/blog:new.html.twig", 1);
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
        $__internal_50b75f14e37aae0e078f06f5d0822821f77f4ab1f0fc83f831793f6dd08a5185 = $this->env->getExtension("native_profiler");
        $__internal_50b75f14e37aae0e078f06f5d0822821f77f4ab1f0fc83f831793f6dd08a5185->enter($__internal_50b75f14e37aae0e078f06f5d0822821f77f4ab1f0fc83f831793f6dd08a5185_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin/blog:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50b75f14e37aae0e078f06f5d0822821f77f4ab1f0fc83f831793f6dd08a5185->leave($__internal_50b75f14e37aae0e078f06f5d0822821f77f4ab1f0fc83f831793f6dd08a5185_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_af3edbe1f2e7711fc9b408f85f74fc218205dc6d01c76efa7bc37d3926fc92e7 = $this->env->getExtension("native_profiler");
        $__internal_af3edbe1f2e7711fc9b408f85f74fc218205dc6d01c76efa7bc37d3926fc92e7->enter($__internal_af3edbe1f2e7711fc9b408f85f74fc218205dc6d01c76efa7bc37d3926fc92e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "admin_post_new";
        
        $__internal_af3edbe1f2e7711fc9b408f85f74fc218205dc6d01c76efa7bc37d3926fc92e7->leave($__internal_af3edbe1f2e7711fc9b408f85f74fc218205dc6d01c76efa7bc37d3926fc92e7_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_56a135d91697aea456e4ed641ed3593924288cabf99d3dcd499f75e07797e565 = $this->env->getExtension("native_profiler");
        $__internal_56a135d91697aea456e4ed641ed3593924288cabf99d3dcd499f75e07797e565->enter($__internal_56a135d91697aea456e4ed641ed3593924288cabf99d3dcd499f75e07797e565_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.post_new"), "html", null, true);
        echo "</h1>

    ";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'row');
        echo "
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "summary", array()), 'row');
        echo "
        ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "content", array()), 'row');
        echo "
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "authorEmail", array()), 'row');
        echo "
        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "publishedAt", array()), 'row');
        echo "

        <input type=\"submit\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.create_post"), "html", null, true);
        echo "\" class=\"btn btn-primary\" />

        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "saveAndCreateNew", array()), 'widget', array("label" => $this->env->getExtension('translator')->trans("label.save_and_create_new"), "attr" => array("class" => "btn btn-primary")));
        echo "

        <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("admin_post_index");
        echo "\" class=\"btn btn-link\">
            ";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.back_to_list"), "html", null, true);
        echo "
        </a>
    ";
        // line 22
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_56a135d91697aea456e4ed641ed3593924288cabf99d3dcd499f75e07797e565->leave($__internal_56a135d91697aea456e4ed641ed3593924288cabf99d3dcd499f75e07797e565_prof);

    }

    // line 25
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_6a01c9cb426711fe35633555f9e28a7dc0baec3d07c9adff3c39620101d1e723 = $this->env->getExtension("native_profiler");
        $__internal_6a01c9cb426711fe35633555f9e28a7dc0baec3d07c9adff3c39620101d1e723->enter($__internal_6a01c9cb426711fe35633555f9e28a7dc0baec3d07c9adff3c39620101d1e723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 26
        echo "    ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 28
        echo $this->env->getExtension('code_explorer_source_code')->showSourceCode($this->env, $this);
        echo "
";
        
        $__internal_6a01c9cb426711fe35633555f9e28a7dc0baec3d07c9adff3c39620101d1e723->leave($__internal_6a01c9cb426711fe35633555f9e28a7dc0baec3d07c9adff3c39620101d1e723_prof);

    }

    public function getTemplateName()
    {
        return ":admin/blog:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 28,  119 => 26,  113 => 25,  104 => 22,  99 => 20,  95 => 19,  90 => 17,  85 => 15,  80 => 13,  76 => 12,  72 => 11,  68 => 10,  64 => 9,  60 => 8,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'admin/layout.html.twig' %}*/
/* */
/* {% block body_id 'admin_post_new' %}*/
/* */
/* {% block main %}*/
/*     <h1>{{ 'title.post_new'|trans }}</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_row(form.title) }}*/
/*         {{ form_row(form.summary) }}*/
/*         {{ form_row(form.content) }}*/
/*         {{ form_row(form.authorEmail) }}*/
/*         {{ form_row(form.publishedAt) }}*/
/* */
/*         <input type="submit" value="{{ 'label.create_post'|trans }}" class="btn btn-primary" />*/
/* */
/*         {{ form_widget(form.saveAndCreateNew, { label: 'label.save_and_create_new'|trans, attr: { class: 'btn btn-primary' } }) }}*/
/* */
/*         <a href="{{ path('admin_post_index') }}" class="btn btn-link">*/
/*             {{ 'action.back_to_list'|trans }}*/
/*         </a>*/
/*     {{ form_end(form) }}*/
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/*     {{ parent() }}*/
/* */
/*     {{ show_source_code(_self) }}*/
/* {% endblock %}*/
/* */
