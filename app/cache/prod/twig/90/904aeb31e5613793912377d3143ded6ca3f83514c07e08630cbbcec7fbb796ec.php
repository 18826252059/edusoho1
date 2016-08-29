<?php

/* TopxiaAdminBundle:CloudSetting:video.html.twig */
class __TwigTemplate_a293cfed1826221b7cd59536b44f7e860a00269a414616f2bb7543e41b686fef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:CloudSetting:video.html.twig", 1);
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
        $context["menu"] = "admin_cloud_video_setting";
        // line 4
        $context["script_controller"] = "setting/cloud";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "
";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"form-horizontal\" id=\"cloud-setting-form\" method=\"post\" novalidate>
  ";
        // line 11
        if ($this->env->getExtension('topxia_web_twig')->isTrial()) {
            // line 12
            echo "    <div class=\"row form-group\">
      <div class=\"help-block\">
        </br></br>
        <p style = \"text-align:center;font-size:16px\">视频托管服务由EduSoho教育云提供 <a href=\"http://open.edusoho.com/educloud\" target=\"_blank\">了解详情</a></p>
        </br>
      </div>
    </div>
    <hr>
  ";
        } else {
            // line 21
            echo "    <div class=\"row form-group\">
      <div class=\"col-md-3 control-label\">
        <label >云视频</label>
      </div>
      <div class=\"controls col-md-8 radios\">

        ";
            // line 27
            echo $this->env->getExtension('topxia_html_twig')->radios("upload_mode", array("local" => "关闭", "cloud" => "开启"), $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()));
            echo "

        <div class=\"help-block\">
          EduSoho云视频将为您提供稳定、安全、经济、便捷的视频托管服务以及优质的视频播放体验。点击<a href=\"http://open.edusoho.com/show/cloud/video\" target=\"_blank\">这里</a>了解详情。
        </div>

      </div>
    </div>


    <div class=\"row form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"cloud_bucket\" >云视频Bucket</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        <input type=\"text\" id=\"cloud_bucket\" class=\"form-control\" name=\"cloud_bucket\" value=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "cloud_bucket", array()), "html", null, true);
            echo "\">
      </div>
    </div>
  ";
        }
        // line 46
        echo "  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"cloud_bucket\" >云视频转码类型</label>
    </div>
    <div class=\"controls col-md-8 radios\">
      <p>
        <span class=\"form-control-static text-info\">画质</span>
        ";
        // line 53
        echo $this->env->getExtension('topxia_html_twig')->radios("video_quality", array("low" => "流畅 <span class=\"text-muted\">(适合PPT讲解)</span>", "normal" => "标准 <span class=\"text-muted\">(适合屏幕录制、摄像头拍摄)</span>", "high" => "精细 <span class=\"text-muted\">(适合动态电影)</span>"), $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "video_quality", array()));
        echo "
      </p>

      <p>
        <span class=\"form-control-static text-info\">音质</span>
        ";
        // line 58
        echo $this->env->getExtension('topxia_html_twig')->radios("video_audio_quality", array("low" => "流畅", "normal" => "标准", "high" => "高品"), $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "video_audio_quality", array()));
        echo "
      </p>

    </div>
  </div>



  <hr>

  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\">
      <label>云视频水印</label>
    </div>
    <div class=\"controls col-md-8 radios \" data-content=\"123\">
      ";
        // line 74
        echo "
      <label>
        <input type=\"radio\" name=\"video_watermark\" value=\"0\" ";
        // line 76
        if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "video_watermark", array()) == 0)) {
            echo "checked=\"checked\"";
        }
        echo "> 关闭
      </label>
      <label class=\"video-watermark-property-tips\" data-content=\"
      播放时水印将会覆盖在视频上，可随时更换；
      已经通过系统使用了内嵌水印的视频，将不会显示播放器水印。
      \">
        <input type=\"radio\" name=\"video_watermark\" value=\"1\" ";
        // line 82
        if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "video_watermark", array()) == 1)) {
            echo "checked=\"checked\"";
        }
        echo "> 开启播放器水印
      </label>
      <label class=\"video-watermark-property-tips\" data-content=\"
      能够更好的保护视频版权；
      上传时将水印嵌入视频编码中，不可删改；
      未嵌入水印的视频在播放时将会显示播放器水印。
      \">
        <input type=\"radio\" name=\"video_watermark\" value=\"2\" ";
        // line 89
        if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "video_watermark", array()) == 2)) {
            echo "checked=\"checked\"";
        }
        echo "> 开启内嵌水印
      </label>
    </div>
  </div>

  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\">
      <label>设置播放器水印图片</label>
    </div>
    <div class=\"controls col-md-8 radios\">

      <div id=\"cloud-video-watermark-container\">";
        // line 100
        if ($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "video_watermark_image", array())) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "video_watermark_image", array())), "html", null, true);
            echo "\">";
        }
        echo "</div>
      <button class=\"btn btn-default\" id=\"cloud-video-watermark-upload\" type=\"button\" data-url=\"";
        // line 101
        echo $this->env->getExtension('routing')->getPath("admin_setting_cloud_video_watermark_upload");
        echo "\">上传</button>
      <button class=\"btn btn-default\" id=\"cloud-video-watermark-remove\" type=\"button\" data-url=\"";
        // line 102
        echo $this->env->getExtension('routing')->getPath("admin_setting_cloud_video_watermark_remove");
        echo "\" ";
        if ( !$this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "video_watermark_image", array())) {
            echo "style=\"display:none;\"";
        }
        echo ">删除</button>

      <div class=\"help-block\">支持png/gif/jpg格式图片，建议使用半透明的png图片。（推荐图片大小为150×50）</div>
      <input type=\"hidden\" name=\"video_watermark_image\" value=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "video_watermark_image", array()), "html", null, true);
        echo "\">
    </div>
  </div>

  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\">
      <label>设置内嵌水印图片</label>
    </div>
    <div class=\"controls col-md-8 radios\">

      <div id=\"cloud-video-embed-watermark-container\">";
        // line 115
        if ($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "video_embed_watermark_image", array())) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "video_embed_watermark_image", array())), "html", null, true);
            echo "\">";
        }
        echo "</div>
      <button class=\"btn btn-default\" id=\"cloud-video-embed-watermark-upload\" type=\"button\" data-url=\"";
        // line 116
        echo $this->env->getExtension('routing')->getPath("admin_setting_cloud_video_embed_watermark_upload");
        echo "\">上传</button>
      <button class=\"btn btn-default\" id=\"cloud-video-embed-watermark-remove\" type=\"button\" data-url=\"";
        // line 117
        echo $this->env->getExtension('routing')->getPath("admin_setting_cloud_video_embed_watermark_remove");
        echo "\" ";
        if ( !$this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "video_embed_watermark_image", array())) {
            echo "style=\"display:none;\"";
        }
        echo ">删除</button>

      <div class=\"help-block\">支持png/gif/jpg格式图片，建议使用半透明的png图片（推荐图片大小为270×90）。</div>
      <input type=\"hidden\" name=\"video_embed_watermark_image\" value=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "video_embed_watermark_image", array()), "html", null, true);
        echo "\">
    </div>
  </div>

  <hr>

  <div class=\"row form-group\" >
    <div class=\"col-md-3 control-label\">
      <label>云视频指纹</label>
    </div>  
    <div class=\"controls col-md-8 radios\">
      ";
        // line 131
        echo $this->env->getExtension('topxia_html_twig')->radios("video_fingerprint", array("0" => "关闭", "1" => "开启"), $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "video_fingerprint", array()));
        echo "
      <div class=\"help-block\">开启后，将在视频播放中随机时间、随机位置显示当前网站域名及";
        // line 132
        if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
        } else {
            echo "学员";
        }
        echo "的用户名。</div>
    </div>
  </div>
  ";
        // line 135
        if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()) == "cloud")) {
            // line 136
            echo "  
  <hr>
<div class=\"upload-mode\"></div>

  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\" >
      <label>云视频片头</label>
    </div>

    <div class=\"controls col-md-8 radios\">
      ";
            // line 146
            echo $this->env->getExtension('topxia_html_twig')->radios("video_header", array("0" => "关闭", "1" => "开启"), (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "video_header", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "video_header", array()), 0)) : (0)));
            echo "
    </div>
  </div>
  <div class=\"row form-group\" id=\"upload-panel\"
  data-params-url=\"";
            // line 150
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_uploadfile_head_leader_params", array("storage" => $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()))), "html", null, true);
            echo "\"
  data-hls-encrypted=\"1\"
  >
    <div class=\"col-md-3\" >
    </div>
    <div class=\"controls col-md-8\">


      <div class=\"file-chooser-bar\" 
        ";
            // line 159
            if ( !(($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "video_header", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "video_header", array()), null)) : (null))) {
                // line 160
                echo "        style=\"display:none;\"
        ";
            }
            // line 162
            echo "        >
        <span data-role=\"placeholder\">";
            // line 163
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["headLeader"]) ? $context["headLeader"] : null), "filename", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["headLeader"]) ? $context["headLeader"] : null), "filename", array()), "")) : ("")), "html", null, true);
            echo "</span>
        <button class=\"btn btn-link btn-sm edit-btn\" type=\"button\"><i class=\"glyphicon glyphicon-edit\"></i> 编辑</button>
        ";
            // line 165
            if (((($this->getAttribute((isset($context["headLeader"]) ? $context["headLeader"] : null), "convertStatus", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["headLeader"]) ? $context["headLeader"] : null), "convertStatus", array()), null)) : (null)) != "success")) {
                // line 166
                echo "        <div class=\"alert alert-warning\" data-role=\"waiting-tip\">
        正在转换视频格式，转换需要一定的时间，期间将不能播放该视频。<br />转换完成后将以站内消息通知您。
        </div>
        ";
            }
            // line 170
            echo "
      </div>

      <div class=\"file-chooser-main\" 
        ";
            // line 174
            if ((($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "video_header", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "video_header", array()), null)) : (null))) {
                // line 175
                echo "        style=\"display:none;\"
        ";
            }
            // line 177
            echo "      >
        <div class=\"file-chooser-uploader-control\">
          <span id=\"video-choose-uploader-btn\"
            data-role=\"uploader-btn\"
            data-filetypes=\"";
            // line 181
            if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()) == "cloud")) {
                echo "*.mp4;*.avi;*.flv;*.wmv;*.mov";
            } else {
                echo "*.mp4";
            }
            echo "\"
            data-button-image=\"";
            // line 182
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/common/swfupload-btn.png"), "html", null, true);
            echo "\"
            data-callback=\"";
            // line 183
            if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()) == "cloud")) {
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_cloud_callback", array("targetType" => "headLeader", "targetId" => 0, "lazyConvert" => 1)), "html", null, true);
            }
            echo "\" 
            data-progressbar=\"#video-chooser-progress\"
            data-storage-type=\"";
            // line 185
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()), "html", null, true);
            echo "\"
            data-get-media-info=\"";
            // line 186
            echo $this->env->getExtension('routing')->getPath("uploadfile_cloud_get_media_info", array("type" => "video"));
            echo "\"
            >
            <a class=\"uploadBtn btn btn-default btn-lg\" >
              上传
            </a>
            </p>
            <div style=\"display:none\">
              <input data-role=\"fileSelected\" class=\"filePrew\" type=\"file\" />
            </div>
          </span>
        </div>
        <div class=\"progress\" id=\"video-chooser-progress\" style=\"display:none;\">
          <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%;\">
          </div>
        </div>

        <div class=\"alert alert-info\">
          <ul>
            <li>支持<strong>mp4, avi, flv, wmv, mov</strong>格式的视频文件上传，文件大小不能超过<strong>10 MB</strong>。</li>
            <li>支持<strong>断点续传</strong>（仅支持HTML5浏览器）。</li>
            <li>视频将上传到<strong>云视频服务器</strong>，上传后会对视频进行格式转换，转换过程需要一定的时间。</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  ";
        }
        // line 213
        echo "
  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\"></div>
    <div class=\"controls col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">提交</button>
    </div>
  </div>

  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:CloudSetting:video.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  390 => 221,  380 => 213,  350 => 186,  346 => 185,  339 => 183,  335 => 182,  327 => 181,  321 => 177,  317 => 175,  315 => 174,  309 => 170,  303 => 166,  301 => 165,  296 => 163,  293 => 162,  289 => 160,  287 => 159,  275 => 150,  268 => 146,  256 => 136,  254 => 135,  244 => 132,  240 => 131,  226 => 120,  216 => 117,  212 => 116,  204 => 115,  191 => 105,  181 => 102,  177 => 101,  169 => 100,  153 => 89,  141 => 82,  130 => 76,  126 => 74,  108 => 58,  100 => 53,  91 => 46,  84 => 42,  66 => 27,  58 => 21,  47 => 12,  45 => 11,  39 => 8,  36 => 7,  33 => 6,  29 => 1,  27 => 4,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set menu = 'admin_cloud_video_setting' %}*/
/* {% set script_controller = 'setting/cloud' %}*/
/* */
/* {% block main %}*/
/* */
/* {{ web_macro.flash_messages() }}*/
/* */
/* <form class="form-horizontal" id="cloud-setting-form" method="post" novalidate>*/
/*   {% if is_trial() %}*/
/*     <div class="row form-group">*/
/*       <div class="help-block">*/
/*         </br></br>*/
/*         <p style = "text-align:center;font-size:16px">视频托管服务由EduSoho教育云提供 <a href="http://open.edusoho.com/educloud" target="_blank">了解详情</a></p>*/
/*         </br>*/
/*       </div>*/
/*     </div>*/
/*     <hr>*/
/*   {% else %}*/
/*     <div class="row form-group">*/
/*       <div class="col-md-3 control-label">*/
/*         <label >云视频</label>*/
/*       </div>*/
/*       <div class="controls col-md-8 radios">*/
/* */
/*         {{ radios('upload_mode', {'local':'关闭', 'cloud':'开启'}, storageSetting.upload_mode) }}*/
/* */
/*         <div class="help-block">*/
/*           EduSoho云视频将为您提供稳定、安全、经济、便捷的视频托管服务以及优质的视频播放体验。点击<a href="http://open.edusoho.com/show/cloud/video" target="_blank">这里</a>了解详情。*/
/*         </div>*/
/* */
/*       </div>*/
/*     </div>*/
/* */
/* */
/*     <div class="row form-group">*/
/*       <div class="col-md-3 control-label">*/
/*         <label for="cloud_bucket" >云视频Bucket</label>*/
/*       </div>*/
/*       <div class="controls col-md-8 radios">*/
/*         <input type="text" id="cloud_bucket" class="form-control" name="cloud_bucket" value="{{storageSetting.cloud_bucket}}">*/
/*       </div>*/
/*     </div>*/
/*   {% endif %}*/
/*   <div class="row form-group">*/
/*     <div class="col-md-3 control-label">*/
/*       <label for="cloud_bucket" >云视频转码类型</label>*/
/*     </div>*/
/*     <div class="controls col-md-8 radios">*/
/*       <p>*/
/*         <span class="form-control-static text-info">画质</span>*/
/*         {{ radios('video_quality', {'low':'流畅 <span class="text-muted">(适合PPT讲解)</span>', 'normal':'标准 <span class="text-muted">(适合屏幕录制、摄像头拍摄)</span>', 'high': '精细 <span class="text-muted">(适合动态电影)</span>'}, storageSetting.video_quality) }}*/
/*       </p>*/
/* */
/*       <p>*/
/*         <span class="form-control-static text-info">音质</span>*/
/*         {{ radios('video_audio_quality', {'low':'流畅', 'normal':'标准', 'high': '高品'}, storageSetting.video_audio_quality) }}*/
/*       </p>*/
/* */
/*     </div>*/
/*   </div>*/
/* */
/* */
/* */
/*   <hr>*/
/* */
/*   <div class="row form-group">*/
/*     <div class="col-md-3 control-label">*/
/*       <label>云视频水印</label>*/
/*     </div>*/
/*     <div class="controls col-md-8 radios " data-content="123">*/
/*       {# {{ radios('video_watermark', {'0':'关闭', '1':'开启播放器水印', '2':'开启内嵌水印'}, storageSetting.video_watermark) }} #}*/
/* */
/*       <label>*/
/*         <input type="radio" name="video_watermark" value="0" {% if storageSetting.video_watermark == 0 %}checked="checked"{% endif %}> 关闭*/
/*       </label>*/
/*       <label class="video-watermark-property-tips" data-content="*/
/*       播放时水印将会覆盖在视频上，可随时更换；*/
/*       已经通过系统使用了内嵌水印的视频，将不会显示播放器水印。*/
/*       ">*/
/*         <input type="radio" name="video_watermark" value="1" {% if storageSetting.video_watermark == 1 %}checked="checked"{% endif %}> 开启播放器水印*/
/*       </label>*/
/*       <label class="video-watermark-property-tips" data-content="*/
/*       能够更好的保护视频版权；*/
/*       上传时将水印嵌入视频编码中，不可删改；*/
/*       未嵌入水印的视频在播放时将会显示播放器水印。*/
/*       ">*/
/*         <input type="radio" name="video_watermark" value="2" {% if storageSetting.video_watermark == 2 %}checked="checked"{% endif %}> 开启内嵌水印*/
/*       </label>*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="row form-group">*/
/*     <div class="col-md-3 control-label">*/
/*       <label>设置播放器水印图片</label>*/
/*     </div>*/
/*     <div class="controls col-md-8 radios">*/
/* */
/*       <div id="cloud-video-watermark-container">{% if storageSetting.video_watermark_image %}<img src="{{ filepath(storageSetting.video_watermark_image) }}">{% endif %}</div>*/
/*       <button class="btn btn-default" id="cloud-video-watermark-upload" type="button" data-url="{{ path('admin_setting_cloud_video_watermark_upload') }}">上传</button>*/
/*       <button class="btn btn-default" id="cloud-video-watermark-remove" type="button" data-url="{{ path('admin_setting_cloud_video_watermark_remove') }}" {% if not storageSetting.video_watermark_image %}style="display:none;"{% endif %}>删除</button>*/
/* */
/*       <div class="help-block">支持png/gif/jpg格式图片，建议使用半透明的png图片。（推荐图片大小为150×50）</div>*/
/*       <input type="hidden" name="video_watermark_image" value="{{ storageSetting.video_watermark_image }}">*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="row form-group">*/
/*     <div class="col-md-3 control-label">*/
/*       <label>设置内嵌水印图片</label>*/
/*     </div>*/
/*     <div class="controls col-md-8 radios">*/
/* */
/*       <div id="cloud-video-embed-watermark-container">{% if storageSetting.video_embed_watermark_image %}<img src="{{ filepath(storageSetting.video_embed_watermark_image) }}">{% endif %}</div>*/
/*       <button class="btn btn-default" id="cloud-video-embed-watermark-upload" type="button" data-url="{{ path('admin_setting_cloud_video_embed_watermark_upload') }}">上传</button>*/
/*       <button class="btn btn-default" id="cloud-video-embed-watermark-remove" type="button" data-url="{{ path('admin_setting_cloud_video_embed_watermark_remove') }}" {% if not storageSetting.video_embed_watermark_image %}style="display:none;"{% endif %}>删除</button>*/
/* */
/*       <div class="help-block">支持png/gif/jpg格式图片，建议使用半透明的png图片（推荐图片大小为270×90）。</div>*/
/*       <input type="hidden" name="video_embed_watermark_image" value="{{ storageSetting.video_embed_watermark_image }}">*/
/*     </div>*/
/*   </div>*/
/* */
/*   <hr>*/
/* */
/*   <div class="row form-group" >*/
/*     <div class="col-md-3 control-label">*/
/*       <label>云视频指纹</label>*/
/*     </div>  */
/*     <div class="controls col-md-8 radios">*/
/*       {{ radios('video_fingerprint', {'0':'关闭', '1':'开启'}, storageSetting.video_fingerprint) }}*/
/*       <div class="help-block">开启后，将在视频播放中随机时间、随机位置显示当前网站域名及{% if setting('default.user_name') %}{{setting('default.user_name')|default('学员')}}{% else %}学员{% endif %}的用户名。</div>*/
/*     </div>*/
/*   </div>*/
/*   {% if storageSetting.upload_mode == 'cloud' %}*/
/*   */
/*   <hr>*/
/* <div class="upload-mode"></div>*/
/* */
/*   <div class="row form-group">*/
/*     <div class="col-md-3 control-label" >*/
/*       <label>云视频片头</label>*/
/*     </div>*/
/* */
/*     <div class="controls col-md-8 radios">*/
/*       {{ radios('video_header', {'0':'关闭', '1':'开启'}, storageSetting.video_header|default(0)) }}*/
/*     </div>*/
/*   </div>*/
/*   <div class="row form-group" id="upload-panel"*/
/*   data-params-url="{{ path('admin_uploadfile_head_leader_params', {storage:storageSetting.upload_mode}) }}"*/
/*   data-hls-encrypted="1"*/
/*   >*/
/*     <div class="col-md-3" >*/
/*     </div>*/
/*     <div class="controls col-md-8">*/
/* */
/* */
/*       <div class="file-chooser-bar" */
/*         {% if not storageSetting.video_header|default(null) %}*/
/*         style="display:none;"*/
/*         {% endif %}*/
/*         >*/
/*         <span data-role="placeholder">{{headLeader.filename|default('')}}</span>*/
/*         <button class="btn btn-link btn-sm edit-btn" type="button"><i class="glyphicon glyphicon-edit"></i> 编辑</button>*/
/*         {% if headLeader.convertStatus|default(null) != 'success' %}*/
/*         <div class="alert alert-warning" data-role="waiting-tip">*/
/*         正在转换视频格式，转换需要一定的时间，期间将不能播放该视频。<br />转换完成后将以站内消息通知您。*/
/*         </div>*/
/*         {% endif %}*/
/* */
/*       </div>*/
/* */
/*       <div class="file-chooser-main" */
/*         {% if storageSetting.video_header|default(null) %}*/
/*         style="display:none;"*/
/*         {% endif %}*/
/*       >*/
/*         <div class="file-chooser-uploader-control">*/
/*           <span id="video-choose-uploader-btn"*/
/*             data-role="uploader-btn"*/
/*             data-filetypes="{% if storageSetting.upload_mode == 'cloud' %}*.mp4;*.avi;*.flv;*.wmv;*.mov{% else %}*.mp4{% endif %}"*/
/*             data-button-image="{{ asset('assets/img/common/swfupload-btn.png') }}"*/
/*             data-callback="{% if storageSetting.upload_mode == 'cloud' %}{{ path('uploadfile_cloud_callback', {targetType:'headLeader', targetId:0, lazyConvert:1}) }}{% endif %}" */
/*             data-progressbar="#video-chooser-progress"*/
/*             data-storage-type="{{storageSetting.upload_mode}}"*/
/*             data-get-media-info="{{path('uploadfile_cloud_get_media_info',{type:'video'})}}"*/
/*             >*/
/*             <a class="uploadBtn btn btn-default btn-lg" >*/
/*               上传*/
/*             </a>*/
/*             </p>*/
/*             <div style="display:none">*/
/*               <input data-role="fileSelected" class="filePrew" type="file" />*/
/*             </div>*/
/*           </span>*/
/*         </div>*/
/*         <div class="progress" id="video-chooser-progress" style="display:none;">*/
/*           <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">*/
/*           </div>*/
/*         </div>*/
/* */
/*         <div class="alert alert-info">*/
/*           <ul>*/
/*             <li>支持<strong>mp4, avi, flv, wmv, mov</strong>格式的视频文件上传，文件大小不能超过<strong>10 MB</strong>。</li>*/
/*             <li>支持<strong>断点续传</strong>（仅支持HTML5浏览器）。</li>*/
/*             <li>视频将上传到<strong>云视频服务器</strong>，上传后会对视频进行格式转换，转换过程需要一定的时间。</li>*/
/*           </ul>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   {% endif %}*/
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
