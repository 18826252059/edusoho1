<?php

/* TopxiaWebBundle:CommentWidget:item.html.twig */
class __TwigTemplate_d62bed590b831f83eb33526bae6b2b2b57e0bf8a8f678fb7827a9017d944027d extends Twig_Template
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
        echo "<li class=\"media comment ";
        if ((($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()) == $this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "userId", array()))) || $this->env->getExtension('security')->isGranted("ROLE_ADMIN"))) {
            echo "comment-operated";
        }
        echo "\" data-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "id", array()), "html", null, true);
        echo "\">
  <a class=\"pull-left\" href=\"javascript:\">
    <img class=\"media-object media-object-small\" src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "smallAvatar", array()), "avatar.png"), "html", null, true);
        echo "\">
  </a>
  <div class=\"media-body\">
    <div class=\"media-heading\">
      <a href=\"javascript:\" class=\"pull-right comment-delete-btn\" data-url=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("comment_widget_delete", array("id" => $this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "id", array()))), "html", null, true);
        echo "\">x</a>
      <a href=\"javascript:\">";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nickname", array()), "html", null, true);
        echo "</a>
      <span class=\"bullet\">•</span>
      <span>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->smarttimeFilter($this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "createdTime", array())), "html", null, true);
        echo "</span>
    </div>
    ";
        // line 12
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "content", array()), "html", null, true));
        echo "
  </div>
</li>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CommentWidget:item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 12,  45 => 10,  40 => 8,  36 => 7,  29 => 3,  19 => 1,);
    }
}
/* <li class="media comment {% if (app.user and app.user.id == comment.userId) or is_granted('ROLE_ADMIN') %}comment-operated{% endif %}" data-id="{{ comment.id }}">*/
/*   <a class="pull-left" href="javascript:">*/
/*     <img class="media-object media-object-small" src="{{ filepath(user.smallAvatar, 'avatar.png') }}">*/
/*   </a>*/
/*   <div class="media-body">*/
/*     <div class="media-heading">*/
/*       <a href="javascript:" class="pull-right comment-delete-btn" data-url="{{ path('comment_widget_delete', {id:comment.id}) }}">x</a>*/
/*       <a href="javascript:">{{ user.nickname }}</a>*/
/*       <span class="bullet">•</span>*/
/*       <span>{{ comment.createdTime|smart_time }}</span>*/
/*     </div>*/
/*     {{ comment.content|nl2br }}*/
/*   </div>*/
/* </li>*/
