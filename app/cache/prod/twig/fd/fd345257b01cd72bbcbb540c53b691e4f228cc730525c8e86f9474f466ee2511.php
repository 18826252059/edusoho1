<?php

/* TopxiaAdminBundle:System:logs.html.twig */
class __TwigTemplate_b1288ab78e040af067d54e4d4ca3e87ef65242d72ae833d0179b4119a1ed28c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:System:logs.html.twig", 1);
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
        $context["menu"] = "admin_logs_query";
        // line 5
        $context["script_controller"] = "log/list";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"well well-sm form-inline\">

  <div class=\"form-group\">
    <select class=\"form-control\" name=\"level\">
        ";
        // line 15
        echo $this->env->getExtension('topxia_html_twig')->selectOptions($this->env->getExtension('topxia_web_twig')->getDict("logLevel"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "level"), "method"), "--所有等级--");
        echo "
    </select>
  </div>

  <div class=\"form-group\">
    <input type=\"text\" id=\"startDateTime\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "startDateTime"), "method"), "html", null, true);
        echo "\" name=\"startDateTime\" class=\"form-control\" placeholder=\"起始时间\" style=\"width:150px;\">
  </div>

  <div class=\"form-group\">
    <input type=\"text\" id=\"endDateTime\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "endDateTime"), "method"), "html", null, true);
        echo "\" name=\"endDateTime\" class=\"form-control\" placeholder=\"结束时间\" style=\"width:150px;\">
  </div>

  <div class=\"form-group\">
    <input type=\"text\" id=\"module\" name=\"module\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "module"), "method"), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"模块名\" style=\"width:100px;\">
  </div>

  <div class=\"form-group\">
    <input type=\"text\" id=\"action\" name=\"action\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "action"), "method"), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"操作名\" style=\"width:100px;\">
  </div>

  <div class=\"form-group\">
    <input type=\"text\" id=\"nickname\" name=\"nickname\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "nickname"), "method"), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"用户名\" style=\"width:120px;\">
  </div>

  <button class=\"btn btn-primary\">搜索</button>

</form>

  <table class=\"table table-hover\" id=\"log-table\">
    <tr>
      <th width=\"15%\">用户</th>
      <th width=\"55%\">操作</th>
      <th width=\"10%\">日志等级</th>
      <th width=\"20%\">时间/IP</th>
    </tr>   
    ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["logs"]) ? $context["logs"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 51
            echo "      ";
            $context["user"] = (($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["log"], "userId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["log"], "userId", array()), array(), "array"), null)) : (null));
            // line 52
            echo "      <tr>
        <td>
          ";
            // line 54
            if ((isset($context["user"]) ? $context["user"] : null)) {
                // line 55
                echo "            ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : null), "user_link", array(0 => (isset($context["user"]) ? $context["user"] : null)), "method"), "html", null, true);
                echo "
          ";
            } else {
                // line 57
                echo "            --
          ";
            }
            // line 59
            echo "        <td>
          <div style=\"word-break: break-all;word-wrap: break-word;\">
            ";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "message", array()), "html", null, true);
            echo "
            ";
            // line 62
            if ($this->getAttribute($context["log"], "data", array())) {
                // line 63
                echo "              <a href=\"javascript:;\" class=\"text-sm text-warning show-data\">查看数据</a>
              <a href=\"javascript:;\" class=\"text-sm text-warning hide-data\" style=\"display:none;\">隐藏数据</a>
              <div class=\"data\" style=\"display:none;\">";
                // line 65
                echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute($context["log"], "data", array())), "html", null, true);
                echo "</div>
            ";
            }
            // line 67
            echo "          </div>
          <span class=\"text-muted text-sm\">";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "module", array()), "html", null, true);
            echo ".";
            echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "action", array()), "html", null, true);
            echo "</span>
        </td>
        <td>";
            // line 70
            echo $this->getAttribute($this->env->getExtension('topxia_web_twig')->getDict("logLevel:html"), $this->getAttribute($context["log"], "level", array()), array(), "array");
            echo "</td>
        <td>
          <span class=\"\">";
            // line 72
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["log"], "createdTime", array()), "Y-m-d H:i:s"), "html", null, true);
            echo "</span>
          <br />
          <a  class=\"text-muted text-sm\" href=\"http://www.baidu.com/s?wd=";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "ip", array()), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["log"], "ip", array()), "html", null, true);
            echo "</a>
        </td>
      </tr>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 78
            echo "      <tr><td class=\"empty\" colspan=\"20\">无日志记录</tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 80
        echo "  </table>

  ";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:logs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 82,  182 => 80,  175 => 78,  164 => 74,  159 => 72,  154 => 70,  147 => 68,  144 => 67,  139 => 65,  135 => 63,  133 => 62,  129 => 61,  125 => 59,  121 => 57,  115 => 55,  113 => 54,  109 => 52,  106 => 51,  101 => 50,  84 => 36,  77 => 32,  70 => 28,  63 => 24,  56 => 20,  48 => 15,  39 => 9,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set menu = 'admin_logs_query' %}*/
/* */
/* {% set script_controller = 'log/list' %}*/
/* */
/* {% block main %}*/
/* */
/* {{ web_macro.flash_messages() }}*/
/* */
/* <form class="well well-sm form-inline">*/
/* */
/*   <div class="form-group">*/
/*     <select class="form-control" name="level">*/
/*         {{ select_options(dict('logLevel'), app.request.query.get('level'), '--所有等级--') }}*/
/*     </select>*/
/*   </div>*/
/* */
/*   <div class="form-group">*/
/*     <input type="text" id="startDateTime" value="{{app.request.query.get('startDateTime')}}" name="startDateTime" class="form-control" placeholder="起始时间" style="width:150px;">*/
/*   </div>*/
/* */
/*   <div class="form-group">*/
/*     <input type="text" id="endDateTime" value="{{app.request.query.get('endDateTime')}}" name="endDateTime" class="form-control" placeholder="结束时间" style="width:150px;">*/
/*   </div>*/
/* */
/*   <div class="form-group">*/
/*     <input type="text" id="module" name="module" value="{{app.request.query.get('module')}}" class="form-control" placeholder="模块名" style="width:100px;">*/
/*   </div>*/
/* */
/*   <div class="form-group">*/
/*     <input type="text" id="action" name="action" value="{{app.request.query.get('action')}}" class="form-control" placeholder="操作名" style="width:100px;">*/
/*   </div>*/
/* */
/*   <div class="form-group">*/
/*     <input type="text" id="nickname" name="nickname" value="{{app.request.query.get('nickname')}}" class="form-control" placeholder="用户名" style="width:120px;">*/
/*   </div>*/
/* */
/*   <button class="btn btn-primary">搜索</button>*/
/* */
/* </form>*/
/* */
/*   <table class="table table-hover" id="log-table">*/
/*     <tr>*/
/*       <th width="15%">用户</th>*/
/*       <th width="55%">操作</th>*/
/*       <th width="10%">日志等级</th>*/
/*       <th width="20%">时间/IP</th>*/
/*     </tr>   */
/*     {% for log in logs %}*/
/*       {% set user = users[log.userId]|default(null) %}*/
/*       <tr>*/
/*         <td>*/
/*           {% if user %}*/
/*             {{ admin_macro.user_link(user) }}*/
/*           {% else %}*/
/*             --*/
/*           {% endif %}*/
/*         <td>*/
/*           <div style="word-break: break-all;word-wrap: break-word;">*/
/*             {{ log.message }}*/
/*             {% if log.data %}*/
/*               <a href="javascript:;" class="text-sm text-warning show-data">查看数据</a>*/
/*               <a href="javascript:;" class="text-sm text-warning hide-data" style="display:none;">隐藏数据</a>*/
/*               <div class="data" style="display:none;">{{ log.data|json_encode }}</div>*/
/*             {% endif %}*/
/*           </div>*/
/*           <span class="text-muted text-sm">{{ log.module }}.{{ log.action }}</span>*/
/*         </td>*/
/*         <td>{{ dict('logLevel:html')[log.level]|raw }}</td>*/
/*         <td>*/
/*           <span class="">{{ log.createdTime|date("Y-m-d H:i:s") }}</span>*/
/*           <br />*/
/*           <a  class="text-muted text-sm" href="http://www.baidu.com/s?wd={{ log.ip }}" target="_blank">{{ log.ip }}</a>*/
/*         </td>*/
/*       </tr>*/
/*     {% else %}*/
/*       <tr><td class="empty" colspan="20">无日志记录</tr>*/
/*     {% endfor %}*/
/*   </table>*/
/* */
/*   {{ web_macro.paginator(paginator) }}*/
/* */
/* {% endblock %}*/
