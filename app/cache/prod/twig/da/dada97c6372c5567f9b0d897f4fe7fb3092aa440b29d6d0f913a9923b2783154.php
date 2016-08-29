<?php

/* TopxiaWebBundle:Notification/Widget:item-article.post_create.html.twig */
class __TwigTemplate_50f89a84221965f26fd8a4c6bd345f6761bf25fbd89b3f081e43f405227c2d84 extends Twig_Template
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
        echo "</a> 的回复了你。
<blockquote>
  ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : null), "content", array()), "html", null, true);
        echo "
</blockquote>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Notification/Widget:item-article.post_create.html.twig";
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
/* <a href="{{ path('user_show', {id:data.user.id}) }}" target="_blank">{{ data.user.nickname }}</a> 在资讯 <a href="{{ path('article_post_jump', {articleId:data.post.targetId, postId:data.id}) }}" target="_blank">{{ article.title }}</a> 的回复了你。*/
/* <blockquote>*/
/*   {{ data.content }}*/
/* </blockquote>*/
