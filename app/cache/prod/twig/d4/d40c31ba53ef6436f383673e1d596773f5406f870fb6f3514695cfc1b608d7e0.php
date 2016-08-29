<?php

/* TopxiaAdminBundle:Coin:order-log-modal.html.twig */
class __TwigTemplate_a3bb62a76f0b877c5cdd4e64c03aa26bf796d7cee1f9d95bf1a76d36170e6b59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaAdminBundle:Coin:order-log-modal.html.twig", 1);
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
        // line 2
        $context["admin_macro"] = $this->loadTemplate("TopxiaAdminBundle::macro.html.twig", "TopxiaAdminBundle:Coin:order-log-modal.html.twig", 2);
        // line 3
        $context["modalSize"] = "large";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "订单详情";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "    
        ";
        // line 8
        if ((isset($context["orderLogs"]) ? $context["orderLogs"] : null)) {
            // line 9
            echo "        <table class=\"table\">
          <thead>
            <tr>
              <th width=\"50%\">日志信息</th>
              <th width=\"25%\">操作人</th>
              <th width=\"25%\">创建时间</th>
            </tr>
          </thead>
          <tbody>
            ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["orderLogs"]) ? $context["orderLogs"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["orderLog"]) {
                // line 19
                echo "              ";
                $context["logUser"] = (($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["orderLog"], "userId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["orderLog"], "userId", array()), array(), "array"), null)) : (null));
                // line 20
                echo "              <tr>
                <td>
                  ";
                // line 22
                echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($context["orderLog"], "message", array()), 50);
                echo "
                  <br>
                  <span class=\"text-muted text-sm\">";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["orderLog"], "type", array()), "html", null, true);
                echo "</span>
                </td>
                <td>
                  ";
                // line 27
                if ((isset($context["logUser"]) ? $context["logUser"] : null)) {
                    // line 28
                    echo "                    ";
                    echo $context["admin_macro"]->getuser_link((isset($context["logUser"]) ? $context["logUser"] : null));
                    echo "
                  ";
                } else {
                    // line 30
                    echo "                    --
                  ";
                }
                // line 32
                echo "                </td>
                <td>
                  ";
                // line 34
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["orderLog"], "createdTime", array()), "Y-n-d H:i"), "html", null, true);
                echo "
                  <br>
                  <span class=\"text-muted text-sm\">";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["orderLog"], "ip", array()), "html", null, true);
                echo "</span>
                </td>
              </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orderLog'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "          </tbody>
        </table>
      ";
        } else {
            // line 43
            echo "      <div class=\"empty\">暂无交易日志!</div>
      ";
        }
        // line 45
        echo "     
";
    }

    // line 48
    public function block_footer($context, array $blocks = array())
    {
        // line 49
        echo "  <div>
    <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">关闭</button>
  </div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Coin:order-log-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 49,  127 => 48,  122 => 45,  118 => 43,  113 => 40,  103 => 36,  98 => 34,  94 => 32,  90 => 30,  84 => 28,  82 => 27,  76 => 24,  71 => 22,  67 => 20,  64 => 19,  60 => 18,  49 => 9,  47 => 8,  44 => 7,  41 => 6,  35 => 5,  31 => 1,  29 => 3,  27 => 2,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* {% import "TopxiaAdminBundle::macro.html.twig" as admin_macro %}*/
/* {% set modalSize = 'large' %}*/
/* */
/* {% block title %}订单详情{% endblock %}*/
/* {% block body %}*/
/*     */
/*         {% if orderLogs %}*/
/*         <table class="table">*/
/*           <thead>*/
/*             <tr>*/
/*               <th width="50%">日志信息</th>*/
/*               <th width="25%">操作人</th>*/
/*               <th width="25%">创建时间</th>*/
/*             </tr>*/
/*           </thead>*/
/*           <tbody>*/
/*             {% for orderLog in orderLogs %}*/
/*               {% set logUser = users[orderLog.userId]|default(null) %}*/
/*               <tr>*/
/*                 <td>*/
/*                   {{ orderLog.message | plain_text(50) }}*/
/*                   <br>*/
/*                   <span class="text-muted text-sm">{{ orderLog.type }}</span>*/
/*                 </td>*/
/*                 <td>*/
/*                   {% if logUser %}*/
/*                     {{ admin_macro.user_link(logUser) }}*/
/*                   {% else %}*/
/*                     --*/
/*                   {% endif %}*/
/*                 </td>*/
/*                 <td>*/
/*                   {{ orderLog.createdTime|date('Y-n-d H:i')}}*/
/*                   <br>*/
/*                   <span class="text-muted text-sm">{{ orderLog.ip}}</span>*/
/*                 </td>*/
/*               </tr>*/
/*             {% endfor %}*/
/*           </tbody>*/
/*         </table>*/
/*       {% else %}*/
/*       <div class="empty">暂无交易日志!</div>*/
/*       {% endif %}*/
/*      */
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/*   <div>*/
/*     <button type="button" class="btn btn-primary" data-dismiss="modal">关闭</button>*/
/*   </div>*/
/* */
/* {% endblock %}*/
/* */
/* */
