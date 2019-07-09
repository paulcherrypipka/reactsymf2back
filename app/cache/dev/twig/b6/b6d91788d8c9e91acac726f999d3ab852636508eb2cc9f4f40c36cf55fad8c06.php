<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_a24d5c0ed522f33429ed1be40d3f7fc9d7b15f0cddfbdc62b10665715e3e99ec extends Twig_Template
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
        $__internal_0b3dd2457a09bb0cfbc7fe45656df2583a20e3aa193a45112f57f7ea0651200f = $this->env->getExtension("native_profiler");
        $__internal_0b3dd2457a09bb0cfbc7fe45656df2583a20e3aa193a45112f57f7ea0651200f->enter($__internal_0b3dd2457a09bb0cfbc7fe45656df2583a20e3aa193a45112f57f7ea0651200f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_0b3dd2457a09bb0cfbc7fe45656df2583a20e3aa193a45112f57f7ea0651200f->leave($__internal_0b3dd2457a09bb0cfbc7fe45656df2583a20e3aa193a45112f57f7ea0651200f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  22 => 1,);
    }
}
/* <div id="header">*/
/*     <div class="container">*/
/*         <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>*/
/* */
/*         <div class="search">*/
/*             <form method="get" action="https://symfony.com/search" target="_blank">*/
/*                 <div class="form-row">*/
/*                     <input name="q" id="search-id" type="search" placeholder="search on symfony.com">*/
/*                     <button type="submit" class="btn">Search</button>*/
/*                 </div>*/
/*            </form>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
