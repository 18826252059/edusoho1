<?php

/* ClassroomBundle:Classroom:role.html.twig */
class __TwigTemplate_18314eac18279be4c68c8b1b16e05c41074777059ea6c37676d8e89de0d05c76 extends Twig_Template
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
        if (twig_in_filter("auditor", $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array()))) {
            // line 2
            echo "  <div class=\"panel panel-default class-join-header-bottom\">
    <div class=\"panel-body\">

      <div class=\"hint\">
        您现在是 <span>旁听生</span>，只能有限参与，";
            // line 6
            if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "price", array()) > 0)) {
                echo "购买";
            }
            echo "成为正式学员后即可完整学习
      </div>

      ";
            // line 9
            if (($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled") && ($this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type") == "Coin"))) {
                // line 10
                echo "        <div class=\"class-price\">";
                if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "price", array()) > 0)) {
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetPrice(($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "price", array()) * $this->env->getExtension('topxia_web_twig')->getSetting("coin.cash_rate"))), "html", null, true);
                    echo "<span>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
                    echo "</span>";
                } else {
                    echo "免费";
                }
                echo "<del>";
                echo twig_escape_filter($this->env, (isset($context["coinPrice"]) ? $context["coinPrice"] : null), "html", null, true);
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
                echo "</del></div>
      ";
            } else {
                // line 12
                echo "        <div class=\"class-price\">";
                if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "price", array()) > 0)) {
                    echo "¥";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "price", array()), "html", null, true);
                } else {
                    echo "免费";
                }
                echo " <del>¥";
                echo twig_escape_filter($this->env, (isset($context["price"]) ? $context["price"] : null), "html", null, true);
                echo "</del></div>
      ";
            }
            // line 14
            echo "
      ";
            // line 15
            if ((($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "status", array()) == "published") || (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "previewAs"), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "get", array(0 => "previewAs"), "method"), "")) : ("")))) {
                // line 16
                echo "        <div class=\"row\">
          <div class=\"col-md-6 col-sm-6 class-freebuy\">
            ";
                // line 18
                if ((isset($context["classroomMemberLevel"]) ? $context["classroomMemberLevel"] : null)) {
                    // line 19
                    echo "              ";
                    if (((isset($context["checkMemberLevelResult"]) ? $context["checkMemberLevelResult"] : null) == "not_login")) {
                        // line 20
                        echo "                <a href=\"";
                        echo $this->env->getExtension('routing')->getPath("login");
                        echo "\" >";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroomMemberLevel"]) ? $context["classroomMemberLevel"] : null), "name", array()), "html", null, true);
                        echo "，免费学</a>  
              ";
                    } elseif (twig_in_filter(                    // line 21
(isset($context["checkMemberLevelResult"]) ? $context["checkMemberLevelResult"] : null), array(0 => "not_member", 1 => "member_expired"))) {
                        // line 22
                        echo "                <a href=\"";
                        echo $this->env->getExtension('routing')->getPath("vip_buy");
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroomMemberLevel"]) ? $context["classroomMemberLevel"] : null), "name", array()), "html", null, true);
                        echo "，免费学</a>  
              ";
                    } elseif ((                    // line 23
(isset($context["checkMemberLevelResult"]) ? $context["checkMemberLevelResult"] : null) == "level_low")) {
                        // line 24
                        echo "                <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vip_upgrade", array("level" => $this->getAttribute((isset($context["classroomMemberLevel"]) ? $context["classroomMemberLevel"] : null), "id", array()))), "html", null, true);
                        echo "\" >";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroomMemberLevel"]) ? $context["classroomMemberLevel"] : null), "name", array()), "html", null, true);
                        echo "，免费学</a>
              ";
                    } elseif ((                    // line 25
(isset($context["checkMemberLevelResult"]) ? $context["checkMemberLevelResult"] : null) == "ok")) {
                        // line 26
                        echo "                <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_vip_buy", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
                        echo "\" >";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroomMemberLevel"]) ? $context["classroomMemberLevel"] : null), "name", array()), "html", null, true);
                        echo "，免费学</a>
              ";
                    }
                    // line 28
                    echo "            ";
                }
                // line 29
                echo "          </div>
          ";
                // line 30
                if ((isset($context["classroomMemberLevel"]) ? $context["classroomMemberLevel"] : null)) {
                    // line 31
                    echo "            ";
                    if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "price", array()) > 0)) {
                        // line 32
                        echo "            <div class=\"col-md-6 col-sm-6 class-buy\">
              <a class=\"btn btn-primary btn-block btn-lg\" href=\"";
                        // line 33
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("order_show", array("targetId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "targetType" => "classroom")), "html", null, true);
                        echo "\">加入购买</a>
            </div>
            ";
                    } else {
                        // line 36
                        echo "            <div class=\"col-md-6 col-sm-6 class-buy\">
              <a class=\"btn btn-primary btn-block btn-lg\" href=\"";
                        // line 37
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("order_show", array("targetId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "targetType" => "classroom")), "html", null, true);
                        echo "\">免费加入</a>
            </div>
            ";
                    }
                    // line 40
                    echo "          ";
                }
                // line 41
                echo "
          ";
                // line 42
                if ( !(isset($context["classroomMemberLevel"]) ? $context["classroomMemberLevel"] : null)) {
                    // line 43
                    echo "            ";
                    if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "price", array()) > 0)) {
                        // line 44
                        echo "            <div class=\"class-buy\">
              <a class=\"btn btn-primary btn-block btn-lg\" href=\"";
                        // line 45
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("order_show", array("targetId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "targetType" => "classroom")), "html", null, true);
                        echo "\">加入购买</a>
            </div> 
            ";
                    } else {
                        // line 48
                        echo "            <div class=\"class-buy\">
              <a class=\"btn btn-primary btn-block btn-lg\" href=\"";
                        // line 49
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("order_show", array("targetId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "targetType" => "classroom")), "html", null, true);
                        echo "\">免费加入</a>
            </div>
            ";
                    }
                    // line 52
                    echo "          ";
                }
                // line 53
                echo "        </div>
      ";
            }
            // line 55
            echo "      
    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom:role.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 55,  176 => 53,  173 => 52,  167 => 49,  164 => 48,  158 => 45,  155 => 44,  152 => 43,  150 => 42,  147 => 41,  144 => 40,  138 => 37,  135 => 36,  129 => 33,  126 => 32,  123 => 31,  121 => 30,  118 => 29,  115 => 28,  107 => 26,  105 => 25,  98 => 24,  96 => 23,  89 => 22,  87 => 21,  80 => 20,  77 => 19,  75 => 18,  71 => 16,  69 => 15,  66 => 14,  53 => 12,  37 => 10,  35 => 9,  27 => 6,  21 => 2,  19 => 1,);
    }
}
/* {% if  'auditor' in member.role %}*/
/*   <div class="panel panel-default class-join-header-bottom">*/
/*     <div class="panel-body">*/
/* */
/*       <div class="hint">*/
/*         您现在是 <span>旁听生</span>，只能有限参与，{% if classroom.price > 0 %}购买{% endif %}成为正式学员后即可完整学习*/
/*       </div>*/
/* */
/*       {% if setting('coin.coin_enabled') and setting('coin.price_type') == 'Coin' %}*/
/*         <div class="class-price">{% if classroom.price > 0 %}{{set_price(classroom.price * setting('coin.cash_rate') )}}<span>{{setting('coin.coin_name')}}</span>{% else %}免费{% endif %}<del>{{coinPrice}}{{setting('coin.coin_name')}}</del></div>*/
/*       {% else %}*/
/*         <div class="class-price">{% if classroom.price > 0 %}¥{{classroom.price}}{% else %}免费{% endif %} <del>¥{{price}}</del></div>*/
/*       {% endif %}*/
/* */
/*       {% if classroom.status == "published" or app.request.get('previewAs')|default("") %}*/
/*         <div class="row">*/
/*           <div class="col-md-6 col-sm-6 class-freebuy">*/
/*             {% if classroomMemberLevel %}*/
/*               {% if checkMemberLevelResult == 'not_login' %}*/
/*                 <a href="{{ path('login') }}" >{{ classroomMemberLevel.name }}，免费学</a>  */
/*               {% elseif checkMemberLevelResult in ['not_member', 'member_expired'] %}*/
/*                 <a href="{{ path('vip_buy') }}">{{ classroomMemberLevel.name }}，免费学</a>  */
/*               {% elseif checkMemberLevelResult == 'level_low' %}*/
/*                 <a href="{{ path('vip_upgrade', {level:classroomMemberLevel.id}) }}" >{{ classroomMemberLevel.name }}，免费学</a>*/
/*               {% elseif checkMemberLevelResult == 'ok' %}*/
/*                 <a href="{{ path('classroom_vip_buy', {id:classroom.id}) }}" >{{ classroomMemberLevel.name }}，免费学</a>*/
/*               {% endif %}*/
/*             {% endif %}*/
/*           </div>*/
/*           {% if classroomMemberLevel %}*/
/*             {% if classroom.price > 0 %}*/
/*             <div class="col-md-6 col-sm-6 class-buy">*/
/*               <a class="btn btn-primary btn-block btn-lg" href="{{path('order_show',{targetId:classroom.id,targetType:'classroom'})}}">加入购买</a>*/
/*             </div>*/
/*             {% else %}*/
/*             <div class="col-md-6 col-sm-6 class-buy">*/
/*               <a class="btn btn-primary btn-block btn-lg" href="{{path('order_show',{targetId:classroom.id,targetType:'classroom'})}}">免费加入</a>*/
/*             </div>*/
/*             {% endif %}*/
/*           {% endif %}*/
/* */
/*           {% if not classroomMemberLevel %}*/
/*             {% if classroom.price > 0 %}*/
/*             <div class="class-buy">*/
/*               <a class="btn btn-primary btn-block btn-lg" href="{{path('order_show',{targetId:classroom.id,targetType:'classroom'})}}">加入购买</a>*/
/*             </div> */
/*             {% else %}*/
/*             <div class="class-buy">*/
/*               <a class="btn btn-primary btn-block btn-lg" href="{{path('order_show',{targetId:classroom.id,targetType:'classroom'})}}">免费加入</a>*/
/*             </div>*/
/*             {% endif %}*/
/*           {% endif %}*/
/*         </div>*/
/*       {% endif %}*/
/*       */
/*     </div>*/
/*   </div>*/
/* {% endif %}*/
