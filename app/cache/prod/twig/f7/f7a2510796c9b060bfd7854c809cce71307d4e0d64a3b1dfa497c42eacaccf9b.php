<?php

/* TopxiaWebBundle:Register:email-verify.html.twig */
class __TwigTemplate_4d3491274e5db5c3e92f6a5b5682f950e1be5b73911ccc81c8255e1de5a17af8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Register:email-verify.html.twig", 1);
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
        // line 4
        $context["script_controller"] = "auth/register-submited";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "注册 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"es-section login-section\">
  <div class=\"section-header\">
    <h3>注册还需一步</h3>
  </div>
  <div id=\"email-sending\" class=\"alert alert-info\" style=\"display:none;\">正在发送注册验证邮件，请稍等...</div>

  <div id=\"email-send-success\">
    <p class=\"text-success\">注册确认信已经发到你的邮箱<strong>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array()), "html", null, true);
        echo "</strong>，你需要点击邮件中的确认链接来完成邮箱验证，验证后才可以登录．</p>

    <p class=\"mvl\">
      <a class=\"btn btn-primary\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["emailLoginUrl"]) ? $context["emailLoginUrl"] : null), "html", null, true);
        echo "\" target=\"_blank\">登录邮箱查收邮件</a>
    </p>

    <div class=\"alert\">
      <h5>没有收到确认信怎么办？</h5>
      <ul>
        <li>检查一下上面Email地址是否正确，错了就重新<a class=\"text-muted\" href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("logout", array("goto" => "register"));
        echo "\">注册</a>一次吧 :)</li>
        <li>看看是否在邮箱的垃圾箱里?</li>
        <li>稍等几分钟，若仍旧没收到确认信，那就<a id=\"resend-email\" class=\"text-muted\" href=\"javascript:\" data-url=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("register_email_send", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "hash" => (isset($context["hash"]) ? $context["hash"] : null))), "html", null, true);
        echo "\">重发</a>一封吧！</li>
      </ul>
    </div>
    <p class=\"mtl\">
      完成验证后，你还可以：
      <ul>
        <li><a href=\"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["_target_path"]) ? $context["_target_path"] : null), "html", null, true);
        echo "\">返回原页面</a></li>
        <li><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">浏览首页</a></li>
      </ul>
    </p>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Register:email-verify.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 32,  80 => 31,  71 => 25,  66 => 23,  57 => 17,  51 => 14,  42 => 7,  39 => 6,  32 => 3,  28 => 1,  26 => 4,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::layout.html.twig' %}*/
/* */
/* {% block title %}注册 - {{ parent() }}{% endblock %}*/
/* {% set script_controller = 'auth/register-submited' %}*/
/* */
/* {% block content %}*/
/* <div class="es-section login-section">*/
/*   <div class="section-header">*/
/*     <h3>注册还需一步</h3>*/
/*   </div>*/
/*   <div id="email-sending" class="alert alert-info" style="display:none;">正在发送注册验证邮件，请稍等...</div>*/
/* */
/*   <div id="email-send-success">*/
/*     <p class="text-success">注册确认信已经发到你的邮箱<strong>{{ user.email }}</strong>，你需要点击邮件中的确认链接来完成邮箱验证，验证后才可以登录．</p>*/
/* */
/*     <p class="mvl">*/
/*       <a class="btn btn-primary" href="{{ emailLoginUrl }}" target="_blank">登录邮箱查收邮件</a>*/
/*     </p>*/
/* */
/*     <div class="alert">*/
/*       <h5>没有收到确认信怎么办？</h5>*/
/*       <ul>*/
/*         <li>检查一下上面Email地址是否正确，错了就重新<a class="text-muted" href="{{ path('logout',{goto:'register'}) }}">注册</a>一次吧 :)</li>*/
/*         <li>看看是否在邮箱的垃圾箱里?</li>*/
/*         <li>稍等几分钟，若仍旧没收到确认信，那就<a id="resend-email" class="text-muted" href="javascript:" data-url="{{ path('register_email_send', {id:user.id, hash:hash}) }}">重发</a>一封吧！</li>*/
/*       </ul>*/
/*     </div>*/
/*     <p class="mtl">*/
/*       完成验证后，你还可以：*/
/*       <ul>*/
/*         <li><a href="{{ _target_path }}">返回原页面</a></li>*/
/*         <li><a href="{{ path('homepage') }}">浏览首页</a></li>*/
/*       </ul>*/
/*     </p>*/
/*   </div>*/
/* </div>*/
/* {% endblock %}*/
