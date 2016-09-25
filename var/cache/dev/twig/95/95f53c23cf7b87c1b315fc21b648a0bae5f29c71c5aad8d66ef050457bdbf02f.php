<?php

/* todo/home.html.twig */
class __TwigTemplate_2f34440dd60272fe3c2df96a610b94699cd2cc9bddd808778134fbef43abd4c5 extends Twig_Template
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
        $__internal_2247614faebfe6b31c45c37ae15ceaadae2d936c7e4ff07f3186133c7db90d02 = $this->env->getExtension("native_profiler");
        $__internal_2247614faebfe6b31c45c37ae15ceaadae2d936c7e4ff07f3186133c7db90d02->enter($__internal_2247614faebfe6b31c45c37ae15ceaadae2d936c7e4ff07f3186133c7db90d02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todo/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2247614faebfe6b31c45c37ae15ceaadae2d936c7e4ff07f3186133c7db90d02->leave($__internal_2247614faebfe6b31c45c37ae15ceaadae2d936c7e4ff07f3186133c7db90d02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4281d9381b31f5ce123ce5df55d3ef9587922c01cf127a14e6d11db4e00e6ade = $this->env->getExtension("native_profiler");
        $__internal_4281d9381b31f5ce123ce5df55d3ef9587922c01cf127a14e6d11db4e00e6ade->enter($__internal_4281d9381b31f5ce123ce5df55d3ef9587922c01cf127a14e6d11db4e00e6ade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <button name=\"submit\" type=\"submit\" ng-click=\"add(con)\" class=\"btn btn-primary\" ng-disabled=\"myform.\$invalid\">Add Item</button>
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
        
        $__internal_4281d9381b31f5ce123ce5df55d3ef9587922c01cf127a14e6d11db4e00e6ade->leave($__internal_4281d9381b31f5ce123ce5df55d3ef9587922c01cf127a14e6d11db4e00e6ade_prof);

    }

    // line 72
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_93a1a5fdaf43ef246746d0ca3a5ed3e2e1b01eb8bc11d061f1f3c1ceb9ccbe2b = $this->env->getExtension("native_profiler");
        $__internal_93a1a5fdaf43ef246746d0ca3a5ed3e2e1b01eb8bc11d061f1f3c1ceb9ccbe2b->enter($__internal_93a1a5fdaf43ef246746d0ca3a5ed3e2e1b01eb8bc11d061f1f3c1ceb9ccbe2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 73
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/home.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_93a1a5fdaf43ef246746d0ca3a5ed3e2e1b01eb8bc11d061f1f3c1ceb9ccbe2b->leave($__internal_93a1a5fdaf43ef246746d0ca3a5ed3e2e1b01eb8bc11d061f1f3c1ceb9ccbe2b_prof);

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
/*                         <button name="submit" type="submit" ng-click="add(con)" class="btn btn-primary" ng-disabled="myform.$invalid">Add Item</button>*/
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
