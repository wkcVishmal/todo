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
        $__internal_6fd2991ba60dc746f86efffc4a65291943ff7461f126dfa9398454d0493f4a52 = $this->env->getExtension("native_profiler");
        $__internal_6fd2991ba60dc746f86efffc4a65291943ff7461f126dfa9398454d0493f4a52->enter($__internal_6fd2991ba60dc746f86efffc4a65291943ff7461f126dfa9398454d0493f4a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6fd2991ba60dc746f86efffc4a65291943ff7461f126dfa9398454d0493f4a52->leave($__internal_6fd2991ba60dc746f86efffc4a65291943ff7461f126dfa9398454d0493f4a52_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_08402ba69806a3f2203c5df72636616c661bbbdb165d2af2b2abd3a129deed09 = $this->env->getExtension("native_profiler");
        $__internal_08402ba69806a3f2203c5df72636616c661bbbdb165d2af2b2abd3a129deed09->enter($__internal_08402ba69806a3f2203c5df72636616c661bbbdb165d2af2b2abd3a129deed09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_08402ba69806a3f2203c5df72636616c661bbbdb165d2af2b2abd3a129deed09->leave($__internal_08402ba69806a3f2203c5df72636616c661bbbdb165d2af2b2abd3a129deed09_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_521125c762fcaf53c2244d0c40765a7a07565ee7f12afd5b87b905193e1e60cf = $this->env->getExtension("native_profiler");
        $__internal_521125c762fcaf53c2244d0c40765a7a07565ee7f12afd5b87b905193e1e60cf->enter($__internal_521125c762fcaf53c2244d0c40765a7a07565ee7f12afd5b87b905193e1e60cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_521125c762fcaf53c2244d0c40765a7a07565ee7f12afd5b87b905193e1e60cf->leave($__internal_521125c762fcaf53c2244d0c40765a7a07565ee7f12afd5b87b905193e1e60cf_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a9d8befeffd5b098a5ba04950d031e24225561d2211fda6e3445fb1ae2c4d699 = $this->env->getExtension("native_profiler");
        $__internal_a9d8befeffd5b098a5ba04950d031e24225561d2211fda6e3445fb1ae2c4d699->enter($__internal_a9d8befeffd5b098a5ba04950d031e24225561d2211fda6e3445fb1ae2c4d699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_a9d8befeffd5b098a5ba04950d031e24225561d2211fda6e3445fb1ae2c4d699->leave($__internal_a9d8befeffd5b098a5ba04950d031e24225561d2211fda6e3445fb1ae2c4d699_prof);

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
