<?php

/* TopxiaWebBundle:Marker:answer-determine.html.twig */
class __TwigTemplate_3a3305dc31879e2f37a6e788ec41bfe5e7af0fec51049d9f52d09caa160ad6bc extends Twig_Template
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
        echo "<div class=\"question\"  data-question-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), "html", null, true);
        echo "\">
\t<div class=\"question-heading editor-text\">
\t\t判断题
\t\t<a type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</a>
\t</div>
\t<div class=\"question-body clearfix\">
\t\t<div class=\"gray-darker mbm\">";
        // line 7
        echo $this->env->getExtension('topxia_web_twig')->bbCode2HtmlFilter($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "stem", array()));
        echo "</div>
\t\t";
        // line 8
        if (((array_key_exists("answer", $context)) ? (_twig_default_filter((isset($context["answer"]) ? $context["answer"] : null), null)) : (null))) {
            // line 9
            echo "\t\t\t";
            $context["answerChoiceIndex"] = $this->getAttribute((isset($context["answer"]) ? $context["answer"] : null), 0, array(), "array");
            // line 10
            echo "\t\t";
        } else {
            // line 11
            echo "\t\t\t";
            $context["answerChoiceIndex"] = "-1";
            // line 12
            echo "\t\t";
        }
        // line 13
        echo "\t\t<ul class=\"question-choices\">
\t\t\t<li>
\t\t\t\t<span class=\"type-check ";
        // line 15
        if ((((isset($context["answerChoiceIndex"]) ? $context["answerChoiceIndex"] : null) == 1) && (((array_key_exists("selfAnswer", $context)) ? (_twig_default_filter((isset($context["selfAnswer"]) ? $context["selfAnswer"] : null), null)) : (null)) == 1))) {
            echo "correct ";
        } elseif ((((array_key_exists("selfAnswer", $context)) ? (_twig_default_filter((isset($context["selfAnswer"]) ? $context["selfAnswer"] : null), null)) : (null)) == 1)) {
            echo " error ";
        }
        echo "\" type=\"radio\" data-type=\"determine\" name=\"answer[";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), "html", null, true);
        echo "]\" value=\"1\"> <i class=\"es-icon es-icon-done\"></i>
\t\t\t\t</span>
\t\t\t\t<span class=\"mll\">正确</span>
\t\t\t\t";
        // line 18
        if (((isset($context["answerChoiceIndex"]) ? $context["answerChoiceIndex"] : null) == 1)) {
            // line 19
            echo "\t\t\t\t<span class=\"label label-success label-md mll\">正确答案</span>
\t\t\t\t";
        }
        // line 21
        echo "\t\t\t</li>
\t\t\t<li>
\t\t\t\t<span class=\"type-check ";
        // line 23
        if ((((isset($context["answerChoiceIndex"]) ? $context["answerChoiceIndex"] : null) == 0) && (((array_key_exists("selfAnswer", $context)) ? (_twig_default_filter((isset($context["selfAnswer"]) ? $context["selfAnswer"] : null), null)) : (null)) == 0))) {
            echo "correct ";
        } elseif ((((array_key_exists("selfAnswer", $context)) ? (_twig_default_filter((isset($context["selfAnswer"]) ? $context["selfAnswer"] : null), null)) : (null)) == 0)) {
            echo " error ";
        }
        echo "\" data-type=\"determine\" name=\"answer[";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), "html", null, true);
        echo "]\" value=\"0\"> <i class=\"es-icon es-icon-close01\"></i>
\t\t\t\t</span>
\t\t\t\t<span class=\"mll\">错误</span>
\t\t\t\t";
        // line 26
        if (((isset($context["answerChoiceIndex"]) ? $context["answerChoiceIndex"] : null) == 0)) {
            // line 27
            echo "\t\t\t\t<span class=\"label label-success label-md mll\">正确答案</span>
\t\t\t\t";
        }
        // line 29
        echo "\t\t\t</li>
\t\t</ul>
\t</div>
\t<div class=\"question-footer clearfix\">
\t\t<input id=\"data\" data-markerid=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["markerId"]) ? $context["markerId"] : null), "html", null, true);
        echo "\"data-type=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "type", array()), "html", null, true);
        echo "\" data-questionid=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), "html", null, true);
        echo "\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_lesson_question_marker_next", array("markerId" => (isset($context["markerId"]) ? $context["markerId"] : null), "questionId" => $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()))), "html", null, true);
        echo "\" hidden=\"hidden\">
\t\t";
        // line 34
        $this->loadTemplate("TopxiaWebBundle:Marker:answer-progress.html.twig", "TopxiaWebBundle:Marker:answer-determine.html.twig", 34)->display($context);
        // line 35
        echo "\t\t<button id=\"continue\" class=\"btn btn-primary btn-lg pull-right\">";
        if ((isset($context["compelete"]) ? $context["compelete"] : null)) {
            echo "完成";
        } else {
            echo "下一题";
        }
        echo "</button>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Marker:answer-determine.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 35,  107 => 34,  97 => 33,  91 => 29,  87 => 27,  85 => 26,  73 => 23,  69 => 21,  65 => 19,  63 => 18,  51 => 15,  47 => 13,  44 => 12,  41 => 11,  38 => 10,  35 => 9,  33 => 8,  29 => 7,  19 => 1,);
    }
}
/* <div class="question"  data-question-id="{{ question.id }}">*/
/* 	<div class="question-heading editor-text">*/
/* 		判断题*/
/* 		<a type="button" class="close" data-dismiss="modal" aria-hidden="true">×</a>*/
/* 	</div>*/
/* 	<div class="question-body clearfix">*/
/* 		<div class="gray-darker mbm">{{ question.stem|bbCode2Html|raw }}</div>*/
/* 		{% if answer|default(null) %}*/
/* 			{% set answerChoiceIndex = answer[0] %}*/
/* 		{% else %}*/
/* 			{% set answerChoiceIndex = '-1' %}*/
/* 		{% endif %}*/
/* 		<ul class="question-choices">*/
/* 			<li>*/
/* 				<span class="type-check {% if answerChoiceIndex == 1 and selfAnswer|default(null) == 1 %}correct {% elseif selfAnswer|default(null) == 1 %} error {% endif %}" type="radio" data-type="determine" name="answer[{{ question.id }}]" value="1"> <i class="es-icon es-icon-done"></i>*/
/* 				</span>*/
/* 				<span class="mll">正确</span>*/
/* 				{% if answerChoiceIndex == 1 %}*/
/* 				<span class="label label-success label-md mll">正确答案</span>*/
/* 				{% endif %}*/
/* 			</li>*/
/* 			<li>*/
/* 				<span class="type-check {% if answerChoiceIndex == 0 and selfAnswer|default(null) == 0 %}correct {% elseif selfAnswer|default(null) == 0 %} error {% endif %}" data-type="determine" name="answer[{{ question.id }}]" value="0"> <i class="es-icon es-icon-close01"></i>*/
/* 				</span>*/
/* 				<span class="mll">错误</span>*/
/* 				{% if answerChoiceIndex == 0 %}*/
/* 				<span class="label label-success label-md mll">正确答案</span>*/
/* 				{% endif %}*/
/* 			</li>*/
/* 		</ul>*/
/* 	</div>*/
/* 	<div class="question-footer clearfix">*/
/* 		<input id="data" data-markerid="{{markerId}}"data-type="{{question.type}}" data-questionid="{{question.id}}" data-url="{{ path('course_lesson_question_marker_next',{markerId:markerId,questionId:question.id}) }}" hidden="hidden">*/
/* 		{% include 'TopxiaWebBundle:Marker:answer-progress.html.twig' %}*/
/* 		<button id="continue" class="btn btn-primary btn-lg pull-right">{% if compelete %}完成{% else %}下一题{% endif %}</button>*/
/* 	</div>*/
/* </div>*/
