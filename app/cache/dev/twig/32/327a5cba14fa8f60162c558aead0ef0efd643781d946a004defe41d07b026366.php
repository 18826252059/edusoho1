<?php

/* TopxiaWebBundle:Default:header.html.twig */
class __TwigTemplate_3669ce3197d65e342eb7f6d4d7185e2e6f7f35af9d8c23c80752f4359646c97f extends Twig_Template
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
        echo "

<div id=\"site-navbar\" class=\"navbar navbar-inverse site-navbar\"  data-counter-url=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("user_remind_counter");
        echo "\">

    <div class=\"container\">
      <div class=\"container-gap\">
        <div class=\"navbar-header\">
          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
          ";
        // line 13
        if ($this->env->getExtension('topxia_web_twig')->getSetting("site.logo")) {
            // line 14
            echo "            <a class=\"navbar-brand-logo\" href=\"";
            echo $this->env->getExtension('routing')->getPath("homepage");
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('topxia_web_twig')->getSetting("site.logo")), "html", null, true);
            echo "\"></a>
          ";
        } else {
            // line 16
            echo "            <a class=\"navbar-brand\" href=\"";
            echo $this->env->getExtension('routing')->getPath("homepage");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.name", "EDUSOHO"), "html", null, true);
            echo "</a>
          ";
        }
        // line 18
        echo "        </div>
        <div class=\"navbar-collapse collapse\">
          <ul class=\"nav navbar-nav\">
      </ul>
          ";
        // line 22
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Default:topNavigation", array("siteNav" => ((array_key_exists("siteNav", $context)) ? (_twig_default_filter((isset($context["siteNav"]) ? $context["siteNav"] : $this->getContext($context, "siteNav")), null)) : (null)))));
        echo "
          <ul class=\"nav navbar-nav navbar-right\">
            ";
        // line 24
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 25
            echo "              <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("my");
            echo "\"> 我的课程 </a></li>
              ";
            // line 27
            echo "                ";
            // line 28
            echo "                  ";
            // line 29
            echo "                  ";
            // line 30
            echo "                ";
            // line 31
            echo "              ";
            // line 32
            echo "              <li>
                <form class=\"navbar-form navbar-right hidden-xs\" action=\"/search\" method=\"get\">
                  <div class=\"form-group\">
                    <input class=\"form-control js-search\" name=\"q\" placeholder=\"搜索\">
                    <button class=\"button es-icon es-icon-search\"></button>
                  </div>
                </form>
              </li>
              <li><a href=\"";
            // line 40
            echo $this->env->getExtension('routing')->getPath("notification");
            echo "\" class=\"badge-container notification-badge-container\">
                <span class=\"glyphicon glyphicon-bullhorn hidden-lt-ie8\"></span>
                <span class=\"visible-lt-ie8\">通知</span>
                ";
            // line 43
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "newNotificationNum", array()) > 0)) {
                echo "<span class=\"badge\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "newNotificationNum", array()), "html", null, true);
                echo "</span>";
            }
            echo "</a></li>
              <li>
                <a href=\"";
            // line 45
            echo $this->env->getExtension('routing')->getPath("message");
            echo "\" class=\"badge-container message-badge-container\">
                <span class=\"glyphicon glyphicon-envelope hidden-lt-ie8\"></span>
                <span class=\"visible-lt-ie8\">私信</span>
                ";
            // line 48
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "newMessageNum", array()) > 0)) {
                echo "<span class=\"badge\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "newMessageNum", array()), "html", null, true);
                echo "</span>";
            }
            // line 49
            echo "                </a>
              </li>
              <li><a href=\"";
            // line 51
            if ($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled")) {
                // line 52
                echo "                      ";
                echo $this->env->getExtension('routing')->getPath("my_coin");
                echo "
                     ";
            } else {
                // line 54
                echo "                      ";
                echo $this->env->getExtension('routing')->getPath("my_bill");
                echo "
                     ";
            }
            // line 55
            echo "\">
                <img src=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath("qiandai.png"), "html", null, true);
            echo "\"  width=\"14\" style=\"margin-top: -2px\" />
              </a>
              </li>
              <li class=\"visible-lt-ie8\"><a href=\"";
            // line 59
            echo $this->env->getExtension('routing')->getPath("settings");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nickname", array()), "html", null, true);
            echo "</a></li>
              <li class=\"dropdown hidden-lt-ie8\">
                <a href=\"javascript:;\" class=\"dropdown-toggle\"  data-toggle=\"dropdown\">";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nickname", array()), "html", null, true);
            echo " <b class=\"caret\"></b></a>
                <ul class=\"dropdown-menu\">
                  <li><a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "\"><i class=\"glyphicon glyphicon-home\"></i> 我的主页</a></li>
                  <li><a href=\"";
            // line 64
            echo $this->env->getExtension('routing')->getPath("settings");
            echo "\"><i class=\"glyphicon glyphicon-cog\"></i> 个人设置</a></li>
                  <li class=\"divider\"></li>
                  ";
            // line 66
            if ($this->env->getExtension('security')->isGranted("ROLE_BACKEND")) {
                // line 67
                echo "                    <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("admin");
                echo "\"><i class=\"glyphicon glyphicon-dashboard\"></i> 管理后台</a></li>
                    <li class=\"divider\"></li>
                  ";
            }
            // line 70
            echo "                  <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("lplogout");
            echo "\"><i class=\"glyphicon glyphicon-off\"></i> 退出</a></li>
                </ul>
              </li>
            ";
        } else {
            // line 74
            echo "              ";
            if ($this->env->getExtension('topxia_web_twig')->getSetting("mobile.enabled")) {
                // line 75
                echo "                ";
                // line 76
                echo "              ";
            }
            // line 77
            echo "              <li>
                <form class=\"navbar-form navbar-right hidden-xs\" action=\"/search\" method=\"get\">
                  <div class=\"form-group\">
                    <input class=\"form-control js-search\" name=\"q\" placeholder=\"搜索\">
                    <button class=\"button es-icon es-icon-search\"></button>
                  </div>
                </form>
              </li>
              <li><a href=\"";
            // line 85
            echo twig_escape_filter($this->env, (isset($context["loginurl"]) ? $context["loginurl"] : $this->getContext($context, "loginurl")), "html", null, true);
            echo "?target=http://";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "HTTP_HOST"), "method"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"), "html", null, true);
            echo "\">登录</a></li>
              <li><a href=\"";
            // line 86
            echo twig_escape_filter($this->env, (isset($context["registerurl"]) ? $context["registerurl"] : $this->getContext($context, "registerurl")), "html", null, true);
            echo "?target=http://";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "HTTP_HOST"), "method"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"), "html", null, true);
            echo "\">注册</a></li>
            ";
        }
        // line 88
        echo "          </ul>
        </div><!--/.navbar-collapse -->
      </div>
    </div>
  </div>
";
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
        return array (  217 => 88,  209 => 86,  202 => 85,  192 => 77,  189 => 76,  187 => 75,  184 => 74,  176 => 70,  169 => 67,  167 => 66,  162 => 64,  158 => 63,  153 => 61,  146 => 59,  140 => 56,  137 => 55,  131 => 54,  125 => 52,  123 => 51,  119 => 49,  113 => 48,  107 => 45,  98 => 43,  92 => 40,  82 => 32,  80 => 31,  78 => 30,  76 => 29,  74 => 28,  72 => 27,  67 => 25,  65 => 24,  60 => 22,  54 => 18,  46 => 16,  38 => 14,  36 => 13,  23 => 3,  19 => 1,);
    }
}
/* */
/* */
/* <div id="site-navbar" class="navbar navbar-inverse site-navbar"  data-counter-url="{{ path('user_remind_counter') }}">*/
/* */
/*     <div class="container">*/
/*       <div class="container-gap">*/
/*         <div class="navbar-header">*/
/*           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*             <span class="icon-bar"></span>*/
/*           </button>*/
/*           {% if setting('site.logo') %}*/
/*             <a class="navbar-brand-logo" href="{{ path('homepage') }}"><img src="{{ asset(setting('site.logo')) }}"></a>*/
/*           {% else %}*/
/*             <a class="navbar-brand" href="{{ path('homepage') }}">{{ setting('site.name', 'EDUSOHO') }}</a>*/
/*           {% endif %}*/
/*         </div>*/
/*         <div class="navbar-collapse collapse">*/
/*           <ul class="nav navbar-nav">*/
/*       </ul>*/
/*           {{ render(controller('TopxiaWebBundle:Default:topNavigation', {siteNav:siteNav|default(null)})) }}*/
/*           <ul class="nav navbar-nav navbar-right">*/
/*             {% if app.user %}*/
/*               <li><a href="{{ path('my') }}"> 我的课程 </a></li>*/
/*               {#{% if setting('mobile.enabled') %}#}*/
/*                 {#<li><a href="{{ path('mobile') }}" class="mobile-badge-container">#}*/
/*                   {#<span class="glyphicon glyphicon-phone"></span>#}*/
/*                   {#<span class="badge">v2</span>#}*/
/*                 {#</a></li>#}*/
/*               {#{% endif %}#}*/
/*               <li>*/
/*                 <form class="navbar-form navbar-right hidden-xs" action="/search" method="get">*/
/*                   <div class="form-group">*/
/*                     <input class="form-control js-search" name="q" placeholder="搜索">*/
/*                     <button class="button es-icon es-icon-search"></button>*/
/*                   </div>*/
/*                 </form>*/
/*               </li>*/
/*               <li><a href="{{ path('notification') }}" class="badge-container notification-badge-container">*/
/*                 <span class="glyphicon glyphicon-bullhorn hidden-lt-ie8"></span>*/
/*                 <span class="visible-lt-ie8">通知</span>*/
/*                 {% if app.user.newNotificationNum > 0 %}<span class="badge">{{ app.user.newNotificationNum }}</span>{% endif %}</a></li>*/
/*               <li>*/
/*                 <a href="{{ path('message') }}" class="badge-container message-badge-container">*/
/*                 <span class="glyphicon glyphicon-envelope hidden-lt-ie8"></span>*/
/*                 <span class="visible-lt-ie8">私信</span>*/
/*                 {% if app.user.newMessageNum > 0 %}<span class="badge">{{ app.user.newMessageNum }}</span>{% endif %}*/
/*                 </a>*/
/*               </li>*/
/*               <li><a href="{% if setting('coin.coin_enabled') %}*/
/*                       {{path('my_coin')}}*/
/*                      {% else %}*/
/*                       {{path('my_bill')}}*/
/*                      {% endif %}">*/
/*                 <img src="{{default_path('qiandai.png')}}"  width="14" style="margin-top: -2px" />*/
/*               </a>*/
/*               </li>*/
/*               <li class="visible-lt-ie8"><a href="{{ path('settings') }}">{{ app.user.nickname }}</a></li>*/
/*               <li class="dropdown hidden-lt-ie8">*/
/*                 <a href="javascript:;" class="dropdown-toggle"  data-toggle="dropdown">{{ app.user.nickname }} <b class="caret"></b></a>*/
/*                 <ul class="dropdown-menu">*/
/*                   <li><a href="{{ path('user_show', {id:app.user.id}) }}"><i class="glyphicon glyphicon-home"></i> 我的主页</a></li>*/
/*                   <li><a href="{{ path('settings') }}"><i class="glyphicon glyphicon-cog"></i> 个人设置</a></li>*/
/*                   <li class="divider"></li>*/
/*                   {% if is_granted('ROLE_BACKEND') %}*/
/*                     <li><a href="{{ path('admin') }}"><i class="glyphicon glyphicon-dashboard"></i> 管理后台</a></li>*/
/*                     <li class="divider"></li>*/
/*                   {% endif %}*/
/*                   <li><a href="{{ path('lplogout') }}"><i class="glyphicon glyphicon-off"></i> 退出</a></li>*/
/*                 </ul>*/
/*               </li>*/
/*             {% else %}*/
/*               {% if setting('mobile.enabled') %}*/
/*                 {#<li><a href="{{ path('mobile') }}"><span class="glyphicon glyphicon-phone"></span> 手机版</a></li>#}*/
/*               {% endif %}*/
/*               <li>*/
/*                 <form class="navbar-form navbar-right hidden-xs" action="/search" method="get">*/
/*                   <div class="form-group">*/
/*                     <input class="form-control js-search" name="q" placeholder="搜索">*/
/*                     <button class="button es-icon es-icon-search"></button>*/
/*                   </div>*/
/*                 </form>*/
/*               </li>*/
/*               <li><a href="{{ loginurl }}?target=http://{{ app.request.server.get('HTTP_HOST')}}{{ app.request.server.get('REQUEST_URI') }}">登录</a></li>*/
/*               <li><a href="{{ registerurl }}?target=http://{{ app.request.server.get('HTTP_HOST')}}{{ app.request.server.get('REQUEST_URI') }}">注册</a></li>*/
/*             {% endif %}*/
/*           </ul>*/
/*         </div><!--/.navbar-collapse -->*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* */
