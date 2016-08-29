<?php

/* TopxiaWebBundle:Marker:do-test-determine.html.twig */
class __TwigTemplate_a85a7de9d476a1d81e0ef70dc2662904f3223b76d71188fd41bc21d3ef1cc1dd extends Twig_Template
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
        echo "<div class=\"question question-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "type", array()), "html", null, true);
        echo " question-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), "html", null, true);
        echo "\"  data-question-id=\"";
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
        if ((($this->getAttribute((isset($context["itemResult"]) ? $context["itemResult"] : null), "answer", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["itemResult"]) ? $context["itemResult"] : null), "answer", array()), null)) : (null))) {
            // line 9
            echo "\t\t  ";
            $context["answerChoiceIndex"] = $this->getAttribute((isset($context["itemResult"]) ? $context["itemResult"] : null), "answer", array());
            // line 10
            echo "\t\t";
        }
        // line 11
        echo "\t\t<ul class=\"question-choices\">
\t\t\t<li>
\t\t\t\t<span class=\"type-check\" type=\"radio\" data-type=\"determine\" name=\"answer[";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), "html", null, true);
        echo "]\" value=\"1\"> <i class=\"es-icon es-icon-done\"></i>
\t\t\t\t</span>
\t\t\t\t<span class=\"mll\">正确</span>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<span class=\"type-check\" data-type=\"determine\" name=\"answer[";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), "html", null, true);
        echo "]\" value=\"0\"> <i class=\"es-icon es-icon-close01\"></i>
\t\t\t\t</span>
\t\t\t\t<span class=\"mll\">错误</span>
\t\t\t</li>
\t\t</ul>
\t</div>
\t<div class=\"question-footer\">
\t\t<input id=\"data\" data-markerid=\"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["markerId"]) ? $context["markerId"] : null), "html", null, true);
        echo "\"data-type=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "type", array()), "html", null, true);
        echo "\" data-questionid=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), "html", null, true);
        echo "\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_lesson_question_marker_next", array("markerId" => (isset($context["markerId"]) ? $context["markerId"] : null), "questionId" => $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()))), "html", null, true);
        echo "\" data-show-questionanswer=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_lesson_question_marker_answer_show", array("markerId" => (isset($context["markerId"]) ? $context["markerId"] : null), "questionId" => $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()))), "html", null, true);
        echo "\"data-lessonid=\"";
        echo twig_escape_filter($this->env, (isset($context["lessonId"]) ? $context["lessonId"] : null), "html", null, true);
        echo "\" hidden=\"hidden\">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-10 text-right\">
\t\t\t\t<div class=\"pvm text-danger \"></div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-2\">
\t\t\t\t<button id=\"submitQuestion\" class=\"btn btn-primary btn-lg pull-right\">提 交</button>
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Marker:do-test-determine.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 25,  57 => 18,  49 => 13,  45 => 11,  42 => 10,  39 => 9,  37 => 8,  33 => 7,  19 => 1,);
    }
}
/* <div class="question question-{{ question.type }} question-{{ question.id }}"  data-question-id="{{ question.id }}">*/
/* 	<div class="question-heading editor-text">*/
/* 		判断题*/
/* 		<a type="button" class="close" data-dismiss="modal" aria-hidden="true">×</a>*/
/* 	</div>*/
/* 	<div class="question-body clearfix">*/
/* 		<div class="gray-darker mbm">{{ question.stem|bbCode2Html|raw }}</div>*/
/* 		{% if itemResult.answer|default(null) %}*/
/* 		  {% set answerChoiceIndex = itemResult.answer %}*/
/* 		{% endif %}*/
/* 		<ul class="question-choices">*/
/* 			<li>*/
/* 				<span class="type-check" type="radio" data-type="determine" name="answer[{{ question.id }}]" value="1"> <i class="es-icon es-icon-done"></i>*/
/* 				</span>*/
/* 				<span class="mll">正确</span>*/
/* 			</li>*/
/* 			<li>*/
/* 				<span class="type-check" data-type="determine" name="answer[{{ question.id }}]" value="0"> <i class="es-icon es-icon-close01"></i>*/
/* 				</span>*/
/* 				<span class="mll">错误</span>*/
/* 			</li>*/
/* 		</ul>*/
/* 	</div>*/
/* 	<div class="question-footer">*/
/* 		<input id="data" data-markerid="{{markerId}}"data-type="{{question.type}}" data-questionid="{{question.id}}" data-url="{{ path('course_lesson_question_marker_next',{markerId:markerId,questionId:question.id}) }}" data-show-questionanswer="{{ path('course_lesson_question_marker_answer_show',{markerId:markerId,questionId:question.id}) }}"data-lessonid="{{lessonId}}" hidden="hidden">*/
/* 		<div class="row">*/
/* 			<div class="col-xs-10 text-right">*/
/* 				<div class="pvm text-danger "></div>*/
/* 			</div>*/
/* 			<div class="col-xs-2">*/
/* 				<button id="submitQuestion" class="btn btn-primary btn-lg pull-right">提 交</button>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
