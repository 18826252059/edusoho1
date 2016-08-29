<?php

/* TopxiaAdminBundle:Group:thread.html.twig */
class __TwigTemplate_667a6a58a2259d1db5d0b83e17219b94329ccd837217fc06b67008fad273e0e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Group:thread.html.twig", 1);
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
        $context["menu"] = "admin_operation_group_thread";
        // line 5
        $context["script_controller"] = "group/thread";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "
  <form  class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate>

    <div class=\"form-group\">
      <select class=\"form-control\" name=\"status\">
        ";
        // line 12
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getDict("groupstatus"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "status"), "method"), "话题状态");
        echo "
      </select>
    </div>
    
    <div class=\"form-group\">
      <select class=\"form-control\" name=\"threadType\">
        ";
        // line 18
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getDict("threadProperty"), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "threadType"), "method"), "属性");
        echo "
      </select>
    </div>

    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" placeholder=\"所属小组\" name=\"groupName\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "groupName"), "method"), "html", null, true);
        echo "\">
    </div>

    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" placeholder=\"话题名称关键词\" name=\"title\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "title"), "method"), "html", null, true);
        echo "\">
    </div>

    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" placeholder=\"创建者\" name=\"userName\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "userName"), "method"), "html", null, true);
        echo "\">
    </div>
    
    <button class=\"btn btn-primary\">搜索</button>
  </form>
  ";
        // line 36
        if ((isset($context["threadinfo"]) ? $context["threadinfo"] : null)) {
            // line 37
            echo "    <form method=\"post\" id=\"thread-form\">
      <div class=\"table-responsive\">
        <table class=\"table table-striped table-hover\" id=\"thread-table\">
          <thead>
            <tr>
              <th nowrap=\"nowrap\"><input type=\"checkbox\"  data-role=\"batch-select\"/> 编号</th>
              <th width=\"30%\">名称</th>
              <th nowrap=\"nowrap\">属性</th>
              <th nowrap=\"nowrap\">创建者</th>
              <th nowrap=\"nowrap\">所属小组</th>
              <th nowrap=\"nowrap\">回复数</th>
              <th nowrap=\"nowrap\">状态</th>
              <th width=\"100px\" nowrap=\"nowrap\">操作</th>
            </tr>
          </thead>

          <tbody>
            ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["threadinfo"]) ? $context["threadinfo"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["thread"]) {
                echo "  
              ";
                // line 55
                $this->loadTemplate("TopxiaAdminBundle:Group:thread-table-tr.html.twig", "TopxiaAdminBundle:Group:thread.html.twig", 55)->display(array_merge($context, array("thread" => $context["thread"])));
                // line 56
                echo "            ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thread'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "          </tbody>
        </table>
      </div>
      <div>  
        <label class=\"checkbox-inline\">
          <input type=\"checkbox\" data-role=\"batch-select\">全选
        </label>
        <input type=\"hidden\" id=\"batchDeleteThread\" value=\"";
            // line 64
            echo $this->env->getExtension('routing')->getPath("admin_groupThread_batch_delete");
            echo "\">
        <button id=\"thread-delete-btn\" data-submiting-text=\"正在删除\" type=\"button\" class=\"btn btn-default btn-sm mlm\">删除话题</button>
      </div>
      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
            echo "\">
    </form>
  ";
        } else {
            // line 70
            echo "    <div class=\"empty\">暂无话题！</div>
  ";
        }
        // line 72
        echo "  <div class=\"pull-right\">
    ";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
  </div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Group:thread.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 73,  163 => 72,  159 => 70,  153 => 67,  147 => 64,  138 => 57,  124 => 56,  122 => 55,  103 => 54,  84 => 37,  82 => 36,  74 => 31,  67 => 27,  60 => 23,  52 => 18,  43 => 12,  36 => 7,  33 => 6,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set menu = 'admin_operation_group_thread' %}*/
/* */
/* {% set script_controller = 'group/thread' %}*/
/* {% block main %}*/
/* */
/*   <form  class="form-inline well well-sm" action="" method="get" novalidate>*/
/* */
/*     <div class="form-group">*/
/*       <select class="form-control" name="status">*/
/*         {{ select_options(dict('groupstatus'), app.request.query.get('status'), '话题状态') }}*/
/*       </select>*/
/*     </div>*/
/*     */
/*     <div class="form-group">*/
/*       <select class="form-control" name="threadType">*/
/*         {{ select_options(dict('threadProperty'), app.request.get('threadType'), '属性') }}*/
/*       </select>*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*       <input class="form-control" type="text" placeholder="所属小组" name="groupName" value="{{ app.request.get('groupName') }}">*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*       <input class="form-control" type="text" placeholder="话题名称关键词" name="title" value="{{ app.request.get('title') }}">*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*       <input class="form-control" type="text" placeholder="创建者" name="userName" value="{{ app.request.get('userName') }}">*/
/*     </div>*/
/*     */
/*     <button class="btn btn-primary">搜索</button>*/
/*   </form>*/
/*   {% if threadinfo %}*/
/*     <form method="post" id="thread-form">*/
/*       <div class="table-responsive">*/
/*         <table class="table table-striped table-hover" id="thread-table">*/
/*           <thead>*/
/*             <tr>*/
/*               <th nowrap="nowrap"><input type="checkbox"  data-role="batch-select"/> 编号</th>*/
/*               <th width="30%">名称</th>*/
/*               <th nowrap="nowrap">属性</th>*/
/*               <th nowrap="nowrap">创建者</th>*/
/*               <th nowrap="nowrap">所属小组</th>*/
/*               <th nowrap="nowrap">回复数</th>*/
/*               <th nowrap="nowrap">状态</th>*/
/*               <th width="100px" nowrap="nowrap">操作</th>*/
/*             </tr>*/
/*           </thead>*/
/* */
/*           <tbody>*/
/*             {% for thread in threadinfo %}  */
/*               {% include 'TopxiaAdminBundle:Group:thread-table-tr.html.twig' with {thread:thread} %}*/
/*             {% endfor %}*/
/*           </tbody>*/
/*         </table>*/
/*       </div>*/
/*       <div>  */
/*         <label class="checkbox-inline">*/
/*           <input type="checkbox" data-role="batch-select">全选*/
/*         </label>*/
/*         <input type="hidden" id="batchDeleteThread" value="{{path('admin_groupThread_batch_delete')}}">*/
/*         <button id="thread-delete-btn" data-submiting-text="正在删除" type="button" class="btn btn-default btn-sm mlm">删除话题</button>*/
/*       </div>*/
/*       <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*     </form>*/
/*   {% else %}*/
/*     <div class="empty">暂无话题！</div>*/
/*   {% endif %}*/
/*   <div class="pull-right">*/
/*     {{ web_macro.paginator(paginator) }}*/
/*   </div>*/
/* {% endblock %}*/
