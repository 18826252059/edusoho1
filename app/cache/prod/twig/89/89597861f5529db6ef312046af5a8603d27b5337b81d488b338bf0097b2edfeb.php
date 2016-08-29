<?php

/* TopxiaWebBundle:Message/Template:conversation-image.tpl.html.twig */
class __TwigTemplate_6908544373c696ef6e04a3116868e571f5dc66009df1473c7b2ce9dc71f2693d extends Twig_Template
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
        echo "<li class=\"media\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("message_conversation_show", array("conversationId" => $this->getAttribute((isset($context["conversation"]) ? $context["conversation"] : null), "id", array()))), "html", null, true);
        echo "\">
  ";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "user_avatar", array(0 => (isset($context["fromUser"]) ? $context["fromUser"] : null), 1 => "pull-left media-object"), "method"), "html", null, true);
        echo "
  <div class=\"media-body\">
    <h4 class=\"media-heading\">
      ";
        // line 5
        if (($this->getAttribute((isset($context["conversation"]) ? $context["conversation"] : null), "latestMessageUserId", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()))) {
            // line 6
            echo "        发给
      ";
        }
        // line 8
        echo "      ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "user_link", array(0 => (isset($context["fromUser"]) ? $context["fromUser"] : null)), "method"), "html", null, true);
        echo ":
      ";
        // line 9
        echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute((isset($context["conversation"]) ? $context["conversation"] : null), "latestMessageContent", array()), 40);
        echo "

      ";
        // line 11
        if (($this->getAttribute((isset($context["conversation"]) ? $context["conversation"] : null), "unreadNum", array()) > 0)) {
            // line 12
            echo "        <span class=\"text-warning\">(";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["conversation"]) ? $context["conversation"] : null), "unreadNum", array()), "html", null, true);
            echo "条未读)</span>
      ";
        }
        // line 14
        echo "    </h4>

    <div class=\"conversation-footer clearfix\">
      <span class=\"pull-left\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->smarttimeFilter($this->getAttribute((isset($context["conversation"]) ? $context["conversation"] : null), "latestMessageTime", array())), "html", null, true);
        echo "</span>
      <span class=\"pull-right\">共";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["conversation"]) ? $context["conversation"] : null), "messageNum", array()), "html", null, true);
        echo "条</span>
      <div class=\"actions pull-right\">
        <a class=\"delete-conversation-btn text-muted\" href=\"javascript:\" data-url=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("message_conversation_delete", array("conversationId" => $this->getAttribute((isset($context["conversation"]) ? $context["conversation"] : null), "id", array()))), "html", null, true);
        echo "\">删除</a>
        <span class=\"text-muted mhm\">|</span> 
      </div>
    </div>
  </div>
</li>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Message/Template:conversation-image.tpl.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 20,  63 => 18,  59 => 17,  54 => 14,  48 => 12,  46 => 11,  41 => 9,  36 => 8,  32 => 6,  30 => 5,  24 => 2,  19 => 1,);
    }
}
/* <li class="media" data-url="{{ path('message_conversation_show', {conversationId:conversation.id })}}">*/
/*   {{ web_macro.user_avatar(fromUser, 'pull-left media-object') }}*/
/*   <div class="media-body">*/
/*     <h4 class="media-heading">*/
/*       {% if conversation.latestMessageUserId == app.user.id %}*/
/*         发给*/
/*       {% endif  %}*/
/*       {{ web_macro.user_link(fromUser) }}:*/
/*       {{conversation.latestMessageContent|plain_text(40)}}*/
/* */
/*       {% if conversation.unreadNum > 0 %}*/
/*         <span class="text-warning">({{conversation.unreadNum}}条未读)</span>*/
/*       {% endif %}*/
/*     </h4>*/
/* */
/*     <div class="conversation-footer clearfix">*/
/*       <span class="pull-left">{{ conversation.latestMessageTime|smart_time }}</span>*/
/*       <span class="pull-right">共{{ conversation.messageNum }}条</span>*/
/*       <div class="actions pull-right">*/
/*         <a class="delete-conversation-btn text-muted" href="javascript:" data-url="{{ path('message_conversation_delete', {conversationId:conversation.id })}}">删除</a>*/
/*         <span class="text-muted mhm">|</span> */
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </li>*/
