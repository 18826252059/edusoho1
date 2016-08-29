<?php

/* TopxiaAdminBundle:Course:delete.html.twig */
class __TwigTemplate_e7639500bed3879b076b0b89f0043a9fe67d0aea4432f12af92cf55a549c8506 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaAdminBundle:Course:delete.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "核实用户密码";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "  <form id=\"delete-form\" action=\"";
        echo $this->env->getExtension('routing')->getPath("admin_check_password");
        echo "\">
    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"title\">用户密码</label>
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"password\" name=\"password\" class=\"form-control\">
      </div>
    </div>
    <input type=\"hidden\" name=\"courseId\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "html", null, true);
        echo "\"/>
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
  </form>
  <div id=\"delete-course-progress\" class=\"delete-course-progress\" style=\"display:none;\">
    <div class=\"progress progress-striped active\">
      <div class=\"progress-bar progress-bar-success\" style=\"width: 0%\"></div>
    </div>
    <div class=\"text-success progress-text\"></div>
  </div>
";
    }

    // line 25
    public function block_footer($context, array $blocks = array())
    {
        // line 26
        echo "  <button id=\"delete-btn\" data-submiting-text=\"正在提交\" type=\"submit\" class=\"btn btn-primary pull-right\" data-toggle=\"form-submit\" data-target=\"#delete-form\"
  data-question-delete-url=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_course_delete", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "questions")), "html", null, true);
        echo "\"
  data-testpaper-delete-url=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_course_delete", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "testpapers")), "html", null, true);
        echo "\"
  data-material-delete-url=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_course_delete", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "materials")), "html", null, true);
        echo "\"
  data-chapter-delete-url=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_course_delete", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "chapters")), "html", null, true);
        echo "\"
  data-draft-delete-url=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_course_delete", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "drafts")), "html", null, true);
        echo "\"
  data-lessonLearns-delete-url=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_course_delete", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "lessonLearns")), "html", null, true);
        echo "\"
  data-lessonReplays-delete-url=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_course_delete", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "lessonReplays")), "html", null, true);
        echo "\"
  data-lessonViews-delete-url=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_course_delete", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "lessonViews")), "html", null, true);
        echo "\"
  data-homework-delete-url=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_course_delete", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "homeworks")), "html", null, true);
        echo "\"
  data-exercise-delete-url=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_course_delete", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "exercises")), "html", null, true);
        echo "\"
  data-lesson-delete-url=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_course_delete", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "lessons")), "html", null, true);
        echo "\"
  data-favorite-delete-url=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_course_delete", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "favorites")), "html", null, true);
        echo "\"
  data-note-delete-url=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_course_delete", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "notes")), "html", null, true);
        echo "\"
  data-thread-delete-url=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_course_delete", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "threads")), "html", null, true);
        echo "\"
  data-review-delete-url=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_course_delete", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "reviews")), "html", null, true);
        echo "\"
  data-announcement-delete-url=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_course_delete", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "announcements")), "html", null, true);
        echo "\"
  data-status-delete-url=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_course_delete", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "statuses")), "html", null, true);
        echo "\"
  data-member-delete-url=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_course_delete", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "members")), "html", null, true);
        echo "\"
  data-course-delete-url=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_course_delete", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "course")), "html", null, true);
        echo "\"
  >提交</button>
  <button type=\"button\" class=\"btn btn-link pull-right btn-closed\" data-dismiss=\"modal\">取消</button>

   <strong class=\"text text-danger\" id=\"delete-hint\" style=\"display:none;\">正在删除，请不要关闭当前窗口...</strong>

  <button id=\"finish-delete-btn\" data-loading-text=\"正在完成删除, 请稍等...\" class=\"btn btn-primary\" style=\"display:none;\"data-dismiss=\"modal\">完成删除</button>
  <script>app.load('course/delete-modal')</script>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Course:delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 45,  143 => 44,  139 => 43,  135 => 42,  131 => 41,  127 => 40,  123 => 39,  119 => 38,  115 => 37,  111 => 36,  107 => 35,  103 => 34,  99 => 33,  95 => 32,  91 => 31,  87 => 30,  83 => 29,  79 => 28,  75 => 27,  72 => 26,  69 => 25,  56 => 15,  52 => 14,  39 => 5,  36 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% block title %}核实用户密码{% endblock %}*/
/* {% block body %}*/
/*   <form id="delete-form" action="{{path('admin_check_password')}}">*/
/*     <div class="row form-group">*/
/*       <div class="col-md-2 control-label">*/
/*         <label for="title">用户密码</label>*/
/*       </div>*/
/*       <div class="col-md-8 controls">*/
/*         <input type="password" name="password" class="form-control">*/
/*       </div>*/
/*     </div>*/
/*     <input type="hidden" name="courseId" value="{{course.id}}"/>*/
/*     <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*   </form>*/
/*   <div id="delete-course-progress" class="delete-course-progress" style="display:none;">*/
/*     <div class="progress progress-striped active">*/
/*       <div class="progress-bar progress-bar-success" style="width: 0%"></div>*/
/*     </div>*/
/*     <div class="text-success progress-text"></div>*/
/*   </div>*/
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/*   <button id="delete-btn" data-submiting-text="正在提交" type="submit" class="btn btn-primary pull-right" data-toggle="form-submit" data-target="#delete-form"*/
/*   data-question-delete-url="{{ path('admin_course_delete',{courseId:course.id,type:'questions'}) }}"*/
/*   data-testpaper-delete-url="{{ path('admin_course_delete',{courseId:course.id,type:'testpapers'}) }}"*/
/*   data-material-delete-url="{{ path('admin_course_delete',{courseId:course.id,type:'materials'}) }}"*/
/*   data-chapter-delete-url="{{ path('admin_course_delete',{courseId:course.id,type:'chapters'}) }}"*/
/*   data-draft-delete-url="{{ path('admin_course_delete',{courseId:course.id,type:'drafts'}) }}"*/
/*   data-lessonLearns-delete-url="{{ path('admin_course_delete',{courseId:course.id,type:'lessonLearns'}) }}"*/
/*   data-lessonReplays-delete-url="{{ path('admin_course_delete',{courseId:course.id,type:'lessonReplays'}) }}"*/
/*   data-lessonViews-delete-url="{{ path('admin_course_delete',{courseId:course.id,type:'lessonViews'}) }}"*/
/*   data-homework-delete-url="{{ path('admin_course_delete',{courseId:course.id,type:'homeworks'}) }}"*/
/*   data-exercise-delete-url="{{ path('admin_course_delete',{courseId:course.id,type:'exercises'}) }}"*/
/*   data-lesson-delete-url="{{ path('admin_course_delete',{courseId:course.id,type:'lessons'}) }}"*/
/*   data-favorite-delete-url="{{ path('admin_course_delete',{courseId:course.id,type:'favorites'}) }}"*/
/*   data-note-delete-url="{{ path('admin_course_delete',{courseId:course.id,type:'notes'}) }}"*/
/*   data-thread-delete-url="{{ path('admin_course_delete',{courseId:course.id,type:'threads'}) }}"*/
/*   data-review-delete-url="{{ path('admin_course_delete',{courseId:course.id,type:'reviews'}) }}"*/
/*   data-announcement-delete-url="{{ path('admin_course_delete',{courseId:course.id,type:'announcements'}) }}"*/
/*   data-status-delete-url="{{ path('admin_course_delete',{courseId:course.id,type:'statuses'}) }}"*/
/*   data-member-delete-url="{{ path('admin_course_delete',{courseId:course.id,type:'members'}) }}"*/
/*   data-course-delete-url="{{ path('admin_course_delete',{courseId:course.id,type:'course'}) }}"*/
/*   >提交</button>*/
/*   <button type="button" class="btn btn-link pull-right btn-closed" data-dismiss="modal">取消</button>*/
/* */
/*    <strong class="text text-danger" id="delete-hint" style="display:none;">正在删除，请不要关闭当前窗口...</strong>*/
/* */
/*   <button id="finish-delete-btn" data-loading-text="正在完成删除, 请稍等..." class="btn btn-primary" style="display:none;"data-dismiss="modal">完成删除</button>*/
/*   <script>app.load('course/delete-modal')</script>*/
/* {% endblock %}*/
