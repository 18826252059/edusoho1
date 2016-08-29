<?php

/* TopxiaAdminBundle:System:post-num-rules.html.twig */
class __TwigTemplate_6ca162715d7437db579234ec95801afe174bfe9c93dfa122e430429ac8fd130d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:System:post-num-rules.html.twig", 1);
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
        $context["script_controller"] = "system/post-num-rules";
        // line 4
        $context["menu"] = "admin_setting_post_num_rules";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form id='post-num-rules-form' class=\"form-horizontal\" method=\"post\" novalidate>

  <fieldset>
    <div class=\"form-group\">
      <div class=\"col-md-5 control-label\">
        <label >同一IP，5分钟内最多发帖次数（包含回复数）</label>
        <label style=\"display:none\" for=\"thread-post-num-for-ip\">发帖次数</label>
      </div>
      <div class=\"controls col-md-6\">
        <input type=\"hidden\" name=\"setting[rules][thread][fiveMuniteRule][interval]\" class=\"form-control\" value=\"300\">
        <input id=\"thread-post-num-for-ip\" type=\"text\" name=\"setting[rules][thread][fiveMuniteRule][postNum]\" class=\"form-control\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("post_num_rules"), "rules", array(), "any", false, true), "thread", array(), "any", false, true), "fiveMuniteRule", array(), "any", false, true), "postNum", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("post_num_rules"), "rules", array(), "any", false, true), "thread", array(), "any", false, true), "fiveMuniteRule", array(), "any", false, true), "postNum", array()), "")) : ("")), "html", null, true);
        echo "\">
        <div class=\"help-block\" style=\"\">发帖次数必须大于或者等于0的整数，0表示不限制</div>
      </div>
    </div>
    <div class=\"form-group\">
      <div class=\"col-md-5 control-label\">
        <label>同一用户，5分钟内最多发帖次数（包含回复数）</label>
        <label style=\"display:none\" for=\"thread-post-num-for-user\">发帖次数</label>
      </div>
      <div class=\"controls col-md-6\">
        <input type=\"hidden\" name=\"setting[rules][threadLoginedUser][fiveMuniteRule][interval]\" class=\"form-control\" value=\"300\">
        <input id=\"thread-post-num-for-user\" type=\"text\" name=\"setting[rules][threadLoginedUser][fiveMuniteRule][postNum]\" class=\"form-control\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("post_num_rules"), "rules", array(), "any", false, true), "threadLoginedUser", array(), "any", false, true), "fiveMuniteRule", array(), "any", false, true), "postNum", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("post_num_rules"), "rules", array(), "any", false, true), "threadLoginedUser", array(), "any", false, true), "fiveMuniteRule", array(), "any", false, true), "postNum", array()), "")) : ("")), "html", null, true);
        echo "\">
        <div class=\"help-block\" style=\"\">发帖次数必须大于或者等于0的整数，0表示不限制</div>
      </div>
    </div>
  </fieldset>

  <div class=\"form-group\">
    <div class=\"col-md-4 control-label\"></div>
    <div class=\"controls col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">提交</button>
    </div>
  </div>

  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

</form>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:post-num-rules.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 43,  65 => 30,  51 => 19,  36 => 7,  33 => 6,  29 => 1,  27 => 4,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set script_controller = 'system/post-num-rules' %}*/
/* {% set menu = 'admin_setting_post_num_rules' %}*/
/* */
/* {% block main %}*/
/* {{ web_macro.flash_messages() }}*/
/* */
/* <form id='post-num-rules-form' class="form-horizontal" method="post" novalidate>*/
/* */
/*   <fieldset>*/
/*     <div class="form-group">*/
/*       <div class="col-md-5 control-label">*/
/*         <label >同一IP，5分钟内最多发帖次数（包含回复数）</label>*/
/*         <label style="display:none" for="thread-post-num-for-ip">发帖次数</label>*/
/*       </div>*/
/*       <div class="controls col-md-6">*/
/*         <input type="hidden" name="setting[rules][thread][fiveMuniteRule][interval]" class="form-control" value="300">*/
/*         <input id="thread-post-num-for-ip" type="text" name="setting[rules][thread][fiveMuniteRule][postNum]" class="form-control" value="{{setting('post_num_rules').rules.thread.fiveMuniteRule.postNum|default('')}}">*/
/*         <div class="help-block" style="">发帖次数必须大于或者等于0的整数，0表示不限制</div>*/
/*       </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <div class="col-md-5 control-label">*/
/*         <label>同一用户，5分钟内最多发帖次数（包含回复数）</label>*/
/*         <label style="display:none" for="thread-post-num-for-user">发帖次数</label>*/
/*       </div>*/
/*       <div class="controls col-md-6">*/
/*         <input type="hidden" name="setting[rules][threadLoginedUser][fiveMuniteRule][interval]" class="form-control" value="300">*/
/*         <input id="thread-post-num-for-user" type="text" name="setting[rules][threadLoginedUser][fiveMuniteRule][postNum]" class="form-control" value="{{setting('post_num_rules').rules.threadLoginedUser.fiveMuniteRule.postNum|default('')}}">*/
/*         <div class="help-block" style="">发帖次数必须大于或者等于0的整数，0表示不限制</div>*/
/*       </div>*/
/*     </div>*/
/*   </fieldset>*/
/* */
/*   <div class="form-group">*/
/*     <div class="col-md-4 control-label"></div>*/
/*     <div class="controls col-md-8">*/
/*       <button type="submit" class="btn btn-primary">提交</button>*/
/*     </div>*/
/*   </div>*/
/* */
/*   <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/* */
/* </form>*/
/* */
/* {% endblock %}*/
