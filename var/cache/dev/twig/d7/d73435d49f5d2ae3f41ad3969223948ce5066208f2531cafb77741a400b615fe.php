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
        $__internal_6d1169c1afa6ca437ff98436e7dbf891e0e1bedfa7649f6fff3d9c1a59a6c3af = $this->env->getExtension("native_profiler");
        $__internal_6d1169c1afa6ca437ff98436e7dbf891e0e1bedfa7649f6fff3d9c1a59a6c3af->enter($__internal_6d1169c1afa6ca437ff98436e7dbf891e0e1bedfa7649f6fff3d9c1a59a6c3af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "todo/home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6d1169c1afa6ca437ff98436e7dbf891e0e1bedfa7649f6fff3d9c1a59a6c3af->leave($__internal_6d1169c1afa6ca437ff98436e7dbf891e0e1bedfa7649f6fff3d9c1a59a6c3af_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e4a91a8f448ad35c4bb85570a127f92392085e34c7016b7c8e71c23d99095ac5 = $this->env->getExtension("native_profiler");
        $__internal_e4a91a8f448ad35c4bb85570a127f92392085e34c7016b7c8e71c23d99095ac5->enter($__internal_e4a91a8f448ad35c4bb85570a127f92392085e34c7016b7c8e71c23d99095ac5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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


            </tbody>
        </table>
    </div>

";
        
        $__internal_e4a91a8f448ad35c4bb85570a127f92392085e34c7016b7c8e71c23d99095ac5->leave($__internal_e4a91a8f448ad35c4bb85570a127f92392085e34c7016b7c8e71c23d99095ac5_prof);

    }

    // line 43
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_15994474f73ca00fd5e9284893cff376bf34a740151588043eb97af2e4c98edc = $this->env->getExtension("native_profiler");
        $__internal_15994474f73ca00fd5e9284893cff376bf34a740151588043eb97af2e4c98edc->enter($__internal_15994474f73ca00fd5e9284893cff376bf34a740151588043eb97af2e4c98edc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 44
        echo "
";
        
        $__internal_15994474f73ca00fd5e9284893cff376bf34a740151588043eb97af2e4c98edc->leave($__internal_15994474f73ca00fd5e9284893cff376bf34a740151588043eb97af2e4c98edc_prof);

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
        return array (  91 => 44,  85 => 43,  41 => 4,  35 => 3,  11 => 1,);
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
/* */
/* */
/*             </tbody>*/
/*         </table>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* */
/* {% endblock %}*/
