<?php

/* TopxiaWebBundle:CourseTestpaperManage:update.html.twig */
class __TwigTemplate_619a24b01a490c224a90d24a7f3546bd70948c4ea30e599fecf52cff7d8ffb6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:CourseManage:layout.html.twig", "TopxiaWebBundle:CourseTestpaperManage:update.html.twig", 1);
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
        $context["side_nav"] = "testpaper";
        // line 6
        $context["script_controller"] = "testpaper/testpaper-form";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "编辑试卷信息 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "
<div class=\"panel panel-default panel-col\">

  <div class=\"panel-heading clearfix\">编辑试卷信息</div>

  <div class=\"panel-body\">

    <ol class=\"breadcrumb\">
      <li><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_testpaper", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\">试卷管理</a></li>
      <li class=\"active\">编辑试卷信息</li>
    </ol>

    <form id=\"testpaper-form\" class=\"form-horizontal\" method=\"post\" data-auto-submit=\"true\" data-have-base-fields=\"true\">
      ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\"><label for=\"testpaper-name-field\">试卷名称</label></div>
        <div class=\"col-md-8 controls\">
          <input class=\"form-control\"  value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "name", array()), "html", null, true);
        echo "\" name=\"name\"   id=\"testpaper-name-field\"/>
        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\"><label for=\"testpaper-description-field\">试卷说明</label></div>
        <div class=\"col-md-8 controls\">
          <textarea class=\"form-control\" id=\"testpaper-description-field\" name=\"description\" data-image-upload-url=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("course"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "description", array()), "html", null, true);
        echo "</textarea>
        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\"><label for=\"testpaper-limitedTime-field\">时间限制</label></div>
        <div class=\"col-md-8 controls\">
          <input class=\"form-control width-input width-input-large\" name=\"limitedTime\" id=\"testpaper-limitedTime-field\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "limitedTime", array()), "html", null, true);
        echo "\" /> 分钟
          <div class=\"help-block\">0分钟，表示无限制</div>
        </div>
      </div>

      ";
        // line 46
        if ($this->env->getExtension('topxia_web_twig')->isFeatureEnabled("testpaper_passed_score")) {
            // line 47
            echo "      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\"><label for=\"testpaper-limitedTime-field\">及格分数线</label></div>
        <div class=\"col-md-8 controls\">
          <input class=\"form-control width-input width-input-large\" name=\"passedScore\" id=\"testpaper-passedScore-field\" value=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "passedScore", array()), "html", null, true);
            echo "\" /> 分
          <div class=\"help-block\">总分为";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "score", array()), "html", null, true);
            echo "，最大不能超过总分；0表示不设及格分数线。</div>
        </div>
      </div>
      ";
        }
        // line 55
        echo "
      <div class=\"form-group\">
        <div class=\"col-md-8 col-md-offset-2 controls\">
          <button type=\"submit\" class=\"btn btn-primary\">保存</button>
          <a href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_testpaper", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-link\">返回</a>
        </div>
      </div>

      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

    </form>

  </div>
</div>



";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseTestpaperManage:update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 63,  124 => 59,  118 => 55,  111 => 51,  107 => 50,  102 => 47,  100 => 46,  92 => 41,  80 => 34,  70 => 27,  62 => 22,  54 => 17,  44 => 9,  41 => 8,  34 => 3,  30 => 1,  28 => 6,  26 => 5,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:CourseManage:layout.html.twig' %}*/
/* */
/* {% block title %}编辑试卷信息 - {{ parent() }}{% endblock %}*/
/* */
/* {% set side_nav = 'testpaper' %}*/
/* {% set script_controller = 'testpaper/testpaper-form' %}*/
/* */
/* {% block main %}*/
/* */
/* <div class="panel panel-default panel-col">*/
/* */
/*   <div class="panel-heading clearfix">编辑试卷信息</div>*/
/* */
/*   <div class="panel-body">*/
/* */
/*     <ol class="breadcrumb">*/
/*       <li><a href="{{ path('course_manage_testpaper',{courseId:course.id}) }}">试卷管理</a></li>*/
/*       <li class="active">编辑试卷信息</li>*/
/*     </ol>*/
/* */
/*     <form id="testpaper-form" class="form-horizontal" method="post" data-auto-submit="true" data-have-base-fields="true">*/
/*       {{ web_macro.flash_messages() }}*/
/* */
/*       <div class="form-group">*/
/*         <div class="col-md-2 control-label"><label for="testpaper-name-field">试卷名称</label></div>*/
/*         <div class="col-md-8 controls">*/
/*           <input class="form-control"  value="{{testpaper.name }}" name="name"   id="testpaper-name-field"/>*/
/*         </div>*/
/*       </div>*/
/* */
/*       <div class="form-group">*/
/*         <div class="col-md-2 control-label"><label for="testpaper-description-field">试卷说明</label></div>*/
/*         <div class="col-md-8 controls">*/
/*           <textarea class="form-control" id="testpaper-description-field" name="description" data-image-upload-url="{{ path('editor_upload', {token:upload_token('course')}) }}">{{testpaper.description }}</textarea>*/
/*         </div>*/
/*       </div>*/
/* */
/*       <div class="form-group">*/
/*         <div class="col-md-2 control-label"><label for="testpaper-limitedTime-field">时间限制</label></div>*/
/*         <div class="col-md-8 controls">*/
/*           <input class="form-control width-input width-input-large" name="limitedTime" id="testpaper-limitedTime-field" value="{{testpaper.limitedTime }}" /> 分钟*/
/*           <div class="help-block">0分钟，表示无限制</div>*/
/*         </div>*/
/*       </div>*/
/* */
/*       {% if is_feature_enabled('testpaper_passed_score') %}*/
/*       <div class="form-group">*/
/*         <div class="col-md-2 control-label"><label for="testpaper-limitedTime-field">及格分数线</label></div>*/
/*         <div class="col-md-8 controls">*/
/*           <input class="form-control width-input width-input-large" name="passedScore" id="testpaper-passedScore-field" value="{{testpaper.passedScore }}" /> 分*/
/*           <div class="help-block">总分为{{ testpaper.score }}，最大不能超过总分；0表示不设及格分数线。</div>*/
/*         </div>*/
/*       </div>*/
/*       {% endif %}*/
/* */
/*       <div class="form-group">*/
/*         <div class="col-md-8 col-md-offset-2 controls">*/
/*           <button type="submit" class="btn btn-primary">保存</button>*/
/*           <a href="{{ path('course_manage_testpaper',{courseId:course.id}) }}" class="btn btn-link">返回</a>*/
/*         </div>*/
/*       </div>*/
/* */
/*       <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/* */
/*     </form>*/
/* */
/*   </div>*/
/* </div>*/
/* */
/* */
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/*  */
