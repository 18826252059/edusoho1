<?php

/* ClassroomBundle:Classroom/Teacher:item.html.twig */
class __TwigTemplate_91700fa08033b7c4415c1fb6c3857f1fb3a890a59ad6038c8c3fb23ea9ad79f2 extends Twig_Template
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
        echo "<div class=\"col-lg-4 col-md-6 col-sm-6\">
  <div class=\"teacher-item\">
    <div class=\"teacher-top\">
      <a class=\"teacher-img\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "id", array()))), "html", null, true);
        echo "\">
        <img class=\"avatar-lg\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "largeAvatar", array()), "avatar.png"), "html", null, true);
        echo "\" alt=\"\">
      </a>
      <div class=\"title\">
        <a class=\"link-dark\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "nickname", array()), "html", null, true);
        echo "</a>
        ";
        // line 9
        if (twig_in_filter("headTeacher", $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array()))) {
            // line 10
            echo "          <i class=\"es-icon es-icon-school color-primary\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"班主任\"></i>
        ";
        } elseif (twig_in_filter("teacher", $this->getAttribute(        // line 11
(isset($context["member"]) ? $context["member"] : null), "role", array()))) {
            // line 12
            echo "          <i class=\"es-icon es-icon-school color-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"教师\"></i>
        ";
        } elseif (twig_in_filter("assistant", $this->getAttribute(        // line 13
(isset($context["member"]) ? $context["member"] : null), "role", array()))) {
            // line 14
            echo "          <i class=\"es-icon es-icon-school color-info\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"助教\"></i>
        ";
        }
        // line 16
        echo "
      </div>
      <div class=\"position\">
        ";
        // line 19
        if ($this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "title", array())) {
            // line 20
            echo "          ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "title", array()), "html", null, true);
            echo "
        ";
        } else {
            // line 22
            echo "          暂无头衔
        ";
        }
        // line 24
        echo "      </div>
    </div>
    <div class=\"teacher-bottom\">
      <div class=\"about\">
        ";
        // line 28
        if ($this->getAttribute($this->getAttribute((isset($context["profiles"]) ? $context["profiles"] : null), $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "id", array()), array(), "array"), "about", array())) {
            // line 29
            echo "          ";
            echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($this->getAttribute((isset($context["profiles"]) ? $context["profiles"] : null), $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "id", array()), array(), "array"), "about", array()), 30);
            echo "
        ";
        } else {
            // line 31
            echo "          暂无简介
        ";
        }
        // line 33
        echo "      </div>
      <div class=\"metas\">
        ";
        // line 35
        if (( !$this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) || ($this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "id", array()) != $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array())))) {
            // line 36
            echo "          <a class=\"btn btn-primary btn-sm follow-btn\" href=\"javascript:;\" data-url=\"";
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
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_unfollow", array("id" => $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "id", array()))), "html", null, true);
            echo "\" ";
            if ( !(isset($context["isFollowed"]) ? $context["isFollowed"] : null)) {
                echo " style=\"display:none;\" ";
            }
            echo ">已关注</a>
          <a class=\"btn btn-default btn-sm text-center\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("message_create", array("toId" => $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "id", array()))), "html", null, true);
            echo "\">私信</a>
        ";
        }
        // line 40
        echo "      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom/Teacher:item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 40,  120 => 38,  112 => 37,  97 => 36,  95 => 35,  91 => 33,  87 => 31,  81 => 29,  79 => 28,  73 => 24,  69 => 22,  63 => 20,  61 => 19,  56 => 16,  52 => 14,  50 => 13,  47 => 12,  45 => 11,  42 => 10,  40 => 9,  34 => 8,  28 => 5,  24 => 4,  19 => 1,);
    }
}
/* <div class="col-lg-4 col-md-6 col-sm-6">*/
/*   <div class="teacher-item">*/
/*     <div class="teacher-top">*/
/*       <a class="teacher-img" href="{{ path('user_show', {id:teacher.id}) }}">*/
/*         <img class="avatar-lg" src="{{ filepath(teacher.largeAvatar, 'avatar.png') }}" alt="">*/
/*       </a>*/
/*       <div class="title">*/
/*         <a class="link-dark" href="{{ path('user_show', {id:teacher.id}) }}">{{ teacher.nickname }}</a>*/
/*         {% if 'headTeacher' in member.role %}*/
/*           <i class="es-icon es-icon-school color-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="班主任"></i>*/
/*         {% elseif 'teacher' in member.role %}*/
/*           <i class="es-icon es-icon-school color-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="教师"></i>*/
/*         {% elseif 'assistant' in member.role %}*/
/*           <i class="es-icon es-icon-school color-info" data-toggle="tooltip" data-placement="top" title="" data-original-title="助教"></i>*/
/*         {% endif %}*/
/* */
/*       </div>*/
/*       <div class="position">*/
/*         {% if teacher.title %}*/
/*           {{ teacher.title }}*/
/*         {% else %}*/
/*           暂无头衔*/
/*         {% endif %}*/
/*       </div>*/
/*     </div>*/
/*     <div class="teacher-bottom">*/
/*       <div class="about">*/
/*         {% if profiles[teacher.id].about %}*/
/*           {{ profiles[teacher.id].about|plain_text(30) }}*/
/*         {% else %}*/
/*           暂无简介*/
/*         {% endif %}*/
/*       </div>*/
/*       <div class="metas">*/
/*         {% if not app.user or (teacher.id != app.user.id) %}*/
/*           <a class="btn btn-primary btn-sm follow-btn" href="javascript:;" data-url="{{ path('user_follow', {id:teacher.id}) }}" {% if isFollowed %} style="display:none;"{% endif %} data-loggedin={% if app.user and app.user.isLogin() %}"1"{% else %}"0"{% endif %}>关注</a>*/
/*           <a class="btn btn-default btn-sm unfollow-btn" href="javascript:;" data-url="{{ path('user_unfollow', {id:teacher.id}) }}" {% if not isFollowed %} style="display:none;" {% endif %}>已关注</a>*/
/*           <a class="btn btn-default btn-sm text-center" data-toggle="modal" data-target="#modal" data-url="{{path('message_create', {toId:teacher.id})}}">私信</a>*/
/*         {% endif %}*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
