<?php

/* TopxiaWebBundle:QuizQuestionTest:testpaper-question-stem.html.twig */
class __TwigTemplate_50a7ee96b7ec70ea6270667f6651f2ca0daf295a223d8b463525a2d92e24ec9b extends Twig_Template
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
        echo "<div class=\"testpaper-question-stem-wrap clearfix\">
  <div class=\"testpaper-question-seq-wrap\">
    <div class=\"testpaper-question-seq\">";
        // line 3
        if ((($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "seq", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "seq", array()), null)) : (null))) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "seq", array()), "html", null, true);
        }
        echo "</div>
    <div class=\"testpaper-question-score\">";
        // line 4
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "score", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "score", array()), $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array()), "score", array()))) : ($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array()), "score", array()))), "html", null, true);
        echo "分</div>
  </div>
  ";
        // line 6
        if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "questionType", array()) == "fill")) {
            // line 7
            echo "    <div class=\"testpaper-question-stem\">";
            echo nl2br($this->env->getExtension('topxia_web_twig')->bbCode2HtmlFilter($this->env->getExtension('topxia_web_twig')->fillQuestionStemHtmlFilter($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array()), "stem", array()))));
            echo "</div>
  ";
        } else {
            // line 9
            echo "    <div class=\"testpaper-question-stem\">";
            echo nl2br($this->env->getExtension('topxia_web_twig')->bbCode2HtmlFilter($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array()), "stem", array())));
            echo "</div>
    ";
        }
        // line 11
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:QuizQuestionTest:testpaper-question-stem.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 11,  42 => 9,  36 => 7,  34 => 6,  29 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div class="testpaper-question-stem-wrap clearfix">*/
/*   <div class="testpaper-question-seq-wrap">*/
/*     <div class="testpaper-question-seq">{% if item.seq|default(null) %}{{ item.seq }}{% endif %}</div>*/
/*     <div class="testpaper-question-score">{{ item.score|default(item.question.score) }}分</div>*/
/*   </div>*/
/*   {% if item.questionType == 'fill' %}*/
/*     <div class="testpaper-question-stem">{{ item.question.stem|fill_question_stem_html|bbCode2Html|raw|nl2br }}</div>*/
/*   {% else %}*/
/*     <div class="testpaper-question-stem">{{ item.question.stem|bbCode2Html|raw|nl2br }}</div>*/
/*     {% endif %}*/
/* </div>*/
