<?php

/* CustomWebBundle:Course:comment-create.html.twig */
class __TwigTemplate_0a3de45f944586d3d95a5bf0f06481fe01c19cca4c4ea1c2b4dbbfd34a0c6ec9 extends Twig_Template
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
    <title>课程评价</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\"/>
    <meta name=\"keywords\" content=\"课程评价\"/>
    <meta name=\"description\" content=\"课程评价\"/>
    <link type=\"image/x-icon\" rel=\"shortcut icon\" href=\"/favicon.ico\"/>
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
    <div class=\"g-h2 f-tac\">
        <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\" class=\"back-a\"><i class=\"back-point\"></i></a>课程评价
        <a href=\"javascript:;\" class=\"eva-sumbit\" onclick=\"sumbitEva()\">
            <span>提交</span>
        </a>
    </div>
    <div class=\"placeHolder\"></div>
    <section class=\"eva-box g-mb10\">
        <span class=\"eva-text\">课程评分</span>

        <div class=\"demo\">
            <div id=\"default-demo\"></div>
        </div>
        <p class=\"evaluate-p\"><span>3</span>分</p>
    </section>
    <section class=\"eva-comment\">
        <textarea rows=\"8\" placeholder=\"感觉课程怎样，说两句吧\"></textarea>
    </section>
</div>
<div class=\"canvas-tip\">
    <div class=\"tip-box\">
        <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/h5/images/b_success.png"), "html", null, true);
        echo "\">
        <p>恭喜评论成功</p>
    </div>
</div>
<script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/h5/js/src/vendor/jquery-2.1.0.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/h5/js/src/vendor/jquery.raty.min.js"), "html", null, true);
        echo "\"></script>
<script>
    var commentUrl = \"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mapi_course_review_create_html5", array("courseId" => (isset($context["courseId"]) ? $context["courseId"] : null))), "html", null, true);
        echo "\";
    var commentListUrl = \"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_comment", array("courseId" => (isset($context["courseId"]) ? $context["courseId"] : null))), "html", null, true);
        echo "\";
    \$.fn.raty.defaults.path = '/themes/h5/images';
    \$('#default-demo').raty({
        score: 3,
        mouseover: function (score) {
            \$('.evaluate-p').find('span').text(score);
        }
    });
    function sumbitEva() {
        var textVale = \$('.eva-comment textarea').val();
        var newValue = textVale.replace(/(^\\s*)|(\\s*\$)/g, \"\");
        var score = \$('.evaluate-p').find('span').text();
        if (newValue.length < 5) {
            alert('请至少输入五个字的评价');
        }
        else {
            \$.ajax({
                url: commentUrl,
                type: 'POST',
                dataType: 'jsonp',
                data: {
                    'rating': score,
                    'content': newValue
                },
                success: function (json) {
                    if (\"undefined\"!=typeof(json.error)&&json.error.name == 'not_login') {
                        //未登录跳转到登录
                        window.location.href = \"lpmas://yunketang/login\";
                    } else if (json.id > 0) {
                        \$('.canvas-tip').show();
                        setTimeout(\"window.location.href = commentListUrl\",300);
                    } else {
                        alert(\"评价失败\");
                    }
                },
                error: function (json, status, msg) {
                    alert(msg);
                    //window.location.href = '';//评论失败返回页
                }
            });
        }
    }
</script>
";
        // line 92
        $this->loadTemplate("CustomWebBundle::tongji.html.twig", "CustomWebBundle:Course:comment-create.html.twig", 92)->display($context);
        // line 93
        echo "</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "CustomWebBundle:Course:comment-create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 93,  145 => 92,  99 => 49,  95 => 48,  90 => 46,  86 => 45,  79 => 41,  56 => 21,  48 => 16,  44 => 15,  40 => 14,  36 => 13,  32 => 12,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta http-equiv="content-type" content="text/html; charset=utf-8"/>*/
/*     <title>课程评价</title>*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge"/>*/
/*     <meta name="apple-mobile-web-app-capable" content="yes"/>*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>*/
/*     <meta name="keywords" content="课程评价"/>*/
/*     <meta name="description" content="课程评价"/>*/
/*     <link type="image/x-icon" rel="shortcut icon" href="/favicon.ico"/>*/
/*     <link rel="icon" href="{{ asset(setting('site.favicon')) }}" type="image/x-icon"/>*/
/*     <link rel="shortcut icon" href="{{ asset(setting('site.favicon')) }}" type="image/x-icon" media="screen"/>*/
/*     <link rel="stylesheet" media="screen" href="{{ asset('themes/h5/style/css/global.css') }}"/>*/
/*     <link rel="stylesheet" media="screen" href="{{ asset('themes/h5/style/css/global-v2.css') }}"/>*/
/*     <link rel="stylesheet" media="screen" href="{{ asset('themes/h5/style/css/course.css') }}"/>*/
/* </head>*/
/* <body>*/
/* <div class="g-wrap g-pb0">*/
/*     <div class="g-h2 f-tac">*/
/*         <a href="{{ path('homepage') }}" class="back-a"><i class="back-point"></i></a>课程评价*/
/*         <a href="javascript:;" class="eva-sumbit" onclick="sumbitEva()">*/
/*             <span>提交</span>*/
/*         </a>*/
/*     </div>*/
/*     <div class="placeHolder"></div>*/
/*     <section class="eva-box g-mb10">*/
/*         <span class="eva-text">课程评分</span>*/
/* */
/*         <div class="demo">*/
/*             <div id="default-demo"></div>*/
/*         </div>*/
/*         <p class="evaluate-p"><span>3</span>分</p>*/
/*     </section>*/
/*     <section class="eva-comment">*/
/*         <textarea rows="8" placeholder="感觉课程怎样，说两句吧"></textarea>*/
/*     </section>*/
/* </div>*/
/* <div class="canvas-tip">*/
/*     <div class="tip-box">*/
/*         <img src="{{ asset('themes/h5/images/b_success.png') }}">*/
/*         <p>恭喜评论成功</p>*/
/*     </div>*/
/* </div>*/
/* <script src="{{ asset('themes/h5/js/src/vendor/jquery-2.1.0.min.js') }}"></script>*/
/* <script src="{{ asset('themes/h5/js/src/vendor/jquery.raty.min.js') }}"></script>*/
/* <script>*/
/*     var commentUrl = "{{ path('mapi_course_review_create_html5',{courseId:courseId}) }}";*/
/*     var commentListUrl = "{{ path('course_comment',{courseId:courseId}) }}";*/
/*     $.fn.raty.defaults.path = '/themes/h5/images';*/
/*     $('#default-demo').raty({*/
/*         score: 3,*/
/*         mouseover: function (score) {*/
/*             $('.evaluate-p').find('span').text(score);*/
/*         }*/
/*     });*/
/*     function sumbitEva() {*/
/*         var textVale = $('.eva-comment textarea').val();*/
/*         var newValue = textVale.replace(/(^\s*)|(\s*$)/g, "");*/
/*         var score = $('.evaluate-p').find('span').text();*/
/*         if (newValue.length < 5) {*/
/*             alert('请至少输入五个字的评价');*/
/*         }*/
/*         else {*/
/*             $.ajax({*/
/*                 url: commentUrl,*/
/*                 type: 'POST',*/
/*                 dataType: 'jsonp',*/
/*                 data: {*/
/*                     'rating': score,*/
/*                     'content': newValue*/
/*                 },*/
/*                 success: function (json) {*/
/*                     if ("undefined"!=typeof(json.error)&&json.error.name == 'not_login') {*/
/*                         //未登录跳转到登录*/
/*                         window.location.href = "lpmas://yunketang/login";*/
/*                     } else if (json.id > 0) {*/
/*                         $('.canvas-tip').show();*/
/*                         setTimeout("window.location.href = commentListUrl",300);*/
/*                     } else {*/
/*                         alert("评价失败");*/
/*                     }*/
/*                 },*/
/*                 error: function (json, status, msg) {*/
/*                     alert(msg);*/
/*                     //window.location.href = '';//评论失败返回页*/
/*                 }*/
/*             });*/
/*         }*/
/*     }*/
/* </script>*/
/* {% include "CustomWebBundle::tongji.html.twig"  %}*/
/* </body>*/
/* </html>*/
/* */
