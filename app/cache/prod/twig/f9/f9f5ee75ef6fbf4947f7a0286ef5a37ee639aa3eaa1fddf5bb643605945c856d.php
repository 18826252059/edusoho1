<?php

/* TopxiaAdminBundle:App:cloud-storage.html.twig */
class __TwigTemplate_7dff74a0e833bf3e4d03003c090498b3c9bf0c7f2e8120b3c21d163a4f444462 extends Twig_Template
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
        echo "<div class=\"col-md-6\">
  <div class=\"panel panel-default\">
    <div class=\"panel-body\">
      ";
        // line 4
        $context["bill"] = (($this->getAttribute((isset($context["storage"]) ? $context["storage"] : null), "bill", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["storage"]) ? $context["storage"] : null), "bill", array()), null)) : (null));
        // line 5
        echo "
      <h4 class=\"eduyun-title\">
        云视频
        ";
        // line 8
        if ((isset($context["storage"]) ? $context["storage"] : null)) {
            // line 9
            echo "          <a href=\"";
            echo $this->env->getExtension('routing')->getPath("admin_cloud_detail");
            echo "\" target=\"_blank\" >账单</a>
        ";
        }
        // line 11
        echo "        ";
        if ((($this->getAttribute((isset($context["storage"]) ? $context["storage"] : null), "ableRenew", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["storage"]) ? $context["storage"] : null), "ableRenew", array()), 0)) : (0))) {
            // line 12
            echo "          <a href=\"";
            echo $this->env->getExtension('routing')->getPath("admin_cloud_video_renew");
            echo "\" target=\"_blank\">续费</a> 
        ";
        }
        // line 14
        echo "
        ";
        // line 15
        if ((($this->getAttribute((isset($context["storage"]) ? $context["storage"] : null), "isBuyVideo", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["storage"]) ? $context["storage"] : null), "isBuyVideo", array()), 0)) : (0))) {
            // line 16
            echo "          <a href=\"";
            echo $this->env->getExtension('routing')->getPath("admin_cloud_video_upgrade");
            echo "\" target=\"_blank\">升级</a> 
        ";
        }
        // line 18
        echo "      </h4>
      <!--未购买-->
      ";
        // line 20
        if ( !(isset($context["storage"]) ? $context["storage"] : null)) {
            // line 21
            echo "        <div class=\"alert alert-warning alert-sm\" role=\"alert\">
          <i class=\"glyphicon glyphicon-info-sign\" aria-hidden=\"true\"></i>您尚未开通云视频功能，点击<a href=\"";
            // line 22
            echo $this->env->getExtension('routing')->getPath("admin_cloud_video", array("type" => "video"));
            echo "\" target=\"_blank\">这里</a>了解详情
        </div>
      ";
        } else {
            // line 25
            echo "
        ";
            // line 26
            if (( !(($this->getAttribute((isset($context["storage"]) ? $context["storage"] : null), "isBuyVideo", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["storage"]) ? $context["storage"] : null), "isBuyVideo", array()), 0)) : (0)) &&  !(isset($context["bill"]) ? $context["bill"] : null))) {
                // line 27
                echo "          <div class=\"alert alert-warning alert-sm\" role=\"alert\">
            <i class=\"glyphicon glyphicon-info-sign\" aria-hidden=\"true\"></i><a href=\"";
                // line 28
                echo $this->env->getExtension('routing')->getPath("admin_cloud_buy", array("type" => "video"));
                echo "\" target=\"_blank\">购买</a>云视频包，享受优惠的视频服务
          </div>
          <p class=\"text-muted\">空间用量暂无记录</p>
          <p class=\"text-muted\">已用流量暂无记录</p>
        ";
            }
            // line 33
            echo "
        ";
            // line 34
            if (((($this->getAttribute((isset($context["storage"]) ? $context["storage"] : null), "isBuyVideo", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["storage"]) ? $context["storage"] : null), "isBuyVideo", array()), 0)) : (0)) &&  !(isset($context["bill"]) ? $context["bill"] : null))) {
                // line 35
                echo "          <p class=\"text-muted\">空间用量暂无记录</p>
          <p class=\"text-muted\">已用流量暂无记录</p>
          <p class=\"text-muted\">云视频包有效期：";
                // line 37
                echo twig_escape_filter($this->env, ((array_key_exists("storageStart", $context)) ? (_twig_default_filter((isset($context["storageStart"]) ? $context["storageStart"] : null), "")) : ("")), "html", null, true);
                echo "~";
                echo twig_escape_filter($this->env, ((array_key_exists("storageEnd", $context)) ? (_twig_default_filter((isset($context["storageEnd"]) ? $context["storageEnd"] : null), "")) : ("")), "html", null, true);
                echo "</p>
        ";
            }
            // line 39
            echo "
        ";
            // line 40
            if (( !(($this->getAttribute((isset($context["storage"]) ? $context["storage"] : null), "isBuyVideo", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["storage"]) ? $context["storage"] : null), "isBuyVideo", array()), 0)) : (0)) && (isset($context["bill"]) ? $context["bill"] : null))) {
                // line 41
                echo "          <div class=\"alert alert-warning alert-sm\" role=\"alert\">
            <i class=\"glyphicon glyphicon-info-sign\" aria-hidden=\"true\"></i><a href=\"";
                // line 42
                echo $this->env->getExtension('routing')->getPath("admin_cloud_buy", array("type" => "video"));
                echo "\" target=\"_blank\">购买</a>云视频包，享受优惠的视频文档服务
          </div>
          <p class=\"text-muted\">";
                // line 44
                echo twig_escape_filter($this->env, ((array_key_exists("month", $context)) ? (_twig_default_filter((isset($context["month"]) ? $context["month"] : null), "上")) : ("上")), "html", null, true);
                echo "月空间用量：";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["bill"]) ? $context["bill"] : null), "space", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["bill"]) ? $context["bill"] : null), "space", array()), 0)) : (0)), "html", null, true);
                echo "G</p>
          <p class=\"text-muted\">";
                // line 45
                echo twig_escape_filter($this->env, ((array_key_exists("month", $context)) ? (_twig_default_filter((isset($context["month"]) ? $context["month"] : null), "上")) : ("上")), "html", null, true);
                echo "月流量：";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["bill"]) ? $context["bill"] : null), "transfer", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["bill"]) ? $context["bill"] : null), "transfer", array()), 0)) : (0)), "html", null, true);
                echo "G</p>
        ";
            }
            // line 47
            echo "
        ";
            // line 48
            if (((($this->getAttribute((isset($context["storage"]) ? $context["storage"] : null), "isBuyVideo", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["storage"]) ? $context["storage"] : null), "isBuyVideo", array()), 0)) : (0)) && (isset($context["bill"]) ? $context["bill"] : null))) {
                // line 49
                echo "          <p class=\"text-muted\">";
                echo twig_escape_filter($this->env, ((array_key_exists("month", $context)) ? (_twig_default_filter((isset($context["month"]) ? $context["month"] : null), "上")) : ("上")), "html", null, true);
                echo "月空间用量：";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["bill"]) ? $context["bill"] : null), "space", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["bill"]) ? $context["bill"] : null), "space", array()), 0)) : (0)), "html", null, true);
                echo "G</p>
          <p class=\"text-muted\">";
                // line 50
                echo twig_escape_filter($this->env, ((array_key_exists("month", $context)) ? (_twig_default_filter((isset($context["month"]) ? $context["month"] : null), "上")) : ("上")), "html", null, true);
                echo "月流量：";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["bill"]) ? $context["bill"] : null), "transfer", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["bill"]) ? $context["bill"] : null), "transfer", array()), 0)) : (0)), "html", null, true);
                echo "G</p>
          <p class=\"text-muted\">云视频包有效期：";
                // line 51
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["storage"]) ? $context["storage"] : null), "startMonth", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["storage"]) ? $context["storage"] : null), "startMonth", array()), "")) : ("")), "html", null, true);
                echo "~";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["storage"]) ? $context["storage"] : null), "endMonth", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["storage"]) ? $context["storage"] : null), "endMonth", array()), "")) : ("")), "html", null, true);
                echo "</p>
        ";
            }
            // line 53
            echo "
        ";
            // line 54
            if ((((($this->getAttribute((isset($context["storage"]) ? $context["storage"] : null), "freeTransfer", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["storage"]) ? $context["storage"] : null), "freeTransfer", array()), 0)) : (0)) != 0) || ((($this->getAttribute((isset($context["storage"]) ? $context["storage"] : null), "freeSpace", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["storage"]) ? $context["storage"] : null), "freeSpace", array()), 0)) : (0)) != 0))) {
                // line 55
                echo "
          ";
                // line 56
                if ((((array_key_exists("storageDate", $context)) ? (_twig_default_filter((isset($context["storageDate"]) ? $context["storageDate"] : null), 31)) : (31)) == 0)) {
                    // line 57
                    echo "            <p class=\"text-danger text-sm\" >云视频视频包将于明天过期</p>
          ";
                }
                // line 59
                echo "          <!--30天过期  -->
          ";
                // line 60
                if (((30 >= ((array_key_exists("storageDate", $context)) ? (_twig_default_filter((isset($context["storageDate"]) ? $context["storageDate"] : null), 31)) : (31))) && (((array_key_exists("storageDate", $context)) ? (_twig_default_filter((isset($context["storageDate"]) ? $context["storageDate"] : null), 31)) : (31)) > 0))) {
                    // line 61
                    echo "            <p class=\"text-danger text-sm\" >云视频视频包将于";
                    echo twig_escape_filter($this->env, (isset($context["storageDate"]) ? $context["storageDate"] : null), "html", null, true);
                    echo "天后过期</p>
          ";
                }
                // line 63
                echo "          <!--已过期 -->
          ";
                // line 64
                if ((((array_key_exists("storageDate", $context)) ? (_twig_default_filter((isset($context["storageDate"]) ? $context["storageDate"] : null), 31)) : (31)) < 0)) {
                    // line 65
                    echo "            <p class=\"text-danger text-sm\" >
              云视频包已过期
            </p>
          ";
                }
                // line 69
                echo "
        ";
            }
            // line 71
            echo "      ";
        }
        // line 72
        echo "      <p class=\"panel-bottom\">
        ";
        // line 73
        if ((isset($context["tlp"]) ? $context["tlp"] : null)) {
            // line 74
            echo "          已开通TLP安全加固服务
        ";
        } else {
            // line 76
            echo "          <a href=\"";
            echo $this->env->getExtension('routing')->getPath("admin_cloud_tlp");
            echo "\" target=\"_blank\">
            尚未开通TLP安全加固服务
          </a>
        ";
        }
        // line 80
        echo "      </p>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:App:cloud-storage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 80,  209 => 76,  205 => 74,  203 => 73,  200 => 72,  197 => 71,  193 => 69,  187 => 65,  185 => 64,  182 => 63,  176 => 61,  174 => 60,  171 => 59,  167 => 57,  165 => 56,  162 => 55,  160 => 54,  157 => 53,  150 => 51,  144 => 50,  137 => 49,  135 => 48,  132 => 47,  125 => 45,  119 => 44,  114 => 42,  111 => 41,  109 => 40,  106 => 39,  99 => 37,  95 => 35,  93 => 34,  90 => 33,  82 => 28,  79 => 27,  77 => 26,  74 => 25,  68 => 22,  65 => 21,  63 => 20,  59 => 18,  53 => 16,  51 => 15,  48 => 14,  42 => 12,  39 => 11,  33 => 9,  31 => 8,  26 => 5,  24 => 4,  19 => 1,);
    }
}
/* <div class="col-md-6">*/
/*   <div class="panel panel-default">*/
/*     <div class="panel-body">*/
/*       {% set bill = storage.bill|default(null) %}*/
/* */
/*       <h4 class="eduyun-title">*/
/*         云视频*/
/*         {% if storage %}*/
/*           <a href="{{path('admin_cloud_detail')}}" target="_blank" >账单</a>*/
/*         {% endif %}*/
/*         {% if storage.ableRenew|default(0) %}*/
/*           <a href="{{ path('admin_cloud_video_renew') }}" target="_blank">续费</a> */
/*         {% endif %}*/
/* */
/*         {% if storage.isBuyVideo|default(0) %}*/
/*           <a href="{{ path('admin_cloud_video_upgrade') }}" target="_blank">升级</a> */
/*         {% endif %}*/
/*       </h4>*/
/*       <!--未购买-->*/
/*       {% if not storage %}*/
/*         <div class="alert alert-warning alert-sm" role="alert">*/
/*           <i class="glyphicon glyphicon-info-sign" aria-hidden="true"></i>您尚未开通云视频功能，点击<a href="{{ path('admin_cloud_video',{type:'video'}) }}" target="_blank">这里</a>了解详情*/
/*         </div>*/
/*       {% else %}*/
/* */
/*         {% if not storage.isBuyVideo|default(0) and not bill %}*/
/*           <div class="alert alert-warning alert-sm" role="alert">*/
/*             <i class="glyphicon glyphicon-info-sign" aria-hidden="true"></i><a href="{{ path('admin_cloud_buy',{type:'video'}) }}" target="_blank">购买</a>云视频包，享受优惠的视频服务*/
/*           </div>*/
/*           <p class="text-muted">空间用量暂无记录</p>*/
/*           <p class="text-muted">已用流量暂无记录</p>*/
/*         {% endif %}*/
/* */
/*         {% if storage.isBuyVideo|default(0) and not bill  %}*/
/*           <p class="text-muted">空间用量暂无记录</p>*/
/*           <p class="text-muted">已用流量暂无记录</p>*/
/*           <p class="text-muted">云视频包有效期：{{storageStart|default('')}}~{{storageEnd|default('')}}</p>*/
/*         {% endif %}*/
/* */
/*         {% if not storage.isBuyVideo|default(0) and bill %}*/
/*           <div class="alert alert-warning alert-sm" role="alert">*/
/*             <i class="glyphicon glyphicon-info-sign" aria-hidden="true"></i><a href="{{ path('admin_cloud_buy',{type:'video'}) }}" target="_blank">购买</a>云视频包，享受优惠的视频文档服务*/
/*           </div>*/
/*           <p class="text-muted">{{month|default('上')}}月空间用量：{{bill.space|default(0)}}G</p>*/
/*           <p class="text-muted">{{month|default('上')}}月流量：{{bill.transfer|default(0)}}G</p>*/
/*         {% endif %}*/
/* */
/*         {% if storage.isBuyVideo|default(0) and bill %}*/
/*           <p class="text-muted">{{month|default('上')}}月空间用量：{{bill.space|default(0)}}G</p>*/
/*           <p class="text-muted">{{month|default('上')}}月流量：{{bill.transfer|default(0)}}G</p>*/
/*           <p class="text-muted">云视频包有效期：{{storage.startMonth|default('')}}~{{storage.endMonth|default('')}}</p>*/
/*         {% endif %}*/
/* */
/*         {% if storage.freeTransfer|default(0) != 0 or storage.freeSpace|default(0) != 0 %}*/
/* */
/*           {% if storageDate|default(31)  == 0 %}*/
/*             <p class="text-danger text-sm" >云视频视频包将于明天过期</p>*/
/*           {% endif %}*/
/*           <!--30天过期  -->*/
/*           {% if 30 >= storageDate|default(31)  and storageDate|default(31)  > 0 %}*/
/*             <p class="text-danger text-sm" >云视频视频包将于{{storageDate}}天后过期</p>*/
/*           {% endif %}*/
/*           <!--已过期 -->*/
/*           {% if storageDate|default(31)  < 0 %}*/
/*             <p class="text-danger text-sm" >*/
/*               云视频包已过期*/
/*             </p>*/
/*           {% endif %}*/
/* */
/*         {% endif %}*/
/*       {% endif %}*/
/*       <p class="panel-bottom">*/
/*         {% if tlp %}*/
/*           已开通TLP安全加固服务*/
/*         {% else %}*/
/*           <a href="{{ path('admin_cloud_tlp') }}" target="_blank">*/
/*             尚未开通TLP安全加固服务*/
/*           </a>*/
/*         {% endif %}*/
/*       </p>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
