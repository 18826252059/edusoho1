<?php

/* TopxiaWebBundle:MyQuiz:my-favorite-question-tr.html.twig */
class __TwigTemplate_897a847c01e5af641bab1c0a015aecdad1aace1500e121e28787a36ff4cb8fd8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<tr>
\t<td>
\t\t<a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_favorite_question_preview", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()))), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute((isset($context["question"]) ? $context["question"] : null), "stem", array()), 40);
        echo "</a>
\t\t<div class=\"text-muted\">
\t\t  <small>来自试卷《";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paper"]) ? $context["paper"] : null), "name", array()), "html", null, true);
        echo "》</small>
\t\t  <small class=\"mhs\">•</small>
\t\t  <small>收藏于 ";
        // line 7
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["favoriteQuestion"]) ? $context["favoriteQuestion"] : null), "createdTime", array()), "Y-n-d H:i:s"), "html", null, true);
        echo "</small>
\t\t</div>
\t</td>
\t<td>
\t\t<button data-url=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_unfavorite_question", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : null), "id", array()), "targetType" => "testpaper", "targetId" => $this->getAttribute((isset($context["paper"]) ? $context["paper"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default btn-sm pull-right unfavorite-btn\"><span class=\"glyphicon glyphicon-star-empty\"></span> 取消收藏</button>
\t</td>
</tr>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyQuiz:my-favorite-question-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 11,  35 => 7,  30 => 5,  23 => 3,  19 => 1,);
    }
}
/* <tr>*/
/* 	<td>*/
/* 		<a href="#modal" data-toggle="modal" data-url="{{ path('my_favorite_question_preview', {id:question.id}) }}">{{ question.stem|plain_text(40) }}</a>*/
/* 		<div class="text-muted">*/
/* 		  <small>来自试卷《{{ paper.name }}》</small>*/
/* 		  <small class="mhs">•</small>*/
/* 		  <small>收藏于 {{ favoriteQuestion.createdTime|date('Y-n-d H:i:s') }}</small>*/
/* 		</div>*/
/* 	</td>*/
/* 	<td>*/
/* 		<button data-url="{{ path('my_unfavorite_question', {id:question.id, targetType:'testpaper', targetId:paper.id}) }}" class="btn btn-default btn-sm pull-right unfavorite-btn"><span class="glyphicon glyphicon-star-empty"></span> 取消收藏</button>*/
/* 	</td>*/
/* </tr>*/
