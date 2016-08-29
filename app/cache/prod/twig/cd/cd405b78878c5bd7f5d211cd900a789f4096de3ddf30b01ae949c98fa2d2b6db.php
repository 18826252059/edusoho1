<?php

/* TopxiaWebBundle:PayCenter:resultNotice.html.twig */
class __TwigTemplate_8113200f49bcd54d2574ea128281fc88449f7624940581250961a657d6bae962 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:PayCenter:resultNotice.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "支付提醒 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
<div id=\"page-message-container\" class=\"page-message-container\">
  <div class=\"page-message-panel\">
    <div class=\"page-message-heading\">
      <h2 class=\"page-message-title\">支付提醒</h2>
    </div>
    <div class=\"page-message-body\">
      ";
        // line 13
        if (($this->env->getExtension('topxia_web_twig')->getSetting("payment.alipay_type") == "escow")) {
            // line 14
            echo "        由于网校使用的为“担保交易”，因此需要您去支付宝网站对本次购买做“确认收货”操作（系统已自动完成虚拟发货），确认后即支付成功，即可进入课程学习。
      ";
        } else {
            // line 16
            echo "      \t由于您在支付时选择的交易方式是“担保交易”，因此需要您去支付宝网站对本次购买做“确认收货”操作（系统已自动完成虚拟发货），确认后即支付成功，即可进入课程学习。
      ";
        }
        // line 18
        echo "\t\t  <a class=\"text-success fsm\" href=\"http://www.alipay.com\">点击进入支付宝 &raquo;</a>
\t\t</div>
\t</div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:PayCenter:resultNotice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 18,  54 => 16,  50 => 14,  48 => 13,  39 => 6,  36 => 5,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::layout.html.twig' %}*/
/* */
/* {% block title %}支付提醒 - {{ parent() }}{% endblock %}*/
/* */
/* {% block content %}*/
/* */
/* <div id="page-message-container" class="page-message-container">*/
/*   <div class="page-message-panel">*/
/*     <div class="page-message-heading">*/
/*       <h2 class="page-message-title">支付提醒</h2>*/
/*     </div>*/
/*     <div class="page-message-body">*/
/*       {% if setting('payment.alipay_type') == 'escow' %}*/
/*         由于网校使用的为“担保交易”，因此需要您去支付宝网站对本次购买做“确认收货”操作（系统已自动完成虚拟发货），确认后即支付成功，即可进入课程学习。*/
/*       {% else %}*/
/*       	由于您在支付时选择的交易方式是“担保交易”，因此需要您去支付宝网站对本次购买做“确认收货”操作（系统已自动完成虚拟发货），确认后即支付成功，即可进入课程学习。*/
/*       {% endif %}*/
/* 		  <a class="text-success fsm" href="http://www.alipay.com">点击进入支付宝 &raquo;</a>*/
/* 		</div>*/
/* 	</div>*/
/*   </div>*/
/* </div>*/
/* {% endblock %}*/
