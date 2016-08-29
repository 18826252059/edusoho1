<?php

/* TopxiaWebBundle:Thread:post-interaction.html.twig */
class __TwigTemplate_14fd9c187379c2f1b0973880f2b4de423c868293b579655f6f9a2a6dc2c1ede9 extends Twig_Template
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
        echo "<div class=\"thread-post-interaction\">
  <a href=\"javascript:;\" class=\"js-post-up interaction text-muted\"
    data-url=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("thread_post_up", array("threadId" => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "threadId", array()), "postId" => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()))), "html", null, true);
        echo "\">
    <span class=\"glyphicon glyphicon-thumbs-up\"></span> (<span class=\"post-up-num\">";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "ups", array()), "html", null, true);
        echo "</span>)
  </a>
  <a href=\"javascript:;\" class=\"js-reply interaction text-muted\"><span class=\"glyphicon glyphicon-comment hide\"></span>
    回复
    ";
        // line 8
        if ( !$this->getAttribute((isset($context["post"]) ? $context["post"] : null), "parentId", array())) {
            // line 9
            echo "      <span class=\"subposts-num-wrap ";
            if ( !$this->getAttribute((isset($context["post"]) ? $context["post"] : null), "subposts", array())) {
                echo "hide";
            }
            echo "\">(<span class=\"subposts-num\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "subposts", array()), "html", null, true);
            echo "</span>)</span>
    ";
        }
        // line 11
        echo "  </a>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Thread:post-interaction.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 11,  36 => 9,  34 => 8,  27 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div class="thread-post-interaction">*/
/*   <a href="javascript:;" class="js-post-up interaction text-muted"*/
/*     data-url="{{ path('thread_post_up', {threadId:post.threadId, postId: post.id}) }}">*/
/*     <span class="glyphicon glyphicon-thumbs-up"></span> (<span class="post-up-num">{{ post.ups }}</span>)*/
/*   </a>*/
/*   <a href="javascript:;" class="js-reply interaction text-muted"><span class="glyphicon glyphicon-comment hide"></span>*/
/*     回复*/
/*     {% if not post.parentId %}*/
/*       <span class="subposts-num-wrap {% if not post.subposts %}hide{% endif %}">(<span class="subposts-num">{{ post.subposts }}</span>)</span>*/
/*     {% endif %}*/
/*   </a>*/
/* </div>*/
