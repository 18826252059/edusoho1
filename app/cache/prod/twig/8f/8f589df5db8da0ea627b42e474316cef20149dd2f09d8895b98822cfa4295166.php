<?php

/* TopxiaAdminBundle:App:cloud-combo.html.twig */
class __TwigTemplate_02ec8149f22fef8804d88d1fb37cfff41e624cae19e8b6996f10130d079fe325 extends Twig_Template
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
        echo "            <div class=\"col-md-6\">
              <div class=\"panel panel-default\">
                <div class=\"panel-body\">
                  <h4 class=\"eduyun-title\">套餐信息</h4>
                  ";
        // line 5
        if (((($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "level", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "level", array()), "none")) : ("none")) == "none")) {
            // line 6
            echo "                    <div class=\"text-danger text-sm\" role=\"alert\">
                      <i class=\"glyphicon glyphicon-info-sign\" aria-hidden=\"true\"></i>点击<a href=\"http://www.edusoho.com/product/system\" target=\"_blank\">这里</a>了套餐解详情
                    </div>
                  ";
        } else {
            // line 10
            echo "                  <p class=\"text-muted\">版本：";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "user", array(), "any", false, true), "levelName", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["content"]) ? $context["content"] : null), "user", array(), "any", false, true), "levelName", array()), "")) : ("")), "html", null, true);
            echo "</p>
                  <p class=\"text-muted\">有效期：";
            // line 11
            echo twig_escape_filter($this->env, ((array_key_exists("startDate", $context)) ? (_twig_default_filter((isset($context["startDate"]) ? $context["startDate"] : null), "")) : ("")), "html", null, true);
            echo "~";
            echo twig_escape_filter($this->env, ((array_key_exists("endDate", $context)) ? (_twig_default_filter((isset($context["endDate"]) ? $context["endDate"] : null), "")) : ("")), "html", null, true);
            echo "</p>
                  ";
        }
        // line 13
        echo "                  ";
        if ((((array_key_exists("packageDate", $context)) ? (_twig_default_filter((isset($context["packageDate"]) ? $context["packageDate"] : null), 31)) : (31)) == 0)) {
            // line 14
            echo "                  <p class=\"text-danger text-sm\">套餐服务将于明天到期，请尽快<a href=\"http://www.edusoho.com/product/system\" target=\"_blank\">续费</a>，以免影响正常使用</p> 
                  ";
        }
        // line 16
        echo "                  <!--已到期-->
                  ";
        // line 17
        if ((((array_key_exists("packageDate", $context)) ? (_twig_default_filter((isset($context["packageDate"]) ? $context["packageDate"] : null), 31)) : (31)) < 0)) {
            // line 18
            echo "                  <p class=\"text-danger text-sm\">套餐服务已到期，请尽快<a href=\"http://www.edusoho.com/product/system\" target=\"_blank\">续费</a>！</p>
                  ";
        }
        // line 20
        echo "                  <!--30天提醒-->
                  ";
        // line 21
        if (((30 >= ((array_key_exists("packageDate", $context)) ? (_twig_default_filter((isset($context["packageDate"]) ? $context["packageDate"] : null), 31)) : (31))) && (((array_key_exists("packageDate", $context)) ? (_twig_default_filter((isset($context["packageDate"]) ? $context["packageDate"] : null), 31)) : (31)) > 0))) {
            // line 22
            echo "                  <p class=\"text-danger text-sm\">套餐服务将于";
            echo twig_escape_filter($this->env, (isset($context["packageDate"]) ? $context["packageDate"] : null), "html", null, true);
            echo "天后到期，请尽快<a href=\"http://www.edusoho.com/product/system\" target=\"_blank\">续费</a>，以免影响正常使用</p> 
                  ";
        }
        // line 24
        echo "                </div>  
              </div>
            </div>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:App:cloud-combo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 24,  66 => 22,  64 => 21,  61 => 20,  57 => 18,  55 => 17,  52 => 16,  48 => 14,  45 => 13,  38 => 11,  33 => 10,  27 => 6,  25 => 5,  19 => 1,);
    }
}
/*             <div class="col-md-6">*/
/*               <div class="panel panel-default">*/
/*                 <div class="panel-body">*/
/*                   <h4 class="eduyun-title">套餐信息</h4>*/
/*                   {% if user.level|default("none") == "none" %}*/
/*                     <div class="text-danger text-sm" role="alert">*/
/*                       <i class="glyphicon glyphicon-info-sign" aria-hidden="true"></i>点击<a href="http://www.edusoho.com/product/system" target="_blank">这里</a>了套餐解详情*/
/*                     </div>*/
/*                   {% else %}*/
/*                   <p class="text-muted">版本：{{content.user.levelName|default('')}}</p>*/
/*                   <p class="text-muted">有效期：{{ startDate|default('') }}~{{ endDate|default('') }}</p>*/
/*                   {% endif %}*/
/*                   {% if packageDate|default(31)  == 0 %}*/
/*                   <p class="text-danger text-sm">套餐服务将于明天到期，请尽快<a href="http://www.edusoho.com/product/system" target="_blank">续费</a>，以免影响正常使用</p> */
/*                   {% endif %}*/
/*                   <!--已到期-->*/
/*                   {% if packageDate|default(31)  < 0 %}*/
/*                   <p class="text-danger text-sm">套餐服务已到期，请尽快<a href="http://www.edusoho.com/product/system" target="_blank">续费</a>！</p>*/
/*                   {% endif %}*/
/*                   <!--30天提醒-->*/
/*                   {% if 30 >= packageDate|default(31)  and packageDate|default(31)   > 0 %}*/
/*                   <p class="text-danger text-sm">套餐服务将于{{packageDate}}天后到期，请尽快<a href="http://www.edusoho.com/product/system" target="_blank">续费</a>，以免影响正常使用</p> */
/*                   {% endif %}*/
/*                 </div>  */
/*               </div>*/
/*             </div>*/
