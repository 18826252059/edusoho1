<?php

/* TopxiaAdminBundle:App:my-cloud.html.twig */
class __TwigTemplate_5d21b463912dd1d3cb587ae4a1ce6aa1e232af4854eec68fa532f58c54e92e2d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:App:my-cloud.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["menu"] = "admin_my_cloud";
        // line 4
        $context["submenu"] = "service-information";
        // line 5
        $context["script_controller"] = "app/sms-show";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "      ";
        if ((( !(isset($context["storage"]) ? $context["storage"] : null) &&  !(isset($context["live"]) ? $context["live"] : null)) &&  !(isset($context["sms"]) ? $context["sms"] : null))) {
            // line 9
            echo "         <ul class=\"nav nav-tabs mbl\">

          <li class=\"";
            // line 11
            if (((isset($context["submenu"]) ? $context["submenu"] : null) == "cloud-introduction")) {
                echo "active";
            }
            echo "\">
            <a href=\"";
            // line 12
            echo $this->env->getExtension('routing')->getUrl("admin_my_cloud");
            echo "\">产品简介
            </a>
          </li>

          <li class=\"";
            // line 16
            if (((isset($context["submenu"]) ? $context["submenu"] : null) == "service-information")) {
                echo "active";
            }
            echo "\">
            <a href=\"";
            // line 17
            echo $this->env->getExtension('routing')->getUrl("admin_my_cloud_overview");
            echo "\">服务概况
            </a>
          </li>

        </ul> 
      ";
        }
        // line 23
        echo "      ";
        if ($this->env->getExtension('topxia_web_twig')->isTrial()) {
            // line 24
            echo "        ";
            if ( !(null === (isset($context["trialhtml"]) ? $context["trialhtml"] : null))) {
                // line 25
                echo "          ";
                echo (isset($context["trialhtml"]) ? $context["trialhtml"] : null);
                echo "
        ";
            }
            // line 27
            echo "      ";
        } else {
            // line 28
            echo "        <div class=\"eduyun-main\">

          <!--个人资料-->
          <div class=\"panel panel-default\">
            <div class=\"panel-body\">
              <div class=\"row\">

                <div class=\"media edu-user col-md-8\">
                  <div class=\"pull-left\">
                    <a href=\"javascript:;\">";
            // line 37
            if (((($this->getAttribute((isset($context["isBinded"]) ? $context["isBinded"] : null), "avatar", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["isBinded"]) ? $context["isBinded"] : null), "avatar", array()), "")) : ("")) == "")) {
                echo "<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath("user_avatar.png"), "html", null, true);
                echo "\" alt=\"\" style=\"width:100px;height:100px;\">";
            } else {
                echo "<img src=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["isBinded"]) ? $context["isBinded"] : null), "avatar", array()), "html", null, true);
                echo "\" alt=\"\" style=\"width:100px;height:100px;\">";
            }
            echo "</a>
                  </div>
                  <div class=\"media-body\">
                    ";
            // line 40
            if (((($this->getAttribute((isset($context["isBinded"]) ? $context["isBinded"] : null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["isBinded"]) ? $context["isBinded"] : null), "name", array()), "")) : ("")) == "")) {
                // line 41
                echo "                    <br>
                    <p>您尚未绑定EduSoho开放云平台&nbsp;<a href=\"http://open.edusoho.com/article/1\" target=\"_blank\"  title=\"什么是EduSoho开放云平台？\" style=\"color: #999;\"><i class=\"glyphicon glyphicon-question-sign\"></i></a></p>
                    ";
            } else {
                // line 44
                echo "                    <p><span class=\"name\">";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["isBinded"]) ? $context["isBinded"] : null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["isBinded"]) ? $context["isBinded"] : null), "name", array()), "")) : ("")), "html", null, true);
                echo "</span>，您好</p>
                    <p>ES云平台账户名: ";
                // line 45
                echo twig_escape_filter($this->env, ((array_key_exists("email", $context)) ? (_twig_default_filter((isset($context["email"]) ? $context["email"] : null), "")) : ("")), "html", null, true);
                echo "</p>
                    ";
            }
            // line 47
            echo "                  </div>
                </div>

                <div class=\"edu-notice col-md-4 hidden-sm hidden-xs\">
                  <h4 class=\"title\">云平台公告</h4>
                  ";
            // line 52
            if ((isset($context["notices"]) ? $context["notices"] : null)) {
                // line 53
                echo "                  <ul>
                  ";
                // line 54
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["notices"]) ? $context["notices"] : null));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["notice"]) {
                    // line 55
                    echo "                    ";
                    if (($this->getAttribute($context["loop"], "index", array()) <= 3)) {
                        // line 56
                        echo "                    <li><span class=\"date hidden-md\">";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["notice"], "createdTime", array()), "Y-m-d"), "html", null, true);
                        echo "</span><a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["notice"], "detailUrl", array()), "html", null, true);
                        echo "\" target=\"_blank\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["notice"], "content", array()), "html", null, true);
                        echo "</a></li>
                    ";
                    }
                    // line 58
                    echo "                  ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notice'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 59
                echo "                  </ul>
                  ";
            } else {
                // line 61
                echo "                  <span class=\"empty\">暂无公告</span>
                  ";
            }
            // line 63
            echo "                </div>
              </div>
            </div>
          </div>


          <!--账户余额-->
          ";
            // line 70
            $this->loadTemplate("TopxiaAdminBundle:App:cloud-account.html.twig", "TopxiaAdminBundle:App:my-cloud.html.twig", 70)->display($context);
            // line 71
            echo "

          <!--套餐信息-->
          <div class=\"edu-combo row\">

          ";
            // line 76
            $this->loadTemplate("TopxiaAdminBundle:App:cloud-combo.html.twig", "TopxiaAdminBundle:App:my-cloud.html.twig", 76)->display($context);
            // line 77
            echo "
          <!-- 授权信息 -->

          ";
            // line 80
            $this->loadTemplate("TopxiaAdminBundle:App:cloud-license.html.twig", "TopxiaAdminBundle:App:my-cloud.html.twig", 80)->display($context);
            // line 81
            echo "
          </div>


          <fieldset>
            <legend>服务动态</legend>

            <!--服务动态内容 --> 
            <div class=\"edu-service row\">

              <!--云视频信息 -->
              ";
            // line 92
            $this->loadTemplate("TopxiaAdminBundle:App:cloud-storage.html.twig", "TopxiaAdminBundle:App:my-cloud.html.twig", 92)->display($context);
            // line 93
            echo "
              <!-- 云直播信息 -->
              ";
            // line 95
            $this->loadTemplate("TopxiaAdminBundle:App:cloud-live.html.twig", "TopxiaAdminBundle:App:my-cloud.html.twig", 95)->display($context);
            // line 96
            echo "
            </div>


            <!--服务云视频-->
            <div class=\"edu-service row\">
              <!-- 云短信信息 -->
              ";
            // line 103
            $this->loadTemplate("TopxiaAdminBundle:App:cloud-sms.html.twig", "TopxiaAdminBundle:App:my-cloud.html.twig", 103)->display($context);
            // line 104
            echo "
            </div>

          </fieldset>
          
        </div>
      ";
        }
        // line 111
        echo "
      

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:App:my-cloud.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 111,  253 => 104,  251 => 103,  242 => 96,  240 => 95,  236 => 93,  234 => 92,  221 => 81,  219 => 80,  214 => 77,  212 => 76,  205 => 71,  203 => 70,  194 => 63,  190 => 61,  186 => 59,  172 => 58,  162 => 56,  159 => 55,  142 => 54,  139 => 53,  137 => 52,  130 => 47,  125 => 45,  120 => 44,  115 => 41,  113 => 40,  99 => 37,  88 => 28,  85 => 27,  79 => 25,  76 => 24,  73 => 23,  64 => 17,  58 => 16,  51 => 12,  45 => 11,  41 => 9,  38 => 8,  35 => 7,  31 => 1,  29 => 5,  27 => 4,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set menu = 'admin_my_cloud' %}*/
/* {% set submenu = 'service-information' %}*/
/* {% set script_controller = 'app/sms-show' %}*/
/* */
/* {% block main %}*/
/*       {% if not storage and not live and not sms%}*/
/*          <ul class="nav nav-tabs mbl">*/
/* */
/*           <li class="{% if submenu == 'cloud-introduction' %}active{% endif %}">*/
/*             <a href="{{ url('admin_my_cloud') }}">产品简介*/
/*             </a>*/
/*           </li>*/
/* */
/*           <li class="{% if submenu == 'service-information' %}active{% endif %}">*/
/*             <a href="{{ url('admin_my_cloud_overview') }}">服务概况*/
/*             </a>*/
/*           </li>*/
/* */
/*         </ul> */
/*       {% endif %}*/
/*       {% if is_trial() %}*/
/*         {% if trialhtml is not null %}*/
/*           {{ trialhtml|raw }}*/
/*         {% endif %}*/
/*       {% else %}*/
/*         <div class="eduyun-main">*/
/* */
/*           <!--个人资料-->*/
/*           <div class="panel panel-default">*/
/*             <div class="panel-body">*/
/*               <div class="row">*/
/* */
/*                 <div class="media edu-user col-md-8">*/
/*                   <div class="pull-left">*/
/*                     <a href="javascript:;">{% if isBinded.avatar|default("") == "" %}<img src="{{ default_path('user_avatar.png') }}" alt="" style="width:100px;height:100px;">{% else %}<img src="{{ isBinded.avatar }}" alt="" style="width:100px;height:100px;">{% endif %}</a>*/
/*                   </div>*/
/*                   <div class="media-body">*/
/*                     {% if isBinded.name|default("")  == "" %}*/
/*                     <br>*/
/*                     <p>您尚未绑定EduSoho开放云平台&nbsp;<a href="http://open.edusoho.com/article/1" target="_blank"  title="什么是EduSoho开放云平台？" style="color: #999;"><i class="glyphicon glyphicon-question-sign"></i></a></p>*/
/*                     {% else %}*/
/*                     <p><span class="name">{{ isBinded.name|default("")}}</span>，您好</p>*/
/*                     <p>ES云平台账户名: {{email|default('') }}</p>*/
/*                     {% endif %}*/
/*                   </div>*/
/*                 </div>*/
/* */
/*                 <div class="edu-notice col-md-4 hidden-sm hidden-xs">*/
/*                   <h4 class="title">云平台公告</h4>*/
/*                   {% if notices %}*/
/*                   <ul>*/
/*                   {% for notice in notices %}*/
/*                     {% if loop.index <= 3 %}*/
/*                     <li><span class="date hidden-md">{{notice.createdTime|date("Y-m-d")}}</span><a href="{{notice.detailUrl}}" target="_blank">{{notice.content}}</a></li>*/
/*                     {% endif %}*/
/*                   {% endfor %}*/
/*                   </ul>*/
/*                   {% else %}*/
/*                   <span class="empty">暂无公告</span>*/
/*                   {% endif %}*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*           </div>*/
/* */
/* */
/*           <!--账户余额-->*/
/*           {% include 'TopxiaAdminBundle:App:cloud-account.html.twig'  %}*/
/* */
/* */
/*           <!--套餐信息-->*/
/*           <div class="edu-combo row">*/
/* */
/*           {% include 'TopxiaAdminBundle:App:cloud-combo.html.twig'  %}*/
/* */
/*           <!-- 授权信息 -->*/
/* */
/*           {% include 'TopxiaAdminBundle:App:cloud-license.html.twig'  %}*/
/* */
/*           </div>*/
/* */
/* */
/*           <fieldset>*/
/*             <legend>服务动态</legend>*/
/* */
/*             <!--服务动态内容 --> */
/*             <div class="edu-service row">*/
/* */
/*               <!--云视频信息 -->*/
/*               {% include 'TopxiaAdminBundle:App:cloud-storage.html.twig'  %}*/
/* */
/*               <!-- 云直播信息 -->*/
/*               {% include 'TopxiaAdminBundle:App:cloud-live.html.twig'  %}*/
/* */
/*             </div>*/
/* */
/* */
/*             <!--服务云视频-->*/
/*             <div class="edu-service row">*/
/*               <!-- 云短信信息 -->*/
/*               {% include 'TopxiaAdminBundle:App:cloud-sms.html.twig'  %}*/
/* */
/*             </div>*/
/* */
/*           </fieldset>*/
/*           */
/*         </div>*/
/*       {% endif %}*/
/* */
/*       */
/* */
/* {% endblock %}*/
