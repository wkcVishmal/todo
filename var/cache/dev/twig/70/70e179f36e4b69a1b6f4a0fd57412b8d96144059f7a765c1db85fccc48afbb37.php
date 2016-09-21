<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b35255da40539b48cc0726228b71958f6701bfbd410938303ff0721001429229 extends Twig_Template
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
        $__internal_04427b8cad11ae11c8d1fff3a51ceca1e8db979ac1e994fd394198b8659af328 = $this->env->getExtension("native_profiler");
        $__internal_04427b8cad11ae11c8d1fff3a51ceca1e8db979ac1e994fd394198b8659af328->enter($__internal_04427b8cad11ae11c8d1fff3a51ceca1e8db979ac1e994fd394198b8659af328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04427b8cad11ae11c8d1fff3a51ceca1e8db979ac1e994fd394198b8659af328->leave($__internal_04427b8cad11ae11c8d1fff3a51ceca1e8db979ac1e994fd394198b8659af328_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cc3e6d293d38f0bd2f2c9b9241b726ca34dd48b43469497474639ce5ca6843e4 = $this->env->getExtension("native_profiler");
        $__internal_cc3e6d293d38f0bd2f2c9b9241b726ca34dd48b43469497474639ce5ca6843e4->enter($__internal_cc3e6d293d38f0bd2f2c9b9241b726ca34dd48b43469497474639ce5ca6843e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_cc3e6d293d38f0bd2f2c9b9241b726ca34dd48b43469497474639ce5ca6843e4->leave($__internal_cc3e6d293d38f0bd2f2c9b9241b726ca34dd48b43469497474639ce5ca6843e4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_43ff7035df72bcf04d2a80f5c71f7328ba3c7ab145f27209329d5ac5339a925b = $this->env->getExtension("native_profiler");
        $__internal_43ff7035df72bcf04d2a80f5c71f7328ba3c7ab145f27209329d5ac5339a925b->enter($__internal_43ff7035df72bcf04d2a80f5c71f7328ba3c7ab145f27209329d5ac5339a925b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_43ff7035df72bcf04d2a80f5c71f7328ba3c7ab145f27209329d5ac5339a925b->leave($__internal_43ff7035df72bcf04d2a80f5c71f7328ba3c7ab145f27209329d5ac5339a925b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4615fd2168c48f529b1142db3a386af02837fe6fd1977746bd6c7cf90207e25e = $this->env->getExtension("native_profiler");
        $__internal_4615fd2168c48f529b1142db3a386af02837fe6fd1977746bd6c7cf90207e25e->enter($__internal_4615fd2168c48f529b1142db3a386af02837fe6fd1977746bd6c7cf90207e25e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4615fd2168c48f529b1142db3a386af02837fe6fd1977746bd6c7cf90207e25e->leave($__internal_4615fd2168c48f529b1142db3a386af02837fe6fd1977746bd6c7cf90207e25e_prof);

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
