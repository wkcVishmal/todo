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
        $__internal_8d78af07d0c5149c284e6cf075e7f280d73042cde13d310679aaa78d938dcc9a = $this->env->getExtension("native_profiler");
        $__internal_8d78af07d0c5149c284e6cf075e7f280d73042cde13d310679aaa78d938dcc9a->enter($__internal_8d78af07d0c5149c284e6cf075e7f280d73042cde13d310679aaa78d938dcc9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_8d78af07d0c5149c284e6cf075e7f280d73042cde13d310679aaa78d938dcc9a->leave($__internal_8d78af07d0c5149c284e6cf075e7f280d73042cde13d310679aaa78d938dcc9a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_59e72da972db11adf776141352e7dc43c64ea4084198c95702d94c38f6c4182a = $this->env->getExtension("native_profiler");
        $__internal_59e72da972db11adf776141352e7dc43c64ea4084198c95702d94c38f6c4182a->enter($__internal_59e72da972db11adf776141352e7dc43c64ea4084198c95702d94c38f6c4182a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ToDo List";
        
        $__internal_59e72da972db11adf776141352e7dc43c64ea4084198c95702d94c38f6c4182a->leave($__internal_59e72da972db11adf776141352e7dc43c64ea4084198c95702d94c38f6c4182a_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_26fda210e09fd71191d792d3d9d9e1edcf118fc18ceaf47b07920608b813d3dc = $this->env->getExtension("native_profiler");
        $__internal_26fda210e09fd71191d792d3d9d9e1edcf118fc18ceaf47b07920608b813d3dc->enter($__internal_26fda210e09fd71191d792d3d9d9e1edcf118fc18ceaf47b07920608b813d3dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <script src=\"http://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.js\"></script>
        <script src=\"http://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular-animate.js\"></script>
        <script src=\"http://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular-sanitize.js\"></script>
        <script src=\"http://angular-ui.github.io/bootstrap/ui-bootstrap-tpls-2.1.3.js\"></script>
        <link href=\"http://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\">
    ";
        
        $__internal_26fda210e09fd71191d792d3d9d9e1edcf118fc18ceaf47b07920608b813d3dc->leave($__internal_26fda210e09fd71191d792d3d9d9e1edcf118fc18ceaf47b07920608b813d3dc_prof);

    }

    // line 78
    public function block_body($context, array $blocks = array())
    {
        $__internal_7da9821170d502b0f5a3e739e9f48be535b78fc33228b816bb3c44797430460c = $this->env->getExtension("native_profiler");
        $__internal_7da9821170d502b0f5a3e739e9f48be535b78fc33228b816bb3c44797430460c->enter($__internal_7da9821170d502b0f5a3e739e9f48be535b78fc33228b816bb3c44797430460c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7da9821170d502b0f5a3e739e9f48be535b78fc33228b816bb3c44797430460c->leave($__internal_7da9821170d502b0f5a3e739e9f48be535b78fc33228b816bb3c44797430460c_prof);

    }

    // line 83
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_339ff11dada1069725938264d1caf9acc991f94ac35cadd8cb7d220a0db63618 = $this->env->getExtension("native_profiler");
        $__internal_339ff11dada1069725938264d1caf9acc991f94ac35cadd8cb7d220a0db63618->enter($__internal_339ff11dada1069725938264d1caf9acc991f94ac35cadd8cb7d220a0db63618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 84
        echo "    <script src=\"//code.jquery.com/jquery-2.1.4.min.js\"></script>


";
        
        $__internal_339ff11dada1069725938264d1caf9acc991f94ac35cadd8cb7d220a0db63618->leave($__internal_339ff11dada1069725938264d1caf9acc991f94ac35cadd8cb7d220a0db63618_prof);

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
