<?php

/* TopxiaWebBundle:CommentWidget:init.html.twig */
class __TwigTemplate_816692a825d5accd3bba3dfc5f62f543c1df77b60b27f72f91cc73e03e0eae5b extends Twig_Template
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
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
            // line 2
            echo "<div class=\"media\">
  <a class=\"pull-left\" href=\"javascript:\">
    <img class=\"media-object media-object-small\" src=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "smallAvatar", array()), "avatar.png"), "html", null, true);
            echo "\">
  </a>
  <div class=\"media-body\">
    <form class=\"comment-widget-form\" action=\"";
            // line 7
            echo $this->env->getExtension('routing')->getPath("comment_widget_create");
            echo "\" method=\"post\">
      <div>";
            // line 8
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "content", array()), 'widget', array("attr" => array("class" => "mbm", "style" => "width:100%")));
            echo "</div>
      <button class=\"btn btn-primary mbl comment-widget-create-btn\" type=\"submit\">发表</button>
      ";
            // line 10
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
            echo "
      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
            echo "\">
    </form>
  </div>
</div>
";
        } else {
            // line 16
            echo "  <p class=\"alert text-muted\">您尚未登录，不能评论，请先 <a href=\"";
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\">登录</a> 或 <a href=\"";
            echo $this->env->getExtension('routing')->getPath("register");
            echo "\">注册</a> 。</p>
";
        }
        // line 18
        echo "
<ul class=\"media-list comment-list\">
  ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["comments"]) ? $context["comments"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 21
            echo "    ";
            $context["user"] = $this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["comment"], "userId", array()), array(), "array");
            // line 22
            echo "    ";
            $this->loadTemplate("TopxiaWebBundle:CommentWidget:item.html.twig", "TopxiaWebBundle:CommentWidget:init.html.twig", 22)->display($context);
            // line 23
            echo "  ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "</ul>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CommentWidget:init.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 24,  87 => 23,  84 => 22,  81 => 21,  64 => 20,  60 => 18,  52 => 16,  44 => 11,  40 => 10,  35 => 8,  31 => 7,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if app.user %}*/
/* <div class="media">*/
/*   <a class="pull-left" href="javascript:">*/
/*     <img class="media-object media-object-small" src="{{ filepath(app.user.smallAvatar, 'avatar.png') }}">*/
/*   </a>*/
/*   <div class="media-body">*/
/*     <form class="comment-widget-form" action="{{ path('comment_widget_create') }}" method="post">*/
/*       <div>{{ form_widget(form.content, {attr:{class:'mbm', style:'width:100%'}}) }}</div>*/
/*       <button class="btn btn-primary mbl comment-widget-create-btn" type="submit">发表</button>*/
/*       {{ form_rest(form) }}*/
/*       <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*     </form>*/
/*   </div>*/
/* </div>*/
/* {% else %}*/
/*   <p class="alert text-muted">您尚未登录，不能评论，请先 <a href="{{ path('login') }}">登录</a> 或 <a href="{{ path('register') }}">注册</a> 。</p>*/
/* {% endif %}*/
/* */
/* <ul class="media-list comment-list">*/
/*   {% for comment in comments %}*/
/*     {% set user = users[comment.userId] %}*/
/*     {% include 'TopxiaWebBundle:CommentWidget:item.html.twig' %}*/
/*   {% endfor %}*/
/* </ul>*/
