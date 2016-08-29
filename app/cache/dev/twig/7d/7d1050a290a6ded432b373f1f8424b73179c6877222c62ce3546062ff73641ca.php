<?php

/* ClassroomBundle:Classroom:classroom-header.html.twig */
class __TwigTemplate_99aa6edd5494f1ea0b167e30ce7cf1161b95ef8812338610b569ca27124c1644 extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "ClassroomBundle:Classroom:classroom-header.html.twig", 1);
        // line 2
        echo "
<section class=\"class-header before\">
  <div class=\"container\">
    ";
        // line 5
        if (((($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "locked", array()), "0")) : ("0")) == "1")) {
            // line 6
            echo "      <div class=\"alert alert-warning\">
        您的退款申请已提交，请等待管理员的处理。
        <button class=\"btn btn-warning btn-sm cancel-refund\" data-url=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("order_cancel_refund", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()), "targetType" => "classroom")), "html", null, true);
            echo "\">取消退款，继续学习！</button>
      </div>
    ";
        }
        // line 11
        echo "
    <ol class=\"breadcrumb breadcrumb-o\">
      <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">首页</a></li>
      ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : $this->getContext($context, "breadcrumbs")));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 15
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_explore", array("category" => $this->getAttribute($context["breadcrumb"], "code", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["breadcrumb"], "name", array()), "html", null, true);
            echo "</a></li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "      <li class=\"active\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "title", array()), "html", null, true);
        echo "</li>
    </ol>
    
    <div class=\"class-header-mian\">
      <div class=\"class-bg-layer\"></div>
      <div class=\"class-header-bg clearfix\">
        <div class=\"class-img\">
          <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
        echo "\">
            <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "largePicture", array()), "classroom.png"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "title", array()), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
        echo "\">
          </a>
          ";
        // line 27
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "status", array()) == "closed")) {
            // line 28
            echo "            <span class=\"label label-danger\">已关闭</span>
          ";
        }
        // line 30
        echo "        </div>
        <div class=\"class-info\">
          <h2 class=\"title\">
            ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "title", array()), "html", null, true);
        echo "
            <span class=\"es-qrcode top\" data-url=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_qrcode", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
        echo "\">
              <i class=\"es-icon es-icon-qrcode\"></i>
              <span class=\"qrcode-popover\">
                <img src=\"\" alt=\"\">
                扫二维码继续学习
              </span>
            </span>
          </h2>
          <div class=\"metas\">
            <div class=\"score\">
              ";
        // line 44
        echo $context["web_macro"]->getstar($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "rating", array()));
        echo "
              <span>(";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "ratingNum", array()), "html", null, true);
        echo "评价)</span>
            </div>
            <div class=\"price\">
              价格： 
              <span>
                ";
        // line 50
        if (($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled") && ($this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type") == "Coin"))) {
            // line 51
            echo "                    ";
            if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "price", array()) > 0)) {
                // line 52
                echo "                   ";
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "price", array()) * $this->env->getExtension('topxia_web_twig')->getSetting("coin.cash_rate")), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
                echo "
                    ";
            } else {
                // line 54
                echo "                    免费
                    ";
            }
            // line 56
            echo "                ";
        } else {
            // line 57
            echo "                  ";
            if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "price", array()) > 0)) {
                // line 58
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "price", array()), "html", null, true);
                echo "元
                  ";
            } else {
                // line 60
                echo "                    免费
                  ";
            }
            // line 62
            echo "                ";
        }
        // line 63
        echo "              </span>
            </div>
          </div>
          <ul class=\"class-data hidden-sm clearfix ";
        // line 66
        if ((isset($context["classroomMemberLevel"]) ? $context["classroomMemberLevel"] : $this->getContext($context, "classroomMemberLevel"))) {
            echo "active";
        }
        echo "\">
            <li>
              <p><i class=\"es-icon es-icon-person\"></i></p>
              <p>学员(";
        // line 69
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "studentNum", array()) + $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "auditorNum", array())), "html", null, true);
        echo ")</p>
            </li>
            <li>
              <p><i class=\"es-icon es-icon-book\"></i></p>
              <p>课程(";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "courseNum", array()), "html", null, true);
        echo ")</p>
            </li>
            <li>
              <span class=\"es-share top\">
                <a class=\"dropdown-toggle\" href=\"\" data-toggle=\"dropdown\"  aria-labelledby=\"dropdownMenu1\">
                  <p><i class=\"es-icon es-icon-share\"></i></p>
                  <p>分享</p>
                </a>
                ";
        // line 81
        $this->loadTemplate("TopxiaWebBundle:Common:share-dropdown.html.twig", "ClassroomBundle:Classroom:classroom-header.html.twig", 81)->display(array_merge($context, array("type" => "classroom")));
        // line 82
        echo "              </span>
            </li>
          ";
        // line 84
        if (((isset($context["classroomMemberLevel"]) ? $context["classroomMemberLevel"] : $this->getContext($context, "classroomMemberLevel")) && $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "showable", array()))) {
            // line 85
            echo "            <li class=\"hidden-xs color-warning icon-vip\" title=\"会员";
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "\" data-content=\"";
            $this->loadTemplate("TopxiaWebBundle:Course:Part/normal-header-vip.html.twig", "ClassroomBundle:Classroom:classroom-header.html.twig", 85)->display(array_merge($context, array("courseVip" => (isset($context["classroomMemberLevel"]) ? $context["classroomMemberLevel"] : $this->getContext($context, "classroomMemberLevel")), "userVipStatus" => (isset($context["checkMemberLevelResult"]) ? $context["checkMemberLevelResult"] : $this->getContext($context, "checkMemberLevelResult")))));
            echo "\" data-original-title=\"会员";
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "\" title=\"会员";
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "\">
              <i class=\"es-icon es-icon-crown\"></i><br>
                ";
            // line 87
            $this->loadTemplate("TopxiaWebBundle:Course:Part/normal-header-vip-link.html.twig", "ClassroomBundle:Classroom:classroom-header.html.twig", 87)->display(array_merge($context, array("userVipStatus" => (isset($context["checkMemberLevelResult"]) ? $context["checkMemberLevelResult"] : $this->getContext($context, "checkMemberLevelResult")), "level" => (isset($context["classroomMemberLevel"]) ? $context["classroomMemberLevel"] : $this->getContext($context, "classroomMemberLevel")))));
            // line 88
            echo "            </li>
          ";
        }
        // line 90
        echo "          </ul>

          <div class=\"bottom-metas clearfix\">
            <div class=\"class-serve hidden-sm hidden-xs\">
              <div class=\"serve-frame\">
                承<br>诺<br>服<br>务
              </div>
              ";
        // line 97
        $this->loadTemplate("ClassroomBundle:Classroom:service-block.html.twig", "ClassroomBundle:Classroom:classroom-header.html.twig", 97)->display(array_merge($context, array("services" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "service", array()))));
        // line 98
        echo "            </div>

            ";
        // line 100
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "showable", array()) && ($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "status", array()) != "closed"))) {
            // line 101
            echo "              <div class=\"btn-buy\">
                ";
            // line 102
            $this->loadTemplate("ClassroomBundle:Classroom:Part/classroom-buy-btn.html.twig", "ClassroomBundle:Classroom:classroom-header.html.twig", 102)->display($context);
            // line 103
            echo "                
              </div>
            ";
        }
        // line 106
        echo "            
          </div>
        </div>
      ";
        // line 109
        if ($this->env->getExtension('topxia_web_twig')->isPermitRole($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()), "Manage")) {
            // line 110
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default setting\" title=\"";
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "管理\">
          <i class=\"es-icon es-icon-setting\"></i>
        </a>
      ";
        }
        // line 114
        echo "
      </div>
    </div>
  </div>
</section>            

";
        // line 120
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("ClassroomPlan")) {
            // line 121
            echo "  ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ClassroomPlanBundle:ClassroomPlan:joinPlanBlock", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))));
            echo "
";
        }
        // line 122
        echo "    
";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom:classroom-header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 122,  272 => 121,  270 => 120,  262 => 114,  252 => 110,  250 => 109,  245 => 106,  240 => 103,  238 => 102,  235 => 101,  233 => 100,  229 => 98,  227 => 97,  218 => 90,  214 => 88,  212 => 87,  200 => 85,  198 => 84,  194 => 82,  192 => 81,  181 => 73,  174 => 69,  166 => 66,  161 => 63,  158 => 62,  154 => 60,  148 => 58,  145 => 57,  142 => 56,  138 => 54,  130 => 52,  127 => 51,  125 => 50,  117 => 45,  113 => 44,  100 => 34,  96 => 33,  91 => 30,  87 => 28,  85 => 27,  76 => 25,  72 => 24,  61 => 17,  50 => 15,  46 => 14,  42 => 13,  38 => 11,  32 => 8,  28 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }
}
/* {% import 'TopxiaWebBundle::macro.html.twig' as web_macro %}*/
/* */
/* <section class="class-header before">*/
/*   <div class="container">*/
/*     {% if member.locked|default("0") == "1" %}*/
/*       <div class="alert alert-warning">*/
/*         您的退款申请已提交，请等待管理员的处理。*/
/*         <button class="btn btn-warning btn-sm cancel-refund" data-url="{{ path('order_cancel_refund', {id:classroom.id, targetType:"classroom"}) }}">取消退款，继续学习！</button>*/
/*       </div>*/
/*     {% endif %}*/
/* */
/*     <ol class="breadcrumb breadcrumb-o">*/
/*       <li><a href="{{ path('homepage') }}">首页</a></li>*/
/*       {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ path('classroom_explore',{'category':breadcrumb.code}) }}">{{ breadcrumb.name }}</a></li>*/
/*       {% endfor %}*/
/*       <li class="active">{{ classroom.title }}</li>*/
/*     </ol>*/
/*     */
/*     <div class="class-header-mian">*/
/*       <div class="class-bg-layer"></div>*/
/*       <div class="class-header-bg clearfix">*/
/*         <div class="class-img">*/
/*           <a href="{{path('classroom_show',{id:classroom.id})}}">*/
/*             <img src="{{ filepath(classroom.largePicture, 'classroom.png') }}" alt="{{ classroom.title }}" href="{{path('classroom_show',{id:classroom.id})}}">*/
/*           </a>*/
/*           {% if classroom.status == 'closed' %}*/
/*             <span class="label label-danger">已关闭</span>*/
/*           {% endif %}*/
/*         </div>*/
/*         <div class="class-info">*/
/*           <h2 class="title">*/
/*             {{ classroom.title }}*/
/*             <span class="es-qrcode top" data-url="{{path('classroom_qrcode',{id: classroom.id})}}">*/
/*               <i class="es-icon es-icon-qrcode"></i>*/
/*               <span class="qrcode-popover">*/
/*                 <img src="" alt="">*/
/*                 扫二维码继续学习*/
/*               </span>*/
/*             </span>*/
/*           </h2>*/
/*           <div class="metas">*/
/*             <div class="score">*/
/*               {{ web_macro.star(classroom.rating) }}*/
/*               <span>({{ classroom.ratingNum }}评价)</span>*/
/*             </div>*/
/*             <div class="price">*/
/*               价格： */
/*               <span>*/
/*                 {% if setting('coin.coin_enabled') and setting('coin.price_type') == 'Coin' %}*/
/*                     {% if classroom.price > 0 %}*/
/*                    {{classroom.price * setting('coin.cash_rate') }} {{setting('coin.coin_name')}}*/
/*                     {% else %}*/
/*                     免费*/
/*                     {% endif %}*/
/*                 {% else %}*/
/*                   {% if classroom.price > 0 %}*/
/*                     {{ classroom.price }}元*/
/*                   {% else %}*/
/*                     免费*/
/*                   {% endif %}*/
/*                 {% endif %}*/
/*               </span>*/
/*             </div>*/
/*           </div>*/
/*           <ul class="class-data hidden-sm clearfix {% if classroomMemberLevel %}active{% endif %}">*/
/*             <li>*/
/*               <p><i class="es-icon es-icon-person"></i></p>*/
/*               <p>学员({{classroom.studentNum + classroom.auditorNum }})</p>*/
/*             </li>*/
/*             <li>*/
/*               <p><i class="es-icon es-icon-book"></i></p>*/
/*               <p>课程({{classroom.courseNum}})</p>*/
/*             </li>*/
/*             <li>*/
/*               <span class="es-share top">*/
/*                 <a class="dropdown-toggle" href="" data-toggle="dropdown"  aria-labelledby="dropdownMenu1">*/
/*                   <p><i class="es-icon es-icon-share"></i></p>*/
/*                   <p>分享</p>*/
/*                 </a>*/
/*                 {% include 'TopxiaWebBundle:Common:share-dropdown.html.twig' with {type:'classroom'} %}*/
/*               </span>*/
/*             </li>*/
/*           {% if classroomMemberLevel and  classroom.showable %}*/
/*             <li class="hidden-xs color-warning icon-vip" title="会员{{setting("classroom.name")|default("班级")}}" data-content="{% include 'TopxiaWebBundle:Course:Part/normal-header-vip.html.twig' with {courseVip:classroomMemberLevel,userVipStatus:checkMemberLevelResult} %}" data-original-title="会员{{setting("classroom.name")|default("班级")}}" title="会员{{setting("classroom.name")|default("班级")}}">*/
/*               <i class="es-icon es-icon-crown"></i><br>*/
/*                 {% include 'TopxiaWebBundle:Course:Part/normal-header-vip-link.html.twig' with {userVipStatus:checkMemberLevelResult, level: classroomMemberLevel} %}*/
/*             </li>*/
/*           {% endif %}*/
/*           </ul>*/
/* */
/*           <div class="bottom-metas clearfix">*/
/*             <div class="class-serve hidden-sm hidden-xs">*/
/*               <div class="serve-frame">*/
/*                 承<br>诺<br>服<br>务*/
/*               </div>*/
/*               {% include 'ClassroomBundle:Classroom:service-block.html.twig' with {'services':classroom.service }%}*/
/*             </div>*/
/* */
/*             {% if  classroom.showable and classroom.status != 'closed' %}*/
/*               <div class="btn-buy">*/
/*                 {% include 'ClassroomBundle:Classroom:Part/classroom-buy-btn.html.twig' %}*/
/*                 */
/*               </div>*/
/*             {% endif %}*/
/*             */
/*           </div>*/
/*         </div>*/
/*       {% if classroom_permit(classroom.id, 'Manage') %}*/
/*         <a href="{{path('classroom_manage',{id:classroom.id})}}" class="btn btn-default setting" title="{{ setting('classroom.name')|default("班级") }}管理">*/
/*           <i class="es-icon es-icon-setting"></i>*/
/*         </a>*/
/*       {% endif %}*/
/* */
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </section>            */
/* */
/* {% if is_plugin_installed('ClassroomPlan') %}*/
/*   {{ render(controller('ClassroomPlanBundle:ClassroomPlan:joinPlanBlock',{classroomId:classroom.id})) }}*/
/* {% endif %}    */
/* */
