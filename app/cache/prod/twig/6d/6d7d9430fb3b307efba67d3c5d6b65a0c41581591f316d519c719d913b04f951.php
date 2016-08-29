<?php

/* TopxiaWebBundle:CourseQuestionManage:question-form-material.html.twig */
class __TwigTemplate_fa4c25d51f3661b4280c09bbc8ac27f63e67ccca3268685480653bee4f83e68f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:CourseQuestionManage:question-form-layout.html.twig", "TopxiaWebBundle:CourseQuestionManage:question-form-material.html.twig", 1);
        $this->blocks = array(
            'question_buttons' => array($this, 'block_question_buttons'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:CourseQuestionManage:question-form-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["question_stem_label"] = "材料";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_question_buttons($context, array $blocks = array())
    {
        // line 6
        echo "  ";
        if ( !$this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array())) {
            // line 7
            echo "    <button type=\"submit\" data-role=\"submit\" class=\"btn btn-primary\" data-submission=\"continue_sub\">保存并添加子题</button>
  ";
        } else {
            // line 9
            echo "    <button type=\"submit\" data-role=\"submit\" class=\"btn btn-primary\">保存</button>
  ";
        }
        // line 11
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseQuestionManage:question-form-material.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 11,  41 => 9,  37 => 7,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:CourseQuestionManage:question-form-layout.html.twig' %}*/
/* */
/* {% set question_stem_label = '材料' %}*/
/* */
/* {% block question_buttons %}*/
/*   {% if not question.id %}*/
/*     <button type="submit" data-role="submit" class="btn btn-primary" data-submission="continue_sub">保存并添加子题</button>*/
/*   {% else %}*/
/*     <button type="submit" data-role="submit" class="btn btn-primary">保存</button>*/
/*   {% endif %}*/
/* */
/* {% endblock %}*/
