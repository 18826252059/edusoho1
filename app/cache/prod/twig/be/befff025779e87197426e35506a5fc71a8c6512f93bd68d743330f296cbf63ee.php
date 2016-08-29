<?php

/* TopxiaWebBundle:Coin:promote-link-modal.html.twig */
class __TwigTemplate_60bd2d1b57714cf20e9d81c862ac5cce2ed62525d54ddb9460b44814c67ee887 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:Coin:promote-link-modal.html.twig", 1);
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
        echo "分享邀请链接";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"form-horizontal\">

  <div class=\"form-group\">
    <div class=\"col-md-offset-1 col-md-10 controls\">
    <textarea rows=\"3\" class=\"form-control\" id=\"content\" readonly=\"true\">";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["inviteInfomation_template"]) ? $context["inviteInfomation_template"] : null), "html", null, true);
        echo "</textarea>
    </div>
  </div>
</div>
<p>*该链接只支持网页注册，如果好友通过第三方登录创建新账号，请登录后在\"TA的邀请码\"中输入邀请码:";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["code"]) ? $context["code"] : null), "html", null, true);
        echo "</p>
<script>app.load('coin/invite-content-copy')</script>
";
    }

    // line 16
    public function block_footer($context, array $blocks = array())
    {
        // line 17
        echo "    <button class=\"btn-sm btn btn-primary\" id='copy'>复制到剪贴板</button>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Coin:promote-link-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 17,  59 => 16,  52 => 13,  45 => 9,  39 => 5,  36 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% block title %}分享邀请链接{% endblock %}*/
/* {% block body %}*/
/* <div class="form-horizontal">*/
/* */
/*   <div class="form-group">*/
/*     <div class="col-md-offset-1 col-md-10 controls">*/
/*     <textarea rows="3" class="form-control" id="content" readonly="true">{{inviteInfomation_template}}</textarea>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* <p>*该链接只支持网页注册，如果好友通过第三方登录创建新账号，请登录后在"TA的邀请码"中输入邀请码:{{code}}</p>*/
/* <script>app.load('coin/invite-content-copy')</script>*/
/* {% endblock %} */
/* {% block footer %}*/
/*     <button class="btn-sm btn btn-primary" id='copy'>复制到剪贴板</button>*/
/* {% endblock %}*/
