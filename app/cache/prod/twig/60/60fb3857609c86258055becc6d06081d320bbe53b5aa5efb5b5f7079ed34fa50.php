<?php

/* TopxiaWebBundle:Group:setting-layout.html.twig */
class __TwigTemplate_fc7517bd6b607d0d50fefb58d502e3f8a9bf54c340172bde9bfc974cbe1c9d19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Group:layout.html.twig", "TopxiaWebBundle:Group:setting-layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'group_body' => array($this, 'block_group_body'),
            'group_setting_body' => array($this, 'block_group_setting_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Group:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["settingNav"] = ((array_key_exists("settingNav", $context)) ? (_twig_default_filter((isset($context["settingNav"]) ? $context["settingNav"] : null), null)) : (null));
        // line 7
        $context["groupNav"] = "setting";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "小组设置 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_group_body($context, array $blocks = array())
    {
        // line 10
        echo "
<div class=\"panel panel-default\">
  <div class=\"panel-body\">
    <ul class=\"nav nav-tabs\">
      <li ";
        // line 14
        if (((isset($context["groupNav"]) ? $context["groupNav"] : null) == "index")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "id", array()))), "html", null, true);
        echo "\">小组首页</a></li>
      <li ";
        // line 15
        if (((isset($context["groupNav"]) ? $context["groupNav"] : null) == "member")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_member", array("id" => $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "id", array()))), "html", null, true);
        echo "\">小组成员</a></li>
      ";
        // line 16
        if (((((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null) == 2) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN")) || ((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null) == 3))) {
            // line 17
            echo "        <li ";
            if (((isset($context["groupNav"]) ? $context["groupNav"] : null) == "setting")) {
                echo "class=\"active\" ";
            }
            echo "><a  href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_set", array("id" => $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "id", array()))), "html", null, true);
            echo "\">小组设置</a></li>
      ";
        }
        // line 19
        echo "    </ul>
    <ul class=\"nav nav-pills nav-pills-sm mbl\">
      <li  ";
        // line 21
        if (((isset($context["settingNav"]) ? $context["settingNav"] : null) == "info")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_set", array("id" => $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "id", array()))), "html", null, true);
        echo "\">编辑小组 </a></li>
      <li ";
        // line 22
        if (((isset($context["settingNav"]) ? $context["settingNav"] : null) == "logo")) {
            echo "class=\"active\"";
        }
        echo "> <a  href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_logo_set", array("id" => $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "id", array()))), "html", null, true);
        echo "\">图标设置</a></li>
      <li ";
        // line 23
        if (((isset($context["settingNav"]) ? $context["settingNav"] : null) == "background")) {
            echo "class=\"active\"";
        }
        echo ">  <a  href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_backgroundlogo_set", array("id" => $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "id", array()))), "html", null, true);
        echo "\">背景设置</a></li>
    </ul>
    ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "
    ";
        // line 26
        $this->displayBlock('group_setting_body', $context, $blocks);
        // line 27
        echo "  </div>
</div>

";
    }

    // line 26
    public function block_group_setting_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Group:setting-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 26,  114 => 27,  112 => 26,  108 => 25,  99 => 23,  91 => 22,  83 => 21,  79 => 19,  69 => 17,  67 => 16,  59 => 15,  51 => 14,  45 => 10,  42 => 9,  35 => 3,  31 => 1,  29 => 7,  27 => 5,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:Group:layout.html.twig' %}*/
/* */
/* {% block title %}小组设置 - {{ parent() }}{% endblock %}*/
/* */
/* {% set settingNav = settingNav|default(null) %}*/
/* */
/* {% set groupNav = 'setting' %}*/
/* */
/* {% block group_body %}*/
/* */
/* <div class="panel panel-default">*/
/*   <div class="panel-body">*/
/*     <ul class="nav nav-tabs">*/
/*       <li {% if groupNav=="index" %}class="active"{% endif %}><a href="{{path('group_show',{id:groupinfo.id})}}">小组首页</a></li>*/
/*       <li {% if groupNav=="member" %}class="active"{% endif %}><a href="{{path('group_member',{id:groupinfo.id})}}">小组成员</a></li>*/
/*       {% if is_groupmember==2 or is_granted('ROLE_ADMIN') or is_groupmember==3%}*/
/*         <li {% if groupNav=="setting" %}class="active" {% endif %}><a  href="{{path('group_set',{id:groupinfo.id})}}">小组设置</a></li>*/
/*       {% endif %}*/
/*     </ul>*/
/*     <ul class="nav nav-pills nav-pills-sm mbl">*/
/*       <li  {% if settingNav == 'info' %}class="active"{% endif %}><a href="{{path('group_set',{id:groupinfo.id})}}">编辑小组 </a></li>*/
/*       <li {% if settingNav == 'logo' %}class="active"{% endif %}> <a  href="{{path('group_logo_set',{id:groupinfo.id})}}">图标设置</a></li>*/
/*       <li {% if settingNav == 'background' %}class="active"{% endif %}>  <a  href="{{path('group_backgroundlogo_set',{id:groupinfo.id})}}">背景设置</a></li>*/
/*     </ul>*/
/*     {{ web_macro.flash_messages() }}*/
/*     {% block group_setting_body %}{% endblock %}*/
/*   </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
