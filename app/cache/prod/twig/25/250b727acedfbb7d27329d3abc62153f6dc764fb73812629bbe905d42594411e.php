<?php

/* TopxiaAdminBundle:System:user-fields.html.twig */
class __TwigTemplate_00d27b4bffcb2757476cd8f346688588be83846159419fa25b68465a2290f9ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:System:user-fields.html.twig", 1);
        $this->blocks = array(
            'page_buttons' => array($this, 'block_page_buttons'),
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
        $context["script_controller"] = "system/user-fields";
        // line 5
        $context["menu"] = "admin_setting_user_fields";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_page_buttons($context, array $blocks = array())
    {
        // line 7
        echo "<button type=\"button\" class=\"btn btn-success btn-sm pull-right\" data-toggle=\"modal\" data-target=\"#myModal\">添加字段</button>
";
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        // line 10
        echo "
";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "
<form action=\"\" class=\"form-horizontal\" method=\"post\">
  <fieldset>
    <legend>自定义字段设置</legend>
    <table class=\"table table-striped table-hover\" id=\"course-table\">
      <thead>
      <tr>
        <th>字段名称</th>
        <th>类型</th>
        <th>是否显示</th>
        <th>显示序号</th>
        <!-- <th>创建时间</th> -->
        <th>操作</th>
      </tr>
      </thead>
      <tbody>
        ";
        // line 27
        $this->loadTemplate("TopxiaAdminBundle:System:user-fields.table.tr.html.twig", "TopxiaAdminBundle:System:user-fields.html.twig", 27)->display($context);
        // line 28
        echo "      </tbody>
    </table>
  </fieldset>
  
  
  <fieldset>
    <legend>个人资料设置</legend>

    ";
        // line 36
        $context["commonFields"] = _twig_default_filter($this->env->getExtension('topxia_web_twig')->getDict("userInfoFields"), null);
        // line 37
        echo "
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >购买课程或班级时填写个人资料</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 43
        echo $this->env->getExtension('topxia_html_twig')->radios("buy_fill_userinfo", array(1 => "开启", 0 => "关闭"), (($this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "buy_fill_userinfo", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "buy_fill_userinfo", array()), 0)) : (0)));
        echo "
        <p class=\"help-block\">开启后，";
        // line 44
        if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
        } else {
            echo "学员";
        }
        echo "购买课程时，需填写个人资料</p>
      </div>

      <div class=\"controls col-md-8 col-md-offset-3\" id=\"show-list\">
        <div class=\"pull-left\">
          ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "userinfoFields", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "userinfoFields", array()), array())) : (array())));
        foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
            // line 50
            echo "            ";
            $context["userCustomField"] = (($this->getAttribute((isset($context["userFields"]) ? $context["userFields"] : null), $context["sort"], array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["userFields"]) ? $context["userFields"] : null), $context["sort"], array(), "array"), null)) : (null));
            // line 51
            echo "            ";
            $context["userInfoFieldsDict"] = _twig_default_filter($this->env->getExtension('topxia_web_twig')->getDictText("userInfoFields", $context["sort"]), null);
            // line 52
            echo "            ";
            if ((isset($context["userCustomField"]) ? $context["userCustomField"] : null)) {
                // line 53
                echo "              <button type=\"button\" class=\"btn btn-default btn-xs\">
                ";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userCustomField"]) ? $context["userCustomField"] : null), "title", array()), "html", null, true);
                echo "
              </button>
            ";
            } elseif (            // line 56
(isset($context["userInfoFieldsDict"]) ? $context["userInfoFieldsDict"] : null)) {
                // line 57
                echo "              <button type=\"button\" class=\"btn btn-default btn-xs\">
                ";
                // line 58
                echo twig_escape_filter($this->env, (isset($context["userInfoFieldsDict"]) ? $context["userInfoFieldsDict"] : null), "html", null, true);
                echo "
              </button>
            ";
            }
            // line 61
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "        </div>
          
        <div class=\"pull-right \">
          <a href=\"javascript:\" id=\"show-list-btn\">编辑 
            <span class=\"glyphicon glyphicon-chevron-down\"></span>
          </a>
        </div>
      </div>

      <div class=\"controls col-md-8 col-md-offset-2\" id=\"show-register-list\" style=\"display:none\">
        <div class=\"form-group\">
          <ul class=\"register-list sortable-list list-unstyled col-md-12\" data-role=\"list\">
            ";
        // line 74
        $context["checkedFieldsKeys"] = (($this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "userinfoFields", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courseSetting"]) ? $context["courseSetting"] : null), "userinfoFields", array()), array())) : (array()));
        // line 75
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commonFields"]) ? $context["commonFields"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["field"]) {
            if ((isset($context["commonFields"]) ? $context["commonFields"] : null)) {
                // line 76
                echo "              <li class=\"list-group-item clearfix\" data-role=\"item\" >
                <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>&nbsp;
                <input type=\"checkbox\" name=\"userinfoFields[]\" value=\"";
                // line 78
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" ";
                if (twig_in_filter($context["key"], (isset($context["checkedFieldsKeys"]) ? $context["checkedFieldsKeys"] : null))) {
                    echo "checked=true";
                }
                echo " />
                <input type=\"hidden\"  name=\"userinfoFieldNameArray[]\" value=\"";
                // line 79
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" /> 
                ";
                // line 80
                echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                echo "
                ";
                // line 81
                if ((($context["key"] == "email") || ($context["key"] == "mobile"))) {
                    echo "<span class=\"text-muted\">  (带格式校检)</span>";
                }
                // line 82
                echo "              </li>
            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "
            ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["userFields"]) ? $context["userFields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            if (((array_key_exists("userFields", $context)) ? (_twig_default_filter((isset($context["userFields"]) ? $context["userFields"] : null), null)) : (null))) {
                // line 86
                echo "              <li class=\"list-group-item clearfix\" data-role=\"item\" >
                <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>&nbsp;
                <input type=\"checkbox\" name=\"userinfoFields[]\" value=\"";
                // line 88
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                echo "\" ";
                if (twig_in_filter($this->getAttribute($context["field"], "fieldName", array()), (isset($context["checkedFieldsKeys"]) ? $context["checkedFieldsKeys"] : null))) {
                    echo "checked=true";
                }
                echo " />
                <input type=\"hidden\"  name=\"userinfoFieldNameArray[]\" value=\"";
                // line 89
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                echo "\" /> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "title", array()), "html", null, true);
                echo "
              </li>
            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "          </ul>

          <div class=\"help-block col-md-12\"><span class=\"text-success\">可拖动调整次序。酌情勾选需要收集的字段，若需要新的字段，请在［自定义字段设置］中添加。</span></div>

        </div>
        <div class=\"mbl\" style=\"text-align:center;\">
          <a href=\"javascript:\" id=\"hide-list-btn\">收起 
            <span class=\"glyphicon glyphicon-chevron-up\"></span>
          </a>
        </div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label >登录后填写个人资料</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 110
        echo $this->env->getExtension('topxia_html_twig')->radios("fill_userinfo_after_login", array(1 => "开启", 0 => "关闭"), _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("auth.fill_userinfo_after_login"), 0));
        echo "
        <p class=\"help-block\">开启后，";
        // line 111
        if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
        } else {
            echo "学员";
        }
        echo "登录后需填写个人资料</p>
      </div>

      <div class=\"controls col-md-8 col-md-offset-3\" id=\"show-checked-fields-list\">
        <div class=\"pull-left\">
          ";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($this->getAttribute((isset($context["authSetting"]) ? $context["authSetting"] : null), "registerSort", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["authSetting"]) ? $context["authSetting"] : null), "registerSort", array()), array())) : (array())));
        foreach ($context['_seq'] as $context["_key"] => $context["sort"]) {
            // line 117
            echo "            ";
            if (($context["sort"] == "emailOrMobile")) {
                $context["sort"] = "email";
            }
            // line 118
            echo "            ";
            $context["userCustomField"] = (($this->getAttribute((isset($context["userFields"]) ? $context["userFields"] : null), $context["sort"], array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["userFields"]) ? $context["userFields"] : null), $context["sort"], array(), "array"), null)) : (null));
            // line 119
            echo "            ";
            $context["userInfoFieldsDict"] = _twig_default_filter($this->env->getExtension('topxia_web_twig')->getDictText("userInfoFields", $context["sort"]), null);
            // line 120
            echo "            ";
            if ((isset($context["userCustomField"]) ? $context["userCustomField"] : null)) {
                // line 121
                echo "              <button type=\"button\" class=\"btn btn-default btn-xs\">
                ";
                // line 122
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userCustomField"]) ? $context["userCustomField"] : null), "title", array()), "html", null, true);
                echo "
              </button>
            ";
            } elseif (            // line 124
(isset($context["userInfoFieldsDict"]) ? $context["userInfoFieldsDict"] : null)) {
                // line 125
                echo "              <button type=\"button\" class=\"btn btn-default btn-xs\">
                ";
                // line 126
                echo twig_escape_filter($this->env, (isset($context["userInfoFieldsDict"]) ? $context["userInfoFieldsDict"] : null), "html", null, true);
                echo "
              </button>
            ";
            }
            // line 129
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sort'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "        </div>
          
        <div class=\"pull-right \">
          <a href=\"javascript:\" id=\"show-fields-list-btn\">编辑 
            <span class=\"glyphicon glyphicon-chevron-down\"></span>
          </a>
        </div>
      </div>

      <div class=\"controls col-md-8 col-md-offset-2\" id=\"show-fields-list\" style=\"display:none\">
        <div class=\"form-group\">
          <ul class=\"fill-userinfo-list sortable-list list-unstyled col-md-12\" data-role=\"list\">
            ";
        // line 142
        $context["checkedUserFieldsKeys"] = (($this->getAttribute((isset($context["authSetting"]) ? $context["authSetting"] : null), "registerSort", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["authSetting"]) ? $context["authSetting"] : null), "registerSort", array()), array())) : (array()));
        // line 143
        echo "
            ";
        // line 144
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commonFields"]) ? $context["commonFields"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["field"]) {
            if ((isset($context["commonFields"]) ? $context["commonFields"] : null)) {
                // line 145
                echo "              <li class=\"list-group-item clearfix\" data-role=\"item\" >
                <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>&nbsp;
                <input type=\"checkbox\" name=\"registerSort[]\" value=\"";
                // line 147
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" ";
                if (twig_in_filter($context["key"], (isset($context["checkedUserFieldsKeys"]) ? $context["checkedUserFieldsKeys"] : null))) {
                    echo "checked=true";
                }
                echo " />
                <input type=\"hidden\"  name=\"registerFieldNameArray[]\" value=\"";
                // line 148
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\" /> 
                ";
                // line 149
                echo twig_escape_filter($this->env, $context["field"], "html", null, true);
                echo "
                ";
                // line 150
                if ((($context["key"] == "email") || ($context["key"] == "mobile"))) {
                    echo "<span class=\"text-muted\">  (带格式校检)</span>";
                }
                // line 151
                echo "              </li>
            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 153
        echo "
            ";
        // line 154
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["userFields"]) ? $context["userFields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            if (((array_key_exists("userFields", $context)) ? (_twig_default_filter((isset($context["userFields"]) ? $context["userFields"] : null), null)) : (null))) {
                // line 155
                echo "              <li class=\"list-group-item clearfix\" data-role=\"item\" >
                <span class=\"glyphicon glyphicon-resize-vertical sort-handle\"></span>&nbsp;
                <input type=\"checkbox\" name=\"registerSort[]\" value=\"";
                // line 157
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                echo "\" ";
                if (twig_in_filter($this->getAttribute($context["field"], "fieldName", array()), (isset($context["checkedUserFieldsKeys"]) ? $context["checkedUserFieldsKeys"] : null))) {
                    echo "checked=true";
                }
                echo " />
                <input type=\"hidden\"  name=\"registerFieldNameArray[]\" value=\"";
                // line 158
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                echo "\" /> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "title", array()), "html", null, true);
                echo "
              </li>
            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        echo "          </ul>

          <div class=\"help-block col-md-12\"><span class=\"text-success\">可拖动调整次序。酌情勾选需要收集的字段，若需要新的字段，请在［自定义字段设置］中添加。</span></div>

        </div>
        <div class=\"mbl\" style=\"text-align:center;\">
          <a href=\"javascript:\" id=\"hide-fields-list-btn\">收起 
            <span class=\"glyphicon glyphicon-chevron-up\"></span>
          </a>
        </div>
      </div>
    </div>
  </fieldset>

  <fieldset>
    <legend>其它设置</legend>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label>头像设置提醒</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 182
        echo $this->env->getExtension('topxia_html_twig')->radios("avatar_alert", array("none" => "从不", "in_user_center" => "每次进入\"我的课程\"时", "when_join_course" => "加入免费课程时强制要求"), _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("user_partner.avatar_alert"), "none"));
        echo "
      </div>
    </div>
    <div class=\"form-group\">
      <div class=\"col-md-3 control-label\">
        <label>用户修改用户名</label>
      </div>
      <div class=\"controls col-md-8 radios\">
        ";
        // line 190
        echo $this->env->getExtension('topxia_html_twig')->radios("nickname_enabled", array(1 => "开启", 0 => "关闭"), _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("user_partner.nickname_enabled"), 0));
        echo "
      </div>
    </div>
  </fieldset>

  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\"></div>
    <div class=\"controls col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">提交</button>  
    </div>
  </div>
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
  <input type=\"hidden\" name='_cloud_sms'  value= \"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("cloud_sms.sms_enabled"), "html", null, true);
        echo "\">
</form>

";
        // line 205
        $this->loadTemplate("TopxiaAdminBundle:System:user-fields.modal.html.twig", "TopxiaAdminBundle:System:user-fields.html.twig", 205)->display($context);
        // line 206
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:user-fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  456 => 206,  454 => 205,  448 => 202,  444 => 201,  430 => 190,  419 => 182,  396 => 161,  384 => 158,  376 => 157,  372 => 155,  367 => 154,  364 => 153,  356 => 151,  352 => 150,  348 => 149,  344 => 148,  336 => 147,  332 => 145,  327 => 144,  324 => 143,  322 => 142,  308 => 130,  302 => 129,  296 => 126,  293 => 125,  291 => 124,  286 => 122,  283 => 121,  280 => 120,  277 => 119,  274 => 118,  269 => 117,  265 => 116,  253 => 111,  249 => 110,  229 => 92,  217 => 89,  209 => 88,  205 => 86,  200 => 85,  197 => 84,  189 => 82,  185 => 81,  181 => 80,  177 => 79,  169 => 78,  165 => 76,  159 => 75,  157 => 74,  143 => 62,  137 => 61,  131 => 58,  128 => 57,  126 => 56,  121 => 54,  118 => 53,  115 => 52,  112 => 51,  109 => 50,  105 => 49,  93 => 44,  89 => 43,  81 => 37,  79 => 36,  69 => 28,  67 => 27,  48 => 11,  45 => 10,  42 => 9,  37 => 7,  34 => 6,  30 => 1,  28 => 5,  26 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set script_controller = 'system/user-fields' %}*/
/* */
/* {% set menu = 'admin_setting_user_fields' %}*/
/* {% block page_buttons %}*/
/* <button type="button" class="btn btn-success btn-sm pull-right" data-toggle="modal" data-target="#myModal">添加字段</button>*/
/* {% endblock %}*/
/* {% block main %}*/
/* */
/* {{ web_macro.flash_messages() }}*/
/* <form action="" class="form-horizontal" method="post">*/
/*   <fieldset>*/
/*     <legend>自定义字段设置</legend>*/
/*     <table class="table table-striped table-hover" id="course-table">*/
/*       <thead>*/
/*       <tr>*/
/*         <th>字段名称</th>*/
/*         <th>类型</th>*/
/*         <th>是否显示</th>*/
/*         <th>显示序号</th>*/
/*         <!-- <th>创建时间</th> -->*/
/*         <th>操作</th>*/
/*       </tr>*/
/*       </thead>*/
/*       <tbody>*/
/*         {% include 'TopxiaAdminBundle:System:user-fields.table.tr.html.twig' %}*/
/*       </tbody>*/
/*     </table>*/
/*   </fieldset>*/
/*   */
/*   */
/*   <fieldset>*/
/*     <legend>个人资料设置</legend>*/
/* */
/*     {% set commonFields = dict('userInfoFields')|default(null) %}*/
/* */
/*     <div class="form-group">*/
/*       <div class="col-md-3 control-label">*/
/*         <label >购买课程或班级时填写个人资料</label>*/
/*       </div>*/
/*       <div class="controls col-md-8 radios">*/
/*         {{ radios('buy_fill_userinfo', {1:'开启', 0:'关闭'}, courseSetting.buy_fill_userinfo|default(0)) }}*/
/*         <p class="help-block">开启后，{% if setting('default.user_name') %}{{setting('default.user_name')|default('学员')}}{% else %}学员{% endif %}购买课程时，需填写个人资料</p>*/
/*       </div>*/
/* */
/*       <div class="controls col-md-8 col-md-offset-3" id="show-list">*/
/*         <div class="pull-left">*/
/*           {% for sort in courseSetting.userinfoFields|default([]) %}*/
/*             {% set userCustomField = userFields[sort]|default(null) %}*/
/*             {% set userInfoFieldsDict = dict_text('userInfoFields', sort)|default(null) %}*/
/*             {% if userCustomField %}*/
/*               <button type="button" class="btn btn-default btn-xs">*/
/*                 {{ userCustomField.title }}*/
/*               </button>*/
/*             {% elseif userInfoFieldsDict %}*/
/*               <button type="button" class="btn btn-default btn-xs">*/
/*                 {{ userInfoFieldsDict }}*/
/*               </button>*/
/*             {% endif %}*/
/*           {% endfor %}*/
/*         </div>*/
/*           */
/*         <div class="pull-right ">*/
/*           <a href="javascript:" id="show-list-btn">编辑 */
/*             <span class="glyphicon glyphicon-chevron-down"></span>*/
/*           </a>*/
/*         </div>*/
/*       </div>*/
/* */
/*       <div class="controls col-md-8 col-md-offset-2" id="show-register-list" style="display:none">*/
/*         <div class="form-group">*/
/*           <ul class="register-list sortable-list list-unstyled col-md-12" data-role="list">*/
/*             {% set checkedFieldsKeys = courseSetting.userinfoFields|default([]) %}*/
/*             {% for key,field in commonFields if commonFields %}*/
/*               <li class="list-group-item clearfix" data-role="item" >*/
/*                 <span class="glyphicon glyphicon-resize-vertical sort-handle"></span>&nbsp;*/
/*                 <input type="checkbox" name="userinfoFields[]" value="{{ key }}" {% if key in checkedFieldsKeys %}checked=true{% endif %} />*/
/*                 <input type="hidden"  name="userinfoFieldNameArray[]" value="{{ key }}" /> */
/*                 {{ field }}*/
/*                 {% if key == 'email' or key == 'mobile' %}<span class="text-muted">  (带格式校检)</span>{% endif %}*/
/*               </li>*/
/*             {% endfor %}*/
/* */
/*             {% for field in userFields if userFields|default(null) %}*/
/*               <li class="list-group-item clearfix" data-role="item" >*/
/*                 <span class="glyphicon glyphicon-resize-vertical sort-handle"></span>&nbsp;*/
/*                 <input type="checkbox" name="userinfoFields[]" value="{{field.fieldName}}" {% if field.fieldName in checkedFieldsKeys %}checked=true{% endif %} />*/
/*                 <input type="hidden"  name="userinfoFieldNameArray[]" value="{{field.fieldName}}" /> {{field.title}}*/
/*               </li>*/
/*             {% endfor %}*/
/*           </ul>*/
/* */
/*           <div class="help-block col-md-12"><span class="text-success">可拖动调整次序。酌情勾选需要收集的字段，若需要新的字段，请在［自定义字段设置］中添加。</span></div>*/
/* */
/*         </div>*/
/*         <div class="mbl" style="text-align:center;">*/
/*           <a href="javascript:" id="hide-list-btn">收起 */
/*             <span class="glyphicon glyphicon-chevron-up"></span>*/
/*           </a>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*       <div class="col-md-3 control-label">*/
/*         <label >登录后填写个人资料</label>*/
/*       </div>*/
/*       <div class="controls col-md-8 radios">*/
/*         {{ radios('fill_userinfo_after_login', {1:'开启', 0:'关闭'}, setting('auth.fill_userinfo_after_login')|default(0)) }}*/
/*         <p class="help-block">开启后，{% if setting('default.user_name') %}{{setting('default.user_name')|default('学员')}}{% else %}学员{% endif %}登录后需填写个人资料</p>*/
/*       </div>*/
/* */
/*       <div class="controls col-md-8 col-md-offset-3" id="show-checked-fields-list">*/
/*         <div class="pull-left">*/
/*           {% for sort in authSetting.registerSort|default([]) %}*/
/*             {% if sort == 'emailOrMobile' %}{% set sort = 'email' %}{% endif %}*/
/*             {% set userCustomField = userFields[sort]|default(null) %}*/
/*             {% set userInfoFieldsDict = dict_text('userInfoFields', sort)|default(null) %}*/
/*             {% if userCustomField %}*/
/*               <button type="button" class="btn btn-default btn-xs">*/
/*                 {{ userCustomField.title }}*/
/*               </button>*/
/*             {% elseif userInfoFieldsDict %}*/
/*               <button type="button" class="btn btn-default btn-xs">*/
/*                 {{ userInfoFieldsDict }}*/
/*               </button>*/
/*             {% endif %}*/
/*           {% endfor %}*/
/*         </div>*/
/*           */
/*         <div class="pull-right ">*/
/*           <a href="javascript:" id="show-fields-list-btn">编辑 */
/*             <span class="glyphicon glyphicon-chevron-down"></span>*/
/*           </a>*/
/*         </div>*/
/*       </div>*/
/* */
/*       <div class="controls col-md-8 col-md-offset-2" id="show-fields-list" style="display:none">*/
/*         <div class="form-group">*/
/*           <ul class="fill-userinfo-list sortable-list list-unstyled col-md-12" data-role="list">*/
/*             {% set checkedUserFieldsKeys = authSetting.registerSort|default([]) %}*/
/* */
/*             {% for key,field in commonFields if commonFields %}*/
/*               <li class="list-group-item clearfix" data-role="item" >*/
/*                 <span class="glyphicon glyphicon-resize-vertical sort-handle"></span>&nbsp;*/
/*                 <input type="checkbox" name="registerSort[]" value="{{ key }}" {% if key in checkedUserFieldsKeys %}checked=true{% endif %} />*/
/*                 <input type="hidden"  name="registerFieldNameArray[]" value="{{ key }}" /> */
/*                 {{ field }}*/
/*                 {% if key == 'email' or key == 'mobile' %}<span class="text-muted">  (带格式校检)</span>{% endif %}*/
/*               </li>*/
/*             {% endfor %}*/
/* */
/*             {% for field in userFields if userFields|default(null) %}*/
/*               <li class="list-group-item clearfix" data-role="item" >*/
/*                 <span class="glyphicon glyphicon-resize-vertical sort-handle"></span>&nbsp;*/
/*                 <input type="checkbox" name="registerSort[]" value="{{field.fieldName}}" {% if field.fieldName in checkedUserFieldsKeys %}checked=true{% endif %} />*/
/*                 <input type="hidden"  name="registerFieldNameArray[]" value="{{field.fieldName}}" /> {{field.title}}*/
/*               </li>*/
/*             {% endfor %}*/
/*           </ul>*/
/* */
/*           <div class="help-block col-md-12"><span class="text-success">可拖动调整次序。酌情勾选需要收集的字段，若需要新的字段，请在［自定义字段设置］中添加。</span></div>*/
/* */
/*         </div>*/
/*         <div class="mbl" style="text-align:center;">*/
/*           <a href="javascript:" id="hide-fields-list-btn">收起 */
/*             <span class="glyphicon glyphicon-chevron-up"></span>*/
/*           </a>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </fieldset>*/
/* */
/*   <fieldset>*/
/*     <legend>其它设置</legend>*/
/*     <div class="form-group">*/
/*       <div class="col-md-3 control-label">*/
/*         <label>头像设置提醒</label>*/
/*       </div>*/
/*       <div class="controls col-md-8 radios">*/
/*         {{ radios('avatar_alert', {'none':'从不', 'in_user_center':'每次进入"我的课程"时', 'when_join_course':'加入免费课程时强制要求'}, setting('user_partner.avatar_alert')|default('none')) }}*/
/*       </div>*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <div class="col-md-3 control-label">*/
/*         <label>用户修改用户名</label>*/
/*       </div>*/
/*       <div class="controls col-md-8 radios">*/
/*         {{ radios('nickname_enabled', {1:'开启', 0:'关闭'}, setting('user_partner.nickname_enabled')|default(0)) }}*/
/*       </div>*/
/*     </div>*/
/*   </fieldset>*/
/* */
/*   <div class="form-group">*/
/*     <div class="col-md-3 control-label"></div>*/
/*     <div class="controls col-md-8">*/
/*       <button type="submit" class="btn btn-primary">提交</button>  */
/*     </div>*/
/*   </div>*/
/*   <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*   <input type="hidden" name='_cloud_sms'  value= "{{setting('cloud_sms.sms_enabled')}}">*/
/* </form>*/
/* */
/* {% include 'TopxiaAdminBundle:System:user-fields.modal.html.twig' %}*/
/* */
/* {% endblock %}*/
