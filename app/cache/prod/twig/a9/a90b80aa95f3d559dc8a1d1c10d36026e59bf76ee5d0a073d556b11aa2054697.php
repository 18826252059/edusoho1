<?php

/* TopxiaWebBundle:Question:question-choice-finished.html.twig */
class __TwigTemplate_b8d6c75fa102a4b46ffb4e24a919725a514c421c6b99bc80d2efd402e242b4d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Question:question-base-layout.html.twig", "TopxiaWebBundle:Question:question-choice-finished.html.twig", 1);
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
        $this->loadTemplate("TopxiaWebBundle:Question:question-choice-options-result.html.twig", "TopxiaWebBundle:Question:question-choice-finished.html.twig", 12)->display($context);
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
        echo "  <div class=\"homework-question-result\">

    ";
        // line 19
        if (($this->getAttribute((isset($context["itemResult"]) ? $context["itemResult"] : null), "status", array()) == "right")) {
            // line 20
            echo "     <span class=\"glyphicon glyphicon-ok question-text-success\"></span> 你答对了!
    ";
        } elseif (($this->getAttribute(        // line 21
(isset($context["itemResult"]) ? $context["itemResult"] : null), "status", array()) == "wrong")) {
            // line 22
            echo "       <span class=\"glyphicon glyphicon-remove question-text-danger\"></span> 你答错了,你选择了<strong class=\"question-text-danger\">
       ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["choiceIndex"]) ? $context["choiceIndex"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["choice"]) {
                // line 24
                echo "          ";
                if (($context["choice"] != "-1")) {
                    // line 25
                    echo "          ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->chrFilter((65 + $context["choice"])), "html", null, true);
                    echo "
          ";
                }
                // line 27
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "       </strong>
  ";
        } elseif (($this->getAttribute(        // line 29
(isset($context["itemResult"]) ? $context["itemResult"] : null), "status", array()) == "partRight")) {
            // line 30
            echo "       <span class=\"glyphicon glyphicon-remove question-text-danger\"></span> 你部分答对,你选择了<strong class=\"question-text-danger\">
           ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["choiceIndex"]) ? $context["choiceIndex"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["choice"]) {
                // line 32
                echo "          ";
                if (($context["choice"] != "-1")) {
                    // line 33
                    echo "          ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->chrFilter((65 + $context["choice"])), "html", null, true);
                    echo "
          ";
                }
                // line 35
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['choice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "       </strong>
    ";
        } elseif (($this->getAttribute(        // line 37
(isset($context["itemResult"]) ? $context["itemResult"] : null), "status", array()) == "noAnswer")) {
            // line 38
            echo "　　　  <span class=\"glyphicon glyphicon-remove question-text-danger pull-left\">你未答题</span>
    ";
        }
        // line 40
        echo "</div>

";
    }

    // line 44
    public function block_footer($context, array $blocks = array())
    {
        // line 45
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Question:question-choice-finished.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 45,  142 => 44,  136 => 40,  132 => 38,  130 => 37,  127 => 36,  121 => 35,  115 => 33,  112 => 32,  108 => 31,  105 => 30,  103 => 29,  100 => 28,  94 => 27,  88 => 25,  85 => 24,  81 => 23,  78 => 22,  76 => 21,  73 => 20,  71 => 19,  67 => 17,  63 => 15,  61 => 14,  58 => 13,  56 => 12,  53 => 11,  50 => 10,  43 => 7,  38 => 5,  33 => 4,  30 => 3,  11 => 1,);
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
/*   <div class="homework-question-result">*/
/* */
/*     {% if itemResult.status == 'right' %}*/
/*      <span class="glyphicon glyphicon-ok question-text-success"></span> 你答对了!*/
/*     {% elseif itemResult.status == 'wrong' %}*/
/*        <span class="glyphicon glyphicon-remove question-text-danger"></span> 你答错了,你选择了<strong class="question-text-danger">*/
/*        {% for key,choice in choiceIndex %}*/
/*           {% if choice != '-1' %}*/
/*           {{ (65+choice)|chr }}*/
/*           {% endif %}*/
/*         {% endfor %}*/
/*        </strong>*/
/*   {% elseif itemResult.status == 'partRight' %}*/
/*        <span class="glyphicon glyphicon-remove question-text-danger"></span> 你部分答对,你选择了<strong class="question-text-danger">*/
/*            {% for key,choice in choiceIndex %}*/
/*           {% if choice != '-1' %}*/
/*           {{ (65+choice)|chr }}*/
/*           {% endif %}*/
/*         {% endfor %}*/
/*        </strong>*/
/*     {% elseif itemResult.status == 'noAnswer' %}*/
/* 　　　  <span class="glyphicon glyphicon-remove question-text-danger pull-left">你未答题</span>*/
/*     {% endif %}*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/* */
/* {% endblock %}*/
