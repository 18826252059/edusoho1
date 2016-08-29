<?php

/* TopxiaAdminBundle:System:jobs.html.twig */
class __TwigTemplate_12d271669796213f1f078fd719db6535652497771e0ccc96087f5cd97c5478ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:System:jobs.html.twig", 1);
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
        $context["menu"] = "admin_jobs";
        // line 5
        $context["script_controller"] = "job/list";
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"well well-sm form-inline\">

  <div class=\"form-group\">
    <input type=\"text\" id=\"nextExcutedStartTime\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "nextExcutedStartTime"), "method"), "html", null, true);
        echo "\" name=\"nextExcutedStartTime\" class=\"form-control\" placeholder=\"下一次执行时间范围\" style=\"width:160px;\">
  </div>

  <div class=\"form-group\">
    <input type=\"text\" id=\"nextExcutedEndTime\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "nextExcutedEndTime"), "method"), "html", null, true);
        echo "\" name=\"nextExcutedEndTime\" class=\"form-control\" placeholder=\"下一次执行时间范围\" style=\"width:160px;\">
  </div>


  <div class=\"form-group\">
    <input type=\"text\" id=\"name\" name=\"name\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "name"), "method"), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"任务名称\" style=\"width:100px;\">
  </div>

  <div class=\"form-group\">
    <select class=\"form-control\" name=\"cycle\">
        ";
        // line 28
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getDict("jobCycle"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "cycle"), "method"), "--执行周期--");
        echo "
    </select>
  </div>

  <button class=\"btn btn-primary\">搜索</button>

</form>

  <table class=\"table table-hover\" id=\"log-table\">
    <tr>
      <th width=\"5%\">编号</th>
      <th width=\"20%\">任务名称</th>
      <th width=\"20%\">任务对象</th>
      <th width=\"10%\">执行周期</th>
      <th width=\"20%\">下一次执行时间</th>
      <th width=\"20%\">创建时间</th>
    </tr>
    ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["jobs"]) ? $context["jobs"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["job"]) {
            // line 46
            echo "      <tr>
        <td>
          ";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "id", array()), "html", null, true);
            echo "
        </td>
        <td>
          ";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["job"], "name", array()), "html", null, true);
            echo "
        </td>
        <td width=\"20%\">
          ";
            // line 54
            if (($this->getAttribute($context["job"], "targetType", array()) == "course")) {
                // line 55
                echo "            ";
                $context["course"] = $this->env->getExtension('topxia_data_twig')->getData("Course", array("courseId" => $this->getAttribute($context["job"], "targetId", array())));
                // line 56
                echo "            课程：《<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\" target='_blank'>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
                echo "</a>》
          ";
            } elseif (($this->getAttribute(            // line 57
$context["job"], "targetType", array()) == "classroom")) {
                // line 58
                echo "            ";
                $context["classroom"] = $this->env->getExtension('topxia_data_twig')->getData("Classroom", array("classroomId" => $this->getAttribute($context["job"], "targetId", array())));
                // line 59
                echo "            班级：《<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
                echo "\" target='_blank'>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "title", array()), "html", null, true);
                echo "</a>》
          ";
            } elseif (($this->getAttribute(            // line 60
$context["job"], "targetType", array()) == "lesson")) {
                // line 61
                echo "            ";
                $context["lesson"] = $this->env->getExtension('topxia_data_twig')->getData("CourseLesson", array("lessonId" => $this->getAttribute($context["job"], "targetId", array())));
                // line 62
                echo "            ";
                $context["course"] = $this->env->getExtension('topxia_data_twig')->getData("Course", array("courseId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "courseId", array())));
                // line 63
                echo "            课程：《<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\" target='_blank'>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
                echo "</a>》,课时：";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "title", array()), "html", null, true);
                echo "
          ";
            } else {
                // line 64
                echo "--";
            }
            // line 65
            echo "        </td>
        <td>
          ";
            // line 67
            echo $this->env->getExtension('topxia_web_twig')->getDictText("jobCycle", $this->getAttribute($context["job"], "cycle", array()));
            echo "
        </td>
        <td>
          ";
            // line 70
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["job"], "nextExcutedTime", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "
        </td>
        <td>
          ";
            // line 73
            if ($this->getAttribute($context["job"], "createdTime", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["job"], "createdTime", array()), "Y-m-d H:i:s"), "html", null, true);
            } else {
                echo "--";
            }
            // line 74
            echo "        </td>
      </tr>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 77
            echo "      <tr><td class=\"empty\" colspan=\"20\">无定时任务记录</tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['job'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "  </table>

  ";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:jobs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  196 => 81,  192 => 79,  185 => 77,  178 => 74,  172 => 73,  166 => 70,  160 => 67,  156 => 65,  153 => 64,  143 => 63,  140 => 62,  137 => 61,  135 => 60,  128 => 59,  125 => 58,  123 => 57,  116 => 56,  113 => 55,  111 => 54,  105 => 51,  99 => 48,  95 => 46,  90 => 45,  70 => 28,  62 => 23,  54 => 18,  47 => 14,  39 => 9,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set menu = 'admin_jobs' %}*/
/* */
/* {% set script_controller = 'job/list' %}*/
/* */
/* {% block main %}*/
/* */
/* {{ web_macro.flash_messages() }}*/
/* */
/* <form class="well well-sm form-inline">*/
/* */
/*   <div class="form-group">*/
/*     <input type="text" id="nextExcutedStartTime" value="{{app.request.query.get('nextExcutedStartTime')}}" name="nextExcutedStartTime" class="form-control" placeholder="下一次执行时间范围" style="width:160px;">*/
/*   </div>*/
/* */
/*   <div class="form-group">*/
/*     <input type="text" id="nextExcutedEndTime" value="{{app.request.query.get('nextExcutedEndTime')}}" name="nextExcutedEndTime" class="form-control" placeholder="下一次执行时间范围" style="width:160px;">*/
/*   </div>*/
/* */
/* */
/*   <div class="form-group">*/
/*     <input type="text" id="name" name="name" value="{{app.request.query.get('name')}}" class="form-control" placeholder="任务名称" style="width:100px;">*/
/*   </div>*/
/* */
/*   <div class="form-group">*/
/*     <select class="form-control" name="cycle">*/
/*         {{ select_options(dict('jobCycle'), app.request.query.get('cycle'), '--执行周期--') }}*/
/*     </select>*/
/*   </div>*/
/* */
/*   <button class="btn btn-primary">搜索</button>*/
/* */
/* </form>*/
/* */
/*   <table class="table table-hover" id="log-table">*/
/*     <tr>*/
/*       <th width="5%">编号</th>*/
/*       <th width="20%">任务名称</th>*/
/*       <th width="20%">任务对象</th>*/
/*       <th width="10%">执行周期</th>*/
/*       <th width="20%">下一次执行时间</th>*/
/*       <th width="20%">创建时间</th>*/
/*     </tr>*/
/*     {% for job in jobs %}*/
/*       <tr>*/
/*         <td>*/
/*           {{ job.id }}*/
/*         </td>*/
/*         <td>*/
/*           {{ job.name }}*/
/*         </td>*/
/*         <td width="20%">*/
/*           {% if job.targetType == 'course' %}*/
/*             {% set course = data('Course',{courseId:job.targetId}) %}*/
/*             课程：《<a href="{{path('course_show', {id:course.id})}}" target='_blank'>{{course.title}}</a>》*/
/*           {% elseif job.targetType == 'classroom' %}*/
/*             {% set classroom = data('Classroom',{classroomId:job.targetId}) %}*/
/*             班级：《<a href="{{path('classroom_show', {id:classroom.id})}}" target='_blank'>{{classroom.title}}</a>》*/
/*           {% elseif job.targetType == 'lesson' %}*/
/*             {% set lesson = data('CourseLesson',{lessonId:job.targetId}) %}*/
/*             {% set course = data('Course',{courseId:lesson.courseId}) %}*/
/*             课程：《<a href="{{path('course_show', {id:course.id})}}" target='_blank'>{{course.title}}</a>》,课时：{{lesson.title}}*/
/*           {% else %}--{% endif %}*/
/*         </td>*/
/*         <td>*/
/*           {{ dict_text('jobCycle',job.cycle) }}*/
/*         </td>*/
/*         <td>*/
/*           {{ job.nextExcutedTime|date('Y-m-d H:i:s') }}*/
/*         </td>*/
/*         <td>*/
/*           {% if job.createdTime %}{{ job.createdTime|date('Y-m-d H:i:s') }}{% else %}--{% endif %}*/
/*         </td>*/
/*       </tr>*/
/*     {% else %}*/
/*       <tr><td class="empty" colspan="20">无定时任务记录</tr>*/
/*     {% endfor %}*/
/*   </table>*/
/* */
/*   {{ web_macro.paginator(paginator) }}*/
/* */
/* {% endblock %}*/
