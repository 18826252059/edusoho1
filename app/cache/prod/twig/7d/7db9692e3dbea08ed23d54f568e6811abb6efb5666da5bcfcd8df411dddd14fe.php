<?php

/* TopxiaWebBundle:Question:question-determine-finished.html.twig */
class __TwigTemplate_d0a9628255656be81d49ce0a0af01baa015d82edbce291556a4c8ef25fc33b8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Question:question-base-layout.html.twig", "TopxiaWebBundle:Question:question-determine-finished.html.twig", 1);
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
        ob_start();
        // line 11
        echo "    <div class=\"homework-question-result\">
    正确答案是: <strong style=\"color:red\">";
        // line 12
        if (((isset($context["rightAnswerIndex"]) ? $context["rightAnswerIndex"] : null) == 1)) {
            echo " 正确 ";
        } else {
            echo " 错误 ";
        }
        echo "</strong>，
    ";
        // line 13
        if (($this->getAttribute((isset($context["itemResult"]) ? $context["itemResult"] : null), "status", array()) == "right")) {
            // line 14
            echo "       <span class=\"glyphicon glyphicon-ok question-text-success\"></span> 你答对了
    ";
        } elseif (($this->getAttribute(        // line 15
(isset($context["itemResult"]) ? $context["itemResult"] : null), "status", array()) == "wrong")) {
            // line 16
            echo "       <span class=\"glyphicon glyphicon-remove question-text-danger\"></span> 你答错了
    ";
        } elseif (($this->getAttribute(        // line 17
(isset($context["itemResult"]) ? $context["itemResult"] : null), "status", array()) == "noAnswer")) {
            // line 18
            echo "        <span class=\"glyphicon glyphicon-remove question-text-danger\">你未答题</span>
    ";
        }
        // line 20
        echo "    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
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
        return "TopxiaWebBundle:Question:question-determine-finished.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 25,  83 => 24,  77 => 20,  73 => 18,  71 => 17,  68 => 16,  66 => 15,  63 => 14,  61 => 13,  53 => 12,  50 => 11,  48 => 10,  46 => 9,  43 => 8,  40 => 7,  33 => 4,  30 => 3,  11 => 1,);
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
/* {% spaceless %}*/
/*     <div class="homework-question-result">*/
/*     正确答案是: <strong style="color:red">{% if rightAnswerIndex == 1 %} 正确 {% else %} 错误 {% endif %}</strong>，*/
/*     {% if itemResult.status == 'right' %}*/
/*        <span class="glyphicon glyphicon-ok question-text-success"></span> 你答对了*/
/*     {% elseif itemResult.status == 'wrong' %}*/
/*        <span class="glyphicon glyphicon-remove question-text-danger"></span> 你答错了*/
/*     {% elseif itemResult.status == 'noAnswer' %}*/
/*         <span class="glyphicon glyphicon-remove question-text-danger">你未答题</span>*/
/*     {% endif %}*/
/*     </div>*/
/* {% endspaceless %}*/
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/* */
/* {% endblock %}*/
