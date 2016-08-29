<?php

/* TopxiaWebBundle:Coin:write-invitecode-modal.html.twig */
class __TwigTemplate_a9e4e04418866eef8a69ec976036b5cdc6547f3d574d2723c6734011563518e5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:Coin:write-invitecode-modal.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "填写TA的邀请码";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
<form id=\"write-invite-code\" class=\"form-horizontal\" action=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("write_invitecode");
        echo "\" method=\"post\" >
  <div class=\"form-group\">
    <div class=\"col-md-2 control-label\"><label>TA的邀请码</label></div>
    <div class=\"controls col-md-8\">
      <input class=\"form-control\" type=\"text\" placeholder=\"邀请码\" name=\"inviteCode\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "inviteCode"), "method"), "html", null, true);
        echo "\">
      <div class=\"help-block\">填写TA的邀请码，当您第一次消费后，TA会获得邀请奖励。</div>
    </div>
  </div>
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>
<script>app.load('coin/invite-code')</script>
";
    }

    // line 20
    public function block_footer($context, array $blocks = array())
    {
        // line 21
        echo "  <button id=\"create-btn\" data-submiting-text=\"正在提交\" type=\"submit\" class=\"btn btn-primary pull-right\" data-toggle=\"form-submit\" data-target=\"#write-invite-code\" data-url=\"";
        echo $this->env->getExtension('routing')->getPath("receive_coupon");
        echo "\">提交</button>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Coin:write-invitecode-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 21,  64 => 20,  56 => 15,  49 => 11,  42 => 7,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% block title %}填写TA的邀请码{% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* <form id="write-invite-code" class="form-horizontal" action="{{path('write_invitecode')}}" method="post" >*/
/*   <div class="form-group">*/
/*     <div class="col-md-2 control-label"><label>TA的邀请码</label></div>*/
/*     <div class="controls col-md-8">*/
/*       <input class="form-control" type="text" placeholder="邀请码" name="inviteCode" value="{{ app.request.get('inviteCode') }}">*/
/*       <div class="help-block">填写TA的邀请码，当您第一次消费后，TA会获得邀请奖励。</div>*/
/*     </div>*/
/*   </div>*/
/*   <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/* </form>*/
/* <script>app.load('coin/invite-code')</script>*/
/* {% endblock %}*/
/*   */
/* {% block footer %}*/
/*   <button id="create-btn" data-submiting-text="正在提交" type="submit" class="btn btn-primary pull-right" data-toggle="form-submit" data-target="#write-invite-code" data-url="{{path('receive_coupon')}}">提交</button>*/
/* {% endblock %}*/
