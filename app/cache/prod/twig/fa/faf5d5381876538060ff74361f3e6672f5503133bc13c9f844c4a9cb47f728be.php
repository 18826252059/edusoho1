<?php

/* TopxiaAdminBundle:System:site.html.twig */
class __TwigTemplate_b449cccf773838d64a12cda04a472dfc1e02d43b4f2e5f87050c49cd354234d7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:System:site.html.twig", 1);
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
        $context["menu"] = "admin_setting_massage";
        // line 5
        $context["script_controller"] = "setting/site";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"form-horizontal\" id=\"site-form\" method=\"post\">
  
  <fieldset>
    
    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"name\">网站名称</label>
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "name", array()), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"slogan\">网站副标题</label> 
      </div>
      <div class=\"col-md-8 controls\">
         <input type=\"text\" id=\"slogan\" name=\"slogan\" class=\"form-control\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "slogan", array()), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\"> 
        <label for=\"url\">网站域名</label> 
      </div>
      <div class=\"col-md-8 controls\">
       <input type=\"text\" id=\"url\" name=\"url\" class=\"form-control\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "url", array()), "html", null, true);
        echo "\">
        <p class=\"help-block\">以\"http://\"开头</p>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"logo\">网站LOGO</label>
      </div>
      <div class=\"col-md-8 controls\">
        <div id=\"site-logo-container\">";
        // line 48
        if ($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "logo", array())) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "logo", array())), "html", null, true);
            echo "\">";
        }
        echo "</div>
        <a class=\"btn btn-default\" id=\"site-logo-upload\" 
        data-upload-token=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->makeUpoadToken("system", "image"), "html", null, true);
        echo "\"
        data-goto-url=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("admin_setting_logo_upload");
        echo "\">上传</a>
        <button class=\"btn btn-default\" id=\"site-logo-remove\" type=\"button\" data-url=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("admin_setting_logo_remove");
        echo "\" ";
        if ( !$this->getAttribute((isset($context["site"]) ? $context["site"] : null), "logo", array())) {
            echo "style=\"display:none;\"";
        }
        echo ">删除</button>
        <p class=\"help-block\">请上传png, gif, jpg格式的图片文件。LOGO图片建议不要超过250*50。</p>
        <input type=\"hidden\" name=\"logo\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "logo", array()), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"favicon\">浏览器图标</label>
      </div>
      <div class=\"col-md-8 controls\">
        <div id=\"site-favicon-container\">";
        // line 63
        if ($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "favicon", array())) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["site"]) ? $context["site"] : null), "favicon", array())), "html", null, true);
            echo "\">";
        }
        echo "</div>
        <a class=\"btn btn-default\" 
        id=\"site-favicon-upload\" 
        data-upload-token=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->makeUpoadToken("system", "image"), "html", null, true);
        echo "\"
        data-goto-url=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("admin_setting_favicon_upload");
        echo "\">上传</a>
        <button class=\"btn btn-default\" 
        id=\"site-favicon-remove\" 
        type=\"button\" data-url=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("admin_setting_favicon_remove");
        echo "\" ";
        if ( !$this->getAttribute((isset($context["site"]) ? $context["site"] : null), "favicon", array())) {
            echo "style=\"display:none;\"";
        }
        echo ">删除</button>
        <p class=\"help-block\">请上传ico格式的图标文件, 建议大小16*16或者32*32。</p>
        <input type=\"hidden\" name=\"favicon\" value=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "favicon", array()), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"seo_keywords\">SEO关键词</label>
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"seo_keywords\" name=\"seo_keywords\" class=\"form-control\" value=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "seo_keywords", array()), "html", null, true);
        echo "\">
        <p class=\"help-block\">设置多个关键词请用半角逗号\",\"隔开。</p>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"seo_description\">SEO描述信息</label>
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"seo_description\" name=\"seo_description\" class=\"form-control\" value=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "seo_description", array()), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"master_email\">管理员邮箱地址</label>
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"master_email\" name=\"master_email\" class=\"form-control\" value=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "master_email", array()), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"copyright\">课程内容版权方</label>
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"copyright\" name=\"copyright\" class=\"form-control\" value=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "copyright", array()), "html", null, true);
        echo "\">
        <div class=\"help-block\">您可以填写网站名称或公司名称。</div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"icp\">ICP备案号</label>
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"icp\" name=\"icp\" class=\"form-control\" value=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "icp", array()), "html", null, true);
        echo "\">
      </div>
    </div>

  </fieldset>

<br>

  <fieldset>
    <legend>网站统计分析代码部署</legend>
    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"analytics\">统计分析代码</label>
      </div>
      <div class=\"col-md-8 controls\">

        <textarea id=\"analytics\" name=\"analytics\" class=\"form-control\" rows=\"4\">";
        // line 135
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "analytics", array()), "html", null, true);
        echo "</textarea>

        <p class=\"help-block\">
          建议使用下列统计分析的一种：
          <a href=\"http://www.google.cn/intl/zh-CN_ALL/analytics/\" target=\"_blank\">谷歌分析</a>、
          <a href=\"http://tongji.baidu.com/\" target=\"_blank\">百度统计</a>、
          <a href=\"http://ta.qq.com/\" target=\"_blank\">腾讯分析</a>、
          <a href=\"http://www.cnzz.com/\" target=\"_blank\">CNZZ</a>。
        </p>
      </div>
    </div>
  </fieldset>

  <fieldset style=\"display:none;\">
    <legend>站点状态</legend>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label >网站状态</label>
      </div>
      <div class=\"col-md-8 controls radios\">
        ";
        // line 156
        echo $this->env->getExtension('topxia_html_twig')->radios("status", array("open" => "开放", "closed" => "关闭"), $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "status", array()));
        echo "
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label>网站关闭公告</label>
      </div>
        <div class=\"col-md-8 controls\">
          <textarea id=\"closed_note\" name=\"closed_note\" class=\"form-control\" rows=\"4\">";
        // line 165
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : null), "closed_note", array()), "html", null, true);
        echo "</textarea>
        <p class=\"help-block\">网站处于关闭状态时，用户访问网站将显示此公告，支持HTML代码。</p>
      </div>
    </div>
  </fieldset>

  <div class=\"row form-group\">
    <div class=\"controls col-md-offset-2 col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">提交</button>
    </div>
  </div>

  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
  
</form>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:site.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 177,  274 => 165,  262 => 156,  238 => 135,  219 => 119,  206 => 109,  194 => 100,  182 => 91,  169 => 81,  157 => 72,  148 => 70,  142 => 67,  138 => 66,  128 => 63,  116 => 54,  107 => 52,  103 => 51,  99 => 50,  90 => 48,  77 => 38,  65 => 29,  53 => 20,  39 => 9,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set menu = 'admin_setting_massage' %}*/
/* */
/* {% set script_controller = 'setting/site' %}*/
/* */
/* {% block main %}*/
/* */
/* {{ web_macro.flash_messages() }}*/
/* */
/* <form class="form-horizontal" id="site-form" method="post">*/
/*   */
/*   <fieldset>*/
/*     */
/*     <div class="form-group">*/
/*       <div class="col-md-2 control-label">*/
/*         <label for="name">网站名称</label>*/
/*       </div>*/
/*       <div class="col-md-8 controls">*/
/*         <input type="text" id="name" name="name" class="form-control" value="{{site.name}}">*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*       <div class="col-md-2 control-label">*/
/*         <label for="slogan">网站副标题</label> */
/*       </div>*/
/*       <div class="col-md-8 controls">*/
/*          <input type="text" id="slogan" name="slogan" class="form-control" value="{{site.slogan}}">*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*       <div class="col-md-2 control-label"> */
/*         <label for="url">网站域名</label> */
/*       </div>*/
/*       <div class="col-md-8 controls">*/
/*        <input type="text" id="url" name="url" class="form-control" value="{{site.url}}">*/
/*         <p class="help-block">以"http://"开头</p>*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*       <div class="col-md-2 control-label">*/
/*         <label for="logo">网站LOGO</label>*/
/*       </div>*/
/*       <div class="col-md-8 controls">*/
/*         <div id="site-logo-container">{% if site.logo %}<img src="{{ asset(site.logo) }}">{% endif %}</div>*/
/*         <a class="btn btn-default" id="site-logo-upload" */
/*         data-upload-token="{{ upload_token('system', 'image') }}"*/
/*         data-goto-url="{{ path('admin_setting_logo_upload') }}">上传</a>*/
/*         <button class="btn btn-default" id="site-logo-remove" type="button" data-url="{{ path('admin_setting_logo_remove') }}" {% if not site.logo %}style="display:none;"{% endif %}>删除</button>*/
/*         <p class="help-block">请上传png, gif, jpg格式的图片文件。LOGO图片建议不要超过250*50。</p>*/
/*         <input type="hidden" name="logo" value="{{ site.logo }}">*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*       <div class="col-md-2 control-label">*/
/*         <label for="favicon">浏览器图标</label>*/
/*       </div>*/
/*       <div class="col-md-8 controls">*/
/*         <div id="site-favicon-container">{% if site.favicon %}<img src="{{ asset(site.favicon) }}">{% endif %}</div>*/
/*         <a class="btn btn-default" */
/*         id="site-favicon-upload" */
/*         data-upload-token="{{ upload_token('system', 'image') }}"*/
/*         data-goto-url="{{ path('admin_setting_favicon_upload') }}">上传</a>*/
/*         <button class="btn btn-default" */
/*         id="site-favicon-remove" */
/*         type="button" data-url="{{ path('admin_setting_favicon_remove') }}" {% if not site.favicon %}style="display:none;"{% endif %}>删除</button>*/
/*         <p class="help-block">请上传ico格式的图标文件, 建议大小16*16或者32*32。</p>*/
/*         <input type="hidden" name="favicon" value="{{ site.favicon }}">*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*       <div class="col-md-2 control-label">*/
/*         <label for="seo_keywords">SEO关键词</label>*/
/*       </div>*/
/*       <div class="col-md-8 controls">*/
/*         <input type="text" id="seo_keywords" name="seo_keywords" class="form-control" value="{{site.seo_keywords}}">*/
/*         <p class="help-block">设置多个关键词请用半角逗号","隔开。</p>*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*       <div class="col-md-2 control-label">*/
/*         <label for="seo_description">SEO描述信息</label>*/
/*       </div>*/
/*       <div class="col-md-8 controls">*/
/*         <input type="text" id="seo_description" name="seo_description" class="form-control" value="{{site.seo_description}}">*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*       <div class="col-md-2 control-label">*/
/*         <label for="master_email">管理员邮箱地址</label>*/
/*       </div>*/
/*       <div class="col-md-8 controls">*/
/*         <input type="text" id="master_email" name="master_email" class="form-control" value="{{site.master_email}}">*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*       <div class="col-md-2 control-label">*/
/*         <label for="copyright">课程内容版权方</label>*/
/*       </div>*/
/*       <div class="col-md-8 controls">*/
/*         <input type="text" id="copyright" name="copyright" class="form-control" value="{{site.copyright}}">*/
/*         <div class="help-block">您可以填写网站名称或公司名称。</div>*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*       <div class="col-md-2 control-label">*/
/*         <label for="icp">ICP备案号</label>*/
/*       </div>*/
/*       <div class="col-md-8 controls">*/
/*         <input type="text" id="icp" name="icp" class="form-control" value="{{site.icp}}">*/
/*       </div>*/
/*     </div>*/
/* */
/*   </fieldset>*/
/* */
/* <br>*/
/* */
/*   <fieldset>*/
/*     <legend>网站统计分析代码部署</legend>*/
/*     <div class="form-group">*/
/*       <div class="col-md-2 control-label">*/
/*         <label for="analytics">统计分析代码</label>*/
/*       </div>*/
/*       <div class="col-md-8 controls">*/
/* */
/*         <textarea id="analytics" name="analytics" class="form-control" rows="4">{{site.analytics}}</textarea>*/
/* */
/*         <p class="help-block">*/
/*           建议使用下列统计分析的一种：*/
/*           <a href="http://www.google.cn/intl/zh-CN_ALL/analytics/" target="_blank">谷歌分析</a>、*/
/*           <a href="http://tongji.baidu.com/" target="_blank">百度统计</a>、*/
/*           <a href="http://ta.qq.com/" target="_blank">腾讯分析</a>、*/
/*           <a href="http://www.cnzz.com/" target="_blank">CNZZ</a>。*/
/*         </p>*/
/*       </div>*/
/*     </div>*/
/*   </fieldset>*/
/* */
/*   <fieldset style="display:none;">*/
/*     <legend>站点状态</legend>*/
/* */
/*     <div class="form-group">*/
/*       <div class="col-md-2 control-label">*/
/*         <label >网站状态</label>*/
/*       </div>*/
/*       <div class="col-md-8 controls radios">*/
/*         {{ radios('status', {open:'开放', closed:'关闭'}, site.status) }}*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*       <div class="col-md-2 control-label">*/
/*         <label>网站关闭公告</label>*/
/*       </div>*/
/*         <div class="col-md-8 controls">*/
/*           <textarea id="closed_note" name="closed_note" class="form-control" rows="4">{{site.closed_note}}</textarea>*/
/*         <p class="help-block">网站处于关闭状态时，用户访问网站将显示此公告，支持HTML代码。</p>*/
/*       </div>*/
/*     </div>*/
/*   </fieldset>*/
/* */
/*   <div class="row form-group">*/
/*     <div class="controls col-md-offset-2 col-md-8">*/
/*       <button type="submit" class="btn btn-primary">提交</button>*/
/*     </div>*/
/*   </div>*/
/* */
/*   <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*   */
/* </form>*/
/* */
/* {% endblock %}*/
