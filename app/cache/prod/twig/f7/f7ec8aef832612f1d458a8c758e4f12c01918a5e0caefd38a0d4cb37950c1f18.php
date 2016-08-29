<?php

/* TopxiaWebBundle:Thread/Part:thread-crumbs.html.twig */
class __TwigTemplate_87a720c4c222c91834047e51c0fa022591e288654797ab24bb0358ddacd28c93 extends Twig_Template
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
        $context["isUpdate"] = ((array_key_exists("isUpdate", $context)) ? (_twig_default_filter((isset($context["isUpdate"]) ? $context["isUpdate"] : null), false)) : (false));
        // line 2
        $context["thread"] = ((array_key_exists("thread", $context)) ? (_twig_default_filter((isset($context["thread"]) ? $context["thread"] : null), null)) : (null));
        // line 3
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : null), "discussion")) : ("discussion"));
        // line 4
        echo "<ul class=\"breadcrumb\">
  <li><a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(($this->getAttribute((isset($context["target"]) ? $context["target"] : null), "type", array()) . "_threads"), array(($this->getAttribute((isset($context["target"]) ? $context["target"] : null), "type", array()) . "Id") => $this->getAttribute((isset($context["target"]) ? $context["target"] : null), "id", array()))), "html", null, true);
        echo "\">
    ";
        // line 6
        if (($this->getAttribute((isset($context["target"]) ? $context["target"] : null), "type", array()) == "classroom")) {
            // line 7
            echo "    ";
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "话题
    ";
        } else {
            // line 9
            echo "    讨论区
    ";
        }
        // line 11
        echo "  </a></li>
  ";
        // line 12
        if (((isset($context["thread"]) ? $context["thread"] : null) && (isset($context["isUpdate"]) ? $context["isUpdate"] : null))) {
            // line 13
            echo "    <li>
        <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(($this->getAttribute((isset($context["target"]) ? $context["target"] : null), "type", array()) . "_thread_show"), array(($this->getAttribute((isset($context["target"]) ? $context["target"] : null), "type", array()) . "Id") => $this->getAttribute((isset($context["target"]) ? $context["target"] : null), "id", array()), "threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "title", array()), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('topxia_web_twig')->subTextFilter($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "title", array()), 10);
            echo "</a>
    </li>
    <li class=\"active\">编辑";
            // line 16
            echo $this->env->getExtension('topxia_web_twig')->getDictText("threadType", $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "type", array()));
            echo "</li>
  ";
        } elseif ((        // line 17
(isset($context["thread"]) ? $context["thread"] : null) &&  !(isset($context["isUpdate"]) ? $context["isUpdate"] : null))) {
            // line 18
            echo "  \t<li class=\"active\">";
            echo $this->env->getExtension('topxia_web_twig')->getDictText("threadType", $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "type", array()));
            echo "</li>
  ";
        } else {
            // line 20
            echo "    <li class=\"active\">发";
            echo $this->env->getExtension('topxia_web_twig')->getDictText("threadType", (isset($context["type"]) ? $context["type"] : null));
            echo "</li>
  ";
        }
        // line 22
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Thread/Part:thread-crumbs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 22,  73 => 20,  67 => 18,  65 => 17,  61 => 16,  52 => 14,  49 => 13,  47 => 12,  44 => 11,  40 => 9,  34 => 7,  32 => 6,  28 => 5,  25 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set isUpdate = isUpdate|default(false) %}*/
/* {% set thread = thread|default(null) %}*/
/* {% set type = type|default('discussion') %}*/
/* <ul class="breadcrumb">*/
/*   <li><a href="{{ path(target.type ~ '_threads', {(target.type ~ 'Id'):target.id}) }}">*/
/*     {% if target.type == "classroom" %}*/
/*     {{setting("classroom.name")|default("班级")}}话题*/
/*     {% else %}*/
/*     讨论区*/
/*     {% endif %}*/
/*   </a></li>*/
/*   {% if thread and isUpdate %}*/
/*     <li>*/
/*         <a href="{{ path(target.type ~ '_thread_show', {(target.type ~ 'Id'):target.id, threadId:thread.id}) }}" title="{{ thread.title }}">{{ thread.title|sub_text(10) }}</a>*/
/*     </li>*/
/*     <li class="active">编辑{{ dict_text('threadType',thread.type) }}</li>*/
/*   {% elseif thread and not isUpdate%}*/
/*   	<li class="active">{{ dict_text('threadType',thread.type) }}</li>*/
/*   {% else %}*/
/*     <li class="active">发{{ dict_text('threadType',type) }}</li>*/
/*   {% endif %}*/
/* </ul>*/
