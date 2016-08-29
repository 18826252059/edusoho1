<?php

/* TopxiaWebBundle:Group:reward-modal.html.twig */
class __TwigTemplate_3187e793f39f4fa0624516f288c6daad4b0a353cc81e4a6a33341b5e32f9a23d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:Group:reward-modal.html.twig", 1);
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
        echo "悬赏";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
<form id=\"reward-form\" class=\"form-horizontal\" method=\"post\" action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_thread_reward", array("threadId" => (isset($context["threadId"]) ? $context["threadId"] : null))), "html", null, true);
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
      <label for=\"amount\" class=\"control-label\"> 悬赏额:</label>
    </div>
    <div class=\"col-md-3 controls\">
       <input name=\"amount\" class=\"form-control\" tyoe=\"text\" id=\"amount\"/>
    </div>

  </div>

  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

</form>
";
    }

    // line 34
    public function block_footer($context, array $blocks = array())
    {
        // line 35
        echo "  <script>
    app.load('group/reward-modal');
  </script>
  <button id=\"create-btn\" data-submiting-text=\"正在提交\" type=\"submit\" class=\"btn btn-primary pull-right\" data-toggle=\"form-submit\" data-target=\"#reward-form\">提交</button>
  <button type=\"button\" class=\"btn btn-link pull-right\" data-dismiss=\"modal\">取消</button>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Group:reward-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 35,  83 => 34,  75 => 29,  55 => 14,  45 => 7,  42 => 6,  39 => 5,  33 => 4,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% set modalSize = 'large' %}*/
/* {% block title %}悬赏{% endblock %}*/
/* {% block body %}*/
/* */
/* <form id="reward-form" class="form-horizontal" method="post" action="{{path('group_thread_reward',{threadId:threadId})}}">*/
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
/*       <label for="amount" class="control-label"> 悬赏额:</label>*/
/*     </div>*/
/*     <div class="col-md-3 controls">*/
/*        <input name="amount" class="form-control" tyoe="text" id="amount"/>*/
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
/*     app.load('group/reward-modal');*/
/*   </script>*/
/*   <button id="create-btn" data-submiting-text="正在提交" type="submit" class="btn btn-primary pull-right" data-toggle="form-submit" data-target="#reward-form">提交</button>*/
/*   <button type="button" class="btn btn-link pull-right" data-dismiss="modal">取消</button>*/
/* {% endblock %}*/
/* */
