<?php

/* TopxiaWebBundle:QuizQuestionTest:testpaper-result.html.twig */
class __TwigTemplate_c58fec0371033715cc5a57cbccda8cd3e6906c79f02204c6a658708e55345d30 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:QuizQuestionTest:testpaper-layout.html.twig", "TopxiaWebBundle:QuizQuestionTest:testpaper-result.html.twig", 1);
        $this->blocks = array(
            'testpaper_heading_status' => array($this, 'block_testpaper_heading_status'),
            'testpaper_heading_content' => array($this, 'block_testpaper_heading_content'),
            'testpaper_body_sidebar' => array($this, 'block_testpaper_body_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:QuizQuestionTest:testpaper-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->env->getExtension('topxia_web_twig')->loadScript("quiz-question/testpaper-result");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_testpaper_heading_status($context, array $blocks = array())
    {
        // line 4
        echo "  ";
        if (($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()) == "finished")) {
            // line 5
            echo "    <div class=\"label label-success\">批阅完成</div>
  ";
        } elseif (($this->getAttribute(        // line 6
(isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()) == "reviewing")) {
            // line 7
            echo "    <div class=\"label label-info\">批阅中</div>
  ";
        }
    }

    // line 11
    public function block_testpaper_heading_content($context, array $blocks = array())
    {
        // line 12
        echo "
  ";
        // line 13
        $this->loadTemplate("TopxiaWebBundle:QuizQuestionTest:testpaper-result-objective.html.twig", "TopxiaWebBundle:QuizQuestionTest:testpaper-result.html.twig", 13)->display($context);
        // line 14
        echo "
  ";
        // line 15
        if (($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()) == "reviewing")) {
            // line 16
            echo "    <div class=\"alert alert-warning\">老师正在批阅试卷，批阅完成后会以站内私信通知您批阅结果，请稍等。</div>
  ";
        } elseif (($this->getAttribute(        // line 17
(isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()) == "finished")) {
            // line 18
            echo "    ";
            if ($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "teacherSay", array())) {
                // line 19
                echo "      <div class=\"alert alert-success\">
        <div class=\"\"><strong>评语：</strong></div>
        <div class=\"mtm\">";
                // line 21
                echo $this->env->getExtension('topxia_web_twig')->bbCode2HtmlFilter($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "teacherSay", array()));
                echo "</div>
      </div>
    ";
            }
            // line 24
            echo "    ";
            if ((($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "passedStatus", array()) == "unpassed") && ((array_key_exists("target", $context)) ? (_twig_default_filter((isset($context["target"]) ? $context["target"] : null), null)) : (null)))) {
                // line 25
                echo "      <div class=\"alert alert-danger\">
        您未通过考试，请<a href=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_lesson_redo_test", array("lessonId" => $this->getAttribute((isset($context["target"]) ? $context["target"] : null), "id", array()), "testId" => $this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "testId", array()))), "html", null, true);
                echo "\">重新参加考试</a>，或者重新学习课程。
      </div>
    ";
            } elseif (($this->getAttribute(            // line 28
(isset($context["paperResult"]) ? $context["paperResult"] : null), "passedStatus", array()) == "passed")) {
                // line 29
                echo "      <div class=\"alert alert-success\">恭喜您已通过本次考试。</div>
    ";
            }
            // line 31
            echo "  ";
        }
        // line 32
        echo "
";
    }

    // line 35
    public function block_testpaper_body_sidebar($context, array $blocks = array())
    {
        // line 36
        echo "
";
        // line 37
        if (((twig_in_filter($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()), array(0 => "finished", 1 => "reviewing")) && ($this->env->getExtension('topxia_web_twig')->getSetting("questions.testpaper_answers_show_mode", "submitted") == "submitted")) || (($this->env->getExtension('topxia_web_twig')->getSetting("questions.testpaper_answers_show_mode", "submitted") == "reviewed") && ((($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()), null)) : (null)) == "finished")))) {
            // line 38
            echo "
  <div class=\"testpaper-card\" data-spy=\"affix\" data-offset-top=\"200\">
    <div class=\"panel panel-default\">
      <div class=\"panel-body\">
        ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["paper"]) ? $context["paper"] : null), "metas", array()), "question_type_seq", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 43
                echo "
          ";
                // line 44
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["items"]) ? $context["items"] : null), $context["type"], array(), "array"));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 45
                    echo "            ";
                    if (($this->getAttribute($context["item"], "questionType", array()) != "material")) {
                        // line 46
                        echo "              <a href=\"javascript:;\" data-anchor=\"#question";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "questionId", array()), "html", null, true);
                        echo "\" class=\"btn btn-default btn-index pull-left ";
                        if ((($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()) == "reviewing") && ($this->getAttribute($context["item"], "questionType", array()) == "essay"))) {
                            echo "checking";
                        } elseif (((($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "question", array(), "any", false, true), "testResult", array(), "any", false, true), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "question", array(), "any", false, true), "testResult", array(), "any", false, true), "status", array()), null)) : (null)) == "partRight")) {
                            echo "wrong";
                        } else {
                            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "question", array(), "any", false, true), "testResult", array(), "any", false, true), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "question", array(), "any", false, true), "testResult", array(), "any", false, true), "status", array()), null)) : (null)), "html", null, true);
                        }
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "seq", array()), "html", null, true);
                        echo "</a>
            ";
                    } else {
                        // line 48
                        echo "              ";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((($this->getAttribute($context["item"], "items", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "items", array()), array())) : (array())));
                        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                            // line 49
                            echo "                <a href=\"javascript:;\" data-anchor=\"#question";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "questionId", array()), "html", null, true);
                            echo "\" class=\"btn btn-default btn-index pull-left ";
                            if ((($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()) == "reviewing") && ($this->getAttribute($context["item"], "questionType", array()) == "essay"))) {
                                echo "checking";
                            } elseif (((($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "question", array(), "any", false, true), "testResult", array(), "any", false, true), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "question", array(), "any", false, true), "testResult", array(), "any", false, true), "status", array()), null)) : (null)) == "partRight")) {
                                echo "wrong";
                            } else {
                                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "question", array(), "any", false, true), "testResult", array(), "any", false, true), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "question", array(), "any", false, true), "testResult", array(), "any", false, true), "status", array()), null)) : (null)), "html", null, true);
                            }
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "seq", array()), "html", null, true);
                            echo "</a>
              ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 51
                        echo "            ";
                    }
                    // line 52
                    echo "          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 53
                echo "
          <div class=\"clearfix mtm mbm\"></div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "
        <div class=\"testpaper-card-explain clearfix\">
            <a href=\"javascript:;\" class=\"btn btn-success btn-index\"></a><small class=\"text-muted\">正确</small>
            <a href=\"javascript:;\" class=\"btn btn-danger btn-index\"></a><small class=\"text-muted\">错误</small>
            <a href=\"javascript:;\" class=\"btn btn-warning btn-index\"></a><small class=\"text-muted\">待批阅</small>
            <a href=\"javascript:;\" class=\"btn btn-default btn-index\"></a><small class=\"text-muted\">未做</small>
        </div>
      </div>
      <div class=\"panel-footer\">
        <div class=\"checkbox\">
          <label>
            <input type=\"checkbox\" id=\"showWrong\" />
            <span class=\"text-info\">只看错题</span>
          </label>
        </div>
      </div>
    </div>
  </div>
";
        }
        // line 75
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:QuizQuestionTest:testpaper-result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 75,  191 => 56,  183 => 53,  177 => 52,  174 => 51,  155 => 49,  150 => 48,  134 => 46,  131 => 45,  127 => 44,  124 => 43,  120 => 42,  114 => 38,  112 => 37,  109 => 36,  106 => 35,  101 => 32,  98 => 31,  94 => 29,  92 => 28,  87 => 26,  84 => 25,  81 => 24,  75 => 21,  71 => 19,  68 => 18,  66 => 17,  63 => 16,  61 => 15,  58 => 14,  56 => 13,  53 => 12,  50 => 11,  44 => 7,  42 => 6,  39 => 5,  36 => 4,  33 => 3,  29 => 1,  27 => 2,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:QuizQuestionTest:testpaper-layout.html.twig' %}*/
/* {% do load_script('quiz-question/testpaper-result') %}*/
/* {% block testpaper_heading_status %}*/
/*   {% if paperResult.status == 'finished' %}*/
/*     <div class="label label-success">批阅完成</div>*/
/*   {% elseif paperResult.status == 'reviewing' %}*/
/*     <div class="label label-info">批阅中</div>*/
/*   {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block testpaper_heading_content %}*/
/* */
/*   {% include 'TopxiaWebBundle:QuizQuestionTest:testpaper-result-objective.html.twig' %}*/
/* */
/*   {% if paperResult.status == 'reviewing' %}*/
/*     <div class="alert alert-warning">老师正在批阅试卷，批阅完成后会以站内私信通知您批阅结果，请稍等。</div>*/
/*   {% elseif paperResult.status == 'finished' %}*/
/*     {% if paperResult.teacherSay %}*/
/*       <div class="alert alert-success">*/
/*         <div class=""><strong>评语：</strong></div>*/
/*         <div class="mtm">{{ paperResult.teacherSay|bbCode2Html|raw }}</div>*/
/*       </div>*/
/*     {% endif %}*/
/*     {% if paperResult.passedStatus == 'unpassed' and target|default(null) %}*/
/*       <div class="alert alert-danger">*/
/*         您未通过考试，请<a href="{{ path('course_lesson_redo_test', {lessonId:target.id,testId:paperResult.testId}) }}">重新参加考试</a>，或者重新学习课程。*/
/*       </div>*/
/*     {% elseif paperResult.passedStatus == 'passed' %}*/
/*       <div class="alert alert-success">恭喜您已通过本次考试。</div>*/
/*     {% endif %}*/
/*   {% endif %}*/
/* */
/* {% endblock %}*/
/* */
/* {% block testpaper_body_sidebar %}*/
/* */
/* {% if ( paperResult.status in ['finished','reviewing'] and setting('questions.testpaper_answers_show_mode','submitted') == 'submitted' ) or ( setting('questions.testpaper_answers_show_mode','submitted') == 'reviewed' ) and paperResult.status|default(null) == 'finished' %}*/
/* */
/*   <div class="testpaper-card" data-spy="affix" data-offset-top="200">*/
/*     <div class="panel panel-default">*/
/*       <div class="panel-body">*/
/*         {% for type in paper.metas.question_type_seq %}*/
/* */
/*           {% for item in items[type] %}*/
/*             {% if item.questionType != 'material' %}*/
/*               <a href="javascript:;" data-anchor="#question{{ item.questionId }}" class="btn btn-default btn-index pull-left {% if paperResult.status == 'reviewing' and item.questionType == 'essay' %}checking{% elseif item.question.testResult.status|default(null) == 'partRight' %}wrong{% else %}{{ item.question.testResult.status|default(null) }}{% endif %}">{{ item.seq }}</a>*/
/*             {% else %}*/
/*               {% for item in item.items|default([]) %}*/
/*                 <a href="javascript:;" data-anchor="#question{{ item.questionId }}" class="btn btn-default btn-index pull-left {% if paperResult.status == 'reviewing' and item.questionType == 'essay' %}checking{% elseif item.question.testResult.status|default(null) == 'partRight' %}wrong{% else %}{{ item.question.testResult.status|default(null) }}{% endif %}">{{ item.seq }}</a>*/
/*               {% endfor %}*/
/*             {% endif %}*/
/*           {% endfor %}*/
/* */
/*           <div class="clearfix mtm mbm"></div>*/
/*         {% endfor %}*/
/* */
/*         <div class="testpaper-card-explain clearfix">*/
/*             <a href="javascript:;" class="btn btn-success btn-index"></a><small class="text-muted">正确</small>*/
/*             <a href="javascript:;" class="btn btn-danger btn-index"></a><small class="text-muted">错误</small>*/
/*             <a href="javascript:;" class="btn btn-warning btn-index"></a><small class="text-muted">待批阅</small>*/
/*             <a href="javascript:;" class="btn btn-default btn-index"></a><small class="text-muted">未做</small>*/
/*         </div>*/
/*       </div>*/
/*       <div class="panel-footer">*/
/*         <div class="checkbox">*/
/*           <label>*/
/*             <input type="checkbox" id="showWrong" />*/
/*             <span class="text-info">只看错题</span>*/
/*           </label>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* {% endif %}*/
/* */
/* {% endblock %}*/
