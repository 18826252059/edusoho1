<?php

/* TopxiaAdminBundle:ProductBaseFileManage:batch-upload.html.twig */
class __TwigTemplate_4c85ef892985b03d64549201004d10d319b362b1841ecda2a580e3b1373df5b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaAdminBundle:ProductBaseFileManage:batch-upload.html.twig", 1);
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
        // line 3
        $context["modal_class"] = "modal-lg";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "  ";
        if (((isset($context["targetType"]) ? $context["targetType"] : null) == "courselesson")) {
            echo " 
  \t\t上传课时文件 
  ";
        } elseif ((        // line 8
(isset($context["targetType"]) ? $context["targetType"] : null) == "coursematerial")) {
            echo " 
  \t\t上传资料文件
  ";
        } elseif ((        // line 10
(isset($context["targetType"]) ? $context["targetType"] : null) == "materiallib")) {
            // line 11
            echo "  \t\t上传素材文件
  ";
        } elseif ((        // line 12
(isset($context["targetType"]) ? $context["targetType"] : null) == "classroom")) {
            // line 13
            echo "        上传文件到班级资料库
  ";
        }
    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        // line 18
        echo "
<style type=\"text/css\">
  .filePrew {
    display: block;
    position: absolute;
    top: 10;
    left: 0;
    width: 400px;
    height: 40px;
    opacity: 0;
  }
</style>
<div>
  <div id=\"selectFiles\" 
      data-params-url=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_params", array("storage" => $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()), "targetType" => (isset($context["targetType"]) ? $context["targetType"] : null), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : null))), "html", null, true);
        echo "\"
      data-target-type=\"";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["targetType"]) ? $context["targetType"] : null), "html", null, true);
        echo "\" 
      data-target-id=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["targetId"]) ? $context["targetId"] : null), "html", null, true);
        echo "\"
      data-upload-mode=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()), "html", null, true);
        echo "\"
      data-hls-encrypted=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("developer.hls_encrypted", 1), "html", null, true);
        echo "\"
      data-callback=\"";
        // line 37
        if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()) == "cloud")) {
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_cloud_callback", array("targetType" => (isset($context["targetType"]) ? $context["targetType"] : null), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : null))), "html", null, true);
        }
        echo "\"
      data-get-video-info=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("uploadfile_cloud_get_media_info", array("type" => "video"));
        echo "\"
      data-get-audio-info=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("uploadfile_cloud_get_media_info", array("type" => "audio"));
        echo "\"
      data-file-exts=\"";
        // line 40
        echo twig_escape_filter($this->env, (isset($context["fileExts"]) ? $context["fileExts"] : null), "html", null, true);
        echo "\">
    <button 
      class=\"btn_addPic uploadBtn btn btn-default btn-lg\">
      <span>
          <i class=\"glyphicon glyphicon-plus \">
          添加待上传文件
          </i>
      </span>
    </button>
    <button id=\"btn_upload\" class=\"btn_addPic btn btn-default btn-lg\">
      <span>
          上传
      </span>
    </button>
    <input data-role='fileSelected' multiple=\"multiple\" name=\"pic\" class=\"filePrew\" type=\"file\" style=\"display:none\"/>
  </div>

  <div id=\"fileList\">
    <table style=\"margin-top:20px;\" class=\"table table-bordered table-striped table-condensed\">
      <thead>
        <tr>
          <td>文件名称</td>
          <td width=\"15%\">文件大小</td>
          <td width=\"60%\">进度</td>
        </tr>
      </thead>
      <tbody>
        
      </tbody>
    </table>
  </div>
  ";
        // line 71
        if (((((isset($context["targetType"]) ? $context["targetType"] : null) == "courselesson") || ((isset($context["targetType"]) ? $context["targetType"] : null) == "materiallib")) || ((isset($context["targetType"]) ? $context["targetType"] : null) == "classroom"))) {
            // line 72
            echo "    <div class=\"alert alert-info\">
      <ul>
        ";
            // line 74
            if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()) == "cloud")) {
                // line 75
                echo "          <li>资料库支持多种文件格式上传分享下载，单个文件大小上限<strong>2GB</strong>。</li>
          <li>视频将上传到<strong>云视频服务器</strong>，并转换为云视频为创建ES视频课时备用，如需修改云视频转码类型，请先设置下方转码类型后再进行上传视频。转换过程需要等待，转换过程中视频将无法播放。</li>
          <li>支持<strong>断点续传</strong>（仅支持HTML5浏览器）。</li>
        ";
            } else {
                // line 79
                echo "          <li>支持<strong>mp4, mp3</strong>格式的文件上传，且文件大小不能超过<strong>";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getUploadMaxFilesize(), "html", null, true);
                echo "</strong>。<br>MP4文件的视频编码格式，请使用AVC(H264)编码，否则浏览器无法播放。</li>
          <li>视频将上传到<strong>网站服务器</strong>，如需使用";
                // line 80
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->removeCopyright("EduSoho"), "html", null, true);
                echo "云视频,点击<a href=\"http://open.edusoho.com/show/cloud/video\" target=\"_blank\">这里</a>了解详情。</li>
        ";
            }
            // line 82
            echo "      </ul>
    </div>

    ";
            // line 85
            if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()) == "cloud")) {
                // line 86
                echo "    <div class=\"quality-switcher\">
      <div class=\"quality-switcher-bar\">
        视频转码类型<span class=\"text-muted quality-switcher-name\"></span> <a href=\"javascript:;\" class=\"edit-btn text-info\"><span class=\"glyphicon glyphicon-cog\"></span> 设置</a>
      </div>
      <div class=\"quality-switcher-control\">
        <div class=\"video-quality radios\">
          画质：
        ";
                // line 93
                echo $this->env->getExtension('topxia_html_twig')->radios("video_quality", array("low" => "流畅 <span class=\"text-muted\">(适合PPT讲解)</span>", "normal" => "标准 <span class=\"text-muted\">(适合屏幕录制、摄像头拍摄)</span>", "high" => "精细 <span class=\"text-muted\">(适合动态电影)</span>"), (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "video_quality", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "video_quality", array()), "low")) : ("low")));
                echo "
        </div>

        <div class=\"audio-quality radios\">
          音质：
          ";
                // line 98
                echo $this->env->getExtension('topxia_html_twig')->radios("video_audio_quality", array("low" => "流畅", "normal" => "标准", "high" => "高品"), (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "video_audio_quality", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "video_audio_quality", array()), "low")) : ("low")));
                echo "
        </div>

        <div class=\"quality-actions\">
          <a href=\"javascript:;\" class=\"btn btn-default btn-sm confrim-btn\">确定</a>
          <a href=\"javascript:;\" class=\"btn btn-link btn-sm cancel-btn\">取消</a>
        </div>
      </div>
    </div>
    ";
            }
            // line 108
            echo "  ";
        } elseif (((isset($context["targetType"]) ? $context["targetType"] : null) == "coursematerial")) {
            // line 109
            echo "    <div class=\"alert alert-info\">
      <ul>
        <li>支持常见文档、图片、音视频、压缩包文件格式。";
            // line 111
            if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()) == "local")) {
                echo "且文件大小不能超过<strong>";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getUploadMaxFilesize(), "html", null, true);
                echo "</strong>。";
            }
            echo "</li>
        ";
            // line 112
            if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()) == "cloud")) {
                // line 113
                echo "          <li>文件将上传到<strong>云服务器</strong>。</li>
          <li>支持<strong>断点续传</strong>（仅支持HTML5浏览器）。</li>
        ";
            } else {
                // line 116
                echo "          <li>视频将上传到<strong>网站服务器</strong>，如需使用";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->removeCopyright("EduSoho"), "html", null, true);
                echo "云视频,点击<a href=\"http://open.edusoho.com/show/cloud/video\" target=\"_blank\">这里</a>了解详情。</li>
        ";
            }
            // line 118
            echo "      </ul>
    </div>
  ";
        }
        // line 121
        echo "</div>
<script>app.load('course-manage-file/batch-upload-course-files')</script>
";
    }

    // line 124
    public function block_footer($context, array $blocks = array())
    {
        // line 125
        echo "    <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">关闭</button>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:ProductBaseFileManage:batch-upload.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 125,  247 => 124,  241 => 121,  236 => 118,  230 => 116,  225 => 113,  223 => 112,  215 => 111,  211 => 109,  208 => 108,  195 => 98,  187 => 93,  178 => 86,  176 => 85,  171 => 82,  166 => 80,  161 => 79,  155 => 75,  153 => 74,  149 => 72,  147 => 71,  113 => 40,  109 => 39,  105 => 38,  99 => 37,  95 => 36,  91 => 35,  87 => 34,  83 => 33,  79 => 32,  63 => 18,  60 => 17,  54 => 13,  52 => 12,  49 => 11,  47 => 10,  42 => 8,  36 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% set modal_class = 'modal-lg' %}*/
/* */
/* {% block title %}*/
/*   {% if targetType == 'courselesson' %} */
/*   		上传课时文件 */
/*   {% elseif targetType == 'coursematerial' %} */
/*   		上传资料文件*/
/*   {% elseif targetType == 'materiallib' %}*/
/*   		上传素材文件*/
/*   {% elseif targetType == 'classroom' %}*/
/*         上传文件到班级资料库*/
/*   {% endif %}*/
/* {% endblock %}*/
/*   */
/* {% block body %}*/
/* */
/* <style type="text/css">*/
/*   .filePrew {*/
/*     display: block;*/
/*     position: absolute;*/
/*     top: 10;*/
/*     left: 0;*/
/*     width: 400px;*/
/*     height: 40px;*/
/*     opacity: 0;*/
/*   }*/
/* </style>*/
/* <div>*/
/*   <div id="selectFiles" */
/*       data-params-url="{{ path('uploadfile_params', {storage:storageSetting.upload_mode, targetType:targetType, targetId:targetId}) }}"*/
/*       data-target-type="{{targetType}}" */
/*       data-target-id="{{targetId}}"*/
/*       data-upload-mode="{{ storageSetting.upload_mode }}"*/
/*       data-hls-encrypted="{{ setting('developer.hls_encrypted', 1) }}"*/
/*       data-callback="{% if storageSetting.upload_mode == 'cloud' %}{{ path('uploadfile_cloud_callback', {targetType:targetType, targetId:targetId}) }}{% endif %}"*/
/*       data-get-video-info="{{path('uploadfile_cloud_get_media_info',{type:'video'})}}"*/
/*       data-get-audio-info="{{path('uploadfile_cloud_get_media_info',{type:'audio'})}}"*/
/*       data-file-exts="{{fileExts}}">*/
/*     <button */
/*       class="btn_addPic uploadBtn btn btn-default btn-lg">*/
/*       <span>*/
/*           <i class="glyphicon glyphicon-plus ">*/
/*           添加待上传文件*/
/*           </i>*/
/*       </span>*/
/*     </button>*/
/*     <button id="btn_upload" class="btn_addPic btn btn-default btn-lg">*/
/*       <span>*/
/*           上传*/
/*       </span>*/
/*     </button>*/
/*     <input data-role='fileSelected' multiple="multiple" name="pic" class="filePrew" type="file" style="display:none"/>*/
/*   </div>*/
/* */
/*   <div id="fileList">*/
/*     <table style="margin-top:20px;" class="table table-bordered table-striped table-condensed">*/
/*       <thead>*/
/*         <tr>*/
/*           <td>文件名称</td>*/
/*           <td width="15%">文件大小</td>*/
/*           <td width="60%">进度</td>*/
/*         </tr>*/
/*       </thead>*/
/*       <tbody>*/
/*         */
/*       </tbody>*/
/*     </table>*/
/*   </div>*/
/*   {% if targetType == 'courselesson' or  targetType == 'materiallib' or  targetType == 'classroom'%}*/
/*     <div class="alert alert-info">*/
/*       <ul>*/
/*         {% if storageSetting.upload_mode == 'cloud' %}*/
/*           <li>资料库支持多种文件格式上传分享下载，单个文件大小上限<strong>2GB</strong>。</li>*/
/*           <li>视频将上传到<strong>云视频服务器</strong>，并转换为云视频为创建ES视频课时备用，如需修改云视频转码类型，请先设置下方转码类型后再进行上传视频。转换过程需要等待，转换过程中视频将无法播放。</li>*/
/*           <li>支持<strong>断点续传</strong>（仅支持HTML5浏览器）。</li>*/
/*         {% else %}*/
/*           <li>支持<strong>mp4, mp3</strong>格式的文件上传，且文件大小不能超过<strong>{{ upload_max_filesize() }}</strong>。<br>MP4文件的视频编码格式，请使用AVC(H264)编码，否则浏览器无法播放。</li>*/
/*           <li>视频将上传到<strong>网站服务器</strong>，如需使用{{ 'EduSoho'|copyright_less }}云视频,点击<a href="http://open.edusoho.com/show/cloud/video" target="_blank">这里</a>了解详情。</li>*/
/*         {% endif %}*/
/*       </ul>*/
/*     </div>*/
/* */
/*     {% if storageSetting.upload_mode == 'cloud' %}*/
/*     <div class="quality-switcher">*/
/*       <div class="quality-switcher-bar">*/
/*         视频转码类型<span class="text-muted quality-switcher-name"></span> <a href="javascript:;" class="edit-btn text-info"><span class="glyphicon glyphicon-cog"></span> 设置</a>*/
/*       </div>*/
/*       <div class="quality-switcher-control">*/
/*         <div class="video-quality radios">*/
/*           画质：*/
/*         {{ radios('video_quality', {'low':'流畅 <span class="text-muted">(适合PPT讲解)</span>', 'normal':'标准 <span class="text-muted">(适合屏幕录制、摄像头拍摄)</span>', 'high': '精细 <span class="text-muted">(适合动态电影)</span>'}, storageSetting.video_quality|default('low')) }}*/
/*         </div>*/
/* */
/*         <div class="audio-quality radios">*/
/*           音质：*/
/*           {{ radios('video_audio_quality', {'low':'流畅', 'normal':'标准', 'high': '高品'}, storageSetting.video_audio_quality|default('low')) }}*/
/*         </div>*/
/* */
/*         <div class="quality-actions">*/
/*           <a href="javascript:;" class="btn btn-default btn-sm confrim-btn">确定</a>*/
/*           <a href="javascript:;" class="btn btn-link btn-sm cancel-btn">取消</a>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*     {% endif %}*/
/*   {% elseif targetType == 'coursematerial' %}*/
/*     <div class="alert alert-info">*/
/*       <ul>*/
/*         <li>支持常见文档、图片、音视频、压缩包文件格式。{% if storageSetting.upload_mode == 'local' %}且文件大小不能超过<strong>{{ upload_max_filesize() }}</strong>。{% endif %}</li>*/
/*         {% if storageSetting.upload_mode == 'cloud' %}*/
/*           <li>文件将上传到<strong>云服务器</strong>。</li>*/
/*           <li>支持<strong>断点续传</strong>（仅支持HTML5浏览器）。</li>*/
/*         {% else %}*/
/*           <li>视频将上传到<strong>网站服务器</strong>，如需使用{{ 'EduSoho'|copyright_less }}云视频,点击<a href="http://open.edusoho.com/show/cloud/video" target="_blank">这里</a>了解详情。</li>*/
/*         {% endif %}*/
/*       </ul>*/
/*     </div>*/
/*   {% endif %}*/
/* </div>*/
/* <script>app.load('course-manage-file/batch-upload-course-files')</script>*/
/* {% endblock %}*/
/* {% block footer %}*/
/*     <button type="button" class="btn btn-primary" data-dismiss="modal">关闭</button>*/
/* {% endblock %}*/
/* */
/* */
