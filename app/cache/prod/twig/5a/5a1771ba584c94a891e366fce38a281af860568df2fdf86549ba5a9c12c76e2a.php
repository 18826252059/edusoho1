<?php

/* TopxiaWebBundle:Marker:answer-single_choice.html.twig */
class __TwigTemplate_97fe443ec568f388dbdcbfc08c33e4926136c49bdac420d6292426614033e694 extends Twig_Template
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
\t\t单选题
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
            $context["answerChoiceIndex"] = (1 + $this->getAttribute((isset($context["answer"]) ? $context["answer"] : null), 0, array(), "array"));
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
\t\t\t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "metas", array()), "choices", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["key"] => $context["choice"]) {
            // line 15
            echo "\t\t\t";
            $context["choiceIndex"] = $this->env->getExtension('topxia_web_twig')->chrFilter((65 + $context["key"]));
            // line 16
            echo "\t\t\t<li data-index=\"";
            echo twig_escape_filter($this->env, (isset($context["choiceIndex"]) ? $context["choiceIndex"] : null), "html", null, true);
            echo "\" data-for=\"question-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), "html", null, true);
            echo "-input-";
            echo twig_escape_filter($this->env, (isset($context["choiceIndex"]) ? $context["choiceIndex"] : null), "html", null, true);
            echo "\">
\t\t\t\t<span class=\"type-check ";
            // line 17
            if ((($this->getAttribute($context["loop"], "index", array()) == (isset($context["answerChoiceIndex"]) ? $context["answerChoiceIndex"] : null)) && ($this->getAttribute($context["loop"], "index", array()) == ((isset($context["selfAnswer"]) ? $context["selfAnswer"] : null) + 1)))) {
                echo " correct ";
            } elseif (($this->getAttribute($context["loop"], "index", array()) == ((isset($context["selfAnswer"]) ? $context["selfAnswer"] : null) + 1))) {
                echo " error ";
            }
            echo " \" id=\"question-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), "html", null, true);
            echo "-input-";
            echo twig_escape_filter($this->env, (isset($context["choiceIndex"]) ? $context["choiceIndex"] : null), "html", null, true);
            echo "\" data-type=\"single_choice\" name=\"answer[";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), "html", null, true);
            echo "]\" value=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["choiceIndex"]) ? $context["choiceIndex"] : null), "html", null, true);
            echo "</span>
\t\t\t\t";
            // line 18
            echo $this->env->getExtension('topxia_web_twig')->bbCode2HtmlFilter($context["choice"]);
            echo "
\t\t\t\t";
            // line 19
            if (($this->getAttribute($context["loop"], "index", array()) == (isset($context["answerChoiceIndex"]) ? $context["answerChoiceIndex"] : null))) {
                // line 20
                echo "\t\t\t\t<span class=\"label label-success label-md\">正确答案</span>
\t\t\t\t";
            }
            // line 22
            echo "\t\t\t</li>
\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "\t\t</ul>
\t</div>
\t<div class=\"question-footer clearfix\">
\t\t";
        // line 27
        $this->loadTemplate("TopxiaWebBundle:Marker:answer-progress.html.twig", "TopxiaWebBundle:Marker:answer-single_choice.html.twig", 27)->display($context);
        // line 28
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
        // line 29
        if ((isset($context["compelete"]) ? $context["compelete"] : null)) {
            echo "完成";
        } else {
            echo "下一题";
        }
        echo "</button>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Marker:answer-single_choice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 29,  129 => 28,  127 => 27,  122 => 24,  107 => 22,  103 => 20,  101 => 19,  97 => 18,  79 => 17,  70 => 16,  67 => 15,  50 => 14,  47 => 13,  44 => 12,  41 => 11,  38 => 10,  35 => 9,  33 => 8,  29 => 7,  19 => 1,);
    }
}
/* <div class="question"  data-question-id="{{ question.id }}">*/
/* 	<div class="question-heading editor-text">*/
/* 		单选题*/
/* 		<a type="button" class="close" data-dismiss="modal" aria-hidden="true">×</a>*/
/* 	</div>*/
/* 	<div class="question-body clearfix">*/
/* 		<div class="gray-darker mbm">{{ question.stem|bbCode2Html|raw}}</div>*/
/* 		{% if answer|default(null) %}*/
/* 			{% set answerChoiceIndex = (1+answer[0]) %}*/
/* 		{% else %}*/
/* 			{% set answerChoiceIndex = '-1' %}*/
/* 		{% endif %}*/
/* 		<ul class="question-choices">*/
/* 			{% for key, choice in question.metas.choices %}*/
/* 			{% set choiceIndex = (65+key)|chr %}*/
/* 			<li data-index="{{ choiceIndex }}" data-for="question-{{ question.id }}-input-{{ choiceIndex }}">*/
/* 				<span class="type-check {% if loop.index == answerChoiceIndex and loop.index == (selfAnswer+1) %} correct {% elseif loop.index == (selfAnswer+1) %} error {% endif %} " id="question-{{ question.id }}-input-{{ choiceIndex }}" data-type="single_choice" name="answer[{{ question.id }}]" value="{{ key }}">{{ choiceIndex }}</span>*/
/* 				{{ choice|bbCode2Html|raw}}*/
/* 				{% if loop.index == answerChoiceIndex %}*/
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
/* */
