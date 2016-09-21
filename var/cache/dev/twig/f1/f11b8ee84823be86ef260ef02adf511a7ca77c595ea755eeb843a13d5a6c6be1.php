<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_d1bc854a521eabc1e41978985269fa888ec592074ee57e4dceb3341d9c6ffa4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_1e1b7cb1e18c2dd16164d518c8931e20ff5f9e342cbfc7afa6d477dde7d623cb = $this->env->getExtension("native_profiler");
        $__internal_1e1b7cb1e18c2dd16164d518c8931e20ff5f9e342cbfc7afa6d477dde7d623cb->enter($__internal_1e1b7cb1e18c2dd16164d518c8931e20ff5f9e342cbfc7afa6d477dde7d623cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e1b7cb1e18c2dd16164d518c8931e20ff5f9e342cbfc7afa6d477dde7d623cb->leave($__internal_1e1b7cb1e18c2dd16164d518c8931e20ff5f9e342cbfc7afa6d477dde7d623cb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bd16db4cde32bbf4ee48e3f455b31f139b8c55156ab0ec3a15a0ca81cc0b5489 = $this->env->getExtension("native_profiler");
        $__internal_bd16db4cde32bbf4ee48e3f455b31f139b8c55156ab0ec3a15a0ca81cc0b5489->enter($__internal_bd16db4cde32bbf4ee48e3f455b31f139b8c55156ab0ec3a15a0ca81cc0b5489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_bd16db4cde32bbf4ee48e3f455b31f139b8c55156ab0ec3a15a0ca81cc0b5489->leave($__internal_bd16db4cde32bbf4ee48e3f455b31f139b8c55156ab0ec3a15a0ca81cc0b5489_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6350b852c7092fe586c261950ddec7ed0d8b08cea68687a86a378e718a133592 = $this->env->getExtension("native_profiler");
        $__internal_6350b852c7092fe586c261950ddec7ed0d8b08cea68687a86a378e718a133592->enter($__internal_6350b852c7092fe586c261950ddec7ed0d8b08cea68687a86a378e718a133592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6350b852c7092fe586c261950ddec7ed0d8b08cea68687a86a378e718a133592->leave($__internal_6350b852c7092fe586c261950ddec7ed0d8b08cea68687a86a378e718a133592_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d4c436eb73e056ec2d9bd26d41a53986108ed859302e29fc84af4d2b9d4fba07 = $this->env->getExtension("native_profiler");
        $__internal_d4c436eb73e056ec2d9bd26d41a53986108ed859302e29fc84af4d2b9d4fba07->enter($__internal_d4c436eb73e056ec2d9bd26d41a53986108ed859302e29fc84af4d2b9d4fba07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d4c436eb73e056ec2d9bd26d41a53986108ed859302e29fc84af4d2b9d4fba07->leave($__internal_d4c436eb73e056ec2d9bd26d41a53986108ed859302e29fc84af4d2b9d4fba07_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
