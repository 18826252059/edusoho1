<?php

/* TopxiaWebBundle:Browser:upgrade.html.twig */
class __TwigTemplate_b18d8cdc0e01b76769858d6c6055dc09787277ffbbad38473b7e0c9dfdbe9a8b extends Twig_Template
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
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"\"> <!--<![endif]-->
<head>
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
  <title>升级您的浏览器 -  ";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.name"), "html", null, true);
        if ( !$this->env->getExtension('topxia_web_twig')->getSetting("copyright.owned")) {
            echo " - Powered by 隆平现代农业科技服务有限公司";
        }
        echo "</title>
  <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiaweb/css/browser-upgrade.css"), "html", null, true);
        echo "\" />
</head>

<body>
  <div class=\"container\">
    <div class=\"title\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.name"), "html", null, true);
        echo "</div>
    <div class=\"message\">您的浏览器版本过低，请升级您的浏览器后，再访问";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.name"), "html", null, true);
        echo "。</div>
    <div class=\"browsers\">
      <div class=\"head\">推荐使用以下浏览器：</div>
      <div>
        <a href=\"http://www.google.cn/intl/zh-CN/chrome/browser/\" target=\"_blank\"><i class=\"browser-chrome\"></i></a>
        <a href=\"http://firefox.com.cn/download/\" target=\"_blank\"><i class=\"browser-firefox\"></i></a>
        <a href=\"http://windows.microsoft.com/zh-CN/internet-explorer/downloads/ie\"  target=\"_blank\"><i class=\"browser-ie\"></i></a>
      </div>
    </div>
  </div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Browser:upgrade.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 16,  44 => 15,  36 => 10,  29 => 9,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <!--[if lt IE 7]>      <html class="lt-ie9 lt-ie8 lt-ie7"> <![endif]-->*/
/* <!--[if IE 7]>         <html class="lt-ie9 lt-ie8"> <![endif]-->*/
/* <!--[if IE 8]>         <html class="lt-ie9"> <![endif]-->*/
/* <!--[if gt IE 8]><!--> <html class=""> <!--<![endif]-->*/
/* <head>*/
/*   <meta charset="utf-8">*/
/*   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">*/
/*   <title>升级您的浏览器 -  {{ setting('site.name') }}{% if not setting('copyright.owned') %} - Powered by 隆平现代农业科技服务有限公司{% endif %}</title>*/
/*   <link rel="stylesheet" media="screen" href="{{ asset('bundles/topxiaweb/css/browser-upgrade.css') }}" />*/
/* </head>*/
/* */
/* <body>*/
/*   <div class="container">*/
/*     <div class="title">{{ setting('site.name') }}</div>*/
/*     <div class="message">您的浏览器版本过低，请升级您的浏览器后，再访问{{ setting('site.name') }}。</div>*/
/*     <div class="browsers">*/
/*       <div class="head">推荐使用以下浏览器：</div>*/
/*       <div>*/
/*         <a href="http://www.google.cn/intl/zh-CN/chrome/browser/" target="_blank"><i class="browser-chrome"></i></a>*/
/*         <a href="http://firefox.com.cn/download/" target="_blank"><i class="browser-firefox"></i></a>*/
/*         <a href="http://windows.microsoft.com/zh-CN/internet-explorer/downloads/ie"  target="_blank"><i class="browser-ie"></i></a>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </body>*/
/* </html>*/
