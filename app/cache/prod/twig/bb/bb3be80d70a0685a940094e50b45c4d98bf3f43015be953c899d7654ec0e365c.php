<?php

/* TopxiaAdminBundle:OperationAnalysis:vipIncome.table.html.twig */
class __TwigTemplate_941cb3b8be42cad24f5f584f92edc9a606d7a38b0efa5840563f4bc4a5010883 extends Twig_Template
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
        echo "      <table id=\"user-table\" class=\"table table-striped table-hover\" data-search-form=\"#user-search-form\">
          <thead>
            <tr>
              <th>课程</th>
              <th>实付</th>
              <th>价格</th>
              <th>优惠</th>
              <th>购买者</th>
              <th>下单&支付时间</th>
            </tr>
          </thead>
          <tbody>
            ";
        // line 13
        if ((isset($context["vipIncomeDetail"]) ? $context["vipIncomeDetail"] : null)) {
            // line 14
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(((array_key_exists("vipIncomeDetail", $context)) ? (_twig_default_filter((isset($context["vipIncomeDetail"]) ? $context["vipIncomeDetail"] : null), null)) : (null)));
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                // line 15
                echo "            ";
                if ($this->getAttribute($context["data"], "totalPrice", array())) {
                    // line 16
                    echo "              <tr>
                   <td>";
                    // line 17
                    echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "title", array()), "html", null, true);
                    echo "<br>订单号:";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "sn", array()), "html", null, true);
                    echo "</td>
                    <td class=\"text-danger\">";
                    // line 18
                    echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "amount", array()), "html", null, true);
                    echo "</td>
                    <td class=\"text-danger\">";
                    // line 19
                    echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "totalPrice", array()), "html", null, true);
                    echo "</td>
                    <td>";
                    // line 20
                    if ($this->getAttribute($context["data"], "coupon", array())) {
                        echo "优惠码<br>[";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "coupon", array()), "html", null, true);
                        echo "]";
                    }
                    echo "</td>
                   <td> ";
                    // line 21
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : null), "user_link", array(0 => $this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["data"], "userId", array()), array(), "array")), "method"), "html", null, true);
                    echo "</td>
                   <td>";
                    // line 22
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["data"], "createdTime", array()), "Y-m-d H:i:s"), "html", null, true);
                    echo "<br>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["data"], "paidTime", array()), "Y-m-d H:i:s"), "html", null, true);
                    echo "</td>
              </tr>
              ";
                } else {
                    // line 25
                    echo "              <tr class=\"danger\">
                    <td>";
                    // line 26
                    echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "title", array()), "html", null, true);
                    echo "(此课程已不存在)<br>订单号:";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "sn", array()), "html", null, true);
                    echo "</td>
                    <td class=\"text-danger\">";
                    // line 27
                    echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "amount", array()), "html", null, true);
                    echo "</td>
                    <td class=\"text-danger\"> --</td>
                    <td>";
                    // line 29
                    if ($this->getAttribute($context["data"], "coupon", array())) {
                        echo "优惠码<br>[";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "coupon", array()), "html", null, true);
                        echo "]";
                    }
                    echo "</td>
                   <td> ";
                    // line 30
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : null), "user_link", array(0 => $this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["data"], "userId", array()), array(), "array")), "method"), "html", null, true);
                    echo "</td>
                   <td>";
                    // line 31
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["data"], "createdTime", array()), "Y-m-d H:i:s"), "html", null, true);
                    echo "<br>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["data"], "paidTime", array()), "Y-m-d H:i:s"), "html", null, true);
                    echo "</td>
              </tr>
              ";
                }
                // line 34
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "            ";
        }
        // line 36
        echo "          </tbody>
      </table>    
      ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:OperationAnalysis:vipIncome.table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 38,  123 => 36,  120 => 35,  114 => 34,  106 => 31,  102 => 30,  94 => 29,  89 => 27,  83 => 26,  80 => 25,  72 => 22,  68 => 21,  60 => 20,  56 => 19,  52 => 18,  46 => 17,  43 => 16,  40 => 15,  35 => 14,  33 => 13,  19 => 1,);
    }
}
/*       <table id="user-table" class="table table-striped table-hover" data-search-form="#user-search-form">*/
/*           <thead>*/
/*             <tr>*/
/*               <th>课程</th>*/
/*               <th>实付</th>*/
/*               <th>价格</th>*/
/*               <th>优惠</th>*/
/*               <th>购买者</th>*/
/*               <th>下单&支付时间</th>*/
/*             </tr>*/
/*           </thead>*/
/*           <tbody>*/
/*             {% if vipIncomeDetail %}*/
/*             {% for data in vipIncomeDetail|default(null) %}*/
/*             {% if data.totalPrice%}*/
/*               <tr>*/
/*                    <td>{{data.title}}<br>订单号:{{data.sn}}</td>*/
/*                     <td class="text-danger">{{data.amount}}</td>*/
/*                     <td class="text-danger">{{data.totalPrice}}</td>*/
/*                     <td>{% if  data.coupon %}优惠码<br>[{{data.coupon}}]{% endif %}</td>*/
/*                    <td> {{ admin_macro.user_link(users[data.userId]) }}</td>*/
/*                    <td>{{data.createdTime|date("Y-m-d H:i:s")}}<br>{{data.paidTime|date("Y-m-d H:i:s")}}</td>*/
/*               </tr>*/
/*               {% else %}*/
/*               <tr class="danger">*/
/*                     <td>{{data.title}}(此课程已不存在)<br>订单号:{{data.sn}}</td>*/
/*                     <td class="text-danger">{{data.amount}}</td>*/
/*                     <td class="text-danger"> --</td>*/
/*                     <td>{% if  data.coupon %}优惠码<br>[{{data.coupon}}]{% endif %}</td>*/
/*                    <td> {{ admin_macro.user_link(users[data.userId]) }}</td>*/
/*                    <td>{{data.createdTime|date("Y-m-d H:i:s")}}<br>{{data.paidTime|date("Y-m-d H:i:s")}}</td>*/
/*               </tr>*/
/*               {% endif %}*/
/*             {% endfor %}*/
/*             {% endif %}*/
/*           </tbody>*/
/*       </table>    */
/*       {{ web_macro.paginator(paginator) }}*/
