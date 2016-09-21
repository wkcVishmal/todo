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
        $__internal_bb7718ddf3f0572f51bd31e575662b351fcccc178e57006aed02984ef89e36b7 = $this->env->getExtension("native_profiler");
        $__internal_bb7718ddf3f0572f51bd31e575662b351fcccc178e57006aed02984ef89e36b7->enter($__internal_bb7718ddf3f0572f51bd31e575662b351fcccc178e57006aed02984ef89e36b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb7718ddf3f0572f51bd31e575662b351fcccc178e57006aed02984ef89e36b7->leave($__internal_bb7718ddf3f0572f51bd31e575662b351fcccc178e57006aed02984ef89e36b7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c70ed4a4aaac897e80546e810c208e24af85b34ce779dd78553154737e945d27 = $this->env->getExtension("native_profiler");
        $__internal_c70ed4a4aaac897e80546e810c208e24af85b34ce779dd78553154737e945d27->enter($__internal_c70ed4a4aaac897e80546e810c208e24af85b34ce779dd78553154737e945d27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c70ed4a4aaac897e80546e810c208e24af85b34ce779dd78553154737e945d27->leave($__internal_c70ed4a4aaac897e80546e810c208e24af85b34ce779dd78553154737e945d27_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f5161bb7b56d9634a4ccc8f21e223f94b593a583e8047d51891dabf7f1eccbab = $this->env->getExtension("native_profiler");
        $__internal_f5161bb7b56d9634a4ccc8f21e223f94b593a583e8047d51891dabf7f1eccbab->enter($__internal_f5161bb7b56d9634a4ccc8f21e223f94b593a583e8047d51891dabf7f1eccbab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f5161bb7b56d9634a4ccc8f21e223f94b593a583e8047d51891dabf7f1eccbab->leave($__internal_f5161bb7b56d9634a4ccc8f21e223f94b593a583e8047d51891dabf7f1eccbab_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0ba31a600812a1bab6360731282ca9298f2aefd4c5b886cc1774c3de20306cd6 = $this->env->getExtension("native_profiler");
        $__internal_0ba31a600812a1bab6360731282ca9298f2aefd4c5b886cc1774c3de20306cd6->enter($__internal_0ba31a600812a1bab6360731282ca9298f2aefd4c5b886cc1774c3de20306cd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0ba31a600812a1bab6360731282ca9298f2aefd4c5b886cc1774c3de20306cd6->leave($__internal_0ba31a600812a1bab6360731282ca9298f2aefd4c5b886cc1774c3de20306cd6_prof);

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
