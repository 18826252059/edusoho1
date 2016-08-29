<?php

/* TopxiaWebBundle:Notification/Widget:item-article.post_at.html.twig */
class __TwigTemplate_9e716b571039a6033294fa89165f00b2be9f4bcc9a2edd150a0a656dab6c7593 extends Twig_Template
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
        $context["article"] = $this->env->getExtension('topxia_data_twig')->getData("Article", array("id" => $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "post", array()), "targetId", array())));
        // line 2
        echo "<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "user", array()), "id", array()))), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "user", array()), "nickname", array()), "html", null, true);
        echo "</a> 在资讯 <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_post_jump", array("articleId" => $this->getAttribute($this->getAttribute((isset($context["data"]) ? $context["data"] : null), "post", array()), "targetId", array()), "postId" => $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "id", array()))), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "title", array()), "html", null, true);
        echo "</a> 的回复中提到了你。
<blockquote>
  ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "content", array()), "html", null, true);
        echo "
</blockquote>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Notification/Widget:item-article.post_at.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% set article = data('Article', {id:data.post.targetId})%}*/
/* <a href="{{ path('user_show', {id:data.user.id}) }}" target="_blank">{{ data.user.nickname }}</a> 在资讯 <a href="{{ path('article_post_jump', {articleId:data.post.targetId, postId:data.id}) }}" target="_blank">{{ article.title }}</a> 的回复中提到了你。*/
/* <blockquote>*/
/*   {{ data.content }}*/
/* </blockquote>*/
