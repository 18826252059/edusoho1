<?php

/* TopxiaWebBundle:Group:post-reply-list.html.twig */
class __TwigTemplate_fe0b3dafac99a1b1fb39a979b25a50e5c86c135360aa046b4bcd63010d948963 extends Twig_Template
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
        echo "<div class=\"well\">
  <div class=\"reply-post-list-";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["postMain"]) ? $context["postMain"] : null), "id", array()), "html", null, true);
        echo "\">
    <ul class=\"media-list\">
      ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 5
            echo "        <li class=\"media li-reply-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["postMain"]) ? $context["postMain"] : null), "id", array()), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($context["loop"], "index", array()) > 5)) {
                echo "style=\"display:none;\"";
            }
            echo ">
          <a href=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($context["post"], "userId", array()))), "html", null, true);
            echo "\" class=\"pull-left\">
            <img src=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["post"], "userId", array()), array(), "array"), "smallAvatar", array()), "avatar.png"), "html", null, true);
            echo "\" class=\"avatar-md\">
          </a>
          <div class=\"media-body\">
            <div class=\"metas\">
              <strong>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "user_link", array(0 => $this->getAttribute((isset($context["postReplyMembers"]) ? $context["postReplyMembers"] : null), $this->getAttribute($context["post"], "userId", array()), array(), "array")), "method"), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["post"], "userId", array()), array(), "array"), "nickname", array()), "html", null, true);
            echo "\" data-from-user-id= \"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["post"], "userId", array()), array(), "array"), "id", array()), "html", null, true);
            echo "\"> 回复</a>
            </div>
          </div>
        </li>
      ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    <div class=\"actions\">
      <a class=\"replyToo btn btn-default btn-xs pull-right\" data-status=\"hidden\" postId=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()), "html", null, true);
        echo "\" href=\"javascript:;\">我也要说</a>
      ";
        // line 23
        if ((twig_length_filter($this->env, (isset($context["posts"]) ? $context["posts"] : null)) > 5)) {
            // line 24
            echo "      <div class=\"lookOver-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["postMain"]) ? $context["postMain"] : null), "id", array()), "html", null, true);
            echo "\">
        <span class=\"text-muted \">还有";
            // line 25
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["postReplyCount"]) ? $context["postReplyCount"] : null), $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()), array(), "array") - 5), "html", null, true);
            echo "条回复，</span><a href=\"javascript:\" postId=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["postMain"]) ? $context["postMain"] : null), "id", array()), "html", null, true);
            echo "\" class=\"lookOver\">点击查看</a>
      </div>
      ";
        }
        // line 28
        echo "      <span class=\"text-muted\">&nbsp;</sapn>
    </div>
    </ul>

    <div class=\"text-center\">
    ";
        // line 33
        if (($this->getAttribute($this->getAttribute((isset($context["postReplyPaginator"]) ? $context["postReplyPaginator"] : null), $this->getAttribute((isset($context["postMain"]) ? $context["postMain"] : null), "id", array()), array(), "array"), "lastPage", array()) > 1)) {
            // line 34
            echo "      <ul  class=\"paginator-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["postMain"]) ? $context["postMain"] : null), "id", array()), "html", null, true);
            echo " pagination pagination-sm\" style=\"display:none;\">
        ";
            // line 35
            if (($this->getAttribute($this->getAttribute((isset($context["postReplyPaginator"]) ? $context["postReplyPaginator"] : null), $this->getAttribute((isset($context["postMain"]) ? $context["postMain"] : null), "id", array()), array(), "array"), "currentPage", array()) == $this->getAttribute($this->getAttribute((isset($context["postReplyPaginator"]) ? $context["postReplyPaginator"] : null), $this->getAttribute((isset($context["postMain"]) ? $context["postMain"] : null), "id", array()), array(), "array"), "firstPage", array()))) {
                // line 36
                echo "          <li class=\"disabled \"><span>上一页</span></li>
        ";
            } else {
                // line 38
                echo "          <li class=\"postReply-page\"  postId=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["postMain"]) ? $context["postMain"] : null), "id", array()), "html", null, true);
                echo "\"  data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_post_reply", array("postId" => $this->getAttribute((isset($context["postMain"]) ? $context["postMain"] : null), "id", array()), "page" => $this->getAttribute($this->getAttribute((isset($context["postReplyPaginator"]) ? $context["postReplyPaginator"] : null), $this->getAttribute((isset($context["postMain"]) ? $context["postMain"] : null), "id", array()), array(), "array"), "previousPage", array()))), "html", null, true);
                echo "\"><a  href=\"javascript:;\">上一页</a></li>
        ";
            }
            // line 40
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["postReplyPaginator"]) ? $context["postReplyPaginator"] : null), $this->getAttribute((isset($context["postMain"]) ? $context["postMain"] : null), "id", array()), array(), "array"), "pages", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 41
                echo "          <li ";
                if (($context["page"] == $this->getAttribute($this->getAttribute((isset($context["postReplyPaginator"]) ? $context["postReplyPaginator"] : null), $this->getAttribute((isset($context["postMain"]) ? $context["postMain"] : null), "id", array()), array(), "array"), "currentPage", array()))) {
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
            // line 43
            echo "
        ";
            // line 44
            if (($this->getAttribute($this->getAttribute((isset($context["postReplyPaginator"]) ? $context["postReplyPaginator"] : null), $this->getAttribute((isset($context["postMain"]) ? $context["postMain"] : null), "id", array()), array(), "array"), "currentPage", array()) == $this->getAttribute($this->getAttribute((isset($context["postReplyPaginator"]) ? $context["postReplyPaginator"] : null), $this->getAttribute((isset($context["postMain"]) ? $context["postMain"] : null), "id", array()), array(), "array"), "lastPage", array()))) {
                // line 45
                echo "          <li class=\"disabled\"><span>下一页</span></li>
        ";
            } else {
                // line 47
                echo "          <li class=\"postReply-page\"  postId=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["postMain"]) ? $context["postMain"] : null), "id", array()), "html", null, true);
                echo "\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_post_reply", array("postId" => $this->getAttribute((isset($context["postMain"]) ? $context["postMain"] : null), "id", array()), "page" => $this->getAttribute($this->getAttribute((isset($context["postReplyPaginator"]) ? $context["postReplyPaginator"] : null), $this->getAttribute((isset($context["postMain"]) ? $context["postMain"] : null), "id", array()), array(), "array"), "nextPage", array()))), "html", null, true);
                echo "\"><a href=\"javascript:;\">下一页</a></li>
        ";
            }
            // line 49
            echo "      </ul>
    ";
        }
        // line 51
        echo "    </div>
  </div>
  <div id=\"li-";
        // line 53
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()), "html", null, true);
        echo "\" style=\"display:none;\">
  <form  class=\"thread-post-reply-form reply-";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()), "html", null, true);
        echo "\" method=\"post\"  post-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_post", array("groupId" => $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "id", array()), "threadId" => $this->getAttribute((isset($context["threadMain"]) ? $context["threadMain"] : null), "id", array()))), "html", null, true);
        echo "\">
    <div class=\"form-group\">
      <label class=\"control-label hide\" for=\"reply-content-";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()), "html", null, true);
        echo "\">回复内容</label>
      <div class=\"controls\">
      <textarea id=\"reply-content-";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()), "html", null, true);
        echo "\" class=\"form-control\" data-image-upload-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("default"))), "html", null, true);
        echo "\"></textarea>
      </div>
    <div id=\"fromUserIdDiv\"></div>
    </div>
    <div class=\"form-group\">
      <button type=\"submit\" postId=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["postMain"]) ? $context["postMain"] : null), "id", array()), "html", null, true);
        echo "\" class=\"reply-btn btn btn-xs btn-primary pull-right\"  style=\"margin-top:-10px;\"data-submiting-text=\"正在发表回复\">发表</button>
    </div>
  </form>
</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Group:post-reply-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 63,  214 => 58,  209 => 56,  202 => 54,  198 => 53,  194 => 51,  190 => 49,  182 => 47,  178 => 45,  176 => 44,  173 => 43,  156 => 41,  151 => 40,  143 => 38,  139 => 36,  137 => 35,  132 => 34,  130 => 33,  123 => 28,  115 => 25,  110 => 24,  108 => 23,  104 => 22,  101 => 21,  78 => 16,  73 => 14,  68 => 12,  64 => 11,  57 => 7,  53 => 6,  44 => 5,  27 => 4,  22 => 2,  19 => 1,);
    }
}
/* <div class="well">*/
/*   <div class="reply-post-list-{{postMain.id}}">*/
/*     <ul class="media-list">*/
/*       {% for post in posts %}*/
/*         <li class="media li-reply-{{postMain.id}}" {% if loop.index > 5 %}style="display:none;"{% endif %}>*/
/*           <a href="{{ path('user_show', {id:post.userId}) }}" class="pull-left">*/
/*             <img src="{{ filepath(users[post.userId].smallAvatar, 'avatar.png') }}" class="avatar-md">*/
/*           </a>*/
/*           <div class="media-body">*/
/*             <div class="metas">*/
/*               <strong>{{ web_macro.user_link(postReplyMembers[post.userId]) }}</strong>*/
/*               <span class="mhm">{{post.createdTime|smart_time}}</span>*/
/*             </div>*/
/*             <div class="content">{{post.content|raw}}</div>*/
/*             <div class="text-muted text-normal pull-right">*/
/*               <a href="javascript:" class="li-reply" postId="{{postMain.id}}" postName="{{users[post.userId].nickname}}" data-from-user-id= "{{ users[post.userId].id }}"> 回复</a>*/
/*             </div>*/
/*           </div>*/
/*         </li>*/
/*       {% endfor %}*/
/*     <div class="actions">*/
/*       <a class="replyToo btn btn-default btn-xs pull-right" data-status="hidden" postId="{{post.id}}" href="javascript:;">我也要说</a>*/
/*       {% if posts|length > 5 %}*/
/*       <div class="lookOver-{{postMain.id}}">*/
/*         <span class="text-muted ">还有{{postReplyCount[post.id]-5}}条回复，</span><a href="javascript:" postId="{{postMain.id}}" class="lookOver">点击查看</a>*/
/*       </div>*/
/*       {% endif %}*/
/*       <span class="text-muted">&nbsp;</sapn>*/
/*     </div>*/
/*     </ul>*/
/* */
/*     <div class="text-center">*/
/*     {% if postReplyPaginator[postMain.id].lastPage > 1 %}*/
/*       <ul  class="paginator-{{postMain.id}} pagination pagination-sm" style="display:none;">*/
/*         {% if postReplyPaginator[postMain.id].currentPage == postReplyPaginator[postMain.id].firstPage %}*/
/*           <li class="disabled "><span>上一页</span></li>*/
/*         {% else %}*/
/*           <li class="postReply-page"  postId="{{postMain.id}}"  data-url="{{path('group_thread_post_reply',{postId:postMain.id,page:postReplyPaginator[postMain.id].previousPage})}}"><a  href="javascript:;">上一页</a></li>*/
/*         {% endif %}*/
/*         {% for page in postReplyPaginator[postMain.id].pages %}*/
/*           <li {% if page == postReplyPaginator[postMain.id].currentPage %}class="active"{% endif %} class="postReply-page"  postId="{{postMain.id}}"  data-url="{{path('group_thread_post_reply',{postId:postMain.id,page:page})}}"><a href="javascript:;">{{ page }}</a></li>*/
/*         {% endfor %}*/
/* */
/*         {% if postReplyPaginator[postMain.id].currentPage == postReplyPaginator[postMain.id].lastPage %}*/
/*           <li class="disabled"><span>下一页</span></li>*/
/*         {% else %}*/
/*           <li class="postReply-page"  postId="{{postMain.id}}" data-url="{{path('group_thread_post_reply',{postId:postMain.id,page:postReplyPaginator[postMain.id].nextPage})}}"><a href="javascript:;">下一页</a></li>*/
/*         {% endif %}*/
/*       </ul>*/
/*     {% endif %}*/
/*     </div>*/
/*   </div>*/
/*   <div id="li-{{post.id}}" style="display:none;">*/
/*   <form  class="thread-post-reply-form reply-{{post.id}}" method="post"  post-url="{{path('group_thread_post',{groupId:groupinfo.id,threadId:threadMain.id})}}">*/
/*     <div class="form-group">*/
/*       <label class="control-label hide" for="reply-content-{{post.id}}">回复内容</label>*/
/*       <div class="controls">*/
/*       <textarea id="reply-content-{{post.id}}" class="form-control" data-image-upload-url="{{ path('editor_upload', {token:upload_token('default')}) }}"></textarea>*/
/*       </div>*/
/*     <div id="fromUserIdDiv"></div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <button type="submit" postId="{{postMain.id}}" class="reply-btn btn btn-xs btn-primary pull-right"  style="margin-top:-10px;"data-submiting-text="正在发表回复">发表</button>*/
/*     </div>*/
/*   </form>*/
/* </div>*/
/* </div>*/
/* */
