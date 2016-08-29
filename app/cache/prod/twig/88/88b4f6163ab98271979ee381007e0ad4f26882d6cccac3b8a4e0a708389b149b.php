<?php

/* TopxiaWebBundle:User:header-block.html.twig */
class __TwigTemplate_950d3baccc9dbfe2955ffde58d8016614bc96f3f0a69d3b4e902fe434c2a5612 extends Twig_Template
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
        echo "<div class=\"user-center-header\" data-href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "largeAvatar", array()), "avatar.png"), "html", null, true);
        echo "\" data-sharpness=\"40\">
  <div class=\"container clearfix\">
    <div class=\"user-avatar\">
      <div class=\"avatar-wrap\">
        <img class=\"avatar-lg\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "largeAvatar", array()), "avatar.png"), "html", null, true);
        echo "\">
        ";
        // line 6
        if (twig_in_filter("ROLE_TEACHER", $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "roles", array()))) {
            // line 7
            echo "          <span class=\"icon-user-status icon-md\"><i class=\"es-icon es-icon-school\"></i></span>
        ";
        }
        // line 9
        echo "      </div>
      <div class=\"name\">
        ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nickname", array()), "html", null, true);
        echo "
      </div>
      <div class=\"position\">
        <span class=\"mrm\">";
        // line 14
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "title", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "title", array()), "html", null, true);
        } else {
            echo "暂无头衔";
        }
        echo "</span>
        ";
        // line 15
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "weibo", array())) {
            // line 16
            echo "          <a  href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "weibo", array()), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"es-icon es-icon-weibo\"></i></a>
        ";
        }
        // line 18
        echo "        ";
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "site", array())) {
            // line 19
            echo "          <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "site", array()), "html", null, true);
            echo "\" target=\"_blank\"><i class=\"es-icon es-icon-link\"></i></a>
        ";
        }
        // line 21
        echo "        ";
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "qq", array())) {
            // line 22
            echo "          <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "qq", array()), "html", null, true);
            echo "\"><i class=\"es-icon es-icon-qq\"></i></a>
        ";
        }
        // line 24
        echo "        ";
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "weixin", array())) {
            // line 25
            echo "          <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "weixin", array()), "html", null, true);
            echo "\"><i class=\"es-icon es-icon-weixin\"></i></a>
        ";
        }
        // line 27
        echo "      </div>
      <div class=\"mates\">
        <span class=\"mrm\">";
        // line 29
        echo twig_escape_filter($this->env, ((array_key_exists("follower", $context)) ? (_twig_default_filter((isset($context["follower"]) ? $context["follower"] : null), 0)) : (0)), "html", null, true);
        echo "</span>粉丝<span class=\"mlm mrm\">｜</span><span class=\"mrm\">";
        echo twig_escape_filter($this->env, ((array_key_exists("following", $context)) ? (_twig_default_filter((isset($context["following"]) ? $context["following"] : null), 0)) : (0)), "html", null, true);
        echo "</span>关注
      </div>
      ";
        // line 31
        if (( !$this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()) || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()) != $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array())))) {
            // line 32
            echo "        <div class=\"actions\">
          <a class=\"btn btn-primary follow-btn mrl\" href=\"javascript:;\" data-url=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_follow", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
            echo "\" ";
            if ((isset($context["isFollowed"]) ? $context["isFollowed"] : null)) {
                echo " style=\"display:none;\"";
            }
            echo ">关注</a>
          <a class=\"btn btn-default unfollow-btn mrl\" href=\"javascript:;\" data-url=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_unfollow", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
            echo "\" ";
            if ( !(isset($context["isFollowed"]) ? $context["isFollowed"] : null)) {
                echo " style=\"display:none;\" ";
            }
            echo ">已关注</a>
          <button class=\"btn btn-ghost-white\" data-toggle=\"modal\" data-backdrop=\"static\" data-target=\"#modal\" data-url=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("message_create", array("toId" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
            echo "\">私信</button>
        </div>
      ";
        }
        // line 38
        echo "    </div>
    <div class=\"user-about hidden-sm hidden-xs\">
      <div class=\"user-about-content\">
        ";
        // line 41
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "signature", array())) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "signature", array()), "html", null, true);
        } else {
            echo "暂无签名";
        }
        // line 42
        echo "      </div>
    </div>
  </div>
  <div class=\"mask\"></div>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:User:header-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 42,  133 => 41,  128 => 38,  122 => 35,  114 => 34,  106 => 33,  103 => 32,  101 => 31,  94 => 29,  90 => 27,  84 => 25,  81 => 24,  75 => 22,  72 => 21,  66 => 19,  63 => 18,  57 => 16,  55 => 15,  47 => 14,  41 => 11,  37 => 9,  33 => 7,  31 => 6,  27 => 5,  19 => 1,);
    }
}
/* <div class="user-center-header" data-href="{{ filepath(user.largeAvatar, 'avatar.png') }}" data-sharpness="40">*/
/*   <div class="container clearfix">*/
/*     <div class="user-avatar">*/
/*       <div class="avatar-wrap">*/
/*         <img class="avatar-lg" src="{{ filepath(user.largeAvatar, 'avatar.png') }}">*/
/*         {% if 'ROLE_TEACHER' in user.roles %}*/
/*           <span class="icon-user-status icon-md"><i class="es-icon es-icon-school"></i></span>*/
/*         {% endif %}*/
/*       </div>*/
/*       <div class="name">*/
/*         {{user.nickname}}*/
/*       </div>*/
/*       <div class="position">*/
/*         <span class="mrm">{% if user.title %}{{ user.title }}{% else %}暂无头衔{% endif %}</span>*/
/*         {% if user.weibo %}*/
/*           <a  href="{{ user.weibo }}" target="_blank"><i class="es-icon es-icon-weibo"></i></a>*/
/*         {% endif %}*/
/*         {% if user.site %}*/
/*           <a href="{{ user.site }}" target="_blank"><i class="es-icon es-icon-link"></i></a>*/
/*         {% endif %}*/
/*         {% if user.qq %}*/
/*           <a data-toggle="tooltip" data-placement="top" title="{{ user.qq }}"><i class="es-icon es-icon-qq"></i></a>*/
/*         {% endif %}*/
/*         {% if user.weixin %}*/
/*           <a data-toggle="tooltip" data-placement="top" title="{{ user.weixin }}"><i class="es-icon es-icon-weixin"></i></a>*/
/*         {% endif %}*/
/*       </div>*/
/*       <div class="mates">*/
/*         <span class="mrm">{{follower|default(0)}}</span>粉丝<span class="mlm mrm">｜</span><span class="mrm">{{following|default(0)}}</span>关注*/
/*       </div>*/
/*       {% if (not app.user) or (app.user.id != user.id) %}*/
/*         <div class="actions">*/
/*           <a class="btn btn-primary follow-btn mrl" href="javascript:;" data-url="{{ path('user_follow', {id:user.id}) }}" {% if isFollowed %} style="display:none;"{% endif %}>关注</a>*/
/*           <a class="btn btn-default unfollow-btn mrl" href="javascript:;" data-url="{{ path('user_unfollow', {id:user.id}) }}" {% if not isFollowed %} style="display:none;" {% endif %}>已关注</a>*/
/*           <button class="btn btn-ghost-white" data-toggle="modal" data-backdrop="static" data-target="#modal" data-url="{{path('message_create', {toId:user.id})}}">私信</button>*/
/*         </div>*/
/*       {% endif %}*/
/*     </div>*/
/*     <div class="user-about hidden-sm hidden-xs">*/
/*       <div class="user-about-content">*/
/*         {% if user.signature %}{{ user.signature}}{% else %}暂无签名{% endif %}*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   <div class="mask"></div>*/
/* </div>*/
