<?php

/* TopxiaAdminBundle:CourseDisk:index.html.twig */
class __TwigTemplate_12b0b62930a6f5f5d2623dbd11964a44acb64abcc6a182a4d7a7babecb843497 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle:Course:layout.html.twig", "TopxiaAdminBundle:CourseDisk:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle:Course:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["menu"] = "course-disk";
        // line 7
        $context["script_controller"] = "course/disk";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "文件管理 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 10
    public function block_main($context, array $blocks = array())
    {
        // line 11
        echo "
  <div class=\"page-header clearfix\">
    <h1>文件管理</h1>
  </div>

  <form id=\"file-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate>

    <div class=\"form-group\">
      <select class=\"form-control\" name=\"type\">
        ";
        // line 20
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getDict("fileType"), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "type"), "method"), "文件类型");
        echo "
      </select>
    </div>

    <span class=\"divider\"></span>

    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" placeholder=\"创建人\" name=\"nickname\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "nickname"), "method"), "html", null, true);
        echo "\">
    </div>

    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" name=\"filename\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "filename"), "method"), "html", null, true);
        echo "\" placeholder=\"文件名称\">
    </div>

    <button class=\"btn btn-primary\">搜索</button>

  </form>

  <div id=\"disk-table-container\">

    <table class=\"table table-striped table-hover\" id=\"disk-table\">
      <thead>
        <tr>
          <th width=\"3%\"><input type=\"checkbox\" data-role=\"batch-select\"></th>
          <th width=\"10%\">名称</th>
          <th width=\"10%\">大小</th>
          <th width=\"10%\">类型</th>
          <th width=\"10%\">存储方式</th>
          <th width=\"10%\">创建人</th>
          <th width=\"10%\">创建时间</th>
          <th width=\"10%\">操作</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["files"]) ? $context["files"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
            // line 55
            echo "          ";
            $context["creator"] = (($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["file"], "userId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["file"], "userId", array()), array(), "array"), null)) : (null));
            // line 56
            echo "          ";
            $this->loadTemplate("TopxiaAdminBundle:CourseDisk:tr.html.twig", "TopxiaAdminBundle:CourseDisk:index.html.twig", 56)->display($context);
            // line 57
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
            // line 58
            echo "          <tr><td colspan=\"20\"><div class=\"empty\">无课程文件</div></td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "      </tbody>
    </table>

    <div>
      <label class=\"checkbox-inline\"><input type=\"checkbox\" data-role=\"batch-select\"> 全选</label>
      <button class=\"btn btn-default btn-sm mlm\" data-role=\"batch-delete\"  data-name=\"文件\" data-url=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("admin_course_disk_batch_delete");
        echo "\">删除</button>
    </div>

  </div>

  <div class=\"paginator\">
    ";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo " 
  </div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:CourseDisk:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 71,  149 => 65,  142 => 60,  135 => 58,  122 => 57,  119 => 56,  116 => 55,  98 => 54,  72 => 31,  65 => 27,  55 => 20,  44 => 11,  41 => 10,  34 => 3,  30 => 1,  28 => 7,  26 => 5,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle:Course:layout.html.twig' %}*/
/* */
/* {% block title %}文件管理 - {{ parent() }}{% endblock %}*/
/* */
/* {% set menu = 'course-disk' %}*/
/* */
/* {% set script_controller = 'course/disk' %}*/
/* */
/* */
/* {% block main %}*/
/* */
/*   <div class="page-header clearfix">*/
/*     <h1>文件管理</h1>*/
/*   </div>*/
/* */
/*   <form id="file-search-form" class="form-inline well well-sm" action="" method="get" novalidate>*/
/* */
/*     <div class="form-group">*/
/*       <select class="form-control" name="type">*/
/*         {{ select_options(dict('fileType'), app.request.get('type'), '文件类型') }}*/
/*       </select>*/
/*     </div>*/
/* */
/*     <span class="divider"></span>*/
/* */
/*     <div class="form-group">*/
/*       <input class="form-control" type="text" placeholder="创建人" name="nickname" value="{{ app.request.get('nickname') }}">*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*       <input class="form-control" type="text" name="filename" value="{{ app.request.get('filename') }}" placeholder="文件名称">*/
/*     </div>*/
/* */
/*     <button class="btn btn-primary">搜索</button>*/
/* */
/*   </form>*/
/* */
/*   <div id="disk-table-container">*/
/* */
/*     <table class="table table-striped table-hover" id="disk-table">*/
/*       <thead>*/
/*         <tr>*/
/*           <th width="3%"><input type="checkbox" data-role="batch-select"></th>*/
/*           <th width="10%">名称</th>*/
/*           <th width="10%">大小</th>*/
/*           <th width="10%">类型</th>*/
/*           <th width="10%">存储方式</th>*/
/*           <th width="10%">创建人</th>*/
/*           <th width="10%">创建时间</th>*/
/*           <th width="10%">操作</th>*/
/*         </tr>*/
/*       </thead>*/
/*       <tbody>*/
/*         {% for file in files %}*/
/*           {% set creator = users[file.userId]|default(null) %}*/
/*           {% include 'TopxiaAdminBundle:CourseDisk:tr.html.twig' %}*/
/*         {% else %}*/
/*           <tr><td colspan="20"><div class="empty">无课程文件</div></td></tr>*/
/*         {% endfor %}*/
/*       </tbody>*/
/*     </table>*/
/* */
/*     <div>*/
/*       <label class="checkbox-inline"><input type="checkbox" data-role="batch-select"> 全选</label>*/
/*       <button class="btn btn-default btn-sm mlm" data-role="batch-delete"  data-name="文件" data-url="{{ path('admin_course_disk_batch_delete') }}">删除</button>*/
/*     </div>*/
/* */
/*   </div>*/
/* */
/*   <div class="paginator">*/
/*     {{ web_macro.paginator(paginator) }} */
/*   </div>*/
/* */
/* {% endblock %}*/
/* */
