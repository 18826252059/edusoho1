<?php

/* TopxiaWebBundle:Thread:post-item.html.twig */
class __TwigTemplate_9aa3048cb984292b1bc0e399298c8c2c5876c76a1a298e71a3a52c72d239eff7 extends Twig_Template
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
        echo "<!-- 待确认删除 -->
<li id=\"post-";
        // line 2
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()), "html", null, true);
        echo "\" class=\"thread-post thread-post-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()), "html", null, true);
        echo " media\">
  <a href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["author"]) ? $context["author"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"pull-left user-avatar\">
    <img class=\"img-circle\" src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["author"]) ? $context["author"] : null), "smallAvatar", array()), "avatar.png"), "html", null, true);
        echo "\" >
  </a>
  <div class=\"media-body\">
    <div class=\"metas\">
      ";
        // line 8
        $this->loadTemplate("TopxiaWebBundle:Thread:post-manage-menu.html.twig", "TopxiaWebBundle:Thread:post-item.html.twig", 8)->display($context);
        // line 9
        echo "      <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["author"]) ? $context["author"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"nickname\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["author"]) ? $context["author"] : null), "nickname", array()), "html", null, true);
        echo "</a>
      <span class=\"bullet\">•</span>
      <span class=\"text-muted\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->smarttimeFilter($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "createdTime", array())), "html", null, true);
        echo " </span>
      ";
        // line 12
        if ((($this->getAttribute((isset($context["author"]) ? $context["author"] : null), "badgeTitle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["author"]) ? $context["author"] : null), "badgeTitle", array()), null)) : (null))) {
            echo "<span class=\"mll text-danger\">(";
            echo $this->env->getExtension('topxia_web_twig')->getDictText("classroomRoles", $this->getAttribute((isset($context["author"]) ? $context["author"] : null), "badgeTitle", array()));
            echo ") </span>";
        }
        // line 13
        echo "    </div>
    <div class=\"editor-text\">";
        // line 14
        echo $this->env->getExtension('topxia_web_twig')->atFilter($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "content", array()), $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "ats", array()));
        echo "</div>
    <div class=\"comment-sns\">
      ";
        // line 16
        $this->loadTemplate("TopxiaWebBundle:Thread:post-interaction.html.twig", "TopxiaWebBundle:Thread:post-item.html.twig", 16)->display($context);
        // line 17
        echo "    </div>
    <div class=\"thread-subpost-container clearfix ";
        // line 18
        if ( !$this->getAttribute((isset($context["post"]) ? $context["post"] : null), "subposts", array())) {
            echo "hide";
        }
        echo "\">
      ";
        // line 19
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Thread:subposts", array("threadId" => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "threadId", array()), "postId" => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()), "less" => true)));
        echo "
      <div class=\"thread-subpost-morebar clearfix ";
        // line 20
        if ( !$this->getAttribute((isset($context["post"]) ? $context["post"] : null), "subposts", array())) {
            echo "hide";
        }
        echo "\">
        ";
        // line 21
        if ($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "canAccess", array(0 => "post.create", 1 => (isset($context["post"]) ? $context["post"] : null)), "method")) {
            // line 22
            echo "          <button class=\"btn btn-default btn-xs pull-right js-toggle-subpost-form\">我也说一句</button>
        ";
        }
        // line 24
        echo "        <span class=\"thread-subpost-moretext ";
        if (($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "subposts", array()) <= 5)) {
            echo "hide";
        }
        echo "\"><span class=\"text-muted\">还有";
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "subposts", array()) - 5), "html", null, true);
        echo "条回复，</span><a href=\"javascript:;\" class=\"js-post-more\">点击查看</a></span>
      </div>

      ";
        // line 27
        if ($this->getAttribute((isset($context["service"]) ? $context["service"] : null), "canAccess", array(0 => "post.create", 1 => (isset($context["post"]) ? $context["post"] : null)), "method")) {
            // line 28
            echo "        <form method=\"post\" action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("thread_post_reply", array("threadId" => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "threadId", array()), "postId" => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()))), "html", null, true);
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
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
            echo "\">
            <button type=\"submit\" data-loading-text=\"正在发表\" class=\"btn btn-primary btn-sm pull-right\">发表</button>
          </div>
        </form>
      ";
        }
        // line 40
        echo "
    </div>
  </div>
</li>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Thread:post-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 40,  122 => 35,  107 => 28,  105 => 27,  94 => 24,  90 => 22,  88 => 21,  82 => 20,  78 => 19,  72 => 18,  69 => 17,  67 => 16,  62 => 14,  59 => 13,  53 => 12,  49 => 11,  41 => 9,  39 => 8,  32 => 4,  28 => 3,  22 => 2,  19 => 1,);
    }
}
/* <!-- 待确认删除 -->*/
/* <li id="post-{{ post.id }}" class="thread-post thread-post-{{ post.id }} media">*/
/*   <a href="{{ path('user_show', {id:author.id}) }}" class="pull-left user-avatar">*/
/*     <img class="img-circle" src="{{ filepath(author.smallAvatar, 'avatar.png') }}" >*/
/*   </a>*/
/*   <div class="media-body">*/
/*     <div class="metas">*/
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
/*     <div class="thread-subpost-container clearfix {% if not post.subposts %}hide{% endif %}">*/
/*       {{ render(controller('TopxiaWebBundle:Thread:subposts', {threadId: post.threadId, postId:post.id, less:true})) }}*/
/*       <div class="thread-subpost-morebar clearfix {% if not post.subposts %}hide{% endif %}">*/
/*         {% if service.canAccess('post.create', post) %}*/
/*           <button class="btn btn-default btn-xs pull-right js-toggle-subpost-form">我也说一句</button>*/
/*         {% endif %}*/
/*         <span class="thread-subpost-moretext {% if post.subposts <= 5 %}hide{% endif %}"><span class="text-muted">还有{{ post.subposts - 5 }}条回复，</span><a href="javascript:;" class="js-post-more">点击查看</a></span>*/
/*       </div>*/
/* */
/*       {% if service.canAccess('post.create', post) %}*/
/*         <form method="post" action="{{ path('thread_post_reply', {threadId:post.threadId, postId:post.id}) }}" class="thread-subpost-form {% if post.subposts %}hide{% endif %}">*/
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
/*       {% endif %}*/
/* */
/*     </div>*/
/*   </div>*/
/* </li>*/
