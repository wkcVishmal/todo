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
        $__internal_96e2ea1d2997819231a5f329eac1af26829385fc393798c70ae007e51b13cc03 = $this->env->getExtension("native_profiler");
        $__internal_96e2ea1d2997819231a5f329eac1af26829385fc393798c70ae007e51b13cc03->enter($__internal_96e2ea1d2997819231a5f329eac1af26829385fc393798c70ae007e51b13cc03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96e2ea1d2997819231a5f329eac1af26829385fc393798c70ae007e51b13cc03->leave($__internal_96e2ea1d2997819231a5f329eac1af26829385fc393798c70ae007e51b13cc03_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6f7e12c814a3520a25c24315715d38129ab8fdb51743c84008b86b3bc29b78b2 = $this->env->getExtension("native_profiler");
        $__internal_6f7e12c814a3520a25c24315715d38129ab8fdb51743c84008b86b3bc29b78b2->enter($__internal_6f7e12c814a3520a25c24315715d38129ab8fdb51743c84008b86b3bc29b78b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6f7e12c814a3520a25c24315715d38129ab8fdb51743c84008b86b3bc29b78b2->leave($__internal_6f7e12c814a3520a25c24315715d38129ab8fdb51743c84008b86b3bc29b78b2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_61774c639d5b9883dcb621e1d7c64af4e11cc7ec48e6d01fd92f85120ccd4bdb = $this->env->getExtension("native_profiler");
        $__internal_61774c639d5b9883dcb621e1d7c64af4e11cc7ec48e6d01fd92f85120ccd4bdb->enter($__internal_61774c639d5b9883dcb621e1d7c64af4e11cc7ec48e6d01fd92f85120ccd4bdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_61774c639d5b9883dcb621e1d7c64af4e11cc7ec48e6d01fd92f85120ccd4bdb->leave($__internal_61774c639d5b9883dcb621e1d7c64af4e11cc7ec48e6d01fd92f85120ccd4bdb_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_66a137da1c843a2e2139fa4e8e8492e96effb7c83d0744b656950eb1a0a4a52b = $this->env->getExtension("native_profiler");
        $__internal_66a137da1c843a2e2139fa4e8e8492e96effb7c83d0744b656950eb1a0a4a52b->enter($__internal_66a137da1c843a2e2139fa4e8e8492e96effb7c83d0744b656950eb1a0a4a52b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_66a137da1c843a2e2139fa4e8e8492e96effb7c83d0744b656950eb1a0a4a52b->leave($__internal_66a137da1c843a2e2139fa4e8e8492e96effb7c83d0744b656950eb1a0a4a52b_prof);

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
