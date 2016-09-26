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
        $__internal_1a7c0ed3334d4210a22f92a3e8cdabda16790b9e12a4e34a2ca5e00fcb83aaa1 = $this->env->getExtension("native_profiler");
        $__internal_1a7c0ed3334d4210a22f92a3e8cdabda16790b9e12a4e34a2ca5e00fcb83aaa1->enter($__internal_1a7c0ed3334d4210a22f92a3e8cdabda16790b9e12a4e34a2ca5e00fcb83aaa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todo/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a7c0ed3334d4210a22f92a3e8cdabda16790b9e12a4e34a2ca5e00fcb83aaa1->leave($__internal_1a7c0ed3334d4210a22f92a3e8cdabda16790b9e12a4e34a2ca5e00fcb83aaa1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_59aaaeda034e20f00e75268d4db3dd7d410c378261d9cc8d81b4cbb4a7a550c9 = $this->env->getExtension("native_profiler");
        $__internal_59aaaeda034e20f00e75268d4db3dd7d410c378261d9cc8d81b4cbb4a7a550c9->enter($__internal_59aaaeda034e20f00e75268d4db3dd7d410c378261d9cc8d81b4cbb4a7a550c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_59aaaeda034e20f00e75268d4db3dd7d410c378261d9cc8d81b4cbb4a7a550c9->leave($__internal_59aaaeda034e20f00e75268d4db3dd7d410c378261d9cc8d81b4cbb4a7a550c9_prof);

    }

    // line 72
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c4f450cf6fdfa232712ed73206a57015eeb59bd418fd5bdfdfb05a2bd539404b = $this->env->getExtension("native_profiler");
        $__internal_c4f450cf6fdfa232712ed73206a57015eeb59bd418fd5bdfdfb05a2bd539404b->enter($__internal_c4f450cf6fdfa232712ed73206a57015eeb59bd418fd5bdfdfb05a2bd539404b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 73
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/home.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_c4f450cf6fdfa232712ed73206a57015eeb59bd418fd5bdfdfb05a2bd539404b->leave($__internal_c4f450cf6fdfa232712ed73206a57015eeb59bd418fd5bdfdfb05a2bd539404b_prof);

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
