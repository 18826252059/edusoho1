<?php

/* TopxiaWebBundle:Question:question-choice-reviewing.html.twig */
class __TwigTemplate_8ca574cdbc57df2b5afd32c966c72b7bbe01a3f4799bd64810f01ff21fb9de3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Question:question-base-layout.html.twig", "TopxiaWebBundle:Question:question-choice-reviewing.html.twig", 1);
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
        if (($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "type", array()) == "single_choice")) {
            echo "（单选）
  ";
        } elseif (($this->getAttribute(        // line 5
(isset($context["question"]) ? $context["question"] : null), "type", array()) == "choice")) {
            echo "（多选）
  ";
        }
        // line 7
        echo "  ";
        echo $this->env->getExtension('topxia_web_twig')->bbCode2HtmlFilter($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "stem", array()));
        echo "
";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "
  ";
        // line 12
        $this->loadTemplate("TopxiaWebBundle:Question:question-choice-options-result.html.twig", "TopxiaWebBundle:Question:question-choice-reviewing.html.twig", 12)->display($context);
        // line 13
        echo "
";
        // line 14
        if (((($this->getAttribute((isset($context["itemResult"]) ? $context["itemResult"] : null), "answer", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["itemResult"]) ? $context["itemResult"] : null), "answer", array()), null)) : (null)) || ($this->getAttribute((isset($context["itemResult"]) ? $context["itemResult"] : null), "answer", array()) == 0))) {
            // line 15
            echo "  ";
            $context["choiceIndex"] = $this->getAttribute((isset($context["itemResult"]) ? $context["itemResult"] : null), "answer", array());
        }
        // line 17
        echo "
<div class=\"homework-question-result\">

    ";
        // line 20
        if (($this->getAttribute((isset($context["itemResult"]) ? $context["itemResult"] : null), "status", array()) == "right")) {
            // line 21
            echo "     <span class=\"glyphicon glyphicon-ok question-text-success\"></span>
    ";
        } elseif (($this->getAttribute(        // line 22
(isset($context["itemResult"]) ? $context["itemResult"] : null), "status", array()) == "wrong")) {
            // line 23
            echo "       <span class=\"glyphicon glyphicon-remove question-text-danger\"></span> 选择了<strong class=\"question-text-danger\">
        ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["choiceIndex"]) ? $context["choiceIndex"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["choice"]) {
                // line 25
                echo "          ";
                if (($context["choice"] != "-1")) {
                    // line 26
                    echo "          ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->chrFilter((65 + $context["choice"])), "html", null, true);
                    echo "
          ";
                }
                // line 28
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "       </strong>
  ";
        } elseif (($this->getAttribute(        // line 30
(isset($context["itemResult"]) ? $context["itemResult"] : null), "status", array()) == "partRight")) {
            // line 31
            echo "       <span class=\"glyphicon glyphicon-remove question-text-danger\"></span> 部分答对,选择了<strong class=\"question-text-danger\">
       ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["choiceIndex"]) ? $context["choiceIndex"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["choice"]) {
                // line 33
                echo "          ";
                if (($context["choice"] != "-1")) {
                    // line 34
                    echo "          ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->chrFilter((65 + $context["choice"])), "html", null, true);
                    echo "
          ";
                }
                // line 36
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "       </strong>
    ";
        } elseif (($this->getAttribute(        // line 38
(isset($context["itemResult"]) ? $context["itemResult"] : null), "status", array()) == "noAnswer")) {
            // line 39
            echo "　　　  <span class=\"glyphicon glyphicon-remove question-text-danger\"></span>未答题
    ";
        }
        // line 41
        echo "</div>

";
    }

    // line 45
    public function block_footer($context, array $blocks = array())
    {
        // line 46
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Question:question-choice-reviewing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 46,  143 => 45,  137 => 41,  133 => 39,  131 => 38,  128 => 37,  122 => 36,  116 => 34,  113 => 33,  109 => 32,  106 => 31,  104 => 30,  101 => 29,  95 => 28,  89 => 26,  86 => 25,  82 => 24,  79 => 23,  77 => 22,  74 => 21,  72 => 20,  67 => 17,  63 => 15,  61 => 14,  58 => 13,  56 => 12,  53 => 11,  50 => 10,  43 => 7,  38 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:Question:question-base-layout.html.twig' %}*/
/* */
/* {% block heading %}*/
/*   {% if question.type == 'single_choice' %}（单选）*/
/*   {% elseif question.type == 'choice' %}（多选）*/
/*   {% endif %}*/
/*   {{ question.stem|bbCode2Html|raw }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*   {% include 'TopxiaWebBundle:Question:question-choice-options-result.html.twig' %}*/
/* */
/* {% if itemResult.answer|default(null) or itemResult.answer == 0 %}*/
/*   {% set choiceIndex = itemResult.answer %}*/
/* {% endif %}*/
/* */
/* <div class="homework-question-result">*/
/* */
/*     {% if itemResult.status == 'right' %}*/
/*      <span class="glyphicon glyphicon-ok question-text-success"></span>*/
/*     {% elseif itemResult.status == 'wrong' %}*/
/*        <span class="glyphicon glyphicon-remove question-text-danger"></span> 选择了<strong class="question-text-danger">*/
/*         {% for key,choice in choiceIndex %}*/
/*           {% if choice != '-1' %}*/
/*           {{ (65+choice)|chr }}*/
/*           {% endif %}*/
/*         {% endfor %}*/
/*        </strong>*/
/*   {% elseif itemResult.status == 'partRight' %}*/
/*        <span class="glyphicon glyphicon-remove question-text-danger"></span> 部分答对,选择了<strong class="question-text-danger">*/
/*        {% for key,choice in choiceIndex %}*/
/*           {% if choice != '-1' %}*/
/*           {{ (65+choice)|chr }}*/
/*           {% endif %}*/
/*         {% endfor %}*/
/*        </strong>*/
/*     {% elseif itemResult.status == 'noAnswer' %}*/
/* 　　　  <span class="glyphicon glyphicon-remove question-text-danger"></span>未答题*/
/*     {% endif %}*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/* */
/* {% endblock %}*/
