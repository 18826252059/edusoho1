<?php

/* TopxiaWebBundle:Article/Widget:sidebar.html.twig */
class __TwigTemplate_7e5b5542643c7f24047c5bb92866ea2087cdac5a8ce89205ba7aed960883b219 extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Article/Widget:sidebar.html.twig", 1);
        // line 2
        echo "  <!-- 热门资讯 -->
    ";
        // line 3
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Article:popularArticlesBlock"));
        echo "
  <!-- 热门标签 -->
  
  ";
        // line 6
        $this->loadTemplate("TopxiaWebBundle:Article/Widget:tag-sidebar.html.twig", "TopxiaWebBundle:Article/Widget:sidebar.html.twig", 6)->display($context);
        // line 7
        echo "  
  <!-- 热门评论 -->
  <div class=\"panel panel-default hot-comments\">
    <div class=\"panel-heading\">
      <h3 class=\"panel-title\">
        <i class=\"es-icon es-icon-textsms\"></i>热门评论
      </h3>
    </div>
    <div class=\"panel-body\">

    ";
        // line 17
        $context["posts"] = $this->env->getExtension('topxia_data_twig')->getData("PopularArticlePosts", array("count" => 10));
        // line 18
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 19
            echo "      <div class=\"media media-hot-comment\">
        <div class=\"media-body\">
          <div class=\"pull-left\">
            ";
            // line 22
            echo $context["web_macro"]->getuser_avatar($this->getAttribute($context["post"], "user", array()), "", "avatar-sm");
            echo "
          </div>
          <div class=\"comments-info\">
            ";
            // line 25
            echo $context["web_macro"]->getuser_link($this->getAttribute($context["post"], "user", array()), "");
            echo "
            <span class=\"mhs\">评论于</span>
            <a class=\"link-dark\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("article_detail", array("id" => $this->getAttribute($this->getAttribute($context["post"], "article", array()), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["post"], "article", array()), "title", array()), "html", null, true);
            echo "</a>
          </div>
          <div class=\"comments-content\">
           ";
            // line 30
            echo $this->env->getExtension('topxia_web_twig')->atFilter($this->getAttribute($context["post"], "content", array()), $this->getAttribute($context["post"], "ats", array()));
            echo "
          </div>
        </div>
      </div>
  ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 35
            echo "    <div class=\"empty\">一个评论都没有！</div>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
  </div>
</div>
<!-- 推荐资讯 -->
";
        // line 41
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Article:recommendArticlesBlock"));
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Article/Widget:sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 41,  93 => 37,  86 => 35,  76 => 30,  68 => 27,  63 => 25,  57 => 22,  52 => 19,  46 => 18,  44 => 17,  32 => 7,  30 => 6,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% import 'TopxiaWebBundle::macro.html.twig' as web_macro %}*/
/*   <!-- 热门资讯 -->*/
/*     {{ render(controller('TopxiaWebBundle:Article:popularArticlesBlock')) }}*/
/*   <!-- 热门标签 -->*/
/*   */
/*   {% include 'TopxiaWebBundle:Article/Widget:tag-sidebar.html.twig' %}*/
/*   */
/*   <!-- 热门评论 -->*/
/*   <div class="panel panel-default hot-comments">*/
/*     <div class="panel-heading">*/
/*       <h3 class="panel-title">*/
/*         <i class="es-icon es-icon-textsms"></i>热门评论*/
/*       </h3>*/
/*     </div>*/
/*     <div class="panel-body">*/
/* */
/*     {% set posts = data('PopularArticlePosts',{'count':10}) %}*/
/*     {% for post in posts %}*/
/*       <div class="media media-hot-comment">*/
/*         <div class="media-body">*/
/*           <div class="pull-left">*/
/*             {{ web_macro.user_avatar(post.user, '','avatar-sm') }}*/
/*           </div>*/
/*           <div class="comments-info">*/
/*             {{ web_macro.user_link(post.user, '') }}*/
/*             <span class="mhs">评论于</span>*/
/*             <a class="link-dark" href="{{ path('article_detail', { id:post.article.id }) }}">{{ post.article.title }}</a>*/
/*           </div>*/
/*           <div class="comments-content">*/
/*            {{ post.content|at(post.ats)|raw }}*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*   {% else %}*/
/*     <div class="empty">一个评论都没有！</div>*/
/*   {% endfor %}*/
/* */
/*   </div>*/
/* </div>*/
/* <!-- 推荐资讯 -->*/
/* {{ render(controller('TopxiaWebBundle:Article:recommendArticlesBlock')) }}*/
