<?php

/* TopxiaWebBundle:MyOrder:refunds.html.twig */
class __TwigTemplate_6543375f2aa63cda37929ce584ec22f1e4726e0e3daa72be93cfc72d7b5defea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:MyOrder:layout.html.twig", "TopxiaWebBundle:MyOrder:refunds.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main_body' => array($this, 'block_main_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:MyOrder:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["main_nav"] = "refunds";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "退款记录 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_main_body($context, array $blocks = array())
    {
        // line 7
        echo "
  ";
        // line 8
        if ((isset($context["refunds"]) ? $context["refunds"] : null)) {
            // line 9
            echo "    <table class=\"table table-striped table-hover\" id=\"refunds-table\">
    \t<thead>
    \t\t<th>退款订单</th>
    \t\t<th>退款申请时间</th>
    \t\t<th>退款状态</th>
    \t</thead>
    \t<tbody>
    \t\t";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["refunds"]) ? $context["refunds"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["refund"]) {
                // line 17
                echo "    \t\t  ";
                $context["order"] = $this->getAttribute((isset($context["orders"]) ? $context["orders"] : null), $this->getAttribute($context["refund"], "orderId", array()), array(), "array");
                // line 18
                echo "    \t\t  <tr>
      \t\t  <td>
              ";
                // line 20
                if (($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "targetType", array()) == "course")) {
                    // line 21
                    echo "                <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "targetId", array()))), "html", null, true);
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "title", array()), "html", null, true);
                    echo "</a>
              ";
                } elseif (($this->getAttribute(                // line 22
(isset($context["order"]) ? $context["order"] : null), "targetType", array()) == "vip")) {
                    // line 23
                    echo "        \t\t    <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vip", array("id" => $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "targetId", array()))), "html", null, true);
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "title", array()), "html", null, true);
                    echo "</a>
              ";
                } else {
                    // line 25
                    echo "                ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "title", array()), "html", null, true);
                    echo "
              ";
                }
                // line 27
                echo "      \t\t    <div class=\"text-sm text-muted\">订单号：";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "sn", array()), "html", null, true);
                echo "</div>
      \t\t  </td>
      \t\t  <td>
      \t\t  \t";
                // line 30
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["refund"], "createdTime", array()), "Y-n-d H:i"), "html", null, true);
                echo "
      \t\t  </td>
      \t\t  <td>
      \t\t    ";
                // line 33
                echo $this->env->getExtension('topxia_web_twig')->getDictText("refundStatus:html", $this->getAttribute($context["refund"], "status", array()));
                echo "
      \t\t  </td>
    \t\t  </tr>
    \t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['refund'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "  \t\t</tbody>
  \t</table>
    ";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
            echo " 
  ";
        } else {
            // line 41
            echo "    <div class=\"empty\">没有退款记录</div>
  ";
        }
        // line 43
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyOrder:refunds.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 43,  124 => 41,  119 => 39,  115 => 37,  105 => 33,  99 => 30,  92 => 27,  86 => 25,  78 => 23,  76 => 22,  69 => 21,  67 => 20,  63 => 18,  60 => 17,  56 => 16,  47 => 9,  45 => 8,  42 => 7,  39 => 6,  32 => 3,  28 => 1,  26 => 4,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:MyOrder:layout.html.twig' %}*/
/* */
/* {% block title %}退款记录 - {{ parent() }}{% endblock %}*/
/* {% set main_nav = 'refunds' %}*/
/* */
/* {% block main_body %}*/
/* */
/*   {% if refunds %}*/
/*     <table class="table table-striped table-hover" id="refunds-table">*/
/*     	<thead>*/
/*     		<th>退款订单</th>*/
/*     		<th>退款申请时间</th>*/
/*     		<th>退款状态</th>*/
/*     	</thead>*/
/*     	<tbody>*/
/*     		{% for refund in refunds %}*/
/*     		  {% set order = orders[refund.orderId] %}*/
/*     		  <tr>*/
/*       		  <td>*/
/*               {% if order.targetType == 'course' %}*/
/*                 <a href="{{ path('course_show', {id:order.targetId}) }}" target="_blank">{{ order.title }}</a>*/
/*               {% elseif order.targetType == 'vip' %}*/
/*         		    <a href="{{ path('vip', {id:order.targetId}) }}" target="_blank">{{ order.title }}</a>*/
/*               {% else %}*/
/*                 {{ order.title }}*/
/*               {% endif %}*/
/*       		    <div class="text-sm text-muted">订单号：{{ order.sn }}</div>*/
/*       		  </td>*/
/*       		  <td>*/
/*       		  	{{ refund.createdTime|date('Y-n-d H:i') }}*/
/*       		  </td>*/
/*       		  <td>*/
/*       		    {{ dict_text('refundStatus:html', refund.status) }}*/
/*       		  </td>*/
/*     		  </tr>*/
/*     		{% endfor %}*/
/*   		</tbody>*/
/*   	</table>*/
/*     {{ web_macro.paginator(paginator) }} */
/*   {% else %}*/
/*     <div class="empty">没有退款记录</div>*/
/*   {% endif %}*/
/* */
/* {% endblock %}*/
