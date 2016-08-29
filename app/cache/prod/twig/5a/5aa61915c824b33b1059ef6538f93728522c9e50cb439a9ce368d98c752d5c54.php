<?php

/* TopxiaWebBundle:Thread/Part:all-post.html.twig */
class __TwigTemplate_661425a475a5d2134398a2971d9e9e0c531c2bc17e947724d7c39788853db73c extends Twig_Template
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
        echo " <div class=\"top-reply ";
        if ( !_twig_default_filter(twig_length_filter($this->env, (isset($context["posts"]) ? $context["posts"] : null)), 0)) {
            echo "hidden";
        }
        echo "\">
  <div class=\"js-all-post-head page-header\">
    所有回复
  </div>
  <ul class=\"comment-list thread-pripost-list\">
    ";
        // line 6
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
            // line 7
            echo "      ";
            $context["author"] = $this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["post"], "userId", array()), array(), "array");
            // line 8
            echo "      ";
            $this->loadTemplate("TopxiaWebBundle:Thread/Part:post-item.html.twig", "TopxiaWebBundle:Thread/Part:all-post.html.twig", 8)->display($context);
            // line 9
            echo "    ";
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
            // line 10
            echo "      <li class=\"empty\">一个回复都没有！</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "  </ul>

  <nav class=\"text-center\">
    ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
  </nav>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Thread/Part:all-post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 15,  74 => 12,  67 => 10,  54 => 9,  51 => 8,  48 => 7,  30 => 6,  19 => 1,);
    }
}
/*  <div class="top-reply {% if not posts|length|default(0) %}hidden{% endif %}">*/
/*   <div class="js-all-post-head page-header">*/
/*     所有回复*/
/*   </div>*/
/*   <ul class="comment-list thread-pripost-list">*/
/*     {% for post in posts %}*/
/*       {% set author = users[post.userId] %}*/
/*       {% include 'TopxiaWebBundle:Thread/Part:post-item.html.twig' %}*/
/*     {% else %}*/
/*       <li class="empty">一个回复都没有！</li>*/
/*     {% endfor %}*/
/*   </ul>*/
/* */
/*   <nav class="text-center">*/
/*     {{ web_macro.paginator(paginator) }}*/
/*   </nav>*/
/* </div>*/
