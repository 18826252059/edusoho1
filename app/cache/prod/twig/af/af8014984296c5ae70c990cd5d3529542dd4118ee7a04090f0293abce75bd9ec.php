<?php

/* TopxiaWebBundle:Question:question-single_choice-finished.html.twig */
class __TwigTemplate_35d3c8a8719fe46d8fc0553cd71331654c83759e4c54729c034ec0f5cdf1ddc4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Question:question-choice-finished.html.twig", "TopxiaWebBundle:Question:question-single_choice-finished.html.twig", 1);
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
        $this->loadTemplate("TopxiaWebBundle:Question:question-choice-options-result.html.twig", "TopxiaWebBundle:Question:question-single_choice-finished.html.twig", 5)->display($context);
        // line 6
        echo "
";
        // line 7
        $context["choiceIndex"] = $this->env->getExtension('topxia_web_twig')->chrFilter((65 + (($this->getAttribute($this->getAttribute((isset($context["itemResult"]) ? $context["itemResult"] : null), "answer", array(), "any", false, true), 0, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["itemResult"]) ? $context["itemResult"] : null), "answer", array(), "any", false, true), 0, array(), "array"),  -1)) : ( -1))));
        // line 8
        if ((isset($context["itemResult"]) ? $context["itemResult"] : null)) {
            // line 9
            echo "
  <div class=\"homework-question-result\">
    ";
            // line 11
            if (($this->getAttribute((isset($context["itemResult"]) ? $context["itemResult"] : null), "status", array()) == "right")) {
                // line 12
                echo "\t  <span class=\"glyphicon glyphicon-ok question-text-success\"></span> 你答对了!
    ";
            } elseif (($this->getAttribute(            // line 13
(isset($context["itemResult"]) ? $context["itemResult"] : null), "status", array()) == "wrong")) {
                // line 14
                echo "     <span class=\"glyphicon glyphicon-remove question-text-danger\"></span> 你答错了,你选择了<strong class=\"question-text-danger\">";
                echo twig_escape_filter($this->env, (isset($context["choiceIndex"]) ? $context["choiceIndex"] : null), "html", null, true);
                echo "</strong>
\t ";
            } elseif (($this->getAttribute(            // line 15
(isset($context["itemResult"]) ? $context["itemResult"] : null), "status", array()) == "noAnswer")) {
                // line 16
                echo "　　　  <span class=\"glyphicon glyphicon-remove question-text-danger pull-left\">你未答题</span>
    ";
            }
            // line 18
            echo "</div>
";
        }
        // line 20
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Question:question-single_choice-finished.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 20,  65 => 18,  61 => 16,  59 => 15,  54 => 14,  52 => 13,  49 => 12,  47 => 11,  43 => 9,  41 => 8,  39 => 7,  36 => 6,  34 => 5,  31 => 4,  28 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:Question:question-choice-finished.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*   {% include 'TopxiaWebBundle:Question:question-choice-options-result.html.twig' %}*/
/* */
/* {% set choiceIndex = (65+itemResult.answer[0]|default(-1))|chr %}*/
/* {% if itemResult %}*/
/* */
/*   <div class="homework-question-result">*/
/*     {% if itemResult.status == 'right' %}*/
/* 	  <span class="glyphicon glyphicon-ok question-text-success"></span> 你答对了!*/
/*     {% elseif itemResult.status == 'wrong' %}*/
/*      <span class="glyphicon glyphicon-remove question-text-danger"></span> 你答错了,你选择了<strong class="question-text-danger">{{ choiceIndex }}</strong>*/
/* 	 {% elseif itemResult.status == 'noAnswer' %}*/
/* 　　　  <span class="glyphicon glyphicon-remove question-text-danger pull-left">你未答题</span>*/
/*     {% endif %}*/
/* </div>*/
/* {% endif %}*/
/* */
/* {% endblock %}*/
