<?php

/* base.html.twig */
class __TwigTemplate_cde57054fa4f7fe05bfd1b6dde39072d6e78272a1a188fffb237a196dc2155cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d5ac1060bb589bc94398c4cb5bafc2140a802fcfcfecf0c2742b7a12b2de3655 = $this->env->getExtension("native_profiler");
        $__internal_d5ac1060bb589bc94398c4cb5bafc2140a802fcfcfecf0c2742b7a12b2de3655->enter($__internal_d5ac1060bb589bc94398c4cb5bafc2140a802fcfcfecf0c2742b7a12b2de3655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_d5ac1060bb589bc94398c4cb5bafc2140a802fcfcfecf0c2742b7a12b2de3655->leave($__internal_d5ac1060bb589bc94398c4cb5bafc2140a802fcfcfecf0c2742b7a12b2de3655_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b04d3f9b034939322ee035c36292529374b89ac65cead3880a83834cf1c060c0 = $this->env->getExtension("native_profiler");
        $__internal_b04d3f9b034939322ee035c36292529374b89ac65cead3880a83834cf1c060c0->enter($__internal_b04d3f9b034939322ee035c36292529374b89ac65cead3880a83834cf1c060c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b04d3f9b034939322ee035c36292529374b89ac65cead3880a83834cf1c060c0->leave($__internal_b04d3f9b034939322ee035c36292529374b89ac65cead3880a83834cf1c060c0_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_84bde45d0ada7cbc16952829023f1c5e4ce5a221dd543ef4d3916017111d1c5a = $this->env->getExtension("native_profiler");
        $__internal_84bde45d0ada7cbc16952829023f1c5e4ce5a221dd543ef4d3916017111d1c5a->enter($__internal_84bde45d0ada7cbc16952829023f1c5e4ce5a221dd543ef4d3916017111d1c5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_84bde45d0ada7cbc16952829023f1c5e4ce5a221dd543ef4d3916017111d1c5a->leave($__internal_84bde45d0ada7cbc16952829023f1c5e4ce5a221dd543ef4d3916017111d1c5a_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ccebaf752d69f0d31b8505243b0c486575edb8c6154a41bf997ebb9a7057db0 = $this->env->getExtension("native_profiler");
        $__internal_1ccebaf752d69f0d31b8505243b0c486575edb8c6154a41bf997ebb9a7057db0->enter($__internal_1ccebaf752d69f0d31b8505243b0c486575edb8c6154a41bf997ebb9a7057db0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1ccebaf752d69f0d31b8505243b0c486575edb8c6154a41bf997ebb9a7057db0->leave($__internal_1ccebaf752d69f0d31b8505243b0c486575edb8c6154a41bf997ebb9a7057db0_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7a3e4cef88d8b89f1bb47819bcb7c0902bdb08238e9f1787842eacfc0ded5d0d = $this->env->getExtension("native_profiler");
        $__internal_7a3e4cef88d8b89f1bb47819bcb7c0902bdb08238e9f1787842eacfc0ded5d0d->enter($__internal_7a3e4cef88d8b89f1bb47819bcb7c0902bdb08238e9f1787842eacfc0ded5d0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7a3e4cef88d8b89f1bb47819bcb7c0902bdb08238e9f1787842eacfc0ded5d0d->leave($__internal_7a3e4cef88d8b89f1bb47819bcb7c0902bdb08238e9f1787842eacfc0ded5d0d_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
