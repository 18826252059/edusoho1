<?php

/* TopxiaWebBundle:Auth:email-confirm.html.twig */
class __TwigTemplate_ea1dd280f6ae9e307e703b147c32f3163e3a7b94f5b59563b2c8df012392ff00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Auth:email-confirm.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["script_controller"] = "auth/email-change";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "设置新邮箱 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"row\">
  <div class=\"col-md-6 col-md-offset-3 ptl\">
    <div class=\"panel panel-default panel-page\">
      <div class=\"panel-heading\"><h2>设置新邮箱</h2></div>

      <form id=\"setting-email-form\" class=\"form-horizontal\" method=\"post\" >
        ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

        <div class=\"form-group\">
          <div class=\"col-md-3 control-label\"><label>新邮箱</label></div>
          <div class=\"col-md-9 controls\">
            <span class=\"control-text\">";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["newEmail"]) ? $context["newEmail"] : null), "html", null, true);
        echo "</span>
          </div>
        </div>

        <div class=\"form-group\">
          <div class=\"col-md-3 control-label\"><label for=\"password-field\">网站登录密码</label></div>
          <div class=\"col-md-9 controls\">
            <input type=\"password\" name=\"password\" class=\"form-control\" id=\"password-field\" />
            <p class=\"help-block\">设置新的登录邮箱，需要校验当前的网站登录密码</p>
          </div>
        </div>

        <div class=\"form-group\">
          <div class=\"col-md-3 control-label\"></div>
          <div class=\"col-md-9 controls\">
            <button type=\"submit\" id=\"set-email-btn\" class=\"btn btn-primary\">提交</button>
          </div>
        </div>

        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
      </form>

    </div><!-- /panel -->

  </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Auth:email-confirm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 38,  58 => 19,  50 => 14,  42 => 8,  39 => 7,  32 => 3,  28 => 1,  26 => 5,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::layout.html.twig' %}*/
/* */
/* {% block title %}设置新邮箱 - {{ parent() }}{% endblock %}*/
/* */
/* {% set script_controller = 'auth/email-change' %}*/
/* */
/* {% block content %}*/
/* <div class="row">*/
/*   <div class="col-md-6 col-md-offset-3 ptl">*/
/*     <div class="panel panel-default panel-page">*/
/*       <div class="panel-heading"><h2>设置新邮箱</h2></div>*/
/* */
/*       <form id="setting-email-form" class="form-horizontal" method="post" >*/
/*         {{ web_macro.flash_messages() }}*/
/* */
/*         <div class="form-group">*/
/*           <div class="col-md-3 control-label"><label>新邮箱</label></div>*/
/*           <div class="col-md-9 controls">*/
/*             <span class="control-text">{{ newEmail }}</span>*/
/*           </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*           <div class="col-md-3 control-label"><label for="password-field">网站登录密码</label></div>*/
/*           <div class="col-md-9 controls">*/
/*             <input type="password" name="password" class="form-control" id="password-field" />*/
/*             <p class="help-block">设置新的登录邮箱，需要校验当前的网站登录密码</p>*/
/*           </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*           <div class="col-md-3 control-label"></div>*/
/*           <div class="col-md-9 controls">*/
/*             <button type="submit" id="set-email-btn" class="btn btn-primary">提交</button>*/
/*           </div>*/
/*         </div>*/
/* */
/*         <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*       </form>*/
/* */
/*     </div><!-- /panel -->*/
/* */
/*   </div>*/
/* */
/* </div>*/
/* {% endblock %}*/
