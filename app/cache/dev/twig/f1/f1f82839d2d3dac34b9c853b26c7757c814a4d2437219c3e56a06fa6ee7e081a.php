<?php

/* KnpPaginatorBundle:Pagination:sortable_link.html.twig */
class __TwigTemplate_e0799fc3a5a6b617714a4469a4582ef11f7d16f1526f0ec3c159391bb3e0eeb8 extends Twig_Template
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
        $__internal_5f72012dc25c335d02ced70cb898ed2368be95b20d7a4d306632e334442e9300 = $this->env->getExtension("native_profiler");
        $__internal_5f72012dc25c335d02ced70cb898ed2368be95b20d7a4d306632e334442e9300->enter($__internal_5f72012dc25c335d02ced70cb898ed2368be95b20d7a4d306632e334442e9300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "KnpPaginatorBundle:Pagination:sortable_link.html.twig"));

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
        
        $__internal_5f72012dc25c335d02ced70cb898ed2368be95b20d7a4d306632e334442e9300->leave($__internal_5f72012dc25c335d02ced70cb898ed2368be95b20d7a4d306632e334442e9300_prof);

    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:sortable_link.html.twig";
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
