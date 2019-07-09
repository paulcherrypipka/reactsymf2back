<?php

/* admin/blog/new.html.twig */
class __TwigTemplate_55c76576f0cd944633776ad08c9e78edb71d5d943dc0af05afd8e2b8b229d13a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", "admin/blog/new.html.twig", 1);
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
        $__internal_48a2bd32534712dcfeb5081578daca6c761353dc4b4da75fbd72610ca73a8264 = $this->env->getExtension("native_profiler");
        $__internal_48a2bd32534712dcfeb5081578daca6c761353dc4b4da75fbd72610ca73a8264->enter($__internal_48a2bd32534712dcfeb5081578daca6c761353dc4b4da75fbd72610ca73a8264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "admin/blog/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48a2bd32534712dcfeb5081578daca6c761353dc4b4da75fbd72610ca73a8264->leave($__internal_48a2bd32534712dcfeb5081578daca6c761353dc4b4da75fbd72610ca73a8264_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_71aaf97c4bc3215a0241d8620f8e6b9f70ddaa5d58feda415e0e86965ed21a83 = $this->env->getExtension("native_profiler");
        $__internal_71aaf97c4bc3215a0241d8620f8e6b9f70ddaa5d58feda415e0e86965ed21a83->enter($__internal_71aaf97c4bc3215a0241d8620f8e6b9f70ddaa5d58feda415e0e86965ed21a83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "admin_post_new";
        
        $__internal_71aaf97c4bc3215a0241d8620f8e6b9f70ddaa5d58feda415e0e86965ed21a83->leave($__internal_71aaf97c4bc3215a0241d8620f8e6b9f70ddaa5d58feda415e0e86965ed21a83_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_77c41ac57153e66839c5b70af4629c19099cba9f7512eaec290cf6bf149d785d = $this->env->getExtension("native_profiler");
        $__internal_77c41ac57153e66839c5b70af4629c19099cba9f7512eaec290cf6bf149d785d->enter($__internal_77c41ac57153e66839c5b70af4629c19099cba9f7512eaec290cf6bf149d785d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_77c41ac57153e66839c5b70af4629c19099cba9f7512eaec290cf6bf149d785d->leave($__internal_77c41ac57153e66839c5b70af4629c19099cba9f7512eaec290cf6bf149d785d_prof);

    }

    // line 25
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_9e9e73a9fcb1a1f013705652ca36b1debd10b594f8713aba6336537bb830ae52 = $this->env->getExtension("native_profiler");
        $__internal_9e9e73a9fcb1a1f013705652ca36b1debd10b594f8713aba6336537bb830ae52->enter($__internal_9e9e73a9fcb1a1f013705652ca36b1debd10b594f8713aba6336537bb830ae52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 26
        echo "    ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 28
        echo $this->env->getExtension('code_explorer_source_code')->showSourceCode($this->env, $this);
        echo "
";
        
        $__internal_9e9e73a9fcb1a1f013705652ca36b1debd10b594f8713aba6336537bb830ae52->leave($__internal_9e9e73a9fcb1a1f013705652ca36b1debd10b594f8713aba6336537bb830ae52_prof);

    }

    public function getTemplateName()
    {
        return "admin/blog/new.html.twig";
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
