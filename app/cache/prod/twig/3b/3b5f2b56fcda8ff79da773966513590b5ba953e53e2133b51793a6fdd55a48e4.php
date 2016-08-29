<?php

/* TopxiaAdminBundle:Invite:set.html.twig */
class __TwigTemplate_2a7a61482450927c1f903696e6fca4bf2035b1fa877ded7aba94f9f1995405e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Invite:set.html.twig", 1);
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
        $context["menu"] = "admin_invite_set";
        // line 4
        $context["script_controller"] = "invite/setting";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "
    <form class=\"form-horizontal\" method=\"post\" id=\"invite-form\">
      <div class=\"row form-group\">
        <div class=\"col-md-2 control-label\">
          <label>邀请码设置</label>
        </div>
        <div class=\"controls col-md-7 radios\">
          ";
        // line 14
        echo $this->env->getExtension('topxia_html_twig')->radios("invite_code_setting", array(1 => "开启", 0 => "关闭"), (($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("invite"), "invite_code_setting", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("invite"), "invite_code_setting", array()), 0)) : (0)));
        echo "
        </div>
      </div>

      <div class=\"row form-group\">
        <div class=\"col-md-2 control-label\">
          <label for=\"promoted_user_value\">被邀请人注册成功获得</label>
        </div>
        <div class=\"controls col-md-7 radios\">
        <input type=\"text\" class=\"form-control width-input width-input-small\" id=\"promoted_user_value\" name=\"promoted_user_value\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inviteSetting"]) ? $context["inviteSetting"] : null), "promoted_user_value", array()), "html", null, true);
        echo "\">元面值抵价优惠券 （可用于全站消费）
        </div>
      </div>

      <div class=\"row form-group\">
        <div class=\"col-md-2 control-label\" >
          <label for=\"promote_user_value\">邀请人在被邀请人首次消费后获得</label>
        </div>
        <div class=\"controls col-md-7 radios\">
        <input type=\"text\" class=\"form-control width-input width-input-small\" id=\"promote_user_value\"name=\"promote_user_value\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inviteSetting"]) ? $context["inviteSetting"] : null), "promote_user_value", array()), "html", null, true);
        echo "\">元面值抵价优惠券 （可用于全站消费）
        </div>
      </div>

      <div class=\"row form-group\">
        <div class=\"col-md-2 control-label\" >
          <label for=\"deadline\">优惠券有效时间</label>
        </div>
        <div class=\"controls col-md-7 radios\">
          <input type=\"text\" class=\"form-control width-input width-input-small\" id=\"deadline\"name=\"deadline\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inviteSetting"]) ? $context["inviteSetting"] : null), "deadline", array()), "html", null, true);
        echo "\">天 
        </div>
      </div>

      <div class=\"row form-group\">
        <div class=\"col-md-2 control-label\" style=\"white-space:nowrap;\">
          <label>邀请信息模板</label>
        </div>
        <div class=\"controls col-md-7 radios\">
          <textarea class=\"form-control\" rows=\"5\" name=\"inviteInfomation_template\">";
        // line 50
        echo twig_escape_filter($this->env, (isset($context["inviteInfomation_template"]) ? $context["inviteInfomation_template"] : null), "html", null, true);
        echo " </textarea>
        </div>
      </div>


      <div class=\"row form-group\">
        <div class=\"col-md-2 control-label\"></div>
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
        // line 73
        echo "    
<div class=\"alert alert-info\">
  <p><strong>通知变量说明：</strong></p>
  <ul>
    <li>{{siteName}}:网校名称</li>
    <li>{{registerUrl}}:注册链接的地址</li>
  </ul>
</div>
";
        echo "

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Invite:set.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 73,  110 => 62,  95 => 50,  83 => 41,  71 => 32,  59 => 23,  47 => 14,  36 => 7,  33 => 6,  29 => 1,  27 => 4,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set menu = 'admin_invite_set' %}*/
/* {% set script_controller = 'invite/setting' %}*/
/* */
/* {% block main %}*/
/*   {{ web_macro.flash_messages() }}*/
/*     <form class="form-horizontal" method="post" id="invite-form">*/
/*       <div class="row form-group">*/
/*         <div class="col-md-2 control-label">*/
/*           <label>邀请码设置</label>*/
/*         </div>*/
/*         <div class="controls col-md-7 radios">*/
/*           {{ radios('invite_code_setting', {1:'开启', 0:'关闭'}, setting('invite').invite_code_setting|default(0)) }}*/
/*         </div>*/
/*       </div>*/
/* */
/*       <div class="row form-group">*/
/*         <div class="col-md-2 control-label">*/
/*           <label for="promoted_user_value">被邀请人注册成功获得</label>*/
/*         </div>*/
/*         <div class="controls col-md-7 radios">*/
/*         <input type="text" class="form-control width-input width-input-small" id="promoted_user_value" name="promoted_user_value" value="{{ inviteSetting.promoted_user_value}}">元面值抵价优惠券 （可用于全站消费）*/
/*         </div>*/
/*       </div>*/
/* */
/*       <div class="row form-group">*/
/*         <div class="col-md-2 control-label" >*/
/*           <label for="promote_user_value">邀请人在被邀请人首次消费后获得</label>*/
/*         </div>*/
/*         <div class="controls col-md-7 radios">*/
/*         <input type="text" class="form-control width-input width-input-small" id="promote_user_value"name="promote_user_value" value="{{ inviteSetting.promote_user_value }}">元面值抵价优惠券 （可用于全站消费）*/
/*         </div>*/
/*       </div>*/
/* */
/*       <div class="row form-group">*/
/*         <div class="col-md-2 control-label" >*/
/*           <label for="deadline">优惠券有效时间</label>*/
/*         </div>*/
/*         <div class="controls col-md-7 radios">*/
/*           <input type="text" class="form-control width-input width-input-small" id="deadline"name="deadline" value="{{ inviteSetting.deadline }}">天 */
/*         </div>*/
/*       </div>*/
/* */
/*       <div class="row form-group">*/
/*         <div class="col-md-2 control-label" style="white-space:nowrap;">*/
/*           <label>邀请信息模板</label>*/
/*         </div>*/
/*         <div class="controls col-md-7 radios">*/
/*           <textarea class="form-control" rows="5" name="inviteInfomation_template">{{inviteInfomation_template}} </textarea>*/
/*         </div>*/
/*       </div>*/
/* */
/* */
/*       <div class="row form-group">*/
/*         <div class="col-md-2 control-label"></div>*/
/*         <div class="controls col-md-8">*/
/*           <button type="submit" class="btn btn-primary">提交</button>  */
/*         </div>*/
/*       </div>*/
/* */
/*       <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*     </form>*/
/* */
/* {% verbatim %}    */
/* <div class="alert alert-info">*/
/*   <p><strong>通知变量说明：</strong></p>*/
/*   <ul>*/
/*     <li>{{siteName}}:网校名称</li>*/
/*     <li>{{registerUrl}}:注册链接的地址</li>*/
/*   </ul>*/
/* </div>*/
/* {% endverbatim %}*/
/* */
/* {% endblock %}*/
