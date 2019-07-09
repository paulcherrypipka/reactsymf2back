<?php

/* TwigBundle:Exception:error.html.twig */
class __TwigTemplate_f17d13aaac59cb23d161da1ebd47cce879b7591026995b51dd80e581545d2225 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 11
        $this->parent = $this->loadTemplate("base.html.twig", "TwigBundle:Exception:error.html.twig", 11);
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
        $__internal_40d1a61ce00f7b5e1c761eee3d50ae7973e6f907d9f22f246fc1d2f1562ffadf = $this->env->getExtension("native_profiler");
        $__internal_40d1a61ce00f7b5e1c761eee3d50ae7973e6f907d9f22f246fc1d2f1562ffadf->enter($__internal_40d1a61ce00f7b5e1c761eee3d50ae7973e6f907d9f22f246fc1d2f1562ffadf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_40d1a61ce00f7b5e1c761eee3d50ae7973e6f907d9f22f246fc1d2f1562ffadf->leave($__internal_40d1a61ce00f7b5e1c761eee3d50ae7973e6f907d9f22f246fc1d2f1562ffadf_prof);

    }

    // line 13
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_a2c8da39a75b8853a3d7811b6f813f6836c7b26714b9c32c917df1cc0ea77bad = $this->env->getExtension("native_profiler");
        $__internal_a2c8da39a75b8853a3d7811b6f813f6836c7b26714b9c32c917df1cc0ea77bad->enter($__internal_a2c8da39a75b8853a3d7811b6f813f6836c7b26714b9c32c917df1cc0ea77bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "error";
        
        $__internal_a2c8da39a75b8853a3d7811b6f813f6836c7b26714b9c32c917df1cc0ea77bad->leave($__internal_a2c8da39a75b8853a3d7811b6f813f6836c7b26714b9c32c917df1cc0ea77bad_prof);

    }

    // line 15
    public function block_main($context, array $blocks = array())
    {
        $__internal_9f353c8e54206b507cd8b0508a3543a99dc655592603dd2326099d736f2c83bf = $this->env->getExtension("native_profiler");
        $__internal_9f353c8e54206b507cd8b0508a3543a99dc655592603dd2326099d736f2c83bf->enter($__internal_9f353c8e54206b507cd8b0508a3543a99dc655592603dd2326099d736f2c83bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 16
        echo "    <h1 class=\"text-danger\">Error</h1>

    <p class=\"lead\">
        There was an unknown error (HTTP ";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo ")
        that prevented to complete your request.
    </p>
    <p>
        Try loading this page again in some minutes or
        <a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("blog_index");
        echo "\">go back to the homepage</a>.
    </p>
";
        
        $__internal_9f353c8e54206b507cd8b0508a3543a99dc655592603dd2326099d736f2c83bf->leave($__internal_9f353c8e54206b507cd8b0508a3543a99dc655592603dd2326099d736f2c83bf_prof);

    }

    // line 28
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_b2f3e863878da04d97b3c4057795cdbc42002ea04e89a6ed61c0cc8cf367b6fd = $this->env->getExtension("native_profiler");
        $__internal_b2f3e863878da04d97b3c4057795cdbc42002ea04e89a6ed61c0cc8cf367b6fd->enter($__internal_b2f3e863878da04d97b3c4057795cdbc42002ea04e89a6ed61c0cc8cf367b6fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 29
        echo "    ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 31
        echo $this->env->getExtension('code_explorer_source_code')->showSourceCode($this->env, $this);
        echo "
";
        
        $__internal_b2f3e863878da04d97b3c4057795cdbc42002ea04e89a6ed61c0cc8cf367b6fd->leave($__internal_b2f3e863878da04d97b3c4057795cdbc42002ea04e89a6ed61c0cc8cf367b6fd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 31,  83 => 29,  77 => 28,  67 => 24,  59 => 19,  54 => 16,  48 => 15,  36 => 13,  11 => 11,);
    }
}
/* {#*/
/*     This template is used to render any error different from 403, 404 and 500.*/
/* */
/*     This is the simplest way to customize error pages in Symfony applications.*/
/*     In case you need it, you can also hook into the internal exception handling*/
/*     made by Symfony. This allows you to perform advanced tasks and even recover*/
/*     your application from some errors.*/
/*     See http://symfony.com/doc/current/cookbook/controller/error_pages.html*/
/* #}*/
/* */
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body_id 'error' %}*/
/* */
/* {% block main %}*/
/*     <h1 class="text-danger">Error</h1>*/
/* */
/*     <p class="lead">*/
/*         There was an unknown error (HTTP {{ status_code }})*/
/*         that prevented to complete your request.*/
/*     </p>*/
/*     <p>*/
/*         Try loading this page again in some minutes or*/
/*         <a href="{{ path('blog_index') }}">go back to the homepage</a>.*/
/*     </p>*/
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/*     {{ parent() }}*/
/* */
/*     {{ show_source_code(_self) }}*/
/* {% endblock %}*/
/* */
