<?php

/* TopxiaAdminBundle:CourseReview:index.html.twig */
class __TwigTemplate_fa9609f33dbf49eb48f82b38ce27ab35049fb46791832037fd960c58e8f37f70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:CourseReview:index.html.twig", 1);
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
        $context["menu"] = "admin_course_review_tab";
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

   ";
        // line 20
        echo "    
    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" placeholder=\"课程名\" name=\"courseTitle\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "courseTitle"), "method"), "html", null, true);
        echo "\">
    </div>

    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" placeholder=\"作者\" name=\"author\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "author"), "method"), "html", null, true);
        echo "\">
    </div>

    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" placeholder=\"评价内容关键词\" name=\"content\" value=\"";
        // line 30
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
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reviews"]) ? $context["reviews"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 49
            echo "          ";
            $context["author"] = (($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["review"], "userId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["review"], "userId", array()), array(), "array"), null)) : (null));
            // line 50
            echo "          ";
            $context["course"] = (($this->getAttribute((isset($context["courses"]) ? $context["courses"] : null), $this->getAttribute($context["review"], "courseId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courses"]) ? $context["courses"] : null), $this->getAttribute($context["review"], "courseId", array()), array(), "array"), null)) : (null));
            // line 51
            echo "          <tr id=\"review-table-tr-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "id", array()), "html", null, true);
            echo "\" data-role=\"item\">
            <td><input type=\"checkbox\" value=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "id", array()), "html", null, true);
            echo "\" data-role=\"batch-item\"></td>
            <td>
              <div class=\"short-long-text\">
                <div class=\"short-text\">
                  ";
            // line 56
            echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($context["review"], "content", array()), 60);
            echo " <span class=\"text-muted trigger\">(展开)</span>
                </div>
                <div class=\"long-text\">";
            // line 58
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute($context["review"], "content", array()), "html", null, true));
            echo " <span class=\"text-muted trigger\">(收起)</span></div>
              </div>
              <div class=\"mts\">
                ";
            // line 61
            if ((isset($context["course"]) ? $context["course"] : null)) {
                // line 62
                echo "                  <a class=\"text-success text-sm\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($context["review"], "courseId", array()))), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["courses"]) ? $context["courses"] : null), $this->getAttribute($context["review"], "courseId", array()), array(), "array"), "title", array()), "html", null, true);
                echo "</a>
                ";
            } else {
                // line 64
                echo "                  <span class=\"text-muted text-sm\">课程已删除</span>
                ";
            }
            // line 66
            echo "              </div>
            </td>
            <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "rating", array()), "html", null, true);
            echo "星</td>
            <td>
              ";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : null), "user_link", array(0 => (isset($context["author"]) ? $context["author"] : null)), "method"), "html", null, true);
            echo "<br>
              <span class=\"text-muted\">";
            // line 71
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["review"], "createdTime", array()), "Y-n-d H:i"), "html", null, true);
            echo "</span>
            </td>
            <td>
              <button class=\"btn btn-default btn-sm\" data-role=\"item-delete\" data-name=\"评价\" data-url=\"";
            // line 74
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_review_delete", array("id" => $this->getAttribute($context["review"], "id", array()))), "html", null, true);
            echo "\">删除</button>
            </td>
          </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 78
            echo "          <tr><td colspan=\"20\"><div class=\"empty\">暂无评价记录</div></td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "      </tbody>
    </table>

    <div>
      <label class=\"checkbox-inline\"><input type=\"checkbox\" data-role=\"batch-select\"> 全选</label>
      <button class=\"btn btn-default btn-sm mlm\" data-url=\"";
        // line 85
        echo $this->env->getExtension('routing')->getPath("admin_review_batch_delete");
        echo "\" data-role=\"batch-delete\" data-name=\"评价\">删除</button>
    </div>
  </div>

  ";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:CourseReview:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 89,  179 => 85,  172 => 80,  165 => 78,  156 => 74,  150 => 71,  146 => 70,  141 => 68,  137 => 66,  133 => 64,  125 => 62,  123 => 61,  117 => 58,  112 => 56,  105 => 52,  100 => 51,  97 => 50,  94 => 49,  89 => 48,  68 => 30,  61 => 26,  54 => 22,  50 => 20,  43 => 13,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set script_controller = 'review/list' %}*/
/* */
/* {% set menu = 'admin_course_review_tab' %}*/
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
/*    {#  <div class="form-group">*/
/*       <input class="form-control" type="text" placeholder="课程编号" name="courseId" value="{{ app.request.get('courseId') }}">*/
/*     </div> #}*/
/*     */
/*     <div class="form-group">*/
/*       <input class="form-control" type="text" placeholder="课程名" name="courseTitle" value="{{ app.request.get('courseTitle') }}">*/
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
/*           {% set course = courses[review.courseId]|default(null) %}*/
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
/*                 {% if course %}*/
/*                   <a class="text-success text-sm" href="{{ path('course_show', {id:review.courseId}) }}" target="_blank">{{ courses[review.courseId].title }}</a>*/
/*                 {% else %}*/
/*                   <span class="text-muted text-sm">课程已删除</span>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </td>*/
/*             <td>{{ review.rating }}星</td>*/
/*             <td>*/
/*               {{ admin_macro.user_link(author) }}<br>*/
/*               <span class="text-muted">{{review.createdTime|date('Y-n-d H:i')}}</span>*/
/*             </td>*/
/*             <td>*/
/*               <button class="btn btn-default btn-sm" data-role="item-delete" data-name="评价" data-url="{{ path('admin_review_delete', {id:review.id}) }}">删除</button>*/
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
/*       <button class="btn btn-default btn-sm mlm" data-url="{{ path('admin_review_batch_delete') }}" data-role="batch-delete" data-name="评价">删除</button>*/
/*     </div>*/
/*   </div>*/
/* */
/*   {{ web_macro.paginator(paginator) }}*/
/* */
/* {% endblock %}*/
/* */
