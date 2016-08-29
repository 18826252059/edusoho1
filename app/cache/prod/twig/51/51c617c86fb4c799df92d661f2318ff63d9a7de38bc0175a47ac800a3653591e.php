<?php

/* TopxiaWebBundle:Article/Part:detail-post-list.html.twig */
class __TwigTemplate_cc6686219a9534815622304478ec5b0b576d2ca4334c8e5bac501c8a18b0aad2 extends Twig_Template
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
        echo "<ul class=\"comment-list thread-pripost-list\">
  ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
        $context['_iterated'] = false;
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
            // line 3
            echo "    ";
            $context["author"] = $this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["post"], "userId", array()), array(), "array");
            // line 4
            echo "    ";
            $context["postReplyUrl"] = $this->env->getExtension('routing')->getPath("article_post_reply", array("articleId" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id", array()), "postId" => $this->getAttribute($context["post"], "id", array())));
            // line 5
            echo "    ";
            $this->loadTemplate("TopxiaWebBundle:Thread/Part:post-item.html.twig", "TopxiaWebBundle:Article/Part:detail-post-list.html.twig", 5)->display($context);
            // line 6
            echo "  ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 7
            echo "    <li class=\"empty\">还没有人评论，欢迎说说您的想法！</li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "</ul>

<nav class=\"text-center\">
  ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
</nav>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Article/Part:detail-post-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 12,  69 => 9,  62 => 7,  49 => 6,  46 => 5,  43 => 4,  40 => 3,  22 => 2,  19 => 1,);
    }
}
/* <ul class="comment-list thread-pripost-list">*/
/*   {% for post in posts %}*/
/*     {% set author = users[post.userId] %}*/
/*     {% set postReplyUrl = path('article_post_reply', {articleId:article.id, postId:post.id}) %}*/
/*     {% include 'TopxiaWebBundle:Thread/Part:post-item.html.twig' %}*/
/*   {% else %}*/
/*     <li class="empty">还没有人评论，欢迎说说您的想法！</li>*/
/*   {% endfor %}*/
/* </ul>*/
/* */
/* <nav class="text-center">*/
/*   {{ web_macro.paginator(paginator) }}*/
/* </nav>*/
