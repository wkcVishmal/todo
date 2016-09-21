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
        $__internal_9f56c5e4f21e3bccfe5e57fa2cb058d753677d2262ff7ee0806e1c8687b7e900 = $this->env->getExtension("native_profiler");
        $__internal_9f56c5e4f21e3bccfe5e57fa2cb058d753677d2262ff7ee0806e1c8687b7e900->enter($__internal_9f56c5e4f21e3bccfe5e57fa2cb058d753677d2262ff7ee0806e1c8687b7e900_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f56c5e4f21e3bccfe5e57fa2cb058d753677d2262ff7ee0806e1c8687b7e900->leave($__internal_9f56c5e4f21e3bccfe5e57fa2cb058d753677d2262ff7ee0806e1c8687b7e900_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f3c35d85fd31e564ecac2ba5a2adece22fa003178baf1f03748e38b180559f28 = $this->env->getExtension("native_profiler");
        $__internal_f3c35d85fd31e564ecac2ba5a2adece22fa003178baf1f03748e38b180559f28->enter($__internal_f3c35d85fd31e564ecac2ba5a2adece22fa003178baf1f03748e38b180559f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f3c35d85fd31e564ecac2ba5a2adece22fa003178baf1f03748e38b180559f28->leave($__internal_f3c35d85fd31e564ecac2ba5a2adece22fa003178baf1f03748e38b180559f28_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ea19d212887174b5e088e14d1b37e5572f216c275def95829d9d89bd2125b546 = $this->env->getExtension("native_profiler");
        $__internal_ea19d212887174b5e088e14d1b37e5572f216c275def95829d9d89bd2125b546->enter($__internal_ea19d212887174b5e088e14d1b37e5572f216c275def95829d9d89bd2125b546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ea19d212887174b5e088e14d1b37e5572f216c275def95829d9d89bd2125b546->leave($__internal_ea19d212887174b5e088e14d1b37e5572f216c275def95829d9d89bd2125b546_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e6a743d9b059aed8cabda7eba57f07f105deda06da026f808b5b4e271b4c2d23 = $this->env->getExtension("native_profiler");
        $__internal_e6a743d9b059aed8cabda7eba57f07f105deda06da026f808b5b4e271b4c2d23->enter($__internal_e6a743d9b059aed8cabda7eba57f07f105deda06da026f808b5b4e271b4c2d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_e6a743d9b059aed8cabda7eba57f07f105deda06da026f808b5b4e271b4c2d23->leave($__internal_e6a743d9b059aed8cabda7eba57f07f105deda06da026f808b5b4e271b4c2d23_prof);

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
