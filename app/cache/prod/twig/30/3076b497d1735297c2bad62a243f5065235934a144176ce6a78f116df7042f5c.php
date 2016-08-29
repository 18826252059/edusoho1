<?php

/* TopxiaWebBundle:Group:group-header.html.twig */
class __TwigTemplate_5c24d4782cb8c53cb40cec61660c1cb7d3f4fe0da31722631cdfea12f912267d extends Twig_Template
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
        $context["groupNav"] = ((array_key_exists("groupNav", $context)) ? (_twig_default_filter((isset($context["groupNav"]) ? $context["groupNav"] : null), null)) : (null));
        echo " 
<ol class=\"breadcrumb breadcrumb-o\" style=\"margin-top:-18px\">
  <li><a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("homepage.name", "首页"), "html", null, true);
        echo "</a></li>
  <li><a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("group");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("group.name", "小组频道"), "html", null, true);
        echo "</a></li>
  <li><a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "title", array()), "html", null, true);
        echo "</a></li>
</ol>
<div class=\"group-header\" style=\"background:url(";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "backgroundLogo", array()), "background_group.jpg"), "html", null, true);
        echo ");background-repeat: no-repeat;background-size: 100% 100%;\">
  <div class=\"media\">
    <div class=\"media-left\">
      <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "id", array()))), "html", null, true);
        echo "\">
        <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "logo", array()), "group.png"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "title", array()), "html", null, true);
        echo "\" class=\"avatar-square-md\" >
      </a>
    </div>
    <div class=\"media-body\">
      <h2 class=\"media-heading\">
        ";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "title", array()), "html", null, true);
        echo "
        ";
        // line 17
        if (((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null) == 0)) {
            // line 18
            echo "          <a id=\"add-btn\" class=\"btn btn-success btn-sm mlm\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_join", array("id" => $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "id", array()))), "html", null, true);
            echo "\">加入小组</a>
        ";
        }
        // line 20
        echo "        ";
        if ((((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null) == 1) || ((isset($context["is_groupmember"]) ? $context["is_groupmember"] : null) == 3))) {
            // line 21
            echo "          <a id=\"exit-btn\" class=\"btn btn-default btn-sm mlm\"  href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_exit", array("id" => $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "id", array()))), "html", null, true);
            echo "\">退出小组</a>
        ";
        }
        // line 22
        echo " 

      </h2>
      <div class=\"media-metas\">
        ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "memberNum", array()), "html", null, true);
        echo "个成员
        <span class=\"mlm\">";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "threadNum", array()), "html", null, true);
        echo "个话题</span>
        <span class=\"fsn mlm\">创建时间：";
        // line 28
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "createdTime", array()), "Y-m-d"), "html", null, true);
        echo "</span>
      </div>
    </div>
  </div>
  <div class=\"image-overlay image-overlay-o\"></div>
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Group:group-header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 28,  94 => 27,  90 => 26,  84 => 22,  78 => 21,  75 => 20,  69 => 18,  67 => 17,  63 => 16,  53 => 11,  49 => 10,  43 => 7,  36 => 5,  30 => 4,  24 => 3,  19 => 1,);
    }
}
/* {% set groupNav = groupNav|default(null) %} */
/* <ol class="breadcrumb breadcrumb-o" style="margin-top:-18px">*/
/*   <li><a href="{{path('homepage')}}">{{ setting('homepage.name', '首页') }}</a></li>*/
/*   <li><a href="{{path('group')}}">{{ setting('group.name', '小组频道') }}</a></li>*/
/*   <li><a href="{{path('group_show',{id:groupinfo.id})}}">{{groupinfo.title}}</a></li>*/
/* </ol>*/
/* <div class="group-header" style="background:url({{filepath(groupinfo.backgroundLogo, 'background_group.jpg')}});background-repeat: no-repeat;background-size: 100% 100%;">*/
/*   <div class="media">*/
/*     <div class="media-left">*/
/*       <a href="{{path('group_show',{id:groupinfo.id})}}">*/
/*         <img src="{{filepath(groupinfo.logo, 'group.png')}}" alt="{{groupinfo.title}}" class="avatar-square-md" >*/
/*       </a>*/
/*     </div>*/
/*     <div class="media-body">*/
/*       <h2 class="media-heading">*/
/*         {{groupinfo.title}}*/
/*         {% if is_groupmember == 0 %}*/
/*           <a id="add-btn" class="btn btn-success btn-sm mlm" href="{{path('group_join',{id:groupinfo.id})}}">加入小组</a>*/
/*         {% endif %}*/
/*         {% if is_groupmember == 1 or is_groupmember == 3 %}*/
/*           <a id="exit-btn" class="btn btn-default btn-sm mlm"  href="{{path('group_exit',{id:groupinfo.id})}}">退出小组</a>*/
/*         {% endif %} */
/* */
/*       </h2>*/
/*       <div class="media-metas">*/
/*         {{ groupinfo.memberNum }}个成员*/
/*         <span class="mlm">{{groupinfo.threadNum}}个话题</span>*/
/*         <span class="fsn mlm">创建时间：{{groupinfo.createdTime|date('Y-m-d')}}</span>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   <div class="image-overlay image-overlay-o"></div>*/
/* </div>*/
/* */
/* */
