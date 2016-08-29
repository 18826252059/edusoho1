<?php

/* TopxiaWebBundle:Group:join.html.twig */
class __TwigTemplate_57407aa3f9e38f28755f980c182236ee52195781051046b52cb02438ee92a244 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Group:join.html.twig", 1);
        // line 2
        echo "<div class=\"row\">
<div class=\"col-md-12\"> 
  <div class=\"page-header\">
    <h4> 管理的小组</h4>
  </div>
  ";
        // line 7
        $this->loadTemplate("TopxiaWebBundle:Group:groups-ul.html.twig", "TopxiaWebBundle:Group:join.html.twig", 7)->display(array_merge($context, array("groups" =>         // line 8
(isset($context["adminGroups"]) ? $context["adminGroups"] : null))));
        // line 10
        echo "  
</div>
<div class=\"col-md-12\">
  <div class=\"page-header\">
    <h4> 加入的小组</h4>
  </div>
  ";
        // line 16
        $this->loadTemplate("TopxiaWebBundle:Group:groups-ul.html.twig", "TopxiaWebBundle:Group:join.html.twig", 16)->display(array_merge($context, array("groups" =>         // line 17
(isset($context["groups"]) ? $context["groups"] : null))));
        // line 19
        echo "  
</div>
<div class=\"col-md-12 pull-left\">
";
        // line 22
        echo $context["web_macro"]->getpaginator((isset($context["paginator"]) ? $context["paginator"] : null));
        echo " 
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Group:join.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 22,  42 => 19,  40 => 17,  39 => 16,  31 => 10,  29 => 8,  28 => 7,  21 => 2,  19 => 1,);
    }
}
/* {% import "TopxiaWebBundle::macro.html.twig" as web_macro %}*/
/* <div class="row">*/
/* <div class="col-md-12"> */
/*   <div class="page-header">*/
/*     <h4> 管理的小组</h4>*/
/*   </div>*/
/*   {% include 'TopxiaWebBundle:Group:groups-ul.html.twig' with {*/
/*   'groups':adminGroups,  }*/
/*   %}*/
/*   */
/* </div>*/
/* <div class="col-md-12">*/
/*   <div class="page-header">*/
/*     <h4> 加入的小组</h4>*/
/*   </div>*/
/*   {% include 'TopxiaWebBundle:Group:groups-ul.html.twig' with {*/
/*   'groups':groups,  }*/
/*   %}*/
/*   */
/* </div>*/
/* <div class="col-md-12 pull-left">*/
/* {{ web_macro.paginator(paginator) }} */
/* </div>*/
/* </div>*/
