<?php

/* TopxiaWebBundle:Default:header.html.twig */
class __TwigTemplate_6b4dd5f498f466125ab2b16351797d87bedb6eb653a64972f0b8b073654fe0d8 extends Twig_Template
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
        echo "<header class=\"es-header navbar\">
  <div class=\"navbar-header\">
    <div class=\"visible-xs  navbar-mobile\">
      <a href=\"javascript:;\" class=\"navbar-more js-navbar-more\">
        <i class=\"es-icon es-icon-menu\"></i>
      </a>
      <div class=\"html-mask\"></div>
      <div class=\"nav-mobile\">
        <form class=\"navbar-form\" action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("search");
        echo "\" method=\"get\">
          <div class=\"form-group\">
            <input class=\"form-control\" placeholder=\"搜索\" name=\"q\">
            <button class=\"button es-icon es-icon-search\"></button>
          </div>
        </form>
        <ul class=\"nav navbar-nav\">
          ";
        // line 16
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Default:topNavigation", array("siteNav" => ((array_key_exists("siteNav", $context)) ? (_twig_default_filter((isset($context["siteNav"]) ? $context["siteNav"] : null), null)) : (null)), "isMobile" => true)));
        echo "
        </ul>
      </div>
    </div>
    <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\" class=\"navbar-brand\">
      ";
        // line 21
        if ($this->env->getExtension('topxia_web_twig')->getSetting("site.logo")) {
            // line 22
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('topxia_web_twig')->getSetting("site.logo")), "html", null, true);
            echo "\">
      ";
        } else {
            // line 24
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.name", "EDUSOHO"), "html", null, true);
            echo "    
      ";
        }
        // line 26
        echo "    </a>
  </div>
  <nav class=\"collapse navbar-collapse\">
    <ul class=\"nav navbar-nav clearfix hidden-xs \" id=\"nav\">
      ";
        // line 30
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Default:topNavigation", array("siteNav" => ((array_key_exists("siteNav", $context)) ? (_twig_default_filter((isset($context["siteNav"]) ? $context["siteNav"] : null), null)) : (null)))));
        echo "
    </ul>
    <div class=\"navbar-user ";
        // line 32
        if ($this->env->getExtension('topxia_web_twig')->getSetting("esBar.enabled", 0)) {
            echo " left ";
        }
        echo "\">
      <ul class=\"nav user-nav\">
        ";
        // line 34
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
            // line 35
            echo "        <li class=\"user-avatar-li nav-hover\">
          <a class=\"dropdown-toggle\">
            <img class=\"avatar-xs\" src=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "smallAvatar", array()), "avatar.png"), "html", null, true);
            echo "\">
          </a>
          <ul class=\"dropdown-menu\" role=\"menu\">
            <li role=\"presentation\" class=\"dropdown-header\">";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "nickname", array()), "html", null, true);
            echo "</li>
            <li><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()))), "html", null, true);
            echo "\"><i class=\"es-icon es-icon-person\"></i>个人主页</a></li>
            <li><a href=\"";
            // line 42
            echo $this->env->getExtension('routing')->getPath("settings");
            echo "\"><i class=\"es-icon es-icon-setting\"></i>个人设置</a></li>
            <li class=\"hidden-lg\">
              <a href=\"";
            // line 44
            echo $this->env->getExtension('routing')->getPath("my");
            echo "\">
                <i class=\"es-icon es-icon-eventnote\"></i>";
            // line 45
            if (twig_in_filter("ROLE_TEACHER", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "roles", array()))) {
                echo "我的教学";
            } else {
                echo "我的学习";
            }
            // line 46
            echo "              </a>
            </li>
            <li><a href=\"";
            // line 48
            if ($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled")) {
                echo $this->env->getExtension('routing')->getPath("my_coin");
            } else {
                echo $this->env->getExtension('routing')->getPath("my_bill");
            }
            echo "\"><i class=\"es-icon es-icon-accountwallet\"></i>账户中心</a></li>
            ";
            // line 49
            if ($this->env->getExtension('security')->isGranted("ROLE_BACKEND")) {
                echo "<li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("admin");
                echo "\"><i class=\"es-icon es-icon-dashboard\"></i>管理后台</a></li>
            ";
            }
            // line 51
            echo "
            <li class=\"hidden-lg\"><a href=\"";
            // line 52
            echo $this->env->getExtension('routing')->getPath("notification");
            echo "\"><span class=\"pull-right num\">";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "newNotificationNum", array()) > 0)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "newNotificationNum", array()), "html", null, true);
            }
            echo "</span><i class=\"es-icon es-icon-notificationson\"></i>通知</a></li>
            <li class=\"hidden-lg\"><a href=\"";
            // line 53
            echo $this->env->getExtension('routing')->getPath("message");
            echo "\"><span class=\"pull-right num\">";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "newMessageNum", array()) > 0)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "newMessageNum", array()), "html", null, true);
            }
            echo "</span><i class=\"es-icon es-icon-mail\"></i>私信</a></li>
            <li><a href=\"";
            // line 54
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\"><i class=\"es-icon es-icon-power\"></i>退出登录</a></li>
          </ul>
        </li>
        <li class=\"visible-lg\">
          <a href=\"";
            // line 58
            echo $this->env->getExtension('routing')->getPath("my");
            echo "\">
            ";
            // line 59
            if (twig_in_filter("ROLE_TEACHER", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "roles", array()))) {
                // line 60
                echo "              我的教学
            ";
            } else {
                // line 61
                echo " 
              我的学习
            ";
            }
            // line 64
            echo "          </a>
        </li>
        <li class=\"visible-lg nav-hover\">

          ";
            // line 68
            if (($this->env->getExtension('topxia_web_twig')->getSetting("esBar.enabled", 0) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "newMessageNum", array()) > 0))) {
                // line 69
                echo "            <a class=\"hasmessage\"><i class=\"es-icon es-icon-mail\"></i><span class=\"dot\"></span></a>
          ";
            } elseif (( !$this->env->getExtension('topxia_web_twig')->getSetting("esBar.enabled", 0) && (($this->getAttribute($this->getAttribute(            // line 70
(isset($context["app"]) ? $context["app"] : null), "user", array()), "newNotificationNum", array()) > 0) || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "newMessageNum", array()) > 0)))) {
                // line 71
                echo "            <a class=\"hasmessage\"><i class=\"es-icon es-icon-mail\"></i><span class=\"dot\"></span></a>
          ";
            } else {
                // line 73
                echo "            <a><i class=\"es-icon es-icon-mail\"></i></a>
          ";
            }
            // line 75
            echo "
          <ul class=\"dropdown-menu\" role=\"menu\">
            ";
            // line 77
            if ( !$this->env->getExtension('topxia_web_twig')->getSetting("esBar.enabled", 0)) {
                // line 78
                echo "              <li>
                <a href=\"";
                // line 79
                echo $this->env->getExtension('routing')->getPath("notification");
                echo "\">
                  <span class=\"pull-right num\">";
                // line 80
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "newNotificationNum", array()) > 0)) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "newNotificationNum", array()), "html", null, true);
                }
                echo "</span>
                  <i class=\"es-icon es-icon-notificationson\"></i>通知
                </a>
              </li>
            ";
            }
            // line 85
            echo "            <li>
              <a href=\"";
            // line 86
            echo $this->env->getExtension('routing')->getPath("message");
            echo "\">
                <span class=\"pull-right num\">";
            // line 87
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "newMessageNum", array()) > 0)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "newMessageNum", array()), "html", null, true);
            }
            echo "</span>
                <i class=\"es-icon es-icon-mail\"></i>私信
              </a>
            </li>
          </ul>
        </li>
        ";
        } else {
            // line 94
            echo "        <li class=\"user-avatar-li nav-hover visible-xs\">
          <a href=\"javascript:;\" class=\"dropdown-toggle\">
            <img class=\"avatar-xs\" src=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/default/avatar.png"), "html", null, true);
            echo "\">
          </a>
          <ul class=\"dropdown-menu\" role=\"menu\">
            <li><a href=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login", array("goto" => ((array_key_exists("_target_path", $context)) ? (_twig_default_filter((isset($context["_target_path"]) ? $context["_target_path"] : null), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))) : ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))))), "html", null, true);
            echo "\">登录</a></li>
            <li><a href=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("register", array("goto" => ((array_key_exists("_target_path", $context)) ? (_twig_default_filter((isset($context["_target_path"]) ? $context["_target_path"] : null), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))) : ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))))), "html", null, true);
            echo "\">注册</a></li>
          </ul>
        </li>
        <li class=\"hidden-xs\"><a href=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("login", array("goto" => ((array_key_exists("_target_path", $context)) ? (_twig_default_filter((isset($context["_target_path"]) ? $context["_target_path"] : null), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))) : ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))))), "html", null, true);
            echo "\">登录</a></li>
        <li class=\"hidden-xs\"><a href=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("register", array("goto" => ((array_key_exists("_target_path", $context)) ? (_twig_default_filter((isset($context["_target_path"]) ? $context["_target_path"] : null), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))) : ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))))), "html", null, true);
            echo "\">注册</a></li>
        ";
        }
        // line 106
        echo "      </ul>
      <form class=\"navbar-form navbar-right hidden-xs hidden-sm\" action=\"";
        // line 107
        echo $this->env->getExtension('routing')->getPath("search");
        echo "\" method=\"get\">
        <div class=\"form-group\">
          <input class=\"form-control js-search\" name=\"q\" placeholder=\"搜索\">
          <button class=\"button es-icon es-icon-search\"></button>
        </div>
      </form>
    </div>
  </nav>
</header>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 107,  269 => 106,  264 => 104,  260 => 103,  254 => 100,  250 => 99,  244 => 96,  240 => 94,  228 => 87,  224 => 86,  221 => 85,  211 => 80,  207 => 79,  204 => 78,  202 => 77,  198 => 75,  194 => 73,  190 => 71,  188 => 70,  185 => 69,  183 => 68,  177 => 64,  172 => 61,  168 => 60,  166 => 59,  162 => 58,  155 => 54,  147 => 53,  139 => 52,  136 => 51,  129 => 49,  121 => 48,  117 => 46,  111 => 45,  107 => 44,  102 => 42,  98 => 41,  94 => 40,  88 => 37,  84 => 35,  82 => 34,  75 => 32,  70 => 30,  64 => 26,  58 => 24,  52 => 22,  50 => 21,  46 => 20,  39 => 16,  29 => 9,  19 => 1,);
    }
}
/* <header class="es-header navbar">*/
/*   <div class="navbar-header">*/
/*     <div class="visible-xs  navbar-mobile">*/
/*       <a href="javascript:;" class="navbar-more js-navbar-more">*/
/*         <i class="es-icon es-icon-menu"></i>*/
/*       </a>*/
/*       <div class="html-mask"></div>*/
/*       <div class="nav-mobile">*/
/*         <form class="navbar-form" action="{{ path('search') }}" method="get">*/
/*           <div class="form-group">*/
/*             <input class="form-control" placeholder="搜索" name="q">*/
/*             <button class="button es-icon es-icon-search"></button>*/
/*           </div>*/
/*         </form>*/
/*         <ul class="nav navbar-nav">*/
/*           {{ render(controller('TopxiaWebBundle:Default:topNavigation', {siteNav:siteNav|default(null), isMobile:true })) }}*/
/*         </ul>*/
/*       </div>*/
/*     </div>*/
/*     <a href="{{ path('homepage') }}" class="navbar-brand">*/
/*       {% if setting('site.logo') %}*/
/*         <img src="{{ asset(setting('site.logo')) }}">*/
/*       {% else %}*/
/*         {{ setting('site.name', 'EDUSOHO') }}    */
/*       {% endif %}*/
/*     </a>*/
/*   </div>*/
/*   <nav class="collapse navbar-collapse">*/
/*     <ul class="nav navbar-nav clearfix hidden-xs " id="nav">*/
/*       {{ render(controller('TopxiaWebBundle:Default:topNavigation', {siteNav:siteNav|default(null)})) }}*/
/*     </ul>*/
/*     <div class="navbar-user {% if setting('esBar.enabled', 0) %} left {% endif %}">*/
/*       <ul class="nav user-nav">*/
/*         {% if app.user %}*/
/*         <li class="user-avatar-li nav-hover">*/
/*           <a class="dropdown-toggle">*/
/*             <img class="avatar-xs" src="{{ filepath(app.user.smallAvatar, 'avatar.png') }}">*/
/*           </a>*/
/*           <ul class="dropdown-menu" role="menu">*/
/*             <li role="presentation" class="dropdown-header">{{ app.user.nickname }}</li>*/
/*             <li><a href="{{ path('user_show', {id:app.user.id}) }}"><i class="es-icon es-icon-person"></i>个人主页</a></li>*/
/*             <li><a href="{{ path('settings') }}"><i class="es-icon es-icon-setting"></i>个人设置</a></li>*/
/*             <li class="hidden-lg">*/
/*               <a href="{{ path('my') }}">*/
/*                 <i class="es-icon es-icon-eventnote"></i>{% if 'ROLE_TEACHER' in app.user.roles %}我的教学{% else %}我的学习{% endif %}*/
/*               </a>*/
/*             </li>*/
/*             <li><a href="{% if setting('coin.coin_enabled') %}{{path('my_coin')}}{% else %}{{path('my_bill')}}{% endif %}"><i class="es-icon es-icon-accountwallet"></i>账户中心</a></li>*/
/*             {% if is_granted('ROLE_BACKEND') %}<li><a href="{{ path('admin') }}"><i class="es-icon es-icon-dashboard"></i>管理后台</a></li>*/
/*             {% endif %}*/
/* */
/*             <li class="hidden-lg"><a href="{{ path('notification') }}"><span class="pull-right num">{% if app.user.newNotificationNum > 0 %}{{ app.user.newNotificationNum }}{% endif %}</span><i class="es-icon es-icon-notificationson"></i>通知</a></li>*/
/*             <li class="hidden-lg"><a href="{{ path('message') }}"><span class="pull-right num">{% if app.user.newMessageNum > 0 %}{{ app.user.newMessageNum }}{% endif %}</span><i class="es-icon es-icon-mail"></i>私信</a></li>*/
/*             <li><a href="{{ path('logout') }}"><i class="es-icon es-icon-power"></i>退出登录</a></li>*/
/*           </ul>*/
/*         </li>*/
/*         <li class="visible-lg">*/
/*           <a href="{{ path('my') }}">*/
/*             {% if 'ROLE_TEACHER' in app.user.roles %}*/
/*               我的教学*/
/*             {% else %} */
/*               我的学习*/
/*             {% endif %}*/
/*           </a>*/
/*         </li>*/
/*         <li class="visible-lg nav-hover">*/
/* */
/*           {% if setting('esBar.enabled', 0) and app.user.newMessageNum > 0 %}*/
/*             <a class="hasmessage"><i class="es-icon es-icon-mail"></i><span class="dot"></span></a>*/
/*           {% elseif ( not setting('esBar.enabled', 0)) and ( app.user.newNotificationNum > 0 or app.user.newMessageNum > 0) %}*/
/*             <a class="hasmessage"><i class="es-icon es-icon-mail"></i><span class="dot"></span></a>*/
/*           {% else %}*/
/*             <a><i class="es-icon es-icon-mail"></i></a>*/
/*           {% endif %}*/
/* */
/*           <ul class="dropdown-menu" role="menu">*/
/*             {% if not setting('esBar.enabled', 0) %}*/
/*               <li>*/
/*                 <a href="{{ path('notification') }}">*/
/*                   <span class="pull-right num">{% if app.user.newNotificationNum > 0 %}{{ app.user.newNotificationNum }}{% endif %}</span>*/
/*                   <i class="es-icon es-icon-notificationson"></i>通知*/
/*                 </a>*/
/*               </li>*/
/*             {% endif %}*/
/*             <li>*/
/*               <a href="{{ path('message') }}">*/
/*                 <span class="pull-right num">{% if app.user.newMessageNum > 0 %}{{ app.user.newMessageNum }}{% endif %}</span>*/
/*                 <i class="es-icon es-icon-mail"></i>私信*/
/*               </a>*/
/*             </li>*/
/*           </ul>*/
/*         </li>*/
/*         {% else %}*/
/*         <li class="user-avatar-li nav-hover visible-xs">*/
/*           <a href="javascript:;" class="dropdown-toggle">*/
/*             <img class="avatar-xs" src="{{ asset('assets/img/default/avatar.png') }}">*/
/*           </a>*/
/*           <ul class="dropdown-menu" role="menu">*/
/*             <li><a href="{{ path('login', {goto:_target_path|default(app.request.server.get('REQUEST_URI'))}) }}">登录</a></li>*/
/*             <li><a href="{{ path('register', {goto:_target_path|default(app.request.server.get('REQUEST_URI'))}) }}">注册</a></li>*/
/*           </ul>*/
/*         </li>*/
/*         <li class="hidden-xs"><a href="{{ path('login', {goto:_target_path|default(app.request.server.get('REQUEST_URI'))}) }}">登录</a></li>*/
/*         <li class="hidden-xs"><a href="{{ path('register', {goto:_target_path|default(app.request.server.get('REQUEST_URI'))}) }}">注册</a></li>*/
/*         {% endif %}*/
/*       </ul>*/
/*       <form class="navbar-form navbar-right hidden-xs hidden-sm" action="{{ path('search') }}" method="get">*/
/*         <div class="form-group">*/
/*           <input class="form-control js-search" name="q" placeholder="搜索">*/
/*           <button class="button es-icon es-icon-search"></button>*/
/*         </div>*/
/*       </form>*/
/*     </div>*/
/*   </nav>*/
/* </header>*/
