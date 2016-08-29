<?php

/* TopxiaWebBundle:EsBar:LeftList/my-learn-place.html.twig */
class __TwigTemplate_350752676fc66a0360973f473db7a04f353e63b6253be641c0c66837235e3f5d extends Twig_Template
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
        echo "<li data-id=\"#bar-course-list\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"我的课程/";
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
        echo "\"><a href=\"javascript:;\" data-url=\"";
        echo $this->env->getExtension('routing')->getPath("esbar_my_course");
        echo "\"><i class=\"es-icon es-icon-book\"></i></a></li>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:EsBar:LeftList/my-learn-place.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* <li data-id="#bar-course-list" data-toggle="tooltip" data-placement="left" title="我的课程/{{ setting('classroom.name')|default("班级") }}"><a href="javascript:;" data-url="{{ path('esbar_my_course') }}"><i class="es-icon es-icon-book"></i></a></li>*/
