<?php

/* CustomWebBundle:Course:comment.html.twig */
class __TwigTemplate_2957e359d67d7f738b6d50bdaf1662edfe116afd5a6cc0683a9b2fc111695cd0 extends Twig_Template
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
    <title>评论</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\"/>
    <meta name=\"keywords\" content=\"评论\"/>
    <meta name=\"description\" content=\"评论\"/>
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
<body class=\"bg-df9\">
<div class=\"g-wrap g-pb0\">
    <div class=\"g-h2 f-tac\"><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\" class=\"back-a\"><i class=\"back-point\"></i></a>评论
        <a href=\"";
        // line 20
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_comment_create", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        } else {
            echo "lpmas://yunketang/login";
        }
        echo "\" class=\"eva-sumbit\">
            <span>写评论</span>
        </a>
    </div>
    <div class=\"placeHolder\"></div>

    <div class=\"commentBox\">
        <div class=\"demo\">
            <p class=\"cB-text\">评分</p>

            <div class=\"f-tac\">
                <div id=\"default-demo\"></div>
                <p class=\"cB-score\"><span>3</span>分</p>
            </div>
        </div>
        <div class=\"course-item\">

            <div class=\"commentBox\">
                <div class=\"course-item\">
                    ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reviews"]) ? $context["reviews"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            if ((($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["review"], "userId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["review"], "userId", array()), array(), "array"), false)) : (false))) {
                // line 40
                echo "                        ";
                $context["user"] = $this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["review"], "userId", array()), array(), "array");
                // line 41
                echo "                        <div class=\"comment-box\">
                            <div class=\"head-img\">
                                <img src=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "smallAvatar", array()), "avatar.png"), "html", null, true);
                echo "\">
                            </div>
                            <div class=\"info-box\">
                                <p>";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nickname", array()), "html", null, true);
                echo "<span
                                            class=\"g-fr\">";
                // line 47
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["review"], "createdTime", array()), "Y-m-d H:i:s"), "html", null, true);
                echo "</span></p>

                                <div class=\"info-content\">
                                    ";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "content", array()), "html", null, true);
                echo "            </div>
                            </div>
                        </div>
                    ";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 54
            echo "                        暂无评论
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/h5/js/src/vendor/jquery-2.1.0.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("themes/h5/js/src/vendor/jquery.raty.min.js"), "html", null, true);
        echo "\"></script>
<script>
    var score = ";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["rating"]) ? $context["rating"] : null), "html", null, true);
        echo ";
    \$.fn.raty.defaults.path = '/themes/h5/images';
    \$('#default-demo').raty({
        readOnly: true,
        score: score
    });
    \$('.cB-score span').text(score);
</script>
";
        // line 73
        $this->loadTemplate("CustomWebBundle::tongji.html.twig", "CustomWebBundle:Course:comment.html.twig", 73)->display($context);
        // line 74
        echo "</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "CustomWebBundle:Course:comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 74,  158 => 73,  147 => 65,  142 => 63,  138 => 62,  130 => 56,  123 => 54,  113 => 50,  107 => 47,  103 => 46,  97 => 43,  93 => 41,  90 => 40,  84 => 39,  58 => 20,  54 => 19,  47 => 15,  43 => 14,  39 => 13,  35 => 12,  31 => 11,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta http-equiv="content-type" content="text/html; charset=utf-8"/>*/
/*     <title>评论</title>*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge"/>*/
/*     <meta name="apple-mobile-web-app-capable" content="yes"/>*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>*/
/*     <meta name="keywords" content="评论"/>*/
/*     <meta name="description" content="评论"/>*/
/*     <link rel="icon" href="{{ asset(setting('site.favicon')) }}" type="image/x-icon"/>*/
/*     <link rel="shortcut icon" href="{{ asset(setting('site.favicon')) }}" type="image/x-icon" media="screen"/>*/
/*     <link rel="stylesheet" media="screen" href="{{ asset('themes/h5/style/css/global.css') }}"/>*/
/*     <link rel="stylesheet" media="screen" href="{{ asset('themes/h5/style/css/global-v2.css') }}"/>*/
/*     <link rel="stylesheet" media="screen" href="{{ asset('themes/h5/style/css/course.css') }}"/>*/
/* </head>*/
/* <body class="bg-df9">*/
/* <div class="g-wrap g-pb0">*/
/*     <div class="g-h2 f-tac"><a href="{{ path('homepage') }}" class="back-a"><i class="back-point"></i></a>评论*/
/*         <a href="{% if app.user %}{{ path('course_comment_create',{courseId:course.id}) }}{% else %}lpmas://yunketang/login{% endif %}" class="eva-sumbit">*/
/*             <span>写评论</span>*/
/*         </a>*/
/*     </div>*/
/*     <div class="placeHolder"></div>*/
/* */
/*     <div class="commentBox">*/
/*         <div class="demo">*/
/*             <p class="cB-text">评分</p>*/
/* */
/*             <div class="f-tac">*/
/*                 <div id="default-demo"></div>*/
/*                 <p class="cB-score"><span>3</span>分</p>*/
/*             </div>*/
/*         </div>*/
/*         <div class="course-item">*/
/* */
/*             <div class="commentBox">*/
/*                 <div class="course-item">*/
/*                     {% for review in reviews if users[review.userId]|default(false) %}*/
/*                         {% set user = users[review.userId] %}*/
/*                         <div class="comment-box">*/
/*                             <div class="head-img">*/
/*                                 <img src="{{ filepath(user.smallAvatar, 'avatar.png') }}">*/
/*                             </div>*/
/*                             <div class="info-box">*/
/*                                 <p>{{ user.nickname }}<span*/
/*                                             class="g-fr">{{ review.createdTime|date('Y-m-d H:i:s') }}</span></p>*/
/* */
/*                                 <div class="info-content">*/
/*                                     {{ review.content }}            </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     {% else %}*/
/*                         暂无评论*/
/*                     {% endfor %}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* </div>*/
/* <script src="{{ asset('themes/h5/js/src/vendor/jquery-2.1.0.min.js') }}"></script>*/
/* <script src="{{ asset('themes/h5/js/src/vendor/jquery.raty.min.js') }}"></script>*/
/* <script>*/
/*     var score = {{ rating }};*/
/*     $.fn.raty.defaults.path = '/themes/h5/images';*/
/*     $('#default-demo').raty({*/
/*         readOnly: true,*/
/*         score: score*/
/*     });*/
/*     $('.cB-score span').text(score);*/
/* </script>*/
/* {% include "CustomWebBundle::tongji.html.twig"  %}*/
/* </body>*/
/* </html>*/
/* */
