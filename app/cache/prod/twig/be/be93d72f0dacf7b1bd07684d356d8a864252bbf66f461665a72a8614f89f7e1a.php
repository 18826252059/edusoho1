<?php

/* TopxiaWebBundle:Mobile:index.html.twig */
class __TwigTemplate_6f629f9131b6618b2658af25d32750ddff87d76dc64ac87c168d9035c8155c57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Mobile:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'full_content' => array($this, 'block_full_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["script_controller"] = "mobile/index";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "移动学习 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_full_content($context, array $blocks = array())
    {
        // line 8
        echo "  <div class=\"es-mobile\">
    <div class=\"js-mobile-item mobile-first\">
      <div class=\"container\">
        <img class=\"img-one hidden-xs\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/v2/img/mobile/phone_black.png"), "html", null, true);
        echo "\" alt=\"\">
        <div class=\"img-two hidden-xs\">
          <img class=\"img-two-bg\" src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/v2/img/mobile/phone_white_bg.png"), "html", null, true);
        echo "\" alt=\"\">
          ";
        // line 14
        if ($this->env->getExtension('topxia_web_twig')->getSetting("mobile.appcover")) {
            // line 15
            echo "          <img class=\"img-two-content\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('topxia_web_twig')->getSetting("mobile.appcover")), "html", null, true);
            echo "\" alt=\"\">
          ";
        } else {
            // line 17
            echo "          <img class=\"img-two-content\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/v2/img/mobile/phone_white_content.png"), "html", null, true);
            echo "\" alt=\"\">
          ";
        }
        // line 19
        echo "        </div>
        <div class=\"mobile-content\">
          <div class=\"title\">";
        // line 21
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "appname", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "appname", array()), "阔知学堂")) : ("阔知学堂")), "html", null, true);
        echo "</div>
          <div class=\"subtitle\">";
        // line 22
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "appabout", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "appabout", array()), " 将学校装进口袋，移动学习，随时随地")) : (" 将学校装进口袋，移动学习，随时随地")), "html", null, true);
        echo "</div>    
          <div class=\"label-mobile\">";
        // line 23
        if ((($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "appname", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "appname", array()))) : (""))) {
            echo "仅需一步，轻松搞定！";
        } else {
            echo "仅需两步，轻松搞定！ ";
        }
        echo "</div>
          <a class=\"btn-mobile\" href=\"javascript:;\" data-url=\".mobile-second\">立即下载体验<i class=\"es-icon es-icon-keyboardarrowdown\"></i></a>
        </div>
      </div>
    </div>
    <div class=\" mobile-second\">
      <div class=\"container\">
        <div class=\"step\">
          ";
        // line 31
        if (((($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "appname", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "appname", array()))) : ("")) == "")) {
            echo "<span class=\"member\">1</span>";
        }
        echo " 
          扫描二维码，下载手机APP。
        </div>
        <div class=\"mobile-content row\">
          <div class=\"col-md-4 col-sm-6 col-xs-6\">
          ";
        // line 36
        if ($this->env->getExtension('topxia_web_twig')->getSetting("mobile.applogo")) {
            // line 37
            echo "          <img class=\"img-one\" style=\"width:120px;height:120px\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('topxia_web_twig')->getSetting("mobile.applogo")), "html", null, true);
            echo "\" alt=\"\">   
          ";
        } else {
            // line 39
            echo "          <img class=\"img-one\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/v2/img/mobile/app_logo.png"), "html", null, true);
            echo "\" alt=\"\"> 
          ";
        }
        // line 41
        echo "          </div>
          <div class=\"col-md-4 col-sm-6 col-xs-6\">
            <img class=\"img-two\" src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mobile_download_qrcode", array("code" => (isset($context["mobileCode"]) ? $context["mobileCode"] : null))), "html", null, true);
        echo "\" alt=\"\">
          </div>
          <div class=\"col-md-4\">
            <a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mobile_download", array("client" => "android", "code" => (isset($context["mobileCode"]) ? $context["mobileCode"] : null))), "html", null, true);
        echo "\" class=\"btn-android\"><i class='es-icon es-icon-android'></i>Android 客户端</a>
            <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mobile_download", array("client" => "iphone", "code" => (isset($context["mobileCode"]) ? $context["mobileCode"] : null))), "html", null, true);
        echo "\" class=\"btn-apple\"><i class='es-icon es-icon-apple'></i>iPhone客户端</a>
          </div>
        </div>
      </div>
    </div>
    ";
        // line 52
        if (((($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "appname", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "appname", array()))) : ("")) == "")) {
            // line 53
            echo "    <div class=\"js-mobile-item mobile-third\">
      <div class=\"container\">
        <div class=\"step\">
          <span class=\"member\">2</span> 打开阔知学堂APP，扫描网校二维码。
        </div>
        <div class=\"qrcode\">
          <img src=\"";
            // line 59
            echo $this->env->getExtension('routing')->getPath("topxia_mobile_qrcode");
            echo "\" alt=\"\">
          <p>扫一扫登录客户端</p>
        </div>
        <img class=\"img-two hidden-xs\" src=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/v2/img/mobile/phone_gui.png"), "html", null, true);
            echo "\" alt=\"\">
      </div>
      <div class=\"mobile-footer hidden-xs\">
        <div class=\"container\"><img src=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/v2/img/mobile/phone_gui_shadow.png"), "html", null, true);
            echo "\" alt=\"\"></div>
      </div>
    </div>
    ";
        }
        // line 69
        echo "  </div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Mobile:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 69,  165 => 65,  159 => 62,  153 => 59,  145 => 53,  143 => 52,  135 => 47,  131 => 46,  125 => 43,  121 => 41,  115 => 39,  109 => 37,  107 => 36,  97 => 31,  82 => 23,  78 => 22,  74 => 21,  70 => 19,  64 => 17,  58 => 15,  56 => 14,  52 => 13,  47 => 11,  42 => 8,  39 => 7,  32 => 5,  28 => 1,  26 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::layout.html.twig' %}*/
/* */
/* {% set script_controller = 'mobile/index' %}*/
/* */
/* {% block title %}移动学习 - {{ parent() }}{% endblock %}*/
/* */
/* {% block full_content %}*/
/*   <div class="es-mobile">*/
/*     <div class="js-mobile-item mobile-first">*/
/*       <div class="container">*/
/*         <img class="img-one hidden-xs" src="{{asset("assets/v2/img/mobile/phone_black.png")}}" alt="">*/
/*         <div class="img-two hidden-xs">*/
/*           <img class="img-two-bg" src="{{asset("assets/v2/img/mobile/phone_white_bg.png")}}" alt="">*/
/*           {% if setting('mobile.appcover') %}*/
/*           <img class="img-two-content" src="{{asset(setting('mobile.appcover'))}}" alt="">*/
/*           {% else %}*/
/*           <img class="img-two-content" src="{{asset("assets/v2/img/mobile/phone_white_content.png")}}" alt="">*/
/*           {% endif %}*/
/*         </div>*/
/*         <div class="mobile-content">*/
/*           <div class="title">{{mobile.appname|default('阔知学堂')}}</div>*/
/*           <div class="subtitle">{{mobile.appabout|default(' 将学校装进口袋，移动学习，随时随地')}}</div>    */
/*           <div class="label-mobile">{% if mobile.appname|default() %}仅需一步，轻松搞定！{% else %}仅需两步，轻松搞定！ {% endif %}</div>*/
/*           <a class="btn-mobile" href="javascript:;" data-url=".mobile-second">立即下载体验<i class="es-icon es-icon-keyboardarrowdown"></i></a>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*     <div class=" mobile-second">*/
/*       <div class="container">*/
/*         <div class="step">*/
/*           {% if mobile.appname|default() == '' %}<span class="member">1</span>{% endif %} */
/*           扫描二维码，下载手机APP。*/
/*         </div>*/
/*         <div class="mobile-content row">*/
/*           <div class="col-md-4 col-sm-6 col-xs-6">*/
/*           {% if setting('mobile.applogo') %}*/
/*           <img class="img-one" style="width:120px;height:120px" src="{{asset(setting('mobile.applogo'))}}" alt="">   */
/*           {% else %}*/
/*           <img class="img-one" src="{{asset("assets/v2/img/mobile/app_logo.png")}}" alt=""> */
/*           {% endif %}*/
/*           </div>*/
/*           <div class="col-md-4 col-sm-6 col-xs-6">*/
/*             <img class="img-two" src="{{ path('mobile_download_qrcode',{code:mobileCode}) }}" alt="">*/
/*           </div>*/
/*           <div class="col-md-4">*/
/*             <a href="{{ path('mobile_download', {client:'android',code:mobileCode}) }}" class="btn-android"><i class='es-icon es-icon-android'></i>Android 客户端</a>*/
/*             <a href="{{ path('mobile_download', {client:'iphone',code:mobileCode}) }}" class="btn-apple"><i class='es-icon es-icon-apple'></i>iPhone客户端</a>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*     {% if mobile.appname|default() == ''%}*/
/*     <div class="js-mobile-item mobile-third">*/
/*       <div class="container">*/
/*         <div class="step">*/
/*           <span class="member">2</span> 打开阔知学堂APP，扫描网校二维码。*/
/*         </div>*/
/*         <div class="qrcode">*/
/*           <img src="{{ path('topxia_mobile_qrcode') }}" alt="">*/
/*           <p>扫一扫登录客户端</p>*/
/*         </div>*/
/*         <img class="img-two hidden-xs" src="{{asset("assets/v2/img/mobile/phone_gui.png")}}" alt="">*/
/*       </div>*/
/*       <div class="mobile-footer hidden-xs">*/
/*         <div class="container"><img src="{{asset("assets/v2/img/mobile/phone_gui_shadow.png")}}" alt=""></div>*/
/*       </div>*/
/*     </div>*/
/*     {% endif %}*/
/*   </div>*/
/* {% endblock %}*/
