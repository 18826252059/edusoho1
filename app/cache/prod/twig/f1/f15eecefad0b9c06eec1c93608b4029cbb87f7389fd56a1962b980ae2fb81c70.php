<?php

/* TopxiaAdminBundle:CourseThread:index.html.twig */
class __TwigTemplate_3c4c1960e9cf25131bc24d63f64fe9a0b79f60bb6a263f9600c57ce4201f1e12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:CourseThread:index.html.twig", 1);
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
        $context["script_controller"] = "course/threads";
        // line 5
        $context["menu"] = "admin_course_thread_manage";
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
      <select class=\"form-control\" name=\"type\">
        ";
        // line 13
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getDict("threadType"), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "type"), "method"), "帖子类型");
        echo "
      </select>
    </div>
    
    <span class=\"divider\"></span>

    <div class=\"form-group\">
      <select class=\"form-control\" name=\"threadType\">
        ";
        // line 21
        echo $this->env->getExtension('topxia_html_twig')->selectOptions(array("isStick" => "置顶", "isElite" => "加精"), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "threadType"), "method"), "属性");
        echo "
      </select>
    </div>

    <span class=\"divider\"></span>

    <div class=\"form-group\">
      <select class=\"form-control\" name=\"keywordType\">
        ";
        // line 29
        echo $this->env->getExtension('topxia_html_twig')->selectOptions(array("title" => "标题", "content" => "内容", "courseId" => "课程编号", "courseTitle" => "课程名"), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "keywordType"), "method"));
        echo "
      </select>
    </div>

    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" placeholder=\"关键词\" name=\"keyword\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "keyword"), "method"), "html", null, true);
        echo "\">
    </div>

    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" placeholder=\"作者\" name=\"author\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "author"), "method"), "html", null, true);
        echo "\">
    </div>

    <button class=\"btn btn-primary\" type=\"submit\">搜索</button>
  </form>
</div>

  <div id=\"thread-table-container\">
    <table class=\"table table-striped table-hover\">
      <thead>
        <tr>
          <th width=\"5%\"><input type=\"checkbox\" data-role=\"batch-select\"></th>
          <th width=\"50%\">帖子</th>
          <th width=\"10%\">回复/查看</th>
          <th width=\"10%\">属性</th>
          <th width=\"15%\">作者</th>
          <th width=\"10%\">操作</th>
        </tr>
      </thead>
      <body>
        ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["threads"]) ? $context["threads"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["thread"]) {
            // line 59
            echo "          ";
            $context["author"] = (($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["thread"], "userId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["thread"], "userId", array()), array(), "array"), null)) : (null));
            // line 60
            echo "          ";
            $context["course"] = (($this->getAttribute((isset($context["courses"]) ? $context["courses"] : null), $this->getAttribute($context["thread"], "courseId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courses"]) ? $context["courses"] : null), $this->getAttribute($context["thread"], "courseId", array()), array(), "array"), null)) : (null));
            // line 61
            echo "          ";
            $context["lesson"] = (($this->getAttribute((isset($context["lessons"]) ? $context["lessons"] : null), $this->getAttribute($context["thread"], "lessonId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["lessons"]) ? $context["lessons"] : null), $this->getAttribute($context["thread"], "lessonId", array()), array(), "array"), null)) : (null));
            // line 62
            echo "          <tr data-role=\"item\">
            <td><input value=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["thread"], "id", array()), "html", null, true);
            echo "\" type=\"checkbox\" data-role=\"batch-item\"> </td>
            <td>
              ";
            // line 65
            if (($this->getAttribute($context["thread"], "type", array()) == "question")) {
                // line 66
                echo "                <span class=\"label label-info\">问</span>
              ";
            }
            // line 68
            echo "
              <a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_thread_show", array("courseId" => $this->getAttribute($context["thread"], "courseId", array()), "threadId" => $this->getAttribute($context["thread"], "id", array()))), "html", null, true);
            echo "\" target=\"_blank\"><strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["thread"], "title", array()), "html", null, true);
            echo "</strong></a>

              <div class=\"short-long-text\">
                <div class=\"short-text text-sm text-muted\">";
            // line 72
            echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($context["thread"], "content", array()), 60);
            echo " <span class=\"trigger\">(展开)</span></div>
                <div class=\"long-text\">";
            // line 73
            echo $this->getAttribute($context["thread"], "content", array());
            echo " <span class=\"trigger\">(收起)</span></div>
              </div>
              
              <div class=\"text-sm mts\">
                ";
            // line 77
            if ((isset($context["course"]) ? $context["course"] : null)) {
                // line 78
                echo "                  <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\" class=\"text-success\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
                echo "</a>
                  ";
                // line 79
                if ((isset($context["lesson"]) ? $context["lesson"] : null)) {
                    // line 80
                    echo "                    <span class=\"text-muted mhs\">&raquo;</span>
                    <a class=\"text-success\"  href=\"";
                    // line 81
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
                // line 83
                echo "                ";
            }
            // line 84
            echo "              </div>
            </td>
            <td><span class=\"text-sm\">";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["thread"], "postNum", array()), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["thread"], "hitNum", array()), "html", null, true);
            echo "</span></td>
            <td>
              ";
            // line 88
            if ((isset($context["course"]) ? $context["course"] : null)) {
                // line 89
                echo "                <a href=\"javascript:;\" data-set-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_thread_elite", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "id" => $this->getAttribute($context["thread"], "id", array()))), "html", null, true);
                echo "\" data-cancel-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_thread_unelite", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "id" => $this->getAttribute($context["thread"], "id", array()))), "html", null, true);
                echo "\" class=\"promoted-label\">
                  <span class=\"label ";
                // line 90
                if ($this->getAttribute($context["thread"], "isElite", array())) {
                    echo "label-success";
                } else {
                    echo "label-default";
                }
                echo "\">精</span>
                </a>
              
                <a href=\"javascript:;\" data-set-url=\"";
                // line 93
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_thread_stick", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "id" => $this->getAttribute($context["thread"], "id", array()))), "html", null, true);
                echo "\" data-cancel-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_thread_unstick", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "id" => $this->getAttribute($context["thread"], "id", array()))), "html", null, true);
                echo "\" class=\"promoted-label\">
                  <span class=\"label ";
                // line 94
                if ($this->getAttribute($context["thread"], "isStick", array())) {
                    echo "label-success";
                } else {
                    echo "label-default";
                }
                echo "\">顶</span>
                </a>
              ";
            }
            // line 97
            echo "            </td>
            <td>
              ";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : null), "user_link", array(0 => (isset($context["author"]) ? $context["author"] : null)), "method"), "html", null, true);
            echo " <br />
              <span class=\"text-muted text-sm\">";
            // line 100
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["thread"], "createdTime", array()), "Y-n-d H:i:s"), "html", null, true);
            echo "</span>
            </td>
            <td>
              <div class=\"btn-group\">
                <a href=\"javascript:;\" data-role=\"item-delete\" data-url=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_thread_delete", array("id" => $this->getAttribute($context["thread"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default btn-sm\" 
                data-name=\"帖子\" >删除</a>
              </div>
            </td>
          </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 110
            echo "          <tr><td colspan=\"20\"><div class=\"empty\">暂无帖子记录</div></td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thread'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "      </body>
    </table>

    <div class=\"mbm\">
        <label class=\"checkbox-inline\"><input type=\"checkbox\" data-role=\"batch-select\"> 全选</label>
        <button class=\"btn btn-default btn-sm mlm\" data-role=\"batch-delete\" data-name=\"帖子\" data-url=\"";
        // line 117
        echo $this->env->getExtension('routing')->getPath("admin_thread_batch_delete");
        echo "\">删除</button>
    </div>

  </div>
    
  ";
        // line 122
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:CourseThread:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  275 => 122,  267 => 117,  260 => 112,  253 => 110,  242 => 104,  235 => 100,  231 => 99,  227 => 97,  217 => 94,  211 => 93,  201 => 90,  194 => 89,  192 => 88,  185 => 86,  181 => 84,  178 => 83,  167 => 81,  164 => 80,  162 => 79,  155 => 78,  153 => 77,  146 => 73,  142 => 72,  134 => 69,  131 => 68,  127 => 66,  125 => 65,  120 => 63,  117 => 62,  114 => 61,  111 => 60,  108 => 59,  103 => 58,  80 => 38,  73 => 34,  65 => 29,  54 => 21,  43 => 13,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set script_controller = 'course/threads' %}*/
/* */
/* {% set menu = 'admin_course_thread_manage' %}*/
/* */
/* {% block main %}*/
/* */
/* <div class="well well-sm">*/
/*   <form class="form-inline">*/
/*     <div class="form-group">*/
/*       <select class="form-control" name="type">*/
/*         {{ select_options(dict('threadType'), app.request.get('type'), '帖子类型') }}*/
/*       </select>*/
/*     </div>*/
/*     */
/*     <span class="divider"></span>*/
/* */
/*     <div class="form-group">*/
/*       <select class="form-control" name="threadType">*/
/*         {{ select_options({isStick:'置顶', isElite: '加精'}, app.request.get('threadType'), '属性') }}*/
/*       </select>*/
/*     </div>*/
/* */
/*     <span class="divider"></span>*/
/* */
/*     <div class="form-group">*/
/*       <select class="form-control" name="keywordType">*/
/*         {{ select_options({title:'标题', content: '内容', courseId:'课程编号', courseTitle:'课程名'}, app.request.get('keywordType')) }}*/
/*       </select>*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*       <input class="form-control" type="text" placeholder="关键词" name="keyword" value="{{ app.request.get('keyword') }}">*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*       <input class="form-control" type="text" placeholder="作者" name="author" value="{{ app.request.get('author') }}">*/
/*     </div>*/
/* */
/*     <button class="btn btn-primary" type="submit">搜索</button>*/
/*   </form>*/
/* </div>*/
/* */
/*   <div id="thread-table-container">*/
/*     <table class="table table-striped table-hover">*/
/*       <thead>*/
/*         <tr>*/
/*           <th width="5%"><input type="checkbox" data-role="batch-select"></th>*/
/*           <th width="50%">帖子</th>*/
/*           <th width="10%">回复/查看</th>*/
/*           <th width="10%">属性</th>*/
/*           <th width="15%">作者</th>*/
/*           <th width="10%">操作</th>*/
/*         </tr>*/
/*       </thead>*/
/*       <body>*/
/*         {% for thread in threads %}*/
/*           {% set author = users[thread.userId]|default(null) %}*/
/*           {% set course = courses[thread.courseId]|default(null) %}*/
/*           {% set lesson = lessons[thread.lessonId]|default(null) %}*/
/*           <tr data-role="item">*/
/*             <td><input value="{{thread.id}}" type="checkbox" data-role="batch-item"> </td>*/
/*             <td>*/
/*               {% if thread.type == 'question' %}*/
/*                 <span class="label label-info">问</span>*/
/*               {% endif %}*/
/* */
/*               <a href="{{ path('course_thread_show', {courseId:thread.courseId, threadId:thread.id}) }}" target="_blank"><strong>{{ thread.title }}</strong></a>*/
/* */
/*               <div class="short-long-text">*/
/*                 <div class="short-text text-sm text-muted">{{ thread.content|plain_text(60) }} <span class="trigger">(展开)</span></div>*/
/*                 <div class="long-text">{{ thread.content|raw }} <span class="trigger">(收起)</span></div>*/
/*               </div>*/
/*               */
/*               <div class="text-sm mts">*/
/*                 {% if course %}*/
/*                   <a href="{{ path('course_show', {id:course.id}) }}" class="text-success" target="_blank">{{ course.title }}</a>*/
/*                   {% if lesson %}*/
/*                     <span class="text-muted mhs">&raquo;</span>*/
/*                     <a class="text-success"  href="{{ path('course_learn', {id:lesson.courseId}) }}#lesson/{{lesson.id}}" target="_blank">课时{{lesson.number}}：{{ lesson.title }}</a>*/
/*                   {% endif %}*/
/*                 {% endif %}*/
/*               </div>*/
/*             </td>*/
/*             <td><span class="text-sm">{{ thread.postNum }} / {{ thread.hitNum }}</span></td>*/
/*             <td>*/
/*               {% if course %}*/
/*                 <a href="javascript:;" data-set-url="{{ path('course_thread_elite', {courseId:course.id, id:thread.id}) }}" data-cancel-url="{{ path('course_thread_unelite', {courseId:course.id, id:thread.id}) }}" class="promoted-label">*/
/*                   <span class="label {% if thread.isElite %}label-success{% else %}label-default{% endif %}">精</span>*/
/*                 </a>*/
/*               */
/*                 <a href="javascript:;" data-set-url="{{ path('course_thread_stick', {courseId:course.id, id:thread.id}) }}" data-cancel-url="{{ path('course_thread_unstick', {courseId:course.id, id:thread.id}) }}" class="promoted-label">*/
/*                   <span class="label {% if thread.isStick %}label-success{% else %}label-default{% endif %}">顶</span>*/
/*                 </a>*/
/*               {% endif %}*/
/*             </td>*/
/*             <td>*/
/*               {{ admin_macro.user_link(author) }} <br />*/
/*               <span class="text-muted text-sm">{{ thread.createdTime|date('Y-n-d H:i:s') }}</span>*/
/*             </td>*/
/*             <td>*/
/*               <div class="btn-group">*/
/*                 <a href="javascript:;" data-role="item-delete" data-url="{{ path('admin_thread_delete', {id:thread.id}) }}" class="btn btn-default btn-sm" */
/*                 data-name="帖子" >删除</a>*/
/*               </div>*/
/*             </td>*/
/*           </tr>*/
/*         {% else %}*/
/*           <tr><td colspan="20"><div class="empty">暂无帖子记录</div></td></tr>*/
/*         {% endfor %}*/
/*       </body>*/
/*     </table>*/
/* */
/*     <div class="mbm">*/
/*         <label class="checkbox-inline"><input type="checkbox" data-role="batch-select"> 全选</label>*/
/*         <button class="btn btn-default btn-sm mlm" data-role="batch-delete" data-name="帖子" data-url="{{ path('admin_thread_batch_delete') }}">删除</button>*/
/*     </div>*/
/* */
/*   </div>*/
/*     */
/*   {{ web_macro.paginator(paginator) }}*/
/* {% endblock %}*/
/* */
