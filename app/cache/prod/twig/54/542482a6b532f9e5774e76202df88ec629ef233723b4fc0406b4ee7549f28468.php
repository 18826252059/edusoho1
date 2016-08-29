<?php

/* TopxiaWebBundle:MyTeaching:tab.html.twig */
class __TwigTemplate_b5dd9cbd8281130ebd7bbd246dec0c58c687b4d1a9f73c19c92c4d2a72642e13 extends Twig_Template
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
        echo "<ul class=\"nav nav-tabs\">
\t<li class=\"";
        // line 2
        if (((isset($context["threadType"]) ? $context["threadType"] : null) == "course")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("my_teaching_threads", array("type" => "discussion"));
        echo "\">课程";
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
        echo "话题</a></li>
\t<li class=\"";
        // line 3
        if (((isset($context["threadType"]) ? $context["threadType"] : null) == "classroom")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("my_teaching_classroom_threads", array("type" => "discussion"));
        echo "\">";
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
        echo "话题</a></li>
</ul>
<br>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyTeaching:tab.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 3,  22 => 2,  19 => 1,);
    }
}
/* <ul class="nav nav-tabs">*/
/* 	<li class="{% if threadType == 'course' %}active{% endif %}"><a href="{{path('my_teaching_threads', {type:'discussion'}) }}">课程{{setting('default.user_name')|default('学员')}}话题</a></li>*/
/* 	<li class="{% if threadType == 'classroom' %}active{% endif %}"><a href="{{path('my_teaching_classroom_threads', {type:'discussion'}) }}">{{ setting('classroom.name')|default("班级") }}{{setting('default.user_name')|default('学员')}}话题</a></li>*/
/* </ul>*/
/* <br>*/
/* */
