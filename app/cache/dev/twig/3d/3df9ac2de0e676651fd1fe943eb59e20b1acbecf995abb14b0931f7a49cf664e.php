<?php

/* @root\src\Topxia\WebBundle\Extensions\NotificationTemplate\classroom-student.tpl.html.twig */
class __TwigTemplate_7630e3902a575434fc2abd56faba235c0ba26d9d25e6b5d199873cd8437dff08 extends Twig_Template
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
        echo "
      ";
        // line 9
        if (($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "type", array()) == "create")) {
            // line 10
            echo "          您被
          <a href=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "userId", array()))), "html", null, true);
            echo "\" target='_blank'>
            <strong>";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "userName", array()), "html", null, true);
            echo "</strong>
          </a>
          加入";
            // line 14
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "
          <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "classroomId", array()))), "html", null, true);
            echo "\" target='_blank'>
             <strong>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "classroomTitle", array()), "html", null, true);
            echo "</strong>
          </a>
          成为正式学员
      ";
        } elseif (($this->getAttribute(        // line 19
(isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "type", array()) == "remove")) {
            // line 20
            echo "          您被
          <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "userId", array()))), "html", null, true);
            echo "\" target='_blank'>
            <strong>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "userName", array()), "html", null, true);
            echo "</strong>
          </a>
          移出";
            // line 24
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "
          <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "classroomId", array()))), "html", null, true);
            echo "\" target='_blank'>
             <strong>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "classroomTitle", array()), "html", null, true);
            echo "</strong>
          </a>
      ";
        }
        // line 29
        echo "    </div>
    <div class=\"notification-footer\">
     ";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->dateformatFilter($this->getAttribute((isset($context["notification"]) ? $context["notification"] : $this->getContext($context, "notification")), "createdTime", array())), "html", null, true);
        echo "  
    </div>
  </div>
</li>
";
    }

    public function getTemplateName()
    {
        return "@root\\src\\Topxia\\WebBundle\\Extensions\\NotificationTemplate\\classroom-student.tpl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 31,  88 => 29,  82 => 26,  78 => 25,  74 => 24,  69 => 22,  65 => 21,  62 => 20,  60 => 19,  54 => 16,  50 => 15,  46 => 14,  41 => 12,  37 => 11,  34 => 10,  32 => 9,  29 => 8,  27 => 7,  19 => 1,);
    }
}
/* <li class="media">*/
/*   <div class="pull-left">*/
/*     <span class="glyphicon glyphicon-volume-down media-object"></span>*/
/*   </div>*/
/*   <div class="media-body">*/
/*     <div class="notification-body">*/
/*       {% set data = notification.content %}*/
/* */
/*       {% if data.type == 'create' %}*/
/*           您被*/
/*           <a href="{{ path('user_show', {id:data.userId}) }}" target='_blank'>*/
/*             <strong>{{data.userName}}</strong>*/
/*           </a>*/
/*           加入{{setting("classroom.name")|default("班级")}}*/
/*           <a href="{{ path('classroom_show', {id:data.classroomId}) }}" target='_blank'>*/
/*              <strong>{{data.classroomTitle}}</strong>*/
/*           </a>*/
/*           成为正式学员*/
/*       {% elseif data.type == 'remove'%}*/
/*           您被*/
/*           <a href="{{ path('user_show', {id:data.userId}) }}" target='_blank'>*/
/*             <strong>{{data.userName}}</strong>*/
/*           </a>*/
/*           移出{{setting("classroom.name")|default("班级")}}*/
/*           <a href="{{ path('classroom_show', {id:data.classroomId}) }}" target='_blank'>*/
/*              <strong>{{data.classroomTitle}}</strong>*/
/*           </a>*/
/*       {% endif %}*/
/*     </div>*/
/*     <div class="notification-footer">*/
/*      {{ notification.createdTime|date_format }}  */
/*     </div>*/
/*   </div>*/
/* </li>*/
/* */
