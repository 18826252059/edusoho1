<?php

/* TopxiaWebBundle:Group:group-member-nav-pill.html.twig */
class __TwigTemplate_3df6c5d7f6a5e1c0b39de8d738b363ce66ee158dd39ee5c8883e57e914ca44c3 extends Twig_Template
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
        echo "\t <ul class=\"nav nav-pills\">
      <li ";
        // line 2
        if (((isset($context["tab_nav"]) ? $context["tab_nav"] : null) == "index")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("group_member_center");
        echo "\">小组主页</a></li>
      <li ";
        // line 3
        if (((isset($context["tab_nav"]) ? $context["tab_nav"] : null) == "join")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("group_member_join");
        echo "\">加入的小组</a></li>
      <li ";
        // line 4
        if (((isset($context["tab_nav"]) ? $context["tab_nav"] : null) == "thread")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("group_member_threads");
        echo "\">发起的话题</a></li>
      <li ";
        // line 5
        if (((isset($context["tab_nav"]) ? $context["tab_nav"] : null) == "post")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("group_member_posts");
        echo "\">回复的话题</a></li>
       <li ";
        // line 6
        if (((isset($context["tab_nav"]) ? $context["tab_nav"] : null) == "collect")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("group_thread_collecting");
        echo "\">收藏的话题</a></li>
    </ul>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Group:group-member-nav-pill.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 6,  46 => 5,  38 => 4,  30 => 3,  22 => 2,  19 => 1,);
    }
}
/* 	 <ul class="nav nav-pills">*/
/*       <li {% if tab_nav == 'index' %} class="active"{% endif %}><a href="{{path('group_member_center')}}">小组主页</a></li>*/
/*       <li {% if tab_nav == 'join' %} class="active"{% endif %}><a href="{{path('group_member_join')}}">加入的小组</a></li>*/
/*       <li {% if tab_nav == 'thread' %} class="active"{% endif %}><a href="{{path('group_member_threads')}}">发起的话题</a></li>*/
/*       <li {% if tab_nav == 'post' %} class="active"{% endif %}><a href="{{path('group_member_posts')}}">回复的话题</a></li>*/
/*        <li {% if tab_nav == 'collect' %} class="active"{% endif %}><a href="{{path('group_thread_collecting')}}">收藏的话题</a></li>*/
/*     </ul>*/
