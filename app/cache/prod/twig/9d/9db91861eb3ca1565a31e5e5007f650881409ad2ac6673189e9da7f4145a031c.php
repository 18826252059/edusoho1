<?php

/* TopxiaWebBundle:CourseManage:detail.html.twig */
class __TwigTemplate_fade819a36df8900f8a11980e3a65e95d151e6eec95d03fd4386c29ed81d771c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:CourseManage:layout.html.twig", "TopxiaWebBundle:CourseManage:detail.html.twig", 1);
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
        $context["side_nav"] = "detail";
        // line 6
        $context["script_controller"] = "course-manage/detail";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "详细信息 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "
<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading\">详细信息</div>
  <div class=\"panel-body\">
    <form id=\"course-base-form\" class=\"form-horizontal\" method=\"post\">
      ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\"><label>课程简介</label></div>
        <div class=\"col-md-8 controls\">
          <textarea name=\"about\" rows=\"10\" id=\"course-about-field\" class=\"form-control\" data-image-upload-url=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("course"))), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('topxia_html_twig')->fieldValue((isset($context["course"]) ? $context["course"] : null), "about");
        echo "</textarea>
        </div>
      </div>

      <div class=\"form-group dynamic-collection\" id=\"course-goals-form-group\">
        <div class=\"col-md-2 control-label\"><label>课程目标</label></div>
        <div class=\"col-md-8 controls\">
          <ul class=\"list-group sortable-list\" data-role=\"list\" style=\"margin-bottom:10px;display:none;\"></ul>
          <div class=\"input-group\">
            <input id=\"teacher-input\" type=\"text\" data-role=\"item-input\" class=\"form-control\">
            <span class=\"input-group-btn\">
              <button class=\"btn btn-default\" type=\"button\" data-role=\"item-add\" >添加</button>
            </span>
          </div>

          <script type=\"text/plain\" data-role=\"model\">";
        // line 34
        echo twig_jsonencode_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "goals", array()));
        echo "</script>
          <script type=\"text/x-handlebars-template\" data-role=\"item-template\">
            ";
        // line 43
        echo "
              <li class=\"list-group-item clearfix\" data-role=\"item\">
                <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
                {{ this }}
                <input type=\"hidden\" name=\"goals[]\" value=\"{{ this }}\">
                <button class=\"close delete-btn\" data-role=\"item-delete\" type=\"button\" title=\"删除\">&times;</button>
              </li>
            ";
        echo "
          </script>

        </div>
      </div>

      <div class=\"form-group\" id=\"course-audiences-form-group\">
        <div class=\"col-md-2 control-label\"><label>适应人群</label></div>
        <div class=\"col-md-8 controls\">

          <ul class=\"list-group sortable-list  dynamic-collection\" data-role=\"list\" style=\"margin-bottom:10px;display:none;\"></ul>
          <div class=\"input-group\">
            <input id=\"teacher-input\" type=\"text\" data-role=\"item-input\" class=\"form-control\">
            <span class=\"input-group-btn\">
              <button class=\"btn btn-default\" type=\"button\" data-role=\"item-add\" >添加</button>
            </span>
          </div>

          <script type=\"text/plain\" data-role=\"model\">";
        // line 61
        echo twig_jsonencode_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "audiences", array()));
        echo "</script>
          <script type=\"text/x-handlebars-template\" data-role=\"item-template\">
            ";
        // line 70
        echo "
              <li class=\"list-group-item clearfix\" data-role=\"item\">
                <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
                {{ this }}
                <input type=\"hidden\" name=\"audiences[]\" value=\"{{ this }}\">
                <button class=\"close delete-btn\" data-role=\"item-delete\" type=\"button\" title=\"删除\">&times;</button>
              </li>
            ";
        echo "
          </script>

        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-8 col-md-offset-2 controls\">
            <button class=\"btn btn-fat btn-primary\" id=\"course-create-btn\" type=\"submit\">保存</button>
        </div>
      </div>

      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

    </form>
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseManage:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 82,  117 => 70,  112 => 61,  84 => 43,  79 => 34,  59 => 19,  51 => 14,  44 => 9,  41 => 8,  34 => 3,  30 => 1,  28 => 6,  26 => 5,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:CourseManage:layout.html.twig' %}*/
/* */
/* {% block title %}详细信息 - {{ parent() }}{% endblock %}*/
/* */
/* {% set side_nav = 'detail' %}*/
/* {% set script_controller = 'course-manage/detail' %}*/
/* */
/* {% block main %}*/
/* */
/* <div class="panel panel-default panel-col">*/
/*   <div class="panel-heading">详细信息</div>*/
/*   <div class="panel-body">*/
/*     <form id="course-base-form" class="form-horizontal" method="post">*/
/*       {{ web_macro.flash_messages() }}*/
/* */
/*       <div class="form-group">*/
/*         <div class="col-md-2 control-label"><label>课程简介</label></div>*/
/*         <div class="col-md-8 controls">*/
/*           <textarea name="about" rows="10" id="course-about-field" class="form-control" data-image-upload-url="{{ path('editor_upload', {token:upload_token('course')}) }}">{{ field_value(course, 'about') }}</textarea>*/
/*         </div>*/
/*       </div>*/
/* */
/*       <div class="form-group dynamic-collection" id="course-goals-form-group">*/
/*         <div class="col-md-2 control-label"><label>课程目标</label></div>*/
/*         <div class="col-md-8 controls">*/
/*           <ul class="list-group sortable-list" data-role="list" style="margin-bottom:10px;display:none;"></ul>*/
/*           <div class="input-group">*/
/*             <input id="teacher-input" type="text" data-role="item-input" class="form-control">*/
/*             <span class="input-group-btn">*/
/*               <button class="btn btn-default" type="button" data-role="item-add" >添加</button>*/
/*             </span>*/
/*           </div>*/
/* */
/*           <script type="text/plain" data-role="model">{{ course.goals|json_encode|raw }}</script>*/
/*           <script type="text/x-handlebars-template" data-role="item-template">*/
/*             {% verbatim %}*/
/*               <li class="list-group-item clearfix" data-role="item">*/
/*                 <span class="glyphicon glyphicon-resize-vertical sort-handle"></span>*/
/*                 {{ this }}*/
/*                 <input type="hidden" name="goals[]" value="{{ this }}">*/
/*                 <button class="close delete-btn" data-role="item-delete" type="button" title="删除">&times;</button>*/
/*               </li>*/
/*             {% endverbatim %}*/
/*           </script>*/
/* */
/*         </div>*/
/*       </div>*/
/* */
/*       <div class="form-group" id="course-audiences-form-group">*/
/*         <div class="col-md-2 control-label"><label>适应人群</label></div>*/
/*         <div class="col-md-8 controls">*/
/* */
/*           <ul class="list-group sortable-list  dynamic-collection" data-role="list" style="margin-bottom:10px;display:none;"></ul>*/
/*           <div class="input-group">*/
/*             <input id="teacher-input" type="text" data-role="item-input" class="form-control">*/
/*             <span class="input-group-btn">*/
/*               <button class="btn btn-default" type="button" data-role="item-add" >添加</button>*/
/*             </span>*/
/*           </div>*/
/* */
/*           <script type="text/plain" data-role="model">{{ course.audiences|json_encode|raw }}</script>*/
/*           <script type="text/x-handlebars-template" data-role="item-template">*/
/*             {% verbatim %}*/
/*               <li class="list-group-item clearfix" data-role="item">*/
/*                 <span class="glyphicon glyphicon-resize-vertical sort-handle"></span>*/
/*                 {{ this }}*/
/*                 <input type="hidden" name="audiences[]" value="{{ this }}">*/
/*                 <button class="close delete-btn" data-role="item-delete" type="button" title="删除">&times;</button>*/
/*               </li>*/
/*             {% endverbatim %}*/
/*           </script>*/
/* */
/*         </div>*/
/*       </div>*/
/* */
/*       <div class="form-group">*/
/*         <div class="col-md-8 col-md-offset-2 controls">*/
/*             <button class="btn btn-fat btn-primary" id="course-create-btn" type="submit">保存</button>*/
/*         </div>*/
/*       </div>*/
/* */
/*       <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/* */
/*     </form>*/
/*   </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/* */
