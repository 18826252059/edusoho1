<?php

/* ClassroomBundle:ClassroomManage:tr.html.twig */
class __TwigTemplate_492fdda632bab74a9760ca792e5df7b12229beedbb46faa88a3f4f5faefbf62a extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "ClassroomBundle:ClassroomManage:tr.html.twig", 1);
        // line 2
        echo "<tr id=\"student-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "-tr\">
  <td class=\"media\" style=\"vertical-align: middle;\">
    ";
        // line 4
        echo $context["web_macro"]->getuser_avatar((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "pull-left", "avatar-sm");
        echo "
    <a target=\"_blank\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nickname", array()), "html", null, true);
        echo "</a>
    ";
        // line 6
        if ($this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "remark", array())) {
            // line 7
            echo "      <span class=\"text-muted text-sm\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "remark", array()), "html", null, true);
            echo "\">(";
            echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "remark", array()), 16);
            echo ")</span>
    ";
        }
        // line 9
        echo "    <div class=\"text-muted text-sm\">加入时间：";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : $this->getContext($context, "student")), "createdTime", array()), "Y-n-d H:i"), "html", null, true);
        echo "</div>
  </td>
  <td style=\"vertical-align: middle;\">
    ";
        // line 12
        if (((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == "student")) {
            // line 13
            echo "      <div class=\"progress mvm\" title=\"已学";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["progress"]) ? $context["progress"] : $this->getContext($context, "progress")), "number", array()), "html", null, true);
            echo "课程\">
        <div class=\"progress-bar\" style=\"width: ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["progress"]) ? $context["progress"] : $this->getContext($context, "progress")), "percent", array()), "html", null, true);
            echo "\" data-toggle=\"tooltip\" data-placement=\"right\" data-original-title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["progress"]) ? $context["progress"] : $this->getContext($context, "progress")), "percent", array()), "html", null, true);
            echo "\">
        </div>
      </div>
    ";
        }
        // line 18
        echo "  </td>
  <td style=\"vertical-align: middle;\">
    <div class=\"btn-group\">
      ";
        // line 21
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()) != $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))) {
            // line 22
            echo "        <button class=\"btn btn-default btn-sm\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("message_create", array("toId" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
            echo "\">发私信</button>
      ";
        }
        // line 24
        echo "      ";
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "isAdmin", array(), "method")) {
            // line 25
            echo "        <button class=\"btn btn-default btn-sm\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_students_show", array("courseId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()), "userId" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
            echo "\">查看资料</button>
      ";
        } elseif ($this->env->getExtension('topxia_web_twig')->getSetting("course.buy_fill_userinfo")) {
            // line 27
            echo "        <button class=\"btn btn-default btn-sm\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_students_defined_show", array("courseId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()), "userId" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
            echo "\">查看资料</button>
      ";
        }
        // line 29
        echo "      <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">管理
        <span class=\"caret\"></span>
      </a>
      <ul class=\"dropdown-menu pull-right\">
        <li><a class=\"\" href=\"\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_student_remark", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()), "userId" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">备注</a></li>
        <li><a class=\"student-remove\" href=\"javascript:;\" data-url=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_student_remove", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()), "userId" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\" data-user=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["default"]) ? $context["default"] : null), "user_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["default"]) ? $context["default"] : null), "user_name", array()), "学员")) : ("学员")), "html", null, true);
        echo "\">移除</a></li>
      </ul>
    </div>
  </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomManage:tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 34,  104 => 33,  98 => 29,  92 => 27,  86 => 25,  83 => 24,  77 => 22,  75 => 21,  70 => 18,  61 => 14,  56 => 13,  54 => 12,  47 => 9,  39 => 7,  37 => 6,  31 => 5,  27 => 4,  21 => 2,  19 => 1,);
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
/*   </td>*/
/*   <td style="vertical-align: middle;">*/
/*     {% if role == 'student' %}*/
/*       <div class="progress mvm" title="已学{{ progress.number }}课程">*/
/*         <div class="progress-bar" style="width: {{ progress.percent }}" data-toggle="tooltip" data-placement="right" data-original-title="{{ progress.percent }}">*/
/*         </div>*/
/*       </div>*/
/*     {% endif %}*/
/*   </td>*/
/*   <td style="vertical-align: middle;">*/
/*     <div class="btn-group">*/
/*       {% if app.user.id != user.id %}*/
/*         <button class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal" data-url="{{path('message_create', {toId:user.id})}}">发私信</button>*/
/*       {% endif %}*/
/*       {% if app.user.isAdmin() %}*/
/*         <button class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal" data-url="{{path('course_manage_students_show', {courseId:classroom.id, userId:user.id})}}">查看资料</button>*/
/*       {% elseif setting("course.buy_fill_userinfo") %}*/
/*         <button class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal" data-url="{{path('course_manage_students_defined_show', {courseId:classroom.id, userId:user.id}) }}">查看资料</button>*/
/*       {% endif %}*/
/*       <a href="#" type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">管理*/
/*         <span class="caret"></span>*/
/*       </a>*/
/*       <ul class="dropdown-menu pull-right">*/
/*         <li><a class="" href="" data-toggle="modal" data-target="#modal" data-url="{{path('classroom_manage_student_remark', {classroomId:classroom.id, userId:user.id})}}">备注</a></li>*/
/*         <li><a class="student-remove" href="javascript:;" data-url="{{path('classroom_manage_student_remove', {classroomId:classroom.id, userId:user.id})}}" data-user="{{default.user_name|default('学员')}}">移除</a></li>*/
/*       </ul>*/
/*     </div>*/
/*   </td>*/
/* </tr>*/
