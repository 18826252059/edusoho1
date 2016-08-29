<?php

/* ClassroomBundle:ClassroomManage:teachers.html.twig */
class __TwigTemplate_45e4a9efc424c92559df20666967e18ee2a7d1d254cda79aeeb04e426a398254 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClassroomBundle:ClassroomManage:layout.html.twig", "ClassroomBundle:ClassroomManage:teachers.html.twig", 1);
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
        $context["side_nav"] = "teachers";
        // line 6
        $context["script_controller"] = "classroombundle/controller/classroom/teacher";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "教师管理 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
<style>

.price{

  color: #e57259;
  font-size: 16px;

}

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
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "
              ";
        // line 51
        if ((isset($context["teacherIds"]) ? $context["teacherIds"] : null)) {
            // line 52
            echo "                <div class=\"form-group\" id=\"teachers-form-group\">
                  <label class=\"col-md-2 control-label\">
                    设置教师
                  </label>
                  <div class=\"col-md-8 controls\">
                    <ul class=\"teacher-list-group sortable-list list-group\" id=\"teacher-list-group\" data-role=\"list\" >
                    </ul>

                    <p class=\"help-block\">
                      <div>相关页面中的老师列举将会按照这里设定的顺序显示。</div>
                      <div>教学服务团队成员有权制订学习计划、答疑、批改作业/试卷、发起活动。</div>
                    </p>

                  </div>

                  <script type=\"text/plain\" data-role=\"model\">
                  ";
            // line 68
            echo twig_jsonencode_filter((isset($context["teacherItems"]) ? $context["teacherItems"] : null));
            echo "
                  </script>
                  <script type=\"text/x-handlebars-template\" data-role=\"item-template\">
                      ";
            // line 79
            echo "

                      <li class=\"list-group-item clearfix\" data-role=\"item\">
                        <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>
                        <img src=\"{{ avatar }}\" class=\"avatar-small\">
                        <span class=\"nickname\">{{ nickname }}</span>
                        <input type=\"hidden\" name=\"teacherIds[]\" value=\"{{ id }}\">  
                      </li>
                    ";
            echo "
                  </script>
                </div>
                <div class=\"form-group\">
                  <div class=\"col-md-offset-2 col-md-8 controls\">
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
            echo "\">
                    <button type=\"submit\" class=\"btn btn-fat btn-primary\">保存</button>
                  </div>
                </div>
              
              ";
        } else {
            // line 90
            echo "              <div class=\"form-group empty\">还没有教师!赶紧去设置课程吧！</div>
              ";
        }
        // line 92
        echo "
        

        </form>
        

  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomManage:teachers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 92,  143 => 90,  134 => 84,  118 => 79,  112 => 68,  94 => 52,  92 => 51,  88 => 50,  44 => 8,  41 => 7,  34 => 3,  30 => 1,  28 => 6,  26 => 5,  11 => 1,);
    }
}
/* {% extends 'ClassroomBundle:ClassroomManage:layout.html.twig' %}*/
/* */
/* {% block title %}教师管理 - {{ parent() }}{% endblock %}*/
/* */
/* {% set side_nav = 'teachers' %}*/
/* {% set script_controller = 'classroombundle/controller/classroom/teacher' %}*/
/* {% block main %}*/
/* */
/* <style>*/
/* */
/* .price{*/
/* */
/*   color: #e57259;*/
/*   font-size: 16px;*/
/* */
/* }*/
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
/* </style>*/
/*        */
/* <div class="panel panel-default panel-col">*/
/*   <div class="panel-heading">教师设置</div>*/
/*   <div class="panel-body">*/
/* */
/*         <form id="teachers-form" class="form-horizontal" method="post">*/
/* */
/*               {{ web_macro.flash_messages() }}*/
/*               {% if teacherIds %}*/
/*                 <div class="form-group" id="teachers-form-group">*/
/*                   <label class="col-md-2 control-label">*/
/*                     设置教师*/
/*                   </label>*/
/*                   <div class="col-md-8 controls">*/
/*                     <ul class="teacher-list-group sortable-list list-group" id="teacher-list-group" data-role="list" >*/
/*                     </ul>*/
/* */
/*                     <p class="help-block">*/
/*                       <div>相关页面中的老师列举将会按照这里设定的顺序显示。</div>*/
/*                       <div>教学服务团队成员有权制订学习计划、答疑、批改作业/试卷、发起活动。</div>*/
/*                     </p>*/
/* */
/*                   </div>*/
/* */
/*                   <script type="text/plain" data-role="model">*/
/*                   {{ teacherItems|json_encode|raw }}*/
/*                   </script>*/
/*                   <script type="text/x-handlebars-template" data-role="item-template">*/
/*                       {% verbatim %}*/
/* */
/*                       <li class="list-group-item clearfix" data-role="item">*/
/*                         <span class="glyphicon glyphicon-resize-vertical sort-handle"></span>*/
/*                         <img src="{{ avatar }}" class="avatar-small">*/
/*                         <span class="nickname">{{ nickname }}</span>*/
/*                         <input type="hidden" name="teacherIds[]" value="{{ id }}">  */
/*                       </li>*/
/*                     {% endverbatim %}*/
/*                   </script>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                   <div class="col-md-offset-2 col-md-8 controls">*/
/*                     <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*                     <button type="submit" class="btn btn-fat btn-primary">保存</button>*/
/*                   </div>*/
/*                 </div>*/
/*               */
/*               {% else %}*/
/*               <div class="form-group empty">还没有教师!赶紧去设置课程吧！</div>*/
/*               {% endif %}*/
/* */
/*         */
/* */
/*         </form>*/
/*         */
/* */
/*   </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
