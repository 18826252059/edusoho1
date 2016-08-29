<?php

/* TopxiaWebBundle:Question:question-set-item.html.twig */
class __TwigTemplate_7261401ca8332084f15a5164bc66bc3c6eb5c4972e5f3c6620d5ccc7fd43e531 extends Twig_Template
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
        echo "  <div class=\"question-set-item\">

    <div class=\"question-set-item-side\">
      <span class=\"question-set-item-seq\">
      ";
        // line 5
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "parentId", array())) {
            // line 6
            echo "        ";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["itemSet"]) ? $context["itemSet"] : null), "items", array()), $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "parentId", array()), array(), "array"), "seq", array()) . ".") . $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "seq", array())), "html", null, true);
            echo "  
      ";
        } else {
            // line 8
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "seq", array()), "html", null, true);
            echo "
      ";
        }
        // line 10
        echo "      </span>
      ";
        // line 11
        if (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "score", array()) > 0)) {
            // line 12
            echo "        <span class=\"question-set-item-score\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "score", array()), "html", null, true);
            echo "</span>
      ";
        }
        // line 14
        echo "    </div>

    <div class=\"question-set-item-main\">
      ";
        // line 17
        $context["question"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array());
        // line 18
        echo "      ";
        $context["itemResult"] = (($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "itemResult", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "itemResult", array()), null)) : (null));
        // line 19
        echo "      ";
        if (((isset($context["questionStatus"]) ? $context["questionStatus"] : null) == "previewing")) {
            $context["questionStatus"] = "doing";
        }
        // line 20
        echo "      ";
        if ((isset($context["question"]) ? $context["question"] : null)) {
            // line 21
            echo "      ";
            $this->loadTemplate((((("TopxiaWebBundle:Question:question-" . $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "type", array())) . "-") . (isset($context["questionStatus"]) ? $context["questionStatus"] : null)) . ".html.twig"), "TopxiaWebBundle:Question:question-set-item.html.twig", 21)->display($context);
            // line 22
            echo "

        ";
            // line 24
            if (((isset($context["questionStatus"]) ? $context["questionStatus"] : null) == "finished")) {
                // line 25
                echo "          <div class=\"homework-question-actions text-right\">
            ";
                // line 26
                $this->loadTemplate("TopxiaWebBundle:Question:question-actions.html.twig", "TopxiaWebBundle:Question:question-set-item.html.twig", 26)->display(array_merge($context, array("flags" => array(0 => "favorite", 1 => "analysis"))));
                // line 27
                echo "          </div>
          <div class=\"homework-question-analysis well editor-text\" style=\"display:none;\">";
                // line 28
                echo $this->env->getExtension('topxia_web_twig')->bbCode2HtmlFilter((($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array(), "any", false, true), "analysis", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array(), "any", false, true), "analysis", array()), "无解析")) : ("无解析")));
                echo "
          </div>
        ";
            }
            // line 31
            echo "
      ";
        } else {
            // line 33
            echo "      此题已删除。
      ";
        }
        // line 35
        echo "    </div>

  </div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Question:question-set-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 35,  95 => 33,  91 => 31,  85 => 28,  82 => 27,  80 => 26,  77 => 25,  75 => 24,  71 => 22,  68 => 21,  65 => 20,  60 => 19,  57 => 18,  55 => 17,  50 => 14,  44 => 12,  42 => 11,  39 => 10,  33 => 8,  27 => 6,  25 => 5,  19 => 1,);
    }
}
/*   <div class="question-set-item">*/
/* */
/*     <div class="question-set-item-side">*/
/*       <span class="question-set-item-seq">*/
/*       {% if item.parentId %}*/
/*         {{ itemSet.items[item.parentId].seq ~ '.' ~ item.seq }}  */
/*       {% else %}*/
/*         {{ item.seq }}*/
/*       {% endif %}*/
/*       </span>*/
/*       {% if item.score > 0 %}*/
/*         <span class="question-set-item-score">{{ item.score }}</span>*/
/*       {% endif %}*/
/*     </div>*/
/* */
/*     <div class="question-set-item-main">*/
/*       {% set question = item.question %}*/
/*       {% set itemResult = item.itemResult|default(null) %}*/
/*       {% if questionStatus == 'previewing' %}{% set questionStatus = 'doing' %}{% endif %}*/
/*       {% if question %}*/
/*       {% include 'TopxiaWebBundle:Question:question-' ~ question.type ~ '-' ~ questionStatus ~ '.html.twig' %}*/
/* */
/* */
/*         {% if questionStatus == 'finished' %}*/
/*           <div class="homework-question-actions text-right">*/
/*             {% include 'TopxiaWebBundle:Question:question-actions.html.twig' with { flags:['favorite', 'analysis'] } %}*/
/*           </div>*/
/*           <div class="homework-question-analysis well editor-text" style="display:none;">{{ item.question.analysis|default('无解析')|bbCode2Html|raw }}*/
/*           </div>*/
/*         {% endif %}*/
/* */
/*       {% else %}*/
/*       此题已删除。*/
/*       {% endif %}*/
/*     </div>*/
/* */
/*   </div>*/
