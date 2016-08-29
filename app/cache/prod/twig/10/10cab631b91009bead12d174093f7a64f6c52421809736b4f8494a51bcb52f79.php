<?php

/* TopxiaWebBundle:LessonQuestionPlugin:post-item.html.twig */
class __TwigTemplate_a94d6dc4cb30cc7761f276491fd5ea9197203bd4e039c418c482b9cafa8a6ab7 extends Twig_Template
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
        echo "<li class=\"post-item\">
\t<div class=\"post-item-heading clearfix\">
\t\t<img src=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "smallAvatar", array()), "avatar.png"), "html", null, true);
        echo "\" class=\"avatar\">
\t\t<div class=\"infos\">
\t\t\t<div class=\"nickname\">
\t\t\t\t<a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"nickname\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nickname", array()), "html", null, true);
        echo "</a>
\t\t\t\t";
        // line 7
        if (twig_in_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "teacherIds", array()))) {
            // line 8
            echo "\t\t\t\t\t<span class=\"teacher-flag\">老师</span>
\t\t\t\t";
        }
        // line 10
        echo "\t\t\t</div>
\t\t\t<div class=\"time\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->smarttimeFilter($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "createdTime", array())), "html", null, true);
        echo "</div>
\t\t</div>
\t</div>

\t<div class=\"post-item-body\">
\t\t";
        // line 16
        echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "content", array());
        echo "
\t</div>
</li>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:LessonQuestionPlugin:post-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 16,  44 => 11,  41 => 10,  37 => 8,  35 => 7,  29 => 6,  23 => 3,  19 => 1,);
    }
}
/* <li class="post-item">*/
/* 	<div class="post-item-heading clearfix">*/
/* 		<img src="{{ filepath(user.smallAvatar, 'avatar.png') }}" class="avatar">*/
/* 		<div class="infos">*/
/* 			<div class="nickname">*/
/* 				<a href="{{ path('user_show', {id:user.id}) }}" class="nickname">{{ user.nickname }}</a>*/
/* 				{% if user.id in course.teacherIds %}*/
/* 					<span class="teacher-flag">老师</span>*/
/* 				{% endif %}*/
/* 			</div>*/
/* 			<div class="time">{{ post.createdTime|smart_time }}</div>*/
/* 		</div>*/
/* 	</div>*/
/* */
/* 	<div class="post-item-body">*/
/* 		{{ post.content|raw }}*/
/* 	</div>*/
/* </li>*/
