<?php

/* todo/home.html.twig */
class __TwigTemplate_196b1320e74fa340561c50dac479179cc3019b84fcdfe836fd64ede4444c6cf4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "todo/home.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_644abbefb5a336eb9e13edc97ec126efb949b749c6478a251fc40b2f6228944a = $this->env->getExtension("native_profiler");
        $__internal_644abbefb5a336eb9e13edc97ec126efb949b749c6478a251fc40b2f6228944a->enter($__internal_644abbefb5a336eb9e13edc97ec126efb949b749c6478a251fc40b2f6228944a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todo/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_644abbefb5a336eb9e13edc97ec126efb949b749c6478a251fc40b2f6228944a->leave($__internal_644abbefb5a336eb9e13edc97ec126efb949b749c6478a251fc40b2f6228944a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a34879953ca6160747651dc0f0537735df4072c9b9368bb4cf855a4eb34efb10 = $this->env->getExtension("native_profiler");
        $__internal_a34879953ca6160747651dc0f0537735df4072c9b9368bb4cf855a4eb34efb10->enter($__internal_a34879953ca6160747651dc0f0537735df4072c9b9368bb4cf855a4eb34efb10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"panel panel-default\" ng-app=\"myApp\" ng-controller=\"myCtrl\">

        <div class=\"page-header\">
            <form class=\"simple-form\">
                <div class=\"input-group\">
                    <div class=\"col-xs-10\">
                        <input name=\"name\" ng-model=\"con.name\" class=\"form-control\" type=\"text\" placeholder=\"Enter Item here\" id=\"example-text-input\" ng-click=\"hideMsg()\" required>
                    </div>


                    <div class=\"form-group\">
                        <select name=\"priority\" ng-model=\"con.priority\" ng-options=\"country.id as country.name for country in con.countries\"></select>
                    </div>

                    <span class=\"input-group-btn\">
                    <div class=\"form-group\">
                        <button id=\"submit\" name=\"submit\" type=\"submit\" ng-click=\"add(con)\" class=\"btn btn-primary\" ng-disabled=\"myform.\$invalid\">Add Item</button>
                    </div>
                </span>
                    <span>
                         <div class=\"col-md-1\"></div>
                    </span>
                </div>
            </form>
        </div>

        <div class=\"panel-body\">

            <div class=\"btn-group\" style=\"border-top: 1px solid #ccc;\">
                <button type=\"button\" class=\"btn btn-primary\" ng-click=\"all()\">All</button>
                <button type=\"button\" class=\"btn btn-primary\" ng-click=\"todo()\">Items to do</button>
                <button type=\"button\" class=\"btn btn-primary\" ng-click=\"getDone()\">Done Items</button>
            </div>
            <div style=\"border-top: 1px solid #ccc; margin-top: 20px\">
                <table class=\"table\">

                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Item Name</th>
                        <th>State</th>
                        <th>Priority</th>
                        <th>Created At</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr ng-repeat=\"item in items\">

                        <td>";
        // line 52
        echo "{{ item.id }}";
        echo "</td>
                        <td>";
        // line 53
        echo "{{ item.name }}";
        echo "</td>
                        <td><input type=\"button\" ng-click=\"done(item.id)\" value=\"";
        // line 54
        echo "{{ item.state }}";
        echo "\"></td>
                        <td ng-show=\"item.priority == 1\">High</td>
                        <td ng-show=\"item.priority == 2\">Normal</td>
                        <td ng-show=\"item.priority == 3\">Low</td>
                        <td>";
        // line 58
        echo "{{ item.created }}";
        echo "</td>
                        <td><input type=\"button\" ng-click=\"delete(item.id)\" value=\"Delete\"></td>
                    </tr>

                    </tbody>
                </table>
            </div>

        </div>

    </div>

";
        
        $__internal_a34879953ca6160747651dc0f0537735df4072c9b9368bb4cf855a4eb34efb10->leave($__internal_a34879953ca6160747651dc0f0537735df4072c9b9368bb4cf855a4eb34efb10_prof);

    }

    // line 72
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_813b99523662e292cfa704cdbc6e57e931b464f717109ac1c35d14d79e86cca2 = $this->env->getExtension("native_profiler");
        $__internal_813b99523662e292cfa704cdbc6e57e931b464f717109ac1c35d14d79e86cca2->enter($__internal_813b99523662e292cfa704cdbc6e57e931b464f717109ac1c35d14d79e86cca2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 73
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/home.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_813b99523662e292cfa704cdbc6e57e931b464f717109ac1c35d14d79e86cca2->leave($__internal_813b99523662e292cfa704cdbc6e57e931b464f717109ac1c35d14d79e86cca2_prof);

    }

    public function getTemplateName()
    {
        return "todo/home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 73,  126 => 72,  106 => 58,  99 => 54,  95 => 53,  91 => 52,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="panel panel-default" ng-app="myApp" ng-controller="myCtrl">*/
/* */
/*         <div class="page-header">*/
/*             <form class="simple-form">*/
/*                 <div class="input-group">*/
/*                     <div class="col-xs-10">*/
/*                         <input name="name" ng-model="con.name" class="form-control" type="text" placeholder="Enter Item here" id="example-text-input" ng-click="hideMsg()" required>*/
/*                     </div>*/
/* */
/* */
/*                     <div class="form-group">*/
/*                         <select name="priority" ng-model="con.priority" ng-options="country.id as country.name for country in con.countries"></select>*/
/*                     </div>*/
/* */
/*                     <span class="input-group-btn">*/
/*                     <div class="form-group">*/
/*                         <button id="submit" name="submit" type="submit" ng-click="add(con)" class="btn btn-primary" ng-disabled="myform.$invalid">Add Item</button>*/
/*                     </div>*/
/*                 </span>*/
/*                     <span>*/
/*                          <div class="col-md-1"></div>*/
/*                     </span>*/
/*                 </div>*/
/*             </form>*/
/*         </div>*/
/* */
/*         <div class="panel-body">*/
/* */
/*             <div class="btn-group" style="border-top: 1px solid #ccc;">*/
/*                 <button type="button" class="btn btn-primary" ng-click="all()">All</button>*/
/*                 <button type="button" class="btn btn-primary" ng-click="todo()">Items to do</button>*/
/*                 <button type="button" class="btn btn-primary" ng-click="getDone()">Done Items</button>*/
/*             </div>*/
/*             <div style="border-top: 1px solid #ccc; margin-top: 20px">*/
/*                 <table class="table">*/
/* */
/*                     <thead>*/
/*                     <tr>*/
/*                         <th>ID</th>*/
/*                         <th>Item Name</th>*/
/*                         <th>State</th>*/
/*                         <th>Priority</th>*/
/*                         <th>Created At</th>*/
/*                     </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                     <tr ng-repeat="item in items">*/
/* */
/*                         <td>{{ '{{ item.id }}' }}</td>*/
/*                         <td>{{ '{{ item.name }}' }}</td>*/
/*                         <td><input type="button" ng-click="done(item.id)" value="{{ '{{ item.state }}' }}"></td>*/
/*                         <td ng-show="item.priority == 1">High</td>*/
/*                         <td ng-show="item.priority == 2">Normal</td>*/
/*                         <td ng-show="item.priority == 3">Low</td>*/
/*                         <td>{{ '{{ item.created }}' }}</td>*/
/*                         <td><input type="button" ng-click="delete(item.id)" value="Delete"></td>*/
/*                     </tr>*/
/* */
/*                     </tbody>*/
/*                 </table>*/
/*             </div>*/
/* */
/*         </div>*/
/* */
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     <script src="{{ asset('js/home.js') }}"></script>*/
/* {% endblock %}*/
