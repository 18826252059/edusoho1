<?php

/* TopxiaWebBundle:CourseTestpaperManage:testpaper-modal.html.twig */
class __TwigTemplate_6640d83d6dfe1657896bd497f34844c7661ba89a4404986cc17f13a96ee644c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:CourseTestpaperManage:testpaper-modal.html.twig", 1);
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
        $context["lesson"] = ((array_key_exists("lesson", $context)) ? (_twig_default_filter((isset($context["lesson"]) ? $context["lesson"] : null), null)) : (null));
        // line 4
        $context["modal_class"] = "modal-lg";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        // line 7
        echo "  ";
        if ((isset($context["lesson"]) ? $context["lesson"] : null)) {
            echo "编辑试卷课时";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "number", array()), "html", null, true);
        } else {
            echo "添加试卷课时";
        }
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "  ";
        if ((isset($context["paperOptions"]) ? $context["paperOptions"] : null)) {
            // line 12
            echo "    <form id=\"course-lesson-form\" class=\"form-horizontal lesson-form\" method=\"post\"  ";
            if (array_key_exists("parentId", $context)) {
                echo "data-parentId=\"";
                echo twig_escape_filter($this->env, (isset($context["parentId"]) ? $context["parentId"] : null), "html", null, true);
                echo "\" ";
            }
            // line 13
            echo "      ";
            if ((isset($context["lesson"]) ? $context["lesson"] : null)) {
                // line 14
                echo "        action=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_edit_testpaper", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()))), "html", null, true);
                echo "\"
      ";
            } else {
                // line 16
                echo "        action=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson_create_testpaper", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\"
      ";
            }
            // line 18
            echo "      >

      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\"><label for=\"lesson-mediaId-field\">试卷</label></div>
        <div class=\"col-md-9 controls\">
          <select id=\"lesson-mediaId-field\" class=\"form-control\" name=\"mediaId\" data-url=\"";
            // line 23
            echo $this->env->getExtension('routing')->getPath("course_manage_real_time_testpaper_check");
            echo "\" data-get-testpaper-items=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_testpaper_items_get", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\">
            ";
            // line 24
            echo $this->env->getExtension('topxia_html_twig')->selectOptions((isset($context["paperOptions"]) ? $context["paperOptions"] : null), (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "mediaId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "mediaId", array()), 0)) : (0)), "请选择试卷");
            echo "
          </select>
          <div class=\"help-block\">如果找不到试卷，请先确定该试卷已经发布</div>
        </div>
      </div>

      <div class=\"form-group\" id=\"questionItemShowDiv\" style=\"display:none;\">
        <div class=\"col-md-2 control-label\"></div>
        <div class=\"col-md-9 controls\" id=\"questionItemShowTable\">
          
        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\"><label for=\"lesson-title-field\">标题</label></div>
        <div class=\"col-md-9 controls\">
          <input id=\"lesson-title-field\" class=\"form-control\" type=\"text\" name=\"title\" value=\"";
            // line 40
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "title", array()), "")) : ("")), "html", null, true);
            echo "\">
        </div>
      </div>
      ";
            // line 61
            echo "
      ";
            // line 62
            if (twig_in_filter("lesson_credit", (isset($context["features"]) ? $context["features"] : null))) {
                // line 63
                echo "      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\"><label for=\"lesson-title-field\">限制学分</label></div>
        <div class=\"col-md-9 controls\">
          <input class=\"form-control width-input width-input-small\" type=\"text\" name=\"requireCredit\" value=\"";
                // line 66
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "requireCredit", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "requireCredit", array()), 0)) : (0)), "html", null, true);
                echo "\"> 分
          <div class=\"help-block\">参加此次考试所需的学分，０分则不限制。</div>
        </div>
      </div>
      ";
            }
            // line 71
            echo "
      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\"><label for=\"lesson-suggest-hour-field\">学习时长</label></div>
        <div class=\"col-md-9 controls\">建议 
          <input id=\"lesson-suggest-hour-field\" class=\"form-control width-input width-input-small\" type=\"text\" name=\"suggestHours\" value=\"";
            // line 75
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "suggestHours", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "suggestHours", array()), "0.0")) : ("0.0")), "html", null, true);
            echo "\"> 小时
          <div class=\"help-block\">（如未设置，则默认完成时长为：客观题每题5分钟、主观题每题30分钟。合计取整）
          </div>
        </div>
      </div>

      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
            echo "\">
    </form>
    <script>app.load('course-manage/lesson-testpaper-modal')</script>
    
  ";
        } else {
            // line 86
            echo "    <div class=\"empty\">尚未创建试卷，请先<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_testpaper", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\">创建试卷</a>。</div>
  ";
        }
        // line 88
        echo "
";
    }

    // line 91
    public function block_footer($context, array $blocks = array())
    {
        // line 92
        echo "  ";
        if ((isset($context["paperOptions"]) ? $context["paperOptions"] : null)) {
            // line 93
            echo "    <button type=\"button\" class=\"btn btn-link\" data-dismiss=\"modal\">取消</button>
    <button id=\"course-testpaper-btn\" data-submiting-text=\"正在提交\" type=\"submit\" class=\"btn btn-primary\" data-toggle=\"form-submit\" data-target=\"#course-lesson-form\">保存</button>
  ";
        } else {
            // line 96
            echo "    <button type=\"button\" class=\"btn btn-link\" data-dismiss=\"modal\">取消</button>
    ";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseTestpaperManage:testpaper-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 96,  172 => 93,  169 => 92,  166 => 91,  161 => 88,  155 => 86,  147 => 81,  138 => 75,  132 => 71,  124 => 66,  119 => 63,  117 => 62,  114 => 61,  108 => 40,  89 => 24,  83 => 23,  76 => 18,  70 => 16,  64 => 14,  61 => 13,  54 => 12,  51 => 11,  48 => 10,  38 => 7,  35 => 6,  31 => 1,  29 => 4,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% set lesson = lesson|default(null) %}*/
/* {% set modal_class= "modal-lg" %}*/
/* */
/* {% block title %}*/
/*   {% if lesson %}编辑试卷课时{{ lesson.number }}{% else %}添加试卷课时{% endif %}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*   {% if paperOptions %}*/
/*     <form id="course-lesson-form" class="form-horizontal lesson-form" method="post"  {% if parentId is defined%}data-parentId="{{parentId}}" {% endif %}*/
/*       {% if lesson %}*/
/*         action="{{ path('course_manage_lesson_edit_testpaper', {courseId:course.id, lessonId:lesson.id}) }}"*/
/*       {% else %}*/
/*         action="{{ path('course_manage_lesson_create_testpaper', {id:course.id}) }}"*/
/*       {% endif %}*/
/*       >*/
/* */
/*       <div class="form-group">*/
/*         <div class="col-md-2 control-label"><label for="lesson-mediaId-field">试卷</label></div>*/
/*         <div class="col-md-9 controls">*/
/*           <select id="lesson-mediaId-field" class="form-control" name="mediaId" data-url="{{ path('course_manage_real_time_testpaper_check') }}" data-get-testpaper-items="{{ path('course_manage_testpaper_items_get',{courseId:course.id}) }}">*/
/*             {{select_options(paperOptions, lesson.mediaId|default(0), '请选择试卷')}}*/
/*           </select>*/
/*           <div class="help-block">如果找不到试卷，请先确定该试卷已经发布</div>*/
/*         </div>*/
/*       </div>*/
/* */
/*       <div class="form-group" id="questionItemShowDiv" style="display:none;">*/
/*         <div class="col-md-2 control-label"></div>*/
/*         <div class="col-md-9 controls" id="questionItemShowTable">*/
/*           */
/*         </div>*/
/*       </div>*/
/* */
/*       <div class="form-group">*/
/*         <div class="col-md-2 control-label"><label for="lesson-title-field">标题</label></div>*/
/*         <div class="col-md-9 controls">*/
/*           <input id="lesson-title-field" class="form-control" type="text" name="title" value="{{ lesson.title|default('') }}">*/
/*         </div>*/
/*       </div>*/
/*       {#*/
/*       <div class="form-group">*/
/*         <div class="col-md-2 control-label"><label for="lesson-is-real-time-field">实时考试</label></div>*/
/*         <div class="col-md-9 controls radios">*/
/*           {{ radios('testMode', {'normal':'关闭', 'realTime':'开启'}, lesson.testMode|default('normal')) }}*/
/*           <input type="hidden" id="real-time-testpaper" value="{{ lesson.testMode|default('normal') }}">*/
/*         </div>*/
/*       </div>*/
/* */
/*       <div class="form-group " id="testpaper-start-time-div" style="display: none">*/
/*         <div class="col-md-2 control-label">*/
/*           <label>开始时间</label>*/
/*         </div>*/
/*         <div class="col-md-9 controls">*/
/*           <input id="lesson-testpaper-start-time-field" class="form-control" type="text" name="testStartTime" value="{% if lesson.testStartTime|default(null) %} {{ lesson.testStartTime|date('Y-m-d H:i') }}{% endif %}">*/
/*         </div>*/
/*       </div>*/
/*       #}*/
/* */
/*       {% if 'lesson_credit' in features %}*/
/*       <div class="form-group">*/
/*         <div class="col-md-2 control-label"><label for="lesson-title-field">限制学分</label></div>*/
/*         <div class="col-md-9 controls">*/
/*           <input class="form-control width-input width-input-small" type="text" name="requireCredit" value="{{ lesson.requireCredit|default(0) }}"> 分*/
/*           <div class="help-block">参加此次考试所需的学分，０分则不限制。</div>*/
/*         </div>*/
/*       </div>*/
/*       {% endif %}*/
/* */
/*       <div class="form-group">*/
/*         <div class="col-md-2 control-label"><label for="lesson-suggest-hour-field">学习时长</label></div>*/
/*         <div class="col-md-9 controls">建议 */
/*           <input id="lesson-suggest-hour-field" class="form-control width-input width-input-small" type="text" name="suggestHours" value="{{ lesson.suggestHours|default('0.0') }}"> 小时*/
/*           <div class="help-block">（如未设置，则默认完成时长为：客观题每题5分钟、主观题每题30分钟。合计取整）*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/* */
/*       <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*     </form>*/
/*     <script>app.load('course-manage/lesson-testpaper-modal')</script>*/
/*     */
/*   {% else %}*/
/*     <div class="empty">尚未创建试卷，请先<a href="{{ path('course_manage_testpaper', {courseId:course.id}) }}">创建试卷</a>。</div>*/
/*   {% endif %}*/
/* */
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/*   {% if paperOptions %}*/
/*     <button type="button" class="btn btn-link" data-dismiss="modal">取消</button>*/
/*     <button id="course-testpaper-btn" data-submiting-text="正在提交" type="submit" class="btn btn-primary" data-toggle="form-submit" data-target="#course-lesson-form">保存</button>*/
/*   {% else %}*/
/*     <button type="button" class="btn btn-link" data-dismiss="modal">取消</button>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
