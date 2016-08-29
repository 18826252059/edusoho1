<?php

/* TopxiaWebBundle:Marker:player.html.twig */
class __TwigTemplate_bc8649de5c1f976e237ae8a3a4959b86ee0c0ab6eb38ae5fa4a00d88405c6908 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 4
        echo "
<div class=\"dashboard-content\">
  <div class=\"dashboard-body\">
    <div class=\"lesson-content\" id=\"lesson-video-content\" data-role=\"lesson-content\" ";
        // line 7
        if ((($this->env->getExtension('topxia_web_twig')->getSetting("storage.video_watermark") > 0) && $this->env->getExtension('topxia_web_twig')->getSetting("storage.video_watermark_image"))) {
            // line 8
            echo "        data-watermark=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->env->getExtension('topxia_web_twig')->getSetting("storage.video_watermark_image"), null, true), "html", null, true);
            echo "\"
      ";
        }
        // line 10
        echo "      ";
        if (($this->env->getExtension('topxia_web_twig')->getSetting("storage.video_fingerprint") && $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()))) {
            // line 11
            echo "        data-fingerprint=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFingerprint(), "html", null, true);
            echo "\"
      ";
        }
        // line 13
        echo "        data-user-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()), "html", null, true);
        echo "\"
    ></div>
    <div class=\"watermarkEmbedded\" ></div>
  </div>
  <div class=\"mask\">
  </div>
  ";
        // line 19
        $this->loadTemplate("TopxiaWebBundle:Marker:coord.html.twig", "TopxiaWebBundle:Marker:player.html.twig", 19)->display($context);
        // line 20
        echo "</div>";
    }

    // line 1
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 2
        echo "  <link rel=\"stylesheet\" media=\"screen\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/balloon-video-player/1.3.0/src/skin/video-js-debug.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Marker:player.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 2,  60 => 1,  56 => 20,  54 => 19,  44 => 13,  38 => 11,  35 => 10,  29 => 8,  27 => 7,  22 => 4,  20 => 1,);
    }
}
/* {% block stylesheets %}*/
/*   <link rel="stylesheet" media="screen" href="{{asset('assets/libs/balloon-video-player/1.3.0/src/skin/video-js-debug.css') }}" rel="stylesheet" type="text/css">*/
/* {% endblock %}*/
/* */
/* <div class="dashboard-content">*/
/*   <div class="dashboard-body">*/
/*     <div class="lesson-content" id="lesson-video-content" data-role="lesson-content" {% if setting('storage.video_watermark') > 0 and setting('storage.video_watermark_image') %}*/
/*         data-watermark="{{ filepath(setting('storage.video_watermark_image'), null, true) }}"*/
/*       {% endif %}*/
/*       {% if setting('storage.video_fingerprint') and app.user %}*/
/*         data-fingerprint="{{ finger_print() }}"*/
/*       {% endif %}*/
/*         data-user-id="{{ app.user.id }}"*/
/*     ></div>*/
/*     <div class="watermarkEmbedded" ></div>*/
/*   </div>*/
/*   <div class="mask">*/
/*   </div>*/
/*   {% include 'TopxiaWebBundle:Marker:coord.html.twig' %}*/
/* </div>*/
