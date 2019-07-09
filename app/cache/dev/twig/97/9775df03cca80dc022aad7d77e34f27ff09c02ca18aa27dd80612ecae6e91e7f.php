<?php

/* :form:fields.html.twig */
class __TwigTemplate_3ecaeac322bd8e858315a0847391edbc4bf1c5d488333d27c5d4c5523f4fc997 extends Twig_Template
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
        $__internal_d1206fd5572e74c691b81ad283320807910adc999275c86acc5d22c8e4a9617f = $this->env->getExtension("native_profiler");
        $__internal_d1206fd5572e74c691b81ad283320807910adc999275c86acc5d22c8e4a9617f->enter($__internal_d1206fd5572e74c691b81ad283320807910adc999275c86acc5d22c8e4a9617f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":form:fields.html.twig"));

        // line 7
        echo "
";
        // line 8
        $this->displayBlock('app_datetimepicker_widget', $context, $blocks);
        
        $__internal_d1206fd5572e74c691b81ad283320807910adc999275c86acc5d22c8e4a9617f->leave($__internal_d1206fd5572e74c691b81ad283320807910adc999275c86acc5d22c8e4a9617f_prof);

    }

    public function block_app_datetimepicker_widget($context, array $blocks = array())
    {
        $__internal_d4a79c3aeabef368af37a9095aa7df263070ed8e4ada273a431f609ec44a5297 = $this->env->getExtension("native_profiler");
        $__internal_d4a79c3aeabef368af37a9095aa7df263070ed8e4ada273a431f609ec44a5297->enter($__internal_d4a79c3aeabef368af37a9095aa7df263070ed8e4ada273a431f609ec44a5297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "app_datetimepicker_widget"));

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
        
        $__internal_d4a79c3aeabef368af37a9095aa7df263070ed8e4ada273a431f609ec44a5297->leave($__internal_d4a79c3aeabef368af37a9095aa7df263070ed8e4ada273a431f609ec44a5297_prof);

    }

    public function getTemplateName()
    {
        return ":form:fields.html.twig";
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
