<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_aa5d6a54def84b1a3eb8db8ece99b5908b1d9e58de541b960d8ce8387d97ecbf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0cfcf8438e347ba5cd85fe3a01e8f64b688d6198e6482ac70d5bd2d494b8c4d0 = $this->env->getExtension("native_profiler");
        $__internal_0cfcf8438e347ba5cd85fe3a01e8f64b688d6198e6482ac70d5bd2d494b8c4d0->enter($__internal_0cfcf8438e347ba5cd85fe3a01e8f64b688d6198e6482ac70d5bd2d494b8c4d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0cfcf8438e347ba5cd85fe3a01e8f64b688d6198e6482ac70d5bd2d494b8c4d0->leave($__internal_0cfcf8438e347ba5cd85fe3a01e8f64b688d6198e6482ac70d5bd2d494b8c4d0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ef4b2691177ec6b81e3f78c7d8e90463b92ef595f685529e4725e4658be35350 = $this->env->getExtension("native_profiler");
        $__internal_ef4b2691177ec6b81e3f78c7d8e90463b92ef595f685529e4725e4658be35350->enter($__internal_ef4b2691177ec6b81e3f78c7d8e90463b92ef595f685529e4725e4658be35350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_ef4b2691177ec6b81e3f78c7d8e90463b92ef595f685529e4725e4658be35350->leave($__internal_ef4b2691177ec6b81e3f78c7d8e90463b92ef595f685529e4725e4658be35350_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9406a1d97be7b698b13630f5db156f5aca4106c81023c4e7dae393bfb9d0e892 = $this->env->getExtension("native_profiler");
        $__internal_9406a1d97be7b698b13630f5db156f5aca4106c81023c4e7dae393bfb9d0e892->enter($__internal_9406a1d97be7b698b13630f5db156f5aca4106c81023c4e7dae393bfb9d0e892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_9406a1d97be7b698b13630f5db156f5aca4106c81023c4e7dae393bfb9d0e892->leave($__internal_9406a1d97be7b698b13630f5db156f5aca4106c81023c4e7dae393bfb9d0e892_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_152a461059fdd73510f250f3fbb8c490e75ef46de24875511d16d0d6579dfaf7 = $this->env->getExtension("native_profiler");
        $__internal_152a461059fdd73510f250f3fbb8c490e75ef46de24875511d16d0d6579dfaf7->enter($__internal_152a461059fdd73510f250f3fbb8c490e75ef46de24875511d16d0d6579dfaf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_152a461059fdd73510f250f3fbb8c490e75ef46de24875511d16d0d6579dfaf7->leave($__internal_152a461059fdd73510f250f3fbb8c490e75ef46de24875511d16d0d6579dfaf7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
