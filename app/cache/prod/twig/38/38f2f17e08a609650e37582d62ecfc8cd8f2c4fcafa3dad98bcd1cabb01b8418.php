<?php

/* TopxiaAdminBundle:MoneyCard:batch-table-tr.html.twig */
class __TwigTemplate_4d43e8e5f30888df301652e964581e644336f8f7c38ca0938609b2ac4be793ce extends Twig_Template
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
        $context["admin_macro"] = $this->loadTemplate("TopxiaAdminBundle::macro.html.twig", "TopxiaAdminBundle:MoneyCard:batch-table-tr.html.twig", 1);
        // line 2
        echo "<tr id=\"money-card-batch-table-tr-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["batch"]) ? $context["batch"] : null), "id", array()), "html", null, true);
        echo "\">
  <td>
    <strong>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["batch"]) ? $context["batch"] : null), "id", array()), "html", null, true);
        echo "</strong>
  </td>

  <td>
    <span class=\"text-sm\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["batch"]) ? $context["batch"] : null), "money", array()), "html", null, true);
        echo "</span>
  </td>

  <td>
    <span class=\"text-sm\">";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["batch"]) ? $context["batch"] : null), "cardPrefix", array()), "html", null, true);
        echo "</span>
  </td>

  <td>
    <span class=\"text-sm\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["batch"]) ? $context["batch"] : null), "cardLength", array()), "html", null, true);
        echo "</span>
  </td>

  <td>
    <span class=\"text-sm\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["batch"]) ? $context["batch"] : null), "deadline", array()), "html", null, true);
        echo "</span>
  </td>

  <td>
    <span class=\"text-sm\">";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["batch"]) ? $context["batch"] : null), "number", array()), "html", null, true);
        echo "</span>
  </td>

  <td>
    <span class=\"text-sm\">";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["batch"]) ? $context["batch"] : null), "rechargedNumber", array()), "html", null, true);
        echo "</span>
  </td>

  <td>
    <span class=\"text-sm\">";
        // line 32
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["batch"]) ? $context["batch"] : null), "number", array()) - $this->getAttribute((isset($context["batch"]) ? $context["batch"] : null), "rechargedNumber", array())), "html", null, true);
        echo "</span>
  </td>

  <td>
    <span class=\"text-sm\">";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["batch"]) ? $context["batch"] : null), "userId", array()), "html", null, true);
        echo "</span>
    <br />
    <span class=\"text-sm\">";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["batch"]) ? $context["batch"] : null), "createdTime", array()), "html", null, true);
        echo "</span>
  </td>

  <td>
    <span class=\"text-sm\"><a href=\"javascript:;\" class=\"btn btn-link delete\" data-url=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_money_card_batch_delete", array("id" => $this->getAttribute((isset($context["batch"]) ? $context["batch"] : null), "id", array()))), "html", null, true);
        echo "\">删除</a></span>
    <span class=\"text-sm\"><a class=\"btn btn-link lock-money-card-batch\" href=\"javascript:\" title=\"作废批次为";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["batch"]) ? $context["batch"] : null), "id", array()), "html", null, true);
        echo "的充值卡\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_money_card_lock_batch", array("id" => $this->getAttribute((isset($context["batch"]) ? $context["batch"] : null), "id", array()))), "html", null, true);
        echo "\">作废</a></span>
    <span class=\"text-sm\"><a class=\"btn btn-link unlock-money-card-batch\" href=\"javascript:;\" title=\"启用批次为";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["batch"]) ? $context["batch"] : null), "id", array()), "html", null, true);
        echo "的充值卡\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_money_card_unlock_batch", array("id" => $this->getAttribute((isset($context["batch"]) ? $context["batch"] : null), "id", array()))), "html", null, true);
        echo "\">启用</a></span>
    <span class=\"text-sm\"><a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_money_card_batch_export_csv", array("batchId" => $this->getAttribute((isset($context["batch"]) ? $context["batch"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-link\" target='_blank'>导出CSV</a></span>
  </td>
</tr>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:MoneyCard:batch-table-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 45,  105 => 44,  99 => 43,  95 => 42,  88 => 38,  83 => 36,  76 => 32,  69 => 28,  62 => 24,  55 => 20,  48 => 16,  41 => 12,  34 => 8,  27 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% import 'TopxiaAdminBundle::macro.html.twig' as admin_macro %}*/
/* <tr id="money-card-batch-table-tr-{{ batch.id }}">*/
/*   <td>*/
/*     <strong>{{ batch.id }}</strong>*/
/*   </td>*/
/* */
/*   <td>*/
/*     <span class="text-sm">{{ batch.money }}</span>*/
/*   </td>*/
/* */
/*   <td>*/
/*     <span class="text-sm">{{ batch.cardPrefix }}</span>*/
/*   </td>*/
/* */
/*   <td>*/
/*     <span class="text-sm">{{ batch.cardLength }}</span>*/
/*   </td>*/
/* */
/*   <td>*/
/*     <span class="text-sm">{{ batch.deadline }}</span>*/
/*   </td>*/
/* */
/*   <td>*/
/*     <span class="text-sm">{{ batch.number }}</span>*/
/*   </td>*/
/* */
/*   <td>*/
/*     <span class="text-sm">{{ batch.rechargedNumber }}</span>*/
/*   </td>*/
/* */
/*   <td>*/
/*     <span class="text-sm">{{ batch.number - batch.rechargedNumber }}</span>*/
/*   </td>*/
/* */
/*   <td>*/
/*     <span class="text-sm">{{ batch.userId }}</span>*/
/*     <br />*/
/*     <span class="text-sm">{{ batch.createdTime }}</span>*/
/*   </td>*/
/* */
/*   <td>*/
/*     <span class="text-sm"><a href="javascript:;" class="btn btn-link delete" data-url="{{ path('admin_money_card_batch_delete', {id:batch.id}) }}">删除</a></span>*/
/*     <span class="text-sm"><a class="btn btn-link lock-money-card-batch" href="javascript:" title="作废批次为{{ batch.id }}的充值卡" data-url="{{ path('admin_money_card_lock_batch', {id:batch.id }) }}">作废</a></span>*/
/*     <span class="text-sm"><a class="btn btn-link unlock-money-card-batch" href="javascript:;" title="启用批次为{{ batch.id }}的充值卡" data-url="{{ path('admin_money_card_unlock_batch', {id:batch.id }) }}">启用</a></span>*/
/*     <span class="text-sm"><a href="{{ path('admin_money_card_batch_export_csv', {batchId:batch.id}) }}" class="btn btn-link" target='_blank'>导出CSV</a></span>*/
/*   </td>*/
/* </tr>*/
/* */
/* */
