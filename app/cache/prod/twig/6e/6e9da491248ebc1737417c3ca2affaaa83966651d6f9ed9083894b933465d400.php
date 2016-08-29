<?php

/* TopxiaWebBundle:Default:customer-service-online.html.twig */
class __TwigTemplate_86a7b766e9ebd7d30d956c0f5a627677ced9aae7c42188f839d83b85f0a8a9a3 extends Twig_Template
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
        echo " 
  ";
        // line 2
        if (((($this->getAttribute((isset($context["customerServiceSetting"]) ? $context["customerServiceSetting"] : null), "customer_service_mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["customerServiceSetting"]) ? $context["customerServiceSetting"] : null), "customer_service_mode", array()), null)) : (null)) == "opened")) {
            // line 3
            echo "    <div class=\"customer-service-online\">

      <div class=\"float-left\"> 
        <a style=\"display: block\" id=\"aFloatTools_Show\" class=\"btn-open\" title=\"查看在线客服\" 
        onClick=\"javascript:
          \$('#divFloatToolsView').animate({width: 'show', opacity: 'show'}, 'normal',function(){ 
            \$('#divFloatToolsView').show();
          });
          \$('#aFloatTools_Show').attr('style','display:none');
          \$('#aFloatTools_Hide').attr('style','display:block');\" 
          href=\"javascript:void(0);
          \"> 展开
        </a>

        <a style=\"display: none\" id=\"aFloatTools_Hide\" class=\"btn-ctn\" title=\"关闭在线客服\" 
        onClick=\"javascript:
          \$('#divFloatToolsView').animate({width: 'hide', opacity: 'hide'}, 'normal',function(){ 
            \$('#divFloatToolsView').hide();
          });
          \$('#aFloatTools_Show').attr('style','display:block');
          \$('#aFloatTools_Hide').attr('style','display:none');\" 
          href=\"javascript:void(0);\"
          > 收缩
        </a>

      </div>

      <div id=\"divFloatToolsView\" class=\"float-right\" style=\"display: none\">
        <div class=\"service-category\">

          <h3>QQ</h3>
          <ul>
            <li><span>客服QQ</span> 
              <a target=\"_blank\" href=\"http://wpa.qq.com/msgrd?v=3&uin=";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customerServiceSetting"]) ? $context["customerServiceSetting"] : null), "customer_of_qq", array()), "html", null, true);
            echo "&site=qq&menu=yes\"> 
                <img border=\"0\" src=\"http://wpa.qq.com/pa?p=2:";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customerServiceSetting"]) ? $context["customerServiceSetting"] : null), "customer_of_qq", array()), "html", null, true);
            echo ":51\" alt=\"客服QQ\" title=\"客服QQ\" />
              </a> 
            </li>
          </ul>

          <h3>电话</h3>
          <ul>
            <li><span>客服电话</span> 
              <a target=\"_blank\" href=\"javascript:;\"> 
                ";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customerServiceSetting"]) ? $context["customerServiceSetting"] : null), "customer_of_phone", array()), "html", null, true);
            echo "
              </a>
            </li>
          </ul>

          <h3>邮件</h3>
          <ul>
            <li>
              <span>反馈邮件</span> 
              <a target=\"_blank\" href=\"mailto:";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customerServiceSetting"]) ? $context["customerServiceSetting"] : null), "customer_of_mail", array()), "html", null, true);
            echo "\">
              ";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["customerServiceSetting"]) ? $context["customerServiceSetting"] : null), "customer_of_mail", array()), "html", null, true);
            echo "</a>
            </li>
          </ul>

        </div>
      </div>
    </div>
  ";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:customer-service-online.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 56,  87 => 55,  75 => 46,  63 => 37,  59 => 36,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/*  */
/*   {% if customerServiceSetting.customer_service_mode|default(null) == 'opened' %}*/
/*     <div class="customer-service-online">*/
/* */
/*       <div class="float-left"> */
/*         <a style="display: block" id="aFloatTools_Show" class="btn-open" title="查看在线客服" */
/*         onClick="javascript:*/
/*           $('#divFloatToolsView').animate({width: 'show', opacity: 'show'}, 'normal',function(){ */
/*             $('#divFloatToolsView').show();*/
/*           });*/
/*           $('#aFloatTools_Show').attr('style','display:none');*/
/*           $('#aFloatTools_Hide').attr('style','display:block');" */
/*           href="javascript:void(0);*/
/*           "> 展开*/
/*         </a>*/
/* */
/*         <a style="display: none" id="aFloatTools_Hide" class="btn-ctn" title="关闭在线客服" */
/*         onClick="javascript:*/
/*           $('#divFloatToolsView').animate({width: 'hide', opacity: 'hide'}, 'normal',function(){ */
/*             $('#divFloatToolsView').hide();*/
/*           });*/
/*           $('#aFloatTools_Show').attr('style','display:block');*/
/*           $('#aFloatTools_Hide').attr('style','display:none');" */
/*           href="javascript:void(0);"*/
/*           > 收缩*/
/*         </a>*/
/* */
/*       </div>*/
/* */
/*       <div id="divFloatToolsView" class="float-right" style="display: none">*/
/*         <div class="service-category">*/
/* */
/*           <h3>QQ</h3>*/
/*           <ul>*/
/*             <li><span>客服QQ</span> */
/*               <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin={{customerServiceSetting.customer_of_qq}}&site=qq&menu=yes"> */
/*                 <img border="0" src="http://wpa.qq.com/pa?p=2:{{customerServiceSetting.customer_of_qq}}:51" alt="客服QQ" title="客服QQ" />*/
/*               </a> */
/*             </li>*/
/*           </ul>*/
/* */
/*           <h3>电话</h3>*/
/*           <ul>*/
/*             <li><span>客服电话</span> */
/*               <a target="_blank" href="javascript:;"> */
/*                 {{customerServiceSetting.customer_of_phone}}*/
/*               </a>*/
/*             </li>*/
/*           </ul>*/
/* */
/*           <h3>邮件</h3>*/
/*           <ul>*/
/*             <li>*/
/*               <span>反馈邮件</span> */
/*               <a target="_blank" href="mailto:{{customerServiceSetting.customer_of_mail}}">*/
/*               {{customerServiceSetting.customer_of_mail}}</a>*/
/*             </li>*/
/*           </ul>*/
/* */
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   {% endif %}*/
