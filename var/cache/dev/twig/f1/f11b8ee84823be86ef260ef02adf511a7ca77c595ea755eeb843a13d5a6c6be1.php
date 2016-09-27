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
        $__internal_0fdb9db5413648b993246c8c4f8cfee68fcbc2b1e337dc4ce1d68c7e98701c13 = $this->env->getExtension("native_profiler");
        $__internal_0fdb9db5413648b993246c8c4f8cfee68fcbc2b1e337dc4ce1d68c7e98701c13->enter($__internal_0fdb9db5413648b993246c8c4f8cfee68fcbc2b1e337dc4ce1d68c7e98701c13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fdb9db5413648b993246c8c4f8cfee68fcbc2b1e337dc4ce1d68c7e98701c13->leave($__internal_0fdb9db5413648b993246c8c4f8cfee68fcbc2b1e337dc4ce1d68c7e98701c13_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_340eaaf8b7f5bb59d4ae20dc28b2c5309d5a5b357f97441ac775dec14adbba97 = $this->env->getExtension("native_profiler");
        $__internal_340eaaf8b7f5bb59d4ae20dc28b2c5309d5a5b357f97441ac775dec14adbba97->enter($__internal_340eaaf8b7f5bb59d4ae20dc28b2c5309d5a5b357f97441ac775dec14adbba97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_340eaaf8b7f5bb59d4ae20dc28b2c5309d5a5b357f97441ac775dec14adbba97->leave($__internal_340eaaf8b7f5bb59d4ae20dc28b2c5309d5a5b357f97441ac775dec14adbba97_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fd536512b5812e04c4713d49cc82dd454211f54f87256d68057802c7a2256848 = $this->env->getExtension("native_profiler");
        $__internal_fd536512b5812e04c4713d49cc82dd454211f54f87256d68057802c7a2256848->enter($__internal_fd536512b5812e04c4713d49cc82dd454211f54f87256d68057802c7a2256848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fd536512b5812e04c4713d49cc82dd454211f54f87256d68057802c7a2256848->leave($__internal_fd536512b5812e04c4713d49cc82dd454211f54f87256d68057802c7a2256848_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a0742f668270c665a9e221747f4e0a4d27d941d993775413d4de70643a7dfffb = $this->env->getExtension("native_profiler");
        $__internal_a0742f668270c665a9e221747f4e0a4d27d941d993775413d4de70643a7dfffb->enter($__internal_a0742f668270c665a9e221747f4e0a4d27d941d993775413d4de70643a7dfffb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a0742f668270c665a9e221747f4e0a4d27d941d993775413d4de70643a7dfffb->leave($__internal_a0742f668270c665a9e221747f4e0a4d27d941d993775413d4de70643a7dfffb_prof);

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
