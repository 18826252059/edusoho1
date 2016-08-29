<?php

/* TopxiaWebBundle:Card:moneycard-used.html.twig */
class __TwigTemplate_0fa6bd7666fcedb9069d90100937ad77d3602a60c7bf92cbaec406d90d9f6b21 extends Twig_Template
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
        echo "<div class=\"card-pack-item card-item useless\">
  <h4>学习卡</h4>
  <p class=\"title\">学习卡可以用于账户充值</p>
  <p class=\"price\">
    <strong>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cardDetail"]) ? $context["cardDetail"] : null), "coin", array()), "html", null, true);
        echo "</strong>";
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "虚拟币"), "html", null, true);
        echo "
  </p>
  <p>有效期截止：<span>";
        // line 7
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["cardDetail"]) ? $context["cardDetail"] : null), "deadline", array()), "Y年n月d日"), "html", null, true);
        echo "</span></p>
  <div class=\"stamp stamp-used\"></div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Card:moneycard-used.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 7,  25 => 5,  19 => 1,);
    }
}
/* <div class="card-pack-item card-item useless">*/
/*   <h4>学习卡</h4>*/
/*   <p class="title">学习卡可以用于账户充值</p>*/
/*   <p class="price">*/
/*     <strong>{{ cardDetail.coin }}</strong>{{setting('coin.coin_name')|default("虚拟币")}}*/
/*   </p>*/
/*   <p>有效期截止：<span>{{ cardDetail.deadline|date('Y年n月d日') }}</span></p>*/
/*   <div class="stamp stamp-used"></div>*/
/* </div>*/
/* */
