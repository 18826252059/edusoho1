<?php

/* CustomWebBundle:Classroom:classroom-course.html.twig */
class __TwigTemplate_8196ac0fe84efed50b11278052dda780b7a09923819cbfc0f2c44e591588e3a9 extends Twig_Template
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
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 21
            echo "        <div class=\"courseDetail\">
            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_detail", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
            echo "\" class=\"courseList1\">
                <img src=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($context["course"], "middlePicture", array()), "classroom.png"), "html", null, true);
            echo "\" width=\"100\" height=\"80\">
                <div class=\"list-right\">
                    <p class=\"s-course-name overline2\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
            echo "</p>
                    <p class=\"s-course-progress\">
                        <span>";
            // line 27
            echo twig_escape_filter($this->env, (($this->getAttribute($context["course"], "lessonNum", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["course"], "lessonNum", array()), "0")) : ("0")), "html", null, true);
            echo "个课程</span>
                        <span class=\"g-fr\">共";
            // line 28
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
        // line 33
        echo "    </div>
</div>
";
        // line 35
        $this->loadTemplate("CustomWebBundle::tongji.html.twig", "CustomWebBundle:Classroom:classroom-course.html.twig", 35)->display($context);
        // line 36
        echo "</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "CustomWebBundle:Classroom:classroom-course.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 36,  96 => 35,  92 => 33,  81 => 28,  77 => 27,  72 => 25,  67 => 23,  63 => 22,  60 => 21,  55 => 20,  53 => 19,  47 => 15,  43 => 14,  39 => 13,  35 => 12,  31 => 11,  19 => 1,);
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
/*     {% for course in courses %}*/
/*         <div class="courseDetail">*/
/*             <a href="{{ path('course_detail',{id:course.id}) }}" class="courseList1">*/
/*                 <img src="{{ filepath(course.middlePicture, 'classroom.png') }}" width="100" height="80">*/
/*                 <div class="list-right">*/
/*                     <p class="s-course-name overline2">{{ course.title }}</p>*/
/*                     <p class="s-course-progress">*/
/*                         <span>{{ course.lessonNum|default('0')}}个课程</span>*/
/*                         <span class="g-fr">共{{ course.studentNum  }}人</span></p>*/
/*                 </div>*/
/*             </a>*/
/*         </div>*/
/*     {% endfor %}*/
/*     </div>*/
/* </div>*/
/* {% include "CustomWebBundle::tongji.html.twig"  %}*/
/* </body>*/
/* </html>*/
/* */
