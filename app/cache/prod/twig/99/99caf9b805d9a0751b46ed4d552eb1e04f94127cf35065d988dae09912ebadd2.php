<?php

/* TopxiaAdminBundle:App:cloud-account.html.twig */
class __TwigTemplate_abe024c58d267b5ff6b52c54ab7f273309684180a651aaf43ae1a1c3d7b1953a extends Twig_Template
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
        echo "          <div class=\"alert alert-warning edu-balance\" role=\"alert\">
            <h4 class=\"eduyun-title text-muted\" style=\"color:#555;\">
              账户余额<a href=\"http://open.edusoho.com/article/1#recharge\" target=\"_blank\" style=\"margin-right:820px;margin-top:-17px;\"><i class=\"glyphicon glyphicon-question-sign\"></i></a>
            </h4>
            <p>
              ";
        // line 6
        if (((($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "account", array(), "any", false, true), "cash", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "account", array(), "any", false, true), "cash", array()), "0")) : ("0")) > 0)) {
            // line 7
            echo "                <span class=\"text-warning balance\">";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "account", array(), "any", false, true), "cash", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "account", array(), "any", false, true), "cash", array()), 0)) : (0)), "html", null, true);
            echo "</span>元
              ";
        } else {
            // line 9
            echo "                <span class=\"text-danger balance\">";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "account", array(), "any", false, true), "cash", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "account", array(), "any", false, true), "cash", array()), 0)) : (0)), "html", null, true);
            echo "</span>元
              ";
        }
        // line 11
        echo "              <a href=\"";
        echo $this->env->getExtension('routing')->getPath("admin_cloud_recharge");
        echo "\" class=\"btn-recharge btn btn-warning\" target=\"_blank\">充值</a>
              <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("admin_cloud_detail");
        echo "\" class=\"btn btn-link\" target=\"_blank\">查看账单</a>  
            </p> 
            ";
        // line 14
        if ((isset($context["account"]) ? $context["account"] : null)) {
            // line 15
            echo "            <!--不足50元-->
            ";
            // line 16
            if (((0 < (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "account", array(), "any", false, true), "cash", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "account", array(), "any", false, true), "cash", array()), 0)) : (0))) && ((($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "account", array(), "any", false, true), "cash", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "account", array(), "any", false, true), "cash", array()), 0)) : (0)) < 50))) {
                // line 17
                echo "            <p class=\"text-danger text-sm\">余额不足50元，请尽快充值！</p>
            ";
            }
            // line 19
            echo "            <!--欠费7天预留保护期-->
            ";
            // line 20
            if (((((($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "account", array(), "any", false, true), "cash", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "account", array(), "any", false, true), "cash", array()), 0)) : (0)) < 0) && (0 < ((array_key_exists("day", $context)) ? (_twig_default_filter((isset($context["day"]) ? $context["day"] : null), 0)) : (0)))) && (((array_key_exists("day", $context)) ? (_twig_default_filter((isset($context["day"]) ? $context["day"] : null), 0)) : (0)) <= 7))) {
                // line 21
                echo "            <p class=\"text-danger text-sm\">您已欠费，还剩";
                echo twig_escape_filter($this->env, (7 - (isset($context["day"]) ? $context["day"] : null)), "html", null, true);
                echo "天的预留保护期，请尽快充值！</p>
            ";
            }
            // line 23
            echo "            <!--欠费冻结-->
            ";
            // line 24
            if ((((($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "account", array(), "any", false, true), "cash", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "account", array(), "any", false, true), "cash", array()), 0)) : (0)) < 0) && (10 <= ((array_key_exists("day", $context)) ? (_twig_default_filter((isset($context["day"]) ? $context["day"] : null), 0)) : (0))))) {
                // line 25
                echo "            <p class=\"text-danger text-sm\">您已欠费超过";
                echo twig_escape_filter($this->env, (isset($context["day"]) ? $context["day"] : null), "html", null, true);
                echo "天，教育云服务已暂停，请尽快充值！</p>
            ";
            }
            // line 27
            echo "            ";
        }
        // line 28
        echo "          </div>    ";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:App:cloud-account.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 28,  83 => 27,  77 => 25,  75 => 24,  72 => 23,  66 => 21,  64 => 20,  61 => 19,  57 => 17,  55 => 16,  52 => 15,  50 => 14,  45 => 12,  40 => 11,  34 => 9,  28 => 7,  26 => 6,  19 => 1,);
    }
}
/*           <div class="alert alert-warning edu-balance" role="alert">*/
/*             <h4 class="eduyun-title text-muted" style="color:#555;">*/
/*               账户余额<a href="http://open.edusoho.com/article/1#recharge" target="_blank" style="margin-right:820px;margin-top:-17px;"><i class="glyphicon glyphicon-question-sign"></i></a>*/
/*             </h4>*/
/*             <p>*/
/*               {% if content.account.cash|default('0') > 0 %}*/
/*                 <span class="text-warning balance">{{content.account.cash|default(0) }}</span>元*/
/*               {% else %}*/
/*                 <span class="text-danger balance">{{content.account.cash|default(0) }}</span>元*/
/*               {% endif %}*/
/*               <a href="{{path('admin_cloud_recharge')}}" class="btn-recharge btn btn-warning" target="_blank">充值</a>*/
/*               <a href="{{path('admin_cloud_detail')}}" class="btn btn-link" target="_blank">查看账单</a>  */
/*             </p> */
/*             {% if account %}*/
/*             <!--不足50元-->*/
/*             {% if 0 < content.account.cash|default(0) and content.account.cash|default(0) < 50 %}*/
/*             <p class="text-danger text-sm">余额不足50元，请尽快充值！</p>*/
/*             {% endif %}*/
/*             <!--欠费7天预留保护期-->*/
/*             {% if content.account.cash|default(0) < 0 and 0 < day|default(0) and day|default(0) <= 7 %}*/
/*             <p class="text-danger text-sm">您已欠费，还剩{{7-day}}天的预留保护期，请尽快充值！</p>*/
/*             {% endif %}*/
/*             <!--欠费冻结-->*/
/*             {% if content.account.cash|default(0) < 0 and 10 <= day|default(0) %}*/
/*             <p class="text-danger text-sm">您已欠费超过{{day}}天，教育云服务已暂停，请尽快充值！</p>*/
/*             {% endif %}*/
/*             {% endif %}*/
/*           </div>    */
