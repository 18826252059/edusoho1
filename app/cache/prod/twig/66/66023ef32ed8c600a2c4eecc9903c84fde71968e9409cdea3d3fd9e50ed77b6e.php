<?php

/* ClassroomBundle:Classroom:buy-modal.html.twig */
class __TwigTemplate_c227b3a073d580015ddd2213727e12075e1363111fe214beb690f15b272af122 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "ClassroomBundle:Classroom:buy-modal.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["billable"] = false;
        // line 4
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "price", array()) > 0)) {
            // line 5
            $context["billable"] = true;
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        if ((isset($context["billable"]) ? $context["billable"] : null)) {
            echo "购买";
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
        } else {
            echo "加入学习";
        }
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "
  ";
        // line 11
        if ((isset($context["billable"]) ? $context["billable"] : null)) {
            // line 12
            echo "    <div class=\"alert alert-info\">注意：请在30分钟内完成支付，否则订单将会过期失效</div>
  ";
        }
        // line 14
        echo "  <form id=\"classroom-buy-form\" class=\"form-horizontal\" method=\"post\" 
  action=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("classroom_buy_modify_user_info");
        echo "\"
  >
    <div class=\"form-group\">
      <div class=\"col-sm-3 control-label\">";
        // line 18
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
        echo "名称</div>
      <div class=\"col-sm-9 controls\">
      \t<span class=\"control-text text-muted\">《";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "title", array()), "html", null, true);
        echo "》</span>
      </div>
    </div>

    ";
        // line 24
        if ((isset($context["billable"]) ? $context["billable"] : null)) {
            // line 25
            echo "    <div class=\"form-group\">
      <div class=\"col-sm-3 control-label\">价格</div>
      <div class=\"col-sm-9 controls money-text\">
      \t<span class=\"control-text\">
          ";
            // line 29
            if (((isset($context["vipStatus"]) ? $context["vipStatus"] : null) == "ok")) {
                // line 30
                echo "            会员免费
          ";
            } else {
                // line 32
                echo "            ";
                if (($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled") && ($this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type") == "Coin"))) {
                    // line 33
                    echo "              <strong class=\"money\">";
                    echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "price", array()) * $this->env->getExtension('topxia_web_twig')->getSetting("coin.cash_rate")), "html", null, true);
                    echo "</strong>
              <span class=\"text-muted\">";
                    // line 34
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
                    echo "</span>
            ";
                } else {
                    // line 36
                    echo "              <strong class=\"money\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "price", array()), "html", null, true);
                    echo "</strong>
        \t\t  <span class=\"text-muted\">元</span>
            ";
                }
                // line 39
                echo "          ";
            }
            // line 40
            echo "      \t</span>
      </div>
    </div>
    ";
        }
        // line 44
        echo "
    ";
        // line 45
        if ((isset($context["billable"]) ? $context["billable"] : null)) {
            // line 46
            echo "      ";
            if ( !(isset($context["payments"]) ? $context["payments"] : null)) {
                // line 47
                echo "        <div class=\"alert alert-info\">";
                echo _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("payment.disabled_message"), "尚未开启支付模块，无法购买课程。");
                echo "</div>
      ";
            }
            // line 49
            echo "    ";
        } else {
            // line 50
            echo "      ";
            if (((array_key_exists("avatarAlert", $context)) ? (_twig_default_filter((isset($context["avatarAlert"]) ? $context["avatarAlert"] : null), null)) : (null))) {
                // line 51
                echo "        <div class=\"alert alert-warning\">您还没有头像，设置以后才能加入学习<br />拥有一个独有的头像，老师和同学们能更容易关注到你哦～～ <a href=\"";
                echo $this->env->getExtension('routing')->getPath("settings_avatar");
                echo "\" class=\"alert-link\" target=\"_blank\">点击设置</a></div>
      ";
            } else {
                // line 53
                echo "        <div class=\"alert alert-info\">此";
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
                echo "为免费";
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
                echo "，无需购买，可直接加入学习。</div>
      ";
            }
            // line 55
            echo "    ";
        }
        // line 56
        echo "    <input type=\"hidden\" name=\"targetId\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "html", null, true);
        echo "\" />
    <input type=\"hidden\" name=\"payment\" value=\"alipay\" />
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

    ";
        // line 60
        $this->loadTemplate("TopxiaWebBundle:User:fill-userinfo-fields-block.html.twig", "ClassroomBundle:Classroom:buy-modal.html.twig", 60)->display(array_merge($context, array("isBuyFillUserinfo" => $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "buy_fill_userinfo", array()), "userinfoFieldsSetting" => $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "userinfoFields", array()), "userFields" => (isset($context["userFields"]) ? $context["userFields"] : null), "user" => (isset($context["user"]) ? $context["user"] : null), "showNavTip" => 1)));
        // line 61
        echo "  
  </form>
";
    }

    // line 65
    public function block_footer($context, array $blocks = array())
    {
        // line 66
        echo "  ";
        $context["priceType"] = $this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type");
        // line 67
        echo "  ";
        if (((isset($context["billable"]) ? $context["billable"] : null) && ($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "price", array()) > 0))) {
            // line 68
            echo "    ";
            if ((isset($context["payments"]) ? $context["payments"] : null)) {
                // line 69
                echo "      ";
                if (((isset($context["member"]) ? $context["member"] : null) && (($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array()) == "student") || ($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array()) == "teacher")))) {
                    // line 70
                    echo "        <span class=\"text-muted\">预览模式无法支付";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array()), "html", null, true);
                    echo "</span>
        <button class=\"btn btn-primary\" disabled=\"disabled\">去支付</button> 
      ";
                } else {
                    // line 73
                    echo "        ";
                    if (((isset($context["vipStatus"]) ? $context["vipStatus"] : null) == "ok")) {
                        // line 74
                        echo "          <button id=\"join-course-btn\" class=\"btn btn-primary\" data-loading-text=\"正在加入...\" type=\"submit\" data-toggle=\"form-submit\" data-target=\"#classroom-buy-form\">加入学习</button>
        ";
                    } else {
                        // line 76
                        echo "          <button id=\"course-pay\" class=\"btn btn-primary\" type=\"submit\" data-loading-text=\"正在创建订单...\" data-toggle=\"form-submit\" data-target=\"#classroom-buy-form\">去支付</button>
        ";
                    }
                    // line 78
                    echo "      ";
                }
                // line 79
                echo "    ";
            } elseif (( !(isset($context["payments"]) ? $context["payments"] : null) && ((isset($context["vipStatus"]) ? $context["vipStatus"] : null) == "ok"))) {
                // line 80
                echo "     <button ";
                if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "status", array()) != "published")) {
                    echo " disabled=\"disabled\" ";
                }
                // line 81
                echo "     id=\"join-course-btn\" class=\"btn btn-primary\" data-loading-text=\"正在加入...\" type=\"submit\" data-toggle=\"form-submit\" data-target=\"#classroom-buy-form\">加入学习</button>
    ";
            }
            // line 83
            echo "  ";
        } else {
            // line 84
            echo "    ";
            if (((isset($context["member"]) ? $context["member"] : null) && (($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array()) == "student") || ($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array()) == "teacher")))) {
                // line 85
                echo "      <span class=\"text-muted\">预览模式无法加入学习";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array()), "html", null, true);
                echo "</span>
      <button class=\"btn btn-primary\" disabled=\"disabled\">加入学习</button> 
    ";
            } else {
                // line 87
                echo "  
      ";
                // line 88
                if ((( !((array_key_exists("avatarAlert", $context)) ? (_twig_default_filter((isset($context["avatarAlert"]) ? $context["avatarAlert"] : null), null)) : (null)) && $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "showable", array())) && ($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "status", array()) != "closed"))) {
                    // line 89
                    echo "        <button id=\"join-course-btn\" class=\"btn btn-primary\" data-loading-text=\"正在加入...\" type=\"submit\" data-toggle=\"form-submit\" data-target=\"#classroom-buy-form\">加入学习</button>
      ";
                }
                // line 91
                echo "    ";
            }
            // line 92
            echo "
  ";
        }
        // line 94
        echo "
  <script>app.load('classroombundle/controller/classroom/buy-modal')</script>
";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom:buy-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 94,  254 => 92,  251 => 91,  247 => 89,  245 => 88,  242 => 87,  235 => 85,  232 => 84,  229 => 83,  225 => 81,  220 => 80,  217 => 79,  214 => 78,  210 => 76,  206 => 74,  203 => 73,  196 => 70,  193 => 69,  190 => 68,  187 => 67,  184 => 66,  181 => 65,  175 => 61,  173 => 60,  168 => 58,  162 => 56,  159 => 55,  151 => 53,  145 => 51,  142 => 50,  139 => 49,  133 => 47,  130 => 46,  128 => 45,  125 => 44,  119 => 40,  116 => 39,  109 => 36,  104 => 34,  99 => 33,  96 => 32,  92 => 30,  90 => 29,  84 => 25,  82 => 24,  75 => 20,  70 => 18,  64 => 15,  61 => 14,  57 => 12,  55 => 11,  52 => 10,  49 => 9,  38 => 8,  34 => 1,  31 => 5,  29 => 4,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% set billable = false %}*/
/* {% if classroom.price > 0 %}*/
/*   {% set billable = true %}*/
/* {% endif %}*/
/* */
/* {% block title %}{% if billable %}购买{{setting("classroom.name")|default("班级")}}{% else %}加入学习{% endif %}{% endblock %}*/
/* {% block body %}*/
/* */
/*   {% if billable %}*/
/*     <div class="alert alert-info">注意：请在30分钟内完成支付，否则订单将会过期失效</div>*/
/*   {% endif %}*/
/*   <form id="classroom-buy-form" class="form-horizontal" method="post" */
/*   action="{{ path('classroom_buy_modify_user_info') }}"*/
/*   >*/
/*     <div class="form-group">*/
/*       <div class="col-sm-3 control-label">{{setting("classroom.name")|default("班级")}}名称</div>*/
/*       <div class="col-sm-9 controls">*/
/*       	<span class="control-text text-muted">《{{ classroom.title }}》</span>*/
/*       </div>*/
/*     </div>*/
/* */
/*     {% if billable %}*/
/*     <div class="form-group">*/
/*       <div class="col-sm-3 control-label">价格</div>*/
/*       <div class="col-sm-9 controls money-text">*/
/*       	<span class="control-text">*/
/*           {% if vipStatus == 'ok' %}*/
/*             会员免费*/
/*           {% else %}*/
/*             {% if setting('coin.coin_enabled') and setting('coin.price_type') == 'Coin' %}*/
/*               <strong class="money">{{classroom.price * setting('coin.cash_rate') }}</strong>*/
/*               <span class="text-muted">{{setting('coin.coin_name')}}</span>*/
/*             {% else %}*/
/*               <strong class="money">{{ classroom.price }}</strong>*/
/*         		  <span class="text-muted">元</span>*/
/*             {% endif %}*/
/*           {% endif %}*/
/*       	</span>*/
/*       </div>*/
/*     </div>*/
/*     {% endif %}*/
/* */
/*     {% if billable %}*/
/*       {% if not payments %}*/
/*         <div class="alert alert-info">{{ setting('payment.disabled_message')|default('尚未开启支付模块，无法购买课程。')|raw }}</div>*/
/*       {% endif %}*/
/*     {% else %}*/
/*       {% if avatarAlert|default(null) %}*/
/*         <div class="alert alert-warning">您还没有头像，设置以后才能加入学习<br />拥有一个独有的头像，老师和同学们能更容易关注到你哦～～ <a href="{{ path('settings_avatar') }}" class="alert-link" target="_blank">点击设置</a></div>*/
/*       {% else %}*/
/*         <div class="alert alert-info">此{{setting("classroom.name")|default("班级")}}为免费{{setting("classroom.name")|default("班级")}}，无需购买，可直接加入学习。</div>*/
/*       {% endif %}*/
/*     {% endif %}*/
/*     <input type="hidden" name="targetId" value="{{ classroom.id }}" />*/
/*     <input type="hidden" name="payment" value="alipay" />*/
/*     <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/* */
/*     {% include 'TopxiaWebBundle:User:fill-userinfo-fields-block.html.twig' with {isBuyFillUserinfo:courseSetting.buy_fill_userinfo, userinfoFieldsSetting:courseSetting.userinfoFields, userFields:userFields, user:user, showNavTip:1} %}*/
/*   */
/*   </form>*/
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/*   {% set priceType = setting("coin.price_type") %}*/
/*   {% if billable and classroom.price > 0 %}*/
/*     {% if payments %}*/
/*       {% if member and (member.role == 'student' or member.role == 'teacher') %}*/
/*         <span class="text-muted">预览模式无法支付{{member.role}}</span>*/
/*         <button class="btn btn-primary" disabled="disabled">去支付</button> */
/*       {% else %}*/
/*         {% if vipStatus == 'ok'%}*/
/*           <button id="join-course-btn" class="btn btn-primary" data-loading-text="正在加入..." type="submit" data-toggle="form-submit" data-target="#classroom-buy-form">加入学习</button>*/
/*         {% else %}*/
/*           <button id="course-pay" class="btn btn-primary" type="submit" data-loading-text="正在创建订单..." data-toggle="form-submit" data-target="#classroom-buy-form">去支付</button>*/
/*         {% endif %}*/
/*       {% endif %}*/
/*     {% elseif not payments and vipStatus == 'ok' %}*/
/*      <button {% if classroom.status != 'published'%} disabled="disabled" {% endif %}*/
/*      id="join-course-btn" class="btn btn-primary" data-loading-text="正在加入..." type="submit" data-toggle="form-submit" data-target="#classroom-buy-form">加入学习</button>*/
/*     {% endif %}*/
/*   {% else %}*/
/*     {% if member and (member.role == 'student' or member.role == 'teacher') %}*/
/*       <span class="text-muted">预览模式无法加入学习{{member.role}}</span>*/
/*       <button class="btn btn-primary" disabled="disabled">加入学习</button> */
/*     {% else %}  */
/*       {% if not avatarAlert|default(null) and  classroom.showable and classroom.status != 'closed' %}*/
/*         <button id="join-course-btn" class="btn btn-primary" data-loading-text="正在加入..." type="submit" data-toggle="form-submit" data-target="#classroom-buy-form">加入学习</button>*/
/*       {% endif %}*/
/*     {% endif %}*/
/* */
/*   {% endif %}*/
/* */
/*   <script>app.load('classroombundle/controller/classroom/buy-modal')</script>*/
/* {% endblock %}*/
