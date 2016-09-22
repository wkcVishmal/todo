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
        $__internal_ff78602d9f3469b6a0e1be9b95ff48f8748ef22158b9c3238aa93336f28d473f = $this->env->getExtension("native_profiler");
        $__internal_ff78602d9f3469b6a0e1be9b95ff48f8748ef22158b9c3238aa93336f28d473f->enter($__internal_ff78602d9f3469b6a0e1be9b95ff48f8748ef22158b9c3238aa93336f28d473f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todo/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff78602d9f3469b6a0e1be9b95ff48f8748ef22158b9c3238aa93336f28d473f->leave($__internal_ff78602d9f3469b6a0e1be9b95ff48f8748ef22158b9c3238aa93336f28d473f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a0d55f86a63d91782678c015e1454f6c62263ee6a5fd2d052afee78a1ffb524f = $this->env->getExtension("native_profiler");
        $__internal_a0d55f86a63d91782678c015e1454f6c62263ee6a5fd2d052afee78a1ffb524f->enter($__internal_a0d55f86a63d91782678c015e1454f6c62263ee6a5fd2d052afee78a1ffb524f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    <td><input type=\"button\" ng-click=\"delete(item.id)\" value=\"Delete\"></td>
                </tr>

            </tbody>
        </table>
    </div>

";
        
        $__internal_a0d55f86a63d91782678c015e1454f6c62263ee6a5fd2d052afee78a1ffb524f->leave($__internal_a0d55f86a63d91782678c015e1454f6c62263ee6a5fd2d052afee78a1ffb524f_prof);

    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ea7ae136f52f15c272f2694c25776c2a4c97fce35c2d3508a21d708cb410a936 = $this->env->getExtension("native_profiler");
        $__internal_ea7ae136f52f15c272f2694c25776c2a4c97fce35c2d3508a21d708cb410a936->enter($__internal_ea7ae136f52f15c272f2694c25776c2a4c97fce35c2d3508a21d708cb410a936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 54
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/home.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_ea7ae136f52f15c272f2694c25776c2a4c97fce35c2d3508a21d708cb410a936->leave($__internal_ea7ae136f52f15c272f2694c25776c2a4c97fce35c2d3508a21d708cb410a936_prof);

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
        return array (  110 => 54,  104 => 53,  85 => 40,  81 => 39,  77 => 38,  41 => 4,  35 => 3,  11 => 1,);
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
