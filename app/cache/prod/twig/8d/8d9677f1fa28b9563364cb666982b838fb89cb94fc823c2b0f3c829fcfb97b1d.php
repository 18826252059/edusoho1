<?php

/* CustomWebBundle:ProductBase:detail.html.twig */
class __TwigTemplate_c93493edbfe22cfd8af49059431db72fbdb5cc9b078ef10c962617eebc30ba36 extends Twig_Template
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
    <title>实训基地</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\"/>
    <meta name=\"keywords\" content=\"实训基地\"/>
    <meta name=\"description\" content=\"实训基地\"/>
    <link rel=\"icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('topxia_web_twig')->getSetting("site.favicon")), "html", null, true);
        echo "\" type=\"image/x-icon\"/>
    <link rel=\"shortcut icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('topxia_web_twig')->getSetting("site.favicon")), "html", null, true);
        echo "\" type=\"image/x-icon\" media=\"screen\"/>
    <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/h5/style/css/global.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/h5/style/css/global-v2.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/h5/style/css/course.css"), "html", null, true);
        echo "\"/>
</head>
<body>
<div class=\"g-wrap g-pb0\">
    ";
        // line 20
        echo "    ";
        // line 21
        echo "    <div class=\"class-detail\" style=\"background: #5dab2f\">
        <div class=\"courseDetail\">
            <a href=\"javascript:;\" class=\"courseList1\">
                ";
        // line 24
        if ((($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id", array()), 0)) : (0))) {
            // line 25
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_attachment_download", array("fileId" => $this->getAttribute((isset($context["image"]) ? $context["image"] : null), "id", array()))), "html", null, true);
            echo "\" width=\"100\" height=\"80\">
                ";
        } else {
            // line 27
            echo "                    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/h5/images/update/courselistImg.png"), "html", null, true);
            echo "\" width=\"100\" height=\"80\">
                ";
        }
        // line 29
        echo "                <div class=\"list-right\">
                    <p class=\"s-course-name overline2\">";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["productBase"]) ? $context["productBase"] : null), "title", array()), "html", null, true);
        echo "</p>
                    ";
        // line 32
        echo "                    ";
        // line 33
        echo "                    ";
        // line 34
        echo "                </div>
            </a>
        </div>
    </div>
    <div>
        <div class=\"left-h2\">基地简介</div>
        <section class=\"bg-df9 g-mb10\">
            <article class=\"g-font-color course-detailContent maxh\">
                ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["productBase"]) ? $context["productBase"] : null), "about", array()), "html", null, true);
        echo "
            </article>
            <p class=\"read-more\">更多内容</p>
        </section>
        <div class=\"g-font-color5 bg-df9 g-mb10  overline1 base-adddress\">
            ";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["productBase"]) ? $context["productBase"] : null), "address", array()), "html", null, true);
        echo "
            <span class=\"g-font-color3 add-icon\"></span>
            ";
        // line 49
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("CustomWebBundle:ProductBase:distance", array("productBase" => (isset($context["productBase"]) ? $context["productBase"] : null))));
        echo "
        </div>

        ";
        // line 52
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("CustomWebBundle:ProductBase:courses", array("id" => $this->getAttribute((isset($context["productBase"]) ? $context["productBase"] : null), "id", array()))));
        echo "
    </div>
</div>
<script src=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/h5/js/src/vendor/require.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/h5/js/src/main.js"), "html", null, true);
        echo "\"></script>
<script>
    require.config({baseUrl: [\"/themes/h5/js/src/\"].join('')});
    require(['zepto'], function () {
        vailHeight();
        function vailHeight() {
            \$('.course-detailContent').removeClass('maxh');
            var detailHeight = \$('.course-detailContent').height();
            if (detailHeight <= 120) {
                \$('.read-more').css('display', 'none');
            } else {
                \$('.course-detailContent').addClass('detailDes-overpb detailDes-overh');
                \$('.read-more').html('更多内容');
            }
        }

        \$('.read-more').on('click', function () {
            if (\$(this).html() == '更多内容') {
                \$('.course-detailContent').removeClass('detailDes-overh');
                \$(this).html('没有更多内容');
            }
            else {
                \$('.course-detailContent').addClass('detailDes-overh');
                \$(this).html('更多内容');
            }
        })

        \$('#live').on('click', function () {
            window.location.href = \"lpmas://yunketang/longping020\";
        })

    })


</script>

";
        // line 92
        $this->loadTemplate("CustomWebBundle::tongji.html.twig", "CustomWebBundle:ProductBase:detail.html.twig", 92)->display($context);
        // line 93
        echo "</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "CustomWebBundle:ProductBase:detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 93,  164 => 92,  125 => 56,  121 => 55,  115 => 52,  109 => 49,  104 => 47,  96 => 42,  86 => 34,  84 => 33,  82 => 32,  78 => 30,  75 => 29,  69 => 27,  63 => 25,  61 => 24,  56 => 21,  54 => 20,  47 => 15,  43 => 14,  39 => 13,  35 => 12,  31 => 11,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta http-equiv="content-type" content="text/html; charset=utf-8"/>*/
/*     <title>实训基地</title>*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge"/>*/
/*     <meta name="apple-mobile-web-app-capable" content="yes"/>*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>*/
/*     <meta name="keywords" content="实训基地"/>*/
/*     <meta name="description" content="实训基地"/>*/
/*     <link rel="icon" href="{{ asset(setting('site.favicon')) }}" type="image/x-icon"/>*/
/*     <link rel="shortcut icon" href="{{ asset(setting('site.favicon')) }}" type="image/x-icon" media="screen"/>*/
/*     <link rel="stylesheet" media="screen" href="{{ asset('themes/h5/style/css/global.css') }}"/>*/
/*     <link rel="stylesheet" media="screen" href="{{ asset('themes/h5/style/css/global-v2.css') }}"/>*/
/*     <link rel="stylesheet" media="screen" href="{{ asset('themes/h5/style/css/course.css') }}"/>*/
/* </head>*/
/* <body>*/
/* <div class="g-wrap g-pb0">*/
/*     {#<div class="g-h2 f-tac"><a href="javascript:;" class="back-a"><i class="back-point"></i></a>班级详情</div>#}*/
/*     {#<div class="placeHolder"></div>#}*/
/*     <div class="class-detail" style="background: #5dab2f">*/
/*         <div class="courseDetail">*/
/*             <a href="javascript:;" class="courseList1">*/
/*                 {% if image.id|default(0) %}*/
/*                     <img src="{{ path('classroom_attachment_download',{fileId:image.id}) }}" width="100" height="80">*/
/*                 {% else %}*/
/*                     <img src="{{ asset('themes/h5/images/update/courselistImg.png') }}" width="100" height="80">*/
/*                 {% endif %}*/
/*                 <div class="list-right">*/
/*                     <p class="s-course-name overline2">{{ productBase.title }}</p>*/
/*                     {#<p class="s-course-progress">#}*/
/*                     {#<span>123人</span>#}*/
/*                     {#<span class="g-fr">45课时</span></p>#}*/
/*                 </div>*/
/*             </a>*/
/*         </div>*/
/*     </div>*/
/*     <div>*/
/*         <div class="left-h2">基地简介</div>*/
/*         <section class="bg-df9 g-mb10">*/
/*             <article class="g-font-color course-detailContent maxh">*/
/*                 {{ productBase.about }}*/
/*             </article>*/
/*             <p class="read-more">更多内容</p>*/
/*         </section>*/
/*         <div class="g-font-color5 bg-df9 g-mb10  overline1 base-adddress">*/
/*             {{ productBase.address }}*/
/*             <span class="g-font-color3 add-icon"></span>*/
/*             {{ render(controller('CustomWebBundle:ProductBase:distance',{productBase:productBase})) }}*/
/*         </div>*/
/* */
/*         {{ render(controller('CustomWebBundle:ProductBase:courses',{id:productBase.id})) }}*/
/*     </div>*/
/* </div>*/
/* <script src="{{ asset('themes/h5/js/src/vendor/require.js') }}"></script>*/
/* <script src="{{ asset('themes/h5/js/src/main.js') }}"></script>*/
/* <script>*/
/*     require.config({baseUrl: ["/themes/h5/js/src/"].join('')});*/
/*     require(['zepto'], function () {*/
/*         vailHeight();*/
/*         function vailHeight() {*/
/*             $('.course-detailContent').removeClass('maxh');*/
/*             var detailHeight = $('.course-detailContent').height();*/
/*             if (detailHeight <= 120) {*/
/*                 $('.read-more').css('display', 'none');*/
/*             } else {*/
/*                 $('.course-detailContent').addClass('detailDes-overpb detailDes-overh');*/
/*                 $('.read-more').html('更多内容');*/
/*             }*/
/*         }*/
/* */
/*         $('.read-more').on('click', function () {*/
/*             if ($(this).html() == '更多内容') {*/
/*                 $('.course-detailContent').removeClass('detailDes-overh');*/
/*                 $(this).html('没有更多内容');*/
/*             }*/
/*             else {*/
/*                 $('.course-detailContent').addClass('detailDes-overh');*/
/*                 $(this).html('更多内容');*/
/*             }*/
/*         })*/
/* */
/*         $('#live').on('click', function () {*/
/*             window.location.href = "lpmas://yunketang/longping020";*/
/*         })*/
/* */
/*     })*/
/* */
/* */
/* </script>*/
/* */
/* {% include "CustomWebBundle::tongji.html.twig"  %}*/
/* </body>*/
/* </html>*/
/* */
