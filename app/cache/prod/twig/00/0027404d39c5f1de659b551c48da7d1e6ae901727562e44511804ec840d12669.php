<?php

/* TopxiaWebBundle:LiveCourse:index.html.twig */
class __TwigTemplate_2d70a7270929ce85adccd58a25f50b03aeb75dd8bb6512d3ef1abf99bb852f60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:LiveCourse:layout.html.twig", "TopxiaWebBundle:LiveCourse:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'live_main' => array($this, 'block_live_main'),
            'live_side' => array($this, 'block_live_side'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:LiveCourse:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["script_controller"] = "live-course/index";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "直播 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_live_main($context, array $blocks = array())
    {
        // line 8
        echo "
  ";
        // line 9
        if (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "currentPage", array()) == 1)) {
            // line 10
            echo "    <div class=\"homepage-feature homepage-feature-slides mbl\">
      <div class=\"cycle-pager\"></div>
      \t";
            // line 12
            echo $this->env->getExtension('topxia_block_twig')->showBlock("live_top_banner");
            echo "
    </div>
  ";
        }
        // line 15
        echo "
  <div class=\"panel panel-default\">
    <div class=\"panel-heading\">
      <h3 class=\"panel-title\">近期直播</h3>
    </div>
    <div class=\"panel-body\">
      ";
        // line 21
        if ((isset($context["recentCourses"]) ? $context["recentCourses"] : null)) {
            // line 22
            echo "        ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:LiveCourse:coursesBlock", array("courses" => (isset($context["recentCourses"]) ? $context["recentCourses"] : null), "view" => "list")));
            echo "
      ";
        } else {
            // line 24
            echo "        <div class=\"empty\">近期还没有直播</div>
      ";
        }
        // line 26
        echo "
      ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
    </div>
  </div>

";
    }

    // line 33
    public function block_live_side($context, array $blocks = array())
    {
        // line 34
        echo "
  <div class=\"panel panel-default\">
    <div class=\"panel-heading\">
      <h3 class=\"panel-title\">最新上线</h3>
    </div>
    <div class=\"panel-body\">
      <ul class=\"media-list media-list-rank\">
        ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liveCourses"]) ? $context["liveCourses"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 42
            echo "        <li class=\"media\">
          <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
            echo "\" class=\"pull-left\">
            <img src=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($context["course"], "smallPicture", array()), "course.png"), "html", null, true);
            echo "\" class=\"media-object\" width=\"96\" height=\"54\">
          </a>
          <div class=\"media-body\">
            <h5 class=\"media-heading\"><a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
            echo "</a></h5>
            ";
            // line 48
            $context["teacher"] = (($this->getAttribute((isset($context["users"]) ? $context["users"] : null), twig_first($this->env, $this->getAttribute($context["course"], "teacherIds", array())), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["users"]) ? $context["users"] : null), twig_first($this->env, $this->getAttribute($context["course"], "teacherIds", array())), array(), "array"), null)) : (null));
            // line 49
            echo "            ";
            if ((isset($context["teacher"]) ? $context["teacher"] : null)) {
                // line 50
                echo "              <p>
              <span class=\"glyphicon glyphicon-user text-muted\"></span>
                <a class=\"text-muted\" href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "nickname", array()), "html", null, true);
                echo "</a>
              </p>
            ";
            }
            // line 55
            echo "          </div>
        </li>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 58
            echo "          <li class=\"empty\">还没有发布的直播课程</li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "      </ul>
    </div>
  </div>

  ";
        // line 64
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:LiveCourse:ratingCoursesBlock"));
        echo "

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:LiveCourse:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 64,  157 => 60,  150 => 58,  143 => 55,  135 => 52,  131 => 50,  128 => 49,  126 => 48,  120 => 47,  114 => 44,  110 => 43,  107 => 42,  102 => 41,  93 => 34,  90 => 33,  81 => 27,  78 => 26,  74 => 24,  68 => 22,  66 => 21,  58 => 15,  52 => 12,  48 => 10,  46 => 9,  43 => 8,  40 => 7,  33 => 3,  29 => 1,  27 => 5,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:LiveCourse:layout.html.twig' %}*/
/* */
/* {% block title %}直播 - {{ parent() }}{% endblock %}*/
/* */
/* {% set script_controller = 'live-course/index' %}*/
/* */
/* {% block live_main %}*/
/* */
/*   {% if paginator.currentPage == 1 %}*/
/*     <div class="homepage-feature homepage-feature-slides mbl">*/
/*       <div class="cycle-pager"></div>*/
/*       	{{ block_show('live_top_banner') }}*/
/*     </div>*/
/*   {% endif  %}*/
/* */
/*   <div class="panel panel-default">*/
/*     <div class="panel-heading">*/
/*       <h3 class="panel-title">近期直播</h3>*/
/*     </div>*/
/*     <div class="panel-body">*/
/*       {% if recentCourses %}*/
/*         {{ render(controller('TopxiaWebBundle:LiveCourse:coursesBlock', {courses:recentCourses, view: 'list'})) }}*/
/*       {% else %}*/
/*         <div class="empty">近期还没有直播</div>*/
/*       {% endif %}*/
/* */
/*       {{ web_macro.paginator(paginator) }}*/
/*     </div>*/
/*   </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block live_side %}*/
/* */
/*   <div class="panel panel-default">*/
/*     <div class="panel-heading">*/
/*       <h3 class="panel-title">最新上线</h3>*/
/*     </div>*/
/*     <div class="panel-body">*/
/*       <ul class="media-list media-list-rank">*/
/*         {% for course in liveCourses %}*/
/*         <li class="media">*/
/*           <a href="{{ path('course_show', {id:course.id}) }}" class="pull-left">*/
/*             <img src="{{ filepath(course.smallPicture, 'course.png') }}" class="media-object" width="96" height="54">*/
/*           </a>*/
/*           <div class="media-body">*/
/*             <h5 class="media-heading"><a href="{{ path('course_show', {id:course.id}) }}">{{ course.title }}</a></h5>*/
/*             {% set teacher = users[course.teacherIds|first]|default(null) %}*/
/*             {% if teacher %}*/
/*               <p>*/
/*               <span class="glyphicon glyphicon-user text-muted"></span>*/
/*                 <a class="text-muted" href="{{ path('user_show', {id:teacher.id}) }}">{{ teacher.nickname }}</a>*/
/*               </p>*/
/*             {% endif %}*/
/*           </div>*/
/*         </li>*/
/*         {% else %}*/
/*           <li class="empty">还没有发布的直播课程</li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   </div>*/
/* */
/*   {{ render(controller('TopxiaWebBundle:LiveCourse:ratingCoursesBlock')) }}*/
/* */
/* {% endblock %}*/
/* */
