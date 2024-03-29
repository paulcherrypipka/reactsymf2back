<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_6b6fc4be24797200490a5aefe0640badc1320560a441b16acbf53534a194b313 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_356028e4626139b86c45ba113f043d045d5f20929a5b4718a3524d19adaf0f92 = $this->env->getExtension("native_profiler");
        $__internal_356028e4626139b86c45ba113f043d045d5f20929a5b4718a3524d19adaf0f92->enter($__internal_356028e4626139b86c45ba113f043d045d5f20929a5b4718a3524d19adaf0f92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_356028e4626139b86c45ba113f043d045d5f20929a5b4718a3524d19adaf0f92->leave($__internal_356028e4626139b86c45ba113f043d045d5f20929a5b4718a3524d19adaf0f92_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e1895b30e770302e2a0abe2331884957c1d551b4f7d9a9bedbf8337be1b902f9 = $this->env->getExtension("native_profiler");
        $__internal_e1895b30e770302e2a0abe2331884957c1d551b4f7d9a9bedbf8337be1b902f9->enter($__internal_e1895b30e770302e2a0abe2331884957c1d551b4f7d9a9bedbf8337be1b902f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e1895b30e770302e2a0abe2331884957c1d551b4f7d9a9bedbf8337be1b902f9->leave($__internal_e1895b30e770302e2a0abe2331884957c1d551b4f7d9a9bedbf8337be1b902f9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_235f558bcc054e1577bb742a8c879d9b7ba64845f62fa528d44ca25738f2a37e = $this->env->getExtension("native_profiler");
        $__internal_235f558bcc054e1577bb742a8c879d9b7ba64845f62fa528d44ca25738f2a37e->enter($__internal_235f558bcc054e1577bb742a8c879d9b7ba64845f62fa528d44ca25738f2a37e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_235f558bcc054e1577bb742a8c879d9b7ba64845f62fa528d44ca25738f2a37e->leave($__internal_235f558bcc054e1577bb742a8c879d9b7ba64845f62fa528d44ca25738f2a37e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_474d14e415857252e8c8f1850215894e4f23231f20bb0832bf88f217876576cd = $this->env->getExtension("native_profiler");
        $__internal_474d14e415857252e8c8f1850215894e4f23231f20bb0832bf88f217876576cd->enter($__internal_474d14e415857252e8c8f1850215894e4f23231f20bb0832bf88f217876576cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_474d14e415857252e8c8f1850215894e4f23231f20bb0832bf88f217876576cd->leave($__internal_474d14e415857252e8c8f1850215894e4f23231f20bb0832bf88f217876576cd_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
