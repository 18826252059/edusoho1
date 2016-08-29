<?php

/* ClassroomBundle:ClassroomManage:set-price.html.twig */
class __TwigTemplate_dcbf544c92fc515c660790e6d6409f58c7af5c58c5fa0f326611e0d369206f7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClassroomBundle:ClassroomManage:layout.html.twig", "ClassroomBundle:ClassroomManage:set-price.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ClassroomBundle:ClassroomManage:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["side_nav"] = "price";
        // line 4
        $context["script_controller"] = "classroombundle/controller/classroom/set-price";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "基本信息 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading\">基本信息</div>
  <div class=\"panel-body\">
  ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "
  <form class=\"form-horizontal\" method=\"post\" id=\"classroom-set-form\" novalidate>

      <div class=\"row form-group\">
        <div class=\"col-md-2 control-label\">
          <label for=\"price\">价格(元)</label>
        </div>
        <div class=\"controls col-md-8\">
          <input name=\"price\" type=\"text\"  id=\"price\" class=\"form-control\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "price", array()), "html", null, true);
        echo "\"/>
          <div class=\"help-block\">当前共有 ";
        // line 21
        echo twig_escape_filter($this->env, (isset($context["courseNum"]) ? $context["courseNum"] : null), "html", null, true);
        echo " 个课程，原价共计 ";
        echo twig_escape_filter($this->env, (isset($context["price"]) ? $context["price"] : null), "html", null, true);
        echo " 元。</div>
        </div>
      ";
        // line 23
        if (($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled") && ($this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type") == "Coin"))) {
            // line 24
            echo "        <div class=\"controls col-md-4 col-md-offset-2\">
          <div class=\"help-block\" id=\"coinPrice\" data-rate=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.cash_rate"), "html", null, true);
            echo "\" data-name=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
            echo "\">相当于";
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "price", array()) * $this->env->getExtension('topxia_web_twig')->getSetting("coin.cash_rate")), "html", null, true);
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
            echo "</div>
        </div>
      ";
        }
        // line 28
        echo "      </div>

      ";
        // line 30
        if ($this->env->getExtension('topxia_web_twig')->getSetting("vip.enabled")) {
            // line 31
            echo "
      <div class=\"form-group\">
        <div class=\"col-md-2 control-label\">
          <label for=\"price\">会员免费学</label>
        </div>
        <div class=\"col-md-8 controls\">
          <select name=\"vipLevelId\" class=\"form-control width-input width-input-large\">
            ";
            // line 38
            echo $this->env->getExtension('topxia_html_twig')->selectOptions((isset($context["levels"]) ? $context["levels"] : null), (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "vipLevelId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "vipLevelId", array()), 0)) : (0)), "不支持");
            echo "
          </select>
        </div>
      </div>
      ";
        }
        // line 43
        echo "
      <div class=\"row form-group\">
        <div class=\"col-md-2 control-label\"></div>
        <div class=\"controls col-md-8\">
          <button type=\"submit\" class=\"btn btn-primary\" id=\"classroom-save\">提交</button>  
        </div>
      </div>

      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
  </form>

  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomManage:set-price.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 51,  110 => 43,  102 => 38,  93 => 31,  91 => 30,  87 => 28,  76 => 25,  73 => 24,  71 => 23,  64 => 21,  60 => 20,  49 => 12,  44 => 9,  41 => 8,  34 => 6,  30 => 1,  28 => 4,  26 => 3,  11 => 1,);
    }
}
/* {% extends 'ClassroomBundle:ClassroomManage:layout.html.twig' %}*/
/* */
/* {% set side_nav = "price" %}*/
/* {% set script_controller = 'classroombundle/controller/classroom/set-price' %}*/
/* */
/* {% block title %}基本信息 - {{ parent() }}{% endblock %}*/
/* */
/* {% block main %}*/
/* <div class="panel panel-default panel-col">*/
/*   <div class="panel-heading">基本信息</div>*/
/*   <div class="panel-body">*/
/*   {{ web_macro.flash_messages() }}*/
/*   <form class="form-horizontal" method="post" id="classroom-set-form" novalidate>*/
/* */
/*       <div class="row form-group">*/
/*         <div class="col-md-2 control-label">*/
/*           <label for="price">价格(元)</label>*/
/*         </div>*/
/*         <div class="controls col-md-8">*/
/*           <input name="price" type="text"  id="price" class="form-control" value="{{classroom.price}}"/>*/
/*           <div class="help-block">当前共有 {{courseNum}} 个课程，原价共计 {{price}} 元。</div>*/
/*         </div>*/
/*       {% if setting('coin.coin_enabled') and setting('coin.price_type') == 'Coin' %}*/
/*         <div class="controls col-md-4 col-md-offset-2">*/
/*           <div class="help-block" id="coinPrice" data-rate="{{setting('coin.cash_rate')}}" data-name="{{setting('coin.coin_name')}}">相当于{{classroom.price * setting('coin.cash_rate') }}{{setting('coin.coin_name')}}</div>*/
/*         </div>*/
/*       {% endif %}*/
/*       </div>*/
/* */
/*       {% if setting('vip.enabled') %}*/
/* */
/*       <div class="form-group">*/
/*         <div class="col-md-2 control-label">*/
/*           <label for="price">会员免费学</label>*/
/*         </div>*/
/*         <div class="col-md-8 controls">*/
/*           <select name="vipLevelId" class="form-control width-input width-input-large">*/
/*             {{ select_options(levels, classroom.vipLevelId|default(0), '不支持') }}*/
/*           </select>*/
/*         </div>*/
/*       </div>*/
/*       {% endif %}*/
/* */
/*       <div class="row form-group">*/
/*         <div class="col-md-2 control-label"></div>*/
/*         <div class="controls col-md-8">*/
/*           <button type="submit" class="btn btn-primary" id="classroom-save">提交</button>  */
/*         </div>*/
/*       </div>*/
/* */
/*       <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*   </form>*/
/* */
/*   </div>*/
/* </div>*/
/* {% endblock %}*/
