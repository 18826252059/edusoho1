<?php

/* TopxiaAdminBundle:Group:index.html.twig */
class __TwigTemplate_7dfeca67648cd9b44c9eee72ba3b89f3a66e5044b6c74f520dbe631b27b3059f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Group:index.html.twig", 1);
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
        $context["menu"] = "admin_operation_group_manage";
        // line 5
        $context["script_controller"] = "group/group";
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

      <select class=\"form-control\" name=\"status\">
        ";
        // line 14
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getDict("groupstatus"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "status"), "method"), "小组状态");
        echo "
      </select>

    </div>

    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" placeholder=\"小组名\" name=\"title\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "title"), "method"), "html", null, true);
        echo "\">
    </div>

    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" placeholder=\"组长\" name=\"ownerName\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "ownerName"), "method"), "html", null, true);
        echo "\">
    </div>

    <button class=\"btn btn-primary\">搜索</button>

  </form>
  ";
        // line 30
        if ((isset($context["groupinfo"]) ? $context["groupinfo"] : null)) {
            // line 31
            echo "  <table class=\"table table-striped table-hover\" id=\"group-table\">
    <thead>
    <tr>
      <th>编号</th>
      <th width=\"20%\">名称</th>
      <th>组长</th>
      <th>成员数</th>
      <th>话题数</th>
      <th>回复数</th>
      <th>状态</th>
      <th>操作</th>
    </tr>
    </thead>
    <tbody>

   ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["groupinfo"]) ? $context["groupinfo"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 47
                echo "
      ";
                // line 48
                $this->loadTemplate("TopxiaAdminBundle:Group:table-tr.html.twig", "TopxiaAdminBundle:Group:index.html.twig", 48)->display(array_merge($context, array("group" => $context["group"])));
                // line 49
                echo "
   ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "
    </tbody>

  </table>
  ";
        } else {
            // line 56
            echo "    <div class=\"empty\">暂无小组信息!</div>
  ";
        }
        // line 58
        echo "  <div class=\"pull-right\">
 ";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
</div><div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
        <h4 class=\"modal-title\" id=\"myModalLabel\">请输入用户名</h4>
      </div>          
      <form  class=\"form-horizontal\" method=\"post\" id=\"transfer-group-form\" >
        <div class=\"modal-body\">
              <div class=\"form-group\">
                <label class=\"col-xs-2 control-label\" for=\"user_nickname\">转移给</label>
                <div class=\"col-xs-7 controls\">
                  <input type=\"text\"  id=\"username\" name=\"user[nickname]\" class=\"form-control\"
                  data-url=\"";
        // line 73
        echo $this->env->getExtension('routing')->getPath("group_thread_check_user");
        echo "\" data-display=\"用户名\"  placeholder=\"请输入用户名\">
                  <div class=\"help-block\" style=\"display:none;\"></div>
                </div>
                <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
              </div>
        </div>
        <div class=\"modal-footer\">
              <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">关闭</button>
              <button type=\"submit\" class=\"btn btn-primary\" >确认转移小组</button>
        </div>   
      </form>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Group:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 76,  156 => 73,  139 => 59,  136 => 58,  132 => 56,  125 => 51,  110 => 49,  108 => 48,  105 => 47,  88 => 46,  71 => 31,  69 => 30,  60 => 24,  53 => 20,  44 => 14,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set menu = 'admin_operation_group_manage' %}*/
/* */
/* {% set script_controller='group/group' %}*/
/* */
/* {% block main %}*/
/* */
/*   <form id="message-search-form" class="form-inline well well-sm" action="" method="get" novalidate>*/
/* */
/*     <div class="form-group">*/
/* */
/*       <select class="form-control" name="status">*/
/*         {{ select_options(dict('groupstatus'), app.request.query.get('status'), '小组状态') }}*/
/*       </select>*/
/* */
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*       <input class="form-control" type="text" placeholder="小组名" name="title" value="{{ app.request.get('title') }}">*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*       <input class="form-control" type="text" placeholder="组长" name="ownerName" value="{{ app.request.get('ownerName') }}">*/
/*     </div>*/
/* */
/*     <button class="btn btn-primary">搜索</button>*/
/* */
/*   </form>*/
/*   {% if groupinfo%}*/
/*   <table class="table table-striped table-hover" id="group-table">*/
/*     <thead>*/
/*     <tr>*/
/*       <th>编号</th>*/
/*       <th width="20%">名称</th>*/
/*       <th>组长</th>*/
/*       <th>成员数</th>*/
/*       <th>话题数</th>*/
/*       <th>回复数</th>*/
/*       <th>状态</th>*/
/*       <th>操作</th>*/
/*     </tr>*/
/*     </thead>*/
/*     <tbody>*/
/* */
/*    {% for group in groupinfo %}*/
/* */
/*       {% include 'TopxiaAdminBundle:Group:table-tr.html.twig' with {group:group} %}*/
/* */
/*    {% endfor %}*/
/* */
/*     </tbody>*/
/* */
/*   </table>*/
/*   {% else %}*/
/*     <div class="empty">暂无小组信息!</div>*/
/*   {% endif %}*/
/*   <div class="pull-right">*/
/*  {{ web_macro.paginator(paginator) }}*/
/* </div><div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*   <div class="modal-dialog">*/
/*     <div class="modal-content">*/
/*       <div class="modal-header">*/
/*         <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>*/
/*         <h4 class="modal-title" id="myModalLabel">请输入用户名</h4>*/
/*       </div>          */
/*       <form  class="form-horizontal" method="post" id="transfer-group-form" >*/
/*         <div class="modal-body">*/
/*               <div class="form-group">*/
/*                 <label class="col-xs-2 control-label" for="user_nickname">转移给</label>*/
/*                 <div class="col-xs-7 controls">*/
/*                   <input type="text"  id="username" name="user[nickname]" class="form-control"*/
/*                   data-url="{{path('group_thread_check_user')}}" data-display="用户名"  placeholder="请输入用户名">*/
/*                   <div class="help-block" style="display:none;"></div>*/
/*                 </div>*/
/*                 <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*               </div>*/
/*         </div>*/
/*         <div class="modal-footer">*/
/*               <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>*/
/*               <button type="submit" class="btn btn-primary" >确认转移小组</button>*/
/*         </div>   */
/*       </form>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {% endblock %}*/
