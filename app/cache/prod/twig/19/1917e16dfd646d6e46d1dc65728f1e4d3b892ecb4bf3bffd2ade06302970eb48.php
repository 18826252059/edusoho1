<?php

/* ClassroomBundle:ClassroomThread/Part:thread-list-header.html.twig */
class __TwigTemplate_3118657ef5a31a625e5fa9933441b2a69436ddd72c9f51acea91d082842999d1 extends Twig_Template
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
        echo "<div class=\"nav-filter clearfix\">
  
  ";
        // line 3
        if ($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "canAccess", array(0 => "thread.create", 1 => array("targetType" => "classroom", "targetId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "method")) {
            // line 4
            echo "    <div class=\"btn-group\">
      <button type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">发话题 <span class=\"caret\"></span></button>
      <ul class=\"dropdown-menu\" role=\"menu\">
        <li><a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_thread_create", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "type" => "discussion")), "html", null, true);
            echo "\">发话题</a></li>
        <li><a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_thread_create", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "type" => "question")), "html", null, true);
            echo "\">提问题</a></li>
        ";
            // line 9
            if ($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "canAccess", array(0 => "thread.event.create", 1 => array("targetType" => "classroom", "targetId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "method")) {
                // line 10
                echo "          <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_thread_create", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "type" => "event")), "html", null, true);
                echo "\">建活动</a></li> 
        ";
            }
            // line 12
            echo "      </ul>
    </div>
  ";
        }
        // line 15
        echo "
  <ul class=\"nav nav-pills nav-pills-sm\">
    <li";
        // line 17
        if (($this->getAttribute((isset($context["filters"]) ? $context["filters"] : null), "type", array()) == "all")) {
            echo " class=\"active\"";
        }
        echo "><a data-target=\"#thread-pane\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_threads", twig_array_merge(twig_array_merge(array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array())), (isset($context["filters"]) ? $context["filters"] : null)), array("type" => "all"))), "html", null, true);
        echo "\">全部</a></li>
    
    <li";
        // line 19
        if (($this->getAttribute((isset($context["filters"]) ? $context["filters"] : null), "type", array()) == "question")) {
            echo " class=\"active\"";
        }
        echo "><a data-target=\"#thread-pane\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_threads", twig_array_merge(twig_array_merge(array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array())), (isset($context["filters"]) ? $context["filters"] : null)), array("type" => "question"))), "html", null, true);
        echo "\">问答</a></li>

    <li";
        // line 21
        if (($this->getAttribute((isset($context["filters"]) ? $context["filters"] : null), "type", array()) == "nice")) {
            echo " class=\"active\"";
        }
        echo "><a data-target=\"#thread-pane\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_threads", twig_array_merge(twig_array_merge(array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array())), (isset($context["filters"]) ? $context["filters"] : null)), array("type" => "nice"))), "html", null, true);
        echo "\">精华</a></li>

    <li class=\"dropdown\">
      <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
        <span>排序：</span>
        ";
        // line 26
        if (($this->getAttribute((isset($context["filters"]) ? $context["filters"] : null), "sort", array()) == "posted")) {
            // line 27
            echo "          最后回复
        ";
        } elseif (($this->getAttribute(        // line 28
(isset($context["filters"]) ? $context["filters"] : null), "sort", array()) == "created")) {
            echo " 
          最新发帖
        ";
        }
        // line 31
        echo "        <span class=\"caret\"></span>
      </a>
      <ul class=\"dropdown-menu hidden-xs\">
        <li class=\"";
        // line 34
        if (($this->getAttribute((isset($context["filters"]) ? $context["filters"] : null), "sort", array()) == "posted")) {
            echo "active";
        }
        echo "\"><a  href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_threads", twig_array_merge(twig_array_merge(array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array())), (isset($context["filters"]) ? $context["filters"] : null)), array("sort" => "posted"))), "html", null, true);
        echo "\">最后回复</a></li>
        <li class=\"";
        // line 35
        if (($this->getAttribute((isset($context["filters"]) ? $context["filters"] : null), "sort", array()) == "created")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_threads", twig_array_merge(twig_array_merge(array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array())), (isset($context["filters"]) ? $context["filters"] : null)), array("sort" => "created"))), "html", null, true);
        echo "\">最新发帖</a></li>
      </ul>
    </li>
  </ul>

</div>

";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomThread/Part:thread-list-header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 35,  101 => 34,  96 => 31,  90 => 28,  87 => 27,  85 => 26,  73 => 21,  64 => 19,  55 => 17,  51 => 15,  46 => 12,  40 => 10,  38 => 9,  34 => 8,  30 => 7,  25 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div class="nav-filter clearfix">*/
/*   */
/*   {% if service.canAccess('thread.create', {targetType:'classroom', targetId:classroom.id}) %}*/
/*     <div class="btn-group">*/
/*       <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">发话题 <span class="caret"></span></button>*/
/*       <ul class="dropdown-menu" role="menu">*/
/*         <li><a href="{{ path('classroom_thread_create', {classroomId:classroom.id, type: 'discussion'}) }}">发话题</a></li>*/
/*         <li><a href="{{ path('classroom_thread_create', {classroomId:classroom.id, type: 'question'}) }}">提问题</a></li>*/
/*         {% if service.canAccess('thread.event.create', {targetType:'classroom', targetId:classroom.id}) %}*/
/*           <li><a href="{{ path('classroom_thread_create', {classroomId:classroom.id, type: 'event'}) }}">建活动</a></li> */
/*         {% endif %}*/
/*       </ul>*/
/*     </div>*/
/*   {% endif %}*/
/* */
/*   <ul class="nav nav-pills nav-pills-sm">*/
/*     <li{% if filters.type == 'all' %} class="active"{% endif %}><a data-target="#thread-pane" href="{{ path('classroom_threads', {classroomId:classroom.id}|merge(filters)|merge({type:'all'})) }}">全部</a></li>*/
/*     */
/*     <li{% if filters.type == 'question' %} class="active"{% endif %}><a data-target="#thread-pane" href="{{ path('classroom_threads', {classroomId:classroom.id}|merge(filters)|merge({type:'question'})) }}">问答</a></li>*/
/* */
/*     <li{% if filters.type == 'nice' %} class="active"{% endif %}><a data-target="#thread-pane" href="{{ path('classroom_threads', {classroomId:classroom.id}|merge(filters)|merge({type:'nice'})) }}">精华</a></li>*/
/* */
/*     <li class="dropdown">*/
/*       <a class="dropdown-toggle" data-toggle="dropdown" href="#">*/
/*         <span>排序：</span>*/
/*         {% if filters.sort == 'posted' %}*/
/*           最后回复*/
/*         {% elseif filters.sort == 'created'%} */
/*           最新发帖*/
/*         {% endif %}*/
/*         <span class="caret"></span>*/
/*       </a>*/
/*       <ul class="dropdown-menu hidden-xs">*/
/*         <li class="{% if filters.sort == 'posted' %}active{% endif %}"><a  href="{{ path('classroom_threads', {classroomId:classroom.id}|merge(filters)|merge({sort:'posted'})) }}">最后回复</a></li>*/
/*         <li class="{% if filters.sort == 'created' %}active{% endif %}"><a href="{{ path('classroom_threads', {classroomId:classroom.id}|merge(filters)|merge({sort:'created'})) }}">最新发帖</a></li>*/
/*       </ul>*/
/*     </li>*/
/*   </ul>*/
/* */
/* </div>*/
/* */
/* */
