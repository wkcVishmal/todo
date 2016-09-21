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
        $__internal_ae345b9c1b96fb668056f5dec1e426a3d67220275a86b6987c3ab5df1b04713b = $this->env->getExtension("native_profiler");
        $__internal_ae345b9c1b96fb668056f5dec1e426a3d67220275a86b6987c3ab5df1b04713b->enter($__internal_ae345b9c1b96fb668056f5dec1e426a3d67220275a86b6987c3ab5df1b04713b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todo/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae345b9c1b96fb668056f5dec1e426a3d67220275a86b6987c3ab5df1b04713b->leave($__internal_ae345b9c1b96fb668056f5dec1e426a3d67220275a86b6987c3ab5df1b04713b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e98ac520e7fcd6f767fe6e1af8ea9fbc6836bdfb7acf209c6fdbde6a004c918 = $this->env->getExtension("native_profiler");
        $__internal_5e98ac520e7fcd6f767fe6e1af8ea9fbc6836bdfb7acf209c6fdbde6a004c918->enter($__internal_5e98ac520e7fcd6f767fe6e1af8ea9fbc6836bdfb7acf209c6fdbde6a004c918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        ";
        // line 30
        echo "{{ con }}";
        echo "
        <p>items</p>

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
        // line 46
        echo "{{ item.id }}";
        echo "</td>
                    <td>";
        // line 47
        echo "{{ item.name }}";
        echo "</td>
                    <td>";
        // line 48
        echo "{{ item.state }}";
        echo "</td>
                    <td>";
        // line 49
        echo "{{ item.priority }}";
        echo "</td>
                    <td>";
        // line 50
        echo "{{ item.created }}";
        echo "</td>
                    <td><input type=\"button\" ng-click=\"delete(item.id)\" value=\"Delete\"></td>
                    <td><a href=\"http://localhost:8000/edit/";
        // line 52
        echo "{{ item.id }}";
        echo "\" ng-click=\"getContact(contact.id)\" class=\"btn\" >Edit</a></td>

                </tr>

            </tbody>
        </table>
    </div>

";
        
        $__internal_5e98ac520e7fcd6f767fe6e1af8ea9fbc6836bdfb7acf209c6fdbde6a004c918->leave($__internal_5e98ac520e7fcd6f767fe6e1af8ea9fbc6836bdfb7acf209c6fdbde6a004c918_prof);

    }

    // line 62
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_dd4bbeeccf96816d2a0c3bddaf7246e9a9be093e36f7d7d1cb63c251d4f17c7a = $this->env->getExtension("native_profiler");
        $__internal_dd4bbeeccf96816d2a0c3bddaf7246e9a9be093e36f7d7d1cb63c251d4f17c7a->enter($__internal_dd4bbeeccf96816d2a0c3bddaf7246e9a9be093e36f7d7d1cb63c251d4f17c7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 63
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/home.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_dd4bbeeccf96816d2a0c3bddaf7246e9a9be093e36f7d7d1cb63c251d4f17c7a->leave($__internal_dd4bbeeccf96816d2a0c3bddaf7246e9a9be093e36f7d7d1cb63c251d4f17c7a_prof);

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
        return array (  131 => 63,  125 => 62,  109 => 52,  104 => 50,  100 => 49,  96 => 48,  92 => 47,  88 => 46,  69 => 30,  41 => 4,  35 => 3,  11 => 1,);
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
/*         {{ '{{ con }}' }}*/
/*         <p>items</p>*/
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
