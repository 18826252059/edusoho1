<?php

/* TopxiaWebBundle:EsBar/LeftList:my-learn-place.html.twig */
class __TwigTemplate_d562d7e874bfe39f2f48b39f5a7475746ae0e40697a2b06ffe3fa46e4ff0815e extends Twig_Template
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
        return "TopxiaWebBundle:EsBar/LeftList:my-learn-place.html.twig";
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
