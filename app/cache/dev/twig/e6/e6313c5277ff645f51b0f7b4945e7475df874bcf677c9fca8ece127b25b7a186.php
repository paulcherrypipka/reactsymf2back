<?php

/* :blog:comment_form_error.html.twig */
class __TwigTemplate_3ae167db96eeb76b70a1108099ae360a2f4ecab34f95698a46a858d856197f7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":blog:comment_form_error.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ab488683e6ffb9ef06f102866d17a7d0da8cfea30c1701ce47d5d1e4600b91d8 = $this->env->getExtension("native_profiler");
        $__internal_ab488683e6ffb9ef06f102866d17a7d0da8cfea30c1701ce47d5d1e4600b91d8->enter($__internal_ab488683e6ffb9ef06f102866d17a7d0da8cfea30c1701ce47d5d1e4600b91d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":blog:comment_form_error.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab488683e6ffb9ef06f102866d17a7d0da8cfea30c1701ce47d5d1e4600b91d8->leave($__internal_ab488683e6ffb9ef06f102866d17a7d0da8cfea30c1701ce47d5d1e4600b91d8_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_fb6d2eb4fd4b67ca61e28c941485102bd8ab8159b4946ad238ad2d444e7d7de6 = $this->env->getExtension("native_profiler");
        $__internal_fb6d2eb4fd4b67ca61e28c941485102bd8ab8159b4946ad238ad2d444e7d7de6->enter($__internal_fb6d2eb4fd4b67ca61e28c941485102bd8ab8159b4946ad238ad2d444e7d7de6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "comment_form_error";
        
        $__internal_fb6d2eb4fd4b67ca61e28c941485102bd8ab8159b4946ad238ad2d444e7d7de6->leave($__internal_fb6d2eb4fd4b67ca61e28c941485102bd8ab8159b4946ad238ad2d444e7d7de6_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_ac407088cfc96f1f544c10be3e101e119b83c6200a92304e65402acb602baaf0 = $this->env->getExtension("native_profiler");
        $__internal_ac407088cfc96f1f544c10be3e101e119b83c6200a92304e65402acb602baaf0->enter($__internal_ac407088cfc96f1f544c10be3e101e119b83c6200a92304e65402acb602baaf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "    <h1 class=\"text-danger\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("title.comment_error"), "html", null, true);
        echo "</h1>

    <div class=\"well\">
        ";
        // line 9
        echo twig_include($this->env, $context, "blog/_comment_form.html.twig");
        echo "
    </div>
";
        
        $__internal_ac407088cfc96f1f544c10be3e101e119b83c6200a92304e65402acb602baaf0->leave($__internal_ac407088cfc96f1f544c10be3e101e119b83c6200a92304e65402acb602baaf0_prof);

    }

    public function getTemplateName()
    {
        return ":blog:comment_form_error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 9,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body_id 'comment_form_error' %}*/
/* */
/* {% block main %}*/
/*     <h1 class="text-danger">{{ 'title.comment_error'|trans }}</h1>*/
/* */
/*     <div class="well">*/
/*         {{ include('blog/_comment_form.html.twig') }}*/
/*     </div>*/
/* {% endblock %}*/
/* */
