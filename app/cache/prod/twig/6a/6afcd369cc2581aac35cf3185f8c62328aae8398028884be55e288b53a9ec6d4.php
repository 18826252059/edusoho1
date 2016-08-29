<?php

/* TopxiaAdminBundle:DeveloperSetting:magic.html.twig */
class __TwigTemplate_add1dde19af7f516e9382b3f18daee6886b7786f2f36cdf0da24d34063ba63dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:DeveloperSetting:magic.html.twig", 1);
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
        echo "Feature Magic Setting - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"page-header\"><h1>Feature Magic Setting</h1></div>

";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"form-horizontal\" method=\"post\" novalidate>

  <div class=\"form-group\">
    <div class=\"controls col-md-12\">
      <textarea class=\"form-control\" rows=\"10\" name=\"setting\">";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["setting"]) ? $context["setting"] : null), "html", null, true);
        echo "</textarea>
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"controls col-md-12\">
      <button type=\"submit\" class=\"btn btn-primary\">提交</button>
    </div>
  </div>

  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

</form>

<div class=\"alert alert-danger\">
  ";
        // line 44
        echo "
    <h4>注意事项</h4>
    <ul>
      <li>此功能，为开发人员调试时使用，请不要使用随意使用，不然将造成不可预知的后果！</li>
      <li>视频指纹：\"video_fingerprint\": \"{{company}} {{truename}} {{mobile}}\"</li>
      <li>文档指纹： \"doc_watermark\": \"{{company}} {{truename}} {{mobile}}\"</li>
      <li>PPT指纹： \"ppt_watermark\": \"{{company}} {{truename}} {{mobile}}\"</li>
      <li>试卷指纹：\"testpape r_watermark\": \"{{company}} {{truename}} {{mobile}}\"</li>
      <li>视频课时观看次数： \"lesson_watch_limit\": true</li>
      <li>视频课时观看时长：\"lesson_watch_time_limit\": 600</li>
      <li>购买课程前实名认证：\"buy_before_approval\": true</li>
      <li>是否开启web定时任务：\"disable_web_crontab\": 0（１为关闭，０为启用）</li>
      <li>是否开启云搜索业务：\"cloud_search\": 0（１为启用，０为关闭）</li>
      <li>是否开启乐视源视频课时导入：\"letv\": true</li>
    </ul>
  ";
        echo "
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:DeveloperSetting:magic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 44,  65 => 24,  52 => 14,  43 => 8,  39 => 6,  36 => 5,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% block title %}Feature Magic Setting - {{ parent() }}{% endblock %}*/
/* */
/* {% block content %}*/
/* <div class="page-header"><h1>Feature Magic Setting</h1></div>*/
/* */
/* {{ web_macro.flash_messages() }}*/
/* */
/* <form class="form-horizontal" method="post" novalidate>*/
/* */
/*   <div class="form-group">*/
/*     <div class="controls col-md-12">*/
/*       <textarea class="form-control" rows="10" name="setting">{{ setting }}</textarea>*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="form-group">*/
/*     <div class="controls col-md-12">*/
/*       <button type="submit" class="btn btn-primary">提交</button>*/
/*     </div>*/
/*   </div>*/
/* */
/*   <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/* */
/* </form>*/
/* */
/* <div class="alert alert-danger">*/
/*   {% verbatim %}*/
/*     <h4>注意事项</h4>*/
/*     <ul>*/
/*       <li>此功能，为开发人员调试时使用，请不要使用随意使用，不然将造成不可预知的后果！</li>*/
/*       <li>视频指纹："video_fingerprint": "{{company}} {{truename}} {{mobile}}"</li>*/
/*       <li>文档指纹： "doc_watermark": "{{company}} {{truename}} {{mobile}}"</li>*/
/*       <li>PPT指纹： "ppt_watermark": "{{company}} {{truename}} {{mobile}}"</li>*/
/*       <li>试卷指纹："testpape r_watermark": "{{company}} {{truename}} {{mobile}}"</li>*/
/*       <li>视频课时观看次数： "lesson_watch_limit": true</li>*/
/*       <li>视频课时观看时长："lesson_watch_time_limit": 600</li>*/
/*       <li>购买课程前实名认证："buy_before_approval": true</li>*/
/*       <li>是否开启web定时任务："disable_web_crontab": 0（１为关闭，０为启用）</li>*/
/*       <li>是否开启云搜索业务："cloud_search": 0（１为启用，０为关闭）</li>*/
/*       <li>是否开启乐视源视频课时导入："letv": true</li>*/
/*     </ul>*/
/*   {% endverbatim %}*/
/* </div>*/
/* */
/* {% endblock %}*/
