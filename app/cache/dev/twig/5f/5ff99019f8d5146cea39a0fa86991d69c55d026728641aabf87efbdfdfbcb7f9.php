<?php

/* :blog:_delete_post_confirmation.html.twig */
class __TwigTemplate_5f79e1a4138d71a752bea07dbd6a286d4d7b0f4a9ac9f0804e18c9316434d928 extends Twig_Template
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
        $__internal_1d0ac7b76859d68329067bdbe8aa54785bf51c246ba141849f681690469fcd51 = $this->env->getExtension("native_profiler");
        $__internal_1d0ac7b76859d68329067bdbe8aa54785bf51c246ba141849f681690469fcd51->enter($__internal_1d0ac7b76859d68329067bdbe8aa54785bf51c246ba141849f681690469fcd51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":blog:_delete_post_confirmation.html.twig"));

        // line 2
        echo "<div class=\"modal fade\" id=\"confirmationModal\" tabindex=\"-1\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-body\">
                <h4>";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("delete_post_modal.title"), "html", null, true);
        echo "</h4>
                <p>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("delete_post_modal.body"), "html", null, true);
        echo "</p>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" id=\"btnNo\" data-dismiss=\"modal\">
                    ";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.cancel"), "html", null, true);
        echo "
                </button>
                <button type=\"button\" class=\"btn btn-danger\" id=\"btnYes\" data-dismiss=\"modal\">
                    ";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("label.delete_post"), "html", null, true);
        echo "
                </button>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_1d0ac7b76859d68329067bdbe8aa54785bf51c246ba141849f681690469fcd51->leave($__internal_1d0ac7b76859d68329067bdbe8aa54785bf51c246ba141849f681690469fcd51_prof);

    }

    public function getTemplateName()
    {
        return ":blog:_delete_post_confirmation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 14,  39 => 11,  32 => 7,  28 => 6,  22 => 2,);
    }
}
/* {# Bootstrap modal, see http://getbootstrap.com/javascript/#modals #}*/
/* <div class="modal fade" id="confirmationModal" tabindex="-1">*/
/*     <div class="modal-dialog">*/
/*         <div class="modal-content">*/
/*             <div class="modal-body">*/
/*                 <h4>{{ 'delete_post_modal.title'|trans }}</h4>*/
/*                 <p>{{ 'delete_post_modal.body'|trans }}</p>*/
/*             </div>*/
/*             <div class="modal-footer">*/
/*                 <button type="button" class="btn btn-default" id="btnNo" data-dismiss="modal">*/
/*                     {{ 'label.cancel'|trans }}*/
/*                 </button>*/
/*                 <button type="button" class="btn btn-danger" id="btnYes" data-dismiss="modal">*/
/*                     {{ 'label.delete_post'|trans }}*/
/*                 </button>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
