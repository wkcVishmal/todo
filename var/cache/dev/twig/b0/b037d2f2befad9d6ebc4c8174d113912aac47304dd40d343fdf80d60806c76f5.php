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
        $__internal_3feee5568e007e6064baa981b01c5bb6f0769605687d3e65f362527d8d2bb781 = $this->env->getExtension("native_profiler");
        $__internal_3feee5568e007e6064baa981b01c5bb6f0769605687d3e65f362527d8d2bb781->enter($__internal_3feee5568e007e6064baa981b01c5bb6f0769605687d3e65f362527d8d2bb781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3feee5568e007e6064baa981b01c5bb6f0769605687d3e65f362527d8d2bb781->leave($__internal_3feee5568e007e6064baa981b01c5bb6f0769605687d3e65f362527d8d2bb781_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ffbfe381500bb247c1d612de4b4e1e612e89c4c61a3be91d07d9c1d7cee07505 = $this->env->getExtension("native_profiler");
        $__internal_ffbfe381500bb247c1d612de4b4e1e612e89c4c61a3be91d07d9c1d7cee07505->enter($__internal_ffbfe381500bb247c1d612de4b4e1e612e89c4c61a3be91d07d9c1d7cee07505_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ffbfe381500bb247c1d612de4b4e1e612e89c4c61a3be91d07d9c1d7cee07505->leave($__internal_ffbfe381500bb247c1d612de4b4e1e612e89c4c61a3be91d07d9c1d7cee07505_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_da5d6086af4d9c3bfb9f392e2cc6234bcb724b2fbc40714a0094d00fb5221726 = $this->env->getExtension("native_profiler");
        $__internal_da5d6086af4d9c3bfb9f392e2cc6234bcb724b2fbc40714a0094d00fb5221726->enter($__internal_da5d6086af4d9c3bfb9f392e2cc6234bcb724b2fbc40714a0094d00fb5221726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_da5d6086af4d9c3bfb9f392e2cc6234bcb724b2fbc40714a0094d00fb5221726->leave($__internal_da5d6086af4d9c3bfb9f392e2cc6234bcb724b2fbc40714a0094d00fb5221726_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d8ebfaac36325f1401a227948e28d867b514678da94a54e67cacfc84d1fd1c33 = $this->env->getExtension("native_profiler");
        $__internal_d8ebfaac36325f1401a227948e28d867b514678da94a54e67cacfc84d1fd1c33->enter($__internal_d8ebfaac36325f1401a227948e28d867b514678da94a54e67cacfc84d1fd1c33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d8ebfaac36325f1401a227948e28d867b514678da94a54e67cacfc84d1fd1c33->leave($__internal_d8ebfaac36325f1401a227948e28d867b514678da94a54e67cacfc84d1fd1c33_prof);

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
