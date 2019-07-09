<?php

/* form/fields.html.twig */
class __TwigTemplate_37316c29b1e80617ac5634de9805a3dd1e0f41291993b88c3275bd14f847f502 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'app_datetimepicker_widget' => array($this, 'block_app_datetimepicker_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_98e3095e81b13181cb860a6d5cca5b8e96491be80dd1b57ed2fbf0568aca69b6 = $this->env->getExtension("native_profiler");
        $__internal_98e3095e81b13181cb860a6d5cca5b8e96491be80dd1b57ed2fbf0568aca69b6->enter($__internal_98e3095e81b13181cb860a6d5cca5b8e96491be80dd1b57ed2fbf0568aca69b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form/fields.html.twig"));

        // line 7
        echo "
";
        // line 8
        $this->displayBlock('app_datetimepicker_widget', $context, $blocks);
        
        $__internal_98e3095e81b13181cb860a6d5cca5b8e96491be80dd1b57ed2fbf0568aca69b6->leave($__internal_98e3095e81b13181cb860a6d5cca5b8e96491be80dd1b57ed2fbf0568aca69b6_prof);

    }

    public function block_app_datetimepicker_widget($context, array $blocks = array())
    {
        $__internal_277dd6d73e83f8407ca38bfac9af89bf1718242c5ec9a4c4b9e4c4f58461599f = $this->env->getExtension("native_profiler");
        $__internal_277dd6d73e83f8407ca38bfac9af89bf1718242c5ec9a4c4b9e4c4f58461599f->enter($__internal_277dd6d73e83f8407ca38bfac9af89bf1718242c5ec9a4c4b9e4c4f58461599f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "app_datetimepicker_widget"));

        // line 9
        echo "    ";
        ob_start();
        // line 10
        echo "        <div class=\"input-group date\" data-toggle=\"datetimepicker\">
            ";
        // line 11
        $this->displayBlock("datetime_widget", $context, $blocks);
        echo "
            <span class=\"input-group-addon\">
                <span class=\"fa fa-calendar\"></span>
            </span>
        </div>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_277dd6d73e83f8407ca38bfac9af89bf1718242c5ec9a4c4b9e4c4f58461599f->leave($__internal_277dd6d73e83f8407ca38bfac9af89bf1718242c5ec9a4c4b9e4c4f58461599f_prof);

    }

    public function getTemplateName()
    {
        return "form/fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  44 => 11,  41 => 10,  38 => 9,  26 => 8,  23 => 7,);
    }
}
/* {#*/
/*    Each field type is rendered by a template fragment, which is determined*/
/*    by the value of your getName() method and the suffix _widget.*/
/* */
/*    See http://symfony.com/doc/current/cookbook/form/create_custom_field_type.html#creating-a-template-for-the-field*/
/* #}*/
/* */
/* {% block app_datetimepicker_widget %}*/
/*     {% spaceless %}*/
/*         <div class="input-group date" data-toggle="datetimepicker">*/
/*             {{ block('datetime_widget') }}*/
/*             <span class="input-group-addon">*/
/*                 <span class="fa fa-calendar"></span>*/
/*             </span>*/
/*         </div>*/
/*     {% endspaceless %}*/
/* {% endblock %}*/
/* */
