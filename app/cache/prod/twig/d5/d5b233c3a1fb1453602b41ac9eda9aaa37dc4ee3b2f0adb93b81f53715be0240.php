<?php

/* TopxiaAdminBundle:Cloud:bill.html.twig */
class __TwigTemplate_4c38b6ee76fb9c21936bc5001e2127deae9863668f32d344daafb305b405cbcd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Cloud:bill.html.twig", 1);
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
        $context["menu"] = "admin_cloud_bill";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo "
  <table class=\"table table-hover\" id=\"bill-table\">
    <tr>
      <th>账单月份</th>
      <th>空间使用量</th>
      <th>流量</th>
      <th>空间费用</th>
      <th>流量费用</th>
      <th>费用合计</th>
    </tr>
    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bills"]) ? $context["bills"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["bill"]) {
            // line 17
            echo "    <tr>
      <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["bill"], "date", array()), "html", null, true);
            echo "</td>
      <td>
        月末：";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["bill"], "space", array()), "html", null, true);
            echo "G <br> 月均： ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["bill"], "spaceAvg", array()), "html", null, true);
            echo "G
        <br><small class=\"text-muted\">免费额度：";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["bill"], "spaceGift", array()), "html", null, true);
            echo "G</small>
      </td>
      <td>
        ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["bill"], "transfer", array()), "html", null, true);
            echo "G
        <br><small class=\"text-muted\">免费额度：";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["bill"], "transferGift", array()), "html", null, true);
            echo "G/月</small>
      </td>
      <td>
        ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["bill"], "spaceFee", array()), "html", null, true);
            echo "元
        <br><small class=\"text-muted\">(单价：";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["bill"], "spacePrice", array()), "html", null, true);
            echo "元/G)</small>
      </td>
      <td>
        ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["bill"], "transferFee", array()), "html", null, true);
            echo "元
        <br><small class=\"text-muted\">(单价：";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["bill"], "transferPrice", array()), "html", null, true);
            echo "元/G)</small>
      </td>
      <td><strong class=\"text-success\">";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["bill"], "totalFee", array()), "html", null, true);
            echo "元</strong></td>
    </tr>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 38
            echo "      <tr><td colspan=\"20\"><div class=\"empty\">暂无账单记录</div></td></tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bill'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "  </table>

  <div class=\"alert alert-info\">
    空间费用 = 月均空间使用量 * 空间单价
  </div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Cloud:bill.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 40,  108 => 38,  100 => 35,  95 => 33,  91 => 32,  85 => 29,  81 => 28,  75 => 25,  71 => 24,  65 => 21,  59 => 20,  54 => 18,  51 => 17,  46 => 16,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set menu = 'admin_cloud_bill' %}*/
/* */
/* {% block main %}*/
/* */
/*   <table class="table table-hover" id="bill-table">*/
/*     <tr>*/
/*       <th>账单月份</th>*/
/*       <th>空间使用量</th>*/
/*       <th>流量</th>*/
/*       <th>空间费用</th>*/
/*       <th>流量费用</th>*/
/*       <th>费用合计</th>*/
/*     </tr>*/
/*     {% for bill in bills %}*/
/*     <tr>*/
/*       <td>{{ bill.date }}</td>*/
/*       <td>*/
/*         月末：{{ bill.space }}G <br> 月均： {{ bill.spaceAvg }}G*/
/*         <br><small class="text-muted">免费额度：{{ bill.spaceGift }}G</small>*/
/*       </td>*/
/*       <td>*/
/*         {{ bill.transfer }}G*/
/*         <br><small class="text-muted">免费额度：{{ bill.transferGift }}G/月</small>*/
/*       </td>*/
/*       <td>*/
/*         {{ bill.spaceFee }}元*/
/*         <br><small class="text-muted">(单价：{{ bill.spacePrice }}元/G)</small>*/
/*       </td>*/
/*       <td>*/
/*         {{ bill.transferFee }}元*/
/*         <br><small class="text-muted">(单价：{{ bill.transferPrice }}元/G)</small>*/
/*       </td>*/
/*       <td><strong class="text-success">{{ bill.totalFee }}元</strong></td>*/
/*     </tr>*/
/*     {% else %}*/
/*       <tr><td colspan="20"><div class="empty">暂无账单记录</div></td></tr>*/
/*     {% endfor %}*/
/*   </table>*/
/* */
/*   <div class="alert alert-info">*/
/*     空间费用 = 月均空间使用量 * 空间单价*/
/*   </div>*/
/* */
/* {% endblock %}*/
