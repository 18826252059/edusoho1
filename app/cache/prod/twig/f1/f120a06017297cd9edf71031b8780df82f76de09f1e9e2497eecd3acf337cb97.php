<?php

/* TopxiaWebBundle:Course/Part:thread-list-header.html.twig */
class __TwigTemplate_f863872f3739d2e74fc6b031c45cfe16d083b477097d187fef61b13eff6ca7d7 extends Twig_Template
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
  
  <div class=\"btn-group\">
    <button type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">发话题 <span class=\"caret\"></span></button>
    <ul class=\"dropdown-menu\" role=\"menu\">
      <li><a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_thread_create", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "discussion")), "html", null, true);
        echo "\">发话题</a></li>
      <li><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_thread_create", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "question")), "html", null, true);
        echo "\">提问题</a></li>
    </ul>
  </div>


  <ul class=\"nav nav-pills nav-pills-sm\">
    <li";
        // line 13
        if (($this->getAttribute((isset($context["filters"]) ? $context["filters"] : null), "type", array()) == "all")) {
            echo " class=\"active\"";
        }
        echo "><a data-target=\"#thread-pane\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_threads", twig_array_merge(twig_array_merge(array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array())), (isset($context["filters"]) ? $context["filters"] : null)), array("type" => "all"))), "html", null, true);
        echo "\">全部</a></li>
    
    <li";
        // line 15
        if (($this->getAttribute((isset($context["filters"]) ? $context["filters"] : null), "type", array()) == "question")) {
            echo " class=\"active\"";
        }
        echo "><a data-target=\"#thread-pane\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_threads", twig_array_merge(twig_array_merge(array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array())), (isset($context["filters"]) ? $context["filters"] : null)), array("type" => "question"))), "html", null, true);
        echo "\">问答</a></li>

    <li";
        // line 17
        if (($this->getAttribute((isset($context["filters"]) ? $context["filters"] : null), "type", array()) == "elite")) {
            echo " class=\"active\"";
        }
        echo "><a data-target=\"#thread-pane\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_threads", twig_array_merge(twig_array_merge(array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array())), (isset($context["filters"]) ? $context["filters"] : null)), array("type" => "elite"))), "html", null, true);
        echo "\">精华</a></li>

    <li class=\"dropdown\">
      <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
        <span>排序：</span>
        ";
        // line 22
        if (($this->getAttribute((isset($context["filters"]) ? $context["filters"] : null), "sort", array()) == "posted")) {
            // line 23
            echo "          最后回复
        ";
        } elseif (($this->getAttribute(        // line 24
(isset($context["filters"]) ? $context["filters"] : null), "sort", array()) == "created")) {
            echo " 
          最新发帖
        ";
        }
        // line 27
        echo "        <span class=\"caret\"></span>
      </a>
      <ul class=\"dropdown-menu hidden-xs\">
        <li class=\"";
        // line 30
        if (($this->getAttribute((isset($context["filters"]) ? $context["filters"] : null), "sort", array()) == "posted")) {
            echo "active";
        }
        echo "\"><a class=\"js-nav\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_threads", twig_array_merge(twig_array_merge(array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array())), (isset($context["filters"]) ? $context["filters"] : null)), array("sort" => "posted"))), "html", null, true);
        echo "\">最后回复</a></li>
        <li class=\"";
        // line 31
        if (($this->getAttribute((isset($context["filters"]) ? $context["filters"] : null), "sort", array()) == "created")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_threads", twig_array_merge(twig_array_merge(array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array())), (isset($context["filters"]) ? $context["filters"] : null)), array("sort" => "created"))), "html", null, true);
        echo "\">最新发帖</a></li>
      </ul>
    </li>
  </ul>

</div>



";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course/Part:thread-list-header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 31,  85 => 30,  80 => 27,  74 => 24,  71 => 23,  69 => 22,  57 => 17,  48 => 15,  39 => 13,  30 => 7,  26 => 6,  19 => 1,);
    }
}
/* <div class="nav-filter clearfix">*/
/*   */
/*   <div class="btn-group">*/
/*     <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">发话题 <span class="caret"></span></button>*/
/*     <ul class="dropdown-menu" role="menu">*/
/*       <li><a href="{{ path('course_thread_create', {id:course.id, type:'discussion'}) }}">发话题</a></li>*/
/*       <li><a href="{{ path('course_thread_create', {id:course.id, type:'question'}) }}">提问题</a></li>*/
/*     </ul>*/
/*   </div>*/
/* */
/* */
/*   <ul class="nav nav-pills nav-pills-sm">*/
/*     <li{% if filters.type == 'all' %} class="active"{% endif %}><a data-target="#thread-pane" href="{{ path('course_threads', {id:course.id}|merge(filters)|merge({type:'all'})) }}">全部</a></li>*/
/*     */
/*     <li{% if filters.type == 'question' %} class="active"{% endif %}><a data-target="#thread-pane" href="{{ path('course_threads', {id:course.id}|merge(filters)|merge({type:'question'})) }}">问答</a></li>*/
/* */
/*     <li{% if filters.type == 'elite' %} class="active"{% endif %}><a data-target="#thread-pane" href="{{ path('course_threads', {id:course.id}|merge(filters)|merge({type:'elite'})) }}">精华</a></li>*/
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
/*         <li class="{% if filters.sort == 'posted' %}active{% endif %}"><a class="js-nav" href="{{ path('course_threads', {id:course.id}|merge(filters)|merge({sort:'posted'})) }}">最后回复</a></li>*/
/*         <li class="{% if filters.sort == 'created' %}active{% endif %}"><a href="{{ path('course_threads', {id:course.id}|merge(filters)|merge({sort:'created'})) }}">最新发帖</a></li>*/
/*       </ul>*/
/*     </li>*/
/*   </ul>*/
/* */
/* </div>*/
/* */
/* */
/* */
/* */
