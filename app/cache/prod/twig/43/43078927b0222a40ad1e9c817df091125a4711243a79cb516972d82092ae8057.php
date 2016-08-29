<?php

/* TopxiaWebBundle:CourseStudentManage:index.html.twig */
class __TwigTemplate_ef1b8af8183273716f72ad92432f26767bc5dc0fca1b22ebab879645f72abf14 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:CourseManage:layout.html.twig", "TopxiaWebBundle:CourseStudentManage:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:CourseManage:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["side_nav"] = "students";
        // line 6
        $context["script_controller"] = "course-manage/students";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
        } else {
            echo "学员";
        }
        echo "管理 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "
<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading\">
    ";
        // line 12
        if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
        } else {
            echo "学员";
        }
        echo "管理
    ";
        // line 13
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "isAdmin", array(), "method") || $this->env->getExtension('topxia_web_twig')->getSetting("course.teacher_export_student", false))) {
            // line 14
            echo "      <a class=\"btn btn-info btn-sm pull-right mhs\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_student_export_csv", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-export\"></i> 导出";
            if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
            } else {
                echo "学员";
            }
            echo "</a>
    ";
        }
        // line 16
        echo "    ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "isAdmin", array(), "method") || ((isset($context["isTeacherAuthManageStudent"]) ? $context["isTeacherAuthManageStudent"] : null) == 1))) {
            // line 17
            echo "      <a class=\"btn btn-info pull-right btn-sm mhs\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_student_import", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-import\"></i> 批量导入</a>
      <button class=\"btn btn-info btn-sm pull-right mhs\" id=\"student-add-btn\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_student_create", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-plus\"></i> 添加";
            if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
            } else {
                echo "学员";
            }
            echo "</button>
    ";
        }
        // line 20
        echo "  </div>
  
  <div class=\"panel-body\">  
    <form class=\"form-inline well well-sm \" action=\"\" method=\"get\" novalidate>
      <div class=\"form-group\">
        <input class=\"form-control \" type=\"text\" placeholder=\"请输入用户名\" name=\"nickname\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "nickname"), "method"), "html", null, true);
        echo "\">

        <button class=\"btn btn-primary\">搜索</button>
      </div>
      <div class=\"clearfix\"></div>
    </form>
    <table class=\"table table-striped\" id=\"course-student-list\">
      <thead>
        <tr>
          <th width=\"40%\">";
        // line 34
        if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
        } else {
            echo "学员";
        }
        echo "</th>
          <th width=\"30%\">学习进度</th>
          <th width=\"30%\">操作</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["students"]) ? $context["students"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            // line 41
            echo "          ";
            $context["user"] = $this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["student"], "userId", array()), array(), "array");
            // line 42
            echo "          ";
            $context["progress"] = $this->getAttribute((isset($context["progresses"]) ? $context["progresses"] : null), $this->getAttribute($context["student"], "userId", array()), array(), "array");
            // line 43
            echo "          ";
            $context["isFollowing"] = twig_in_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), (isset($context["followingIds"]) ? $context["followingIds"] : null));
            // line 44
            echo "          ";
            $this->loadTemplate("TopxiaWebBundle:CourseStudentManage:tr.html.twig", "TopxiaWebBundle:CourseStudentManage:index.html.twig", 44)->display($context);
            // line 45
            echo "        ";
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
            echo "          <tr class=\"empty\"><td colspan=\"20\">无";
            if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
            } else {
                echo "学员";
            }
            echo "记录</td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "      </tbody>
    </table>
    ";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseStudentManage:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 50,  183 => 48,  170 => 46,  157 => 45,  154 => 44,  151 => 43,  148 => 42,  145 => 41,  127 => 40,  114 => 34,  102 => 25,  95 => 20,  84 => 18,  79 => 17,  76 => 16,  64 => 14,  62 => 13,  54 => 12,  49 => 9,  46 => 8,  34 => 3,  30 => 1,  28 => 6,  26 => 5,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:CourseManage:layout.html.twig' %}*/
/* */
/* {% block title %}{% if setting('default.user_name') %}{{setting('default.user_name')|default('学员')}}{% else %}学员{% endif %}管理 - {{ parent() }}{% endblock %}*/
/* */
/* {% set side_nav = 'students' %}*/
/* {% set script_controller = 'course-manage/students' %}*/
/* */
/* {% block main %}*/
/* */
/* <div class="panel panel-default panel-col">*/
/*   <div class="panel-heading">*/
/*     {% if setting('default.user_name') %}{{setting('default.user_name')|default('学员')}}{% else %}学员{% endif %}管理*/
/*     {% if app.user.isAdmin() or setting('course.teacher_export_student', false) %}*/
/*       <a class="btn btn-info btn-sm pull-right mhs" href="{{ path('course_manage_student_export_csv', {id:course.id}) }}"><i class="glyphicon glyphicon-export"></i> 导出{% if setting('default.user_name') %}{{setting('default.user_name')|default('学员')}}{% else %}学员{% endif %}</a>*/
/*     {% endif %}*/
/*     {% if app.user.isAdmin() or isTeacherAuthManageStudent == 1 %}*/
/*       <a class="btn btn-info pull-right btn-sm mhs" href="{{ path('course_manage_student_import', {id:course.id}) }}"><i class="glyphicon glyphicon-import"></i> 批量导入</a>*/
/*       <button class="btn btn-info btn-sm pull-right mhs" id="student-add-btn" data-toggle="modal" data-target="#modal" data-url="{{ path('course_manage_student_create', {id:course.id}) }}"><i class="glyphicon glyphicon-plus"></i> 添加{% if setting('default.user_name') %}{{setting('default.user_name')|default('学员')}}{% else %}学员{% endif %}</button>*/
/*     {% endif %}*/
/*   </div>*/
/*   */
/*   <div class="panel-body">  */
/*     <form class="form-inline well well-sm " action="" method="get" novalidate>*/
/*       <div class="form-group">*/
/*         <input class="form-control " type="text" placeholder="请输入用户名" name="nickname" value="{{ app.request.get('nickname') }}">*/
/* */
/*         <button class="btn btn-primary">搜索</button>*/
/*       </div>*/
/*       <div class="clearfix"></div>*/
/*     </form>*/
/*     <table class="table table-striped" id="course-student-list">*/
/*       <thead>*/
/*         <tr>*/
/*           <th width="40%">{% if setting('default.user_name') %}{{setting('default.user_name')|default('学员')}}{% else %}学员{% endif %}</th>*/
/*           <th width="30%">学习进度</th>*/
/*           <th width="30%">操作</th>*/
/*         </tr>*/
/*       </thead>*/
/*       <tbody>*/
/*         {% for student in students %}*/
/*           {% set user = users[student.userId] %}*/
/*           {% set progress = progresses[student.userId] %}*/
/*           {% set isFollowing = user.id in followingIds %}*/
/*           {% include 'TopxiaWebBundle:CourseStudentManage:tr.html.twig' %}*/
/*         {% else %}*/
/*           <tr class="empty"><td colspan="20">无{% if setting('default.user_name') %}{{setting('default.user_name')|default('学员')}}{% else %}学员{% endif %}记录</td></tr>*/
/*         {% endfor %}*/
/*       </tbody>*/
/*     </table>*/
/*     {{ web_macro.paginator(paginator) }}*/
/*   </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
