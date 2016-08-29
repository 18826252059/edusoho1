<?php

/* TopxiaAdminBundle:System:refund.html.twig */
class __TwigTemplate_7df22542063dcbf4614b44ef4f4c6090f5d519fd481c1750141cd79aa4160f8b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:System:refund.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["menu"] = "admin_setting_refund";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo "
";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"form-horizontal\" method=\"post\" novalidate>
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"max-refund-days-field\" >退款期限</label>
    </div>
    <div class=\"controls col-md-8\">
      <input id=\"max-refund-days-field\" class=\"form-control\" name=\"maxRefundDays\" type=\"text\"   value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["refundSetting"]) ? $context["refundSetting"] : null), "maxRefundDays", array()), "html", null, true);
        echo "\">
      <div class=\"help-block\">用户在退款期限的天数内，可以申请退款。退款期限为０，则不能申请退款。</div>
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"apply-notification-field\" >退款申请通知</label>
    </div>
    <div class=\"controls col-md-8\">
      <textarea id=\"apply-notification-field\" class=\"form-control\" name=\"applyNotification\">";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["refundSetting"]) ? $context["refundSetting"] : null), "applyNotification", array()), "html", null, true);
        echo "</textarea>
      <div class=\"help-block\">退款申请提交时，发送给用户的站内通知。</div>
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"success-notification-field\" >退款审核通过通知</label>
    </div>
    <div class=\"controls col-md-8\">
      <textarea id=\"success-notification-field\" class=\"form-control\" name=\"successNotification\">";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["refundSetting"]) ? $context["refundSetting"] : null), "successNotification", array()), "html", null, true);
        echo "</textarea>
      <div class=\"help-block\">管理员审核退款通过时，发送给用户的站内通知。</div>
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"failed-notification-field\">退款审核未通过通知</label>
    </div>
    <div class=\"controls col-md-8\">
      <textarea id=\"failed-notification-field\" class=\"form-control\" name=\"failedNotification\">";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["refundSetting"]) ? $context["refundSetting"] : null), "failedNotification", array()), "html", null, true);
        echo "</textarea>
      <div class=\"help-block\">管理员审核退款未通过时，发送给用户的站内通知。</div>
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\"></div>
    <div class=\"controls col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">提交</button>
    </div>
  </div>
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>

";
        // line 67
        echo "
<div class=\"alert alert-info\">
  <p><strong>通知变量说明：</strong></p>
  <ul>
    <li>{{item}}: 需退款的课程或班级</li>
    <li>{{amount}}: 退款金额</li>
  </ul>
</div>
";
        echo "

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:refund.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 67,  101 => 56,  87 => 45,  74 => 35,  61 => 25,  48 => 15,  37 => 7,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set menu = 'admin_setting_refund' %}*/
/* */
/* {% block main %}*/
/* */
/* {{ web_macro.flash_messages() }}*/
/* */
/* <form class="form-horizontal" method="post" novalidate>*/
/*   <div class="form-group">*/
/*     <div class="col-md-3 control-label">*/
/*       <label for="max-refund-days-field" >退款期限</label>*/
/*     </div>*/
/*     <div class="controls col-md-8">*/
/*       <input id="max-refund-days-field" class="form-control" name="maxRefundDays" type="text"   value="{{refundSetting.maxRefundDays}}">*/
/*       <div class="help-block">用户在退款期限的天数内，可以申请退款。退款期限为０，则不能申请退款。</div>*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="form-group">*/
/*     <div class="col-md-3 control-label">*/
/*       <label for="apply-notification-field" >退款申请通知</label>*/
/*     </div>*/
/*     <div class="controls col-md-8">*/
/*       <textarea id="apply-notification-field" class="form-control" name="applyNotification">{{ refundSetting.applyNotification }}</textarea>*/
/*       <div class="help-block">退款申请提交时，发送给用户的站内通知。</div>*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="form-group">*/
/*     <div class="col-md-3 control-label">*/
/*       <label for="success-notification-field" >退款审核通过通知</label>*/
/*     </div>*/
/*     <div class="controls col-md-8">*/
/*       <textarea id="success-notification-field" class="form-control" name="successNotification">{{ refundSetting.successNotification }}</textarea>*/
/*       <div class="help-block">管理员审核退款通过时，发送给用户的站内通知。</div>*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="form-group">*/
/*     <div class="col-md-3 control-label">*/
/*       <label for="failed-notification-field">退款审核未通过通知</label>*/
/*     </div>*/
/*     <div class="controls col-md-8">*/
/*       <textarea id="failed-notification-field" class="form-control" name="failedNotification">{{ refundSetting.failedNotification }}</textarea>*/
/*       <div class="help-block">管理员审核退款未通过时，发送给用户的站内通知。</div>*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="form-group">*/
/*     <div class="col-md-3 control-label"></div>*/
/*     <div class="controls col-md-8">*/
/*       <button type="submit" class="btn btn-primary">提交</button>*/
/*     </div>*/
/*   </div>*/
/*   <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/* </form>*/
/* */
/* {% verbatim %}*/
/* <div class="alert alert-info">*/
/*   <p><strong>通知变量说明：</strong></p>*/
/*   <ul>*/
/*     <li>{{item}}: 需退款的课程或班级</li>*/
/*     <li>{{amount}}: 退款金额</li>*/
/*   </ul>*/
/* </div>*/
/* {% endverbatim %}*/
/* */
/* {% endblock %}*/
