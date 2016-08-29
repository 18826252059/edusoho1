<?php

/* TopxiaWebBundle:CourseLessonManage:list-item.html.twig */
class __TwigTemplate_2a1965a780037155fd3f51faa658462ee7031b1ff22520cfac753821bdce7a81 extends Twig_Template
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
        echo "<li class=\"item-lesson clearfix\" id=\"lesson-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()), "html", null, true);
        echo "\"style=\"word-break: break-all;\" >
  <div class=\"item-line\"></div>
  <div class=\"item-content\">
    ";
        // line 4
        $context["mediaStatus"] = (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "mediaStatus", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "mediaStatus", array()), null)) : (null));
        // line 5
        echo "
    ";
        // line 6
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) == "video")) {
            // line 7
            echo "      ";
            if (((isset($context["mediaStatus"]) ? $context["mediaStatus"] : null) == "waiting")) {
                // line 8
                echo "      <i class=\"fa fa-file-video-o text-warning\"></i>
      ";
            } elseif ((            // line 9
(isset($context["mediaStatus"]) ? $context["mediaStatus"] : null) == "doing")) {
                // line 10
                echo "      <i class=\"fa fa-file-video-o text-info\"></i>
      ";
            } elseif ((            // line 11
(isset($context["mediaStatus"]) ? $context["mediaStatus"] : null) == "error")) {
                // line 12
                echo "      <i class=\"fa fa-file-video-o text-danger\"></i>
      ";
            } else {
                // line 14
                echo "      <i class=\"fa fa-file-video-o text-success\"></i>
      ";
            }
            // line 16
            echo "    ";
        } elseif (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) == "live")) {
            // line 17
            echo "      ";
            if (((isset($context["mediaStatus"]) ? $context["mediaStatus"] : null) == "waiting")) {
                // line 18
                echo "      <i class=\"fa fa-video-camera text-warning\"></i>
      ";
            } elseif ((            // line 19
(isset($context["mediaStatus"]) ? $context["mediaStatus"] : null) == "doing")) {
                // line 20
                echo "      <i class=\"fa fa-video-camera text-info\"></i>
      ";
            } elseif ((            // line 21
(isset($context["mediaStatus"]) ? $context["mediaStatus"] : null) == "error")) {
                // line 22
                echo "      <i class=\"fa fa-video-camera text-danger\"></i>
      ";
            } else {
                // line 24
                echo "      <i class=\"fa fa-video-camera text-success\"></i>
      ";
            }
            // line 26
            echo "    ";
        } elseif (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) == "audio")) {
            // line 27
            echo "      <i class=\"fa fa-file-audio-o text-success\"></i>
    ";
        } elseif (($this->getAttribute(        // line 28
(isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) == "testpaper")) {
            // line 29
            echo "      <i class=\"fa fa-file-text-o text-success\"></i>
    ";
        } elseif (($this->getAttribute(        // line 30
(isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) == "text")) {
            // line 31
            echo "      <i class=\"fa fa-file-photo-o text-success\"></i>
    ";
        } elseif (($this->getAttribute(        // line 32
(isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) == "document")) {
            // line 33
            echo "      <i class=\"fa fa-files-o text-success\"></i>
    ";
        } elseif (($this->getAttribute(        // line 34
(isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) == "flash")) {
            // line 35
            echo "      <i class=\"fa fa-film text-success\"></i>
    ";
        } else {
            // line 37
            echo "      <i class=\"fa fa-file-powerpoint-o text-success\"></i>
    ";
        }
        // line 39
        echo "    ";
        if (_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("course.custom_chapter_enabled"), true)) {
            echo " 
      课时 <span class=\"number\">";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "number", array()), "html", null, true);
            echo "</span>：
    ";
        }
        // line 42
        echo "    ";
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "free", array()) == 1)) {
            echo "<span class=\"label label-danger\">免费</span>";
        }
        // line 43
        echo "    
    ";
        // line 44
        if (((((($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) != "text") && ($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) != "live")) && ($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) != "testpaper")) && ($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "mediaId", array()) != 0)) &&  !((array_key_exists("file", $context)) ? (_twig_default_filter((isset($context["file"]) ? $context["file"] : null), false)) : (false)))) {
            // line 45
            echo "      <span class=\"label label-danger fileDeletedLesson\" title=\"课时文件已删除\">无效课时</span>
    ";
        }
        // line 47
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "title", array()), "html", null, true);
        echo "

    ";
        // line 49
        if (twig_in_filter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()), array(0 => "video", 1 => "audio"))) {
            // line 50
            echo "      <span class=\"text-muted\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->durationFilter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "length", array())), "html", null, true);
            echo "</span>
    ";
        }
        // line 52
        echo "
    ";
        // line 53
        if (twig_in_filter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()), array(0 => "live"))) {
            // line 54
            echo "      <span class=\"text-muted\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->dateformatFilter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "startTime", array())), "html", null, true);
            echo "</span>
    ";
        }
        // line 56
        echo "
    ";
        // line 57
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "giveCredit", array()) > 0)) {
            // line 58
            echo "      <small class=\"text-muted\">(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "giveCredit", array()), "html", null, true);
            echo "学分)</small>
    ";
        }
        // line 60
        echo "
    ";
        // line 61
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "requireCredit", array()) > 0)) {
            // line 62
            echo "      <small class=\"text-muted\">(需";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "requireCredit", array()), "html", null, true);
            echo "学分)</small>
    ";
        }
        // line 64
        echo "
    ";
        // line 65
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) != "testpaper")) {
            // line 66
            echo "      ";
            $context["mediaTypeName"] = ((($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) == "video")) ? ("视频") : (((($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) == "audio")) ? ("音频") : ("文件"))));
            // line 67
            echo "      ";
            if (((isset($context["mediaStatus"]) ? $context["mediaStatus"] : null) == "waiting")) {
                // line 68
                echo "        <span class=\"text-warning\">(正在等待";
                echo twig_escape_filter($this->env, (isset($context["mediaTypeName"]) ? $context["mediaTypeName"] : null), "html", null, true);
                echo "格式转换)</span>
      ";
            } elseif ((            // line 69
(isset($context["mediaStatus"]) ? $context["mediaStatus"] : null) == "doing")) {
                // line 70
                echo "        <span class=\"text-info\">(正在转换";
                echo twig_escape_filter($this->env, (isset($context["mediaTypeName"]) ? $context["mediaTypeName"] : null), "html", null, true);
                echo "格式)</span>
      ";
            } elseif ((            // line 71
(isset($context["mediaStatus"]) ? $context["mediaStatus"] : null) == "error")) {
                // line 72
                echo "        <span class=\"text-danger\">(";
                echo twig_escape_filter($this->env, (isset($context["mediaTypeName"]) ? $context["mediaTypeName"] : null), "html", null, true);
                echo "格式转换失败)</span>
      ";
            }
            // line 74
            echo "    ";
        }
        // line 75
        echo "
    ";
        // line 76
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "status", array()) == "unpublished")) {
            // line 77
            echo "      <span class=\"unpublish-warning text-warning\">(未发布)</span>
    ";
        }
        // line 79
        echo "  </div>

  <div class=\"item-actions\">
    <a class=\"btn btn-link\" data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\" data-keyboard=\"false\"
      ";
        // line 83
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) == "testpaper")) {
            // line 84
            echo "        data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_edit_testpaper", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()))), "html", null, true);
            echo "\"
      ";
        } elseif (($this->getAttribute(        // line 85
(isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) == "live")) {
            // line 86
            echo "        data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("live_course_manage_lesson_edit", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()))), "html", null, true);
            echo "\"
      ";
        } else {
            // line 88
            echo "        data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_edit", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()))), "html", null, true);
            echo "\"
      ";
        }
        // line 90
        echo "      ><span class=\"es-icon es-icon-edit prs\"></span>编辑</a>
    ";
        // line 91
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) == "testpaper")) {
            // line 92
            echo "      <a class=\"btn btn-link\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_preview_test", array("testId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "mediaId", array()))), "html", null, true);
            echo "\" target=\"_blank\"><span class=\"es-icon es-icon-visibility prs\"></span>预览</a>
    ";
        } else {
            // line 94
            echo "      <a class=\"btn btn-link\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_learn", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "preview" => 1)), "html", null, true);
            echo "#lesson/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()), "html", null, true);
            echo "\" target=\"_blank\"><span class=\"es-icon es-icon-visibility prs\"></span>预览</a>
    ";
        }
        // line 96
        echo "    <span class=\"dropdown\">
      <a class=\"dropdown-toggle dropdown-more\" id=\"dropdown-more\" data-toggle=\"dropdown\" href=\"#\"><i class=\"es-icon es-icon-keyboardarrowdown\" style=\"margin-right:3px\" aria-haspopup=\"true\" aria-expanded=\"false\"></i>更多</a>

      <ul class=\"dropdown-menu pull-right dropdown-menu-more\" role=\"menu\" style=\"margin-top:12px;min-width:144px\" aria-labelledby=\"dLabel\" style=\"display:none;\">
        
        ";
        // line 101
        if (($this->env->getExtension('topxia_web_twig')->isPluginInstalled("Homework") && ($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) != "testpaper"))) {
            // line 102
            echo "          ";
            $context["homework"] = (($this->getAttribute((isset($context["homeworks"]) ? $context["homeworks"] : null), $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["homeworks"]) ? $context["homeworks"] : null), $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()), array(), "array"), null)) : (null));
            // line 103
            echo "          ";
            $context["homeworkId"] = (($this->getAttribute((isset($context["homework"]) ? $context["homework"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["homework"]) ? $context["homework"] : null), "id", array()), null)) : (null));
            // line 104
            echo "          ";
            if ((isset($context["homework"]) ? $context["homework"] : null)) {
                // line 105
                echo "            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_homework_edit", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()), "homeworkId" => (isset($context["homeworkId"]) ? $context["homeworkId"] : null))), "html", null, true);
                echo "\" ><span class=\"glyphicon glyphicon-list-alt prs\"></span>编辑作业</a></li>
            <li><a href=\"";
                // line 106
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_homework_preview", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "homeworkId" => (isset($context["homeworkId"]) ? $context["homeworkId"] : null))), "html", null, true);
                echo "\" class=\"preview-homework-btn\" ><span class=\"glyphicon glyphicon-eye-open prs\"></span>预览作业</a></li>
            <li><a href=\"javascript:;\" class=\"delete-homework-btn\" data-url=\"";
                // line 107
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_homework_remove", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()), "homeworkId" => (isset($context["homeworkId"]) ? $context["homeworkId"] : null))), "html", null, true);
                echo "\" ><span class=\"glyphicon glyphicon-trash prs\"></span>移除作业</a></li>
          ";
            } else {
                // line 109
                echo "            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_homework_create", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()), "homeworkId" => (isset($context["homeworkId"]) ? $context["homeworkId"] : null))), "html", null, true);
                echo "\" ><span class=\"glyphicon glyphicon-list-alt prs\"></span>布置作业</a></li>
          ";
            }
            // line 111
            echo "            <li class=\"divider\"></li>
          ";
            // line 112
            $context["lessonId"] = $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array());
            // line 113
            echo "          ";
            $context["exercise"] = (($this->getAttribute((isset($context["exercises"]) ? $context["exercises"] : null), (isset($context["lessonId"]) ? $context["lessonId"] : null), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["exercises"]) ? $context["exercises"] : null), (isset($context["lessonId"]) ? $context["lessonId"] : null), array(), "array"), null)) : (null));
            // line 114
            echo "          ";
            if ((isset($context["exercise"]) ? $context["exercise"] : null)) {
                // line 115
                echo "            <li><a href=\"javascript:;\" class=\"delete-exercise-btn\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_exercise_delete", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()), "id" => $this->getAttribute((isset($context["exercise"]) ? $context["exercise"] : null), "id", array()))), "html", null, true);
                echo "\" ><span class=\"glyphicon glyphicon-trash prs\"></span>移除练习</a></li>
          ";
            } else {
                // line 117
                echo "            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_exercise_create", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()))), "html", null, true);
                echo "\" ><span class=\"glyphicon glyphicon-list-alt prs\"></span>新增练习</a></li>
          ";
            }
            // line 119
            echo "          <li class=\"divider\"></li>
        ";
        }
        // line 121
        echo "
        ";
        // line 122
        if ((($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) == "video") && ($this->env->getExtension('topxia_web_twig')->getSetting("storage.upload_mode") == "cloud"))) {
            // line 123
            echo "          ";
            if (((($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "convertStatus", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "convertStatus", array()), null)) : (null)) == "success")) {
                // line 124
                echo "          <!-- file.createdUserId|default(null) == app.user.id and -->
          <li>
            <a href=\"";
                // line 126
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_lesson_marker_manage", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()))), "html", null, true);
                echo "\" target=\"_blank\" class=\"manage-lesson-marker-btn\" >
            <span class=\"glyphicon glyphicon-list prs\"></span>弹题管理
            </a>
          </li>
          <li class=\"divider\"></li>
          ";
            }
            // line 132
            echo "        ";
        }
        // line 133
        echo "
        ";
        // line 134
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) != "testpaper")) {
            // line 135
            echo "          <li><a href=\"javascript:;\" data-toggle=\"modal\"  data-target=\"#modal\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_material", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-paperclip prs\"></span>添加资料</a></li>
          <li class=\"divider\"></li>
        ";
        }
        // line 138
        echo "        
        <li class=\"";
        // line 139
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "status", array()) == "published")) {
            echo "hidden ";
        }
        echo "\">
          <a href=\"javascript:;\" class=\"publish-lesson-btn\" data-url=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_publish", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()))), "html", null, true);
        echo "\">
            <span class=\"glyphicon glyphicon-ok-circle prs\"></span>发布
          </a>
        </li>

        <li class=\"";
        // line 145
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "status", array()) == "unpublished")) {
            echo "hidden ";
        }
        echo "\">
          <a href=\"javascript:;\" class=\"unpublish-lesson-btn\" data-url=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_unpublish", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()))), "html", null, true);
        echo "\">
            <span class=\"glyphicon glyphicon-remove-circle prs\"></span>取消发布
          </a>
        </li>
        <li class=\"";
        // line 150
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "status", array()) == "published")) {
            echo "hidden ";
        }
        echo "\">
          <a href=\"javascript:;\" class=\"delete-lesson-btn\" data-url=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_delete", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()))), "html", null, true);
        echo "\">
            <span class=\"glyphicon glyphicon-trash prs\"></span>删除
          </a>
        </li>
      </ul>
    </span>
  </div>
</li>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseLessonManage:list-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  406 => 151,  400 => 150,  393 => 146,  387 => 145,  379 => 140,  373 => 139,  370 => 138,  363 => 135,  361 => 134,  358 => 133,  355 => 132,  346 => 126,  342 => 124,  339 => 123,  337 => 122,  334 => 121,  330 => 119,  324 => 117,  318 => 115,  315 => 114,  312 => 113,  310 => 112,  307 => 111,  301 => 109,  296 => 107,  292 => 106,  287 => 105,  284 => 104,  281 => 103,  278 => 102,  276 => 101,  269 => 96,  261 => 94,  255 => 92,  253 => 91,  250 => 90,  244 => 88,  238 => 86,  236 => 85,  231 => 84,  229 => 83,  223 => 79,  219 => 77,  217 => 76,  214 => 75,  211 => 74,  205 => 72,  203 => 71,  198 => 70,  196 => 69,  191 => 68,  188 => 67,  185 => 66,  183 => 65,  180 => 64,  174 => 62,  172 => 61,  169 => 60,  163 => 58,  161 => 57,  158 => 56,  152 => 54,  150 => 53,  147 => 52,  141 => 50,  139 => 49,  133 => 47,  129 => 45,  127 => 44,  124 => 43,  119 => 42,  114 => 40,  109 => 39,  105 => 37,  101 => 35,  99 => 34,  96 => 33,  94 => 32,  91 => 31,  89 => 30,  86 => 29,  84 => 28,  81 => 27,  78 => 26,  74 => 24,  70 => 22,  68 => 21,  65 => 20,  63 => 19,  60 => 18,  57 => 17,  54 => 16,  50 => 14,  46 => 12,  44 => 11,  41 => 10,  39 => 9,  36 => 8,  33 => 7,  31 => 6,  28 => 5,  26 => 4,  19 => 1,);
    }
}
/* <li class="item-lesson clearfix" id="lesson-{{ lesson.id }}"style="word-break: break-all;" >*/
/*   <div class="item-line"></div>*/
/*   <div class="item-content">*/
/*     {% set mediaStatus = lesson.mediaStatus|default(null) %}*/
/* */
/*     {% if lesson.type == 'video' %}*/
/*       {% if mediaStatus == 'waiting' %}*/
/*       <i class="fa fa-file-video-o text-warning"></i>*/
/*       {% elseif mediaStatus == 'doing' %}*/
/*       <i class="fa fa-file-video-o text-info"></i>*/
/*       {% elseif mediaStatus == 'error' %}*/
/*       <i class="fa fa-file-video-o text-danger"></i>*/
/*       {% else %}*/
/*       <i class="fa fa-file-video-o text-success"></i>*/
/*       {% endif %}*/
/*     {% elseif lesson.type == 'live' %}*/
/*       {% if mediaStatus == 'waiting' %}*/
/*       <i class="fa fa-video-camera text-warning"></i>*/
/*       {% elseif mediaStatus == 'doing' %}*/
/*       <i class="fa fa-video-camera text-info"></i>*/
/*       {% elseif mediaStatus == 'error' %}*/
/*       <i class="fa fa-video-camera text-danger"></i>*/
/*       {% else %}*/
/*       <i class="fa fa-video-camera text-success"></i>*/
/*       {% endif %}*/
/*     {% elseif lesson.type == 'audio' %}*/
/*       <i class="fa fa-file-audio-o text-success"></i>*/
/*     {% elseif lesson.type == 'testpaper' %}*/
/*       <i class="fa fa-file-text-o text-success"></i>*/
/*     {% elseif lesson.type == 'text' %}*/
/*       <i class="fa fa-file-photo-o text-success"></i>*/
/*     {% elseif lesson.type == 'document' %}*/
/*       <i class="fa fa-files-o text-success"></i>*/
/*     {% elseif lesson.type == 'flash' %}*/
/*       <i class="fa fa-film text-success"></i>*/
/*     {% else %}*/
/*       <i class="fa fa-file-powerpoint-o text-success"></i>*/
/*     {% endif %}*/
/*     {% if setting('course.custom_chapter_enabled')|default(true) %} */
/*       课时 <span class="number">{{ lesson.number }}</span>：*/
/*     {% endif %}*/
/*     {% if lesson.free == 1 %}<span class="label label-danger">免费</span>{% endif %}*/
/*     */
/*     {% if lesson.type != 'text' and lesson.type != 'live' and lesson.type != 'testpaper' and lesson.mediaId != 0 and not file|default(false) %}*/
/*       <span class="label label-danger fileDeletedLesson" title="课时文件已删除">无效课时</span>*/
/*     {% endif %}*/
/*     {{ lesson.title }}*/
/* */
/*     {% if lesson.type in ['video', 'audio'] %}*/
/*       <span class="text-muted">{{ lesson.length|duration }}</span>*/
/*     {% endif %}*/
/* */
/*     {% if lesson.type in ['live'] %}*/
/*       <span class="text-muted">{{ lesson.startTime|date_format }}</span>*/
/*     {% endif %}*/
/* */
/*     {% if lesson.giveCredit > 0 %}*/
/*       <small class="text-muted">({{ lesson.giveCredit }}学分)</small>*/
/*     {% endif %}*/
/* */
/*     {% if lesson.requireCredit > 0 %}*/
/*       <small class="text-muted">(需{{ lesson.requireCredit }}学分)</small>*/
/*     {% endif %}*/
/* */
/*     {% if lesson.type != 'testpaper' %}*/
/*       {% set mediaTypeName = lesson.type == 'video' ? '视频' : (lesson.type == 'audio' ? '音频' : '文件') %}*/
/*       {% if mediaStatus == 'waiting' %}*/
/*         <span class="text-warning">(正在等待{{ mediaTypeName }}格式转换)</span>*/
/*       {% elseif mediaStatus == 'doing' %}*/
/*         <span class="text-info">(正在转换{{ mediaTypeName }}格式)</span>*/
/*       {% elseif mediaStatus == 'error' %}*/
/*         <span class="text-danger">({{ mediaTypeName }}格式转换失败)</span>*/
/*       {% endif %}*/
/*     {% endif  %}*/
/* */
/*     {% if lesson.status == 'unpublished' %}*/
/*       <span class="unpublish-warning text-warning">(未发布)</span>*/
/*     {% endif %}*/
/*   </div>*/
/* */
/*   <div class="item-actions">*/
/*     <a class="btn btn-link" data-toggle="modal" data-target="#modal" data-backdrop="static" data-keyboard="false"*/
/*       {% if lesson.type == 'testpaper' %}*/
/*         data-url="{{ path('course_manage_lesson_edit_testpaper', {courseId:course.id, lessonId:lesson.id}) }}"*/
/*       {% elseif lesson.type == 'live' %}*/
/*         data-url="{{ path('live_course_manage_lesson_edit', {courseId:course.id, lessonId:lesson.id}) }}"*/
/*       {% else %}*/
/*         data-url="{{ path('course_manage_lesson_edit', {courseId:course.id, lessonId:lesson.id}) }}"*/
/*       {% endif %}*/
/*       ><span class="es-icon es-icon-edit prs"></span>编辑</a>*/
/*     {% if lesson.type == 'testpaper' %}*/
/*       <a class="btn btn-link" href="{{ path('course_manage_preview_test', {testId:lesson.mediaId}) }}" target="_blank"><span class="es-icon es-icon-visibility prs"></span>预览</a>*/
/*     {% else %}*/
/*       <a class="btn btn-link" href="{{ path('course_learn', {id:course.id, preview:1}) }}#lesson/{{ lesson.id }}" target="_blank"><span class="es-icon es-icon-visibility prs"></span>预览</a>*/
/*     {% endif %}*/
/*     <span class="dropdown">*/
/*       <a class="dropdown-toggle dropdown-more" id="dropdown-more" data-toggle="dropdown" href="#"><i class="es-icon es-icon-keyboardarrowdown" style="margin-right:3px" aria-haspopup="true" aria-expanded="false"></i>更多</a>*/
/* */
/*       <ul class="dropdown-menu pull-right dropdown-menu-more" role="menu" style="margin-top:12px;min-width:144px" aria-labelledby="dLabel" style="display:none;">*/
/*         */
/*         {% if is_plugin_installed('Homework') and (lesson.type != 'testpaper') %}*/
/*           {% set homework =  homeworks[lesson.id]|default(null) %}*/
/*           {% set homeworkId =  homework.id|default(null) %}*/
/*           {% if homework %}*/
/*             <li><a href="{{ path('course_manage_lesson_homework_edit', {courseId:course.id, lessonId:lesson.id, homeworkId:homeworkId }) }}" ><span class="glyphicon glyphicon-list-alt prs"></span>编辑作业</a></li>*/
/*             <li><a href="{{ path('course_homework_preview', {courseId:course.id,homeworkId:homeworkId }) }}" class="preview-homework-btn" ><span class="glyphicon glyphicon-eye-open prs"></span>预览作业</a></li>*/
/*             <li><a href="javascript:;" class="delete-homework-btn" data-url="{{ path('course_manage_lesson_homework_remove', {courseId:course.id, lessonId:lesson.id, homeworkId:homeworkId }) }}" ><span class="glyphicon glyphicon-trash prs"></span>移除作业</a></li>*/
/*           {% else %}*/
/*             <li><a href="{{ path('course_manage_lesson_homework_create', {courseId:course.id, lessonId:lesson.id,homeworkId:homeworkId}) }}" ><span class="glyphicon glyphicon-list-alt prs"></span>布置作业</a></li>*/
/*           {% endif %}*/
/*             <li class="divider"></li>*/
/*           {% set lessonId = lesson.id %}*/
/*           {% set exercise = exercises[lessonId]|default(null) %}*/
/*           {% if exercise %}*/
/*             <li><a href="javascript:;" class="delete-exercise-btn" data-url="{{ path('course_exercise_delete', {courseId:course.id, lessonId:lesson.id, id:exercise.id }) }}" ><span class="glyphicon glyphicon-trash prs"></span>移除练习</a></li>*/
/*           {% else %}*/
/*             <li><a href="{{ path('course_exercise_create', {courseId:course.id, lessonId:lesson.id}) }}" ><span class="glyphicon glyphicon-list-alt prs"></span>新增练习</a></li>*/
/*           {% endif %}*/
/*           <li class="divider"></li>*/
/*         {% endif %}*/
/* */
/*         {% if lesson.type == 'video' and setting('storage.upload_mode') == 'cloud' %}*/
/*           {% if  file.convertStatus|default(null) == 'success' %}*/
/*           <!-- file.createdUserId|default(null) == app.user.id and -->*/
/*           <li>*/
/*             <a href="{{ path('course_lesson_marker_manage', {courseId:course.id, lessonId:lesson.id}) }}" target="_blank" class="manage-lesson-marker-btn" >*/
/*             <span class="glyphicon glyphicon-list prs"></span>弹题管理*/
/*             </a>*/
/*           </li>*/
/*           <li class="divider"></li>*/
/*           {% endif %}*/
/*         {% endif %}*/
/* */
/*         {% if lesson.type != 'testpaper' %}*/
/*           <li><a href="javascript:;" data-toggle="modal"  data-target="#modal" data-url="{{ path('course_manage_material', {courseId:course.id, lessonId:lesson.id}) }}"><span class="glyphicon glyphicon-paperclip prs"></span>添加资料</a></li>*/
/*           <li class="divider"></li>*/
/*         {% endif %}*/
/*         */
/*         <li class="{% if lesson.status == 'published' %}hidden {% endif %}">*/
/*           <a href="javascript:;" class="publish-lesson-btn" data-url="{{ path('course_manage_lesson_publish', {courseId:course.id, lessonId:lesson.id}) }}">*/
/*             <span class="glyphicon glyphicon-ok-circle prs"></span>发布*/
/*           </a>*/
/*         </li>*/
/* */
/*         <li class="{% if lesson.status == 'unpublished' %}hidden {% endif %}">*/
/*           <a href="javascript:;" class="unpublish-lesson-btn" data-url="{{ path('course_manage_lesson_unpublish', {courseId:course.id, lessonId:lesson.id}) }}">*/
/*             <span class="glyphicon glyphicon-remove-circle prs"></span>取消发布*/
/*           </a>*/
/*         </li>*/
/*         <li class="{% if lesson.status == 'published' %}hidden {% endif %}">*/
/*           <a href="javascript:;" class="delete-lesson-btn" data-url="{{ path('course_manage_lesson_delete', {courseId:course.id, lessonId:lesson.id}) }}">*/
/*             <span class="glyphicon glyphicon-trash prs"></span>删除*/
/*           </a>*/
/*         </li>*/
/*       </ul>*/
/*     </span>*/
/*   </div>*/
/* </li>*/
