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
        $__internal_96f7dfe1540dcd9d6057a8e94dd340ab96fca556b09593528d1cfb32c5dfd84a = $this->env->getExtension("native_profiler");
        $__internal_96f7dfe1540dcd9d6057a8e94dd340ab96fca556b09593528d1cfb32c5dfd84a->enter($__internal_96f7dfe1540dcd9d6057a8e94dd340ab96fca556b09593528d1cfb32c5dfd84a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96f7dfe1540dcd9d6057a8e94dd340ab96fca556b09593528d1cfb32c5dfd84a->leave($__internal_96f7dfe1540dcd9d6057a8e94dd340ab96fca556b09593528d1cfb32c5dfd84a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bcbfa5af7faea3f28c3afadae65f44458484b63abf14802a4dc8e30a978d83f2 = $this->env->getExtension("native_profiler");
        $__internal_bcbfa5af7faea3f28c3afadae65f44458484b63abf14802a4dc8e30a978d83f2->enter($__internal_bcbfa5af7faea3f28c3afadae65f44458484b63abf14802a4dc8e30a978d83f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_bcbfa5af7faea3f28c3afadae65f44458484b63abf14802a4dc8e30a978d83f2->leave($__internal_bcbfa5af7faea3f28c3afadae65f44458484b63abf14802a4dc8e30a978d83f2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3c2fccb9daf29c57249bbc5ea0b3e91311f5fc0c890767a5182269e569678c3e = $this->env->getExtension("native_profiler");
        $__internal_3c2fccb9daf29c57249bbc5ea0b3e91311f5fc0c890767a5182269e569678c3e->enter($__internal_3c2fccb9daf29c57249bbc5ea0b3e91311f5fc0c890767a5182269e569678c3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3c2fccb9daf29c57249bbc5ea0b3e91311f5fc0c890767a5182269e569678c3e->leave($__internal_3c2fccb9daf29c57249bbc5ea0b3e91311f5fc0c890767a5182269e569678c3e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_10bdd67024874e3d706d171e3ca8b19d3dfe226ff02679a4b0697ecc85777265 = $this->env->getExtension("native_profiler");
        $__internal_10bdd67024874e3d706d171e3ca8b19d3dfe226ff02679a4b0697ecc85777265->enter($__internal_10bdd67024874e3d706d171e3ca8b19d3dfe226ff02679a4b0697ecc85777265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_10bdd67024874e3d706d171e3ca8b19d3dfe226ff02679a4b0697ecc85777265->leave($__internal_10bdd67024874e3d706d171e3ca8b19d3dfe226ff02679a4b0697ecc85777265_prof);

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
