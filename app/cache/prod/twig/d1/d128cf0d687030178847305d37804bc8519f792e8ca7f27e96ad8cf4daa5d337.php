<?php

/* ClassroomBundle:ClassroomReview:index.html.twig */
class __TwigTemplate_6ad87e91f00262024b4118ddecc7492e8089ecaf2b875da6a8cf88d30ae7b8e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "ClassroomBundle:ClassroomReview:index.html.twig", 1);
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
        $context["script_controller"] = "review/list";
        // line 5
        $context["menu"] = "admin_classroom_review_tab";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
  <form id=\"review-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate> 

    <div class=\"form-group\">
      <select class=\"form-control\" name=\"rating\">
        ";
        // line 13
        echo $this->env->getExtension('topxia_html_twig')->selectOptions(array(1 => "1星", 2 => "2星", 3 => "3星", 4 => "4星", 5 => "5星"), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "rating"), "method"), "评分");
        echo "
      </select>
    </div>

    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" placeholder=\"";
        // line 18
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
        echo "名\" name=\"classroomTitle\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "classroomTitle"), "method"), "html", null, true);
        echo "\">
    </div>

    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" placeholder=\"作者\" name=\"author\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "author"), "method"), "html", null, true);
        echo "\">
    </div>

    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" placeholder=\"评价内容关键词\" name=\"content\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "content"), "method"), "html", null, true);
        echo "\">
    </div>

    <button class=\"btn btn-primary\">搜索</button>
  </form>

  <div id=\"review-table-container\">
    <table class=\"table table-striped table-hover\" id=\"review-table\">
      <thead>
        <tr>
          <th width=\"4%\"><input type=\"checkbox\"  data-role=\"batch-select\"></th>
          <th width=\"60%\">评价内容</th>
          <th width=\"8\">评分</th>
          <th width=\"20%\">作者</th>
          <th width=\"8%\">操作</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reviews"]) ? $context["reviews"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 45
            echo "          ";
            $context["author"] = (($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["review"], "userId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["review"], "userId", array()), array(), "array"), null)) : (null));
            // line 46
            echo "          ";
            $context["classroom"] = (($this->getAttribute((isset($context["classrooms"]) ? $context["classrooms"] : null), $this->getAttribute($context["review"], "classroomId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["classrooms"]) ? $context["classrooms"] : null), $this->getAttribute($context["review"], "classroomId", array()), array(), "array"), null)) : (null));
            // line 47
            echo "          <tr id=\"review-table-tr-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "id", array()), "html", null, true);
            echo "\" data-role=\"item\">
            <td><input type=\"checkbox\" value=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "id", array()), "html", null, true);
            echo "\" data-role=\"batch-item\"></td>
            <td>
              <div class=\"short-long-text\">
                <div class=\"short-text\">
                  ";
            // line 52
            echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($context["review"], "content", array()), 60);
            echo " <span class=\"text-muted trigger\">(展开)</span>
                </div>
                <div class=\"long-text\">";
            // line 54
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute($context["review"], "content", array()), "html", null, true));
            echo " <span class=\"text-muted trigger\">(收起)</span></div>
              </div>
              <div class=\"mts\">
                ";
            // line 57
            if ((isset($context["classroom"]) ? $context["classroom"] : null)) {
                // line 58
                echo "                  <a class=\"text-success text-sm\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute($context["review"], "classroomId", array()))), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["classrooms"]) ? $context["classrooms"] : null), $this->getAttribute($context["review"], "classroomId", array()), array(), "array"), "title", array()), "html", null, true);
                echo "</a>
                ";
            } else {
                // line 60
                echo "                  <span class=\"text-muted text-sm\">";
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
                echo "已删除</span>
                ";
            }
            // line 62
            echo "              </div>
            </td>
            <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "rating", array()), "html", null, true);
            echo "星</td>
            <td>
              ";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : null), "user_link", array(0 => (isset($context["author"]) ? $context["author"] : null)), "method"), "html", null, true);
            echo "<br>
              <span class=\"text-muted\">";
            // line 67
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["review"], "createdTime", array()), "Y-n-d H:i"), "html", null, true);
            echo "</span>
            </td>
            <td>
              <button class=\"btn btn-default btn-sm\" data-role=\"item-delete\" data-name=\"评价\" data-url=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_classroom_review_delete", array("id" => $this->getAttribute($context["review"], "id", array()))), "html", null, true);
            echo "\">删除</button>
            </td>
          </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 74
            echo "          <tr><td colspan=\"20\"><div class=\"empty\">暂无评价记录</div></td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "      </tbody>
    </table>

    <div>
      <label class=\"checkbox-inline\"><input type=\"checkbox\" data-role=\"batch-select\"> 全选</label>
      <button class=\"btn btn-default btn-sm mlm\" data-url=\"";
        // line 81
        echo $this->env->getExtension('routing')->getPath("admin_classroom_review_batch_delete");
        echo "\" data-role=\"batch-delete\" data-name=\"评价\">删除</button>
    </div>
  </div>

  ";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomReview:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 85,  180 => 81,  173 => 76,  166 => 74,  157 => 70,  151 => 67,  147 => 66,  142 => 64,  138 => 62,  132 => 60,  124 => 58,  122 => 57,  116 => 54,  111 => 52,  104 => 48,  99 => 47,  96 => 46,  93 => 45,  88 => 44,  67 => 26,  60 => 22,  51 => 18,  43 => 13,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set script_controller = 'review/list' %}*/
/* */
/* {% set menu = 'admin_classroom_review_tab' %}*/
/* */
/* {% block main %}*/
/* */
/*   <form id="review-search-form" class="form-inline well well-sm" action="" method="get" novalidate> */
/* */
/*     <div class="form-group">*/
/*       <select class="form-control" name="rating">*/
/*         {{ select_options({1:'1星', 2:'2星', 3:'3星', 4:'4星', 5:'5星'}, app.request.get('rating'), '评分') }}*/
/*       </select>*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*       <input class="form-control" type="text" placeholder="{{setting("classroom.name")|default("班级")}}名" name="classroomTitle" value="{{ app.request.get('classroomTitle') }}">*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*       <input class="form-control" type="text" placeholder="作者" name="author" value="{{ app.request.get('author') }}">*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*       <input class="form-control" type="text" placeholder="评价内容关键词" name="content" value="{{ app.request.get('content') }}">*/
/*     </div>*/
/* */
/*     <button class="btn btn-primary">搜索</button>*/
/*   </form>*/
/* */
/*   <div id="review-table-container">*/
/*     <table class="table table-striped table-hover" id="review-table">*/
/*       <thead>*/
/*         <tr>*/
/*           <th width="4%"><input type="checkbox"  data-role="batch-select"></th>*/
/*           <th width="60%">评价内容</th>*/
/*           <th width="8">评分</th>*/
/*           <th width="20%">作者</th>*/
/*           <th width="8%">操作</th>*/
/*         </tr>*/
/*       </thead>*/
/*       <tbody>*/
/*         {% for review in reviews %}*/
/*           {% set author = users[review.userId]|default(null) %}*/
/*           {% set classroom = classrooms[review.classroomId]|default(null) %}*/
/*           <tr id="review-table-tr-{{review.id}}" data-role="item">*/
/*             <td><input type="checkbox" value="{{review.id}}" data-role="batch-item"></td>*/
/*             <td>*/
/*               <div class="short-long-text">*/
/*                 <div class="short-text">*/
/*                   {{ review.content|plain_text(60) }} <span class="text-muted trigger">(展开)</span>*/
/*                 </div>*/
/*                 <div class="long-text">{{ review.content|nl2br }} <span class="text-muted trigger">(收起)</span></div>*/
/*               </div>*/
/*               <div class="mts">*/
/*                 {% if classroom %}*/
/*                   <a class="text-success text-sm" href="{{ path('classroom_show', {id:review.classroomId}) }}" target="_blank">{{ classrooms[review.classroomId].title }}</a>*/
/*                 {% else %}*/
/*                   <span class="text-muted text-sm">{{setting("classroom.name")|default("班级")}}已删除</span>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </td>*/
/*             <td>{{ review.rating }}星</td>*/
/*             <td>*/
/*               {{ admin_macro.user_link(author) }}<br>*/
/*               <span class="text-muted">{{review.createdTime|date('Y-n-d H:i')}}</span>*/
/*             </td>*/
/*             <td>*/
/*               <button class="btn btn-default btn-sm" data-role="item-delete" data-name="评价" data-url="{{ path('admin_classroom_review_delete', {id:review.id}) }}">删除</button>*/
/*             </td>*/
/*           </tr>*/
/*         {% else %}*/
/*           <tr><td colspan="20"><div class="empty">暂无评价记录</div></td></tr>*/
/*         {% endfor %}*/
/*       </tbody>*/
/*     </table>*/
/* */
/*     <div>*/
/*       <label class="checkbox-inline"><input type="checkbox" data-role="batch-select"> 全选</label>*/
/*       <button class="btn btn-default btn-sm mlm" data-url="{{ path('admin_classroom_review_batch_delete') }}" data-role="batch-delete" data-name="评价">删除</button>*/
/*     </div>*/
/*   </div>*/
/* */
/*   {{ web_macro.paginator(paginator) }}*/
/* */
/* {% endblock %}*/
/* */
