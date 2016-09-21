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
        $__internal_43f17094ca008020f29c36e473778f8c8f01dbdb2c84912fb7b5db532fe9b927 = $this->env->getExtension("native_profiler");
        $__internal_43f17094ca008020f29c36e473778f8c8f01dbdb2c84912fb7b5db532fe9b927->enter($__internal_43f17094ca008020f29c36e473778f8c8f01dbdb2c84912fb7b5db532fe9b927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "
</head>

<body ng-controller=\"Ctrl\">
<nav class=\"navbar navbar-default\">
    <div class=\"container-fluid\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
                <span class=\"sr-only\">Toggle navigation</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"/\">ToDo List</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav\">
                <li><a href=\"#\">Add todo <span class=\"sr-only\">(current)</span></a></li>
                <li><a href=\"listdata\">Api</a></li>
                <li><a href=\"#\">test</a></li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Dropdown <span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"#\">Action</a></li>
                        <li><a href=\"#\">Another action</a></li>
                        <li><a href=\"#\">Something else here</a></li>
                        <li role=\"separator\" class=\"divider\"></li>
                        <li><a href=\"#\">Separated link</a></li>
                        <li role=\"separator\" class=\"divider\"></li>
                        <li><a href=\"#\">One more separated link</a></li>
                    </ul>
                </li>
            </ul>
            <form class=\"navbar-form navbar-left\">
                <div class=\"form-group\">
                    <input type=\"text\" class=\"form-control\" placeholder=\"Search\">
                </div>
                <button type=\"submit\" class=\"btn btn-default\">Submit</button>
            </form>
            <ul class=\"nav navbar-nav navbar-right\">
                <li><a href=\"#\">Link</a></li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">Actions <span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"#\">Action</a></li>
                        <li><a href=\"#\">Another action</a></li>
                        <li><a href=\"#\">Something else here</a></li>
                        <li role=\"separator\" class=\"divider\"></li>
                        <li><a href=\"#\">Separated link</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div ng-controller=\"BaseCtrl\" class=\"panel-body\">
    <div class=\"main-content\">
        ";
        // line 78
        $this->displayBlock('body', $context, $blocks);
        // line 79
        echo "    </div>
    <div id=\"ng-spinner\" class=\"render\" ng-cloak ng-if=\"\$root.spinner\"></div>
</div>

";
        // line 83
        $this->displayBlock('javascripts', $context, $blocks);
        // line 88
        echo "</body>
</html>
";
        
        $__internal_43f17094ca008020f29c36e473778f8c8f01dbdb2c84912fb7b5db532fe9b927->leave($__internal_43f17094ca008020f29c36e473778f8c8f01dbdb2c84912fb7b5db532fe9b927_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ea37fb5a202b658222b828feb4a9b0c27de8afe52a5aa9310cf85e0470c53a78 = $this->env->getExtension("native_profiler");
        $__internal_ea37fb5a202b658222b828feb4a9b0c27de8afe52a5aa9310cf85e0470c53a78->enter($__internal_ea37fb5a202b658222b828feb4a9b0c27de8afe52a5aa9310cf85e0470c53a78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ToDo List";
        
        $__internal_ea37fb5a202b658222b828feb4a9b0c27de8afe52a5aa9310cf85e0470c53a78->leave($__internal_ea37fb5a202b658222b828feb4a9b0c27de8afe52a5aa9310cf85e0470c53a78_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_693a3434fc1304ea32859e3fd3f6bd640e4e2d1cc8f7a95346b4be61959027cc = $this->env->getExtension("native_profiler");
        $__internal_693a3434fc1304ea32859e3fd3f6bd640e4e2d1cc8f7a95346b4be61959027cc->enter($__internal_693a3434fc1304ea32859e3fd3f6bd640e4e2d1cc8f7a95346b4be61959027cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <script src=\"http://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.js\"></script>
        <script src=\"http://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular-animate.js\"></script>
        <script src=\"http://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular-sanitize.js\"></script>
        <script src=\"http://angular-ui.github.io/bootstrap/ui-bootstrap-tpls-2.1.3.js\"></script>
        <link href=\"http://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\">
    ";
        
        $__internal_693a3434fc1304ea32859e3fd3f6bd640e4e2d1cc8f7a95346b4be61959027cc->leave($__internal_693a3434fc1304ea32859e3fd3f6bd640e4e2d1cc8f7a95346b4be61959027cc_prof);

    }

    // line 78
    public function block_body($context, array $blocks = array())
    {
        $__internal_fb90ca1deef5c378015bb93ef820bd8c3b11784b8344760d088aaf7434a0ec91 = $this->env->getExtension("native_profiler");
        $__internal_fb90ca1deef5c378015bb93ef820bd8c3b11784b8344760d088aaf7434a0ec91->enter($__internal_fb90ca1deef5c378015bb93ef820bd8c3b11784b8344760d088aaf7434a0ec91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fb90ca1deef5c378015bb93ef820bd8c3b11784b8344760d088aaf7434a0ec91->leave($__internal_fb90ca1deef5c378015bb93ef820bd8c3b11784b8344760d088aaf7434a0ec91_prof);

    }

    // line 83
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_89664e32e3eeb87b63e9d658387abdc3467cea6b535a960b15247d2413e538eb = $this->env->getExtension("native_profiler");
        $__internal_89664e32e3eeb87b63e9d658387abdc3467cea6b535a960b15247d2413e538eb->enter($__internal_89664e32e3eeb87b63e9d658387abdc3467cea6b535a960b15247d2413e538eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 84
        echo "    <script src=\"//code.jquery.com/jquery-2.1.4.min.js\"></script>


";
        
        $__internal_89664e32e3eeb87b63e9d658387abdc3467cea6b535a960b15247d2413e538eb->leave($__internal_89664e32e3eeb87b63e9d658387abdc3467cea6b535a960b15247d2413e538eb_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  171 => 84,  165 => 83,  154 => 78,  139 => 8,  133 => 7,  121 => 5,  112 => 88,  110 => 83,  104 => 79,  102 => 78,  39 => 17,  37 => 7,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*     <meta charset="utf-8">*/
/*     <title>{% block title %}ToDo List{% endblock %}</title>*/
/* */
/*     {% block stylesheets %}*/
/*         <meta charset="utf-8">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/*         <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.js"></script>*/
/*         <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular-animate.js"></script>*/
/*         <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular-sanitize.js"></script>*/
/*         <script src="http://angular-ui.github.io/bootstrap/ui-bootstrap-tpls-2.1.3.js"></script>*/
/*         <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">*/
/*     {% endblock %}*/
/* */
/* </head>*/
/* */
/* <body ng-controller="Ctrl">*/
/* <nav class="navbar navbar-default">*/
/*     <div class="container-fluid">*/
/*         <!-- Brand and toggle get grouped for better mobile display -->*/
/*         <div class="navbar-header">*/
/*             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">*/
/*                 <span class="sr-only">Toggle navigation</span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*                 <span class="icon-bar"></span>*/
/*             </button>*/
/*             <a class="navbar-brand" href="/">ToDo List</a>*/
/*         </div>*/
/* */
/*         <!-- Collect the nav links, forms, and other content for toggling -->*/
/*         <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">*/
/*             <ul class="nav navbar-nav">*/
/*                 <li><a href="#">Add todo <span class="sr-only">(current)</span></a></li>*/
/*                 <li><a href="listdata">Api</a></li>*/
/*                 <li><a href="#">test</a></li>*/
/*                 <li class="dropdown">*/
/*                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>*/
/*                     <ul class="dropdown-menu">*/
/*                         <li><a href="#">Action</a></li>*/
/*                         <li><a href="#">Another action</a></li>*/
/*                         <li><a href="#">Something else here</a></li>*/
/*                         <li role="separator" class="divider"></li>*/
/*                         <li><a href="#">Separated link</a></li>*/
/*                         <li role="separator" class="divider"></li>*/
/*                         <li><a href="#">One more separated link</a></li>*/
/*                     </ul>*/
/*                 </li>*/
/*             </ul>*/
/*             <form class="navbar-form navbar-left">*/
/*                 <div class="form-group">*/
/*                     <input type="text" class="form-control" placeholder="Search">*/
/*                 </div>*/
/*                 <button type="submit" class="btn btn-default">Submit</button>*/
/*             </form>*/
/*             <ul class="nav navbar-nav navbar-right">*/
/*                 <li><a href="#">Link</a></li>*/
/*                 <li class="dropdown">*/
/*                     <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Actions <span class="caret"></span></a>*/
/*                     <ul class="dropdown-menu">*/
/*                         <li><a href="#">Action</a></li>*/
/*                         <li><a href="#">Another action</a></li>*/
/*                         <li><a href="#">Something else here</a></li>*/
/*                         <li role="separator" class="divider"></li>*/
/*                         <li><a href="#">Separated link</a></li>*/
/*                     </ul>*/
/*                 </li>*/
/*             </ul>*/
/*         </div><!-- /.navbar-collapse -->*/
/*     </div><!-- /.container-fluid -->*/
/* </nav>*/
/* */
/* <div ng-controller="BaseCtrl" class="panel-body">*/
/*     <div class="main-content">*/
/*         {% block body %}{% endblock %}*/
/*     </div>*/
/*     <div id="ng-spinner" class="render" ng-cloak ng-if="$root.spinner"></div>*/
/* </div>*/
/* */
/* {% block javascripts %}*/
/*     <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>*/
/* */
/* */
/* {% endblock %}*/
/* </body>*/
/* </html>*/
/* */
