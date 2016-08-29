<?php

/* TopxiaAdminBundle:User:change-password-modal.html.twig */
class __TwigTemplate_35c85ab15429c4736e3edf8440875177feaed03de0ea07792128066b1380878b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaAdminBundle:User:change-password-modal.html.twig", 1);
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
        echo "重置用户";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nickname", array()), "html", null, true);
        echo "的密码";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
  <form class=\"form-horizontal\" id=\"change-password-form\"  action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_change_password", array("userId" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "\"  method=\"post\">

      <div class=\"row form-group\">
        <div class=\"col-md-3 control-label\"><label for=\"code\">用户名</label></div>
        <div class=\"col-md-8 controls\"> 
          <div style=\"margin-top: 7px;\">
          ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nickname", array()), "html", null, true);
        echo "
          </div>
        </div>
      </div>

      <div class=\"row form-group\">
        <div class=\"col-md-3 control-label\"><label for=\"code\">用户邮箱</label></div>
        <div class=\"col-md-8 controls\"> 
          <div style=\"margin-top: 7px;\">
            ";
        // line 22
        $context["emailArr"] = twig_split_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array()), "@");
        // line 23
        echo "            ";
        if (($this->getAttribute((isset($context["emailArr"]) ? $context["emailArr"] : null), 1, array(), "array") != "edusoho.net")) {
            // line 24
            echo "              ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array()), "html", null, true);
            echo "
            ";
        } else {
            // line 26
            echo "              --
            ";
        }
        // line 28
        echo "          </div>
        </div>
      </div>

      <div class=\"row form-group\">
        <div class=\"col-md-3 control-label\"><label for=\"newPassword\">新密码</label></div>
        <div class=\"col-md-8 controls\"> 
        <input class=\"form-control\" type=\"password\" id=\"newPassword\" value=\"\" name=\"newPassword\">
          <p class=\"help-block\">5-20位英文、数字、符号，区分大小写</p>
        </div>
      </div>

       <div class=\"row form-group\">
        <div class=\"col-md-3 control-label\"><label for=\"confirmPassword\">确认密码</label></div>
        <div class=\"col-md-8 controls\"> 
          <input class=\"form-control\" type=\"password\" id=\"confirmPassword\" value=\"\"
          name=\"confirmPassword\" data-explain=\"再输入一次密码\">
          <p class=\"help-block\">再输入一次密码</p>
        </div>
      </div>
      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
  </form>

";
    }

    // line 53
    public function block_footer($context, array $blocks = array())
    {
        // line 54
        echo "  <button id=\"change-password-btn\" data-submiting-text=\"正在提交\" class=\"btn btn-primary pull-right\" data-toggle=\"form-submit\" data-target=\"#change-password-form\">提交</button>
  <button type=\"button\" class=\"btn btn-link\" data-dismiss=\"modal\">取消</button>
 <script>app.load('user/change-password')</script>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:User:change-password-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 54,  110 => 53,  102 => 48,  80 => 28,  76 => 26,  70 => 24,  67 => 23,  65 => 22,  53 => 13,  44 => 7,  41 => 6,  38 => 5,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% block title %}重置用户{{user.nickname}}的密码{% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*   <form class="form-horizontal" id="change-password-form"  action="{{ path('admin_user_change_password', {userId:user.id}) }}"  method="post">*/
/* */
/*       <div class="row form-group">*/
/*         <div class="col-md-3 control-label"><label for="code">用户名</label></div>*/
/*         <div class="col-md-8 controls"> */
/*           <div style="margin-top: 7px;">*/
/*           {{user.nickname}}*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/* */
/*       <div class="row form-group">*/
/*         <div class="col-md-3 control-label"><label for="code">用户邮箱</label></div>*/
/*         <div class="col-md-8 controls"> */
/*           <div style="margin-top: 7px;">*/
/*             {% set emailArr = user.email|split('@') %}*/
/*             {% if emailArr[1] != 'edusoho.net' %}*/
/*               {{ user.email }}*/
/*             {% else %}*/
/*               --*/
/*             {% endif %}*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/* */
/*       <div class="row form-group">*/
/*         <div class="col-md-3 control-label"><label for="newPassword">新密码</label></div>*/
/*         <div class="col-md-8 controls"> */
/*         <input class="form-control" type="password" id="newPassword" value="" name="newPassword">*/
/*           <p class="help-block">5-20位英文、数字、符号，区分大小写</p>*/
/*         </div>*/
/*       </div>*/
/* */
/*        <div class="row form-group">*/
/*         <div class="col-md-3 control-label"><label for="confirmPassword">确认密码</label></div>*/
/*         <div class="col-md-8 controls"> */
/*           <input class="form-control" type="password" id="confirmPassword" value=""*/
/*           name="confirmPassword" data-explain="再输入一次密码">*/
/*           <p class="help-block">再输入一次密码</p>*/
/*         </div>*/
/*       </div>*/
/*       <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*   </form>*/
/* */
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/*   <button id="change-password-btn" data-submiting-text="正在提交" class="btn btn-primary pull-right" data-toggle="form-submit" data-target="#change-password-form">提交</button>*/
/*   <button type="button" class="btn btn-link" data-dismiss="modal">取消</button>*/
/*  <script>app.load('user/change-password')</script>*/
/* {% endblock %}*/
