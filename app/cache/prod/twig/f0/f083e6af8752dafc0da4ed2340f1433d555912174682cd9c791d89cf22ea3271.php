<?php

/* TopxiaWebBundle:CourseTestpaperManage:item-picker-modal.html.twig */
class __TwigTemplate_61633adb7fd30ab0c4282e249cbc7c23716f7f76d79d5b4e10be3aaf98e867bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:CourseTestpaperManage:item-picker-modal.html.twig", 1);
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
        // line 5
        $context["replaceFor"] = ((array_key_exists("replaceFor", $context)) ? (_twig_default_filter((isset($context["replaceFor"]) ? $context["replaceFor"] : null), null)) : (null));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "试卷";
        if ((isset($context["replaceFor"]) ? $context["replaceFor"] : null)) {
            echo "替换";
        } else {
            echo "添加";
        }
        echo "题目";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "
  <form id=\"testpaper-item-picker-form\" class=\"form-inline well well-sm\" action=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_testpaper_item_picker", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "testpaperId" => $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "id", array()))), "html", null, true);
        echo "\" novalidate>
    <div class=\"form-group\">
      <select class=\"form-control\" name=\"target\" style=\"width:200px;height:32px;\">
        ";
        // line 14
        echo $this->env->getExtension('topxia_html_twig')->selectOptions((isset($context["targetChoices"]) ? $context["targetChoices"] : null), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "target"), "method"), "--按从属--");
        echo "
      </select>
    </div>

    <div class=\"form-group\">
      <input type=\"text\" id=\"keyword\" name=\"keyword\" class=\"form-control\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "keyword"), "method"), "html", null, true);
        echo "\" placeholder=\"关键词\">
    </div>

    <input type=\"hidden\" name=\"excludeIds\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute((isset($context["conditions"]) ? $context["conditions"] : null), "excludeIds", array()), ","), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"type\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["conditions"]) ? $context["conditions"] : null), "type", array()), "html", null, true);
        echo "\">
    <input type=\"hidden\" name=\"replace\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["replace"]) ? $context["replace"] : null), "html", null, true);
        echo "\">

    <button class=\"btn btn-primary btn-sm\">搜索</button>

  </form>

  <table class=\"table table-condensed\" id=\"testpaper-item-picker-table\">
    <thead>
    <tr>
      <th width=\"45%\">题干</th>
      <th>类型</th>
      <th>分值</th>
      <th>操作</th>
    </tr>
    </thead>
    <tbody>
      ";
        // line 40
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
            // line 41
            echo "        ";
            $this->loadTemplate("TopxiaWebBundle:CourseTestpaperManage:item-pick-tr.html.twig", "TopxiaWebBundle:CourseTestpaperManage:item-picker-modal.html.twig", 41)->display($context);
            // line 42
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
            // line 43
            echo "        <tr><td colspan=\"20\"><div class=\"empty\">无题目记录</div></td></tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "    </tbody>
  </table>
  ";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "

  <script>app.load('testpaper/item-picker')</script>

";
    }

    // line 53
    public function block_footer($context, array $blocks = array())
    {
        // line 54
        echo "    <button type=\"button\" class=\"btn btn-default pull-right\" data-dismiss=\"modal\" data-toggle=\"form-submit\" data-target=\"#block-form\">关闭</button>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseTestpaperManage:item-picker-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 54,  154 => 53,  145 => 47,  141 => 45,  134 => 43,  121 => 42,  118 => 41,  100 => 40,  81 => 24,  77 => 23,  73 => 22,  67 => 19,  59 => 14,  53 => 11,  50 => 10,  47 => 9,  35 => 7,  31 => 1,  29 => 5,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% set modal_class = 'modal-lg' %}*/
/* */
/* {% set replaceFor= replaceFor|default(null) %}*/
/* */
/* {% block title %}试卷{% if replaceFor %}替换{% else %}添加{% endif %}题目{% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*   <form id="testpaper-item-picker-form" class="form-inline well well-sm" action="{{ path('course_manage_testpaper_item_picker', {courseId:course.id, testpaperId:testpaper.id}) }}" novalidate>*/
/*     <div class="form-group">*/
/*       <select class="form-control" name="target" style="width:200px;height:32px;">*/
/*         {{ select_options(targetChoices, app.request.query.get('target'), '--按从属--') }}*/
/*       </select>*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*       <input type="text" id="keyword" name="keyword" class="form-control" value="{{ app.request.query.get('keyword') }}" placeholder="关键词">*/
/*     </div>*/
/* */
/*     <input type="hidden" name="excludeIds" value="{{ conditions.excludeIds|join(',') }}">*/
/*     <input type="hidden" name="type" value="{{ conditions.type }}">*/
/*     <input type="hidden" name="replace" value="{{ replace }}">*/
/* */
/*     <button class="btn btn-primary btn-sm">搜索</button>*/
/* */
/*   </form>*/
/* */
/*   <table class="table table-condensed" id="testpaper-item-picker-table">*/
/*     <thead>*/
/*     <tr>*/
/*       <th width="45%">题干</th>*/
/*       <th>类型</th>*/
/*       <th>分值</th>*/
/*       <th>操作</th>*/
/*     </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*       {% for question in questions %}*/
/*         {% include 'TopxiaWebBundle:CourseTestpaperManage:item-pick-tr.html.twig' %}*/
/*       {% else %}*/
/*         <tr><td colspan="20"><div class="empty">无题目记录</div></td></tr>*/
/*       {% endfor %}*/
/*     </tbody>*/
/*   </table>*/
/*   {{ web_macro.paginator(paginator) }}*/
/* */
/*   <script>app.load('testpaper/item-picker')</script>*/
/* */
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/*     <button type="button" class="btn btn-default pull-right" data-dismiss="modal" data-toggle="form-submit" data-target="#block-form">关闭</button>*/
/* {% endblock %}*/
