<?php

/* TopxiaAdminBundle:Coin:flow-deatil-modal.html.twig */
class __TwigTemplate_7746fe0c98a31be82921886ed7f2e9c14d5aa1c4ada66300a781e846bc3d7eeb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaAdminBundle:Coin:flow-deatil-modal.html.twig", 1);
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
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nickname", array()), "html", null, true);
        echo "的";
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
        echo "明细 ";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "
  <p>
    <span>账户余额: <strong class=\"amount-num\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('topxia_web_twig')->getAccount($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array())), "cash", array()), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
        echo "</span>
    <span class=\"mll\">充值: <strong class=\"inflow-num\">";
        // line 10
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getInCash($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), (isset($context["timeType"]) ? $context["timeType"] : null)), "0.00"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
        echo "</span>
    <span class=\"mll\">消费: <strong class=\"outflow-num\">";
        // line 11
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getOutCash($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), (isset($context["timeType"]) ? $context["timeType"] : null)), "0.00"), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
        echo "</span>
  </p>

    <div class=\"table-responsive\">
      <table class=\"table table-striped\">
        ";
        // line 16
        if (((array_key_exists("cashes", $context)) ? (_twig_default_filter((isset($context["cashes"]) ? $context["cashes"] : null), null)) : (null))) {
            // line 17
            echo "        <tr>
          <th>名称</th>          
          <th>充值</th>
          <th>消费</th>
          <th>创建时间</th>  
        </tr>
        ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cashes"]) ? $context["cashes"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["cash"]) {
                // line 24
                echo "           <tr>
            <td><span class=\"text-sm\">";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["cash"], "name", array()), "html", null, true);
                echo "</span></td>

            ";
                // line 27
                if (($this->getAttribute($context["cash"], "type", array()) == "inflow")) {
                    // line 28
                    echo "            <td style=\"color:#1bb974;\">
               ";
                    // line 29
                    echo twig_escape_filter($this->env, $this->getAttribute($context["cash"], "amount", array()), "html", null, true);
                    echo " 
            </td>
            <td></td>
            ";
                }
                // line 33
                echo "            ";
                if (($this->getAttribute($context["cash"], "type", array()) == "outflow")) {
                    // line 34
                    echo "            <td></td>
            <td style=\"color:#ff7b0e;\">
               -&nbsp;";
                    // line 36
                    echo twig_escape_filter($this->env, $this->getAttribute($context["cash"], "amount", array()), "html", null, true);
                    echo "               
            </td>
            ";
                }
                // line 38
                echo "            
            <td><span class=\"text-sm\">";
                // line 39
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["cash"], "createdTime", array()), "Y-m-d H:i:s"), "html", null, true);
                echo "</span></td> 
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "        ";
        } else {
            // line 43
            echo "        <div class=\"empty\">暂无记录</div>
        ";
        }
        // line 45
        echo "      </table>
    </div>
     ";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
";
    }

    // line 50
    public function block_footer($context, array $blocks = array())
    {
        // line 51
        echo "
  <button type=\"button\" class=\"btn btn-default pull-right\" data-dismiss=\"modal\">关闭</button>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Coin:flow-deatil-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 51,  147 => 50,  141 => 47,  137 => 45,  133 => 43,  130 => 42,  121 => 39,  118 => 38,  112 => 36,  108 => 34,  105 => 33,  98 => 29,  95 => 28,  93 => 27,  88 => 25,  85 => 24,  81 => 23,  73 => 17,  71 => 16,  61 => 11,  55 => 10,  49 => 9,  45 => 7,  42 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% set modal_class = 'modal-lg' %}*/
/* */
/* {% block title %}{{user.nickname}}的{{ setting('coin.coin_name') }}明细 {% endblock %}*/
/* {% block body %}*/
/* */
/*   <p>*/
/*     <span>账户余额: <strong class="amount-num">{{userAccount(user.id).cash}}</strong> {{ setting('coin.coin_name') }}</span>*/
/*     <span class="mll">充值: <strong class="inflow-num">{{userInCash(user.id,timeType)|default("0.00") }}</strong> {{ setting('coin.coin_name') }}</span>*/
/*     <span class="mll">消费: <strong class="outflow-num">{{userOutCash(user.id,timeType)|default("0.00") }}</strong> {{ setting('coin.coin_name') }}</span>*/
/*   </p>*/
/* */
/*     <div class="table-responsive">*/
/*       <table class="table table-striped">*/
/*         {% if cashes|default(null) %}*/
/*         <tr>*/
/*           <th>名称</th>          */
/*           <th>充值</th>*/
/*           <th>消费</th>*/
/*           <th>创建时间</th>  */
/*         </tr>*/
/*         {% for cash in cashes %}*/
/*            <tr>*/
/*             <td><span class="text-sm">{{cash.name}}</span></td>*/
/* */
/*             {% if cash.type =="inflow" %}*/
/*             <td style="color:#1bb974;">*/
/*                {{cash.amount}} */
/*             </td>*/
/*             <td></td>*/
/*             {% endif %}*/
/*             {% if cash.type =="outflow" %}*/
/*             <td></td>*/
/*             <td style="color:#ff7b0e;">*/
/*                -&nbsp;{{cash.amount}}               */
/*             </td>*/
/*             {% endif %}            */
/*             <td><span class="text-sm">{{cash.createdTime|date('Y-m-d H:i:s')}}</span></td> */
/*           </tr>*/
/*         {% endfor %}*/
/*         {% else %}*/
/*         <div class="empty">暂无记录</div>*/
/*         {% endif %}*/
/*       </table>*/
/*     </div>*/
/*      {{ web_macro.paginator(paginator) }}*/
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/* */
/*   <button type="button" class="btn btn-default pull-right" data-dismiss="modal">关闭</button>*/
/* {% endblock %}*/
