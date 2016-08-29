<?php

/* TopxiaWebBundle:Search:search-teacher-item.html.twig */
class __TwigTemplate_b3fc56891da3c096fe472d534085bdad3fd9f518d4ef032b06174764dd523658 extends Twig_Template
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
        echo "<div class=\"teacher-item\">
  <div class=\"teacher-top\">
    <a class=\"teacher-img\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "id", array()))), "html", null, true);
        echo "\">
      <img class=\"avatar-lg\" src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "largeAvatar", array()), "avatar.png"), "html", null, true);
        echo "\" alt=\"\">
    </a>
    <h3 class=\"title\">
      <a class=\"link-dark\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "id", array()))), "html", null, true);
        echo "\">";
        echo $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "nickname", array());
        echo "</a>
    </h3>
    <div class=\"position\">
      ";
        // line 10
        if ($this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "title", array())) {
            // line 11
            echo "        ";
            echo $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "title", array());
            echo "
      ";
        } else {
            // line 13
            echo "        暂无头衔
      ";
        }
        // line 15
        echo "    </div>
  </div>
  <div class=\"teacher-bottom\">
    <div class=\"about\">
      ";
        // line 19
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "about", array())) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "about", array()), 30);
            echo "
      ";
        } else {
            // line 22
            echo "        暂无简介
      ";
        }
        // line 24
        echo "    </div>
    <div class=\"metas\">
      ";
        // line 26
        if (( !$this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) || ($this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "id", array()) != $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array())))) {
            // line 27
            echo "        <a class=\"btn btn-primary btn-sm follow-btn\" href=\"javascript:;\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_follow", array("id" => $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "id", array()))), "html", null, true);
            echo "\" ";
            if ((isset($context["isFollowed"]) ? $context["isFollowed"] : null)) {
                echo " style=\"display:none;\"";
            }
            echo " data-loggedin=";
            if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "isLogin", array(), "method"))) {
                echo "\"1\"";
            } else {
                echo "\"0\"";
            }
            echo ">关注</a>
        <a class=\"btn btn-default btn-sm unfollow-btn\" href=\"javascript:;\" data-url=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_unfollow", array("id" => $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "id", array()))), "html", null, true);
            echo "\" ";
            if ( !(isset($context["isFollowed"]) ? $context["isFollowed"] : null)) {
                echo " style=\"display:none;\" ";
            }
            echo ">已关注</a>
        <a class=\"btn btn-default btn-sm\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("message_create", array("toId" => $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "id", array()))), "html", null, true);
            echo "\">私信</a>
      ";
        }
        // line 31
        echo "    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Search:search-teacher-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 31,  100 => 29,  92 => 28,  77 => 27,  75 => 26,  71 => 24,  67 => 22,  61 => 20,  59 => 19,  53 => 15,  49 => 13,  43 => 11,  41 => 10,  33 => 7,  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div class="teacher-item">*/
/*   <div class="teacher-top">*/
/*     <a class="teacher-img" href="{{ path('user_show', {id:teacher.id}) }}">*/
/*       <img class="avatar-lg" src="{{ filepath(teacher.largeAvatar, 'avatar.png') }}" alt="">*/
/*     </a>*/
/*     <h3 class="title">*/
/*       <a class="link-dark" href="{{ path('user_show', {id:teacher.id}) }}">{{ teacher.nickname|raw }}</a>*/
/*     </h3>*/
/*     <div class="position">*/
/*       {% if teacher.title %}*/
/*         {{ teacher.title|raw }}*/
/*       {% else %}*/
/*         暂无头衔*/
/*       {% endif %}*/
/*     </div>*/
/*   </div>*/
/*   <div class="teacher-bottom">*/
/*     <div class="about">*/
/*       {% if profile.about %}*/
/*         {{ profile.about|plain_text(30) }}*/
/*       {% else %}*/
/*         暂无简介*/
/*       {% endif %}*/
/*     </div>*/
/*     <div class="metas">*/
/*       {% if not app.user or (teacher.id != app.user.id) %}*/
/*         <a class="btn btn-primary btn-sm follow-btn" href="javascript:;" data-url="{{ path('user_follow', {id:teacher.id}) }}" {% if isFollowed %} style="display:none;"{% endif %} data-loggedin={% if app.user and app.user.isLogin() %}"1"{% else %}"0"{% endif %}>关注</a>*/
/*         <a class="btn btn-default btn-sm unfollow-btn" href="javascript:;" data-url="{{ path('user_unfollow', {id:teacher.id}) }}" {% if not isFollowed %} style="display:none;" {% endif %}>已关注</a>*/
/*         <a class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal" data-url="{{path('message_create', {toId:teacher.id})}}">私信</a>*/
/*       {% endif %}*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
