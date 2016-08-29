<?php

/* TopxiaWebBundle:Group:hide-modal.html.twig */
class __TwigTemplate_43c47c443d317b1ba538de08a5d3fe1859d92d70cc6731271241d1f8e0bbf737 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:Group:hide-modal.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["modalSize"] = "large";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "查看隐藏帖";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
<form id=\"hide-form\" class=\"form-horizontal\" method=\"post\" action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_hide", array("threadId" => (isset($context["threadId"]) ? $context["threadId"] : null))), "html", null, true);
        echo "\">

  <div class=\"row form-group\">
    <div class=\"col-md-3 col-md-offset-2 control\">
      <label class=\"control-label\"> 账户余额:</label>
    </div>
    <div class=\"col-md-3 controls\">
       <label class=\"control-label\" id=\"canUse\" data-val=\"";
        // line 14
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["account"]) ? $context["account"] : null), "cash", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["account"]) ? $context["account"] : null), "cash", array()), 0)) : (0)), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["account"]) ? $context["account"] : null), "cash", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["account"]) ? $context["account"] : null), "cash", array()), 0)) : (0)), "html", null, true);
        echo "</label>
    </div>

  </div>

  <div class=\"row form-group\">
    <div class=\"col-md-3 col-md-offset-2 control\">
      <label for=\"amount\" class=\"control-label\"> 所需";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("coin"), "coin_name", array()), "html", null, true);
        echo ":
      </label>
    </div>
    <div class=\"col-md-3 controls\">
       <label class=\"control-label\" name=\"amount\" id=\"amount\">";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["need"]) ? $context["need"] : null), "html", null, true);
        echo " ";
        if (((isset($context["need"]) ? $context["need"] : null) > (($this->getAttribute((isset($context["account"]) ? $context["account"] : null), "cash", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["account"]) ? $context["account"] : null), "cash", array()), 0)) : (0)))) {
            echo "<a href=\"";
            echo $this->env->getExtension('routing')->getPath("my_coin_buy");
            echo "\" class=\"mll\" style=\"color: #428bca;\">充值</a>";
        }
        echo "</label>
    </div>

  </div>

  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

</form>
";
    }

    // line 35
    public function block_footer($context, array $blocks = array())
    {
        // line 36
        echo "  <script>
    app.load('group/hide-modal');
  </script>
  
  <button id=\"create-btn\" data-submiting-text=\"正在提交\" type=\"submit\" class=\"";
        // line 40
        if (((isset($context["need"]) ? $context["need"] : null) > (($this->getAttribute((isset($context["account"]) ? $context["account"] : null), "cash", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["account"]) ? $context["account"] : null), "cash", array()), 0)) : (0)))) {
            echo "disabled";
        }
        echo " btn btn-primary pull-right\" data-toggle=\"form-submit\" data-target=\"#hide-form\">立即查看</button>
  <button type=\"button\" class=\"btn btn-link pull-right\" data-dismiss=\"modal\">取消</button>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Group:hide-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 40,  99 => 36,  96 => 35,  88 => 30,  74 => 25,  67 => 21,  55 => 14,  45 => 7,  42 => 6,  39 => 5,  33 => 4,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% set modalSize = 'large' %}*/
/* {% block title %}查看隐藏帖{% endblock %}*/
/* {% block body %}*/
/* */
/* <form id="hide-form" class="form-horizontal" method="post" action="{{path('group_thread_hide',{threadId:threadId})}}">*/
/* */
/*   <div class="row form-group">*/
/*     <div class="col-md-3 col-md-offset-2 control">*/
/*       <label class="control-label"> 账户余额:</label>*/
/*     </div>*/
/*     <div class="col-md-3 controls">*/
/*        <label class="control-label" id="canUse" data-val="{{account.cash|default(0)}}">{{account.cash|default(0)}}</label>*/
/*     </div>*/
/* */
/*   </div>*/
/* */
/*   <div class="row form-group">*/
/*     <div class="col-md-3 col-md-offset-2 control">*/
/*       <label for="amount" class="control-label"> 所需{{setting('coin').coin_name}}:*/
/*       </label>*/
/*     </div>*/
/*     <div class="col-md-3 controls">*/
/*        <label class="control-label" name="amount" id="amount">{{need}} {% if need > account.cash|default(0)%}<a href="{{path('my_coin_buy')}}" class="mll" style="color: #428bca;">充值</a>{% endif %}</label>*/
/*     </div>*/
/* */
/*   </div>*/
/* */
/*   <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/* */
/* </form>*/
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/*   <script>*/
/*     app.load('group/hide-modal');*/
/*   </script>*/
/*   */
/*   <button id="create-btn" data-submiting-text="正在提交" type="submit" class="{% if need > account.cash|default(0)%}disabled{% endif %} btn btn-primary pull-right" data-toggle="form-submit" data-target="#hide-form">立即查看</button>*/
/*   <button type="button" class="btn btn-link pull-right" data-dismiss="modal">取消</button>*/
/* {% endblock %}*/
/* */
