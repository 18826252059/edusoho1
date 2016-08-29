<?php

/* TopxiaAdminBundle:Course:index.html.twig */
class __TwigTemplate_c463b549ddca0560ec8d536b2d2faf6319efa9afc3f0f99aceb9f9d379ba5fb9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Course:index.html.twig", 1);
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
        $context["menu"] = "admin_course_manage";
        // line 5
        $context["script_controller"] = "course/manage";
        // line 7
        $context["tab"] = "questions";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        // line 10
        echo "  ";
        $this->loadTemplate("TopxiaAdminBundle:Course:tab.html.twig", "TopxiaAdminBundle:Course:index.html.twig", 10)->display($context);
        // line 11
        echo "  <br>
  <div class=\"well well-sm mtl\">
    <form id=\"message-search-form\" class=\"form-inline\" action=\"\" method=\"get\" novalidate>
      <div class=\"form-group\">
        <select style=\"max-width:150px;\" class=\"form-control\" name=\"categoryId\">
          ";
        // line 16
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getCategoryChoices("course"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "categoryId"), "method"), "课程分类");
        echo "
        </select>
      </div>
      <div class=\"form-group\">
        <select class=\"form-control\" name=\"status\">
          ";
        // line 21
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getDict("courseStatus"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "status"), "method"), "课程状态");
        echo "
        </select>
      </div>
      ";
        // line 24
        if (((isset($context["filter"]) ? $context["filter"] : null) == "normal")) {
            // line 25
            echo "      <div class=\"form-group\">
        <select style=\"max-width:150px;\" class=\"form-control\" name=\"chargeStatus\">
          ";
            // line 27
            echo $this->env->getExtension('topxia_html_twig')->selectOptions(array("free" => "免费课程", "charge" => "收费课程"), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "chargeStatus"), "method"), "收费状态");
            echo "
        </select>
      </div>
      ";
        }
        // line 31
        echo "
      <div class=\"form-group\">
        <input class=\"form-control\" type=\"text\" placeholder=\"标题\" name=\"title\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "title"), "method"), "html", null, true);
        echo "\">
      </div>
      <div class=\"form-group\">
        <input class=\"form-control\" type=\"text\" placeholder=\"创建者\" name=\"creator\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "creator"), "method"), "html", null, true);
        echo "\">
      </div>
      <button class=\"btn btn-primary\">搜索</button>

    </form>
  </div>

  <table class=\"table table-striped table-hover\" id=\"course-table\" style=\"word-break:break-all;\">
    <thead>
    <tr>
      <th>编号</th>
      <th width=\"30%\">名称</th>
      <th width=\"\">连载状态</th>
      ";
        // line 49
        if (((isset($context["filter"]) ? $context["filter"] : null) == "classroom")) {
            // line 50
            echo "      <th>所在";
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "</th>
      ";
        } else {
            // line 52
            echo "      <th>";
            if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
            } else {
                echo "学员";
            }
            echo "数</th>
      <th>收入(元)</th>
      ";
        }
        // line 55
        echo "      <th>状态</th>
      <th>创建者</th>
      <th>操作</th>
    </tr>
    </thead>
    <tbody>
      ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : null));
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
            // line 62
            echo "        ";
            $context["user"] = (($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["course"], "userId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["course"], "userId", array()), array(), "array"), null)) : (null));
            // line 63
            echo "        ";
            $context["category"] = (($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), $this->getAttribute($context["course"], "categoryId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), $this->getAttribute($context["course"], "categoryId", array()), array(), "array"), null)) : (null));
            // line 64
            echo "        ";
            $this->loadTemplate("TopxiaAdminBundle:Course:tr.html.twig", "TopxiaAdminBundle:Course:index.html.twig", 64)->display($context);
            // line 65
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
            // line 66
            echo "        <tr><td colspan=\"20\"><div class=\"empty\">暂无课程记录</div></td></tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "    </tbody>
  </table>

  ";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Course:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 71,  175 => 68,  168 => 66,  155 => 65,  152 => 64,  149 => 63,  146 => 62,  128 => 61,  120 => 55,  109 => 52,  103 => 50,  101 => 49,  85 => 36,  79 => 33,  75 => 31,  68 => 27,  64 => 25,  62 => 24,  56 => 21,  48 => 16,  41 => 11,  38 => 10,  35 => 9,  31 => 1,  29 => 7,  27 => 5,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set menu = 'admin_course_manage' %}*/
/* */
/* {% set script_controller = 'course/manage' %}*/
/* */
/* {% set tab = 'questions' %}*/
/* */
/* {% block main %}*/
/*   {% include 'TopxiaAdminBundle:Course:tab.html.twig' %}*/
/*   <br>*/
/*   <div class="well well-sm mtl">*/
/*     <form id="message-search-form" class="form-inline" action="" method="get" novalidate>*/
/*       <div class="form-group">*/
/*         <select style="max-width:150px;" class="form-control" name="categoryId">*/
/*           {{ select_options(category_choices('course'), app.request.query.get('categoryId'), '课程分类') }}*/
/*         </select>*/
/*       </div>*/
/*       <div class="form-group">*/
/*         <select class="form-control" name="status">*/
/*           {{ select_options(dict('courseStatus'), app.request.query.get('status'), '课程状态') }}*/
/*         </select>*/
/*       </div>*/
/*       {% if filter == 'normal' %}*/
/*       <div class="form-group">*/
/*         <select style="max-width:150px;" class="form-control" name="chargeStatus">*/
/*           {{ select_options({free:'免费课程',charge:'收费课程'}, app.request.get('chargeStatus'), '收费状态') }}*/
/*         </select>*/
/*       </div>*/
/*       {% endif %}*/
/* */
/*       <div class="form-group">*/
/*         <input class="form-control" type="text" placeholder="标题" name="title" value="{{ app.request.get('title') }}">*/
/*       </div>*/
/*       <div class="form-group">*/
/*         <input class="form-control" type="text" placeholder="创建者" name="creator" value="{{ app.request.get('creator') }}">*/
/*       </div>*/
/*       <button class="btn btn-primary">搜索</button>*/
/* */
/*     </form>*/
/*   </div>*/
/* */
/*   <table class="table table-striped table-hover" id="course-table" style="word-break:break-all;">*/
/*     <thead>*/
/*     <tr>*/
/*       <th>编号</th>*/
/*       <th width="30%">名称</th>*/
/*       <th width="">连载状态</th>*/
/*       {% if filter == 'classroom' %}*/
/*       <th>所在{{setting("classroom.name")|default("班级")}}</th>*/
/*       {% else %}*/
/*       <th>{% if setting('default.user_name') %}{{setting('default.user_name')|default('学员')}}{% else %}学员{% endif %}数</th>*/
/*       <th>收入(元)</th>*/
/*       {% endif %}*/
/*       <th>状态</th>*/
/*       <th>创建者</th>*/
/*       <th>操作</th>*/
/*     </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*       {% for course in courses %}*/
/*         {% set user = users[course.userId]|default(null) %}*/
/*         {% set category = categories[course.categoryId]|default(null) %}*/
/*         {% include 'TopxiaAdminBundle:Course:tr.html.twig' %}*/
/*       {% else %}*/
/*         <tr><td colspan="20"><div class="empty">暂无课程记录</div></td></tr>*/
/*       {% endfor %}*/
/*     </tbody>*/
/*   </table>*/
/* */
/*   {{ web_macro.paginator(paginator) }}*/
/* */
/* {% endblock %}*/
