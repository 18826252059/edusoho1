<?php

/* TopxiaAdminBundle:Course:course-chooser.html.twig */
class __TwigTemplate_3d73a7cdb0bd48302b427d881e563560f2b8f6e5e1ae40133269529492c6da7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaAdminBundle:Course:course-chooser.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["modal_class"] = "modal-lg";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "指定课程";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
<form id=\"message-search-form\" class=\"form-inline well well-sm\" action=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("admin_course_chooser");
        echo "\" method=\"get\" novalidate>
\t<div class=\"form-group\">
\t  <select class=\"form-control\" name=\"categoryId\">
\t    ";
        // line 10
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getCategoryChoices("course"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "categoryId"), "method"), "课程分类");
        echo "
\t  </select>
\t</div>
\t<div class=\"form-group\">
\t  <select class=\"form-control\" name=\"status\">
\t    ";
        // line 15
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getDict("courseStatus"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "status"), "method"), "课程状态");
        echo "
\t  </select>
\t</div>
\t<div class=\"form-group\">
\t  <input class=\"form-control\" type=\"text\" placeholder=\"标题\" name=\"title\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "title"), "method"), "html", null, true);
        echo "\">
\t</div>
\t<div class=\"form-group\">
\t  <input class=\"form-control\" type=\"text\" placeholder=\"创建者\" name=\"creator\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "creator"), "method"), "html", null, true);
        echo "\">
\t</div>
\t<button class=\"btn btn-primary\">搜索</button>
</form>

<table class=\"table table-striped table-hover\" id=\"course-table\">
\t<thead>
\t\t<tr>
\t\t <th>编号</th>
\t     <th width=\"30%\">名称</th>
\t     <th>";
        // line 32
        if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
        } else {
            echo "学员";
        }
        echo "数</th>
\t     <th>价格</th>
\t     <th>状态</th>
\t     <th>创建者</th>
\t     <th>操作</th>
\t\t</tr>
\t</thead>
\t<tbody>
\t  ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 41
            echo "\t    ";
            $context["user"] = (($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["course"], "userId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["course"], "userId", array()), array(), "array"), null)) : (null));
            // line 42
            echo "\t    ";
            $context["category"] = (($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), $this->getAttribute($context["course"], "categoryId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), $this->getAttribute($context["course"], "categoryId", array()), array(), "array"), null)) : (null));
            // line 43
            echo "\t\t";
            $context["admin_macro"] = $this->loadTemplate("TopxiaAdminBundle::macro.html.twig", "TopxiaAdminBundle:Course:course-chooser.html.twig", 43);
            // line 44
            echo "\t\t<tr id=\"course-tr-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "id", array()), "html", null, true);
            echo "\">
\t\t  <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "id", array()), "html", null, true);
            echo "</td>
\t\t  <td>
\t\t    <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
            echo "\" target=\"_blank\"><strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
            echo "</strong></a>
\t\t    <br>
\t\t    <span class=\"text-muted text-sm\">分类：";
            // line 49
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name", array()), "--")) : ("--")), "html", null, true);
            echo "</span>
\t\t    ";
            // line 50
            if ($this->getAttribute($context["course"], "recommended", array())) {
                // line 51
                echo "\t\t      <span class=\"label label-default\">荐:";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["course"], "recommendedTime", array()), "Y-m-d"), "html", null, true);
                echo "</span>
\t\t    ";
            }
            // line 53
            echo "\t\t  </td>
\t\t  <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "studentNum", array()), "html", null, true);
            echo "</td>
\t\t  <td class=\"text-danger\">";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "price", array()), "html", null, true);
            echo "</td>
\t\t  <td>";
            // line 56
            echo $this->env->getExtension('topxia_web_twig')->getDictText("courseStatus:html", $this->getAttribute($context["course"], "status", array()));
            echo "</td>
\t\t  <td>
\t\t    ";
            // line 58
            echo $context["admin_macro"]->getuser_link((isset($context["user"]) ? $context["user"] : null));
            echo "
\t\t    <br>
\t\t    <span class=\"text-muted text-sm\">";
            // line 60
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["course"], "createdTime", array()), "Y-n-d H:i"), "html", null, true);
            echo "</span>
\t\t  </td>
\t\t  <td>
\t\t \t<button type=\"button\" class=\"btn btn-primary btn-sm choose-course\" data-target=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "id", array()), "html", null, true);
            echo "\" data-name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
            echo "\">选择</button>
\t\t  </td>
\t\t</tr>
\t  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 67
            echo "\t    <tr><td colspan=\"20\"><div class=\"empty\">暂无课程记录</div></td></tr>
\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "\t</tbody>
</table>

";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "

";
    }

    // line 75
    public function block_footer($context, array $blocks = array())
    {
        // line 76
        echo "  <button type=\"button\" class=\"btn btn-default pull-right\" data-dismiss=\"modal\">关闭</button>
  <script>app.load('course/chooser')</script>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Course:course-chooser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 76,  200 => 75,  193 => 72,  188 => 69,  181 => 67,  170 => 63,  164 => 60,  159 => 58,  154 => 56,  150 => 55,  146 => 54,  143 => 53,  137 => 51,  135 => 50,  131 => 49,  124 => 47,  119 => 45,  114 => 44,  111 => 43,  108 => 42,  105 => 41,  100 => 40,  85 => 32,  72 => 22,  66 => 19,  59 => 15,  51 => 10,  45 => 7,  42 => 6,  39 => 5,  33 => 4,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% set modal_class = 'modal-lg' %}*/
/* {% block title %}指定课程{% endblock %}*/
/* {% block body %}*/
/* */
/* <form id="message-search-form" class="form-inline well well-sm" action="{{ path('admin_course_chooser') }}" method="get" novalidate>*/
/* 	<div class="form-group">*/
/* 	  <select class="form-control" name="categoryId">*/
/* 	    {{ select_options(category_choices('course'), app.request.query.get('categoryId'), '课程分类') }}*/
/* 	  </select>*/
/* 	</div>*/
/* 	<div class="form-group">*/
/* 	  <select class="form-control" name="status">*/
/* 	    {{ select_options(dict('courseStatus'), app.request.query.get('status'), '课程状态') }}*/
/* 	  </select>*/
/* 	</div>*/
/* 	<div class="form-group">*/
/* 	  <input class="form-control" type="text" placeholder="标题" name="title" value="{{ app.request.get('title') }}">*/
/* 	</div>*/
/* 	<div class="form-group">*/
/* 	  <input class="form-control" type="text" placeholder="创建者" name="creator" value="{{ app.request.get('creator') }}">*/
/* 	</div>*/
/* 	<button class="btn btn-primary">搜索</button>*/
/* </form>*/
/* */
/* <table class="table table-striped table-hover" id="course-table">*/
/* 	<thead>*/
/* 		<tr>*/
/* 		 <th>编号</th>*/
/* 	     <th width="30%">名称</th>*/
/* 	     <th>{% if setting('default.user_name') %}{{setting('default.user_name')|default('学员')}}{% else %}学员{% endif %}数</th>*/
/* 	     <th>价格</th>*/
/* 	     <th>状态</th>*/
/* 	     <th>创建者</th>*/
/* 	     <th>操作</th>*/
/* 		</tr>*/
/* 	</thead>*/
/* 	<tbody>*/
/* 	  {% for course in courses %}*/
/* 	    {% set user = users[course.userId]|default(null) %}*/
/* 	    {% set category = categories[course.categoryId]|default(null) %}*/
/* 		{% import "TopxiaAdminBundle::macro.html.twig" as admin_macro %}*/
/* 		<tr id="course-tr-{{ course.id }}">*/
/* 		  <td>{{ course.id }}</td>*/
/* 		  <td>*/
/* 		    <a href="{{ path('course_show', {id:course.id}) }}" target="_blank"><strong>{{ course.title }}</strong></a>*/
/* 		    <br>*/
/* 		    <span class="text-muted text-sm">分类：{{ category.name|default('--') }}</span>*/
/* 		    {% if course.recommended %}*/
/* 		      <span class="label label-default">荐:{{ course.recommendedTime|date('Y-m-d') }}</span>*/
/* 		    {% endif %}*/
/* 		  </td>*/
/* 		  <td>{{ course.studentNum }}</td>*/
/* 		  <td class="text-danger">{{ course.price }}</td>*/
/* 		  <td>{{ dict_text('courseStatus:html', course.status) }}</td>*/
/* 		  <td>*/
/* 		    {{ admin_macro.user_link(user) }}*/
/* 		    <br>*/
/* 		    <span class="text-muted text-sm">{{ course.createdTime|date('Y-n-d H:i') }}</span>*/
/* 		  </td>*/
/* 		  <td>*/
/* 		 	<button type="button" class="btn btn-primary btn-sm choose-course" data-target="{{ course.id }}" data-name="{{ course.title}}">选择</button>*/
/* 		  </td>*/
/* 		</tr>*/
/* 	  {% else %}*/
/* 	    <tr><td colspan="20"><div class="empty">暂无课程记录</div></td></tr>*/
/* 	  {% endfor %}*/
/* 	</tbody>*/
/* </table>*/
/* */
/* {{ web_macro.paginator(paginator) }}*/
/* */
/* {% endblock %}*/
/* {% block footer %}*/
/*   <button type="button" class="btn btn-default pull-right" data-dismiss="modal">关闭</button>*/
/*   <script>app.load('course/chooser')</script>*/
/* {% endblock %}*/
