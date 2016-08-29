<?php

/* TopxiaWebBundle:EsBar:ListContent/StudyCenter/study-mission.html.twig */
class __TwigTemplate_fe89313bb87eaaf337d18822171de0b8bd86856f0f4c2e36ad92cee03bb75618 extends Twig_Template
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
        echo "<div class=\"text-line gray small\">
  <h5><span>学习任务</span></h5>
  <div class=\"line\"></div>
</div>

";
        // line 6
        if (((isset($context["classrooms"]) ? $context["classrooms"] : $this->getContext($context, "classrooms")) || (isset($context["courses"]) ? $context["courses"] : $this->getContext($context, "courses")))) {
            // line 7
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["classrooms"]) ? $context["classrooms"] : $this->getContext($context, "classrooms")));
            foreach ($context['_seq'] as $context["_key"] => $context["classroom"]) {
                if ((isset($context["classrooms"]) ? $context["classrooms"] : $this->getContext($context, "classrooms"))) {
                    // line 8
                    echo "    ";
                    if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("ClassroomPlan")) {
                        // line 9
                        echo "      ";
                        $context["classroomPlan"] = _twig_default_filter($this->env->getExtension('topxia_data_twig')->getData("GetClassroomPlanByClassroomId", array("classroomId" => $this->getAttribute($context["classroom"], "id", array()))), null);
                        // line 10
                        echo "      ";
                        $context["userPlanTaskNumInfo"] = _twig_default_filter($this->env->getExtension('topxia_data_twig')->getData("UserClassroomPlanTaskNumInfo", array("classroomId" => $this->getAttribute($context["classroom"], "id", array()), "userId" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), null);
                        // line 11
                        echo "    ";
                    }
                    // line 12
                    echo "    <div class=\"bar-task\">
      <div class=\"bar-task-header\">
        <div class=\"title\">
          ";
                    // line 15
                    echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
                    echo ": ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["classroom"], "title", array()), "html", null, true);
                    echo "
          ";
                    // line 16
                    if (((((array_key_exists("classroomPlan", $context)) ? (_twig_default_filter((isset($context["classroomPlan"]) ? $context["classroomPlan"] : $this->getContext($context, "classroomPlan")), null)) : (null)) && ($this->getAttribute((isset($context["classroomPlan"]) ? $context["classroomPlan"] : $this->getContext($context, "classroomPlan")), "status", array()) == "published")) && ((array_key_exists("userPlanTaskNumInfo", $context)) ? (_twig_default_filter((isset($context["userPlanTaskNumInfo"]) ? $context["userPlanTaskNumInfo"] : $this->getContext($context, "userPlanTaskNumInfo")), null)) : (null)))) {
                        // line 17
                        echo "            <span>";
                        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["userPlanTaskNumInfo"]) ? $context["userPlanTaskNumInfo"] : $this->getContext($context, "userPlanTaskNumInfo")), "allDoneNum", array()) . "/") . $this->getAttribute((isset($context["userPlanTaskNumInfo"]) ? $context["userPlanTaskNumInfo"] : $this->getContext($context, "userPlanTaskNumInfo")), "tasksNum", array())), "html", null, true);
                        echo "</span>
          ";
                    } else {
                        // line 19
                        echo "            <span>";
                        echo twig_escape_filter($this->env, (($this->getAttribute($context["classroom"], "learnedLessonNum", array()) . "/") . $this->getAttribute($context["classroom"], "allLessonNum", array())), "html", null, true);
                        echo "</span>
          ";
                    }
                    // line 21
                    echo "        </div>
      </div>

      <ul class=\"bar-time-line\">
        ";
                    // line 25
                    if (((((array_key_exists("classroomPlan", $context)) ? (_twig_default_filter((isset($context["classroomPlan"]) ? $context["classroomPlan"] : $this->getContext($context, "classroomPlan")), null)) : (null)) && ($this->getAttribute((isset($context["classroomPlan"]) ? $context["classroomPlan"] : $this->getContext($context, "classroomPlan")), "status", array()) == "published")) && (isset($context["userPlanTaskNumInfo"]) ? $context["userPlanTaskNumInfo"] : $this->getContext($context, "userPlanTaskNumInfo")))) {
                        // line 26
                        echo "          ";
                        $context["tasks"] = $this->env->getExtension('topxia_data_twig')->getData("TodayUserTasks", array("userId" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()), "taskType" => "studyplan", "batchId" => $this->getAttribute((isset($context["classroomPlan"]) ? $context["classroomPlan"] : $this->getContext($context, "classroomPlan")), "id", array()), "count" => 4));
                        // line 27
                        echo "        ";
                    }
                    // line 28
                    echo "
        ";
                    // line 29
                    if (((array_key_exists("tasks", $context)) ? (_twig_default_filter((isset($context["tasks"]) ? $context["tasks"] : $this->getContext($context, "tasks")), null)) : (null))) {
                        // line 30
                        echo "          ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["tasks"]) ? $context["tasks"] : $this->getContext($context, "tasks")));
                        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
                            // line 31
                            echo "            ";
                            if (($this->getAttribute($context["task"], "targetType", array()) == "homework")) {
                                // line 32
                                echo "              <li><span class=\"es-icon es-icon-undone\"></span><a class=\"link-light ";
                                if (($this->getAttribute($context["task"], "timeStatus", array()) == "behind")) {
                                    echo "text-danger";
                                }
                                echo "\" href=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_homework_start_do", array("courseId" => $this->getAttribute($this->getAttribute($context["task"], "meta", array()), "courseId", array()), "homeworkId" => $this->getAttribute($context["task"], "targetId", array()))), "html", null, true);
                                echo "\" title=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "title", array()), "html", null, true);
                                echo "\" target=\"_blank\">";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "title", array()), "html", null, true);
                                echo "</a></li>
            ";
                            } else {
                                // line 34
                                echo "              <li><span class=\"es-icon es-icon-undone\"></span><a class=\"link-light ";
                                if (($this->getAttribute($context["task"], "timeStatus", array()) == "behind")) {
                                    echo "text-danger";
                                }
                                echo "\" href=\"";
                                echo twig_escape_filter($this->env, (($this->env->getExtension('routing')->getPath("course_learn", array("id" => $this->getAttribute($this->getAttribute($context["task"], "meta", array()), "courseId", array()))) . "#lesson/") . $this->getAttribute($context["task"], "targetId", array())), "html", null, true);
                                echo "\" title=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "title", array()), "html", null, true);
                                echo "\" target=\"_blank\">";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "title", array()), "html", null, true);
                                echo "</a></li>
            ";
                            }
                            // line 36
                            echo "          ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 37
                        echo "        ";
                    } elseif ($this->getAttribute($context["classroom"], "lessons", array(), "array")) {
                        // line 38
                        echo "          ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["classroom"], "lessons", array(), "array"));
                        foreach ($context['_seq'] as $context["_key"] => $context["lesson"]) {
                            // line 39
                            echo "            ";
                            $context["status"] = $this->getAttribute($context["lesson"], "isLearned", array());
                            // line 40
                            echo "            ";
                            if ((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status"))) {
                                // line 41
                                echo "              <li><span class=\"es-icon es-icon-doing\"></span><a class=\"link-light\" href=\"";
                                echo twig_escape_filter($this->env, (($this->env->getExtension('routing')->getPath("course_learn", array("id" => $this->getAttribute($context["lesson"], "courseId", array()))) . "#lesson/") . $this->getAttribute($context["lesson"], "id", array())), "html", null, true);
                                echo "\" title=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["lesson"], "title", array()), "html", null, true);
                                echo "\" target=\"_blank\">课时";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["lesson"], "number", array()), "html", null, true);
                                echo "-";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["lesson"], "title", array()), "html", null, true);
                                echo "</a></li>
            ";
                            } else {
                                // line 43
                                echo "              <li><span class=\"es-icon es-icon-undone\"></span><a class=\"link-light\" href=\"";
                                echo twig_escape_filter($this->env, (($this->env->getExtension('routing')->getPath("course_learn", array("id" => $this->getAttribute($context["lesson"], "courseId", array()))) . "#lesson/") . $this->getAttribute($context["lesson"], "id", array())), "html", null, true);
                                echo "\" title=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["lesson"], "title", array()), "html", null, true);
                                echo "\" target=\"_blank\">课时";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["lesson"], "number", array()), "html", null, true);
                                echo "-";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["lesson"], "title", array()), "html", null, true);
                                echo "</a></li>
            ";
                            }
                            // line 45
                            echo "          ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lesson'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 46
                        echo "        ";
                    }
                    // line 47
                    echo "      </ul>
    </div>
  ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classroom'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : $this->getContext($context, "courses")));
            foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                if ((isset($context["courses"]) ? $context["courses"] : $this->getContext($context, "courses"))) {
                    // line 51
                    echo "    <div class=\"bar-task\">
      <div class=\"bar-task-header\">
        <div class=\"title\">
          课程: ";
                    // line 54
                    echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
                    echo "
          <span>";
                    // line 55
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["course"], "learnedLessonNum", array()) . "/") . $this->getAttribute($context["course"], "allLessonNum", array())), "html", null, true);
                    echo "</span>
        </div>
      </div>

      <ul class=\"bar-time-line\">
        ";
                    // line 60
                    if ($this->getAttribute($context["course"], "lessons", array(), "array")) {
                        // line 61
                        echo "          ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["course"], "lessons", array(), "array"));
                        foreach ($context['_seq'] as $context["_key"] => $context["lesson"]) {
                            // line 62
                            echo "            ";
                            $context["status"] = $this->getAttribute($context["lesson"], "isLearned", array());
                            // line 63
                            echo "            ";
                            if ((isset($context["status"]) ? $context["status"] : $this->getContext($context, "status"))) {
                                // line 64
                                echo "              <li><span class=\"es-icon es-icon-doing\"></span><a class=\"link-light\" href=\"";
                                echo twig_escape_filter($this->env, (($this->env->getExtension('routing')->getPath("course_learn", array("id" => $this->getAttribute($context["lesson"], "courseId", array()))) . "#lesson/") . $this->getAttribute($context["lesson"], "id", array())), "html", null, true);
                                echo "\" title=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["lesson"], "title", array()), "html", null, true);
                                echo "\" target=\"_blank\">课时";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["lesson"], "number", array()), "html", null, true);
                                echo "-";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["lesson"], "title", array()), "html", null, true);
                                echo "</a></li>
            ";
                            } else {
                                // line 66
                                echo "              <li><span class=\"es-icon es-icon-undone\"></span><a class=\"link-light\" href=\"";
                                echo twig_escape_filter($this->env, (($this->env->getExtension('routing')->getPath("course_learn", array("id" => $this->getAttribute($context["lesson"], "courseId", array()))) . "#lesson/") . $this->getAttribute($context["lesson"], "id", array())), "html", null, true);
                                echo "\" title=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["lesson"], "title", array()), "html", null, true);
                                echo "\" target=\"_blank\">课时";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["lesson"], "number", array()), "html", null, true);
                                echo "-";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["lesson"], "title", array()), "html", null, true);
                                echo "</a></li>
            ";
                            }
                            // line 68
                            echo "          ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lesson'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 69
                        echo "        ";
                    }
                    // line 70
                    echo "      </ul>
    </div>
  ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 74
            echo "  <span class=\"\"></span>暂未发现还有未学习课时。<a href=\"";
            echo $this->env->getExtension('routing')->getPath("course_explore");
            echo "\">去逛逛>></a>

";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:EsBar:ListContent/StudyCenter/study-mission.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 74,  257 => 70,  254 => 69,  248 => 68,  236 => 66,  224 => 64,  221 => 63,  218 => 62,  213 => 61,  211 => 60,  203 => 55,  199 => 54,  194 => 51,  188 => 50,  179 => 47,  176 => 46,  170 => 45,  158 => 43,  146 => 41,  143 => 40,  140 => 39,  135 => 38,  132 => 37,  126 => 36,  112 => 34,  98 => 32,  95 => 31,  90 => 30,  88 => 29,  85 => 28,  82 => 27,  79 => 26,  77 => 25,  71 => 21,  65 => 19,  59 => 17,  57 => 16,  51 => 15,  46 => 12,  43 => 11,  40 => 10,  37 => 9,  34 => 8,  28 => 7,  26 => 6,  19 => 1,);
    }
}
/* <div class="text-line gray small">*/
/*   <h5><span>学习任务</span></h5>*/
/*   <div class="line"></div>*/
/* </div>*/
/* */
/* {% if classrooms or courses %}*/
/*   {% for classroom in classrooms if classrooms %}*/
/*     {% if is_plugin_installed('ClassroomPlan') %}*/
/*       {% set classroomPlan = data('GetClassroomPlanByClassroomId',{'classroomId':classroom.id})|default(null) %}*/
/*       {% set userPlanTaskNumInfo = data('UserClassroomPlanTaskNumInfo',{'classroomId':classroom.id, 'userId':app.user.id})|default(null) %}*/
/*     {% endif %}*/
/*     <div class="bar-task">*/
/*       <div class="bar-task-header">*/
/*         <div class="title">*/
/*           {{ setting('classroom.name')|default("班级") }}: {{ classroom.title }}*/
/*           {% if classroomPlan|default(null) and classroomPlan.status == 'published' and userPlanTaskNumInfo|default(null) %}*/
/*             <span>{{ userPlanTaskNumInfo.allDoneNum ~ '/' ~ userPlanTaskNumInfo.tasksNum }}</span>*/
/*           {% else %}*/
/*             <span>{{ classroom.learnedLessonNum ~ '/' ~ classroom.allLessonNum }}</span>*/
/*           {% endif %}*/
/*         </div>*/
/*       </div>*/
/* */
/*       <ul class="bar-time-line">*/
/*         {% if classroomPlan|default(null) and classroomPlan.status == 'published' and userPlanTaskNumInfo %}*/
/*           {% set tasks = data('TodayUserTasks',{'userId':app.user.id, 'taskType':'studyplan', 'batchId':classroomPlan.id, 'count':4}) %}*/
/*         {% endif %}*/
/* */
/*         {% if tasks|default(null) %}*/
/*           {% for task in tasks %}*/
/*             {% if task.targetType == 'homework' %}*/
/*               <li><span class="es-icon es-icon-undone"></span><a class="link-light {% if task.timeStatus == 'behind' %}text-danger{% endif %}" href="{{ path('course_homework_start_do', {courseId:task.meta.courseId,homeworkId:task.targetId}) }}" title="{{ task.title}}" target="_blank">{{ task.title }}</a></li>*/
/*             {% else %}*/
/*               <li><span class="es-icon es-icon-undone"></span><a class="link-light {% if task.timeStatus == 'behind' %}text-danger{% endif %}" href="{{ path('course_learn', {id:task.meta.courseId}) ~ '#lesson/' ~ task.targetId }}" title="{{ task.title}}" target="_blank">{{ task.title }}</a></li>*/
/*             {% endif %}*/
/*           {% endfor %}*/
/*         {% elseif classroom['lessons'] %}*/
/*           {% for lesson in classroom['lessons'] %}*/
/*             {% set status = lesson.isLearned %}*/
/*             {% if status %}*/
/*               <li><span class="es-icon es-icon-doing"></span><a class="link-light" href="{{ path('course_learn', {id:lesson.courseId}) ~ '#lesson/' ~ lesson.id }}" title="{{ lesson.title }}" target="_blank">课时{{ lesson.number }}-{{ lesson.title }}</a></li>*/
/*             {% else %}*/
/*               <li><span class="es-icon es-icon-undone"></span><a class="link-light" href="{{ path('course_learn', {id:lesson.courseId}) ~ '#lesson/' ~ lesson.id }}" title="{{ lesson.title }}" target="_blank">课时{{ lesson.number }}-{{ lesson.title }}</a></li>*/
/*             {% endif %}*/
/*           {% endfor %}*/
/*         {% endif %}*/
/*       </ul>*/
/*     </div>*/
/*   {% endfor %}*/
/*   {% for course in courses if courses %}*/
/*     <div class="bar-task">*/
/*       <div class="bar-task-header">*/
/*         <div class="title">*/
/*           课程: {{ course.title }}*/
/*           <span>{{ course.learnedLessonNum ~ '/' ~ course.allLessonNum }}</span>*/
/*         </div>*/
/*       </div>*/
/* */
/*       <ul class="bar-time-line">*/
/*         {% if course['lessons'] %}*/
/*           {% for lesson in course['lessons'] %}*/
/*             {% set status = lesson.isLearned %}*/
/*             {% if status %}*/
/*               <li><span class="es-icon es-icon-doing"></span><a class="link-light" href="{{ path('course_learn', {id:lesson.courseId}) ~ '#lesson/' ~ lesson.id }}" title="{{ lesson.title }}" target="_blank">课时{{ lesson.number }}-{{ lesson.title }}</a></li>*/
/*             {% else %}*/
/*               <li><span class="es-icon es-icon-undone"></span><a class="link-light" href="{{ path('course_learn', {id:lesson.courseId}) ~ '#lesson/' ~ lesson.id }}" title="{{ lesson.title }}" target="_blank">课时{{ lesson.number }}-{{ lesson.title }}</a></li>*/
/*             {% endif %}*/
/*           {% endfor %}*/
/*         {% endif %}*/
/*       </ul>*/
/*     </div>*/
/*   {% endfor %}*/
/* {% else %}*/
/*   <span class=""></span>暂未发现还有未学习课时。<a href="{{ path('course_explore') }}">去逛逛>></a>*/
/* */
/* {% endif %}*/
