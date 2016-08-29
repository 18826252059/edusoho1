<?php

/* TopxiaAdminBundle:App:cloud-live.html.twig */
class __TwigTemplate_1b9f79f0fae4cd0247e40ff750e98840f8f674f62cd3383efa4d38219ada5b54 extends Twig_Template
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
        echo "              <div class=\"col-md-6\">
                <div class=\"panel panel-default\">
                  <div class=\"panel-body\">
                    ";
        // line 4
        $context["capacity"] = (($this->getAttribute((isset($context["live"]) ? $context["live"] : null), "capacity", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["live"]) ? $context["live"] : null), "capacity", array()), null)) : (null));
        // line 5
        echo "                    ";
        $context["expire"] = (($this->getAttribute((isset($context["live"]) ? $context["live"] : null), "expire", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["live"]) ? $context["live"] : null), "expire", array()), null)) : (null));
        // line 6
        echo "
                  <h4 class=\"eduyun-title\">云直播
                    ";
        // line 9
        echo "                  </h4>
                   <!--未购买-->
                    ";
        // line 11
        if ( !(isset($context["live"]) ? $context["live"] : null)) {
            // line 12
            echo "                      <div class=\"alert alert-warning alert-sm\" role=\"alert\">
                        <i class=\"glyphicon glyphicon-info-sign\" aria-hidden=\"true\"></i>您尚未购买云直播，点击<a href=\"";
            // line 13
            echo $this->env->getExtension('routing')->getPath("admin_cloud_live", array("type" => "live"));
            echo "\" target=\"_blank\">这里</a>了解详情
                      </div>
                    ";
        } else {
            // line 16
            echo "                      <p class=\"text-muted\">教室容量：";
            echo twig_escape_filter($this->env, ((array_key_exists("capacity", $context)) ? (_twig_default_filter((isset($context["capacity"]) ? $context["capacity"] : null), 0)) : (0)), "html", null, true);
            echo "人</p>
                      ";
            // line 17
            if (((isset($context["expire"]) ? $context["expire"] : null) && ((isset($context["expire"]) ? $context["expire"] : null) > 0))) {
                // line 18
                echo "                        <p class=\"text-muted\">有效期至：";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["expire"]) ? $context["expire"] : null), "Y-m-d"), "html", null, true);
                echo "</p>
                    
                        ";
                // line 20
                if (((isset($context["liveDate"]) ? $context["liveDate"] : null) == 0)) {
                    // line 21
                    echo "                              <p class=\"text-danger text-sm\">云直播服务将于明天过期</p>
                        ";
                }
                // line 23
                echo "                        <!--7天警告-->
                        ";
                // line 24
                if (((7 >= ((array_key_exists("liveDate", $context)) ? (_twig_default_filter((isset($context["liveDate"]) ? $context["liveDate"] : null), 31)) : (31))) && (((array_key_exists("liveDate", $context)) ? (_twig_default_filter((isset($context["liveDate"]) ? $context["liveDate"] : null), 31)) : (31)) > 0))) {
                    // line 25
                    echo "                              <p class=\"text-danger text-sm\">云直播服务将于";
                    echo twig_escape_filter($this->env, (isset($context["liveDate"]) ? $context["liveDate"] : null), "html", null, true);
                    echo "天后过期</p>
                        ";
                }
                // line 27
                echo "                        <!--已过期-->
                        ";
                // line 28
                if ((((array_key_exists("liveDate", $context)) ? (_twig_default_filter((isset($context["liveDate"]) ? $context["liveDate"] : null), 31)) : (31)) < 0)) {
                    // line 29
                    echo "                              <p class=\"text-danger text-sm\">云直播服务已过期</p>
                        ";
                }
                // line 31
                echo "                      ";
            }
            // line 32
            echo "                    ";
        }
        // line 33
        echo "                    <p class=\"panel-bottom\">
                      支持Web端、移动端，让手机也能看直播！
                    </p>
                  </div>
                </div>
              </div>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:App:cloud-live.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 33,  90 => 32,  87 => 31,  83 => 29,  81 => 28,  78 => 27,  72 => 25,  70 => 24,  67 => 23,  63 => 21,  61 => 20,  55 => 18,  53 => 17,  48 => 16,  42 => 13,  39 => 12,  37 => 11,  33 => 9,  29 => 6,  26 => 5,  24 => 4,  19 => 1,);
    }
}
/*               <div class="col-md-6">*/
/*                 <div class="panel panel-default">*/
/*                   <div class="panel-body">*/
/*                     {% set capacity = live.capacity|default(null) %}*/
/*                     {% set expire = live.expire|default(null) %}*/
/* */
/*                   <h4 class="eduyun-title">云直播*/
/*                     {# {% if live %}<a href="{{ path('admin_cloud_buy',{type:'live'}) }}" target="_blank">去购买</a>{% endif %} #}*/
/*                   </h4>*/
/*                    <!--未购买-->*/
/*                     {% if not live %}*/
/*                       <div class="alert alert-warning alert-sm" role="alert">*/
/*                         <i class="glyphicon glyphicon-info-sign" aria-hidden="true"></i>您尚未购买云直播，点击<a href="{{ path('admin_cloud_live',{type:'live'}) }}" target="_blank">这里</a>了解详情*/
/*                       </div>*/
/*                     {% else %}*/
/*                       <p class="text-muted">教室容量：{{capacity|default(0)}}人</p>*/
/*                       {% if expire and expire > 0  %}*/
/*                         <p class="text-muted">有效期至：{{expire|date("Y-m-d")}}</p>*/
/*                     */
/*                         {% if liveDate == 0 %}*/
/*                               <p class="text-danger text-sm">云直播服务将于明天过期</p>*/
/*                         {% endif %}*/
/*                         <!--7天警告-->*/
/*                         {% if 7 >= liveDate|default(31)  and liveDate|default(31)  > 0 %}*/
/*                               <p class="text-danger text-sm">云直播服务将于{{liveDate}}天后过期</p>*/
/*                         {% endif %}*/
/*                         <!--已过期-->*/
/*                         {% if liveDate|default(31)  < 0 %}*/
/*                               <p class="text-danger text-sm">云直播服务已过期</p>*/
/*                         {% endif %}*/
/*                       {% endif %}*/
/*                     {% endif %}*/
/*                     <p class="panel-bottom">*/
/*                       支持Web端、移动端，让手机也能看直播！*/
/*                     </p>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
