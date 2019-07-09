<?php

/* :admin/blog:show.html.twig */
class __TwigTemplate_1e33894f712f0b6d4f65f6658c147c614e467017a15aff82721a6613655c6e82 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("admin/layout.html.twig", ":admin/blog:show.html.twig", 1);
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
        $__internal_4de4c864b6176bffd62bcebd90847b6cd93f0307118406859c636f69de6d54a7 = $this->env->getExtension("native_profiler");
        $__internal_4de4c864b6176bffd62bcebd90847b6cd93f0307118406859c636f69de6d54a7->enter($__internal_4de4c864b6176bffd62bcebd90847b6cd93f0307118406859c636f69de6d54a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":admin/blog:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4de4c864b6176bffd62bcebd90847b6cd93f0307118406859c636f69de6d54a7->leave($__internal_4de4c864b6176bffd62bcebd90847b6cd93f0307118406859c636f69de6d54a7_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_06da9251bce5d6ee6ed073667fa1cfdce67f4cf17d00fe1d620bc7e1a03004f6 = $this->env->getExtension("native_profiler");
        $__internal_06da9251bce5d6ee6ed073667fa1cfdce67f4cf17d00fe1d620bc7e1a03004f6->enter($__internal_06da9251bce5d6ee6ed073667fa1cfdce67f4cf17d00fe1d620bc7e1a03004f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "admin_post_show";
        
        $__internal_06da9251bce5d6ee6ed073667fa1cfdce67f4cf17d00fe1d620bc7e1a03004f6->leave($__internal_06da9251bce5d6ee6ed073667fa1cfdce67f4cf17d00fe1d620bc7e1a03004f6_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_c8bf4a3b099592d1b6bff0b5b937e979117a189f23322fe8e890afc98a7a39b0 = $this->env->getExtension("native_profiler");
        $__internal_c8bf4a3b099592d1b6bff0b5b937e979117a189f23322fe8e890afc98a7a39b0->enter($__internal_c8bf4a3b099592d1b6bff0b5b937e979117a189f23322fe8e890afc98a7a39b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "title", array()), "html", null, true);
        echo "</h1>

    <table class=\"table\">
        <tbody>
            <tr>
                <th>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.summary"), "html", null, true);
        echo "</th>
                <td>";
        // line 12
        echo $this->env->getExtension('app.extension')->markdownToHtml($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "summary", array()));
        echo "</td>
            </tr>
            <tr>
                <th>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.content"), "html", null, true);
        echo "</th>
                <td>";
        // line 16
        echo $this->env->getExtension('app.extension')->markdownToHtml($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "content", array()));
        echo "</td>
            </tr>
            <tr>
                <th>";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.author"), "html", null, true);
        echo "</th>
                <td><p>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "authorEmail", array()), "html", null, true);
        echo "</p></td>
            </tr>
            <tr>
                <th>";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.published_at"), "html", null, true);
        echo "</th>
                <td><p>";
        // line 24
        echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "publishedAt", array()), "long", "medium"), "html", null, true);
        echo "</p></td>
            </tr>
        </tbody>
    </table>
";
        
        $__internal_c8bf4a3b099592d1b6bff0b5b937e979117a189f23322fe8e890afc98a7a39b0->leave($__internal_c8bf4a3b099592d1b6bff0b5b937e979117a189f23322fe8e890afc98a7a39b0_prof);

    }

    // line 30
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_1fd94ab83435edab2daf66964dd12dbf9515fec8aa9fc16b0a7525be4b8891c7 = $this->env->getExtension("native_profiler");
        $__internal_1fd94ab83435edab2daf66964dd12dbf9515fec8aa9fc16b0a7525be4b8891c7->enter($__internal_1fd94ab83435edab2daf66964dd12dbf9515fec8aa9fc16b0a7525be4b8891c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 31
        echo "    <div class=\"section\">
        <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_post_edit", array("id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-lg btn-block btn-success\">
            <i class=\"fa fa-edit\"></i> ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit_contents"), "html", null, true);
        echo "
        </a>
    </div>

    <div class=\"section\">
        ";
        // line 38
        echo twig_include($this->env, $context, "admin/blog/_form.html.twig", array("form" =>         // line 39
(isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), "button_label" => $this->env->getExtension('translator')->trans("action.delete_post"), "button_css" => "btn btn-lg btn-block btn-danger", "show_confirmation" => true), false);
        // line 43
        echo "
    </div>

    ";
        // line 46
        echo $this->env->getExtension('code_explorer_source_code')->showSourceCode($this->env, $this);
        echo "
";
        
        $__internal_1fd94ab83435edab2daf66964dd12dbf9515fec8aa9fc16b0a7525be4b8891c7->leave($__internal_1fd94ab83435edab2daf66964dd12dbf9515fec8aa9fc16b0a7525be4b8891c7_prof);

    }

    public function getTemplateName()
    {
        return ":admin/blog:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 46,  133 => 43,  131 => 39,  130 => 38,  122 => 33,  118 => 32,  115 => 31,  109 => 30,  97 => 24,  93 => 23,  87 => 20,  83 => 19,  77 => 16,  73 => 15,  67 => 12,  63 => 11,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'admin/layout.html.twig' %}*/
/* */
/* {% block body_id 'admin_post_show' %}*/
/* */
/* {% block main %}*/
/*     <h1>{{ post.title }}</h1>*/
/* */
/*     <table class="table">*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>{{ 'label.summary'|trans }}</th>*/
/*                 <td>{{ post.summary|md2html }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>{{ 'label.content'|trans }}</th>*/
/*                 <td>{{ post.content|md2html }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>{{ 'label.author'|trans }}</th>*/
/*                 <td><p>{{ post.authorEmail }}</p></td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>{{ 'label.published_at'|trans }}</th>*/
/*                 <td><p>{{ post.publishedAt|localizeddate('long', 'medium') }}</p></td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/*     <div class="section">*/
/*         <a href="{{ path('admin_post_edit', { id: post.id }) }}" class="btn btn-lg btn-block btn-success">*/
/*             <i class="fa fa-edit"></i> {{ 'action.edit_contents'|trans }}*/
/*         </a>*/
/*     </div>*/
/* */
/*     <div class="section">*/
/*         {{ include('admin/blog/_form.html.twig', {*/
/*             form: delete_form,*/
/*             button_label: 'action.delete_post'|trans,*/
/*             button_css: 'btn btn-lg btn-block btn-danger',*/
/*             show_confirmation: true,*/
/*         }, with_context = false) }}*/
/*     </div>*/
/* */
/*     {{ show_source_code(_self) }}*/
/* {% endblock %}*/
/* */
