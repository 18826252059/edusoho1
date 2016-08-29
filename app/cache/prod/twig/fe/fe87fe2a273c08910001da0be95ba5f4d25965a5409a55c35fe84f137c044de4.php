<?php

/* TopxiaWebBundle:User:card-show.html.twig */
class __TwigTemplate_735f2dd8d7c0b12c4c2ce4020cbabc7025ef759e4b9590112c323d6d52de0a5d extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:User:card-show.html.twig", 1);
        // line 2
        echo "
<div id=\"user-card-";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "html", null, true);
        echo "\" class=\"js-card-content\" data-user-id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "html", null, true);
        echo "\">
  <div class=\"card-header media-middle\">
    <div class=\"media\">
      <div class=\"media-left\">
        ";
        // line 7
        echo $context["web_macro"]->getuser_avatar((isset($context["user"]) ? $context["user"] : null), "", "avatar-md", false);
        echo "
        ";
        // line 8
        if (twig_in_filter("ROLE_TEACHER", $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "roles", array()))) {
            // line 9
            echo "          <span class=\"icon-user-status\"><i class=\"es-icon es-icon-school\"></i></span
        >
        ";
        } elseif ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("vip")) {
            // line 12
            echo "          ";
            $context["userVip"] = $this->env->getExtension('topxia_web_twig')->getUserVipLevel($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()));
            // line 13
            echo "            ";
            if ((((isset($context["userVip"]) ? $context["userVip"] : null) && (isset($context["levels"]) ? $context["levels"] : null)) && (twig_date_format_filter($this->env, $this->getAttribute((isset($context["userVip"]) ? $context["userVip"] : null), "deadline", array()), "Y-m-d") > twig_date_format_filter($this->env, (isset($context["nowTime"]) ? $context["nowTime"] : null), "Y-m-d")))) {
                // line 14
                echo "              <span class=\"icon-user-status\"><img src=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["levels"]) ? $context["levels"] : null), $this->getAttribute((isset($context["userVip"]) ? $context["userVip"] : null), "levelId", array()), array(), "array", false, true), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["levels"]) ? $context["levels"] : null), $this->getAttribute((isset($context["userVip"]) ? $context["userVip"] : null), "levelId", array()), array(), "array", false, true), "icon", array()), $this->env->getExtension('assets')->getAssetUrl("assets/v2/img/vip/vip_bronze.jpg"))) : ($this->env->getExtension('assets')->getAssetUrl("assets/v2/img/vip/vip_bronze.jpg"))), "html", null, true);
                echo "\" alt=\"\"></span>
            ";
            }
            // line 16
            echo "          ";
        }
        // line 17
        echo "      </div>
      <div class=\"media-body\">
        <div class=\"title\">
          ";
        // line 20
        echo $context["web_macro"]->getuser_link((isset($context["user"]) ? $context["user"] : null), "", false);
        echo "
        </div>
        <div class=\"content\">
          ";
        // line 23
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "title", array())) {
            // line 24
            echo "            ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "title", array()), "html", null, true);
            echo "
          ";
        }
        // line 26
        echo "        </div>
      </div>
    </div>
    ";
        // line 29
        if (( !$this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()) != $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array())))) {
            // line 30
            echo "      <div class=\"metas\">
        <a class=\"btn btn-primary btn-xs follow-btn\" href=\"javascript:;\" data-url=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_follow", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
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
        <a class=\"btn btn-default btn-xs unfollow-btn\" href=\"javascript:;\"  data-url=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_unfollow", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
            echo "\" ";
            if ( !(isset($context["isFollowed"]) ? $context["isFollowed"] : null)) {
                echo "style=\"display:none;\"";
            }
            echo ">已关注</a>
        <a class=\"btn btn-default btn-xs direct-message-btn\" herf=\"javascript:;\" data-toggle=\"modal\" data-backdrop=\"static\" data-target=\"#modal\" data-url=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("message_create", array("toId" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
            echo "\">私信</a>
      </div>
    ";
        }
        // line 36
        echo "  </div>
  <div class=\"card-body\">
    ";
        // line 38
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "signature", array())) {
            // line 39
            echo "      ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "signature", array()), "html", null, true);
            echo "
    ";
        } else {
            // line 41
            echo "      还没有签名
    ";
        }
        // line 43
        echo "  </div>
  <div class=\"card-footer clearfix\">
    <span><a class=\"link-light\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_learn", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "learningNum", array()), "html", null, true);
        echo "<br>在学</a></span>
    <span><a class=\"link-light\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_following", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "followingNum", array()), "html", null, true);
        echo "<br>关注</a></span>
    <span><a class=\"link-light\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_follower", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "followerNum", array()), "html", null, true);
        echo "<br>粉丝</a></span>
  </div>
    
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:User:card-show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 47,  142 => 46,  136 => 45,  132 => 43,  128 => 41,  122 => 39,  120 => 38,  116 => 36,  110 => 33,  102 => 32,  88 => 31,  85 => 30,  83 => 29,  78 => 26,  72 => 24,  70 => 23,  64 => 20,  59 => 17,  56 => 16,  50 => 14,  47 => 13,  44 => 12,  39 => 9,  37 => 8,  33 => 7,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% import "TopxiaWebBundle::macro.html.twig" as web_macro %}*/
/* */
/* <div id="user-card-{{ user.id }}" class="js-card-content" data-user-id="{{ user.id }}">*/
/*   <div class="card-header media-middle">*/
/*     <div class="media">*/
/*       <div class="media-left">*/
/*         {{ web_macro.user_avatar(user, '', 'avatar-md', false) }}*/
/*         {% if 'ROLE_TEACHER' in user.roles %}*/
/*           <span class="icon-user-status"><i class="es-icon es-icon-school"></i></span*/
/*         >*/
/*         {% elseif is_plugin_installed('vip') %}*/
/*           {% set userVip = get_user_vip_level(user.id) %}*/
/*             {% if userVip and levels and userVip.deadline|date('Y-m-d') > nowTime|date('Y-m-d')%}*/
/*               <span class="icon-user-status"><img src="{{levels[userVip.levelId].icon|default(asset('assets/v2/img/vip/vip_bronze.jpg'))}}" alt=""></span>*/
/*             {% endif %}*/
/*           {% endif %}*/
/*       </div>*/
/*       <div class="media-body">*/
/*         <div class="title">*/
/*           {{ web_macro.user_link(user, '', false) }}*/
/*         </div>*/
/*         <div class="content">*/
/*           {% if user.title %}*/
/*             {{ user.title }}*/
/*           {% endif %}*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*     {% if not app.user or (app.user.id != user.id) %}*/
/*       <div class="metas">*/
/*         <a class="btn btn-primary btn-xs follow-btn" href="javascript:;" data-url="{{ path('user_follow', {id:user.id}) }}" {% if isFollowed %} style="display:none;"{% endif %} data-loggedin={% if app.user and app.user.isLogin() %}"1"{% else %}"0"{% endif %}>关注</a> */
/*         <a class="btn btn-default btn-xs unfollow-btn" href="javascript:;"  data-url="{{ path('user_unfollow', {id:user.id}) }}" {% if not isFollowed %}style="display:none;"{% endif %}>已关注</a>*/
/*         <a class="btn btn-default btn-xs direct-message-btn" herf="javascript:;" data-toggle="modal" data-backdrop="static" data-target="#modal" data-url="{{path('message_create', {toId:user.id})}}">私信</a>*/
/*       </div>*/
/*     {% endif %}*/
/*   </div>*/
/*   <div class="card-body">*/
/*     {% if profile.signature %}*/
/*       {{ profile.signature }}*/
/*     {% else %}*/
/*       还没有签名*/
/*     {% endif %}*/
/*   </div>*/
/*   <div class="card-footer clearfix">*/
/*     <span><a class="link-light" href="{{ path('user_learn',{id:user.id}) }}">{{ user.learningNum }}<br>在学</a></span>*/
/*     <span><a class="link-light" href="{{ path('user_following',{id:user.id}) }}">{{ user.followingNum }}<br>关注</a></span>*/
/*     <span><a class="link-light" href="{{ path('user_follower',{id:user.id}) }}">{{ user.followerNum }}<br>粉丝</a></span>*/
/*   </div>*/
/*     */
/* </div>*/
/* */
/* */
