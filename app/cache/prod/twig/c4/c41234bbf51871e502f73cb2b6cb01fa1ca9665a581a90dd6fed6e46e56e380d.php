<?php

/* TopxiaWebBundle:Group:layout.html.twig */
class __TwigTemplate_613f797d06dfebc626feabcfa2a4b7efa305447b62e213e0bc514b0801ea89d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Group:layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'group_body' => array($this, 'block_group_body'),
            'group_main' => array($this, 'block_group_main'),
            'group_side' => array($this, 'block_group_side'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["bodyClass"] = "group-page";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "- ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "   ";
        $this->loadTemplate("TopxiaWebBundle:Group:group-header.html.twig", "TopxiaWebBundle:Group:layout.html.twig", 5)->display(array_merge($context, array("groupinfo" => (isset($context["groupinfo"]) ? $context["groupinfo"] : null), "is_groupmember" => ((array_key_exists("is_groupmember", $context)) ? (_twig_default_filter((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null), "")) : ("")))));
        // line 6
        echo "  
  ";
        // line 7
        $this->displayBlock('group_body', $context, $blocks);
    }

    public function block_group_body($context, array $blocks = array())
    {
        // line 8
        echo "    <div class=\"row\">
      <div class=\"col-md-9 group-main\">
        ";
        // line 10
        $this->displayBlock('group_main', $context, $blocks);
        // line 11
        echo "      </div>

      <div class=\"col-md-3 group-side\">
        ";
        // line 14
        $this->displayBlock('group_side', $context, $blocks);
        // line 15
        echo "      </div>
    </div>
  ";
    }

    // line 10
    public function block_group_main($context, array $blocks = array())
    {
    }

    // line 14
    public function block_group_side($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Group:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 14,  76 => 10,  70 => 15,  68 => 14,  63 => 11,  61 => 10,  57 => 8,  51 => 7,  48 => 6,  45 => 5,  42 => 4,  35 => 2,  31 => 1,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::layout.html.twig' %}*/
/* {% block title %}- {{ parent() }}{% endblock %}*/
/* {% set bodyClass = 'group-page' %}*/
/* {% block content %}*/
/*    {% include 'TopxiaWebBundle:Group:group-header.html.twig' with {'groupinfo':groupinfo,'is_groupmember':is_groupmember|default('')} %}*/
/*   */
/*   {% block group_body %}*/
/*     <div class="row">*/
/*       <div class="col-md-9 group-main">*/
/*         {% block group_main %}{% endblock %}*/
/*       </div>*/
/* */
/*       <div class="col-md-3 group-side">*/
/*         {% block group_side %}{% endblock %}*/
/*       </div>*/
/*     </div>*/
/*   {% endblock %}*/
/* {% endblock %}*/
