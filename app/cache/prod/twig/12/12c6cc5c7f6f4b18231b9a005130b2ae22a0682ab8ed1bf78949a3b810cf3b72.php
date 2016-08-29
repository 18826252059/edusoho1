<?php

/* TopxiaAdminBundle:System:consult-setting.html.twig */
class __TwigTemplate_4a646ed4c4e06759f37c882fd4da51272b12161e591fb7d79f0cf9d77e1e1f1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:System:consult-setting.html.twig", 1);
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
        $context["menu"] = "admin_setting_consult_setting";
        // line 5
        $context["script_controller"] = "setting/consult-setting";
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

<form class=\"form-horizontal\" method=\"post\" id=\"consult-setting-form\" novalidate>
  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\">
      <label >客服功能</label>
    </div>
    <div class=\"controls col-md-8 radios\">
      ";
        // line 17
        echo $this->env->getExtension('topxia_html_twig')->radios("enabled", array(1 => "开启", 0 => "关闭"), $this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "enabled", array()));
        echo "
    </div>
  </div>
  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\">
      <label >浮动条颜色</label>
    </div>
    <div class=\"controls col-md-8 radios\">
      ";
        // line 25
        echo $this->env->getExtension('topxia_html_twig')->radios("color", array("default" => "<span class=\"btn btn-lg\" style=\"background:#37b97d\"></span>", "warning" => "<span class=\"btn btn-lg\" style=\"background:#e67e22\"></span>", "danger" => "<span class=\"btn btn-lg\" style=\"background:#e74c3c\"></span>"), $this->getAttribute(        // line 30
(isset($context["consult"]) ? $context["consult"] : null), "color", array()));
        // line 31
        echo "
    </div>
  </div>
  <div data-role=\"template\" style=\"display:none\">
    <div class=\"row form-group has-feedback\">
      <div class=\"controls col-md-2 col-md-offset-2\">
        <input type=\"text\" name=\"\" class=\"form-control\" value=\"\" placeholder=\"\">
      </div>
      <div class=\"controls col-md-2\">
        <input type=\"text\" name=\"\" class=\"form-control\" value=\"\" placeholder=\"\">
      </div>
      <div class=\"controls col-md-4\">
        <input type=\"text\" name=\"\" class=\"form-control\" value=\"\" placeholder=\"\">
        <button class=\"close delete-btn form-control-feedback\" data-role=\"item-delete\" type=\"button\" title=\"删除\">×</button></input>
      </div>
    </div>
  </div>

  <div data-role=\"phone-template\" style=\"display:none\">
    <div class=\"row form-group has-feedback\">
      <div class=\"controls col-md-4 col-md-offset-2\">
        <input type=\"text\" name=\"\" class=\"form-control\" value=\"\" placeholder=\"\">
      </div>
      <div class=\"controls col-md-4\">
        <input type=\"text\" name=\"\" class=\"form-control\" value=\"\" placeholder=\"\">
        <button class=\"close delete-btn form-control-feedback\" data-role=\"phone-item-delete\" type=\"button\" title=\"删除\">×</button></input>
      </div>
    </div>
  </div>

  <div data-role=\"qqGroupTemplate\" style=\"display:none\">
    <div class=\"row form-group has-feedback\">
      <div class=\"controls col-md-2 col-md-offset-2\">
        <input type=\"text\" name=\"\" class=\"form-control\" value=\"\" placeholder=\"\">
      </div>
      <div class=\"controls col-md-2\">
        <input type=\"text\" name=\"\" class=\"form-control\" value=\"\" placeholder=\"\">
      </div>
      <div class=\"controls col-md-4\">
        <input type=\"text\" name=\"\" class=\"form-control\" value=\"\" placeholder=\"\">
        <button class=\"close delete-btn form-control-feedback\" data-role=\"item-delete\" type=\"button\" title=\"删除\">×</button></input>
      </div>
    </div>
  </div>

  <fieldset>
    <legend>QQ客服设置
      <span class=\"glyphicon glyphicon-question-sign text-muted pull-right mll mts\" id=\"qq-property-tips\" data-toggle=\"tooltip\" data-placement=\"bottom\" href=\"javascript:\" title=\"\" data-original-title=\"\"></span>
      <div id=\"qq-property-tips-html\" style=\"display:none;\">
        <div style=\"width:250px;\">
          <span style=\"color:blue;\">如何获取在线咨询链接？</span><br>
          1，登录 <a target=\"_blank\" href=\"http://id.b.qq.com\">http://id.b.qq.com</a>。 <br>
          2，营销QQ－>在线代码生成－>生成在线咨询链接。（包含“http://”）<br>
        </div>
      </div>
    </legend>
    <div id=\"consult-qq\">
      ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "qq", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["qq"]) {
            // line 89
            echo "      <div class=\"row form-group has-feedback\">
        <div class=\"controls col-md-2 col-md-offset-2\">
          <input type=\"text\" name=\"qq[";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "][name]\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["qq"], "name", array()), "html", null, true);
            echo "\" placeholder=\"QQ客服名称\">
        </div>
        <div class=\"controls col-md-2\">
          <input type=\"text\" name=\"qq[";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "][number]\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["qq"], "number", array()), "html", null, true);
            echo "\" placeholder=\"QQ号\">
        </div>
        <div class=\"controls col-md-4\">
          <input type=\"text\" name=\"qq[";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "][url]\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["qq"], "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["qq"], "url", array()), "")) : ("")), "html", null, true);
            echo "\" placeholder=\"若使用营销QQ，请填入在线咨询链接\">
          ";
            // line 98
            if (($this->getAttribute($context["loop"], "index0", array()) > 0)) {
                // line 99
                echo "          <button class=\"close delete-btn form-control-feedback\" data-role=\"item-delete\" type=\"button\" title=\"删除\">×</button>
          ";
            }
            // line 101
            echo "        </div>
      </div>
      ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qq'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "    </div>
    <div class=\"row form-group\">
      <div class=\"controls col-md-4 col-md-offset-2\">
        <span  class=\"btn-link\" data-role=\"item-add\" data-parentId='consult-qq' data-length='";
        // line 107
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "qq", array())), "html", null, true);
        echo "'>新增</span>
      </div>
    </div>
  </fieldset>


  <fieldset>
    <legend>QQ群设置
      <span class=\"glyphicon glyphicon-question-sign text-muted pull-right mll mts\" id=\"qq-group-property-tips\" data-toggle=\"tooltip\" data-placement=\"bottom\" href=\"javascript:\" title=\"\" data-original-title=\"\"></span>
      <div id=\"qq-group-property-tips-html\" style=\"display:none;\">
        <div style=\"width:250px;\">
          <span style=\"color:blue;\">如何获取在线咨询链接？</span><br>
          1，访问<a target=\"_blank\" href=\"http://qun.qq.com/join.html\">http://qun.qq.com/join.html</a>获取QQ群直接加入网页代码。 <br>
          2，一键加群代码只在侧边栏有效<br>
        </div>
      </div>
    </legend>
    <div id=\"consult-qqgroup\">
      ";
        // line 125
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "qqgroup", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["qqgroup"]) {
            // line 126
            echo "      <div class=\"row form-group has-feedback\">
        <div class=\"controls col-md-2 col-md-offset-2\">
          <input type=\"text\" name=\"qqgroup[";
            // line 128
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "][name]\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["qqgroup"], "name", array()), "html", null, true);
            echo "\" placeholder=\"QQ群名称\">
        </div>
        <div class=\"controls col-md-2\">
          <input type=\"text\" name=\"qqgroup[";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "][number]\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["qqgroup"], "number", array()), "html", null, true);
            echo "\" placeholder=\"QQ群号\">
        </div>
        <div class=\"controls col-md-4\">
          <input type=\"text\" name=\"qqgroup[";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "][url]\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["qqgroup"], "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["qqgroup"], "url", array()), "")) : ("")), "html", null, true);
            echo "\" placeholder=\"QQ群直接加入网页代码(选填)\">
          ";
            // line 135
            if (($this->getAttribute($context["loop"], "index0", array()) > 0)) {
                // line 136
                echo "          <button class=\"close delete-btn form-control-feedback\" data-role=\"item-delete\" type=\"button\" title=\"删除\">×</button>
          ";
            }
            // line 138
            echo "        </div>
      </div>
      ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qqgroup'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "    </div>
    <div class=\"row form-group\">
      <div class=\"controls col-md-4 col-md-offset-2\">
        <span class=\"btn-link\" data-parentId='consult-qqgroup' data-length='";
        // line 144
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "qqgroup", array())), "html", null, true);
        echo "'>新增</span>
      </div>
    </div>
  </fieldset>

  <fieldset>
    <legend>联系电话设置</legend>
    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"worktime\">工作时间</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"worktime\" name=\"worktime\" class=\"form-control\" value=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "worktime", array()), "html", null, true);
        echo "\">
      </div>
    </div>
    

    <div id=\"consult-phone\">
      ";
        // line 162
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "phone", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
            // line 163
            echo "      <div class=\"row form-group has-feedback\">
        <div class=\"controls col-md-4 col-md-offset-2\">
          <input type=\"text\" name=\"phone[";
            // line 165
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "][name]\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["phone"], "name", array()), "html", null, true);
            echo "\" placeholder=\"联系人\">
        </div>
        <div class=\"controls col-md-4\">
          <input type=\"text\" name=\"phone[";
            // line 168
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "][number]\" class=\"form-control\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["phone"], "number", array()), "html", null, true);
            echo "\" placeholder=\"联系电话\">
          ";
            // line 169
            if (($this->getAttribute($context["loop"], "index0", array()) > 0)) {
                // line 170
                echo "          <button class=\"close delete-btn form-control-feedback\" data-role=\"phone-item-delete\" type=\"button\" title=\"删除\">×</button>
          ";
            }
            // line 172
            echo "        </div>
      </div>
      ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 175
        echo "    </div>
    <div class=\"row form-group\">
      <div class=\"controls col-md-4 col-md-offset-2\">
        <span class=\"btn-link\"  data-role=\"phone-item-add\" data-parentId='consult-phone' data-length='";
        // line 178
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "phone", array())), "html", null, true);
        echo "'>新增</span>
      </div>
    </div>
  </fieldset>
  
  <fieldset>
    <legend>其他设置</legend>
    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\">
        <label>微信二维码</label>
      </div>
      <div class=\"col-md-8 controls\">
        <div id=\"consult-container\">";
        // line 190
        if ($this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "webchatURI", array())) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "webchatURI", array())), "html", null, true);
            echo "\">";
        }
        echo "</div>
        <button class=\"btn btn-default btn-sm\" id=\"consult-upload\" data-upload-token=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->makeUpoadToken("system", "image"), "html", null, true);
        echo "\"type=\"button\" data-goto-url=\"";
        echo $this->env->getExtension('routing')->getPath("admin_setting_consult_upload");
        echo "\">上传</button>
        <button class=\"btn btn-default btn-sm\" id=\"consult-webchat-del\" type=\"button\" data-url=\"";
        // line 192
        echo $this->env->getExtension('routing')->getPath("admin_setting_consult_webchat_delete");
        echo "\" ";
        if ( !$this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "webchatURI", array())) {
            echo "style=\"display:none;\"";
        }
        echo ">删除</button>        
        <p class=\"help-block\">请上传png, gif, jpg格式的图片文件。</p>
        <input type=\"hidden\" name=\"webchatURI\" value=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "webchatURI", array()), "html", null, true);
        echo "\">
      </div>
    </div>
    

    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"email\">工作邮箱</label>
      </div>
      <div class=\"controls col-md-8\">
        <input type=\"text\" id=\"email\" name=\"email\" class=\"form-control\" value=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "email", array()), "html", null, true);
        echo "\">
      </div>
    </div>
  </fieldset>

  

  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\"></div>
    <div class=\"controls col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">提交</button>
    </div>
  </div>

  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:consult-setting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  438 => 218,  421 => 204,  408 => 194,  399 => 192,  393 => 191,  385 => 190,  370 => 178,  365 => 175,  349 => 172,  345 => 170,  343 => 169,  337 => 168,  329 => 165,  325 => 163,  308 => 162,  299 => 156,  284 => 144,  279 => 141,  263 => 138,  259 => 136,  257 => 135,  251 => 134,  243 => 131,  235 => 128,  231 => 126,  214 => 125,  193 => 107,  188 => 104,  172 => 101,  168 => 99,  166 => 98,  160 => 97,  152 => 94,  144 => 91,  140 => 89,  123 => 88,  64 => 31,  62 => 30,  61 => 25,  50 => 17,  39 => 9,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set menu = 'admin_setting_consult_setting' %}*/
/* */
/* {% set script_controller = 'setting/consult-setting' %}*/
/* */
/* {% block main %}*/
/* */
/* {{ web_macro.flash_messages() }}*/
/* */
/* <form class="form-horizontal" method="post" id="consult-setting-form" novalidate>*/
/*   <div class="row form-group">*/
/*     <div class="col-md-3 control-label">*/
/*       <label >客服功能</label>*/
/*     </div>*/
/*     <div class="controls col-md-8 radios">*/
/*       {{ radios('enabled', {1:'开启', 0:'关闭'}, consult.enabled) }}*/
/*     </div>*/
/*   </div>*/
/*   <div class="row form-group">*/
/*     <div class="col-md-3 control-label">*/
/*       <label >浮动条颜色</label>*/
/*     </div>*/
/*     <div class="controls col-md-8 radios">*/
/*       {{ */
/*         radios('color', */
/*         {'default':'<span class="btn btn-lg" style="background:#37b97d"></span>', */
/*          'warning':'<span class="btn btn-lg" style="background:#e67e22"></span>',*/
/*           'danger':'<span class="btn btn-lg" style="background:#e74c3c"></span>'},*/
/*         consult.color) */
/*       }}*/
/*     </div>*/
/*   </div>*/
/*   <div data-role="template" style="display:none">*/
/*     <div class="row form-group has-feedback">*/
/*       <div class="controls col-md-2 col-md-offset-2">*/
/*         <input type="text" name="" class="form-control" value="" placeholder="">*/
/*       </div>*/
/*       <div class="controls col-md-2">*/
/*         <input type="text" name="" class="form-control" value="" placeholder="">*/
/*       </div>*/
/*       <div class="controls col-md-4">*/
/*         <input type="text" name="" class="form-control" value="" placeholder="">*/
/*         <button class="close delete-btn form-control-feedback" data-role="item-delete" type="button" title="删除">×</button></input>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div data-role="phone-template" style="display:none">*/
/*     <div class="row form-group has-feedback">*/
/*       <div class="controls col-md-4 col-md-offset-2">*/
/*         <input type="text" name="" class="form-control" value="" placeholder="">*/
/*       </div>*/
/*       <div class="controls col-md-4">*/
/*         <input type="text" name="" class="form-control" value="" placeholder="">*/
/*         <button class="close delete-btn form-control-feedback" data-role="phone-item-delete" type="button" title="删除">×</button></input>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div data-role="qqGroupTemplate" style="display:none">*/
/*     <div class="row form-group has-feedback">*/
/*       <div class="controls col-md-2 col-md-offset-2">*/
/*         <input type="text" name="" class="form-control" value="" placeholder="">*/
/*       </div>*/
/*       <div class="controls col-md-2">*/
/*         <input type="text" name="" class="form-control" value="" placeholder="">*/
/*       </div>*/
/*       <div class="controls col-md-4">*/
/*         <input type="text" name="" class="form-control" value="" placeholder="">*/
/*         <button class="close delete-btn form-control-feedback" data-role="item-delete" type="button" title="删除">×</button></input>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* */
/*   <fieldset>*/
/*     <legend>QQ客服设置*/
/*       <span class="glyphicon glyphicon-question-sign text-muted pull-right mll mts" id="qq-property-tips" data-toggle="tooltip" data-placement="bottom" href="javascript:" title="" data-original-title=""></span>*/
/*       <div id="qq-property-tips-html" style="display:none;">*/
/*         <div style="width:250px;">*/
/*           <span style="color:blue;">如何获取在线咨询链接？</span><br>*/
/*           1，登录 <a target="_blank" href="http://id.b.qq.com">http://id.b.qq.com</a>。 <br>*/
/*           2，营销QQ－>在线代码生成－>生成在线咨询链接。（包含“http://”）<br>*/
/*         </div>*/
/*       </div>*/
/*     </legend>*/
/*     <div id="consult-qq">*/
/*       {% for qq in consult.qq %}*/
/*       <div class="row form-group has-feedback">*/
/*         <div class="controls col-md-2 col-md-offset-2">*/
/*           <input type="text" name="qq[{{loop.index0}}][name]" class="form-control" value="{{qq.name}}" placeholder="QQ客服名称">*/
/*         </div>*/
/*         <div class="controls col-md-2">*/
/*           <input type="text" name="qq[{{loop.index0}}][number]" class="form-control" value="{{qq.number}}" placeholder="QQ号">*/
/*         </div>*/
/*         <div class="controls col-md-4">*/
/*           <input type="text" name="qq[{{loop.index0}}][url]" class="form-control" value="{{qq.url|default('')}}" placeholder="若使用营销QQ，请填入在线咨询链接">*/
/*           {% if loop.index0 > 0 %}*/
/*           <button class="close delete-btn form-control-feedback" data-role="item-delete" type="button" title="删除">×</button>*/
/*           {% endif %}*/
/*         </div>*/
/*       </div>*/
/*       {% endfor %}*/
/*     </div>*/
/*     <div class="row form-group">*/
/*       <div class="controls col-md-4 col-md-offset-2">*/
/*         <span  class="btn-link" data-role="item-add" data-parentId='consult-qq' data-length='{{consult.qq | length}}'>新增</span>*/
/*       </div>*/
/*     </div>*/
/*   </fieldset>*/
/* */
/* */
/*   <fieldset>*/
/*     <legend>QQ群设置*/
/*       <span class="glyphicon glyphicon-question-sign text-muted pull-right mll mts" id="qq-group-property-tips" data-toggle="tooltip" data-placement="bottom" href="javascript:" title="" data-original-title=""></span>*/
/*       <div id="qq-group-property-tips-html" style="display:none;">*/
/*         <div style="width:250px;">*/
/*           <span style="color:blue;">如何获取在线咨询链接？</span><br>*/
/*           1，访问<a target="_blank" href="http://qun.qq.com/join.html">http://qun.qq.com/join.html</a>获取QQ群直接加入网页代码。 <br>*/
/*           2，一键加群代码只在侧边栏有效<br>*/
/*         </div>*/
/*       </div>*/
/*     </legend>*/
/*     <div id="consult-qqgroup">*/
/*       {% for qqgroup in consult.qqgroup %}*/
/*       <div class="row form-group has-feedback">*/
/*         <div class="controls col-md-2 col-md-offset-2">*/
/*           <input type="text" name="qqgroup[{{loop.index0}}][name]" class="form-control" value="{{qqgroup.name }}" placeholder="QQ群名称">*/
/*         </div>*/
/*         <div class="controls col-md-2">*/
/*           <input type="text" name="qqgroup[{{loop.index0}}][number]" class="form-control" value="{{qqgroup.number}}" placeholder="QQ群号">*/
/*         </div>*/
/*         <div class="controls col-md-4">*/
/*           <input type="text" name="qqgroup[{{loop.index0}}][url]" class="form-control" value="{{qqgroup.url|default('')}}" placeholder="QQ群直接加入网页代码(选填)">*/
/*           {% if loop.index0 > 0 %}*/
/*           <button class="close delete-btn form-control-feedback" data-role="item-delete" type="button" title="删除">×</button>*/
/*           {% endif %}*/
/*         </div>*/
/*       </div>*/
/*       {% endfor %}*/
/*     </div>*/
/*     <div class="row form-group">*/
/*       <div class="controls col-md-4 col-md-offset-2">*/
/*         <span class="btn-link" data-parentId='consult-qqgroup' data-length='{{consult.qqgroup | length}}'>新增</span>*/
/*       </div>*/
/*     </div>*/
/*   </fieldset>*/
/* */
/*   <fieldset>*/
/*     <legend>联系电话设置</legend>*/
/*     <div class="row form-group">*/
/*       <div class="col-md-2 control-label">*/
/*         <label for="worktime">工作时间</label>*/
/*       </div>*/
/*       <div class="controls col-md-8">*/
/*         <input type="text" id="worktime" name="worktime" class="form-control" value="{{consult.worktime}}">*/
/*       </div>*/
/*     </div>*/
/*     */
/* */
/*     <div id="consult-phone">*/
/*       {% for phone in consult.phone %}*/
/*       <div class="row form-group has-feedback">*/
/*         <div class="controls col-md-4 col-md-offset-2">*/
/*           <input type="text" name="phone[{{loop.index0}}][name]" class="form-control" value="{{phone.name}}" placeholder="联系人">*/
/*         </div>*/
/*         <div class="controls col-md-4">*/
/*           <input type="text" name="phone[{{loop.index0}}][number]" class="form-control" value="{{phone.number}}" placeholder="联系电话">*/
/*           {% if loop.index0 > 0 %}*/
/*           <button class="close delete-btn form-control-feedback" data-role="phone-item-delete" type="button" title="删除">×</button>*/
/*           {% endif %}*/
/*         </div>*/
/*       </div>*/
/*       {% endfor %}*/
/*     </div>*/
/*     <div class="row form-group">*/
/*       <div class="controls col-md-4 col-md-offset-2">*/
/*         <span class="btn-link"  data-role="phone-item-add" data-parentId='consult-phone' data-length='{{consult.phone | length}}'>新增</span>*/
/*       </div>*/
/*     </div>*/
/*   </fieldset>*/
/*   */
/*   <fieldset>*/
/*     <legend>其他设置</legend>*/
/*     <div class="row form-group">*/
/*       <div class="col-md-2 control-label">*/
/*         <label>微信二维码</label>*/
/*       </div>*/
/*       <div class="col-md-8 controls">*/
/*         <div id="consult-container">{% if consult.webchatURI %}<img src="{{ asset(consult.webchatURI) }}">{% endif %}</div>*/
/*         <button class="btn btn-default btn-sm" id="consult-upload" data-upload-token="{{ upload_token('system', 'image') }}"type="button" data-goto-url="{{ path('admin_setting_consult_upload') }}">上传</button>*/
/*         <button class="btn btn-default btn-sm" id="consult-webchat-del" type="button" data-url="{{ path('admin_setting_consult_webchat_delete') }}" {% if not consult.webchatURI %}style="display:none;"{% endif %}>删除</button>        */
/*         <p class="help-block">请上传png, gif, jpg格式的图片文件。</p>*/
/*         <input type="hidden" name="webchatURI" value="{{ consult.webchatURI }}">*/
/*       </div>*/
/*     </div>*/
/*     */
/* */
/*     <div class="row form-group">*/
/*       <div class="col-md-2 control-label">*/
/*         <label for="email">工作邮箱</label>*/
/*       </div>*/
/*       <div class="controls col-md-8">*/
/*         <input type="text" id="email" name="email" class="form-control" value="{{consult.email}}">*/
/*       </div>*/
/*     </div>*/
/*   </fieldset>*/
/* */
/*   */
/* */
/*   <div class="row form-group">*/
/*     <div class="col-md-3 control-label"></div>*/
/*     <div class="controls col-md-8">*/
/*       <button type="submit" class="btn btn-primary">提交</button>*/
/*     </div>*/
/*   </div>*/
/* */
/*   <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/* </form>*/
/* */
/* {% endblock %}*/
