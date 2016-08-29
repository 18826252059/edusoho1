<?php

/* TopxiaWebBundle:OrderRefund:refund-modal.html.twig */
class __TwigTemplate_78ffcca794a22cccfdea6da6332879142e17cd7ca04ac63ab970c5b9d2958b9e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:OrderRefund:refund-modal.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "退出学习";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "
  <form id=\"refund-form\" class=\"form-horizontal\" method=\"post\" action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("order_refund", array("id" => $this->getAttribute((isset($context["target"]) ? $context["target"] : null), "id", array()), "targetType" => (isset($context["targetType"]) ? $context["targetType"] : null))), "html", null, true);
        echo "\" data-goto=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(((isset($context["targetType"]) ? $context["targetType"] : null) . "_show"), array("id" => $this->getAttribute((isset($context["target"]) ? $context["target"] : null), "id", array()))), "html", null, true);
        echo "\">

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">退学原因</div>
      <div class=\"col-md-8 controls\">
        ";
        // line 11
        $context["reasons"] = array("bad_content" => "课程内容质量差", "bad_teacher" => "老师服务态度不好", "other" => "其他");
        // line 17
        echo "        <select class=\"form-control\" name=\"reason[type]\">
          ";
        // line 18
        echo $this->env->getExtension('topxia_html_twig')->selectOptions((isset($context["reasons"]) ? $context["reasons"] : null));
        echo "
        </select>

        <textarea class=\"form-control\" name=\"reason[note]\" placeholder=\"请输入您的退学原因\" style=\"margin-top:10px;display:none;\"></textarea>
      </div>
    </div>
    ";
        // line 24
        if (((($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "payment", array()) != "coin") && ((isset($context["maxRefundDays"]) ? $context["maxRefundDays"] : null) > 0)) && (($this->getAttribute((isset($context["order"]) ? $context["order"] : null), "amount", array()) * 100) > 0))) {
            // line 25
            echo "
      <div class=\"form-group\">
        <div class=\"col-md-8 col-md-offset-3\">
          <div class=\"checkbox\">
            <label><input type=\"checkbox\" name=\"applyRefund\" value=\"1\"";
            // line 29
            if ((((isset($context["maxRefundDays"]) ? $context["maxRefundDays"] : null) > 0) && (isset($context["refundOverdue"]) ? $context["refundOverdue"] : null))) {
                echo "disabled";
            }
            echo "> 申请退款 <span class=\"text-muted text-sm\">（购买时的价格：";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "amount", array()), "html", null, true);
            echo "元）</span></label>
          </div>
          ";
            // line 31
            if ((((isset($context["maxRefundDays"]) ? $context["maxRefundDays"] : null) > 0) && (isset($context["refundOverdue"]) ? $context["refundOverdue"] : null))) {
                // line 32
                echo "            <div class=\"alert alert-warning\">已经超出了退款期限";
                echo twig_escape_filter($this->env, (isset($context["maxRefundDays"]) ? $context["maxRefundDays"] : null), "html", null, true);
                echo "天，不能申请退款。</div>
          ";
            }
            // line 34
            echo "        </div>
      </div>

    ";
        }
        // line 38
        echo "
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

  </form>
";
    }

    // line 44
    public function block_footer($context, array $blocks = array())
    {
        // line 45
        echo "  <button class=\"btn btn-danger\" type=\"submit\" data-toggle=\"form-submit\" data-target=\"#refund-form\" data-loading-text=\"正在退出...\">退出学习</button>
  <script>app.load('order-refund/order-refund-modal')</script>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:OrderRefund:refund-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 45,  108 => 44,  100 => 39,  97 => 38,  91 => 34,  85 => 32,  83 => 31,  74 => 29,  68 => 25,  66 => 24,  57 => 18,  54 => 17,  52 => 11,  42 => 6,  39 => 5,  36 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% block title %}退出学习{% endblock %}*/
/* {% block body %}*/
/* */
/*   <form id="refund-form" class="form-horizontal" method="post" action="{{ path('order_refund', {id:target.id, targetType:targetType}) }}" data-goto="{{ path(targetType ~ '_show', {id:target.id}) }}">*/
/* */
/*     <div class="form-group">*/
/*       <div class="col-md-3 control-label">退学原因</div>*/
/*       <div class="col-md-8 controls">*/
/*         {% set reasons = {*/
/*             'bad_content': '课程内容质量差',*/
/*             'bad_teacher': '老师服务态度不好',*/
/*             'other': '其他'*/
/*           }*/
/*         %}*/
/*         <select class="form-control" name="reason[type]">*/
/*           {{ select_options(reasons) }}*/
/*         </select>*/
/* */
/*         <textarea class="form-control" name="reason[note]" placeholder="请输入您的退学原因" style="margin-top:10px;display:none;"></textarea>*/
/*       </div>*/
/*     </div>*/
/*     {% if order.payment != 'coin' and maxRefundDays > 0 and (order.amount * 100) > 0 %}*/
/* */
/*       <div class="form-group">*/
/*         <div class="col-md-8 col-md-offset-3">*/
/*           <div class="checkbox">*/
/*             <label><input type="checkbox" name="applyRefund" value="1"{% if maxRefundDays > 0 and refundOverdue %}disabled{% endif %}> 申请退款 <span class="text-muted text-sm">（购买时的价格：{{ order.amount }}元）</span></label>*/
/*           </div>*/
/*           {% if maxRefundDays > 0 and refundOverdue %}*/
/*             <div class="alert alert-warning">已经超出了退款期限{{ maxRefundDays }}天，不能申请退款。</div>*/
/*           {% endif %}*/
/*         </div>*/
/*       </div>*/
/* */
/*     {% endif %}*/
/* */
/*     <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/* */
/*   </form>*/
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/*   <button class="btn btn-danger" type="submit" data-toggle="form-submit" data-target="#refund-form" data-loading-text="正在退出...">退出学习</button>*/
/*   <script>app.load('order-refund/order-refund-modal')</script>*/
/* {% endblock %}*/
