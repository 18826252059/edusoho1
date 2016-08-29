<?php

/* TopxiaWebBundle:CourseLessonManage:media-choose.html.twig */
class __TwigTemplate_36ff3e86f19c6e6008202272b146b6ba4e186ec431fd7c7d990b8609d530f21c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"media-choosers\">

  <div class=\"file-chooser\" id=\"video-chooser\" style=\"display:none;\"
    data-params-url=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_params", array("storage" => $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()), "targetType" => (isset($context["targetType"]) ? $context["targetType"] : null), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : null))), "html", null, true);
        echo "\"
    data-hls-encrypted=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("developer.hls_encrypted", 1), "html", null, true);
        echo "\"
    data-targetType=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["targetType"]) ? $context["targetType"] : null), "html", null, true);
        echo "\"
    data-targetId=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["targetId"]) ? $context["targetId"] : null), "html", null, true);
        echo "\"
  >
    <div class=\"file-chooser-bar\" style=\"display:none;\">
      <span data-role=\"placeholder\"></span>
      <button class=\"btn btn-link btn-sm\" type=\"button\" data-role=\"trigger\"><i class=\"glyphicon glyphicon-edit\"></i> 编辑</button>
      <div class=\"alert alert-warning\" data-role=\"waiting-tip\" style=\"display:none;\">正在转换视频格式，转换需要一定的时间，期间将不能播放该视频。<br />转换完成后将以站内消息通知您。</div>
    </div>

    <div class=\"file-chooser-main\">
      <ul class=\"nav nav-pills nav-pills-sm mbs file-chooser-tabs\">
        <li class=\"active\"><a class=\"file-chooser-uploader-tab\" href=\"#video-chooser-upload-pane\" data-toggle=\"tab\">上传视频</a></li>
        ";
        // line 18
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("MaterialLib")) {
            // line 19
            echo "        <li>
          <a href=\"#video-chooser-disk-pane\" data-toggle=\"tab\">
            从资料库中选择
          </a>
        </li>
        ";
        }
        // line 25
        echo "
        <li>
          <a href=\"#video-chooser-course-file\" data-toggle=\"tab\">
            从课程文件中选择
          </a>
        </li>

        <li><a href=\"#video-chooser-import-pane\" data-toggle=\"tab\">导入网络视频</a></li>
        ";
        // line 33
        $context["magic"] = $this->env->getExtension('topxia_web_twig')->getSetting("magic");
        // line 34
        echo "        ";
        if ((($this->getAttribute((isset($context["magic"]) ? $context["magic"] : null), "letv", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["magic"]) ? $context["magic"] : null), "letv", array()), "")) : (""))) {
            // line 35
            echo "            <li><a href=\"#video-chooser-letv-import\" data-toggle=\"tab\">导入乐视视频</a></li>
        ";
        }
        // line 37
        echo "      </ul>
      <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"video-chooser-upload-pane\">

          <div class=\"file-chooser-uploader\">




";
        // line 46
        if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()) == "cloud")) {
            // line 47
            echo "  <div class=\"video-quality-switcher\">
    <div>
      <label>视频转码类型：</label>
      <span class=\"quality-switcher-bar\">
        <span class=\"text-muted quality-switcher-name\"></span> <a href=\"javascript:;\" class=\"edit-btn text-info\"><span class=\"glyphicon glyphicon-cog\"></span> 设置</a>
      </span>
    </div>

    <div class=\"quality-switcher-control\">
      <div class=\"video-quality radios\">
        画质：
        ";
            // line 58
            if (((array_key_exists("file", $context)) ? (_twig_default_filter((isset($context["file"]) ? $context["file"] : null), null)) : (null))) {
                // line 59
                echo "          ";
                echo $this->env->getExtension('topxia_html_twig')->radios("video_quality", array("low" => "流畅 <span class=\"text-muted\">(适合PPT讲解)</span>", "normal" => "标准 <span class=\"text-muted\">(适合屏幕录制、摄像头拍摄)</span>", "high" => "精细 <span class=\"text-muted\">(适合动态电影)</span>"), (($this->getAttribute($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "convertParams", array(), "any", false, true), "videoQuality", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "convertParams", array(), "any", false, true), "videoQuality", array()), "low")) : ("low")));
                echo "
        ";
            } else {
                // line 61
                echo "          ";
                echo $this->env->getExtension('topxia_html_twig')->radios("video_quality", array("low" => "流畅 <span class=\"text-muted\">(适合PPT讲解)</span>", "normal" => "标准 <span class=\"text-muted\">(适合屏幕录制、摄像头拍摄)</span>", "high" => "精细 <span class=\"text-muted\">(适合动态电影)</span>"), (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "video_quality", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "video_quality", array()), "low")) : ("low")));
                echo "
        ";
            }
            // line 63
            echo "      </div>

      <div class=\"audio-quality radios\">
        音质：
        ";
            // line 67
            if (((array_key_exists("file", $context)) ? (_twig_default_filter((isset($context["file"]) ? $context["file"] : null), null)) : (null))) {
                // line 68
                echo "          ";
                echo $this->env->getExtension('topxia_html_twig')->radios("video_audio_quality", array("low" => "流畅", "normal" => "标准", "high" => "高品"), (($this->getAttribute($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "convertParams", array(), "any", false, true), "audioQuality", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "convertParams", array(), "any", false, true), "audioQuality", array()), "low")) : ("low")));
                echo "
        ";
            } else {
                // line 70
                echo "          ";
                echo $this->env->getExtension('topxia_html_twig')->radios("video_audio_quality", array("low" => "流畅", "normal" => "标准", "high" => "高品"), (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "video_audio_quality", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "video_audio_quality", array()), "low")) : ("low")));
                echo "
          ";
            }
            // line 72
            echo "      </div>

      <div class=\"quality-actions\">
        <a href=\"javascript:;\" class=\"btn btn-default btn-sm confrim-btn\">确定</a>
        <a href=\"javascript:;\" class=\"btn btn-link btn-sm cancel-btn\">取消</a>
      </div>
    </div>
  </div>
  ";
        }
        // line 81
        echo "            <div class=\"file-chooser-uploader-label\">选择你要上传的视频文件：</div>
            <div class=\"file-chooser-uploader-control\">
              <span id=\"video-choose-uploader-btn\"
                data-role=\"uploader-btn\"
                data-filetypes=\"";
        // line 85
        if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()) == "cloud")) {
            echo "*.mp4;*.avi;*.flv;*.wmv;*.mov;*.m4v";
        } else {
            echo "*.mp4";
        }
        echo "\"
                data-button-image=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/common/swfupload-btn.png"), "html", null, true);
        echo "\"
                data-callback=\"";
        // line 87
        if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()) == "cloud")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_cloud_callback", array("targetType" => (isset($context["targetType"]) ? $context["targetType"] : null), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : null), "lazyConvert" => 1)), "html", null, true);
        }
        echo "\" 
                data-progressbar=\"#video-chooser-progress\"
                data-storage-type=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()), "html", null, true);
        echo "\"
                data-get-media-info=\"";
        // line 90
        echo $this->env->getExtension('routing')->getPath("uploadfile_cloud_get_media_info", array("type" => "video"));
        echo "\"
                >
                <a class=\"uploadBtn btn btn-default btn-lg\">
                  上传
                </a>
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
                ";
        // line 107
        if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()) == "cloud")) {
            // line 108
            echo "                  <li>支持<strong>mp4, avi, flv, wmv, mov, m4v</strong>格式的视频文件上传，文件大小不能超过<strong>2 GB</strong>。</li>
                  <li>支持<strong>断点续传</strong>（仅支持HTML5浏览器）。</li>
                  <li>视频将上传到<strong>云视频服务器</strong>，上传之后会对视频进行格式转换，转换过程需要一定的时间，在这个过程中视频将无法播放。</li>
                ";
        } else {
            // line 112
            echo "                  <li>支持<strong>mp4</strong>格式的视频文件上传，文件大小不能超过<strong>";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getUploadMaxFilesize(), "html", null, true);
            echo " </strong>。MP4文件的视频编码格式，请使用AVC(H264)编码，否则浏览器无法播放。</li>
                  ";
            // line 114
            echo "                    ";
            // line 115
            echo "                  ";
            // line 116
            echo "                ";
        }
        // line 117
        echo "              </ul>
            </div>

          </div>

        </div>
\t";
        // line 123
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("MaterialLib")) {
            // line 124
            echo "          <div class=\"tab-pane\" id=\"video-chooser-disk-pane\">
              <div id=\"file-browser-video\" data-role=\"file-browser\"
              data-base-url=\"";
            // line 126
            echo $this->env->getExtension('routing')->getPath("uploadfile_browser", array("type" => "video"));
            echo "\" 
              data-default-url=\"";
            // line 127
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_browser", array("type" => "video", "source" => "upload")), "html", null, true);
            echo "\" 
              data-my-sharing-contacts-url=\"";
            // line 128
            echo $this->env->getExtension('routing')->getPath("material_lib_my_sharing_contacts");
            echo "\"
              data-empty=\"暂无视频文件，请先上传。\">
              \t<div class=\"file-browser-list-container\"></div>
              </div>
          </div>
        ";
        }
        // line 134
        echo "
        <div class=\"tab-pane\" id=\"video-chooser-course-file\">
            <div id=\"file-browser-video\" data-role=\"course-file-browser\"
            data-url=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_browsers", array("targetType" => (isset($context["targetType"]) ? $context["targetType"] : null), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : null), "type" => "video")), "html", null, true);
        echo "\" 
            data-empty=\"暂无视频文件，请先上传。\">
            </div>
        </div>

        <div class=\"tab-pane\" id=\"video-chooser-import-pane\">
          <div class=\"input-group\">
            <input class=\"form-control\" type=\"text\" placeholder=\"支持优酷、土豆、腾讯、网易公开课的视频页面地址导入\" data-role=\"import-url\" >
            <span class=\"input-group-btn\">
              <button type=\"button\" class=\"btn btn-default\" data-role=\"import\" data-url=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_media_import", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\" data-loading-text=\"正在导入，请稍等\">导入</button>
            </span>
          </div>
        </div>
        ";
        // line 150
        $context["magic"] = $this->env->getExtension('topxia_web_twig')->getSetting("magic");
        // line 151
        echo "        ";
        if ((($this->getAttribute((isset($context["magic"]) ? $context["magic"] : null), "letv", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["magic"]) ? $context["magic"] : null), "letv", array()), "")) : (""))) {
            // line 152
            echo "          <div class=\"tab-pane\" id=\"video-chooser-letv-import\">
            <div class=\"input-group\">
              <input class=\"form-control\" type=\"text\" placeholder=\"支持乐视视频源地址\" data-role=\"import-url-letv\" >
              <span class=\"input-group-btn\">
                <button type=\"button\" class=\"btn btn-default\" data-role=\"import\" data-url=\"";
            // line 156
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_media_import", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\" data-loading-text=\"正在导入，请稍等\">导入</button>
              </span>
            </div>
          </div>
        ";
        }
        // line 161
        echo "      </div>
    </div>

  </div>


  <div class=\"file-chooser\" id=\"audio-chooser\" style=\"display:none;\"
      data-params-url=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_params", array("storage" => $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()), "targetType" => (isset($context["targetType"]) ? $context["targetType"] : null), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : null))), "html", null, true);
        echo "\"
      data-targetType=\"";
        // line 169
        echo twig_escape_filter($this->env, (isset($context["targetType"]) ? $context["targetType"] : null), "html", null, true);
        echo "\"
      data-targetId=\"";
        // line 170
        echo twig_escape_filter($this->env, (isset($context["targetId"]) ? $context["targetId"] : null), "html", null, true);
        echo "\"
  >
    <div class=\"file-chooser-bar\"  style=\"display:none;\">
      <span data-role=\"placeholder\"></span>
      <button class=\"btn btn-link btn-sm\" type=\"button\" data-role=\"trigger\"><i class=\"glyphicon glyphicon-edit\"></i> 编辑</button>
    </div>

    <div class=\"file-chooser-main\">
      <ul class=\"nav nav-pills nav-pills-sm mbs file-chooser-tabs\">
        <li class=\"active\"><a class=\"file-chooser-uploader-tab\" href=\"#audio-chooser-upload-pane\" data-toggle=\"tab\">上传音频</a></li>
        ";
        // line 180
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("MaterialLib")) {
            // line 181
            echo "        <li><a href=\"#audio-chooser-disk-pane\" data-toggle=\"tab\">
              从资料库中选择
        </a></li>
        ";
        }
        // line 185
        echo "
        <li>
          <a href=\"#audio-chooser-course-file\" data-toggle=\"tab\">
            从课程文件中选择
          </a>
        </li>

      </ul>
      <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"audio-chooser-upload-pane\">

          <div class=\"file-chooser-uploader\">
            <div class=\"file-chooser-uploader-label\">选择你要上传的音频文件：</div>
            <div class=\"file-chooser-uploader-control\">
              <span id=\"audio-choose-uploader-btn\" 
                data-role=\"uploader-btn\"
                data-button-image=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/common/swfupload-btn.png"), "html", null, true);
        echo "\"
                data-callback=\"";
        // line 202
        if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()) == "cloud")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_cloud_callback", array("targetType" => (isset($context["targetType"]) ? $context["targetType"] : null), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : null))), "html", null, true);
        }
        echo "\" 
                data-progressbar=\"#audio-chooser-progress\"
                data-storage-type=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()), "html", null, true);
        echo "\"
                data-get-media-info=\"";
        // line 205
        echo $this->env->getExtension('routing')->getPath("uploadfile_cloud_get_media_info", array("type" => "audio"));
        echo "\"
                >
                <a class=\"uploadBtn btn btn-default btn-lg\">
                  上传
                </a>
                <div style=\"display:none\">
                  <input data-role=\"fileSelected\" class=\"filePrew\" type=\"file\" />
                </div>
              </span>
            </div>
            <div class=\"progress\" id=\"audio-chooser-progress\" style=\"display:none;\">
              <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%;\">
              </div>
            </div>

            <div class=\"alert alert-info\">
              <ul>
                <li>支持<strong>mp3</strong>格式的音频文件上传，且文件大小不能超过<strong>
                ";
        // line 223
        if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()) == "cloud")) {
            // line 224
            echo "                  500M
                ";
        } else {
            // line 226
            echo "                  ";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getUploadMaxFilesize(), "html", null, true);
            echo "
                ";
        }
        // line 228
        echo "                </strong>。</li>
                ";
        // line 229
        if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()) == "cloud")) {
            // line 230
            echo "                  <li>支持<strong>断点续传</strong>（仅支持HTML5浏览器）。</li>
                  <li>音频将上传到<strong>云服务器</strong></li>
                ";
        } else {
            // line 233
            echo "                  <li>
                    音频将上传到<strong>网站服务器</strong>，";
            // line 234
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->removeCopyright("如需使用EduSoho云视频,"), "html", null, true);
            echo "点击<a href=\"http://open.edusoho.com/show/cloud/video\" target=\"_blank\">这里</a>了解详情。
                  </li>
                ";
        }
        // line 237
        echo "              </ul>
            </div>
          </div>

        </div>
\t";
        // line 242
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("MaterialLib")) {
            // line 243
            echo "          <div class=\"tab-pane\" id=\"audio-chooser-disk-pane\">
            <div id=\"file-browser-audio\" data-role=\"file-browser\"
            \t\tdata-base-url=\"";
            // line 245
            echo $this->env->getExtension('routing')->getPath("uploadfile_browser", array("type" => "audio"));
            echo "\" 
              data-default-url=\"";
            // line 246
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_browser", array("type" => "audio", "source" => "upload")), "html", null, true);
            echo "\" 
              data-my-sharing-contacts-url=\"";
            // line 247
            echo $this->env->getExtension('routing')->getPath("material_lib_my_sharing_contacts");
            echo "\"
              data-empty=\"暂无音频文件，请先上传。\">
            \t\t<div class=\"file-browser-list-container\"></div>
            </div>
          </div>
        ";
        }
        // line 253
        echo "
        <div class=\"tab-pane\" id=\"audio-chooser-course-file\">
          <div id=\"file-browser-audio\" data-role=\"course-file-browser\"
          data-url=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_browsers", array("targetType" => (isset($context["targetType"]) ? $context["targetType"] : null), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : null), "type" => "audio")), "html", null, true);
        echo "\" data-empty=\"暂无音频文件，请先上传。\"></div>
        </div>

      </div>
    </div>

  </div>




  <div class=\"file-chooser\" id=\"ppt-chooser\" style=\"display:none;\"
    data-params-url=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_params", array("storage" => $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()), "targetType" => (isset($context["targetType"]) ? $context["targetType"] : null), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : null), "convertor" => "ppt", "lazyConvert" => 1)), "html", null, true);
        echo "\"
    data-targetType=\"";
        // line 269
        echo twig_escape_filter($this->env, (isset($context["targetType"]) ? $context["targetType"] : null), "html", null, true);
        echo "\"
    data-targetId=\"";
        // line 270
        echo twig_escape_filter($this->env, (isset($context["targetId"]) ? $context["targetId"] : null), "html", null, true);
        echo "\"
  >
    <div class=\"file-chooser-bar\"  style=\"display:none;\">
      <span data-role=\"placeholder\"></span>
      <button class=\"btn btn-link btn-sm\" type=\"button\" data-role=\"trigger\"><i class=\"glyphicon glyphicon-edit\"></i> 编辑</button>
    </div>

    <div class=\"file-chooser-main\">
      <ul class=\"nav nav-pills nav-pills-sm mbs file-chooser-tabs\">
        <li class=\"active\"><a class=\"file-chooser-uploader-tab\" href=\"#ppt-chooser-upload-pane\" data-toggle=\"tab\">上传PPT</a></li>
        ";
        // line 280
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("MaterialLib")) {
            // line 281
            echo "        <li><a href=\"#ppt-chooser-disk-pane\" data-toggle=\"tab\">
              从资料库中选择
        </a></li>
        ";
        }
        // line 285
        echo "
         <li>
          <a href=\"#ppt-chooser-course-file\" data-toggle=\"tab\">
            从课程文件中选择
          </a>
        </li>

      </ul>
      <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"ppt-chooser-upload-pane\">

          <div class=\"file-chooser-uploader\">
            <div class=\"file-chooser-uploader-label\">选择你要上传的PPT文件：</div>
            <div class=\"file-chooser-uploader-control\">
              <span id=\"ppt-choose-uploader-btn\" 
                data-role=\"uploader-btn\"
                data-button-image=\"";
        // line 301
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/common/swfupload-btn.png"), "html", null, true);
        echo "\"
                data-callback=\"";
        // line 302
        if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()) == "cloud")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_cloud_callback", array("targetType" => (isset($context["targetType"]) ? $context["targetType"] : null), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : null), "lazyConvert" => 1)), "html", null, true);
        }
        echo "\" 
                data-storage-type=\"";
        // line 303
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()), "html", null, true);
        echo "\"
                data-progressbar=\"#ppt-chooser-progress\">
                <a class=\"uploadBtn btn btn-default btn-lg\">
                  上传
                </a>
                <div style=\"display:none\">
                  <input data-role=\"fileSelected\" class=\"filePrew\" type=\"file\" />
                </div>
              </span>
            </div>
            <div class=\"progress\" id=\"ppt-chooser-progress\" style=\"display:none;\">
              <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%;\">
              </div>
            </div>

            <div class=\"alert alert-info\">
              <ul>
                <li>支持<strong>ppt, pptx</strong>格式的PPT文件上传，且文件大小不能超过<strong>100 MB</strong>。</li>
                <li>PPT将上传到<strong>云服务器</strong></li>
              </ul>
            </div>
          </div>

        </div>
\t";
        // line 327
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("MaterialLib")) {
            // line 328
            echo "          <div class=\"tab-pane\" id=\"ppt-chooser-disk-pane\">
            <div id=\"file-browser-ppt\" data-role=\"file-browser\"
            \t\tdata-base-url=\"";
            // line 330
            echo $this->env->getExtension('routing')->getPath("uploadfile_browser", array("type" => "ppt"));
            echo "\" 
              data-default-url=\"";
            // line 331
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_browser", array("type" => "ppt", "source" => "upload")), "html", null, true);
            echo "\" 
              data-my-sharing-contacts-url=\"";
            // line 332
            echo $this->env->getExtension('routing')->getPath("material_lib_my_sharing_contacts");
            echo "\"
            \t\tdata-empty=\"暂无PPT文件，请先上传。\">
            \t<div class=\"file-browser-list-container\"></div>
            </div>
          </div>
        ";
        }
        // line 338
        echo "
        <div class=\"tab-pane\" id=\"ppt-chooser-course-file\">
            <div id=\"file-browser-ppt\" data-role=\"course-file-browser\"
            data-url=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_browsers", array("targetType" => (isset($context["targetType"]) ? $context["targetType"] : null), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : null), "type" => "ppt")), "html", null, true);
        echo "\" data-empty=\"暂无PPT文件，请先上传。\"></div>
        </div>
        
      </div>
    </div>

  </div>



 <div class=\"file-chooser\" id=\"document-chooser\" style=\"display:none;\"
    data-params-url=\"";
        // line 352
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_params", array("storage" => $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()), "targetType" => (isset($context["targetType"]) ? $context["targetType"] : null), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : null), "convertor" => "document")), "html", null, true);
        echo "\"
    data-targetType=\"";
        // line 353
        echo twig_escape_filter($this->env, (isset($context["targetType"]) ? $context["targetType"] : null), "html", null, true);
        echo "\"
    data-targetId=\"";
        // line 354
        echo twig_escape_filter($this->env, (isset($context["targetId"]) ? $context["targetId"] : null), "html", null, true);
        echo "\"
  >
    <div class=\"file-chooser-bar\"  style=\"display:none;\">
      <span data-role=\"placeholder\"></span>
      <button class=\"btn btn-link btn-sm\" type=\"button\" data-role=\"trigger\"><i class=\"glyphicon glyphicon-edit\"></i> 编辑</button>
    </div>

    <div class=\"file-chooser-main\">
      <ul class=\"nav nav-pills nav-pills-sm mbs file-chooser-tabs\">
        <li class=\"active\"><a class=\"file-chooser-uploader-tab\" href=\"#document-chooser-upload-pane\" data-toggle=\"tab\">上传文档</a></li>
        ";
        // line 364
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("MaterialLib")) {
            // line 365
            echo "        <li><a href=\"#document-chooser-disk-pane\" data-toggle=\"tab\">
              从资料库中选择
        </a></li>
        ";
        }
        // line 369
        echo "
         <li>
          <a href=\"#document-chooser-course-file\" data-toggle=\"tab\">
            从课程文件中选择
          </a>
        </li>

      </ul>
      <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"document-chooser-upload-pane\">

          <div class=\"file-chooser-uploader\">
            <div class=\"file-chooser-uploader-label\">选择你要上传的文档：</div>
            <div class=\"file-chooser-uploader-control\">
              <span id=\"document-choose-uploader-btn\" 
                data-role=\"uploader-btn\"
                data-button-image=\"";
        // line 385
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/common/swfupload-btn.png"), "html", null, true);
        echo "\"
                data-callback=\"";
        // line 386
        if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()) == "cloud")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_cloud_callback", array("targetType" => (isset($context["targetType"]) ? $context["targetType"] : null), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : null), "lazyConvert" => 1)), "html", null, true);
        }
        echo "\" 
                data-storage-type=\"";
        // line 387
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()), "html", null, true);
        echo "\"
                data-progressbar=\"#document-chooser-progress\">
                <a class=\"uploadBtn btn btn-default btn-lg\">
                  上传
                </a>
                <div style=\"display:none\">
                  <input data-role=\"fileSelected\" class=\"filePrew\" type=\"file\" />
                </div>
              </span>
            </div>
            <div class=\"progress\" id=\"document-chooser-progress\" style=\"display:none;\">
              <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%;\">
              </div>
            </div>

            <div class=\"alert alert-info\">
              <ul>
                <li>支持<strong>pdf,doc,docx</strong>格式的文档上传，且文件大小不能超过<strong>100 MB</strong>。</li>
                <li>文档将上传到<strong>云服务器</strong></li>
              </ul>
            </div>
          </div>

        </div>
  ";
        // line 411
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("MaterialLib")) {
            // line 412
            echo "          <div class=\"tab-pane\" id=\"document-chooser-disk-pane\">
            <div id=\"file-browser-document\" data-role=\"file-browser\"
                data-base-url=\"";
            // line 414
            echo $this->env->getExtension('routing')->getPath("uploadfile_browser", array("type" => "document"));
            echo "\" 
              data-default-url=\"";
            // line 415
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_browser", array("type" => "document", "source" => "upload")), "html", null, true);
            echo "\" 
              data-my-sharing-contacts-url=\"";
            // line 416
            echo $this->env->getExtension('routing')->getPath("material_lib_my_sharing_contacts");
            echo "\"
                data-empty=\"暂无文档，请先上传。\">
              <div class=\"file-browser-list-container\"></div>
            </div>
          </div>
        ";
        }
        // line 422
        echo "
        <div class=\"tab-pane\" id=\"document-chooser-course-file\">
            <div id=\"file-browser-document\" data-role=\"course-file-browser\"
            data-url=\"";
        // line 425
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_browser", array("targetType" => (isset($context["targetType"]) ? $context["targetType"] : null), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : null), "type" => "document")), "html", null, true);
        echo "\" data-empty=\"暂无文档，请先上传。\"></div>
        </div>
        
      </div>
    </div>

  </div>



   <div class=\"file-chooser\" id=\"flash-chooser\" style=\"display:none;\"
    data-params-url=\"";
        // line 436
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_params", array("storage" => $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()), "targetType" => (isset($context["targetType"]) ? $context["targetType"] : null), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : null), "convertor" => "")), "html", null, true);
        echo "\"
    data-targetType=\"";
        // line 437
        echo twig_escape_filter($this->env, (isset($context["targetType"]) ? $context["targetType"] : null), "html", null, true);
        echo "\"
    data-targetId=\"";
        // line 438
        echo twig_escape_filter($this->env, (isset($context["targetId"]) ? $context["targetId"] : null), "html", null, true);
        echo "\"
  >
    <div class=\"file-chooser-bar\"  style=\"display:none;\">
      <span data-role=\"placeholder\"></span>
      <button class=\"btn btn-link btn-sm\" type=\"button\" data-role=\"trigger\"><i class=\"glyphicon glyphicon-edit\"></i> 编辑</button>
    </div>

    <div class=\"file-chooser-main\">
      <ul class=\"nav nav-pills nav-pills-sm mbs file-chooser-tabs\">
        <li class=\"active\"><a class=\"file-chooser-uploader-tab\" href=\"#flash-chooser-upload-pane\" data-toggle=\"tab\">上传Flash</a></li>
        ";
        // line 448
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("MaterialLib")) {
            // line 449
            echo "        <li><a href=\"#flash-chooser-disk-pane\" data-toggle=\"tab\">
              从资料库中选择
        </a></li>
        ";
        }
        // line 453
        echo "
         <li>
          <a href=\"#flash-chooser-course-file\" data-toggle=\"tab\">
            从课程文件中选择
          </a>
        </li>

      </ul>
      <div class=\"tab-content\">
        <div class=\"tab-pane active\" id=\"flash-chooser-upload-pane\">

          <div class=\"file-chooser-uploader\">
            <div class=\"file-chooser-uploader-label\">选择你要上传的Flash：</div>
            <div class=\"file-chooser-uploader-control\">
              <span id=\"flash-choose-uploader-btn\" 
                data-role=\"uploader-btn\"
                data-button-image=\"";
        // line 469
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/img/common/swfupload-btn.png"), "html", null, true);
        echo "\"
                data-callback=\"";
        // line 470
        if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()) == "cloud")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_cloud_callback", array("targetType" => (isset($context["targetType"]) ? $context["targetType"] : null), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : null))), "html", null, true);
        }
        echo "\" 
                data-storage-type=\"";
        // line 471
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()), "html", null, true);
        echo "\"
                data-progressbar=\"#flash-chooser-progress\">
                <a class=\"uploadBtn btn btn-default btn-lg\">
                  上传
                </a>
                <div style=\"display:none\">
                  <input data-role=\"fileSelected\" class=\"filePrew\" type=\"file\" />
                </div>
              </span>
            </div>
            <div class=\"progress\" id=\"flash-chooser-progress\" style=\"display:none;\">
              <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 0%;\">
              </div>
            </div>

            <div class=\"alert alert-info\">
              <ul>
                <li>支持<strong>swf</strong>格式的文件上传，且文件大小不能超过<strong>100 MB</strong>。</li>
                <li>Flash将上传到<strong>云服务器</strong></li>
              </ul>
            </div>
          </div>

        </div>
  ";
        // line 495
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("MaterialLib")) {
            // line 496
            echo "          <div class=\"tab-pane\" id=\"flash-chooser-disk-pane\">
            <div id=\"file-browser-flash\" data-role=\"file-browser\"
                data-base-url=\"";
            // line 498
            echo $this->env->getExtension('routing')->getPath("uploadfile_browser", array("type" => "flash"));
            echo "\" 
              data-default-url=\"";
            // line 499
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_browser", array("type" => "flash", "source" => "upload")), "html", null, true);
            echo "\" 
              data-my-sharing-contacts-url=\"";
            // line 500
            echo $this->env->getExtension('routing')->getPath("material_lib_my_sharing_contacts");
            echo "\"
                data-empty=\"暂无Flash，请先上传。\">
              <div class=\"file-browser-list-container\"></div>
            </div>
          </div>
        ";
        }
        // line 506
        echo "
        <div class=\"tab-pane\" id=\"flash-chooser-course-file\">
            <div id=\"file-browser-flash\" data-role=\"course-file-browser\"
            data-url=\"";
        // line 509
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_browser", array("targetType" => (isset($context["targetType"]) ? $context["targetType"] : null), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : null), "type" => "flash")), "html", null, true);
        echo "\" data-empty=\"暂无Flash，请先上传。\"></div>
        </div>
        
      </div>
    </div>

  </div>


</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseLessonManage:media-choose.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  830 => 509,  825 => 506,  816 => 500,  812 => 499,  808 => 498,  804 => 496,  802 => 495,  775 => 471,  769 => 470,  765 => 469,  747 => 453,  741 => 449,  739 => 448,  726 => 438,  722 => 437,  718 => 436,  704 => 425,  699 => 422,  690 => 416,  686 => 415,  682 => 414,  678 => 412,  676 => 411,  649 => 387,  643 => 386,  639 => 385,  621 => 369,  615 => 365,  613 => 364,  600 => 354,  596 => 353,  592 => 352,  578 => 341,  573 => 338,  564 => 332,  560 => 331,  556 => 330,  552 => 328,  550 => 327,  523 => 303,  517 => 302,  513 => 301,  495 => 285,  489 => 281,  487 => 280,  474 => 270,  470 => 269,  466 => 268,  451 => 256,  446 => 253,  437 => 247,  433 => 246,  429 => 245,  425 => 243,  423 => 242,  416 => 237,  410 => 234,  407 => 233,  402 => 230,  400 => 229,  397 => 228,  391 => 226,  387 => 224,  385 => 223,  364 => 205,  360 => 204,  353 => 202,  349 => 201,  331 => 185,  325 => 181,  323 => 180,  310 => 170,  306 => 169,  302 => 168,  293 => 161,  285 => 156,  279 => 152,  276 => 151,  274 => 150,  267 => 146,  255 => 137,  250 => 134,  241 => 128,  237 => 127,  233 => 126,  229 => 124,  227 => 123,  219 => 117,  216 => 116,  214 => 115,  212 => 114,  207 => 112,  201 => 108,  199 => 107,  179 => 90,  175 => 89,  168 => 87,  164 => 86,  156 => 85,  150 => 81,  139 => 72,  133 => 70,  127 => 68,  125 => 67,  119 => 63,  113 => 61,  107 => 59,  105 => 58,  92 => 47,  90 => 46,  79 => 37,  75 => 35,  72 => 34,  70 => 33,  60 => 25,  52 => 19,  50 => 18,  36 => 7,  32 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }
}
/* <div id="media-choosers">*/
/* */
/*   <div class="file-chooser" id="video-chooser" style="display:none;"*/
/*     data-params-url="{{ path('uploadfile_params', {storage:storageSetting.upload_mode, targetType:targetType, targetId:targetId}) }}"*/
/*     data-hls-encrypted="{{ setting('developer.hls_encrypted', 1) }}"*/
/*     data-targetType="{{targetType}}"*/
/*     data-targetId="{{targetId}}"*/
/*   >*/
/*     <div class="file-chooser-bar" style="display:none;">*/
/*       <span data-role="placeholder"></span>*/
/*       <button class="btn btn-link btn-sm" type="button" data-role="trigger"><i class="glyphicon glyphicon-edit"></i> 编辑</button>*/
/*       <div class="alert alert-warning" data-role="waiting-tip" style="display:none;">正在转换视频格式，转换需要一定的时间，期间将不能播放该视频。<br />转换完成后将以站内消息通知您。</div>*/
/*     </div>*/
/* */
/*     <div class="file-chooser-main">*/
/*       <ul class="nav nav-pills nav-pills-sm mbs file-chooser-tabs">*/
/*         <li class="active"><a class="file-chooser-uploader-tab" href="#video-chooser-upload-pane" data-toggle="tab">上传视频</a></li>*/
/*         {% if is_plugin_installed('MaterialLib') %}*/
/*         <li>*/
/*           <a href="#video-chooser-disk-pane" data-toggle="tab">*/
/*             从资料库中选择*/
/*           </a>*/
/*         </li>*/
/*         {% endif %}*/
/* */
/*         <li>*/
/*           <a href="#video-chooser-course-file" data-toggle="tab">*/
/*             从课程文件中选择*/
/*           </a>*/
/*         </li>*/
/* */
/*         <li><a href="#video-chooser-import-pane" data-toggle="tab">导入网络视频</a></li>*/
/*         {% set magic = setting('magic')%}*/
/*         {% if magic.letv|default('') %}*/
/*             <li><a href="#video-chooser-letv-import" data-toggle="tab">导入乐视视频</a></li>*/
/*         {% endif %}*/
/*       </ul>*/
/*       <div class="tab-content">*/
/*         <div class="tab-pane active" id="video-chooser-upload-pane">*/
/* */
/*           <div class="file-chooser-uploader">*/
/* */
/* */
/* */
/* */
/* {% if storageSetting.upload_mode == 'cloud'  %}*/
/*   <div class="video-quality-switcher">*/
/*     <div>*/
/*       <label>视频转码类型：</label>*/
/*       <span class="quality-switcher-bar">*/
/*         <span class="text-muted quality-switcher-name"></span> <a href="javascript:;" class="edit-btn text-info"><span class="glyphicon glyphicon-cog"></span> 设置</a>*/
/*       </span>*/
/*     </div>*/
/* */
/*     <div class="quality-switcher-control">*/
/*       <div class="video-quality radios">*/
/*         画质：*/
/*         {% if file|default(null) %}*/
/*           {{ radios('video_quality', {'low':'流畅 <span class="text-muted">(适合PPT讲解)</span>', 'normal':'标准 <span class="text-muted">(适合屏幕录制、摄像头拍摄)</span>', 'high': '精细 <span class="text-muted">(适合动态电影)</span>'}, file.convertParams.videoQuality|default('low')) }}*/
/*         {% else %}*/
/*           {{ radios('video_quality', {'low':'流畅 <span class="text-muted">(适合PPT讲解)</span>', 'normal':'标准 <span class="text-muted">(适合屏幕录制、摄像头拍摄)</span>', 'high': '精细 <span class="text-muted">(适合动态电影)</span>'}, storageSetting.video_quality|default('low')) }}*/
/*         {% endif %}*/
/*       </div>*/
/* */
/*       <div class="audio-quality radios">*/
/*         音质：*/
/*         {% if file|default(null) %}*/
/*           {{ radios('video_audio_quality', {'low':'流畅', 'normal':'标准', 'high': '高品'}, file.convertParams.audioQuality|default('low')) }}*/
/*         {% else %}*/
/*           {{ radios('video_audio_quality', {'low':'流畅', 'normal':'标准', 'high': '高品'}, storageSetting.video_audio_quality|default('low')) }}*/
/*           {% endif %}*/
/*       </div>*/
/* */
/*       <div class="quality-actions">*/
/*         <a href="javascript:;" class="btn btn-default btn-sm confrim-btn">确定</a>*/
/*         <a href="javascript:;" class="btn btn-link btn-sm cancel-btn">取消</a>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   {% endif %}*/
/*             <div class="file-chooser-uploader-label">选择你要上传的视频文件：</div>*/
/*             <div class="file-chooser-uploader-control">*/
/*               <span id="video-choose-uploader-btn"*/
/*                 data-role="uploader-btn"*/
/*                 data-filetypes="{% if storageSetting.upload_mode == 'cloud' %}*.mp4;*.avi;*.flv;*.wmv;*.mov;*.m4v{% else %}*.mp4{% endif %}"*/
/*                 data-button-image="{{ asset('assets/img/common/swfupload-btn.png') }}"*/
/*                 data-callback="{% if storageSetting.upload_mode == 'cloud' %}{{ path('uploadfile_cloud_callback', {targetType:targetType, targetId:targetId, lazyConvert:1}) }}{% endif %}" */
/*                 data-progressbar="#video-chooser-progress"*/
/*                 data-storage-type="{{storageSetting.upload_mode}}"*/
/*                 data-get-media-info="{{path('uploadfile_cloud_get_media_info',{type:'video'})}}"*/
/*                 >*/
/*                 <a class="uploadBtn btn btn-default btn-lg">*/
/*                   上传*/
/*                 </a>*/
/*                 <div style="display:none">*/
/*                   <input data-role="fileSelected" class="filePrew" type="file" />*/
/*                 </div>*/
/*               </span>*/
/*             </div>*/
/*             <div class="progress" id="video-chooser-progress" style="display:none;">*/
/*               <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">*/
/*               </div>*/
/*             </div>*/
/* */
/*             <div class="alert alert-info">*/
/*               <ul>*/
/*                 {% if storageSetting.upload_mode == 'cloud' %}*/
/*                   <li>支持<strong>mp4, avi, flv, wmv, mov, m4v</strong>格式的视频文件上传，文件大小不能超过<strong>2 GB</strong>。</li>*/
/*                   <li>支持<strong>断点续传</strong>（仅支持HTML5浏览器）。</li>*/
/*                   <li>视频将上传到<strong>云视频服务器</strong>，上传之后会对视频进行格式转换，转换过程需要一定的时间，在这个过程中视频将无法播放。</li>*/
/*                 {% else %}*/
/*                   <li>支持<strong>mp4</strong>格式的视频文件上传，文件大小不能超过<strong>{{ upload_max_filesize() }} </strong>。MP4文件的视频编码格式，请使用AVC(H264)编码，否则浏览器无法播放。</li>*/
/*                   {#<li>#}*/
/*                     {#视频将上传到<strong>网站服务器</strong>。如需使用{{ 'EduSoho'|copyright_less }}云视频,点击<a href="http://open.edusoho.com/show/cloud/video" target="_blank">这里</a>了解详情,{{ 'EduSoho'|copyright_less }}云视频将为您提供稳定、安全、经济、便捷的视频托管服务以及优质的视频播放体验。#}*/
/*                   {#</li>#}*/
/*                 {% endif %}*/
/*               </ul>*/
/*             </div>*/
/* */
/*           </div>*/
/* */
/*         </div>*/
/* 	{% if is_plugin_installed('MaterialLib') %}*/
/*           <div class="tab-pane" id="video-chooser-disk-pane">*/
/*               <div id="file-browser-video" data-role="file-browser"*/
/*               data-base-url="{{ path('uploadfile_browser', {type:'video'}) }}" */
/*               data-default-url="{{ path('uploadfile_browser', {type:'video', source:'upload'}) }}" */
/*               data-my-sharing-contacts-url="{{ path('material_lib_my_sharing_contacts') }}"*/
/*               data-empty="暂无视频文件，请先上传。">*/
/*               	<div class="file-browser-list-container"></div>*/
/*               </div>*/
/*           </div>*/
/*         {% endif %}*/
/* */
/*         <div class="tab-pane" id="video-chooser-course-file">*/
/*             <div id="file-browser-video" data-role="course-file-browser"*/
/*             data-url="{{ path('uploadfile_browsers', {targetType:targetType, targetId:targetId, type:'video'}) }}" */
/*             data-empty="暂无视频文件，请先上传。">*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="tab-pane" id="video-chooser-import-pane">*/
/*           <div class="input-group">*/
/*             <input class="form-control" type="text" placeholder="支持优酷、土豆、腾讯、网易公开课的视频页面地址导入" data-role="import-url" >*/
/*             <span class="input-group-btn">*/
/*               <button type="button" class="btn btn-default" data-role="import" data-url="{{ path('course_manage_media_import', {id:course.id}) }}" data-loading-text="正在导入，请稍等">导入</button>*/
/*             </span>*/
/*           </div>*/
/*         </div>*/
/*         {% set magic = setting('magic') %}*/
/*         {% if magic.letv|default('') %}*/
/*           <div class="tab-pane" id="video-chooser-letv-import">*/
/*             <div class="input-group">*/
/*               <input class="form-control" type="text" placeholder="支持乐视视频源地址" data-role="import-url-letv" >*/
/*               <span class="input-group-btn">*/
/*                 <button type="button" class="btn btn-default" data-role="import" data-url="{{ path('course_manage_media_import', {id:course.id}) }}" data-loading-text="正在导入，请稍等">导入</button>*/
/*               </span>*/
/*             </div>*/
/*           </div>*/
/*         {% endif %}*/
/*       </div>*/
/*     </div>*/
/* */
/*   </div>*/
/* */
/* */
/*   <div class="file-chooser" id="audio-chooser" style="display:none;"*/
/*       data-params-url="{{ path('uploadfile_params', {storage:storageSetting.upload_mode, targetType:targetType, targetId:targetId}) }}"*/
/*       data-targetType="{{targetType}}"*/
/*       data-targetId="{{targetId}}"*/
/*   >*/
/*     <div class="file-chooser-bar"  style="display:none;">*/
/*       <span data-role="placeholder"></span>*/
/*       <button class="btn btn-link btn-sm" type="button" data-role="trigger"><i class="glyphicon glyphicon-edit"></i> 编辑</button>*/
/*     </div>*/
/* */
/*     <div class="file-chooser-main">*/
/*       <ul class="nav nav-pills nav-pills-sm mbs file-chooser-tabs">*/
/*         <li class="active"><a class="file-chooser-uploader-tab" href="#audio-chooser-upload-pane" data-toggle="tab">上传音频</a></li>*/
/*         {% if is_plugin_installed('MaterialLib') %}*/
/*         <li><a href="#audio-chooser-disk-pane" data-toggle="tab">*/
/*               从资料库中选择*/
/*         </a></li>*/
/*         {% endif %}*/
/* */
/*         <li>*/
/*           <a href="#audio-chooser-course-file" data-toggle="tab">*/
/*             从课程文件中选择*/
/*           </a>*/
/*         </li>*/
/* */
/*       </ul>*/
/*       <div class="tab-content">*/
/*         <div class="tab-pane active" id="audio-chooser-upload-pane">*/
/* */
/*           <div class="file-chooser-uploader">*/
/*             <div class="file-chooser-uploader-label">选择你要上传的音频文件：</div>*/
/*             <div class="file-chooser-uploader-control">*/
/*               <span id="audio-choose-uploader-btn" */
/*                 data-role="uploader-btn"*/
/*                 data-button-image="{{ asset('assets/img/common/swfupload-btn.png') }}"*/
/*                 data-callback="{% if storageSetting.upload_mode == 'cloud' %}{{ path('uploadfile_cloud_callback', {targetType:targetType, targetId:targetId}) }}{% endif %}" */
/*                 data-progressbar="#audio-chooser-progress"*/
/*                 data-storage-type="{{storageSetting.upload_mode}}"*/
/*                 data-get-media-info="{{path('uploadfile_cloud_get_media_info',{type:'audio'})}}"*/
/*                 >*/
/*                 <a class="uploadBtn btn btn-default btn-lg">*/
/*                   上传*/
/*                 </a>*/
/*                 <div style="display:none">*/
/*                   <input data-role="fileSelected" class="filePrew" type="file" />*/
/*                 </div>*/
/*               </span>*/
/*             </div>*/
/*             <div class="progress" id="audio-chooser-progress" style="display:none;">*/
/*               <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">*/
/*               </div>*/
/*             </div>*/
/* */
/*             <div class="alert alert-info">*/
/*               <ul>*/
/*                 <li>支持<strong>mp3</strong>格式的音频文件上传，且文件大小不能超过<strong>*/
/*                 {% if storageSetting.upload_mode == 'cloud' %}*/
/*                   500M*/
/*                 {% else %}*/
/*                   {{ upload_max_filesize() }}*/
/*                 {% endif %}*/
/*                 </strong>。</li>*/
/*                 {% if storageSetting.upload_mode == 'cloud' %}*/
/*                   <li>支持<strong>断点续传</strong>（仅支持HTML5浏览器）。</li>*/
/*                   <li>音频将上传到<strong>云服务器</strong></li>*/
/*                 {% else %}*/
/*                   <li>*/
/*                     音频将上传到<strong>网站服务器</strong>，{{ '如需使用EduSoho云视频,'|copyright_less}}点击<a href="http://open.edusoho.com/show/cloud/video" target="_blank">这里</a>了解详情。*/
/*                   </li>*/
/*                 {% endif %}*/
/*               </ul>*/
/*             </div>*/
/*           </div>*/
/* */
/*         </div>*/
/* 	{% if is_plugin_installed('MaterialLib') %}*/
/*           <div class="tab-pane" id="audio-chooser-disk-pane">*/
/*             <div id="file-browser-audio" data-role="file-browser"*/
/*             		data-base-url="{{ path('uploadfile_browser', {type:'audio'}) }}" */
/*               data-default-url="{{ path('uploadfile_browser', {type:'audio', source:'upload'}) }}" */
/*               data-my-sharing-contacts-url="{{ path('material_lib_my_sharing_contacts') }}"*/
/*               data-empty="暂无音频文件，请先上传。">*/
/*             		<div class="file-browser-list-container"></div>*/
/*             </div>*/
/*           </div>*/
/*         {% endif %}*/
/* */
/*         <div class="tab-pane" id="audio-chooser-course-file">*/
/*           <div id="file-browser-audio" data-role="course-file-browser"*/
/*           data-url="{{ path('uploadfile_browsers', {targetType:targetType, targetId:targetId, type:'audio'}) }}" data-empty="暂无音频文件，请先上传。"></div>*/
/*         </div>*/
/* */
/*       </div>*/
/*     </div>*/
/* */
/*   </div>*/
/* */
/* */
/* */
/* */
/*   <div class="file-chooser" id="ppt-chooser" style="display:none;"*/
/*     data-params-url="{{ path('uploadfile_params', {storage:storageSetting.upload_mode, targetType:targetType, targetId:targetId, convertor:'ppt', lazyConvert:1}) }}"*/
/*     data-targetType="{{targetType}}"*/
/*     data-targetId="{{targetId}}"*/
/*   >*/
/*     <div class="file-chooser-bar"  style="display:none;">*/
/*       <span data-role="placeholder"></span>*/
/*       <button class="btn btn-link btn-sm" type="button" data-role="trigger"><i class="glyphicon glyphicon-edit"></i> 编辑</button>*/
/*     </div>*/
/* */
/*     <div class="file-chooser-main">*/
/*       <ul class="nav nav-pills nav-pills-sm mbs file-chooser-tabs">*/
/*         <li class="active"><a class="file-chooser-uploader-tab" href="#ppt-chooser-upload-pane" data-toggle="tab">上传PPT</a></li>*/
/*         {% if is_plugin_installed('MaterialLib') %}*/
/*         <li><a href="#ppt-chooser-disk-pane" data-toggle="tab">*/
/*               从资料库中选择*/
/*         </a></li>*/
/*         {% endif %}*/
/* */
/*          <li>*/
/*           <a href="#ppt-chooser-course-file" data-toggle="tab">*/
/*             从课程文件中选择*/
/*           </a>*/
/*         </li>*/
/* */
/*       </ul>*/
/*       <div class="tab-content">*/
/*         <div class="tab-pane active" id="ppt-chooser-upload-pane">*/
/* */
/*           <div class="file-chooser-uploader">*/
/*             <div class="file-chooser-uploader-label">选择你要上传的PPT文件：</div>*/
/*             <div class="file-chooser-uploader-control">*/
/*               <span id="ppt-choose-uploader-btn" */
/*                 data-role="uploader-btn"*/
/*                 data-button-image="{{ asset('assets/img/common/swfupload-btn.png') }}"*/
/*                 data-callback="{% if storageSetting.upload_mode == 'cloud' %}{{ path('uploadfile_cloud_callback', {targetType:targetType, targetId:targetId,lazyConvert:1}) }}{% endif %}" */
/*                 data-storage-type="{{storageSetting.upload_mode}}"*/
/*                 data-progressbar="#ppt-chooser-progress">*/
/*                 <a class="uploadBtn btn btn-default btn-lg">*/
/*                   上传*/
/*                 </a>*/
/*                 <div style="display:none">*/
/*                   <input data-role="fileSelected" class="filePrew" type="file" />*/
/*                 </div>*/
/*               </span>*/
/*             </div>*/
/*             <div class="progress" id="ppt-chooser-progress" style="display:none;">*/
/*               <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">*/
/*               </div>*/
/*             </div>*/
/* */
/*             <div class="alert alert-info">*/
/*               <ul>*/
/*                 <li>支持<strong>ppt, pptx</strong>格式的PPT文件上传，且文件大小不能超过<strong>100 MB</strong>。</li>*/
/*                 <li>PPT将上传到<strong>云服务器</strong></li>*/
/*               </ul>*/
/*             </div>*/
/*           </div>*/
/* */
/*         </div>*/
/* 	{% if is_plugin_installed('MaterialLib') %}*/
/*           <div class="tab-pane" id="ppt-chooser-disk-pane">*/
/*             <div id="file-browser-ppt" data-role="file-browser"*/
/*             		data-base-url="{{ path('uploadfile_browser', {type:'ppt'}) }}" */
/*               data-default-url="{{ path('uploadfile_browser', {type:'ppt', source:'upload'}) }}" */
/*               data-my-sharing-contacts-url="{{ path('material_lib_my_sharing_contacts') }}"*/
/*             		data-empty="暂无PPT文件，请先上传。">*/
/*             	<div class="file-browser-list-container"></div>*/
/*             </div>*/
/*           </div>*/
/*         {% endif %}*/
/* */
/*         <div class="tab-pane" id="ppt-chooser-course-file">*/
/*             <div id="file-browser-ppt" data-role="course-file-browser"*/
/*             data-url="{{ path('uploadfile_browsers', {targetType:targetType, targetId:targetId, type:'ppt'}) }}" data-empty="暂无PPT文件，请先上传。"></div>*/
/*         </div>*/
/*         */
/*       </div>*/
/*     </div>*/
/* */
/*   </div>*/
/* */
/* */
/* */
/*  <div class="file-chooser" id="document-chooser" style="display:none;"*/
/*     data-params-url="{{ path('uploadfile_params', {storage:storageSetting.upload_mode, targetType:targetType, targetId:targetId, convertor:'document'}) }}"*/
/*     data-targetType="{{targetType}}"*/
/*     data-targetId="{{targetId}}"*/
/*   >*/
/*     <div class="file-chooser-bar"  style="display:none;">*/
/*       <span data-role="placeholder"></span>*/
/*       <button class="btn btn-link btn-sm" type="button" data-role="trigger"><i class="glyphicon glyphicon-edit"></i> 编辑</button>*/
/*     </div>*/
/* */
/*     <div class="file-chooser-main">*/
/*       <ul class="nav nav-pills nav-pills-sm mbs file-chooser-tabs">*/
/*         <li class="active"><a class="file-chooser-uploader-tab" href="#document-chooser-upload-pane" data-toggle="tab">上传文档</a></li>*/
/*         {% if is_plugin_installed('MaterialLib') %}*/
/*         <li><a href="#document-chooser-disk-pane" data-toggle="tab">*/
/*               从资料库中选择*/
/*         </a></li>*/
/*         {% endif %}*/
/* */
/*          <li>*/
/*           <a href="#document-chooser-course-file" data-toggle="tab">*/
/*             从课程文件中选择*/
/*           </a>*/
/*         </li>*/
/* */
/*       </ul>*/
/*       <div class="tab-content">*/
/*         <div class="tab-pane active" id="document-chooser-upload-pane">*/
/* */
/*           <div class="file-chooser-uploader">*/
/*             <div class="file-chooser-uploader-label">选择你要上传的文档：</div>*/
/*             <div class="file-chooser-uploader-control">*/
/*               <span id="document-choose-uploader-btn" */
/*                 data-role="uploader-btn"*/
/*                 data-button-image="{{ asset('assets/img/common/swfupload-btn.png') }}"*/
/*                 data-callback="{% if storageSetting.upload_mode == 'cloud' %}{{ path('uploadfile_cloud_callback', {targetType:targetType, targetId:targetId,lazyConvert:1}) }}{% endif %}" */
/*                 data-storage-type="{{storageSetting.upload_mode}}"*/
/*                 data-progressbar="#document-chooser-progress">*/
/*                 <a class="uploadBtn btn btn-default btn-lg">*/
/*                   上传*/
/*                 </a>*/
/*                 <div style="display:none">*/
/*                   <input data-role="fileSelected" class="filePrew" type="file" />*/
/*                 </div>*/
/*               </span>*/
/*             </div>*/
/*             <div class="progress" id="document-chooser-progress" style="display:none;">*/
/*               <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">*/
/*               </div>*/
/*             </div>*/
/* */
/*             <div class="alert alert-info">*/
/*               <ul>*/
/*                 <li>支持<strong>pdf,doc,docx</strong>格式的文档上传，且文件大小不能超过<strong>100 MB</strong>。</li>*/
/*                 <li>文档将上传到<strong>云服务器</strong></li>*/
/*               </ul>*/
/*             </div>*/
/*           </div>*/
/* */
/*         </div>*/
/*   {% if is_plugin_installed('MaterialLib') %}*/
/*           <div class="tab-pane" id="document-chooser-disk-pane">*/
/*             <div id="file-browser-document" data-role="file-browser"*/
/*                 data-base-url="{{ path('uploadfile_browser', {type:'document'}) }}" */
/*               data-default-url="{{ path('uploadfile_browser', {type:'document', source:'upload'}) }}" */
/*               data-my-sharing-contacts-url="{{ path('material_lib_my_sharing_contacts') }}"*/
/*                 data-empty="暂无文档，请先上传。">*/
/*               <div class="file-browser-list-container"></div>*/
/*             </div>*/
/*           </div>*/
/*         {% endif %}*/
/* */
/*         <div class="tab-pane" id="document-chooser-course-file">*/
/*             <div id="file-browser-document" data-role="course-file-browser"*/
/*             data-url="{{ path('uploadfile_browser', {targetType:targetType, targetId:targetId, type:'document'}) }}" data-empty="暂无文档，请先上传。"></div>*/
/*         </div>*/
/*         */
/*       </div>*/
/*     </div>*/
/* */
/*   </div>*/
/* */
/* */
/* */
/*    <div class="file-chooser" id="flash-chooser" style="display:none;"*/
/*     data-params-url="{{ path('uploadfile_params', {storage:storageSetting.upload_mode, targetType:targetType, targetId:targetId, convertor:''}) }}"*/
/*     data-targetType="{{targetType}}"*/
/*     data-targetId="{{targetId}}"*/
/*   >*/
/*     <div class="file-chooser-bar"  style="display:none;">*/
/*       <span data-role="placeholder"></span>*/
/*       <button class="btn btn-link btn-sm" type="button" data-role="trigger"><i class="glyphicon glyphicon-edit"></i> 编辑</button>*/
/*     </div>*/
/* */
/*     <div class="file-chooser-main">*/
/*       <ul class="nav nav-pills nav-pills-sm mbs file-chooser-tabs">*/
/*         <li class="active"><a class="file-chooser-uploader-tab" href="#flash-chooser-upload-pane" data-toggle="tab">上传Flash</a></li>*/
/*         {% if is_plugin_installed('MaterialLib') %}*/
/*         <li><a href="#flash-chooser-disk-pane" data-toggle="tab">*/
/*               从资料库中选择*/
/*         </a></li>*/
/*         {% endif %}*/
/* */
/*          <li>*/
/*           <a href="#flash-chooser-course-file" data-toggle="tab">*/
/*             从课程文件中选择*/
/*           </a>*/
/*         </li>*/
/* */
/*       </ul>*/
/*       <div class="tab-content">*/
/*         <div class="tab-pane active" id="flash-chooser-upload-pane">*/
/* */
/*           <div class="file-chooser-uploader">*/
/*             <div class="file-chooser-uploader-label">选择你要上传的Flash：</div>*/
/*             <div class="file-chooser-uploader-control">*/
/*               <span id="flash-choose-uploader-btn" */
/*                 data-role="uploader-btn"*/
/*                 data-button-image="{{ asset('assets/img/common/swfupload-btn.png') }}"*/
/*                 data-callback="{% if storageSetting.upload_mode == 'cloud' %}{{ path('uploadfile_cloud_callback', {targetType:targetType, targetId:targetId}) }}{% endif %}" */
/*                 data-storage-type="{{storageSetting.upload_mode}}"*/
/*                 data-progressbar="#flash-chooser-progress">*/
/*                 <a class="uploadBtn btn btn-default btn-lg">*/
/*                   上传*/
/*                 </a>*/
/*                 <div style="display:none">*/
/*                   <input data-role="fileSelected" class="filePrew" type="file" />*/
/*                 </div>*/
/*               </span>*/
/*             </div>*/
/*             <div class="progress" id="flash-chooser-progress" style="display:none;">*/
/*               <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">*/
/*               </div>*/
/*             </div>*/
/* */
/*             <div class="alert alert-info">*/
/*               <ul>*/
/*                 <li>支持<strong>swf</strong>格式的文件上传，且文件大小不能超过<strong>100 MB</strong>。</li>*/
/*                 <li>Flash将上传到<strong>云服务器</strong></li>*/
/*               </ul>*/
/*             </div>*/
/*           </div>*/
/* */
/*         </div>*/
/*   {% if is_plugin_installed('MaterialLib') %}*/
/*           <div class="tab-pane" id="flash-chooser-disk-pane">*/
/*             <div id="file-browser-flash" data-role="file-browser"*/
/*                 data-base-url="{{ path('uploadfile_browser', {type:'flash'}) }}" */
/*               data-default-url="{{ path('uploadfile_browser', {type:'flash', source:'upload'}) }}" */
/*               data-my-sharing-contacts-url="{{ path('material_lib_my_sharing_contacts') }}"*/
/*                 data-empty="暂无Flash，请先上传。">*/
/*               <div class="file-browser-list-container"></div>*/
/*             </div>*/
/*           </div>*/
/*         {% endif %}*/
/* */
/*         <div class="tab-pane" id="flash-chooser-course-file">*/
/*             <div id="file-browser-flash" data-role="course-file-browser"*/
/*             data-url="{{ path('uploadfile_browser', {targetType:targetType, targetId:targetId, type:'flash'}) }}" data-empty="暂无Flash，请先上传。"></div>*/
/*         </div>*/
/*         */
/*       </div>*/
/*     </div>*/
/* */
/*   </div>*/
/* */
/* */
/* </div>*/
