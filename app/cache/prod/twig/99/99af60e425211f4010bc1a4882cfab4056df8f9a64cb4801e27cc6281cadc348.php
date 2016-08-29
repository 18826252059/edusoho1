<?php

/* ClassroomBundle:ClassroomManage:assistants.html.twig */
class __TwigTemplate_6cbcaafcf0644045c0a9d67d6ef61730e7dc07a5aeb51c577f3eb1e89bb3d92c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClassroomBundle:ClassroomManage:layout.html.twig", "ClassroomBundle:ClassroomManage:assistants.html.twig", 1);
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
        $context["side_nav"] = "assistant";
        // line 6
        $context["script_controller"] = "classroombundle/controller/classroom/manage/assistants";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "助教设置 - ";
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
  <div class=\"panel-heading\">助教设置</div>
  <div class=\"panel-body\">

    <form id=\"teachers-form\" class=\"form-horizontal\" method=\"post\">
      ";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

      <div class=\"form-group\" id=\"teachers-form-group\">
        <label class=\"col-md-2 control-label\">设置助教</label>
        <div class=\"col-md-8 controls\">
          <ul class=\"list-group teacher-list-group sortable-list\" id=\"teacher-list-group\" data-role=\"list\" style=\"display:none;\"></ul>
          <div class=\"input-group\">
            ";
        // line 51
        $context["url"] = ($this->env->getExtension('routing')->getPath("classroom_assistants_match", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))) . "?q={{query}}");
        // line 52
        echo "            <input class=\"form-control\" id=\"teacher-input\" type=\"text\" data-role=\"item-input\" data-url=\"";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "\">
            <span class=\"input-group-btn\">
              <button class=\"btn btn-default\" type=\"button\" data-role=\"item-add\" >添加</button>
            </span>
          </div>
          
          <p class=\"help-block\">
            <div>助教可在【";
        // line 59
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
        echo "管理】中批改";
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
        echo "作业和试卷，并且可以在";
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
        echo "讨论区创建活动</div>
          </p>
          <script type=\"text/plain\" data-role=\"model\">";
        // line 61
        echo twig_jsonencode_filter((isset($context["assistants"]) ? $context["assistants"] : null));
        echo "</script>
          <script type=\"text/x-handlebars-template\" data-role=\"item-template\">
              ";
        // line 72
        echo "

              <li class=\"list-group-item clearfix\" data-role=\"item\">
                <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
                <img src=\"{{ avatar }}\" class=\"avatar-small\">
                <span class=\"nickname\">{{ nickname }}</span>
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
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

    </form>
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomManage:assistants.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 84,  118 => 72,  113 => 61,  104 => 59,  93 => 52,  91 => 51,  81 => 44,  44 => 9,  41 => 8,  34 => 3,  30 => 1,  28 => 6,  26 => 5,  11 => 1,);
    }
}
/* {% extends 'ClassroomBundle:ClassroomManage:layout.html.twig' %}*/
/* */
/* {% block title %}助教设置 - {{ parent() }}{% endblock %}*/
/* */
/* {% set side_nav = 'assistant' %}*/
/* {% set script_controller = 'classroombundle/controller/classroom/manage/assistants' %}*/
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
/*   <div class="panel-heading">助教设置</div>*/
/*   <div class="panel-body">*/
/* */
/*     <form id="teachers-form" class="form-horizontal" method="post">*/
/*       {{ web_macro.flash_messages() }}*/
/* */
/*       <div class="form-group" id="teachers-form-group">*/
/*         <label class="col-md-2 control-label">设置助教</label>*/
/*         <div class="col-md-8 controls">*/
/*           <ul class="list-group teacher-list-group sortable-list" id="teacher-list-group" data-role="list" style="display:none;"></ul>*/
/*           <div class="input-group">*/
/*             {% set url = path('classroom_assistants_match', {classroomId:classroom.id}) ~ '?q={{query}}' %}*/
/*             <input class="form-control" id="teacher-input" type="text" data-role="item-input" data-url="{{ url }}">*/
/*             <span class="input-group-btn">*/
/*               <button class="btn btn-default" type="button" data-role="item-add" >添加</button>*/
/*             </span>*/
/*           </div>*/
/*           */
/*           <p class="help-block">*/
/*             <div>助教可在【{{setting("classroom.name")|default("班级")}}管理】中批改{{setting("classroom.name")|default("班级")}}作业和试卷，并且可以在{{setting("classroom.name")|default("班级")}}讨论区创建活动</div>*/
/*           </p>*/
/*           <script type="text/plain" data-role="model">{{ assistants|json_encode|raw }}</script>*/
/*           <script type="text/x-handlebars-template" data-role="item-template">*/
/*               {% verbatim %}*/
/* */
/*               <li class="list-group-item clearfix" data-role="item">*/
/*                 <span class="glyphicon glyphicon-resize-vertical sort-handle"></span>*/
/*                 <img src="{{ avatar }}" class="avatar-small">*/
/*                 <span class="nickname">{{ nickname }}</span>*/
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
