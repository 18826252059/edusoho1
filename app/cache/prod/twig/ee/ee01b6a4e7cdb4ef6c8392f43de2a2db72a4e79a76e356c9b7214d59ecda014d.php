<?php

/* TopxiaWebBundle:Question:question-single_choice-reviewing.html.twig */
class __TwigTemplate_5db943894886eef6adfc7b71962a7e8a15814d9b98d94db456f40d24b626c27d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Question:question-choice-finished.html.twig", "TopxiaWebBundle:Question:question-single_choice-reviewing.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Question:question-choice-finished.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
  ";
        // line 5
        $this->loadTemplate("TopxiaWebBundle:Question:question-choice-options-result.html.twig", "TopxiaWebBundle:Question:question-single_choice-reviewing.html.twig", 5)->display($context);
        // line 6
        echo "
";
        // line 7
        $context["choiceIndex"] = $this->env->getExtension('topxia_web_twig')->chrFilter((65 + (($this->getAttribute($this->getAttribute((isset($context["itemResult"]) ? $context["itemResult"] : null), "answer", array(), "any", false, true), 0, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["itemResult"]) ? $context["itemResult"] : null), "answer", array(), "any", false, true), 0, array(), "array"), "-1")) : ("-1"))));
        // line 8
        if ((isset($context["itemResult"]) ? $context["itemResult"] : null)) {
            // line 9
            echo "
  <div class=\"homework-question-result\">

    ";
            // line 12
            if (($this->getAttribute((isset($context["itemResult"]) ? $context["itemResult"] : null), "status", array()) == "right")) {
                // line 13
                echo "      <span class=\"glyphicon glyphicon-ok question-text-success\"></span>
    ";
            } elseif (($this->getAttribute(            // line 14
(isset($context["itemResult"]) ? $context["itemResult"] : null), "status", array()) == "wrong")) {
                // line 15
                echo "     <span class=\"glyphicon glyphicon-remove question-text-danger\"></span> 选择了<strong class=\"question-text-danger\">";
                echo twig_escape_filter($this->env, (isset($context["choiceIndex"]) ? $context["choiceIndex"] : null), "html", null, true);
                echo "</strong>
     ";
            } elseif (($this->getAttribute(            // line 16
(isset($context["itemResult"]) ? $context["itemResult"] : null), "status", array()) == "noAnswer")) {
                // line 17
                echo "　　　  <span class=\"glyphicon glyphicon-remove question-text-danger pull-left\">未答题</span>
    ";
            }
            // line 19
            echo "</div>
";
        }
        // line 21
        echo "

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Question:question-single_choice-reviewing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 21,  66 => 19,  62 => 17,  60 => 16,  55 => 15,  53 => 14,  50 => 13,  48 => 12,  43 => 9,  41 => 8,  39 => 7,  36 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:Question:question-choice-finished.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*   {% include 'TopxiaWebBundle:Question:question-choice-options-result.html.twig' %}*/
/* */
/* {% set choiceIndex = (65+itemResult.answer[0]|default('-1'))|chr %}*/
/* {% if itemResult %}*/
/* */
/*   <div class="homework-question-result">*/
/* */
/*     {% if itemResult.status == 'right' %}*/
/*       <span class="glyphicon glyphicon-ok question-text-success"></span>*/
/*     {% elseif itemResult.status == 'wrong' %}*/
/*      <span class="glyphicon glyphicon-remove question-text-danger"></span> 选择了<strong class="question-text-danger">{{ choiceIndex }}</strong>*/
/*      {% elseif itemResult.status == 'noAnswer' %}*/
/* 　　　  <span class="glyphicon glyphicon-remove question-text-danger pull-left">未答题</span>*/
/*     {% endif %}*/
/* </div>*/
/* {% endif %}*/
/* */
/* */
/* {% endblock %}*/
