<?php

/* @KnpPaginator/Pagination/sortable_link.html.twig */
class __TwigTemplate_18e0031704753fafadb2383fe55e005412037944a95a80659bbfea00cb889ed5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e5dcf8e42e1c325a11ad47cef803256793af43b471420f9da62f53a4c811ef3a = $this->env->getExtension("native_profiler");
        $__internal_e5dcf8e42e1c325a11ad47cef803256793af43b471420f9da62f53a4c811ef3a->enter($__internal_e5dcf8e42e1c325a11ad47cef803256793af43b471420f9da62f53a4c811ef3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/sortable_link.html.twig"));

        // line 1
        echo "<a";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
        foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attr"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</a>
";
        
        $__internal_e5dcf8e42e1c325a11ad47cef803256793af43b471420f9da62f53a4c811ef3a->leave($__internal_e5dcf8e42e1c325a11ad47cef803256793af43b471420f9da62f53a4c811ef3a_prof);

    }

    public function getTemplateName()
    {
        return "@KnpPaginator/Pagination/sortable_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <a{% for attr, value in options %} {{ attr }}="{{ value }}"{% endfor %}>{{ title }}</a>*/
/* */
