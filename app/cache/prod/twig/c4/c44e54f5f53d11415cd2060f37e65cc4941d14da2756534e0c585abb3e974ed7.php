<?php

/* TopxiaWebBundle:QuizQuestionTest:do-test-fill.html.twig */
class __TwigTemplate_e9410bcb81137125d9cc3845f8d7a1de54ff3d3fbe51f1cda5089fa2e89423d2 extends Twig_Template
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
        if (( !((array_key_exists("role", $context)) ? (_twig_default_filter((isset($context["role"]) ? $context["role"] : null), null)) : (null)) == "teacher")) {
            // line 2
            echo "
<div class=\"testpaper-question testpaper-question-fill ";
            // line 3
            if ($this->env->getExtension('topxia_web_twig')->getSetting("magic.testpaper_watermark")) {
                echo "testpaper-watermark";
            }
            echo "\" data-watermark-url=\"";
            echo $this->env->getExtension('routing')->getPath("cloud_testpaper_watermark");
            echo "\" id=\"question";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array()), "id", array()), "html", null, true);
            echo "\">
\t<div class=\"testpaper-question-body\">
\t  ";
            // line 5
            $this->loadTemplate("TopxiaWebBundle:QuizQuestionTest:testpaper-question-stem.html.twig", "TopxiaWebBundle:QuizQuestionTest:do-test-fill.html.twig", 5)->display($context);
            // line 6
            echo "  </div>

\t";
            // line 8
            if (((twig_in_filter((($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()), null)) : (null)), array(0 => "reviewing", 1 => "finished")) && ($this->env->getExtension('topxia_web_twig')->getSetting("questions.testpaper_answers_show_mode", "submitted") == "submitted")) || (($this->env->getExtension('topxia_web_twig')->getSetting("questions.testpaper_answers_show_mode", "submitted") == "reviewed") && ((($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()), null)) : (null)) == "finished")))) {
                // line 9
                echo "\t\t<div class=\"testpaper-question-footer clearfix\">
\t\t  <div class=\"testpaper-question-result\">
\t\t    <ul>
\t\t      ";
                // line 12
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array()), "answer", array()));
                foreach ($context['_seq'] as $context["index"] => $context["answer"]) {
                    // line 13
                    echo "\t\t        ";
                    $context["userAnswer"] = (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array(), "any", false, true), "testResult", array(), "any", false, true), "answer", array(), "any", false, true), $context["index"], array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array(), "any", false, true), "testResult", array(), "any", false, true), "answer", array(), "any", false, true), $context["index"], array(), "array"), null)) : (null));
                    // line 14
                    echo "\t\t\t    \t<li>
\t\t\t    \t  填空(";
                    // line 15
                    echo twig_escape_filter($this->env, ($context["index"] + 1), "html", null, true);
                    echo ")： 正确答案 <strong class=\"text-success\">";
                    echo twig_escape_filter($this->env, twig_join_filter($context["answer"], " 或 "), "html", null, true);
                    echo "</strong>
\t\t\t    \t  ";
                    // line 16
                    if (((isset($context["userAnswer"]) ? $context["userAnswer"] : null) == "")) {
                        // line 17
                        echo "\t\t\t    \t  。你未回答
\t\t\t    \t  ";
                    } elseif (($this->getAttribute($this->getAttribute($this->getAttribute(                    // line 18
(isset($context["item"]) ? $context["item"] : null), "question", array()), "testResult", array()), "status", array()) == "right")) {
                        // line 19
                        echo "\t\t\t    \t  ，你的答案　<strong class=\"text-success\">";
                        echo twig_escape_filter($this->env, (isset($context["userAnswer"]) ? $context["userAnswer"] : null), "html", null, true);
                        echo "</strong>。 
\t\t\t    \t  ";
                    } elseif (($this->getAttribute($this->getAttribute($this->getAttribute(                    // line 20
(isset($context["item"]) ? $context["item"] : null), "question", array()), "testResult", array()), "status", array()) == "partRight")) {
                        // line 21
                        echo "\t\t\t    \t  ，你的答案　<strong class=\"text-warning\">";
                        echo twig_escape_filter($this->env, (isset($context["userAnswer"]) ? $context["userAnswer"] : null), "html", null, true);
                        echo "</strong>。 
\t\t\t    \t  ";
                    } else {
                        // line 23
                        echo "\t\t\t    \t  ，你的答案　<strong class=\"text-danger\">";
                        echo twig_escape_filter($this->env, (isset($context["userAnswer"]) ? $context["userAnswer"] : null), "html", null, true);
                        echo "</strong>。 
\t\t\t    \t  ";
                    }
                    // line 25
                    echo "\t\t\t    \t</li>
\t\t    \t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['index'], $context['answer'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "\t\t    </ul>

\t\t    ";
                // line 29
                if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array()), "testResult", array()), "status", array()) == "right")) {
                    // line 30
                    echo "\t\t\t    <p class=\"text-success\">回答正确。</p>
\t\t\t  ";
                } elseif (($this->getAttribute($this->getAttribute($this->getAttribute(                // line 31
(isset($context["item"]) ? $context["item"] : null), "question", array()), "testResult", array()), "status", array()) == "partRight")) {
                    // line 32
                    echo "\t\t\t    <p class=\"text-warning\">回答部分正确，本题得分：";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array()), "testResult", array()), "score", array()), "html", null, true);
                    echo "分。</p>
\t\t\t  ";
                } else {
                    // line 34
                    echo "\t\t\t    <p class=\"text-danger\">回答错误。</p>
\t\t\t  ";
                }
                // line 36
                echo "\t\t\t</div>

\t\t\t<div class=\"testpaper-question-actions pull-right\">
\t\t\t\t";
                // line 39
                $this->loadTemplate("TopxiaWebBundle:QuizQuestionTest:flag.html.twig", "TopxiaWebBundle:QuizQuestionTest:do-test-fill.html.twig", 39)->display(array_merge($context, array("flags" => array(0 => "favorite", 1 => "analysis"))));
                // line 40
                echo "\t\t\t</div>

\t\t</div>
\t\t<div class=\"testpaper-question-analysis well\" style=\"display:none;\">";
                // line 43
                echo nl2br($this->env->getExtension('topxia_web_twig')->bbCode2HtmlFilter($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array()), "analysis", array())));
                echo "</div>
\t";
            } else {
                // line 45
                echo "\t  <div class=\"testpaper-question-footer clearfix\">
\t\t  <div class=\"testpaper-question-fill-inputs\">
\t\t\t\t";
                // line 47
                $context["input_index"] = 1;
                // line 48
                echo "\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array()), "answer", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["answer"]) {
                    // line 49
                    echo "\t\t\t\t\t<input class=\"form-control \" type=\"text\" data-type=\"fill\" name=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array()), "id", array()), "html", null, true);
                    echo "\" placeholder=\"填空(";
                    echo twig_escape_filter($this->env, (isset($context["input_index"]) ? $context["input_index"] : null), "html", null, true);
                    echo ")答案，请填在这里\" ";
                    if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array(), "any", false, true), "testResult", array(), "any", false, true), "answer", array(), "any", false, true), ((isset($context["input_index"]) ? $context["input_index"] : null) - 1), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array(), "any", false, true), "testResult", array(), "any", false, true), "answer", array(), "any", false, true), ((isset($context["input_index"]) ? $context["input_index"] : null) - 1), array(), "array"), null)) : (null))) {
                        echo "value=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array()), "testResult", array()), "answer", array()), ((isset($context["input_index"]) ? $context["input_index"] : null) - 1), array(), "array"), "html", null, true);
                        echo "\"";
                    }
                    echo " />
\t\t\t\t\t";
                    // line 50
                    $context["input_index"] = ((isset($context["input_index"]) ? $context["input_index"] : null) + 1);
                    // line 51
                    echo "\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['answer'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 52
                echo "\t\t\t</div>

\t\t\t<div class=\"testpaper-question-actions pull-right\">
\t\t\t\t";
                // line 55
                $this->loadTemplate("TopxiaWebBundle:QuizQuestionTest:flag.html.twig", "TopxiaWebBundle:QuizQuestionTest:do-test-fill.html.twig", 55)->display(array_merge($context, array("flags" => array(0 => "mark", 1 => "favorite"))));
                // line 56
                echo "\t\t\t</div>
\t  </div>

\t  ";
                // line 59
                if (((array_key_exists("questionPreview", $context)) ? (_twig_default_filter((isset($context["questionPreview"]) ? $context["questionPreview"] : null), false)) : (false))) {
                    // line 60
                    echo "\t  <div class=\"testpaper-preview-answer clearfix mtl mbl\">
\t  \t<div class=\"testpaper-question-result\">
\t\t    <ul>
\t\t      ";
                    // line 63
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array()), "answer", array()));
                    foreach ($context['_seq'] as $context["index"] => $context["answer"]) {
                        // line 64
                        echo "\t\t    \t<li>
\t\t    \t  填空(";
                        // line 65
                        echo twig_escape_filter($this->env, ($context["index"] + 1), "html", null, true);
                        echo ")： 正确答案 <strong class=\"text-success\">";
                        echo twig_escape_filter($this->env, twig_join_filter($context["answer"], " 或 "), "html", null, true);
                        echo "</strong>
\t\t    \t</li>
\t\t      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['index'], $context['answer'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 68
                    echo "\t\t    </ul>
\t\t</div>
\t  </div>
\t  <div class=\"testpaper-question-analysis well\">";
                    // line 71
                    echo nl2br($this->env->getExtension('topxia_web_twig')->bbCode2HtmlFilter((($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array(), "any", false, true), "analysis", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array(), "any", false, true), "analysis", array()), "无解析")) : ("无解析"))));
                    echo "</div>
\t  ";
                }
                // line 73
                echo "
\t";
            }
            // line 75
            echo "</div>

";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:QuizQuestionTest:do-test-fill.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 75,  214 => 73,  209 => 71,  204 => 68,  193 => 65,  190 => 64,  186 => 63,  181 => 60,  179 => 59,  174 => 56,  172 => 55,  167 => 52,  161 => 51,  159 => 50,  146 => 49,  141 => 48,  139 => 47,  135 => 45,  130 => 43,  125 => 40,  123 => 39,  118 => 36,  114 => 34,  108 => 32,  106 => 31,  103 => 30,  101 => 29,  97 => 27,  90 => 25,  84 => 23,  78 => 21,  76 => 20,  71 => 19,  69 => 18,  66 => 17,  64 => 16,  58 => 15,  55 => 14,  52 => 13,  48 => 12,  43 => 9,  41 => 8,  37 => 6,  35 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if not role|default(null) == 'teacher' %}*/
/* */
/* <div class="testpaper-question testpaper-question-fill {% if setting('magic.testpaper_watermark') %}testpaper-watermark{% endif %}" data-watermark-url="{{ path('cloud_testpaper_watermark') }}" id="question{{ item.question.id }}">*/
/* 	<div class="testpaper-question-body">*/
/* 	  {% include 'TopxiaWebBundle:QuizQuestionTest:testpaper-question-stem.html.twig' %}*/
/*   </div>*/
/* */
/* 	{% if (paperResult.status|default(null) in ['reviewing', 'finished'] and setting('questions.testpaper_answers_show_mode','submitted') == 'submitted' ) or (setting('questions.testpaper_answers_show_mode','submitted') == 'reviewed'  and paperResult.status|default(null) == 'finished' ) %}*/
/* 		<div class="testpaper-question-footer clearfix">*/
/* 		  <div class="testpaper-question-result">*/
/* 		    <ul>*/
/* 		      {% for index, answer in item.question.answer %}*/
/* 		        {% set userAnswer = item.question.testResult.answer[index]|default(null) %}*/
/* 			    	<li>*/
/* 			    	  填空({{index+1}})： 正确答案 <strong class="text-success">{{ answer|join(' 或 ') }}</strong>*/
/* 			    	  {% if userAnswer == '' %}*/
/* 			    	  。你未回答*/
/* 			    	  {% elseif item.question.testResult.status == "right" %}*/
/* 			    	  ，你的答案　<strong class="text-success">{{ userAnswer }}</strong>。 */
/* 			    	  {% elseif item.question.testResult.status == "partRight" %}*/
/* 			    	  ，你的答案　<strong class="text-warning">{{ userAnswer }}</strong>。 */
/* 			    	  {% else %}*/
/* 			    	  ，你的答案　<strong class="text-danger">{{ userAnswer }}</strong>。 */
/* 			    	  {% endif %}*/
/* 			    	</li>*/
/* 		    	{% endfor %}*/
/* 		    </ul>*/
/* */
/* 		    {% if item.question.testResult.status == "right" %}*/
/* 			    <p class="text-success">回答正确。</p>*/
/* 			  {% elseif item.question.testResult.status == "partRight" %}*/
/* 			    <p class="text-warning">回答部分正确，本题得分：{{ item.question.testResult.score }}分。</p>*/
/* 			  {% else %}*/
/* 			    <p class="text-danger">回答错误。</p>*/
/* 			  {% endif %}*/
/* 			</div>*/
/* */
/* 			<div class="testpaper-question-actions pull-right">*/
/* 				{% include 'TopxiaWebBundle:QuizQuestionTest:flag.html.twig' with { flags:['favorite', 'analysis'] } %}*/
/* 			</div>*/
/* */
/* 		</div>*/
/* 		<div class="testpaper-question-analysis well" style="display:none;">{{ item.question.analysis|bbCode2Html|raw|nl2br }}</div>*/
/* 	{% else %}*/
/* 	  <div class="testpaper-question-footer clearfix">*/
/* 		  <div class="testpaper-question-fill-inputs">*/
/* 				{% set input_index = 1 %}*/
/* 				{% for answer in item.question.answer %}*/
/* 					<input class="form-control " type="text" data-type="fill" name="{{ item.question.id }}" placeholder="填空({{ input_index }})答案，请填在这里" {% if item.question.testResult.answer[input_index - 1]|default(null) %}value="{{ item.question.testResult.answer[input_index - 1] }}"{% endif %} />*/
/* 					{% set input_index = input_index + 1 %}*/
/* 				{% endfor %}*/
/* 			</div>*/
/* */
/* 			<div class="testpaper-question-actions pull-right">*/
/* 				{% include 'TopxiaWebBundle:QuizQuestionTest:flag.html.twig' with { flags:['mark', 'favorite'] } %}*/
/* 			</div>*/
/* 	  </div>*/
/* */
/* 	  {% if questionPreview|default(false) %}*/
/* 	  <div class="testpaper-preview-answer clearfix mtl mbl">*/
/* 	  	<div class="testpaper-question-result">*/
/* 		    <ul>*/
/* 		      {% for index, answer in item.question.answer %}*/
/* 		    	<li>*/
/* 		    	  填空({{index+1}})： 正确答案 <strong class="text-success">{{ answer|join(' 或 ') }}</strong>*/
/* 		    	</li>*/
/* 		      {% endfor %}*/
/* 		    </ul>*/
/* 		</div>*/
/* 	  </div>*/
/* 	  <div class="testpaper-question-analysis well">{{ item.question.analysis|default('无解析')|bbCode2Html|raw|nl2br }}</div>*/
/* 	  {% endif %}*/
/* */
/* 	{% endif %}*/
/* </div>*/
/* */
/* {% endif %}*/
