<?php

/* TopxiaWebBundle:Card:moneycard-useable.html.twig */
class __TwigTemplate_0ac41523d3b2c1c12fe567f5dce1b6a380f8290e4b3cdce620705b024f1d9815 extends Twig_Template
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
        echo "<div class=\"card-pack-item card-item\">
  <h4>学习卡</h4>
  <p class=\"title\">学习卡可以用于账户充值</p>
  <p class=\"price\">
    <strong>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cardDetail"]) ? $context["cardDetail"] : null), "coin", array()), "html", null, true);
        echo "</strong>";
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "虚拟币"), "html", null, true);
        echo "
    <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("money_card_use_without_password", array("id" => $this->getAttribute((isset($context["cardDetail"]) ? $context["cardDetail"] : null), "id", array()), "filter" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "filter"), "method"))), "html", null, true);
        echo "\">立即使用 ></a>
  </p>
  <p>有效期截止：<span>";
        // line 8
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["cardDetail"]) ? $context["cardDetail"] : null), "deadline", array()), "Y年n月d日"), "html", null, true);
        echo "</span></p>
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Card:moneycard-useable.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 8,  31 => 6,  25 => 5,  19 => 1,);
    }
}
/* <div class="card-pack-item card-item">*/
/*   <h4>学习卡</h4>*/
/*   <p class="title">学习卡可以用于账户充值</p>*/
/*   <p class="price">*/
/*     <strong>{{ cardDetail.coin }}</strong>{{setting('coin.coin_name')|default("虚拟币")}}*/
/*     <a href="{{ path('money_card_use_without_password',{ id:cardDetail.id,filter:app.request.query.get('filter') }) }}">立即使用 ></a>*/
/*   </p>*/
/*   <p>有效期截止：<span>{{ cardDetail.deadline|date('Y年n月d日') }}</span></p>*/
/* </div>*/
/* */
