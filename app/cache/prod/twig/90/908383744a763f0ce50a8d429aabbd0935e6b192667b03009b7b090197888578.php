<?php

/* ClassroomBundle:Classroom/Part:classroom-buy-btn.html.twig */
class __TwigTemplate_086acf5268cc7e25e7f624a2cdf04379d488b3b61316435682029dfa6c30d35e extends Twig_Template
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
        if (_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("course.buy_fill_userinfo"), false)) {
            // line 2
            echo "  ";
            if (((isset($context["checkMemberLevelResult"]) ? $context["checkMemberLevelResult"] : null) == "ok")) {
                // line 3
                echo "    <a  class=\"btn btn-primary btn-lg\"  href=\"#modal\" data-toggle=\"modal\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_buy", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroomMemberLevel"]) ? $context["classroomMemberLevel"] : null), "name", array()), "html", null, true);
                echo "，免费学</a>
  ";
            } else {
                // line 5
                echo "    ";
                if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "buyable", array()) == 1)) {
                    // line 6
                    echo "      <a class=\"btn btn-link\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_become_auditor", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
                    echo "\">进去逛逛</a>
      <a class=\"btn btn-primary btn-lg\" href=\"#modal\" data-toggle=\"modal\" data-url=\"";
                    // line 7
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_buy", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
                    echo "\">加入购买</a>
    ";
                } else {
                    // line 9
                    echo "      <button type=\"button\" style=\"pointer-events:auto\" class=\"btn btn-warning disabled\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"该";
                    echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
                    echo "无法在线购买，若需帮助请联系客服\">无法购买</button>
    ";
                }
                // line 11
                echo "  ";
            }
        } else {
            // line 13
            echo "  ";
            if ((($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "price", array()) > 0) && (( !(isset($context["canFreeJoin"]) ? $context["canFreeJoin"] : null) && ($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "vipLevelId", array()) == 0)) || twig_in_filter((isset($context["checkMemberLevelResult"]) ? $context["checkMemberLevelResult"] : null), array(0 => "not_member", 1 => "not_login", 2 => "member_expired", 3 => "level_low"))))) {
                // line 14
                echo "    ";
                if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "buyable", array()) == 1)) {
                    // line 15
                    echo "      <a class=\"btn btn-link\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_become_auditor", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
                    echo "\">进去逛逛</a>
      <a class=\"btn btn-primary btn-lg\" href=\"";
                    // line 16
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("order_show", array("targetId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "targetType" => "classroom")), "html", null, true);
                    echo "\">加入购买</a>
    ";
                } else {
                    // line 18
                    echo "      <button type=\"button\" style=\"pointer-events:auto\" class=\"btn btn-warning disabled\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"该";
                    echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
                    echo "无法在线购买，若需帮助请联系客服\">无法购买</button>
    ";
                }
                // line 20
                echo "  ";
            } elseif (twig_in_filter((isset($context["checkMemberLevelResult"]) ? $context["checkMemberLevelResult"] : null), array(0 => "not_member", 1 => "member_expired"))) {
                // line 21
                echo "    <a href=\"";
                echo $this->env->getExtension('routing')->getPath("vip_buy");
                echo "\"  class=\"btn btn-primary btn-lg\" >";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroomMemberLevel"]) ? $context["classroomMemberLevel"] : null), "name", array()), "html", null, true);
                echo "，免费学</a>  

  ";
            } elseif ((            // line 23
(isset($context["checkMemberLevelResult"]) ? $context["checkMemberLevelResult"] : null) == "level_low")) {
                // line 24
                echo "    <a  class=\"btn btn-primary btn-lg\"  href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("vip_upgrade", array("level" => $this->getAttribute((isset($context["classroomMemberLevel"]) ? $context["classroomMemberLevel"] : null), "id", array()))), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroomMemberLevel"]) ? $context["classroomMemberLevel"] : null), "name", array()), "html", null, true);
                echo "，免费学</a>

  ";
            } elseif ((            // line 26
(isset($context["checkMemberLevelResult"]) ? $context["checkMemberLevelResult"] : null) == "ok")) {
                // line 27
                echo "    <a  class=\"btn btn-primary btn-lg\"  href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_vip_buy", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroomMemberLevel"]) ? $context["classroomMemberLevel"] : null), "name", array()), "html", null, true);
                echo "，免费学</a>

  ";
            } else {
                // line 30
                echo "    ";
                if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "buyable", array()) == 1)) {
                    // line 31
                    echo "      <a  class=\"btn btn-primary btn-lg\"  href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("order_show", array("targetId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "targetType" => "classroom")), "html", null, true);
                    echo "\"
        ";
                    // line 32
                    if ((((isset($context["canFreeJoin"]) ? $context["canFreeJoin"] : null) && $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) && ($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "price", array()) > 0))) {
                        // line 33
                        echo "        data-toggle=\"tooltip\"
        data-placement=\"top\"
        title=\"您之前已购买了本";
                        // line 35
                        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
                        echo "的所有收费课程，可免费学习！\"
        ";
                    }
                    // line 37
                    echo "      >免费加入</a>
    ";
                } else {
                    // line 39
                    echo "    <button type=\"button\" style=\"pointer-events:auto\" class=\"btn btn-warning disabled\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"该";
                    echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
                    echo "无法在线购买，若需帮助请联系客服\">无法购买</button>
    ";
                }
                // line 41
                echo "  ";
            }
        }
        // line 43
        echo "



";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom/Part:classroom-buy-btn.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 43,  138 => 41,  132 => 39,  128 => 37,  123 => 35,  119 => 33,  117 => 32,  112 => 31,  109 => 30,  100 => 27,  98 => 26,  90 => 24,  88 => 23,  80 => 21,  77 => 20,  71 => 18,  66 => 16,  61 => 15,  58 => 14,  55 => 13,  51 => 11,  45 => 9,  40 => 7,  35 => 6,  32 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if setting("course.buy_fill_userinfo")|default(false) %}*/
/*   {% if checkMemberLevelResult == 'ok' %}*/
/*     <a  class="btn btn-primary btn-lg"  href="#modal" data-toggle="modal" data-url="{{ path('classroom_buy',{id:classroom.id}) }}" >{{ classroomMemberLevel.name }}，免费学</a>*/
/*   {% else %}*/
/*     {% if classroom.buyable == 1 %}*/
/*       <a class="btn btn-link" href="{{ path('classroom_become_auditor',{id:classroom.id}) }}">进去逛逛</a>*/
/*       <a class="btn btn-primary btn-lg" href="#modal" data-toggle="modal" data-url="{{ path('classroom_buy', {id:classroom.id}) }}">加入购买</a>*/
/*     {% else %}*/
/*       <button type="button" style="pointer-events:auto" class="btn btn-warning disabled" data-toggle="tooltip" data-placement="top" title="该{{setting("classroom.name")|default("班级")}}无法在线购买，若需帮助请联系客服">无法购买</button>*/
/*     {% endif %}*/
/*   {% endif %}*/
/* {% else %}*/
/*   {% if classroom.price > 0 and ( ( not canFreeJoin and classroom.vipLevelId == 0) or checkMemberLevelResult in ['not_member', 'not_login', 'member_expired', 'level_low']) %}*/
/*     {% if classroom.buyable == 1 %}*/
/*       <a class="btn btn-link" href="{{path('classroom_become_auditor',{id:classroom.id})}}">进去逛逛</a>*/
/*       <a class="btn btn-primary btn-lg" href="{{path('order_show',{targetId:classroom.id,targetType:'classroom'})}}">加入购买</a>*/
/*     {% else %}*/
/*       <button type="button" style="pointer-events:auto" class="btn btn-warning disabled" data-toggle="tooltip" data-placement="top" title="该{{setting("classroom.name")|default("班级")}}无法在线购买，若需帮助请联系客服">无法购买</button>*/
/*     {% endif %}*/
/*   {% elseif checkMemberLevelResult in ['not_member', 'member_expired'] %}*/
/*     <a href="{{ path('vip_buy') }}"  class="btn btn-primary btn-lg" >{{ classroomMemberLevel.name }}，免费学</a>  */
/* */
/*   {% elseif checkMemberLevelResult == 'level_low' %}*/
/*     <a  class="btn btn-primary btn-lg"  href="{{ path('vip_upgrade', {level:classroomMemberLevel.id}) }}" >{{ classroomMemberLevel.name }}，免费学</a>*/
/* */
/*   {% elseif checkMemberLevelResult == 'ok' %}*/
/*     <a  class="btn btn-primary btn-lg"  href="{{ path('classroom_vip_buy', {id:classroom.id}) }}" >{{ classroomMemberLevel.name }}，免费学</a>*/
/* */
/*   {% else %}*/
/*     {% if classroom.buyable == 1 %}*/
/*       <a  class="btn btn-primary btn-lg"  href="{{path('order_show',{targetId:classroom.id,targetType:'classroom'})}}"*/
/*         {% if canFreeJoin and app.user and classroom.price > 0 %}*/
/*         data-toggle="tooltip"*/
/*         data-placement="top"*/
/*         title="您之前已购买了本{{setting('classroom.name')|default('班级')}}的所有收费课程，可免费学习！"*/
/*         {% endif %}*/
/*       >免费加入</a>*/
/*     {% else %}*/
/*     <button type="button" style="pointer-events:auto" class="btn btn-warning disabled" data-toggle="tooltip" data-placement="top" title="该{{setting("classroom.name")|default("班级")}}无法在线购买，若需帮助请联系客服">无法购买</button>*/
/*     {% endif %}*/
/*   {% endif %}*/
/* {% endif %}*/
/* */
/* */
/* */
/* */
/* */
