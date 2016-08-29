<?php

/* TopxiaWebBundle:Group:thread-reply-list.html.twig */
class __TwigTemplate_0ce3b5c73f11a8530a4cdb1fee2f2e158d62058a5ad0b94d793ef251f89d7389 extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Group:thread-reply-list.html.twig", 1);
        // line 2
        echo "  <div class=\"reply-post-list-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["postMain"]) ? $context["postMain"] : null), "id", array()), "html", null, true);
        echo "\">
    <ul class=\"media-list\">
      ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["postReply"]) ? $context["postReply"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 5
            echo "        <li class=\"media li-reply-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["postMain"]) ? $context["postMain"] : null), "id", array()), "html", null, true);
            echo "\">
          <a href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($context["post"], "userId", array()))), "html", null, true);
            echo "\" class=\"pull-left\">
            <img src=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($this->getAttribute((isset($context["postReplyMembers"]) ? $context["postReplyMembers"] : null), $this->getAttribute($context["post"], "userId", array()), array(), "array"), "smallAvatar", array()), "avatar.png"), "html", null, true);
            echo "\" class=\"avatar-md\">
          </a>
          <div class=\"media-body\">
            <div class=\"metas\">
              <strong>";
            // line 11
            echo $context["web_macro"]->getuser_link($this->getAttribute((isset($context["postReplyMembers"]) ? $context["postReplyMembers"] : null), $this->getAttribute($context["post"], "userId", array()), array(), "array"));
            echo "</strong>
              <span class=\"mhm\">";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->smarttimeFilter($this->getAttribute($context["post"], "createdTime", array())), "html", null, true);
            echo "</span>
            </div>
            <div class=\"content\">";
            // line 14
            echo $this->getAttribute($context["post"], "content", array());
            echo "</div>
            <div class=\"text-muted text-normal pull-right\">
              <a href=\"javascript:\" class=\"li-reply\" postId=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["postMain"]) ? $context["postMain"] : null), "id", array()), "html", null, true);
            echo "\" postName=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["postReplyMembers"]) ? $context["postReplyMembers"] : null), $this->getAttribute($context["post"], "userId", array()), array(), "array"), "nickname", array()), "html", null, true);
            echo "\"> 回复</a>
            </div>
          </div>
        </li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </ul>

    <div class=\"actions\">
      <a class=\"replyToo btn btn-default btn-xs pull-right\" data-status=\"hidden\" postId=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["postMain"]) ? $context["postMain"] : null), "id", array()), "html", null, true);
        echo "\" href=\"javascript:;\">我也要说</a>
    </div>
    <div class=\"text-center\">
    ";
        // line 27
        if (($this->getAttribute((isset($context["postReplyPaginator"]) ? $context["postReplyPaginator"] : null), "lastPage", array()) > 1)) {
            // line 28
            echo "      <ul  class=\"paginator-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["postMain"]) ? $context["postMain"] : null), "id", array()), "html", null, true);
            echo " pagination pagination-sm\">
        ";
            // line 29
            if (($this->getAttribute((isset($context["postReplyPaginator"]) ? $context["postReplyPaginator"] : null), "currentPage", array()) == $this->getAttribute((isset($context["postReplyPaginator"]) ? $context["postReplyPaginator"] : null), "firstPage", array()))) {
                // line 30
                echo "          <li class=\"disabled \"><span>上一页</span></li>
        ";
            } else {
                // line 32
                echo "          <li class=\"postReply-page\"  postId=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["postMain"]) ? $context["postMain"] : null), "id", array()), "html", null, true);
                echo "\"  data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_post_reply", array("postId" => $this->getAttribute((isset($context["postMain"]) ? $context["postMain"] : null), "id", array()), "page" => $this->getAttribute((isset($context["postReplyPaginator"]) ? $context["postReplyPaginator"] : null), "previousPage", array()))), "html", null, true);
                echo "\"><a  href=\"javascript:;\">上一页</a></li>
        ";
            }
            // line 34
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["postReplyPaginator"]) ? $context["postReplyPaginator"] : null), "pages", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 35
                echo "          <li ";
                if (($context["page"] == $this->getAttribute((isset($context["postReplyPaginator"]) ? $context["postReplyPaginator"] : null), "currentPage", array()))) {
                    echo "class=\"active\"";
                }
                echo " class=\"postReply-page\"  postId=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["postMain"]) ? $context["postMain"] : null), "id", array()), "html", null, true);
                echo "\"  data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_post_reply", array("postId" => $this->getAttribute((isset($context["postMain"]) ? $context["postMain"] : null), "id", array()), "page" => $context["page"])), "html", null, true);
                echo "\"><a href=\"javascript:;\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "
        ";
            // line 38
            if (($this->getAttribute((isset($context["postReplyPaginator"]) ? $context["postReplyPaginator"] : null), "currentPage", array()) == $this->getAttribute((isset($context["postReplyPaginator"]) ? $context["postReplyPaginator"] : null), "lastPage", array()))) {
                // line 39
                echo "          <li class=\"disabled\"><span>下一页</span></li>
        ";
            } else {
                // line 41
                echo "          <li class=\"postReply-page\"  postId=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["postMain"]) ? $context["postMain"] : null), "id", array()), "html", null, true);
                echo "\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_post_reply", array("postId" => $this->getAttribute((isset($context["postMain"]) ? $context["postMain"] : null), "id", array()), "page" => $this->getAttribute((isset($context["postReplyPaginator"]) ? $context["postReplyPaginator"] : null), "nextPage", array()))), "html", null, true);
                echo "\"><a href=\"javascript:;\">下一页</a></li>
        ";
            }
            // line 43
            echo "      </ul>
    ";
        }
        // line 45
        echo "    </div>
  </div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Group:thread-reply-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 45,  145 => 43,  137 => 41,  133 => 39,  131 => 38,  128 => 37,  111 => 35,  106 => 34,  98 => 32,  94 => 30,  92 => 29,  87 => 28,  85 => 27,  79 => 24,  74 => 21,  61 => 16,  56 => 14,  51 => 12,  47 => 11,  40 => 7,  36 => 6,  31 => 5,  27 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% import "TopxiaWebBundle::macro.html.twig" as web_macro %}*/
/*   <div class="reply-post-list-{{postMain.id}}">*/
/*     <ul class="media-list">*/
/*       {% for post in postReply %}*/
/*         <li class="media li-reply-{{postMain.id}}">*/
/*           <a href="{{ path('user_show', {id:post.userId}) }}" class="pull-left">*/
/*             <img src="{{ filepath(postReplyMembers[post.userId].smallAvatar, 'avatar.png') }}" class="avatar-md">*/
/*           </a>*/
/*           <div class="media-body">*/
/*             <div class="metas">*/
/*               <strong>{{ web_macro.user_link(postReplyMembers[post.userId]) }}</strong>*/
/*               <span class="mhm">{{post.createdTime|smart_time}}</span>*/
/*             </div>*/
/*             <div class="content">{{post.content|raw}}</div>*/
/*             <div class="text-muted text-normal pull-right">*/
/*               <a href="javascript:" class="li-reply" postId="{{postMain.id}}" postName="{{postReplyMembers[post.userId].nickname}}"> 回复</a>*/
/*             </div>*/
/*           </div>*/
/*         </li>*/
/*       {% endfor %}*/
/*     </ul>*/
/* */
/*     <div class="actions">*/
/*       <a class="replyToo btn btn-default btn-xs pull-right" data-status="hidden" postId="{{postMain.id}}" href="javascript:;">我也要说</a>*/
/*     </div>*/
/*     <div class="text-center">*/
/*     {% if postReplyPaginator.lastPage > 1 %}*/
/*       <ul  class="paginator-{{postMain.id}} pagination pagination-sm">*/
/*         {% if postReplyPaginator.currentPage == postReplyPaginator.firstPage %}*/
/*           <li class="disabled "><span>上一页</span></li>*/
/*         {% else %}*/
/*           <li class="postReply-page"  postId="{{postMain.id}}"  data-url="{{path('group_thread_post_reply',{postId:postMain.id,page:postReplyPaginator.previousPage})}}"><a  href="javascript:;">上一页</a></li>*/
/*         {% endif %}*/
/*         {% for page in postReplyPaginator.pages %}*/
/*           <li {% if page == postReplyPaginator.currentPage %}class="active"{% endif %} class="postReply-page"  postId="{{postMain.id}}"  data-url="{{path('group_thread_post_reply',{postId:postMain.id,page:page})}}"><a href="javascript:;">{{ page }}</a></li>*/
/*         {% endfor %}*/
/* */
/*         {% if postReplyPaginator.currentPage == postReplyPaginator.lastPage %}*/
/*           <li class="disabled"><span>下一页</span></li>*/
/*         {% else %}*/
/*           <li class="postReply-page"  postId="{{postMain.id}}" data-url="{{path('group_thread_post_reply',{postId:postMain.id,page:postReplyPaginator.nextPage})}}"><a href="javascript:;">下一页</a></li>*/
/*         {% endif %}*/
/*       </ul>*/
/*     {% endif %}*/
/*     </div>*/
/*   </div>*/
/* */
/* */
