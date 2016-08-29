<?php

/* TopxiaWebBundle:Thread/Event:title-bar.html.twig */
class __TwigTemplate_f2c605dd8ac19cb4ac653766f06f2b311a2f7e85717d473ea95cc178a10f884f extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Thread/Event:title-bar.html.twig", 1);
        // line 2
        echo "
  ";
        // line 3
        $this->loadTemplate("TopxiaWebBundle:Thread/Part:common-header.html.twig", "TopxiaWebBundle:Thread/Event:title-bar.html.twig", 3)->display($context);
        // line 4
        echo "
  <div class=\"media topic-body\">
    ";
        // line 6
        if ($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "actvityPicture", array())) {
            // line 7
            echo "      <div class=\"media-left\">
        <img src=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "actvityPicture", array()), "html", null, true);
            echo "\" alt=\"\">
      </div>
    ";
        }
        // line 11
        echo "    <div class=\"media-body\">
      <p>时间：";
        // line 12
        echo twig_escape_filter($this->env, (((twig_date_format_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "startTime", array()), "Y 年 m 月 d 日 ") . "周") . $this->env->getExtension('topxia_web_twig')->getDictText("week", twig_date_format_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "startTime", array()), "N"))) . twig_date_format_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "startTime", array()), " H:i")), "html", null, true);
        echo "</p>
      ";
        // line 13
        if ($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "location", array())) {
            // line 14
            echo "        <p>地点： ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "location", array()), "html", null, true);
            echo "</p>
      ";
        }
        // line 16
        echo "      <p>报名人数：
          ";
        // line 17
        if (($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "maxUsers", array()) == 0)) {
            // line 18
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "memberNum", array()), "html", null, true);
            echo " 人 (名额不限)
          ";
        } else {
            // line 20
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "memberNum", array()), "html", null, true);
            echo " 人 （剩余 ";
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "maxUsers", array()) - $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "memberNum", array())), "html", null, true);
            echo "人）
          ";
        }
        // line 22
        echo "      </p>
    </div>
    <div class=\"metas\">
      ";
        // line 25
        if ((($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "maxUsers", array()) == $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "memberNum", array())) && ($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "maxUsers", array()) != 0))) {
            // line 26
            echo "        <a class=\"btn btn-danger btn-sm disabled\">名额已满</a>
        ";
            // line 27
            if ((isset($context["member"]) ? $context["member"] : null)) {
                // line 28
                echo "          <a class=\"btn btn-link btn-sm js-event-cancel\"  href=\"javascript:;\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "targetType", array()) . "_thread_members_quit"), array("memberId" => $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "id", array()), "threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()), ($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "targetType", array()) . "Id") => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "targetId", array()))), "html", null, true);
                echo "\">取消报名</a>
        ";
            }
            // line 30
            echo "      ";
        } elseif (twig_test_empty((isset($context["member"]) ? $context["member"] : null))) {
            // line 31
            echo "        <a class=\"btn btn-primary js-event-apply\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "targetType", array()) . "_thread_members_become"), array("threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()), ($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "targetType", array()) . "Id") => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "targetId", array()))), "html", null, true);
            echo "\">我要报名</a>
      ";
        } else {
            // line 33
            echo "        <a class=\"btn btn-success btn-sm js-event-apply disabled\" data-toggle=\"modal\" data-target=\"#modal\" style=\"right:100px;\">已报名</a>
        <a class=\"btn btn-link btn-sm js-event-cancel\" href=\"javascript:;\" data-url=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "targetType", array()) . "_thread_members_quit"), array("memberId" => $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "id", array()), "threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()), ($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "targetType", array()) . "Id") => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "targetId", array()))), "html", null, true);
            echo "\">取消报名</a>
      ";
        }
        // line 36
        echo "    </div>
  </div>



";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Thread/Event:title-bar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 36,  105 => 34,  102 => 33,  96 => 31,  93 => 30,  87 => 28,  85 => 27,  82 => 26,  80 => 25,  75 => 22,  67 => 20,  61 => 18,  59 => 17,  56 => 16,  50 => 14,  48 => 13,  44 => 12,  41 => 11,  35 => 8,  32 => 7,  30 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% import "TopxiaWebBundle::macro.html.twig" as web_macro %}*/
/* */
/*   {% include 'TopxiaWebBundle:Thread/Part:common-header.html.twig' %}*/
/* */
/*   <div class="media topic-body">*/
/*     {% if thread.actvityPicture %}*/
/*       <div class="media-left">*/
/*         <img src="{{ thread.actvityPicture }}" alt="">*/
/*       </div>*/
/*     {% endif %}*/
/*     <div class="media-body">*/
/*       <p>时间：{{ thread.startTime|date('Y 年 m 月 d 日 ') ~ '周' ~ dict_text('week',thread.startTime|date('N')) ~ thread.startTime|date(' H:i') }}</p>*/
/*       {% if thread.location %}*/
/*         <p>地点： {{ thread.location }}</p>*/
/*       {% endif %}*/
/*       <p>报名人数：*/
/*           {% if thread.maxUsers == 0 %}*/
/*             {{ thread.memberNum }} 人 (名额不限)*/
/*           {% else %}*/
/*             {{ thread.memberNum }} 人 （剩余 {{ thread.maxUsers - thread.memberNum }}人）*/
/*           {% endif %}*/
/*       </p>*/
/*     </div>*/
/*     <div class="metas">*/
/*       {% if thread.maxUsers == thread.memberNum and thread.maxUsers != 0 %}*/
/*         <a class="btn btn-danger btn-sm disabled">名额已满</a>*/
/*         {% if member %}*/
/*           <a class="btn btn-link btn-sm js-event-cancel"  href="javascript:;" data-url="{{ path(thread.targetType ~ '_thread_members_quit', {memberId: member.id, threadId:thread.id, (thread.targetType ~ 'Id'):thread.targetId}) }}">取消报名</a>*/
/*         {% endif %}*/
/*       {% elseif member is empty %}*/
/*         <a class="btn btn-primary js-event-apply" data-toggle="modal" data-target="#modal" data-url="{{ path(thread.targetType ~ '_thread_members_become', {threadId:thread.id, (thread.targetType ~ 'Id'):thread.targetId}) }}">我要报名</a>*/
/*       {% else %}*/
/*         <a class="btn btn-success btn-sm js-event-apply disabled" data-toggle="modal" data-target="#modal" style="right:100px;">已报名</a>*/
/*         <a class="btn btn-link btn-sm js-event-cancel" href="javascript:;" data-url="{{ path(thread.targetType ~ '_thread_members_quit', {memberId: member.id, threadId:thread.id, (thread.targetType ~ 'Id'):thread.targetId}) }}">取消报名</a>*/
/*       {% endif %}*/
/*     </div>*/
/*   </div>*/
/* */
/* */
/* */
/* */
