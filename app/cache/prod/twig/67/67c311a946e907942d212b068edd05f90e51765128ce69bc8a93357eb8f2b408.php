<?php

/* TopxiaWebBundle:CourseStudentManage:tr.html.twig */
class __TwigTemplate_1a66a8fe8d0b84e21c9c3a7946439e7fbdcf4cbe5d3d21c4ea63d57f4ee8ac04 extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:CourseStudentManage:tr.html.twig", 1);
        // line 2
        echo "<tr id=\"student-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "html", null, true);
        echo "-tr\">
  <td class=\"media\" style=\"vertical-align: middle;\">
    ";
        // line 4
        echo $context["web_macro"]->getuser_avatar((isset($context["user"]) ? $context["user"] : null), "pull-left", "avatar-sm");
        echo "
    <a target=\"_blank\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nickname", array()), "html", null, true);
        echo "</a>
    ";
        // line 6
        if ($this->getAttribute((isset($context["student"]) ? $context["student"] : null), "remark", array())) {
            // line 7
            echo "      <span class=\"text-muted text-sm\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : null), "remark", array()), "html", null, true);
            echo "\">(";
            echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute((isset($context["student"]) ? $context["student"] : null), "remark", array()), 16);
            echo ")</span>
    ";
        }
        // line 9
        echo "    <div class=\"text-muted text-sm\">加入时间：";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : null), "createdTime", array()), "Y-n-d H:i"), "html", null, true);
        echo "</div>
    ";
        // line 10
        if ((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryDay", array()) > 0) && ($this->getAttribute((isset($context["student"]) ? $context["student"] : null), "deadline", array()) > 0))) {
            // line 11
            echo "      <div class=\"text-muted text-sm\">有效期至：";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : null), "deadline", array()), "Y-n-d H:i"), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->remainTimeFilter($this->getAttribute((isset($context["student"]) ? $context["student"] : null), "deadline", array())), "html", null, true);
            echo ")</div>
    ";
        }
        // line 13
        echo "  </td>

  <td style=\"vertical-align: middle;\">
    <div class=\"progress mvm\" title=\"已学";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["progress"]) ? $context["progress"] : null), "number", array()), "html", null, true);
        echo "课时\">
      <div class=\"progress-bar\" style=\"width: ";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["progress"]) ? $context["progress"] : null), "percent", array()), "html", null, true);
        echo "\">
      </div>
    </div>
  </td>

  <td style=\"vertical-align: middle;\">
    <div class=\"btn-group\">
      ";
        // line 24
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()) != $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))) {
            // line 25
            echo "        <button class=\"btn btn-default btn-sm\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("message_create", array("toId" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
            echo "\">发私信</button>
      ";
        }
        // line 27
        echo "      ";
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "isAdmin", array(), "method")) {
            // line 28
            echo "        <button class=\"btn btn-default btn-sm\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_students_show", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "userId" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
            echo "\">查看资料</button>
      ";
        } elseif ($this->env->getExtension('topxia_web_twig')->getSetting("course.buy_fill_userinfo")) {
            // line 30
            echo "        <button class=\"btn btn-default btn-sm\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_students_defined_show", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "userId" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
            echo "\">查看资料</button>
      ";
        }
        // line 32
        echo "      <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">管理
        <span class=\"caret\"></span>
      </a>
      <ul class=\"dropdown-menu pull-right\">
        <li><a class=\"\" href=\"\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_student_remark", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "userId" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "\">备注</a></li>
        ";
        // line 37
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()) != $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))) {
            // line 38
            echo "          <li>
            <a class=\"follow-student-btn\" href=\"javascript:;\" data-url=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_follow", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
            echo "\" ";
            if ((isset($context["isFollowing"]) ? $context["isFollowing"] : null)) {
                echo " style=\"display:none;\"";
            }
            echo ">关注</a>
              <a class=\"unfollow-student-btn\" href=\"javascript:;\" data-url=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_unfollow", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
            echo "\" ";
            if ( !(isset($context["isFollowing"]) ? $context["isFollowing"] : null)) {
                echo " style=\"display:none;\"";
            }
            echo ">已关注</a>
          </li>
        ";
        }
        // line 43
        echo "        ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "isAdmin", array(), "method") || (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "isTeacher", array(), "method") && ((isset($context["isTeacherAuthManageStudent"]) ? $context["isTeacherAuthManageStudent"] : null) == 1)) && ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "expiryDay", array()) > 0)))) {
            // line 44
            echo "          <li><a class=\"\" href=\"\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_set_expiryday", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "userId" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
            echo "\">增加有效期</a></li>
        ";
        }
        // line 46
        echo "
        ";
        // line 47
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "isAdmin", array(), "method") || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "isTeacher", array(), "method") && ((isset($context["isTeacherAuthManageStudent"]) ? $context["isTeacherAuthManageStudent"] : null) == 1)))) {
            // line 48
            echo "          <li><a class=\"student-remove\" href=\"javascript:;\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_student_remove", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "userId" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
            echo "\" data-user=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["default"]) ? $context["default"] : null), "user_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["default"]) ? $context["default"] : null), "user_name", array()), "学员")) : ("学员")), "html", null, true);
            echo "\">移除</a></li>
        ";
        }
        // line 50
        echo "      </ul>
    </div>
  </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseStudentManage:tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 50,  151 => 48,  149 => 47,  146 => 46,  140 => 44,  137 => 43,  127 => 40,  119 => 39,  116 => 38,  114 => 37,  110 => 36,  104 => 32,  98 => 30,  92 => 28,  89 => 27,  83 => 25,  81 => 24,  71 => 17,  67 => 16,  62 => 13,  54 => 11,  52 => 10,  47 => 9,  39 => 7,  37 => 6,  31 => 5,  27 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% import "TopxiaWebBundle::macro.html.twig" as web_macro %}*/
/* <tr id="student-{{ user.id }}-tr">*/
/*   <td class="media" style="vertical-align: middle;">*/
/*     {{ web_macro.user_avatar(user, 'pull-left', 'avatar-sm') }}*/
/*     <a target="_blank" href="{{ path('user_show', {id:user.id}) }}">{{ user.nickname }}</a>*/
/*     {% if student.remark %}*/
/*       <span class="text-muted text-sm" title="{{student.remark}}">({{ student.remark|plain_text(16) }})</span>*/
/*     {% endif %}*/
/*     <div class="text-muted text-sm">加入时间：{{ student.createdTime|date('Y-n-d H:i') }}</div>*/
/*     {% if course.expiryDay > 0 and student.deadline > 0 %}*/
/*       <div class="text-muted text-sm">有效期至：{{ student.deadline|date('Y-n-d H:i') }} ({{ student.deadline|remain_time }})</div>*/
/*     {% endif %}*/
/*   </td>*/
/* */
/*   <td style="vertical-align: middle;">*/
/*     <div class="progress mvm" title="已学{{ progress.number }}课时">*/
/*       <div class="progress-bar" style="width: {{ progress.percent }}">*/
/*       </div>*/
/*     </div>*/
/*   </td>*/
/* */
/*   <td style="vertical-align: middle;">*/
/*     <div class="btn-group">*/
/*       {% if app.user.id != user.id %}*/
/*         <button class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal" data-url="{{path('message_create', {toId:user.id})}}">发私信</button>*/
/*       {% endif %}*/
/*       {% if app.user.isAdmin() %}*/
/*         <button class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal" data-url="{{path('course_manage_students_show', {courseId:course.id, userId:user.id})}}">查看资料</button>*/
/*       {% elseif setting("course.buy_fill_userinfo") %}*/
/*         <button class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal" data-url="{{path('course_manage_students_defined_show', {courseId:course.id, userId:user.id}) }}">查看资料</button>*/
/*       {% endif %}*/
/*       <a href="#" type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">管理*/
/*         <span class="caret"></span>*/
/*       </a>*/
/*       <ul class="dropdown-menu pull-right">*/
/*         <li><a class="" href="" data-toggle="modal" data-target="#modal" data-url="{{path('course_manage_student_remark', {courseId:course.id, userId:user.id})}}">备注</a></li>*/
/*         {% if app.user.id != user.id %}*/
/*           <li>*/
/*             <a class="follow-student-btn" href="javascript:;" data-url="{{ path('user_follow', {id:user.id}) }}" {% if isFollowing %} style="display:none;"{% endif %}>关注</a>*/
/*               <a class="unfollow-student-btn" href="javascript:;" data-url="{{ path('user_unfollow', {id:user.id}) }}" {% if not isFollowing %} style="display:none;"{% endif %}>已关注</a>*/
/*           </li>*/
/*         {% endif %}*/
/*         {% if app.user.isAdmin() or  app.user.isTeacher() and  isTeacherAuthManageStudent == 1 and course.expiryDay > 0 %}*/
/*           <li><a class="" href="" data-toggle="modal" data-target="#modal" data-url="{{path('course_set_expiryday', {courseId:course.id, userId:user.id})}}">增加有效期</a></li>*/
/*         {% endif %}*/
/* */
/*         {% if app.user.isAdmin() or  app.user.isTeacher() and  isTeacherAuthManageStudent == 1 %}*/
/*           <li><a class="student-remove" href="javascript:;" data-url="{{path('course_manage_student_remove', {courseId:course.id, userId:user.id})}}" data-user="{{default.user_name|default('学员')}}">移除</a></li>*/
/*         {% endif %}*/
/*       </ul>*/
/*     </div>*/
/*   </td>*/
/* </tr>*/
