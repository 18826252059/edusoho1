<?php

/* CustomWebBundle:Classroom:live-explore-list.html.twig */
class __TwigTemplate_6f5a2760a0b60b4fa878b72843664c9eb7a13f647d61c3a8bb0e8dea39a50baf extends Twig_Template
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
    <title>";
        // line 5
        if (((array_key_exists("my", $context)) ? (_twig_default_filter((isset($context["my"]) ? $context["my"] : null), "0")) : ("0"))) {
            echo "我的培育班";
        } else {
            echo "培育班列表";
        }
        echo "</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
    <meta name=\"keywords\" content=\"培育班列表\" />
    <meta name=\"description\" content=\"培育班列表\" />
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
        echo "    <div class=\"classes-list last-bor ajaxBox\">
        <div class=\"swiper-container allclasses-list\" style=\"height: 100%;width: 100%\">
            <div class=\"swiper-wrapper\">
                <div class=\"swiper-slide\" style=\"height: auto\">
                </div>

            </div>

        </div>
    </div>
    ";
        // line 32
        echo "    ";
        // line 33
        echo "    ";
        // line 34
        echo "    ";
        // line 35
        echo "    ";
        // line 36
        echo "    ";
        // line 37
        echo "    ";
        // line 38
        echo "    ";
        // line 39
        echo "    ";
        // line 40
        echo "</div>
<script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/h5/js/src/vendor/require.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/h5/js/src/main.js"), "html", null, true);
        echo "\"></script>
<script>
    var url=\"";
        // line 44
        if (((array_key_exists("my", $context)) ? (_twig_default_filter((isset($context["my"]) ? $context["my"] : null), "0")) : ("0"))) {
            echo $this->env->getExtension('routing')->getPath("custom_mobile_api_getMyClassRooms");
        } else {
            echo $this->env->getExtension('routing')->getPath("custom_mobile_api_getClassRooms");
        }
        echo "\",baseDetailUrl=\"";
        echo $this->env->getExtension('routing')->getPath("classroom_detail", array("id" => "0"));
        echo "\";
    var my=";
        // line 45
        echo twig_escape_filter($this->env, ((array_key_exists("my", $context)) ? (_twig_default_filter((isset($context["my"]) ? $context["my"] : null), "0")) : ("0")), "html", null, true);
        echo ";
    var allUrl=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("calssroom_list");
        echo "\";
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
//                var footer = \$('footer').height();
//                var header = \$('.placeHolder').height();
                var swiperConth=\$('.allclasses-list .swiper-slide').height();
                if(swiper1.translate < 0){
                    if(swiperConth>\$(window).height() - 98) {
                        if (-(swiper1.translate) + \$(window).height() + 98 >= swiperConth) {
                            console.log(\"shidifhieshh\");
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
                    dataType: 'json',
                    data: {
                        limit: '10',
                        start: start
                    },
                    beforeSend: function () {
                        Util.dialog.showLoading();
                    },
                    success: function (json) {
                        console.log(json);
                        if (json.error) {
                            console.log('error');
                            Util.dialog.hideLoading();
                        } else if (null == json.data) {
                            if (my) {
                                \$('.allclasses-list .swiper-slide').append('<a href=\"'+allUrl+'\"><p class=\"hasdone\">您还没有加入培育班，点击查看所有培育班</p></a>');
                            }else{
                                \$('.allclasses-list .swiper-slide').append('<p class=\"hasdone noneTip\">暂无数据</p>');
                            }
                            Util.dialog.hideLoading();
                        } else if (null != json.data) {
                            if (null != json.data.data && json.data.data.length > 0) {
                                var contentList = json.data.data;
                                var html = '';

                                for (var i = 0; i < contentList.length; i++) {
                                    var courseList = contentList[i];
                                    var detailUrl=baseDetailUrl+courseList.id;
                                    html += '<div class=\"courseDetail\">' +
                                            '<a href=\"lpmas://xiangnongyun/live/hls.lpmas.com/yunketang/'+courseList.id+'/playlist.m3u8\" class=\"courseList1\">' +
                                            '<img src=\"' + courseList.picture + '\" width=\"100\" height=\"80\">' +
                                            '<div class=\"list-right\">' +
                                            '<p class=\"s-course-name\">' + courseList.title + '</p>' +
                                            '<p class=\"s-course-progress\">' +
                                            '<span class=\"video\">';
                                    if(courseList.liveStatus==1){
                                        html+='已连接';
                                    }else{
                                        html+='已断开';
                                    }
                                    html+='</span>' +
                                            '<span class=\"g-fr\">共' + courseList.studentNum + '人</span></p>' +
                                            '</div></a></div>';
//                                    if(courseList.liveStatus==1){
//                                        html+='已连接';
//                                    }else{
//                                        html+='已断开';
//                                    }
//
//                                     html+= '</span></p>' +
//                                            '</div></a></div>';
                                }
                                \$('.allclasses-list .swiper-slide').append(html);
                                swiper1.update();
                                if (json.data.data.length < 10) {
                                    done = true;
                                    if (my) {
                                        \$('.allclasses-list .swiper-slide').append('<a href=\"'+allUrl+'\"><p class=\"hasdone\">查看所有培育班</p></a>');
                                    }else {
                                        \$('.allclasses-list .swiper-slide').append('<p class=\"hasdone\">数据加载完毕</p>');
                                    }
                                    swiper1.update();
                                }


                                page++;
                                start=10 * page;
                            }
                            else{
                                if (my) {
                                    \$('.allclasses-list .swiper-slide').append('<a href=\"'+allUrl+'\"><p class=\"hasdone\">你还没有加入培育班，点击查看所有培育班</p></a>');
                                }else{
                                    \$('.allclasses-list .swiper-slide').append('<p class=\"hasdone noneTip\">暂无数据</p>');
                                }
                            }
                            Util.dialog.hideLoading();
                        }
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
        // line 167
        $this->loadTemplate("CustomWebBundle::tongji.html.twig", "CustomWebBundle:Classroom:live-explore-list.html.twig", 167)->display($context);
        // line 168
        echo "</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "CustomWebBundle:Classroom:live-explore-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 168,  241 => 167,  117 => 46,  113 => 45,  103 => 44,  98 => 42,  94 => 41,  91 => 40,  89 => 39,  87 => 38,  85 => 37,  83 => 36,  81 => 35,  79 => 34,  77 => 33,  75 => 32,  63 => 21,  61 => 20,  54 => 15,  50 => 14,  46 => 13,  42 => 12,  38 => 11,  25 => 5,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta http-equiv="content-type" content="text/html; charset=utf-8"/>*/
/*     <title>{% if my|default('0') %}我的培育班{% else %}培育班列表{% endif %}</title>*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge"/>*/
/*     <meta name="apple-mobile-web-app-capable" content="yes"/>*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />*/
/*     <meta name="keywords" content="培育班列表" />*/
/*     <meta name="description" content="培育班列表" />*/
/*     <link rel="icon" href="{{ asset(setting('site.favicon')) }}" type="image/x-icon"/>*/
/*     <link rel="shortcut icon" href="{{ asset(setting('site.favicon')) }}" type="image/x-icon" media="screen"/>*/
/*     <link rel="stylesheet" media="screen" href="{{ asset('themes/h5/style/css/global.css') }}"/>*/
/*     <link rel="stylesheet" media="screen" href="{{ asset('themes/h5/style/css/global-v2.css') }}"/>*/
/*     <link rel="stylesheet" media="screen" href="{{ asset('themes/h5/style/css/course.css') }}"/>*/
/* </head>*/
/* <body>*/
/* <div class="g-wrap g-pb0">*/
/*     {#<div class="g-h2 f-tac">培育班</div>#}*/
/*     {#<div class="placeHolder"></div>#}*/
/*     <div class="classes-list last-bor ajaxBox">*/
/*         <div class="swiper-container allclasses-list" style="height: 100%;width: 100%">*/
/*             <div class="swiper-wrapper">*/
/*                 <div class="swiper-slide" style="height: auto">*/
/*                 </div>*/
/* */
/*             </div>*/
/* */
/*         </div>*/
/*     </div>*/
/*     {#<footer class="footer-fixed">#}*/
/*     {#<ul class="footer-nav g-flex">#}*/
/*     {#<li class="subitem selected"><a href="#"><i class="icon-ft ft-nav01">&nbsp;</i><br>课程</a></li>#}*/
/*     {#<li class="subitem"><a href="#"><i class="icon-ft ft-nav02">&nbsp;</i><br>培育班</a></li>#}*/
/*     {#<li class="subitem"><a href="#"><i class="icon-ft ft-nav03">&nbsp;</i><br>问答</a></li>#}*/
/*     {#<li class="subitem"><a href="#"><i class="icon-ft ft-nav01">&nbsp;</i><br>咨询</a></li>#}*/
/*     {#<li class="subitem"><a href="#"><i class="icon-ft ft-nav04">&nbsp;</i><br>我</a></li>#}*/
/*     {#</ul>#}*/
/*     {#</footer>#}*/
/* </div>*/
/* <script src="{{ asset('themes/h5/js/src/vendor/require.js') }}"></script>*/
/* <script src="{{ asset('themes/h5/js/src/main.js') }}"></script>*/
/* <script>*/
/*     var url="{% if my|default('0') %}{{ path('custom_mobile_api_getMyClassRooms') }}{% else %}{{ path('custom_mobile_api_getClassRooms') }}{% endif %}",baseDetailUrl="{{ path('classroom_detail',{id:'0'}) }}";*/
/*     var my={{ my|default('0') }};*/
/*     var allUrl="{{ path('calssroom_list') }}";*/
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
/* //                var footer = $('footer').height();*/
/* //                var header = $('.placeHolder').height();*/
/*                 var swiperConth=$('.allclasses-list .swiper-slide').height();*/
/*                 if(swiper1.translate < 0){*/
/*                     if(swiperConth>$(window).height() - 98) {*/
/*                         if (-(swiper1.translate) + $(window).height() + 98 >= swiperConth) {*/
/*                             console.log("shidifhieshh");*/
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
/*                     dataType: 'json',*/
/*                     data: {*/
/*                         limit: '10',*/
/*                         start: start*/
/*                     },*/
/*                     beforeSend: function () {*/
/*                         Util.dialog.showLoading();*/
/*                     },*/
/*                     success: function (json) {*/
/*                         console.log(json);*/
/*                         if (json.error) {*/
/*                             console.log('error');*/
/*                             Util.dialog.hideLoading();*/
/*                         } else if (null == json.data) {*/
/*                             if (my) {*/
/*                                 $('.allclasses-list .swiper-slide').append('<a href="'+allUrl+'"><p class="hasdone">您还没有加入培育班，点击查看所有培育班</p></a>');*/
/*                             }else{*/
/*                                 $('.allclasses-list .swiper-slide').append('<p class="hasdone noneTip">暂无数据</p>');*/
/*                             }*/
/*                             Util.dialog.hideLoading();*/
/*                         } else if (null != json.data) {*/
/*                             if (null != json.data.data && json.data.data.length > 0) {*/
/*                                 var contentList = json.data.data;*/
/*                                 var html = '';*/
/* */
/*                                 for (var i = 0; i < contentList.length; i++) {*/
/*                                     var courseList = contentList[i];*/
/*                                     var detailUrl=baseDetailUrl+courseList.id;*/
/*                                     html += '<div class="courseDetail">' +*/
/*                                             '<a href="lpmas://xiangnongyun/live/hls.lpmas.com/yunketang/'+courseList.id+'/playlist.m3u8" class="courseList1">' +*/
/*                                             '<img src="' + courseList.picture + '" width="100" height="80">' +*/
/*                                             '<div class="list-right">' +*/
/*                                             '<p class="s-course-name">' + courseList.title + '</p>' +*/
/*                                             '<p class="s-course-progress">' +*/
/*                                             '<span class="video">';*/
/*                                     if(courseList.liveStatus==1){*/
/*                                         html+='已连接';*/
/*                                     }else{*/
/*                                         html+='已断开';*/
/*                                     }*/
/*                                     html+='</span>' +*/
/*                                             '<span class="g-fr">共' + courseList.studentNum + '人</span></p>' +*/
/*                                             '</div></a></div>';*/
/* //                                    if(courseList.liveStatus==1){*/
/* //                                        html+='已连接';*/
/* //                                    }else{*/
/* //                                        html+='已断开';*/
/* //                                    }*/
/* //*/
/* //                                     html+= '</span></p>' +*/
/* //                                            '</div></a></div>';*/
/*                                 }*/
/*                                 $('.allclasses-list .swiper-slide').append(html);*/
/*                                 swiper1.update();*/
/*                                 if (json.data.data.length < 10) {*/
/*                                     done = true;*/
/*                                     if (my) {*/
/*                                         $('.allclasses-list .swiper-slide').append('<a href="'+allUrl+'"><p class="hasdone">查看所有培育班</p></a>');*/
/*                                     }else {*/
/*                                         $('.allclasses-list .swiper-slide').append('<p class="hasdone">数据加载完毕</p>');*/
/*                                     }*/
/*                                     swiper1.update();*/
/*                                 }*/
/* */
/* */
/*                                 page++;*/
/*                                 start=10 * page;*/
/*                             }*/
/*                             else{*/
/*                                 if (my) {*/
/*                                     $('.allclasses-list .swiper-slide').append('<a href="'+allUrl+'"><p class="hasdone">你还没有加入培育班，点击查看所有培育班</p></a>');*/
/*                                 }else{*/
/*                                     $('.allclasses-list .swiper-slide').append('<p class="hasdone noneTip">暂无数据</p>');*/
/*                                 }*/
/*                             }*/
/*                             Util.dialog.hideLoading();*/
/*                         }*/
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
