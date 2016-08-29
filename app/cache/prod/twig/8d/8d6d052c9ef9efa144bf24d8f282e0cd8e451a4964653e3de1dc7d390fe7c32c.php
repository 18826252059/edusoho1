<?php

/* TopxiaWebBundle:Player:show.html.twig */
class __TwigTemplate_60714797859622b9be0e683c7c19e16b7a09dfd30c2f152d117ea4926fd1ed5b extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Player:show.html.twig", 1);
        // line 2
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,Chrome=1\">
    <meta name=\"renderer\" content=\"webkit\">
    <meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no\">
    
    ";
        // line 10
        $this->loadTemplate("TopxiaWebBundle:Player:stylesheet.html.twig", "TopxiaWebBundle:Player:show.html.twig", 10)->display($context);
        // line 11
        echo "  </head>
  <body style=\"overflow:hidden;border:0px;\">
    ";
        // line 13
        if (((array_key_exists("file", $context)) ? (_twig_default_filter((isset($context["file"]) ? $context["file"] : null), null)) : (null))) {
            // line 14
            echo "      <div style=\"position:absolute;top:0;bottom:0;left:0;right:0;\">
        <div id=\"lesson-video-content\" 
        data-user-id=\"";
            // line 16
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "id", array()), 0)) : (0)), "html", null, true);
            echo "\" 
        data-file-id=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["file"]) ? $context["file"] : null), "id", array()), "html", null, true);
            echo "\" 
        data-file-type=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["file"]) ? $context["file"] : null), "type", array()), "html", null, true);
            echo "\" 
        data-url=\"";
            // line 19
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "\"
        data-player=\"";
            // line 20
            echo twig_escape_filter($this->env, (isset($context["player"]) ? $context["player"] : null), "html", null, true);
            echo "\"
        data-agent-in-white-list=\"";
            // line 21
            echo twig_escape_filter($this->env, (isset($context["agentInWhiteList"]) ? $context["agentInWhiteList"] : null), "html", null, true);
            echo "\"
        data-balloon-video-player=\"1\"
        ";
            // line 23
            if ((( !(($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "videoWatermarkEmbedded", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "videoWatermarkEmbedded", array()), 0)) : (0)) && ($this->env->getExtension('topxia_web_twig')->getSetting("storage.video_watermark") > 0)) && $this->env->getExtension('topxia_web_twig')->getSetting("storage.video_watermark_image"))) {
                // line 24
                echo "          data-watermark=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->env->getExtension('topxia_web_twig')->getSetting("storage.video_watermark_image"), null, true), "html", null, true);
                echo "\"
        ";
            }
            // line 26
            echo "        ";
            if (($this->env->getExtension('topxia_web_twig')->getSetting("storage.video_fingerprint") && $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()))) {
                // line 27
                echo "          data-fingerprint=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFingerprint(), "html", null, true);
                echo "\"
          data-fingerprint-src=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("cloud_video_fingerprint", array("userId" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()))), "html", null, true);
                echo "\"
        ";
            }
            // line 30
            echo "        ";
            if (($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "type", array()) == "video")) {
                // line 31
                echo "          ";
                if (($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "storage", array()) == "local")) {
                    // line 32
                    echo "          class=\"local-video-player \"
          ";
                } else {
                    // line 34
                    echo "          class=\"ballon-video-player\"
          data-timelimit=\"";
                    // line 35
                    echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "watchTimeLimit", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "watchTimeLimit", array()), "")) : ("")), "html", null, true);
                    echo "\"
          data-markerurl=\"";
                    // line 36
                    echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "markerUrl", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "markerUrl", array()), "")) : ("")), "html", null, true);
                    echo "\"
          data-starttime=\"";
                    // line 37
                    echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "starttime", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["context"]) ? $context["context"] : null), "starttime", array()), "")) : ("")), "html", null, true);
                    echo "\"
          ";
                }
                // line 39
                echo "        ";
            } elseif (($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "type", array()) == "audio")) {
                // line 40
                echo "          class=\"lesson-content-audio\"
        ";
            }
            // line 42
            echo "        style=\"height:100%\"
        ></div>
      </div>

      ";
            // line 46
            $context["script_controller"] = "player/show";
            // line 47
            echo "
      ";
            // line 48
            $this->loadTemplate("TopxiaWebBundle::script_boot.html.twig", "TopxiaWebBundle:Player:show.html.twig", 48)->display(array_merge($context, array("script_main" => $this->env->getExtension('assets')->getAssetUrl("bundles/topxiaweb/js/app.js"))));
            // line 49
            echo "    ";
        } else {
            // line 50
            echo "      <div class=\"\"><br>&nbsp;&nbsp;&nbsp;&nbsp;该浏览器不支持云视频播放，请前往<a href=\"";
            echo $this->env->getExtension('routing')->getPath("mobile");
            echo "\" target=\"parent\">下载App</a>。</div>
    ";
        }
        // line 52
        echo "  </body>
</html>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Player:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 52,  138 => 50,  135 => 49,  133 => 48,  130 => 47,  128 => 46,  122 => 42,  118 => 40,  115 => 39,  110 => 37,  106 => 36,  102 => 35,  99 => 34,  95 => 32,  92 => 31,  89 => 30,  84 => 28,  79 => 27,  76 => 26,  70 => 24,  68 => 23,  63 => 21,  59 => 20,  55 => 19,  51 => 18,  47 => 17,  43 => 16,  39 => 14,  37 => 13,  33 => 11,  31 => 10,  21 => 2,  19 => 1,);
    }
}
/* {% import "TopxiaWebBundle::macro.html.twig" as web_macro %}*/
/* <!DOCTYPE html>*/
/* <html>*/
/*   <head>*/
/*     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge,Chrome=1">*/
/*     <meta name="renderer" content="webkit">*/
/*     <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">*/
/*     */
/*     {% include 'TopxiaWebBundle:Player:stylesheet.html.twig' %}*/
/*   </head>*/
/*   <body style="overflow:hidden;border:0px;">*/
/*     {% if file|default(null) %}*/
/*       <div style="position:absolute;top:0;bottom:0;left:0;right:0;">*/
/*         <div id="lesson-video-content" */
/*         data-user-id="{{app.user.id|default(0)}}" */
/*         data-file-id="{{file.id}}" */
/*         data-file-type="{{file.type}}" */
/*         data-url="{{url}}"*/
/*         data-player="{{player}}"*/
/*         data-agent-in-white-list="{{agentInWhiteList}}"*/
/*         data-balloon-video-player="1"*/
/*         {% if not file.videoWatermarkEmbedded|default(0) and setting('storage.video_watermark') > 0 and setting('storage.video_watermark_image') %}*/
/*           data-watermark="{{ filepath(setting('storage.video_watermark_image'), null, true) }}"*/
/*         {% endif %}*/
/*         {% if setting('storage.video_fingerprint') and app.user %}*/
/*           data-fingerprint="{{ finger_print() }}"*/
/*           data-fingerprint-src="{{ url('cloud_video_fingerprint', {userId:app.user.id}) }}"*/
/*         {% endif %}*/
/*         {% if file.type == 'video' %}*/
/*           {% if file.storage == 'local' %}*/
/*           class="local-video-player "*/
/*           {% else %}*/
/*           class="ballon-video-player"*/
/*           data-timelimit="{{ context.watchTimeLimit|default('')}}"*/
/*           data-markerurl="{{ context.markerUrl|default('')}}"*/
/*           data-starttime="{{ context.starttime|default('')}}"*/
/*           {% endif %}*/
/*         {% elseif file.type == 'audio' %}*/
/*           class="lesson-content-audio"*/
/*         {% endif %}*/
/*         style="height:100%"*/
/*         ></div>*/
/*       </div>*/
/* */
/*       {% set script_controller = 'player/show' %}*/
/* */
/*       {% include 'TopxiaWebBundle::script_boot.html.twig' with {script_main: asset('bundles/topxiaweb/js/app.js')} %}*/
/*     {% else %}*/
/*       <div class=""><br>&nbsp;&nbsp;&nbsp;&nbsp;该浏览器不支持云视频播放，请前往<a href="{{path('mobile')}}" target="parent">下载App</a>。</div>*/
/*     {% endif %}*/
/*   </body>*/
/* </html>*/
