<?php

/* TopxiaWebBundle:Marker:question-tr.html.twig */
class __TwigTemplate_ed8a2e0c89be09f4838ec9c1ca9026c1fd7f4ca4178d0410762ae9067c567a7c extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Marker:question-tr.html.twig", 1);
        // line 2
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) ? $context["questions"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            echo " 
  <li class=\"row item-lesson ";
            // line 3
            if ((($this->getAttribute($context["question"], "exist", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["question"], "exist", array()), false)) : (false))) {
                echo "disdrag ";
            } else {
                echo " drag ";
            }
            echo "\" id=\"\" question-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
            echo "\">
    <div class=\"col-md-6 col-sm-10 title\">
      <div class=\"before\">
        <span class=\"icon-drag glyphicon glyphicon-move mrm \"></span>
        <span class=\"number\"><span class=\"num\">1</span>.</span>
        ";
            // line 8
            if ($this->getAttribute($context["question"], "includeImg", array())) {
                echo "<span class=\"glyphicon glyphicon-picture\"></span>";
            }
            // line 9
            echo "        ";
            echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->env->getExtension('topxia_web_twig')->fillQuestionStemTextFilter($this->getAttribute($context["question"], "stem", array())), 12);
            echo "
      </div>
      <i class=\"icon-close es-icon es-icon-icon_close_circle\"></i>
    </div>
    <div class=\"col-md-3 content\">";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('topxia_web_twig')->getDict("questionType"), $this->getAttribute($context["question"], "type", array()), array(), "array"), "html", null, true);
            echo "</div>
    <div class=\"col-md-1 content\">";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('topxia_web_twig')->getDict("difficulty"), $this->getAttribute($context["question"], "difficulty", array()), array(), "array"), "html", null, true);
            echo "</div>
    <div class=\"col-xs-2 content not-add\"><a href=\"javascript:;\" class=\"marker-preview\" data-url=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_question_preview", array("id" => $this->getAttribute($context["question"], "id", array()), "courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\">预览</a></div>
    <div class=\"col-xs-2 content have-add\">已添加</div>
  </li>

  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 20
            echo "    <div class=\"empty\">一道题都没有</div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "  ";
        echo $context["web_macro"]->getpaginator((isset($context["paginator"]) ? $context["paginator"] : null));
        echo "


";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Marker:question-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 22,  73 => 20,  63 => 15,  59 => 14,  55 => 13,  47 => 9,  43 => 8,  29 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% import "TopxiaWebBundle::macro.html.twig" as web_macro %}*/
/*   {% for question in questions %} */
/*   <li class="row item-lesson {% if question.exist|default(false) %}disdrag {% else %} drag {% endif %}" id="" question-id="{{question.id}}">*/
/*     <div class="col-md-6 col-sm-10 title">*/
/*       <div class="before">*/
/*         <span class="icon-drag glyphicon glyphicon-move mrm "></span>*/
/*         <span class="number"><span class="num">1</span>.</span>*/
/*         {% if question.includeImg %}<span class="glyphicon glyphicon-picture"></span>{% endif %}*/
/*         {{question.stem|fill_question_stem_text|plain_text(12) }}*/
/*       </div>*/
/*       <i class="icon-close es-icon es-icon-icon_close_circle"></i>*/
/*     </div>*/
/*     <div class="col-md-3 content">{{ dict('questionType')[question.type] }}</div>*/
/*     <div class="col-md-1 content">{{ dict('difficulty')[question.difficulty] }}</div>*/
/*     <div class="col-xs-2 content not-add"><a href="javascript:;" class="marker-preview" data-url="{{ path('course_manage_question_preview', {id:question.id, courseId:course.id}) }}">预览</a></div>*/
/*     <div class="col-xs-2 content have-add">已添加</div>*/
/*   </li>*/
/* */
/*   {% else %}*/
/*     <div class="empty">一道题都没有</div>*/
/*   {% endfor %}*/
/*   {{ web_macro.paginator(paginator) }}*/
/* */
/* */
/* */
