<?php

/* ClassroomBundle:Classroom:classroom-order.html.twig */
class __TwigTemplate_9b1344dfa22a09bf9c9cd174734ac99d86d2b787f12bf04bf268b8982d172409 extends Twig_Template
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
        echo " <div class=\"order-detail-bg  checkout\" style=\"border:none\">
   <div class=\"order-detail  clearfix\">
     <div class=\"order-img hidden-xs\">
        <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
        echo "\">
          <img class=\"img-responsive\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "middlePicture", array()), "classroom.png"), $this->env->getExtension('assets')->getAssetUrl("assets/img/default/classroom-default-213-142.png")), "html", null, true);
        echo "\"alt=\"收费\">
        </a>
     </div>
     <div class=\"order-info\">
       <p>订单名称：";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "title", array()), "html", null, true);
        echo "</p>
       <p>订单号：";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "sn", array()), "html", null, true);
        echo "</p>
       <p>
         订单价格：
         <span class=\"pay-rmb\">￥";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "amount", array()), "html", null, true);
        echo "</span>
       </p>
     </div>
   </div>
 </div>";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom:classroom-order.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 13,  39 => 10,  35 => 9,  28 => 5,  24 => 4,  19 => 1,);
    }
}
/*  <div class="order-detail-bg  checkout" style="border:none">*/
/*    <div class="order-detail  clearfix">*/
/*      <div class="order-img hidden-xs">*/
/*         <a href="{{ path('classroom_show', {id:classroom.id}) }}">*/
/*           <img class="img-responsive" src="{{ filepath(classroom.middlePicture, 'classroom.png')|default(asset('assets/img/default/classroom-default-213-142.png')) }}"alt="收费">*/
/*         </a>*/
/*      </div>*/
/*      <div class="order-info">*/
/*        <p>订单名称：{{ order.title }}</p>*/
/*        <p>订单号：{{order.sn}}</p>*/
/*        <p>*/
/*          订单价格：*/
/*          <span class="pay-rmb">￥{{order.amount}}</span>*/
/*        </p>*/
/*      </div>*/
/*    </div>*/
/*  </div>*/
