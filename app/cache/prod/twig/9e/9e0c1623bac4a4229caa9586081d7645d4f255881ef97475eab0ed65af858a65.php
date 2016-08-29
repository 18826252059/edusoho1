<?php

/* CustomWebBundle:User:collection-list.html.twig */
class __TwigTemplate_ceb480cacc8bb047ea6c37d21cc79a12b6d116507cdbfd2d2ca29dfc1a91a590 extends Twig_Template
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
        echo "
<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\"/>
    <title>我的收藏</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
    <meta name=\"keywords\" content=\"我的收藏\" />
    <meta name=\"description\" content=\"我的收藏\" />
    <link rel=\"icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('topxia_web_twig')->getSetting("site.favicon")), "html", null, true);
        echo "\" type=\"image/x-icon\"/>
    <link rel=\"shortcut icon\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('topxia_web_twig')->getSetting("site.favicon")), "html", null, true);
        echo "\" type=\"image/x-icon\" media=\"screen\"/>
    <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/h5/style/css/global.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/h5/style/css/global-v2.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/h5/style/css/course.css"), "html", null, true);
        echo "\"/>
</head>
<body>
<div class=\"g-wrap g-pb0\">
    ";
        // line 21
        echo "    <div class=\"placeHolder\"></div>
    <div class=\"classes-list last-bor ajaxBox\"style=\"bottom: 0;\">
        <div class=\"swiper-container allclasses-list\" style=\"height: 100%;width: 100%\">
            <div class=\"swiper-wrapper\">
                <div class=\"swiper-slide\" style=\"height: auto\">
                </div>
            </div>
        </div>
    </div>
</div>
<script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/h5/js/src/vendor/require.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/h5/js/src/main.js"), "html", null, true);
        echo "\"></script>
<script>
    var url = \"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mapi_mobile_api", array("service" => "Course", "method" => "getFavoriteCourse")), "html", null, true);
        echo "\",baseDetailUrl=\"";
        echo $this->env->getExtension('routing')->getPath("course_detail", array("id" => "0"));
        echo "\"
    require.config({baseUrl: [\"/themes/h5/js/src/\"].join('')});
    require(['swiper','swiperSet','faController','underscore'], function () {
        var swiper1 = new Swiper('.allclasses-list', {
            direction: 'vertical',
            mousewheelControl: true,
            freeModeMomentumBounceRatio : 1,
            irection : 'vertical',
            slidesPerView:'auto',
            touchMoveStopPropagation : false,
            freeMode : true,
            onTouchEnd: function(swiper1) {
                var footer = \$('footer').height();
                var header = \$('.placeHolder').height();
                var swiperConth=\$('.allclasses-list .swiper-slide').height();
                if(swiper1.translate < 0){
                    if(swiperConth>\$(window).height() - header - footer) {
                        if (-(swiper1.translate) + \$(window).height() + header + footer >= swiperConth) {
                            loadAjax();
                        }
                    }
                }

            }
        });
        var done = false;
        var start = 0;
        var page = 0;
        loadAjax();
        function loadAjax(){
            if(!done) {
                \$.ajax({
                    url: url,
                    type: 'GET',
                    dataType: 'jsonp',
                    data: {
                        limit: '10',
                        start: start
                    },
                    beforeSend: function () {
                        Util.dialog.showLoading();
                    },
                    success: function (json) {

                        if (\"undefined\"!=typeof(json.error)&&json.error.name == 'not_login') {
                            //未登录跳转到登录
                            window.location.href = \"lpmas://yunketang/login\";
                        } else if (null != json.data && json.data.length > 0) {
                            var contentList = json.data;
                            var html = '';

                            for (var i = 0; i < contentList.length; i++) {
                                var courseList = contentList[i];
                                var detailUrl=baseDetailUrl+courseList.id;
                                html += '<div class=\"courseDetail\">' +
                                        '<a href=\"'+detailUrl+'\" class=\"courseList1\">' +
                                        '<img src=\"' + courseList.smallPicture + '\" width=\"100\" height=\"80\">' +
                                        '<div class=\"list-right\">' +
                                        '<p class=\"s-course-name overline2\">' + courseList.title + '</p>' +
                                        '<p class=\"s-course-progress\">' +
                                        '<span>' + courseList.lessonNum + '课时</span>' +
                                        '<span class=\"g-fr\">共' + courseList.studentNum + '人</span></p>' +
                                        '</div></a></div>';
                            }
                            \$('.allclasses-list .swiper-slide').append(html);
                            swiper1.update();

                            if (json.data.length < 10) {
                                done = true;
                                \$('.allclasses-list .swiper-slide').append('<a href=\"javascript:;\"><p class=\"hasdone\">已加载完毕!</p></a>');
                                swiper1.update();
                            }
                            page++;
                            start=10 * page;
                        }
                        else{
                            \$('.allclasses-list .swiper-slide').append('<p class=\"hasdone noneTip\">暂无数据</p>');
                        }
                        Util.dialog.hideLoading();
                    },
                    error:function(json){
                        Util.dialog.hideLoading();
                    }
                });
            }
        }
    })
</script>
";
        // line 122
        $this->loadTemplate("CustomWebBundle::tongji.html.twig", "CustomWebBundle:User:collection-list.html.twig", 122)->display($context);
        // line 123
        echo "</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "CustomWebBundle:User:collection-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 123,  169 => 122,  76 => 34,  71 => 32,  67 => 31,  55 => 21,  48 => 16,  44 => 15,  40 => 14,  36 => 13,  32 => 12,  19 => 1,);
    }
}
/* */
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta http-equiv="content-type" content="text/html; charset=utf-8"/>*/
/*     <title>我的收藏</title>*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge"/>*/
/*     <meta name="apple-mobile-web-app-capable" content="yes"/>*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />*/
/*     <meta name="keywords" content="我的收藏" />*/
/*     <meta name="description" content="我的收藏" />*/
/*     <link rel="icon" href="{{ asset(setting('site.favicon')) }}" type="image/x-icon"/>*/
/*     <link rel="shortcut icon" href="{{ asset(setting('site.favicon')) }}" type="image/x-icon" media="screen"/>*/
/*     <link rel="stylesheet" media="screen" href="{{ asset('themes/h5/style/css/global.css') }}"/>*/
/*     <link rel="stylesheet" media="screen" href="{{ asset('themes/h5/style/css/global-v2.css') }}"/>*/
/*     <link rel="stylesheet" media="screen" href="{{ asset('themes/h5/style/css/course.css') }}"/>*/
/* </head>*/
/* <body>*/
/* <div class="g-wrap g-pb0">*/
/*     {#<div class="g-h2 f-tac"><a href="javascript:;" class="back-a"><i class="back-point"></i></a>我的收藏</div>#}*/
/*     <div class="placeHolder"></div>*/
/*     <div class="classes-list last-bor ajaxBox"style="bottom: 0;">*/
/*         <div class="swiper-container allclasses-list" style="height: 100%;width: 100%">*/
/*             <div class="swiper-wrapper">*/
/*                 <div class="swiper-slide" style="height: auto">*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <script src="{{ asset('themes/h5/js/src/vendor/require.js') }}"></script>*/
/* <script src="{{ asset('themes/h5/js/src/main.js') }}"></script>*/
/* <script>*/
/*     var url = "{{ path('mapi_mobile_api',{service:'Course',method:'getFavoriteCourse'}) }}",baseDetailUrl="{{ path('course_detail',{id:'0'}) }}"*/
/*     require.config({baseUrl: ["/themes/h5/js/src/"].join('')});*/
/*     require(['swiper','swiperSet','faController','underscore'], function () {*/
/*         var swiper1 = new Swiper('.allclasses-list', {*/
/*             direction: 'vertical',*/
/*             mousewheelControl: true,*/
/*             freeModeMomentumBounceRatio : 1,*/
/*             irection : 'vertical',*/
/*             slidesPerView:'auto',*/
/*             touchMoveStopPropagation : false,*/
/*             freeMode : true,*/
/*             onTouchEnd: function(swiper1) {*/
/*                 var footer = $('footer').height();*/
/*                 var header = $('.placeHolder').height();*/
/*                 var swiperConth=$('.allclasses-list .swiper-slide').height();*/
/*                 if(swiper1.translate < 0){*/
/*                     if(swiperConth>$(window).height() - header - footer) {*/
/*                         if (-(swiper1.translate) + $(window).height() + header + footer >= swiperConth) {*/
/*                             loadAjax();*/
/*                         }*/
/*                     }*/
/*                 }*/
/* */
/*             }*/
/*         });*/
/*         var done = false;*/
/*         var start = 0;*/
/*         var page = 0;*/
/*         loadAjax();*/
/*         function loadAjax(){*/
/*             if(!done) {*/
/*                 $.ajax({*/
/*                     url: url,*/
/*                     type: 'GET',*/
/*                     dataType: 'jsonp',*/
/*                     data: {*/
/*                         limit: '10',*/
/*                         start: start*/
/*                     },*/
/*                     beforeSend: function () {*/
/*                         Util.dialog.showLoading();*/
/*                     },*/
/*                     success: function (json) {*/
/* */
/*                         if ("undefined"!=typeof(json.error)&&json.error.name == 'not_login') {*/
/*                             //未登录跳转到登录*/
/*                             window.location.href = "lpmas://yunketang/login";*/
/*                         } else if (null != json.data && json.data.length > 0) {*/
/*                             var contentList = json.data;*/
/*                             var html = '';*/
/* */
/*                             for (var i = 0; i < contentList.length; i++) {*/
/*                                 var courseList = contentList[i];*/
/*                                 var detailUrl=baseDetailUrl+courseList.id;*/
/*                                 html += '<div class="courseDetail">' +*/
/*                                         '<a href="'+detailUrl+'" class="courseList1">' +*/
/*                                         '<img src="' + courseList.smallPicture + '" width="100" height="80">' +*/
/*                                         '<div class="list-right">' +*/
/*                                         '<p class="s-course-name overline2">' + courseList.title + '</p>' +*/
/*                                         '<p class="s-course-progress">' +*/
/*                                         '<span>' + courseList.lessonNum + '课时</span>' +*/
/*                                         '<span class="g-fr">共' + courseList.studentNum + '人</span></p>' +*/
/*                                         '</div></a></div>';*/
/*                             }*/
/*                             $('.allclasses-list .swiper-slide').append(html);*/
/*                             swiper1.update();*/
/* */
/*                             if (json.data.length < 10) {*/
/*                                 done = true;*/
/*                                 $('.allclasses-list .swiper-slide').append('<a href="javascript:;"><p class="hasdone">已加载完毕!</p></a>');*/
/*                                 swiper1.update();*/
/*                             }*/
/*                             page++;*/
/*                             start=10 * page;*/
/*                         }*/
/*                         else{*/
/*                             $('.allclasses-list .swiper-slide').append('<p class="hasdone noneTip">暂无数据</p>');*/
/*                         }*/
/*                         Util.dialog.hideLoading();*/
/*                     },*/
/*                     error:function(json){*/
/*                         Util.dialog.hideLoading();*/
/*                     }*/
/*                 });*/
/*             }*/
/*         }*/
/*     })*/
/* </script>*/
/* {% include "CustomWebBundle::tongji.html.twig"  %}*/
/* </body>*/
/* </html>*/
/* */
