<?php

/* ClassroomBundle:ClassroomManage:headteacher.html.twig */
class __TwigTemplate_8129adb2da66ddd1c778f81480b7e0b5324c830867919bdcf975f49bef4774e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClassroomBundle:ClassroomManage:layout.html.twig", "ClassroomBundle:ClassroomManage:headteacher.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ClassroomBundle:ClassroomManage:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["side_nav"] = "headTeacher";
        // line 6
        $context["script_controller"] = "classroombundle/controller/classroom/manage/headteacher";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "班主任设置 - ";
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
  <div class=\"panel-heading\">班主任设置</div>
  <div class=\"panel-body\">

    <form id=\"teachers-form\" class=\"form-horizontal\" method=\"post\">
      ";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

      <div class=\"form-group\" id=\"teachers-form-group\">
        <label class=\"col-md-2 control-label\">设置班主任</label>
        <div class=\"col-md-8 controls\">
          <ul class=\"list-group teacher-list-group sortable-list\" id=\"teacher-list-group\" data-role=\"list\" style=\"display:none;\"></ul>
          <div class=\"input-group\">
            ";
        // line 51
        $context["url"] = ($this->env->getExtension('routing')->getPath("classroom_headteacher_match", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))) . "?q={{query}}");
        // line 52
        echo "            <input class=\"form-control\" id=\"teacher-input\" type=\"text\" data-role=\"item-input\" data-url=\"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "\">
            <span class=\"input-group-btn\">
              <button class=\"btn btn-default\" type=\"button\" data-role=\"item-add\" >添加</button>
            </span>
          </div>
          <p class=\"help-block\">班主任负责管理整个";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("classroom.name", "班级"), "html", null, true);
        echo "，班主任只有一位，并且必须要由老师来担任。</p>
     
          <script type=\"text/plain\" data-role=\"model\">";
        // line 59
        echo twig_jsonencode_filter((isset($context["headTeacher"]) ? $context["headTeacher"] : null));
        echo "</script>
          <script type=\"text/x-handlebars-template\" data-role=\"item-template\">
              ";
        // line 67
        echo "
              <li class=\"list-group-item clearfix\" data-role=\"item\">
                <img src=\"{{ avatar }}\" class=\"avatar-small\">
                <span class=\"nickname\">{{ nickname }}</span>
                <input type=\"hidden\" name=\"ids[]\" value=\"{{ id }}\">   
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
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

    </form>
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomManage:headteacher.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 79,  112 => 67,  107 => 59,  102 => 57,  93 => 52,  91 => 51,  81 => 44,  44 => 9,  41 => 8,  34 => 3,  30 => 1,  28 => 6,  26 => 5,  11 => 1,);
    }
}
/* {% extends 'ClassroomBundle:ClassroomManage:layout.html.twig' %}*/
/* */
/* {% block title %}班主任设置 - {{ parent() }}{% endblock %}*/
/* */
/* {% set side_nav = 'headTeacher' %}*/
/* {% set script_controller = 'classroombundle/controller/classroom/manage/headteacher' %}*/
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
/*   <div class="panel-heading">班主任设置</div>*/
/*   <div class="panel-body">*/
/* */
/*     <form id="teachers-form" class="form-horizontal" method="post">*/
/*       {{ web_macro.flash_messages() }}*/
/* */
/*       <div class="form-group" id="teachers-form-group">*/
/*         <label class="col-md-2 control-label">设置班主任</label>*/
/*         <div class="col-md-8 controls">*/
/*           <ul class="list-group teacher-list-group sortable-list" id="teacher-list-group" data-role="list" style="display:none;"></ul>*/
/*           <div class="input-group">*/
/*             {% set url = path('classroom_headteacher_match', {classroomId:classroom.id}) ~ '?q={{query}}' %}*/
/*             <input class="form-control" id="teacher-input" type="text" data-role="item-input" data-url="{{ url }}">*/
/*             <span class="input-group-btn">*/
/*               <button class="btn btn-default" type="button" data-role="item-add" >添加</button>*/
/*             </span>*/
/*           </div>*/
/*           <p class="help-block">班主任负责管理整个{{setting("classroom.name","班级")}}，班主任只有一位，并且必须要由老师来担任。</p>*/
/*      */
/*           <script type="text/plain" data-role="model">{{ headTeacher|json_encode|raw }}</script>*/
/*           <script type="text/x-handlebars-template" data-role="item-template">*/
/*               {% verbatim %}*/
/*               <li class="list-group-item clearfix" data-role="item">*/
/*                 <img src="{{ avatar }}" class="avatar-small">*/
/*                 <span class="nickname">{{ nickname }}</span>*/
/*                 <input type="hidden" name="ids[]" value="{{ id }}">   */
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
