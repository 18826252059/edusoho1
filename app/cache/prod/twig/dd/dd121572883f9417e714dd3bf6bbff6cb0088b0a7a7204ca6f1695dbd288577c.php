<?php

/* TopxiaAdminBundle:App:cloud-sms.html.twig */
class __TwigTemplate_be1b898a136001ef733caeb6e3436ec3392bafe24857abff7dd7638d5a0c40b2 extends Twig_Template
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
        $context["status"] = (($this->getAttribute((isset($context["sms"]) ? $context["sms"] : null), "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["sms"]) ? $context["sms"] : null), "status", array()), "created")) : ("created"));
        // line 5
        echo "                    <h4 class=\"eduyun-title\">云短信
                      ";
        // line 6
        if ((isset($context["sms"]) ? $context["sms"] : null)) {
            // line 7
            echo "                        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("admin_cloud_detail");
            echo "\" target=\"_blank\">账单</a>";
        }
        // line 8
        echo "                        <a href=\"";
        echo $this->env->getExtension('routing')->getPath("admin_cloud_buy", array("type" => "sms"));
        echo "\" target=\"_blank\">购买</a>
                    </h4>
                     ";
        // line 10
        if ( !(isset($context["sms"]) ? $context["sms"] : null)) {
            // line 11
            echo "                        <div class=\"alert alert-warning alert-sm\" role=\"alert\" >
                          <!--未开启-->
                          <i class=\"glyphicon glyphicon-info-sign\" aria-hidden=\"true\"></i>您尚未开通云短信，<a href=\"";
            // line 13
            echo $this->env->getExtension('routing')->getPath("admin_edu_cloud_sms");
            echo "\" target=\"_blank\">去开通</a>
                        </div>
                        
                      ";
        } else {
            // line 17
            echo "
                        ";
            // line 18
            if (((isset($context["status"]) ? $context["status"] : null) == "created")) {
                // line 19
                echo "                          <div class=\"alert alert-warning alert-sm\" role=\"alert\" >
                              <i class=\"glyphicon glyphicon-info-sign\" aria-hidden=\"true\"></i>您尚未开启云短信功能，<a href=\"";
                // line 20
                echo $this->env->getExtension('routing')->getPath("admin_edu_cloud_sms");
                echo "\" target=\"_blank\">去开启</a>
                          </div>
                              <p class=\"text-muted\">昨日用量：";
                // line 22
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["sms"]) ? $context["sms"] : null), "yestoday", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["sms"]) ? $context["sms"] : null), "yestoday", array()), 0)) : (0)), "html", null, true);
                echo "条</p>
                              <p class=\"text-muted\">上月使用：";
                // line 23
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["sms"]) ? $context["sms"] : null), "lastMonth", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["sms"]) ? $context["sms"] : null), "lastMonth", array()), 0)) : (0)), "html", null, true);
                echo "条</p>
                        ";
            }
            // line 25
            echo "
                        ";
            // line 26
            if (((isset($context["status"]) ? $context["status"] : null) == "used")) {
                // line 27
                echo "                            <p class=\"text-muted\">昨日用量：";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["sms"]) ? $context["sms"] : null), "yestoday", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["sms"]) ? $context["sms"] : null), "yestoday", array()), 0)) : (0)), "html", null, true);
                echo "条</p>
                            <p class=\"text-muted\">上月使用：";
                // line 28
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["sms"]) ? $context["sms"] : null), "lastMonth", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["sms"]) ? $context["sms"] : null), "lastMonth", array()), 0)) : (0)), "html", null, true);
                echo "条</p>
                        ";
            }
            // line 30
            echo "
                      <!--被停用-->
                        ";
            // line 32
            if (((isset($context["status"]) ? $context["status"] : null) == "stoped")) {
                // line 33
                echo "                            <div class=\"alert alert-warning alert-sm\" role=\"alert\" >
                                <i class=\"glyphicon glyphicon-info-sign\" aria-hidden=\"true\"></i>
                                您的云短信功能已被暂停

                                  <a tabindex=\"0\"  role=\"button\" class=\"glyphicon glyphicon-question-sign text-muted \" id=\"sms-reason-tips\" data-toggle=\"popover\" data-trigger=\"focus\"></a> 
                                   <div id=\"sms-reason-tips-html\" style=\"display:none;\">
                                    <span style=\"color:#555;\">";
                // line 39
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["sms"]) ? $context["sms"] : null), "reason", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["sms"]) ? $context["sms"] : null), "reason", array()), "")) : ("")), "html", null, true);
                echo "</span><br><a href=\"";
                echo $this->env->getExtension('routing')->getPath("admin_edu_cloud_sms");
                echo "\" target=\"_blank\">申请重新开启</a></li>
                                  </div>

                            </div>
                            <p class=\"text-muted\">昨日用量：";
                // line 43
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["sms"]) ? $context["sms"] : null), "yestoday", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["sms"]) ? $context["sms"] : null), "yestoday", array()), 0)) : (0)), "html", null, true);
                echo "条</p>
                            <p class=\"text-muted\">上月使用：";
                // line 44
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["sms"]) ? $context["sms"] : null), "lastMonth", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["sms"]) ? $context["sms"] : null), "lastMonth", array()), 0)) : (0)), "html", null, true);
                echo "条</p>
                        ";
            }
            // line 46
            echo "
                      ";
        }
        // line 48
        echo "                  </div>
                </div>
              </div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:App:cloud-sms.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 48,  124 => 46,  119 => 44,  115 => 43,  106 => 39,  98 => 33,  96 => 32,  92 => 30,  87 => 28,  82 => 27,  80 => 26,  77 => 25,  72 => 23,  68 => 22,  63 => 20,  60 => 19,  58 => 18,  55 => 17,  48 => 13,  44 => 11,  42 => 10,  36 => 8,  31 => 7,  29 => 6,  26 => 5,  24 => 4,  19 => 1,);
    }
}
/*               <div class="col-md-6">*/
/*                 <div class="panel panel-default">*/
/*                   <div class="panel-body">*/
/*                     {% set status = sms.status|default('created') %}*/
/*                     <h4 class="eduyun-title">云短信*/
/*                       {% if sms %}*/
/*                         <a href="{{path('admin_cloud_detail')}}" target="_blank">账单</a>{% endif %}*/
/*                         <a href="{{ path('admin_cloud_buy',{type:'sms'}) }}" target="_blank">购买</a>*/
/*                     </h4>*/
/*                      {% if not sms %}*/
/*                         <div class="alert alert-warning alert-sm" role="alert" >*/
/*                           <!--未开启-->*/
/*                           <i class="glyphicon glyphicon-info-sign" aria-hidden="true"></i>您尚未开通云短信，<a href="{{path('admin_edu_cloud_sms')}}" target="_blank">去开通</a>*/
/*                         </div>*/
/*                         */
/*                       {% else %}*/
/* */
/*                         {% if status == 'created' %}*/
/*                           <div class="alert alert-warning alert-sm" role="alert" >*/
/*                               <i class="glyphicon glyphicon-info-sign" aria-hidden="true"></i>您尚未开启云短信功能，<a href="{{path('admin_edu_cloud_sms')}}" target="_blank">去开启</a>*/
/*                           </div>*/
/*                               <p class="text-muted">昨日用量：{{sms.yestoday|default(0)}}条</p>*/
/*                               <p class="text-muted">上月使用：{{sms.lastMonth|default(0)}}条</p>*/
/*                         {% endif %}*/
/* */
/*                         {% if status == 'used' %}*/
/*                             <p class="text-muted">昨日用量：{{sms.yestoday|default(0)}}条</p>*/
/*                             <p class="text-muted">上月使用：{{sms.lastMonth|default(0)}}条</p>*/
/*                         {% endif %}*/
/* */
/*                       <!--被停用-->*/
/*                         {% if status == 'stoped'%}*/
/*                             <div class="alert alert-warning alert-sm" role="alert" >*/
/*                                 <i class="glyphicon glyphicon-info-sign" aria-hidden="true"></i>*/
/*                                 您的云短信功能已被暂停*/
/* */
/*                                   <a tabindex="0"  role="button" class="glyphicon glyphicon-question-sign text-muted " id="sms-reason-tips" data-toggle="popover" data-trigger="focus"></a> */
/*                                    <div id="sms-reason-tips-html" style="display:none;">*/
/*                                     <span style="color:#555;">{{sms.reason|default("")}}</span><br><a href="{{path('admin_edu_cloud_sms')}}" target="_blank">申请重新开启</a></li>*/
/*                                   </div>*/
/* */
/*                             </div>*/
/*                             <p class="text-muted">昨日用量：{{sms.yestoday|default(0)}}条</p>*/
/*                             <p class="text-muted">上月使用：{{sms.lastMonth|default(0)}}条</p>*/
/*                         {% endif %}*/
/* */
/*                       {% endif %}*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/* */
