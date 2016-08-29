<?php

/* TopxiaWebBundle:Message:item.html.twig */
class __TwigTemplate_04c13ab625149553a0aa2ef74d99ba4dda8a1d6f52be7ab4f7398bcc678a6fdb extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Message:item.html.twig", 1);
        // line 2
        echo "<li class=\"media message-me\" parent-url=\"";
        echo $this->env->getExtension('routing')->getPath("message");
        echo "\">

  ";
        // line 4
        echo $context["web_macro"]->getuser_avatar($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "pull-right");
        echo "

  <div class=\"media-body\">
    <div class=\"popover left\">
      <div class=\"arrow\"></div>
      <div class=\"popover-content\">
        <div class=\"message-content\">
               <strong>我：</strong> 
              ";
        // line 12
        echo $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "content", array());
        echo "
        </div>
        <div class=\"message-footer\">
          <span class=\"text-muted\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->smarttimeFilter($this->getAttribute((isset($context["message"]) ? $context["message"] : null), "createdTime", array())), "html", null, true);
        echo "</span>
          <div class=\"message-actions\">
            <a class=\"text-muted delete-message\" href=\"javascript:\" data-url=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("message_delete", array("conversationId" => $this->getAttribute((isset($context["conversation"]) ? $context["conversation"] : null), "id", array()), "messageId" => $this->getAttribute((isset($context["message"]) ? $context["message"] : null), "id", array()))), "html", null, true);
        echo "\">删除</a>
          </div>
        </div>
      </div>
    </div>
  </div>

</li>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Message:item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 17,  44 => 15,  38 => 12,  27 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% import "TopxiaWebBundle::macro.html.twig" as web_macro %}*/
/* <li class="media message-me" parent-url="{{ path('message')}}">*/
/* */
/*   {{ web_macro.user_avatar(app.user, 'pull-right') }}*/
/* */
/*   <div class="media-body">*/
/*     <div class="popover left">*/
/*       <div class="arrow"></div>*/
/*       <div class="popover-content">*/
/*         <div class="message-content">*/
/*                <strong>我：</strong> */
/*               {{message.content|raw}}*/
/*         </div>*/
/*         <div class="message-footer">*/
/*           <span class="text-muted">{{ message.createdTime|smart_time }}</span>*/
/*           <div class="message-actions">*/
/*             <a class="text-muted delete-message" href="javascript:" data-url="{{ path('message_delete',{conversationId:conversation.id, messageId:message.id })}}">删除</a>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* */
/* </li>*/
