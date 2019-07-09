<?php

/* TwigBundle:Exception:error500.html.twig */
class __TwigTemplate_7d3f7217cd23df9f3705e0211c961cb3ba570fe743a85f3bda111344a45435d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 11
        $this->parent = $this->loadTemplate("base.html.twig", "TwigBundle:Exception:error500.html.twig", 11);
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
        $__internal_a741b0c1ca27ed1c573a2b4c83c10ba89652cafe01320737a140d4c213d3580e = $this->env->getExtension("native_profiler");
        $__internal_a741b0c1ca27ed1c573a2b4c83c10ba89652cafe01320737a140d4c213d3580e->enter($__internal_a741b0c1ca27ed1c573a2b4c83c10ba89652cafe01320737a140d4c213d3580e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error500.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a741b0c1ca27ed1c573a2b4c83c10ba89652cafe01320737a140d4c213d3580e->leave($__internal_a741b0c1ca27ed1c573a2b4c83c10ba89652cafe01320737a140d4c213d3580e_prof);

    }

    // line 13
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_b5883351569caa4fdd7cb4b4800010d87ca49242d99a7969749204e3fc339b1b = $this->env->getExtension("native_profiler");
        $__internal_b5883351569caa4fdd7cb4b4800010d87ca49242d99a7969749204e3fc339b1b->enter($__internal_b5883351569caa4fdd7cb4b4800010d87ca49242d99a7969749204e3fc339b1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "error";
        
        $__internal_b5883351569caa4fdd7cb4b4800010d87ca49242d99a7969749204e3fc339b1b->leave($__internal_b5883351569caa4fdd7cb4b4800010d87ca49242d99a7969749204e3fc339b1b_prof);

    }

    // line 15
    public function block_main($context, array $blocks = array())
    {
        $__internal_b9f3e615d5058a03d9c26830de03a69b061eefd6d34514812fb1fb7bbaca1e53 = $this->env->getExtension("native_profiler");
        $__internal_b9f3e615d5058a03d9c26830de03a69b061eefd6d34514812fb1fb7bbaca1e53->enter($__internal_b9f3e615d5058a03d9c26830de03a69b061eefd6d34514812fb1fb7bbaca1e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 16
        echo "    <h1 class=\"text-danger\">Error 500</h1>

    <p class=\"lead\">
        There was an internal server error.
    </p>
    <p>
        Try loading this page again in some minutes or
        <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("blog_index");
        echo "\">go back to the homepage</a>.
    </p>
";
        
        $__internal_b9f3e615d5058a03d9c26830de03a69b061eefd6d34514812fb1fb7bbaca1e53->leave($__internal_b9f3e615d5058a03d9c26830de03a69b061eefd6d34514812fb1fb7bbaca1e53_prof);

    }

    // line 27
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_5a7ccbd41eae4ecadb99003f6e30d720deca2a331c17cdd810410ff7ece9acf1 = $this->env->getExtension("native_profiler");
        $__internal_5a7ccbd41eae4ecadb99003f6e30d720deca2a331c17cdd810410ff7ece9acf1->enter($__internal_5a7ccbd41eae4ecadb99003f6e30d720deca2a331c17cdd810410ff7ece9acf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 28
        echo "    ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 30
        echo $this->env->getExtension('code_explorer_source_code')->showSourceCode($this->env, $this);
        echo "
";
        
        $__internal_5a7ccbd41eae4ecadb99003f6e30d720deca2a331c17cdd810410ff7ece9acf1->leave($__internal_5a7ccbd41eae4ecadb99003f6e30d720deca2a331c17cdd810410ff7ece9acf1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error500.html.twig";
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
/*     This template is used to render errors of type HTTP 500 (Internal Server Error)*/
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
/*     <h1 class="text-danger">Error 500</h1>*/
/* */
/*     <p class="lead">*/
/*         There was an internal server error.*/
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
