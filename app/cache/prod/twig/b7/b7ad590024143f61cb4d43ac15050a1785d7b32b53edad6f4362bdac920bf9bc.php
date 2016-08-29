<?php

/* TopxiaAdminBundle:System:mailer.html.twig */
class __TwigTemplate_2ea8c1385f3a5bd13b418d1640a12375819fc5d0c2a4a4f034c2693d09df99fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:System:mailer.html.twig", 1);
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
        $context["script_controller"] = "system/mailer";
        // line 5
        $context["menu"] = "admin_setting_mailer";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "  ";
        if ($this->env->getExtension('topxia_web_twig')->isTrial()) {
            // line 9
            echo "    <div class=\"row form-group\">
      <div class=\"help-block\">
        </br></br>
        <script>
          var _hmt = _hmt || [];
        </script>
        <script charset=\"utf-8\" src=\"http://wpa.b.qq.com/cgi/wpa.php\"></script>

        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
            echo "\">
        <p style = \"text-align:center;font-size:16px\">当前版本为试⽤版,不能进⾏邮件服务设置。如需购买授权版,请联系销售人员。 
        电话：0571-86819929 或 
        <span id=\"BizQQWPA\" onclick=\"_hmt.push(['_trackEvent', 'advisory', 'click', 'qq'])\"><a id=\"BizQQWPA\" href=\"javascript:\" style='text-decoration:none;'>QQ：800023860 </a>。</span>
        </p>
        <script type=\"text/javascript\">
            BizQQWPA.addCustom({aty: '0', a: '0', nameAccount: 800023860, selector: 'BizQQWPA'}); 
        </script>
        </br>
      </div>
    </div>
  ";
        } else {
            // line 29
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
            echo "

    <form class=\"form-horizontal\" method=\"post\" id=\"mailer-form\" novalidate>
      <div class=\"row form-group\">
        <div class=\"col-md-3 control-label\">
          <label >邮件发送</label>
        </div>
        <div class=\"controls col-md-8 radios\">
          ";
            // line 37
            echo $this->env->getExtension('topxia_html_twig')->radios("enabled", array(1 => "开启", 0 => "关闭"), $this->getAttribute((isset($context["mailer"]) ? $context["mailer"] : null), "enabled", array()));
            echo "
          <p class=\"help-block\">需要登录邮箱，并在邮箱设置中开启smtp服务才能发送验证邮件</p>
        </div>
      </div>

      <div class=\"row form-group\">
        <div class=\"col-md-3 control-label\">
          <label for=\"host\">SMTP服务器地址</label>
        </div>
        <div class=\"controls col-md-8\">
          <input type=\"text\" id=\"host\" name=\"host\" class=\"form-control\" value=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mailer"]) ? $context["mailer"] : null), "host", array()), "html", null, true);
            echo "\">
          <p class=\"help-block\"> 每种邮箱的地址都不相同，请根据使用的邮箱类型，查找邮箱服务器地址，如：smtp.yourmail.com</p>
        </div>
      </div>
      <p></p>
      <div class=\"row form-group\">
        <div class=\"col-md-3 control-label\">
          <label for=\"port\">SMTP端口号</label>
        </div>
        <div class=\"controls col-md-8\">
          <input type=\"text\" id=\"port\" name=\"port\" class=\"form-control\" value=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mailer"]) ? $context["mailer"] : null), "port", array()), "html", null, true);
            echo "\">
          <p class=\"help-block\">通常端口号为25</p>
        </div>
      </div>
     <p></p>
      <div class=\"row form-group\">
        <div class=\"col-md-3 control-label\">
          <label for=\"username\" >SMTP用户名</label>
        </div>
        <div class=\"controls col-md-8\">
          <input type=\"text\" id=\"username\" name=\"username\" class=\"form-control\" value=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mailer"]) ? $context["mailer"] : null), "username", array()), "html", null, true);
            echo "\">
          <p class=\"help-block\">正确格式应为abc@mail.com</p>
        </div>
      </div>
     <p></p>

      <div class=\"row form-group\">
        <div class=\"col-md-3 control-label\">
          <label for=\"password\" >SMTP密码</label>
        </div>
        <div class=\"controls col-md-8\">
          <input type=\"password\" id=\"password\" name=\"password\" class=\"form-control\" value=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mailer"]) ? $context["mailer"] : null), "password", array()), "html", null, true);
            echo "\">
          <p class=\"help-block\">smtp密码：即邮箱密码</p>
        </div>
      </div>
     <p></p>

     <div class=\"row form-group\">
        <div class=\"col-md-3 control-label\">
          <label for=\"from\" >发信人地址</label>
        </div>
        <div class=\"controls col-md-8\">
          <input type=\"text\" id=\"from\" name=\"from\" class=\"form-control\" value=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mailer"]) ? $context["mailer"] : null), "from", array()), "html", null, true);
            echo "\">
          <p class=\"help-block\">正确格式应为abc@mail.com</p>
        </div>
      </div>
     <p></p>

     <div class=\"row form-group\">
        <div class=\"col-md-3 control-label\">
          <label for=\"name\" >发信人名称</label>
        </div>
        <div class=\"controls col-md-8\">
          <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" value=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mailer"]) ? $context["mailer"] : null), "name", array()), "html", null, true);
            echo "\">
        </div>
      </div>
     <p></p>
      <div class=\"row form-group\">
        <div class=\"col-md-3 control-label\"></div>
        <div class=\"controls col-md-8\">
          <button type=\"submit\" class=\"btn btn-primary\">提交</button>
        </div>
      </div>
      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 110
            echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
            echo "\">
    </form>
  ";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:mailer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 110,  157 => 100,  143 => 89,  129 => 78,  115 => 67,  102 => 57,  89 => 47,  76 => 37,  64 => 29,  49 => 17,  39 => 9,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set script_controller = 'system/mailer' %}*/
/* */
/* {% set menu = 'admin_setting_mailer' %}*/
/* */
/* {% block main %}*/
/*   {% if is_trial() %}*/
/*     <div class="row form-group">*/
/*       <div class="help-block">*/
/*         </br></br>*/
/*         <script>*/
/*           var _hmt = _hmt || [];*/
/*         </script>*/
/*         <script charset="utf-8" src="http://wpa.b.qq.com/cgi/wpa.php"></script>*/
/* */
/*         <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*         <p style = "text-align:center;font-size:16px">当前版本为试⽤版,不能进⾏邮件服务设置。如需购买授权版,请联系销售人员。 */
/*         电话：0571-86819929 或 */
/*         <span id="BizQQWPA" onclick="_hmt.push(['_trackEvent', 'advisory', 'click', 'qq'])"><a id="BizQQWPA" href="javascript:" style='text-decoration:none;'>QQ：800023860 </a>。</span>*/
/*         </p>*/
/*         <script type="text/javascript">*/
/*             BizQQWPA.addCustom({aty: '0', a: '0', nameAccount: 800023860, selector: 'BizQQWPA'}); */
/*         </script>*/
/*         </br>*/
/*       </div>*/
/*     </div>*/
/*   {% else %}*/
/*     {{ web_macro.flash_messages() }}*/
/* */
/*     <form class="form-horizontal" method="post" id="mailer-form" novalidate>*/
/*       <div class="row form-group">*/
/*         <div class="col-md-3 control-label">*/
/*           <label >邮件发送</label>*/
/*         </div>*/
/*         <div class="controls col-md-8 radios">*/
/*           {{ radios('enabled', {1:'开启', 0:'关闭'}, mailer.enabled) }}*/
/*           <p class="help-block">需要登录邮箱，并在邮箱设置中开启smtp服务才能发送验证邮件</p>*/
/*         </div>*/
/*       </div>*/
/* */
/*       <div class="row form-group">*/
/*         <div class="col-md-3 control-label">*/
/*           <label for="host">SMTP服务器地址</label>*/
/*         </div>*/
/*         <div class="controls col-md-8">*/
/*           <input type="text" id="host" name="host" class="form-control" value="{{mailer.host}}">*/
/*           <p class="help-block"> 每种邮箱的地址都不相同，请根据使用的邮箱类型，查找邮箱服务器地址，如：smtp.yourmail.com</p>*/
/*         </div>*/
/*       </div>*/
/*       <p></p>*/
/*       <div class="row form-group">*/
/*         <div class="col-md-3 control-label">*/
/*           <label for="port">SMTP端口号</label>*/
/*         </div>*/
/*         <div class="controls col-md-8">*/
/*           <input type="text" id="port" name="port" class="form-control" value="{{mailer.port}}">*/
/*           <p class="help-block">通常端口号为25</p>*/
/*         </div>*/
/*       </div>*/
/*      <p></p>*/
/*       <div class="row form-group">*/
/*         <div class="col-md-3 control-label">*/
/*           <label for="username" >SMTP用户名</label>*/
/*         </div>*/
/*         <div class="controls col-md-8">*/
/*           <input type="text" id="username" name="username" class="form-control" value="{{mailer.username}}">*/
/*           <p class="help-block">正确格式应为abc@mail.com</p>*/
/*         </div>*/
/*       </div>*/
/*      <p></p>*/
/* */
/*       <div class="row form-group">*/
/*         <div class="col-md-3 control-label">*/
/*           <label for="password" >SMTP密码</label>*/
/*         </div>*/
/*         <div class="controls col-md-8">*/
/*           <input type="password" id="password" name="password" class="form-control" value="{{mailer.password}}">*/
/*           <p class="help-block">smtp密码：即邮箱密码</p>*/
/*         </div>*/
/*       </div>*/
/*      <p></p>*/
/* */
/*      <div class="row form-group">*/
/*         <div class="col-md-3 control-label">*/
/*           <label for="from" >发信人地址</label>*/
/*         </div>*/
/*         <div class="controls col-md-8">*/
/*           <input type="text" id="from" name="from" class="form-control" value="{{mailer.from}}">*/
/*           <p class="help-block">正确格式应为abc@mail.com</p>*/
/*         </div>*/
/*       </div>*/
/*      <p></p>*/
/* */
/*      <div class="row form-group">*/
/*         <div class="col-md-3 control-label">*/
/*           <label for="name" >发信人名称</label>*/
/*         </div>*/
/*         <div class="controls col-md-8">*/
/*           <input type="text" id="name" name="name" class="form-control" value="{{mailer.name}}">*/
/*         </div>*/
/*       </div>*/
/*      <p></p>*/
/*       <div class="row form-group">*/
/*         <div class="col-md-3 control-label"></div>*/
/*         <div class="controls col-md-8">*/
/*           <button type="submit" class="btn btn-primary">提交</button>*/
/*         </div>*/
/*       </div>*/
/*       <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*     </form>*/
/*   {% endif %}*/
/* {% endblock %}*/
