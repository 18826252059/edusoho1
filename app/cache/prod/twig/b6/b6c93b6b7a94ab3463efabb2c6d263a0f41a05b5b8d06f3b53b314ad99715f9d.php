<?php

/* TopxiaWebBundle:MyQuiz:list-teacher-test-tr.html.twig */
class __TwigTemplate_16be4d2c300bae5986f4497f5942100a291185b5f4245e8864b533c329493aec extends Twig_Template
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
\t<td>
\t\t<a href=\"";
        // line 3
        if (((isset($context["status"]) ? $context["status"] : null) == "reviewing")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_test_teacher_check", array("id" => $this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "id", array()))), "html", null, true);
        }
        if (((isset($context["status"]) ? $context["status"] : null) == "finished")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_test_results", array("id" => $this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "id", array()), "source" => ((array_key_exists("source", $context)) ? (_twig_default_filter((isset($context["source"]) ? $context["source"] : null), "course")) : ("course")), "targetId" => ((array_key_exists("targetId", $context)) ? (_twig_default_filter((isset($context["targetId"]) ? $context["targetId"] : null), 0)) : (0)))), "html", null, true);
        }
        echo "\" target=\"_blank\">";
        echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "name", array()), 60);
        echo "</a> 
\t\t<br>
\t\t<small class=\"text-muted\">来自课程《";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
        echo "》</small>
\t\t<small class=\"text-muted mhs\">•</small>
\t\t<small class=\"text-muted\">共";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "score", array()), "html", null, true);
        echo "分 / ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "itemCount", array()), "html", null, true);
        echo "道题\t</small>
\t</td>
\t<td>
\t\t";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "user_link", array(0 => (isset($context["student"]) ? $context["student"] : null)), "method"), "html", null, true);
        echo " <br>
\t\t<small class=\"text-muted\">";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "endTime", array()), "Y年n月d日 H:i"), "html", null, true);
        echo " 交卷</small>
\t</td>
\t<td>
\t\t";
        // line 14
        if (((isset($context["status"]) ? $context["status"] : null) == "reviewing")) {
            // line 15
            echo "\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_test_teacher_check", array("id" => $this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "id", array()), "source" => ((array_key_exists("source", $context)) ? (_twig_default_filter((isset($context["source"]) ? $context["source"] : null), "course")) : ("course")), "targetId" => ((array_key_exists("targetId", $context)) ? (_twig_default_filter((isset($context["targetId"]) ? $context["targetId"] : null), 0)) : (0)))), "html", null, true);
            echo "\" class=\"btn btn-default btn-sm pull-right\" target=\"_blank\">批阅</a>
\t\t";
        }
        // line 17
        echo "
\t\t";
        // line 18
        if (((isset($context["status"]) ? $context["status"] : null) == "finished")) {
            // line 19
            echo "\t\t  <div>
\t\t  \t<div class=\"text-warning\">总分 <strong>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "score", array()), "html", null, true);
            echo "</strong> 分</div>
\t\t\t\t<div class=\"text-muted\"><small>客观题";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "objectiveScore", array()), "html", null, true);
            echo "分 / 主观题";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "subjectiveScore", array()), "html", null, true);
            echo "分</small></div>
\t\t\t\t<div class=\"text-success\"><small>";
            // line 22
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "nickname", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "nickname", array()), "系统")) : ("系统")), "html", null, true);
            echo " 批于";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "checkedTime", array()), "Y年n月d日 H:i"), "html", null, true);
            echo "</small></div>
\t\t  </div>
\t\t";
        }
        // line 25
        echo "\t</td>
</tr>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyQuiz:list-teacher-test-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 25,  84 => 22,  78 => 21,  74 => 20,  71 => 19,  69 => 18,  66 => 17,  60 => 15,  58 => 14,  52 => 11,  48 => 10,  40 => 7,  35 => 5,  23 => 3,  19 => 1,);
    }
}
/* <tr>*/
/* 	<td>*/
/* 		<a href="{% if status == 'reviewing' %}{{ path('course_manage_test_teacher_check', {id:paperResult.id}) }}{% endif %}{% if status == 'finished' %}{{ path('course_manage_test_results', {id:paperResult.id,source:source|default('course'),targetId:targetId|default(0)}) }}{% endif %}" target="_blank">{{ testpaper.name|plain_text(60) }}</a> */
/* 		<br>*/
/* 		<small class="text-muted">来自课程《{{ course.title }}》</small>*/
/* 		<small class="text-muted mhs">•</small>*/
/* 		<small class="text-muted">共{{ testpaper.score }}分 / {{ testpaper.itemCount }}道题	</small>*/
/* 	</td>*/
/* 	<td>*/
/* 		{{ web_macro.user_link(student) }} <br>*/
/* 		<small class="text-muted">{{ paperResult.endTime|date("Y年n月d日 H:i") }} 交卷</small>*/
/* 	</td>*/
/* 	<td>*/
/* 		{% if status == 'reviewing' %}*/
/* 			<a href="{{ path('course_manage_test_teacher_check', {id:paperResult.id,source:source|default('course'),targetId:targetId|default(0)}) }}" class="btn btn-default btn-sm pull-right" target="_blank">批阅</a>*/
/* 		{% endif %}*/
/* */
/* 		{% if status == 'finished' %}*/
/* 		  <div>*/
/* 		  	<div class="text-warning">总分 <strong>{{ paperResult.score }}</strong> 分</div>*/
/* 				<div class="text-muted"><small>客观题{{ paperResult.objectiveScore }}分 / 主观题{{ paperResult.subjectiveScore }}分</small></div>*/
/* 				<div class="text-success"><small>{{ teacher.nickname|default('系统') }} 批于{{ paperResult.checkedTime|date("Y年n月d日 H:i") }}</small></div>*/
/* 		  </div>*/
/* 		{% endif %}*/
/* 	</td>*/
/* </tr>*/
