<?php

/* TopxiaWebBundle:Question:question-uncertain_choice-reviewing.html.twig */
class __TwigTemplate_1c2e6cfaa56f7f1ff3f2e5e37a60d186870952549b4268ff7f42bfe5f3fdfe86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Question:question-base-layout.html.twig", "TopxiaWebBundle:Question:question-uncertain_choice-reviewing.html.twig", 1);
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
        $this->loadTemplate("TopxiaWebBundle:Question:question-choice-options-result.html.twig", "TopxiaWebBundle:Question:question-uncertain_choice-reviewing.html.twig", 9)->display($context);
        // line 10
        echo "  
  ";
        // line 11
        $context["choiceIndex"] = "";
        // line 12
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["itemResult"]) ? $context["itemResult"] : null), "answer", array()));
        foreach ($context['_seq'] as $context["key"] => $context["choice"]) {
            // line 13
            echo "    ";
            $context["choiceIndex"] = (((isset($context["choiceIndex"]) ? $context["choiceIndex"] : null) . " ") . $this->env->getExtension('topxia_web_twig')->chrFilter((65 + $context["choice"])));
            // line 14
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "
<div class=\"homework-question-result\">

    ";
        // line 18
        if (($this->getAttribute((isset($context["itemResult"]) ? $context["itemResult"] : null), "status", array()) == "right")) {
            // line 19
            echo "     <span class=\"glyphicon glyphicon-ok question-text-success\"></span>
    ";
        } elseif (($this->getAttribute(        // line 20
(isset($context["itemResult"]) ? $context["itemResult"] : null), "status", array()) == "wrong")) {
            // line 21
            echo "       <span class=\"glyphicon glyphicon-remove question-text-danger\"></span> 选择了<strong class=\"question-text-danger\">";
            echo twig_escape_filter($this->env, (isset($context["choiceIndex"]) ? $context["choiceIndex"] : null), "html", null, true);
            echo "</strong>
  ";
        } elseif (($this->getAttribute(        // line 22
(isset($context["itemResult"]) ? $context["itemResult"] : null), "status", array()) == "partRight")) {
            // line 23
            echo "       <span class=\"glyphicon glyphicon-remove question-text-danger\"></span> 部分答对,选择了<strong class=\"question-text-danger\">";
            echo twig_escape_filter($this->env, (isset($context["choiceIndex"]) ? $context["choiceIndex"] : null), "html", null, true);
            echo "</strong>
    ";
        } elseif (($this->getAttribute(        // line 24
(isset($context["itemResult"]) ? $context["itemResult"] : null), "status", array()) == "noAnswer")) {
            // line 25
            echo "　　　  <span class=\"glyphicon glyphicon-remove question-text-danger pull-left\">未答题</span>
    ";
        }
        // line 27
        echo "</div>

";
    }

    // line 31
    public function block_footer($context, array $blocks = array())
    {
        // line 32
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Question:question-uncertain_choice-reviewing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 32,  103 => 31,  97 => 27,  93 => 25,  91 => 24,  86 => 23,  84 => 22,  79 => 21,  77 => 20,  74 => 19,  72 => 18,  67 => 15,  61 => 14,  58 => 13,  53 => 12,  51 => 11,  48 => 10,  46 => 9,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  11 => 1,);
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
/*   {% include 'TopxiaWebBundle:Question:question-choice-options-result.html.twig' %}*/
/*   */
/*   {% set choiceIndex = '' %}*/
/*   {% for key,choice in itemResult.answer %}*/
/*     {% set choiceIndex = choiceIndex ~ " " ~ (65+choice)|chr %}*/
/*   {% endfor %}*/
/* */
/* <div class="homework-question-result">*/
/* */
/*     {% if itemResult.status == 'right' %}*/
/*      <span class="glyphicon glyphicon-ok question-text-success"></span>*/
/*     {% elseif itemResult.status == 'wrong' %}*/
/*        <span class="glyphicon glyphicon-remove question-text-danger"></span> 选择了<strong class="question-text-danger">{{ choiceIndex }}</strong>*/
/*   {% elseif itemResult.status == 'partRight' %}*/
/*        <span class="glyphicon glyphicon-remove question-text-danger"></span> 部分答对,选择了<strong class="question-text-danger">{{ choiceIndex }}</strong>*/
/*     {% elseif itemResult.status == 'noAnswer' %}*/
/* 　　　  <span class="glyphicon glyphicon-remove question-text-danger pull-left">未答题</span>*/
/*     {% endif %}*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/* */
/* {% endblock %}*/
