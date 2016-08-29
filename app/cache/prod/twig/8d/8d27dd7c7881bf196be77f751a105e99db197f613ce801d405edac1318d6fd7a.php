<?php

/* TopxiaWebBundle:Thread:subpost-item.html.twig */
class __TwigTemplate_ac119562999d2bdd2b86724d9296dd676cf0b49745305f68713883db293be69e extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Thread:subpost-item.html.twig", 1);
        // line 2
        echo "<li id=\"post-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "id", array()), "html", null, true);
        echo "\" data-user-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["author"]) ? $context["author"] : null), "id", array()), "html", null, true);
        echo "\" class=\"thread-post thread-subpost media user-id-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["author"]) ? $context["author"] : null), "id", array()), "html", null, true);
        echo " ";
        if ((((array_key_exists("less", $context)) ? (_twig_default_filter((isset($context["less"]) ? $context["less"] : null), false)) : (false)) && ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "index", array()) > 5))) {
            echo "hide";
        }
        echo "\"
  data-author-name=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["author"]) ? $context["author"] : null), "nickname", array()), "html", null, true);
        echo "\">
  <div class=\"media-left\">
    ";
        // line 5
        echo $context["web_macro"]->getuser_avatar((isset($context["author"]) ? $context["author"] : null), "user-avatar", "avatar-sm", true);
        echo "
  </div>
  <div class=\"media-body\">
    <div class=\"metas\">
      ";
        // line 9
        $this->loadTemplate("TopxiaWebBundle:Thread:post-manage-menu.html.twig", "TopxiaWebBundle:Thread:subpost-item.html.twig", 9)->display($context);
        // line 10
        echo "      <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["author"]) ? $context["author"] : null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["author"]) ? $context["author"] : null), "nickname", array()), "html", null, true);
        echo "</a>
      <span class=\"bullet\">•</span>
      <span class=\"text-muted\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->smarttimeFilter($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "createdTime", array())), "html", null, true);
        echo " </span>
    </div>
    <div class=\"editor-text\">";
        // line 14
        echo $this->env->getExtension('topxia_web_twig')->atFilter($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "content", array()), $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "ats", array()));
        echo "</div>
    ";
        // line 15
        $this->loadTemplate("TopxiaWebBundle:Thread:post-interaction.html.twig", "TopxiaWebBundle:Thread:subpost-item.html.twig", 15)->display($context);
        // line 16
        echo "  </div>
</li>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Thread:subpost-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 16,  65 => 15,  61 => 14,  56 => 12,  48 => 10,  46 => 9,  39 => 5,  34 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% import "TopxiaWebBundle::macro.html.twig" as web_macro %}*/
/* <li id="post-{{ post.id }}" data-user-id="{{ author.id }}" class="thread-post thread-subpost media user-id-{{author.id}} {% if less|default(false) and loop.index > 5 %}hide{% endif %}"*/
/*   data-author-name="{{ author.nickname }}">*/
/*   <div class="media-left">*/
/*     {{ web_macro.user_avatar(author, 'user-avatar', 'avatar-sm', true) }}*/
/*   </div>*/
/*   <div class="media-body">*/
/*     <div class="metas">*/
/*       {% include 'TopxiaWebBundle:Thread:post-manage-menu.html.twig' %}*/
/*       <a href="{{ path('user_show', {id:author.id}) }}">{{ author.nickname }}</a>*/
/*       <span class="bullet">•</span>*/
/*       <span class="text-muted">{{post.createdTime|smart_time}} </span>*/
/*     </div>*/
/*     <div class="editor-text">{{ post.content|at(post.ats)|raw }}</div>*/
/*     {% include 'TopxiaWebBundle:Thread:post-interaction.html.twig' %}*/
/*   </div>*/
/* </li>*/
