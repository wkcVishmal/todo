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
        $__internal_fa95486f53512fe99112e98a9a665ea2332215537b9c0b53aa13c22c11ce436a = $this->env->getExtension("native_profiler");
        $__internal_fa95486f53512fe99112e98a9a665ea2332215537b9c0b53aa13c22c11ce436a->enter($__internal_fa95486f53512fe99112e98a9a665ea2332215537b9c0b53aa13c22c11ce436a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa95486f53512fe99112e98a9a665ea2332215537b9c0b53aa13c22c11ce436a->leave($__internal_fa95486f53512fe99112e98a9a665ea2332215537b9c0b53aa13c22c11ce436a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_49950eae5bb24052cc5f33249bd505eee81f6cf041357b1c861914ff4c79837a = $this->env->getExtension("native_profiler");
        $__internal_49950eae5bb24052cc5f33249bd505eee81f6cf041357b1c861914ff4c79837a->enter($__internal_49950eae5bb24052cc5f33249bd505eee81f6cf041357b1c861914ff4c79837a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_49950eae5bb24052cc5f33249bd505eee81f6cf041357b1c861914ff4c79837a->leave($__internal_49950eae5bb24052cc5f33249bd505eee81f6cf041357b1c861914ff4c79837a_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c2627c28434666119d612414ed30c12c2560259b18ab157ad886cbdf9d3315e7 = $this->env->getExtension("native_profiler");
        $__internal_c2627c28434666119d612414ed30c12c2560259b18ab157ad886cbdf9d3315e7->enter($__internal_c2627c28434666119d612414ed30c12c2560259b18ab157ad886cbdf9d3315e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c2627c28434666119d612414ed30c12c2560259b18ab157ad886cbdf9d3315e7->leave($__internal_c2627c28434666119d612414ed30c12c2560259b18ab157ad886cbdf9d3315e7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ea49c2925bad44f0c0c2077685bd1fa1c4e0d99b4da9d501f1e76c4e7a575143 = $this->env->getExtension("native_profiler");
        $__internal_ea49c2925bad44f0c0c2077685bd1fa1c4e0d99b4da9d501f1e76c4e7a575143->enter($__internal_ea49c2925bad44f0c0c2077685bd1fa1c4e0d99b4da9d501f1e76c4e7a575143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ea49c2925bad44f0c0c2077685bd1fa1c4e0d99b4da9d501f1e76c4e7a575143->leave($__internal_ea49c2925bad44f0c0c2077685bd1fa1c4e0d99b4da9d501f1e76c4e7a575143_prof);

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
