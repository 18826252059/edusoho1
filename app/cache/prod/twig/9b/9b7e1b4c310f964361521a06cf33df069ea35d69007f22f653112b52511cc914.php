<?php

/* CustomWebBundle:Course:all-product-base.html.twig */
class __TwigTemplate_eb571becedea470abff6a49887181e53999b4c1a645f5467c31cbd9e1805f87b extends Twig_Template
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
    <title>培训基地</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
    <meta name=\"keywords\" content=\"培训基地\" />
    <meta name=\"description\" content=\"培训基地\" />
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
        if ((isset($context["productBases"]) ? $context["productBases"] : null)) {
            // line 22
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["productBases"]) ? $context["productBases"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["productBase"]) {
                // line 23
                echo "                <div class=\"courseDetail\">
                    <a href=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_base_detail", array("id" => $this->getAttribute($context["productBase"], "id", array()))), "html", null, true);
                echo "\" class=\"courseList1\">
                        ";
                // line 25
                if ((($this->getAttribute($this->getAttribute($context["productBase"], "image", array(), "any", false, true), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["productBase"], "image", array(), "any", false, true), "id", array()), 0)) : (0))) {
                    // line 26
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_attachment_download", array("fileId" => (($this->getAttribute($this->getAttribute($context["productBase"], "image", array(), "any", false, true), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["productBase"], "image", array(), "any", false, true), "id", array()), 0)) : (0)))), "html", null, true);
                    echo "\" width=\"100\" height=\"80\">
                        ";
                } else {
                    // line 28
                    echo "                        <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/default/classroom.png"), "html", null, true);
                    echo "\" width=\"100\" height=\"80\">
                        ";
                }
                // line 30
                echo "                        <div class=\"list-right\">
                            <p class=\"s-course-name overline2\">";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["productBase"], "title", array()), "html", null, true);
                echo "</p>
                            <p class=\"s-course-progress\">
                                <span>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["productBase"], "courseCount", array()), "html", null, true);
                echo "课时</span>
                            </p>
                        </div>
                    </a>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['productBase'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "        ";
        }
        // line 40
        echo "    </div>
</div>
";
        // line 42
        $this->loadTemplate("CustomWebBundle::tongji.html.twig", "CustomWebBundle:Course:all-product-base.html.twig", 42)->display($context);
        // line 43
        echo "</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "CustomWebBundle:Course:all-product-base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 43,  113 => 42,  109 => 40,  106 => 39,  94 => 33,  89 => 31,  86 => 30,  80 => 28,  74 => 26,  72 => 25,  68 => 24,  65 => 23,  60 => 22,  58 => 21,  55 => 20,  53 => 19,  47 => 15,  43 => 14,  39 => 13,  35 => 12,  31 => 11,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta http-equiv="content-type" content="text/html; charset=utf-8"/>*/
/*     <title>培训基地</title>*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge"/>*/
/*     <meta name="apple-mobile-web-app-capable" content="yes"/>*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />*/
/*     <meta name="keywords" content="培训基地" />*/
/*     <meta name="description" content="培训基地" />*/
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
/*         {% if productBases %}*/
/*             {% for productBase in productBases %}*/
/*                 <div class="courseDetail">*/
/*                     <a href="{{ path('product_base_detail',{id:productBase.id}) }}" class="courseList1">*/
/*                         {% if productBase.image.id|default(0) %}*/
/*                         <img src="{{ path('classroom_attachment_download',{fileId:productBase.image.id|default(0)}) }}" width="100" height="80">*/
/*                         {% else %}*/
/*                         <img src="{{ asset('assets/img/default/classroom.png') }}" width="100" height="80">*/
/*                         {% endif %}*/
/*                         <div class="list-right">*/
/*                             <p class="s-course-name overline2">{{ productBase.title }}</p>*/
/*                             <p class="s-course-progress">*/
/*                                 <span>{{ productBase.courseCount }}课时</span>*/
/*                             </p>*/
/*                         </div>*/
/*                     </a>*/
/*                 </div>*/
/*             {% endfor %}*/
/*         {% endif %}*/
/*     </div>*/
/* </div>*/
/* {% include "CustomWebBundle::tongji.html.twig"  %}*/
/* </body>*/
/* </html>*/
/* */
