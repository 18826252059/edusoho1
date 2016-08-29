<?php

/* TopxiaWebBundle:CourseLesson/Part:micro-tips.html.twig */
class __TwigTemplate_44d39fed5614ce00680b85ee4c8e71906634d6e8848d5f321f39ebcec48a51ee extends Twig_Template
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
        echo "<!-- 紧跟标题 -->
";
        // line 2
        if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "materialNum", array()) > 0)) {
            // line 3
            echo "  <i class=\"es-icon es-icon-filedownload mls\" title=\"资料\"></i>
";
        }
        // line 5
        echo "
";
        // line 6
        if ((twig_in_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id", array()), ((array_key_exists("homeworkLessonIds", $context)) ? (_twig_default_filter((isset($context["homeworkLessonIds"]) ? $context["homeworkLessonIds"] : null), null)) : (null))) || twig_in_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id", array()), ((array_key_exists("exercisesLessonIds", $context)) ? (_twig_default_filter((isset($context["exercisesLessonIds"]) ? $context["exercisesLessonIds"] : null), null)) : (null))))) {
            // line 7
            echo "  <i class=\"es-icon es-icon-mylibrarybooks mls\" title=\"作业、练习\"></i>
";
        }
        // line 9
        echo "
";
        // line 10
        if ((((($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) && $this->env->getExtension('topxia_web_twig')->getSetting("magic.lesson_watch_limit")) && ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "watchLimit", array()) > 0)) && ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "type", array()) == "video")) &&  !((array_key_exists("fromPlugin", $context)) ? (_twig_default_filter((isset($context["fromPlugin"]) ? $context["fromPlugin"] : null), false)) : (false)))) {
            // line 11
            echo "  ";
            $context["remainTime"] = (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "watchLimit", array()) * $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "length", array())) - (($this->getAttribute($this->getAttribute((isset($context["lessonLearns"]) ? $context["lessonLearns"] : null), $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id", array()), array(), "array", false, true), "watchTime", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["lessonLearns"]) ? $context["lessonLearns"] : null), $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id", array()), array(), "array", false, true), "watchTime", array()), 0)) : (0)));
            // line 12
            echo "  ";
            if (((isset($context["remainTime"]) ? $context["remainTime"] : null) > 0)) {
                // line 13
                echo "    <small class=\"text text-info\">还剩 ";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->durationTextFilter((isset($context["remainTime"]) ? $context["remainTime"] : null)), "html", null, true);
                echo "</small>
  ";
            } else {
                // line 15
                echo "    <small class=\"text text-info\">已达最大可看时长</small>
  ";
            }
        }
        // line 18
        echo "

<!-- 右边图标 -->
";
        // line 21
        if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "status", array()) == "published")) {
            // line 22
            echo "  ";
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "type", array()) == "video")) {
                // line 23
                echo "    <span class=\"date\" title=\"视频时长";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->durationFilter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "length", array())), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->durationFilter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "length", array())), "html", null, true);
                echo "</span>
    <span class=\"course-type\">
      <i class=\"es-icon es-icon-videoclass\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"视频课程\"></i>
    </span>
  ";
            }
            // line 28
            echo "
  ";
            // line 29
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "type", array()) == "audio")) {
                // line 30
                echo "    <span class=\"date\" title=\"音频时长";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->durationFilter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "length", array())), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->durationFilter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "length", array())), "html", null, true);
                echo "</span>
    <span class=\"course-type\">
      <i class=\"es-icon es-icon-audioclass\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"音频课程\"></i>
    </span>
  ";
            }
            // line 35
            echo "
  ";
            // line 36
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "type", array()) == "text")) {
                // line 37
                echo "    <span class=\"course-type\">
      <i class=\"es-icon es-icon-graphicclass\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"图文课程\" data-original-title=\"图文\"></i>
    </span>
  ";
            }
            // line 41
            echo "    
  ";
            // line 42
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "type", array()) == "testpaper")) {
                // line 43
                echo "    ";
                $context["endTime"] = (($this->getAttribute($this->getAttribute((isset($context["testpapers"]) ? $context["testpapers"] : null), $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "mediaId", array()), array(), "array"), "limitedTime", array()) * 60) + $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "testStartTime", array()));
                // line 44
                echo "    ";
                if (((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "testStartTime", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "testStartTime", array()), null)) : (null)) && ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "testMode", array()) == "realTime"))) {
                    // line 45
                    echo "      <span class=\"color-gray course-type \">
        ";
                    // line 46
                    if (($this->getAttribute(twig_date_converter($this->env), "timestamp", array()) < $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "testStartTime", array()))) {
                        // line 47
                        echo "            考试倒计时:<span class=\"color-primary pls\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->remainTimeFilter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "testStartTime", array())), "html", null, true);
                        echo "</span>
        ";
                    } else {
                        // line 49
                        echo "          ";
                        if (($this->getAttribute(twig_date_converter($this->env), "timestamp", array()) < (isset($context["endTime"]) ? $context["endTime"] : null))) {
                            // line 50
                            echo "              考试已开始
          ";
                        } else {
                            // line 52
                            echo "              考试已结束
          ";
                        }
                        // line 54
                        echo "      ";
                    }
                    // line 55
                    echo "      </span>
    ";
                } else {
                    // line 57
                    echo "      <span class=\"course-type\">
        <i class=\"es-icon es-icon-check\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"试卷\" data-original-title=\"试卷\"></i>
      </span>
    ";
                }
                // line 61
                echo "  ";
            }
            // line 62
            echo "
  ";
            // line 63
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "type", array()) == "ppt")) {
                // line 64
                echo "    <span class=\"course-type\">
      <i class=\"es-icon es-icon-pptclass\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"PPT课程\"></i>
    </span>
  ";
            }
            // line 68
            echo "
  ";
            // line 69
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "type", array()) == "document")) {
                // line 70
                echo "    <span class=\"course-type\">
      <i class=\"es-icon es-icon-description\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"文档课程\" data-original-title=\"文档\"></i>
    </span>
  ";
            }
            // line 74
            echo "
  ";
            // line 75
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "type", array()) == "flash")) {
                // line 76
                echo "    <span class=\"course-type\">
      <i class=\"es-icon es-icon-flashclass\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"flash课程\"></i>
    </span>
  ";
            }
            // line 80
            echo "
  ";
            // line 81
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "type", array()) == "live")) {
                // line 82
                echo "    
    <span class=\"course-type\">
      <i class=\"es-icon es-icon-videocam\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"直播课程\"></i>
      ";
                // line 85
                if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "startTime", array()) > (isset($context["currentTime"]) ? $context["currentTime"] : null))) {
                    // line 86
                    echo "        <small class=\"type\">";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "startTime", array()), "m月d日"), "html", null, true);
                    echo " 
          ";
                    // line 92
                    echo "          ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "startTime", array()), "H：i"), "html", null, true);
                    echo "
        </small>
      ";
                } elseif ((($this->getAttribute(                // line 94
(isset($context["item"]) ? $context["item"] : null), "startTime", array()) <= (isset($context["currentTime"]) ? $context["currentTime"] : null)) && ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "endTime", array()) >= (isset($context["currentTime"]) ? $context["currentTime"] : null)))) {
                    // line 95
                    echo "        <small class=\"type\">正在直播中</small>
      ";
                } elseif (($this->getAttribute(                // line 96
(isset($context["item"]) ? $context["item"] : null), "endTime", array()) < (isset($context["currentTime"]) ? $context["currentTime"] : null))) {
                    // line 97
                    echo "
        <small class=\"type\">
          ";
                    // line 99
                    if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "replayStatus", array()) == "generated")) {
                        // line 100
                        echo "            回放
          ";
                    } else {
                        // line 102
                        echo "            直播结束
          ";
                    }
                    // line 104
                    echo "        </small>
        
      ";
                }
                // line 107
                echo "    </span>
  ";
            }
            // line 109
            echo "
";
        } else {
            // line 111
            echo "  <span class=\"period-state\">未发布</span>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseLesson/Part:micro-tips.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 111,  242 => 109,  238 => 107,  233 => 104,  229 => 102,  225 => 100,  223 => 99,  219 => 97,  217 => 96,  214 => 95,  212 => 94,  206 => 92,  201 => 86,  199 => 85,  194 => 82,  192 => 81,  189 => 80,  183 => 76,  181 => 75,  178 => 74,  172 => 70,  170 => 69,  167 => 68,  161 => 64,  159 => 63,  156 => 62,  153 => 61,  147 => 57,  143 => 55,  140 => 54,  136 => 52,  132 => 50,  129 => 49,  123 => 47,  121 => 46,  118 => 45,  115 => 44,  112 => 43,  110 => 42,  107 => 41,  101 => 37,  99 => 36,  96 => 35,  85 => 30,  83 => 29,  80 => 28,  69 => 23,  66 => 22,  64 => 21,  59 => 18,  54 => 15,  48 => 13,  45 => 12,  42 => 11,  40 => 10,  37 => 9,  33 => 7,  31 => 6,  28 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <!-- 紧跟标题 -->*/
/* {% if item.materialNum > 0 %}*/
/*   <i class="es-icon es-icon-filedownload mls" title="资料"></i>*/
/* {% endif %}*/
/* */
/* {% if (item.id in homeworkLessonIds|default(null)) or (item.id in exercisesLessonIds|default(null)) %}*/
/*   <i class="es-icon es-icon-mylibrarybooks mls" title="作业、练习"></i>*/
/* {% endif %}*/
/* */
/* {% if app.user and setting('magic.lesson_watch_limit') and course.watchLimit > 0 and item.type == 'video' and not fromPlugin|default(false) %}*/
/*   {% set remainTime = (course.watchLimit * item.length) - lessonLearns[item.id].watchTime|default(0) %}*/
/*   {% if remainTime > 0 %}*/
/*     <small class="text text-info">还剩 {{ remainTime|duration_text }}</small>*/
/*   {% else %}*/
/*     <small class="text text-info">已达最大可看时长</small>*/
/*   {% endif %}*/
/* {% endif %}*/
/* */
/* */
/* <!-- 右边图标 -->*/
/* {% if item.status == 'published' %}*/
/*   {% if item.type == 'video' %}*/
/*     <span class="date" title="视频时长{{ item.length|duration }}">{{ item.length|duration }}</span>*/
/*     <span class="course-type">*/
/*       <i class="es-icon es-icon-videoclass" data-toggle="tooltip" data-placement="top" title="视频课程"></i>*/
/*     </span>*/
/*   {% endif %}*/
/* */
/*   {% if item.type == 'audio' %}*/
/*     <span class="date" title="音频时长{{ item.length|duration }}">{{ item.length|duration }}</span>*/
/*     <span class="course-type">*/
/*       <i class="es-icon es-icon-audioclass" data-toggle="tooltip" data-placement="top" title="音频课程"></i>*/
/*     </span>*/
/*   {% endif %}*/
/* */
/*   {% if item.type == 'text' %}*/
/*     <span class="course-type">*/
/*       <i class="es-icon es-icon-graphicclass" data-toggle="tooltip" data-placement="top" title="图文课程" data-original-title="图文"></i>*/
/*     </span>*/
/*   {% endif %}*/
/*     */
/*   {% if item.type == 'testpaper' %}*/
/*     {% set endTime = (testpapers[item.mediaId].limitedTime * 60) + item.testStartTime %}*/
/*     {% if item.testStartTime|default(null) and item.testMode == 'realTime' %}*/
/*       <span class="color-gray course-type ">*/
/*         {% if date().timestamp < item.testStartTime %}*/
/*             考试倒计时:<span class="color-primary pls">{{item.testStartTime|remain_time}}</span>*/
/*         {% else %}*/
/*           {% if date().timestamp < endTime %}*/
/*               考试已开始*/
/*           {% else %}*/
/*               考试已结束*/
/*           {% endif %}*/
/*       {% endif %}*/
/*       </span>*/
/*     {% else %}*/
/*       <span class="course-type">*/
/*         <i class="es-icon es-icon-check" data-toggle="tooltip" data-placement="top" title="试卷" data-original-title="试卷"></i>*/
/*       </span>*/
/*     {% endif %}*/
/*   {% endif %}*/
/* */
/*   {% if item.type == 'ppt' %}*/
/*     <span class="course-type">*/
/*       <i class="es-icon es-icon-pptclass" data-toggle="tooltip" data-placement="top" title="PPT课程"></i>*/
/*     </span>*/
/*   {% endif %}*/
/* */
/*   {% if item.type == 'document' %}*/
/*     <span class="course-type">*/
/*       <i class="es-icon es-icon-description" data-toggle="tooltip" data-placement="top" title="文档课程" data-original-title="文档"></i>*/
/*     </span>*/
/*   {% endif %}*/
/* */
/*   {% if item.type == 'flash' %}*/
/*     <span class="course-type">*/
/*       <i class="es-icon es-icon-flashclass" data-toggle="tooltip" data-placement="top" title="flash课程"></i>*/
/*     </span>*/
/*   {% endif %}*/
/* */
/*   {% if item.type == 'live' %}*/
/*     */
/*     <span class="course-type">*/
/*       <i class="es-icon es-icon-videocam" data-toggle="tooltip" data-placement="top" title="直播课程"></i>*/
/*       {% if item.startTime > currentTime %}*/
/*         <small class="type">{{ item.startTime|date('m月d日') }} */
/*           {# {% for key,week in weeks %}*/
/*             {% if key == item.startTime|date('w')  %}*/
/*               星期{{ week }}*/
/*             {% endif %}*/
/*             {% endfor %}  先隐藏星期#}*/
/*           {{ item.startTime|date('H：i') }}*/
/*         </small>*/
/*       {% elseif item.startTime <= currentTime and item.endTime >= currentTime %}*/
/*         <small class="type">正在直播中</small>*/
/*       {% elseif item.endTime < currentTime %}*/
/* */
/*         <small class="type">*/
/*           {% if item.replayStatus == 'generated' %}*/
/*             回放*/
/*           {% else %}*/
/*             直播结束*/
/*           {% endif %}*/
/*         </small>*/
/*         */
/*       {% endif %}*/
/*     </span>*/
/*   {% endif %}*/
/* */
/* {% else %}*/
/*   <span class="period-state">未发布</span>*/
/* {% endif %}*/
/* */
