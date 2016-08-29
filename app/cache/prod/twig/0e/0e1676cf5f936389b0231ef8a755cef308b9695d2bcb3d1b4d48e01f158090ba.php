<?php

/* TopxiaAdminBundle:LoginRecord:index.html.twig */
class __TwigTemplate_67d8e0ecef165a5f844a7a3428bed95801695a6edae7f8cf6aac3c01c4582b23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:LoginRecord:index.html.twig", 1);
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
        $context["menu"] = "admin_login_record";
        // line 5
        $context["script_controller"] = "login-record/list";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
<div class=\"well well-sm\">
  <form id=\"login-record-search-form\" class=\"form-inline\" action=\"\" method=\"get\" novalidate> 
    
    <div class=\"form-group\">
      <select id=\"keywordType\" name=\"keywordType\" class=\"form-control\">
        ";
        // line 14
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getDict("userKeyWordTypes"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "keywordType"), "method"));
        echo "
      </select>
    </div>

    <div class=\"form-group\">
      <input type=\"text\" id=\"keyword\" name=\"keyword\" class=\"form-control\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "keyword"), "method"), "html", null, true);
        echo "\" placeholder=\"关键词\">
    </div>

    <div class=\"form-group\">
        <input class=\"form-control\" type=\"text\" id=\"startDate\" name=\"startDateTime\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "startDateTime"), "method"), "html", null, true);
        echo "\" placeholder=\"起始时间\">
    </div>

    <div class=\"form-group\">
        <input class=\"form-control\" type=\"text\" id=\"endDate\" name=\"endDateTime\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "endDateTime"), "method"), "html", null, true);
        echo "\" placeholder=\"结束时间\">
    </div>
    <span></span>

    <button class=\"btn btn-primary\">搜索</button>
  </form>
</div>

<table id=\"teacher-table\" class=\"table table-striped table-hover\" data-search-form=\"#user-search-form\">
  <thead>
    <tr>
      <th>用户名</th>
      <th>用户邮箱</th>
      <th>登录时间IP</th>
      <th>登录地点</th>
      <th width=\"12%\">查看记录</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["logRecords"]) ? $context["logRecords"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["logRecord"]) {
            // line 47
            echo "      ";
            $context["user"] = (($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["logRecord"], "userId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["logRecord"], "userId", array()), array(), "array"), null)) : (null));
            // line 48
            echo "      ";
            $this->loadTemplate("TopxiaAdminBundle:LoginRecord:table-tr.html.twig", "TopxiaAdminBundle:LoginRecord:index.html.twig", 48)->display(array_merge($context, array("logRecord" => $context["logRecord"])));
            // line 49
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['logRecord'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "  </tbody>
</table>
  ";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:LoginRecord:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 52,  125 => 50,  111 => 49,  108 => 48,  105 => 47,  88 => 46,  66 => 27,  59 => 23,  52 => 19,  44 => 14,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set menu = 'admin_login_record' %}*/
/* */
/* {% set script_controller = 'login-record/list' %}*/
/* */
/* {% block main %}*/
/* */
/* <div class="well well-sm">*/
/*   <form id="login-record-search-form" class="form-inline" action="" method="get" novalidate> */
/*     */
/*     <div class="form-group">*/
/*       <select id="keywordType" name="keywordType" class="form-control">*/
/*         {{ select_options(dict('userKeyWordTypes'), app.request.query.get('keywordType')) }}*/
/*       </select>*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*       <input type="text" id="keyword" name="keyword" class="form-control" value="{{ app.request.query.get('keyword') }}" placeholder="关键词">*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*         <input class="form-control" type="text" id="startDate" name="startDateTime" value="{{app.request.query.get('startDateTime')}}" placeholder="起始时间">*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*         <input class="form-control" type="text" id="endDate" name="endDateTime" value="{{app.request.query.get('endDateTime')}}" placeholder="结束时间">*/
/*     </div>*/
/*     <span></span>*/
/* */
/*     <button class="btn btn-primary">搜索</button>*/
/*   </form>*/
/* </div>*/
/* */
/* <table id="teacher-table" class="table table-striped table-hover" data-search-form="#user-search-form">*/
/*   <thead>*/
/*     <tr>*/
/*       <th>用户名</th>*/
/*       <th>用户邮箱</th>*/
/*       <th>登录时间IP</th>*/
/*       <th>登录地点</th>*/
/*       <th width="12%">查看记录</th>*/
/*     </tr>*/
/*   </thead>*/
/*   <tbody>*/
/*     {% for logRecord in logRecords %}*/
/*       {% set user = users[logRecord.userId]|default(null) %}*/
/*       {% include 'TopxiaAdminBundle:LoginRecord:table-tr.html.twig' with {logRecord:logRecord} %}*/
/*     {% endfor %}*/
/*   </tbody>*/
/* </table>*/
/*   {{ web_macro.paginator(paginator) }} */
/* {% endblock %}*/
