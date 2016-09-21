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
        $__internal_7b45b88544c53a4feb67c34c78895b7ec8ab7307068491bf38331ea61750dbd9 = $this->env->getExtension("native_profiler");
        $__internal_7b45b88544c53a4feb67c34c78895b7ec8ab7307068491bf38331ea61750dbd9->enter($__internal_7b45b88544c53a4feb67c34c78895b7ec8ab7307068491bf38331ea61750dbd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todo/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b45b88544c53a4feb67c34c78895b7ec8ab7307068491bf38331ea61750dbd9->leave($__internal_7b45b88544c53a4feb67c34c78895b7ec8ab7307068491bf38331ea61750dbd9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_09be96bbe59f5f44a1182f57cfcadff0c683c2b477093e26e61820413a462ade = $this->env->getExtension("native_profiler");
        $__internal_09be96bbe59f5f44a1182f57cfcadff0c683c2b477093e26e61820413a462ade->enter($__internal_09be96bbe59f5f44a1182f57cfcadff0c683c2b477093e26e61820413a462ade_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                        <option value=\"2\">Normal Priority</option>
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
        // line 45
        echo "{{ item.id }}";
        echo "</td>
                    <td>";
        // line 46
        echo "{{ item.name }}";
        echo "</td>
                    <td>";
        // line 47
        echo "{{ item.state }}";
        echo "</td>
                    <td>";
        // line 48
        echo "{{ item.priority }}";
        echo "</td>
                    <td>";
        // line 49
        echo "{{ item.created }}";
        echo "</td>
                    <td><input type=\"button\" ng-click=\"delete(item.id)\" value=\"Delete\"></td>
                    <td><a href=\"http://localhost:8000/edit/";
        // line 51
        echo "{{ item.id }}";
        echo "\" ng-click=\"getContact(contact.id)\" class=\"btn\" >Edit</a></td>

                </tr>

            </tbody>
        </table>
    </div>

";
        
        $__internal_09be96bbe59f5f44a1182f57cfcadff0c683c2b477093e26e61820413a462ade->leave($__internal_09be96bbe59f5f44a1182f57cfcadff0c683c2b477093e26e61820413a462ade_prof);

    }

    // line 61
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_81c28c8e99e41591e90d635cb525f34b1110fb5fe67062e7b5d4897f9206c4e0 = $this->env->getExtension("native_profiler");
        $__internal_81c28c8e99e41591e90d635cb525f34b1110fb5fe67062e7b5d4897f9206c4e0->enter($__internal_81c28c8e99e41591e90d635cb525f34b1110fb5fe67062e7b5d4897f9206c4e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 62
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/home.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_81c28c8e99e41591e90d635cb525f34b1110fb5fe67062e7b5d4897f9206c4e0->leave($__internal_81c28c8e99e41591e90d635cb525f34b1110fb5fe67062e7b5d4897f9206c4e0_prof);

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
        return array (  130 => 62,  124 => 61,  108 => 51,  103 => 49,  99 => 48,  95 => 47,  91 => 46,  87 => 45,  69 => 30,  41 => 4,  35 => 3,  11 => 1,);
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
/*                         <option value="2">Normal Priority</option>*/
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
