<?php

/* TopxiaMobileBundleV2:Content:index.html.twig */
class __TwigTemplate_13edbf3ef4b0a8f80fca904a6e667518dbe1dbc283f689ce7e20ad2e3726a892 extends Twig_Template
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
        echo "<html>
\t<head>
\t\t<meta http-equiv='Content-type' content='text/html; charset=utf-8'>
\t\t<meta name='viewport' content='width=device-width,initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0'>
\t\t<style>
\t\t\tbody{
\t\t\t\tpadding : 16px;
\t\t\t\tfont-size:110%;
\t\t\t\tcolor:#4d4d4d;
\t\t\t\tbackground:#f5f5f5;
\t\t\t}
\t\t</style>
\t</head>
\t<body>
\t\t";
        // line 15
        echo (isset($context["content"]) ? $context["content"] : null);
        echo "
\t\t<script type='text/javascript'>
\t\t\tfunction getScreenWidth() {
\t\t\t\tvar width = window.screen.width;
\t\t\t\tswitch (window.orientation) {
\t\t\t\tcase 0:
\t\t\t\t\twidth = window.screen.width;
\t\t\t\t\tbreak;
\t\t\t\tcase 90:
\t\t\t\tcase - 90 : width = window.screen.height;
\t\t\t\t\tbreak
\t\t\t\t}
\t\t\t\twidth = width * 0.96;
\t\t\t\treturn width
\t\t\t}
\t\t\tfunction zoomImage(img, width) {
\t\t\t\tvar oldH = img.height;
\t\t\t\tvar oldW = img.width;
\t\t\t\timg.width = width;
\t\t\t\timg.height = width / oldW * oldH
\t\t\t}
\t\t\tfunction adaptationImage() {
\t\t\t\tvar width = getScreenWidth();
\t\t\t\tvar imgs = document.getElementsByTagName('img');
\t\t\t\tfor (var i = 0; i < imgs.length; i++) {
\t\t\t\t\tzoomImage(imgs[i], width)
\t\t\t\t}
\t\t\t}
\t\t\tvar imageArray = new Array();
\t\t\tvar imgs = document.getElementsByTagName('img');
\t\t\tfor (var i = 0; i < imgs.length; i++) {
\t\t\t\tvar img = imgs[i];
\t\t\t\timg.addEventListener('load',
\t\t\t\tfunction() {
\t\t\t\t\tvar width = getScreenWidth();
\t\t\t\t\tzoomImage(this, width)
\t\t\t\t});
\t\t\t\timg.alt = i;
\t\t\t\timageArray.push(img.src);
\t\t\t\timg.addEventListener('click',
\t\t\t\tfunction() {
\t\t\t\t\twindow.location = 'imageIndexNUrls://?' + this.alt + '.partation.' + imageArray.join('.partation.');
\t\t\t\t\twindow.jsobj.showImages(this.alt,imageArray);
\t\t\t\t})
\t\t\t}
\t\t\twindow.addEventListener('orientationchange',
\t\t\tfunction() {
\t\t\t\tadaptationImage()
\t\t\t},
\t\t\tfalse);
\t\t</script>
\t</body>

</html>";
    }

    public function getTemplateName()
    {
        return "TopxiaMobileBundleV2:Content:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 15,  19 => 1,);
    }
}
/* <html>*/
/* 	<head>*/
/* 		<meta http-equiv='Content-type' content='text/html; charset=utf-8'>*/
/* 		<meta name='viewport' content='width=device-width,initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0'>*/
/* 		<style>*/
/* 			body{*/
/* 				padding : 16px;*/
/* 				font-size:110%;*/
/* 				color:#4d4d4d;*/
/* 				background:#f5f5f5;*/
/* 			}*/
/* 		</style>*/
/* 	</head>*/
/* 	<body>*/
/* 		{{content | raw}}*/
/* 		<script type='text/javascript'>*/
/* 			function getScreenWidth() {*/
/* 				var width = window.screen.width;*/
/* 				switch (window.orientation) {*/
/* 				case 0:*/
/* 					width = window.screen.width;*/
/* 					break;*/
/* 				case 90:*/
/* 				case - 90 : width = window.screen.height;*/
/* 					break*/
/* 				}*/
/* 				width = width * 0.96;*/
/* 				return width*/
/* 			}*/
/* 			function zoomImage(img, width) {*/
/* 				var oldH = img.height;*/
/* 				var oldW = img.width;*/
/* 				img.width = width;*/
/* 				img.height = width / oldW * oldH*/
/* 			}*/
/* 			function adaptationImage() {*/
/* 				var width = getScreenWidth();*/
/* 				var imgs = document.getElementsByTagName('img');*/
/* 				for (var i = 0; i < imgs.length; i++) {*/
/* 					zoomImage(imgs[i], width)*/
/* 				}*/
/* 			}*/
/* 			var imageArray = new Array();*/
/* 			var imgs = document.getElementsByTagName('img');*/
/* 			for (var i = 0; i < imgs.length; i++) {*/
/* 				var img = imgs[i];*/
/* 				img.addEventListener('load',*/
/* 				function() {*/
/* 					var width = getScreenWidth();*/
/* 					zoomImage(this, width)*/
/* 				});*/
/* 				img.alt = i;*/
/* 				imageArray.push(img.src);*/
/* 				img.addEventListener('click',*/
/* 				function() {*/
/* 					window.location = 'imageIndexNUrls://?' + this.alt + '.partation.' + imageArray.join('.partation.');*/
/* 					window.jsobj.showImages(this.alt,imageArray);*/
/* 				})*/
/* 			}*/
/* 			window.addEventListener('orientationchange',*/
/* 			function() {*/
/* 				adaptationImage()*/
/* 			},*/
/* 			false);*/
/* 		</script>*/
/* 	</body>*/
/* */
/* </html>*/
