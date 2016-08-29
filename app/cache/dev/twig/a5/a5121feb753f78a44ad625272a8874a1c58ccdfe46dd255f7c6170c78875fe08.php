<?php

/* TopxiaAdminBundle:Course:course-recommend-list.html.twig */
class __TwigTemplate_9c737fa9be647c07a7d42852aa81e7700ea14cf1d02d8a7b5d94e6f95cea8f05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Course:course-recommend-list.html.twig", 1);
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
        $context["script_controller"] = "course/recommend-list";
        // line 5
        $context["menu"] = "admin_course_recommend";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "  
  <form id=\"message-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate>
    <div class=\"form-group\">
      <select style=\"max-width:150px;\" class=\"form-control\" name=\"categoryId\">
        ";
        // line 12
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getCategoryChoices("course"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "categoryId"), "method"), "课程分类");
        echo "
      </select>
    </div>
    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" placeholder=\"标题\" name=\"title\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "title"), "method"), "html", null, true);
        echo "\">
    </div>
    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" placeholder=\"创建者\" name=\"creator\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "creator"), "method"), "html", null, true);
        echo "\">
    </div>
    <button class=\"btn btn-primary\">搜索</button>

  </form>
  
  <table class=\"table table-striped table-hover mtl\" id=\"course-recommend-table\">
    <thead>
    <tr>
      <th>顺序号</th>
      <th width=\"50%\">课程名称</th>
      <th>创建者</th>
      <th>推荐时间</th>
      <th>操作</th>
    </tr>
    </thead>
    <tbody>
      ";
        // line 36
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : $this->getContext($context, "courses")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 37
            echo "        ";
            $context["user"] = (($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["course"], "userId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["course"], "userId", array()), array(), "array"), null)) : (null));
            // line 38
            echo "        ";
            $context["category"] = (($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), $this->getAttribute($context["course"], "categoryId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), $this->getAttribute($context["course"], "categoryId", array()), array(), "array"), null)) : (null));
            // line 39
            echo "            ";
            $this->loadTemplate("TopxiaAdminBundle:Course:course-recommend-tr.html.twig", "TopxiaAdminBundle:Course:course-recommend-list.html.twig", 39)->display($context);
            // line 40
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
            // line 41
            echo "        <tr><td colspan=\"20\"><div class=\"empty\">暂无推荐课程</div></td></tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "    </tbody>
  </table>

  ";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Course:course-recommend-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 46,  122 => 43,  115 => 41,  102 => 40,  99 => 39,  96 => 38,  93 => 37,  75 => 36,  55 => 19,  49 => 16,  42 => 12,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set script_controller = 'course/recommend-list' %}*/
/* */
/* {% set menu = 'admin_course_recommend' %}*/
/* */
/* {% block main %}*/
/*   */
/*   <form id="message-search-form" class="form-inline well well-sm" action="" method="get" novalidate>*/
/*     <div class="form-group">*/
/*       <select style="max-width:150px;" class="form-control" name="categoryId">*/
/*         {{ select_options(category_choices('course'), app.request.query.get('categoryId'), '课程分类') }}*/
/*       </select>*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <input class="form-control" type="text" placeholder="标题" name="title" value="{{ app.request.get('title') }}">*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <input class="form-control" type="text" placeholder="创建者" name="creator" value="{{ app.request.get('creator') }}">*/
/*     </div>*/
/*     <button class="btn btn-primary">搜索</button>*/
/* */
/*   </form>*/
/*   */
/*   <table class="table table-striped table-hover mtl" id="course-recommend-table">*/
/*     <thead>*/
/*     <tr>*/
/*       <th>顺序号</th>*/
/*       <th width="50%">课程名称</th>*/
/*       <th>创建者</th>*/
/*       <th>推荐时间</th>*/
/*       <th>操作</th>*/
/*     </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*       {% for course in courses %}*/
/*         {% set user = users[course.userId]|default(null) %}*/
/*         {% set category = categories[course.categoryId]|default(null) %}*/
/*             {% include 'TopxiaAdminBundle:Course:course-recommend-tr.html.twig' %}*/
/*       {% else %}*/
/*         <tr><td colspan="20"><div class="empty">暂无推荐课程</div></td></tr>*/
/*       {% endfor %}*/
/*     </tbody>*/
/*   </table>*/
/* */
/*   {{ web_macro.paginator(paginator) }}*/
/* */
/* {% endblock %}*/
