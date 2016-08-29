<?php

/* TopxiaMobileBundleV2:Course:document.html.twig */
class __TwigTemplate_844ef3d5e7965dde1c9062fd65141750472860861411232b607b88b16147c449 extends Twig_Template
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
        echo "<!doctype html>

<head>
<meta name=\"viewport\" content=\"width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=yes\">
<title>";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</title>

<style type=\"text/css\">    
html,body{ width:100%; height:100%;}    
body {     
        margin-left: 0px;    
        margin-top: 0px;    
        margin-right: 0px;    
        margin-bottom: 0px;    
}

iframe{
    border: 0px;
}
</style> 
</head>

<body>
    <div id=\"lesson-document-content\">
        <iframe id='viewerIframe' width='100%' allowfullscreen webkitallowfullscreen height='100%'></iframe>
    </div>
<script>
  var app = {};
  app.basePath = '';
  app.jsPaths = {\"common\":\"common\",\"theme\":\"\\/themes\\/default-b\\/js\",\"couponbundle\":\"\\/bundles\\/coupon\\/js\",\"questionplusbundle\":\"\\/bundles\\/questionplus\\/js\",\"vipbundle\":\"\\/bundles\\/vip\\/js\",\"customwebbundle\":\"\\/bundles\\/customweb\\/js\",\"customadminbundle\":\"\\/bundles\\/customadmin\\/js\"};

  app.mainScript = \"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiaweb/js/app.js"), "html", null, true);
        echo "\";
</script>

<script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/seajs/seajs/2.2.1/sea.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/seajs-global-config.js"), "html", null, true);
        echo "\"></script>

<script>
seajs.use(app.mainScript, function(){
    seajs.use(\"/bundles/topxiaweb/js/controller/widget/document-player\", function(DocumentPlayer){

        var player = new DocumentPlayer({
            element: '#lesson-document-content',
            swfFileUrl:'";
        // line 43
        echo (isset($context["swfUri"]) ? $context["swfUri"] : null);
        echo "',
            pdfFileUrl:'";
        // line 44
        echo (isset($context["pdfUri"]) ? $context["pdfUri"] : null);
        echo "'
        });

        var clientHeight = document.body.clientHeight;
        \$(\"#viewerIframe\").height(clientHeight);
        window.onmessage=function(e){
            window.jsobj.toggleFullScreen();
            var isPageFullScreen = e.data;
            var docContent = document.getElementById(\"viewerIframe\");
            if (isPageFullScreen) {
                docContent.style.height = clientHeight + \"px\";
            }else{
              var height = window.screen.height;
              docContent.style.height = height + \"px\";
            }
        };
    });
    
});

</script>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "TopxiaMobileBundleV2:Course:document.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 44,  75 => 43,  64 => 35,  60 => 34,  54 => 31,  25 => 5,  19 => 1,);
    }
}
/* <!doctype html>*/
/* */
/* <head>*/
/* <meta name="viewport" content="width=device-width, minimum-scale=1.0, initial-scale=1.0, user-scalable=yes">*/
/* <title>{{title}}</title>*/
/* */
/* <style type="text/css">    */
/* html,body{ width:100%; height:100%;}    */
/* body {     */
/*         margin-left: 0px;    */
/*         margin-top: 0px;    */
/*         margin-right: 0px;    */
/*         margin-bottom: 0px;    */
/* }*/
/* */
/* iframe{*/
/*     border: 0px;*/
/* }*/
/* </style> */
/* </head>*/
/* */
/* <body>*/
/*     <div id="lesson-document-content">*/
/*         <iframe id='viewerIframe' width='100%' allowfullscreen webkitallowfullscreen height='100%'></iframe>*/
/*     </div>*/
/* <script>*/
/*   var app = {};*/
/*   app.basePath = '';*/
/*   app.jsPaths = {"common":"common","theme":"\/themes\/default-b\/js","couponbundle":"\/bundles\/coupon\/js","questionplusbundle":"\/bundles\/questionplus\/js","vipbundle":"\/bundles\/vip\/js","customwebbundle":"\/bundles\/customweb\/js","customadminbundle":"\/bundles\/customadmin\/js"};*/
/* */
/*   app.mainScript = "{{ asset('bundles/topxiaweb/js/app.js') }}";*/
/* </script>*/
/* */
/* <script src="{{ asset('assets/libs/seajs/seajs/2.2.1/sea.js') }}"></script>*/
/* <script src="{{ asset('assets/libs/seajs-global-config.js') }}"></script>*/
/* */
/* <script>*/
/* seajs.use(app.mainScript, function(){*/
/*     seajs.use("/bundles/topxiaweb/js/controller/widget/document-player", function(DocumentPlayer){*/
/* */
/*         var player = new DocumentPlayer({*/
/*             element: '#lesson-document-content',*/
/*             swfFileUrl:'{{swfUri | raw}}',*/
/*             pdfFileUrl:'{{pdfUri | raw}}'*/
/*         });*/
/* */
/*         var clientHeight = document.body.clientHeight;*/
/*         $("#viewerIframe").height(clientHeight);*/
/*         window.onmessage=function(e){*/
/*             window.jsobj.toggleFullScreen();*/
/*             var isPageFullScreen = e.data;*/
/*             var docContent = document.getElementById("viewerIframe");*/
/*             if (isPageFullScreen) {*/
/*                 docContent.style.height = clientHeight + "px";*/
/*             }else{*/
/*               var height = window.screen.height;*/
/*               docContent.style.height = height + "px";*/
/*             }*/
/*         };*/
/*     });*/
/*     */
/* });*/
/* */
/* </script>*/
/* */
/* </body>*/
/* </html>*/
