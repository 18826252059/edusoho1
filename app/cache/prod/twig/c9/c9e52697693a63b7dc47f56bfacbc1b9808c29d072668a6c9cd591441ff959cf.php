<?php

/* TopxiaWebBundle:Marker:do-test-choice.html.twig */
class __TwigTemplate_f7436c2dbd5e45743af2a3456059f87a05c34ea8487c6888feb55321259da063 extends Twig_Template
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
\t\t多选题
\t\t<a type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</a>
\t</div>
\t<div class=\"question-body clearfix\">
\t\t<div class=\"gray-darker mbm\">";
        // line 7
        echo strip_tags($this->env->getExtension('topxia_web_twig')->bbCode2HtmlFilter($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "stem", array())));
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
\t\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "metas", array()), "choices", array()));
        foreach ($context['_seq'] as $context["key"] => $context["choice"]) {
            // line 13
            echo "\t\t    ";
            $context["choiceIndex"] = $this->env->getExtension('topxia_web_twig')->chrFilter((65 + $context["key"]));
            // line 14
            echo "\t\t\t<li data-index=\"";
            echo twig_escape_filter($this->env, (isset($context["choiceIndex"]) ? $context["choiceIndex"] : null), "html", null, true);
            echo "\" data-for=\"question-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), "html", null, true);
            echo "-input-";
            echo twig_escape_filter($this->env, (isset($context["choiceIndex"]) ? $context["choiceIndex"] : null), "html", null, true);
            echo "\">
\t\t\t\t<span class=\"type-check\" id=\"question-";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), "html", null, true);
            echo "-input-";
            echo twig_escape_filter($this->env, (isset($context["choiceIndex"]) ? $context["choiceIndex"] : null), "html", null, true);
            echo "\" name=\"answer[";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), "html", null, true);
            echo "][]\" value=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["choiceIndex"]) ? $context["choiceIndex"] : null), "html", null, true);
            echo "</span>
\t\t\t\t<span class=\"mll\">";
            // line 16
            echo strip_tags($this->env->getExtension('topxia_web_twig')->bbCode2HtmlFilter($context["choice"]));
            echo "</span>
\t\t\t</li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "\t\t</ul>
\t</div>
\t<div class=\"question-footer\">
\t\t<input id=\"data\" data-markerid=\"";
        // line 22
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
\t\t\t\t<div class=\"pvm text-danger mbl\"></div>
\t\t\t</div>
\t\t\t<div class=\"col-xs-2\">
\t\t\t\t<button id=\"submitQuestion\" class=\"btn btn-primary btn-lg mbl pull-right\">提 交</button>
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Marker:do-test-choice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 22,  85 => 19,  76 => 16,  64 => 15,  55 => 14,  52 => 13,  48 => 12,  45 => 11,  42 => 10,  39 => 9,  37 => 8,  33 => 7,  19 => 1,);
    }
}
/* <div class="question question-{{ question.type }} question-{{ question.id }}"  data-question-id="{{ question.id }}">*/
/* 	<div class="question-heading editor-text">*/
/* 		多选题*/
/* 		<a type="button" class="close" data-dismiss="modal" aria-hidden="true">×</a>*/
/* 	</div>*/
/* 	<div class="question-body clearfix">*/
/* 		<div class="gray-darker mbm">{{ question.stem|bbCode2Html|striptags|raw }}</div>*/
/* 		{% if itemResult.answer|default(null) %}*/
/* 		  {% set answerChoiceIndex = itemResult.answer %}*/
/* 		{% endif %}*/
/* 		<ul class="question-choices">*/
/* 			{% for key, choice in question.metas.choices %}*/
/* 		    {% set choiceIndex = (65+key)|chr %}*/
/* 			<li data-index="{{ choiceIndex }}" data-for="question-{{ question.id }}-input-{{ choiceIndex }}">*/
/* 				<span class="type-check" id="question-{{ question.id }}-input-{{ choiceIndex }}" name="answer[{{ question.id }}][]" value="{{ key }}">{{ choiceIndex }}</span>*/
/* 				<span class="mll">{{ choice|bbCode2Html|striptags|raw}}</span>*/
/* 			</li>*/
/* 			{% endfor %}*/
/* 		</ul>*/
/* 	</div>*/
/* 	<div class="question-footer">*/
/* 		<input id="data" data-markerid="{{markerId}}"data-type="{{question.type}}" data-questionid="{{question.id}}" data-url="{{ path('course_lesson_question_marker_next',{markerId:markerId,questionId:question.id}) }}" data-show-questionanswer="{{ path('course_lesson_question_marker_answer_show',{markerId:markerId,questionId:question.id}) }}"data-lessonid="{{lessonId}}" hidden="hidden">*/
/* 		<div class="row">*/
/* 			<div class="col-xs-10 text-right">*/
/* 				<div class="pvm text-danger mbl"></div>*/
/* 			</div>*/
/* 			<div class="col-xs-2">*/
/* 				<button id="submitQuestion" class="btn btn-primary btn-lg mbl pull-right">提 交</button>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
