<?php

/* TopxiaWebBundle:CourseQuestionManage:index.html.twig */
class __TwigTemplate_44f494a253b6b9b413f14dadb33030107a38ef0a767f432ae5e7e2a6820ff029 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:CourseManage:layout.html.twig", "TopxiaWebBundle:CourseQuestionManage:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:CourseManage:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:CourseQuestionManage:index.html.twig", 2);
        // line 6
        $context["parentId"] = (($this->getAttribute((isset($context["parentQuestion"]) ? $context["parentQuestion"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["parentQuestion"]) ? $context["parentQuestion"] : null), "id", array()), 0)) : (0));
        // line 8
        $context["side_nav"] = "question";
        // line 9
        $context["script_controller"] = "course-manage/list";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "题目管理 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 11
    public function block_main($context, array $blocks = array())
    {
        // line 12
        echo "
<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading\">
    <div class=\"pull-right\">
      <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_question_create", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "choice", "parentId" => (isset($context["parentId"]) ? $context["parentId"] : null), "goto" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))), "html", null, true);
        echo "\" class=\"btn btn-info btn-sm\"><span class=\"glyphicon glyphicon-plus\"></span> 选择题</a>
      <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_question_create", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "fill", "parentId" => (isset($context["parentId"]) ? $context["parentId"] : null), "goto" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))), "html", null, true);
        echo "\" class=\"btn btn-info btn-sm\"><span class=\"glyphicon glyphicon-plus\"></span> 填空题</a>
      <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_question_create", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "determine", "parentId" => (isset($context["parentId"]) ? $context["parentId"] : null), "goto" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))), "html", null, true);
        echo "\" class=\"btn btn-info btn-sm\"><span class=\"glyphicon glyphicon-plus\"></span> 判断题</a>
      <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_question_create", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "essay", "parentId" => (isset($context["parentId"]) ? $context["parentId"] : null), "goto" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))), "html", null, true);
        echo "\" class=\"btn btn-info btn-sm\"><span class=\"glyphicon glyphicon-plus\"></span> 问答题</a>
      ";
        // line 20
        if ( !(isset($context["parentQuestion"]) ? $context["parentQuestion"] : null)) {
            // line 21
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_question_create", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "material")), "html", null, true);
            echo "\" class=\"btn btn-info btn-sm\"><span class=\"glyphicon glyphicon-plus\"></span> 材料题</a>
      ";
        }
        // line 23
        echo "    </div>
    题目管理
  </div>

  <div class=\"panel-body \" id=\"quiz-table-container\">

    ";
        // line 29
        if ((isset($context["parentQuestion"]) ? $context["parentQuestion"] : null)) {
            // line 30
            echo "      <ol class=\"breadcrumb\">
        <li><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_question", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\">题目管理</a></li>
        <li class=\"active\">材料题</li>
      </ol>
    ";
        }
        // line 35
        echo "
    ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

    ";
        // line 38
        if ((isset($context["parentQuestion"]) ? $context["parentQuestion"] : null)) {
            // line 39
            echo "      <div class=\"row\">
        <div class=\"col-sm-12\">
          <div class=\"well well-sm short-long-text\">
            <div class=\"short-text\">";
            // line 42
            echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute((isset($context["parentQuestion"]) ? $context["parentQuestion"] : null), "stem", array()), 100);
            echo " <span class=\"trigger\">(展开)</span></div>
            <div class=\"long-text\">";
            // line 43
            echo $this->getAttribute((isset($context["parentQuestion"]) ? $context["parentQuestion"] : null), "stem", array());
            echo " <span class=\"trigger\">(收起)</span></div>
          </div>
        </div>
      </div>
    ";
        }
        // line 48
        echo "
    ";
        // line 49
        if ( !(isset($context["parentQuestion"]) ? $context["parentQuestion"] : null)) {
            // line 50
            echo "      <form class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate>
        <div class=\"form-group\">
          <select class=\"form-control\" name=\"type\">
            ";
            // line 53
            echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getDict("questionType"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "type"), "method"), "--按题型--");
            echo "
          </select>
        </div>
 
        <div class=\"form-group\">
          <select class=\"form-control\" name=\"target\" style=\"width:200px;\">
            ";
            // line 59
            echo $this->env->getExtension('topxia_html_twig')->selectOptions((isset($context["targetChoices"]) ? $context["targetChoices"] : null), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "target"), "method"), "--按从属--");
            echo "
          </select>
        </div>

        <div class=\"form-group\">
          <input type=\"text\" id=\"keyword\" name=\"keyword\" class=\"form-control\" value=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "keyword"), "method"), "html", null, true);
            echo "\" placeholder=\"关键词\">
        </div>

        <button class=\"btn btn-primary btn-sm\">搜索</button>

      </form>
    ";
        }
        // line 71
        echo "





    <table class=\"table table-striped table-hover\" id=\"quiz-table\">
      <thead>
      <tr>
        <th><input type=\"checkbox\"  autocomplete=\"off\"  data-role=\"batch-select\"></th>
        <th width=\"50%\">题干</th>
        <th>类型</th>
        <th>最后更新</th>
        <th>操作</th>
      </tr>
      </thead>
      <tbody>
        ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) ? $context["questions"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 89
            echo "          ";
            $this->loadTemplate("TopxiaWebBundle:CourseQuestionManage:question-tr.html.twig", "TopxiaWebBundle:CourseQuestionManage:index.html.twig", 89)->display($context);
            // line 90
            echo "        ";
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
            // line 91
            echo "          <tr>
            <td colspan=\"20\"><div class=\"empty\">一道题都没有，请点击右上角按钮，按不同的题型录入题目</div></td>
          </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "      </tbody>
    </table>
    <div>
      <label class=\"checkbox-inline\"><input type=\"checkbox\"  autocomplete=\"off\" data-role=\"batch-select\"> 全选</label>
      <button class=\"btn btn-default btn-sm mlm\" data-role=\"batch-delete\"  data-name=\"题目\" data-url=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_question_deletes", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\">删除</button>
      <span class=\"pull-right text-muted\">共";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "getItemCount", array(), "method"), "html", null, true);
        echo "题</span>
    </div>
    <nav class=\"text-center\">
      ";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
    </nav>
  </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseQuestionManage:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 103,  234 => 100,  230 => 99,  224 => 95,  215 => 91,  202 => 90,  199 => 89,  181 => 88,  162 => 71,  152 => 64,  144 => 59,  135 => 53,  130 => 50,  128 => 49,  125 => 48,  117 => 43,  113 => 42,  108 => 39,  106 => 38,  101 => 36,  98 => 35,  91 => 31,  88 => 30,  86 => 29,  78 => 23,  72 => 21,  70 => 20,  66 => 19,  62 => 18,  58 => 17,  54 => 16,  48 => 12,  45 => 11,  38 => 4,  34 => 1,  32 => 9,  30 => 8,  28 => 6,  26 => 2,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:CourseManage:layout.html.twig' %}*/
/* {% import 'TopxiaWebBundle::macro.html.twig' as macro %}*/
/* */
/* {% block title %}题目管理 - {{ parent() }}{% endblock %}*/
/* */
/* {% set parentId = parentQuestion.id|default(0) %}*/
/* */
/* {% set side_nav = 'question' %}*/
/* {% set script_controller = 'course-manage/list' %}*/
/* */
/* {% block main %}*/
/* */
/* <div class="panel panel-default panel-col">*/
/*   <div class="panel-heading">*/
/*     <div class="pull-right">*/
/*       <a href="{{ path('course_manage_question_create',{courseId:course.id,type:'choice',parentId:parentId, goto:app.request.server.get('REQUEST_URI')}) }}" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-plus"></span> 选择题</a>*/
/*       <a href="{{ path('course_manage_question_create',{courseId:course.id,type:'fill',parentId:parentId, goto:app.request.server.get('REQUEST_URI')}) }}" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-plus"></span> 填空题</a>*/
/*       <a href="{{ path('course_manage_question_create',{courseId:course.id,type:'determine',parentId:parentId, goto:app.request.server.get('REQUEST_URI')}) }}" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-plus"></span> 判断题</a>*/
/*       <a href="{{ path('course_manage_question_create',{courseId:course.id,type:'essay',parentId:parentId, goto:app.request.server.get('REQUEST_URI')}) }}" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-plus"></span> 问答题</a>*/
/*       {% if not parentQuestion %}*/
/*         <a href="{{ path('course_manage_question_create',{courseId:course.id,type:'material'}) }}" class="btn btn-info btn-sm"><span class="glyphicon glyphicon-plus"></span> 材料题</a>*/
/*       {% endif %}*/
/*     </div>*/
/*     题目管理*/
/*   </div>*/
/* */
/*   <div class="panel-body " id="quiz-table-container">*/
/* */
/*     {% if parentQuestion %}*/
/*       <ol class="breadcrumb">*/
/*         <li><a href="{{ path('course_manage_question',{courseId:course.id}) }}">题目管理</a></li>*/
/*         <li class="active">材料题</li>*/
/*       </ol>*/
/*     {% endif %}*/
/* */
/*     {{ web_macro.flash_messages() }}*/
/* */
/*     {% if parentQuestion %}*/
/*       <div class="row">*/
/*         <div class="col-sm-12">*/
/*           <div class="well well-sm short-long-text">*/
/*             <div class="short-text">{{ parentQuestion.stem|plain_text(100) }} <span class="trigger">(展开)</span></div>*/
/*             <div class="long-text">{{ parentQuestion.stem|raw }} <span class="trigger">(收起)</span></div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     {% endif %}*/
/* */
/*     {% if not parentQuestion %}*/
/*       <form class="form-inline well well-sm" action="" method="get" novalidate>*/
/*         <div class="form-group">*/
/*           <select class="form-control" name="type">*/
/*             {{ select_options(dict('questionType'), app.request.query.get('type'), '--按题型--') }}*/
/*           </select>*/
/*         </div>*/
/*  */
/*         <div class="form-group">*/
/*           <select class="form-control" name="target" style="width:200px;">*/
/*             {{ select_options(targetChoices, app.request.query.get('target'), '--按从属--') }}*/
/*           </select>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*           <input type="text" id="keyword" name="keyword" class="form-control" value="{{ app.request.query.get('keyword') }}" placeholder="关键词">*/
/*         </div>*/
/* */
/*         <button class="btn btn-primary btn-sm">搜索</button>*/
/* */
/*       </form>*/
/*     {% endif %}*/
/* */
/* */
/* */
/* */
/* */
/* */
/*     <table class="table table-striped table-hover" id="quiz-table">*/
/*       <thead>*/
/*       <tr>*/
/*         <th><input type="checkbox"  autocomplete="off"  data-role="batch-select"></th>*/
/*         <th width="50%">题干</th>*/
/*         <th>类型</th>*/
/*         <th>最后更新</th>*/
/*         <th>操作</th>*/
/*       </tr>*/
/*       </thead>*/
/*       <tbody>*/
/*         {% for question in questions %}*/
/*           {% include 'TopxiaWebBundle:CourseQuestionManage:question-tr.html.twig' %}*/
/*         {% else %}*/
/*           <tr>*/
/*             <td colspan="20"><div class="empty">一道题都没有，请点击右上角按钮，按不同的题型录入题目</div></td>*/
/*           </tr>*/
/*         {% endfor %}*/
/*       </tbody>*/
/*     </table>*/
/*     <div>*/
/*       <label class="checkbox-inline"><input type="checkbox"  autocomplete="off" data-role="batch-select"> 全选</label>*/
/*       <button class="btn btn-default btn-sm mlm" data-role="batch-delete"  data-name="题目" data-url="{{ path('course_manage_question_deletes',{courseId:course.id}) }}">删除</button>*/
/*       <span class="pull-right text-muted">共{{ paginator.getItemCount() }}题</span>*/
/*     </div>*/
/*     <nav class="text-center">*/
/*       {{ web_macro.paginator(paginator) }}*/
/*     </nav>*/
/*   </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/* */
