<?php

/* TopxiaWebBundle:Course/Part:normal-header-buy-btn.html.twig */
class __TwigTemplate_170fc0421742e665e9bd6dd272845cddd009ea55af562622e0447f791c9bd79c extends Twig_Template
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
        if ((((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "buyable", array()), true)) : (true)) == false) && ((isset($context["userVipStatus"]) ? $context["userVipStatus"] : null) != "ok"))) {
            // line 2
            echo "  该课程为限制课程，请联系客服
";
        } else {
            // line 4
            echo "  <a class=\"btn btn-primary btn-lg\" 
    ";
            // line 5
            if (((_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("course.buy_fill_userinfo"), false) || (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "approval", array()) && $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "approvalStatus", array()) != "approved"))) || $this->env->getExtension('topxia_web_twig')->getSetting("user_partner.avatar_alert"))) {
                // line 6
                echo "      href=\"#modal\" 
      data-toggle=\"modal\" 
      data-url=\"";
                // line 8
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_buy", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "targetType" => "course")), "html", null, true);
                echo "\"
    ";
            } elseif ((            // line 9
(isset($context["userVipStatus"]) ? $context["userVipStatus"] : null) == "ok")) {
                // line 10
                echo "      id=\"vip-join-course\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_become_use_member", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                echo "\"
    ";
            } else {
                // line 12
                echo "      href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("order_show", array("targetId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "targetType" => "course")), "html", null, true);
                echo "\"
    ";
            }
            // line 14
            echo "    ";
            if ((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "status", array()) != "published") || (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "maxStudentNum", array()) > 0) && ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "studentNum", array()) >= $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "maxStudentNum", array()))))) {
                // line 15
                echo "      disabled=\"disabled\"
    ";
            }
            // line 17
            echo "  >
    ";
            // line 18
            if (((isset($context["userVipStatus"]) ? $context["userVipStatus"] : null) == "ok")) {
                // line 19
                echo "      加入学习
    ";
            } else {
                // line 21
                echo "      ";
                if (($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled") && ($this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type") == "Coin"))) {
                    // line 22
                    echo "        ";
                    if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "coinPrice", array()) > 0)) {
                        echo "购买课程";
                    } else {
                        echo "加入学习";
                    }
                    echo "</a>                
      ";
                } else {
                    // line 24
                    echo "        ";
                    if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "price", array()) > 0)) {
                        echo "购买课程";
                    } else {
                        echo "加入学习";
                    }
                    echo "</a>
      ";
                }
                // line 26
                echo "    ";
            }
            // line 27
            echo "  </a>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course/Part:normal-header-buy-btn.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 27,  91 => 26,  81 => 24,  71 => 22,  68 => 21,  64 => 19,  62 => 18,  59 => 17,  55 => 15,  52 => 14,  46 => 12,  40 => 10,  38 => 9,  34 => 8,  30 => 6,  28 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if course.buyable|default(true) == false and userVipStatus != 'ok' %}*/
/*   该课程为限制课程，请联系客服*/
/* {% else %}*/
/*   <a class="btn btn-primary btn-lg" */
/*     {% if setting("course.buy_fill_userinfo")|default(false) or (course.approval and app.user and app.user.approvalStatus != 'approved') or setting('user_partner.avatar_alert') %}*/
/*       href="#modal" */
/*       data-toggle="modal" */
/*       data-url="{{ path('course_buy', {id:course.id, targetType:'course'}) }}"*/
/*     {% elseif userVipStatus == 'ok' %}*/
/*       id="vip-join-course" data-url="{{ path('course_become_use_member', {id:course.id}) }}"*/
/*     {% else %}*/
/*       href="{{ path('order_show', {targetId:course.id, targetType:'course'}) }}"*/
/*     {% endif %}*/
/*     {% if course.status != 'published' or (course.maxStudentNum > 0 and course.studentNum >= course.maxStudentNum) %}*/
/*       disabled="disabled"*/
/*     {% endif %}*/
/*   >*/
/*     {% if userVipStatus == 'ok' %}*/
/*       加入学习*/
/*     {% else %}*/
/*       {% if setting('coin.coin_enabled') and setting('coin.price_type') == 'Coin' %}*/
/*         {% if course.coinPrice > 0 %}购买课程{% else %}加入学习{% endif %}</a>                */
/*       {% else %}*/
/*         {% if course.price > 0 %}购买课程{% else %}加入学习{% endif %}</a>*/
/*       {% endif %}*/
/*     {% endif %}*/
/*   </a>*/
/* {% endif %}*/
