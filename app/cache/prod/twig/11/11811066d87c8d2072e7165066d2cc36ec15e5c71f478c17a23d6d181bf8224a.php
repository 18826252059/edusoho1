<?php

/* TopxiaWebBundle:User:friend.html.twig */
class __TwigTemplate_e91ff101d224113c0474bedd759b2a322fa6293f8e69edafc428fe248a5d2ccb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:User:layout.html.twig", "TopxiaWebBundle:User:friend.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:User:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["pageNav"] = "friend";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "

<ul class=\"nav nav-pills mbl\">
  <li ";
        // line 11
        if (((isset($context["friendNav"]) ? $context["friendNav"] : null) == "following")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_following", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "\">关注</a></li>
  <li ";
        // line 12
        if (((isset($context["friendNav"]) ? $context["friendNav"] : null) == "follower")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_follower", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "\">粉丝</a></li>
</ul>

<div class=\"row\">
  ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["friends"]) ? $context["friends"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["friend"]) {
            if ((isset($context["friends"]) ? $context["friends"] : null)) {
                // line 17
                echo "    ";
                $context["isFollowed"] = _twig_default_filter(twig_in_filter($this->getAttribute($context["friend"], "id", array()), (isset($context["myfollowings"]) ? $context["myfollowings"] : null)), false);
                // line 18
                echo "    <div class=\"col-md-3\">
      <div class=\"teacher-item\">
        <div class=\"teacher-top\">
          <a class=\"teacher-img\" href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($context["friend"], "id", array()))), "html", null, true);
                echo "\">
            <img class=\"avatar-lg\" src=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($context["friend"], "largeAvatar", array()), "avatar.png"), "html", null, true);
                echo "\" alt=\"\">
          </a>
          <h3 class=\"title\">
            <a class=\"link-dark\" href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($context["friend"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["friend"], "nickname", array()), "html", null, true);
                echo "</a>
          </h3>
          <div class=\"position\">
            ";
                // line 28
                if ($this->getAttribute($context["friend"], "title", array())) {
                    // line 29
                    echo "              ";
                    echo $this->env->getExtension('topxia_web_twig')->subTextFilter($this->getAttribute($context["friend"], "title", array()), 12);
                    echo "
            ";
                } else {
                    // line 31
                    echo "              暂无头衔
            ";
                }
                // line 33
                echo "          </div>
        </div>

        <div class=\"teacher-bottom\">
          <div class=\"about\">
            ";
                // line 38
                if ((($this->getAttribute((isset($context["allUserProfile"]) ? $context["allUserProfile"] : null), $this->getAttribute($context["friend"], "id", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["allUserProfile"]) ? $context["allUserProfile"] : null), $this->getAttribute($context["friend"], "id", array()), array(), "array"), "")) : (""))) {
                    // line 39
                    echo "              ";
                    echo $this->env->getExtension('topxia_web_twig')->subTextFilter($this->getAttribute($this->getAttribute((isset($context["allUserProfile"]) ? $context["allUserProfile"] : null), $this->getAttribute($context["friend"], "id", array()), array(), "array"), "about", array()), 30);
                    echo "
            ";
                }
                // line 41
                echo "          </div>
          <div class=\"metas\">
            ";
                // line 43
                if (( !$this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) || ($this->getAttribute($context["friend"], "id", array()) != $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array())))) {
                    // line 44
                    echo "              <a class=\"btn btn-primary btn-sm follow-btn\" href=\"javascript:;\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_follow", array("id" => $this->getAttribute($context["friend"], "id", array()))), "html", null, true);
                    echo "\" ";
                    if ((isset($context["isFollowed"]) ? $context["isFollowed"] : null)) {
                        echo " style=\"display:none;\"";
                    }
                    echo " data-loggedin=";
                    if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "isLogin", array(), "method"))) {
                        echo "\"1\"";
                    } else {
                        echo "\"0\"";
                    }
                    echo ">关注</a>
              <a class=\"btn btn-default btn-sm unfollow-btn\" href=\"javascript:;\" data-url=\"";
                    // line 45
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_unfollow", array("id" => $this->getAttribute($context["friend"], "id", array()))), "html", null, true);
                    echo "\" ";
                    if ( !(isset($context["isFollowed"]) ? $context["isFollowed"] : null)) {
                        echo " style=\"display:none;\" ";
                    }
                    echo ">已关注</a>
              <a class=\"btn btn-default btn-sm\" data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\"  data-url=\"";
                    // line 46
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("message_create", array("toId" => $this->getAttribute($context["friend"], "id", array()))), "html", null, true);
                    echo "\">私信</a>
            ";
                }
                // line 48
                echo "          </div>
        </div>
      </div>
    </div>
  ";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 53
            echo "    ";
            if (((isset($context["friendNav"]) ? $context["friendNav"] : null) == "following")) {
                // line 54
                echo "      <div class=\"empty\">无关注的人</div>
    ";
            } elseif ((            // line 55
(isset($context["friendNav"]) ? $context["friendNav"] : null) == "follower")) {
                // line 56
                echo "      <div class=\"empty\">无粉丝</div>
    ";
            }
            // line 58
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['friend'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "</div>
";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:User:friend.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 60,  186 => 59,  180 => 58,  176 => 56,  174 => 55,  171 => 54,  168 => 53,  158 => 48,  153 => 46,  145 => 45,  130 => 44,  128 => 43,  124 => 41,  118 => 39,  116 => 38,  109 => 33,  105 => 31,  99 => 29,  97 => 28,  89 => 25,  83 => 22,  79 => 21,  74 => 18,  71 => 17,  65 => 16,  54 => 12,  46 => 11,  41 => 8,  38 => 7,  32 => 3,  28 => 1,  26 => 5,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:User:layout.html.twig' %}*/
/* */
/* {% block title %}{{ parent() }}{% endblock %}*/
/* */
/* {% set pageNav = 'friend' %}*/
/* */
/* {% block main %}*/
/* */
/* */
/* <ul class="nav nav-pills mbl">*/
/*   <li {% if friendNav == 'following' %}class="active"{% endif %}><a href="{{ path('user_following', {id:user.id}) }}">关注</a></li>*/
/*   <li {% if friendNav == 'follower' %}class="active"{% endif %}><a href="{{ path('user_follower', {id:user.id}) }}">粉丝</a></li>*/
/* </ul>*/
/* */
/* <div class="row">*/
/*   {% for friend in friends if friends %}*/
/*     {% set isFollowed = (friend.id in myfollowings)|default(false) %}*/
/*     <div class="col-md-3">*/
/*       <div class="teacher-item">*/
/*         <div class="teacher-top">*/
/*           <a class="teacher-img" href="{{ path('user_show', {id:friend.id}) }}">*/
/*             <img class="avatar-lg" src="{{ filepath(friend.largeAvatar, 'avatar.png') }}" alt="">*/
/*           </a>*/
/*           <h3 class="title">*/
/*             <a class="link-dark" href="{{ path('user_show', {id:friend.id}) }}">{{ friend.nickname }}</a>*/
/*           </h3>*/
/*           <div class="position">*/
/*             {% if friend.title %}*/
/*               {{ friend.title|sub_text(12) }}*/
/*             {% else %}*/
/*               暂无头衔*/
/*             {% endif %}*/
/*           </div>*/
/*         </div>*/
/* */
/*         <div class="teacher-bottom">*/
/*           <div class="about">*/
/*             {% if allUserProfile[friend.id]|default('') %}*/
/*               {{ allUserProfile[friend.id].about|sub_text(30) }}*/
/*             {% endif %}*/
/*           </div>*/
/*           <div class="metas">*/
/*             {% if not app.user or (friend.id != app.user.id) %}*/
/*               <a class="btn btn-primary btn-sm follow-btn" href="javascript:;" data-url="{{ path('user_follow', {id:friend.id}) }}" {% if isFollowed %} style="display:none;"{% endif %} data-loggedin={% if app.user and app.user.isLogin() %}"1"{% else %}"0"{% endif %}>关注</a>*/
/*               <a class="btn btn-default btn-sm unfollow-btn" href="javascript:;" data-url="{{ path('user_unfollow', {id:friend.id}) }}" {% if not isFollowed %} style="display:none;" {% endif %}>已关注</a>*/
/*               <a class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal" data-backdrop="static"  data-url="{{path('message_create', {toId:friend.id})}}">私信</a>*/
/*             {% endif %}*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   {% else %}*/
/*     {% if friendNav == 'following' %}*/
/*       <div class="empty">无关注的人</div>*/
/*     {% elseif friendNav == 'follower' %}*/
/*       <div class="empty">无粉丝</div>*/
/*     {% endif %}*/
/*   {% endfor %}*/
/* </div>*/
/* {{ web_macro.paginator(paginator) }}*/
/* */
/* {% endblock %}*/
