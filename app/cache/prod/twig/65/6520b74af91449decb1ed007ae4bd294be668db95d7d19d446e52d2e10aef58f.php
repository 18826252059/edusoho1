<?php

/* TopxiaWebBundle:QuizQuestionTest:do-test-choice.html.twig */
class __TwigTemplate_23f0cfbbb9fd6f6266de4b1c48ca116235a999afb2de9eb09d4cadc94b2ce399 extends Twig_Template
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
        echo "
";
        // line 2
        if (( !((array_key_exists("role", $context)) ? (_twig_default_filter((isset($context["role"]) ? $context["role"] : null), null)) : (null)) == "teacher")) {
            // line 3
            echo "

<div class=\"testpaper-question testpaper-question-choice ";
            // line 5
            if ($this->env->getExtension('topxia_web_twig')->getSetting("magic.testpaper_watermark")) {
                echo "testpaper-watermark";
            }
            echo "\" data-watermark-url=\"";
            echo $this->env->getExtension('routing')->getPath("cloud_testpaper_watermark");
            echo "\" id=\"question";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "questionId", array()), "html", null, true);
            echo "\">

\t";
            // line 7
            $context["keys"] = array();
            // line 8
            echo "\t";
            $context["keys_answer"] = array();
            // line 9
            echo "\t<div class=\"testpaper-question-body\">
    ";
            // line 10
            $this->loadTemplate("TopxiaWebBundle:QuizQuestionTest:testpaper-question-stem.html.twig", "TopxiaWebBundle:QuizQuestionTest:do-test-choice.html.twig", 10)->display($context);
            // line 11
            echo "
\t\t<ul class=\"testpaper-question-choices\">
\t\t\t";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array()), "metas", array()), "choices", array()));
            foreach ($context['_seq'] as $context["key"] => $context["choice"]) {
                // line 14
                echo "\t\t\t  ";
                $context["itemClass"] = (((twig_in_filter((($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()), null)) : (null)), array(0 => "reviewing", 1 => "finished")) && twig_in_filter($context["key"], $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array()), "answer", array())))) ? ("testpaper-question-choice-right") : (""));
                // line 15
                echo "\t\t\t  ";
                $context["choiceIndex"] = $this->env->getExtension('topxia_web_twig')->chrFilter((65 + $context["key"]));
                // line 16
                echo "
\t\t\t\t<li class=\"";
                // line 17
                echo twig_escape_filter($this->env, (isset($context["itemClass"]) ? $context["itemClass"] : null), "html", null, true);
                echo "\"><span class=\"testpaper-question-choice-index\">";
                echo twig_escape_filter($this->env, (isset($context["choiceIndex"]) ? $context["choiceIndex"] : null), "html", null, true);
                echo ".</span> ";
                echo $this->env->getExtension('topxia_web_twig')->bbCode2HtmlFilter($context["choice"]);
                echo "</li>
\t\t\t\t";
                // line 18
                if (twig_in_filter($context["key"], $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array()), "answer", array()))) {
                    // line 19
                    echo "\t\t\t\t\t";
                    $context["keys"] = twig_array_merge((isset($context["keys"]) ? $context["keys"] : null), array(0 => (isset($context["choiceIndex"]) ? $context["choiceIndex"] : null)));
                    // line 20
                    echo "\t\t\t\t";
                }
                // line 21
                echo "\t\t\t\t";
                if (twig_in_filter($context["key"], (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array(), "any", false, true), "testResult", array(), "any", false, true), "answer", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array(), "any", false, true), "testResult", array(), "any", false, true), "answer", array()), array())) : (array())))) {
                    // line 22
                    echo "\t\t\t\t\t";
                    $context["keys_answer"] = twig_array_merge((isset($context["keys_answer"]) ? $context["keys_answer"] : null), array(0 => (isset($context["choiceIndex"]) ? $context["choiceIndex"] : null)));
                    // line 23
                    echo "\t\t\t\t";
                }
                // line 24
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "\t\t</ul>
\t</div>
\t";
            // line 27
            if (((twig_in_filter((($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()), null)) : (null)), array(0 => "reviewing", 1 => "finished")) && ($this->env->getExtension('topxia_web_twig')->getSetting("questions.testpaper_answers_show_mode", "submitted") == "submitted")) || (($this->env->getExtension('topxia_web_twig')->getSetting("questions.testpaper_answers_show_mode", "submitted") == "reviewed") && ((($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()), null)) : (null)) == "finished")))) {
                // line 28
                echo "\t\t<div class=\"testpaper-question-footer clearfix\">
\t\t  <div class=\"testpaper-question-result\">
\t\t\t\t";
                // line 30
                if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array()), "testResult", array()), "status", array()) == "right")) {
                    // line 31
                    echo "\t\t\t\t\t正确答案是 <strong class=\"text-success\">";
                    echo twig_escape_filter($this->env, twig_join_filter((isset($context["keys"]) ? $context["keys"] : null), ","), "html", null, true);
                    echo "</strong>，回答正确
\t\t\t\t";
                } elseif (($this->getAttribute($this->getAttribute($this->getAttribute(                // line 32
(isset($context["item"]) ? $context["item"] : null), "question", array()), "testResult", array()), "status", array()) == "partRight")) {
                    // line 33
                    echo "\t\t\t\t\t正确答案是 <strong class=\"text-success\">";
                    echo twig_escape_filter($this->env, twig_join_filter((isset($context["keys"]) ? $context["keys"] : null), ","), "html", null, true);
                    echo "</strong>，你的答案是 <strong class=\"text-danger\">";
                    echo twig_escape_filter($this->env, twig_join_filter((isset($context["keys_answer"]) ? $context["keys_answer"] : null), ","), "html", null, true);
                    echo "</strong>。回答部分正确。得分：";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array()), "testResult", array()), "score", array()), "html", null, true);
                    echo "分
\t\t\t\t";
                } elseif (($this->getAttribute($this->getAttribute($this->getAttribute(                // line 34
(isset($context["item"]) ? $context["item"] : null), "question", array()), "testResult", array()), "status", array()) == "wrong")) {
                    // line 35
                    echo "\t\t\t\t\t正确答案是 <strong class=\"text-success\">";
                    echo twig_escape_filter($this->env, twig_join_filter((isset($context["keys"]) ? $context["keys"] : null), ","), "html", null, true);
                    echo "</strong>，你的答案是 <strong class=\"text-danger\">";
                    echo twig_escape_filter($this->env, twig_join_filter((isset($context["keys_answer"]) ? $context["keys_answer"] : null), ","), "html", null, true);
                    echo "</strong>。回答错误
\t\t\t\t";
                } elseif (($this->getAttribute($this->getAttribute($this->getAttribute(                // line 36
(isset($context["item"]) ? $context["item"] : null), "question", array()), "testResult", array()), "status", array()) == "noAnswer")) {
                    // line 37
                    echo "\t\t\t\t  正确答案是 <strong class=\"text-success\">";
                    echo twig_escape_filter($this->env, twig_join_filter((isset($context["keys"]) ? $context["keys"] : null), ","), "html", null, true);
                    echo "</strong>，你未答题
\t\t\t\t";
                }
                // line 39
                echo "\t\t  </div>

\t\t\t<div class=\"testpaper-question-actions pull-right\">
\t\t\t\t";
                // line 42
                $this->loadTemplate("TopxiaWebBundle:QuizQuestionTest:flag.html.twig", "TopxiaWebBundle:QuizQuestionTest:do-test-choice.html.twig", 42)->display(array_merge($context, array("flags" => array(0 => "favorite", 1 => "analysis"))));
                // line 43
                echo "\t\t\t</div>

\t\t</div>
\t\t<div class=\"testpaper-question-analysis well\" style=\"display:none;\">";
                // line 46
                echo nl2br($this->env->getExtension('topxia_web_twig')->bbCode2HtmlFilter($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array()), "analysis", array())));
                echo "</div>
\t";
            } else {
                // line 48
                echo "\t\t<div class=\"testpaper-question-footer clearfix\">

\t\t  <div class=\"testpaper-question-choice-inputs\">
\t\t\t\t";
                // line 51
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array()), "metas", array()), "choices", array()));
                foreach ($context['_seq'] as $context["key"] => $context["choice"]) {
                    // line 52
                    echo "\t\t\t\t\t";
                    $context["choiceIndex"] = $this->env->getExtension('topxia_web_twig')->chrFilter((65 + $context["key"]));
                    // line 53
                    echo "
\t\t\t\t\t<label class=\"";
                    // line 54
                    if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "questionType", array()) == "single_choice")) {
                        echo "radio";
                    } else {
                        echo "checkbox";
                    }
                    echo "-inline ";
                    if (twig_in_filter((isset($context["choiceIndex"]) ? $context["choiceIndex"] : null), (isset($context["keys_answer"]) ? $context["keys_answer"] : null))) {
                        echo "active";
                    }
                    echo "\">
\t\t\t\t\t\t<input type=\"";
                    // line 55
                    if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "questionType", array()) == "single_choice")) {
                        echo "radio";
                    } else {
                        echo "checkbox";
                    }
                    echo "\" data-type=\"choice\" name=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "questionId", array()), "html", null, true);
                    echo "\" value=\"";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo "\" ";
                    if (twig_in_filter((isset($context["choiceIndex"]) ? $context["choiceIndex"] : null), (isset($context["keys_answer"]) ? $context["keys_answer"] : null))) {
                        echo "checked";
                    }
                    echo " >
\t\t\t\t\t\t";
                    // line 56
                    echo twig_escape_filter($this->env, (isset($context["choiceIndex"]) ? $context["choiceIndex"] : null), "html", null, true);
                    echo "
\t\t\t\t\t</label> 
\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['choice'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 59
                echo "\t\t  </div>
\t\t  <div class=\"testpaper-question-actions pull-right\">
\t\t\t";
                // line 61
                $this->loadTemplate("TopxiaWebBundle:QuizQuestionTest:flag.html.twig", "TopxiaWebBundle:QuizQuestionTest:do-test-choice.html.twig", 61)->display(array_merge($context, array("flags" => array(0 => "mark", 1 => "favorite"))));
                // line 62
                echo "\t\t  </div>
\t\t</div>

\t\t";
                // line 65
                if (((array_key_exists("questionPreview", $context)) ? (_twig_default_filter((isset($context["questionPreview"]) ? $context["questionPreview"] : null), false)) : (false))) {
                    // line 66
                    echo "\t\t  <div class=\"testpaper-preview-answer clearfix mtl mbl\">
\t\t  \t<div class=\"testpaper-question-result\">
\t\t\t\t正确答案是 <strong class=\"text-success\">";
                    // line 68
                    echo twig_escape_filter($this->env, twig_join_filter((isset($context["keys"]) ? $context["keys"] : null), ","), "html", null, true);
                    echo "</strong>
\t\t  \t</div>
\t\t  </div>

\t\t  <div class=\"testpaper-question-analysis well\">";
                    // line 72
                    echo nl2br($this->env->getExtension('topxia_web_twig')->bbCode2HtmlFilter((($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array(), "any", false, true), "analysis", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array(), "any", false, true), "analysis", array()), "无解析")) : ("无解析"))));
                    echo "</div>
\t\t";
                }
                // line 74
                echo "

\t";
            }
            // line 77
            echo "</div>

";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:QuizQuestionTest:do-test-choice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 77,  240 => 74,  235 => 72,  228 => 68,  224 => 66,  222 => 65,  217 => 62,  215 => 61,  211 => 59,  202 => 56,  186 => 55,  174 => 54,  171 => 53,  168 => 52,  164 => 51,  159 => 48,  154 => 46,  149 => 43,  147 => 42,  142 => 39,  136 => 37,  134 => 36,  127 => 35,  125 => 34,  116 => 33,  114 => 32,  109 => 31,  107 => 30,  103 => 28,  101 => 27,  97 => 25,  91 => 24,  88 => 23,  85 => 22,  82 => 21,  79 => 20,  76 => 19,  74 => 18,  66 => 17,  63 => 16,  60 => 15,  57 => 14,  53 => 13,  49 => 11,  47 => 10,  44 => 9,  41 => 8,  39 => 7,  28 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* */
/* {% if not role|default(null) == 'teacher' %}*/
/* */
/* */
/* <div class="testpaper-question testpaper-question-choice {% if setting('magic.testpaper_watermark') %}testpaper-watermark{% endif %}" data-watermark-url="{{ path('cloud_testpaper_watermark') }}" id="question{{ item.questionId }}">*/
/* */
/* 	{% set keys = [] %}*/
/* 	{% set keys_answer = [] %}*/
/* 	<div class="testpaper-question-body">*/
/*     {% include 'TopxiaWebBundle:QuizQuestionTest:testpaper-question-stem.html.twig' %}*/
/* */
/* 		<ul class="testpaper-question-choices">*/
/* 			{% for key, choice in item.question.metas.choices %}*/
/* 			  {% set itemClass =  ((paperResult.status|default(null) in ['reviewing', 'finished']) and (key in item.question.answer)) ? 'testpaper-question-choice-right' : '' %}*/
/* 			  {% set choiceIndex = (65+key)|chr %}*/
/* */
/* 				<li class="{{ itemClass }}"><span class="testpaper-question-choice-index">{{ choiceIndex }}.</span> {{ choice|bbCode2Html|raw }}</li>*/
/* 				{% if key in item.question.answer %}*/
/* 					{% set keys = keys|merge([choiceIndex]) %}*/
/* 				{% endif  %}*/
/* 				{% if key in item.question.testResult.answer|default([]) %}*/
/* 					{% set keys_answer = keys_answer|merge([choiceIndex]) %}*/
/* 				{% endif %}*/
/* 			{% endfor %}*/
/* 		</ul>*/
/* 	</div>*/
/* 	{% if (paperResult.status|default(null) in ['reviewing', 'finished'] and setting('questions.testpaper_answers_show_mode','submitted') == 'submitted') or (setting('questions.testpaper_answers_show_mode','submitted') == 'reviewed'  and paperResult.status|default(null) == 'finished') %}*/
/* 		<div class="testpaper-question-footer clearfix">*/
/* 		  <div class="testpaper-question-result">*/
/* 				{% if item.question.testResult.status == 'right' %}*/
/* 					正确答案是 <strong class="text-success">{{ keys|join(',') }}</strong>，回答正确*/
/* 				{% elseif item.question.testResult.status == 'partRight' %}*/
/* 					正确答案是 <strong class="text-success">{{ keys|join(',') }}</strong>，你的答案是 <strong class="text-danger">{{ keys_answer|join(',') }}</strong>。回答部分正确。得分：{{ item.question.testResult.score }}分*/
/* 				{% elseif item.question.testResult.status == 'wrong' %}*/
/* 					正确答案是 <strong class="text-success">{{ keys|join(',') }}</strong>，你的答案是 <strong class="text-danger">{{ keys_answer|join(',') }}</strong>。回答错误*/
/* 				{% elseif item.question.testResult.status == 'noAnswer' %}*/
/* 				  正确答案是 <strong class="text-success">{{ keys|join(',') }}</strong>，你未答题*/
/* 				{% endif %}*/
/* 		  </div>*/
/* */
/* 			<div class="testpaper-question-actions pull-right">*/
/* 				{% include 'TopxiaWebBundle:QuizQuestionTest:flag.html.twig' with { flags:['favorite', 'analysis'] } %}*/
/* 			</div>*/
/* */
/* 		</div>*/
/* 		<div class="testpaper-question-analysis well" style="display:none;">{{ item.question.analysis|bbCode2Html|raw|nl2br }}</div>*/
/* 	{% else %}*/
/* 		<div class="testpaper-question-footer clearfix">*/
/* */
/* 		  <div class="testpaper-question-choice-inputs">*/
/* 				{% for key, choice in item.question.metas.choices %}*/
/* 					{% set choiceIndex = (65+key)|chr %}*/
/* */
/* 					<label class="{% if item.questionType == 'single_choice' %}radio{% else %}checkbox{% endif %}-inline {% if choiceIndex in keys_answer %}active{% endif %}">*/
/* 						<input type="{% if item.questionType == 'single_choice' %}radio{% else %}checkbox{% endif %}" data-type="choice" name="{{ item.questionId }}" value="{{ key }}" {% if choiceIndex in keys_answer %}checked{% endif %} >*/
/* 						{{ choiceIndex }}*/
/* 					</label> */
/* 				{% endfor %}*/
/* 		  </div>*/
/* 		  <div class="testpaper-question-actions pull-right">*/
/* 			{% include 'TopxiaWebBundle:QuizQuestionTest:flag.html.twig' with { flags:['mark', 'favorite'] } %}*/
/* 		  </div>*/
/* 		</div>*/
/* */
/* 		{% if questionPreview|default(false) %}*/
/* 		  <div class="testpaper-preview-answer clearfix mtl mbl">*/
/* 		  	<div class="testpaper-question-result">*/
/* 				正确答案是 <strong class="text-success">{{ keys|join(',') }}</strong>*/
/* 		  	</div>*/
/* 		  </div>*/
/* */
/* 		  <div class="testpaper-question-analysis well">{{ item.question.analysis|default('无解析')|bbCode2Html|raw|nl2br }}</div>*/
/* 		{% endif %}*/
/* */
/* */
/* 	{% endif %}*/
/* </div>*/
/* */
/* {% endif %}*/
