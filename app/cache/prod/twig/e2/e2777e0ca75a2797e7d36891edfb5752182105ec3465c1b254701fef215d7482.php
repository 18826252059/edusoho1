<?php

/* TopxiaWebBundle:CourseTestpaperManage:item-pick-tr.html.twig */
class __TwigTemplate_85082f378b680139d75006bc20e6a835a5e1ab063cdf4af285c04f989c373369 extends Twig_Template
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
        echo "<tr>
  <td>
    ";
        // line 3
        if ((($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "includeImg", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "includeImg", array()), "")) : (""))) {
            echo "<span class=\"glyphicon glyphicon-picture\"></span>";
        }
        // line 4
        echo "    ";
        echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->env->getExtension('topxia_web_twig')->fillQuestionStemTextFilter($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "stem", array())), 40);
        echo "
    ";
        // line 5
        if (($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "type", array()) == "material")) {
            // line 6
            echo "      <small class=\"text-muted\">(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "subCount", array()), "html", null, true);
            echo "子题)</small>
    ";
        }
        // line 8
        echo "    <br>
    <small class=\"text-muted\">从属：
      ";
        // line 10
        if (($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "target", array()) == ("course-" . $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array())))) {
            // line 11
            echo "        本课程
      ";
        } else {
            // line 13
            echo "        ";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["targets"]) ? $context["targets"] : null), $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "target", array()), array(), "array", false, true), "simple_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["targets"]) ? $context["targets"] : null), $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "target", array()), array(), "array", false, true), "simple_name", array()), "--")) : ("--")), "html", null, true);
            echo "
      ";
        }
        // line 15
        echo "    </small>
  </td>
  <td>";
        // line 17
        echo $this->env->getExtension('topxia_web_twig')->getDictText("questionType", $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "type", array()));
        echo "</td>
  <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "score", array()), "html", null, true);
        echo "</td>
  <td>
    <button data-url=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_question_preview", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), "isNew" => true)), "html", null, true);
        echo "\" class=\"btn btn-default btn-sm newWindowPreview\">预览</button>
    <button type=\"button\" class=\"btn btn-primary btn-sm\" data-role=\"picked-item\" data-replace=\"";
        // line 21
        echo twig_escape_filter($this->env, ((array_key_exists("replace", $context)) ? (_twig_default_filter((isset($context["replace"]) ? $context["replace"] : null), "")) : ("")), "html", null, true);
        echo "\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_testpaper_item_picked", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "testpaperId" => $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "id", array()), "questionId" => $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()))), "html", null, true);
        echo "\">";
        if ((isset($context["replace"]) ? $context["replace"] : null)) {
            echo "替换";
        } else {
            echo "选择";
        }
        echo "</button>
  </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseTestpaperManage:item-pick-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 21,  69 => 20,  64 => 18,  60 => 17,  56 => 15,  50 => 13,  46 => 11,  44 => 10,  40 => 8,  34 => 6,  32 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* <tr>*/
/*   <td>*/
/*     {% if question.includeImg|default('') %}<span class="glyphicon glyphicon-picture"></span>{% endif %}*/
/*     {{ question.stem|fill_question_stem_text|plain_text(40) }}*/
/*     {% if question.type == 'material' %}*/
/*       <small class="text-muted">({{ question.subCount}}子题)</small>*/
/*     {% endif %}*/
/*     <br>*/
/*     <small class="text-muted">从属：*/
/*       {% if question.target == 'course-' ~ course.id %}*/
/*         本课程*/
/*       {% else %}*/
/*         {{ targets[question.target].simple_name|default('--') }}*/
/*       {% endif %}*/
/*     </small>*/
/*   </td>*/
/*   <td>{{ dict_text('questionType', question.type) }}</td>*/
/*   <td>{{question.score }}</td>*/
/*   <td>*/
/*     <button data-url="{{ path('course_manage_question_preview', {courseId:course.id, id:question.id, isNew:true }) }}" class="btn btn-default btn-sm newWindowPreview">预览</button>*/
/*     <button type="button" class="btn btn-primary btn-sm" data-role="picked-item" data-replace="{{ replace|default('') }}" data-url="{{ path('course_manage_testpaper_item_picked', {courseId:course.id, testpaperId:testpaper.id, questionId:question.id }) }}">{% if replace %}替换{% else %}选择{% endif %}</button>*/
/*   </td>*/
/* </tr>*/
