<?php

/* TopxiaWebBundle:Marker:answer-uncertain_choice.html.twig */
class __TwigTemplate_cef5418fdb521ac810ea433fdca76e71fcca49592bff32c4b429f2e97da09d77 extends Twig_Template
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
\t\t不定项选择题
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
            echo "\t\t  ";
            $context["answerChoiceIndex"] = (isset($context["answer"]) ? $context["answer"] : null);
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
\t\t\t\t<span class=\"type-check ";
            // line 15
            if ((twig_in_filter($context["key"], (isset($context["answer"]) ? $context["answer"] : null)) && twig_in_filter($context["key"], (isset($context["selfAnswer"]) ? $context["selfAnswer"] : null)))) {
                echo " correct ";
            } elseif (twig_in_filter($context["key"], (isset($context["selfAnswer"]) ? $context["selfAnswer"] : null))) {
                echo "error";
            }
            echo "\" id=\"question-";
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
\t\t\t\t";
            // line 16
            echo $this->env->getExtension('topxia_web_twig')->bbCode2HtmlFilter($context["choice"]);
            echo "
\t\t\t\t\t";
            // line 17
            if (twig_in_filter($context["key"], (isset($context["answer"]) ? $context["answer"] : null))) {
                // line 18
                echo "\t\t\t\t<span class=\"label label-success label-md\">正确答案</span>
\t\t\t\t";
            }
            // line 20
            echo "\t\t\t</li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "\t\t</ul>
\t</div>
\t<div class=\"question-footer clearfix\">
\t\t";
        // line 25
        $this->loadTemplate("TopxiaWebBundle:Marker:answer-progress.html.twig", "TopxiaWebBundle:Marker:answer-uncertain_choice.html.twig", 25)->display($context);
        // line 26
        echo "\t\t<input id=\"data\" data-markerid=\"";
        echo twig_escape_filter($this->env, (isset($context["markerId"]) ? $context["markerId"] : null), "html", null, true);
        echo "\"data-type=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "type", array()), "html", null, true);
        echo "\" data-questionid=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), "html", null, true);
        echo "\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_lesson_question_marker_next", array("markerId" => (isset($context["markerId"]) ? $context["markerId"] : null), "questionId" => $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()))), "html", null, true);
        echo "\" hidden=\"hidden\">
\t\t<button id=\"continue\" class=\"btn btn-primary btn-lg pull-right\">";
        // line 27
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
        return "TopxiaWebBundle:Marker:answer-uncertain_choice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 27,  106 => 26,  104 => 25,  99 => 22,  92 => 20,  88 => 18,  86 => 17,  82 => 16,  64 => 15,  55 => 14,  52 => 13,  48 => 12,  45 => 11,  42 => 10,  39 => 9,  37 => 8,  33 => 7,  19 => 1,);
    }
}
/* <div class="question question-{{ question.type }} question-{{ question.id }}"  data-question-id="{{ question.id }}">*/
/* 	<div class="question-heading editor-text">*/
/* 		不定项选择题*/
/* 		<a type="button" class="close" data-dismiss="modal" aria-hidden="true">×</a>*/
/* 	</div>*/
/* 	<div class="question-body clearfix">*/
/* 		<div class="gray-darker mbm">{{ question.stem|bbCode2Html|raw }}</div>*/
/* 		{% if answer|default(null) %}*/
/* 		  {% set answerChoiceIndex = answer %}*/
/* 		{% endif %}*/
/* 		<ul class="question-choices">*/
/* 			{% for key, choice in question.metas.choices %}*/
/* 		    {% set choiceIndex = (65+key)|chr %}*/
/* 			<li data-index="{{ choiceIndex }}" data-for="question-{{ question.id }}-input-{{ choiceIndex }}">*/
/* 				<span class="type-check {% if key in answer and key in selfAnswer %} correct {% elseif key in selfAnswer %}error{% endif %}" id="question-{{ question.id }}-input-{{ choiceIndex }}" name="answer[{{ question.id }}][]" value="{{ key }}">{{ choiceIndex }}</span>*/
/* 				{{ choice|bbCode2Html|raw}}*/
/* 					{% if key in answer %}*/
/* 				<span class="label label-success label-md">正确答案</span>*/
/* 				{% endif %}*/
/* 			</li>*/
/* 			{% endfor %}*/
/* 		</ul>*/
/* 	</div>*/
/* 	<div class="question-footer clearfix">*/
/* 		{% include 'TopxiaWebBundle:Marker:answer-progress.html.twig' %}*/
/* 		<input id="data" data-markerid="{{markerId}}"data-type="{{question.type}}" data-questionid="{{question.id}}" data-url="{{ path('course_lesson_question_marker_next',{markerId:markerId,questionId:question.id}) }}" hidden="hidden">*/
/* 		<button id="continue" class="btn btn-primary btn-lg pull-right">{% if compelete %}完成{% else %}下一题{% endif %}</button>*/
/* 	</div>*/
/* </div>*/
