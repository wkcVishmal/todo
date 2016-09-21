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
        $__internal_0ca69c3a3a86d16fce48c6e824acee45c808f128fe2091f711dbb02abfdbe15f = $this->env->getExtension("native_profiler");
        $__internal_0ca69c3a3a86d16fce48c6e824acee45c808f128fe2091f711dbb02abfdbe15f->enter($__internal_0ca69c3a3a86d16fce48c6e824acee45c808f128fe2091f711dbb02abfdbe15f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todo/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ca69c3a3a86d16fce48c6e824acee45c808f128fe2091f711dbb02abfdbe15f->leave($__internal_0ca69c3a3a86d16fce48c6e824acee45c808f128fe2091f711dbb02abfdbe15f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_00d9a4cf2642fef1c034a08f5f715a678b2ef725594da80df9818fe006e6d711 = $this->env->getExtension("native_profiler");
        $__internal_00d9a4cf2642fef1c034a08f5f715a678b2ef725594da80df9818fe006e6d711->enter($__internal_00d9a4cf2642fef1c034a08f5f715a678b2ef725594da80df9818fe006e6d711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"panel panel-default\" ng-app=\"myApp\" ng-controller=\"myCtrl\">

        <form class=\"simple-form\" name=\"myform\">
            <div class=\"input-group\" class=\"col-xs-8\">
                <div class=\"col-xs-10\">
                    <input name=\"name\" ng-model=\"con.name\" class=\"form-control\" type=\"text\" placeholder=\"Artisanal kale\" id=\"example-text-input\" ng-click=\"hideMsg()\" required>
                    <p ng-show=\"myform.name.\$invalid && myform.name.\$touched\" style=\"color:red;\">The name is required.</p>
                </div>
                <span class=\"input-group-btn\">
                    <div class=\"form-group\">
                        <button type=\"submit\" ng-click=\"update(con)\" class=\"btn btn-primary\" ng-disabled=\"myform.\$invalid\">Add Item</button>
                    </div>
                </span>
                <div class=\"col-md-2\"></div>

            </div>


        </form>


        <table class=\"table\">
            <thead>
            <tr>
                <th>ID</th>
                <th>Item Name</th>
                <th>State</th>
                <th>Priority</th>
            </tr>
            </thead>
            <tbody>
                <tr ng-repeat=\"item in items\">

                    <td>";
        // line 37
        echo "{{ item.id }}";
        echo "</td>
                    <td>";
        // line 38
        echo "{{ item.name }}";
        echo "</td>
                    <td>";
        // line 39
        echo "{{ item.state }}";
        echo "</td>
                    <td>";
        // line 40
        echo "{{ item.priority }}";
        echo "</td>
                    <td><input type=\"button\" ng-click=\"delete(contact.id)\" value=\"Delete\"></td>
                    <td><a href=\"http://localhost:8000/edit/";
        // line 42
        echo "{{ contact.id }}";
        echo "\" ng-click=\"getContact(contact.id)\" class=\"btn\" >Edit</a></td>

                </tr>

            </tbody>
        </table>
    </div>

";
        
        $__internal_00d9a4cf2642fef1c034a08f5f715a678b2ef725594da80df9818fe006e6d711->leave($__internal_00d9a4cf2642fef1c034a08f5f715a678b2ef725594da80df9818fe006e6d711_prof);

    }

    // line 52
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0d4af552977372a1e39e2d2644d494f688c9ac8611a06c3707425cac29c4ca7f = $this->env->getExtension("native_profiler");
        $__internal_0d4af552977372a1e39e2d2644d494f688c9ac8611a06c3707425cac29c4ca7f->enter($__internal_0d4af552977372a1e39e2d2644d494f688c9ac8611a06c3707425cac29c4ca7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 53
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/home.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_0d4af552977372a1e39e2d2644d494f688c9ac8611a06c3707425cac29c4ca7f->leave($__internal_0d4af552977372a1e39e2d2644d494f688c9ac8611a06c3707425cac29c4ca7f_prof);

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
        return array (  115 => 53,  109 => 52,  93 => 42,  88 => 40,  84 => 39,  80 => 38,  76 => 37,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="panel panel-default" ng-app="myApp" ng-controller="myCtrl">*/
/* */
/*         <form class="simple-form" name="myform">*/
/*             <div class="input-group" class="col-xs-8">*/
/*                 <div class="col-xs-10">*/
/*                     <input name="name" ng-model="con.name" class="form-control" type="text" placeholder="Artisanal kale" id="example-text-input" ng-click="hideMsg()" required>*/
/*                     <p ng-show="myform.name.$invalid && myform.name.$touched" style="color:red;">The name is required.</p>*/
/*                 </div>*/
/*                 <span class="input-group-btn">*/
/*                     <div class="form-group">*/
/*                         <button type="submit" ng-click="update(con)" class="btn btn-primary" ng-disabled="myform.$invalid">Add Item</button>*/
/*                     </div>*/
/*                 </span>*/
/*                 <div class="col-md-2"></div>*/
/* */
/*             </div>*/
/* */
/* */
/*         </form>*/
/* */
/* */
/*         <table class="table">*/
/*             <thead>*/
/*             <tr>*/
/*                 <th>ID</th>*/
/*                 <th>Item Name</th>*/
/*                 <th>State</th>*/
/*                 <th>Priority</th>*/
/*             </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*                 <tr ng-repeat="item in items">*/
/* */
/*                     <td>{{ '{{ item.id }}' }}</td>*/
/*                     <td>{{ '{{ item.name }}' }}</td>*/
/*                     <td>{{ '{{ item.state }}' }}</td>*/
/*                     <td>{{ '{{ item.priority }}' }}</td>*/
/*                     <td><input type="button" ng-click="delete(contact.id)" value="Delete"></td>*/
/*                     <td><a href="http://localhost:8000/edit/{{ '{{ contact.id }}' }}" ng-click="getContact(contact.id)" class="btn" >Edit</a></td>*/
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
