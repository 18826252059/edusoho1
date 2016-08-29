<?php

/* CustomWebBundle:Announcement:announcement-list.html.twig */
class __TwigTemplate_21de89f84d478ddfe6f883b66166ccf8cb5e0b5ea61aa097cdc2d19116d5882d extends Twig_Template
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
    <title>班级通知</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
    <meta name=\"keywords\" content=\"班级通知\" />
    <meta name=\"description\" content=\"班级通知\" />
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
<body>
<div class=\"g-wrap g-pb0\">
    ";
        // line 19
        echo "    ";
        // line 20
        echo "    ";
        if ( !array_key_exists("announcements", $context)) {
            // line 21
            echo "        <div class=\"notice-div\">
                <div class=\"notice-box bg-df9\">
                    <div class=\"left-h2\"></div>
                    <section class=\"g-mb10 bg-df9\">
                        <article class=\"g-font-color course-detailContent\">
                            无公告
                            <p class=\"s-course-progress\"><span></span></p>
                        </article>
                    </section>
                </div>
        </div>
    ";
        } else {
            // line 33
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["announcements"]) ? $context["announcements"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["annomnt"]) {
                // line 34
                echo "    <div class=\"notice-div\">
        <a href=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("announcement_detail", array("classroomId" => $this->getAttribute($context["annomnt"], "classroomId", array()), "announcementId" => $this->getAttribute($context["annomnt"], "id", array()))), "html", null, true);
                echo "\">
        <div class=\"notice-box bg-df9\">
            <div class=\"left-h2\">";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["annomnt"], "title", array()));
                echo "</div>
            <section class=\"g-mb10 bg-df9\">
                <article class=\"g-font-color course-detailContent\">
                    <p class=\"overline2\">
                    ";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["annomnt"], "content", array()));
                echo "
                    </p>
                    <p class=\"s-course-progress\"><span>";
                // line 43
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["annomnt"], "createTime", array()), "Y-m-d"), "html", null, true);
                echo "</span></p>
                </article>
            </section>
        </div>
        </a>
    </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annomnt'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "    ";
        }
        // line 51
        echo "</div>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "CustomWebBundle:Announcement:announcement-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 51,  107 => 50,  94 => 43,  89 => 41,  82 => 37,  77 => 35,  74 => 34,  69 => 33,  55 => 21,  52 => 20,  50 => 19,  43 => 14,  39 => 13,  35 => 12,  31 => 11,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta http-equiv="content-type" content="text/html; charset=utf-8"/>*/
/*     <title>班级通知</title>*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge"/>*/
/*     <meta name="apple-mobile-web-app-capable" content="yes"/>*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />*/
/*     <meta name="keywords" content="班级通知" />*/
/*     <meta name="description" content="班级通知" />*/
/*     <link rel="icon" href="{{ asset(setting('site.favicon')) }}" type="image/x-icon"/>*/
/*     <link type="text/css" rel="stylesheet" href="{{ asset('themes/h5/style/css/global.css') }}">*/
/*     <link type="text/css" rel="stylesheet" href="{{ asset('themes/h5/style/css/global-v2.css') }}">*/
/*     <link rel="stylesheet" type="text/css" href="{{ asset('themes/h5/style/css/course.css') }}">*/
/* </head>*/
/* <body>*/
/* <div class="g-wrap g-pb0">*/
/*     {#<div class="g-h2 f-tac"><a href="javascript:history.back(-1);" class="back-a"><i class="back-point"></i></a>班级通知</div>#}*/
/*     {#<div class="placeHolder"></div>#}*/
/*     {% if announcements is not defined %}*/
/*         <div class="notice-div">*/
/*                 <div class="notice-box bg-df9">*/
/*                     <div class="left-h2"></div>*/
/*                     <section class="g-mb10 bg-df9">*/
/*                         <article class="g-font-color course-detailContent">*/
/*                             无公告*/
/*                             <p class="s-course-progress"><span></span></p>*/
/*                         </article>*/
/*                     </section>*/
/*                 </div>*/
/*         </div>*/
/*     {% else %}*/
/*     {% for annomnt in announcements %}*/
/*     <div class="notice-div">*/
/*         <a href="{{ path('announcement_detail',{'classroomId':annomnt.classroomId ,'announcementId':annomnt.id })}}">*/
/*         <div class="notice-box bg-df9">*/
/*             <div class="left-h2">{{ annomnt.title | escape }}</div>*/
/*             <section class="g-mb10 bg-df9">*/
/*                 <article class="g-font-color course-detailContent">*/
/*                     <p class="overline2">*/
/*                     {{ annomnt.content |escape }}*/
/*                     </p>*/
/*                     <p class="s-course-progress"><span>{{ annomnt.createTime |date('Y-m-d') }}</span></p>*/
/*                 </article>*/
/*             </section>*/
/*         </div>*/
/*         </a>*/
/*     </div>*/
/*     {% endfor %}*/
/*     {% endif %}*/
/* </div>*/
/* */
/* </body>*/
/* </html>*/
