<?php

/* TopxiaWebBundle:Thread/Event:user-grids.html.twig */
class __TwigTemplate_0c945334e036bb4ade0b69fc343ef88493521b4013ffb685ad543ba4eb8ef8e9 extends Twig_Template
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
        if (((array_key_exists("myFriends", $context)) ? (_twig_default_filter((isset($context["myFriends"]) ? $context["myFriends"] : null), null)) : (null))) {
            // line 2
            echo "  <div class=\"topic-num\">
    <div class=\"page-header\">好友在参加</div>
    <div class=\"num-list\">
      ";
            // line 5
            $this->loadTemplate("TopxiaWebBundle:Thread/Event:user-grids-li.html.twig", "TopxiaWebBundle:Thread/Event:user-grids.html.twig", 5)->display(array_merge($context, array("members" => (isset($context["myFriends"]) ? $context["myFriends"] : null))));
            // line 6
            echo "    </div>
  </div>
";
        }
        // line 9
        echo "
";
        // line 10
        if (((array_key_exists("members", $context)) ? (_twig_default_filter((isset($context["members"]) ? $context["members"] : null), null)) : (null))) {
            // line 11
            $this->env->getExtension('topxia_web_twig')->loadScript("thread/utility/member");
            // line 12
            echo "  <div class = \"topic-num\">
  <div class=\"joined-users\" data-sum=\"";
            // line 13
            echo twig_escape_filter($this->env, ((array_key_exists("membersCount", $context)) ? (_twig_default_filter((isset($context["membersCount"]) ? $context["membersCount"] : null), 0)) : (0)), "html", null, true);
            echo "\">
    <div class=\"page-header\">最新成员（";
            // line 14
            echo twig_escape_filter($this->env, ((array_key_exists("membersCount", $context)) ? (_twig_default_filter((isset($context["membersCount"]) ? $context["membersCount"] : null), 0)) : (0)), "html", null, true);
            echo "）</div>
    <div class=\"num-list join-members\">
      ";
            // line 16
            $this->loadTemplate("TopxiaWebBundle:Thread/Event:user-grids-li.html.twig", "TopxiaWebBundle:Thread/Event:user-grids.html.twig", 16)->display($context);
            // line 17
            echo "    </div>
    <div class=\"num-more\">
    ";
            // line 19
            if ((((array_key_exists("membersCount", $context)) ? (_twig_default_filter((isset($context["membersCount"]) ? $context["membersCount"] : null), 0)) : (0)) > 16)) {
                // line 20
                echo "      <span class=\"glyphicon glyphicon-chevron-down js-members-expand\" style=\"cursor: pointer;\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajax_thread_member_show", array("threadId" => (isset($context["threadId"]) ? $context["threadId"] : null))), "html", null, true);
                echo "\"></span>
      <span class=\"glyphicon glyphicon-chevron-up js-members-collapse\" style=\"cursor: pointer; display:none\"></span>
    ";
            }
            // line 23
            echo "    </div>
  </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Thread/Event:user-grids.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 23,  60 => 20,  58 => 19,  54 => 17,  52 => 16,  47 => 14,  43 => 13,  40 => 12,  38 => 11,  36 => 10,  33 => 9,  28 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }
}
/* {% if myFriends|default(null) %}*/
/*   <div class="topic-num">*/
/*     <div class="page-header">好友在参加</div>*/
/*     <div class="num-list">*/
/*       {% include 'TopxiaWebBundle:Thread/Event:user-grids-li.html.twig' with {members:myFriends} %}*/
/*     </div>*/
/*   </div>*/
/* {% endif %}*/
/* */
/* {% if members|default(null) %}*/
/* {% do load_script('thread/utility/member') %}*/
/*   <div class = "topic-num">*/
/*   <div class="joined-users" data-sum="{{ membersCount|default(0) }}">*/
/*     <div class="page-header">最新成员（{{ membersCount|default(0) }}）</div>*/
/*     <div class="num-list join-members">*/
/*       {% include 'TopxiaWebBundle:Thread/Event:user-grids-li.html.twig' %}*/
/*     </div>*/
/*     <div class="num-more">*/
/*     {% if membersCount|default(0) > 16 %}*/
/*       <span class="glyphicon glyphicon-chevron-down js-members-expand" style="cursor: pointer;" data-url="{{ path('ajax_thread_member_show', {threadId:threadId}) }}"></span>*/
/*       <span class="glyphicon glyphicon-chevron-up js-members-collapse" style="cursor: pointer; display:none"></span>*/
/*     {% endif %}*/
/*     </div>*/
/*   </div>*/
/*   </div>*/
/* {% endif %}*/
/* */
