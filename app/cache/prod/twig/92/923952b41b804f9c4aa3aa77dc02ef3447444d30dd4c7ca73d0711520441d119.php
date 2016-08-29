<?php

/* TopxiaWebBundle:Coin:invite-code.html.twig */
class __TwigTemplate_b5d10cf5f749d214c3725d06b9314c4e1437c10453a8165adb138f2d109aa161 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Coin:layout.html.twig", "TopxiaWebBundle:Coin:invite-code.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Coin:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["side_nav"] = "my-invite-code";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "我的邀请码 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "  <div class=\"es-section \">
  ";
        // line 8
        $this->loadTemplate("TopxiaWebBundle:Coin:bill-bar.html.twig", "TopxiaWebBundle:Coin:invite-code.html.twig", 8)->display($context);
        // line 9
        echo "  ";
        if (($this->env->getExtension('topxia_web_twig')->getSetting("invite.invite_code_setting") == 1)) {
            // line 10
            echo "    <p class=\"clearfix\">
    <span class=\"label label-primary label-md mrl\">我的邀请码</span><span class=\"mrl text-xlg\">";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
            echo "</span>
    ";
            // line 12
            if (((isset($context["record"]) ? $context["record"] : null) == null)) {
                // line 13
                echo "    <a  class=\"btn btn-primary btn-sm pull-right mlm\" href=\"#modal\" data-toggle=\"modal\" id=\"writeInvite\" data-url=\"";
                echo $this->env->getExtension('routing')->getPath("write_invitecode");
                echo "\">TA的邀请码</a>
    ";
            }
            // line 15
            echo "    <a  class=\"btn btn-primary btn-sm pull-right\" href=\"#modal\" data-toggle=\"modal\" data-url=\"";
            echo $this->env->getExtension('routing')->getPath("invite_promote_link");
            echo "\">邀请好友</a></p>
    <br>
    <div class=\"alert alert-warning\">
    给TA分享您的邀请码或者邀请链接
    ";
            // line 19
            if ((isset($context["inviteSetting"]) ? $context["inviteSetting"] : null)) {
                // line 20
                echo "      ";
                if ($this->getAttribute((isset($context["inviteSetting"]) ? $context["inviteSetting"] : null), "promoted_user_value", array())) {
                    // line 21
                    echo "      ，TA注册后将获得";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inviteSetting"]) ? $context["inviteSetting"] : null), "promoted_user_value", array()), "html", null, true);
                    echo "元优惠券
      ";
                }
                // line 23
                echo "      ";
                if ($this->getAttribute((isset($context["inviteSetting"]) ? $context["inviteSetting"] : null), "promote_user_value", array())) {
                    // line 24
                    echo "      ，TA在消费后您将获得";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["inviteSetting"]) ? $context["inviteSetting"] : null), "promote_user_value", array()), "html", null, true);
                    echo "元优惠券
      ";
                }
                // line 26
                echo "    。  
    ";
            } else {
                // line 28
                echo "    。
    ";
            }
            // line 30
            echo "    </div>
    

<table class=\"table table-striped table-hover\" id=\"course-table\" style=\"word-break:break-all;\">
  <thead>
    <tr>
      <th>邀请对象</th>
      <th>邀请时间</th>
      <th>邀请奖励</th>
      <th>奖励获取时间</th>
    </tr>
  </thead>
  <tbody>
      ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["invitedUsers"]) ? $context["invitedUsers"] : null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 44
                echo "      <tr>
        <td>";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "nickname", array()), "html", null, true);
                echo "</td>
        <td>";
                // line 46
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "inviteTime", array()), "Y-m-d H:i:s"), "html", null, true);
                echo "</td>
        <td>";
                // line 47
                echo twig_escape_filter($this->env, (($this->getAttribute($context["user"], "rewardRate", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["user"], "rewardRate", array()), "-")) : ("-")), "html", null, true);
                echo "</td>
        <td>";
                // line 48
                echo twig_escape_filter($this->env, (($this->getAttribute($context["user"], "inviteRewardTime", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["user"], "inviteRewardTime", array()), "-")) : ("-")), "html", null, true);
                echo "</td>
      </tr>
      ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 51
                echo "        <tr><td colspan=\"20\"><div class=\"empty\">暂无邀请用户</div></td></tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "  </tbody>
</table>
  ";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
            echo "


  ";
        } else {
            // line 59
            echo "  <div class=\"well\" style=\"text-align:center;\">
    邀请码功能已关闭
  </div>
  ";
        }
        // line 63
        echo "  </div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Coin:invite-code.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 63,  162 => 59,  155 => 55,  151 => 53,  144 => 51,  136 => 48,  132 => 47,  128 => 46,  124 => 45,  121 => 44,  116 => 43,  101 => 30,  97 => 28,  93 => 26,  87 => 24,  84 => 23,  78 => 21,  75 => 20,  73 => 19,  65 => 15,  59 => 13,  57 => 12,  53 => 11,  50 => 10,  47 => 9,  45 => 8,  42 => 7,  39 => 6,  32 => 2,  28 => 1,  26 => 4,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:Coin:layout.html.twig' %}*/
/* {% block title %}我的邀请码 - {{ parent() }}{% endblock %}*/
/* */
/* {% set side_nav = 'my-invite-code' %}*/
/* */
/* {% block main %}*/
/*   <div class="es-section ">*/
/*   {% include 'TopxiaWebBundle:Coin:bill-bar.html.twig' %}*/
/*   {% if setting('invite.invite_code_setting') == 1 %}*/
/*     <p class="clearfix">*/
/*     <span class="label label-primary label-md mrl">我的邀请码</span><span class="mrl text-xlg">{{code}}</span>*/
/*     {% if record == null %}*/
/*     <a  class="btn btn-primary btn-sm pull-right mlm" href="#modal" data-toggle="modal" id="writeInvite" data-url="{{ path('write_invitecode')}}">TA的邀请码</a>*/
/*     {% endif %}*/
/*     <a  class="btn btn-primary btn-sm pull-right" href="#modal" data-toggle="modal" data-url="{{ path('invite_promote_link')}}">邀请好友</a></p>*/
/*     <br>*/
/*     <div class="alert alert-warning">*/
/*     给TA分享您的邀请码或者邀请链接*/
/*     {% if inviteSetting %}*/
/*       {% if inviteSetting.promoted_user_value  %}*/
/*       ，TA注册后将获得{{inviteSetting.promoted_user_value}}元优惠券*/
/*       {% endif %}*/
/*       {% if inviteSetting.promote_user_value %}*/
/*       ，TA在消费后您将获得{{inviteSetting.promote_user_value}}元优惠券*/
/*       {% endif %}*/
/*     。  */
/*     {% else %}*/
/*     。*/
/*     {% endif %}*/
/*     </div>*/
/*     */
/* */
/* <table class="table table-striped table-hover" id="course-table" style="word-break:break-all;">*/
/*   <thead>*/
/*     <tr>*/
/*       <th>邀请对象</th>*/
/*       <th>邀请时间</th>*/
/*       <th>邀请奖励</th>*/
/*       <th>奖励获取时间</th>*/
/*     </tr>*/
/*   </thead>*/
/*   <tbody>*/
/*       {% for user in invitedUsers %}*/
/*       <tr>*/
/*         <td>{{user.nickname}}</td>*/
/*         <td>{{user.inviteTime|date('Y-m-d H:i:s')}}</td>*/
/*         <td>{{user.rewardRate|default('-')}}</td>*/
/*         <td>{{user.inviteRewardTime|default('-')}}</td>*/
/*       </tr>*/
/*       {% else %}*/
/*         <tr><td colspan="20"><div class="empty">暂无邀请用户</div></td></tr>*/
/*       {% endfor %}*/
/*   </tbody>*/
/* </table>*/
/*   {{ web_macro.paginator(paginator) }}*/
/* */
/* */
/*   {% else %}*/
/*   <div class="well" style="text-align:center;">*/
/*     邀请码功能已关闭*/
/*   </div>*/
/*   {% endif %}*/
/*   </div>*/
/* {% endblock %}*/
