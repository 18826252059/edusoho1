<?php

/* TopxiaWebBundle:Marker:do-test-fill.html.twig */
class __TwigTemplate_2ef6cf031287b092a5a5ec91eb5190cb1f42c0cce5beea5766b2636fe52018bd extends Twig_Template
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
\t\t填空题
\t\t<a type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</a>
\t</div>
\t<div class=\"question-body clearfix\">
\t\t<div class=\"gray-darker mbl\">";
        // line 7
        echo $this->env->getExtension('topxia_web_twig')->bbCode2HtmlFilter($this->env->getExtension('topxia_web_twig')->fillQuestionStemHtmlFilter($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "stem", array())));
        echo "</div>
\t\t";
        // line 8
        if ((($this->getAttribute($this->getAttribute((isset($context["itemResult"]) ? $context["itemResult"] : null), "answer", array(), "any", false, true), 0, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["itemResult"]) ? $context["itemResult"] : null), "answer", array(), "any", false, true), 0, array(), "array"), null)) : (null))) {
            // line 9
            echo "\t\t";
            $context["fileItemResultAnswer"] = $this->getAttribute($this->getAttribute((isset($context["itemResult"]) ? $context["itemResult"] : null), "answer", array()), 0, array(), "array");
            // line 10
            echo "\t\t";
        }
        // line 11
        echo "\t\t<div class=\"homework-question-fill question-fill-inputs\">
\t\t\t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "answer", array()));
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
        foreach ($context['_seq'] as $context["index"] => $context["answer"]) {
            // line 13
            echo "\t\t\t<input class=\"form-control \" type=\"text\" data-type=\"fill\" name=\"answer[";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), "html", null, true);
            echo "][]\" placeholder=\"填空(";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo ")答案，请填在这里\" value=\"\" />
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
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['answer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "\t\t</div>
\t</div>
\t<div class=\"question-footer\">
\t\t<input id=\"data\" data-markerid=\"";
        // line 18
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
\t\t\t\t<div class=\"pvm text-danger\"></div>
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
        return "TopxiaWebBundle:Marker:do-test-fill.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 18,  84 => 15,  65 => 13,  48 => 12,  45 => 11,  42 => 10,  39 => 9,  37 => 8,  33 => 7,  19 => 1,);
    }
}
/* <div class="question question-{{ question.type }} question-{{ question.id }}"  data-question-id="{{ question.id }}">*/
/* 	<div class="question-heading editor-text">*/
/* 		填空题*/
/* 		<a type="button" class="close" data-dismiss="modal" aria-hidden="true">×</a>*/
/* 	</div>*/
/* 	<div class="question-body clearfix">*/
/* 		<div class="gray-darker mbl">{{ question.stem|fill_question_stem_html|bbCode2Html|raw }}</div>*/
/* 		{% if itemResult.answer[0]|default(null) %}*/
/* 		{% set fileItemResultAnswer = itemResult.answer[0] %}*/
/* 		{% endif %}*/
/* 		<div class="homework-question-fill question-fill-inputs">*/
/* 			{% for index,answer in question.answer %}*/
/* 			<input class="form-control " type="text" data-type="fill" name="answer[{{ question.id }}][]" placeholder="填空({{ loop.index }})答案，请填在这里" value="" />*/
/* 			{% endfor %}*/
/* 		</div>*/
/* 	</div>*/
/* 	<div class="question-footer">*/
/* 		<input id="data" data-markerid="{{markerId}}"data-type="{{question.type}}" data-questionid="{{question.id}}" data-url="{{ path('course_lesson_question_marker_next',{markerId:markerId,questionId:question.id}) }}" data-show-questionanswer="{{ path('course_lesson_question_marker_answer_show',{markerId:markerId,questionId:question.id}) }}"data-lessonid="{{lessonId}}" hidden="hidden">*/
/* 		<div class="row">*/
/* 			<div class="col-xs-10 text-right">*/
/* 				<div class="pvm text-danger"></div>*/
/* 			</div>*/
/* 			<div class="col-xs-2">*/
/* 				<button id="submitQuestion" class="btn btn-primary btn-lg pull-right">提 交</button>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* </div>*/
