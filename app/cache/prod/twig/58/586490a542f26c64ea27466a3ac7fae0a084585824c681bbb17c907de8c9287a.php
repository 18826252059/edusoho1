<?php

/* TopxiaAdminBundle:OperationAnalysis:income.table.html.twig */
class __TwigTemplate_13e3e16c07de26d58a56c1685d8310b001e77524e817cc0abbb26e7d2c5e5581 extends Twig_Template
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
        if ((isset($context["incomeDetail"]) ? $context["incomeDetail"] : null)) {
            // line 14
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["incomeDetail"]) ? $context["incomeDetail"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                // line 15
                echo "            ";
                if ((($this->getAttribute($context["data"], "totalPrice", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["data"], "totalPrice", array()), null)) : (null))) {
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
                    ";
                    // line 19
                    if (($this->getAttribute($context["data"], "targetType", array()) == "course")) {
                        // line 20
                        echo "                    <td class=\"text-danger\"> ";
                        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["courses"]) ? $context["courses"] : null), $this->getAttribute($context["data"], "targetId", array()), array(), "array", false, true), "price", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["courses"]) ? $context["courses"] : null), $this->getAttribute($context["data"], "targetId", array()), array(), "array", false, true), "price", array()), "")) : ("")), "html", null, true);
                        echo "</td>
                    ";
                    } elseif (($this->getAttribute(                    // line 21
$context["data"], "targetType", array()) == "vip")) {
                        // line 22
                        echo "                    <td class=\"text-danger\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "totalPrice", array()), "html", null, true);
                        echo "</td>
                    ";
                    } elseif (($this->getAttribute(                    // line 23
$context["data"], "targetType", array()) == "classroom")) {
                        // line 24
                        echo "                    <td class=\"text-danger\">";
                        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["classrooms"]) ? $context["classrooms"] : null), $this->getAttribute($context["data"], "targetId", array()), array(), "array", false, true), "price", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["classrooms"]) ? $context["classrooms"] : null), $this->getAttribute($context["data"], "targetId", array()), array(), "array", false, true), "price", array()), "")) : ("")), "html", null, true);
                        echo "</td>
                    ";
                    }
                    // line 26
                    echo "
                    <td>";
                    // line 27
                    if ($this->getAttribute($context["data"], "coupon", array())) {
                        echo "优惠码<br>[";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "coupon", array()), "html", null, true);
                        echo "]";
                    }
                    echo "</td>
                   <td> ";
                    // line 28
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : null), "user_link", array(0 => $this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["data"], "userId", array()), array(), "array")), "method"), "html", null, true);
                    echo "</td>
                   <td>";
                    // line 29
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["data"], "createdTime", array()), "Y-m-d H:i:s"), "html", null, true);
                    echo "<br>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["data"], "paidTime", array()), "Y-m-d H:i:s"), "html", null, true);
                    echo "</td>
              </tr>
              ";
                } else {
                    // line 32
                    echo "              <tr class=\"danger\">
                    <td>";
                    // line 33
                    echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "title", array()), "html", null, true);
                    echo "(此课程已不存在)<br>订单号:";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "sn", array()), "html", null, true);
                    echo "</td>
                    <td class=\"text-danger\">";
                    // line 34
                    echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "amount", array()), "html", null, true);
                    echo "</td>
                    <td class=\"text-danger\"> --</td>
                    <td>";
                    // line 36
                    if ($this->getAttribute($context["data"], "coupon", array())) {
                        echo "优惠码<br>[";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "coupon", array()), "html", null, true);
                        echo "]";
                    }
                    echo "</td>
                   <td> ";
                    // line 37
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : null), "user_link", array(0 => $this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["data"], "userId", array()), array(), "array")), "method"), "html", null, true);
                    echo "</td>
                   <td>";
                    // line 38
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["data"], "createdTime", array()), "Y-m-d H:i:s"), "html", null, true);
                    echo "<br>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["data"], "paidTime", array()), "Y-m-d H:i:s"), "html", null, true);
                    echo "</td>
              </tr>
              ";
                }
                // line 41
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "            ";
        }
        // line 43
        echo "          </tbody>
      </table>    
      ";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:OperationAnalysis:income.table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 45,  144 => 43,  141 => 42,  135 => 41,  127 => 38,  123 => 37,  115 => 36,  110 => 34,  104 => 33,  101 => 32,  93 => 29,  89 => 28,  81 => 27,  78 => 26,  72 => 24,  70 => 23,  65 => 22,  63 => 21,  58 => 20,  56 => 19,  52 => 18,  46 => 17,  43 => 16,  40 => 15,  35 => 14,  33 => 13,  19 => 1,);
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
/*             {% if incomeDetail %}*/
/*             {% for data in incomeDetail %}*/
/*             {% if data.totalPrice|default(null) %}*/
/*               <tr>*/
/*                     <td>{{data.title}}<br>订单号:{{data.sn}}</td>*/
/*                     <td class="text-danger">{{data.amount}}</td>*/
/*                     {% if data.targetType == "course" %}*/
/*                     <td class="text-danger"> {{courses[data.targetId].price|default("")}}</td>*/
/*                     {% elseif data.targetType == "vip" %}*/
/*                     <td class="text-danger">{{data.totalPrice}}</td>*/
/*                     {% elseif data.targetType == "classroom" %}*/
/*                     <td class="text-danger">{{classrooms[data.targetId].price|default("")}}</td>*/
/*                     {% endif %}*/
/* */
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
