<?php

/* TopxiaWebBundle:Thread/Part:common-header.html.twig */
class __TwigTemplate_290596e434588910f1ff32af6647f934707f5810f121bc01273580d5468f3ef9 extends Twig_Template
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
        echo "<div class=\"media topic-header\">
  <div class=\"media-left media-middle\">
    ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "user_avatar", array(0 => (isset($context["author"]) ? $context["author"] : null), 1 => "", 2 => "avatar-sm"), "method"), "html", null, true);
        echo "
  </div>
  <div class=\"media-body\">
    <div class=\"title\">
      ";
        // line 7
        if ($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "sticky", array())) {
            // line 8
            echo "        <span class=\"label label-danger\" title=\"置顶帖\">置顶</span>
      ";
        }
        // line 10
        echo "      ";
        if ($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "nice", array())) {
            // line 11
            echo "        <span class=\"label label-warning\" title=\"精华帖\">精</span>
      ";
        }
        // line 13
        echo "      ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "title", array()), "html", null, true);
        echo "
    </div>
    <div class=\"metas\">
      <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["author"]) ? $context["author"] : null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["author"]) ? $context["author"] : null), "nickname", array()), "html", null, true);
        echo "</a>发起了该";
        echo $this->env->getExtension('topxia_web_twig')->getDictText("threadType", $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "type", array()));
        echo " ·<span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->smarttimeFilter($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "createdTime", array())), "html", null, true);
        echo "</span>
    </div> 
  </div>
  <div class=\"media-data\">
    <span><span class=\"thread-post-num\">";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "postNum", array()), "html", null, true);
        echo "</span><br>回复</span>
    <span>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "hitNum", array()), "html", null, true);
        echo "<br>浏览</span>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Thread/Part:common-header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 21,  63 => 20,  50 => 16,  43 => 13,  39 => 11,  36 => 10,  32 => 8,  30 => 7,  23 => 3,  19 => 1,);
    }
}
/* <div class="media topic-header">*/
/*   <div class="media-left media-middle">*/
/*     {{ web_macro.user_avatar(author, '', 'avatar-sm')}}*/
/*   </div>*/
/*   <div class="media-body">*/
/*     <div class="title">*/
/*       {% if thread.sticky %}*/
/*         <span class="label label-danger" title="置顶帖">置顶</span>*/
/*       {% endif %}*/
/*       {% if thread.nice %}*/
/*         <span class="label label-warning" title="精华帖">精</span>*/
/*       {% endif %}*/
/*       {{ thread.title }}*/
/*     </div>*/
/*     <div class="metas">*/
/*       <a href="{{ path('user_show', {id:author.id}) }}">{{ author.nickname }}</a>发起了该{{ dict_text('threadType', thread.type) }} ·<span>{{ thread.createdTime|smart_time }}</span>*/
/*     </div> */
/*   </div>*/
/*   <div class="media-data">*/
/*     <span><span class="thread-post-num">{{ thread.postNum }}</span><br>回复</span>*/
/*     <span>{{ thread.hitNum }}<br>浏览</span>*/
/*   </div>*/
/* </div>*/
