<?php

/* TopxiaWebBundle:LiveCourseReplayManage:chapter-item.html.twig */
class __TwigTemplate_81b65326f7586fb709a9e270c573a334fc5bb7526a1c9878521f457da59dc917 extends Twig_Template
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
        echo "<li class=\"item-chapter ";
        if (($this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "type", array()) == "unit")) {
            echo "item-chapter-unit";
        }
        echo " clearfix\" id=\"chapter-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "id", array()), "html", null, true);
        echo "\">
\t<div class=\"item-content\">第 <span class=\"number\">";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "number", array()), "html", null, true);
        echo "</span> ";
        if (($this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "type", array()) == "unit")) {
            if ($this->env->getExtension('topxia_web_twig')->getSetting("default.part_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.part_name"), "节"), "html", null, true);
            } else {
                echo "节";
            }
        } else {
            if ($this->env->getExtension('topxia_web_twig')->getSetting("default.chapter_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.chapter_name"), "章"), "html", null, true);
            } else {
                echo "章";
            }
        }
        echo "： ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "title", array()), "html", null, true);
        echo "</div>
</li>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:LiveCourseReplayManage:chapter-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  19 => 1,);
    }
}
/* <li class="item-chapter {% if chapter.type == 'unit' %}item-chapter-unit{% endif %} clearfix" id="chapter-{{ chapter.id }}">*/
/* 	<div class="item-content">第 <span class="number">{{ chapter.number }}</span> {% if chapter.type == 'unit' %}{% if setting('default.part_name') %}{{setting('default.part_name')|default('节')}}{% else %}节{% endif %}{% else %}{% if setting('default.chapter_name') %}{{setting('default.chapter_name')|default('章')}}{% else %}章{% endif %}{% endif %}： {{ chapter.title }}</div>*/
/* </li>*/
