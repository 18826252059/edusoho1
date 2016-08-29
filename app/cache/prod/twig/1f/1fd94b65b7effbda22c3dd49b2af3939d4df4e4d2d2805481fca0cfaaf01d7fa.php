<?php

/* TopxiaAdminBundle:DeveloperSetting:index.html.twig */
class __TwigTemplate_3cc0f8814716da3904b110b9fabac27d6cf8ecc79c182d37851ea83f599a380d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:DeveloperSetting:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "开发者设置 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"page-header\"><h1>开发者设置</h1></div>

";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"form-horizontal\" method=\"post\" novalidate>

  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label>调试</label>
    </div>
    <div class=\"controls col-md-8 radios\">
      ";
        // line 17
        echo $this->env->getExtension('topxia_html_twig')->radios("debug", array(1 => "开启", 0 => "关闭"), $this->getAttribute((isset($context["developerSetting"]) ? $context["developerSetting"] : null), "debug", array()));
        echo "
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label>应用中心API地址</label>
    </div>
    <div class=\"controls col-md-8 radios\">
      <input class=\"form-control\" type=\"text\" name=\"app_api_url\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["developerSetting"]) ? $context["developerSetting"] : null), "app_api_url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["developerSetting"]) ? $context["developerSetting"] : null), "app_api_url", array()), "")) : ("")), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label>云服务API地址</label>
    </div>
    <div class=\"controls col-md-8 radios\">
      <input class=\"form-control\" type=\"text\" name=\"cloud_api_server\" value=\"";
        // line 35
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["developerSetting"]) ? $context["developerSetting"] : null), "cloud_api_server", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["developerSetting"]) ? $context["developerSetting"] : null), "cloud_api_server", array()), "")) : ("")), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label>Push API地址</label>
    </div>
    <div class=\"controls col-md-8 radios\">
      <input class=\"form-control\" type=\"text\" name=\"cloud_api_tui_server\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["developerSetting"]) ? $context["developerSetting"] : null), "cloud_api_tui_server", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["developerSetting"]) ? $context["developerSetting"] : null), "cloud_api_tui_server", array()), "")) : ("")), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label>HLS加密视频</label>
    </div>
    <div class=\"controls col-md-8 radios\">
      ";
        // line 53
        echo $this->env->getExtension('topxia_html_twig')->radios("hls_encrypted", array(1 => "开启", 0 => "关闭"), $this->getAttribute((isset($context["developerSetting"]) ? $context["developerSetting"] : null), "hls_encrypted", array()));
        echo "
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label>气球播放器</label>
    </div>
    <div class=\"controls col-md-8 radios\">
      ";
        // line 62
        echo $this->env->getExtension('topxia_html_twig')->radios("balloon_player", array(1 => "开启", 0 => "关闭"), (($this->getAttribute((isset($context["developerSetting"]) ? $context["developerSetting"] : null), "balloon_player", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["developerSetting"]) ? $context["developerSetting"] : null), "balloon_player", array()), 0)) : (0)));
        echo "
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label>是否无外网</label>
    </div>
    <div class=\"controls col-md-8 radios\">
      ";
        // line 71
        echo $this->env->getExtension('topxia_html_twig')->radios("without_network", array(1 => "是", 0 => "否"), (($this->getAttribute((isset($context["developerSetting"]) ? $context["developerSetting"] : null), "without_network", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["developerSetting"]) ? $context["developerSetting"] : null), "without_network", array()), 0)) : (0)));
        echo "
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"controls col-md-offset-3 col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">提交</button>
    </div>
  </div>

  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

</form>

<div class=\"alert alert-warning\">
  <h4>注意事项</h4>
  <ul>
    <li>此页设置，仅供调试使用，请勿随意修改参数，不然将造成系统不可预知的错误。</li>
    <li>请保持：<br>
      「调试」：关闭<br>
      「应用中心API地址」：空<br>
      「云服务API地址」：　http://api.edusoho.net 或 空<br>
      「HLS加密视频」：　开启
    </li>
  </ul>
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:DeveloperSetting:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 81,  127 => 71,  115 => 62,  103 => 53,  91 => 44,  79 => 35,  67 => 26,  55 => 17,  43 => 8,  39 => 6,  36 => 5,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% block title %}开发者设置 - {{ parent() }}{% endblock %}*/
/* */
/* {% block content %}*/
/* <div class="page-header"><h1>开发者设置</h1></div>*/
/* */
/* {{ web_macro.flash_messages() }}*/
/* */
/* <form class="form-horizontal" method="post" novalidate>*/
/* */
/*   <div class="form-group">*/
/*     <div class="col-md-3 control-label">*/
/*       <label>调试</label>*/
/*     </div>*/
/*     <div class="controls col-md-8 radios">*/
/*       {{ radios('debug', {1:'开启', 0:'关闭'}, developerSetting.debug) }}*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="form-group">*/
/*     <div class="col-md-3 control-label">*/
/*       <label>应用中心API地址</label>*/
/*     </div>*/
/*     <div class="controls col-md-8 radios">*/
/*       <input class="form-control" type="text" name="app_api_url" value="{{ developerSetting.app_api_url|default('') }}">*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="form-group">*/
/*     <div class="col-md-3 control-label">*/
/*       <label>云服务API地址</label>*/
/*     </div>*/
/*     <div class="controls col-md-8 radios">*/
/*       <input class="form-control" type="text" name="cloud_api_server" value="{{ developerSetting.cloud_api_server|default('') }}">*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="form-group">*/
/*     <div class="col-md-3 control-label">*/
/*       <label>Push API地址</label>*/
/*     </div>*/
/*     <div class="controls col-md-8 radios">*/
/*       <input class="form-control" type="text" name="cloud_api_tui_server" value="{{ developerSetting.cloud_api_tui_server|default('') }}">*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="form-group">*/
/*     <div class="col-md-3 control-label">*/
/*       <label>HLS加密视频</label>*/
/*     </div>*/
/*     <div class="controls col-md-8 radios">*/
/*       {{ radios('hls_encrypted', {1:'开启', 0:'关闭'}, developerSetting.hls_encrypted) }}*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="form-group">*/
/*     <div class="col-md-3 control-label">*/
/*       <label>气球播放器</label>*/
/*     </div>*/
/*     <div class="controls col-md-8 radios">*/
/*       {{ radios('balloon_player', {1:'开启', 0:'关闭'}, developerSetting.balloon_player|default(0)) }}*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="form-group">*/
/*     <div class="col-md-3 control-label">*/
/*       <label>是否无外网</label>*/
/*     </div>*/
/*     <div class="controls col-md-8 radios">*/
/*       {{ radios('without_network', {1:'是', 0:'否'}, developerSetting.without_network|default(0)) }}*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="form-group">*/
/*     <div class="controls col-md-offset-3 col-md-8">*/
/*       <button type="submit" class="btn btn-primary">提交</button>*/
/*     </div>*/
/*   </div>*/
/* */
/*   <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/* */
/* </form>*/
/* */
/* <div class="alert alert-warning">*/
/*   <h4>注意事项</h4>*/
/*   <ul>*/
/*     <li>此页设置，仅供调试使用，请勿随意修改参数，不然将造成系统不可预知的错误。</li>*/
/*     <li>请保持：<br>*/
/*       「调试」：关闭<br>*/
/*       「应用中心API地址」：空<br>*/
/*       「云服务API地址」：　http://api.edusoho.net 或 空<br>*/
/*       「HLS加密视频」：　开启*/
/*     </li>*/
/*   </ul>*/
/* </div>*/
/* */
/* {% endblock %}*/
