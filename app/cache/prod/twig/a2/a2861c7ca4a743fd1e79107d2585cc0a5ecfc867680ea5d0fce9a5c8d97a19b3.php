<?php

/* TopxiaWebBundle:EsBar/LeftList:my-notification.html.twig */
class __TwigTemplate_1487412d9903cd3407ee1ebd2d3e7e2c8e8b235d7d18d33cac42db376118bc2b extends Twig_Template
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
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "isLogin", array(), "method"))) {
            // line 2
            echo "  <li data-id=\"#bar-message\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"通知\">
    <a href=\"javascript:;\" data-url=\"";
            // line 3
            echo $this->env->getExtension('routing')->getPath("esbar_my_notify");
            echo "\">
      ";
            // line 4
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "newNotificationNum", array()) > 0)) {
                // line 5
                echo "        <i class=\"es-icon es-icon-notificationson\"></i>
        <span class=\"dot\"></span>
      ";
            } else {
                // line 8
                echo "        <i class=\"es-icon es-icon-notifications\"></i>
      ";
            }
            // line 10
            echo "    </a>
  </li>
";
        } else {
            // line 13
            echo "  <li data-id=\"#bar-message\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"通知\">
    <a href=\"javascript:;\">
      <i class=\"es-icon es-icon-notifications\"></i>
    </a>
  </li>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:EsBar/LeftList:my-notification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 13,  39 => 10,  35 => 8,  30 => 5,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if app.user and app.user.isLogin() %}*/
/*   <li data-id="#bar-message" data-toggle="tooltip" data-placement="left" title="通知">*/
/*     <a href="javascript:;" data-url="{{ path('esbar_my_notify') }}">*/
/*       {% if app.user.newNotificationNum > 0 %}*/
/*         <i class="es-icon es-icon-notificationson"></i>*/
/*         <span class="dot"></span>*/
/*       {% else %}*/
/*         <i class="es-icon es-icon-notifications"></i>*/
/*       {% endif %}*/
/*     </a>*/
/*   </li>*/
/* {% else %}*/
/*   <li data-id="#bar-message" data-toggle="tooltip" data-placement="left" title="通知">*/
/*     <a href="javascript:;">*/
/*       <i class="es-icon es-icon-notifications"></i>*/
/*     </a>*/
/*   </li>*/
/* {% endif %}*/
/* */
