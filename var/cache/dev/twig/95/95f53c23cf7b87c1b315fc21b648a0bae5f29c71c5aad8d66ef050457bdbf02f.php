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
        $__internal_26a9e665d04e2826f6ed78d4df9aaea3cabc8ddb438015ff8fbcff7706e64f4c = $this->env->getExtension("native_profiler");
        $__internal_26a9e665d04e2826f6ed78d4df9aaea3cabc8ddb438015ff8fbcff7706e64f4c->enter($__internal_26a9e665d04e2826f6ed78d4df9aaea3cabc8ddb438015ff8fbcff7706e64f4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todo/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26a9e665d04e2826f6ed78d4df9aaea3cabc8ddb438015ff8fbcff7706e64f4c->leave($__internal_26a9e665d04e2826f6ed78d4df9aaea3cabc8ddb438015ff8fbcff7706e64f4c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_94cdb08e3fb24ffb0a88ef798b6a3236946cf420e530c0d7b6343b0843dc0b7c = $this->env->getExtension("native_profiler");
        $__internal_94cdb08e3fb24ffb0a88ef798b6a3236946cf420e530c0d7b6343b0843dc0b7c->enter($__internal_94cdb08e3fb24ffb0a88ef798b6a3236946cf420e530c0d7b6343b0843dc0b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"panel panel-default\" ng-app=\"myApp\" ng-controller=\"myCtrl\">

        <form class=\"simple-form\">
            <div class=\"input-group\" class=\"col-xs-8\">
                <div class=\"col-xs-10\">
                    <input name=\"name\" ng-model=\"con.name\" class=\"form-control\" type=\"text\" placeholder=\"Artisanal kale\" id=\"example-text-input\" ng-click=\"hideMsg()\" required>
                </div>


                <div>
                    <select ng-model=\"con.priority\" ng-options=\"country.id as country.name for country in con.countries\"></select>
                </div>

                <span class=\"input-group-btn\">
                    <div class=\"form-group\">
                        <button type=\"submit\" ng-click=\"add(con)\" class=\"btn btn-primary\" ng-disabled=\"myform.\$invalid\">Add Item</button>
                    </div>
                </span>
            </div>
        </form>

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
        // line 38
        echo "{{ item.id }}";
        echo "</td>
                    <td>";
        // line 39
        echo "{{ item.name }}";
        echo "</td>
                    <td><input type=\"button\" ng-click=\"done(item.id)\" value=\"";
        // line 40
        echo "{{ item.state }}";
        echo "\"></td>
                    <td ng-show=\"item.priority == 1\">High</td>
                    <td ng-show=\"item.priority == 2\">Normal</td>
                    <td ng-show=\"item.priority == 3\">Low</td>
                    <td>";
        // line 44
        echo "{{ item.created }}";
        echo "</td>
                    <td><input type=\"button\" ng-click=\"delete(item.id)\" value=\"Delete\"></td>
                </tr>

            </tbody>
        </table>
    </div>

";
        
        $__internal_94cdb08e3fb24ffb0a88ef798b6a3236946cf420e530c0d7b6343b0843dc0b7c->leave($__internal_94cdb08e3fb24ffb0a88ef798b6a3236946cf420e530c0d7b6343b0843dc0b7c_prof);

    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7323af0351d350912ac86d9d9fb3922c2f54c137c3898dd4880702df1eb38cc7 = $this->env->getExtension("native_profiler");
        $__internal_7323af0351d350912ac86d9d9fb3922c2f54c137c3898dd4880702df1eb38cc7->enter($__internal_7323af0351d350912ac86d9d9fb3922c2f54c137c3898dd4880702df1eb38cc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 55
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/home.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_7323af0351d350912ac86d9d9fb3922c2f54c137c3898dd4880702df1eb38cc7->leave($__internal_7323af0351d350912ac86d9d9fb3922c2f54c137c3898dd4880702df1eb38cc7_prof);

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
        return array (  114 => 55,  108 => 54,  92 => 44,  85 => 40,  81 => 39,  77 => 38,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="panel panel-default" ng-app="myApp" ng-controller="myCtrl">*/
/* */
/*         <form class="simple-form">*/
/*             <div class="input-group" class="col-xs-8">*/
/*                 <div class="col-xs-10">*/
/*                     <input name="name" ng-model="con.name" class="form-control" type="text" placeholder="Artisanal kale" id="example-text-input" ng-click="hideMsg()" required>*/
/*                 </div>*/
/* */
/* */
/*                 <div>*/
/*                     <select ng-model="con.priority" ng-options="country.id as country.name for country in con.countries"></select>*/
/*                 </div>*/
/* */
/*                 <span class="input-group-btn">*/
/*                     <div class="form-group">*/
/*                         <button type="submit" ng-click="add(con)" class="btn btn-primary" ng-disabled="myform.$invalid">Add Item</button>*/
/*                     </div>*/
/*                 </span>*/
/*             </div>*/
/*         </form>*/
/* */
/*         <table class="table">*/
/*             <thead>*/
/*             <tr>*/
/*                 <th>ID</th>*/
/*                 <th>Item Name</th>*/
/*                 <th>State</th>*/
/*                 <th>Priority</th>*/
/*                 <th>Created At</th>*/
/*             </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*                 <tr ng-repeat="item in items">*/
/* */
/*                     <td>{{ '{{ item.id }}' }}</td>*/
/*                     <td>{{ '{{ item.name }}' }}</td>*/
/*                     <td><input type="button" ng-click="done(item.id)" value="{{ '{{ item.state }}' }}"></td>*/
/*                     <td ng-show="item.priority == 1">High</td>*/
/*                     <td ng-show="item.priority == 2">Normal</td>*/
/*                     <td ng-show="item.priority == 3">Low</td>*/
/*                     <td>{{ '{{ item.created }}' }}</td>*/
/*                     <td><input type="button" ng-click="delete(item.id)" value="Delete"></td>*/
/*                 </tr>*/
/* */
/*             </tbody>*/
/*         </table>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     <script src="{{ asset('js/home.js') }}"></script>*/
/* {% endblock %}*/
