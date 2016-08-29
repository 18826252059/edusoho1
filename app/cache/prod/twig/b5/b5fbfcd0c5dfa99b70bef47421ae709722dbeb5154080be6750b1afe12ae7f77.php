<?php

/* TopxiaWebBundle:Course:progress-block.html.twig */
class __TwigTemplate_aeead569a400303faae6b1eefcbb25202063aa5c70d01fad49dc369474ed9e06 extends Twig_Template
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
        echo "<div class=\"panel panel-default\">
  <div class=\"panel-heading\"><h3 class=\"panel-title\">学习进度</h3></div>
  <div class=\"panel-body\">
    <div class=\"progress\">
      <div class=\"progress-bar\" style=\"width: ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["progress"]) ? $context["progress"] : null), "percent", array()), "html", null, true);
        echo ";\"></div>
    </div>
    <div class=\"clearfix\">
      ";
        // line 8
        if (($this->getAttribute((isset($context["progress"]) ? $context["progress"] : null), "percent", array()) == "100%")) {
            // line 9
            echo "        <button class=\"btn btn-default btn-sm disabled pull-right\">您已完成全部课时的学习</button>
      ";
        } else {
            // line 11
            echo "        ";
            if ((isset($context["nextLearnLesson"]) ? $context["nextLearnLesson"] : null)) {
                // line 12
                echo "          <a class=\"btn btn-primary btn-sm pull-right\" id=\"next-learn-btn\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_learn", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "#lesson/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nextLearnLesson"]) ? $context["nextLearnLesson"] : null), "id", array()), "html", null, true);
                echo "\" title=\"继续学习：";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nextLearnLesson"]) ? $context["nextLearnLesson"] : null), "title", array()), "html", null, true);
                echo "\">继续学习</a>
        ";
            }
            // line 14
            echo "      ";
        }
        // line 15
        echo "
      <span class=\"text-muted\">已学: <strong class=\"text-success\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["progress"]) ? $context["progress"] : null), "number", array()), "html", null, true);
        echo "</strong> / <strong>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["progress"]) ? $context["progress"] : null), "total", array()), "html", null, true);
        echo "</strong></span>

      ";
        // line 18
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "giveCredit", array()) > 0)) {
            // line 19
            echo "        <span class=\"text-muted mlm\">获得学分：<strong class=\"text-success\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "credit", array()), "html", null, true);
            echo "</strong> / <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "giveCredit", array()), "html", null, true);
            echo "</strong></span>
      ";
        }
        // line 21
        echo "
      ";
        // line 22
        if (( !(($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "deadline", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "deadline", array()), 0)) : (0)) == 0)) {
            // line 23
            echo "        <br>
        <span class=\"text-muted\">有效期： <strong class=\"text-success\" title=\"从 ";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "createdTime", array()), "Y-m-d H:i"), "html", null, true);
            echo " 到 ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "deadline", array()), "Y-m-d H:i"), "html", null, true);
            echo "\">还有";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->remainTimeFilter($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "deadline", array())), "html", null, true);
            echo "</strong></span>
      ";
        }
        // line 26
        echo "
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:progress-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 26,  81 => 24,  78 => 23,  76 => 22,  73 => 21,  65 => 19,  63 => 18,  56 => 16,  53 => 15,  50 => 14,  40 => 12,  37 => 11,  33 => 9,  31 => 8,  25 => 5,  19 => 1,);
    }
}
/* <div class="panel panel-default">*/
/*   <div class="panel-heading"><h3 class="panel-title">学习进度</h3></div>*/
/*   <div class="panel-body">*/
/*     <div class="progress">*/
/*       <div class="progress-bar" style="width: {{ progress.percent }};"></div>*/
/*     </div>*/
/*     <div class="clearfix">*/
/*       {% if progress.percent == '100%' %}*/
/*         <button class="btn btn-default btn-sm disabled pull-right">您已完成全部课时的学习</button>*/
/*       {% else %}*/
/*         {% if nextLearnLesson %}*/
/*           <a class="btn btn-primary btn-sm pull-right" id="next-learn-btn" href="{{ path('course_learn', {id:course.id}) }}#lesson/{{nextLearnLesson.id}}" title="继续学习：{{ nextLearnLesson.title }}">继续学习</a>*/
/*         {% endif %}*/
/*       {% endif %}*/
/* */
/*       <span class="text-muted">已学: <strong class="text-success">{{ progress.number }}</strong> / <strong>{{ progress.total }}</strong></span>*/
/* */
/*       {% if course.giveCredit >0 %}*/
/*         <span class="text-muted mlm">获得学分：<strong class="text-success">{{ member.credit }}</strong> / <strong>{{ course.giveCredit }}</strong></span>*/
/*       {% endif %}*/
/* */
/*       {% if not member.deadline|default(0) == 0 %}*/
/*         <br>*/
/*         <span class="text-muted">有效期： <strong class="text-success" title="从 {{ member.createdTime|date('Y-m-d H:i') }} 到 {{ member.deadline|date('Y-m-d H:i') }}">还有{{ member.deadline|remain_time }}</strong></span>*/
/*       {% endif %}*/
/* */
/*     </div>*/
/*   </div>*/
/* </div>*/
