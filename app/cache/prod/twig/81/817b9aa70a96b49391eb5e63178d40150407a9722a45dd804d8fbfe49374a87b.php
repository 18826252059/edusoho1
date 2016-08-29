<?php

/* CustomWebBundle:Course:member-list.html.twig */
class __TwigTemplate_5256acb04b933a5b0b6837c7a26293e20cdf5b42490bd1e706cd69b051226578 extends Twig_Template
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
    <title>全部学员</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
    <meta name=\"apple-mobile-web-app-capable\" content=\"yes\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\"/>
    <meta name=\"keywords\" content=\"全部学员\"/>
    <meta name=\"description\" content=\"全部学员\"/>
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
<body class=\"bg-df9\">
<div class=\"g-wrap g-pb0\">
    ";
        // line 21
        echo "    ";
        // line 22
        echo "    <div class=\"member-list\">

        ";
        // line 24
        if ((isset($context["students"]) ? $context["students"] : null)) {
            // line 25
            echo "            <div class=\"member-list\">
                ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["members"]) ? $context["members"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
                // line 27
                echo "                    ";
                $context["student"] = $this->getAttribute((isset($context["students"]) ? $context["students"] : null), $this->getAttribute($context["member"], "userId", array()), array(), "array");
                // line 28
                echo "                    <div class=\"member-info\">
                        <div class=\"member-box\">
                            <img src=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["student"]) ? $context["student"] : null), "mediumAvatar", array()), "avatar.png"), "html", null, true);
                echo "\" width=\"45\" height=\"45\">

                            <p class=\"overline1\">";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["student"]) ? $context["student"] : null), "nickname", array()), "html", null, true);
                echo "</p>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "            </div>
        ";
        }
        // line 38
        echo "    </div>
</div>
";
        // line 40
        $this->loadTemplate("CustomWebBundle::tongji.html.twig", "CustomWebBundle:Course:member-list.html.twig", 40)->display($context);
        // line 41
        echo "</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "CustomWebBundle:Course:member-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 41,  103 => 40,  99 => 38,  95 => 36,  85 => 32,  80 => 30,  76 => 28,  73 => 27,  69 => 26,  66 => 25,  64 => 24,  60 => 22,  58 => 21,  51 => 16,  47 => 15,  43 => 14,  39 => 13,  35 => 12,  31 => 11,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/* <head>*/
/*     <meta http-equiv="content-type" content="text/html; charset=utf-8"/>*/
/*     <title>全部学员</title>*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge"/>*/
/*     <meta name="apple-mobile-web-app-capable" content="yes"/>*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>*/
/*     <meta name="keywords" content="全部学员"/>*/
/*     <meta name="description" content="全部学员"/>*/
/*     <link rel="icon" href="{{ asset(setting('site.favicon')) }}" type="image/x-icon"/>*/
/*     <link rel="shortcut icon" href="{{ asset(setting('site.favicon')) }}" type="image/x-icon" media="screen"/>*/
/*     <link rel="stylesheet" media="screen" href="{{ asset('themes/h5/style/css/global.css') }}"/>*/
/*     <link rel="stylesheet" media="screen" href="{{ asset('themes/h5/style/css/global-v2.css') }}"/>*/
/*     <link rel="stylesheet" media="screen" href="{{ asset('themes/h5/style/css/swiper/swiper.min.css') }}"/>*/
/*     <link rel="stylesheet" media="screen" href="{{ asset('themes/h5/style/css/course.css') }}"/>*/
/* </head>*/
/* <body class="bg-df9">*/
/* <div class="g-wrap g-pb0">*/
/*     {#<div class="g-h2 f-tac"><a href="javascript:;" class="back-a"><i class="back-point"></i></a>班级学员</div>#}*/
/*     {#<div class="placeHolder"></div>#}*/
/*     <div class="member-list">*/
/* */
/*         {% if students %}*/
/*             <div class="member-list">*/
/*                 {% for member in members %}*/
/*                     {% set student = students[member.userId] %}*/
/*                     <div class="member-info">*/
/*                         <div class="member-box">*/
/*                             <img src="{{ filepath(student.mediumAvatar, 'avatar.png') }}" width="45" height="45">*/
/* */
/*                             <p class="overline1">{{ student.nickname }}</p>*/
/*                         </div>*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             </div>*/
/*         {% endif %}*/
/*     </div>*/
/* </div>*/
/* {% include "CustomWebBundle::tongji.html.twig"  %}*/
/* </body>*/
/* </html>*/
/* */
