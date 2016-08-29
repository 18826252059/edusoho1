<?php

/* TopxiaAdminBundle:System:mobile.html.twig */
class __TwigTemplate_e7df2455ff15239f39e78a4cf4c11da560372d989995f3e717477ba76f5458cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:System:mobile.html.twig", 1);
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
        $context["menu"] = "admin_operation_mobile_banner_manage";
        // line 5
        $context["script_controller"] = "operation/mobile";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "<style>

#mobile-banner1-container img , 
#mobile-banner2-container img , 
#mobile-banner3-container img , 
#mobile-banner4-container img , 
#mobile-banner5-container img 
{max-width: 80%; margin-bottom: 10px;}

.course-grids {
  margin:0 -15px 0 0;
  padding:0;
  list-style: none;
}

.course-grid {
  display: inline-block;
  vertical-align: top;
  margin: 15px 15px 15px 0;
  border: 1px solid #e1e1e1;
  border-radius: 4px;
}

.banner-course .course-grid {
  margin: 0 0 0 0;
  margin-left: 10px;
}

.course-grid .series-mode-label {
  position: absolute;
  top: 10px;
  right: 10px;
  font-size: 12px;
}

.course-grid .grid-body {
  position: relative;
  width: 170px;
  display: block;
  overflow: hidden;
  border-radius: 4px;
  color: #353535;
}

.grid-body a{
  text-decoration: none;
}

.course-grid .title {
  display: block;
  padding: 10px;
  min-height: 52px;
  color: #555;
  font-weight: bold;
}

.course-grid .add-course {
  font-size: 80px;
  height: 148px;
  text-align: center;
  padding-top: 30px;
}


</style>
";
        // line 74
        if (($this->env->getExtension('topxia_web_twig')->getSetting("mobile.enabled") == 1)) {
            // line 75
            echo "
";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
            echo "

<form class=\"form-horizontal\" id=\"mobile-form\" method=\"post\">

  <fieldset>
    
    
    <div class=\"help-block\">客户端显示的轮播图。最多5张，建议图片大小为640*330，格式支持jpg、png。</div>
    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"banner1\">轮播图1</label>
      </div>
      <div class=\"col-md-8 controls\">

        <div id=\"mobile-banner1-container\">";
            // line 90
            if ($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "banner1", array())) {
                echo "<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "banner1", array())), "html", null, true);
                echo "\">";
            }
            echo "</div>

        <button class=\"btn btn-default btn-sm\" id=\"mobile-banner1-upload\" type=\"button\" data-url=\"";
            // line 92
            echo $this->env->getExtension('routing')->getPath("admin_operation_mobile_picture_upload", array("type" => "banner1"));
            echo "\">上传</button>
        <button class=\"btn btn-default btn-sm\" id=\"mobile-banner1-remove\" type=\"button\" data-url=\"";
            // line 93
            echo $this->env->getExtension('routing')->getPath("admin_operation_mobile_picture_remove", array("type" => "banner1"));
            echo "\" ";
            if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "banner1", array())) {
                echo "style=\"display:none;\"";
            }
            echo ">删除</button>

        <p class=\"help-block\">请上传png, gif, jpg格式的图片文件。</p>

        <div class=\"form-group\">
          <label class=\"control-label\">标签</label>
            <input name=\"tag1\" type=\"text\" autocomplete=\"off\" autocorrect=\"off\" autocapitilize=\"off\" spellcheck=\"false\" class=\"select2-input select2-default\" id=\"s2id_autogen1\" tabindex=\"-1\" style=\"width: 538px;\"  value=\"";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "tag1", array()), "html", null, true);
            echo "\">
        </div>

        <div class=\"banner-setting\" role=\"banner1-setting\" ";
            // line 102
            if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "banner1", array())) {
                echo "style=\"display:none;\"";
            }
            echo ">
          <input type=\"radio\" role=\"bannerClick1\" name=\"bannerClick1\" ";
            // line 103
            if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerClick1", array())) {
                echo "checked=\"checked\"";
            }
            echo " value=\"0\"/>默认（无触发动作）
          <input type=\"radio\" role=\"bannerClick1\" name=\"bannerClick1\" value=\"1\" ";
            // line 104
            if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerClick1", array()) == "1")) {
                echo "checked=\"checked\"";
            }
            echo "/>跳转到连接地址

          <input type=\"radio\" role=\"bannerClick1\" name=\"bannerClick1\" value=\"2\" ";
            // line 106
            if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerClick1", array()) == "2")) {
                echo "checked=\"checked\"";
            }
            echo "/>跳转到内部课程

          <div class=\"row\">
            <div class=\"col-xs-11\">
              <input type=\"text\" id=\"bannerUrl1\" name=\"bannerUrl1\" class=\"form-control\" value=\"";
            // line 110
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerUrl1", array()), "html", null, true);
            echo "\" placeholder=\"请填写连接地址\" ";
            if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerClick1", array()) != "1")) {
                echo "style=\"display:none\"";
            }
            echo "/>
            </div>  
          </div>

          <div class=\"row\" id=\"selectBannerCourse1\" data-role=\"selectBannerCourse\" ";
            // line 114
            if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerClick1", array()) != "2")) {
                echo "style=\"display:none\"";
            }
            echo ">
            <a data-role=\"selectCourse\" class=\"btn btn-sm btn-primary pull-left\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
            // line 115
            echo $this->env->getExtension('routing')->getPath("admin_course_search_to_fill_banner");
            echo "\" >
             选课
            </a>
            <div name=\"bannerCourseShow1\">
              <ul class=\"banner-course\" role=\"bannerCourse\">
                ";
            // line 120
            $this->loadTemplate("TopxiaAdminBundle:Course:course-item.html.twig", "TopxiaAdminBundle:System:mobile.html.twig", 120)->display(array_merge($context, array("course" => (isset($context["bannerCourse1"]) ? $context["bannerCourse1"] : null))));
            // line 121
            echo "              </ul>
            </div>
            <input type=\"text\" name=\"bannerJumpToCourseId1\" class=\"form-control\" value=\"";
            // line 123
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerJumpToCourseId1", array()), "html", null, true);
            echo "\" placeholder=\"请填写内部课程Id\" style=\"display:none;\"/>
          </div>
        </div>

        
        <input type=\"hidden\" name=\"banner1\" value=\"";
            // line 128
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "banner1", array()), "html", null, true);
            echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"banner2\">轮播图2</label>
      </div>
      <div class=\"col-md-8 controls\">
        <div id=\"mobile-banner2-container\">";
            // line 137
            if ($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "banner2", array())) {
                echo "<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "banner2", array())), "html", null, true);
                echo "\">";
            }
            echo "</div>

        <button class=\"btn btn-default btn-sm\" id=\"mobile-banner2-upload\" type=\"button\" data-url=\"";
            // line 139
            echo $this->env->getExtension('routing')->getPath("admin_operation_mobile_picture_upload", array("type" => "banner2"));
            echo "\">上传</button>
        <button class=\"btn btn-default btn-sm\" id=\"mobile-banner2-remove\" type=\"button\" data-url=\"";
            // line 140
            echo $this->env->getExtension('routing')->getPath("admin_operation_mobile_picture_remove", array("type" => "banner2"));
            echo "\" ";
            if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "banner2", array())) {
                echo "style=\"display:none;\"";
            }
            echo ">删除</button>

        <p class=\"help-block\">请上传png, gif, jpg格式的图片文件。</p>

        <div class=\"form-group\">
          <label class=\"control-label\">标签</label>
          <input name=\"tag2\" type=\"text\" autocomplete=\"off\" autocorrect=\"off\" autocapitilize=\"off\" spellcheck=\"false\" class=\"select2-input select2-default\" id=\"s2id_autogen1\" tabindex=\"-1\" style=\"width: 538px;\" value=\"";
            // line 146
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "tag2", array()), "html", null, true);
            echo "\">
        </div>

        <div class=\"banner-setting\" role=\"banner2-setting\" ";
            // line 149
            if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "banner2", array())) {
                echo "style=\"display:none;\"";
            }
            echo ">
          <input type=\"radio\" role=\"bannerClick2\" name=\"bannerClick2\" ";
            // line 150
            if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerClick2", array())) {
                echo "checked=\"checked\"";
            }
            echo " value=\"0\"/>默认（无触发动作）
          <input type=\"radio\" role=\"bannerClick2\" name=\"bannerClick2\" value=\"1\" ";
            // line 151
            if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerClick2", array()) == "1")) {
                echo "checked=\"checked\"";
            }
            echo "/>跳转到连接地址

          <input type=\"radio\" role=\"bannerClick2\" name=\"bannerClick2\" value=\"2\" ";
            // line 153
            if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerClick2", array()) == "2")) {
                echo "checked=\"checked\"";
            }
            echo "/>跳转到内部课程

          <div class=\"row\">
            <div class=\"col-xs-11\">
              <input type=\"text\" id=\"bannerUrl2\" name=\"bannerUrl2\" class=\"form-control\" value=\"";
            // line 157
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerUrl2", array()), "html", null, true);
            echo "\" placeholder=\"请填写连接地址\" ";
            if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerClick2", array()) != "1")) {
                echo "style=\"display:none\"";
            }
            echo "/>
            </div>  
          </div>

          <div class=\"row\" id=\"selectBannerCourse2\" data-role=\"selectBannerCourse\" ";
            // line 161
            if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerClick2", array()) != "2")) {
                echo "style=\"display:none\"";
            }
            echo ">
            <a data-role=\"selectCourse\" class=\"btn btn-sm btn-primary pull-left\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
            // line 162
            echo $this->env->getExtension('routing')->getPath("admin_course_search_to_fill_banner");
            echo "\" >
             选课
            </a>
            <div name=\"bannerCourseShow2\">
              <ul class=\"banner-course\" role=\"bannerCourse\">
                ";
            // line 167
            $this->loadTemplate("TopxiaAdminBundle:Course:course-item.html.twig", "TopxiaAdminBundle:System:mobile.html.twig", 167)->display(array_merge($context, array("course" => (isset($context["bannerCourse2"]) ? $context["bannerCourse2"] : null))));
            // line 168
            echo "              </ul>
            </div>

            <input type=\"text\" name=\"bannerJumpToCourseId2\" class=\"form-control\" value=\"";
            // line 171
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerJumpToCourseId2", array()), "html", null, true);
            echo "\" placeholder=\"请填写内部课程Id\" style=\"display:none;\"/>
          </div>
        </div>

        
        <input type=\"hidden\" name=\"banner2\" value=\"";
            // line 176
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "banner2", array()), "html", null, true);
            echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"banner3\">轮播图3</label>
      </div>
      <div class=\"col-md-8 controls\">
        <div id=\"mobile-banner3-container\">";
            // line 185
            if ($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "banner3", array())) {
                echo "<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "banner3", array())), "html", null, true);
                echo "\">";
            }
            echo "</div>

        <button class=\"btn btn-default btn-sm\" id=\"mobile-banner3-upload\" type=\"button\" data-url=\"";
            // line 187
            echo $this->env->getExtension('routing')->getPath("admin_operation_mobile_picture_upload", array("type" => "banner3"));
            echo "\">上传</button>
        <button class=\"btn btn-default btn-sm\" id=\"mobile-banner3-remove\" type=\"button\" data-url=\"";
            // line 188
            echo $this->env->getExtension('routing')->getPath("admin_operation_mobile_picture_remove", array("type" => "banner3"));
            echo "\" ";
            if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "banner3", array())) {
                echo "style=\"display:none;\"";
            }
            echo ">删除</button>

        <p class=\"help-block\">请上传png, gif, jpg格式的图片文件。</p>


        <div class=\"form-group\">
          <label class=\"control-label\">标签</label>
          <input name=\"tag3\" type=\"text\" autocomplete=\"off\" autocorrect=\"off\" autocapitilize=\"off\" spellcheck=\"false\" class=\"select2-input select2-default\" id=\"s2id_autogen1\" tabindex=\"-1\" style=\"width: 538px;\"  value=\"";
            // line 195
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "tag3", array()), "html", null, true);
            echo "\">
        </div>


        <div class=\"banner-setting\" role=\"banner3-setting\" ";
            // line 199
            if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "banner3", array())) {
                echo "style=\"display:none;\"";
            }
            echo ">
          <input type=\"radio\" role=\"bannerClick3\" name=\"bannerClick3\" ";
            // line 200
            if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerClick3", array())) {
                echo "checked=\"checked\"";
            }
            echo " value=\"0\"/>默认（无触发动作）
          <input type=\"radio\" role=\"bannerClick3\" name=\"bannerClick3\" value=\"1\" ";
            // line 201
            if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerClick3", array()) == "1")) {
                echo "checked=\"checked\"";
            }
            echo "/>跳转到连接地址

          <input type=\"radio\" role=\"bannerClick3\" name=\"bannerClick3\" value=\"2\" ";
            // line 203
            if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerClick3", array()) == "2")) {
                echo "checked=\"checked\"";
            }
            echo "/>跳转到内部课程

          <div class=\"row\">
            <div class=\"col-xs-11\">
              <input type=\"text\" id=\"bannerUrl3\" name=\"bannerUrl3\" class=\"form-control\" value=\"";
            // line 207
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerUrl3", array()), "html", null, true);
            echo "\" placeholder=\"请填写连接地址\" ";
            if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerClick3", array()) != "1")) {
                echo "style=\"display:none\"";
            }
            echo "/>
            </div>  
          </div>

          <div class=\"row\" id=\"selectBannerCourse3\" data-role=\"selectBannerCourse\" ";
            // line 211
            if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerClick3", array()) != "2")) {
                echo "style=\"display:none\"";
            }
            echo ">
            <a data-role=\"selectCourse\" class=\"btn btn-sm btn-primary pull-left\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
            // line 212
            echo $this->env->getExtension('routing')->getPath("admin_course_search_to_fill_banner");
            echo "\" >
             选课
            </a>
            <div name=\"bannerCourseShow3\">
              <ul class=\"banner-course\" role=\"bannerCourse\">
                ";
            // line 217
            $this->loadTemplate("TopxiaAdminBundle:Course:course-item.html.twig", "TopxiaAdminBundle:System:mobile.html.twig", 217)->display(array_merge($context, array("course" => (isset($context["bannerCourse3"]) ? $context["bannerCourse3"] : null))));
            // line 218
            echo "              </ul>
            </div>
            <input type=\"text\" name=\"bannerJumpToCourseId3\" class=\"form-control\" value=\"";
            // line 220
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerJumpToCourseId3", array()), "html", null, true);
            echo "\" placeholder=\"请填写内部课程Id\" style=\"display:none;\"/>
          </div>
        </div>

        
        <input type=\"hidden\" name=\"banner3\" value=\"";
            // line 225
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "banner3", array()), "html", null, true);
            echo "\">
      </div>
    </div>


    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"banner4\">轮播图4</label>
      </div>
      <div class=\"col-md-8 controls\">
        <div id=\"mobile-banner4-container\">";
            // line 235
            if ($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "banner4", array())) {
                echo "<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "banner4", array())), "html", null, true);
                echo "\">";
            }
            echo "</div>

        <button class=\"btn btn-default btn-sm\" id=\"mobile-banner4-upload\" type=\"button\" data-url=\"";
            // line 237
            echo $this->env->getExtension('routing')->getPath("admin_operation_mobile_picture_upload", array("type" => "banner4"));
            echo "\">上传</button>
        <button class=\"btn btn-default btn-sm\" id=\"mobile-banner4-remove\" type=\"button\" data-url=\"";
            // line 238
            echo $this->env->getExtension('routing')->getPath("admin_operation_mobile_picture_remove", array("type" => "banner4"));
            echo "\" ";
            if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "banner4", array())) {
                echo "style=\"display:none;\"";
            }
            echo ">删除</button>

        <p class=\"help-block\">请上传png, gif, jpg格式的图片文件。</p>

        <div class=\"form-group\">
          <label class=\"control-label\">标签</label>
          <input name=\"tag4\" type=\"text\" autocomplete=\"off\" autocorrect=\"off\" autocapitilize=\"off\" spellcheck=\"false\" class=\"select2-input select2-default\" id=\"s2id_autogen1\" tabindex=\"-1\" style=\"width: 538px;\"   value=\"";
            // line 244
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "tag4", array()), "html", null, true);
            echo "\">
        </div>


        <div class=\"banner-setting\" role=\"banner4-setting\" ";
            // line 248
            if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "banner4", array())) {
                echo "style=\"display:none;\"";
            }
            echo ">
          <input type=\"radio\" role=\"bannerClick4\" name=\"bannerClick4\" ";
            // line 249
            if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerClick4", array())) {
                echo "checked=\"checked\"";
            }
            echo " value=\"0\"/>默认（无触发动作）
          <input type=\"radio\" role=\"bannerClick4\" name=\"bannerClick4\" value=\"1\" ";
            // line 250
            if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerClick4", array()) == "1")) {
                echo "checked=\"checked\"";
            }
            echo "/>跳转到连接地址

          <input type=\"radio\" role=\"bannerClick4\" name=\"bannerClick4\" value=\"2\" ";
            // line 252
            if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerClick4", array()) == "2")) {
                echo "checked=\"checked\"";
            }
            echo "/>跳转到内部课程

          <div class=\"row\">
            <div class=\"col-xs-11\">
              <input type=\"text\" id=\"bannerUrl4\" name=\"bannerUrl4\" class=\"form-control\" value=\"";
            // line 256
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerUrl4", array()), "html", null, true);
            echo "\" placeholder=\"请填写连接地址\" ";
            if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerClick4", array()) != "1")) {
                echo "style=\"display:none\"";
            }
            echo "/>
            </div>  
          </div>

          <div class=\"row\" id=\"selectBannerCourse4\" data-role=\"selectBannerCourse\" ";
            // line 260
            if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerClick4", array()) != "2")) {
                echo "style=\"display:none\"";
            }
            echo ">
            <a data-role=\"selectCourse\" class=\"btn btn-sm btn-primary pull-left\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
            // line 261
            echo $this->env->getExtension('routing')->getPath("admin_course_search_to_fill_banner");
            echo "\" >
             选课
            </a>
            <div name=\"bannerCourseShow4\">
              <ul class=\"banner-course\" role=\"bannerCourse\">
                ";
            // line 266
            $this->loadTemplate("TopxiaAdminBundle:Course:course-item.html.twig", "TopxiaAdminBundle:System:mobile.html.twig", 266)->display(array_merge($context, array("course" => (isset($context["bannerCourse4"]) ? $context["bannerCourse4"] : null))));
            // line 267
            echo "              </ul>
            </div>
            <input type=\"text\" name=\"bannerJumpToCourseId4\" class=\"form-control\" value=\"";
            // line 269
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerJumpToCourseId4", array()), "html", null, true);
            echo "\" placeholder=\"请填写内部课程Id\" style=\"display:none;\"/>
          </div>
        </div>

        
        <input type=\"hidden\" name=\"banner4\" value=\"";
            // line 274
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "banner4", array()), "html", null, true);
            echo "\">
      </div>
    </div>


    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"banner5\">轮播图5</label>
      </div>
      <div class=\"col-md-8 controls\">
        <div id=\"mobile-banner5-container\">";
            // line 284
            if ($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "banner5", array())) {
                echo "<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "banner5", array())), "html", null, true);
                echo "\">";
            }
            echo "</div>

        <button class=\"btn btn-default btn-sm\" id=\"mobile-banner5-upload\" type=\"button\" data-url=\"";
            // line 286
            echo $this->env->getExtension('routing')->getPath("admin_operation_mobile_picture_upload", array("type" => "banner5"));
            echo "\">上传</button>
        <button class=\"btn btn-default btn-sm\" id=\"mobile-banner5-remove\" type=\"button\" data-url=\"";
            // line 287
            echo $this->env->getExtension('routing')->getPath("admin_operation_mobile_picture_remove", array("type" => "banner5"));
            echo "\" ";
            if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "banner5", array())) {
                echo "style=\"display:none;\"";
            }
            echo ">删除</button>

        <p class=\"help-block\">请上传png, gif, jpg格式的图片文件。</p>

        <div class=\"form-group\">
          <label class=\"control-label\">标签</label>
          <input name=\"tag5\" type=\"text\" autocomplete=\"off\" autocorrect=\"off\" autocapitilize=\"off\" spellcheck=\"false\" class=\"select2-input select2-default\" id=\"s2id_autogen1\" tabindex=\"-1\" style=\"width: 538px;\"   value=\"";
            // line 293
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "tag5", array()), "html", null, true);
            echo "\">
        </div>

        <div class=\"banner-setting\" role=\"banner5-setting\" ";
            // line 296
            if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "banner5", array())) {
                echo "style=\"display:none;\"";
            }
            echo ">
          <input type=\"radio\" role=\"bannerClick5\" name=\"bannerClick5\" ";
            // line 297
            if ( !$this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerClick5", array())) {
                echo "checked=\"checked\"";
            }
            echo " value=\"0\"/>默认（无触发动作）
          <input type=\"radio\" role=\"bannerClick5\" name=\"bannerClick5\" value=\"1\" ";
            // line 298
            if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerClick5", array()) == "1")) {
                echo "checked=\"checked\"";
            }
            echo "/>跳转到连接地址

          <input type=\"radio\" role=\"bannerClick5\" name=\"bannerClick5\" value=\"2\" ";
            // line 300
            if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerClick5", array()) == "2")) {
                echo "checked=\"checked\"";
            }
            echo "/>跳转到内部课程

          <div class=\"row\">
            <div class=\"col-xs-11\">
              <input type=\"text\" id=\"bannerUrl5\" name=\"bannerUrl5\" class=\"form-control\" value=\"";
            // line 304
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerUrl5", array()), "html", null, true);
            echo "\" placeholder=\"请填写连接地址\" ";
            if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerClick5", array()) != "1")) {
                echo "style=\"display:none\"";
            }
            echo "/>
            </div>  
          </div>

          <div class=\"row\" id=\"selectBannerCourse5\" data-role=\"selectBannerCourse\" ";
            // line 308
            if (($this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerClick5", array()) != "2")) {
                echo "style=\"display:none\"";
            }
            echo ">
            <a data-role=\"selectCourse\" class=\"btn btn-sm btn-primary pull-left\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
            // line 309
            echo $this->env->getExtension('routing')->getPath("admin_course_search_to_fill_banner");
            echo "\" >
             选课
            </a>
            <div name=\"bannerCourseShow5\">
              <ul class=\"banner-course\" role=\"bannerCourse\">
                ";
            // line 314
            $this->loadTemplate("TopxiaAdminBundle:Course:course-item.html.twig", "TopxiaAdminBundle:System:mobile.html.twig", 314)->display(array_merge($context, array("course" => (isset($context["bannerCourse5"]) ? $context["bannerCourse5"] : null))));
            // line 315
            echo "              </ul>
            </div>
            <input type=\"text\" name=\"bannerJumpToCourseId5\" class=\"form-control\" value=\"";
            // line 317
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "bannerJumpToCourseId5", array()), "html", null, true);
            echo "\" placeholder=\"请填写内部课程Id\" style=\"display:none;\"/>
          </div>
        </div>

        
        <input type=\"hidden\" name=\"banner5\" value=\"";
            // line 322
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "banner5", array()), "html", null, true);
            echo "\">
      </div>
    </div>

    
  </fieldset>

  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 329
            echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
            echo "\">
  
  <div class=\"row form-group\">
    <div class=\"controls col-md-offset-2 col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">提交</button>
    </div>
  </div>

</form>

";
        } else {
            // line 340
            echo "<div class=\"well\" style=\"text-align:center;\">


移动端未开启，请先在<a href=\"";
            // line 343
            echo $this->env->getExtension('routing')->getPath("admin_setting_mobile");
            echo "\"> 系统-课程设置-移动端设置 </a>中设置开启

</div>
";
        }
        // line 347
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:mobile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  710 => 347,  703 => 343,  698 => 340,  684 => 329,  674 => 322,  666 => 317,  662 => 315,  660 => 314,  652 => 309,  646 => 308,  635 => 304,  626 => 300,  619 => 298,  613 => 297,  607 => 296,  601 => 293,  588 => 287,  584 => 286,  575 => 284,  562 => 274,  554 => 269,  550 => 267,  548 => 266,  540 => 261,  534 => 260,  523 => 256,  514 => 252,  507 => 250,  501 => 249,  495 => 248,  488 => 244,  475 => 238,  471 => 237,  462 => 235,  449 => 225,  441 => 220,  437 => 218,  435 => 217,  427 => 212,  421 => 211,  410 => 207,  401 => 203,  394 => 201,  388 => 200,  382 => 199,  375 => 195,  361 => 188,  357 => 187,  348 => 185,  336 => 176,  328 => 171,  323 => 168,  321 => 167,  313 => 162,  307 => 161,  296 => 157,  287 => 153,  280 => 151,  274 => 150,  268 => 149,  262 => 146,  249 => 140,  245 => 139,  236 => 137,  224 => 128,  216 => 123,  212 => 121,  210 => 120,  202 => 115,  196 => 114,  185 => 110,  176 => 106,  169 => 104,  163 => 103,  157 => 102,  151 => 99,  138 => 93,  134 => 92,  125 => 90,  108 => 76,  105 => 75,  103 => 74,  36 => 9,  33 => 8,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set menu = 'admin_operation_mobile_banner_manage' %}*/
/* */
/* {% set script_controller = 'operation/mobile' %}*/
/* */
/* */
/* {% block main %}*/
/* <style>*/
/* */
/* #mobile-banner1-container img , */
/* #mobile-banner2-container img , */
/* #mobile-banner3-container img , */
/* #mobile-banner4-container img , */
/* #mobile-banner5-container img */
/* {max-width: 80%; margin-bottom: 10px;}*/
/* */
/* .course-grids {*/
/*   margin:0 -15px 0 0;*/
/*   padding:0;*/
/*   list-style: none;*/
/* }*/
/* */
/* .course-grid {*/
/*   display: inline-block;*/
/*   vertical-align: top;*/
/*   margin: 15px 15px 15px 0;*/
/*   border: 1px solid #e1e1e1;*/
/*   border-radius: 4px;*/
/* }*/
/* */
/* .banner-course .course-grid {*/
/*   margin: 0 0 0 0;*/
/*   margin-left: 10px;*/
/* }*/
/* */
/* .course-grid .series-mode-label {*/
/*   position: absolute;*/
/*   top: 10px;*/
/*   right: 10px;*/
/*   font-size: 12px;*/
/* }*/
/* */
/* .course-grid .grid-body {*/
/*   position: relative;*/
/*   width: 170px;*/
/*   display: block;*/
/*   overflow: hidden;*/
/*   border-radius: 4px;*/
/*   color: #353535;*/
/* }*/
/* */
/* .grid-body a{*/
/*   text-decoration: none;*/
/* }*/
/* */
/* .course-grid .title {*/
/*   display: block;*/
/*   padding: 10px;*/
/*   min-height: 52px;*/
/*   color: #555;*/
/*   font-weight: bold;*/
/* }*/
/* */
/* .course-grid .add-course {*/
/*   font-size: 80px;*/
/*   height: 148px;*/
/*   text-align: center;*/
/*   padding-top: 30px;*/
/* }*/
/* */
/* */
/* </style>*/
/* {% if setting("mobile.enabled") == 1 %}*/
/* */
/* {{ web_macro.flash_messages() }}*/
/* */
/* <form class="form-horizontal" id="mobile-form" method="post">*/
/* */
/*   <fieldset>*/
/*     */
/*     */
/*     <div class="help-block">客户端显示的轮播图。最多5张，建议图片大小为640*330，格式支持jpg、png。</div>*/
/*     <div class="form-group">*/
/*       <div class="col-md-2 control-label">*/
/*         <label for="banner1">轮播图1</label>*/
/*       </div>*/
/*       <div class="col-md-8 controls">*/
/* */
/*         <div id="mobile-banner1-container">{% if mobile.banner1 %}<img src="{{ asset(mobile.banner1) }}">{% endif %}</div>*/
/* */
/*         <button class="btn btn-default btn-sm" id="mobile-banner1-upload" type="button" data-url="{{ path('admin_operation_mobile_picture_upload', {type:'banner1'}) }}">上传</button>*/
/*         <button class="btn btn-default btn-sm" id="mobile-banner1-remove" type="button" data-url="{{ path('admin_operation_mobile_picture_remove', {type:'banner1'}) }}" {% if not mobile.banner1 %}style="display:none;"{% endif %}>删除</button>*/
/* */
/*         <p class="help-block">请上传png, gif, jpg格式的图片文件。</p>*/
/* */
/*         <div class="form-group">*/
/*           <label class="control-label">标签</label>*/
/*             <input name="tag1" type="text" autocomplete="off" autocorrect="off" autocapitilize="off" spellcheck="false" class="select2-input select2-default" id="s2id_autogen1" tabindex="-1" style="width: 538px;"  value="{{ mobile.tag1 }}">*/
/*         </div>*/
/* */
/*         <div class="banner-setting" role="banner1-setting" {% if not mobile.banner1 %}style="display:none;"{% endif %}>*/
/*           <input type="radio" role="bannerClick1" name="bannerClick1" {% if not mobile.bannerClick1 %}checked="checked"{% endif %} value="0"/>默认（无触发动作）*/
/*           <input type="radio" role="bannerClick1" name="bannerClick1" value="1" {% if mobile.bannerClick1 == "1" %}checked="checked"{% endif %}/>跳转到连接地址*/
/* */
/*           <input type="radio" role="bannerClick1" name="bannerClick1" value="2" {% if mobile.bannerClick1 == "2" %}checked="checked"{% endif %}/>跳转到内部课程*/
/* */
/*           <div class="row">*/
/*             <div class="col-xs-11">*/
/*               <input type="text" id="bannerUrl1" name="bannerUrl1" class="form-control" value="{{mobile.bannerUrl1}}" placeholder="请填写连接地址" {% if mobile.bannerClick1 != "1" %}style="display:none"{% endif %}/>*/
/*             </div>  */
/*           </div>*/
/* */
/*           <div class="row" id="selectBannerCourse1" data-role="selectBannerCourse" {% if mobile.bannerClick1 != "2" %}style="display:none"{% endif %}>*/
/*             <a data-role="selectCourse" class="btn btn-sm btn-primary pull-left" data-toggle="modal" data-target="#modal" data-url="{{path('admin_course_search_to_fill_banner')}}" >*/
/*              选课*/
/*             </a>*/
/*             <div name="bannerCourseShow1">*/
/*               <ul class="banner-course" role="bannerCourse">*/
/*                 {% include 'TopxiaAdminBundle:Course:course-item.html.twig' with {course:bannerCourse1} %}*/
/*               </ul>*/
/*             </div>*/
/*             <input type="text" name="bannerJumpToCourseId1" class="form-control" value="{{mobile.bannerJumpToCourseId1}}" placeholder="请填写内部课程Id" style="display:none;"/>*/
/*           </div>*/
/*         </div>*/
/* */
/*         */
/*         <input type="hidden" name="banner1" value="{{ mobile.banner1 }}">*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*       <div class="col-md-2 control-label">*/
/*         <label for="banner2">轮播图2</label>*/
/*       </div>*/
/*       <div class="col-md-8 controls">*/
/*         <div id="mobile-banner2-container">{% if mobile.banner2 %}<img src="{{ asset(mobile.banner2) }}">{% endif %}</div>*/
/* */
/*         <button class="btn btn-default btn-sm" id="mobile-banner2-upload" type="button" data-url="{{ path('admin_operation_mobile_picture_upload', {type:'banner2'}) }}">上传</button>*/
/*         <button class="btn btn-default btn-sm" id="mobile-banner2-remove" type="button" data-url="{{ path('admin_operation_mobile_picture_remove', {type:'banner2'}) }}" {% if not mobile.banner2 %}style="display:none;"{% endif %}>删除</button>*/
/* */
/*         <p class="help-block">请上传png, gif, jpg格式的图片文件。</p>*/
/* */
/*         <div class="form-group">*/
/*           <label class="control-label">标签</label>*/
/*           <input name="tag2" type="text" autocomplete="off" autocorrect="off" autocapitilize="off" spellcheck="false" class="select2-input select2-default" id="s2id_autogen1" tabindex="-1" style="width: 538px;" value="{{ mobile.tag2 }}">*/
/*         </div>*/
/* */
/*         <div class="banner-setting" role="banner2-setting" {% if not mobile.banner2 %}style="display:none;"{% endif %}>*/
/*           <input type="radio" role="bannerClick2" name="bannerClick2" {% if not mobile.bannerClick2 %}checked="checked"{% endif %} value="0"/>默认（无触发动作）*/
/*           <input type="radio" role="bannerClick2" name="bannerClick2" value="1" {% if mobile.bannerClick2 == "1" %}checked="checked"{% endif %}/>跳转到连接地址*/
/* */
/*           <input type="radio" role="bannerClick2" name="bannerClick2" value="2" {% if mobile.bannerClick2 == "2" %}checked="checked"{% endif %}/>跳转到内部课程*/
/* */
/*           <div class="row">*/
/*             <div class="col-xs-11">*/
/*               <input type="text" id="bannerUrl2" name="bannerUrl2" class="form-control" value="{{mobile.bannerUrl2}}" placeholder="请填写连接地址" {% if mobile.bannerClick2 != "1" %}style="display:none"{% endif %}/>*/
/*             </div>  */
/*           </div>*/
/* */
/*           <div class="row" id="selectBannerCourse2" data-role="selectBannerCourse" {% if mobile.bannerClick2 != "2" %}style="display:none"{% endif %}>*/
/*             <a data-role="selectCourse" class="btn btn-sm btn-primary pull-left" data-toggle="modal" data-target="#modal" data-url="{{path('admin_course_search_to_fill_banner')}}" >*/
/*              选课*/
/*             </a>*/
/*             <div name="bannerCourseShow2">*/
/*               <ul class="banner-course" role="bannerCourse">*/
/*                 {% include 'TopxiaAdminBundle:Course:course-item.html.twig' with {course:bannerCourse2} %}*/
/*               </ul>*/
/*             </div>*/
/* */
/*             <input type="text" name="bannerJumpToCourseId2" class="form-control" value="{{mobile.bannerJumpToCourseId2}}" placeholder="请填写内部课程Id" style="display:none;"/>*/
/*           </div>*/
/*         </div>*/
/* */
/*         */
/*         <input type="hidden" name="banner2" value="{{ mobile.banner2 }}">*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*       <div class="col-md-2 control-label">*/
/*         <label for="banner3">轮播图3</label>*/
/*       </div>*/
/*       <div class="col-md-8 controls">*/
/*         <div id="mobile-banner3-container">{% if mobile.banner3 %}<img src="{{ asset(mobile.banner3) }}">{% endif %}</div>*/
/* */
/*         <button class="btn btn-default btn-sm" id="mobile-banner3-upload" type="button" data-url="{{ path('admin_operation_mobile_picture_upload', {type:'banner3'}) }}">上传</button>*/
/*         <button class="btn btn-default btn-sm" id="mobile-banner3-remove" type="button" data-url="{{ path('admin_operation_mobile_picture_remove', {type:'banner3'}) }}" {% if not mobile.banner3 %}style="display:none;"{% endif %}>删除</button>*/
/* */
/*         <p class="help-block">请上传png, gif, jpg格式的图片文件。</p>*/
/* */
/* */
/*         <div class="form-group">*/
/*           <label class="control-label">标签</label>*/
/*           <input name="tag3" type="text" autocomplete="off" autocorrect="off" autocapitilize="off" spellcheck="false" class="select2-input select2-default" id="s2id_autogen1" tabindex="-1" style="width: 538px;"  value="{{ mobile.tag3 }}">*/
/*         </div>*/
/* */
/* */
/*         <div class="banner-setting" role="banner3-setting" {% if not mobile.banner3 %}style="display:none;"{% endif %}>*/
/*           <input type="radio" role="bannerClick3" name="bannerClick3" {% if not mobile.bannerClick3 %}checked="checked"{% endif %} value="0"/>默认（无触发动作）*/
/*           <input type="radio" role="bannerClick3" name="bannerClick3" value="1" {% if mobile.bannerClick3 == "1" %}checked="checked"{% endif %}/>跳转到连接地址*/
/* */
/*           <input type="radio" role="bannerClick3" name="bannerClick3" value="2" {% if mobile.bannerClick3 == "2" %}checked="checked"{% endif %}/>跳转到内部课程*/
/* */
/*           <div class="row">*/
/*             <div class="col-xs-11">*/
/*               <input type="text" id="bannerUrl3" name="bannerUrl3" class="form-control" value="{{mobile.bannerUrl3}}" placeholder="请填写连接地址" {% if mobile.bannerClick3 != "1" %}style="display:none"{% endif %}/>*/
/*             </div>  */
/*           </div>*/
/* */
/*           <div class="row" id="selectBannerCourse3" data-role="selectBannerCourse" {% if mobile.bannerClick3 != "2" %}style="display:none"{% endif %}>*/
/*             <a data-role="selectCourse" class="btn btn-sm btn-primary pull-left" data-toggle="modal" data-target="#modal" data-url="{{path('admin_course_search_to_fill_banner')}}" >*/
/*              选课*/
/*             </a>*/
/*             <div name="bannerCourseShow3">*/
/*               <ul class="banner-course" role="bannerCourse">*/
/*                 {% include 'TopxiaAdminBundle:Course:course-item.html.twig' with {course:bannerCourse3} %}*/
/*               </ul>*/
/*             </div>*/
/*             <input type="text" name="bannerJumpToCourseId3" class="form-control" value="{{mobile.bannerJumpToCourseId3}}" placeholder="请填写内部课程Id" style="display:none;"/>*/
/*           </div>*/
/*         </div>*/
/* */
/*         */
/*         <input type="hidden" name="banner3" value="{{ mobile.banner3 }}">*/
/*       </div>*/
/*     </div>*/
/* */
/* */
/*     <div class="form-group">*/
/*       <div class="col-md-2 control-label">*/
/*         <label for="banner4">轮播图4</label>*/
/*       </div>*/
/*       <div class="col-md-8 controls">*/
/*         <div id="mobile-banner4-container">{% if mobile.banner4 %}<img src="{{ asset(mobile.banner4) }}">{% endif %}</div>*/
/* */
/*         <button class="btn btn-default btn-sm" id="mobile-banner4-upload" type="button" data-url="{{ path('admin_operation_mobile_picture_upload', {type:'banner4'}) }}">上传</button>*/
/*         <button class="btn btn-default btn-sm" id="mobile-banner4-remove" type="button" data-url="{{ path('admin_operation_mobile_picture_remove', {type:'banner4'}) }}" {% if not mobile.banner4 %}style="display:none;"{% endif %}>删除</button>*/
/* */
/*         <p class="help-block">请上传png, gif, jpg格式的图片文件。</p>*/
/* */
/*         <div class="form-group">*/
/*           <label class="control-label">标签</label>*/
/*           <input name="tag4" type="text" autocomplete="off" autocorrect="off" autocapitilize="off" spellcheck="false" class="select2-input select2-default" id="s2id_autogen1" tabindex="-1" style="width: 538px;"   value="{{ mobile.tag4 }}">*/
/*         </div>*/
/* */
/* */
/*         <div class="banner-setting" role="banner4-setting" {% if not mobile.banner4 %}style="display:none;"{% endif %}>*/
/*           <input type="radio" role="bannerClick4" name="bannerClick4" {% if not mobile.bannerClick4 %}checked="checked"{% endif %} value="0"/>默认（无触发动作）*/
/*           <input type="radio" role="bannerClick4" name="bannerClick4" value="1" {% if mobile.bannerClick4 == "1" %}checked="checked"{% endif %}/>跳转到连接地址*/
/* */
/*           <input type="radio" role="bannerClick4" name="bannerClick4" value="2" {% if mobile.bannerClick4 == "2" %}checked="checked"{% endif %}/>跳转到内部课程*/
/* */
/*           <div class="row">*/
/*             <div class="col-xs-11">*/
/*               <input type="text" id="bannerUrl4" name="bannerUrl4" class="form-control" value="{{mobile.bannerUrl4}}" placeholder="请填写连接地址" {% if mobile.bannerClick4 != "1" %}style="display:none"{% endif %}/>*/
/*             </div>  */
/*           </div>*/
/* */
/*           <div class="row" id="selectBannerCourse4" data-role="selectBannerCourse" {% if mobile.bannerClick4 != "2" %}style="display:none"{% endif %}>*/
/*             <a data-role="selectCourse" class="btn btn-sm btn-primary pull-left" data-toggle="modal" data-target="#modal" data-url="{{path('admin_course_search_to_fill_banner')}}" >*/
/*              选课*/
/*             </a>*/
/*             <div name="bannerCourseShow4">*/
/*               <ul class="banner-course" role="bannerCourse">*/
/*                 {% include 'TopxiaAdminBundle:Course:course-item.html.twig' with {course:bannerCourse4} %}*/
/*               </ul>*/
/*             </div>*/
/*             <input type="text" name="bannerJumpToCourseId4" class="form-control" value="{{mobile.bannerJumpToCourseId4}}" placeholder="请填写内部课程Id" style="display:none;"/>*/
/*           </div>*/
/*         </div>*/
/* */
/*         */
/*         <input type="hidden" name="banner4" value="{{ mobile.banner4 }}">*/
/*       </div>*/
/*     </div>*/
/* */
/* */
/*     <div class="form-group">*/
/*       <div class="col-md-2 control-label">*/
/*         <label for="banner5">轮播图5</label>*/
/*       </div>*/
/*       <div class="col-md-8 controls">*/
/*         <div id="mobile-banner5-container">{% if mobile.banner5 %}<img src="{{ asset(mobile.banner5) }}">{% endif %}</div>*/
/* */
/*         <button class="btn btn-default btn-sm" id="mobile-banner5-upload" type="button" data-url="{{ path('admin_operation_mobile_picture_upload', {type:'banner5'}) }}">上传</button>*/
/*         <button class="btn btn-default btn-sm" id="mobile-banner5-remove" type="button" data-url="{{ path('admin_operation_mobile_picture_remove', {type:'banner5'}) }}" {% if not mobile.banner5 %}style="display:none;"{% endif %}>删除</button>*/
/* */
/*         <p class="help-block">请上传png, gif, jpg格式的图片文件。</p>*/
/* */
/*         <div class="form-group">*/
/*           <label class="control-label">标签</label>*/
/*           <input name="tag5" type="text" autocomplete="off" autocorrect="off" autocapitilize="off" spellcheck="false" class="select2-input select2-default" id="s2id_autogen1" tabindex="-1" style="width: 538px;"   value="{{ mobile.tag5 }}">*/
/*         </div>*/
/* */
/*         <div class="banner-setting" role="banner5-setting" {% if not mobile.banner5 %}style="display:none;"{% endif %}>*/
/*           <input type="radio" role="bannerClick5" name="bannerClick5" {% if not mobile.bannerClick5 %}checked="checked"{% endif %} value="0"/>默认（无触发动作）*/
/*           <input type="radio" role="bannerClick5" name="bannerClick5" value="1" {% if mobile.bannerClick5 == "1" %}checked="checked"{% endif %}/>跳转到连接地址*/
/* */
/*           <input type="radio" role="bannerClick5" name="bannerClick5" value="2" {% if mobile.bannerClick5 == "2" %}checked="checked"{% endif %}/>跳转到内部课程*/
/* */
/*           <div class="row">*/
/*             <div class="col-xs-11">*/
/*               <input type="text" id="bannerUrl5" name="bannerUrl5" class="form-control" value="{{mobile.bannerUrl5}}" placeholder="请填写连接地址" {% if mobile.bannerClick5 != "1" %}style="display:none"{% endif %}/>*/
/*             </div>  */
/*           </div>*/
/* */
/*           <div class="row" id="selectBannerCourse5" data-role="selectBannerCourse" {% if mobile.bannerClick5 != "2" %}style="display:none"{% endif %}>*/
/*             <a data-role="selectCourse" class="btn btn-sm btn-primary pull-left" data-toggle="modal" data-target="#modal" data-url="{{path('admin_course_search_to_fill_banner')}}" >*/
/*              选课*/
/*             </a>*/
/*             <div name="bannerCourseShow5">*/
/*               <ul class="banner-course" role="bannerCourse">*/
/*                 {% include 'TopxiaAdminBundle:Course:course-item.html.twig' with {course:bannerCourse5} %}*/
/*               </ul>*/
/*             </div>*/
/*             <input type="text" name="bannerJumpToCourseId5" class="form-control" value="{{mobile.bannerJumpToCourseId5}}" placeholder="请填写内部课程Id" style="display:none;"/>*/
/*           </div>*/
/*         </div>*/
/* */
/*         */
/*         <input type="hidden" name="banner5" value="{{ mobile.banner5 }}">*/
/*       </div>*/
/*     </div>*/
/* */
/*     */
/*   </fieldset>*/
/* */
/*   <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*   */
/*   <div class="row form-group">*/
/*     <div class="controls col-md-offset-2 col-md-8">*/
/*       <button type="submit" class="btn btn-primary">提交</button>*/
/*     </div>*/
/*   </div>*/
/* */
/* </form>*/
/* */
/* {% else %}*/
/* <div class="well" style="text-align:center;">*/
/* */
/* */
/* 移动端未开启，请先在<a href="{{ path('admin_setting_mobile') }}"> 系统-课程设置-移动端设置 </a>中设置开启*/
/* */
/* </div>*/
/* {% endif %}*/
/* */
/* {% endblock %}*/
