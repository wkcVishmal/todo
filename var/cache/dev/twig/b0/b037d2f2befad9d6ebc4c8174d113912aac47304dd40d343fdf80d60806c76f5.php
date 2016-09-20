<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_59916119f0a32c3efcfca5a9303d25ea6c4b6493dbba4bcb5906091835f021af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5a4e59e8291670fb6508ef91ee70c2368ab4c312a24d4bdd740fc955e578bc94 = $this->env->getExtension("native_profiler");
        $__internal_5a4e59e8291670fb6508ef91ee70c2368ab4c312a24d4bdd740fc955e578bc94->enter($__internal_5a4e59e8291670fb6508ef91ee70c2368ab4c312a24d4bdd740fc955e578bc94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a4e59e8291670fb6508ef91ee70c2368ab4c312a24d4bdd740fc955e578bc94->leave($__internal_5a4e59e8291670fb6508ef91ee70c2368ab4c312a24d4bdd740fc955e578bc94_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_424a357add46018d12fdbbe8f40e20a967168010a70648bb18c95ba6b461c6d7 = $this->env->getExtension("native_profiler");
        $__internal_424a357add46018d12fdbbe8f40e20a967168010a70648bb18c95ba6b461c6d7->enter($__internal_424a357add46018d12fdbbe8f40e20a967168010a70648bb18c95ba6b461c6d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_424a357add46018d12fdbbe8f40e20a967168010a70648bb18c95ba6b461c6d7->leave($__internal_424a357add46018d12fdbbe8f40e20a967168010a70648bb18c95ba6b461c6d7_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5db2b805967063560f6393578e43c3089834e46c41276fee199710067a1a2e9c = $this->env->getExtension("native_profiler");
        $__internal_5db2b805967063560f6393578e43c3089834e46c41276fee199710067a1a2e9c->enter($__internal_5db2b805967063560f6393578e43c3089834e46c41276fee199710067a1a2e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5db2b805967063560f6393578e43c3089834e46c41276fee199710067a1a2e9c->leave($__internal_5db2b805967063560f6393578e43c3089834e46c41276fee199710067a1a2e9c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c7eb874ba95741de162a4819def1176d5f7bdf6bc1d3b11e24383e060228253 = $this->env->getExtension("native_profiler");
        $__internal_6c7eb874ba95741de162a4819def1176d5f7bdf6bc1d3b11e24383e060228253->enter($__internal_6c7eb874ba95741de162a4819def1176d5f7bdf6bc1d3b11e24383e060228253_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_6c7eb874ba95741de162a4819def1176d5f7bdf6bc1d3b11e24383e060228253->leave($__internal_6c7eb874ba95741de162a4819def1176d5f7bdf6bc1d3b11e24383e060228253_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
