<?php

/* CustomWebBundle:User:user.html.twig */
class __TwigTemplate_72e1002c8620dfaa38d4aaeca639b9eea96da921a43cefab9f51a0faec274295 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'classroom_content' => array($this, 'block_classroom_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\"/>
    <title>专家信息</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
    <meta name=\"keywords\" content=\"专家信息\" />
    <meta name=\"description\" content=\"专家信息\" />
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
        echo "    <div class=\"expertDes\">
        <div class=\"expertDes-header\">
            <p class=\"expert-course\">课程 <span>";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["coursesCount"]) ? $context["coursesCount"] : null), "html", null, true);
        echo " </span></p>
            <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "mediumAvatar", array()), "avatar.png"), "html", null, true);
        echo "\" width=\"80\" height=\"80\" style=\"border-radius: 100%;-webkit-border-radius: 100%\">
            <p class=\"expert-ask\">问答 <span>554</span></p>
        </div>
        <p class=\"expert-name\">";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nickname", array()), "html", null, true);
        echo "</p>
        <p class=\"expert-des\">";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "title", array()), "html", null, true);
        echo "</p>
    </div>
    <div>
        <div class=\"left-h2\">专家简介</div>
        <section class=\"g-mb10 bg-df9\">
            <article class=\"g-font-color course-detailContent\">
                ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "about", array()), "html", null, true);
        echo "
            </article>
        </section>
        <div class=\"left-h2 g-mt10 g-mb10 unshow-h2\">专家回答
            <span class=\"course-rightPoint g-fr c-666\">435人</span>
        </div>
        ";
        // line 40
        if (((array_key_exists("courses", $context)) ? (_twig_default_filter((isset($context["courses"]) ? $context["courses"] : null), "")) : (""))) {
            // line 41
            echo "        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("course_list");
            echo "\"><div class=\"left-h2\">专家课程<span class=\"course-rightPoint g-fr\">更多教程</span></div></a>

        <section class=\"bg-df9 g-mb10 last-bor\">
            ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                // line 45
                echo "                <div class=\"courseDetail\">
                    <a href=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_detail", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
                echo "\" class=\"courseList1\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "id", array()), "html", null, true);
                echo "\">
                        <img src=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($context["course"], "middlePicture", array()), "course.png"), "html", null, true);
                echo "\" width=\"100\" height=\"80\">
                        <div class=\"list-right\">
                            <p class=\"s-course-name overline2\">";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
                echo "</p>
                            <p class=\"s-course-progress\">
                                <span>更新  ";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "lessonNum", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "lessonNum", array()), "html", null, true);
                echo "</span>
                                <span class=\"g-fr\">共";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "studentNum", array()), "html", null, true);
                echo "人</span></p>
                        </div>
                    </a>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "        </section>
        ";
        }
        // line 59
        echo "        ";
        $this->displayBlock('classroom_content', $context, $blocks);
        // line 62
        echo "
    </div>
</div>
";
        // line 65
        $this->loadTemplate("CustomWebBundle::tongji.html.twig", "CustomWebBundle:User:user.html.twig", 65)->display($context);
        // line 66
        echo "</body>
</html>
";
    }

    // line 59
    public function block_classroom_content($context, array $blocks = array())
    {
        // line 60
        echo "            ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("CustomWebBundle:User:teaching", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))));
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "CustomWebBundle:User:user.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 60,  162 => 59,  156 => 66,  154 => 65,  149 => 62,  146 => 59,  142 => 57,  131 => 52,  125 => 51,  120 => 49,  115 => 47,  109 => 46,  106 => 45,  102 => 44,  95 => 41,  93 => 40,  84 => 34,  75 => 28,  71 => 27,  65 => 24,  61 => 23,  57 => 21,  55 => 20,  48 => 15,  44 => 14,  40 => 13,  36 => 12,  32 => 11,  20 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta http-equiv="content-type" content="text/html; charset=utf-8"/>*/
/*     <title>专家信息</title>*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge"/>*/
/*     <meta name="apple-mobile-web-app-capable" content="yes"/>*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />*/
/*     <meta name="keywords" content="专家信息" />*/
/*     <meta name="description" content="专家信息" />*/
/*     <link rel="icon" href="{{ asset(setting('site.favicon')) }}" type="image/x-icon"/>*/
/*     <link rel="shortcut icon" href="{{ asset(setting('site.favicon')) }}" type="image/x-icon" media="screen"/>*/
/*     <link rel="stylesheet" media="screen" href="{{ asset('themes/h5/style/css/global.css') }}"/>*/
/*     <link rel="stylesheet" media="screen" href="{{ asset('themes/h5/style/css/global-v2.css') }}"/>*/
/*     <link rel="stylesheet" media="screen" href="{{ asset('themes/h5/style/css/course.css') }}"/>*/
/* </head>*/
/* <body>*/
/* <div class="g-wrap g-pb0">*/
/*     {#<div class="g-h2 f-tac"><a href="javascript:;" class="back-a"><i class="back-point"></i></a>专家信息</div>#}*/
/*     {#<div class="placeHolder"></div>#}*/
/*     <div class="expertDes">*/
/*         <div class="expertDes-header">*/
/*             <p class="expert-course">课程 <span>{{ coursesCount }} </span></p>*/
/*             <img src="{{ filepath(user.mediumAvatar, 'avatar.png')}}" width="80" height="80" style="border-radius: 100%;-webkit-border-radius: 100%">*/
/*             <p class="expert-ask">问答 <span>554</span></p>*/
/*         </div>*/
/*         <p class="expert-name">{{ user.nickname }}</p>*/
/*         <p class="expert-des">{{ user.title }}</p>*/
/*     </div>*/
/*     <div>*/
/*         <div class="left-h2">专家简介</div>*/
/*         <section class="g-mb10 bg-df9">*/
/*             <article class="g-font-color course-detailContent">*/
/*                 {{ user.about }}*/
/*             </article>*/
/*         </section>*/
/*         <div class="left-h2 g-mt10 g-mb10 unshow-h2">专家回答*/
/*             <span class="course-rightPoint g-fr c-666">435人</span>*/
/*         </div>*/
/*         {% if courses|default('') %}*/
/*         <a href="{{ path('course_list') }}"><div class="left-h2">专家课程<span class="course-rightPoint g-fr">更多教程</span></div></a>*/
/* */
/*         <section class="bg-df9 g-mb10 last-bor">*/
/*             {% for course in courses %}*/
/*                 <div class="courseDetail">*/
/*                     <a href="{{ path('course_detail',{id:course.id}) }}" class="courseList1" data-id="{{ course.id }}">*/
/*                         <img src="{{ filepath(course.middlePicture, 'course.png') }}" width="100" height="80">*/
/*                         <div class="list-right">*/
/*                             <p class="s-course-name overline2">{{ course.title }}</p>*/
/*                             <p class="s-course-progress">*/
/*                                 <span>更新  {{ course.lessonNum }}/{{ course.lessonNum }}</span>*/
/*                                 <span class="g-fr">共{{ course.studentNum }}人</span></p>*/
/*                         </div>*/
/*                     </a>*/
/*                 </div>*/
/*             {% endfor %}*/
/*         </section>*/
/*         {% endif %}*/
/*         {% block classroom_content %}*/
/*             {{ render(controller('CustomWebBundle:User:teaching', {id:user.id})) }}*/
/*         {% endblock %}*/
/* */
/*     </div>*/
/* </div>*/
/* {% include "CustomWebBundle::tongji.html.twig"  %}*/
/* </body>*/
/* </html>*/
/* */
