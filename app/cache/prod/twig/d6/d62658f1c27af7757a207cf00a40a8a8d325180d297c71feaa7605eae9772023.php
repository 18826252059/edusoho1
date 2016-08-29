<?php

/* TopxiaWebBundle:CourseQuestionManage:question-tr.html.twig */
class __TwigTemplate_2a51335bb14179b6400869880f72ff537b27df5b0439e9c49ab18683e28c36a2 extends Twig_Template
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
        echo "<tr data-role='item'>
  <td><input value=\"";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), "html", null, true);
        echo "\" type=\"checkbox\"  autocomplete=\"off\" data-role=\"batch-item\" ></td>
  <td>
    <a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_question_preview", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), "courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\">
      ";
        // line 5
        if ($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "includeImg", array())) {
            echo "<span class=\"glyphicon glyphicon-picture\"></span>";
        }
        // line 6
        echo "      ";
        echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->env->getExtension('topxia_web_twig')->fillQuestionStemTextFilter($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "stem", array())), 40);
        echo "
    </a>
    <div>
      ";
        // line 9
        $context["target"] = (($this->getAttribute((isset($context["targets"]) ? $context["targets"] : null), $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "target", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["targets"]) ? $context["targets"] : null), $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "target", array()), array(), "array"), null)) : (null));
        // line 10
        echo "      ";
        if (((($this->getAttribute((isset($context["target"]) ? $context["target"] : null), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["target"]) ? $context["target"] : null), "type", array()), null)) : (null)) != "course")) {
            // line 11
            echo "        <small class=\"text-muted\">从属于 ";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["targets"]) ? $context["targets"] : null), $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "target", array()), array(), "array", false, true), "simple_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["targets"]) ? $context["targets"] : null), $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "target", array()), array(), "array", false, true), "simple_name", array()), "")) : ("")), "html", null, true);
            echo "</small>
      ";
        } else {
            // line 13
            echo "        <small class=\"text-muted\">从属于 本课程</small>
      ";
        }
        // line 15
        echo "      ";
        if (($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "type", array()) == "material")) {
            // line 16
            echo "        ";
            if (($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "subCount", array()) == 0)) {
                // line 17
                echo "          <span class=\"label label-danger\">未完成</span>
        ";
            }
            // line 19
            echo "      ";
        }
        // line 20
        echo "    </div>
    
  </td>
  <td>
  ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('topxia_web_twig')->getDict("questionType"), $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "type", array()), array(), "array"), "html", null, true);
        echo "
  ";
        // line 25
        if (($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "type", array()) == "material")) {
            echo "<br><small class=\"text-muted\">(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "subCount", array()), "html", null, true);
            echo "子题)</small>";
        }
        // line 26
        echo "  </td>
  <td>
    ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : null), "user_link", array(0 => $this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "userId", array()), array(), "array")), "method"), "html", null, true);
        echo "
    <br />
    <span class=\"text-muted text-sm\">";
        // line 30
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "updatedTime", array()), "Y-n-d H:i:s"), "html", null, true);
        echo "</span>
  </td>
  <td>
    <div class=\"btn-group\">
      <a class=\"btn btn-default btn-sm\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_question_preview", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), "courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\">预览</a>
      <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\"><span class=\"caret\"></span></a>
      <ul class=\"dropdown-menu pull-right\">
        ";
        // line 37
        if (($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "type", array()) == "material")) {
            // line 38
            echo "          <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_question", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "parentId" => $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-list\"></span> 管理子题</a></li>
        ";
        }
        // line 40
        echo "        <li><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_question_update", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), "goto" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-edit\"></span> 编辑</a></li>
        <li><a href=\"javascript:\" data-name='题目";
        // line 41
        if (($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "type", array()) == "material")) {
            echo "(含子题)";
        }
        echo "' data-role='item-delete' data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_question_delete", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()))), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-remove-circle\"></span> 删除</a></li>
      </ul>
    </div>
  </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseQuestionManage:question-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 41,  116 => 40,  110 => 38,  108 => 37,  102 => 34,  95 => 30,  90 => 28,  86 => 26,  80 => 25,  76 => 24,  70 => 20,  67 => 19,  63 => 17,  60 => 16,  57 => 15,  53 => 13,  47 => 11,  44 => 10,  42 => 9,  35 => 6,  31 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }
}
/* <tr data-role='item'>*/
/*   <td><input value="{{question.id}}" type="checkbox"  autocomplete="off" data-role="batch-item" ></td>*/
/*   <td>*/
/*     <a href="#modal" data-toggle="modal" data-url="{{ path('course_manage_question_preview', {id:question.id, courseId:course.id}) }}">*/
/*       {% if question.includeImg %}<span class="glyphicon glyphicon-picture"></span>{% endif %}*/
/*       {{ question.stem |fill_question_stem_text| plain_text(40) }}*/
/*     </a>*/
/*     <div>*/
/*       {% set target = targets[question.target]|default(null) %}*/
/*       {% if target.type|default(null) != 'course' %}*/
/*         <small class="text-muted">从属于 {{targets[question.target].simple_name|default('')}}</small>*/
/*       {% else %}*/
/*         <small class="text-muted">从属于 本课程</small>*/
/*       {% endif %}*/
/*       {% if question.type == 'material'%}*/
/*         {% if  question.subCount == 0  %}*/
/*           <span class="label label-danger">未完成</span>*/
/*         {% endif %}*/
/*       {% endif %}*/
/*     </div>*/
/*     */
/*   </td>*/
/*   <td>*/
/*   {{ dict('questionType')[question.type] }}*/
/*   {% if question.type == 'material'%}<br><small class="text-muted">({{ question.subCount }}子题)</small>{% endif %}*/
/*   </td>*/
/*   <td>*/
/*     {{ macro.user_link(users[question.userId]) }}*/
/*     <br />*/
/*     <span class="text-muted text-sm">{{question.updatedTime | date('Y-n-d H:i:s')}}</span>*/
/*   </td>*/
/*   <td>*/
/*     <div class="btn-group">*/
/*       <a class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal" data-url="{{ path('course_manage_question_preview', {id:question.id, courseId:course.id}) }}">预览</a>*/
/*       <a href="#" type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown"><span class="caret"></span></a>*/
/*       <ul class="dropdown-menu pull-right">*/
/*         {% if question.type == 'material'%}*/
/*           <li><a href="{{ path('course_manage_question',{courseId:course.id, parentId:question.id}) }}"><span class="glyphicon glyphicon-list"></span> 管理子题</a></li>*/
/*         {% endif %}*/
/*         <li><a href="{{ path('course_manage_question_update', {courseId:course.id,id:question.id, goto:app.request.server.get('REQUEST_URI')}) }}"><span class="glyphicon glyphicon-edit"></span> 编辑</a></li>*/
/*         <li><a href="javascript:" data-name='题目{% if question.type == 'material'%}(含子题){% endif %}' data-role='item-delete' data-url="{{ path('course_manage_question_delete', {courseId:course.id, id:question.id}) }}"><span class="glyphicon glyphicon-remove-circle"></span> 删除</a></li>*/
/*       </ul>*/
/*     </div>*/
/*   </td>*/
/* </tr>*/
