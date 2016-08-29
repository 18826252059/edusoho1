<?php

/* TopxiaAdminBundle:Course:data.html.twig */
class __TwigTemplate_c1ff633f740ebdd289320b7ad67ff251edfd81c7b4988e786b50d516f9713293 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Course:data.html.twig", 1);
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
        $context["menu"] = "admin_course_data";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo "
    <form id=\"message-search-form\" class=\"form-inline well well-sm mtl\" action=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("admin_course_data");
        echo "\" method=\"get\" novalidate>
      <div class=\"form-group\">
        <select class=\"form-control\" name=\"categoryId\">
          ";
        // line 10
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getCategoryChoices("course"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "categoryId"), "method"), "课程分类");
        echo "
        </select>
      </div>
      <div class=\"form-group\">
        <input class=\"form-control\" type=\"text\" placeholder=\"标题\" name=\"title\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "title"), "method"), "html", null, true);
        echo "\">
      </div>
      <div class=\"form-group\">
        <input class=\"form-control\" type=\"text\" placeholder=\"创建者\" name=\"creator\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "creator"), "method"), "html", null, true);
        echo "\">
      </div>
      <button class=\"btn btn-primary\">搜索</button>
    </form>
    <div class=\"table-responsive\">
        <table class=\"table table-bordered\" style=\"word-break:break-all;text-align:center;\">
          <tr class=\"active\">
            <td width=\"30%\">课程名</td>
            <td>课时数</td>
            <td>";
        // line 26
        if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
        } else {
            echo "学员";
        }
        echo "人数</td>
            <td>完成课程人数</td>
            <td>课程学习时长(分)</td>
            <td>课程收入(元)</td>
            <td>操作</td>
          </tr>
          
          ";
        // line 33
        if ((isset($context["courses"]) ? $context["courses"] : null)) {
            // line 34
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                // line 35
                echo "            <tr>
            <td><a data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_detail_data", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
                echo "\" href=\"javascript:\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
                echo "</a></td>
            <td>";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "lessonCount", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "studentNum", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "isLearnedNum", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 40
                echo twig_escape_filter($this->env, twig_round(($this->getAttribute($context["course"], "learnTime", array()) / 60), 0, "floor"), "html", null, true);
                echo "</td>
            <td>";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "income", array()), "html", null, true);
                echo "</td>
            <td><a href=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_course_lesson_data", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
                echo "\">查看课时数据</a></td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "          ";
        }
        // line 46
        echo "          
         
        </table>
     ";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
      </div>


";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Course:data.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 49,  130 => 46,  127 => 45,  118 => 42,  114 => 41,  110 => 40,  106 => 39,  102 => 38,  98 => 37,  92 => 36,  89 => 35,  84 => 34,  82 => 33,  68 => 26,  56 => 17,  50 => 14,  43 => 10,  37 => 7,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set menu = 'admin_course_data' %}*/
/* */
/* {% block main %}*/
/* */
/*     <form id="message-search-form" class="form-inline well well-sm mtl" action="{{ path('admin_course_data') }}" method="get" novalidate>*/
/*       <div class="form-group">*/
/*         <select class="form-control" name="categoryId">*/
/*           {{ select_options(category_choices('course'), app.request.query.get('categoryId'), '课程分类') }}*/
/*         </select>*/
/*       </div>*/
/*       <div class="form-group">*/
/*         <input class="form-control" type="text" placeholder="标题" name="title" value="{{ app.request.get('title') }}">*/
/*       </div>*/
/*       <div class="form-group">*/
/*         <input class="form-control" type="text" placeholder="创建者" name="creator" value="{{ app.request.get('creator') }}">*/
/*       </div>*/
/*       <button class="btn btn-primary">搜索</button>*/
/*     </form>*/
/*     <div class="table-responsive">*/
/*         <table class="table table-bordered" style="word-break:break-all;text-align:center;">*/
/*           <tr class="active">*/
/*             <td width="30%">课程名</td>*/
/*             <td>课时数</td>*/
/*             <td>{% if setting('default.user_name') %}{{setting('default.user_name')|default('学员')}}{% else %}学员{% endif %}人数</td>*/
/*             <td>完成课程人数</td>*/
/*             <td>课程学习时长(分)</td>*/
/*             <td>课程收入(元)</td>*/
/*             <td>操作</td>*/
/*           </tr>*/
/*           */
/*           {% if courses %}*/
/*             {% for course in courses %}*/
/*             <tr>*/
/*             <td><a data-toggle="modal" data-target="#modal" data-url="{{path('course_detail_data',{id:course.id})}}" href="javascript:">{{course.title}}</a></td>*/
/*             <td>{{course.lessonCount}}</td>*/
/*             <td>{{course.studentNum}}</td>*/
/*             <td>{{course.isLearnedNum}}</td>*/
/*             <td>{{(course.learnTime/60)|round(0, 'floor')}}</td>*/
/*             <td>{{course.income}}</td>*/
/*             <td><a href="{{path('admin_course_lesson_data',{id:course.id})}}">查看课时数据</a></td>*/
/*             </tr>*/
/*             {% endfor %}*/
/*           {% endif %}*/
/*           */
/*          */
/*         </table>*/
/*      {{ web_macro.paginator(paginator) }}*/
/*       </div>*/
/* */
/* */
/* {% endblock %}*/
