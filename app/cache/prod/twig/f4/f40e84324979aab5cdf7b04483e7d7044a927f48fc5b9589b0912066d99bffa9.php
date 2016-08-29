<?php

/* TopxiaAdminBundle:App:logs.html.twig */
class __TwigTemplate_63a13631365c2128a2444abdd571a1a601f49096e98249355ceb525addd84d60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::cloud-app-layout.html.twig", "TopxiaAdminBundle:App:logs.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::cloud-app-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["script_controller"] = "app/logs";
        // line 6
        $context["menu"] = "admin_app_logs";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "  <style>
    .table .popover {
      max-width: 400px;
    }
  </style>

  <table class=\"table table-striped table-hover\">
    <thead>
      <tr>
        <th>应用名称</th>
        <th>类型</th>
        <th>操作人</th>
        <th>状态</th>
      </tr>
    </thead>
    <tbody>
      ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["logs"]) ? $context["logs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 26
            echo "        <tr>
          <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "name", array()), "html", null, true);
            echo "</td>
          <td>
            ";
            // line 29
            if (($this->getAttribute($context["log"], "type", array()) == "install")) {
                // line 30
                echo "              安装
              <br> <small class=\"text-muted\">(";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "toVersion", array()), "html", null, true);
                echo ")</small>
            ";
            } else {
                // line 33
                echo "              升级
              <br> <small class=\"text-muted\">版本： ";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "fromVersion", array()), "html", null, true);
                echo " -&gt; ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "toVersion", array()), "html", null, true);
                echo "</small>
            ";
            }
            // line 36
            echo "          </td>
          <td>
            ";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : null), "user_link", array(0 => $this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["log"], "userId", array()), array(), "array")), "method"), "html", null, true);
            echo "
            <br>
            <small class=\"text-muted\">";
            // line 40
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["log"], "createdTime", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</small>
          </td>
          <td>
            ";
            // line 43
            if (($this->getAttribute($context["log"], "status", array()) == "ROLLBACK")) {
                // line 44
                echo "              <strong class=\"text-danger\">需要回滚</strong>
            ";
            } elseif (($this->getAttribute(            // line 45
$context["log"], "status", array()) == "ERROR")) {
                // line 46
                echo "              <strong class=\"text-warning\">更新失败</strong>
            ";
            } elseif (($this->getAttribute(            // line 47
$context["log"], "status", array()) == "SUCCESS")) {
                // line 48
                echo "              <strong class=\"text-success\">更新成功</strong>
            ";
            } elseif (($this->getAttribute(            // line 49
$context["log"], "status", array()) == "RECOVERED")) {
                // line 50
                echo "              <strong class=\"text-info\">已恢复</strong>
            ";
            }
            // line 52
            echo "            ";
            if ($this->getAttribute($context["log"], "message", array())) {
                // line 53
                echo "              <a href=\"javascript:;\" class=\"btn btn-sm btn-info log-message-btn\" data-content=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "message", array()), "html", null, true);
                echo "\">详情</a>
            ";
            }
            // line 55
            echo "          </td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "    </tbody>
  </table>
  ";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:App:logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 60,  139 => 58,  131 => 55,  125 => 53,  122 => 52,  118 => 50,  116 => 49,  113 => 48,  111 => 47,  108 => 46,  106 => 45,  103 => 44,  101 => 43,  95 => 40,  90 => 38,  86 => 36,  79 => 34,  76 => 33,  71 => 31,  68 => 30,  66 => 29,  61 => 27,  58 => 26,  54 => 25,  36 => 9,  33 => 8,  29 => 1,  27 => 6,  25 => 4,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::cloud-app-layout.html.twig' %}*/
/* */
/* */
/* {% set script_controller = 'app/logs' %}*/
/* */
/* {% set menu = 'admin_app_logs' %}*/
/* */
/* {% block main %}*/
/*   <style>*/
/*     .table .popover {*/
/*       max-width: 400px;*/
/*     }*/
/*   </style>*/
/* */
/*   <table class="table table-striped table-hover">*/
/*     <thead>*/
/*       <tr>*/
/*         <th>应用名称</th>*/
/*         <th>类型</th>*/
/*         <th>操作人</th>*/
/*         <th>状态</th>*/
/*       </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*       {% for log in logs %}*/
/*         <tr>*/
/*           <td>{{ log.name }}</td>*/
/*           <td>*/
/*             {% if log.type == 'install' %}*/
/*               安装*/
/*               <br> <small class="text-muted">({{ log.toVersion }})</small>*/
/*             {% else %}*/
/*               升级*/
/*               <br> <small class="text-muted">版本： {{ log.fromVersion }} -&gt; {{ log.toVersion }}</small>*/
/*             {% endif %}*/
/*           </td>*/
/*           <td>*/
/*             {{ admin_macro.user_link(users[log.userId]) }}*/
/*             <br>*/
/*             <small class="text-muted">{{ log.createdTime|date('Y-m-d H:i:s') }}</small>*/
/*           </td>*/
/*           <td>*/
/*             {% if log.status == 'ROLLBACK' %}*/
/*               <strong class="text-danger">需要回滚</strong>*/
/*             {% elseif log.status == 'ERROR' %}*/
/*               <strong class="text-warning">更新失败</strong>*/
/*             {% elseif log.status == 'SUCCESS' %}*/
/*               <strong class="text-success">更新成功</strong>*/
/*             {% elseif log.status == 'RECOVERED' %}*/
/*               <strong class="text-info">已恢复</strong>*/
/*             {% endif %}*/
/*             {% if log.message %}*/
/*               <a href="javascript:;" class="btn btn-sm btn-info log-message-btn" data-content="{{log.message}}">详情</a>*/
/*             {% endif %}*/
/*           </td>*/
/*         </tr>*/
/*       {% endfor %}*/
/*     </tbody>*/
/*   </table>*/
/*   {{ web_macro.paginator(paginator) }}*/
/* {% endblock %}*/
