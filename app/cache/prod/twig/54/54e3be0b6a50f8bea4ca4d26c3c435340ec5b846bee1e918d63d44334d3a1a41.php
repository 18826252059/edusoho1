<?php

/* TopxiaWebBundle:MyLiveCourse:index.html.twig */
class __TwigTemplate_cc2f0cf32ca3eb37795d75a1f4e5c3f2cc34ea77b352a3587fe3d666df932ccd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:My:layout.html.twig", "TopxiaWebBundle:MyLiveCourse:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:My:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["side_nav"] = "my-learning-live";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "我的直播课表 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
  <div class=\"panel panel-default panel-col\">
      <div class=\"panel-heading\">我的直播课表</span></div>
      <div class=\"panel-body\">
        ";
        // line 12
        if ((isset($context["courses"]) ? $context["courses"] : null)) {
            // line 13
            echo "          <ul class=\"course-wide-list live-course-list\">
          ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                // line 15
                echo "          ";
                $context["lesson"] = $this->getAttribute($context["course"], "lesson", array(), "array");
                // line 16
                echo "            <li class=\"course-item clearfix\">
              <a class=\"course-picture-link\" href=\"";
                // line 17
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
                echo "\">
                <img class=\"course-picture\" src=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($context["course"], "middlePicture", array()), "course.png"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
                echo "\">
              </a>
              <div class=\"course-body\">
                <h4 class=\"course-title\"><a href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
                echo "</a>
                  ";
                // line 22
                if (($this->getAttribute($context["course"], "serializeMode", array()) == "serialize")) {
                    // line 23
                    echo "                    <span class=\"label label-success \">更新中</span>
                  ";
                } elseif (($this->getAttribute(                // line 24
$context["course"], "serializeMode", array()) == "finished")) {
                    // line 25
                    echo "                    <span class=\"label label-warning \">已完结</span>
                  ";
                }
                // line 27
                echo "                </h4>
                <div class=\"course-about ellipsis\">";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "subtitle", array()), "html", null, true);
                echo "</div>
                <div class=\"live-course-lesson mtm\">
                  <span class=\"text-success fsl mrl\">";
                // line 30
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "startTime", array()), "n月j日 H:i"), "html", null, true);
                echo " ~ ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "endTime", array()), "H:i"), "html", null, true);
                echo "</span>
                  <span class=\"text-muted fsl mrl\">第";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "number", array()), "html", null, true);
                echo "课时</span>
                </div>
              </div>
          </li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "        </ul>
        ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
            echo "        
      ";
        } else {
            // line 39
            echo "          <div class=\"empty\">没有等待开始的直播课</div>
      ";
        }
        // line 41
        echo "      </div>
  </div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyLiveCourse:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 41,  125 => 39,  120 => 37,  117 => 36,  106 => 31,  100 => 30,  95 => 28,  92 => 27,  88 => 25,  86 => 24,  83 => 23,  81 => 22,  75 => 21,  67 => 18,  63 => 17,  60 => 16,  57 => 15,  53 => 14,  50 => 13,  48 => 12,  42 => 8,  39 => 7,  32 => 3,  28 => 1,  26 => 5,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:My:layout.html.twig' %}*/
/* */
/* {% block title %}我的直播课表 - {{ parent() }}{% endblock %}*/
/* */
/* {% set side_nav = 'my-learning-live' %}*/
/* */
/* {% block main %}*/
/* */
/*   <div class="panel panel-default panel-col">*/
/*       <div class="panel-heading">我的直播课表</span></div>*/
/*       <div class="panel-body">*/
/*         {% if courses %}*/
/*           <ul class="course-wide-list live-course-list">*/
/*           {% for course in courses %}*/
/*           {% set lesson = course['lesson'] %}*/
/*             <li class="course-item clearfix">*/
/*               <a class="course-picture-link" href="{{ path('course_show', {id:course.id}) }}">*/
/*                 <img class="course-picture" src="{{ filepath(course.middlePicture, 'course.png') }}" alt="{{ course.title }}">*/
/*               </a>*/
/*               <div class="course-body">*/
/*                 <h4 class="course-title"><a href="{{ path('course_show', {id:course.id}) }}">{{ course.title }}</a>*/
/*                   {% if course.serializeMode=='serialize' %}*/
/*                     <span class="label label-success ">更新中</span>*/
/*                   {% elseif course.serializeMode=='finished' %}*/
/*                     <span class="label label-warning ">已完结</span>*/
/*                   {% endif %}*/
/*                 </h4>*/
/*                 <div class="course-about ellipsis">{{ course.subtitle }}</div>*/
/*                 <div class="live-course-lesson mtm">*/
/*                   <span class="text-success fsl mrl">{{ lesson.startTime|date('n月j日 H:i') }} ~ {{ lesson.endTime|date('H:i') }}</span>*/
/*                   <span class="text-muted fsl mrl">第{{ lesson.number }}课时</span>*/
/*                 </div>*/
/*               </div>*/
/*           </li>*/
/*           {% endfor %}*/
/*         </ul>*/
/*         {{ web_macro.paginator(paginator) }}        */
/*       {% else %}*/
/*           <div class="empty">没有等待开始的直播课</div>*/
/*       {% endif %}*/
/*       </div>*/
/*   </div>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/* */
