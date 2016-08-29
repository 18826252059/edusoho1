<?php

/* TopxiaWebBundle:Thread/Part:list-item.html.twig */
class __TwigTemplate_4beb4b6739d752fc61e9d605014a8a52f15122a6199f110cd6789f49536ca72a extends Twig_Template
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
        echo "<div class=\"media topic-item\">
  <div class=\"media-left media-middle\">
    ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "user_avatar", array(0 => (isset($context["author"]) ? $context["author"] : null), 1 => "pull-left", 2 => "avatar-sm", 3 => true), "method"), "html", null, true);
        echo "
  </div>
  <div class=\"media-body\">
    <div class=\"title\">
      ";
        // line 7
        if (($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "type", array()) == "question")) {
            // line 8
            echo "        <i class=\"es-icon es-icon-help color-danger\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"问答\"></i>
      ";
        }
        // line 10
        echo "      ";
        if (($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "type", array()) == "event")) {
            // line 11
            echo "        <i class=\"es-icon es-icon-locationcircle color-primary\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"活动\"></i>
      ";
        }
        // line 13
        echo "      
      ";
        // line 14
        if (($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "type", array()) == "discussion")) {
            echo "   
        <i class=\"es-icon es-icon-chatcircle color-info\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"话题\"></i>
      ";
        }
        // line 17
        echo "      <a  href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath(($this->getAttribute((isset($context["target"]) ? $context["target"] : null), "type", array()) . "_thread_show"), array(($this->getAttribute((isset($context["target"]) ? $context["target"] : null), "type", array()) . "Id") => $this->getAttribute((isset($context["target"]) ? $context["target"] : null), "id", array()), "threadId" => $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "title", array()), "html", null, true);
        echo "
      </a>
      
      ";
        // line 20
        if ($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "sticky", array())) {
            // line 21
            echo "        <span class=\"label label-primary\" title=\"置顶帖\">置顶</span>
      ";
        }
        // line 23
        echo "      ";
        if ($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "nice", array())) {
            // line 24
            echo "        <span class=\"label label-danger\" title=\"精华帖\">精华</span>
      ";
        }
        // line 26
        echo "    </div>
    
    <div class=\"metas\">
      <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["author"]) ? $context["author"] : null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["author"]) ? $context["author"] : null), "nickname", array()), "html", null, true);
        echo "</a>
      <span>发起了";
        // line 30
        echo $this->env->getExtension('topxia_web_twig')->getDictText("threadType", $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "type", array()));
        echo "</span>
      ";
        // line 31
        if (($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "postNum", array()) > 0)) {
            // line 32
            echo "        ";
            $context["poster"] = $this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "lastPostUserId", array()), array(), "array");
            // line 33
            echo "        •
        <span>最后回复 ";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "user_link", array(0 => (isset($context["poster"]) ? $context["poster"] : null), 1 => "link-muted"), "method"), "html", null, true);
            echo "</span>
      ";
        }
        // line 36
        echo "      
      • <span>";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->smarttimeFilter($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "lastPostTime", array())), "html", null, true);
        echo "</span>
    </div>
  </div>
  <div class=\"media-data hidden-xs\">
    <span>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "postNum", array()), "html", null, true);
        echo "<br>回复</span>
    <span>";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "hitNum", array()), "html", null, true);
        echo "<br>浏览</span>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Thread/Part:list-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 42,  112 => 41,  105 => 37,  102 => 36,  97 => 34,  94 => 33,  91 => 32,  89 => 31,  85 => 30,  79 => 29,  74 => 26,  70 => 24,  67 => 23,  63 => 21,  61 => 20,  52 => 17,  46 => 14,  43 => 13,  39 => 11,  36 => 10,  32 => 8,  30 => 7,  23 => 3,  19 => 1,);
    }
}
/* <div class="media topic-item">*/
/*   <div class="media-left media-middle">*/
/*     {{ web_macro.user_avatar(author, 'pull-left', 'avatar-sm', true)}}*/
/*   </div>*/
/*   <div class="media-body">*/
/*     <div class="title">*/
/*       {% if thread.type == 'question'%}*/
/*         <i class="es-icon es-icon-help color-danger" data-toggle="tooltip" data-placement="top" title="问答"></i>*/
/*       {% endif %}*/
/*       {% if thread.type == 'event'%}*/
/*         <i class="es-icon es-icon-locationcircle color-primary" data-toggle="tooltip" data-placement="top" title="活动"></i>*/
/*       {% endif %}*/
/*       */
/*       {% if thread.type == 'discussion' %}   */
/*         <i class="es-icon es-icon-chatcircle color-info" data-toggle="tooltip" data-placement="top" title="话题"></i>*/
/*       {% endif %}*/
/*       <a  href="{{ path(target.type ~ '_thread_show', {(target.type ~ 'Id'): target.id, threadId:thread.id}) }}">{{ thread.title }}*/
/*       </a>*/
/*       */
/*       {% if thread.sticky %}*/
/*         <span class="label label-primary" title="置顶帖">置顶</span>*/
/*       {% endif %}*/
/*       {% if thread.nice %}*/
/*         <span class="label label-danger" title="精华帖">精华</span>*/
/*       {% endif %}*/
/*     </div>*/
/*     */
/*     <div class="metas">*/
/*       <a href="{{ path('user_show', {id:author.id}) }}">{{ author.nickname }}</a>*/
/*       <span>发起了{{ dict_text('threadType', thread.type) }}</span>*/
/*       {% if thread.postNum > 0 %}*/
/*         {% set poster = users[thread.lastPostUserId] %}*/
/*         •*/
/*         <span>最后回复 {{ web_macro.user_link(poster, 'link-muted') }}</span>*/
/*       {% endif %}*/
/*       */
/*       • <span>{{ thread.lastPostTime|smart_time }}</span>*/
/*     </div>*/
/*   </div>*/
/*   <div class="media-data hidden-xs">*/
/*     <span>{{ thread.postNum }}<br>回复</span>*/
/*     <span>{{ thread.hitNum }}<br>浏览</span>*/
/*   </div>*/
/* </div>*/
