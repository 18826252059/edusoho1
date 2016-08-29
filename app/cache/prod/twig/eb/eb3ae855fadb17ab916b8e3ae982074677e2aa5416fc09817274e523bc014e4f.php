<?php

/* TopxiaWebBundle:CourseOrder:buy-modal.html.twig */
class __TwigTemplate_0cfca0cb28569e1e69e5ada66782e9477b87c82d6419179a0f8b13701414ce8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:CourseOrder:buy-modal.html.twig", 1);
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
        $context["billable"] = true;
        // line 4
        if ((((($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled") == 1) && ($this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type") == "Coin")) && ($this->getAttribute(        // line 5
(isset($context["course"]) ? $context["course"] : null), "coinPrice", array()) == 0)) || (( !$this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type") || ($this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type") == "RMB")) && ($this->getAttribute(        // line 6
(isset($context["course"]) ? $context["course"] : null), "price", array()) == 0)))) {
            // line 8
            $context["billable"] = false;
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        if ((isset($context["billable"]) ? $context["billable"] : null)) {
            echo "购买课程";
        } else {
            echo "加入学习";
        }
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "
  ";
        // line 13
        if (((isset($context["billable"]) ? $context["billable"] : null) && ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) == "live"))) {
            // line 14
            echo "    <div class=\"alert alert-info\">注意：请在30分钟内完成支付，否则订单将会过期失效</div>
  ";
        }
        // line 16
        echo "  <form id=\"course-buy-form\" class=\"form-horizontal\" method=\"post\" 
  action=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("course_buy_modify_user_info");
        echo "\"
  >
    <div class=\"form-group\">
      <div class=\"col-sm-3 control-label\">课程名称</div>
      <div class=\"col-sm-9 controls\">
      \t<span class=\"control-text text-muted\">《";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
        echo "》</span>
        <input type=\"hidden\" name=\"lessonId\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["lessonId"]) ? $context["lessonId"] : null), "html", null, true);
        echo "\">
      </div>
    </div>

    ";
        // line 27
        if ((isset($context["billable"]) ? $context["billable"] : null)) {
            // line 28
            echo "    <div class=\"form-group\">
      <div class=\"col-sm-3 control-label\">价格</div>
      <div class=\"col-sm-9 controls money-text\">
      \t<span class=\"control-text\">
          ";
            // line 32
            if (((isset($context["vipStatus"]) ? $context["vipStatus"] : null) == "ok")) {
                // line 33
                echo "            会员免费
          ";
            } else {
                // line 35
                echo "            ";
                if (($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled") && ($this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type") == "Coin"))) {
                    // line 36
                    echo "            <strong class=\"money\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "coinPrice", array()), "html", null, true);
                    echo "</strong>
            <span class=\"text-muted\">";
                    // line 37
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
                    echo "</span>
            ";
                } else {
                    // line 39
                    echo "            <strong class=\"money\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "price", array()), "html", null, true);
                    echo "</strong>
        \t\t<span class=\"text-muted\">元</span>
            ";
                }
                // line 42
                echo "          ";
            }
            // line 43
            echo "      \t</span>
      </div>
    </div>
    ";
        }
        // line 47
        echo "
    ";
        // line 48
        if ((isset($context["billable"]) ? $context["billable"] : null)) {
            // line 49
            echo "      ";
            if ( !(isset($context["payments"]) ? $context["payments"] : null)) {
                // line 50
                echo "        <div class=\"alert alert-info\">";
                echo _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("payment.disabled_message"), "尚未开启支付模块，无法购买课程。");
                echo "</div>
      ";
            }
            // line 52
            echo "    ";
        } else {
            // line 53
            echo "      ";
            if ((isset($context["avatarAlert"]) ? $context["avatarAlert"] : null)) {
                // line 54
                echo "        <div class=\"alert alert-warning\">您还没有头像，设置以后才能加入学习<br />拥有一个独有的头像，老师和同学们能更容易关注到你哦～～ <a href=\"";
                echo $this->env->getExtension('routing')->getPath("settings_avatar");
                echo "\" class=\"alert-link\" target=\"_blank\">点击设置</a></div>
      ";
            } else {
                // line 56
                echo "        <div class=\"alert alert-info\">此课程为免费课程，无需购买，可直接加入学习。</div>
      ";
            }
            // line 58
            echo "    ";
        }
        // line 59
        echo "    <input type=\"hidden\" name=\"targetId\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "html", null, true);
        echo "\" />
    <input type=\"hidden\" name=\"payment\" value=\"alipay\" />
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

    ";
        // line 63
        $context["userinfo_enable"] = _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("course.buy_fill_userinfo"), false);
        // line 64
        echo "    ";
        $context["checkedFields"] = _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("course.userinfoFields"), array());
        // line 65
        echo "    ";
        $this->loadTemplate("TopxiaWebBundle:User:fill-userinfo-fields-block.html.twig", "TopxiaWebBundle:CourseOrder:buy-modal.html.twig", 65)->display(array_merge($context, array("isBuyFillUserinfo" => (isset($context["userinfo_enable"]) ? $context["userinfo_enable"] : null), "userinfoFieldsSetting" => (isset($context["checkedFields"]) ? $context["checkedFields"] : null), "userFields" => (isset($context["userFields"]) ? $context["userFields"] : null), "user" => (isset($context["user"]) ? $context["user"] : null), "showNavTip" => 1)));
        // line 66
        echo "
  </form>
";
    }

    // line 70
    public function block_footer($context, array $blocks = array())
    {
        // line 71
        echo "  ";
        $context["priceType"] = $this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type");
        // line 72
        echo "  ";
        if (((isset($context["billable"]) ? $context["billable"] : null) && (((((array_key_exists("priceType", $context)) ? (_twig_default_filter((isset($context["priceType"]) ? $context["priceType"] : null), "RMB")) : ("RMB")) == "RMB") && ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "price", array()) > 0)) || ((((array_key_exists("priceType", $context)) ? (_twig_default_filter((isset($context["priceType"]) ? $context["priceType"] : null), "RMB")) : ("RMB")) == "Coin") && ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "coinPrice", array()) > 0))))) {
            // line 73
            echo "    ";
            if ((isset($context["payments"]) ? $context["payments"] : null)) {
                // line 74
                echo "      ";
                if ((isset($context["member"]) ? $context["member"] : null)) {
                    // line 75
                    echo "        <span class=\"text-muted\">预览模式无法支付</span>
        <button class=\"btn btn-primary\" disabled=\"disabled\">去支付</button> 
      ";
                } else {
                    // line 78
                    echo "        ";
                    if (((isset($context["vipStatus"]) ? $context["vipStatus"] : null) == "ok")) {
                        // line 79
                        echo "           <button id=\"join-course-btn\" class=\"btn btn-primary\" data-loading-text=\"正在加入...\" type=\"submit\" data-toggle=\"form-submit\" data-target=\"#course-buy-form\">加入学习</button>
        ";
                    } else {
                        // line 81
                        echo "        <button id=\"course-pay\" class=\"btn btn-primary\" type=\"submit\" data-loading-text=\"正在创建订单...\" data-toggle=\"form-submit\" data-target=\"#course-buy-form\">去支付</button>
        ";
                    }
                    // line 83
                    echo "      ";
                }
                // line 84
                echo "    ";
            } elseif (( !(isset($context["payments"]) ? $context["payments"] : null) && ((isset($context["vipStatus"]) ? $context["vipStatus"] : null) == "ok"))) {
                // line 85
                echo "      <button id=\"join-course-btn\" class=\"btn btn-primary\" 
        ";
                // line 86
                if ((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "status", array()) != "published") || (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) == "live") && ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "studentNum", array()) >= $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "maxStudentNum", array()))))) {
                    // line 87
                    echo "        disabled=\"disabled\"
        ";
                }
                // line 89
                echo "        data-loading-text=\"正在加入...\" data-submiting-text=\"正在加入...\" type=\"submit\" data-toggle=\"form-submit\" data-target=\"#course-buy-form\">加入学习</button>
    ";
            }
            // line 91
            echo "  ";
        } else {
            // line 92
            echo "    ";
            if ((isset($context["member"]) ? $context["member"] : null)) {
                // line 93
                echo "      <span class=\"text-muted\">预览模式无法加入学习</span>
      <button class=\"btn btn-primary\" disabled=\"disabled\">加入学习</button> 
    ";
            } else {
                // line 95
                echo "  
      ";
                // line 96
                if ( !(isset($context["avatarAlert"]) ? $context["avatarAlert"] : null)) {
                    // line 97
                    echo "        <button id=\"join-course-btn\" class=\"btn btn-primary\" 
        ";
                    // line 98
                    if ((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "status", array()) != "published") || (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) == "live") && ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "studentNum", array()) >= $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "maxStudentNum", array()))))) {
                        // line 99
                        echo "        disabled=\"disabled\"
        ";
                    }
                    // line 101
                    echo "        data-loading-text=\"正在加入...\" data-submiting-text=\"正在加入...\" type=\"submit\" data-toggle=\"form-submit\" data-target=\"#course-buy-form\">加入学习</button>
      ";
                }
                // line 103
                echo "    ";
            }
            // line 104
            echo "
  ";
        }
        // line 106
        echo "
  <script>
    app.load('course/buy-modal');
  </script>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseOrder:buy-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 106,  267 => 104,  264 => 103,  260 => 101,  256 => 99,  254 => 98,  251 => 97,  249 => 96,  246 => 95,  241 => 93,  238 => 92,  235 => 91,  231 => 89,  227 => 87,  225 => 86,  222 => 85,  219 => 84,  216 => 83,  212 => 81,  208 => 79,  205 => 78,  200 => 75,  197 => 74,  194 => 73,  191 => 72,  188 => 71,  185 => 70,  179 => 66,  176 => 65,  173 => 64,  171 => 63,  166 => 61,  160 => 59,  157 => 58,  153 => 56,  147 => 54,  144 => 53,  141 => 52,  135 => 50,  132 => 49,  130 => 48,  127 => 47,  121 => 43,  118 => 42,  111 => 39,  106 => 37,  101 => 36,  98 => 35,  94 => 33,  92 => 32,  86 => 28,  84 => 27,  77 => 23,  73 => 22,  65 => 17,  62 => 16,  58 => 14,  56 => 13,  53 => 12,  50 => 11,  40 => 10,  36 => 1,  33 => 8,  31 => 6,  30 => 5,  29 => 4,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% set billable = true %}*/
/* {% if (*/
/*   (setting('coin.coin_enabled') == 1 and setting('coin.price_type') == 'Coin' and course.coinPrice == 0)  */
/*   or (( not setting('coin.price_type') or setting('coin.price_type') == "RMB" ) and course.price == 0 )*/
/*   ) %}*/
/*   {% set billable = false %}*/
/* {% endif %}*/
/* {% block title %}{% if billable %}购买课程{% else %}加入学习{% endif %}{% endblock %}*/
/* {% block body %}*/
/* */
/*   {% if billable and course.type=="live" %}*/
/*     <div class="alert alert-info">注意：请在30分钟内完成支付，否则订单将会过期失效</div>*/
/*   {% endif %}*/
/*   <form id="course-buy-form" class="form-horizontal" method="post" */
/*   action="{{ path('course_buy_modify_user_info') }}"*/
/*   >*/
/*     <div class="form-group">*/
/*       <div class="col-sm-3 control-label">课程名称</div>*/
/*       <div class="col-sm-9 controls">*/
/*       	<span class="control-text text-muted">《{{ course.title }}》</span>*/
/*         <input type="hidden" name="lessonId" value="{{ lessonId}}">*/
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
/*             <strong class="money">{{ course.coinPrice }}</strong>*/
/*             <span class="text-muted">{{setting('coin.coin_name')}}</span>*/
/*             {% else %}*/
/*             <strong class="money">{{ course.price }}</strong>*/
/*         		<span class="text-muted">元</span>*/
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
/*       {% if avatarAlert %}*/
/*         <div class="alert alert-warning">您还没有头像，设置以后才能加入学习<br />拥有一个独有的头像，老师和同学们能更容易关注到你哦～～ <a href="{{ path('settings_avatar') }}" class="alert-link" target="_blank">点击设置</a></div>*/
/*       {% else %}*/
/*         <div class="alert alert-info">此课程为免费课程，无需购买，可直接加入学习。</div>*/
/*       {% endif %}*/
/*     {% endif %}*/
/*     <input type="hidden" name="targetId" value="{{ course.id }}" />*/
/*     <input type="hidden" name="payment" value="alipay" />*/
/*     <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/* */
/*     {% set userinfo_enable = setting('course.buy_fill_userinfo')|default(false) %}*/
/*     {% set checkedFields = setting('course.userinfoFields')|default([]) %}*/
/*     {% include 'TopxiaWebBundle:User:fill-userinfo-fields-block.html.twig' with {isBuyFillUserinfo:userinfo_enable, userinfoFieldsSetting:checkedFields, userFields:userFields, user:user, showNavTip:1} %}*/
/* */
/*   </form>*/
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/*   {% set priceType = setting("coin.price_type") %}*/
/*   {% if billable and ((priceType|default("RMB") == "RMB" and course.price > 0) or (priceType|default("RMB") == "Coin" and course.coinPrice > 0)) %}*/
/*     {% if payments %}*/
/*       {% if member %}*/
/*         <span class="text-muted">预览模式无法支付</span>*/
/*         <button class="btn btn-primary" disabled="disabled">去支付</button> */
/*       {% else %}*/
/*         {% if vipStatus == 'ok'%}*/
/*            <button id="join-course-btn" class="btn btn-primary" data-loading-text="正在加入..." type="submit" data-toggle="form-submit" data-target="#course-buy-form">加入学习</button>*/
/*         {% else %}*/
/*         <button id="course-pay" class="btn btn-primary" type="submit" data-loading-text="正在创建订单..." data-toggle="form-submit" data-target="#course-buy-form">去支付</button>*/
/*         {% endif %}*/
/*       {% endif %}*/
/*     {% elseif not payments and vipStatus == 'ok' %}*/
/*       <button id="join-course-btn" class="btn btn-primary" */
/*         {% if course.status != 'published' or (course.type == 'live' and course.studentNum >= course.maxStudentNum) %}*/
/*         disabled="disabled"*/
/*         {% endif %}*/
/*         data-loading-text="正在加入..." data-submiting-text="正在加入..." type="submit" data-toggle="form-submit" data-target="#course-buy-form">加入学习</button>*/
/*     {% endif %}*/
/*   {% else %}*/
/*     {% if member %}*/
/*       <span class="text-muted">预览模式无法加入学习</span>*/
/*       <button class="btn btn-primary" disabled="disabled">加入学习</button> */
/*     {% else %}  */
/*       {% if not avatarAlert %}*/
/*         <button id="join-course-btn" class="btn btn-primary" */
/*         {% if course.status != 'published' or (course.type == 'live' and course.studentNum >= course.maxStudentNum) %}*/
/*         disabled="disabled"*/
/*         {% endif %}*/
/*         data-loading-text="正在加入..." data-submiting-text="正在加入..." type="submit" data-toggle="form-submit" data-target="#course-buy-form">加入学习</button>*/
/*       {% endif %}*/
/*     {% endif %}*/
/* */
/*   {% endif %}*/
/* */
/*   <script>*/
/*     app.load('course/buy-modal');*/
/*   </script>*/
/* {% endblock %}*/
