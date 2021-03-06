<?php

/* base.html.twig */
class __TwigTemplate_9cc3f31e0db0fd40e3ca0a6659d5dc8037631139d2603fc6dee0a3fb65c29244 extends Twig_Template
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
        $__internal_ea00f0ed9a79c79d5dbf7af75f225eba7d7302e99f994c8a8fc68ed2c99d08b9 = $this->env->getExtension("native_profiler");
        $__internal_ea00f0ed9a79c79d5dbf7af75f225eba7d7302e99f994c8a8fc68ed2c99d08b9->enter($__internal_ea00f0ed9a79c79d5dbf7af75f225eba7d7302e99f994c8a8fc68ed2c99d08b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_ea00f0ed9a79c79d5dbf7af75f225eba7d7302e99f994c8a8fc68ed2c99d08b9->leave($__internal_ea00f0ed9a79c79d5dbf7af75f225eba7d7302e99f994c8a8fc68ed2c99d08b9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_64ad1ad820a5dc5aad7e24ffbe3c2ecfb7ef91fa8e669947eadb4890e6dcbfea = $this->env->getExtension("native_profiler");
        $__internal_64ad1ad820a5dc5aad7e24ffbe3c2ecfb7ef91fa8e669947eadb4890e6dcbfea->enter($__internal_64ad1ad820a5dc5aad7e24ffbe3c2ecfb7ef91fa8e669947eadb4890e6dcbfea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "ToDo List";
        
        $__internal_64ad1ad820a5dc5aad7e24ffbe3c2ecfb7ef91fa8e669947eadb4890e6dcbfea->leave($__internal_64ad1ad820a5dc5aad7e24ffbe3c2ecfb7ef91fa8e669947eadb4890e6dcbfea_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5f737c276ce5f5774bdd5f1ff74c2422b846a858f959b0e1f1db1fda27e164dd = $this->env->getExtension("native_profiler");
        $__internal_5f737c276ce5f5774bdd5f1ff74c2422b846a858f959b0e1f1db1fda27e164dd->enter($__internal_5f737c276ce5f5774bdd5f1ff74c2422b846a858f959b0e1f1db1fda27e164dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "        <meta charset=\"utf-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

        <script src=\"http://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.js\"></script>
        <script src=\"http://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular-animate.js\"></script>
        <script src=\"http://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular-sanitize.js\"></script>
        <script src=\"http://angular-ui.github.io/bootstrap/ui-bootstrap-tpls-2.1.3.js\"></script>
        <link href=\"http://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\">
    ";
        
        $__internal_5f737c276ce5f5774bdd5f1ff74c2422b846a858f959b0e1f1db1fda27e164dd->leave($__internal_5f737c276ce5f5774bdd5f1ff74c2422b846a858f959b0e1f1db1fda27e164dd_prof);

    }

    // line 78
    public function block_body($context, array $blocks = array())
    {
        $__internal_feb5b8ead9b9e9cec2395844326b288ec10af3e4b08c688828673c4dca8c7e43 = $this->env->getExtension("native_profiler");
        $__internal_feb5b8ead9b9e9cec2395844326b288ec10af3e4b08c688828673c4dca8c7e43->enter($__internal_feb5b8ead9b9e9cec2395844326b288ec10af3e4b08c688828673c4dca8c7e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_feb5b8ead9b9e9cec2395844326b288ec10af3e4b08c688828673c4dca8c7e43->leave($__internal_feb5b8ead9b9e9cec2395844326b288ec10af3e4b08c688828673c4dca8c7e43_prof);

    }

    // line 83
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_aab30bb6c8200db816bd488c886e4590c69e4b7d71f8d3c74b1fe0b53f7ca356 = $this->env->getExtension("native_profiler");
        $__internal_aab30bb6c8200db816bd488c886e4590c69e4b7d71f8d3c74b1fe0b53f7ca356->enter($__internal_aab30bb6c8200db816bd488c886e4590c69e4b7d71f8d3c74b1fe0b53f7ca356_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 84
        echo "    <script src=\"//code.jquery.com/jquery-2.1.4.min.js\"></script>


";
        
        $__internal_aab30bb6c8200db816bd488c886e4590c69e4b7d71f8d3c74b1fe0b53f7ca356->leave($__internal_aab30bb6c8200db816bd488c886e4590c69e4b7d71f8d3c74b1fe0b53f7ca356_prof);

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
