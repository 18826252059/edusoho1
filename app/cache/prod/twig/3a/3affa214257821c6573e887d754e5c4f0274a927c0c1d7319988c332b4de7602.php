<?php

/* ClassroomBundle:ClassroomThread/Widget:event-side.html.twig */
class __TwigTemplate_f8bb9db1a70b2929a49b6141469bce173c46cd77a80c3e06432a272f0674013b extends Twig_Template
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
        echo "<div class=\"panel panel-default\">
    <div class=\"panel-heading\">活动发起人</div>
    <div class=\"panel-body\">
      <div class=\"media\">
        <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["author"]) ? $context["author"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"pull-left user-avatar\">
          <img class=\"media-object\" src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["author"]) ? $context["author"] : null), "smallAvatar", array()), "avatar.png"), "html", null, true);
        echo "\" width=48>
        </a>
        <div class=\"media-body\">
          <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["author"]) ? $context["author"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"nickname\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["author"]) ? $context["author"] : null), "nickname", array()), "html", null, true);
        echo "</a>
          <div class=\"text-muted\"><small>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["author"]) ? $context["author"] : null), "title", array()), "html", null, true);
        echo "</small></div>
        </div>
      </div>
    </div>
  </div>

  ";
        // line 16
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Thread/Event:otherEvents", array("threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()), "targetId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "targetType" => "classroom")));
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomThread/Widget:event-side.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 16,  41 => 10,  35 => 9,  29 => 6,  25 => 5,  19 => 1,);
    }
}
/* <div class="panel panel-default">*/
/*     <div class="panel-heading">活动发起人</div>*/
/*     <div class="panel-body">*/
/*       <div class="media">*/
/*         <a href="{{ path('user_show', {id:author.id}) }}" class="pull-left user-avatar">*/
/*           <img class="media-object" src="{{ filepath(author.smallAvatar, 'avatar.png') }}" width=48>*/
/*         </a>*/
/*         <div class="media-body">*/
/*           <a href="{{ path('user_show', {id:author.id}) }}" class="nickname">{{ author.nickname }}</a>*/
/*           <div class="text-muted"><small>{{ author.title }}</small></div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* */
/*   {{ render(controller('TopxiaWebBundle:Thread/Event:otherEvents', { threadId:thread.id, targetId:classroom.id, targetType:'classroom' })) }}*/
