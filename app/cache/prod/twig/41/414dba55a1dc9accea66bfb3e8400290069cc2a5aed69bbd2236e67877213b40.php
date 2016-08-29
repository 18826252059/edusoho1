<?php

/* TopxiaWebBundle:CourseManage:teachers.html.twig */
class __TwigTemplate_40d7bec4aec569cff9dfda35c57ef5f926e5f6a509c31eaf9239ef767f149709 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:CourseManage:layout.html.twig", "TopxiaWebBundle:CourseManage:teachers.html.twig", 1);
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
        $context["side_nav"] = "teachers";
        // line 6
        $context["script_controller"] = "course-manage/teachers";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "教师设置 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "
<style>

.ui-autocomplete {
    border:1px solid #ccc;
    background-color: #FFFFFF;
    box-shadow: 2px 2px 3px #EEEEEE;
}
.ui-autocomplete-ctn{
    margin:0;
    padding:0;
}
.ui-autocomplete-item {
    width: 180px;
    overflow:hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    line-height: 30px;
    padding:0 10px 0 10px;
    cursor: default;
}
.ui-autocomplete-item-hover {
    background:#f2f2f2;
}
.ui-autocomplete-item-hl {
    background:#F6FF94;
}

</style>
       
<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading\">教师设置</div>
  <div class=\"panel-body\">

    <form id=\"teachers-form\" class=\"form-horizontal\" method=\"post\">
      ";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

      <div class=\"form-group\" id=\"teachers-form-group\">
        <div class=\"col-md-2 control-label\"><label>已添加教师</label></div>
        <div class=\"col-md-8 controls\">
          <ul class=\"list-group teacher-list-group sortable-list\" id=\"teacher-list-group\" data-role=\"list\" style=\"display:none;\"></ul>
          <div class=\"input-group\">
            ";
        // line 51
        $context["url"] = ($this->env->getExtension('routing')->getPath("course_manage_teachers_match", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))) . "?q={{query}}");
        // line 52
        echo "            <input class=\"form-control\" id=\"teacher-input\" type=\"text\" data-role=\"item-input\" data-url=\"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "\">
            <span class=\"input-group-btn\">
              <button class=\"btn btn-default\" type=\"button\" data-role=\"item-add\" id=\"teacher-add\" >添加</button>
            </span>
          </div>
          <div>
              只能添加有教师权限的用户
          </div>
     
          <script type=\"text/plain\" data-role=\"model\">";
        // line 61
        echo twig_jsonencode_filter((isset($context["teachers"]) ? $context["teachers"] : null));
        echo "</script>
          <script type=\"text/x-handlebars-template\" data-role=\"item-template\">
              ";
        // line 73
        echo "

              <li class=\"list-group-item clearfix\" data-role=\"item\">
                <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
                <img src=\"{{ avatar }}\" class=\"avatar-small\">
                <span class=\"nickname\">{{ nickname }}</span>
                <label class=\"visible-checkbox\"><input type=\"checkbox\" value=\"1\" name=\"visible_{{ id }}\" {{#if isVisible }}checked=\"checked\"{{/if}}> 显示</label>
                <input type=\"hidden\" name=\"ids[]\" value=\"{{ id }}\">     
                <button  class=\"close delete-btn\" data-role=\"item-delete\" type=\"button\" title=\"删除\" >&times; </button>
              </li>
            ";
        echo "
          </script>

        </div>  
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-offset-2 col-md-8 controls\">
          <button type=\"submit\" class=\"btn btn-fat btn-primary\">保存</button>
        </div>  
      </div>

      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

    </form>
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseManage:teachers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 85,  111 => 73,  106 => 61,  93 => 52,  91 => 51,  81 => 44,  44 => 9,  41 => 8,  34 => 3,  30 => 1,  28 => 6,  26 => 5,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:CourseManage:layout.html.twig' %}*/
/* */
/* {% block title %}教师设置 - {{ parent() }}{% endblock %}*/
/* */
/* {% set side_nav = 'teachers' %}*/
/* {% set script_controller = 'course-manage/teachers' %}*/
/* */
/* {% block main %}*/
/* */
/* <style>*/
/* */
/* .ui-autocomplete {*/
/*     border:1px solid #ccc;*/
/*     background-color: #FFFFFF;*/
/*     box-shadow: 2px 2px 3px #EEEEEE;*/
/* }*/
/* .ui-autocomplete-ctn{*/
/*     margin:0;*/
/*     padding:0;*/
/* }*/
/* .ui-autocomplete-item {*/
/*     width: 180px;*/
/*     overflow:hidden;*/
/*     text-overflow: ellipsis;*/
/*     white-space: nowrap;*/
/*     line-height: 30px;*/
/*     padding:0 10px 0 10px;*/
/*     cursor: default;*/
/* }*/
/* .ui-autocomplete-item-hover {*/
/*     background:#f2f2f2;*/
/* }*/
/* .ui-autocomplete-item-hl {*/
/*     background:#F6FF94;*/
/* }*/
/* */
/* </style>*/
/*        */
/* <div class="panel panel-default panel-col">*/
/*   <div class="panel-heading">教师设置</div>*/
/*   <div class="panel-body">*/
/* */
/*     <form id="teachers-form" class="form-horizontal" method="post">*/
/*       {{ web_macro.flash_messages() }}*/
/* */
/*       <div class="form-group" id="teachers-form-group">*/
/*         <div class="col-md-2 control-label"><label>已添加教师</label></div>*/
/*         <div class="col-md-8 controls">*/
/*           <ul class="list-group teacher-list-group sortable-list" id="teacher-list-group" data-role="list" style="display:none;"></ul>*/
/*           <div class="input-group">*/
/*             {% set url = path('course_manage_teachers_match', {id:course.id}) ~ '?q={{query}}' %}*/
/*             <input class="form-control" id="teacher-input" type="text" data-role="item-input" data-url="{{ url }}">*/
/*             <span class="input-group-btn">*/
/*               <button class="btn btn-default" type="button" data-role="item-add" id="teacher-add" >添加</button>*/
/*             </span>*/
/*           </div>*/
/*           <div>*/
/*               只能添加有教师权限的用户*/
/*           </div>*/
/*      */
/*           <script type="text/plain" data-role="model">{{ teachers|json_encode|raw }}</script>*/
/*           <script type="text/x-handlebars-template" data-role="item-template">*/
/*               {% verbatim %}*/
/* */
/*               <li class="list-group-item clearfix" data-role="item">*/
/*                 <span class="glyphicon glyphicon-resize-vertical sort-handle"></span>*/
/*                 <img src="{{ avatar }}" class="avatar-small">*/
/*                 <span class="nickname">{{ nickname }}</span>*/
/*                 <label class="visible-checkbox"><input type="checkbox" value="1" name="visible_{{ id }}" {{#if isVisible }}checked="checked"{{/if}}> 显示</label>*/
/*                 <input type="hidden" name="ids[]" value="{{ id }}">     */
/*                 <button  class="close delete-btn" data-role="item-delete" type="button" title="删除" >&times; </button>*/
/*               </li>*/
/*             {% endverbatim %}*/
/*           </script>*/
/* */
/*         </div>  */
/*       </div>*/
/* */
/*       <div class="form-group">*/
/*         <div class="col-md-offset-2 col-md-8 controls">*/
/*           <button type="submit" class="btn btn-fat btn-primary">保存</button>*/
/*         </div>  */
/*       </div>*/
/* */
/*       <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/* */
/*     </form>*/
/*   </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
