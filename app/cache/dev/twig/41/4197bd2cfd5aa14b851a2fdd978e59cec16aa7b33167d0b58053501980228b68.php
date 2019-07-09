<?php

/* TwigBundle:Exception:error403.html.twig */
class __TwigTemplate_d265c2c31e61fcf4755131a3ef735d34b6e714bd48508df8a26b2546ca56e9f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 11
        $this->parent = $this->loadTemplate("base.html.twig", "TwigBundle:Exception:error403.html.twig", 11);
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
        $__internal_72b1d93d4b2058f640e4188eff7d1d198d0ff5ade90826d51677f88fe8db8df9 = $this->env->getExtension("native_profiler");
        $__internal_72b1d93d4b2058f640e4188eff7d1d198d0ff5ade90826d51677f88fe8db8df9->enter($__internal_72b1d93d4b2058f640e4188eff7d1d198d0ff5ade90826d51677f88fe8db8df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error403.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_72b1d93d4b2058f640e4188eff7d1d198d0ff5ade90826d51677f88fe8db8df9->leave($__internal_72b1d93d4b2058f640e4188eff7d1d198d0ff5ade90826d51677f88fe8db8df9_prof);

    }

    // line 13
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_fc774034917544a82e127241bed1e4930ac5d80d54e4fd7927331a0c0eeca6d9 = $this->env->getExtension("native_profiler");
        $__internal_fc774034917544a82e127241bed1e4930ac5d80d54e4fd7927331a0c0eeca6d9->enter($__internal_fc774034917544a82e127241bed1e4930ac5d80d54e4fd7927331a0c0eeca6d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "error";
        
        $__internal_fc774034917544a82e127241bed1e4930ac5d80d54e4fd7927331a0c0eeca6d9->leave($__internal_fc774034917544a82e127241bed1e4930ac5d80d54e4fd7927331a0c0eeca6d9_prof);

    }

    // line 15
    public function block_main($context, array $blocks = array())
    {
        $__internal_d99410e8a8c73a20fafc7da9f6fece761b9468fec8822334a9f7cd4c427fc93e = $this->env->getExtension("native_profiler");
        $__internal_d99410e8a8c73a20fafc7da9f6fece761b9468fec8822334a9f7cd4c427fc93e->enter($__internal_d99410e8a8c73a20fafc7da9f6fece761b9468fec8822334a9f7cd4c427fc93e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 16
        echo "    <h1 class=\"text-danger\"><i class=\"fa fa-unlock-alt\"></i> Error 403</h1>

    <p class=\"lead\">
        You don't have permission to access to this resource.
    </p>
    <p>
        Ask your manager or system administrator to grant you
        access to this resource.
    </p>
";
        
        $__internal_d99410e8a8c73a20fafc7da9f6fece761b9468fec8822334a9f7cd4c427fc93e->leave($__internal_d99410e8a8c73a20fafc7da9f6fece761b9468fec8822334a9f7cd4c427fc93e_prof);

    }

    // line 27
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_03825fee504af244cb57d43cc5d7ba4048a438334fb84fa62130711b6a1609ec = $this->env->getExtension("native_profiler");
        $__internal_03825fee504af244cb57d43cc5d7ba4048a438334fb84fa62130711b6a1609ec->enter($__internal_03825fee504af244cb57d43cc5d7ba4048a438334fb84fa62130711b6a1609ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 28
        echo "    ";
        $this->displayParentBlock("sidebar", $context, $blocks);
        echo "

    ";
        // line 30
        echo $this->env->getExtension('code_explorer_source_code')->showSourceCode($this->env, $this);
        echo "
";
        
        $__internal_03825fee504af244cb57d43cc5d7ba4048a438334fb84fa62130711b6a1609ec->leave($__internal_03825fee504af244cb57d43cc5d7ba4048a438334fb84fa62130711b6a1609ec_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error403.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 30,  76 => 28,  70 => 27,  54 => 16,  48 => 15,  36 => 13,  11 => 11,);
    }
}
/* {#*/
/*     This template is used to render errors of type HTTP 403 (Forbidden)*/
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
/*     <h1 class="text-danger"><i class="fa fa-unlock-alt"></i> Error 403</h1>*/
/* */
/*     <p class="lead">*/
/*         You don't have permission to access to this resource.*/
/*     </p>*/
/*     <p>*/
/*         Ask your manager or system administrator to grant you*/
/*         access to this resource.*/
/*     </p>*/
/* {% endblock %}*/
/* */
/* {% block sidebar %}*/
/*     {{ parent() }}*/
/* */
/*     {{ show_source_code(_self) }}*/
/* {% endblock %}*/
/* */
