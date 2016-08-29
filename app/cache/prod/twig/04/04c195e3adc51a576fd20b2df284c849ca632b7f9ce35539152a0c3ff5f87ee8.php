<?php

/* CustomWebBundle:Classroom:offline-schedule.html.twig */
class __TwigTemplate_f72a148caa3649c3f37c92309edbc6929dd45cbde2ad27e9a707b6d692ea0ef1 extends Twig_Template
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
    <title>全部课程表</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
    <meta name=\"keywords\" content=\"全部课程表\" />
    <meta name=\"description\" content=\"全部课程表\" />
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
<body>
<div class=\"g-wrap g-pb0\">
    ";
        // line 19
        echo "    ";
        // line 20
        echo "    <div class=\"classes-list last-bor\">
        ";
        // line 21
        if ((isset($context["offlineSchedules"]) ? $context["offlineSchedules"] : null)) {
            // line 22
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["offlineSchedules"]) ? $context["offlineSchedules"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["offlineSchedule"]) {
                // line 23
                echo "        <div class=\"courseDetail\">
            <a href=\"javascript:;\" class=\"courseList1\">
                <div class=\"list-right noneImg\">
                    <p class=\"s-course-name overline2\">";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["offlineSchedule"], "title", array()), "html", null, true);
                echo "</p>
                    <p class=\"s-course-progress\">
                        <span class=\"w50 overline1\">";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["offlineSchedule"], "address", array()), "html", null, true);
                echo "</span>
                        <span class=\"w50 overline1 g-fr\">";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["offlineSchedule"], "startTime", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["offlineSchedule"], "endTime", array()), "html", null, true);
                echo "</span></p>
                </div>
            </a>
        </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offlineSchedule'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "        ";
        }
        // line 35
        echo "    </div>
</div>
";
        // line 37
        $this->loadTemplate("CustomWebBundle::tongji.html.twig", "CustomWebBundle:Classroom:offline-schedule.html.twig", 37)->display($context);
        // line 38
        echo "</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "CustomWebBundle:Classroom:offline-schedule.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 38,  99 => 37,  95 => 35,  92 => 34,  79 => 29,  75 => 28,  70 => 26,  65 => 23,  60 => 22,  58 => 21,  55 => 20,  53 => 19,  47 => 15,  43 => 14,  39 => 13,  35 => 12,  31 => 11,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta http-equiv="content-type" content="text/html; charset=utf-8"/>*/
/*     <title>全部课程表</title>*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge"/>*/
/*     <meta name="apple-mobile-web-app-capable" content="yes"/>*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />*/
/*     <meta name="keywords" content="全部课程表" />*/
/*     <meta name="description" content="全部课程表" />*/
/*     <link rel="icon" href="{{ asset(setting('site.favicon')) }}" type="image/x-icon"/>*/
/*     <link rel="shortcut icon" href="{{ asset(setting('site.favicon')) }}" type="image/x-icon" media="screen"/>*/
/*     <link rel="stylesheet" media="screen" href="{{ asset('themes/h5/style/css/global.css') }}"/>*/
/*     <link rel="stylesheet" media="screen" href="{{ asset('themes/h5/style/css/global-v2.css') }}"/>*/
/*     <link rel="stylesheet" media="screen" href="{{ asset('themes/h5/style/css/course.css') }}"/>*/
/* <body>*/
/* <div class="g-wrap g-pb0">*/
/*     {#<div class="g-h2 f-tac">班级课程</div>#}*/
/*     {#<div class="placeHolder"></div>#}*/
/*     <div class="classes-list last-bor">*/
/*         {% if offlineSchedules %}*/
/*             {% for offlineSchedule in offlineSchedules %}*/
/*         <div class="courseDetail">*/
/*             <a href="javascript:;" class="courseList1">*/
/*                 <div class="list-right noneImg">*/
/*                     <p class="s-course-name overline2">{{ offlineSchedule.title }}</p>*/
/*                     <p class="s-course-progress">*/
/*                         <span class="w50 overline1">{{ offlineSchedule.address }}</span>*/
/*                         <span class="w50 overline1 g-fr">{{ offlineSchedule.startTime }}-{{ offlineSchedule.endTime }}</span></p>*/
/*                 </div>*/
/*             </a>*/
/*         </div>*/
/*         {% endfor %}*/
/*         {% endif %}*/
/*     </div>*/
/* </div>*/
/* {% include "CustomWebBundle::tongji.html.twig"  %}*/
/* </body>*/
/* </html>*/
/* */
