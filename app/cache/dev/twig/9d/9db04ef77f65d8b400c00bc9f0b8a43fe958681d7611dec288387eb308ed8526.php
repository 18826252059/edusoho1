<?php

/* TopxiaAdminBundle:Message:index.html.twig */
class __TwigTemplate_10702be5980ee2546efd85c8bac0dc0aa2c6b92d483e8f717f320d8012e13847 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Message:index.html.twig", 1);
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
        $context["menu"] = "admin_message";
        // line 4
        $context["script_controller"] = "message/list";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"well well-sm\">
  <form id=\"message-search-form\" class=\"form-inline\" action=\"\" method=\"get\" novalidate> 

      <div class=\"form-group\">
          <input class=\"form-control\" type=\"text\" id=\"startDate\" name=\"startDate\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "startDate"), "method"), "html", null, true);
        echo "\" placeholder=\"起始时间\">
      </div>

      <div class=\"form-group\">
          <input class=\"form-control\" type=\"text\" id=\"endDate\" name=\"endDate\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "endDate"), "method"), "html", null, true);
        echo "\" placeholder=\"结束时间\">
      </div>
      <span></span>
      <div class=\"form-group\">
        <input type=\"text\" id=\"nickname\" name=\"nickname\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "nickname"), "method"), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"发信人用户名\">
      </div>

      <div class=\"form-group\">
        <input type=\"text\" id=\"content\" name=\"content\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "content"), "method"), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"私信内容关键词\">
      </div>

      <button class=\"btn btn-primary\">搜索</button>
  </form>
</div>

<div id=\"message-table-container\">

  <table class=\"table table-striped table-hover\" id=\"message-table\">
    <thead>
      <tr >
        <th width=\"10%\"> <input type=\"checkbox\"  data-role=\"batch-select\"> 发信人</th>
        <th width=\"10%\">收信人</th>
        <th width=\"45%\">内容</th>
        <th width=\"15%\">发送时间</th>
      </tr>
    </thead>
    <tbody>
      ";
        // line 42
        if ((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages"))) {
            // line 43
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 44
                echo "          <tr class=\"message-tr\" id=\"message-table-tr-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "id", array()), "html", null, true);
                echo "\">
            <td><input value=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "id", array()), "html", null, true);
                echo "\" type=\"checkbox\" data-role=\"batch-item\" >
             ";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : $this->getContext($context, "admin_macro")), "user_link", array(0 => $this->getAttribute((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")), $this->getAttribute($context["message"], "fromId", array()), array(), "array")), "method"), "html", null, true);
                echo "
            </td>

            <td>";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : $this->getContext($context, "admin_macro")), "user_link", array(0 => $this->getAttribute((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")), $this->getAttribute($context["message"], "toId", array()), array(), "array")), "method"), "html", null, true);
                echo " </td>
            <td>
                <div class=\"short-long-text\">
                  <div class=\"short-text text-sm text-muted\">";
                // line 52
                echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($context["message"], "content", array()), 60);
                echo " <span class=\"trigger\">(展开)</span></div>
                  <div class=\"long-text\">";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "content", array()), "html", null, true);
                echo " <span class=\"trigger\">(收起)</span></div>
                </div>
            </td>
            <td>";
                // line 56
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["message"], "createdTime", array()), "Y-n-d H:i"), "html", null, true);
                echo "</td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "      ";
        } else {
            // line 60
            echo "        <tr><td colspan=\"20\"><div class=\"empty\">暂无私信记录</div></td></tr>
      ";
        }
        // line 62
        echo "      
    </tbody>
  </table>
  <div>
    <label class=\"checkbox-inline\"><input type=\"checkbox\" data-role=\"batch-select\"> 全选</label>
    <button class=\"btn btn-default btn-sm mlm\" data-role=\"batch-delete\"  data-name=\"私信\" data-url=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("admin_message_delete_messages");
        echo "\">删除</button>
  </div>

</div>

  <div>
    ";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
        echo "
  </div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Message:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 73,  146 => 67,  139 => 62,  135 => 60,  132 => 59,  123 => 56,  117 => 53,  113 => 52,  107 => 49,  101 => 46,  97 => 45,  92 => 44,  87 => 43,  85 => 42,  63 => 23,  56 => 19,  49 => 15,  42 => 11,  36 => 7,  33 => 6,  29 => 1,  27 => 4,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set menu = 'admin_message' %}*/
/* {% set script_controller = 'message/list' %}*/
/* */
/* {% block main %}*/
/* <div class="well well-sm">*/
/*   <form id="message-search-form" class="form-inline" action="" method="get" novalidate> */
/* */
/*       <div class="form-group">*/
/*           <input class="form-control" type="text" id="startDate" name="startDate" value="{{app.request.query.get('startDate')}}" placeholder="起始时间">*/
/*       </div>*/
/* */
/*       <div class="form-group">*/
/*           <input class="form-control" type="text" id="endDate" name="endDate" value="{{app.request.query.get('endDate')}}" placeholder="结束时间">*/
/*       </div>*/
/*       <span></span>*/
/*       <div class="form-group">*/
/*         <input type="text" id="nickname" name="nickname" value="{{app.request.query.get('nickname')}}" class="form-control" placeholder="发信人用户名">*/
/*       </div>*/
/* */
/*       <div class="form-group">*/
/*         <input type="text" id="content" name="content" value="{{app.request.query.get('content')}}" class="form-control" placeholder="私信内容关键词">*/
/*       </div>*/
/* */
/*       <button class="btn btn-primary">搜索</button>*/
/*   </form>*/
/* </div>*/
/* */
/* <div id="message-table-container">*/
/* */
/*   <table class="table table-striped table-hover" id="message-table">*/
/*     <thead>*/
/*       <tr >*/
/*         <th width="10%"> <input type="checkbox"  data-role="batch-select"> 发信人</th>*/
/*         <th width="10%">收信人</th>*/
/*         <th width="45%">内容</th>*/
/*         <th width="15%">发送时间</th>*/
/*       </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*       {% if messages %}*/
/*         {% for message in messages %}*/
/*           <tr class="message-tr" id="message-table-tr-{{message.id}}">*/
/*             <td><input value="{{message.id}}" type="checkbox" data-role="batch-item" >*/
/*              {{ admin_macro.user_link(users[message.fromId]) }}*/
/*             </td>*/
/* */
/*             <td>{{ admin_macro.user_link(users[message.toId]) }} </td>*/
/*             <td>*/
/*                 <div class="short-long-text">*/
/*                   <div class="short-text text-sm text-muted">{{ message.content|plain_text(60) }} <span class="trigger">(展开)</span></div>*/
/*                   <div class="long-text">{{ message.content }} <span class="trigger">(收起)</span></div>*/
/*                 </div>*/
/*             </td>*/
/*             <td>{{ message.createdTime|date('Y-n-d H:i')}}</td>*/
/*           </tr>*/
/*         {% endfor %}*/
/*       {% else %}*/
/*         <tr><td colspan="20"><div class="empty">暂无私信记录</div></td></tr>*/
/*       {% endif %}*/
/*       */
/*     </tbody>*/
/*   </table>*/
/*   <div>*/
/*     <label class="checkbox-inline"><input type="checkbox" data-role="batch-select"> 全选</label>*/
/*     <button class="btn btn-default btn-sm mlm" data-role="batch-delete"  data-name="私信" data-url="{{ path('admin_message_delete_messages') }}">删除</button>*/
/*   </div>*/
/* */
/* </div>*/
/* */
/*   <div>*/
/*     {{ web_macro.paginator(paginator) }}*/
/*   </div>*/
/* */
/* {% endblock %}*/
/* */
