<?php

/* TopxiaWebBundle:Question:question-determine-reviewing.html.twig */
class __TwigTemplate_78460b9de6f0acd61d92de23b3ddc4f5712d731e488d4fc648b5782f78622613 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Question:question-base-layout.html.twig", "TopxiaWebBundle:Question:question-determine-reviewing.html.twig", 1);
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
        echo $this->env->getExtension('topxia_web_twig')->bbCode2HtmlFilter($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "stem", array()));
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
        $context["rightAnswerIndex"] = (($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "answer", array(), "any", false, true), 0, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "answer", array(), "any", false, true), 0, array(), "array"), null)) : (null));
        // line 10
        echo "
  <div class=\"homework-question-result\">
    ";
        // line 12
        if (($this->getAttribute((isset($context["itemResult"]) ? $context["itemResult"] : null), "status", array()) == "right")) {
            // line 13
            echo "\t   <span class=\"glyphicon glyphicon-ok question-text-success\"></span> 
    ";
        } elseif (($this->getAttribute(        // line 14
(isset($context["itemResult"]) ? $context["itemResult"] : null), "status", array()) == "wrong")) {
            // line 15
            echo "       <span class=\"glyphicon glyphicon-remove question-text-danger\"></span> 
    ";
        } elseif (($this->getAttribute(        // line 16
(isset($context["itemResult"]) ? $context["itemResult"] : null), "status", array()) == "noAnswer")) {
            // line 17
            echo "　　　  <span class=\"glyphicon glyphicon-remove question-text-danger\"></span> 未答题
    ";
        }
        // line 19
        echo "\t 正确答案是: <strong style=\"color:red\">";
        if (((isset($context["rightAnswerIndex"]) ? $context["rightAnswerIndex"] : null) == 1)) {
            echo " 正确 ";
        } else {
            echo " 错误 ";
        }
        echo "</strong>
</div>

";
    }

    // line 24
    public function block_footer($context, array $blocks = array())
    {
        // line 25
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Question:question-determine-reviewing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 25,  81 => 24,  68 => 19,  64 => 17,  62 => 16,  59 => 15,  57 => 14,  54 => 13,  52 => 12,  48 => 10,  46 => 9,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:Question:question-base-layout.html.twig' %}*/
/* */
/* {% block heading %}*/
/*   {{ question.stem|bbCode2Html|raw }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*  {% set rightAnswerIndex = question.answer[0]|default(null) %}*/
/* */
/*   <div class="homework-question-result">*/
/*     {% if itemResult.status == 'right' %}*/
/* 	   <span class="glyphicon glyphicon-ok question-text-success"></span> */
/*     {% elseif itemResult.status == 'wrong' %}*/
/*        <span class="glyphicon glyphicon-remove question-text-danger"></span> */
/*     {% elseif itemResult.status == 'noAnswer' %}*/
/* 　　　  <span class="glyphicon glyphicon-remove question-text-danger"></span> 未答题*/
/*     {% endif %}*/
/* 	 正确答案是: <strong style="color:red">{% if rightAnswerIndex == 1 %} 正确 {% else %} 错误 {% endif %}</strong>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/* */
/* {% endblock %}*/
