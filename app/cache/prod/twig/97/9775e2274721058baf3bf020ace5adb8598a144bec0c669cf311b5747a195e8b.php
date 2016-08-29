<?php

/* TopxiaWebBundle:Thread/Part:thread-action.html.twig */
class __TwigTemplate_d9f90763df2e3e1882c3acef136f588131d6347688e995adf389b1ff623c590a extends Twig_Template
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
        echo "<div class=\"topic-action\">
    ";
        // line 2
        if ($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "canAccess", array(0 => "thread.update", 1 => (isset($context["thread"]) ? $context["thread"] : null)), "method")) {
            // line 3
            echo "      <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(($this->getAttribute((isset($context["target"]) ? $context["target"] : null), "type", array()) . "_thread_update"), array(($this->getAttribute((isset($context["target"]) ? $context["target"] : null), "type", array()) . "Id") => $this->getAttribute((isset($context["target"]) ? $context["target"] : null), "id", array()), "threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()))), "html", null, true);
            echo "\"><i class=\"es-icon es-icon-edit\"></i> 编辑</a>
    ";
        }
        // line 5
        echo "    ";
        if ($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "canAccess", array(0 => "thread.delete", 1 => (isset($context["thread"]) ? $context["thread"] : null)), "method")) {
            // line 6
            echo "      <a href=\"javascript:;\"data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("thread_delete", array("threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()))), "html", null, true);
            echo "\" data-after-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(($this->getAttribute((isset($context["target"]) ? $context["target"] : null), "type", array()) . "_threads"), array(($this->getAttribute((isset($context["target"]) ? $context["target"] : null), "type", array()) . "Id") => $this->getAttribute((isset($context["target"]) ? $context["target"] : null), "id", array()))), "html", null, true);
            echo "\" data-role=\"confirm-btn\" data-confirm-message=\"您真的要删除该帖吗？\"><i class=\"es-icon es-icon-delete\"></i>删除</a>
    ";
        }
        // line 8
        echo "
    ";
        // line 9
        if ($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "canAccess", array(0 => "thread.sticky", 1 => (isset($context["thread"]) ? $context["thread"] : null)), "method")) {
            // line 10
            echo "      ";
            if ($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "sticky", array())) {
                // line 11
                echo "        <a href=\"javascript:\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("thread_cancel_sticky", array("threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()))), "html", null, true);
                echo "\" data-role=\"confirm-btn\" data-confirm-message=\"您真的要取消置顶该帖吗？\"><i class=\"es-icon es-icon-publish\"></i>取消置顶</a>
      ";
            } else {
                // line 13
                echo "        <a href=\"javascript:\"  data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("thread_set_sticky", array("threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()))), "html", null, true);
                echo "\" data-role=\"confirm-btn\" data-confirm-message=\"您真的要置顶该帖吗？\"><i class=\"es-icon es-icon-publish\"></i>置顶</a>
      ";
            }
            // line 15
            echo "    ";
        }
        // line 16
        echo "
    ";
        // line 17
        if ($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "canAccess", array(0 => "thread.sticky", 1 => (isset($context["thread"]) ? $context["thread"] : null)), "method")) {
            // line 18
            echo "      ";
            if ($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "nice", array())) {
                // line 19
                echo "        <a href=\"javascript:\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("thread_cancel_nice", array("threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()))), "html", null, true);
                echo "\"data-role=\"confirm-btn\" data-confirm-message=\"您真的要取消加精该帖吗？\"><i class=\"es-icon es-icon-thumbup\"></i>取消加精</a>
      ";
            } else {
                // line 21
                echo "        <a href=\"javascript:\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("thread_set_nice", array("threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()))), "html", null, true);
                echo "\"data-role=\"confirm-btn\" data-confirm-message=\"您真的要加精该帖吗？\"><i class=\"es-icon es-icon-thumbup\"></i>加精</a>
      ";
            }
            // line 23
            echo "    ";
        }
        // line 24
        echo "
    ";
        // line 25
        if (($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "type", array()) == "event")) {
            // line 26
            echo "      ";
            if ($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "canAccess", array(0 => "thread.update", 1 => (isset($context["thread"]) ? $context["thread"] : null)), "method")) {
                // line 27
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("thread_export_members", array("threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()))), "html", null, true);
                echo "\" target=\"_balnk\"><i class=\"es-icon es-icon-fileupdate\"></i> 导出成员</a>
      ";
            }
            // line 29
            echo "    ";
        }
        // line 30
        echo "</div>  ";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Thread/Part:thread-action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 30,  101 => 29,  95 => 27,  92 => 26,  90 => 25,  87 => 24,  84 => 23,  78 => 21,  72 => 19,  69 => 18,  67 => 17,  64 => 16,  61 => 15,  55 => 13,  49 => 11,  46 => 10,  44 => 9,  41 => 8,  33 => 6,  30 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <div class="topic-action">*/
/*     {% if service.canAccess('thread.update', thread) %}*/
/*       <a href="{{ path( target.type ~ '_thread_update', {(target.type ~ 'Id'): target.id, threadId:thread.id}) }}"><i class="es-icon es-icon-edit"></i> 编辑</a>*/
/*     {% endif %}*/
/*     {% if service.canAccess('thread.delete', thread) %}*/
/*       <a href="javascript:;"data-url="{{ path('thread_delete', {threadId:thread.id}) }}" data-after-url="{{ path(target.type ~ '_threads', {(target.type ~ 'Id'): target.id}) }}" data-role="confirm-btn" data-confirm-message="您真的要删除该帖吗？"><i class="es-icon es-icon-delete"></i>删除</a>*/
/*     {% endif %}*/
/* */
/*     {% if service.canAccess('thread.sticky', thread) %}*/
/*       {% if thread.sticky %}*/
/*         <a href="javascript:" data-url="{{ path('thread_cancel_sticky', {threadId:thread.id}) }}" data-role="confirm-btn" data-confirm-message="您真的要取消置顶该帖吗？"><i class="es-icon es-icon-publish"></i>取消置顶</a>*/
/*       {% else %}*/
/*         <a href="javascript:"  data-url="{{ path('thread_set_sticky', {threadId:thread.id}) }}" data-role="confirm-btn" data-confirm-message="您真的要置顶该帖吗？"><i class="es-icon es-icon-publish"></i>置顶</a>*/
/*       {% endif %}*/
/*     {% endif %}*/
/* */
/*     {% if service.canAccess('thread.sticky', thread) %}*/
/*       {% if thread.nice %}*/
/*         <a href="javascript:" data-url="{{ path('thread_cancel_nice', {threadId:thread.id}) }}"data-role="confirm-btn" data-confirm-message="您真的要取消加精该帖吗？"><i class="es-icon es-icon-thumbup"></i>取消加精</a>*/
/*       {% else %}*/
/*         <a href="javascript:" data-url="{{ path('thread_set_nice', {threadId:thread.id}) }}"data-role="confirm-btn" data-confirm-message="您真的要加精该帖吗？"><i class="es-icon es-icon-thumbup"></i>加精</a>*/
/*       {% endif %}*/
/*     {% endif %}*/
/* */
/*     {% if thread.type == 'event' %}*/
/*       {% if service.canAccess('thread.update', thread) %}*/
/*         <a href="{{ path('thread_export_members', {threadId:thread.id}) }}" target="_balnk"><i class="es-icon es-icon-fileupdate"></i> 导出成员</a>*/
/*       {% endif %}*/
/*     {% endif %}*/
/* </div>  */
