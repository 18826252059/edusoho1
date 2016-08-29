<?php

/* TopxiaWebBundle:QuizQuestionTest:do-test.html.twig */
class __TwigTemplate_a824d084cacf23310197399e70ee1f93ed8821b517921221b719614d621dc99d extends Twig_Template
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
        if ((((array_key_exists("source", $context)) ? (_twig_default_filter((isset($context["source"]) ? $context["source"] : null), null)) : (null)) == "classroom")) {
            // line 2
            echo "  ";
            $context["canHandle"] = $this->env->getExtension('topxia_web_twig')->isPermitRole((isset($context["targetId"]) ? $context["targetId"] : null), "Handle");
        } else {
            // line 4
            echo "  ";
            $context["canHandle"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "isTeacher", array(), "method");
        }
        // line 6
        echo "
";
        // line 7
        if (((((((array_key_exists("paperResult", $context)) ? (_twig_default_filter((isset($context["paperResult"]) ? $context["paperResult"] : null), null)) : (null)) && twig_in_filter((($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()), null)) : (null)), array(0 => "finished", 1 => "reviewing"))) && ($this->env->getExtension('topxia_web_twig')->getSetting("questions.testpaper_answers_show_mode", "submitted") == "hide")) || (($this->env->getExtension('topxia_web_twig')->getSetting("questions.testpaper_answers_show_mode", "submitted") == "reviewed") && ((($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()), null)) : (null)) == "reviewing"))) &&  !(isset($context["canHandle"]) ? $context["canHandle"] : null))) {
        } else {
            // line 9
            echo "
  ";
            // line 11
            echo "    <form id='teacherCheckForm' autocomplete=\"off\">
    ";
            // line 13
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(((array_key_exists("types", $context)) ? (_twig_default_filter((isset($context["types"]) ? $context["types"] : null), $this->getAttribute($this->getAttribute((isset($context["paper"]) ? $context["paper"] : null), "metas", array()), "question_type_seq", array()))) : ($this->getAttribute($this->getAttribute((isset($context["paper"]) ? $context["paper"] : null), "metas", array()), "question_type_seq", array()))));
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
            foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
                // line 14
                echo "      ";
                if (($this->getAttribute((isset($context["items"]) ? $context["items"] : null), $context["type"], array(), "array") != array())) {
                    // line 15
                    echo "        <div class=\"panel panel-default testpaper-question-block\" id=\"testpaper-questions-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
          <div class=\"panel-heading\"><strong class=\"\">";
                    // line 16
                    echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('topxia_web_twig')->getDict("questionType"), $context["type"], array(), "array"), "html", null, true);
                    echo "</strong>
            <small class=\"text-muted\">共";
                    // line 17
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["total"]) ? $context["total"] : null), $context["type"], array(), "array"), "number", array()), "html", null, true);
                    echo "题，共";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["total"]) ? $context["total"] : null), $context["type"], array(), "array"), "score", array()), "html", null, true);
                    echo "分";
                    if (($this->getAttribute($this->getAttribute((isset($context["total"]) ? $context["total"] : null), $context["type"], array(), "array"), "missScore", array()) > 0)) {
                        echo "，漏选得";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["total"]) ? $context["total"] : null), $context["type"], array(), "array"), "missScore", array()), "html", null, true);
                        echo "分";
                    }
                    echo "</small>
          </div>
          <div class=\"panel-body\">
            ";
                    // line 20
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["items"]) ? $context["items"] : null), $context["type"], array(), "array"));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 21
                        echo "              ";
                        if ((($this->getAttribute($this->getAttribute($context["item"], "question", array(), "any", false, true), "isDeleted", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["item"], "question", array(), "any", false, true), "isDeleted", array()), null)) : (null))) {
                            // line 22
                            echo "                <div class=\"testpaper-question testpaper-question-choice\" id=\"question";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "questionId", array()), "html", null, true);
                            echo "\">
                  <div class=\"testpaper-question-body\">
                    ";
                            // line 24
                            $this->loadTemplate("TopxiaWebBundle:QuizQuestionTest:testpaper-question-stem.html.twig", "TopxiaWebBundle:QuizQuestionTest:do-test.html.twig", 24)->display($context);
                            // line 25
                            echo "                  </div>
                </div>
              ";
                        } else {
                            // line 28
                            echo "                ";
                            if (twig_in_filter($context["type"], array(0 => "single_choice", 1 => "choice", 2 => "uncertain_choice"))) {
                                // line 29
                                echo "                  ";
                                $this->loadTemplate("TopxiaWebBundle:QuizQuestionTest:do-test-choice.html.twig", "TopxiaWebBundle:QuizQuestionTest:do-test.html.twig", 29)->display($context);
                                // line 30
                                echo "                ";
                            } else {
                                // line 31
                                echo "                  ";
                                $this->loadTemplate((("TopxiaWebBundle:QuizQuestionTest:do-test-" . $context["type"]) . ".html.twig"), "TopxiaWebBundle:QuizQuestionTest:do-test.html.twig", 31)->display($context);
                                // line 32
                                echo "                ";
                            }
                            // line 33
                            echo "              ";
                        }
                        // line 34
                        echo "            ";
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 35
                    echo "          </div>
        </div>
      ";
                }
                // line 38
                echo "    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "    ";
            if ((((array_key_exists("showTestpaperNavbar", $context)) ? (_twig_default_filter((isset($context["showTestpaperNavbar"]) ? $context["showTestpaperNavbar"] : null), "on")) : ("on")) == "off")) {
                // line 40
                echo "      <textarea name=\"teacherSay\" id=\"teacherSay\" style=\"display:none\"></textarea>
      <input type=\"hidden\" id=\"passedStatus\" name=\"passedStatus\" value=\"\" /> 
    ";
            }
            // line 43
            echo "  </form>

";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:QuizQuestionTest:do-test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 43,  172 => 40,  169 => 39,  155 => 38,  150 => 35,  136 => 34,  133 => 33,  130 => 32,  127 => 31,  124 => 30,  121 => 29,  118 => 28,  113 => 25,  111 => 24,  105 => 22,  102 => 21,  85 => 20,  71 => 17,  67 => 16,  62 => 15,  59 => 14,  41 => 13,  38 => 11,  35 => 9,  32 => 7,  29 => 6,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if (source|default(null) == 'classroom') %}*/
/*   {% set canHandle = classroom_permit(targetId, 'Handle') %}*/
/* {% else %}*/
/*   {% set canHandle = app.user.isTeacher() %}*/
/* {% endif %}*/
/* */
/* {% if  ((paperResult|default(null) and paperResult.status|default(null) in ['finished','reviewing'] and setting('questions.testpaper_answers_show_mode','submitted') == 'hide') or (setting('questions.testpaper_answers_show_mode','submitted') == 'reviewed' and paperResult.status|default(null) == 'reviewing' )) and not canHandle %}*/
/* {% else %}*/
/* */
/*   {# {% if showTestpaperNavbar|default('on') == 'off' %} #}*/
/*     <form id='teacherCheckForm' autocomplete="off">*/
/*     {# {% endif %} #}*/
/*     {% for type in types|default(paper.metas.question_type_seq) %}*/
/*       {% if items[type] != [] %}*/
/*         <div class="panel panel-default testpaper-question-block" id="testpaper-questions-{{ type }}">*/
/*           <div class="panel-heading"><strong class="">{{dict('questionType')[type]}}</strong>*/
/*             <small class="text-muted">共{{ total[type].number }}题，共{{ total[type].score }}分{% if total[type].missScore > 0 %}，漏选得{{ total[type].missScore }}分{% endif %}</small>*/
/*           </div>*/
/*           <div class="panel-body">*/
/*             {% for item in items[type] %}*/
/*               {% if item.question.isDeleted|default(null) %}*/
/*                 <div class="testpaper-question testpaper-question-choice" id="question{{ item.questionId }}">*/
/*                   <div class="testpaper-question-body">*/
/*                     {% include 'TopxiaWebBundle:QuizQuestionTest:testpaper-question-stem.html.twig' %}*/
/*                   </div>*/
/*                 </div>*/
/*               {% else %}*/
/*                 {% if type in ['single_choice', 'choice', 'uncertain_choice'] %}*/
/*                   {% include 'TopxiaWebBundle:QuizQuestionTest:do-test-choice.html.twig' %}*/
/*                 {% else %}*/
/*                   {% include 'TopxiaWebBundle:QuizQuestionTest:do-test-' ~ type ~ '.html.twig' %}*/
/*                 {% endif %}*/
/*               {% endif %}*/
/*             {% endfor %}*/
/*           </div>*/
/*         </div>*/
/*       {% endif %}*/
/*     {% endfor %}*/
/*     {% if showTestpaperNavbar|default('on') == 'off' %}*/
/*       <textarea name="teacherSay" id="teacherSay" style="display:none"></textarea>*/
/*       <input type="hidden" id="passedStatus" name="passedStatus" value="" /> */
/*     {% endif %}*/
/*   </form>*/
/* */
/* {% endif %}*/
/* */
