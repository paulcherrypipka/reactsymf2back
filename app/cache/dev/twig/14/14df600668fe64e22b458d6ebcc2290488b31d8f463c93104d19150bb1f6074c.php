<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_c2d957d994f64d9a4564224a6a21f84bf01fdfd1d85c0a905e4f8354fdfcbeb8 extends Twig_Template
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
        $__internal_5bf0b1761474826d0379aee744897682e30877cae99e2ad832be7f60cd033fff = $this->env->getExtension("native_profiler");
        $__internal_5bf0b1761474826d0379aee744897682e30877cae99e2ad832be7f60cd033fff->enter($__internal_5bf0b1761474826d0379aee744897682e30877cae99e2ad832be7f60cd033fff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_5bf0b1761474826d0379aee744897682e30877cae99e2ad832be7f60cd033fff->leave($__internal_5bf0b1761474826d0379aee744897682e30877cae99e2ad832be7f60cd033fff_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
