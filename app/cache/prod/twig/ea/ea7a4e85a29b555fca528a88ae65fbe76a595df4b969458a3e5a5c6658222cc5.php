<?php

/* TopxiaWebBundle:Card:receive-show.html.twig */
class __TwigTemplate_67605e926fd4a3a7d119decff8559bbeafc84694d0a84f4f7c25b93f75338020 extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Card:receive-show.html.twig", 1);
        // line 3
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
            // line 4
            echo "<div class=\"modal-dialog modal-card-pack modal-logined\">
  <div class=\"modal-content\">
    <div class=\"modal-body\">
      <div class=\"modal-info\">
        您领取了一张";
            // line 8
            if ((array_key_exists("cardType", $context) && ((isset($context["cardType"]) ? $context["cardType"] : null) == "coupon"))) {
                echo "优惠券";
            }
            if ((array_key_exists("cardType", $context) && ((isset($context["cardType"]) ? $context["cardType"] : null) == "moneyCard"))) {
                echo "学习卡";
            }
            echo "，已添加至“我的卡包“
      </div>
      ";
            // line 11
            echo "      ";
            if ((( !(null === (isset($context["cardId"]) ? $context["cardId"] : null)) &&  !(null === (isset($context["cardDetail"]) ? $context["cardDetail"] : null))) && ((isset($context["cardType"]) ? $context["cardType"] : null) == "coupon"))) {
                // line 12
                echo "        ";
                $this->loadTemplate("TopxiaWebBundle:Card:coupon-useable.html.twig", "TopxiaWebBundle:Card:receive-show.html.twig", 12)->display($context);
                // line 13
                echo "      ";
            }
            // line 14
            echo "      ";
            if ((( !(null === (isset($context["cardId"]) ? $context["cardId"] : null)) &&  !(null === (isset($context["cardDetail"]) ? $context["cardDetail"] : null))) && ((isset($context["cardType"]) ? $context["cardType"] : null) == "moneyCard"))) {
                // line 15
                echo "        ";
                $this->loadTemplate("TopxiaWebBundle:Card:moneycard-useable.html.twig", "TopxiaWebBundle:Card:receive-show.html.twig", 15)->display($context);
                // line 16
                echo "      ";
            }
            // line 17
            echo "      <div class=\"modal-action\">
        <a href=\"\" class=\"btn btn-ghost-white btn-xlg\" data-dismiss=\"modal\">立即使用</a>
      </div>
    </div>
  </div>
</div>
";
        } else {
            // line 24
            echo "
";
            // line 26
            echo "<div class=\"modal-dialog modal-card-pack\">
  <div class=\"modal-content\">
    <div class=\"modal-body\">
      <div class=\"modal-info\">
        您还没有登录，请在登录后领取。
      </div>
      ";
            // line 32
            if ((( !(null === (isset($context["cardId"]) ? $context["cardId"] : null)) &&  !(null === (isset($context["cardDetail"]) ? $context["cardDetail"] : null))) && ((isset($context["cardType"]) ? $context["cardType"] : null) == "coupon"))) {
                // line 33
                echo "        ";
                $this->loadTemplate("TopxiaWebBundle:Card:coupon-useable.html.twig", "TopxiaWebBundle:Card:receive-show.html.twig", 33)->display($context);
                // line 34
                echo "      ";
            }
            // line 35
            echo "      ";
            if ((( !(null === (isset($context["cardId"]) ? $context["cardId"] : null)) &&  !(null === (isset($context["cardDetail"]) ? $context["cardDetail"] : null))) && ((isset($context["cardType"]) ? $context["cardType"] : null) == "moneyCard"))) {
                // line 36
                echo "        ";
                $this->loadTemplate("TopxiaWebBundle:Card:moneycard-useable.html.twig", "TopxiaWebBundle:Card:receive-show.html.twig", 36)->display($context);
                // line 37
                echo "      ";
            }
            // line 38
            echo "      <div class=\"modal-action\">
        <a href=\"\" class=\"btn btn-ghost-white btn-xlg\" data-dismiss=\"modal\" >登录查看</a>
      </div>
    </div>
  </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Card:receive-show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 38,  91 => 37,  88 => 36,  85 => 35,  82 => 34,  79 => 33,  77 => 32,  69 => 26,  66 => 24,  57 => 17,  54 => 16,  51 => 15,  48 => 14,  45 => 13,  42 => 12,  39 => 11,  29 => 8,  23 => 4,  21 => 3,  19 => 1,);
    }
}
/* {% import "TopxiaWebBundle::macro.html.twig" as web_macro %}*/
/* {#登录后#}*/
/* {% if app.user %}*/
/* <div class="modal-dialog modal-card-pack modal-logined">*/
/*   <div class="modal-content">*/
/*     <div class="modal-body">*/
/*       <div class="modal-info">*/
/*         您领取了一张{% if cardType is defined and cardType == "coupon" %}优惠券{% endif %}{% if cardType is defined and cardType == "moneyCard" %}学习卡{% endif %}，已添加至“我的卡包“*/
/*       </div>*/
/*       {#卡券内容#}*/
/*       {% if cardId is not null and cardDetail is not null and cardType == "coupon" %}*/
/*         {% include 'TopxiaWebBundle:Card:coupon-useable.html.twig' %}*/
/*       {% endif %}*/
/*       {% if cardId is not null and cardDetail is not null and cardType == "moneyCard" %}*/
/*         {% include 'TopxiaWebBundle:Card:moneycard-useable.html.twig' %}*/
/*       {% endif %}*/
/*       <div class="modal-action">*/
/*         <a href="" class="btn btn-ghost-white btn-xlg" data-dismiss="modal">立即使用</a>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {% else %}*/
/* */
/* {#登录前#}*/
/* <div class="modal-dialog modal-card-pack">*/
/*   <div class="modal-content">*/
/*     <div class="modal-body">*/
/*       <div class="modal-info">*/
/*         您还没有登录，请在登录后领取。*/
/*       </div>*/
/*       {% if cardId is not null and cardDetail is not null and cardType == "coupon" %}*/
/*         {% include 'TopxiaWebBundle:Card:coupon-useable.html.twig' %}*/
/*       {% endif %}*/
/*       {% if cardId is not null and cardDetail is not null and cardType == "moneyCard" %}*/
/*         {% include 'TopxiaWebBundle:Card:moneycard-useable.html.twig' %}*/
/*       {% endif %}*/
/*       <div class="modal-action">*/
/*         <a href="" class="btn btn-ghost-white btn-xlg" data-dismiss="modal" >登录查看</a>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* {% endif %}*/
