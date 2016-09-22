<?php

/* :todo:home.html.twig */
class __TwigTemplate_4208105e3372b07b8daab1f1ce03f4e4a35ae79a0f0dd4707140fc4d161e3d86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":todo:home.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"panel panel-default\" ng-app=\"myApp\" ng-controller=\"myCtrl\">

        <form class=\"simple-form\">
            <div class=\"input-group\" class=\"col-xs-8\">
                <div class=\"col-xs-10\">
                    <input name=\"name\" ng-model=\"con.name\" class=\"form-control\" type=\"text\" placeholder=\"Artisanal kale\" id=\"example-text-input\" ng-click=\"hideMsg()\" required>
                </div>
                <div class=\"dropdown\">
                    <select ng-style=\"{'width': getMaxLength() + 'px'}\" name=\"singleSelect\" ng-model=\"con.priority\">
                        <option value=\"3\"><h2>Low Priority</h2></option>
                        <option value=\"2\" >Normal Priority</option>
                        <option value=\"1\">High Priority</option>
                    </select>


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
        // line 44
        echo "{{ item.id }}";
        echo "</td>
                    <td>";
        // line 45
        echo "{{ item.name }}";
        echo "</td>
                    <td>";
        // line 46
        echo "{{ item.state }}";
        echo "</td>
                    <td>";
        // line 47
        echo "{{ item.priority }}";
        echo "</td>
                    <td>";
        // line 48
        echo "{{ item.created }}";
        echo "</td>
                    <td><input type=\"button\" ng-click=\"delete(item.id)\" value=\"Delete\"></td>
                    <td><a href=\"http://localhost:8000/edit/";
        // line 50
        echo "{{ item.id }}";
        echo "\" ng-click=\"getContact(contact.id)\" class=\"btn\" >Edit</a></td>

                </tr>

            </tbody>
        </table>
    </div>

";
    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
        // line 61
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/home.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return ":todo:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 61,  108 => 60,  95 => 50,  90 => 48,  86 => 47,  82 => 46,  78 => 45,  74 => 44,  32 => 4,  29 => 3,  11 => 1,);
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
/*                 <div class="dropdown">*/
/*                     <select ng-style="{'width': getMaxLength() + 'px'}" name="singleSelect" ng-model="con.priority">*/
/*                         <option value="3"><h2>Low Priority</h2></option>*/
/*                         <option value="2" >Normal Priority</option>*/
/*                         <option value="1">High Priority</option>*/
/*                     </select>*/
/* */
/* */
/*                 </div>*/
/* */
/*                 <span class="input-group-btn">*/
/*                     <div class="form-group">*/
/*                         <button type="submit" ng-click="add(con)" class="btn btn-primary" ng-disabled="myform.$invalid">Add Item</button>*/
/*                     </div>*/
/*                 </span>*/
/*             </div>*/
/* */
/* */
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
/*                     <td>{{ '{{ item.state }}' }}</td>*/
/*                     <td>{{ '{{ item.priority }}' }}</td>*/
/*                     <td>{{ '{{ item.created }}' }}</td>*/
/*                     <td><input type="button" ng-click="delete(item.id)" value="Delete"></td>*/
/*                     <td><a href="http://localhost:8000/edit/{{ '{{ item.id }}' }}" ng-click="getContact(contact.id)" class="btn" >Edit</a></td>*/
/* */
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
