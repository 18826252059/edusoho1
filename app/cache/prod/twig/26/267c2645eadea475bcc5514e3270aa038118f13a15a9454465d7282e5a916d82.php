<?php

/* TopxiaWebBundle:MyThread:tab.html.twig */
class __TwigTemplate_40b86c2c8342266f0395b084f58e06c3db1f2fe1f5cd50a710d5280bdc1f78b2 extends Twig_Template
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
        echo $this->env->getExtension('routing')->getPath("my_discussions");
        echo "\">课程话题</a></li>
\t<li class=\"";
        // line 3
        if (((isset($context["threadType"]) ? $context["threadType"] : null) == "classroom")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("my_classroom_discussions");
        echo "\">";
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
        echo "话题</a></li>
</ul>
<br>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyThread:tab.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  22 => 2,  19 => 1,);
    }
}
/* <ul class="nav nav-tabs">*/
/* 	<li class="{% if threadType == 'course' %}active{% endif %}"><a href="{{ path('my_discussions') }}">课程话题</a></li>*/
/* 	<li class="{% if threadType == 'classroom' %}active{% endif %}"><a href="{{ path('my_classroom_discussions') }}">{{ setting('classroom.name')|default("班级") }}话题</a></li>*/
/* </ul>*/
/* <br>*/
/* */
