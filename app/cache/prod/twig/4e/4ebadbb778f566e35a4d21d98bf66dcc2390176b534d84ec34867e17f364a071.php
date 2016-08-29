<?php

/* TopxiaWebBundle:CourseMaterialManage:file-chooser.html.twig */
class __TwigTemplate_ca045c368e47129900c828406dd76a471549b76e8cbf15e9083a24d7fed2d504 extends Twig_Template
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
        echo "<div class=\"file-chooser\">
  <div class=\"file-chooser-bar\" style=\"display:none;\">
    <span data-role=\"placeholder\"></span>
    <button class=\"btn btn-link btn-sm\" type=\"button\" data-role=\"trigger\"><i class=\"glyphicon glyphicon-edit\"></i> 编辑</button>
  </div>

  <div class=\"file-chooser-main\">
    <ul class=\"nav nav-pills nav-pills-sm mbs file-chooser-tabs\">
      <li><a class=\"file-chooser-uploader-tab\" href=\"#file-chooser-upload-pane\" data-toggle=\"tab\">上传文件</a></li>
      ";
        // line 10
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("MaterialLib")) {
            // line 11
            echo "        <li><a href=\"#file-chooser-browser-pane\" data-toggle=\"tab\">从资料库中选择</a></li>
      ";
        }
        // line 13
        echo "      <li><a href=\"#file-chooser-course-pane\" data-toggle=\"tab\">从课程文件中选择</a></li>
      <li><a class=\"file-chooser-link-tab\" href=\"#file-chooser-link-pane\" data-toggle=\"tab\">网络链接</a></li>
    </ul>
    <div class=\"tab-content\">
      <div class=\"tab-pane\" id=\"file-chooser-upload-pane\">

        <div class=\"file-chooser-uploader\">
          <div class=\"file-chooser-uploader-label\">选择你要上传的文件：</div>
          <div class=\"file-chooser-uploader-control\">
            <button 
              id=\"file-chooser-uploader-btn\"
              type=\"button\"
              class=\"btn btn-default btn-sm\"
              data-role=\"uploader-btn\"
              data-upload-url=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_upload", array("targetType" => (isset($context["targetType"]) ? $context["targetType"] : null), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : null))), "html", null, true);
        echo "\"
              data-params-url=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_params", array("targetType" => (isset($context["targetType"]) ? $context["targetType"] : null), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : null), "storage" => $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()))), "html", null, true);
        echo "\"
              ";
        // line 29
        if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()) == "cloud")) {
            // line 30
            echo "                data-callback=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_cloud_callback", array("targetType" => (isset($context["targetType"]) ? $context["targetType"] : null), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : null))), "html", null, true);
            echo "\"
              ";
        }
        // line 32
        echo "              ";
        if (((array_key_exists("uploadSettings", $context)) ? (_twig_default_filter((isset($context["uploadSettings"]) ? $context["uploadSettings"] : null), null)) : (null))) {
            // line 33
            echo "                data-upload-settings=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["uploadSettings"]) ? $context["uploadSettings"] : null)), "html", null, true);
            echo "\"
              ";
        }
        // line 35
        echo "            >上传</button>
          </div>
          <div class=\"progress\" data-role=\"progress\" style=\"display:none;\">
            <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 0%;\"></div>
          </div>

          <div class=\"alert alert-info\">
            <ul>
              <li>支持常见文档、图片、音视频、压缩包文件格式。</li>
              ";
        // line 44
        if (($this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()) == "cloud")) {
            // line 45
            echo "                <li>文件将上传到<strong>云服务器</strong></li>
              ";
        } else {
            // line 47
            echo "                <li>视频将上传到<strong>网站服务器</strong>，如需使用";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->removeCopyright("EduSoho"), "html", null, true);
            echo "云视频,点击<a href=\"http://open.edusoho.com/show/cloud/video\" target=\"_blank\">这里</a>了解详情。</li>
              ";
        }
        // line 49
        echo "            </ul>
          </div>

        </div>

      </div>
      ";
        // line 55
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("MaterialLib")) {
            // line 56
            echo "        <div class=\"tab-pane\" id=\"file-chooser-browser-pane\">
            <div id=\"file-browser\" data-role=\"file-browser\"
              data-base-url=\"";
            // line 58
            echo $this->env->getExtension('routing')->getPath("uploadfile_browser");
            echo "\" 
              data-default-url=\"";
            // line 59
            echo $this->env->getExtension('routing')->getPath("uploadfile_browser", array("source" => "upload"));
            echo "\" 
              data-my-sharing-contacts-url=\"";
            // line 60
            echo $this->env->getExtension('routing')->getPath("material_lib_my_sharing_contacts");
            echo "\"
             data-empty=\"暂无文件，请先上传。\">
              <div class=\"file-browser-list-container\"></div>
            </div>
        </div>
      ";
        }
        // line 66
        echo "
      <div class=\"tab-pane\" id=\"file-chooser-course-pane\">
          <div id=\"file-browser\" data-role=\"course-file-browser\"
            data-url=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("uploadfile_browsers", array("targetType" => (isset($context["targetType"]) ? $context["targetType"] : null), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : null))), "html", null, true);
        echo "\" 
            data-empty=\"暂无文件，请先上传。\">
          </div>
      </div>

      <div class=\"tab-pane\" id=\"file-chooser-link-pane\">

        <div class=\"form-group\" style=\"margin-bottom:0px;\">
          <div class=\"col-md-12 controls\">
            <input type=\"text\" class=\"form-control\" name=\"link\" placeholder=\"资料链接地址\">
            <div class=\"help-block\"></div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseMaterialManage:file-chooser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 69,  131 => 66,  122 => 60,  118 => 59,  114 => 58,  110 => 56,  108 => 55,  100 => 49,  94 => 47,  90 => 45,  88 => 44,  77 => 35,  71 => 33,  68 => 32,  62 => 30,  60 => 29,  56 => 28,  52 => 27,  36 => 13,  32 => 11,  30 => 10,  19 => 1,);
    }
}
/* <div class="file-chooser">*/
/*   <div class="file-chooser-bar" style="display:none;">*/
/*     <span data-role="placeholder"></span>*/
/*     <button class="btn btn-link btn-sm" type="button" data-role="trigger"><i class="glyphicon glyphicon-edit"></i> 编辑</button>*/
/*   </div>*/
/* */
/*   <div class="file-chooser-main">*/
/*     <ul class="nav nav-pills nav-pills-sm mbs file-chooser-tabs">*/
/*       <li><a class="file-chooser-uploader-tab" href="#file-chooser-upload-pane" data-toggle="tab">上传文件</a></li>*/
/*       {% if is_plugin_installed('MaterialLib') %}*/
/*         <li><a href="#file-chooser-browser-pane" data-toggle="tab">从资料库中选择</a></li>*/
/*       {% endif %}*/
/*       <li><a href="#file-chooser-course-pane" data-toggle="tab">从课程文件中选择</a></li>*/
/*       <li><a class="file-chooser-link-tab" href="#file-chooser-link-pane" data-toggle="tab">网络链接</a></li>*/
/*     </ul>*/
/*     <div class="tab-content">*/
/*       <div class="tab-pane" id="file-chooser-upload-pane">*/
/* */
/*         <div class="file-chooser-uploader">*/
/*           <div class="file-chooser-uploader-label">选择你要上传的文件：</div>*/
/*           <div class="file-chooser-uploader-control">*/
/*             <button */
/*               id="file-chooser-uploader-btn"*/
/*               type="button"*/
/*               class="btn btn-default btn-sm"*/
/*               data-role="uploader-btn"*/
/*               data-upload-url="{{ path('uploadfile_upload', {targetType:targetType, targetId:targetId}) }}"*/
/*               data-params-url="{{ path('uploadfile_params', {targetType:targetType, targetId:targetId, storage:storageSetting.upload_mode}) }}"*/
/*               {% if storageSetting.upload_mode == 'cloud' %}*/
/*                 data-callback="{{ path('uploadfile_cloud_callback', {targetType:targetType, targetId:targetId}) }}"*/
/*               {% endif %}*/
/*               {% if uploadSettings|default(null) %}*/
/*                 data-upload-settings="{{ uploadSettings|json_encode }}"*/
/*               {% endif %}*/
/*             >上传</button>*/
/*           </div>*/
/*           <div class="progress" data-role="progress" style="display:none;">*/
/*             <div class="progress-bar" role="progressbar" style="width: 0%;"></div>*/
/*           </div>*/
/* */
/*           <div class="alert alert-info">*/
/*             <ul>*/
/*               <li>支持常见文档、图片、音视频、压缩包文件格式。</li>*/
/*               {% if storageSetting.upload_mode == 'cloud' %}*/
/*                 <li>文件将上传到<strong>云服务器</strong></li>*/
/*               {% else %}*/
/*                 <li>视频将上传到<strong>网站服务器</strong>，如需使用{{ 'EduSoho'|copyright_less }}云视频,点击<a href="http://open.edusoho.com/show/cloud/video" target="_blank">这里</a>了解详情。</li>*/
/*               {% endif %}*/
/*             </ul>*/
/*           </div>*/
/* */
/*         </div>*/
/* */
/*       </div>*/
/*       {% if is_plugin_installed('MaterialLib') %}*/
/*         <div class="tab-pane" id="file-chooser-browser-pane">*/
/*             <div id="file-browser" data-role="file-browser"*/
/*               data-base-url="{{ path('uploadfile_browser') }}" */
/*               data-default-url="{{ path('uploadfile_browser', {source:'upload'}) }}" */
/*               data-my-sharing-contacts-url="{{ path('material_lib_my_sharing_contacts') }}"*/
/*              data-empty="暂无文件，请先上传。">*/
/*               <div class="file-browser-list-container"></div>*/
/*             </div>*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*       <div class="tab-pane" id="file-chooser-course-pane">*/
/*           <div id="file-browser" data-role="course-file-browser"*/
/*             data-url="{{ path('uploadfile_browsers', {targetType:targetType, targetId:targetId}) }}" */
/*             data-empty="暂无文件，请先上传。">*/
/*           </div>*/
/*       </div>*/
/* */
/*       <div class="tab-pane" id="file-chooser-link-pane">*/
/* */
/*         <div class="form-group" style="margin-bottom:0px;">*/
/*           <div class="col-md-12 controls">*/
/*             <input type="text" class="form-control" name="link" placeholder="资料链接地址">*/
/*             <div class="help-block"></div>*/
/*           </div>*/
/*         </div>*/
/* */
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
