<?php

/* TopxiaAdminBundle:Default:latest-paid-orders-block.html.twig */
class __TwigTemplate_a1cfdbcd6a63524c5ea323842517a7c21fc79a54cec7e9d0fe5fdd55cae6e813 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["admin_macro"] = $this->loadTemplate("TopxiaAdminBundle::macro.html.twig", "TopxiaAdminBundle:Default:latest-paid-orders-block.html.twig", 1);
        // line 2
        echo "<div class=\"col-md-12\">
\t<div class=\"panel panel-default\">
\t\t<div class=\"panel-heading\">
\t\t\t <h3 class=\"panel-title\">最新购买记录</h3>
\t\t</div>
    ";
        // line 7
        if ((isset($context["orders"]) ? $context["orders"] : $this->getContext($context, "orders"))) {
            // line 8
            echo "      <table class=\"table table-condensed table-bordered table-striped table-hover\">
  \t    <thead>
  \t      <tr>
  \t        <th width=\"50%\">订单名称</th>
  \t        <th width=\"10%\">金额</th>
  \t        <th width=\"10%\">购买人</th>
  \t        <th width=\"20%\">支付方式</th>
  \t      </tr>
  \t    </thead>
        <tbody>
          ";
            // line 18
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) ? $context["orders"] : $this->getContext($context, "orders")));
            foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
                // line 19
                echo "            <tr>
            \t<td>
  \t\t          ";
                // line 21
                if (($this->getAttribute($context["order"], "targetType", array()) == "course")) {
                    // line 22
                    echo "                  <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($context["order"], "targetId", array()))), "html", null, true);
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "title", array()), "html", null, true);
                    echo "</a>
                ";
                } elseif (($this->getAttribute(                // line 23
$context["order"], "targetType", array()) == "vip")) {
                    // line 24
                    echo "              \t\t<a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vip", array("id" => $this->getAttribute($context["order"], "targetId", array()))), "html", null, true);
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "title", array()), "html", null, true);
                    echo "</a>
              \t";
                } else {
                    // line 26
                    echo "  \t            \t";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "title", array()), "html", null, true);
                    echo "
              \t";
                }
                // line 28
                echo "            \t</td>
              <td class=\"money-text\">";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "amount", array()), "html", null, true);
                echo " 元</td>
              <td>
              \t";
                // line 31
                echo $context["admin_macro"]->getuser_link($this->getAttribute((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")), $this->getAttribute($context["order"], "userId", array()), array(), "array"));
                echo "
              </td>
              <td>
              \t<span class=\"text-sm\">";
                // line 34
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getDictText("payment", $this->getAttribute($context["order"], "payment", array())), "--"), "html", null, true);
                echo "  / ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["order"], "paidTime", array()), "Y-n-d H:i"), "html", null, true);
                echo "</span>
              </td>
            </tr>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "        </tbody>
      </table>
    ";
        } else {
            // line 41
            echo "      <div class=\"empty\">暂无最新购买记录</div>
    ";
        }
        // line 43
        echo "  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Default:latest-paid-orders-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 43,  106 => 41,  101 => 38,  89 => 34,  83 => 31,  78 => 29,  75 => 28,  69 => 26,  61 => 24,  59 => 23,  52 => 22,  50 => 21,  46 => 19,  42 => 18,  30 => 8,  28 => 7,  21 => 2,  19 => 1,);
    }
}
/* {% import "TopxiaAdminBundle::macro.html.twig" as admin_macro %}*/
/* <div class="col-md-12">*/
/* 	<div class="panel panel-default">*/
/* 		<div class="panel-heading">*/
/* 			 <h3 class="panel-title">最新购买记录</h3>*/
/* 		</div>*/
/*     {% if orders %}*/
/*       <table class="table table-condensed table-bordered table-striped table-hover">*/
/*   	    <thead>*/
/*   	      <tr>*/
/*   	        <th width="50%">订单名称</th>*/
/*   	        <th width="10%">金额</th>*/
/*   	        <th width="10%">购买人</th>*/
/*   	        <th width="20%">支付方式</th>*/
/*   	      </tr>*/
/*   	    </thead>*/
/*         <tbody>*/
/*           {% for order in orders %}*/
/*             <tr>*/
/*             	<td>*/
/*   		          {% if order.targetType == 'course' %}*/
/*                   <a href="{{ path('course_show', {id:order.targetId}) }}" target="_blank">{{ order.title }}</a>*/
/*                 {% elseif order.targetType == 'vip' %}*/
/*               		<a href="{{ path('vip', {id:order.targetId}) }}" target="_blank">{{ order.title }}</a>*/
/*               	{% else %}*/
/*   	            	{{ order.title }}*/
/*               	{% endif %}*/
/*             	</td>*/
/*               <td class="money-text">{{order.amount}} 元</td>*/
/*               <td>*/
/*               	{{ admin_macro.user_link(users[order.userId]) }}*/
/*               </td>*/
/*               <td>*/
/*               	<span class="text-sm">{{ dict_text('payment', order.payment)|default('--') }}  / {{order.paidTime |date('Y-n-d H:i')}}</span>*/
/*               </td>*/
/*             </tr>*/
/*           {% endfor %}*/
/*         </tbody>*/
/*       </table>*/
/*     {% else %}*/
/*       <div class="empty">暂无最新购买记录</div>*/
/*     {% endif %}*/
/*   </div>*/
/* </div>*/
