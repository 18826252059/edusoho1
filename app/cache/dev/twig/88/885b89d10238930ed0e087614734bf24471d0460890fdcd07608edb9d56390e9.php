<?php

/* @root\src\Topxia\WebBundle\Extensions\NotificationTemplate\role.tpl.html.twig */
class __TwigTemplate_e2bfdc7737dcf14c847a7eda6b6641aefe3c38d908af5c51d6d1498e7764897d extends Twig_Template
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
        echo "<li class=\"media\">
  <div class=\"pull-left\">
    <span class=\"glyphicon glyphicon-volume-down media-object\"></span>
  </div>
  <div class=\"media-body\">
    <div class=\"notification-body\">
      ";
        // line 7
        $context["data"] = $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "content", array());
        // line 8
        echo "  \t 您被<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "userId", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "userName", array()), "html", null, true);
        echo "</a>设置为“";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "role", array()), "html", null, true);
        echo "”身份。
    </div>
    <div class=\"notification-footer\">
     ";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->dateformatFilter($this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "createdTime", array())), "html", null, true);
        echo "  
    </div>
  </div>
</li>
";
    }

    public function getTemplateName()
    {
        return "@root\\src\\Topxia\\WebBundle\\Extensions\\NotificationTemplate\\role.tpl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 11,  29 => 8,  27 => 7,  19 => 1,);
    }
}
/* <li class="media">*/
/*   <div class="pull-left">*/
/*     <span class="glyphicon glyphicon-volume-down media-object"></span>*/
/*   </div>*/
/*   <div class="media-body">*/
/*     <div class="notification-body">*/
/*       {% set data = notification.content %}*/
/*   	 您被<a href="{{path('user_show',{id:data.userId})}}">{{data.userName}}</a>设置为“{{data.role}}”身份。*/
/*     </div>*/
/*     <div class="notification-footer">*/
/*      {{ notification.createdTime|date_format }}  */
/*     </div>*/
/*   </div>*/
/* </li>*/
/* */
