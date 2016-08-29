<?php

/* TopxiaAdminBundle:OrderRefund:refund-confirm-modal.html.twig */
class __TwigTemplate_1bd5a25b636ac2608c7dd58af3e03f85bf295ae1dc4f9a6b8310fb6d8f98f2a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaAdminBundle:OrderRefund:refund-confirm-modal.html.twig", 1);
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
        echo "审核退款申请";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "
  <form id=\"order-refund-confirm-form\" class=\"form-horizontal\" method=\"post\" action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_order_audit_refund", array("id" => $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "id", array()))), "html", null, true);
        echo "\">

    <div class=\"form-group\">
      <label class=\"col-md-3 control-label\">订单成交金额</label>
      <div class=\"col-md-8 controls\">
        <span class=\"control-text\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["order"]) ? $context["order"] : null), "amount", array()), "html", null, true);
        echo "元</span>
      </div>
    </div>

    <div class=\"form-group\">
      <label class=\"col-md-3 control-label\">审核结果</label>
      <div class=\"col-md-8 controls radios\">
        ";
        // line 18
        echo $this->env->getExtension('topxia_html_twig')->radios("result", array("pass" => "同意", "unpass" => "不同意"));
        echo "
      </div>
    </div>

    <div class=\"form-group amount-form-group\" style=\"display:none;\">
      <label class=\"col-md-3 control-label\" for=\"refund-amount-field\">实际退款金额</label>
      <div class=\"col-md-8 controls\">
        <input id=\"refund-amount-field\" class=\"form-control\" type=\"text\" name=\"amount\">
      </div>
    </div>

    <div class=\"form-group\">
      <label class=\"control-label col-md-3\" for=\"refund-note-field\">审核说明</label>
      <div class=\"col-md-8 controls\">
        <textarea id=\"refund-note-field\" class=\"form-control\" name=\"note\"></textarea>
      </div>
    </div>

    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

  </form>
";
    }

    // line 41
    public function block_footer($context, array $blocks = array())
    {
        // line 42
        echo "  <button id=\"refund-confirm-btn\" data-submiting-text=\"正在提交\" class=\"btn btn-primary\" type=\"submit\" data-toggle=\"form-submit\" data-target=\"#order-refund-confirm-form\">提交</button>
  <script>app.load('order/refund-confirm-modal')</script>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:OrderRefund:refund-confirm-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 42,  89 => 41,  81 => 36,  60 => 18,  50 => 11,  42 => 6,  39 => 5,  36 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% block title %}审核退款申请{% endblock %}*/
/* {% block body %}*/
/* */
/*   <form id="order-refund-confirm-form" class="form-horizontal" method="post" action="{{ path('admin_order_audit_refund', {id:order.id}) }}">*/
/* */
/*     <div class="form-group">*/
/*       <label class="col-md-3 control-label">订单成交金额</label>*/
/*       <div class="col-md-8 controls">*/
/*         <span class="control-text">{{ order.amount }}元</span>*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*       <label class="col-md-3 control-label">审核结果</label>*/
/*       <div class="col-md-8 controls radios">*/
/*         {{ radios('result', {pass:'同意', unpass:'不同意'}) }}*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div class="form-group amount-form-group" style="display:none;">*/
/*       <label class="col-md-3 control-label" for="refund-amount-field">实际退款金额</label>*/
/*       <div class="col-md-8 controls">*/
/*         <input id="refund-amount-field" class="form-control" type="text" name="amount">*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*       <label class="control-label col-md-3" for="refund-note-field">审核说明</label>*/
/*       <div class="col-md-8 controls">*/
/*         <textarea id="refund-note-field" class="form-control" name="note"></textarea>*/
/*       </div>*/
/*     </div>*/
/* */
/*     <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/* */
/*   </form>*/
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/*   <button id="refund-confirm-btn" data-submiting-text="正在提交" class="btn btn-primary" type="submit" data-toggle="form-submit" data-target="#order-refund-confirm-form">提交</button>*/
/*   <script>app.load('order/refund-confirm-modal')</script>*/
/* {% endblock %}*/
