<?php

/* TopxiaWebBundle:PayCenter:course-order.html.twig */
class __TwigTemplate_79ce2c9e401581554885f67ebb75b2097eda80bea2ddeaa9bca595e7415fd36d extends Twig_Template
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
        echo "<div class=\"order-detail-bg  checkout\" style=\"border:none\">
  <div class=\"order-detail  clearfix\">
    <div class=\"order-img hidden-xs\">
      <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\">
        <img class=\"img-responsive\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "middlePicture", array()), "course.png"), "html", null, true);
        echo "\"alt=\"收费\"></a>
    </div>
    <div class=\"order-info\">
      <p>订单名称：";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "title", array()), "html", null, true);
        echo "</p>
      <p>订单号：";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "sn", array()), "html", null, true);
        echo "</p>
      <p>
        订单价格：
        <span class=\"pay-rmb\">￥";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "amount", array()), "html", null, true);
        echo "</span>
      </p>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:PayCenter:course-order.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 12,  38 => 9,  34 => 8,  28 => 5,  24 => 4,  19 => 1,);
    }
}
/* <div class="order-detail-bg  checkout" style="border:none">*/
/*   <div class="order-detail  clearfix">*/
/*     <div class="order-img hidden-xs">*/
/*       <a href="{{ path('course_show', {id:course.id}) }}">*/
/*         <img class="img-responsive" src="{{ filepath(course.middlePicture, 'course.png') }}"alt="收费"></a>*/
/*     </div>*/
/*     <div class="order-info">*/
/*       <p>订单名称：{{ order.title }}</p>*/
/*       <p>订单号：{{order.sn}}</p>*/
/*       <p>*/
/*         订单价格：*/
/*         <span class="pay-rmb">￥{{order.amount}}</span>*/
/*       </p>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
