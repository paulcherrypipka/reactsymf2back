<?php

/* blog/index.html.twig */
class __TwigTemplate_fabe0e622f5804a618a5e5ae6612e278f82a6e906af78e75b7f71cf1c980226b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "blog/index.html.twig", 1);
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
        $__internal_a0c3b57e87c96dccc44ac66fe5feb5d2ff25a69d63d6958ad76be213689a0460 = $this->env->getExtension("native_profiler");
        $__internal_a0c3b57e87c96dccc44ac66fe5feb5d2ff25a69d63d6958ad76be213689a0460->enter($__internal_a0c3b57e87c96dccc44ac66fe5feb5d2ff25a69d63d6958ad76be213689a0460_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0c3b57e87c96dccc44ac66fe5feb5d2ff25a69d63d6958ad76be213689a0460->leave($__internal_a0c3b57e87c96dccc44ac66fe5feb5d2ff25a69d63d6958ad76be213689a0460_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_09e46773cd088b3dc3ea17c44caabdb5ea747187904f818e54b2ad750393b63f = $this->env->getExtension("native_profiler");
        $__internal_09e46773cd088b3dc3ea17c44caabdb5ea747187904f818e54b2ad750393b63f->enter($__internal_09e46773cd088b3dc3ea17c44caabdb5ea747187904f818e54b2ad750393b63f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "blog_index";
        
        $__internal_09e46773cd088b3dc3ea17c44caabdb5ea747187904f818e54b2ad750393b63f->leave($__internal_09e46773cd088b3dc3ea17c44caabdb5ea747187904f818e54b2ad750393b63f_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_2146aea7a4d2449c0f7f9db969ba3cb11a746a69126646ebda6b4ce688b2e7dd = $this->env->getExtension("native_profiler");
        $__internal_2146aea7a4d2449c0f7f9db969ba3cb11a746a69126646ebda6b4ce688b2e7dd->enter($__internal_2146aea7a4d2449c0f7f9db969ba3cb11a746a69126646ebda6b4ce688b2e7dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 7
            echo "        <article class=\"post\">
            <h2>
                <a href=\"";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("blog_post", array("slug" => $this->getAttribute($context["post"], "slug", array()))), "html", null, true);
            echo "\">
                    ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "
                </a>
            </h2>

            ";
            // line 14
            echo $this->env->getExtension('app.extension')->markdownToHtml($this->getAttribute($context["post"], "summary", array()));
            echo "
        </article>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 17
            echo "        <div class=\"well\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("post.no_posts_found"), "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "
    <div class=\"navigation text-center\">
        ";
        // line 21
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        echo "
    </div>
";
        
        $__internal_2146aea7a4d2449c0f7f9db969ba3cb11a746a69126646ebda6b4ce688b2e7dd->leave($__internal_2146aea7a4d2449c0f7f9db969ba3cb11a746a69126646ebda6b4ce688b2e7dd_prof);

    }

    // line 25
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_f3e376801e331baec4510553be448c81fdc551d538bcf83ef5e856e97027dd94 = $this->env->getExtension("native_profiler");
        $__internal_f3e376801e331baec4510553be448c81fdc551d538bcf83ef5e856e97027dd94->enter($__internal_f3e376801e331baec4510553be448c81fdc551d538bcf83ef5e856e97027dd94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 26
        echo "    ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 28
        echo $this->env->getExtension('code_explorer_source_code')->showSourceCode($this->env, $this);
        echo "
";
        
        $__internal_f3e376801e331baec4510553be448c81fdc551d538bcf83ef5e856e97027dd94->leave($__internal_f3e376801e331baec4510553be448c81fdc551d538bcf83ef5e856e97027dd94_prof);

    }

    public function getTemplateName()
    {
        return "blog/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 28,  112 => 26,  106 => 25,  96 => 21,  92 => 19,  83 => 17,  75 => 14,  68 => 10,  64 => 9,  60 => 7,  54 => 6,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body_id 'blog_index' %}*/
/* */
/* {% block main %}*/
/*     {% for post in posts %}*/
/*         <article class="post">*/
/*             <h2>*/
/*                 <a href="{{ path('blog_post', { slug: post.slug }) }}">*/
/*                     {{ post.title }}*/
/*                 </a>*/
/*             </h2>*/
/* */
/*             {{ post.summary|md2html }}*/
/*         </article>*/
/*     {% else %}*/
/*         <div class="well">{{ 'post.no_posts_found'|trans }}</div>*/
/*     {% endfor %}*/
/* */
/*     <div class="navigation text-center">*/
/*         {{ knp_pagination_render(posts) }}*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/*     {{ parent() }}*/
/* */
/*     {{ show_source_code(_self) }}*/
/* {% endblock %}*/
/* */
