<?php

/* TopxiaAdminBundle:System:course-setting.html.twig */
class __TwigTemplate_c58a5d079c5a9fe01a6a34c35074342853deff540788265441f060ae2ec6668f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:System:course-setting.html.twig", 1);
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
        $context["menu"] = "admin_setting_course";
        // line 4
        $context["script_controller"] = "setting/course";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "

";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"form-horizontal\" method=\"post\" id=\"course-form\" novalidate>

  <fieldset>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >给新";
        // line 16
        if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
        } else {
            echo "学员";
        }
        echo "发送欢迎私信</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 19
        echo $this->env->getExtension('topxia_html_twig')->radios("welcome_message_enabled", array(1 => "开启", 0 => "关闭"), $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "welcome_message_enabled", array()));
        echo "
      <p class=\"help-block\">开启后，新";
        // line 20
        if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
        } else {
            echo "学员";
        }
        echo "加入课程后，会收到教师的欢迎私信</p>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label for=\"welcome_message_body\">欢迎私信内容</label>
      </div>
      <div class=\"controls col-md-8\">
        <textarea id=\"welcome_message_body\" name=\"welcome_message_body\" class=\"form-control\" rows=\"5\">";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "welcome_message_body", array()), "html", null, true);
        echo "</textarea>
        <div class=\"help-block\">
          ";
        // line 37
        echo "
          <div>变量说明：</div>
          <ul>
            <li>{{nickname}} 为接收方用户用户名</li>
            <li>{{course}} 为课程名称</li>
          </ul>
          ";
        echo "
        </div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >允许教师设置课程价格</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 47
        echo $this->env->getExtension('topxia_html_twig')->radios("teacher_modify_price", array(1 => "是", 0 => "否"), $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "teacher_modify_price", array()));
        echo "
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >允许教师查询课程订单</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 56
        echo $this->env->getExtension('topxia_html_twig')->radios("teacher_search_order", array(1 => "是", 0 => "否"), $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "teacher_search_order", array()));
        echo "
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >允许教师添加/移除";
        // line 62
        if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
        } else {
            echo "学员";
        }
        echo "</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 65
        echo $this->env->getExtension('topxia_html_twig')->radios("teacher_manage_student", array(1 => "是", 0 => "否"), $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "teacher_manage_student", array()));
        echo "
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >允许教师导出";
        // line 71
        if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
        } else {
            echo "学员";
        }
        echo "资料</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 74
        echo $this->env->getExtension('topxia_html_twig')->radios("teacher_export_student", array(1 => "是", 0 => "否"), $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "teacher_export_student", array()));
        echo "
      </div>
    </div>
    ";
        // line 77
        $context["smsSetting"] = $this->env->getExtension('topxia_web_twig')->getSetting("cloud_sms");
        // line 78
        echo "    ";
        if (((($this->getAttribute((isset($context["smsSetting"]) ? $context["smsSetting"] : null), "sms_enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["smsSetting"]) ? $context["smsSetting"] : null), "sms_enabled", array()), 0)) : (0)) && (((($this->getAttribute((isset($context["smsSetting"]) ? $context["smsSetting"] : null), "sms_normal_lesson_publish", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["smsSetting"]) ? $context["smsSetting"] : null), "sms_normal_lesson_publish", array()), "off")) : ("off")) == "on") || ((($this->getAttribute((isset($context["smsSetting"]) ? $context["smsSetting"] : null), "sms_live_lesson_publish", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["smsSetting"]) ? $context["smsSetting"] : null), "sms_live_lesson_publish", array()), "off")) : ("off")) == "on")))) {
            // line 79
            echo "    ";
        }
        // line 80
        echo "

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >允许";
        // line 84
        if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
        } else {
            echo "学员";
        }
        echo "下载课时的音视频</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 87
        echo $this->env->getExtension('topxia_html_twig')->radios("student_download_media", array(0 => "不允许", 1 => "允许"), $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "student_download_media", array()));
        echo "
        <div class=\"help-block\">开启此项设置后，";
        // line 88
        if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
        } else {
            echo "学员";
        }
        echo "可在课时学习界面侧栏的\"资料\"面板中下载。</div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >课程列表页默认排序</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 97
        echo $this->env->getExtension('topxia_html_twig')->radios("explore_default_orderBy", array("latest" => "最新", "studentNum" => "最热", "recommendedSeq" => "推荐"), $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "explore_default_orderBy", array()));
        echo "
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label>课程详情页显示相关课程</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 106
        echo $this->env->getExtension('topxia_html_twig')->radios("relatedCourses", array(1 => "开启", 0 => "关闭"), $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "relatedCourses", array()));
        echo "
        <div class=\"help-block\">根据课程的标签，显示相关课程</div>
      </div>
    </div>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label>免费课时允许未登录用户观看</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 115
        echo $this->env->getExtension('topxia_html_twig')->radios("allowAnonymousPreview", array(1 => "允许", 0 => "不允许"), $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "allowAnonymousPreview", array()));
        echo "
        <div class=\"help-block\">如果允许此项设置,未登录用户（游客）可观看免费课时</div>
      </div>
    </div>

     <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label>图文、文档课时防复制</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 125
        echo $this->env->getExtension('topxia_html_twig')->radios("copy_enabled", array(1 => "开启", 0 => "关闭"), $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "copy_enabled", array()));
        echo "
        <div class=\"help-block\"></div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label>试卷防复制</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 135
        echo $this->env->getExtension('topxia_html_twig')->radios("testpaperCopy_enabled", array(1 => "开启", 0 => "关闭"), $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "testpaperCopy_enabled", array()));
        echo "
        <div class=\"help-block\"></div>
      </div>
    </div>


    <div class=\"form-group\">
      <label class=\"col-md-3 control-label\">课程中允许显示";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("default.user_name", "学员"), "html", null, true);
        echo "人数</label>
      <div class=\"col-md-8 controls radios\">
        ";
        // line 144
        echo $this->env->getExtension('topxia_html_twig')->radios("show_student_num_enabled", array("1" => "开启", "0" => "关闭"), (($this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "show_student_num_enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "show_student_num_enabled", array()), "1")) : ("1")));
        echo "
      </div>
    </div>

  </fieldset>
  <fieldset>
      <legend>名称设置</legend>

        <div class=\"form-group\">
          <div class=\"col-md-3 control-label\">
            <label>设置章节名称</label>
          </div>
          <div class=\"controls col-md-8 radios\">
            ";
        // line 157
        echo $this->env->getExtension('topxia_html_twig')->radios("custom_chapter_enabled", array(1 => "开启", 0 => "关闭"), $this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "custom_chapter_enabled", array()));
        echo "
            <div class=\"help-block\">
              开启后，在课时管理中添加章,节时，系统会自动生成按如下设置的章节名称。</div>
          </div>
        </div>

      <div id=\"show_course_chapter_name\"  style=\"display: ";
        // line 163
        if ($this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "custom_chapter_enabled", array())) {
            echo " block ";
        } else {
            echo " none ";
        }
        echo ";\">
        <div class=\"form-group\">
          <div class=\"col-md-3 control-label\">
              <label for=\"chapter_name\">课程章名称</label>
          </div>
          <div class=\"controls col-md-4\">
            <input  type=\"text\" id=\"chapter_name\" name=\"chapter_name\" class=\"form-control\" ";
        // line 169
        if ($this->getAttribute((isset($context["defaultSetting"]) ? $context["defaultSetting"] : null), "chapter_name", array())) {
            echo "value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["defaultSetting"]) ? $context["defaultSetting"] : null), "chapter_name", array()), "html", null, true);
            echo "\" ";
        } else {
            echo " value=\"章\" ";
        }
        echo ">
          </div>
        </div>

        <div class=\"row form-group\">
          <div class=\"col-md-3 control-label\">
              <label for=\"part_name\">课程节名称</label>
          </div>
          <div class=\"controls col-md-4\">
            <input  type=\"text\" id=\"part_name\" name=\"part_name\" class=\"form-control\" ";
        // line 178
        if ($this->getAttribute((isset($context["defaultSetting"]) ? $context["defaultSetting"] : null), "part_name", array())) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["defaultSetting"]) ? $context["defaultSetting"] : null), "part_name", array()), "html", null, true);
            echo "\" ";
        } else {
            echo " value=\"节\" ";
        }
        echo ">
          </div>
        </div>
      </div>
    <div class=\"alert alert-info deduction text-center\">
    <p><strong>
    注：修改网校字段后，站内相关字段名称都会相应修改为已保存的名称
    </strong></p>
    </div>

  </fieldset>

  <div class=\"form-group\">
    <div class=\"controls col-md-offset-3 col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">提交</button>
    </div>
  </div>
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:course-setting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  351 => 195,  325 => 178,  307 => 169,  294 => 163,  285 => 157,  269 => 144,  264 => 142,  254 => 135,  241 => 125,  228 => 115,  216 => 106,  204 => 97,  188 => 88,  184 => 87,  174 => 84,  168 => 80,  165 => 79,  162 => 78,  160 => 77,  154 => 74,  144 => 71,  135 => 65,  125 => 62,  116 => 56,  104 => 47,  85 => 37,  80 => 29,  64 => 20,  60 => 19,  50 => 16,  40 => 9,  36 => 7,  33 => 6,  29 => 1,  27 => 4,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set menu = 'admin_setting_course' %}*/
/* {% set script_controller = 'setting/course' %}*/
/* */
/* {% block main %}*/
/* */
/* */
/* {{ web_macro.flash_messages() }}*/
/* */
/* <form class="form-horizontal" method="post" id="course-form" novalidate>*/
/* */
/*   <fieldset>*/
/*     <div class="form-group">*/
/*       <div class="col-md-3 control-label">*/
/*         <label >给新{% if setting('default.user_name') %}{{setting('default.user_name')|default('学员')}}{% else %}学员{% endif %}发送欢迎私信</label>*/
/*       </div>*/
/*       <div class="controls col-md-8 radios">*/
/*         {{ radios('welcome_message_enabled', {1:'开启', 0:'关闭'}, courseSetting.welcome_message_enabled) }}*/
/*       <p class="help-block">开启后，新{% if setting('default.user_name') %}{{setting('default.user_name')|default('学员')}}{% else %}学员{% endif %}加入课程后，会收到教师的欢迎私信</p>*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*       <div class="col-md-3 control-label">*/
/*         <label for="welcome_message_body">欢迎私信内容</label>*/
/*       </div>*/
/*       <div class="controls col-md-8">*/
/*         <textarea id="welcome_message_body" name="welcome_message_body" class="form-control" rows="5">{{ courseSetting.welcome_message_body }}</textarea>*/
/*         <div class="help-block">*/
/*           {% verbatim %}*/
/*           <div>变量说明：</div>*/
/*           <ul>*/
/*             <li>{{nickname}} 为接收方用户用户名</li>*/
/*             <li>{{course}} 为课程名称</li>*/
/*           </ul>*/
/*           {% endverbatim %}*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*       <div class="col-md-3 control-label">*/
/*         <label >允许教师设置课程价格</label>*/
/*       </div>*/
/*       <div class="controls col-md-8 radios">*/
/*         {{ radios('teacher_modify_price', {1:'是', 0:'否'}, courseSetting.teacher_modify_price) }}*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*       <div class="col-md-3 control-label">*/
/*         <label >允许教师查询课程订单</label>*/
/*       </div>*/
/*       <div class="controls col-md-8 radios">*/
/*         {{ radios('teacher_search_order', {1:'是', 0:'否'}, courseSetting.teacher_search_order) }}*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*       <div class="col-md-3 control-label">*/
/*         <label >允许教师添加/移除{% if setting('default.user_name') %}{{setting('default.user_name')|default('学员')}}{% else %}学员{% endif %}</label>*/
/*       </div>*/
/*       <div class="controls col-md-8 radios">*/
/*         {{ radios('teacher_manage_student', {1:'是', 0:'否'}, courseSetting.teacher_manage_student) }}*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*       <div class="col-md-3 control-label">*/
/*         <label >允许教师导出{% if setting('default.user_name') %}{{setting('default.user_name')|default('学员')}}{% else %}学员{% endif %}资料</label>*/
/*       </div>*/
/*       <div class="controls col-md-8 radios">*/
/*         {{ radios('teacher_export_student', {1:'是', 0:'否'}, courseSetting.teacher_export_student) }}*/
/*       </div>*/
/*     </div>*/
/*     {% set smsSetting = setting('cloud_sms') %}*/
/*     {% if smsSetting.sms_enabled|default(0) and (smsSetting.sms_normal_lesson_publish|default('off') == 'on' or smsSetting.sms_live_lesson_publish|default('off') == 'on')%}*/
/*     {% endif %}*/
/* */
/* */
/*     <div class="form-group">*/
/*       <div class="col-md-3 control-label">*/
/*         <label >允许{% if setting('default.user_name') %}{{setting('default.user_name')|default('学员')}}{% else %}学员{% endif %}下载课时的音视频</label>*/
/*       </div>*/
/*       <div class="controls col-md-8 radios">*/
/*         {{ radios('student_download_media', {0:'不允许', 1:'允许'}, courseSetting.student_download_media) }}*/
/*         <div class="help-block">开启此项设置后，{% if setting('default.user_name') %}{{setting('default.user_name')|default('学员')}}{% else %}学员{% endif %}可在课时学习界面侧栏的"资料"面板中下载。</div>*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*       <div class="col-md-3 control-label">*/
/*         <label >课程列表页默认排序</label>*/
/*       </div>*/
/*       <div class="controls col-md-8 radios">*/
/*         {{ radios('explore_default_orderBy', {latest:'最新', studentNum:'最热',recommendedSeq:'推荐'}, courseSetting.explore_default_orderBy) }}*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*       <div class="col-md-3 control-label">*/
/*         <label>课程详情页显示相关课程</label>*/
/*       </div>*/
/*       <div class="controls col-md-8 radios">*/
/*         {{ radios('relatedCourses', {1:'开启', 0:'关闭'}, courseSetting.relatedCourses) }}*/
/*         <div class="help-block">根据课程的标签，显示相关课程</div>*/
/*       </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <div class="col-md-3 control-label">*/
/*         <label>免费课时允许未登录用户观看</label>*/
/*       </div>*/
/*       <div class="controls col-md-8 radios">*/
/*         {{ radios('allowAnonymousPreview', {1:'允许', 0:'不允许'}, courseSetting.allowAnonymousPreview) }}*/
/*         <div class="help-block">如果允许此项设置,未登录用户（游客）可观看免费课时</div>*/
/*       </div>*/
/*     </div>*/
/* */
/*      <div class="form-group">*/
/*       <div class="col-md-3 control-label">*/
/*         <label>图文、文档课时防复制</label>*/
/*       </div>*/
/*       <div class="controls col-md-8 radios">*/
/*         {{ radios('copy_enabled', {1:'开启', 0:'关闭'}, courseSetting.copy_enabled) }}*/
/*         <div class="help-block"></div>*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*       <div class="col-md-3 control-label">*/
/*         <label>试卷防复制</label>*/
/*       </div>*/
/*       <div class="controls col-md-8 radios">*/
/*         {{ radios('testpaperCopy_enabled', {1:'开启', 0:'关闭'}, courseSetting.testpaperCopy_enabled) }}*/
/*         <div class="help-block"></div>*/
/*       </div>*/
/*     </div>*/
/* */
/* */
/*     <div class="form-group">*/
/*       <label class="col-md-3 control-label">课程中允许显示{{setting('default.user_name', '学员')}}人数</label>*/
/*       <div class="col-md-8 controls radios">*/
/*         {{ radios('show_student_num_enabled', {'1':'开启', '0':'关闭'}, courseSetting.show_student_num_enabled|default('1') ) }}*/
/*       </div>*/
/*     </div>*/
/* */
/*   </fieldset>*/
/*   <fieldset>*/
/*       <legend>名称设置</legend>*/
/* */
/*         <div class="form-group">*/
/*           <div class="col-md-3 control-label">*/
/*             <label>设置章节名称</label>*/
/*           </div>*/
/*           <div class="controls col-md-8 radios">*/
/*             {{ radios('custom_chapter_enabled', {1:'开启', 0:'关闭'}, courseSetting.custom_chapter_enabled) }}*/
/*             <div class="help-block">*/
/*               开启后，在课时管理中添加章,节时，系统会自动生成按如下设置的章节名称。</div>*/
/*           </div>*/
/*         </div>*/
/* */
/*       <div id="show_course_chapter_name"  style="display: {% if  courseSetting.custom_chapter_enabled %} block {% else %} none {% endif %};">*/
/*         <div class="form-group">*/
/*           <div class="col-md-3 control-label">*/
/*               <label for="chapter_name">课程章名称</label>*/
/*           </div>*/
/*           <div class="controls col-md-4">*/
/*             <input  type="text" id="chapter_name" name="chapter_name" class="form-control" {% if defaultSetting.chapter_name %}value="{{defaultSetting.chapter_name}}" {% else %} value="章" {% endif %}>*/
/*           </div>*/
/*         </div>*/
/* */
/*         <div class="row form-group">*/
/*           <div class="col-md-3 control-label">*/
/*               <label for="part_name">课程节名称</label>*/
/*           </div>*/
/*           <div class="controls col-md-4">*/
/*             <input  type="text" id="part_name" name="part_name" class="form-control" {% if defaultSetting.part_name %} value="{{defaultSetting.part_name}}" {% else %} value="节" {% endif %}>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*     <div class="alert alert-info deduction text-center">*/
/*     <p><strong>*/
/*     注：修改网校字段后，站内相关字段名称都会相应修改为已保存的名称*/
/*     </strong></p>*/
/*     </div>*/
/* */
/*   </fieldset>*/
/* */
/*   <div class="form-group">*/
/*     <div class="controls col-md-offset-3 col-md-8">*/
/*       <button type="submit" class="btn btn-primary">提交</button>*/
/*     </div>*/
/*   </div>*/
/*   <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/* </form>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/* */
