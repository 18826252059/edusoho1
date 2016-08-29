<?php

/* TopxiaWebBundle:MyTeaching:teaching.html.twig */
class __TwigTemplate_49839d26123230374812c762a8252666fc3ccd522fd349974889291f43982847 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:My:layout.html.twig", "TopxiaWebBundle:MyTeaching:teaching.html.twig", 1);
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
        $context["side_nav"] = "my-teaching-courses";
        // line 7
        $context["type"] = "question";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "在教课程 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        // line 11
        echo "<div class=\"panel panel-default panel-col lesson-manage-panel\">
  <div class=\"panel-heading\">
    <span class=\"pull-right\">
      <a id=\"create-course\" href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("course_create");
        echo "\" class=\"btn btn-info btn-sm\"><span class=\"glyphicon glyphicon-plus\"></span> 创建课程</a>
      ";
        // line 15
        if ((isset($context["live_course_enabled"]) ? $context["live_course_enabled"] : null)) {
            // line 16
            echo "        <a id=\"create-course\" href=\"";
            echo $this->env->getExtension('routing')->getPath("course_create", array("flag" => "isLive"));
            echo "\" class=\"btn btn-info btn-sm\"><span class=\"glyphicon glyphicon-plus\"></span> 创建直播课程</a>
      ";
        }
        // line 18
        echo "    </span>
    在教课程
  </div>

  <div class=\"panel-body\">

    ";
        // line 24
        $this->loadTemplate("TopxiaWebBundle:MyTeaching:course-tab.html.twig", "TopxiaWebBundle:MyTeaching:teaching.html.twig", 24)->display($context);
        // line 25
        echo "
    <table class=\"table table-striped table-hover\" id=\"course-table\" style=\"word-break:break-all;\">
      <thead>
      <tr>
        <th width=\"50%\">名称</th>
        ";
        // line 30
        if (((isset($context["filter"]) ? $context["filter"] : null) == "classroom")) {
            // line 31
            echo "        <th >所属";
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "</th>
        ";
        } else {
            // line 33
            echo "        <th>";
            if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
            } else {
                echo "学员";
            }
            echo "数</th>
        <th>价格(元)</th>
        ";
        }
        // line 36
        echo "        <th>状态</th>
        <th width=\"20%\">操作</th>
      </tr>
      </thead>
      <tbody>
        ";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 42
            echo "          <tr>
            <td>

              <a class=\"pull-left mrm\" href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
            echo "\">
                <img class=\"course-picture\" src=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($context["course"], "middlePicture", array()), "course.png"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
            echo "\" width=\"100\">
              </a>

              <div class=\"mlm\">
                <a href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
            echo "</a>
                
                ";
            // line 52
            if (($this->getAttribute($context["course"], "type", array()) == "live")) {
                // line 53
                echo "                  <span class=\"label label-success live-label\">直播</span>
                ";
            }
            // line 55
            echo "
                ";
            // line 56
            if (((isset($context["filter"]) ? $context["filter"] : null) == "classroom")) {
                echo " 
                  ";
                // line 57
                $context["classroom"] = (($this->getAttribute((isset($context["classrooms"]) ? $context["classrooms"] : null), $this->getAttribute($context["course"], "id", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["classrooms"]) ? $context["classrooms"] : null), $this->getAttribute($context["course"], "id", array()), array(), "array"), null)) : (null));
                // line 58
                echo "                  ";
                if ( !(isset($context["classroom"]) ? $context["classroom"] : null)) {
                    // line 59
                    echo "                    <span class=\"label label-danger live-label mls\">已移除</span>
                  ";
                }
                // line 61
                echo "                ";
            }
            // line 62
            echo "              </div>

            </td>
            ";
            // line 65
            if (((isset($context["filter"]) ? $context["filter"] : null) == "classroom")) {
                // line 66
                echo "            <td>
              ";
                // line 67
                $context["classroom"] = (($this->getAttribute((isset($context["classrooms"]) ? $context["classrooms"] : null), $this->getAttribute($context["course"], "id", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["classrooms"]) ? $context["classrooms"] : null), $this->getAttribute($context["course"], "id", array()), array(), "array"), null)) : (null));
                // line 68
                echo "              ";
                if ((isset($context["classroom"]) ? $context["classroom"] : null)) {
                    echo " 
                <a href=\"";
                    // line 69
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "classroomId", array()))), "html", null, true);
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "classroomTitle", array()), "html", null, true);
                    echo "</a>
              ";
                }
                // line 71
                echo "            </td>
            ";
            } else {
                // line 73
                echo "            <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "studentNum", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "price", array()), "html", null, true);
                echo "</td>
            ";
            }
            // line 76
            echo "            <td>";
            echo $this->env->getExtension('topxia_web_twig')->getDictText("courseStatus:html", $this->getAttribute($context["course"], "status", array()));
            echo "</td>
            <td>
              <div class=\"btn-group\">
                <a class=\"btn btn-default btn-sm\" href=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
            echo "\">管理</a>

                <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
                  <span class=\"caret\"></span>
                </a>
                <ul class=\"dropdown-menu pull-right\">
                  <li><a href=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_lesson", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
            echo "\">课时管理</a></li>
                  <li><a href=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_files", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
            echo "\">文件管理</a></li>
                  <li><a href=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_students", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
            echo "\">";
            if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
            } else {
                echo "学员";
            }
            echo "管理</a></li>
                </ul>
              </div>

            </td>
          </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 94
            echo "          <tr><td colspan=\"20\">暂无在教的课程</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "      </tbody>
    </table>
    <nav class=\"text-center\">
      ";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
    </nav> 
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyTeaching:teaching.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 99,  246 => 96,  239 => 94,  221 => 87,  217 => 86,  213 => 85,  204 => 79,  197 => 76,  192 => 74,  187 => 73,  183 => 71,  176 => 69,  171 => 68,  169 => 67,  166 => 66,  164 => 65,  159 => 62,  156 => 61,  152 => 59,  149 => 58,  147 => 57,  143 => 56,  140 => 55,  136 => 53,  134 => 52,  127 => 50,  118 => 46,  114 => 45,  109 => 42,  104 => 41,  97 => 36,  86 => 33,  80 => 31,  78 => 30,  71 => 25,  69 => 24,  61 => 18,  55 => 16,  53 => 15,  49 => 14,  44 => 11,  41 => 9,  34 => 3,  30 => 1,  28 => 7,  26 => 5,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:My:layout.html.twig' %}*/
/* */
/* {% block title %}在教课程 - {{ parent() }}{% endblock %}*/
/* */
/* {% set side_nav = 'my-teaching-courses' %}*/
/* */
/* {% set type="question" %}*/
/* */
/* {% block main %}*/
/* {# <div class="panel panel-default panel-col"> #}*/
/* <div class="panel panel-default panel-col lesson-manage-panel">*/
/*   <div class="panel-heading">*/
/*     <span class="pull-right">*/
/*       <a id="create-course" href="{{ path('course_create') }}" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-plus"></span> 创建课程</a>*/
/*       {% if live_course_enabled %}*/
/*         <a id="create-course" href="{{ path('course_create',{flag:'isLive'}) }}" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-plus"></span> 创建直播课程</a>*/
/*       {% endif %}*/
/*     </span>*/
/*     在教课程*/
/*   </div>*/
/* */
/*   <div class="panel-body">*/
/* */
/*     {% include 'TopxiaWebBundle:MyTeaching:course-tab.html.twig'%}*/
/* */
/*     <table class="table table-striped table-hover" id="course-table" style="word-break:break-all;">*/
/*       <thead>*/
/*       <tr>*/
/*         <th width="50%">名称</th>*/
/*         {% if filter == 'classroom' %}*/
/*         <th >所属{{setting("classroom.name")|default("班级")}}</th>*/
/*         {% else %}*/
/*         <th>{% if setting('default.user_name') %}{{setting('default.user_name')|default('学员')}}{% else %}学员{% endif %}数</th>*/
/*         <th>价格(元)</th>*/
/*         {% endif %}*/
/*         <th>状态</th>*/
/*         <th width="20%">操作</th>*/
/*       </tr>*/
/*       </thead>*/
/*       <tbody>*/
/*         {% for course in courses %}*/
/*           <tr>*/
/*             <td>*/
/* */
/*               <a class="pull-left mrm" href="{{ path('course_show', {id:course.id}) }}">*/
/*                 <img class="course-picture" src="{{ filepath(course.middlePicture, 'course.png') }}" alt="{{ course.title }}" width="100">*/
/*               </a>*/
/* */
/*               <div class="mlm">*/
/*                 <a href="{{ path('course_show', {id:course.id}) }}">{{ course.title }}</a>*/
/*                 */
/*                 {% if course.type == 'live' %}*/
/*                   <span class="label label-success live-label">直播</span>*/
/*                 {% endif  %}*/
/* */
/*                 {% if filter == 'classroom' %} */
/*                   {% set classroom = classrooms[course.id]|default(null) %}*/
/*                   {% if not classroom %}*/
/*                     <span class="label label-danger live-label mls">已移除</span>*/
/*                   {% endif %}*/
/*                 {% endif %}*/
/*               </div>*/
/* */
/*             </td>*/
/*             {% if filter == 'classroom' %}*/
/*             <td>*/
/*               {% set classroom = classrooms[course.id]|default(null) %}*/
/*               {% if classroom %} */
/*                 <a href="{{path('classroom_show',{id:classroom.classroomId})}}" target="_blank">{{classroom.classroomTitle}}</a>*/
/*               {% endif %}*/
/*             </td>*/
/*             {% else %}*/
/*             <td>{{ course.studentNum }}</td>*/
/*             <td>{{ course.price }}</td>*/
/*             {% endif %}*/
/*             <td>{{ dict_text('courseStatus:html', course.status) }}</td>*/
/*             <td>*/
/*               <div class="btn-group">*/
/*                 <a class="btn btn-default btn-sm" href="{{ path('course_manage', {id:course.id}) }}">管理</a>*/
/* */
/*                 <a href="#" type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">*/
/*                   <span class="caret"></span>*/
/*                 </a>*/
/*                 <ul class="dropdown-menu pull-right">*/
/*                   <li><a href="{{ path('course_manage_lesson', {id:course.id}) }}">课时管理</a></li>*/
/*                   <li><a href="{{ path('course_manage_files', {id:course.id}) }}">文件管理</a></li>*/
/*                   <li><a href="{{ path('course_manage_students', {id:course.id}) }}">{% if setting('default.user_name') %}{{setting('default.user_name')|default('学员')}}{% else %}学员{% endif %}管理</a></li>*/
/*                 </ul>*/
/*               </div>*/
/* */
/*             </td>*/
/*           </tr>*/
/*         {% else %}*/
/*           <tr><td colspan="20">暂无在教的课程</td></tr>*/
/*         {% endfor %}*/
/*       </tbody>*/
/*     </table>*/
/*     <nav class="text-center">*/
/*       {{ web_macro.paginator(paginator) }}*/
/*     </nav> */
/*   </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
