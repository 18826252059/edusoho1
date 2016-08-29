<?php

/* CustomWebBundle:Announcement:announcement-detail.html.twig */
class __TwigTemplate_332b1a77eb9806d7fe03c9bb89c982cca3f5516488ac71be4df4b9e6510b9fa2 extends Twig_Template
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
<html lang=\"en\">
<head>
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\"/>
    <title>通知详情</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
    <meta name=\"keywords\" content=\"通知详情\" />
    <meta name=\"description\" content=\"通知详情\" />
    <link rel=\"icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('topxia_web_twig')->getSetting("site.favicon")), "html", null, true);
        echo "\" type=\"image/x-icon\"/>
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/h5/style/css/global.css"), "html", null, true);
        echo "\">
    <link type=\"text/css\" rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/h5/style/css/global-v2.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/h5/style/css/course.css"), "html", null, true);
        echo "\">
</head>
<body class=\"bg-df9\">
<div class=\"g-wrap g-pb0\">
    ";
        // line 19
        echo "    ";
        // line 20
        echo "    ";
        if ( !array_key_exists("announcement", $context)) {
            // line 21
            echo "    <div class=\"open-notice\">开班公告
        <p class=\"s-course-progress\"><span></span></p>
    </div>
    <section class=\"g-mb10 bg-df9\">
        <article class=\"g-font-color course-detailContent\">
            无此公告
        </article>
    </section>
    ";
        } else {
            // line 30
            echo "        <div class=\"open-notice\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["announcement"]) ? $context["announcement"] : null), "title", array()));
            echo "
            <p class=\"s-course-progress\"><span>";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["announcement"]) ? $context["announcement"] : null), "createTime", array()), "Y-m-d"), "html", null, true);
            echo "</span></p>
        </div>
        <section class=\"g-mb10 bg-df9\">
            <article class=\"g-font-color course-detailContent\">
                ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["announcement"]) ? $context["announcement"] : null), "content", array()));
            echo "
            </article>
        </section>
    ";
        }
        // line 39
        echo "</div>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "CustomWebBundle:Announcement:announcement-detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 39,  78 => 35,  71 => 31,  66 => 30,  55 => 21,  52 => 20,  50 => 19,  43 => 14,  39 => 13,  35 => 12,  31 => 11,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta http-equiv="content-type" content="text/html; charset=utf-8"/>*/
/*     <title>通知详情</title>*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge"/>*/
/*     <meta name="apple-mobile-web-app-capable" content="yes"/>*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />*/
/*     <meta name="keywords" content="通知详情" />*/
/*     <meta name="description" content="通知详情" />*/
/*     <link rel="icon" href="{{ asset(setting('site.favicon')) }}" type="image/x-icon"/>*/
/*     <link type="text/css" rel="stylesheet" href="{{ asset('themes/h5/style/css/global.css') }}">*/
/*     <link type="text/css" rel="stylesheet" href="{{ asset('themes/h5/style/css/global-v2.css') }}">*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('themes/h5/style/css/course.css') }}">*/
/* </head>*/
/* <body class="bg-df9">*/
/* <div class="g-wrap g-pb0">*/
/*     {#<div class="g-h2 f-tac"><a href="javascript:history.back(-1);" class="back-a"><i class="back-point"></i></a>通知详情</div>#}*/
/*     {#<div class="placeHolder"></div>#}*/
/*     {% if announcement is not defined %}*/
/*     <div class="open-notice">开班公告*/
/*         <p class="s-course-progress"><span></span></p>*/
/*     </div>*/
/*     <section class="g-mb10 bg-df9">*/
/*         <article class="g-font-color course-detailContent">*/
/*             无此公告*/
/*         </article>*/
/*     </section>*/
/*     {% else %}*/
/*         <div class="open-notice">{{ announcement.title | escape }}*/
/*             <p class="s-course-progress"><span>{{ announcement.createTime |date('Y-m-d') }}</span></p>*/
/*         </div>*/
/*         <section class="g-mb10 bg-df9">*/
/*             <article class="g-font-color course-detailContent">*/
/*                 {{ announcement.content |escape }}*/
/*             </article>*/
/*         </section>*/
/*     {% endif %}*/
/* </div>*/
/* </body>*/
/* </html>*/
/* */
