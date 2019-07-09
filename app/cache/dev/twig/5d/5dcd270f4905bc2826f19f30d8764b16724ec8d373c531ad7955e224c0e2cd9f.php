<?php

/* :blog:post_show.html.twig */
class __TwigTemplate_b168d3367b6e0ebb6cd26da35fdbfdbe217165d6c38605b0a93d141daf42bc80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":blog:post_show.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'main' => array($this, 'block_main'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db44c433f0f8399b53e7a0ca41f59fed88c019405ef76af6a66d098a00011e53 = $this->env->getExtension("native_profiler");
        $__internal_db44c433f0f8399b53e7a0ca41f59fed88c019405ef76af6a66d098a00011e53->enter($__internal_db44c433f0f8399b53e7a0ca41f59fed88c019405ef76af6a66d098a00011e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":blog:post_show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db44c433f0f8399b53e7a0ca41f59fed88c019405ef76af6a66d098a00011e53->leave($__internal_db44c433f0f8399b53e7a0ca41f59fed88c019405ef76af6a66d098a00011e53_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_cb5a77ba7be8c5adf1a7258fd3707afb22e7851947800dc93062528ac727fd89 = $this->env->getExtension("native_profiler");
        $__internal_cb5a77ba7be8c5adf1a7258fd3707afb22e7851947800dc93062528ac727fd89->enter($__internal_cb5a77ba7be8c5adf1a7258fd3707afb22e7851947800dc93062528ac727fd89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "blog_post_show";
        
        $__internal_cb5a77ba7be8c5adf1a7258fd3707afb22e7851947800dc93062528ac727fd89->leave($__internal_cb5a77ba7be8c5adf1a7258fd3707afb22e7851947800dc93062528ac727fd89_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_e4e672c90e438307033f79ac812dbf279e1e077d60569fe04670d6966c9b2589 = $this->env->getExtension("native_profiler");
        $__internal_e4e672c90e438307033f79ac812dbf279e1e077d60569fe04670d6966c9b2589->enter($__internal_e4e672c90e438307033f79ac812dbf279e1e077d60569fe04670d6966c9b2589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    <h1>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "title", array()), "html", null, true);
        echo "</h1>

    ";
        // line 8
        echo $this->env->getExtension('app.extension')->markdownToHtml($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "content", array()));
        echo "

    <div id=\"post-add-comment\" class=\"well\">
        ";
        // line 17
        echo "        ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 18
            echo "            ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("AppBundle:Blog:commentForm", array("id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()))));
            echo "
        ";
        } else {
            // line 20
            echo "            <p>
                <a class=\"btn btn-success\" href=\"";
            // line 21
            echo $this->env->getExtension('routing')->getPath("security_login_form");
            echo "\">
                    <i class=\"fa fa-sign-in\"></i> ";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.sign_in"), "html", null, true);
            echo "
                </a>
                ";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("post.to_publish_a_comment"), "html", null, true);
            echo "
            </p>
        ";
        }
        // line 27
        echo "    </div>

    <h3>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->transchoice("post.num_comments", twig_length_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "comments", array()))), "html", null, true);
        echo "</h3>

    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "comments", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 32
            echo "        <div class=\"row post-comment\">
            <h4 class=\"col-sm-3\">
                <strong>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "authorEmail", array()), "html", null, true);
            echo "</strong> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("post.commented_on"), "html", null, true);
            echo "
                <strong>";
            // line 35
            echo twig_escape_filter($this->env, twig_localized_date_filter($this->env, $this->getAttribute($context["comment"], "publishedAt", array()), "medium", "short"), "html", null, true);
            echo "</strong>
            </h4>
            <div class=\"col-sm-9\">
                ";
            // line 38
            echo $this->env->getExtension('app.extension')->markdownToHtml($this->getAttribute($context["comment"], "content", array()));
            echo "
            </div>
        </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 42
            echo "        <div class=\"post-comment\">
            <p>";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("post.no_comments"), "html", null, true);
            echo "</p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_e4e672c90e438307033f79ac812dbf279e1e077d60569fe04670d6966c9b2589->leave($__internal_e4e672c90e438307033f79ac812dbf279e1e077d60569fe04670d6966c9b2589_prof);

    }

    // line 48
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_76c608863c21753209114f565894130bcbbe3e88dbd71d3b0cf23c9f3c94c108 = $this->env->getExtension("native_profiler");
        $__internal_76c608863c21753209114f565894130bcbbe3e88dbd71d3b0cf23c9f3c94c108->enter($__internal_76c608863c21753209114f565894130bcbbe3e88dbd71d3b0cf23c9f3c94c108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 49
        echo "    ";
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "isAuthor", array(0 => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())), "method"))) {
            // line 50
            echo "        <div class=\"section\">
            <a class=\"btn btn-lg btn-block btn-success\" href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_post_edit", array("id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()))), "html", null, true);
            echo "\">
                <i class=\"fa fa-edit\"></i> ";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.edit_post"), "html", null, true);
            echo "
            </a>
        </div>
    ";
        }
        // line 56
        echo "
    ";
        // line 60
        echo "    ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 62
        echo $this->env->getExtension('code_explorer_source_code')->showSourceCode($this->env, $this);
        echo "
";
        
        $__internal_76c608863c21753209114f565894130bcbbe3e88dbd71d3b0cf23c9f3c94c108->leave($__internal_76c608863c21753209114f565894130bcbbe3e88dbd71d3b0cf23c9f3c94c108_prof);

    }

    public function getTemplateName()
    {
        return ":blog:post_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 62,  175 => 60,  172 => 56,  165 => 52,  161 => 51,  158 => 50,  155 => 49,  149 => 48,  135 => 43,  132 => 42,  123 => 38,  117 => 35,  111 => 34,  107 => 32,  102 => 31,  97 => 29,  93 => 27,  87 => 24,  82 => 22,  78 => 21,  75 => 20,  69 => 18,  66 => 17,  60 => 8,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body_id 'blog_post_show' %}*/
/* */
/* {% block main %}*/
/*     <h1>{{ post.title }}</h1>*/
/* */
/*     {{ post.content|md2html }}*/
/* */
/*     <div id="post-add-comment" class="well">*/
/*         {# The 'IS_AUTHENTICATED_FULLY' role ensures that the user has entered*/
/*         his/her credentials (login + password) during this session. If he/she*/
/*         is automatically logged via the 'Remember Me' functionality, he/she won't*/
/*         be able to add a comment.*/
/*         See http://symfony.com/doc/current/cookbook/security/remember_me.html#forcing-the-user-to-re-authenticate-before-accessing-certain-resources*/
/*         #}*/
/*         {% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*             {{ render(controller('AppBundle:Blog:commentForm', { 'id': post.id })) }}*/
/*         {% else %}*/
/*             <p>*/
/*                 <a class="btn btn-success" href="{{ path('security_login_form') }}">*/
/*                     <i class="fa fa-sign-in"></i> {{ 'action.sign_in'|trans }}*/
/*                 </a>*/
/*                 {{ 'post.to_publish_a_comment'|trans }}*/
/*             </p>*/
/*         {% endif %}*/
/*     </div>*/
/* */
/*     <h3>{{ 'post.num_comments'|transchoice(post.comments|length) }}</h3>*/
/* */
/*     {% for comment in post.comments %}*/
/*         <div class="row post-comment">*/
/*             <h4 class="col-sm-3">*/
/*                 <strong>{{ comment.authorEmail }}</strong> {{ 'post.commented_on'|trans }}*/
/*                 <strong>{{ comment.publishedAt|localizeddate('medium', 'short') }}</strong>*/
/*             </h4>*/
/*             <div class="col-sm-9">*/
/*                 {{ comment.content|md2html }}*/
/*             </div>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="post-comment">*/
/*             <p>{{ 'post.no_comments'|trans }}</p>*/
/*         </div>*/
/*     {% endfor %}*/
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/*     {% if app.user and post.isAuthor(app.user) %}*/
/*         <div class="section">*/
/*             <a class="btn btn-lg btn-block btn-success" href="{{ path('admin_post_edit', { id: post.id }) }}">*/
/*                 <i class="fa fa-edit"></i> {{ 'action.edit_post'|trans }}*/
/*             </a>*/
/*         </div>*/
/*     {% endif %}*/
/* */
/*     {# the parent() function includes the contents defined by the parent template*/
/*       ('base.html.twig') for this block ('sidebar'). This is a very convenient way*/
/*       to share common contents in different templates #}*/
/*     {{ parent() }}*/
/* */
/*     {{ show_source_code(_self) }}*/
/* {% endblock %}*/
/* */
