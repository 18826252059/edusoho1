<?php

/* TopxiaWebBundle:Group:groups-threads-ul.html.twig */
class __TwigTemplate_eaa57dcc89b79225f5d7d23946c66e666e05ea91716132f2df36e5f1b1f03cce extends Twig_Template
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
        echo "<ul class=\"media-list thread-list\">
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["threads"]) ? $context["threads"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["thread"]) {
            // line 3
            echo "    ";
            $context["group"] = (($this->getAttribute((isset($context["groups"]) ? $context["groups"] : null), $this->getAttribute($context["thread"], "groupId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["groups"]) ? $context["groups"] : null), $this->getAttribute($context["thread"], "groupId", array()), array(), "array"), null)) : (null));
            // line 4
            echo "    ";
            if (((array_key_exists("users", $context)) ? (_twig_default_filter((isset($context["users"]) ? $context["users"] : null), null)) : (null))) {
                // line 5
                echo "    ";
                $context["user"] = (($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["thread"], "userId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["thread"], "userId", array()), array(), "array"), null)) : (null));
                // line 6
                echo "    ";
            }
            // line 7
            echo "    <li class=\"media\">
      <div class=\"media-left\">
        <span class=\"reply-num\">
         <strong>";
            // line 10
            if ($this->getAttribute($context["thread"], "postNum", array())) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["thread"], "postNum", array()), "html", null, true);
                echo " ";
            } else {
                echo " 0 ";
            }
            echo "</strong> 回复
        </span>
      </div>
      <div class=\"media-body pts\">
        <div class=\"media-heading\">
         <a class=\"title gray-darker\" href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_show", array("id" => $this->getAttribute($context["thread"], "groupId", array()), "threadId" => $this->getAttribute($context["thread"], "id", array()))), "html", null, true);
            echo "\">";
            echo $this->env->getExtension('topxia_web_twig')->subTextFilter($this->getAttribute($context["thread"], "title", array()), 90);
            echo "</a>
          ";
            // line 16
            if ($this->getAttribute($context["thread"], "isStick", array())) {
                // line 17
                echo "            <span class=\"label label-primary\">置顶</span>
          ";
            }
            // line 19
            echo "          ";
            if ($this->getAttribute($context["thread"], "isElite", array())) {
                // line 20
                echo "            <span class=\"label label-danger\">精华</span>
          ";
            }
            // line 22
            echo "
          ";
            // line 23
            if ($this->env->getExtension('topxia_web_twig')->isFeatureEnabled("group_reward")) {
                // line 24
                echo "            ";
                if ((($this->getAttribute($context["thread"], "type", array()) == "reward") && ($this->getAttribute($context["thread"], "rewardCoin", array()) > 0))) {
                    // line 25
                    echo "              <span class=\"label label-danger\">奖</span>
            ";
                }
                // line 27
                echo "          ";
            }
            // line 28
            echo "        </div>
        
        <div class=\"metas\">
          ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "user_avatar", array(0 => (isset($context["user"]) ? $context["user"] : null), 1 => "userImg", 2 => "avatar-ss"), "method"), "html", null, true);
            echo "
          ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "user_link", array(0 => (isset($context["user"]) ? $context["user"] : null), 1 => "pls"), "method"), "html", null, true);
            echo "发起了问题
          <span class=\"divider\">•</span>
          ";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->smarttimeFilter($this->getAttribute($context["thread"], "createdTime", array())), "html", null, true);
            echo "
          ";
            // line 35
            if ((isset($context["group"]) ? $context["group"] : null)) {
                echo " 
          <span class=\"divider\">•</span>
          <a class=\"gray-darker\" href=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_show", array("id" => $this->getAttribute($context["thread"], "groupId", array()))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "title", array()), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : null), "title", array()), "html", null, true);
                echo "</a>
          ";
            }
            // line 39
            echo "          ";
            if ($this->getAttribute($context["thread"], "lastPostTime", array())) {
                // line 40
                echo "            <span class=\"divider\">•</span>
            最后回复 ";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "user_link", array(0 => $this->getAttribute((isset($context["lastPostMembers"]) ? $context["lastPostMembers"] : null), $this->getAttribute($context["thread"], "lastPostMemberId", array()), array(), "array"), 1 => "link-muted"), "method"), "html", null, true);
                echo "
            <span class=\"divider\">•</span> 
            ";
                // line 43
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->smarttimeFilter($this->getAttribute($context["thread"], "lastPostTime", array())), "html", null, true);
                echo "
          ";
            }
            // line 45
            echo "        </div> 
      </div>
    </li>
  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 49
            echo "    <li class=\"empty\">暂无话题！</li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thread'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Group:groups-threads-ul.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 51,  148 => 49,  140 => 45,  135 => 43,  130 => 41,  127 => 40,  124 => 39,  115 => 37,  110 => 35,  106 => 34,  101 => 32,  97 => 31,  92 => 28,  89 => 27,  85 => 25,  82 => 24,  80 => 23,  77 => 22,  73 => 20,  70 => 19,  66 => 17,  64 => 16,  58 => 15,  44 => 10,  39 => 7,  36 => 6,  33 => 5,  30 => 4,  27 => 3,  22 => 2,  19 => 1,);
    }
}
/* <ul class="media-list thread-list">*/
/*   {% for thread in threads %}*/
/*     {% set group = groups[thread.groupId]|default(null) %}*/
/*     {% if users|default(null) %}*/
/*     {% set user = users[thread.userId]|default(null) %}*/
/*     {% endif %}*/
/*     <li class="media">*/
/*       <div class="media-left">*/
/*         <span class="reply-num">*/
/*          <strong>{% if thread.postNum %} {{thread.postNum}} {% else %} 0 {% endif %}</strong> 回复*/
/*         </span>*/
/*       </div>*/
/*       <div class="media-body pts">*/
/*         <div class="media-heading">*/
/*          <a class="title gray-darker" href="{{ path('group_thread_show', {id:thread.groupId, threadId:thread.id}) }}">{{thread.title|sub_text(90)}}</a>*/
/*           {% if thread.isStick %}*/
/*             <span class="label label-primary">置顶</span>*/
/*           {% endif %}*/
/*           {% if thread.isElite %}*/
/*             <span class="label label-danger">精华</span>*/
/*           {% endif %}*/
/* */
/*           {% if is_feature_enabled('group_reward') %}*/
/*             {% if thread.type == 'reward' and thread.rewardCoin > 0 %}*/
/*               <span class="label label-danger">奖</span>*/
/*             {% endif %}*/
/*           {% endif %}*/
/*         </div>*/
/*         */
/*         <div class="metas">*/
/*           {{ web_macro.user_avatar(user, 'userImg', 'avatar-ss') }}*/
/*           {{ web_macro.user_link(user ,'pls') }}发起了问题*/
/*           <span class="divider">•</span>*/
/*           {{thread.createdTime|smart_time}}*/
/*           {% if group %} */
/*           <span class="divider">•</span>*/
/*           <a class="gray-darker" href="{{path('group_show',{id:thread.groupId})}}" title="{{ group.title }}" >{{ group.title }}</a>*/
/*           {% endif %}*/
/*           {% if thread.lastPostTime %}*/
/*             <span class="divider">•</span>*/
/*             最后回复 {{ web_macro.user_link(lastPostMembers[thread.lastPostMemberId] , 'link-muted') }}*/
/*             <span class="divider">•</span> */
/*             {{ thread.lastPostTime|smart_time}}*/
/*           {% endif %}*/
/*         </div> */
/*       </div>*/
/*     </li>*/
/*   {% else %}*/
/*     <li class="empty">暂无话题！</li>*/
/*   {% endfor %}*/
/* </ul>*/
