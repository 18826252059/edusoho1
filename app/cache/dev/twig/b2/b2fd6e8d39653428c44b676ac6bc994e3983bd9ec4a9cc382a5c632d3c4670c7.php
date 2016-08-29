<?php

/* TopxiaAdminBundle:LiveCourse:index.html.twig */
class __TwigTemplate_f5f3d9f4466ef348c89185171dd43da1d76fe4723fd45b85a1cc2c086d128eb9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:LiveCourse:index.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["menu"] = "admin_live_course";
        // line 5
        $context["script_controller"] = "course/live-lesson-search";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
";
        // line 9
        if (($this->env->getExtension('topxia_web_twig')->getSetting("course.live_course_enabled") == 1)) {
            // line 10
            echo "
  ";
            // line 11
            $this->loadTemplate("TopxiaAdminBundle:LiveCourse:tab.html.twig", "TopxiaAdminBundle:LiveCourse:index.html.twig", 11)->display($context);
            // line 12
            echo "  <br>
  <form id=\"message-search-form\" class=\"form-inline well well-sm mtl\" action=\" ";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_live_course", array("status" => (isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")))), "html", null, true);
            echo "\" method=\"get\" novalidate>
    <div class=\"form-group\">
      <select class=\"form-control\" name=\"keywordType\">
        ";
            // line 16
            echo $this->env->getExtension('topxia_html_twig')->selectOptions(array("courseTitle" => "课程名", "lessonTitle" => "课时名"), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "keywordType"), "method"));
            echo "
      </select>
    </div>
    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" placeholder=\"关键词\" name=\"keyword\" value=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "keyword"), "method"), "html", null, true);
            echo "\">
    </div>
    <div class=\"form-group\">
    直播开始时间:
    <input class=\"form-control\" type=\"text\" id=\"startDate\" name=\"startDateTime\" placeholder=\"开始时间\" value=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "startDateTime"), "method"), "html", null, true);
            echo "\">
    <div class=\"form-group\">-</div>
    <input class=\"form-control\" type=\"text\" id=\"endDate\" name=\"endDateTime\" placeholder=\"结束时间\" value=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "endDateTime"), "method"), "html", null, true);
            echo "\">
    </div>
    <button class=\"btn btn-primary\">搜索</button>
  </form>
  <input type=\"hidden\" id=\"status\" value=\"";
            // line 30
            echo twig_escape_filter($this->env, (isset($context["status"]) ? $context["status"] : $this->getContext($context, "status")), "html", null, true);
            echo "\">
  <table class=\"table table-striped table-hover\" id=\"course-table\">
    <thead>
    <tr>
      <th width=\"45%\">课时</th>
      <th>直播开始时间</th>
      <th>直播时长(分)</th>
      <th>最大参与人数</th>
      ";
            // line 39
            echo "    </tr>
    </thead>
    <tbody>
      ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["lessons"]) ? $context["lessons"] : $this->getContext($context, "lessons")));
            $context['_iterated'] = false;
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["lesson"]) {
                // line 43
                echo "        ";
                $context["course"] = (($this->getAttribute((isset($context["courses"]) ? $context["courses"] : null), $this->getAttribute($context["lesson"], "courseId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courses"]) ? $context["courses"] : null), $this->getAttribute($context["lesson"], "courseId", array()), array(), "array"), null)) : (null));
                // line 44
                echo "        ";
                $this->loadTemplate("TopxiaAdminBundle:LiveCourse:tr.html.twig", "TopxiaAdminBundle:LiveCourse:index.html.twig", 44)->display($context);
                // line 45
                echo "      ";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            if (!$context['_iterated']) {
                // line 46
                echo "        <tr><td colspan=\"20\"><div class=\"empty\">暂无直播</div></td></tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lesson'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "    </tbody>
  </table>

  ";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
            echo "
";
        } else {
            // line 53
            echo "<div class=\"well\" style=\"text-align:center;\">


直播功能未开启，请先在<a href=\"";
            // line 56
            echo $this->env->getExtension('routing')->getPath("admin_setting_live_course_setting");
            echo "\"> 系统-课程设置-直播 </a>中设置开启

</div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:LiveCourse:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 56,  151 => 53,  146 => 51,  141 => 48,  134 => 46,  121 => 45,  118 => 44,  115 => 43,  97 => 42,  92 => 39,  81 => 30,  74 => 26,  69 => 24,  62 => 20,  55 => 16,  49 => 13,  46 => 12,  44 => 11,  41 => 10,  39 => 9,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set menu = 'admin_live_course' %}*/
/* */
/* {% set script_controller = 'course/live-lesson-search' %}*/
/* */
/* {% block main %}*/
/* */
/* {% if setting("course.live_course_enabled") == 1 %}*/
/* */
/*   {% include 'TopxiaAdminBundle:LiveCourse:tab.html.twig' %}*/
/*   <br>*/
/*   <form id="message-search-form" class="form-inline well well-sm mtl" action=" {{ path('admin_live_course', {status:status}) }}" method="get" novalidate>*/
/*     <div class="form-group">*/
/*       <select class="form-control" name="keywordType">*/
/*         {{ select_options({courseTitle:'课程名', lessonTitle: '课时名'}, app.request.get('keywordType')) }}*/
/*       </select>*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <input class="form-control" type="text" placeholder="关键词" name="keyword" value="{{ app.request.get('keyword') }}">*/
/*     </div>*/
/*     <div class="form-group">*/
/*     直播开始时间:*/
/*     <input class="form-control" type="text" id="startDate" name="startDateTime" placeholder="开始时间" value="{{ app.request.get('startDateTime') }}">*/
/*     <div class="form-group">-</div>*/
/*     <input class="form-control" type="text" id="endDate" name="endDateTime" placeholder="结束时间" value="{{ app.request.get('endDateTime') }}">*/
/*     </div>*/
/*     <button class="btn btn-primary">搜索</button>*/
/*   </form>*/
/*   <input type="hidden" id="status" value="{{status}}">*/
/*   <table class="table table-striped table-hover" id="course-table">*/
/*     <thead>*/
/*     <tr>*/
/*       <th width="45%">课时</th>*/
/*       <th>直播开始时间</th>*/
/*       <th>直播时长(分)</th>*/
/*       <th>最大参与人数</th>*/
/*       {# <th>直播在线人数峰值</th> #}*/
/*     </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*       {% for lesson in lessons %}*/
/*         {% set course = courses[lesson.courseId]|default(null) %}*/
/*         {% include 'TopxiaAdminBundle:LiveCourse:tr.html.twig' %}*/
/*       {% else %}*/
/*         <tr><td colspan="20"><div class="empty">暂无直播</div></td></tr>*/
/*       {% endfor %}*/
/*     </tbody>*/
/*   </table>*/
/* */
/*   {{ web_macro.paginator(paginator) }}*/
/* {% else %}*/
/* <div class="well" style="text-align:center;">*/
/* */
/* */
/* 直播功能未开启，请先在<a href="{{ path('admin_setting_live_course_setting') }}"> 系统-课程设置-直播 </a>中设置开启*/
/* */
/* </div>*/
/* {% endif %}*/
/* {% endblock %}*/
