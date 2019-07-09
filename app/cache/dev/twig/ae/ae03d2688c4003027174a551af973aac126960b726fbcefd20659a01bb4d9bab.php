<?php

/* TwigBundle:Exception:error404.html.twig */
class __TwigTemplate_1f09c634c7f8aa9cdb172135f28017888e2de79abfbe26663460b59c8e48a60b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 11
        $this->parent = $this->loadTemplate("base.html.twig", "TwigBundle:Exception:error404.html.twig", 11);
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
        $__internal_bc80420d1e5c51dcf9cefdc586561136659733ca1508ca440c41e8b9d66c4536 = $this->env->getExtension("native_profiler");
        $__internal_bc80420d1e5c51dcf9cefdc586561136659733ca1508ca440c41e8b9d66c4536->enter($__internal_bc80420d1e5c51dcf9cefdc586561136659733ca1508ca440c41e8b9d66c4536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error404.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bc80420d1e5c51dcf9cefdc586561136659733ca1508ca440c41e8b9d66c4536->leave($__internal_bc80420d1e5c51dcf9cefdc586561136659733ca1508ca440c41e8b9d66c4536_prof);

    }

    // line 13
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_4e6d8b8d47e3dfd2f20ce6c6a3a6c3d2b13e2afe9979f38718e6ef9ed3a66cbd = $this->env->getExtension("native_profiler");
        $__internal_4e6d8b8d47e3dfd2f20ce6c6a3a6c3d2b13e2afe9979f38718e6ef9ed3a66cbd->enter($__internal_4e6d8b8d47e3dfd2f20ce6c6a3a6c3d2b13e2afe9979f38718e6ef9ed3a66cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "error";
        
        $__internal_4e6d8b8d47e3dfd2f20ce6c6a3a6c3d2b13e2afe9979f38718e6ef9ed3a66cbd->leave($__internal_4e6d8b8d47e3dfd2f20ce6c6a3a6c3d2b13e2afe9979f38718e6ef9ed3a66cbd_prof);

    }

    // line 15
    public function block_main($context, array $blocks = array())
    {
        $__internal_c34c300e59de7e67c2725839f40a4b80856a4d300d31c4049abf69aeaec31ddb = $this->env->getExtension("native_profiler");
        $__internal_c34c300e59de7e67c2725839f40a4b80856a4d300d31c4049abf69aeaec31ddb->enter($__internal_c34c300e59de7e67c2725839f40a4b80856a4d300d31c4049abf69aeaec31ddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 16
        echo "    <h1 class=\"text-danger\">Error 404</h1>

    <p class=\"lead\">
        We couldn't find the page you requested.
    </p>
    <p>
        Check out any misspelling in the URL or
        <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("blog_index");
        echo "\">go back to the homepage</a>.
    </p>
";
        
        $__internal_c34c300e59de7e67c2725839f40a4b80856a4d300d31c4049abf69aeaec31ddb->leave($__internal_c34c300e59de7e67c2725839f40a4b80856a4d300d31c4049abf69aeaec31ddb_prof);

    }

    // line 27
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_093866efe02f922161f20e1d00f27ac5093982c55e32c4efec5819f2fa14e66c = $this->env->getExtension("native_profiler");
        $__internal_093866efe02f922161f20e1d00f27ac5093982c55e32c4efec5819f2fa14e66c->enter($__internal_093866efe02f922161f20e1d00f27ac5093982c55e32c4efec5819f2fa14e66c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 28
        echo "    ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 30
        echo $this->env->getExtension('code_explorer_source_code')->showSourceCode($this->env, $this);
        echo "
";
        
        $__internal_093866efe02f922161f20e1d00f27ac5093982c55e32c4efec5819f2fa14e66c->leave($__internal_093866efe02f922161f20e1d00f27ac5093982c55e32c4efec5819f2fa14e66c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  79 => 28,  73 => 27,  63 => 23,  54 => 16,  48 => 15,  36 => 13,  11 => 11,);
    }
}
/* {#*/
/*     This template is used to render errors of type HTTP 404 (Not Found)*/
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
/*     <h1 class="text-danger">Error 404</h1>*/
/* */
/*     <p class="lead">*/
/*         We couldn't find the page you requested.*/
/*     </p>*/
/*     <p>*/
/*         Check out any misspelling in the URL or*/
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
