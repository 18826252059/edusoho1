<?php

/* ClassroomBundle:ClassroomManage:student.html.twig */
class __TwigTemplate_7b058537a2e42385dcb4754da180b6d3311079a68a07417468c4f6dea2d716e0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClassroomBundle:ClassroomManage:students.html.twig", "ClassroomBundle:ClassroomManage:student.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'maincontent' => array($this, 'block_maincontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ClassroomBundle:ClassroomManage:students.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["submenu"] = "student";
        // line 7
        $context["script_controller"] = "classroombundle/controller/classroom/students";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "学员管理 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_maincontent($context, array $blocks = array())
    {
        // line 10
        echo "
  <form class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate>
    <div class=\"form-group\">
      <input class=\"form-control \" type=\"text\" placeholder=\"请输入用户名\" name=\"nickName\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "nickName"), "method"), "html", null, true);
        echo "\">
      <button class=\"btn btn-primary\">搜索</button>
    </div>
  </form>
  <table class=\"table table-striped\" id=\"course-student-list\">
    <thead>
      <tr>
        <th width=\"40%\">学员</th>
        <th width=\"30%\">学习进度</th>
        <th width=\"30%\">操作</th>
      </tr>
    </thead>
    <tbody>
      ";
        // line 26
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
            // line 27
            echo "        ";
            $context["user"] = $this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["student"], "userId", array()), array(), "array");
            // line 28
            echo "        ";
            $context["progress"] = $this->getAttribute((isset($context["progresses"]) ? $context["progresses"] : null), $this->getAttribute($context["student"], "userId", array()), array(), "array");
            // line 29
            echo "        ";
            $this->loadTemplate("ClassroomBundle:ClassroomManage:tr.html.twig", "ClassroomBundle:ClassroomManage:student.html.twig", 29)->display($context);
            // line 30
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
            // line 31
            echo "        <tr class=\"empty\"><td colspan=\"20\">无学员记录</td></tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "    </tbody>
  </table>

  ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomManage:student.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 36,  112 => 33,  105 => 31,  92 => 30,  89 => 29,  86 => 28,  83 => 27,  65 => 26,  49 => 13,  44 => 10,  41 => 9,  34 => 3,  30 => 1,  28 => 7,  26 => 5,  11 => 1,);
    }
}
/*   {% extends 'ClassroomBundle:ClassroomManage:students.html.twig' %}*/
/* */
/* {% block title %}学员管理 - {{ parent() }}{% endblock %}*/
/* */
/* {% set submenu = 'student' %}*/
/* */
/* {% set script_controller = 'classroombundle/controller/classroom/students' %}*/
/* */
/* {% block maincontent %}*/
/* */
/*   <form class="form-inline well well-sm" action="" method="get" novalidate>*/
/*     <div class="form-group">*/
/*       <input class="form-control " type="text" placeholder="请输入用户名" name="nickName" value="{{ app.request.get('nickName') }}">*/
/*       <button class="btn btn-primary">搜索</button>*/
/*     </div>*/
/*   </form>*/
/*   <table class="table table-striped" id="course-student-list">*/
/*     <thead>*/
/*       <tr>*/
/*         <th width="40%">学员</th>*/
/*         <th width="30%">学习进度</th>*/
/*         <th width="30%">操作</th>*/
/*       </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*       {% for student in students %}*/
/*         {% set user = users[student.userId] %}*/
/*         {% set progress = progresses[student.userId] %}*/
/*         {% include 'ClassroomBundle:ClassroomManage:tr.html.twig' %}*/
/*       {% else %}*/
/*         <tr class="empty"><td colspan="20">无学员记录</td></tr>*/
/*       {% endfor %}*/
/*     </tbody>*/
/*   </table>*/
/* */
/*   {{ web_macro.paginator(paginator) }}*/
/* */
/* {% endblock %}*/
