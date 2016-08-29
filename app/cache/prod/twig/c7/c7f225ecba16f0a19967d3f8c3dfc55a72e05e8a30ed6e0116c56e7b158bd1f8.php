<?php

/* TopxiaWebBundle:QuizQuestionTest:testpaper-review.html.twig */
class __TwigTemplate_a5574f699eeaba1386b18bb0a45af01106e4f635d7dfc649c96664729141cfe8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:QuizQuestionTest:testpaper-layout.html.twig", "TopxiaWebBundle:QuizQuestionTest:testpaper-review.html.twig", 1);
        $this->blocks = array(
            'testpaper_heading_status' => array($this, 'block_testpaper_heading_status'),
            'testpaper_heading_content' => array($this, 'block_testpaper_heading_content'),
            'testpaper_body_sidebar' => array($this, 'block_testpaper_body_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:QuizQuestionTest:testpaper-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["role"] = "teacher";
        // line 5
        $context["showTestpaperNavbar"] = "off";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_testpaper_heading_status($context, array $blocks = array())
    {
        // line 8
        echo "  ";
        if (($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()) == "finished")) {
            // line 9
            echo "    <div class=\"label label-success\">批阅完成</div>
  ";
        } elseif (($this->getAttribute(        // line 10
(isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()) == "reviewing")) {
            // line 11
            echo "    <div class=\"label label-info\">批阅中</div>
  ";
        }
    }

    // line 15
    public function block_testpaper_heading_content($context, array $blocks = array())
    {
        // line 16
        echo "
";
        // line 17
        $this->loadTemplate("TopxiaWebBundle:QuizQuestionTest:testpaper-result-objective.html.twig", "TopxiaWebBundle:QuizQuestionTest:testpaper-review.html.twig", 17)->display($context);
        // line 18
        echo "
<div class=\"text-info mbl\">请完成以下题目的批阅：</div>

";
    }

    // line 23
    public function block_testpaper_body_sidebar($context, array $blocks = array())
    {
        // line 24
        echo "
  <div class=\"testpaper-card\" data-spy=\"affix\" data-offset-top=\"200\">
    <div class=\"panel panel-default\">
        <div class=\"panel-body\">

          ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(((array_key_exists("types", $context)) ? (_twig_default_filter((isset($context["types"]) ? $context["types"] : null), $this->getAttribute($this->getAttribute((isset($context["paper"]) ? $context["paper"] : null), "metas", array()), "question_type_seq", array()))) : ($this->getAttribute($this->getAttribute((isset($context["paper"]) ? $context["paper"] : null), "metas", array()), "question_type_seq", array()))));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 30
            echo "
            ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["items"]) ? $context["items"] : null), $context["type"], array(), "array"));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 32
                echo "              ";
                if (($this->getAttribute($context["item"], "questionType", array()) != "material")) {
                    // line 33
                    echo "                <a href=\"#question";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "questionId", array()), "html", null, true);
                    echo "\" class=\"btn btn-default btn-index ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "question", array()), "testResult", array()), "status", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "seq", array()), "html", null, true);
                    echo "</a>
              ";
                } else {
                    // line 35
                    echo "                ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((($this->getAttribute($context["item"], "items", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["item"], "items", array()), array())) : (array())));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 36
                        echo "                  ";
                        if (($this->getAttribute($context["item"], "questionType", array()) == "essay")) {
                            // line 37
                            echo "                    <a href=\"#question";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "questionId", array()), "html", null, true);
                            echo "\" class=\"btn btn-default btn-index ";
                            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "question", array()), "testResult", array()), "status", array()), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "seq", array()), "html", null, true);
                            echo "</a>
                  ";
                        }
                        // line 39
                        echo "                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 40
                    echo "              ";
                }
                // line 41
                echo "              
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "
            <div class=\"clearfix mtm mbm\"></div>

          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "
        </div>
        <div class=\"panel-footer\">
          <button class=\"btn btn-success btn-block\" id=\"finishCheck\">完成批阅</button>
        </div>
    </div>
  </div>



";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:QuizQuestionTest:testpaper-review.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 47,  135 => 43,  128 => 41,  125 => 40,  119 => 39,  109 => 37,  106 => 36,  101 => 35,  91 => 33,  88 => 32,  84 => 31,  81 => 30,  77 => 29,  70 => 24,  67 => 23,  60 => 18,  58 => 17,  55 => 16,  52 => 15,  46 => 11,  44 => 10,  41 => 9,  38 => 8,  35 => 7,  31 => 1,  29 => 5,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:QuizQuestionTest:testpaper-layout.html.twig' %}*/
/* */
/* {% set role = 'teacher' %}*/
/* */
/* {% set showTestpaperNavbar = 'off' %}*/
/* */
/* {% block testpaper_heading_status %}*/
/*   {% if paperResult.status == 'finished' %}*/
/*     <div class="label label-success">批阅完成</div>*/
/*   {% elseif paperResult.status == 'reviewing' %}*/
/*     <div class="label label-info">批阅中</div>*/
/*   {% endif %}*/
/* {% endblock %}*/
/* */
/* {% block testpaper_heading_content %}*/
/* */
/* {% include 'TopxiaWebBundle:QuizQuestionTest:testpaper-result-objective.html.twig' %}*/
/* */
/* <div class="text-info mbl">请完成以下题目的批阅：</div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block testpaper_body_sidebar %}*/
/* */
/*   <div class="testpaper-card" data-spy="affix" data-offset-top="200">*/
/*     <div class="panel panel-default">*/
/*         <div class="panel-body">*/
/* */
/*           {% for type in types|default(paper.metas.question_type_seq) %}*/
/* */
/*             {% for item in items[type] %}*/
/*               {% if item.questionType != 'material' %}*/
/*                 <a href="#question{{ item.questionId }}" class="btn btn-default btn-index {{ item.question.testResult.status }}">{{ item.seq }}</a>*/
/*               {% else %}*/
/*                 {% for item in item.items|default([]) %}*/
/*                   {% if item.questionType == 'essay' %}*/
/*                     <a href="#question{{ item.questionId }}" class="btn btn-default btn-index {{ item.question.testResult.status }}">{{ item.seq }}</a>*/
/*                   {% endif %}*/
/*                 {% endfor %}*/
/*               {% endif %}*/
/*               */
/*             {% endfor %}*/
/* */
/*             <div class="clearfix mtm mbm"></div>*/
/* */
/*           {% endfor %}*/
/* */
/*         </div>*/
/*         <div class="panel-footer">*/
/*           <button class="btn btn-success btn-block" id="finishCheck">完成批阅</button>*/
/*         </div>*/
/*     </div>*/
/*   </div>*/
/* */
/* */
/* */
/* {% endblock %}*/
