<?php

/* :default:homepage.html.twig */
class __TwigTemplate_b63aba81991ed3de8a30d8261d1010c40e0a9a9906f92c5b7c1e5fa7fff9cf39 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":default:homepage.html.twig", 1);
        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'footer' => array($this, 'block_footer'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_17a08076f699f711def149e4f71d4f17c22b75156574e1f331eec36a81d950ee = $this->env->getExtension("native_profiler");
        $__internal_17a08076f699f711def149e4f71d4f17c22b75156574e1f331eec36a81d950ee->enter($__internal_17a08076f699f711def149e4f71d4f17c22b75156574e1f331eec36a81d950ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17a08076f699f711def149e4f71d4f17c22b75156574e1f331eec36a81d950ee->leave($__internal_17a08076f699f711def149e4f71d4f17c22b75156574e1f331eec36a81d950ee_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_83f11e63e958e0ce4e931661864f4710664b3269ef87390f69d1ddb0183e29af = $this->env->getExtension("native_profiler");
        $__internal_83f11e63e958e0ce4e931661864f4710664b3269ef87390f69d1ddb0183e29af->enter($__internal_83f11e63e958e0ce4e931661864f4710664b3269ef87390f69d1ddb0183e29af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "homepage";
        
        $__internal_83f11e63e958e0ce4e931661864f4710664b3269ef87390f69d1ddb0183e29af->leave($__internal_83f11e63e958e0ce4e931661864f4710664b3269ef87390f69d1ddb0183e29af_prof);

    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        $__internal_40fc5e7af121ac1eec9014b34a70b8c2b1b36247b8005973a78a145531549309 = $this->env->getExtension("native_profiler");
        $__internal_40fc5e7af121ac1eec9014b34a70b8c2b1b36247b8005973a78a145531549309->enter($__internal_40fc5e7af121ac1eec9014b34a70b8c2b1b36247b8005973a78a145531549309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_40fc5e7af121ac1eec9014b34a70b8c2b1b36247b8005973a78a145531549309->leave($__internal_40fc5e7af121ac1eec9014b34a70b8c2b1b36247b8005973a78a145531549309_prof);

    }

    // line 10
    public function block_footer($context, array $blocks = array())
    {
        $__internal_6edcabec63799607f9ab4e9e0e6dcbc1ab7bcd7715e940a74aabbf0c05f107b6 = $this->env->getExtension("native_profiler");
        $__internal_6edcabec63799607f9ab4e9e0e6dcbc1ab7bcd7715e940a74aabbf0c05f107b6->enter($__internal_6edcabec63799607f9ab4e9e0e6dcbc1ab7bcd7715e940a74aabbf0c05f107b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_6edcabec63799607f9ab4e9e0e6dcbc1ab7bcd7715e940a74aabbf0c05f107b6->leave($__internal_6edcabec63799607f9ab4e9e0e6dcbc1ab7bcd7715e940a74aabbf0c05f107b6_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_c65259e32c5c76cdaf098810897da006ac2b40078aeb49ddafe04990c1b9a5ed = $this->env->getExtension("native_profiler");
        $__internal_c65259e32c5c76cdaf098810897da006ac2b40078aeb49ddafe04990c1b9a5ed->enter($__internal_c65259e32c5c76cdaf098810897da006ac2b40078aeb49ddafe04990c1b9a5ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "    <div class=\"page-header\">
        <h1>";
        // line 14
        echo $this->env->getExtension('translator')->trans("title.homepage");
        echo "</h1>
    </div>

    <div class=\"row\">
        <div class=\"col-sm-6\">
            <div class=\"jumbotron\">
                <p>
                    ";
        // line 21
        echo $this->env->getExtension('translator')->trans("help.browse_app");
        echo "
                </p>
                <p>
                    <a class=\"btn btn-primary btn-lg\" href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("blog_index");
        echo "\">
                        <i class=\"fa fa-users\"></i> ";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.browse_app"), "html", null, true);
        echo "
                    </a>
                </p>
            </div>
        </div>

        <div class=\"col-sm-6\">
            <div class=\"jumbotron\">
                <p>
                    ";
        // line 34
        echo $this->env->getExtension('translator')->trans("help.browse_admin");
        echo "
                </p>
                <p>
                    <a class=\"btn btn-primary btn-lg\" href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("admin_index");
        echo "\">
                        <i class=\"fa fa-lock\"></i> ";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("action.browse_admin"), "html", null, true);
        echo "
                    </a>
                </p>
            </div>
        </div>
    </div>
";
        
        $__internal_c65259e32c5c76cdaf098810897da006ac2b40078aeb49ddafe04990c1b9a5ed->leave($__internal_c65259e32c5c76cdaf098810897da006ac2b40078aeb49ddafe04990c1b9a5ed_prof);

    }

    public function getTemplateName()
    {
        return ":default:homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 38,  118 => 37,  112 => 34,  100 => 25,  96 => 24,  90 => 21,  80 => 14,  77 => 13,  71 => 12,  60 => 10,  49 => 9,  37 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body_id 'homepage' %}*/
/* */
/* {#*/
/*     the homepage is a special page which displays neither a header nor a footer.*/
/*     this is done with the 'trick' of defining empty Twig blocks without any content*/
/* #}*/
/* {% block header %}{% endblock %}*/
/* {% block footer %}{% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="page-header">*/
/*         <h1>{{ 'title.homepage'|trans|raw }}</h1>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*         <div class="col-sm-6">*/
/*             <div class="jumbotron">*/
/*                 <p>*/
/*                     {{ 'help.browse_app'|trans|raw }}*/
/*                 </p>*/
/*                 <p>*/
/*                     <a class="btn btn-primary btn-lg" href="{{ path('blog_index') }}">*/
/*                         <i class="fa fa-users"></i> {{ 'action.browse_app'|trans }}*/
/*                     </a>*/
/*                 </p>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="col-sm-6">*/
/*             <div class="jumbotron">*/
/*                 <p>*/
/*                     {{ 'help.browse_admin'|trans|raw }}*/
/*                 </p>*/
/*                 <p>*/
/*                     <a class="btn btn-primary btn-lg" href="{{ path('admin_index') }}">*/
/*                         <i class="fa fa-lock"></i> {{ 'action.browse_admin'|trans }}*/
/*                     </a>*/
/*                 </p>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
