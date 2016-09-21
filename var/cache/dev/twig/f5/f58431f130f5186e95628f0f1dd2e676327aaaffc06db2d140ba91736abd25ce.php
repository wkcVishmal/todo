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
        $__internal_e12d469498ace0cf7e4595361589fe2bc04488115cd4621fbc9dd4461068e107 = $this->env->getExtension("native_profiler");
        $__internal_e12d469498ace0cf7e4595361589fe2bc04488115cd4621fbc9dd4461068e107->enter($__internal_e12d469498ace0cf7e4595361589fe2bc04488115cd4621fbc9dd4461068e107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e12d469498ace0cf7e4595361589fe2bc04488115cd4621fbc9dd4461068e107->leave($__internal_e12d469498ace0cf7e4595361589fe2bc04488115cd4621fbc9dd4461068e107_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ac39c11b99a48bf9d34eb11d483c6e583b3b76d03bf1f420ce722836590abadf = $this->env->getExtension("native_profiler");
        $__internal_ac39c11b99a48bf9d34eb11d483c6e583b3b76d03bf1f420ce722836590abadf->enter($__internal_ac39c11b99a48bf9d34eb11d483c6e583b3b76d03bf1f420ce722836590abadf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ac39c11b99a48bf9d34eb11d483c6e583b3b76d03bf1f420ce722836590abadf->leave($__internal_ac39c11b99a48bf9d34eb11d483c6e583b3b76d03bf1f420ce722836590abadf_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_903a586454d433c58447a93b4c52ece74c49baf88eb5de7d61ac5361a0022224 = $this->env->getExtension("native_profiler");
        $__internal_903a586454d433c58447a93b4c52ece74c49baf88eb5de7d61ac5361a0022224->enter($__internal_903a586454d433c58447a93b4c52ece74c49baf88eb5de7d61ac5361a0022224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_903a586454d433c58447a93b4c52ece74c49baf88eb5de7d61ac5361a0022224->leave($__internal_903a586454d433c58447a93b4c52ece74c49baf88eb5de7d61ac5361a0022224_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_980cc561b10bedcb20e16a632117e4e52452a99aede37258e7a9a0f9e6031672 = $this->env->getExtension("native_profiler");
        $__internal_980cc561b10bedcb20e16a632117e4e52452a99aede37258e7a9a0f9e6031672->enter($__internal_980cc561b10bedcb20e16a632117e4e52452a99aede37258e7a9a0f9e6031672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_980cc561b10bedcb20e16a632117e4e52452a99aede37258e7a9a0f9e6031672->leave($__internal_980cc561b10bedcb20e16a632117e4e52452a99aede37258e7a9a0f9e6031672_prof);

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
