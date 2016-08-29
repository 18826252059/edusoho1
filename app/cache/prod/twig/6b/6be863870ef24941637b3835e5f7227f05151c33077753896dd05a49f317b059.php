<?php

/* TopxiaWebBundle:Group:group-member-threads.html.twig */
class __TwigTemplate_a2822b786cc6f30c33911e966f4b34b9d1284971968adaa8d1de8b2d996a2838 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:My:layout.html.twig", "TopxiaWebBundle:Group:group-member-threads.html.twig", 1);
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
        $context["tab_nav"] = "thread";
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
        $this->loadTemplate("TopxiaWebBundle:Group:group-member-threads.html.twig", "TopxiaWebBundle:Group:group-member-threads.html.twig", 7, "1294801474")->display(array_merge($context, array("class" => "panel-col")));
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Group:group-member-threads.html.twig";
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


/* TopxiaWebBundle:Group:group-member-threads.html.twig */
class __TwigTemplate_a2822b786cc6f30c33911e966f4b34b9d1284971968adaa8d1de8b2d996a2838_1294801474 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("TopxiaWebBundle:Bootstrap:panel.html.twig", "TopxiaWebBundle:Group:group-member-threads.html.twig", 7);
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
        // line 15
        $this->loadTemplate("TopxiaWebBundle:Group:group-member-nav-pill.html.twig", "TopxiaWebBundle:Group:group-member-threads.html.twig", 15)->display($context);
        // line 16
        echo "           <br>
          ";
        // line 17
        $this->loadTemplate("TopxiaWebBundle:Group:groups-threads-ul.html.twig", "TopxiaWebBundle:Group:group-member-threads.html.twig", 17)->display(array_merge($context, array("threads" =>         // line 18
(isset($context["threads"]) ? $context["threads"] : null), "groups" =>         // line 19
(isset($context["groups"]) ? $context["groups"] : null))));
        // line 21
        echo "        </div>
        <div class=\"col-md-12 pull-left\">
          ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
        </div>
      </div>
    ";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Group:group-member-threads.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 23,  115 => 21,  113 => 19,  112 => 18,  111 => 17,  108 => 16,  106 => 15,  101 => 12,  98 => 11,  90 => 8,  44 => 7,  41 => 6,  34 => 3,  30 => 1,  28 => 5,  26 => 4,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:My:layout.html.twig' %}*/
/* */
/* {% block title %}我的小组 - {{ parent() }}{% endblock %}*/
/* {% set tab_nav = 'thread' %}*/
/* {% set side_nav = 'my-group' %}*/
/* {% block main %}*/
/*   {% embed "TopxiaWebBundle:Bootstrap:panel.html.twig" with {class:'panel-col'} %}*/
/*   {% block heading %} */
/*     我的小组*/
/*        {% endblock %}*/
/*     {% block body %}*/
/*       <div class="row">*/
/*         */
/*         <div class="col-md-12">*/
/*           {% include 'TopxiaWebBundle:Group:group-member-nav-pill.html.twig' %}*/
/*            <br>*/
/*           {% include 'TopxiaWebBundle:Group:groups-threads-ul.html.twig' with {*/
/*           'threads':threads,*/
/*           'groups':groups, }*/
/*           %}*/
/*         </div>*/
/*         <div class="col-md-12 pull-left">*/
/*           {{ web_macro.paginator(paginator) }}*/
/*         </div>*/
/*       </div>*/
/*     {% endblock %}*/
/*   {% endembed %}*/
/* {% endblock %}*/
