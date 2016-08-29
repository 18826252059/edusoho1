<?php

/* TopxiaAdminBundle:Coin:coin-model.html.twig */
class __TwigTemplate_a30dcf30576666fe7b1489172d969cd6b53b5bed27d04b0111861b5d96121ef2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Coin:coin-model.html.twig", 1);
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
        $context["menu"] = "admin_coin_model";
        // line 5
        $context["script_controller"] = "coin/model";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo " 
  ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "
  <form class=\"form-horizontal\" method=\"post\" id=\"coin-model-form\">

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label>使用方式设置</label>
      </div>
      <div class=\"controls col-md-7\">
        <div class=\"btn-group\">
          <button type=\"button\" class=\"btn btn-default ";
        // line 18
        if (((($this->getAttribute((isset($context["coinSettings"]) ? $context["coinSettings"] : null), "cash_model", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["coinSettings"]) ? $context["coinSettings"] : null), "cash_model", array()), "none")) : ("none")) == "none")) {
            echo "btn-primary";
        }
        echo " model\" data-modle=\"none\">不使用</button>
          <button type=\"button\" class=\"btn btn-default ";
        // line 19
        if (((($this->getAttribute((isset($context["coinSettings"]) ? $context["coinSettings"] : null), "cash_model", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["coinSettings"]) ? $context["coinSettings"] : null), "cash_model", array()), "none")) : ("none")) == "deduction")) {
            echo "btn-primary";
        }
        echo " model\" data-modle=\"deduction\">用于抵扣</button>
          <button type=\"button\" class=\"btn btn-default ";
        // line 20
        if (((($this->getAttribute((isset($context["coinSettings"]) ? $context["coinSettings"] : null), "cash_model", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["coinSettings"]) ? $context["coinSettings"] : null), "cash_model", array()), "none")) : ("none")) == "currency")) {
            echo "btn-primary";
        }
        echo " model\" data-modle=\"currency\">用于标价</button>
        </div>
        <input type=\"hidden\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["coinSettings"]) ? $context["coinSettings"] : null), "cash_model", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["coinSettings"]) ? $context["coinSettings"] : null), "cash_model", array()), "none")) : ("none")), "html", null, true);
        echo "\" name=\"cash_model\" />
      </div>
    </div> 

    <div class=\"row form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"cash_rate\">虚拟币汇率设置</label>
      </div>
      <div class=\"controls col-md-4\">
        <input  type=\"text\" id=\"cash_rate\" name=\"cash_rate\" class=\"form-control\" ";
        // line 31
        if ((($this->getAttribute((isset($context["coinSettings"]) ? $context["coinSettings"] : null), "cash_rate", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["coinSettings"]) ? $context["coinSettings"] : null), "cash_rate", array()), 1)) : (1))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["coinSettings"]) ? $context["coinSettings"] : null), "cash_rate", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["coinSettings"]) ? $context["coinSettings"] : null), "cash_rate", array()), 1)) : (1)), "html", null, true);
            echo "\" ";
        } else {
            echo " value=\"1\" ";
        }
        echo ">
      </div>
      <div class=\"controls  col-md-8 col-md-offset-3\">
        <div class=\"help-block\">在此设置1元可换取的虚拟币数量，<span class=\"text text-danger\">
        建议汇率设置后不要进行改动
        </span>
        </div>
      </div>
    </div>
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
    <div class=\"row form-group\">
      <div class=\"controls col-md-offset-3 col-md-8\">
        <button type=\"submit\" class=\"btn btn-primary ";
        // line 43
        if (((($this->getAttribute((isset($context["coinSettings"]) ? $context["coinSettings"] : null), "cash_model", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["coinSettings"]) ? $context["coinSettings"] : null), "cash_model", array()), "none")) : ("none")) == "none")) {
            echo "hidden";
        }
        echo "\" id=\"next\"  >下一步</button>
        <button type=\"submit\" class=\"btn btn-primary ";
        // line 44
        if (((($this->getAttribute((isset($context["coinSettings"]) ? $context["coinSettings"] : null), "cash_model", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["coinSettings"]) ? $context["coinSettings"] : null), "cash_model", array()), "none")) : ("none")) == "none")) {
        } else {
            echo "hidden";
        }
        echo "\" id=\"save\"  >保存</button>
      </div>
    </div>
  </form>

  <div class=\"alert alert-info deduction ";
        // line 49
        if (((($this->getAttribute((isset($context["coinSettings"]) ? $context["coinSettings"] : null), "cash_model", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["coinSettings"]) ? $context["coinSettings"] : null), "cash_model", array()), "none")) : ("none")) != "deduction")) {
            // line 50
            echo "hidden";
        }
        echo "\">
    <p><strong> 
      1、虚拟币用于抵扣：网校以人民币作为支付货币，并可以使用虚拟币进行按比例抵扣(虚拟币类似于淘金币）
      <br>
      2、使用方式一旦保存（使用方式和汇率），请勿随意改动
      <br>
      3、使用方式的切换会使课程价格根据汇率变动
      <br>
      4、如有参加促销活动的课程，修改价格都将有相应的折扣    
    </strong></p>
  </div>

  <div class=\"alert alert-info currency ";
        // line 62
        if (((($this->getAttribute((isset($context["coinSettings"]) ? $context["coinSettings"] : null), "cash_model", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["coinSettings"]) ? $context["coinSettings"] : null), "cash_model", array()), "none")) : ("none")) != "currency")) {
            echo "hidden";
        }
        echo "\">
    <p><strong> 
      1、虚拟币用于标价：网校以虚拟币作为支付货币，课程和会员以虚拟币标价和结算
      <br>
      2、虚拟币用于标价后，移动端仍显示人民币价格（移动端暂不支持虚拟币支付）
      <br>
      3、使用方式一旦保存（使用方式和汇率），请勿随意改动
      <br>
      4、使用方式的切换会使课程价格会根据汇率变动
      <br>
      5、如有参加促销活动的课程，修改价格都将有相应的折扣    
    </strong></p>
  </div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Coin:coin-model.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 62,  125 => 50,  123 => 49,  112 => 44,  106 => 43,  100 => 40,  82 => 31,  70 => 22,  63 => 20,  57 => 19,  51 => 18,  39 => 9,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set menu = 'admin_coin_model' %}*/
/* */
/* {% set script_controller = "coin/model" %}*/
/* */
/* {% block main %}*/
/*  */
/*   {{ web_macro.flash_messages() }}*/
/*   <form class="form-horizontal" method="post" id="coin-model-form">*/
/* */
/*     <div class="form-group">*/
/*       <div class="col-md-3 control-label">*/
/*         <label>使用方式设置</label>*/
/*       </div>*/
/*       <div class="controls col-md-7">*/
/*         <div class="btn-group">*/
/*           <button type="button" class="btn btn-default {% if coinSettings.cash_model|default('none') =="none" %}btn-primary{% endif %} model" data-modle="none">不使用</button>*/
/*           <button type="button" class="btn btn-default {% if coinSettings.cash_model|default('none') =="deduction" %}btn-primary{% endif %} model" data-modle="deduction">用于抵扣</button>*/
/*           <button type="button" class="btn btn-default {% if coinSettings.cash_model|default('none') =="currency" %}btn-primary{% endif %} model" data-modle="currency">用于标价</button>*/
/*         </div>*/
/*         <input type="hidden" value="{{ coinSettings.cash_model|default('none') }}" name="cash_model" />*/
/*       </div>*/
/*     </div> */
/* */
/*     <div class="row form-group">*/
/*       <div class="col-md-3 control-label">*/
/*         <label for="cash_rate">虚拟币汇率设置</label>*/
/*       </div>*/
/*       <div class="controls col-md-4">*/
/*         <input  type="text" id="cash_rate" name="cash_rate" class="form-control" {% if coinSettings.cash_rate|default(1) %}value="{{coinSettings.cash_rate|default(1)}}" {% else %} value="1" {% endif %}>*/
/*       </div>*/
/*       <div class="controls  col-md-8 col-md-offset-3">*/
/*         <div class="help-block">在此设置1元可换取的虚拟币数量，<span class="text text-danger">*/
/*         建议汇率设置后不要进行改动*/
/*         </span>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*     <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*     <div class="row form-group">*/
/*       <div class="controls col-md-offset-3 col-md-8">*/
/*         <button type="submit" class="btn btn-primary {% if coinSettings.cash_model|default('none') =="none" %}hidden{% endif %}" id="next"  >下一步</button>*/
/*         <button type="submit" class="btn btn-primary {% if coinSettings.cash_model|default('none') =="none" %}{% else %}hidden{% endif %}" id="save"  >保存</button>*/
/*       </div>*/
/*     </div>*/
/*   </form>*/
/* */
/*   <div class="alert alert-info deduction {% if coinSettings.cash_model|default('none') */
/*   !="deduction" %}hidden{% endif %}">*/
/*     <p><strong> */
/*       1、虚拟币用于抵扣：网校以人民币作为支付货币，并可以使用虚拟币进行按比例抵扣(虚拟币类似于淘金币）*/
/*       <br>*/
/*       2、使用方式一旦保存（使用方式和汇率），请勿随意改动*/
/*       <br>*/
/*       3、使用方式的切换会使课程价格根据汇率变动*/
/*       <br>*/
/*       4、如有参加促销活动的课程，修改价格都将有相应的折扣    */
/*     </strong></p>*/
/*   </div>*/
/* */
/*   <div class="alert alert-info currency {% if coinSettings.cash_model|default('none') !="currency" %}hidden{% endif %}">*/
/*     <p><strong> */
/*       1、虚拟币用于标价：网校以虚拟币作为支付货币，课程和会员以虚拟币标价和结算*/
/*       <br>*/
/*       2、虚拟币用于标价后，移动端仍显示人民币价格（移动端暂不支持虚拟币支付）*/
/*       <br>*/
/*       3、使用方式一旦保存（使用方式和汇率），请勿随意改动*/
/*       <br>*/
/*       4、使用方式的切换会使课程价格会根据汇率变动*/
/*       <br>*/
/*       5、如有参加促销活动的课程，修改价格都将有相应的折扣    */
/*     </strong></p>*/
/*   </div>*/
/* {% endblock %}*/
