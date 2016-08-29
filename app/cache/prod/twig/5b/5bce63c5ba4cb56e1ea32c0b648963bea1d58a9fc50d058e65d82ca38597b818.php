<?php

/* ClassroomBundle:ClassroomAdmin:thread-list.html.twig */
class __TwigTemplate_06579ce027250e742ded215caf1589a894aa03979599739a3f2c2e4fb9c114bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "ClassroomBundle:ClassroomAdmin:thread-list.html.twig", 1);
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
        // line 2
        $context["menu"] = "admin_classroom_thread_manage";
        // line 3
        $context["script_controller"] = "classroombundle/controller/classroom-admin/classroom-thread";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_main($context, array $blocks = array())
    {
        // line 5
        echo "  <div class=\"well well-sm\">
    <form class=\"form-inline\">
      <div class=\"form-group\">
        <select class=\"form-control\" name=\"keywordType\">
          ";
        // line 9
        echo $this->env->getExtension('topxia_html_twig')->selectOptions(array("title" => "标题", "content" => "内容"), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "keywordType"), "method"));
        echo "
        </select>
      </div>
      <div class=\"form-group\">
        <input class=\"form-control\" type=\"text\" placeholder=\"关键词\" name=\"keyword\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "keyword"), "method"), "html", null, true);
        echo "\">
      </div>
      <div class=\"form-group\">
        <input class=\"form-control\" type=\"text\" placeholder=\"作者\" name=\"author\" value=\"";
        // line 16
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
          <th width=\"60%\">帖子</th>
          <th width=\"10%\">回复/查看</th>
          <th width=\"15%\">作者</th>
          <th width=\"10%\">操作</th>
        </tr>
      </thead>
      <body>
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["threads"]) ? $context["threads"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["thread"]) {
            // line 34
            echo "          ";
            $context["author"] = (($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["thread"], "userId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["thread"], "userId", array()), array(), "array"), null)) : (null));
            // line 35
            echo "          ";
            $context["classroom"] = (($this->getAttribute((isset($context["classrooms"]) ? $context["classrooms"] : null), $this->getAttribute($context["thread"], "targetId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["classrooms"]) ? $context["classrooms"] : null), $this->getAttribute($context["thread"], "targetId", array()), array(), "array"), null)) : (null));
            // line 36
            echo "          <tr data-role=\"item\">
            <td><input value=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["thread"], "id", array()), "html", null, true);
            echo "\" type=\"checkbox\" data-role=\"batch-item\"> </td>
            <td>
              <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_thread_show", array("classroomId" => $this->getAttribute($context["thread"], "targetId", array()), "threadId" => $this->getAttribute($context["thread"], "id", array()))), "html", null, true);
            echo "\" target=\"_blank\"><strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["thread"], "title", array()), "html", null, true);
            echo "</strong></a>
              <div class=\"short-long-text\">
                <div class=\"short-text text-sm text-muted\">";
            // line 41
            echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($context["thread"], "content", array()), 60);
            echo " <span class=\"trigger\">(展开)</span></div>
                <div class=\"long-text\">";
            // line 42
            echo $this->getAttribute($context["thread"], "content", array());
            echo " <span class=\"trigger\">(收起)</span></div>
              </div>
              
              <div class=\"text-sm mts\">
                ";
            // line 46
            if ((isset($context["classroom"]) ? $context["classroom"] : null)) {
                // line 47
                echo "                  <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
                echo "\" class=\"text-success\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "title", array()), "html", null, true);
                echo "</a>
                ";
            }
            // line 49
            echo "              </div>
            </td>
            <td><span class=\"text-sm\">";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["thread"], "postNum", array()), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["thread"], "hitNum", array()), "html", null, true);
            echo "</span></td>
            <td>
              ";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : null), "user_link", array(0 => (isset($context["author"]) ? $context["author"] : null)), "method"), "html", null, true);
            echo " <br />
              <span class=\"text-muted text-sm\">";
            // line 54
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["thread"], "createdTime", array()), "Y-n-d H:i:s"), "html", null, true);
            echo "</span>
            </td>
            <td><button class=\"btn btn-default btn-sm\" data-role=\"item-delete\" data-name=\"帖子\" data-url=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_classroom_thread_delete", array("threadId" => $this->getAttribute($context["thread"], "id", array()))), "html", null, true);
            echo "\">删除</button></td>
          </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 59
            echo "          <tr><td colspan=\"20\"><div class=\"empty\">暂无帖子记录</div></td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thread'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "      </body>
    </table>
    <div class=\"mbm\">
      <label class=\"checkbox-inline\"><input type=\"checkbox\" data-role=\"batch-select\"> 全选</label>
      <button class=\"btn btn-default btn-sm mlm\" data-role=\"batch-delete\" data-name=\"帖子\" data-url=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("admin_classroom_thread_batch_delete");
        echo "\">删除</button>
    </div>
  </div>
  <nav class=\"text-center\">
    ";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo " 
  </nav>
  
";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomAdmin:thread-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 69,  163 => 65,  157 => 61,  150 => 59,  142 => 56,  137 => 54,  133 => 53,  126 => 51,  122 => 49,  114 => 47,  112 => 46,  105 => 42,  101 => 41,  94 => 39,  89 => 37,  86 => 36,  83 => 35,  80 => 34,  75 => 33,  55 => 16,  49 => 13,  42 => 9,  36 => 5,  33 => 4,  29 => 1,  27 => 3,  25 => 2,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* {% set menu = 'admin_classroom_thread_manage' %}*/
/* {% set script_controller='classroombundle/controller/classroom-admin/classroom-thread' %}*/
/* {% block main %}*/
/*   <div class="well well-sm">*/
/*     <form class="form-inline">*/
/*       <div class="form-group">*/
/*         <select class="form-control" name="keywordType">*/
/*           {{ select_options({title:'标题', content: '内容'}, app.request.get('keywordType')) }}*/
/*         </select>*/
/*       </div>*/
/*       <div class="form-group">*/
/*         <input class="form-control" type="text" placeholder="关键词" name="keyword" value="{{ app.request.get('keyword') }}">*/
/*       </div>*/
/*       <div class="form-group">*/
/*         <input class="form-control" type="text" placeholder="作者" name="author" value="{{ app.request.get('author') }}">*/
/*       </div>*/
/*       <button class="btn btn-primary" type="submit">搜索</button>*/
/*     </form>*/
/*   </div>*/
/*   <div id="thread-table-container">*/
/*     <table class="table table-striped table-hover">*/
/*       <thead>*/
/*         <tr>*/
/*           <th width="5%"><input type="checkbox" data-role="batch-select"></th>*/
/*           <th width="60%">帖子</th>*/
/*           <th width="10%">回复/查看</th>*/
/*           <th width="15%">作者</th>*/
/*           <th width="10%">操作</th>*/
/*         </tr>*/
/*       </thead>*/
/*       <body>*/
/*         {% for thread in threads %}*/
/*           {% set author = users[thread.userId]|default(null) %}*/
/*           {% set classroom = classrooms[thread.targetId]|default(null) %}*/
/*           <tr data-role="item">*/
/*             <td><input value="{{thread.id}}" type="checkbox" data-role="batch-item"> </td>*/
/*             <td>*/
/*               <a href="{{ path('classroom_thread_show', {classroomId:thread.targetId, threadId:thread.id}) }}" target="_blank"><strong>{{ thread.title }}</strong></a>*/
/*               <div class="short-long-text">*/
/*                 <div class="short-text text-sm text-muted">{{ thread.content|plain_text(60) }} <span class="trigger">(展开)</span></div>*/
/*                 <div class="long-text">{{ thread.content|raw }} <span class="trigger">(收起)</span></div>*/
/*               </div>*/
/*               */
/*               <div class="text-sm mts">*/
/*                 {% if classroom %}*/
/*                   <a href="{{ path('classroom_show', {id:classroom.id}) }}" class="text-success" target="_blank">{{ classroom.title }}</a>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </td>*/
/*             <td><span class="text-sm">{{ thread.postNum }} / {{ thread.hitNum }}</span></td>*/
/*             <td>*/
/*               {{ admin_macro.user_link(author) }} <br />*/
/*               <span class="text-muted text-sm">{{ thread.createdTime|date('Y-n-d H:i:s') }}</span>*/
/*             </td>*/
/*             <td><button class="btn btn-default btn-sm" data-role="item-delete" data-name="帖子" data-url="{{ path('admin_classroom_thread_delete', {threadId:thread.id}) }}">删除</button></td>*/
/*           </tr>*/
/*         {% else %}*/
/*           <tr><td colspan="20"><div class="empty">暂无帖子记录</div></td></tr>*/
/*         {% endfor %}*/
/*       </body>*/
/*     </table>*/
/*     <div class="mbm">*/
/*       <label class="checkbox-inline"><input type="checkbox" data-role="batch-select"> 全选</label>*/
/*       <button class="btn btn-default btn-sm mlm" data-role="batch-delete" data-name="帖子" data-url="{{ path('admin_classroom_thread_batch_delete') }}">删除</button>*/
/*     </div>*/
/*   </div>*/
/*   <nav class="text-center">*/
/*     {{ web_macro.paginator(paginator) }} */
/*   </nav>*/
/*   */
/* {% endblock %}*/
