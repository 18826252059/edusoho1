<?php

/* @root\src\Topxia\WebBundle\Extensions\NotificationTemplate\student-remove.tpl.html.twig */
class __TwigTemplate_9a796d99b5361b039cfc7e36f6ac3169d76d087137dccc4e0ed52f4ed952976a extends Twig_Template
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
        echo "
<li class=\"media\">
  <div class=\"pull-left\">
    <span class=\"glyphicon glyphicon-volume-down media-object\"></span>
  </div>
  <div class=\"media-body\">
    <div class=\"notification-body\">
      ";
        // line 8
        $context["data"] = $this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "content", array());
        // line 9
        echo "      您已经被管理员移除您在学课程<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "courseId", array()))), "html", null, true);
        echo "\">《";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "courseTitle", array()), "html", null, true);
        echo "》</a>的";
        if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
        } else {
            echo "学员";
        }
        echo "身份，不能再继续学习该课程。如有疑问，请联系网站客服。
    </div>
    <div class=\"notification-footer\">
     ";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->dateformatFilter($this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "createdTime", array())), "html", null, true);
        echo "  
    </div>
  </div>
</li>";
    }

    public function getTemplateName()
    {
        return "@root\\src\\Topxia\\WebBundle\\Extensions\\NotificationTemplate\\student-remove.tpl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 12,  30 => 9,  28 => 8,  19 => 1,);
    }
}
/* */
/* <li class="media">*/
/*   <div class="pull-left">*/
/*     <span class="glyphicon glyphicon-volume-down media-object"></span>*/
/*   </div>*/
/*   <div class="media-body">*/
/*     <div class="notification-body">*/
/*       {% set data = notification.content %}*/
/*       您已经被管理员移除您在学课程<a href="{{ path('course_show', {id:data.courseId}) }}">《{{ data.courseTitle }}》</a>的{% if setting('default.user_name') %}{{setting('default.user_name')|default('学员')}}{% else %}学员{% endif %}身份，不能再继续学习该课程。如有疑问，请联系网站客服。*/
/*     </div>*/
/*     <div class="notification-footer">*/
/*      {{ notification.createdTime|date_format }}  */
/*     </div>*/
/*   </div>*/
/* </li>*/
