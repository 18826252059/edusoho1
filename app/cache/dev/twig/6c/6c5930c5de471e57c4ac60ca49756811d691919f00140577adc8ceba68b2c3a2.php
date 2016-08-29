<?php

/* TopxiaWebBundle:Default:footer.html.twig */
class __TwigTemplate_c600b39114a1d1b26f1e0e6b12ac449daebdc05ae0932bfccc81edc688c684c8 extends Twig_Template
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
        echo "<div class=\"site-footer container clearfix\">

    ";
        // line 3
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Default:footNavigation"));
        echo "

    <div class=\"text-gray\" data-role=\"default-foot-bar\">
      ";
        // line 6
        $this->loadTemplate("TopxiaWebBundle::powered-by.html.twig", "TopxiaWebBundle:Default:footer.html.twig", 6)->display($context);
        // line 7
        echo "      ";
        echo $this->env->getExtension('topxia_web_twig')->getSetting("site.analytics");
        echo "
      <div class=\"pull-right\">";
        // line 8
        if ($this->env->getExtension('topxia_web_twig')->getSetting("site.copyright")) {
            echo "课程内容版权均归<a href=\"/\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.copyright"), "html", null, true);
            echo "</a>所有";
        }
        echo "&nbsp;";
        if ($this->env->getExtension('topxia_web_twig')->getSetting("site.icp")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.icp"), "html", null, true);
        }
        echo "</div>

      <div class=\"pull-right mhs\"><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("course_archive");
        echo "\">课程存档</a></div>
    </div>
  </div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 10,  36 => 8,  31 => 7,  29 => 6,  23 => 3,  19 => 1,);
    }
}
/* <div class="site-footer container clearfix">*/
/* */
/*     {{ render(controller('TopxiaWebBundle:Default:footNavigation')) }}*/
/* */
/*     <div class="text-gray" data-role="default-foot-bar">*/
/*       {% include "TopxiaWebBundle::powered-by.html.twig" %}*/
/*       {{ setting('site.analytics')|raw }}*/
/*       <div class="pull-right">{% if setting('site.copyright') %}课程内容版权均归<a href="/">{{ setting('site.copyright') }}</a>所有{% endif %}&nbsp;{% if setting('site.icp') %}{{ setting('site.icp') }}{% endif %}</div>*/
/* */
/*       <div class="pull-right mhs"><a href="{{ path('course_archive') }}">课程存档</a></div>*/
/*     </div>*/
/*   </div>*/
