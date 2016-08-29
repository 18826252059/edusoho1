<?php

/* TopxiaWebBundle:LessonQuestionPlugin:item.html.twig */
class __TwigTemplate_47a880ad8f59b9a433936e7f9b38efdbcc67b507e4496975c0a98a3e13b69ed5 extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:LessonQuestionPlugin:item.html.twig", 1);
        // line 2
        echo "<li class=\"media thread-item\" data-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()), "html", null, true);
        echo "\">
\t<div class=\"media-body thread-item-body\">
\t\t<div class=\"title mbm\"><a href=\"javascript:;\" class=\"show-question-item\" target=\"_blank\" data-id=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "title", array()), "html", null, true);
        echo "</a>
\t\t</div>
\t\t<div class=\"metas\">
\t\t\t";
        // line 7
        echo $context["web_macro"]->getuser_link((isset($context["user"]) ? $context["user"] : null));
        echo " 发表于 ";
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->smarttimeFilter($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "createdTime", array())), "html", null, true);
        echo "
\t\t\t<span class=\"bullet\">•</span>
\t\t\t<a href=\"#\">";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "postNum", array()), "html", null, true);
        echo "回答</a>
\t\t</div>
\t</div>
</li>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:LessonQuestionPlugin:item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 9,  35 => 7,  27 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% import "TopxiaWebBundle::macro.html.twig" as web_macro %}*/
/* <li class="media thread-item" data-id="{{ thread.id }}">*/
/* 	<div class="media-body thread-item-body">*/
/* 		<div class="title mbm"><a href="javascript:;" class="show-question-item" target="_blank" data-id="{{ thread.id }}">{{ thread.title }}</a>*/
/* 		</div>*/
/* 		<div class="metas">*/
/* 			{{ web_macro.user_link(user) }} 发表于 {{ thread.createdTime|smart_time }}*/
/* 			<span class="bullet">•</span>*/
/* 			<a href="#">{{ thread.postNum }}回答</a>*/
/* 		</div>*/
/* 	</div>*/
/* </li>*/
