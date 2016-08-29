<?php

/* TopxiaMobileBundleV2:Content:download.html.twig */
class __TwigTemplate_fc67571eefb29d45d8e0184f93b4e91c2ecd71cd8e8c60a895461f649be6b6df extends Twig_Template
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
<html>
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
  <meta name=\"renderer\" content=\"webkit\">
  <meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no\">
  <title>移动客户端下载</title>
  <style>
    .weixin_bg {
      margin: 0;
      width: 100%;
      height: 100%;
      background-color: #00c776;
      background-repeat: no-repeat;
      background-image: url(\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiamobilebundlev2/img/weixin_bg.png"), "html", null, true);
        echo "\");
    }

    .shard_bg {
      width: 100%;
      height: 100%;
      position: absolute;
      background: rgba(0,0,0,0.6);
    }

    .shard_bg img {
      float: right;
    }
  </style>
</head>

<body class=\"weixin_bg\">
  <div class=\"shard_bg\">
    <img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiamobilebundlev2/img/weixin_arrow.png"), "html", null, true);
        echo "\" />
  </div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "TopxiaMobileBundleV2:Content:download.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 33,  35 => 15,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">*/
/*   <meta name="renderer" content="webkit">*/
/*   <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">*/
/*   <title>移动客户端下载</title>*/
/*   <style>*/
/*     .weixin_bg {*/
/*       margin: 0;*/
/*       width: 100%;*/
/*       height: 100%;*/
/*       background-color: #00c776;*/
/*       background-repeat: no-repeat;*/
/*       background-image: url("{{ asset('bundles/topxiamobilebundlev2/img/weixin_bg.png') }}");*/
/*     }*/
/* */
/*     .shard_bg {*/
/*       width: 100%;*/
/*       height: 100%;*/
/*       position: absolute;*/
/*       background: rgba(0,0,0,0.6);*/
/*     }*/
/* */
/*     .shard_bg img {*/
/*       float: right;*/
/*     }*/
/*   </style>*/
/* </head>*/
/* */
/* <body class="weixin_bg">*/
/*   <div class="shard_bg">*/
/*     <img src="{{ asset('bundles/topxiamobilebundlev2/img/weixin_arrow.png') }}" />*/
/*   </div>*/
/* </body>*/
/* </html>*/
/* */
