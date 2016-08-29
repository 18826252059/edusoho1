<?php

/* TopxiaWebBundle:MyCourse:nav-pill.html.twig */
class __TwigTemplate_ada54544321dc5669bbec2574c2a607eef00cfab48b7dce296662a929a49c8c8 extends Twig_Template
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
        echo "<ul class=\"nav nav-pills\">
\t<li";
        // line 2
        if (((isset($context["tab_nav"]) ? $context["tab_nav"] : $this->getContext($context, "tab_nav")) == "learning")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("my_courses_learning");
        echo "\">学习中</a></li>
\t<li";
        // line 3
        if (((isset($context["tab_nav"]) ? $context["tab_nav"] : $this->getContext($context, "tab_nav")) == "learned")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("my_courses_learned");
        echo "\">已学完</a></li>
\t<li";
        // line 4
        if (((isset($context["tab_nav"]) ? $context["tab_nav"] : $this->getContext($context, "tab_nav")) == "favorited")) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("my_courses_favorited");
        echo "\">收藏</a></li>
</ul>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyCourse:nav-pill.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 4,  30 => 3,  22 => 2,  19 => 1,);
    }
}
/* <ul class="nav nav-pills">*/
/* 	<li{% if tab_nav == 'learning' %} class="active"{% endif %}><a href="{{ path('my_courses_learning') }}">学习中</a></li>*/
/* 	<li{% if tab_nav == 'learned' %} class="active"{% endif %}><a href="{{ path('my_courses_learned') }}">已学完</a></li>*/
/* 	<li{% if tab_nav == 'favorited' %} class="active"{% endif %}><a href="{{ path('my_courses_favorited') }}">收藏</a></li>*/
/* </ul>*/
