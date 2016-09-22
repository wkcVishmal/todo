<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_5f80bcb6388257d391d694717b1bdf4edda1f4099f32e1c277b675b28361924d extends Twig_Template
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
        $__internal_be0bde72a9eb13314e38773e7fe6aa1c3cac68a1bbf25338ef9f39f2b3eb7dc0 = $this->env->getExtension("native_profiler");
        $__internal_be0bde72a9eb13314e38773e7fe6aa1c3cac68a1bbf25338ef9f39f2b3eb7dc0->enter($__internal_be0bde72a9eb13314e38773e7fe6aa1c3cac68a1bbf25338ef9f39f2b3eb7dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be0bde72a9eb13314e38773e7fe6aa1c3cac68a1bbf25338ef9f39f2b3eb7dc0->leave($__internal_be0bde72a9eb13314e38773e7fe6aa1c3cac68a1bbf25338ef9f39f2b3eb7dc0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fee66269360d2a56bf83bd1a13dbfc24506f11d001e157788741e9b2e6a40d18 = $this->env->getExtension("native_profiler");
        $__internal_fee66269360d2a56bf83bd1a13dbfc24506f11d001e157788741e9b2e6a40d18->enter($__internal_fee66269360d2a56bf83bd1a13dbfc24506f11d001e157788741e9b2e6a40d18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_fee66269360d2a56bf83bd1a13dbfc24506f11d001e157788741e9b2e6a40d18->leave($__internal_fee66269360d2a56bf83bd1a13dbfc24506f11d001e157788741e9b2e6a40d18_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_aa64c3c4ccbb8381eac0d5869c9a924854ffb31167e8708451e681117eee4b00 = $this->env->getExtension("native_profiler");
        $__internal_aa64c3c4ccbb8381eac0d5869c9a924854ffb31167e8708451e681117eee4b00->enter($__internal_aa64c3c4ccbb8381eac0d5869c9a924854ffb31167e8708451e681117eee4b00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_aa64c3c4ccbb8381eac0d5869c9a924854ffb31167e8708451e681117eee4b00->leave($__internal_aa64c3c4ccbb8381eac0d5869c9a924854ffb31167e8708451e681117eee4b00_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_13e1bf27d9fda82f8f743b7a445169b958069d4a87b9bea17036a4a953a7b51b = $this->env->getExtension("native_profiler");
        $__internal_13e1bf27d9fda82f8f743b7a445169b958069d4a87b9bea17036a4a953a7b51b->enter($__internal_13e1bf27d9fda82f8f743b7a445169b958069d4a87b9bea17036a4a953a7b51b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_13e1bf27d9fda82f8f743b7a445169b958069d4a87b9bea17036a4a953a7b51b->leave($__internal_13e1bf27d9fda82f8f743b7a445169b958069d4a87b9bea17036a4a953a7b51b_prof);

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
