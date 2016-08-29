<?php

/* TopxiaWebBundle:CourseManage:learning-data.html.twig */
class __TwigTemplate_733f2cfc1ad616b4ce0bf515eb20b64962fd0cecb7a661f8be44cb17cf9f0349 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:CourseManage:layout.html.twig", "TopxiaWebBundle:CourseManage:learning-data.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:CourseManage:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["side_nav"] = "course_manage_data";
        // line 6
        $context["script_controller"] = "course-manage/manage";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "课程学习数据 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "
<div class=\"panel panel-default panel-col course-data\">
    <div class=\"panel-heading\">课程学习数据</div>
    <div class=\"panel-body\">
      <div class=\"table-responsive\">
        <table class=\"table table-bordered\" id=\"learning-data-table\" style=\"word-break:break-all;text-align:center;\">
          <tr class=\"active\">
            <td>课程名</td>
            <td>课程学习人数</td>
            <td>课程完成人数</td>
            <td>课程平均学习时长(分)</td>
            <td>课程提问总数</td>
            <td>课程笔记总数</td>
            <td>----</td>
            ";
        // line 24
        echo "          </tr>
          <tr>
            <td><a data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_detail_data", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\" href=\"javascript:\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
        echo "</a></td>
            <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "studentNum", array()), "html", null, true);
        echo "</td>
            <td>";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["isLearnedNum"]) ? $context["isLearnedNum"] : null), "html", null, true);
        echo "</td>
            <td>";
        // line 29
        echo twig_escape_filter($this->env, twig_round(((isset($context["learnTime"]) ? $context["learnTime"] : null) / 60), 0, "floor"), "html", null, true);
        echo "</td>
            <td>";
        // line 30
        echo twig_escape_filter($this->env, (isset($context["questionCount"]) ? $context["questionCount"] : null), "html", null, true);
        echo "</td>
            <td>";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["noteCount"]) ? $context["noteCount"] : null), "html", null, true);
        echo "</td>
            <td>----</td>
            ";
        // line 34
        echo "          </tr>
          <tr class=\"active\">
            <td width=\"35%\">课时名</td>
            <td>课时学习人数</td>
            <td>课时完成人数</td>
            <td>课时平均学习时长(分)</td>
            <td>音视频时长(分)</td>
            <td>音视频平均观看时长(分)</td>
            <td>测试平均得分</td>
         ";
        // line 44
        echo "          </tr>
          ";
        // line 45
        if ((isset($context["lessons"]) ? $context["lessons"] : null)) {
            // line 46
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["lessons"]) ? $context["lessons"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lesson"]) {
                // line 47
                echo "              <tr>
                <td><a data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_lesson_detail_data", array("courseId" => $this->getAttribute($context["lesson"], "courseId", array()), "lessonId" => $this->getAttribute($context["lesson"], "id", array()))), "html", null, true);
                echo "\" href=\"javascript:\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["lesson"], "title", array()), "html", null, true);
                if (($this->getAttribute($context["lesson"], "type", array()) == "text")) {
                    echo "（图文）";
                } elseif (($this->getAttribute($context["lesson"], "type", array()) == "video")) {
                    echo "（视频）";
                } elseif (($this->getAttribute($context["lesson"], "type", array()) == "audio")) {
                    echo "（音频）";
                } elseif (($this->getAttribute($context["lesson"], "type", array()) == "testpaper")) {
                    echo "（试卷）";
                } elseif (($this->getAttribute($context["lesson"], "type", array()) == "ppt")) {
                    echo "（ppt）";
                }
                echo "</a></td></td>
                <td>";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["lesson"], "LearnedNum", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["lesson"], "finishedNum", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 51
                echo twig_escape_filter($this->env, twig_round(($this->getAttribute($context["lesson"], "learnTime", array()) / 60), 0, "floor"), "html", null, true);
                echo "</td>
                <td>";
                // line 52
                if ((($this->getAttribute($context["lesson"], "type", array()) == "audio") || ($this->getAttribute($context["lesson"], "type", array()) == "video"))) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["lesson"], "length", array()), "html", null, true);
                } else {
                    echo "----";
                }
                echo "</td>
                <td>";
                // line 53
                if ((($this->getAttribute($context["lesson"], "mediaSource", array()) != "self") && ($this->getAttribute($context["lesson"], "type", array()) == "video"))) {
                    echo "无";
                } elseif ((($this->getAttribute($context["lesson"], "type", array()) == "audio") || ($this->getAttribute($context["lesson"], "type", array()) == "video"))) {
                    echo twig_escape_filter($this->env, twig_round(($this->getAttribute($context["lesson"], "watchTime", array()) / 60), 0, "floor"), "html", null, true);
                } else {
                    echo "----";
                }
                echo "</td>
                <td>";
                // line 54
                if (($this->getAttribute($context["lesson"], "type", array()) == "testpaper")) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["lesson"], "score", array()), "html", null, true);
                } else {
                    echo "----";
                }
                echo "</td>
                ";
                // line 56
                echo "              </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lesson'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "          ";
        }
        // line 59
        echo "        </table>
        <p class=\"text-success\">注：网络视频的观看时长无法获取</p>
      </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseManage:learning-data.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 59,  177 => 58,  170 => 56,  162 => 54,  152 => 53,  144 => 52,  140 => 51,  136 => 50,  132 => 49,  115 => 48,  112 => 47,  107 => 46,  105 => 45,  102 => 44,  91 => 34,  86 => 31,  82 => 30,  78 => 29,  74 => 28,  70 => 27,  64 => 26,  60 => 24,  44 => 9,  41 => 8,  34 => 3,  30 => 1,  28 => 6,  26 => 5,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:CourseManage:layout.html.twig' %}*/
/* */
/* {% block title %}课程学习数据 - {{ parent() }}{% endblock %}*/
/* */
/* {% set side_nav = 'course_manage_data' %}*/
/* {% set script_controller = 'course-manage/manage' %}*/
/* */
/* {% block main %}*/
/* */
/* <div class="panel panel-default panel-col course-data">*/
/*     <div class="panel-heading">课程学习数据</div>*/
/*     <div class="panel-body">*/
/*       <div class="table-responsive">*/
/*         <table class="table table-bordered" id="learning-data-table" style="word-break:break-all;text-align:center;">*/
/*           <tr class="active">*/
/*             <td>课程名</td>*/
/*             <td>课程学习人数</td>*/
/*             <td>课程完成人数</td>*/
/*             <td>课程平均学习时长(分)</td>*/
/*             <td>课程提问总数</td>*/
/*             <td>课程笔记总数</td>*/
/*             <td>----</td>*/
/*             {#<td style="width:10%">----</td>#}*/
/*           </tr>*/
/*           <tr>*/
/*             <td><a data-toggle="modal" data-target="#modal" data-url="{{path('course_detail_data',{id:course.id})}}" href="javascript:">{{course.title}}</a></td>*/
/*             <td>{{course.studentNum}}</td>*/
/*             <td>{{isLearnedNum}}</td>*/
/*             <td>{{(learnTime/60)|round(0, 'floor')}}</td>*/
/*             <td>{{questionCount}}</td>*/
/*             <td>{{noteCount}}</td>*/
/*             <td>----</td>*/
/*             {#<td>----</td>#}*/
/*           </tr>*/
/*           <tr class="active">*/
/*             <td width="35%">课时名</td>*/
/*             <td>课时学习人数</td>*/
/*             <td>课时完成人数</td>*/
/*             <td>课时平均学习时长(分)</td>*/
/*             <td>音视频时长(分)</td>*/
/*             <td>音视频平均观看时长(分)</td>*/
/*             <td>测试平均得分</td>*/
/*          {# <td>直播同时在线人数峰值</td> #}*/
/*           </tr>*/
/*           {% if lessons %}*/
/*             {% for lesson in lessons %}*/
/*               <tr>*/
/*                 <td><a data-toggle="modal" data-target="#modal" data-url="{{path('course_lesson_detail_data',{courseId:lesson.courseId,lessonId:lesson.id})}}" href="javascript:">{{lesson.title}}{% if lesson.type == "text" %}（图文）{% elseif lesson.type == 'video' %}（视频）{% elseif lesson.type == 'audio' %}（音频）{% elseif lesson.type == 'testpaper' %}（试卷）{% elseif lesson.type == 'ppt' %}（ppt）{% endif %}</a></td></td>*/
/*                 <td>{{lesson.LearnedNum}}</td>*/
/*                 <td>{{lesson.finishedNum}}</td>*/
/*                 <td>{{(lesson.learnTime/60)|round(0, 'floor')}}</td>*/
/*                 <td>{% if lesson.type =='audio' or lesson.type =='video' %}{{lesson.length}}{% else %}----{% endif %}</td>*/
/*                 <td>{% if lesson.mediaSource != 'self' and lesson.type == 'video' %}无{% elseif lesson.type =='audio' or lesson.type =='video'%}{{(lesson.watchTime/60)|round(0, 'floor')}}{% else %}----{% endif %}</td>*/
/*                 <td>{% if lesson.type =='testpaper' %}{{lesson.score}}{% else %}----{% endif %}</td>*/
/*                 {#<td>{% if lesson.type =='live' and lesson.replayStatus == 'generated' %}{{lesson.maxOnlineNum}}{% else %}----{% endif %}</td>#}*/
/*               </tr>*/
/*             {% endfor %}*/
/*           {% endif %}*/
/*         </table>*/
/*         <p class="text-success">注：网络视频的观看时长无法获取</p>*/
/*       </div>*/
/*     </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/* */
