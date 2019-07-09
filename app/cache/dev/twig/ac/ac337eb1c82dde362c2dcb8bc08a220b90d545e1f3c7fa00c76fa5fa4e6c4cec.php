<?php

/* @Twig/Exception/error.html.twig */
class __TwigTemplate_cfdf89efe69c90dfa34cb5914ba963f2038b363a6f4c0740e24ee8c883a39ef1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 11
        $this->parent = $this->loadTemplate("base.html.twig", "@Twig/Exception/error.html.twig", 11);
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
        $__internal_3dd29888d782efb720f6bf9567196d785c04bb6601f494bf6a61517fe74e0470 = $this->env->getExtension("native_profiler");
        $__internal_3dd29888d782efb720f6bf9567196d785c04bb6601f494bf6a61517fe74e0470->enter($__internal_3dd29888d782efb720f6bf9567196d785c04bb6601f494bf6a61517fe74e0470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3dd29888d782efb720f6bf9567196d785c04bb6601f494bf6a61517fe74e0470->leave($__internal_3dd29888d782efb720f6bf9567196d785c04bb6601f494bf6a61517fe74e0470_prof);

    }

    // line 13
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_cec0ff7f7e9248bf87a09512c03d149d127aa35fbe61b44be217e77f91b453e1 = $this->env->getExtension("native_profiler");
        $__internal_cec0ff7f7e9248bf87a09512c03d149d127aa35fbe61b44be217e77f91b453e1->enter($__internal_cec0ff7f7e9248bf87a09512c03d149d127aa35fbe61b44be217e77f91b453e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "error";
        
        $__internal_cec0ff7f7e9248bf87a09512c03d149d127aa35fbe61b44be217e77f91b453e1->leave($__internal_cec0ff7f7e9248bf87a09512c03d149d127aa35fbe61b44be217e77f91b453e1_prof);

    }

    // line 15
    public function block_main($context, array $blocks = array())
    {
        $__internal_77f6418533e1cb2b92d70e80fc5fd8b53c1dbcd22e814b14b07f16e2f55bd45f = $this->env->getExtension("native_profiler");
        $__internal_77f6418533e1cb2b92d70e80fc5fd8b53c1dbcd22e814b14b07f16e2f55bd45f->enter($__internal_77f6418533e1cb2b92d70e80fc5fd8b53c1dbcd22e814b14b07f16e2f55bd45f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

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
        
        $__internal_77f6418533e1cb2b92d70e80fc5fd8b53c1dbcd22e814b14b07f16e2f55bd45f->leave($__internal_77f6418533e1cb2b92d70e80fc5fd8b53c1dbcd22e814b14b07f16e2f55bd45f_prof);

    }

    // line 28
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_8e4794a721e825248c4468831e1a829cb1569cfc0773143d1fab30ceb1943b93 = $this->env->getExtension("native_profiler");
        $__internal_8e4794a721e825248c4468831e1a829cb1569cfc0773143d1fab30ceb1943b93->enter($__internal_8e4794a721e825248c4468831e1a829cb1569cfc0773143d1fab30ceb1943b93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 29
        echo "    ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 31
        echo $this->env->getExtension('code_explorer_source_code')->showSourceCode($this->env, $this);
        echo "
";
        
        $__internal_8e4794a721e825248c4468831e1a829cb1569cfc0773143d1fab30ceb1943b93->leave($__internal_8e4794a721e825248c4468831e1a829cb1569cfc0773143d1fab30ceb1943b93_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.html.twig";
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
