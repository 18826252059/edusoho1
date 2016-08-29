<?php

/* TopxiaWebBundle:Settings:layout.html.twig */
class __TwigTemplate_322167b73923e080d28ed0b8b1ba72892d2092fe30baa1672a39ed014cf8c400 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Settings:layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'side' => array($this, 'block_side'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "个人设置 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"row\">
  <div class=\"col-md-3\">
    ";
        // line 8
        $this->displayBlock('side', $context, $blocks);
        // line 43
        echo "  </div>
  <div class=\"col-md-9\">
    ";
        // line 45
        $this->displayBlock('main', $context, $blocks);
        // line 46
        echo "  </div>
</div>
";
    }

    // line 8
    public function block_side($context, array $blocks = array())
    {
        // line 9
        echo "      <div class=\"sidenav\">
        <ul class=\"list-group\">
          <li class=\"list-group-heading\">个人设置</li>
          ";
        // line 12
        $context["side_nav"] = ((array_key_exists("side_nav", $context)) ? (_twig_default_filter((isset($context["side_nav"]) ? $context["side_nav"] : null), null)) : (null));
        // line 13
        echo "          
          <li class=\"list-group-item ";
        // line 14
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "profile")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("settings");
        echo "\"><i class=\"glyphicon glyphicon-user\"></i> 基础信息</a>
          </li>
          <li class=\"list-group-item ";
        // line 17
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "avatar")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("settings_avatar");
        echo "\"><i class=\"glyphicon glyphicon-picture\"></i> 头像设置</a>
          </li>
          
          <li class=\"list-group-item ";
        // line 21
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "security")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("settings_security");
        echo "\"><i class=\"glyphicon glyphicon-lock\"></i> 安全设置</a>
          </li>
          

          ";
        // line 29
        echo "
          <li class=\"list-group-item ";
        // line 30
        if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "email")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 31
        echo $this->env->getExtension('routing')->getPath("settings_email");
        echo "\"><i class=\"glyphicon glyphicon-envelope\"></i> 邮箱设置</a>
          </li>

          ";
        // line 34
        if ((($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("login_bind", array()), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("login_bind", array()), "enabled", array()), false)) : (false))) {
            // line 35
            echo "            <li class=\"list-group-item ";
            if (((isset($context["side_nav"]) ? $context["side_nav"] : null) == "binds")) {
                echo "active";
            }
            echo "\" >
              <a href=\"";
            // line 36
            echo $this->env->getExtension('routing')->getPath("settings_binds");
            echo "\"><i class=\"glyphicon glyphicon-circle-arrow-right\"></i> 第三方登录</a>
            </li>
          ";
        }
        // line 39
        echo "
        </ul>
      </div>
    ";
    }

    // line 45
    public function block_main($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Settings:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 45,  138 => 39,  132 => 36,  125 => 35,  123 => 34,  117 => 31,  111 => 30,  108 => 29,  101 => 22,  95 => 21,  89 => 18,  83 => 17,  78 => 15,  72 => 14,  69 => 13,  67 => 12,  62 => 9,  59 => 8,  53 => 46,  51 => 45,  47 => 43,  45 => 8,  41 => 6,  38 => 5,  31 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::layout.html.twig' %}*/
/* */
/* {% block title %}个人设置 - {{ parent() }}{% endblock %}*/
/* */
/* {% block content %}*/
/* <div class="row">*/
/*   <div class="col-md-3">*/
/*     {% block side %}*/
/*       <div class="sidenav">*/
/*         <ul class="list-group">*/
/*           <li class="list-group-heading">个人设置</li>*/
/*           {% set side_nav = side_nav|default(null) %}*/
/*           */
/*           <li class="list-group-item {% if side_nav == 'profile' %}active{% endif %}">*/
/*             <a href="{{ path('settings') }}"><i class="glyphicon glyphicon-user"></i> 基础信息</a>*/
/*           </li>*/
/*           <li class="list-group-item {% if side_nav == 'avatar' %}active{% endif %}">*/
/*             <a href="{{ path('settings_avatar') }}"><i class="glyphicon glyphicon-picture"></i> 头像设置</a>*/
/*           </li>*/
/*           */
/*           <li class="list-group-item {% if side_nav == 'security' %}active{% endif %}">*/
/*             <a href="{{ path('settings_security') }}"><i class="glyphicon glyphicon-lock"></i> 安全设置</a>*/
/*           </li>*/
/*           */
/* */
/*           {#<li class="list-group-item {% if side_nav == 'password' %}active{% endif %}">*/
/*             <a href="{{ path('settings_password') }}"><i class="glyphicon glyphicon-lock"></i> 登录密码修改</a>*/
/*           </li>#}*/
/* */
/*           <li class="list-group-item {% if side_nav == 'email' %}active{% endif %}">*/
/*             <a href="{{ path('settings_email') }}"><i class="glyphicon glyphicon-envelope"></i> 邮箱设置</a>*/
/*           </li>*/
/* */
/*           {% if setting('login_bind', []).enabled|default(false) %}*/
/*             <li class="list-group-item {% if side_nav == 'binds' %}active{% endif %}" >*/
/*               <a href="{{ path('settings_binds') }}"><i class="glyphicon glyphicon-circle-arrow-right"></i> 第三方登录</a>*/
/*             </li>*/
/*           {% endif %}*/
/* */
/*         </ul>*/
/*       </div>*/
/*     {% endblock %}*/
/*   </div>*/
/*   <div class="col-md-9">*/
/*     {% block main %}{% endblock %}*/
/*   </div>*/
/* </div>*/
/* {% endblock %}*/
