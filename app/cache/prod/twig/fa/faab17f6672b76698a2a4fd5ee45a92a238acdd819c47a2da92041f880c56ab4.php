<?php

/* CustomWebBundle:Course:explore-list.html.twig */
class __TwigTemplate_3e2ae1b5337fa61108aae6c31e20f448deda867d9dd602f5811f16801b5e94e1 extends Twig_Template
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
    <title>课程列表</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
    <meta name=\"keywords\" content=\"课程列表\" />
    <meta name=\"description\" content=\"课程列表\" />
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/h5/style/css/swiper/swiper.min.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/h5/style/css/course.css"), "html", null, true);
        echo "\"/>
</head>
<body>
<div class=\"g-wrap g-pb0\">
    <div class=\"g-h2 f-tac\">
        <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\" class=\"back-a\"><i class=\"back-point\"></i></a>
        <div class=\"course-input\">
            <input class='inputList'  placeholder=\"需要什么服务呢？搜索试试\">
            <i class=\"search-icon\"></i>
        </div>
        <a  class=\"search-div\">搜索</a> </div>
    <div class=\"placeHolder\"></div>
    <div class=\"swiper-container course-swiper\">
        <div class=\"swiper-pagination course-dots\"></div>
        <div class=\"swiper-wrapper course-contain\">
            <div class=\"swiper-slide firt-swiper last-bor watch-more\">

                <div class=\"swiper-container containSwiper\" style=\"height: 100%;width: 100%\">
                    <div class=\"swiper-wrapper\">
                        <div class=\"swiper-slide\" style=\"height: auto\">
                        </div>
                    </div>
                </div>

            </div>
            <div class=\"swiper-slide firt-swiper last-bor answer-more\">
                <div class=\"swiper-container containSwiper\" style=\"height: 100%;width: 100%\">
                    <div class=\"swiper-wrapper\">
                        <div class=\"swiper-slide\" style=\"height: auto\">
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"swiper-slide firt-swiper last-bor lesson-more\">
                <div class=\"swiper-container containSwiper\" style=\"height: 100%;width: 100%\">
                    <div class=\"swiper-wrapper\">
                        <div class=\"swiper-slide\" style=\"height: auto\">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/h5/js/src/vendor/require.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/h5/js/src/main.js"), "html", null, true);
        echo "\"></script>
<script>
    var url=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("custom_mobile_api_searchCourse");
        echo "\",baseDetailUrl=\"";
        echo $this->env->getExtension('routing')->getPath("course_detail", array("id" => "0"));
        echo "\";
    require.config({baseUrl: [\"/themes/h5/js/src/\"].join('')});
    require(['basePage'], function (basePage) {
    });
    require(['swiper','swiperSet','faController','underscore'], function () {
        var courseNav = \$('.course-dots').height();
        var header = \$('.placeHolder').height();
        var swiper = \$('.course-swiper');
        var swiperSilde = \$('.course-swiper .firt-swiper');
        swiper.css({
            'height': \$(window).height() - header + 'px',
            'overflow': 'hidden'
        });
        swiperSilde.css({
            'height': \$(window).height() - header - courseNav  + 'px'
        });


        var translation2 = false;
        var translation3 = false;
        var courseSwiper = new Swiper('.course-swiper',{
            pagination: '.course-dots',
            paginationClickable: true,
            resistanceRatio: 0,
            touchMoveStopPropagation : false,
            paginationBulletRender: function (index, className) {
                switch (index) {
                    case 0: name='观看最多';break;
                    case 1: name='课程最新';break;
                    case 2: name='课时最长';break;
                    default: name='';
                }
                return '<span class=\"' + className + '\">' + name + '</span>';
            },
            onTransitionEnd: function(courseSwiper){
                var swiperIndex = courseSwiper.activeIndex;
                if(swiperIndex == 1){
                    if(!translation2){
                        ajaxLoad('2','','');
                        translation2 = true;
                    }
                }
                else if(swiperIndex == 2){
                    if(!translation3){
                        ajaxLoad('3','lessonNum','');
                        translation3 = true;
                    }
                }
            }
        });

        var swiper1 = new Swiper('.watch-more .containSwiper', {
            direction: 'vertical',
            mousewheelControl: true,
            freeModeMomentumBounceRatio : 1,
            irection : 'vertical',
            slidesPerView:'auto',
            touchMoveStopPropagation : false,
            freeMode : true,
            onTouchEnd: function(swiper1) {
                var swiperConth=\$('.watch-more .swiper-slide').height();
                if(swiper1.translate < 0){
                    if(swiperConth>\$(window).height() - header - courseNav) {
                        if (-(swiper1.translate) + \$(window).height() + header + courseNav >= swiperConth) {
                            ajaxLoad('1', 'hitNum', '');
                        }
                    }
                }

            }
        });
        var swiper2 = new Swiper('.answer-more .containSwiper', {
            direction: 'vertical',
            mousewheelControl: true,
            freeModeMomentumBounceRatio : 1,
            irection : 'vertical',
            slidesPerView:'auto',
            touchMoveStopPropagation : false,
            freeMode : true,
            onTouchEnd: function(swiper2) {
                var swiperConth=\$('.answer-more .swiper-slide').height();
                if(swiper2.translate < 0){
                    if(swiperConth>\$(window).height() - header - courseNav) {
                        if(-(swiper2.translate) + \$(window).height() + header + courseNav >= swiperConth) {
                            ajaxLoad('2', '', '');
                        }
                    }
                }

            }
        });
        var swiper3 = new Swiper('.lesson-more .containSwiper', {
            direction: 'vertical',
            mousewheelControl: true,
            freeModeMomentumBounceRatio : 1,
            irection : 'vertical',
            slidesPerView:'auto',
            touchMoveStopPropagation : false,
            freeMode : true,
            onTouchEnd: function(swiper3) {
                var swiperConth=\$('.lesson-more .swiper-slide').height();
                if(swiperConth>\$(window).height() - header - courseNav) {
                    if (swiper3.translate < 0) {
                        if (-(swiper3.translate) + \$(window).height() + header + courseNav >= swiperConth) {
                            ajaxLoad('3', 'lessonNum', '');
                        }
                    }
                }
            }
        });

        var value = window.location.href;
        var categoryId = subURL(value, 'categoryId');
        var searchValue= subURL(value, 'search');
        var page1 = 0;
        var start1 = 0;
        var done1 = false;
        var page2 = 0;
        var start2 = 0;
        var done2 = false;
        var page3 = 0;
        var start3 = 0;
        var done3 = false;
        var sort='hitNum';
        var search='';
        var index = 1;
        var start = '0';
        var done = false;

        ajaxLoad(index,sort,search);

        function ajaxLoad(index,sort,search){
            if(index == 1) {
                start = start1;
                done = done1;
            }
            else if(index == 2){
                start = start2;
                done = done2;
            }
            else if(index == 3){
                start = start3;
                done = done3;
            }
            if(!done) {
                if(search!=''){
                    categoryId=0;
                }
                \$.ajax({
                    url: url,
                    type: 'GET',
                    dataType: 'json',
                    data: {
                        type: 'normal',
                        categoryId: categoryId,
                        limit: '10',
                        start: start,
                        sort: sort,
                        search:search
                    },
                    beforeSend: function () {
                        Util.dialog.showLoading();
                    },
                    success: function (json) {
                        if (json.error) {
                            console.log('error');
                            Util.dialog.hideLoading();
                        } else if (null == json.data) {

                            console.log('错误');
                            Util.dialog.hideLoading();
                        } else if (null != json.data) {
                            if (null != json.data.data && json.data.data.length > 0) {
                                var contentList = json.data.data;
                                var html = '';

                                for (var i = 0; i < contentList.length; i++) {
                                    var courseList = contentList[i];
                                    var detailUrl=baseDetailUrl+courseList.id;
                                    html += '<div class=\"courseDetail\">' +
                                            '<a href=\"'+detailUrl+'\" class=\"courseList1\">' +
                                            '<img src=\"' + courseList.picture + '\" width=\"100\" height=\"80\">' +
                                            '<div class=\"list-right\">' +
                                            '<p class=\"s-course-name\">' + courseList.title + '</p>' +
                                            '<p class=\"s-course-progress\">' +
                                            '<span>' + courseList.lessonNum + '课时</span>' +
                                            '<span class=\"g-fr\">共' + courseList.studentNum + '人</span></p>' +
                                            '</div></a></div>';
                                }
                                \$('.firt-swiper').eq(index-1).find('.swiper-slide').append(html);
                                update(index);

                                if (json.data.data.length < 10) {
                                    if(index == 1){
                                        done1 = true;
                                    }
                                    else if(index == 2){
                                        done2 = true;
                                    }
                                    else if(index == 3){
                                        done3 = true;
                                    }
                                    \$('.firt-swiper').eq(index-1).find('.swiper-slide').append('<p class=\"hasdone\">数据加载完毕</p>');
                                    update(index);
                                }
                                if(index == 1){
                                    page1++;
                                    start1=10 * page1;
                                }
                                else if(index == 2){
                                    page2++;
                                    start2=10 * page2;
                                }
                                else if(index == 3){
                                    page3++;
                                    start3=10 * page3;
                                }
                            }
                            else{
                                \$('.firt-swiper').eq(index-1).find('.swiper-slide').append('<p class=\"hasdone noneTip\">暂无数据</p>');
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
        function update(index){
            if(index == 1){
                swiper1.update();
            }
            else if(index == 2){
                swiper2.update();
            }
            else if(index == 3){
                swiper3.update();
            }
        }
        function update1(index){
            if(index == 1){
                \$(\".watch-more .swiper-slide\").css(\"transition-duration\",\"0ms\");
                \$(\".watch-more .swiper-slide\").css(\"-webkit-transition-duration\",\"0ms\");
                swiper1.setWrapperTranslate(0);
            }
            else if(index == 2){
                \$(\".answer-more .swiper-slide\").css(\"transition-duration\",\"0ms\");
                \$(\".answer-more .swiper-slide\").css(\"-webkit-transition-duration\",\"0ms\");
                swiper2.setWrapperTranslate(0);
            }
            else if(index == 3){
                \$(\".lesson-more .swiper-slide\").css(\"transition-duration\",\"0ms\");
                \$(\".lesson-more .swiper-slide\").css(\"-webkit-transition-duration\",\"0ms\");
                swiper3.setWrapperTranslate(0);
            }
        }
        function subURL(value, param) {
            var catagoryId = '';
            var array = value.substring(value.indexOf('?') + 1, value.length).split('&');
            for(var index = 0; index < array.length; index ++) {
                if(array[index].indexOf(param + '=') == 0) {
                    catagoryId = array[index].substring(array[index].indexOf('=') + 1, array[index].length);
                    break;
                }
            }
            return catagoryId;
        }

        \$('.search-div').on('click',function(){

            if(courseSwiper.activeIndex == 0) {
                page1 = 0;
                start1 = 0;
                done1 = false;
                sort = 'hitNum';
            } else if(courseSwiper.activeIndex == 1) {
                page2 = 0;
                start2 = 0;
                done2 = false;
                sort = '';
            } else if(courseSwiper.activeIndex == 2) {
                page3 = 0;
                start3 = 0;
                done3 = false;
                sort = 'lessonNum';
            }
            \$('.firt-swiper').eq(courseSwiper.activeIndex).find('.swiper-slide').html('');
            update(courseSwiper.activeIndex+1);
            var searchValue=\$('.inputList').val();
            ajaxLoad(courseSwiper.activeIndex+1,sort,searchValue);
            update1(courseSwiper.activeIndex+1);
        })
    });


</script>
";
        // line 362
        $this->loadTemplate("CustomWebBundle::tongji.html.twig", "CustomWebBundle:Course:explore-list.html.twig", 362)->display($context);
        // line 363
        echo "</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "CustomWebBundle:Course:explore-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  416 => 363,  414 => 362,  111 => 64,  106 => 62,  102 => 61,  59 => 21,  51 => 16,  47 => 15,  43 => 14,  39 => 13,  35 => 12,  31 => 11,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta http-equiv="content-type" content="text/html; charset=utf-8"/>*/
/*     <title>课程列表</title>*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge"/>*/
/*     <meta name="apple-mobile-web-app-capable" content="yes"/>*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />*/
/*     <meta name="keywords" content="课程列表" />*/
/*     <meta name="description" content="课程列表" />*/
/*     <link rel="icon" href="{{ asset(setting('site.favicon')) }}" type="image/x-icon"/>*/
/*     <link rel="shortcut icon" href="{{ asset(setting('site.favicon')) }}" type="image/x-icon" media="screen"/>*/
/*     <link rel="stylesheet" media="screen" href="{{ asset('themes/h5/style/css/global.css') }}"/>*/
/*     <link rel="stylesheet" media="screen" href="{{ asset('themes/h5/style/css/global-v2.css') }}"/>*/
/*     <link rel="stylesheet" media="screen" href="{{ asset('themes/h5/style/css/swiper/swiper.min.css') }}"/>*/
/*     <link rel="stylesheet" media="screen" href="{{ asset('themes/h5/style/css/course.css') }}"/>*/
/* </head>*/
/* <body>*/
/* <div class="g-wrap g-pb0">*/
/*     <div class="g-h2 f-tac">*/
/*         <a href="{{ path('homepage') }}" class="back-a"><i class="back-point"></i></a>*/
/*         <div class="course-input">*/
/*             <input class='inputList'  placeholder="需要什么服务呢？搜索试试">*/
/*             <i class="search-icon"></i>*/
/*         </div>*/
/*         <a  class="search-div">搜索</a> </div>*/
/*     <div class="placeHolder"></div>*/
/*     <div class="swiper-container course-swiper">*/
/*         <div class="swiper-pagination course-dots"></div>*/
/*         <div class="swiper-wrapper course-contain">*/
/*             <div class="swiper-slide firt-swiper last-bor watch-more">*/
/* */
/*                 <div class="swiper-container containSwiper" style="height: 100%;width: 100%">*/
/*                     <div class="swiper-wrapper">*/
/*                         <div class="swiper-slide" style="height: auto">*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*             </div>*/
/*             <div class="swiper-slide firt-swiper last-bor answer-more">*/
/*                 <div class="swiper-container containSwiper" style="height: 100%;width: 100%">*/
/*                     <div class="swiper-wrapper">*/
/*                         <div class="swiper-slide" style="height: auto">*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="swiper-slide firt-swiper last-bor lesson-more">*/
/*                 <div class="swiper-container containSwiper" style="height: 100%;width: 100%">*/
/*                     <div class="swiper-wrapper">*/
/*                         <div class="swiper-slide" style="height: auto">*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* </div>*/
/* <script src="{{ asset('themes/h5/js/src/vendor/require.js') }}"></script>*/
/* <script src="{{ asset('themes/h5/js/src/main.js') }}"></script>*/
/* <script>*/
/*     var url="{{ path('custom_mobile_api_searchCourse') }}",baseDetailUrl="{{ path('course_detail',{id:'0'}) }}";*/
/*     require.config({baseUrl: ["/themes/h5/js/src/"].join('')});*/
/*     require(['basePage'], function (basePage) {*/
/*     });*/
/*     require(['swiper','swiperSet','faController','underscore'], function () {*/
/*         var courseNav = $('.course-dots').height();*/
/*         var header = $('.placeHolder').height();*/
/*         var swiper = $('.course-swiper');*/
/*         var swiperSilde = $('.course-swiper .firt-swiper');*/
/*         swiper.css({*/
/*             'height': $(window).height() - header + 'px',*/
/*             'overflow': 'hidden'*/
/*         });*/
/*         swiperSilde.css({*/
/*             'height': $(window).height() - header - courseNav  + 'px'*/
/*         });*/
/* */
/* */
/*         var translation2 = false;*/
/*         var translation3 = false;*/
/*         var courseSwiper = new Swiper('.course-swiper',{*/
/*             pagination: '.course-dots',*/
/*             paginationClickable: true,*/
/*             resistanceRatio: 0,*/
/*             touchMoveStopPropagation : false,*/
/*             paginationBulletRender: function (index, className) {*/
/*                 switch (index) {*/
/*                     case 0: name='观看最多';break;*/
/*                     case 1: name='课程最新';break;*/
/*                     case 2: name='课时最长';break;*/
/*                     default: name='';*/
/*                 }*/
/*                 return '<span class="' + className + '">' + name + '</span>';*/
/*             },*/
/*             onTransitionEnd: function(courseSwiper){*/
/*                 var swiperIndex = courseSwiper.activeIndex;*/
/*                 if(swiperIndex == 1){*/
/*                     if(!translation2){*/
/*                         ajaxLoad('2','','');*/
/*                         translation2 = true;*/
/*                     }*/
/*                 }*/
/*                 else if(swiperIndex == 2){*/
/*                     if(!translation3){*/
/*                         ajaxLoad('3','lessonNum','');*/
/*                         translation3 = true;*/
/*                     }*/
/*                 }*/
/*             }*/
/*         });*/
/* */
/*         var swiper1 = new Swiper('.watch-more .containSwiper', {*/
/*             direction: 'vertical',*/
/*             mousewheelControl: true,*/
/*             freeModeMomentumBounceRatio : 1,*/
/*             irection : 'vertical',*/
/*             slidesPerView:'auto',*/
/*             touchMoveStopPropagation : false,*/
/*             freeMode : true,*/
/*             onTouchEnd: function(swiper1) {*/
/*                 var swiperConth=$('.watch-more .swiper-slide').height();*/
/*                 if(swiper1.translate < 0){*/
/*                     if(swiperConth>$(window).height() - header - courseNav) {*/
/*                         if (-(swiper1.translate) + $(window).height() + header + courseNav >= swiperConth) {*/
/*                             ajaxLoad('1', 'hitNum', '');*/
/*                         }*/
/*                     }*/
/*                 }*/
/* */
/*             }*/
/*         });*/
/*         var swiper2 = new Swiper('.answer-more .containSwiper', {*/
/*             direction: 'vertical',*/
/*             mousewheelControl: true,*/
/*             freeModeMomentumBounceRatio : 1,*/
/*             irection : 'vertical',*/
/*             slidesPerView:'auto',*/
/*             touchMoveStopPropagation : false,*/
/*             freeMode : true,*/
/*             onTouchEnd: function(swiper2) {*/
/*                 var swiperConth=$('.answer-more .swiper-slide').height();*/
/*                 if(swiper2.translate < 0){*/
/*                     if(swiperConth>$(window).height() - header - courseNav) {*/
/*                         if(-(swiper2.translate) + $(window).height() + header + courseNav >= swiperConth) {*/
/*                             ajaxLoad('2', '', '');*/
/*                         }*/
/*                     }*/
/*                 }*/
/* */
/*             }*/
/*         });*/
/*         var swiper3 = new Swiper('.lesson-more .containSwiper', {*/
/*             direction: 'vertical',*/
/*             mousewheelControl: true,*/
/*             freeModeMomentumBounceRatio : 1,*/
/*             irection : 'vertical',*/
/*             slidesPerView:'auto',*/
/*             touchMoveStopPropagation : false,*/
/*             freeMode : true,*/
/*             onTouchEnd: function(swiper3) {*/
/*                 var swiperConth=$('.lesson-more .swiper-slide').height();*/
/*                 if(swiperConth>$(window).height() - header - courseNav) {*/
/*                     if (swiper3.translate < 0) {*/
/*                         if (-(swiper3.translate) + $(window).height() + header + courseNav >= swiperConth) {*/
/*                             ajaxLoad('3', 'lessonNum', '');*/
/*                         }*/
/*                     }*/
/*                 }*/
/*             }*/
/*         });*/
/* */
/*         var value = window.location.href;*/
/*         var categoryId = subURL(value, 'categoryId');*/
/*         var searchValue= subURL(value, 'search');*/
/*         var page1 = 0;*/
/*         var start1 = 0;*/
/*         var done1 = false;*/
/*         var page2 = 0;*/
/*         var start2 = 0;*/
/*         var done2 = false;*/
/*         var page3 = 0;*/
/*         var start3 = 0;*/
/*         var done3 = false;*/
/*         var sort='hitNum';*/
/*         var search='';*/
/*         var index = 1;*/
/*         var start = '0';*/
/*         var done = false;*/
/* */
/*         ajaxLoad(index,sort,search);*/
/* */
/*         function ajaxLoad(index,sort,search){*/
/*             if(index == 1) {*/
/*                 start = start1;*/
/*                 done = done1;*/
/*             }*/
/*             else if(index == 2){*/
/*                 start = start2;*/
/*                 done = done2;*/
/*             }*/
/*             else if(index == 3){*/
/*                 start = start3;*/
/*                 done = done3;*/
/*             }*/
/*             if(!done) {*/
/*                 if(search!=''){*/
/*                     categoryId=0;*/
/*                 }*/
/*                 $.ajax({*/
/*                     url: url,*/
/*                     type: 'GET',*/
/*                     dataType: 'json',*/
/*                     data: {*/
/*                         type: 'normal',*/
/*                         categoryId: categoryId,*/
/*                         limit: '10',*/
/*                         start: start,*/
/*                         sort: sort,*/
/*                         search:search*/
/*                     },*/
/*                     beforeSend: function () {*/
/*                         Util.dialog.showLoading();*/
/*                     },*/
/*                     success: function (json) {*/
/*                         if (json.error) {*/
/*                             console.log('error');*/
/*                             Util.dialog.hideLoading();*/
/*                         } else if (null == json.data) {*/
/* */
/*                             console.log('错误');*/
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
/*                                             '<a href="'+detailUrl+'" class="courseList1">' +*/
/*                                             '<img src="' + courseList.picture + '" width="100" height="80">' +*/
/*                                             '<div class="list-right">' +*/
/*                                             '<p class="s-course-name">' + courseList.title + '</p>' +*/
/*                                             '<p class="s-course-progress">' +*/
/*                                             '<span>' + courseList.lessonNum + '课时</span>' +*/
/*                                             '<span class="g-fr">共' + courseList.studentNum + '人</span></p>' +*/
/*                                             '</div></a></div>';*/
/*                                 }*/
/*                                 $('.firt-swiper').eq(index-1).find('.swiper-slide').append(html);*/
/*                                 update(index);*/
/* */
/*                                 if (json.data.data.length < 10) {*/
/*                                     if(index == 1){*/
/*                                         done1 = true;*/
/*                                     }*/
/*                                     else if(index == 2){*/
/*                                         done2 = true;*/
/*                                     }*/
/*                                     else if(index == 3){*/
/*                                         done3 = true;*/
/*                                     }*/
/*                                     $('.firt-swiper').eq(index-1).find('.swiper-slide').append('<p class="hasdone">数据加载完毕</p>');*/
/*                                     update(index);*/
/*                                 }*/
/*                                 if(index == 1){*/
/*                                     page1++;*/
/*                                     start1=10 * page1;*/
/*                                 }*/
/*                                 else if(index == 2){*/
/*                                     page2++;*/
/*                                     start2=10 * page2;*/
/*                                 }*/
/*                                 else if(index == 3){*/
/*                                     page3++;*/
/*                                     start3=10 * page3;*/
/*                                 }*/
/*                             }*/
/*                             else{*/
/*                                 $('.firt-swiper').eq(index-1).find('.swiper-slide').append('<p class="hasdone noneTip">暂无数据</p>');*/
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
/*         function update(index){*/
/*             if(index == 1){*/
/*                 swiper1.update();*/
/*             }*/
/*             else if(index == 2){*/
/*                 swiper2.update();*/
/*             }*/
/*             else if(index == 3){*/
/*                 swiper3.update();*/
/*             }*/
/*         }*/
/*         function update1(index){*/
/*             if(index == 1){*/
/*                 $(".watch-more .swiper-slide").css("transition-duration","0ms");*/
/*                 $(".watch-more .swiper-slide").css("-webkit-transition-duration","0ms");*/
/*                 swiper1.setWrapperTranslate(0);*/
/*             }*/
/*             else if(index == 2){*/
/*                 $(".answer-more .swiper-slide").css("transition-duration","0ms");*/
/*                 $(".answer-more .swiper-slide").css("-webkit-transition-duration","0ms");*/
/*                 swiper2.setWrapperTranslate(0);*/
/*             }*/
/*             else if(index == 3){*/
/*                 $(".lesson-more .swiper-slide").css("transition-duration","0ms");*/
/*                 $(".lesson-more .swiper-slide").css("-webkit-transition-duration","0ms");*/
/*                 swiper3.setWrapperTranslate(0);*/
/*             }*/
/*         }*/
/*         function subURL(value, param) {*/
/*             var catagoryId = '';*/
/*             var array = value.substring(value.indexOf('?') + 1, value.length).split('&');*/
/*             for(var index = 0; index < array.length; index ++) {*/
/*                 if(array[index].indexOf(param + '=') == 0) {*/
/*                     catagoryId = array[index].substring(array[index].indexOf('=') + 1, array[index].length);*/
/*                     break;*/
/*                 }*/
/*             }*/
/*             return catagoryId;*/
/*         }*/
/* */
/*         $('.search-div').on('click',function(){*/
/* */
/*             if(courseSwiper.activeIndex == 0) {*/
/*                 page1 = 0;*/
/*                 start1 = 0;*/
/*                 done1 = false;*/
/*                 sort = 'hitNum';*/
/*             } else if(courseSwiper.activeIndex == 1) {*/
/*                 page2 = 0;*/
/*                 start2 = 0;*/
/*                 done2 = false;*/
/*                 sort = '';*/
/*             } else if(courseSwiper.activeIndex == 2) {*/
/*                 page3 = 0;*/
/*                 start3 = 0;*/
/*                 done3 = false;*/
/*                 sort = 'lessonNum';*/
/*             }*/
/*             $('.firt-swiper').eq(courseSwiper.activeIndex).find('.swiper-slide').html('');*/
/*             update(courseSwiper.activeIndex+1);*/
/*             var searchValue=$('.inputList').val();*/
/*             ajaxLoad(courseSwiper.activeIndex+1,sort,searchValue);*/
/*             update1(courseSwiper.activeIndex+1);*/
/*         })*/
/*     });*/
/* */
/* */
/* </script>*/
/* {% include "CustomWebBundle::tongji.html.twig"  %}*/
/* </body>*/
/* </html>*/
/* */
