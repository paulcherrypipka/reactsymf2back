<?php

/* default/homepage.html.twig */
class __TwigTemplate_6d7b7c5adc6d850910648c6f084d176369c09676e5a572d87d1fc172c6cd8901 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/homepage.html.twig", 1);
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
        $__internal_41f4bcfa42cadf8bb684bdb9b5310c86e91c714e511dc20c2232e65d99c63b20 = $this->env->getExtension("native_profiler");
        $__internal_41f4bcfa42cadf8bb684bdb9b5310c86e91c714e511dc20c2232e65d99c63b20->enter($__internal_41f4bcfa42cadf8bb684bdb9b5310c86e91c714e511dc20c2232e65d99c63b20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_41f4bcfa42cadf8bb684bdb9b5310c86e91c714e511dc20c2232e65d99c63b20->leave($__internal_41f4bcfa42cadf8bb684bdb9b5310c86e91c714e511dc20c2232e65d99c63b20_prof);

    }

    // line 3
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_e2173d822fa02dcd3ad37d48c8619e085096350d6c3ec8bfa1cf27de54e61358 = $this->env->getExtension("native_profiler");
        $__internal_e2173d822fa02dcd3ad37d48c8619e085096350d6c3ec8bfa1cf27de54e61358->enter($__internal_e2173d822fa02dcd3ad37d48c8619e085096350d6c3ec8bfa1cf27de54e61358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "homepage";
        
        $__internal_e2173d822fa02dcd3ad37d48c8619e085096350d6c3ec8bfa1cf27de54e61358->leave($__internal_e2173d822fa02dcd3ad37d48c8619e085096350d6c3ec8bfa1cf27de54e61358_prof);

    }

    // line 9
    public function block_header($context, array $blocks = array())
    {
        $__internal_a60e370ab96ef700403bf1b4dcccc5b3ea54a6a7d6799c7fca7b2e9acabb8c3d = $this->env->getExtension("native_profiler");
        $__internal_a60e370ab96ef700403bf1b4dcccc5b3ea54a6a7d6799c7fca7b2e9acabb8c3d->enter($__internal_a60e370ab96ef700403bf1b4dcccc5b3ea54a6a7d6799c7fca7b2e9acabb8c3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        
        $__internal_a60e370ab96ef700403bf1b4dcccc5b3ea54a6a7d6799c7fca7b2e9acabb8c3d->leave($__internal_a60e370ab96ef700403bf1b4dcccc5b3ea54a6a7d6799c7fca7b2e9acabb8c3d_prof);

    }

    // line 10
    public function block_footer($context, array $blocks = array())
    {
        $__internal_580f49fbf98f99b5afbfc53cf2c16b674e23a3e3e3ffdbf14b08b194ed4b6632 = $this->env->getExtension("native_profiler");
        $__internal_580f49fbf98f99b5afbfc53cf2c16b674e23a3e3e3ffdbf14b08b194ed4b6632->enter($__internal_580f49fbf98f99b5afbfc53cf2c16b674e23a3e3e3ffdbf14b08b194ed4b6632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_580f49fbf98f99b5afbfc53cf2c16b674e23a3e3e3ffdbf14b08b194ed4b6632->leave($__internal_580f49fbf98f99b5afbfc53cf2c16b674e23a3e3e3ffdbf14b08b194ed4b6632_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_8fbf2296f60abb8130ab1177525fe33c1b45c371adb78803dbcbf7ea1caebdc1 = $this->env->getExtension("native_profiler");
        $__internal_8fbf2296f60abb8130ab1177525fe33c1b45c371adb78803dbcbf7ea1caebdc1->enter($__internal_8fbf2296f60abb8130ab1177525fe33c1b45c371adb78803dbcbf7ea1caebdc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8fbf2296f60abb8130ab1177525fe33c1b45c371adb78803dbcbf7ea1caebdc1->leave($__internal_8fbf2296f60abb8130ab1177525fe33c1b45c371adb78803dbcbf7ea1caebdc1_prof);

    }

    public function getTemplateName()
    {
        return "default/homepage.html.twig";
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
