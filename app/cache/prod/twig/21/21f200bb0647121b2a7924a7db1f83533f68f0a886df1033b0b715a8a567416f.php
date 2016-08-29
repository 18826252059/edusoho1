<?php

/* TopxiaAdminBundle:CourseNote:index.html.twig */
class __TwigTemplate_25d102277fbdcda70ca075c9b0e67227c46ef7bf4542ff822e5551af4ac257a2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:CourseNote:index.html.twig", 1);
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
        $context["menu"] = "admin_course_note";
        // line 5
        $context["script_controller"] = "course/note";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
<div class=\"well well-sm\">
  <form class=\"form-inline\">

    <div class=\"form-group\">
      <select class=\"form-control\" name=\"keywordType\">
        ";
        // line 14
        echo $this->env->getExtension('topxia_html_twig')->selectOptions(array("content" => "内容", "courseId" => "课程编号", "courseTitle" => "课程名"), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "keywordType"), "method"));
        echo "
      </select>
    </div>

    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" name=\"keyword\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "keyword"), "method"), "html", null, true);
        echo "\" placeholder=\"关键词\">
    </div>

    <span class=\"divider\"></span>

    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" name=\"author\" value=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "author"), "method"), "html", null, true);
        echo "\" placeholder=\"作者\">
    </div>

    <button class=\"btn btn-primary\" type=\"submit\">搜索</button>
  </form>
</div>

<div id=\"note-table-container\">

  <table class=\"table table-striped table-hover\" id=\"note-table\">

    <thead>
      <tr>
        <th width=\"3%\"><input type=\"checkbox\" data-role=\"batch-select\"></th>
        <th width=\"75%\">内容</th>
        <th width=\"15%\">作者</th>
        <th width=\"7%\">操作</th>
      </tr>
    </thead>

    <tbody>

      ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["notes"]) ? $context["notes"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["note"]) {
            // line 48
            echo "        ";
            $context["course"] = (($this->getAttribute((isset($context["courses"]) ? $context["courses"] : null), $this->getAttribute($context["note"], "courseId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courses"]) ? $context["courses"] : null), $this->getAttribute($context["note"], "courseId", array()), array(), "array"), null)) : (null));
            // line 49
            echo "        ";
            $context["lesson"] = (($this->getAttribute((isset($context["lessons"]) ? $context["lessons"] : null), $this->getAttribute($context["note"], "lessonId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["lessons"]) ? $context["lessons"] : null), $this->getAttribute($context["note"], "lessonId", array()), array(), "array"), null)) : (null));
            // line 50
            echo "        <tr data-role=\"item\">
          <td><input value=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["note"], "id", array()), "html", null, true);
            echo "\" type=\"checkbox\"  data-role=\"batch-item\" ></td>
          <td>
              <div class=\"short-long-text\">
                <div class=\"short-text\">";
            // line 54
            echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($context["note"], "content", array()), 100);
            echo " <span class=\"trigger\">(展开)</span></div>
                <div class=\"long-text\">";
            // line 55
            echo $this->getAttribute($context["note"], "content", array());
            echo " <span class=\"trigger\">(收起)</span></div>
              </div>

              <div class=\"text-sm mts\">
                ";
            // line 59
            if ((isset($context["course"]) ? $context["course"] : null)) {
                // line 60
                echo "                  <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\" class=\"text-success\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
                echo "</a>
                  ";
                // line 61
                if ((isset($context["lesson"]) ? $context["lesson"] : null)) {
                    // line 62
                    echo "                    <span class=\"text-muted mhs\">&raquo;</span>
                    <a class=\"text-success\"  href=\"";
                    // line 63
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_learn", array("id" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "courseId", array()))), "html", null, true);
                    echo "#lesson/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()), "html", null, true);
                    echo "\" target=\"_blank\">课时";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "number", array()), "html", null, true);
                    echo "：";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "title", array()), "html", null, true);
                    echo "</a>

                  ";
                }
                // line 66
                echo "                ";
            }
            // line 67
            echo "              </div>
          </td>
          <td>
            ";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : null), "user_link", array(0 => $this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["note"], "userId", array()), array(), "array")), "method"), "html", null, true);
            echo "
            <br>
            <span class=\"text-muted text-sm\">";
            // line 72
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["note"], "createdTime", array()), "Y-n-d H:i"), "html", null, true);
            echo "</span>
          </td>
          <td>
            <button class=\"btn btn-default btn-sm\" data-role=\"item-delete\" data-name=\"笔记\" data-url=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_note_delete", array("id" => $this->getAttribute($context["note"], "id", array()))), "html", null, true);
            echo "\">删除</button>
          </td>
        </tr>
      ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 79
            echo "        <tr><td colspan=\"20\"><div class=\"empty\">暂无笔记记录</div></td></tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['note'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        echo "    </tbody>
  </table>

  <div>
    <label class=\"checkbox-inline\"><input type=\"checkbox\" data-role=\"batch-select\"> 全选</label>
    <button class=\"btn btn-default btn-sm mlm\" data-role=\"batch-delete\"  data-name=\"笔记\" data-url=\"";
        // line 86
        echo $this->env->getExtension('routing')->getPath("admin_note_batch_delete");
        echo "\">删除</button>
  </div>

</div>

  <div>
    ";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
  </div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:CourseNote:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 92,  185 => 86,  178 => 81,  171 => 79,  162 => 75,  156 => 72,  151 => 70,  146 => 67,  143 => 66,  131 => 63,  128 => 62,  126 => 61,  119 => 60,  117 => 59,  110 => 55,  106 => 54,  100 => 51,  97 => 50,  94 => 49,  91 => 48,  86 => 47,  61 => 25,  52 => 19,  44 => 14,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set menu = 'admin_course_note' %}*/
/* */
/* {% set script_controller = 'course/note' %}*/
/* */
/* {% block main %}*/
/* */
/* <div class="well well-sm">*/
/*   <form class="form-inline">*/
/* */
/*     <div class="form-group">*/
/*       <select class="form-control" name="keywordType">*/
/*         {{ select_options({content: '内容', courseId:'课程编号', courseTitle:'课程名' }, app.request.get('keywordType')) }}*/
/*       </select>*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*       <input class="form-control" type="text" name="keyword" value="{{ app.request.get('keyword') }}" placeholder="关键词">*/
/*     </div>*/
/* */
/*     <span class="divider"></span>*/
/* */
/*     <div class="form-group">*/
/*       <input class="form-control" type="text" name="author" value="{{ app.request.get('author') }}" placeholder="作者">*/
/*     </div>*/
/* */
/*     <button class="btn btn-primary" type="submit">搜索</button>*/
/*   </form>*/
/* </div>*/
/* */
/* <div id="note-table-container">*/
/* */
/*   <table class="table table-striped table-hover" id="note-table">*/
/* */
/*     <thead>*/
/*       <tr>*/
/*         <th width="3%"><input type="checkbox" data-role="batch-select"></th>*/
/*         <th width="75%">内容</th>*/
/*         <th width="15%">作者</th>*/
/*         <th width="7%">操作</th>*/
/*       </tr>*/
/*     </thead>*/
/* */
/*     <tbody>*/
/* */
/*       {% for note in notes %}*/
/*         {% set course = courses[note.courseId]|default(null) %}*/
/*         {% set lesson = lessons[note.lessonId]|default(null) %}*/
/*         <tr data-role="item">*/
/*           <td><input value="{{note.id}}" type="checkbox"  data-role="batch-item" ></td>*/
/*           <td>*/
/*               <div class="short-long-text">*/
/*                 <div class="short-text">{{ note.content|plain_text(100) }} <span class="trigger">(展开)</span></div>*/
/*                 <div class="long-text">{{ note.content|raw }} <span class="trigger">(收起)</span></div>*/
/*               </div>*/
/* */
/*               <div class="text-sm mts">*/
/*                 {% if course %}*/
/*                   <a href="{{ path('course_show', {id:course.id}) }}" class="text-success" target="_blank">{{ course.title }}</a>*/
/*                   {% if lesson %}*/
/*                     <span class="text-muted mhs">&raquo;</span>*/
/*                     <a class="text-success"  href="{{ path('course_learn', {id:lesson.courseId}) }}#lesson/{{lesson.id}}" target="_blank">课时{{lesson.number}}：{{ lesson.title }}</a>*/
/* */
/*                   {% endif %}*/
/*                 {% endif %}*/
/*               </div>*/
/*           </td>*/
/*           <td>*/
/*             {{ admin_macro.user_link(users[note.userId]) }}*/
/*             <br>*/
/*             <span class="text-muted text-sm">{{ note.createdTime|date('Y-n-d H:i') }}</span>*/
/*           </td>*/
/*           <td>*/
/*             <button class="btn btn-default btn-sm" data-role="item-delete" data-name="笔记" data-url="{{ path('admin_note_delete', {id:note.id}) }}">删除</button>*/
/*           </td>*/
/*         </tr>*/
/*       {% else %}*/
/*         <tr><td colspan="20"><div class="empty">暂无笔记记录</div></td></tr>*/
/*       {% endfor %}*/
/*     </tbody>*/
/*   </table>*/
/* */
/*   <div>*/
/*     <label class="checkbox-inline"><input type="checkbox" data-role="batch-select"> 全选</label>*/
/*     <button class="btn btn-default btn-sm mlm" data-role="batch-delete"  data-name="笔记" data-url="{{ path('admin_note_batch_delete') }}">删除</button>*/
/*   </div>*/
/* */
/* </div>*/
/* */
/*   <div>*/
/*     {{ web_macro.paginator(paginator) }}*/
/*   </div>*/
/* {% endblock %} */
