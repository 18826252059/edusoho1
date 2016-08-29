<?php

/* TopxiaWebBundle:Marker:answer-fill.html.twig */
class __TwigTemplate_40752031226f1171f679ee15f2c61537fa9101820e273632074fae5de02d4013 extends Twig_Template
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
\t\t填空题<a type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</a>
\t</div>
\t<div class=\"question-body clearfix\">
\t  <div class=\"gray-darker mbl\">";
        // line 6
        echo $this->env->getExtension('topxia_web_twig')->bbCode2HtmlFilter($this->env->getExtension('topxia_web_twig')->fillQuestionStemHtmlFilter($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "stem", array())));
        echo "
\t  </div>
\t\t";
        // line 8
        if (((array_key_exists("answer", $context)) ? (_twig_default_filter((isset($context["answer"]) ? $context["answer"] : null), null)) : (null))) {
            // line 9
            echo "\t\t";
            $context["fileItemResultAnswer"] = $this->getAttribute((isset($context["answer"]) ? $context["answer"] : null), 0, array(), "array");
            // line 10
            echo "\t\t";
        }
        // line 11
        echo "\t\t<div class=\"homework-question-fill question-fill-inputs\">
\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["selfAnswer"]) ? $context["selfAnswer"] : null));
        foreach ($context['_seq'] as $context["index"] => $context["value"]) {
            // line 13
            echo "\t\t  \t<div class=\"fill-answer ";
            if (twig_in_filter($this->getAttribute((isset($context["selfAnswer"]) ? $context["selfAnswer"] : null), $context["index"], array(), "array"), $this->getAttribute((isset($context["answer"]) ? $context["answer"] : null), $context["index"], array(), "array"))) {
                echo "correct";
            } else {
                echo "error";
            }
            echo "\">
\t\t    ";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["selfAnswer"]) ? $context["selfAnswer"] : null), $context["index"], array(), "array"), "html", null, true);
            echo "<span class=\"type\">";
            if (twig_in_filter($this->getAttribute((isset($context["selfAnswer"]) ? $context["selfAnswer"] : null), $context["index"], array(), "array"), $this->getAttribute((isset($context["answer"]) ? $context["answer"] : null), $context["index"], array(), "array"))) {
                echo "正确";
            } else {
                echo "错误";
            }
            echo "</span>
\t\t   \t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "\t\t  <p class=\"answer-title mtl\">正确答案</p>
\t\t  <div class=\"fill-answer\">
\t\t  ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["answer"]) ? $context["answer"] : null));
        foreach ($context['_seq'] as $context["index"] => $context["value"]) {
            // line 20
            echo "\t\t    <p>填空(";
            echo twig_escape_filter($this->env, ($context["index"] + 1), "html", null, true);
            echo "):正确答案<strong class=\"text-success\">";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["value"]);
            foreach ($context['_seq'] as $context["i"] => $context["answerValue"]) {
                echo " ";
                if ($context["i"]) {
                    echo "或";
                }
                echo " ";
                echo twig_escape_filter($this->env, $context["answerValue"], "html", null, true);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['answerValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</strong></p>
\t\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "\t\t  </div>
\t\t</div>
\t</div>
\t<div class=\"question-footer clearfix\">
\t\t<input id=\"data\" data-markerid=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["markerId"]) ? $context["markerId"] : null), "html", null, true);
        echo "\"data-type=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "type", array()), "html", null, true);
        echo "\" data-questionid=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), "html", null, true);
        echo "\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_lesson_question_marker_next", array("markerId" => (isset($context["markerId"]) ? $context["markerId"] : null), "questionId" => $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()))), "html", null, true);
        echo "\" hidden=\"hidden\">\t
\t\t";
        // line 27
        $this->loadTemplate("TopxiaWebBundle:Marker:answer-progress.html.twig", "TopxiaWebBundle:Marker:answer-fill.html.twig", 27)->display($context);
        // line 28
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
        return "TopxiaWebBundle:Marker:answer-fill.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 28,  119 => 27,  109 => 26,  103 => 22,  80 => 20,  76 => 19,  72 => 17,  57 => 14,  48 => 13,  44 => 12,  41 => 11,  38 => 10,  35 => 9,  33 => 8,  28 => 6,  19 => 1,);
    }
}
/* <div class="question"  data-question-id="{{ question.id }}">*/
/* 	<div class="question-heading editor-text">*/
/* 		填空题<a type="button" class="close" data-dismiss="modal" aria-hidden="true">×</a>*/
/* 	</div>*/
/* 	<div class="question-body clearfix">*/
/* 	  <div class="gray-darker mbl">{{ question.stem|fill_question_stem_html|bbCode2Html|raw }}*/
/* 	  </div>*/
/* 		{% if answer|default(null) %}*/
/* 		{% set fileItemResultAnswer = answer[0] %}*/
/* 		{% endif %}*/
/* 		<div class="homework-question-fill question-fill-inputs">*/
/* 		{% for index,value in selfAnswer %}*/
/* 		  	<div class="fill-answer {% if selfAnswer[index] in answer[index] %}correct{% else %}error{% endif %}">*/
/* 		    {{selfAnswer[index]}}<span class="type">{% if selfAnswer[index] in answer[index] %}正确{% else %}错误{% endif %}</span>*/
/* 		   	</div>*/
/* 		{% endfor %}*/
/* 		  <p class="answer-title mtl">正确答案</p>*/
/* 		  <div class="fill-answer">*/
/* 		  {% for index,value in answer %}*/
/* 		    <p>填空({{index+1}}):正确答案<strong class="text-success">{% for i,answerValue in value %} {% if i %}或{% endif %} {{answerValue}}{% endfor %}</strong></p>*/
/* 		  {% endfor %}*/
/* 		  </div>*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="question-footer clearfix">*/
/* 		<input id="data" data-markerid="{{markerId}}"data-type="{{question.type}}" data-questionid="{{question.id}}" data-url="{{ path('course_lesson_question_marker_next',{markerId:markerId,questionId:question.id}) }}" hidden="hidden">	*/
/* 		{% include 'TopxiaWebBundle:Marker:answer-progress.html.twig' %}*/
/* 		<button id="continue" class="btn btn-primary btn-lg pull-right">{% if compelete %}完成{% else %}下一题{% endif %}</button>*/
/* 	</div>*/
/* </div>*/
