<?php

/* TopxiaAdminBundle:Course:tr.html.twig */
class __TwigTemplate_d216416024ccf95ef2fb6593039775bbc0a7aba8445a372dfca2f94943b099f1 extends Twig_Template
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
        $context["admin_macro"] = $this->loadTemplate("TopxiaAdminBundle::macro.html.twig", "TopxiaAdminBundle:Course:tr.html.twig", 1);
        // line 2
        $context["target"] = "normal_index";
        // line 3
        echo "<tr id=\"course-tr-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "html", null, true);
        echo "\">
  <td>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "html", null, true);
        echo "</td>
  <td>
    <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\" target=\"_blank\"><strong>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "title", array()), "html", null, true);
        echo "</strong></a>
    
    ";
        // line 8
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "type", array()) == "live")) {
            // line 9
            echo "      <span class=\"label label-success live-label mls\">直播</span>
    ";
        }
        // line 11
        echo "
    ";
        // line 12
        if (((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")) == "classroom")) {
            // line 13
            echo "      ";
            $context["classroom"] = (($this->getAttribute((isset($context["classrooms"]) ? $context["classrooms"] : null), $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["classrooms"]) ? $context["classrooms"] : null), $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), array(), "array"), null)) : (null));
            // line 14
            echo "      ";
            if ( !(isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom"))) {
                // line 15
                echo "        <span class=\"label label-danger live-label mls\">已移除</span>
      ";
            }
            // line 17
            echo "    ";
        }
        // line 18
        echo "    <br>
    <span class=\"text-muted text-sm\">分类：";
        // line 19
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name", array()), "--")) : ("--")), "html", null, true);
        echo "</span>
    ";
        // line 20
        if ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "recommended", array())) {
            // line 21
            echo "      <span class=\"label label-default\">荐:";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "recommendedTime", array()), "Y-m-d"), "html", null, true);
            echo " / 序号:";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "recommendedSeq", array()), "html", null, true);
            echo "</span>
    ";
        }
        // line 23
        echo "
  </td>
  <td>
    ";
        // line 26
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "serializeMode", array()) == "none")) {
            // line 27
            echo "    <span class=\"text-info\">非连载课程</span>
    ";
        } elseif (($this->getAttribute(        // line 28
(isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "serializeMode", array()) == "serialize")) {
            // line 29
            echo "    <span class=\"text-info\">连载中</span>
    ";
        } elseif (($this->getAttribute(        // line 30
(isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "serializeMode", array()) == "finished")) {
            // line 31
            echo "    <span class=\"text-info\">已完结</span>
    ";
        }
        // line 33
        echo "  </td>
  ";
        // line 34
        if (((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")) == "classroom")) {
            // line 35
            echo "  <td>
    ";
            // line 36
            $context["classroom"] = (($this->getAttribute((isset($context["classrooms"]) ? $context["classrooms"] : null), $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["classrooms"]) ? $context["classrooms"] : null), $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), array(), "array"), null)) : (null));
            // line 37
            echo "    ";
            if ((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom"))) {
                // line 38
                echo "      <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "classroomId", array()))), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "classroomTitle", array()), "html", null, true);
                echo "</a>
    ";
            }
            // line 40
            echo "  </td>
  ";
        } else {
            // line 42
            echo "  <td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "studentNum", array()), "html", null, true);
            echo "</td>
  <td><span class=\"money-text\">";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "income", array()), "html", null, true);
            echo "</span></td>
  ";
        }
        // line 45
        echo "
  <td>";
        // line 46
        echo $this->env->getExtension('topxia_web_twig')->getDictText("courseStatus:html", $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "status", array()));
        echo "</td>
  <td>
    ";
        // line 48
        echo $context["admin_macro"]->getuser_link((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")));
        echo "
    <br>
    <span class=\"text-muted text-sm\">";
        // line 50
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "createdTime", array()), "Y-n-d H:i"), "html", null, true);
        echo "</span>
  </td>
  <td>
    <div class=\"btn-group\">
      <a class=\"btn btn-default btn-sm\" href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\" target=\"_blank\">管理</a>

      <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
        <span class=\"caret\"></span>
      </a>
      <ul class=\"dropdown-menu pull-right\">
        ";
        // line 60
        if (((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")) == "normal")) {
            // line 61
            echo "          ";
            if ( !$this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "recommended", array())) {
                // line 62
                echo "          <li><a class=\"recommend-course\" href=\"#modal\" data-toggle=\"modal\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_course_recommend", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "ref" => "courseList", "filter" => (isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")))), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-hand-up\"></span> 推荐课程</a></li>
          ";
            }
            // line 64
            echo "
          ";
            // line 65
            if ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "recommended", array())) {
                // line 66
                echo "            <li><a class=\"cancel-recommend-course\" href=\"javascript:\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_course_cancel_recommend", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "filter" => (isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), "target" => (isset($context["target"]) ? $context["target"] : $this->getContext($context, "target")))), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-hand-right\"></span> 取消推荐</a></li>
          ";
            }
            // line 68
            echo "
          <li ><a class=\"copy-course\" id=\"copy-course\" href=\"javascript:\"
          ";
            // line 70
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "type", array()) == "live")) {
                // line 71
                echo "          title=\"直播课程不支持复制\"
          style=\"color:#909090\"
          ";
            }
            // line 74
            echo "          data-toggle=\"modal\"
          data-target=\"#modal\"
          data-url=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_course_copy", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
            echo "\"
          data-type=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "type", array()), "html", null, true);
            echo "\"
          ><span class=\"glyphicon glyphicon-plus-sign\"></span> 复制课程</a></li>
        ";
        }
        // line 80
        echo "
        <li><a href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "previewAs" => "guest")), "html", null, true);
        echo "\" target=\"_blank\"><span class=\"glyphicon glyphicon-eye-open\"></span> 预览：作为未购买用户</a></li>
        <li><a href=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "previewAs" => "member")), "html", null, true);
        echo "\" target=\"_blank\"><span class=\"glyphicon glyphicon-eye-open\"></span> 预览：作为已购买用户</a></li>

        

        ";
        // line 86
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "status", array()) == "published")) {
            // line 87
            echo "          <li class=\"divider\"></li>
          <li><a class=\"close-course\" href=\"javascript:\" data-url=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_course_close", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "filter" => (isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")))), "html", null, true);
            echo "\" data-user=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["default"]) ? $context["default"] : null), "user_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["default"]) ? $context["default"] : null), "user_name", array()), "学员")) : ("学员")), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-ban-circle\"></span> 关闭课程</a></li>
          <li><a href=\"javascript:\" title=\"发送发布课程(";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "title", array()), "html", null, true);
            echo ")通知短信\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("sms_prepare", array("targetType" => "course", "id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
            echo "\" data-toggle=\"modal\" data-target=\"#modal\"><span class=\"glyphicon glyphicon-envelope\"></span> 发送发布通知短信</a></li>
        ";
        }
        // line 91
        echo "
        ";
        // line 92
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "status", array()) != "published")) {
            // line 93
            echo "          <li class=\"divider\"></li>
          <li><a class=\"publish-course\" href=\"javascript:\" data-url=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_course_publish", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "filter" => (isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-ok-circle\"></span> 发布课程</a></li>
        ";
        }
        // line 96
        echo "
        ";
        // line 97
        if ((($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "status", array()) != "published") && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "isSuperAdmin", array(), "method"))) {
            // line 98
            echo "          <li class=\"divider\"></li>
          <li><a class=\"delete-course\" href=\"javascript:;\" data-url=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_course_delete", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "type" => "", "filter" => (isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")))), "html", null, true);
            echo "\"  data-chapter=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["default"]) ? $context["default"] : null), "chapter_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["default"]) ? $context["default"] : null), "chapter_name", array()), "章")) : ("章")), "html", null, true);
            echo "\" data-part=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["default"]) ? $context["default"] : null), "part_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["default"]) ? $context["default"] : null), "part_name", array()), "节")) : ("节")), "html", null, true);
            echo "\" data-user=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["default"]) ? $context["default"] : null), "user_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["default"]) ? $context["default"] : null), "user_name", array()), "学员")) : ("学员")), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-trash\"></span> 删除课程</a></li>
        ";
        }
        // line 101
        echo "      </ul>
    </div>
  </td>
</tr>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Course:tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 101,  266 => 99,  263 => 98,  261 => 97,  258 => 96,  253 => 94,  250 => 93,  248 => 92,  245 => 91,  238 => 89,  232 => 88,  229 => 87,  227 => 86,  220 => 82,  216 => 81,  213 => 80,  207 => 77,  203 => 76,  199 => 74,  194 => 71,  192 => 70,  188 => 68,  182 => 66,  180 => 65,  177 => 64,  171 => 62,  168 => 61,  166 => 60,  157 => 54,  150 => 50,  145 => 48,  140 => 46,  137 => 45,  132 => 43,  127 => 42,  123 => 40,  115 => 38,  112 => 37,  110 => 36,  107 => 35,  105 => 34,  102 => 33,  98 => 31,  96 => 30,  93 => 29,  91 => 28,  88 => 27,  86 => 26,  81 => 23,  73 => 21,  71 => 20,  67 => 19,  64 => 18,  61 => 17,  57 => 15,  54 => 14,  51 => 13,  49 => 12,  46 => 11,  42 => 9,  40 => 8,  33 => 6,  28 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% import "TopxiaAdminBundle::macro.html.twig" as admin_macro %}*/
/* {% set target = 'normal_index' %}*/
/* <tr id="course-tr-{{ course.id }}">*/
/*   <td>{{ course.id }}</td>*/
/*   <td>*/
/*     <a href="{{ path('course_show', {id:course.id}) }}" target="_blank"><strong>{{ course.title }}</strong></a>*/
/*     */
/*     {% if course.type == 'live' %}*/
/*       <span class="label label-success live-label mls">直播</span>*/
/*     {% endif %}*/
/* */
/*     {% if filter == 'classroom' %}*/
/*       {% set classroom = classrooms[course.id]|default(null) %}*/
/*       {% if not classroom %}*/
/*         <span class="label label-danger live-label mls">已移除</span>*/
/*       {% endif %}*/
/*     {% endif %}*/
/*     <br>*/
/*     <span class="text-muted text-sm">分类：{{ category.name|default('--') }}</span>*/
/*     {% if course.recommended %}*/
/*       <span class="label label-default">荐:{{ course.recommendedTime|date('Y-m-d') }} / 序号:{{ course.recommendedSeq }}</span>*/
/*     {% endif %}*/
/* */
/*   </td>*/
/*   <td>*/
/*     {% if  course.serializeMode =="none" %}*/
/*     <span class="text-info">非连载课程</span>*/
/*     {% elseif course.serializeMode =="serialize" %}*/
/*     <span class="text-info">连载中</span>*/
/*     {% elseif course.serializeMode =="finished" %}*/
/*     <span class="text-info">已完结</span>*/
/*     {% endif %}*/
/*   </td>*/
/*   {% if filter == 'classroom' %}*/
/*   <td>*/
/*     {% set classroom = classrooms[course.id]|default(null) %}*/
/*     {% if classroom %}*/
/*       <a href="{{path('classroom_show',{id:classroom.classroomId})}}" target="_blank">{{classroom.classroomTitle}}</a>*/
/*     {% endif %}*/
/*   </td>*/
/*   {% else %}*/
/*   <td>{{ course.studentNum }}</td>*/
/*   <td><span class="money-text">{{ course.income }}</span></td>*/
/*   {% endif %}*/
/* */
/*   <td>{{ dict_text('courseStatus:html', course.status) }}</td>*/
/*   <td>*/
/*     {{ admin_macro.user_link(user) }}*/
/*     <br>*/
/*     <span class="text-muted text-sm">{{ course.createdTime|date('Y-n-d H:i') }}</span>*/
/*   </td>*/
/*   <td>*/
/*     <div class="btn-group">*/
/*       <a class="btn btn-default btn-sm" href="{{ path('course_manage', {id:course.id}) }}" target="_blank">管理</a>*/
/* */
/*       <a href="#" type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">*/
/*         <span class="caret"></span>*/
/*       </a>*/
/*       <ul class="dropdown-menu pull-right">*/
/*         {% if filter == 'normal' %}*/
/*           {% if not course.recommended %}*/
/*           <li><a class="recommend-course" href="#modal" data-toggle="modal" data-url="{{ path('admin_course_recommend', {id:course.id, ref:'courseList', filter:filter}) }}"><span class="glyphicon glyphicon-hand-up"></span> 推荐课程</a></li>*/
/*           {% endif %}*/
/* */
/*           {% if course.recommended %}*/
/*             <li><a class="cancel-recommend-course" href="javascript:" data-url="{{ path('admin_course_cancel_recommend', {id:course.id, filter:filter,target:target}) }}"><span class="glyphicon glyphicon-hand-right"></span> 取消推荐</a></li>*/
/*           {% endif %}*/
/* */
/*           <li ><a class="copy-course" id="copy-course" href="javascript:"*/
/*           {% if course.type == "live" %}*/
/*           title="直播课程不支持复制"*/
/*           style="color:#909090"*/
/*           {% endif %}*/
/*           data-toggle="modal"*/
/*           data-target="#modal"*/
/*           data-url="{{ path('admin_course_copy', {id:course.id}) }}"*/
/*           data-type="{{course.type}}"*/
/*           ><span class="glyphicon glyphicon-plus-sign"></span> 复制课程</a></li>*/
/*         {% endif %}*/
/* */
/*         <li><a href="{{ path('course_show', {id:course.id, previewAs:'guest'}) }}" target="_blank"><span class="glyphicon glyphicon-eye-open"></span> 预览：作为未购买用户</a></li>*/
/*         <li><a href="{{ path('course_show', {id:course.id, previewAs:'member'}) }}" target="_blank"><span class="glyphicon glyphicon-eye-open"></span> 预览：作为已购买用户</a></li>*/
/* */
/*         */
/* */
/*         {% if course.status == 'published' %}*/
/*           <li class="divider"></li>*/
/*           <li><a class="close-course" href="javascript:" data-url="{{ path('admin_course_close', {id:course.id, filter:filter}) }}" data-user="{{default.user_name|default('学员')}}"><span class="glyphicon glyphicon-ban-circle"></span> 关闭课程</a></li>*/
/*           <li><a href="javascript:" title="发送发布课程({{course.title}})通知短信" data-url="{{path('sms_prepare',{targetType:'course',id:course.id})}}" data-toggle="modal" data-target="#modal"><span class="glyphicon glyphicon-envelope"></span> 发送发布通知短信</a></li>*/
/*         {% endif %}*/
/* */
/*         {% if course.status != 'published' %}*/
/*           <li class="divider"></li>*/
/*           <li><a class="publish-course" href="javascript:" data-url="{{ path('admin_course_publish', {id:course.id, filter:filter}) }}"><span class="glyphicon glyphicon-ok-circle"></span> 发布课程</a></li>*/
/*         {% endif %}*/
/* */
/*         {% if course.status != 'published' and app.user.isSuperAdmin() %}*/
/*           <li class="divider"></li>*/
/*           <li><a class="delete-course" href="javascript:;" data-url="{{ path('admin_course_delete', {courseId:course.id,type:'',filter:filter}) }}"  data-chapter="{{default.chapter_name|default('章')}}" data-part="{{default.part_name|default('节')}}" data-user="{{default.user_name|default('学员')}}"><span class="glyphicon glyphicon-trash"></span> 删除课程</a></li>*/
/*         {% endif %}*/
/*       </ul>*/
/*     </div>*/
/*   </td>*/
/* </tr>*/
/* */
