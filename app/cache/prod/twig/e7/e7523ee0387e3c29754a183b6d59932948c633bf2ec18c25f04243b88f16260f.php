<?php

/* TopxiaWebBundle:Group:buy-attach-modal.html.twig */
class __TwigTemplate_94b06843f33a4fa088fe41d65612f4b1ef608271d62bbc74404e261f3ce9374c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:Group:buy-attach-modal.html.twig", 1);
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
        echo "下载附件";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
<form id=\"buy-form\" class=\"form-horizontal\" method=\"post\" action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_buy_attach", array("attachId" => (isset($context["attachId"]) ? $context["attachId"] : null))), "html", null, true);
        echo "\">
  ";
        // line 8
        if ( !(isset($context["Trade"]) ? $context["Trade"] : null)) {
            // line 9
            echo "  <div class=\"row form-group\">
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
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["attach"]) ? $context["attach"] : null), "coin", array()), "html", null, true);
            echo " ";
            if (($this->getAttribute((isset($context["attach"]) ? $context["attach"] : null), "coin", array()) > (($this->getAttribute((isset($context["account"]) ? $context["account"] : null), "cash", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["account"]) ? $context["account"] : null), "cash", array()), 0)) : (0)))) {
                echo "<a href=\"";
                echo $this->env->getExtension('routing')->getPath("my_coin_buy");
                echo "\" class=\"mll\" style=\"color: #428bca;\">充值</a>";
            }
            echo "</label>
    </div>

  </div>
  
  ";
        } else {
            // line 31
            echo "  <div >您已购买该附件!</div>
  ";
        }
        // line 33
        echo "  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>
";
    }

    // line 37
    public function block_footer($context, array $blocks = array())
    {
        // line 38
        echo "  <script>
    app.load('group/buy-modal');
  </script>
  ";
        // line 41
        if ( !(isset($context["Trade"]) ? $context["Trade"] : null)) {
            // line 42
            echo "  <button id=\"create-btn\" data-submiting-text=\"正在提交\" type=\"submit\" class=\"";
            if (($this->getAttribute((isset($context["attach"]) ? $context["attach"] : null), "coin", array()) > (($this->getAttribute((isset($context["account"]) ? $context["account"] : null), "cash", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["account"]) ? $context["account"] : null), "cash", array()), 0)) : (0)))) {
                echo "disabled";
            }
            echo " btn btn-primary pull-right\" data-toggle=\"form-submit\" data-target=\"#buy-form\">购买</button>
  ";
        } else {
            // line 44
            echo "    <a id=\"btn-download\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_attach_download", array("fileId" => $this->getAttribute((isset($context["attach"]) ? $context["attach"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-primary pull-right\" >立即下载</a>
  ";
        }
        // line 46
        echo "  <button type=\"button\" class=\"btn btn-link pull-right\" data-dismiss=\"modal\">取消</button>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Group:buy-attach-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 46,  122 => 44,  114 => 42,  112 => 41,  107 => 38,  104 => 37,  96 => 33,  92 => 31,  77 => 25,  70 => 21,  58 => 14,  51 => 9,  49 => 8,  45 => 7,  42 => 6,  39 => 5,  33 => 4,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% set modalSize = 'large' %}*/
/* {% block title %}下载附件{% endblock %}*/
/* {% block body %}*/
/* */
/* <form id="buy-form" class="form-horizontal" method="post" action="{{path('group_thread_buy_attach',{attachId:attachId})}}">*/
/*   {% if not Trade %}*/
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
/*        <label class="control-label" name="amount" id="amount">{{attach.coin}} {% if attach.coin > account.cash|default(0)%}<a href="{{path('my_coin_buy')}}" class="mll" style="color: #428bca;">充值</a>{% endif %}</label>*/
/*     </div>*/
/* */
/*   </div>*/
/*   */
/*   {% else %}*/
/*   <div >您已购买该附件!</div>*/
/*   {% endif %}*/
/*   <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/* </form>*/
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/*   <script>*/
/*     app.load('group/buy-modal');*/
/*   </script>*/
/*   {% if not Trade %}*/
/*   <button id="create-btn" data-submiting-text="正在提交" type="submit" class="{% if attach.coin > account.cash|default(0)%}disabled{% endif %} btn btn-primary pull-right" data-toggle="form-submit" data-target="#buy-form">购买</button>*/
/*   {% else %}*/
/*     <a id="btn-download" href="{{path('group_attach_download',{fileId:attach.id})}}" class="btn btn-primary pull-right" >立即下载</a>*/
/*   {% endif %}*/
/*   <button type="button" class="btn btn-link pull-right" data-dismiss="modal">取消</button>*/
/* {% endblock %}*/
/* */
