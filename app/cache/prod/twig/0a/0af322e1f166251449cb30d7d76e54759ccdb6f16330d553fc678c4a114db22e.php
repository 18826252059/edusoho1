<?php

/* TopxiaWebBundle:PasswordReset:sent.html.twig */
class __TwigTemplate_7f419861fac107ce62091126c5ff30c80aa840c5a42e96cf37c6b8d5e3c86f78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:PasswordReset:sent.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "重设密码 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"row row-6\">
  <div class=\"col-md-6 col-md-offset-3 ptl\">
    <div class=\"panel panel-default panel-page\">
      <div class=\"panel-heading\"><h2>重设密码</h2></div>
      <p>
        请到 <span class=\"text-success\">";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array()), "html", null, true);
        echo "</span> 查阅来自";
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.name"), "html", null, true);
        echo "的邮件, 从邮件重设你的密码。
      </p>
      <p>
        <a class=\"btn btn-primary\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["emailLoginUrl"]) ? $context["emailLoginUrl"] : null), "html", null, true);
        echo "\" target=\"_blank\">登录邮箱查收邮件</a>
      </p>
    </div><!-- /panel -->
  </div>
</div>
  
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:PasswordReset:sent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 14,  46 => 11,  39 => 6,  36 => 5,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::layout.html.twig' %}*/
/* */
/* {% block title %}重设密码 - {{ parent() }}{% endblock %}*/
/* */
/* {% block content %}*/
/* <div class="row row-6">*/
/*   <div class="col-md-6 col-md-offset-3 ptl">*/
/*     <div class="panel panel-default panel-page">*/
/*       <div class="panel-heading"><h2>重设密码</h2></div>*/
/*       <p>*/
/*         请到 <span class="text-success">{{ user.email }}</span> 查阅来自{{ setting('site.name') }}的邮件, 从邮件重设你的密码。*/
/*       </p>*/
/*       <p>*/
/*         <a class="btn btn-primary" href="{{ emailLoginUrl }}" target="_blank">登录邮箱查收邮件</a>*/
/*       </p>*/
/*     </div><!-- /panel -->*/
/*   </div>*/
/* </div>*/
/*   */
/* {% endblock %}*/
