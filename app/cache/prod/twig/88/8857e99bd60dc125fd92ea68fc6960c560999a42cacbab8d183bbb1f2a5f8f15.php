<?php

/* TopxiaWebBundle:Group:group-member-join.html.twig */
class __TwigTemplate_737621660e30ed6fb0f3a5eba60a10e38d27ab0ea8497b7e9e06143c68237d86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:My:layout.html.twig", "TopxiaWebBundle:Group:group-member-join.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:My:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["tab_nav"] = "join";
        // line 5
        $context["side_nav"] = "my-group";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "我的小组 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "  ";
        $this->loadTemplate("TopxiaWebBundle:Group:group-member-join.html.twig", "TopxiaWebBundle:Group:group-member-join.html.twig", 7, "1225190154")->display(array_merge($context, array("class" => "panel-col")));
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Group:group-member-join.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 7,  41 => 6,  34 => 3,  30 => 1,  28 => 5,  26 => 4,  11 => 1,);
    }
}


/* TopxiaWebBundle:Group:group-member-join.html.twig */
class __TwigTemplate_737621660e30ed6fb0f3a5eba60a10e38d27ab0ea8497b7e9e06143c68237d86_1225190154 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("TopxiaWebBundle:Bootstrap:panel.html.twig", "TopxiaWebBundle:Group:group-member-join.html.twig", 7);
        $this->blocks = array(
            'heading' => array($this, 'block_heading'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Bootstrap:panel.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_heading($context, array $blocks = array())
    {
        echo " 
    我的小组
       ";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "      <div class=\"row\">
        <div class=\"col-md-12\">
          ";
        // line 14
        $this->loadTemplate("TopxiaWebBundle:Group:group-member-nav-pill.html.twig", "TopxiaWebBundle:Group:group-member-join.html.twig", 14)->display($context);
        // line 15
        echo "          ";
        if ((isset($context["adminGroups"]) ? $context["adminGroups"] : null)) {
            // line 16
            echo "          <div class=\"page-header\">
            <h4> 我管理的小组</h4>
          </div>
          ";
            // line 19
            $this->loadTemplate("TopxiaWebBundle:Group:groups-ul.html.twig", "TopxiaWebBundle:Group:group-member-join.html.twig", 19)->display(array_merge($context, array("groups" =>             // line 20
(isset($context["adminGroups"]) ? $context["adminGroups"] : null))));
            // line 22
            echo "          ";
        }
        // line 23
        echo "        </div>
        <div class=\"col-md-12\">
          <div class=\"page-header\">
            <h4> 我加入的小组</h4>
          </div>
          ";
        // line 28
        $this->loadTemplate("TopxiaWebBundle:Group:groups-ul.html.twig", "TopxiaWebBundle:Group:group-member-join.html.twig", 28)->display(array_merge($context, array("groups" =>         // line 29
(isset($context["groups"]) ? $context["groups"] : null))));
        // line 31
        echo "          
        </div>
        <div class=\"col-md-12 pull-left\">
          ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
        </div>
      </div>
    ";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Group:group-member-join.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 34,  131 => 31,  129 => 29,  128 => 28,  121 => 23,  118 => 22,  116 => 20,  115 => 19,  110 => 16,  107 => 15,  105 => 14,  101 => 12,  98 => 11,  90 => 8,  44 => 7,  41 => 6,  34 => 3,  30 => 1,  28 => 5,  26 => 4,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:My:layout.html.twig' %}*/
/* */
/* {% block title %}我的小组 - {{ parent() }}{% endblock %}*/
/* {% set tab_nav = 'join' %}*/
/* {% set side_nav = 'my-group' %}*/
/* {% block main %}*/
/*   {% embed "TopxiaWebBundle:Bootstrap:panel.html.twig" with {class:'panel-col'} %}*/
/*   {% block heading %} */
/*     我的小组*/
/*        {% endblock %}*/
/*     {% block body %}*/
/*       <div class="row">*/
/*         <div class="col-md-12">*/
/*           {% include 'TopxiaWebBundle:Group:group-member-nav-pill.html.twig' %}*/
/*           {% if adminGroups %}*/
/*           <div class="page-header">*/
/*             <h4> 我管理的小组</h4>*/
/*           </div>*/
/*           {% include 'TopxiaWebBundle:Group:groups-ul.html.twig' with {*/
/*           'groups':adminGroups,  }*/
/*           %}*/
/*           {% endif %}*/
/*         </div>*/
/*         <div class="col-md-12">*/
/*           <div class="page-header">*/
/*             <h4> 我加入的小组</h4>*/
/*           </div>*/
/*           {% include 'TopxiaWebBundle:Group:groups-ul.html.twig' with {*/
/*           'groups':groups,  }*/
/*           %}*/
/*           */
/*         </div>*/
/*         <div class="col-md-12 pull-left">*/
/*           {{ web_macro.paginator(paginator) }}*/
/*         </div>*/
/*       </div>*/
/*     {% endblock %}*/
/*   {% endembed %}*/
/* {% endblock %}*/
