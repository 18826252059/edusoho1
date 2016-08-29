<?php

/* ClassroomBundle:Classroom:classroom-join-header.html.twig */
class __TwigTemplate_31d4c7a1d534cb5fab67b7de3701c6f4eb87a1e66d273ac1b81fa0df1bb99504 extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "ClassroomBundle:Classroom:classroom-join-header.html.twig", 1);
        // line 2
        echo "<section class=\"class-header after ";
        if (twig_in_filter("auditor", $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array()))) {
            echo " auditor";
        }
        echo "\">
  <div class=\"container\">
  
    <ol class=\"breadcrumb breadcrumb-o\">
      <li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">首页</a></li>
      ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 8
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
        // line 10
        echo "      <li class=\"active\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "title", array()), "html", null, true);
        echo "</li>
    </ol>

    <div class=\"class-header-mian\">
      <div class=\"class-bg-layer\"></div>
      <div class=\"class-header-bg clearfix\">
        <div class=\"class-img\">
          <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
        echo "\">
            <img src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "largePicture", array()), "classroom.png"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "title", array()), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
        echo "\">
          </a>
        </div>
        <div class=\"class-info\">
          <h2 class=\"title\">
            ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "title", array()), "html", null, true);
        echo "
            <span class=\"es-qrcode top\" data-url=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_qrcode", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
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
        // line 34
        echo $context["web_macro"]->getstar($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "rating", array()));
        echo "
              <span>(";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "ratingNum", array()), "html", null, true);
        echo "评价)</span>
            </div>
            ";
        // line 37
        if (($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array()) == "auditor")) {
            // line 38
            echo "              <div class=\"price\">
                价格： <span>";
            // line 39
            if (($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled") && ($this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type") == "Coin"))) {
                // line 40
                echo "                      ";
                if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "price", array()) > 0)) {
                    // line 41
                    echo "                     ";
                    echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "price", array()) * $this->env->getExtension('topxia_web_twig')->getSetting("coin.cash_rate")), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
                    echo "
                      ";
                } else {
                    // line 43
                    echo "                      免费
                      ";
                }
                // line 45
                echo "                  ";
            } else {
                // line 46
                echo "                    ";
                if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "price", array()) > 0)) {
                    // line 47
                    echo "                      ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "price", array()), "html", null, true);
                    echo "元
                    ";
                } else {
                    // line 49
                    echo "                      免费
                    ";
                }
                // line 51
                echo "                  ";
            }
            echo "</span>
              </div>
            ";
        }
        // line 54
        echo "          </div>
          <div class=\"class-serve hidden-sm hidden-xs\">
            <div class=\"serve-frame\">
              承<br>诺<br>服<br>务
            </div>
            ";
        // line 59
        $this->loadTemplate("ClassroomBundle:Classroom:service-block.html.twig", "ClassroomBundle:Classroom:classroom-join-header.html.twig", 59)->display(array_merge($context, array("services" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "service", array()))));
        // line 60
        echo "          </div>
        </div>
        <div class=\"class-operation\">
          <ul class='class-data clearfix 
          ";
        // line 64
        if (($this->env->getExtension('topxia_web_twig')->isPermitRole($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "Take", true) &&  !((array_key_exists("isclassroomteacher", $context)) ? (_twig_default_filter((isset($context["isclassroomteacher"]) ? $context["isclassroomteacher"] : null), false)) : (false)))) {
            // line 65
            echo "          three-col
          ";
        } else {
            // line 67
            echo "          two-col
          ";
        }
        // line 69
        echo "          '>
            <li>
              <p><i class=\"es-icon es-icon-person\"></i></p>
              <p>学员(";
        // line 72
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "studentNum", array()) + $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "auditorNum", array())), "html", null, true);
        echo ")</p>
            </li>
            <li>
              <span class=\"es-share top\">
                <a class=\"dropdown-toggle\" href=\"\" data-toggle=\"dropdown\"  aria-labelledby=\"dropdownMenu1\">
                  <p><i class=\"es-icon es-icon-share\"></i></p>
                  <p>分享</p>
                </a>
                ";
        // line 80
        $this->loadTemplate("TopxiaWebBundle:Common:share-dropdown.html.twig", "ClassroomBundle:Classroom:classroom-join-header.html.twig", 80)->display(array_merge($context, array("type" => "classroom")));
        echo " 
              </span>
            </li>
            ";
        // line 83
        if (($this->env->getExtension('topxia_web_twig')->isPermitRole($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "Take", true) &&  !((array_key_exists("isclassroomteacher", $context)) ? (_twig_default_filter((isset($context["isclassroomteacher"]) ? $context["isclassroomteacher"] : null), false)) : (false)))) {
            // line 84
            echo "            ";
            if (!twig_in_filter("headTeacher", $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array()))) {
                // line 85
                echo "              <li>
                <a type=\"button\" 
                ";
                // line 87
                if ((twig_in_filter("student", $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array())) && ($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "orderId", array()) > 0))) {
                    // line 88
                    echo "                href=\"#modal\" 
                data-toggle=\"modal\" 
                data-url=\"";
                    // line 90
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("order_refund", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "targetType" => "classroom")), "html", null, true);
                    echo "\"
                ";
                } else {
                    // line 92
                    echo "                href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_exit", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
                    echo "\" id =\"quit\" 
                ";
                }
                // line 94
                echo "                >
                 <p><i class=\"es-icon es-icon-exit\"></i></p>
                 <p>退出</p>
                </a>
              </li>
            ";
            }
            // line 100
            echo "            ";
        }
        // line 101
        echo "          </ul>
          ";
        // line 102
        if (twig_in_filter("auditor", $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "role", array()))) {
            // line 103
            echo "            <div class=\"class-auditor hidden-sm\">
              您现在是<span class=\"color-warning\">旁听生</span>，不能完整学习<i class=\"es-icon es-icon-help color-primary\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"旁听生只能参与话题讨论，正式学员可以完整地学习所有内容，享受所有教学服务\"></i><br>
              
              ";
            // line 106
            if (_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("course.buy_fill_userinfo"), false)) {
                // line 107
                echo "                <a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_buy", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
                echo "\" >立即加入购买</a>
              ";
            } else {
                // line 109
                echo "                <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("order_show", array("targetId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "targetType" => "classroom")), "html", null, true);
                echo "\">立即加入购买</a>
              ";
            }
            // line 111
            echo "              
            </div>
          ";
        }
        // line 114
        echo "        </div>
      ";
        // line 115
        if ($this->env->getExtension('topxia_web_twig')->isPermitRole($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "Manage")) {
            // line 116
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default setting\" title=\"";
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "管理\">
          <i class=\"es-icon es-icon-setting\"></i>
        </a>
      ";
        } elseif ($this->env->getExtension('topxia_web_twig')->isPermitRole($this->getAttribute(        // line 119
(isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "Handle")) {
            // line 120
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_testpaper", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "status" => "reviewing")), "html", null, true);
            echo "\" class=\"btn btn-default setting\" title=\"";
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "管理\">
          <i class=\"es-icon es-icon-setting\"></i>
        </a>
      ";
        }
        // line 124
        echo "      </div>
    </div>
  </div>
</section>

";
        // line 129
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("ClassroomPlan")) {
            // line 130
            echo "  ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ClassroomPlanBundle:ClassroomPlan:joinPlanBlock", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))));
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom:classroom-join-header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 130,  294 => 129,  287 => 124,  277 => 120,  275 => 119,  266 => 116,  264 => 115,  261 => 114,  256 => 111,  250 => 109,  244 => 107,  242 => 106,  237 => 103,  235 => 102,  232 => 101,  229 => 100,  221 => 94,  215 => 92,  210 => 90,  206 => 88,  204 => 87,  200 => 85,  197 => 84,  195 => 83,  189 => 80,  178 => 72,  173 => 69,  169 => 67,  165 => 65,  163 => 64,  157 => 60,  155 => 59,  148 => 54,  141 => 51,  137 => 49,  131 => 47,  128 => 46,  125 => 45,  121 => 43,  113 => 41,  110 => 40,  108 => 39,  105 => 38,  103 => 37,  98 => 35,  94 => 34,  81 => 24,  77 => 23,  65 => 18,  61 => 17,  50 => 10,  39 => 8,  35 => 7,  31 => 6,  21 => 2,  19 => 1,);
    }
}
/* {% import 'TopxiaWebBundle::macro.html.twig' as web_macro %}*/
/* <section class="class-header after {% if 'auditor' in member.role %} auditor{% endif %}">*/
/*   <div class="container">*/
/*   */
/*     <ol class="breadcrumb breadcrumb-o">*/
/*       <li><a href="{{ path('homepage') }}">首页</a></li>*/
/*       {% for breadcrumb in breadcrumbs %}*/
/*         <li><a href="{{ path('classroom_explore',{'category':breadcrumb.code}) }}">{{ breadcrumb.name }}</a></li>*/
/*       {% endfor %}*/
/*       <li class="active">{{ classroom.title }}</li>*/
/*     </ol>*/
/* */
/*     <div class="class-header-mian">*/
/*       <div class="class-bg-layer"></div>*/
/*       <div class="class-header-bg clearfix">*/
/*         <div class="class-img">*/
/*           <a href="{{path('classroom_show',{id:classroom.id})}}">*/
/*             <img src="{{ filepath(classroom.largePicture, 'classroom.png') }}" alt="{{ classroom.title }}" href="{{path('classroom_show',{id:classroom.id})}}">*/
/*           </a>*/
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
/*             {% if member.role == 'auditor'%}*/
/*               <div class="price">*/
/*                 价格： <span>{% if setting('coin.coin_enabled') and setting('coin.price_type') == 'Coin' %}*/
/*                       {% if classroom.price > 0 %}*/
/*                      {{classroom.price * setting('coin.cash_rate') }} {{setting('coin.coin_name')}}*/
/*                       {% else %}*/
/*                       免费*/
/*                       {% endif %}*/
/*                   {% else %}*/
/*                     {% if classroom.price > 0 %}*/
/*                       {{ classroom.price }}元*/
/*                     {% else %}*/
/*                       免费*/
/*                     {% endif %}*/
/*                   {% endif %}</span>*/
/*               </div>*/
/*             {% endif %}*/
/*           </div>*/
/*           <div class="class-serve hidden-sm hidden-xs">*/
/*             <div class="serve-frame">*/
/*               承<br>诺<br>服<br>务*/
/*             </div>*/
/*             {% include 'ClassroomBundle:Classroom:service-block.html.twig' with {'services':classroom.service} %}*/
/*           </div>*/
/*         </div>*/
/*         <div class="class-operation">*/
/*           <ul class='class-data clearfix */
/*           {% if classroom_permit(classroom.id, 'Take', true) and not isclassroomteacher|default(false) %}*/
/*           three-col*/
/*           {% else %}*/
/*           two-col*/
/*           {% endif %}*/
/*           '>*/
/*             <li>*/
/*               <p><i class="es-icon es-icon-person"></i></p>*/
/*               <p>学员({{classroom.studentNum + classroom.auditorNum }})</p>*/
/*             </li>*/
/*             <li>*/
/*               <span class="es-share top">*/
/*                 <a class="dropdown-toggle" href="" data-toggle="dropdown"  aria-labelledby="dropdownMenu1">*/
/*                   <p><i class="es-icon es-icon-share"></i></p>*/
/*                   <p>分享</p>*/
/*                 </a>*/
/*                 {% include 'TopxiaWebBundle:Common:share-dropdown.html.twig' with {type:'classroom'} %} */
/*               </span>*/
/*             </li>*/
/*             {% if classroom_permit(classroom.id, 'Take', true) and not isclassroomteacher|default(false) %}*/
/*             {% if 'headTeacher' not in member.role %}*/
/*               <li>*/
/*                 <a type="button" */
/*                 {% if  'student' in member.role and member.orderId > 0 %}*/
/*                 href="#modal" */
/*                 data-toggle="modal" */
/*                 data-url="{{path('order_refund', {id:classroom.id, targetType:'classroom'})}}"*/
/*                 {% else %}*/
/*                 href="{{path('classroom_exit', {id:classroom.id})}}" id ="quit" */
/*                 {% endif %}*/
/*                 >*/
/*                  <p><i class="es-icon es-icon-exit"></i></p>*/
/*                  <p>退出</p>*/
/*                 </a>*/
/*               </li>*/
/*             {% endif %}*/
/*             {% endif %}*/
/*           </ul>*/
/*           {% if 'auditor' in member.role %}*/
/*             <div class="class-auditor hidden-sm">*/
/*               您现在是<span class="color-warning">旁听生</span>，不能完整学习<i class="es-icon es-icon-help color-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="旁听生只能参与话题讨论，正式学员可以完整地学习所有内容，享受所有教学服务"></i><br>*/
/*               */
/*               {% if setting("course.buy_fill_userinfo")|default(false) %}*/
/*                 <a href="#modal" data-toggle="modal" data-url="{{ path('classroom_buy',{id:classroom.id}) }}" >立即加入购买</a>*/
/*               {% else %}*/
/*                 <a href="{{path('order_show',{targetId:classroom.id,targetType:'classroom'})}}">立即加入购买</a>*/
/*               {% endif %}*/
/*               */
/*             </div>*/
/*           {% endif %}*/
/*         </div>*/
/*       {% if classroom_permit(classroom.id, 'Manage') %}*/
/*         <a href="{{path('classroom_manage',{id:classroom.id})}}" class="btn btn-default setting" title="{{ setting('classroom.name')|default("班级") }}管理">*/
/*           <i class="es-icon es-icon-setting"></i>*/
/*         </a>*/
/*       {% elseif classroom_permit(classroom.id, 'Handle') %}*/
/*         <a href="{{ path('classroom_manage_testpaper', {id:classroom.id,status:'reviewing'}) }}" class="btn btn-default setting" title="{{ setting('classroom.name')|default("班级") }}管理">*/
/*           <i class="es-icon es-icon-setting"></i>*/
/*         </a>*/
/*       {% endif %}*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </section>*/
/* */
/* {% if is_plugin_installed('ClassroomPlan') %}*/
/*   {{ render(controller('ClassroomPlanBundle:ClassroomPlan:joinPlanBlock',{classroomId:classroom.id})) }}*/
/* {% endif %}*/
/* */
