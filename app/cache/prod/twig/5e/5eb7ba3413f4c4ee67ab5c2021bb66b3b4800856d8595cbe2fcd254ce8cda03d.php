<?php

/* TopxiaWebBundle:Thread/Part:post-item.html.twig */
class __TwigTemplate_d2d5337c24e51b4af8b6e7ee40f04650fb522426bd3748359b255c98fe4f799b extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Thread/Part:post-item.html.twig", 1);
        // line 2
        echo "<li id=\"post-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()), "html", null, true);
        echo "\" data-user-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["author"]) ? $context["author"] : null), "id", array()), "html", null, true);
        echo "\" class=\"thread-post thread-post-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()), "html", null, true);
        echo " media media-comment user-id-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["author"]) ? $context["author"] : null), "id", array()), "html", null, true);
        echo "\">
  <div class=\"media-left\">
    ";
        // line 4
        echo $context["web_macro"]->getuser_avatar((isset($context["author"]) ? $context["author"] : null), "user-avatar", "avatar-sm", true);
        echo "
  </div>

  <div class=\"media-body\">
    <div class=\"metas title\">
      ";
        // line 9
        $this->loadTemplate("TopxiaWebBundle:Thread:post-manage-menu.html.twig", "TopxiaWebBundle:Thread/Part:post-item.html.twig", 9)->display($context);
        // line 10
        echo "      <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["author"]) ? $context["author"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"nickname\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["author"]) ? $context["author"] : null), "nickname", array()), "html", null, true);
        echo "</a>
      <span class=\"bullet\">•</span>
      <span class=\"text-muted\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->smarttimeFilter($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "createdTime", array())), "html", null, true);
        echo " </span>
      ";
        // line 13
        if ((($this->getAttribute((isset($context["author"]) ? $context["author"] : null), "badgeTitle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["author"]) ? $context["author"] : null), "badgeTitle", array()), null)) : (null))) {
            echo "<span class=\"mll text-danger\">(";
            echo $this->env->getExtension('topxia_web_twig')->getDictText("classroomRoles", $this->getAttribute((isset($context["author"]) ? $context["author"] : null), "badgeTitle", array()));
            echo ") </span>";
        }
        // line 14
        echo "    </div>
    <div class=\"editor-text\">";
        // line 15
        echo $this->env->getExtension('topxia_web_twig')->atFilter($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "content", array()), $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "ats", array()));
        echo "</div>
    <div class=\"comment-sns\">
      ";
        // line 17
        $this->loadTemplate("TopxiaWebBundle:Thread:post-interaction.html.twig", "TopxiaWebBundle:Thread/Part:post-item.html.twig", 17)->display($context);
        // line 18
        echo "    </div>
    <div class=\"thread-subpost-container subcomments clearfix ";
        // line 19
        if ( !$this->getAttribute((isset($context["post"]) ? $context["post"] : null), "subposts", array())) {
            echo "hide";
        }
        echo "\">
      <div class=\"thread-subpost-content\">
        ";
        // line 21
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Thread:subposts", array("threadId" => (($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "threadId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "threadId", array()), 0)) : (0)), "postId" => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()), "less" => true)));
        echo "
      </div>
      <div class=\"thread-subpost-morebar clearfix ";
        // line 23
        if ( !$this->getAttribute((isset($context["post"]) ? $context["post"] : null), "subposts", array())) {
            echo "hide";
        }
        echo "\">
        ";
        // line 24
        if ($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "canAccess", array(0 => "post.create", 1 => (isset($context["post"]) ? $context["post"] : null)), "method")) {
            // line 25
            echo "          <button class=\"btn btn-default btn-xs pull-right js-toggle-subpost-form\">我也说一句</button>
        ";
        }
        // line 27
        echo "        <span class=\"thread-subpost-moretext ";
        if (($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "subposts", array()) <= 5)) {
            echo "hide";
        }
        echo "\"><span class=\"text-muted\">还有";
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "subposts", array()) - 5), "html", null, true);
        echo "条回复，</span><a href=\"javascript:;\" class=\"js-post-more\">点击查看</a></span>
      </div>

      ";
        // line 30
        if (($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "canAccess", array(0 => "post.create", 1 => (isset($context["post"]) ? $context["post"] : null)), "method") && $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()))) {
            // line 31
            echo "        ";
            if ( !array_key_exists("postReplyUrl", $context)) {
                // line 32
                echo "          ";
                $context["postReplyUrl"] = $this->env->getExtension('routing')->getPath("thread_post_reply", array("threadId" => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "threadId", array()), "postId" => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array())));
                // line 33
                echo "        ";
            }
            // line 34
            echo "        <form method=\"post\" action=\"";
            echo twig_escape_filter($this->env, (isset($context["postReplyUrl"]) ? $context["postReplyUrl"] : null), "html", null, true);
            echo "\" class=\"thread-subpost-form ";
            if ($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "subposts", array())) {
                echo "hide";
            }
            echo "\">
          <div class=\"form-group\">
            <div class=\"controls\">
              <textarea class=\"form-control\" name=\"content\" data-display=\"内容\"></textarea>
            </div>
          </div>
          <div class=\"form-group\">
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
            echo "\">
            <button type=\"submit\" data-loading-text=\"正在发表\" class=\"btn btn-primary btn-sm pull-right\">发表</button>
          </div>
        </form>
      ";
        } else {
            // line 46
            echo "        <div class=\"empty\">
          你还没有登录，请先<a href=\"";
            // line 47
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\">登录</a>或<a href=\"";
            echo $this->env->getExtension('routing')->getPath("register");
            echo "\">注册</a>！
        </div>
      ";
        }
        // line 50
        echo "
    </div>
  </div>
</li>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Thread/Part:post-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 50,  146 => 47,  143 => 46,  135 => 41,  120 => 34,  117 => 33,  114 => 32,  111 => 31,  109 => 30,  98 => 27,  94 => 25,  92 => 24,  86 => 23,  81 => 21,  74 => 19,  71 => 18,  69 => 17,  64 => 15,  61 => 14,  55 => 13,  51 => 12,  43 => 10,  41 => 9,  33 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% import "TopxiaWebBundle::macro.html.twig" as web_macro %}*/
/* <li id="post-{{ post.id }}" data-user-id="{{ author.id }}" class="thread-post thread-post-{{ post.id }} media media-comment user-id-{{author.id}}">*/
/*   <div class="media-left">*/
/*     {{ web_macro.user_avatar(author, 'user-avatar', 'avatar-sm', true) }}*/
/*   </div>*/
/* */
/*   <div class="media-body">*/
/*     <div class="metas title">*/
/*       {% include 'TopxiaWebBundle:Thread:post-manage-menu.html.twig' %}*/
/*       <a href="{{ path('user_show', {id:author.id}) }}" class="nickname">{{ author.nickname }}</a>*/
/*       <span class="bullet">•</span>*/
/*       <span class="text-muted">{{post.createdTime|smart_time}} </span>*/
/*       {% if author.badgeTitle|default(null) %}<span class="mll text-danger">({{ dict_text('classroomRoles', author.badgeTitle) }}) </span>{% endif %}*/
/*     </div>*/
/*     <div class="editor-text">{{ post.content|at(post.ats)|raw }}</div>*/
/*     <div class="comment-sns">*/
/*       {% include 'TopxiaWebBundle:Thread:post-interaction.html.twig' %}*/
/*     </div>*/
/*     <div class="thread-subpost-container subcomments clearfix {% if not post.subposts %}hide{% endif %}">*/
/*       <div class="thread-subpost-content">*/
/*         {{ render(controller('TopxiaWebBundle:Thread:subposts', {threadId: post.threadId|default(0), postId:post.id, less:true})) }}*/
/*       </div>*/
/*       <div class="thread-subpost-morebar clearfix {% if not post.subposts %}hide{% endif %}">*/
/*         {% if service.canAccess('post.create', post) %}*/
/*           <button class="btn btn-default btn-xs pull-right js-toggle-subpost-form">我也说一句</button>*/
/*         {% endif %}*/
/*         <span class="thread-subpost-moretext {% if post.subposts <= 5 %}hide{% endif %}"><span class="text-muted">还有{{ post.subposts - 5 }}条回复，</span><a href="javascript:;" class="js-post-more">点击查看</a></span>*/
/*       </div>*/
/* */
/*       {% if service.canAccess('post.create', post) and app.user %}*/
/*         {% if not postReplyUrl is defined %}*/
/*           {% set postReplyUrl =  path('thread_post_reply', {threadId:post.threadId, postId:post.id}) %}*/
/*         {% endif %}*/
/*         <form method="post" action="{{ postReplyUrl }}" class="thread-subpost-form {% if post.subposts %}hide{% endif %}">*/
/*           <div class="form-group">*/
/*             <div class="controls">*/
/*               <textarea class="form-control" name="content" data-display="内容"></textarea>*/
/*             </div>*/
/*           </div>*/
/*           <div class="form-group">*/
/*             <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*             <button type="submit" data-loading-text="正在发表" class="btn btn-primary btn-sm pull-right">发表</button>*/
/*           </div>*/
/*         </form>*/
/*       {% else %}*/
/*         <div class="empty">*/
/*           你还没有登录，请先<a href="{{ path('login') }}">登录</a>或<a href="{{ path('register') }}">注册</a>！*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*     </div>*/
/*   </div>*/
/* </li>*/
/* */
