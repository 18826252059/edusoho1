<?php

/* TopxiaAdminBundle:Coin:coin-settings.html.twig */
class __TwigTemplate_038d1308c8cceab3c8b409eb0c375d0b29e814d1d7ef7cbafd2a26513f73b429 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Coin:coin-settings.html.twig", 1);
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
        $context["menu"] = "admin_coin_settings";
        // line 4
        $context["script_controller"] = "coin/range";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "
  ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "
  <form class=\"form-horizontal\" method=\"post\" id=\"coin-settings-form\">
  

      <style type=\"text/css\">
      .popover{
        z-index: 9999;
            }
        </style>
        <span class=\"glyphicon glyphicon-question-sign text-muted pull-right\" id=\"article-property-tips\" data-toggle=\"tooltip\" data-placement=\"bottom\" href=\"javascript:\" title=\"\" data-original-title=\"\"></span> 
         <div id=\"article-property-tips-html\" style=\"display:none;\">
            <div style=\"width:250px;font-size:14px;\">
              <span style=\"color:blue;\"> 说明：</span><br>
              虚拟币是可以在网校内进行支付消费的虚拟货币<br>
              <span style=\"color:blue;\">推广建议：</span><br>
              1、 建议网校使用虚拟币对网校内课程进行标价；<br>
              2、 网校可鼓励";
        // line 24
        if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
        } else {
            echo "学员";
        }
        echo "充值，可提升用户忠诚度；<br>
              3、 建议配合使用学习卡（商业应用），给予一定优惠；<br>
            </div>
        </div>

      <div class=\"form-group\">
    \t\t<div class=\"col-md-3 control-label\">
    \t\t\t<label for=\"coin_name\">虚拟币名称</label>
    \t\t</div>
    \t\t<div class=\"controls col-md-4\">
    \t\t\t<input type=\"text\" id=\"coin_name\" name=\"coin_name\" class=\"form-control\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coin_settings_posted"]) ? $context["coin_settings_posted"] : null), "coin_name", array()), "html", null, true);
        echo "\">
    \t\t</div>
      </div>

      <div class=\"row form-group\">
        <div class=\"col-md-3 control-label\">
          <label for=\"coin_picture\">虚拟币图片</label>
        </div>
        <div class=\"col-md-7 controls\">
        <div >

          <div id=\"coin-picture-largeSize\" style=\"display:inline;\">";
        // line 45
        if ($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_picture")) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_picture")), "html", null, true);
            echo "\">";
        }
        echo "</div>
          <div id=\"coin-picture-middleSize\" style=\"display:none;\">";
        // line 46
        if ($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_picture_30_30")) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_picture_30_30")), "html", null, true);
            echo "\">";
        }
        echo "</div>
          <div id=\"coin-picture-smallSize\" style=\"display:none;\">";
        // line 47
        if ($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_picture_20_20")) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_picture_20_20")), "html", null, true);
            echo "\">";
        }
        echo "</div>
          <div id=\"coin-picture-extraSmallSize\" style=\"display:none;\">";
        // line 48
        if ($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_picture_10_10")) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_picture_10_10")), "html", null, true);
            echo "\">";
        }
        echo "</div>
        </div></br>

          <button class=\"btn btn-default btn-sm\" id=\"coin-picture-upload\" type=\"button\" data-url=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("admin_coin_picture");
        echo "\">上传</button>
          <button class=\"btn btn-default btn-sm\" id=\"coin-picture-remove\" type=\"button\" data-url=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("admin_coin_picture_remove");
        echo "\" ";
        if ( !$this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_picture")) {
            echo "style=\"display:none;\"";
        }
        echo ">删除</button>
          <p class=\"help-block\">
          请上传png, gif, jpg格式的超过50*50的等比例图片，否则无法上传
          </p>
          <input type=\"hidden\" name=\"coin_picture\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_picture"), "html", null, true);
        echo "\">
          <input type=\"hidden\" name=\"coin_picture_50_50\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_picture_50_50"), "html", null, true);
        echo "\">
          <input type=\"hidden\" name=\"coin_picture_30_30\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_picture_30_30"), "html", null, true);
        echo "\">
          <input type=\"hidden\" name=\"coin_picture_20_20\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_picture_20_20"), "html", null, true);
        echo "\">
          <input type=\"hidden\" name=\"coin_picture_10_10\" value=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_picture_10_10"), "html", null, true);
        echo "\">
          <input type=\"hidden\" name=\"cash_rate\" ";
        // line 61
        if ($this->env->getExtension('topxia_web_twig')->getSetting("coin.cash_rate")) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.cash_rate"), "html", null, true);
            echo "\" ";
        } else {
            echo " value=\"1\" ";
        }
        echo ">
          <input type=\"hidden\" name=\"coin_enabled\" ";
        // line 62
        if ($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled")) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled"), "html", null, true);
            echo "\" ";
        } else {
            echo " value=\"0\" ";
        }
        echo ">
          <input type=\"hidden\" name=\"cash_model\" ";
        // line 63
        if ($this->env->getExtension('topxia_web_twig')->getSetting("coin.cash_model")) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.cash_model"), "html", null, true);
            echo "\" ";
        } else {
            echo " value=\"none\" ";
        }
        echo ">
          <input type=\"hidden\" name=\"charge_coin_enabled\" ";
        // line 64
        if ($this->env->getExtension('topxia_web_twig')->getSetting("coin.charge_coin_enabled")) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.charge_coin_enabled"), "html", null, true);
            echo "\" ";
        } else {
            echo " value=\"0\" ";
        }
        echo ">
        </div>
    </div>

        <div class=\"form-group\">
              <div class=\"col-md-3 control-label\">
                <label for=\"coin_content\">虚拟币说明</label>
              </div>
          <div class=\"controls col-md-8\">
            <textarea class=\"form-control\" id=\"coin_content\" rows=\"16\" name=\"coin_content\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["coin_settings_posted"]) ? $context["coin_settings_posted"] : null), "coin_content", array()), "html", null, true);
        echo "\" data-image-upload-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("default"))), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('topxia_html_twig')->fieldValue((isset($context["coin_settings_posted"]) ? $context["coin_settings_posted"] : null), "coin_content");
        echo "</textarea>
            <p class=\"help-block\">虚拟币说明可用于描述虚拟币特点，用途，获得的途径等虚拟币的相关内容
            </p>
          </div>
        </div> 

    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

    <div class=\"row form-group\">
    \t<div class=\"controls col-md-offset-3 col-md-8\">
    \t\t<button type=\"submit\" class=\"btn btn-primary\" >提交更新</button>
    \t</div>
    </div>
  </form>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Coin:coin-settings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 79,  206 => 73,  188 => 64,  178 => 63,  168 => 62,  158 => 61,  154 => 60,  150 => 59,  146 => 58,  142 => 57,  138 => 56,  127 => 52,  123 => 51,  113 => 48,  105 => 47,  97 => 46,  89 => 45,  75 => 34,  58 => 24,  39 => 8,  36 => 7,  33 => 6,  29 => 1,  27 => 4,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set menu = 'admin_coin_settings' %}*/
/* {% set script_controller = "coin/range" %}*/
/* */
/* {% block main %}*/
/* */
/*   {{ web_macro.flash_messages() }}*/
/*   <form class="form-horizontal" method="post" id="coin-settings-form">*/
/*   */
/* */
/*       <style type="text/css">*/
/*       .popover{*/
/*         z-index: 9999;*/
/*             }*/
/*         </style>*/
/*         <span class="glyphicon glyphicon-question-sign text-muted pull-right" id="article-property-tips" data-toggle="tooltip" data-placement="bottom" href="javascript:" title="" data-original-title=""></span> */
/*          <div id="article-property-tips-html" style="display:none;">*/
/*             <div style="width:250px;font-size:14px;">*/
/*               <span style="color:blue;"> 说明：</span><br>*/
/*               虚拟币是可以在网校内进行支付消费的虚拟货币<br>*/
/*               <span style="color:blue;">推广建议：</span><br>*/
/*               1、 建议网校使用虚拟币对网校内课程进行标价；<br>*/
/*               2、 网校可鼓励{% if setting('default.user_name') %}{{setting('default.user_name')|default('学员')}}{% else %}学员{% endif %}充值，可提升用户忠诚度；<br>*/
/*               3、 建议配合使用学习卡（商业应用），给予一定优惠；<br>*/
/*             </div>*/
/*         </div>*/
/* */
/*       <div class="form-group">*/
/*     		<div class="col-md-3 control-label">*/
/*     			<label for="coin_name">虚拟币名称</label>*/
/*     		</div>*/
/*     		<div class="controls col-md-4">*/
/*     			<input type="text" id="coin_name" name="coin_name" class="form-control" value="{{coin_settings_posted.coin_name}}">*/
/*     		</div>*/
/*       </div>*/
/* */
/*       <div class="row form-group">*/
/*         <div class="col-md-3 control-label">*/
/*           <label for="coin_picture">虚拟币图片</label>*/
/*         </div>*/
/*         <div class="col-md-7 controls">*/
/*         <div >*/
/* */
/*           <div id="coin-picture-largeSize" style="display:inline;">{% if setting('coin.coin_picture') %}<img src="{{ asset(setting('coin.coin_picture')) }}">{% endif %}</div>*/
/*           <div id="coin-picture-middleSize" style="display:none;">{% if setting('coin.coin_picture_30_30') %}<img src="{{ asset(setting('coin.coin_picture_30_30')) }}">{% endif %}</div>*/
/*           <div id="coin-picture-smallSize" style="display:none;">{% if setting('coin.coin_picture_20_20') %}<img src="{{ asset(setting('coin.coin_picture_20_20')) }}">{% endif %}</div>*/
/*           <div id="coin-picture-extraSmallSize" style="display:none;">{% if setting('coin.coin_picture_10_10') %}<img src="{{ asset(setting('coin.coin_picture_10_10')) }}">{% endif %}</div>*/
/*         </div></br>*/
/* */
/*           <button class="btn btn-default btn-sm" id="coin-picture-upload" type="button" data-url="{{ path('admin_coin_picture') }}">上传</button>*/
/*           <button class="btn btn-default btn-sm" id="coin-picture-remove" type="button" data-url="{{ path('admin_coin_picture_remove') }}" {% if not setting('coin.coin_picture') %}style="display:none;"{% endif %}>删除</button>*/
/*           <p class="help-block">*/
/*           请上传png, gif, jpg格式的超过50*50的等比例图片，否则无法上传*/
/*           </p>*/
/*           <input type="hidden" name="coin_picture" value="{{setting('coin.coin_picture') }}">*/
/*           <input type="hidden" name="coin_picture_50_50" value="{{setting('coin.coin_picture_50_50') }}">*/
/*           <input type="hidden" name="coin_picture_30_30" value="{{setting('coin.coin_picture_30_30') }}">*/
/*           <input type="hidden" name="coin_picture_20_20" value="{{setting('coin.coin_picture_20_20') }}">*/
/*           <input type="hidden" name="coin_picture_10_10" value="{{setting('coin.coin_picture_10_10') }}">*/
/*           <input type="hidden" name="cash_rate" {% if setting('coin.cash_rate') %} value="{{setting('coin.cash_rate') }}" {% else %} value="1" {% endif %}>*/
/*           <input type="hidden" name="coin_enabled" {% if setting('coin.coin_enabled') %} value="{{setting('coin.coin_enabled') }}" {% else %} value="0" {% endif %}>*/
/*           <input type="hidden" name="cash_model" {% if setting('coin.cash_model') %} value="{{setting('coin.cash_model') }}" {% else %} value="none" {% endif %}>*/
/*           <input type="hidden" name="charge_coin_enabled" {% if setting('coin.charge_coin_enabled') %} value="{{setting('coin.charge_coin_enabled')}}" {% else %} value="0" {% endif %}>*/
/*         </div>*/
/*     </div>*/
/* */
/*         <div class="form-group">*/
/*               <div class="col-md-3 control-label">*/
/*                 <label for="coin_content">虚拟币说明</label>*/
/*               </div>*/
/*           <div class="controls col-md-8">*/
/*             <textarea class="form-control" id="coin_content" rows="16" name="coin_content" value="{{coin_settings_posted.coin_content}}" data-image-upload-url="{{ path('editor_upload', {token:upload_token('default')}) }}">{{ field_value(coin_settings_posted, 'coin_content') }}</textarea>*/
/*             <p class="help-block">虚拟币说明可用于描述虚拟币特点，用途，获得的途径等虚拟币的相关内容*/
/*             </p>*/
/*           </div>*/
/*         </div> */
/* */
/*     <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/* */
/*     <div class="row form-group">*/
/*     	<div class="controls col-md-offset-3 col-md-8">*/
/*     		<button type="submit" class="btn btn-primary" >提交更新</button>*/
/*     	</div>*/
/*     </div>*/
/*   </form>*/
/* {% endblock %}*/
