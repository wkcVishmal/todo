<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_6c551b1a4457ffd91334d94cebfb3c5330f2736d56810338a06addfbfabed459 extends Twig_Template
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
        $__internal_17bb32e0bcd2c3e14bdca4ac2a59ce546b844f92f35dd9cd248f4fce8bdb2b97 = $this->env->getExtension("native_profiler");
        $__internal_17bb32e0bcd2c3e14bdca4ac2a59ce546b844f92f35dd9cd248f4fce8bdb2b97->enter($__internal_17bb32e0bcd2c3e14bdca4ac2a59ce546b844f92f35dd9cd248f4fce8bdb2b97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_17bb32e0bcd2c3e14bdca4ac2a59ce546b844f92f35dd9cd248f4fce8bdb2b97->leave($__internal_17bb32e0bcd2c3e14bdca4ac2a59ce546b844f92f35dd9cd248f4fce8bdb2b97_prof);

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
