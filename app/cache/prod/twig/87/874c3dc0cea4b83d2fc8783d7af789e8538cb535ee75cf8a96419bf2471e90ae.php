<?php

/* TopxiaWebBundle:LiveCourseReplayManage:list-item.html.twig */
class __TwigTemplate_5ac7b6124510069d2954be27026efb5a2c4d9b728a79b9f0b6573c6ef1f94ba4 extends Twig_Template
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
        echo "\">
\t<div class=\"item-line\"></div>
\t<div class=\"item-content\">
\t  ";
        // line 4
        $context["mediaStatus"] = (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "mediaStatus", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "mediaStatus", array()), null)) : (null));
        // line 5
        echo "\t\t
\t\t";
        // line 6
        if (twig_in_filter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()), array(0 => "video", 1 => "live"))) {
            // line 7
            echo "\t\t  ";
            if (((isset($context["mediaStatus"]) ? $context["mediaStatus"] : null) == "waiting")) {
                // line 8
                echo "\t\t\t<span class=\"glyphicon glyphicon-facetime-video text-warning\"></span>
\t\t  ";
            } elseif ((            // line 9
(isset($context["mediaStatus"]) ? $context["mediaStatus"] : null) == "doing")) {
                // line 10
                echo "\t\t\t<span class=\"glyphicon glyphicon-facetime-video text-info\"></span>
\t\t  ";
            } elseif ((            // line 11
(isset($context["mediaStatus"]) ? $context["mediaStatus"] : null) == "error")) {
                // line 12
                echo "\t\t\t<span class=\"glyphicon glyphicon-facetime-video text-danger\"></span>
\t\t  ";
            } else {
                // line 14
                echo "\t\t\t<span class=\"glyphicon glyphicon-facetime-video text-success\"></span>
\t\t  ";
            }
            // line 16
            echo "\t\t";
        }
        // line 17
        echo "
\t\t课时 <span class=\"number\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "number", array()), "html", null, true);
        echo "</span>： ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "title", array()), "html", null, true);
        echo "

\t\t";
        // line 20
        if (twig_in_filter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()), array(0 => "live"))) {
            // line 21
            echo "\t\t  <span class=\"text-muted\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->dateformatFilter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "startTime", array())), "html", null, true);
            echo "</span>
\t\t";
        }
        // line 23
        echo "
\t\t";
        // line 24
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "status", array()) == "unpublished")) {
            // line 25
            echo "\t\t  <span class=\"text-warning\">(未发布)</span>
\t\t";
        }
        // line 27
        echo "
\t\t";
        // line 28
        if ((($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "status", array()) == "published") &&  !$this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "isEnd", array()))) {
            // line 29
            echo "\t\t  <span class=\"text-warning\">(直播未结束)</span>
\t\t";
        }
        // line 31
        echo "
\t\t";
        // line 32
        if ((((($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "status", array()) == "published") && $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "isEnd", array())) && ($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) == "live")) && ($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "replayStatus", array()) == "ungenerated"))) {
            // line 33
            echo "\t\t  <span class=\"text-warning\">(未录制回放)</span>
\t\t";
        } elseif ((((($this->getAttribute(        // line 34
(isset($context["lesson"]) ? $context["lesson"] : null), "status", array()) == "published") && $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "isEnd", array())) && ($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) == "live")) && ($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "replayStatus", array()) == "generated"))) {
            // line 35
            echo "\t\t  <span class=\"text-warning\">(已录制回放)</span>
\t\t";
        }
        // line 37
        echo "
\t</div>

\t<div class=\"item-actions prs\">
\t\t<a class=\"btn btn-link\" title=\"预览\" href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_learn", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "preview" => 1)), "html", null, true);
        echo "#lesson/";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()), "html", null, true);
        echo "\" target=\"_blank\"><span class=\"glyphicon glyphicon-eye-open\"></span></a>

\t\t";
        // line 43
        if ((((($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "status", array()) == "published") && $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "isEnd", array())) && ($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) == "live")) && ($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "replayStatus", array()) == "generated"))) {
            // line 44
            echo "\t\t\t<a href=\"#modal\" class=\"btn btn-link \" title=\"编辑\" data-toggle=\"modal\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("live_course_manage_lesson_replay_edit", array("lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()), "courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\" ><span class=\"glyphicon glyphicon-th-list\"></span></a>
\t\t";
        }
        // line 46
        echo "
\t\t";
        // line 47
        if ((((($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "status", array()) == "published") && ($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "replayStatus", array()) == "ungenerated")) && ($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) == "live")) && $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "isEnd", array()))) {
            // line 48
            echo "\t\t\t<button class=\"btn btn-link replay-lesson-btn\" 
\t\t\t";
            // line 49
            if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "replayStatus", array()) == "ungenerated")) {
                // line 50
                echo "\t\t\ttitle=\"录制\"
\t\t\t";
            } else {
                // line 52
                echo "\t\t\ttitle=\"重新录制\"
\t\t\t";
            }
            // line 54
            echo "\t\t\t data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("live_course_lesson_replay_create", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-facetime-video\"></span></button>
\t\t";
        }
        // line 56
        echo "

\t 
\t</div>
</li>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:LiveCourseReplayManage:list-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 56,  146 => 54,  142 => 52,  138 => 50,  136 => 49,  133 => 48,  131 => 47,  128 => 46,  122 => 44,  120 => 43,  113 => 41,  107 => 37,  103 => 35,  101 => 34,  98 => 33,  96 => 32,  93 => 31,  89 => 29,  87 => 28,  84 => 27,  80 => 25,  78 => 24,  75 => 23,  69 => 21,  67 => 20,  60 => 18,  57 => 17,  54 => 16,  50 => 14,  46 => 12,  44 => 11,  41 => 10,  39 => 9,  36 => 8,  33 => 7,  31 => 6,  28 => 5,  26 => 4,  19 => 1,);
    }
}
/* <li class="item-lesson clearfix" id="lesson-{{ lesson.id }}">*/
/* 	<div class="item-line"></div>*/
/* 	<div class="item-content">*/
/* 	  {% set mediaStatus = lesson.mediaStatus|default(null) %}*/
/* 		*/
/* 		{% if lesson.type in ['video', 'live'] %}*/
/* 		  {% if mediaStatus == 'waiting' %}*/
/* 			<span class="glyphicon glyphicon-facetime-video text-warning"></span>*/
/* 		  {% elseif mediaStatus == 'doing' %}*/
/* 			<span class="glyphicon glyphicon-facetime-video text-info"></span>*/
/* 		  {% elseif mediaStatus == 'error' %}*/
/* 			<span class="glyphicon glyphicon-facetime-video text-danger"></span>*/
/* 		  {% else %}*/
/* 			<span class="glyphicon glyphicon-facetime-video text-success"></span>*/
/* 		  {% endif %}*/
/* 		{% endif %}*/
/* */
/* 		课时 <span class="number">{{ lesson.number }}</span>： {{ lesson.title }}*/
/* */
/* 		{% if lesson.type in ['live'] %}*/
/* 		  <span class="text-muted">{{ lesson.startTime|date_format }}</span>*/
/* 		{% endif %}*/
/* */
/* 		{% if lesson.status == 'unpublished' %}*/
/* 		  <span class="text-warning">(未发布)</span>*/
/* 		{% endif %}*/
/* */
/* 		{% if lesson.status == 'published' and not lesson.isEnd %}*/
/* 		  <span class="text-warning">(直播未结束)</span>*/
/* 		{% endif %}*/
/* */
/* 		{% if lesson.status == 'published' and lesson.isEnd and lesson.type == 'live' and lesson.replayStatus == 'ungenerated' %}*/
/* 		  <span class="text-warning">(未录制回放)</span>*/
/* 		{% elseif lesson.status == 'published' and lesson.isEnd and lesson.type == 'live' and lesson.replayStatus == 'generated' %}*/
/* 		  <span class="text-warning">(已录制回放)</span>*/
/* 		{% endif %}*/
/* */
/* 	</div>*/
/* */
/* 	<div class="item-actions prs">*/
/* 		<a class="btn btn-link" title="预览" href="{{ path('course_learn', {id:course.id, preview:1}) }}#lesson/{{ lesson.id }}" target="_blank"><span class="glyphicon glyphicon-eye-open"></span></a>*/
/* */
/* 		{% if lesson.status =='published' and lesson.isEnd and lesson.type == 'live' and lesson.replayStatus == 'generated' %}*/
/* 			<a href="#modal" class="btn btn-link " title="编辑" data-toggle="modal" data-url="{{ path('live_course_manage_lesson_replay_edit',{ lessonId:lesson.id ,courseId:course.id}) }}" ><span class="glyphicon glyphicon-th-list"></span></a>*/
/* 		{% endif %}*/
/* */
/* 		{% if lesson.status == 'published' and lesson.replayStatus == 'ungenerated' and lesson.type == 'live' and lesson.isEnd %}*/
/* 			<button class="btn btn-link replay-lesson-btn" */
/* 			{% if lesson.replayStatus == 'ungenerated' %}*/
/* 			title="录制"*/
/* 			{% else %}*/
/* 			title="重新录制"*/
/* 			{% endif %}*/
/* 			 data-url="{{ path('live_course_lesson_replay_create', {courseId:course.id, lessonId:lesson.id}) }}"><span class="glyphicon glyphicon-facetime-video"></span></button>*/
/* 		{% endif %}*/
/* */
/* */
/* 	 */
/* 	</div>*/
/* </li>*/
