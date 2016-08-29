<?php

/* ClassroomBundle:ClassroomThread:show.html.twig */
class __TwigTemplate_eff5a47c4a01aaf80714d21b31f51e15821cb9ff67a21b3e7aec43083ebd2847 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClassroomBundle:Classroom:content-layout.html.twig", "ClassroomBundle:ClassroomThread:show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ClassroomBundle:Classroom:content-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["nav"] = "thread";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "title", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "  <input type=\"hidden\" id=\"isTeachersUrl\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_teacherIds_catch", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
        echo "\" >
  <div class=\"hidden js-only-teacher-div\">
    <button data-url=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_thread_show", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()))), "html", null, true);
        echo "\" class='js-only-teacher pull-right btn btn-link btn-xs ";
        if ((($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "adopted", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "adopted", array()), 0)) : (0))) {
            echo "active";
        }
        echo "'>";
        if ((($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "adopted", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["filter"]) ? $context["filter"] : null), "adopted", array()), 0)) : (0))) {
            echo "查看全部";
        } else {
            echo "只看老师";
        }
        echo "</button>
  </div>
  ";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->loadScript("classroombundle/controller/classroom/thread-show"), "html", null, true);
        echo "
  ";
        // line 12
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Thread:show", array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "target" => array("type" => "classroom", "id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array())), "thread" => (isset($context["thread"]) ? $context["thread"] : null), "filter" => (isset($context["filter"]) ? $context["filter"] : null))));
        echo "


";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomThread:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 12,  65 => 11,  50 => 9,  44 => 7,  41 => 6,  32 => 3,  28 => 1,  26 => 5,  11 => 1,);
    }
}
/* {% extends 'ClassroomBundle:Classroom:content-layout.html.twig' %}*/
/* */
/* {% block title %} {{thread.title}} - {{ parent() }}{% endblock %}*/
/* */
/* {% set nav = 'thread' %}*/
/* {% block main %}*/
/*   <input type="hidden" id="isTeachersUrl" value="{{ path('classroom_teacherIds_catch',{'classroomId':classroom.id}) }}" >*/
/*   <div class="hidden js-only-teacher-div">*/
/*     <button data-url="{{ path('classroom_thread_show',{classroomId:classroom.id,threadId:thread.id}) }}" class='js-only-teacher pull-right btn btn-link btn-xs {% if filter.adopted|default(0) %}active{% endif %}'>{% if filter.adopted|default(0) %}查看全部{% else %}只看老师{% endif %}</button>*/
/*   </div>*/
/*   {{ load_script('classroombundle/controller/classroom/thread-show') }}*/
/*   {{ render(controller('TopxiaWebBundle:Thread:show', {request:app.request, target:{type:'classroom', id:classroom.id}, thread:thread, filter:filter})) }}*/
/* */
/* */
/* {% endblock %}*/
/* */
/* */
/* */
