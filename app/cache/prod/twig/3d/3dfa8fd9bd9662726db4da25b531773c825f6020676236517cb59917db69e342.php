<?php

/* TopxiaAdminBundle:System:customer-service.html.twig */
class __TwigTemplate_46900e80bceed6389796e246ec7228f8df5506df2580dad4cc46676d07cac0b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle:System:operation.layout.html.twig", "TopxiaAdminBundle:System:customer-service.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main_content' => array($this, 'block_main_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle:System:operation.layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["submenu"] = "customer_service";
        // line 6
        $context["script_controller"] = "setting/customer-service";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "在线客户服务 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_main_content($context, array $blocks = array())
    {
        // line 9
        echo "
<div class=\"page-header\"><h1>在线客户服务</h1></div>

";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form id=\"customer-service-setting\" class=\"form-horizontal\" method=\"post\" novalidate>
  
  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label >在线客户服务</label>
    </div>
    <div class=\"controls col-md-8 radios\">
      ";
        // line 21
        echo $this->env->getExtension('topxia_html_twig')->radios("customer_service_mode", array("opened" => "开启", "closed" => "关闭"), $this->getAttribute((isset($context["customerServiceSetting"]) ? $context["customerServiceSetting"] : null), "customer_service_mode", array()));
        echo "
    </div>
  </div>
  <hr>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"customer_of_qq\" >客服QQ</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"customer_of_qq\" name=\"customer_of_qq\" class=\"form-control\" 
        value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customerServiceSetting"]) ? $context["customerServiceSetting"] : null), "customer_of_qq", array()), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"customer_of_phone\" >客服电话</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"customer_of_phone\" name=\"customer_of_phone\" class=\"form-control\" 
        value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customerServiceSetting"]) ? $context["customerServiceSetting"] : null), "customer_of_phone", array()), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"customer_of_mail\" >客服Mail</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"customer_of_mail\" name=\"customer_of_mail\" class=\"form-control\" 
        value=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customerServiceSetting"]) ? $context["customerServiceSetting"] : null), "customer_of_mail", array()), "html", null, true);
        echo "\">
      </div>
    </div>

  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\"></div>
    <div class=\"controls col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">提交</button>  
    </div>
  </div>
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:customer-service.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 62,  101 => 52,  88 => 42,  75 => 32,  61 => 21,  49 => 12,  44 => 9,  41 => 8,  34 => 3,  30 => 1,  28 => 6,  26 => 5,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle:System:operation.layout.html.twig' %}*/
/* */
/* {% block title %}在线客户服务 - {{ parent() }}{% endblock %}*/
/* */
/* {% set submenu = 'customer_service' %}*/
/* {% set script_controller = 'setting/customer-service' %}*/
/* */
/* {% block main_content %}*/
/* */
/* <div class="page-header"><h1>在线客户服务</h1></div>*/
/* */
/* {{ web_macro.flash_messages() }}*/
/* */
/* <form id="customer-service-setting" class="form-horizontal" method="post" novalidate>*/
/*   */
/*   <div class="form-group">*/
/*     <div class="col-md-3 control-label">*/
/*       <label >在线客户服务</label>*/
/*     </div>*/
/*     <div class="controls col-md-8 radios">*/
/*       {{ radios('customer_service_mode', {'opened':'开启', 'closed':'关闭'}, customerServiceSetting.customer_service_mode) }}*/
/*     </div>*/
/*   </div>*/
/*   <hr>*/
/* */
/*     <div class="form-group">*/
/*       <div class="col-md-3 control-label">*/
/*         <label for="customer_of_qq" >客服QQ</label>*/
/*       </div>*/
/*       <div class="controls col-md-8">*/
/*         <input type="text" id="customer_of_qq" name="customer_of_qq" class="form-control" */
/*         value="{{customerServiceSetting.customer_of_qq}}">*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*       <div class="col-md-3 control-label">*/
/*         <label for="customer_of_phone" >客服电话</label>*/
/*       </div>*/
/*       <div class="controls col-md-8">*/
/*         <input type="text" id="customer_of_phone" name="customer_of_phone" class="form-control" */
/*         value="{{customerServiceSetting.customer_of_phone}}">*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*       <div class="col-md-3 control-label">*/
/*         <label for="customer_of_mail" >客服Mail</label>*/
/*       </div>*/
/*       <div class="controls col-md-8">*/
/*         <input type="text" id="customer_of_mail" name="customer_of_mail" class="form-control" */
/*         value="{{customerServiceSetting.customer_of_mail}}">*/
/*       </div>*/
/*     </div>*/
/* */
/*   <div class="form-group">*/
/*     <div class="col-md-3 control-label"></div>*/
/*     <div class="controls col-md-8">*/
/*       <button type="submit" class="btn btn-primary">提交</button>  */
/*     </div>*/
/*   </div>*/
/*   <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/* </form>*/
/* */
/* {% endblock %}*/
