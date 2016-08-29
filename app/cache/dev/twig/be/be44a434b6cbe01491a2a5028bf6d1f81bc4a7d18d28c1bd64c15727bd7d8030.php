<?php

/* ClassroomBundle:ClassroomManage:menu.html.twig */
class __TwigTemplate_22f1b96e4cc5d5d60a8676f007cda3d3620478a2f2395e290ed87993f5e11a67 extends Twig_Template
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
        if ((isset($context["canManage"]) ? $context["canManage"] : $this->getContext($context, "canManage"))) {
            // line 2
            echo "  <ul class=\"list-group\">
    <li class=\"list-group-item ";
            // line 3
            if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "main")) {
                echo "active";
            }
            echo "\">
      <a href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
            echo "\">管理首页</a>
    </li>
  </ul>
  
  <ul class=\"list-group\">
    <li class=\"list-group-heading\">";
            // line 9
            echo twig_escape_filter($this->env, (_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级") . "设置"), "html", null, true);
            echo "</li>
    <li class=\"list-group-item ";
            // line 10
            if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "base")) {
                echo "active";
            }
            echo "\">
      <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_set_info", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
            echo "\">基本信息 ";
            if (twig_test_empty($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "about", array()))) {
                echo "<span class=\"label label-info\">未完善</span>";
            }
            echo "</a>
    </li>
    <li class=\"list-group-item ";
            // line 13
            if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "price")) {
                echo "active";
            }
            echo "\">
      <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_set_price", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
            echo "\">价格设置</a>
    </li>
    <li class=\"list-group-item ";
            // line 16
            if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "picture")) {
                echo "active";
            }
            echo "\">
    <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_set_picture", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
            echo "\">封面图片 ";
            if (twig_test_empty($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "smallPicture", array()))) {
                echo "<span class=\"label label-info\">未设置</span>";
            }
            echo "</a>
    </li>
    <li class=\"list-group-item ";
            // line 19
            if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "service")) {
                echo "active";
            }
            echo "\">
      <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_service", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
            echo "\">服务设置</a>
    </li>
    <li class=\"list-group-item ";
            // line 22
            if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "headTeacher")) {
                echo "active";
            }
            echo "\">
      <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_headteacher", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
            echo "\">班主任设置</a>
    </li>
    <li class=\"list-group-item ";
            // line 25
            if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "teachers")) {
                echo "active";
            }
            echo "\">
      <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_teachers", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
            echo "\">教师设置</a>
    </li>
    <li class=\"list-group-item ";
            // line 28
            if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "assistant")) {
                echo "active";
            }
            echo "\">
      <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_assistants", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
            echo "\">助教设置</a>
    </li>
    ";
            // line 31
            if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("ClassroomPlan")) {
                // line 32
                echo "      <li class=\"list-group-item ";
                if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "plan")) {
                    echo "active";
                }
                echo "\">
        <a href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_plan", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
                echo "\">学习计划</a>
      </li>
    ";
            }
            // line 36
            echo "  </ul>
";
        }
        // line 38
        echo "
<ul class=\"list-group\">
  <li class=\"list-group-heading\">";
        // line 40
        echo twig_escape_filter($this->env, (_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级") . "管理"), "html", null, true);
        echo "</li>
  ";
        // line 41
        if ((isset($context["canManage"]) ? $context["canManage"] : $this->getContext($context, "canManage"))) {
            // line 42
            echo "    <li class=\"list-group-item ";
            if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "courses")) {
                echo "active";
            }
            echo "\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_courses", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
            echo "\">课程管理</a></li>
    <li class=\"list-group-item ";
            // line 43
            if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "students")) {
                echo "active";
            }
            echo "\">
      <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_students", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
            echo "\">学员管理</a>
    </li>
    <li class=\"list-group-item ";
            // line 46
            if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "files")) {
                echo "active";
            }
            echo "\">
      <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_file", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
            echo "\">附件管理</a>
    </li>
    <li class=\"list-group-item ";
            // line 49
            if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "announcement")) {
                echo "active";
            }
            echo "\">
      <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("announcement_manage", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
            echo "\">公告管理</a>
    </li>
    <li class=\"list-group-item ";
            // line 52
            if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "offlineSchedule")) {
                echo "active";
            }
            echo "\">
      <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("offline_schedule_manage", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
            echo "\">线下课程管理</a>
    </li>
    <li class=\"list-group-item ";
            // line 55
            if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "nongzi")) {
                echo "active";
            }
            echo "\">
      <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_nongzi", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()), "type" => "nongzi")), "html", null, true);
            echo "\">相关农资</a>
    </li>
    <li class=\"list-group-item ";
            // line 58
            if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "jiaocheng")) {
                echo "active";
            }
            echo "\">
      <a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_nongzi", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()), "type" => "jiaocheng")), "html", null, true);
            echo "\">相关教程</a>
    </li>
  ";
        }
        // line 62
        echo "
  ";
        // line 63
        if ((isset($context["canHandle"]) ? $context["canHandle"] : $this->getContext($context, "canHandle"))) {
            // line 64
            echo "    <li class=\"list-group-item ";
            if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "testpaper-check")) {
                echo " active ";
            }
            echo "\">
      <a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_testpaper", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()), "status" => "reviewing")), "html", null, true);
            echo "\">试卷批阅</a>
    </li>
   
    ";
            // line 68
            if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("Homework")) {
                // line 69
                echo "      <li class=\"list-group-item ";
                if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "homework-check")) {
                    echo " active ";
                }
                echo "\">
        <a href=\"";
                // line 70
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_homework", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()), "status" => "reviewing")), "html", null, true);
                echo "\">作业批改</a>
      </li>
    ";
            }
            // line 73
            echo "  ";
        }
        // line 74
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomManage:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 74,  265 => 73,  259 => 70,  252 => 69,  250 => 68,  244 => 65,  237 => 64,  235 => 63,  232 => 62,  226 => 59,  220 => 58,  215 => 56,  209 => 55,  204 => 53,  198 => 52,  193 => 50,  187 => 49,  182 => 47,  176 => 46,  171 => 44,  165 => 43,  156 => 42,  154 => 41,  150 => 40,  146 => 38,  142 => 36,  136 => 33,  129 => 32,  127 => 31,  122 => 29,  116 => 28,  111 => 26,  105 => 25,  100 => 23,  94 => 22,  89 => 20,  83 => 19,  74 => 17,  68 => 16,  63 => 14,  57 => 13,  48 => 11,  42 => 10,  38 => 9,  30 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if canManage %}*/
/*   <ul class="list-group">*/
/*     <li class="list-group-item {% if side_nav == 'main' %}active{% endif %}">*/
/*       <a href="{{ path('classroom_manage', {id:classroom.id}) }}">管理首页</a>*/
/*     </li>*/
/*   </ul>*/
/*   */
/*   <ul class="list-group">*/
/*     <li class="list-group-heading">{{ setting('classroom.name')|default("班级") ~ '设置' }}</li>*/
/*     <li class="list-group-item {% if side_nav == 'base' %}active{% endif %}">*/
/*       <a href="{{ path('classroom_manage_set_info', {id:classroom.id}) }}">基本信息 {% if classroom.about is empty %}<span class="label label-info">未完善</span>{% endif %}</a>*/
/*     </li>*/
/*     <li class="list-group-item {% if side_nav == 'price' %}active{% endif %}">*/
/*       <a href="{{ path('classroom_manage_set_price', {id:classroom.id}) }}">价格设置</a>*/
/*     </li>*/
/*     <li class="list-group-item {% if side_nav == 'picture' %}active{% endif %}">*/
/*     <a href="{{ path('classroom_manage_set_picture', {id:classroom.id}) }}">封面图片 {% if classroom.smallPicture is empty %}<span class="label label-info">未设置</span>{% endif %}</a>*/
/*     </li>*/
/*     <li class="list-group-item {% if side_nav == 'service' %}active{% endif %}">*/
/*       <a href="{{ path('classroom_manage_service', {id:classroom.id}) }}">服务设置</a>*/
/*     </li>*/
/*     <li class="list-group-item {% if side_nav == 'headTeacher' %}active{% endif %}">*/
/*       <a href="{{ path('classroom_manage_headteacher', {id:classroom.id}) }}">班主任设置</a>*/
/*     </li>*/
/*     <li class="list-group-item {% if side_nav == 'teachers' %}active{% endif %}">*/
/*       <a href="{{ path('classroom_manage_teachers', {id:classroom.id}) }}">教师设置</a>*/
/*     </li>*/
/*     <li class="list-group-item {% if side_nav == 'assistant' %}active{% endif %}">*/
/*       <a href="{{ path('classroom_manage_assistants', {id:classroom.id}) }}">助教设置</a>*/
/*     </li>*/
/*     {% if is_plugin_installed("ClassroomPlan") %}*/
/*       <li class="list-group-item {% if side_nav == 'plan' %}active{% endif %}">*/
/*         <a href="{{ path('classroom_manage_plan', {classroomId:classroom.id}) }}">学习计划</a>*/
/*       </li>*/
/*     {% endif %}*/
/*   </ul>*/
/* {% endif %}*/
/* */
/* <ul class="list-group">*/
/*   <li class="list-group-heading">{{ setting('classroom.name')|default("班级") ~ '管理' }}</li>*/
/*   {% if canManage %}*/
/*     <li class="list-group-item {% if side_nav == 'courses' %}active{% endif %}"><a href="{{ path('classroom_manage_courses', {id:classroom.id}) }}">课程管理</a></li>*/
/*     <li class="list-group-item {% if side_nav == 'students' %}active{% endif %}">*/
/*       <a href="{{ path('classroom_manage_students', {id:classroom.id}) }}">学员管理</a>*/
/*     </li>*/
/*     <li class="list-group-item {% if side_nav == 'files' %}active{% endif %}">*/
/*       <a href="{{ path('classroom_manage_file', {id:classroom.id}) }}">附件管理</a>*/
/*     </li>*/
/*     <li class="list-group-item {% if side_nav == 'announcement' %}active{% endif %}">*/
/*       <a href="{{ path('announcement_manage', {id:classroom.id}) }}">公告管理</a>*/
/*     </li>*/
/*     <li class="list-group-item {% if side_nav == 'offlineSchedule' %}active{% endif %}">*/
/*       <a href="{{ path('offline_schedule_manage', {id:classroom.id}) }}">线下课程管理</a>*/
/*     </li>*/
/*     <li class="list-group-item {% if side_nav == 'nongzi' %}active{% endif %}">*/
/*       <a href="{{ path('classroom_manage_nongzi', {id:classroom.id,type:'nongzi'}) }}">相关农资</a>*/
/*     </li>*/
/*     <li class="list-group-item {% if side_nav == 'jiaocheng' %}active{% endif %}">*/
/*       <a href="{{ path('classroom_manage_nongzi', {id:classroom.id,type:'jiaocheng'}) }}">相关教程</a>*/
/*     </li>*/
/*   {% endif %}*/
/* */
/*   {% if canHandle %}*/
/*     <li class="list-group-item {% if side_nav == 'testpaper-check' %} active {% endif %}">*/
/*       <a href="{{ path('classroom_manage_testpaper', {id:classroom.id,status:'reviewing'}) }}">试卷批阅</a>*/
/*     </li>*/
/*    */
/*     {% if is_plugin_installed('Homework') %}*/
/*       <li class="list-group-item {% if side_nav == 'homework-check' %} active {% endif %}">*/
/*         <a href="{{ path('classroom_manage_homework', {id:classroom.id,status:'reviewing'}) }}">作业批改</a>*/
/*       </li>*/
/*     {% endif %}*/
/*   {% endif %}*/
/* </ul>*/
/* */
