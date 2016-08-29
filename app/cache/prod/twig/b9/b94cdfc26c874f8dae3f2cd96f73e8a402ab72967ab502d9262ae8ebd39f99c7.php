<?php

/* TopxiaWebBundle:Announcement:announcement-modal-layout.html.twig */
class __TwigTemplate_a7659aa744ca9f4e8da19b2af5801aa63dacfeeb5e59ea1246a1fcaead2884e2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:Announcement:announcement-modal-layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "公告管理
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "<ul class=\"nav nav-tabs mbm\">
\t<li ";
        // line 9
        if (((isset($context["tab"]) ? $context["tab"] : null) == "manage")) {
            echo "class=\"active\"";
        }
        echo ">
\t\t<a href=\"javascript:;\" data-role=\"announcement-modal\" data-url=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("announcement_add", array("targetType" => (isset($context["targetType"]) ? $context["targetType"] : null), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : null))), "html", null, true);
        echo "\">";
        if ((($this->getAttribute((isset($context["announcement"]) ? $context["announcement"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["announcement"]) ? $context["announcement"] : null), "id", array()), null)) : (null))) {
            echo "编辑";
        } else {
            echo "添加";
        }
        echo "公告</a>
\t</li>
\t<li ";
        // line 12
        if (((isset($context["tab"]) ? $context["tab"] : null) == "list")) {
            echo "class=\"active\"";
        }
        echo ">
\t\t<a href=\"javascript:;\" data-role=\"announcement-modal\" data-url=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("announcement_list", array("targetType" => (isset($context["targetType"]) ? $context["targetType"] : null), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : null))), "html", null, true);
        echo "\">历史公告</a>
\t</li>
</ul>
";
        // line 16
        $this->displayBlock('content', $context, $blocks);
        // line 17
        echo "
";
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Announcement:announcement-modal-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 16,  75 => 17,  73 => 16,  67 => 13,  61 => 12,  50 => 10,  44 => 9,  41 => 8,  38 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% block title %}*/
/* 公告管理*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* <ul class="nav nav-tabs mbm">*/
/* 	<li {% if tab == "manage" %}class="active"{% endif %}>*/
/* 		<a href="javascript:;" data-role="announcement-modal" data-url="{{path('announcement_add',{targetType:targetType, targetId:targetId})}}">{% if announcement.id|default(null) %}编辑{% else %}添加{% endif %}公告</a>*/
/* 	</li>*/
/* 	<li {% if tab == "list" %}class="active"{% endif %}>*/
/* 		<a href="javascript:;" data-role="announcement-modal" data-url="{{path('announcement_list',{targetType:targetType, targetId:targetId})}}">历史公告</a>*/
/* 	</li>*/
/* </ul>*/
/* {% block content %}{% endblock %}*/
/* */
/* {% endblock %}*/
