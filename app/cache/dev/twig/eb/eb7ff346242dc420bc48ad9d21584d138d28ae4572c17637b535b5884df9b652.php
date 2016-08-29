<?php

/* ClassroomBundle:ClassroomManage:header.html.twig */
class __TwigTemplate_f769fffb4796bef75052518ff92385ca5449ac400f3b904d2792d1a620581d4f extends Twig_Template
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
        $context["unsetted"] = "";
        // line 2
        if ( !$this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "about", array())) {
            // line 3
            $context["unsetted"] = ((isset($context["unsetted"]) ? $context["unsetted"] : $this->getContext($context, "unsetted")) . ",简介");
        }
        // line 5
        if ( !$this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "smallPicture", array())) {
            // line 6
            $context["unsetted"] = ((isset($context["unsetted"]) ? $context["unsetted"] : $this->getContext($context, "unsetted")) . ",图片");
        }
        // line 8
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "price", array()) == 0)) {
            // line 9
            echo "  ";
            $context["unsetted"] = ((isset($context["unsetted"]) ? $context["unsetted"] : $this->getContext($context, "unsetted")) . ",价格");
        }
        // line 11
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "courseNum", array()) == 0)) {
            // line 12
            $context["unsetted"] = ((isset($context["unsetted"]) ? $context["unsetted"] : $this->getContext($context, "unsetted")) . ",课程");
        }
        // line 14
        echo "

<div class=\"es-section course-manage-header clearfix\">
  <img class=\"picture\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "smallPicture", array()), "classroom.png"), "html", null, true);
        echo "\">
  <h1 class=\"title\"><a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "title", array()), "html", null, true);
        echo "</a>
    ";
        // line 19
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "status", array()) == "draft")) {
            // line 20
            echo "    <span class=\"label label-warning \">未发布</span>
    ";
        } elseif (($this->getAttribute(        // line 21
(isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "status", array()) == "closed")) {
            // line 22
            echo "    <span class=\"label label-danger \">已关闭</span>
    ";
        }
        // line 24
        echo "    ";
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "status", array()) == "published")) {
            // line 25
            echo "    <span class=\"label label-success\"> 已发布</span>
    ";
        }
        // line 27
        echo "  </h1>

  <div class=\"toolbar hidden-xs\">
    ";
        // line 30
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "status", array()) == "published")) {
            // line 31
            echo "      <div class=\"btn-group\">
        <a class=\"btn btn-default dropdown-toggle btn-sm\" href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
            echo "\">返回";
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "主页</a>
      </div>
    ";
        }
        // line 35
        echo "
    <div class=\"btn-group\">
      <button type=\"button\" class=\"btn btn-default dropdown-toggle btn-sm\" data-toggle=\"dropdown\" aria-expanded=\"false\">
        预览 <span class=\"caret\"></span>
      </button>
      <ul class=\"dropdown-menu\" role=\"menu\">
        <li><a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_courses", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()), "previewAs" => "guest")), "html", null, true);
        echo "\" target=\"blank\">作为未购买用户</a></li>
        ";
        // line 42
        if ($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "showable", array())) {
            // line 43
            echo "          <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_courses", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()), "previewAs" => "auditor")), "html", null, true);
            echo "\" target=\"blank\">作为旁听生</a></li>
        ";
        }
        // line 45
        echo "        <li><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_courses", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()), "previewAs" => "member")), "html", null, true);
        echo "\" target=\"_blank\">作为正式学员</a></li>
      </ul>
    </div>


    ";
        // line 50
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "status", array()) != "published")) {
            // line 51
            echo "      <div class=\"btn-group\">
        <button type=\"button\" class=\"btn btn-success btn-sm\" data-toggle=\"modal\" data-target=\"#myModal\">
          发布
        </button>
      </div>

      <div id=\"myModal\" class=\"modal fade\">
        <div class=\"modal-dialog\">
          <div class=\"modal-content\">
            <div class=\"modal-header\">
              <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
              <h4 class=\"modal-title\">发布";
            // line 62
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "</h4>
            </div>
            <div class=\"modal-body\">
              <p>
                ";
            // line 66
            if ((twig_length_filter($this->env, (isset($context["unsetted"]) ? $context["unsetted"] : $this->getContext($context, "unsetted"))) > 0)) {
                // line 67
                echo "                ";
                $context["unsetted"] = twig_split_filter($this->env, $this->env->getExtension('topxia_web_twig')->subStr((isset($context["unsetted"]) ? $context["unsetted"] : $this->getContext($context, "unsetted")), 1, (twig_length_filter($this->env, (isset($context["unsetted"]) ? $context["unsetted"] : $this->getContext($context, "unsetted"))) - 1)), ",");
                // line 68
                echo "                <span class=\"text-danger\">
                    ";
                // line 69
                echo twig_escape_filter($this->env, twig_join_filter((isset($context["unsetted"]) ? $context["unsetted"] : $this->getContext($context, "unsetted")), "，"), "html", null, true);
                echo "还未设置
                </span>
                ";
            }
            // line 72
            echo "                &nbsp;确定要发布吗？
              </p>
            </div>
            <div class=\"modal-footer\">
              <a data-dismiss=\"modal\" href=\"\">取消</a>&nbsp;
              <button type=\"button\" class=\"btn btn-success\" id=\"publishSure\" data-url=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_publish", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
            echo "\">确定</button>
            </div>
          </div>
        </div>
      </div>
    ";
        }
        // line 83
        echo "
  </div>
</div>

";
        // line 87
        $this->env->getExtension('topxia_web_twig')->loadScript("classroombundle/controller/classroom/manage/publish");
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomManage:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 87,  174 => 83,  165 => 77,  158 => 72,  152 => 69,  149 => 68,  146 => 67,  144 => 66,  137 => 62,  124 => 51,  122 => 50,  113 => 45,  107 => 43,  105 => 42,  101 => 41,  93 => 35,  85 => 32,  82 => 31,  80 => 30,  75 => 27,  71 => 25,  68 => 24,  64 => 22,  62 => 21,  59 => 20,  57 => 19,  51 => 18,  47 => 17,  42 => 14,  39 => 12,  37 => 11,  33 => 9,  31 => 8,  28 => 6,  26 => 5,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set unsetted = "" %}*/
/* {% if not classroom.about %}*/
/* {% set unsetted = unsetted ~ ",简介" %}*/
/* {% endif %}*/
/* {% if not classroom.smallPicture %}*/
/* {% set unsetted = unsetted ~ ",图片" %}*/
/* {% endif %}*/
/* {% if classroom.price == 0 %}*/
/*   {% set unsetted = unsetted ~ ",价格" %}*/
/* {% endif %}*/
/* {% if classroom.courseNum == 0 %}*/
/* {% set unsetted = unsetted ~ ",课程" %}*/
/* {% endif %}*/
/* */
/* */
/* <div class="es-section course-manage-header clearfix">*/
/*   <img class="picture" src="{{ filepath(classroom.smallPicture, 'classroom.png') }}">*/
/*   <h1 class="title"><a href="{{path('classroom_show',{id:classroom.id})}}">{{classroom.title}}</a>*/
/*     {% if classroom.status == "draft" %}*/
/*     <span class="label label-warning ">未发布</span>*/
/*     {% elseif classroom.status == "closed" %}*/
/*     <span class="label label-danger ">已关闭</span>*/
/*     {% endif %}*/
/*     {% if classroom.status == "published" %}*/
/*     <span class="label label-success"> 已发布</span>*/
/*     {% endif %}*/
/*   </h1>*/
/* */
/*   <div class="toolbar hidden-xs">*/
/*     {% if classroom.status == 'published' %}*/
/*       <div class="btn-group">*/
/*         <a class="btn btn-default dropdown-toggle btn-sm" href="{{ path('classroom_show', {id:classroom.id}) }}">返回{{ setting('classroom.name')|default("班级") }}主页</a>*/
/*       </div>*/
/*     {% endif %}*/
/* */
/*     <div class="btn-group">*/
/*       <button type="button" class="btn btn-default dropdown-toggle btn-sm" data-toggle="dropdown" aria-expanded="false">*/
/*         预览 <span class="caret"></span>*/
/*       </button>*/
/*       <ul class="dropdown-menu" role="menu">*/
/*         <li><a href="{{path('classroom_courses',{classroomId:classroom.id,previewAs:'guest'})}}" target="blank">作为未购买用户</a></li>*/
/*         {% if  classroom.showable %}*/
/*           <li><a href="{{path('classroom_courses',{classroomId:classroom.id,previewAs:'auditor'})}}" target="blank">作为旁听生</a></li>*/
/*         {% endif %}*/
/*         <li><a href="{{path('classroom_courses',{classroomId:classroom.id,previewAs:'member'})}}" target="_blank">作为正式学员</a></li>*/
/*       </ul>*/
/*     </div>*/
/* */
/* */
/*     {% if classroom.status != 'published' %}*/
/*       <div class="btn-group">*/
/*         <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">*/
/*           发布*/
/*         </button>*/
/*       </div>*/
/* */
/*       <div id="myModal" class="modal fade">*/
/*         <div class="modal-dialog">*/
/*           <div class="modal-content">*/
/*             <div class="modal-header">*/
/*               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*               <h4 class="modal-title">发布{{ setting('classroom.name')|default("班级") }}</h4>*/
/*             </div>*/
/*             <div class="modal-body">*/
/*               <p>*/
/*                 {% if unsetted|length > 0 %}*/
/*                 {% set unsetted = sub_str(unsetted, 1, unsetted|length - 1 )|split(',')  %}*/
/*                 <span class="text-danger">*/
/*                     {{unsetted|join("，")}}还未设置*/
/*                 </span>*/
/*                 {% endif %}*/
/*                 &nbsp;确定要发布吗？*/
/*               </p>*/
/*             </div>*/
/*             <div class="modal-footer">*/
/*               <a data-dismiss="modal" href="">取消</a>&nbsp;*/
/*               <button type="button" class="btn btn-success" id="publishSure" data-url="{{path('classroom_manage_publish',{id:classroom.id})}}">确定</button>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     {% endif %}*/
/* */
/*   </div>*/
/* </div>*/
/* */
/* {% do load_script('classroombundle/controller/classroom/manage/publish') %}*/
/* */
