<?php

/* TopxiaWebBundle:LiveCourse:classroom.html.twig */
class __TwigTemplate_7519a4c7d8a83e5bbf2c4af4a4339dd577c47f1385796d22709f754bf477c9bf extends Twig_Template
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
<html>
<head>
\t<title>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "title", array()), "html", null, true);
        echo "</title>
\t";
        // line 5
        if ($this->env->getExtension('topxia_web_twig')->getSetting("site.favicon")) {
            // line 6
            echo "\t<link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('topxia_web_twig')->getSetting("site.favicon")), "html", null, true);
            echo "\" rel=\"shortcut icon\" />
\t";
        }
        // line 8
        echo "
\t<link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/v2/bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
</head>
<body style=\"position: static;\">

\t";
        // line 15
        $context["script_controller"] = "live-course/classroom";
        // line 16
        echo "
\t<div id=\"classroom-url\" data-url=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "\" class=\"well well-lg text-center text-success\">正在打开教室，请稍后...</div>

\t";
        // line 19
        $this->loadTemplate("TopxiaWebBundle::script_boot.html.twig", "TopxiaWebBundle:LiveCourse:classroom.html.twig", 19)->display(array_merge($context, array("script_main" => $this->env->getExtension('assets')->getAssetUrl("bundles/topxiaweb/js/app.js"))));
        // line 20
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:LiveCourse:classroom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 20,  58 => 19,  53 => 17,  50 => 16,  48 => 15,  39 => 9,  36 => 8,  30 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/* 	<title>{{ lesson.title }}</title>*/
/* 	{% if setting('site.favicon') %}*/
/* 	<link href="{{ asset(setting('site.favicon')) }}" rel="shortcut icon" />*/
/* 	{% endif %}*/
/* */
/* 	<link href="{{ asset('assets/v2/bootstrap/css/bootstrap.css') }}" rel="stylesheet" />*/
/* */
/* 	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">*/
/* </head>*/
/* <body style="position: static;">*/
/* */
/* 	{% set script_controller = 'live-course/classroom' %}*/
/* */
/* 	<div id="classroom-url" data-url="{{ url }}" class="well well-lg text-center text-success">正在打开教室，请稍后...</div>*/
/* */
/* 	{% include 'TopxiaWebBundle::script_boot.html.twig' with {script_main: asset('bundles/topxiaweb/js/app.js')} %}*/
/* */
/* </body>*/
/* </html>*/
