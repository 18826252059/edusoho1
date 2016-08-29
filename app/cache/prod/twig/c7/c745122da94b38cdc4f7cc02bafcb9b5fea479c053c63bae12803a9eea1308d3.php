<?php

/* TopxiaWebBundle:Message/Template:message-item-image.tpl.html.twig */
class __TwigTemplate_ef3e5235e5ec311ca4b45bc18746e6ed05347200974781dafabedea1e9405f60 extends Twig_Template
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
        $context["messageFrom"] = ((($this->getAttribute((isset($context["message"]) ? $context["message"] : null), "fromId", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()))) ? ("me") : ("she"));
        // line 2
        echo "<li class=\"media message-";
        echo twig_escape_filter($this->env, (isset($context["messageFrom"]) ? $context["messageFrom"] : null), "html", null, true);
        echo "\" parent-url=\"";
        echo $this->env->getExtension('routing')->getPath("message");
        echo "\">
  ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "user_avatar", array(0 => $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "createdUser", array()), 1 => (((((isset($context["messageFrom"]) ? $context["messageFrom"] : null) == "me")) ? ("pull-right") : ("pull-left")) . " media-object"), 2 => "", 3 => false), "method"), "html", null, true);
        echo "
  <div class=\"media-body\">
    <div class=\"popover ";
        // line 5
        if (($this->getAttribute((isset($context["message"]) ? $context["message"] : null), "fromId", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()))) {
            echo "left";
        } else {
            echo "right";
        }
        echo "\">
      <div class=\"arrow\"></div>
      <div class=\"popover-content\">
        <div class=\"message-content\">
          ";
        // line 9
        if (((isset($context["messageFrom"]) ? $context["messageFrom"] : null) == "me")) {
            // line 10
            echo "            <strong>我：</strong> 
          ";
        } else {
            // line 12
            echo "            <strong>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "user_link", array(0 => $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "createdUser", array())), "method"), "html", null, true);
            echo "：</strong> 
          ";
        }
        // line 14
        echo "          ";
        echo $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "content", array());
        echo "
        </div>
        <div class=\"message-footer\">
          <span class=\"text-muted\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->smarttimeFilter($this->getAttribute((isset($context["message"]) ? $context["message"] : null), "createdTime", array())), "html", null, true);
        echo "</span>
          <div class=\"message-actions\">
            <a class=\"text-muted delete-message\" href=\"javascript:\" data-url=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("message_delete", array("conversationId" => $this->getAttribute((isset($context["conversation"]) ? $context["conversation"] : null), "id", array()), "messageId" => $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "id", array()))), "html", null, true);
        echo "\" 
            >删除</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</li>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Message/Template:message-item-image.tpl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 19,  63 => 17,  56 => 14,  50 => 12,  46 => 10,  44 => 9,  33 => 5,  28 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set messageFrom = message.fromId == app.user.id ? 'me' : 'she' %}*/
/* <li class="media message-{{ messageFrom }}" parent-url="{{ path('message')}}">*/
/*   {{ web_macro.user_avatar(message.createdUser, (messageFrom == 'me' ? 'pull-right' : 'pull-left') ~ ' media-object', '', false) }}*/
/*   <div class="media-body">*/
/*     <div class="popover {% if message.fromId == app.user.id %}left{% else %}right{% endif %}">*/
/*       <div class="arrow"></div>*/
/*       <div class="popover-content">*/
/*         <div class="message-content">*/
/*           {% if messageFrom == 'me' %}*/
/*             <strong>我：</strong> */
/*           {% else %}*/
/*             <strong>{{ web_macro.user_link(message.createdUser) }}：</strong> */
/*           {% endif %}*/
/*           {{ message.content|raw }}*/
/*         </div>*/
/*         <div class="message-footer">*/
/*           <span class="text-muted">{{ message.createdTime|smart_time }}</span>*/
/*           <div class="message-actions">*/
/*             <a class="text-muted delete-message" href="javascript:" data-url="{{ path('message_delete',{conversationId:conversation.id, messageId:message.id })}}" */
/*             >删除</a>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </li>*/
/* */
