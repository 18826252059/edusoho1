<?php

/* TopxiaWebBundle:Liveroom:entry.html.twig */
class __TwigTemplate_b8c4a12c819218732f043253985ec08f4825d08ab9ca8830816710ea8f8edb43 extends Twig_Template
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
  <title>直播教室</title>
  ";
        // line 5
        if ($this->env->getExtension('topxia_web_twig')->getSetting("site.favicon")) {
            // line 6
            echo "  <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('topxia_web_twig')->getSetting("site.favicon")), "html", null, true);
            echo "\" rel=\"shortcut icon\" />
  ";
        }
        // line 8
        echo "
  <meta name=\"renderer\" content=\"webkit\">
  <meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no\">

  <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/v2/bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
</head>
<body>

  ";
        // line 18
        $context["script_controller"] = "liveroom/entry";
        // line 19
        echo "  <div id=\"entry\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("liveroom_ticket", array("id" => (isset($context["roomId"]) ? $context["roomId"] : null), "ticket" => $this->getAttribute((isset($context["ticket"]) ? $context["ticket"] : null), "no", array()))), "html", null, true);
        echo "\" class=\"well well-lg text-center text-success\">正在打开教室，请稍后...</div>
  ";
        // line 20
        $this->loadTemplate("TopxiaWebBundle::script_boot.html.twig", "TopxiaWebBundle:Liveroom:entry.html.twig", 20)->display(array_merge($context, array("script_main" => $this->env->getExtension('assets')->getAssetUrl("bundles/topxiaweb/js/app.js"))));
        // line 21
        echo "
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Liveroom:entry.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 21,  55 => 20,  50 => 19,  48 => 18,  39 => 12,  33 => 8,  27 => 6,  25 => 5,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/* <head>*/
/*   <title>直播教室</title>*/
/*   {% if setting('site.favicon') %}*/
/*   <link href="{{ asset(setting('site.favicon')) }}" rel="shortcut icon" />*/
/*   {% endif %}*/
/* */
/*   <meta name="renderer" content="webkit">*/
/*   <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">*/
/* */
/*   <link href="{{ asset('assets/v2/bootstrap/css/bootstrap.css') }}" rel="stylesheet" />*/
/* */
/*   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">*/
/* </head>*/
/* <body>*/
/* */
/*   {% set script_controller = 'liveroom/entry' %}*/
/*   <div id="entry" data-url="{{ path('liveroom_ticket', {id:roomId, ticket:ticket.no}) }}" class="well well-lg text-center text-success">正在打开教室，请稍后...</div>*/
/*   {% include 'TopxiaWebBundle::script_boot.html.twig' with {script_main: asset('bundles/topxiaweb/js/app.js')} %}*/
/* */
/* </body>*/
/* </html>*/
