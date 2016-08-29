<?php

/* TopxiaWebBundle:Marker:question.html.twig */
class __TwigTemplate_4ac0a86d13577ff07a89f7b042987594dfd14ce3dfc850aaffd690d4ed0fc66b extends Twig_Template
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
        echo "<div class=\"toolbar toolbar-open toolbar-question-marker\" 
\tdata-marker-metas-url=\"
\t";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_lesson_marker_metas", array("mediaId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "mediaId", array()))), "html", null, true);
        echo "\"
\tdata-queston-marker-add-url=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_lesson_question_marker_add", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()))), "html", null, true);
        echo "\" 
\tdata-queston-marker-delete-url=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_lesson_question_marker_delete", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()))), "html", null, true);
        echo "\" 
\tdata-marker-merge-url=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_lesson_marker_merge", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()))), "html", null, true);
        echo "\" 
\tdata-marker-update-url=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_lesson_marker_update", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()))), "html", null, true);
        echo "\"
\tdata-queston-marker-sort-url=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_lesson_question_marker_sort", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()))), "html", null, true);
        echo "\"
\t>
\t<div class=\"question-menu\">
\t\t<form class=\"form-horizontal mark-from\" action=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_lesson_question_marker_search", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()))), "html", null, true);
        echo "\" method=\"post\" novalidate>
\t\t\t<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">\t
\t\t\t<div class=\"form-group\">
\t\t\t\t<div class=\"col-xs-5\">
\t\t\t\t\t<select class=\"form-control\" name=\"target\" >
\t\t\t\t\t\t";
        // line 16
        echo $this->env->getExtension('topxia_html_twig')->selectOptions((isset($context["targetChoices"]) ? $context["targetChoices"] : null), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "request", array()), "get", array(0 => "target"), "method"));
        echo "
\t\t\t\t\t</select>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-5\">
\t\t\t\t\t<input type=\"text\" id=\"keyword\" name=\"keyword\" class=\"form-control\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "keyword"), "method"), "html", null, true);
        echo "\" placeholder=\"关键词\"  >
\t\t\t\t</div>
\t\t\t\t<div class=\"col-xs-2\">
\t\t\t\t\t<button class=\"btn btn-primary\">搜索</button>
\t\t\t\t</div>
\t\t\t</div>
\t\t</form>
\t\t<div class=\"list-title\">
\t\t\t<div class=\"row \">
\t\t\t\t<div class=\"col-xs-6\">题干</div>
\t\t\t\t<div class=\"col-xs-3 content\">题型</div>
\t\t\t\t<div class=\"col-xs-1 content\">难度</div>
\t\t\t\t<div class=\"col-xs-2 content \">操作</div>
\t\t\t</div>
\t\t</div>
\t\t<ul class=\"lesson-list gruop-lesson-list\" id=\"subject-lesson-list\">
\t\t\t
\t\t</ul>
\t</div>
</div>
<script>app.load('marker/question')</script>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Marker:question.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 20,  60 => 16,  53 => 12,  49 => 11,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div class="toolbar toolbar-open toolbar-question-marker" */
/* 	data-marker-metas-url="*/
/* 	{{path('course_lesson_marker_metas',{'mediaId':lesson.mediaId})}}"*/
/* 	data-queston-marker-add-url="{{path('course_lesson_question_marker_add',{'courseId':course.id,'lessonId':lesson.id})}}" */
/* 	data-queston-marker-delete-url="{{path('course_lesson_question_marker_delete',{'courseId':course.id,'lessonId':lesson.id})}}" */
/* 	data-marker-merge-url="{{path('course_lesson_marker_merge',{'courseId':course.id,'lessonId':lesson.id})}}" */
/* 	data-marker-update-url="{{path('course_lesson_marker_update',{'courseId':course.id,'lessonId':lesson.id})}}"*/
/* 	data-queston-marker-sort-url="{{path('course_lesson_question_marker_sort',{'courseId':course.id,'lessonId':lesson.id})}}"*/
/* 	>*/
/* 	<div class="question-menu">*/
/* 		<form class="form-horizontal mark-from" action="{{path('course_lesson_question_marker_search',{courseId:course.id,lessonId:lesson.id})}}" method="post" novalidate>*/
/* 			<input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">	*/
/* 			<div class="form-group">*/
/* 				<div class="col-xs-5">*/
/* 					<select class="form-control" name="target" >*/
/* 						{{ select_options(targetChoices, app.request.request.get('target'))}}*/
/* 					</select>*/
/* 				</div>*/
/* 				<div class="col-xs-5">*/
/* 					<input type="text" id="keyword" name="keyword" class="form-control" value="{{ app.request.query.get('keyword') }}" placeholder="关键词"  >*/
/* 				</div>*/
/* 				<div class="col-xs-2">*/
/* 					<button class="btn btn-primary">搜索</button>*/
/* 				</div>*/
/* 			</div>*/
/* 		</form>*/
/* 		<div class="list-title">*/
/* 			<div class="row ">*/
/* 				<div class="col-xs-6">题干</div>*/
/* 				<div class="col-xs-3 content">题型</div>*/
/* 				<div class="col-xs-1 content">难度</div>*/
/* 				<div class="col-xs-2 content ">操作</div>*/
/* 			</div>*/
/* 		</div>*/
/* 		<ul class="lesson-list gruop-lesson-list" id="subject-lesson-list">*/
/* 			*/
/* 		</ul>*/
/* 	</div>*/
/* </div>*/
/* <script>app.load('marker/question')</script>*/
/* */
