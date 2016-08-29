<?php

/* TopxiaWebBundle:LiveCourseReplayManage:replay-lesson-modal.html.twig */
class __TwigTemplate_6ec4a7b6dc5c0fa9d424c3712660ec5b9e1ec8704c7068b00baa6ccb3c7c66e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:LiveCourseReplayManage:replay-lesson-modal.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["modalSize"] = "large";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "录播显示编辑";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "\t<form class=\"form-inline\" id=\"replay_manage_form\" method=\"POST\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("live_course_manage_lesson_replay_edit", array("lessonId" => (isset($context["lessonId"]) ? $context["lessonId"] : null), "courseId" => (isset($context["courseId"]) ? $context["courseId"] : null))), "html", null, true);
        echo "\">
\t  \t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["replayLessons"]) ? $context["replayLessons"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["replayLesson"]) {
            // line 8
            echo "\t  \t\t<div class=\"form-group mbm\" style=\"position: relative; padding-left:20px;height: 40px;line-height:40px\">
\t  \t\t\t<label style=\"position: absolute; top:0;left:0\"><input type=\"checkbox\" name=\"visibleReplaies[]\" ";
            // line 9
            if (($this->getAttribute($context["replayLesson"], "hidden", array()) == 0)) {
                echo "checked=\"checked\" ";
            }
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["replayLesson"], "id", array()), "html", null, true);
            echo "\"></label>
\t  \t\t\t<a class=\"link-light text-overflow\" style=\"width:150px\" href=\"javascript:;\" id=\"replay-name-span-";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($context["replayLesson"], "id", array()), "html", null, true);
            echo "\" role='replay-name-span' data-replay-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["replayLesson"], "id", array()), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->getAttribute($context["replayLesson"], "title", array()), "html", null, true);
            echo "</a>
\t\t\t\t\t<input class=\"form-control\" style=\"width:150px; display:none\" id=\"replay-name-input-";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["replayLesson"], "id", array()), "html", null, true);
            echo "\" data-replay-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["replayLesson"], "id", array()), "html", null, true);
            echo "\" role='replay-name-input' data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("live_course_manage_lesson_replay_title_update", array("courseId" => $this->getAttribute($context["replayLesson"], "courseId", array()), "lessonId" => $this->getAttribute($context["replayLesson"], "lessonId", array()), "replayId" => $this->getAttribute($context["replayLesson"], "id", array()))), "html", null, true);
            echo "\" type=\"text\" name=\"name\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["replayLesson"], "title", array()), "html", null, true);
            echo "\"> 
\t  \t\t</div>
\t  \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['replayLesson'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "\t  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
\t</form>

\t<script>app.load('live-course-manage/replay-lesson-modal')</script>

";
    }

    // line 20
    public function block_footer($context, array $blocks = array())
    {
        // line 21
        echo "\t<button id=\"server-create-btn\" data-submiting-text=\"正在提交\" type=\"submit\" class=\"btn btn-primary pull-right\" data-toggle=\"form-submit\" data-target=\"#replay_manage_form\">提交</button>
\t<button type=\"button\" class=\"btn btn-link pull-right\" data-dismiss=\"modal\">取消</button>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:LiveCourseReplayManage:replay-lesson-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 21,  96 => 20,  85 => 14,  70 => 11,  62 => 10,  54 => 9,  51 => 8,  47 => 7,  42 => 6,  39 => 5,  33 => 4,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% set modalSize = 'large' %}*/
/* {% block title %}录播显示编辑{% endblock %}*/
/* {% block body %}*/
/* 	<form class="form-inline" id="replay_manage_form" method="POST" action="{{ path('live_course_manage_lesson_replay_edit',{lessonId:lessonId,courseId:courseId}) }}">*/
/* 	  	{% for replayLesson in replayLessons %}*/
/* 	  		<div class="form-group mbm" style="position: relative; padding-left:20px;height: 40px;line-height:40px">*/
/* 	  			<label style="position: absolute; top:0;left:0"><input type="checkbox" name="visibleReplaies[]" {% if replayLesson.hidden == 0 %}checked="checked" {% endif %} value="{{replayLesson.id}}"></label>*/
/* 	  			<a class="link-light text-overflow" style="width:150px" href="javascript:;" id="replay-name-span-{{replayLesson.id}}" role='replay-name-span' data-replay-id="{{replayLesson.id}}" >{{ replayLesson.title }}</a>*/
/* 					<input class="form-control" style="width:150px; display:none" id="replay-name-input-{{replayLesson.id}}" data-replay-id="{{replayLesson.id}}" role='replay-name-input' data-url="{{path('live_course_manage_lesson_replay_title_update', {courseId:replayLesson.courseId, lessonId:replayLesson.lessonId, replayId:replayLesson.id})}}" type="text" name="name" value="{{ replayLesson.title }}"> */
/* 	  		</div>*/
/* 	  	{% endfor %}*/
/* 	  <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/* 	</form>*/
/* */
/* 	<script>app.load('live-course-manage/replay-lesson-modal')</script>*/
/* */
/* {% endblock %}*/
/* {% block footer %}*/
/* 	<button id="server-create-btn" data-submiting-text="正在提交" type="submit" class="btn btn-primary pull-right" data-toggle="form-submit" data-target="#replay_manage_form">提交</button>*/
/* 	<button type="button" class="btn btn-link pull-right" data-dismiss="modal">取消</button>*/
/* {% endblock %}*/
