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
        $__internal_3fc8c04b112228b2c7aa584c559fd7d7d3c3939eda67b007eea6b7826995fc23 = $this->env->getExtension("native_profiler");
        $__internal_3fc8c04b112228b2c7aa584c559fd7d7d3c3939eda67b007eea6b7826995fc23->enter($__internal_3fc8c04b112228b2c7aa584c559fd7d7d3c3939eda67b007eea6b7826995fc23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todo/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3fc8c04b112228b2c7aa584c559fd7d7d3c3939eda67b007eea6b7826995fc23->leave($__internal_3fc8c04b112228b2c7aa584c559fd7d7d3c3939eda67b007eea6b7826995fc23_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b4241f146eebc837a93690cdaf74c8d871ad5ae95ca63184fc777b0dd372c9d7 = $this->env->getExtension("native_profiler");
        $__internal_b4241f146eebc837a93690cdaf74c8d871ad5ae95ca63184fc777b0dd372c9d7->enter($__internal_b4241f146eebc837a93690cdaf74c8d871ad5ae95ca63184fc777b0dd372c9d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b4241f146eebc837a93690cdaf74c8d871ad5ae95ca63184fc777b0dd372c9d7->leave($__internal_b4241f146eebc837a93690cdaf74c8d871ad5ae95ca63184fc777b0dd372c9d7_prof);

    }

    // line 54
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2ca952ff4f42c0e6c415359d82a367df43e5b95f6d5dc14348fa416a6c16222d = $this->env->getExtension("native_profiler");
        $__internal_2ca952ff4f42c0e6c415359d82a367df43e5b95f6d5dc14348fa416a6c16222d->enter($__internal_2ca952ff4f42c0e6c415359d82a367df43e5b95f6d5dc14348fa416a6c16222d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 55
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/home.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_2ca952ff4f42c0e6c415359d82a367df43e5b95f6d5dc14348fa416a6c16222d->leave($__internal_2ca952ff4f42c0e6c415359d82a367df43e5b95f6d5dc14348fa416a6c16222d_prof);

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
