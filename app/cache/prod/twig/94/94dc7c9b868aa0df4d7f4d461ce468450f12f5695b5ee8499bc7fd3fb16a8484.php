<?php

/* TopxiaAdminBundle:MoneyCard:money-card-table-tr.html.twig */
class __TwigTemplate_8fd6817e54cc768feda8f98df08ec850b2c7fa980006c3afeb903d050b4cedb7 extends Twig_Template
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
        $context["admin_macro"] = $this->loadTemplate("TopxiaAdminBundle::macro.html.twig", "TopxiaAdminBundle:MoneyCard:money-card-table-tr.html.twig", 1);
        // line 2
        echo "<tr id=\"money-card-table-tr-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["moneyCard"]) ? $context["moneyCard"] : null), "id", array()), "html", null, true);
        echo "\">
  <td>
    <strong>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["moneyCard"]) ? $context["moneyCard"] : null), "cardId", array()), "html", null, true);
        echo "</strong>
  </td>

  <td>
    <span class=\"text-sm\"><a href=\"javascript:;\" class=\"btn btn-link\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_money_card_get_password", array("id" => $this->getAttribute((isset($context["moneyCard"]) ? $context["moneyCard"] : null), "id", array()))), "html", null, true);
        echo "\">查看密码</a></span>
  </td>

  <td>
    <span class=\"text-sm\">";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["moneyCard"]) ? $context["moneyCard"] : null), "deadline", array()), "html", null, true);
        echo "</span>
  </td>

  <td>
    <span class=\"text-sm\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["moneyCard"]) ? $context["moneyCard"] : null), "batchId", array()), "html", null, true);
        echo "</span>
  </td>

  <td>
    ";
        // line 20
        if (($this->getAttribute((isset($context["moneyCard"]) ? $context["moneyCard"] : null), "cardStatus", array()) == "normal")) {
            // line 21
            echo "      <span class=\"text-sm\">正常</span>
    ";
        } elseif (($this->getAttribute(        // line 22
(isset($context["moneyCard"]) ? $context["moneyCard"] : null), "cardStatus", array()) == "invalid")) {
            // line 23
            echo "      <span class=\"text-sm\">作废</span>
    ";
        }
        // line 25
        echo "  </td>

  <td>
    ";
        // line 28
        if (($this->getAttribute((isset($context["moneyCard"]) ? $context["moneyCard"] : null), "rechargeTime", array()) == 0)) {
            // line 29
            echo "      <span class=\"text-sm\">未充值</span>
    ";
        } else {
            // line 31
            echo "      <span class=\"text-sm\">已充值(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["moneyCard"]) ? $context["moneyCard"] : null), "rechargeUserId", array()), "html", null, true);
            echo ")</span>
      <br />
      <span class=\"text-sm\">";
            // line 33
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["moneyCard"]) ? $context["moneyCard"] : null), "rechargeTime", array()), "Y-n-d H:i:s"), "html", null, true);
            echo "</span>
    ";
        }
        // line 35
        echo "  </td>

  <td>
    <span class=\"text-sm\"><a href=\"javascript:;\" class=\"btn btn-link delete\" data-url=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_money_card_delete", array("id" => $this->getAttribute((isset($context["moneyCard"]) ? $context["moneyCard"] : null), "id", array()))), "html", null, true);
        echo "\">删除</a></span>
    ";
        // line 39
        if (($this->getAttribute((isset($context["moneyCard"]) ? $context["moneyCard"] : null), "cardStatus", array()) == "normal")) {
            // line 40
            echo "      <span class=\"text-sm\"><a class=\"btn btn-link lock-money-card\" href=\"javascript:\" title=\"作废充值卡";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["moneyCard"]) ? $context["moneyCard"] : null), "cardId", array()), "html", null, true);
            echo "\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_money_card_lock", array("id" => $this->getAttribute((isset($context["moneyCard"]) ? $context["moneyCard"] : null), "id", array()))), "html", null, true);
            echo "\">作废</a></span>
    ";
        } elseif (($this->getAttribute(        // line 41
(isset($context["moneyCard"]) ? $context["moneyCard"] : null), "cardStatus", array()) == "invalid")) {
            // line 42
            echo "      <span class=\"text-sm\"><a class=\"btn btn-link unlock-money-card\" href=\"javascript:\" title=\"启用充值卡";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["moneyCard"]) ? $context["moneyCard"] : null), "cardId", array()), "html", null, true);
            echo "\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_money_card_unlock", array("id" => $this->getAttribute((isset($context["moneyCard"]) ? $context["moneyCard"] : null), "id", array()))), "html", null, true);
            echo "\">启用</a></span>
    ";
        }
        // line 44
        echo "  </td>
</tr>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:MoneyCard:money-card-table-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 44,  108 => 42,  106 => 41,  99 => 40,  97 => 39,  93 => 38,  88 => 35,  83 => 33,  77 => 31,  73 => 29,  71 => 28,  66 => 25,  62 => 23,  60 => 22,  57 => 21,  55 => 20,  48 => 16,  41 => 12,  34 => 8,  27 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% import 'TopxiaAdminBundle::macro.html.twig' as admin_macro %}*/
/* <tr id="money-card-table-tr-{{ moneyCard.id }}">*/
/*   <td>*/
/*     <strong>{{ moneyCard.cardId }}</strong>*/
/*   </td>*/
/* */
/*   <td>*/
/*     <span class="text-sm"><a href="javascript:;" class="btn btn-link" data-toggle="modal" data-target="#modal" data-url="{{ path('admin_money_card_get_password', {id:moneyCard.id}) }}">查看密码</a></span>*/
/*   </td>*/
/* */
/*   <td>*/
/*     <span class="text-sm">{{ moneyCard.deadline }}</span>*/
/*   </td>*/
/* */
/*   <td>*/
/*     <span class="text-sm">{{ moneyCard.batchId }}</span>*/
/*   </td>*/
/* */
/*   <td>*/
/*     {% if moneyCard.cardStatus == 'normal' %}*/
/*       <span class="text-sm">正常</span>*/
/*     {% elseif moneyCard.cardStatus == 'invalid' %}*/
/*       <span class="text-sm">作废</span>*/
/*     {% endif %}*/
/*   </td>*/
/* */
/*   <td>*/
/*     {% if moneyCard.rechargeTime == 0 %}*/
/*       <span class="text-sm">未充值</span>*/
/*     {% else %}*/
/*       <span class="text-sm">已充值({{ moneyCard.rechargeUserId }})</span>*/
/*       <br />*/
/*       <span class="text-sm">{{ moneyCard.rechargeTime|date('Y-n-d H:i:s') }}</span>*/
/*     {% endif %}*/
/*   </td>*/
/* */
/*   <td>*/
/*     <span class="text-sm"><a href="javascript:;" class="btn btn-link delete" data-url="{{ path('admin_money_card_delete', {id:moneyCard.id}) }}">删除</a></span>*/
/*     {% if moneyCard.cardStatus == 'normal' %}*/
/*       <span class="text-sm"><a class="btn btn-link lock-money-card" href="javascript:" title="作废充值卡{{ moneyCard.cardId }}" data-url="{{ path('admin_money_card_lock', {id:moneyCard.id }) }}">作废</a></span>*/
/*     {% elseif moneyCard.cardStatus == 'invalid' %}*/
/*       <span class="text-sm"><a class="btn btn-link unlock-money-card" href="javascript:" title="启用充值卡{{ moneyCard.cardId }}" data-url="{{ path('admin_money_card_unlock', {id:moneyCard.id }) }}">启用</a></span>*/
/*     {% endif %}*/
/*   </td>*/
/* </tr>*/
/* */
/* */
