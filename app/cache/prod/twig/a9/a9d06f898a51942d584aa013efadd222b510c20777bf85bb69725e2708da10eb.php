<?php

/* TopxiaAdminBundle:ProductBaseFileManage:modal-upload-course-files.html.twig */
class __TwigTemplate_18335879c54e41ac4a147424846513fdb1693e52f49d5170aad87aee821ab652 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaAdminBundle:ProductBaseFileManage:modal-upload-course-files.html.twig", 1);
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
        echo "   上传基地图片
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "
<style>
  .plupload_filelist_footer {
    height: 40px;
    line-height: 20px;
  }


</style>

\t<div id=\"file-uploader-container\"
    class=\"mbl\"
    data-target-type=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["targetType"]) ? $context["targetType"] : null), "html", null, true);
        echo "\"
    data-upload-mode=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()), "html", null, true);
        echo "\"
    data-hls-encrypted=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("developer.hls_encrypted", 1), "html", null, true);
        echo "\"

    >

     <div
      id=\"file-chooser-uploader-div\"
      data-role=\"uploader-div\"
      data-upload-url=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_upload", array("targetType" => (isset($context["targetType"]) ? $context["targetType"] : null), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : null))), "html", null, true);
        echo "\"
      data-params-url=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_params", array("storage" => $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()), "targetType" => (isset($context["targetType"]) ? $context["targetType"] : null), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : null))), "html", null, true);
        echo "\"
      ";
        // line 33
        if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()) == "cloud")) {
            // line 34
            echo "        data-callback=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_cloud_callback", array("targetType" => (isset($context["targetType"]) ? $context["targetType"] : null), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : null), "lazyConvert" => 1)), "html", null, true);
            echo "\"
      ";
        }
        // line 36
        echo "     ></div>

\t</div>

    <div class=\"alert alert-info\">
      <ul>
          <li>支持<strong>*.png,*.jpg,*.jpeg,*.gif,*.png</strong>格式的文件上传</li>
          ";
        // line 44
        echo "
      </ul>
    </div>

    ";
        // line 48
        if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()) == "cloud")) {
            // line 49
            echo "    <div class=\"quality-switcher\">
      <div class=\"quality-switcher-bar\">
        视频转码类型<span class=\"text-muted quality-switcher-name\"></span> <a href=\"javascript:;\" class=\"edit-btn text-info\"><span class=\"glyphicon glyphicon-cog\"></span> 设置</a>
      </div>
      <div class=\"quality-switcher-control\">
        <div class=\"video-quality radios\">
          画质：
        ";
            // line 56
            echo $this->env->getExtension('topxia_html_twig')->radios("video_quality", array("low" => "流畅 <span class=\"text-muted\">(适合PPT讲解)</span>", "normal" => "标准 <span class=\"text-muted\">(适合屏幕录制、摄像头拍摄)</span>", "high" => "精细 <span class=\"text-muted\">(适合动态电影)</span>"), (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "video_quality", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "video_quality", array()), "low")) : ("low")));
            echo "
        </div>

        <div class=\"audio-quality radios\">
          音质：
          ";
            // line 61
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
        // line 71
        echo "
  <script>app.load('course-manage-file/upload-course-files')</script>

";
    }

    // line 76
    public function block_footer($context, array $blocks = array())
    {
        // line 77
        echo "  <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">关闭</button>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:ProductBaseFileManage:modal-upload-course-files.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 77,  146 => 76,  139 => 71,  126 => 61,  118 => 56,  109 => 49,  107 => 48,  101 => 44,  92 => 36,  86 => 34,  84 => 33,  80 => 32,  76 => 31,  66 => 24,  62 => 23,  58 => 22,  44 => 10,  41 => 9,  36 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% set modal_class = 'modal-lg' %}*/
/* */
/* {% block title %}*/
/*    上传基地图片*/
/* {% endblock %}*/
/* 	*/
/* {% block body %}*/
/* */
/* <style>*/
/*   .plupload_filelist_footer {*/
/*     height: 40px;*/
/*     line-height: 20px;*/
/*   }*/
/* */
/* */
/* </style>*/
/* */
/* 	<div id="file-uploader-container"*/
/*     class="mbl"*/
/*     data-target-type="{{targetType}}"*/
/*     data-upload-mode="{{ storageSetting.upload_mode }}"*/
/*     data-hls-encrypted="{{ setting('developer.hls_encrypted', 1) }}"*/
/* */
/*     >*/
/* */
/*      <div*/
/*       id="file-chooser-uploader-div"*/
/*       data-role="uploader-div"*/
/*       data-upload-url="{{ path('uploadfile_upload', {targetType:targetType, targetId:targetId}) }}"*/
/*       data-params-url="{{ path('uploadfile_params', {storage:storageSetting.upload_mode, targetType:targetType, targetId:targetId}) }}"*/
/*       {% if storageSetting.upload_mode == 'cloud' %}*/
/*         data-callback="{{ path('uploadfile_cloud_callback', {targetType:targetType, targetId:targetId, lazyConvert:1}) }}"*/
/*       {% endif %}*/
/*      ></div>*/
/* */
/* 	</div>*/
/* */
/*     <div class="alert alert-info">*/
/*       <ul>*/
/*           <li>支持<strong>*.png,*.jpg,*.jpeg,*.gif,*.png</strong>格式的文件上传</li>*/
/*           {#<li>视频将上传到<strong>云服务器</strong>，上传之后会对视频进行格式转换，转换过程需要一定的时间，在这个过程中视频将无法播放。</li>#}*/
/* */
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
/* */
/*   <script>app.load('course-manage-file/upload-course-files')</script>*/
/* */
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/*   <button type="button" class="btn btn-primary" data-dismiss="modal">关闭</button>*/
/* {% endblock %}*/
