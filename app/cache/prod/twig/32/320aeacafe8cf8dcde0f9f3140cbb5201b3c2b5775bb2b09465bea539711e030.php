<?php

/* TopxiaWebBundle:Question:question-fill-reviewing.html.twig */
class __TwigTemplate_e0661ab1efc2ddfae367c54c0f58f3081e03c6a67a03efa2c01e614453c544d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Question:question-base-layout.html.twig", "TopxiaWebBundle:Question:question-fill-reviewing.html.twig", 1);
        $this->blocks = array(
            'heading' => array($this, 'block_heading'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Question:question-base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_heading($context, array $blocks = array())
    {
        // line 4
        echo "  ";
        echo $this->env->getExtension('topxia_web_twig')->bbCode2HtmlFilter($this->env->getExtension('topxia_web_twig')->fillQuestionStemHtmlFilter($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "stem", array())));
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "
";
        // line 9
        if (($this->getAttribute((isset($context["itemResult"]) ? $context["itemResult"] : null), "status", array()) == "right")) {
            // line 10
            echo "
  ";
            // line 11
            $context["itemResultStatus"] = "你答对了";
            // line 12
            echo "
";
        } elseif (($this->getAttribute(        // line 13
(isset($context["itemResult"]) ? $context["itemResult"] : null), "status", array()) == "wrong")) {
            // line 14
            echo "
  ";
            // line 15
            $context["itemResultStatus"] = "回答错误";
            // line 16
            echo "
";
        } elseif (($this->getAttribute(        // line 17
(isset($context["itemResult"]) ? $context["itemResult"] : null), "status", array()) == "partRight")) {
            // line 18
            echo "
  ";
            // line 19
            $context["itemResultStatus"] = "部分回答正确";
            // line 20
            echo "
";
        } elseif (($this->getAttribute(        // line 21
(isset($context["itemResult"]) ? $context["itemResult"] : null), "status", array()) == "noAnswer")) {
            // line 22
            echo "
  ";
            // line 23
            $context["itemResultStatus"] = "你未回答";
            // line 24
            echo "
";
        }
        // line 26
        echo "
  <div class=\"question-fill-inputs \">
    <div class=\"\">
      <div class=\"homework-question-fill\">
         <ul>
          ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "answer", array()));
        foreach ($context['_seq'] as $context["index"] => $context["rightAnswer"]) {
            // line 32
            echo "
            <li>
              填空(";
            // line 34
            echo twig_escape_filter($this->env, ($context["index"] + 1), "html", null, true);
            echo ")： 正确答案 
              <strong class=\"question-text-success\">";
            // line 35
            echo twig_escape_filter($this->env, twig_join_filter($context["rightAnswer"], " 或 "), "html", null, true);
            echo "</strong>
              ";
            // line 36
            if ((($this->getAttribute($this->getAttribute((isset($context["itemResult"]) ? $context["itemResult"] : null), "answer", array()), $context["index"], array(), "array") || ($this->getAttribute($this->getAttribute((isset($context["itemResult"]) ? $context["itemResult"] : null), "answer", array()), $context["index"], array(), "array") === 0)) || ($this->getAttribute($this->getAttribute((isset($context["itemResult"]) ? $context["itemResult"] : null), "answer", array()), $context["index"], array(), "array") === "0"))) {
                // line 37
                echo "             回答是

              <strong class=\"question-text-danger\">";
                // line 39
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["itemResult"]) ? $context["itemResult"] : null), "answer", array(), "any", false, true), $context["index"], array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["itemResult"]) ? $context["itemResult"] : null), "answer", array(), "any", false, true), $context["index"], array(), "array"), "")) : ("")), "html", null, true);
                echo "</strong>。
              ";
            } else {
                // line 41
                echo "              未回答
              ";
            }
            // line 43
            echo "
              ";
            // line 44
            if (twig_in_filter((($this->getAttribute($this->getAttribute((isset($context["itemResult"]) ? $context["itemResult"] : null), "answer", array(), "any", false, true), $context["index"], array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["itemResult"]) ? $context["itemResult"] : null), "answer", array(), "any", false, true), $context["index"], array(), "array"), null)) : (null)), $context["rightAnswer"])) {
                // line 45
                echo "                  <span class=\"glyphicon glyphicon-ok question-text-success\">

              ";
            } else {
                // line 48
                echo "                  <span class=\"glyphicon glyphicon-remove question-text-danger\">
              ";
            }
            // line 50
            echo "            </li>

          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['index'], $context['rightAnswer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "
         </ul>
      </div>
    </div>
  </div>
";
    }

    // line 60
    public function block_footer($context, array $blocks = array())
    {
        // line 61
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Question:question-fill-reviewing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 61,  156 => 60,  147 => 53,  139 => 50,  135 => 48,  130 => 45,  128 => 44,  125 => 43,  121 => 41,  116 => 39,  112 => 37,  110 => 36,  106 => 35,  102 => 34,  98 => 32,  94 => 31,  87 => 26,  83 => 24,  81 => 23,  78 => 22,  76 => 21,  73 => 20,  71 => 19,  68 => 18,  66 => 17,  63 => 16,  61 => 15,  58 => 14,  56 => 13,  53 => 12,  51 => 11,  48 => 10,  46 => 9,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:Question:question-base-layout.html.twig' %}*/
/* */
/* {% block heading %}*/
/*   {{ question.stem|fill_question_stem_html|bbCode2Html|raw }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* {% if itemResult.status == 'right' %}*/
/* */
/*   {% set itemResultStatus = '你答对了' %}*/
/* */
/* {% elseif itemResult.status == 'wrong' %}*/
/* */
/*   {% set itemResultStatus = '回答错误' %}*/
/* */
/* {% elseif itemResult.status == 'partRight' %}*/
/* */
/*   {% set itemResultStatus = '部分回答正确' %}*/
/* */
/* {% elseif itemResult.status == 'noAnswer' %}*/
/* */
/*   {% set itemResultStatus = '你未回答' %}*/
/* */
/* {% endif %}*/
/* */
/*   <div class="question-fill-inputs ">*/
/*     <div class="">*/
/*       <div class="homework-question-fill">*/
/*          <ul>*/
/*           {% for index,rightAnswer in question.answer %}*/
/* */
/*             <li>*/
/*               填空({{index+1}})： 正确答案 */
/*               <strong class="question-text-success">{{ rightAnswer|join(' 或 ') }}</strong>*/
/*               {% if itemResult.answer[index] or itemResult.answer[index] is same as(0) or itemResult.answer[index] is same as('0') %}*/
/*              回答是*/
/* */
/*               <strong class="question-text-danger">{{ itemResult.answer[index]|default('') }}</strong>。*/
/*               {% else %}*/
/*               未回答*/
/*               {% endif %}*/
/* */
/*               {% if itemResult.answer[index]|default(null) in rightAnswer %}*/
/*                   <span class="glyphicon glyphicon-ok question-text-success">*/
/* */
/*               {% else %}*/
/*                   <span class="glyphicon glyphicon-remove question-text-danger">*/
/*               {% endif %}*/
/*             </li>*/
/* */
/*           {% endfor %}*/
/* */
/*          </ul>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/* */
/* {% endblock %}*/
