<?php

/* TopxiaWebBundle:Register:captcha-modal.html.twig */
class __TwigTemplate_ec6311001bfca74d88ff98aac5787ac03100174bb89a589b6e489ac8961384dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:Register:captcha-modal.html.twig", 1);
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

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "请输入验证码";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "
<form id=\"captcha-form\" method=\"get\" action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("register_captcha_check");
        echo "\">

  <div class=\"form-group\">
    <div class=\"controls col-xs-7\" >
      <input type=\"text\" class=\"form-control input-lg\" id=\"captcha_num_modal\" name=\"captcha_num\" maxlength=\"5\" placeholder=\"验证码\" required=\"required\"  data-url=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("register_captcha_check");
        echo "\" >
      <div class=\"help-block\"></div>
    </div>
    <div class=\"controls col-xs-5\">
      <img src=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("register_captcha_num");
        echo "\" data-url=\"";
        echo $this->env->getExtension('routing')->getPath("register_captcha_num");
        echo "\" id=\"getcode_num\" title=\"看不清，点击换一张\" style=\"cursor:pointer;height:40px;width:100%\">
    </div>
\t</div>

  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

</form>

";
    }

    // line 26
    public function block_footer($context, array $blocks = array())
    {
        // line 27
        echo "  <button type=\"submit\" class=\"btn btn-primary pull-right captcha-btn\" data-toggle=\"form-submit\" data-target=\"#captcha-form\">确定</button>
  
<script>app.load('auth/captcha-modal')</script>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Register:captcha-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 27,  77 => 26,  68 => 20,  59 => 16,  52 => 12,  45 => 8,  42 => 7,  39 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% set modalSize = 'large' %}*/
/* */
/* {% block title %}请输入验证码{% endblock %}*/
/* {% block body %}*/
/* */
/* <form id="captcha-form" method="get" action="{{ path('register_captcha_check') }}">*/
/* */
/*   <div class="form-group">*/
/*     <div class="controls col-xs-7" >*/
/*       <input type="text" class="form-control input-lg" id="captcha_num_modal" name="captcha_num" maxlength="5" placeholder="验证码" required="required"  data-url="{{path('register_captcha_check')}}" >*/
/*       <div class="help-block"></div>*/
/*     </div>*/
/*     <div class="controls col-xs-5">*/
/*       <img src="{{ path('register_captcha_num') }}" data-url="{{ path('register_captcha_num') }}" id="getcode_num" title="看不清，点击换一张" style="cursor:pointer;height:40px;width:100%">*/
/*     </div>*/
/* 	</div>*/
/* */
/*   <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/* */
/* </form>*/
/* */
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/*   <button type="submit" class="btn btn-primary pull-right captcha-btn" data-toggle="form-submit" data-target="#captcha-form">确定</button>*/
/*   */
/* <script>app.load('auth/captcha-modal')</script>*/
/* {% endblock %}*/
/* */
