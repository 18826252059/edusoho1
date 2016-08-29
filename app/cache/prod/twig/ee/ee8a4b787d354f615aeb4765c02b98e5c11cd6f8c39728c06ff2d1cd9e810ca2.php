<?php

/* TopxiaAdminBundle:EduCloud:sms.html.twig */
class __TwigTemplate_118faf61d3b3cff89ffe1d6552423492190e2f83ce4250b3569682435aeede05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:EduCloud:sms.html.twig", 1);
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
        // line 4
        $context["menu"] = "admin_edu_cloud_sms";
        // line 6
        $context["script_controller"] = "educloud/sms-setting";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "
\t";
        // line 10
        if ($this->env->getExtension('topxia_web_twig')->isTrial()) {
            // line 11
            echo "\t\t<div class=\"row form-group\">
      \t\t<div class=\"help-block\">
        \t\t</br></br>
        \t\t<script>
\t\t          \tvar _hmt = _hmt || [];
\t\t        </script>
\t\t        <script charset=\"utf-8\" src=\"http://wpa.b.qq.com/cgi/wpa.php\"></script>

        \t\t<p style = \"text-align: center;font-size:16px\">短信发送服务由EduSoho教育云提供 <a href=\"http://open.edusoho.com/educloud\" target=\"_blank\">了解详情</a></p>

        \t\t<p style = \"text-align:center;font-size:16px\">当前版本为试⽤版, 不能进行短信服务设置。如需购买授权版,请联系销售人员。 
\t\t        电话：0571-86819929 或 
                <span id=\"BizQQWPA\" onclick=\"_hmt.push(['_trackEvent', 'advisory', 'click', 'qq'])\"><a id=\"BizQQWPA\" href=\"javascript:\" style='text-decoration:none;'>QQ：800023860 </a>。</span>
\t\t        </p>

        \t\t<script type=\"text/javascript\">
            \t\tBizQQWPA.addCustom({aty: '0', a: '0', nameAccount: 800023860, selector: 'BizQQWPA'}); 
        \t\t</script>
        \t\t</br></br>
      \t\t</div>
    \t</div>
\t";
        } else {
            // line 32
            echo "\t
    ";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
            echo "

    ";
            // line 35
            if (( !(isset($context["smsStatus"]) ? $context["smsStatus"] : null) || ($this->getAttribute((isset($context["smsStatus"]) ? $context["smsStatus"] : null), "status", array()) == "error"))) {
                // line 36
                echo "      <div class=\"panel panel-default\">
        <table class=\"table table-striped table-hover\" style=\"word-break:break-all;\">
          <thead>
            <tr>
              <th style=\"text-align: center; width: 70%\">原因</th>
              <th style=\"text-align: center; width: 30%\">操作</th>
            </tr>
          </thead>
          <tbody style=\"text-align: center;\">
            <tr>
              <td>
                您还未开通云短信服务
              </td>
              <td>
                <span class=\"btn btn-default btn-sm\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                // line 50
                echo $this->env->getExtension('routing')->getPath("admin_edu_cloud_apply_for_sms");
                echo "\" > 申请开通云短信 </span>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

    ";
            } else {
                // line 58
                echo "      ";
                $context["hasSchoolName"] = ("" != _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("cloud_sms.sms_school_name"), ""));
                // line 59
                echo "      ";
                if (((($this->getAttribute((isset($context["smsStatus"]) ? $context["smsStatus"] : null), "status", array()) == "failed") && (isset($context["hasSchoolName"]) ? $context["hasSchoolName"] : null)) && ("on" == _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("cloud_sms.show_message"), "off")))) {
                    // line 60
                    echo "        <div class=\"alert alert-danger\">
          <a href=\"";
                    // line 61
                    echo $this->env->getExtension('routing')->getPath("admin_edu_cloud_sms_no_message");
                    echo "\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></a>
          ";
                    // line 62
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["smsStatus"]) ? $context["smsStatus"] : null), "schoolNameError", array()), "html", null, true);
                    echo "
        </div>
      ";
                }
                // line 65
                echo "
      <form class=\"form-horizontal\" method=\"post\" id=\"sms-form\" novalidate=\"\">
        <fieldset>
          ";
                // line 68
                if ((isset($context["hasSchoolName"]) ? $context["hasSchoolName"] : null)) {
                    // line 69
                    echo "            <legend>短信设置</legend>
            <div class=\"form-group\">
              <div class=\"col-md-3 control-label\">
                <label class=\"pull-right\">短信功能</label>
              </div>

              <div class=\"controls col-md-8 radios\">
                <label>
                  <input type=\"radio\" name=\"sms_enabled\" value=\"1\"
                  ";
                    // line 78
                    if ((_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("cloud_sms.sms_enabled"), "") == "1")) {
                        // line 79
                        echo "                    checked=\"checked\"
                  ";
                    }
                    // line 80
                    echo "> 开启
                </label>
                <label>
                  <input type=\"radio\" name=\"sms_enabled\" value=\"0\" 
                  ";
                    // line 84
                    if ((_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("cloud_sms.sms_enabled"), "") != "1")) {
                        // line 85
                        echo "                    checked=\"checked\"
                  ";
                    }
                    // line 86
                    echo "> 关闭
                </label>
                <p class=\"help-block\">短信最低￥0.055/条，点击<a href=\"http://open.edusoho.com/quotation/cloud/sms\" target=\"_blank\">这里</a>了解详情。</p>
              </div>
            </div>

          ";
                }
                // line 93
                echo "          ";
                if (twig_in_filter($this->getAttribute((isset($context["smsStatus"]) ? $context["smsStatus"] : null), "status", array()), array(0 => "passed", 1 => "failed"))) {
                    // line 94
                    echo "            ";
                    if (( !(isset($context["hasSchoolName"]) ? $context["hasSchoolName"] : null) && ($this->getAttribute((isset($context["smsStatus"]) ? $context["smsStatus"] : null), "status", array()) == "failed"))) {
                        // line 95
                        echo "              <div class=\"alert alert-danger\">
                您的网校名称“";
                        // line 96
                        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("cloud_sms.sms_school_candidate_name"), ""), "html", null, true);
                        echo "”未通过审核，原因是：";
                        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["smsStatus"]) ? $context["smsStatus"] : null), "message", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["smsStatus"]) ? $context["smsStatus"] : null), "message", array()), "网校名称不符合规范")) : ("网校名称不符合规范")), "html", null, true);
                        echo "

                <span class=\"btn btn-default btn-sm\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                        // line 98
                        echo $this->env->getExtension('routing')->getPath("admin_edu_cloud_apply_for_sms");
                        echo "\" > 重新申请 </span>
              </div>

            ";
                    } else {
                        // line 102
                        echo "              <div class=\"form-group\">  
                <div class=\"col-md-3 control-label\">
                  <label for=\"sms-school-name\" class=\"pull-right\">网校名称</label>
                </div>
                <div class=\"col-md-5 controls\">
                  <input type=\"text\" id=\"name\" name=\"sms-school-name\" class=\"form-control js-school-name\" value=\"";
                        // line 107
                        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("cloud_sms.sms_school_name"), ""), "html", null, true);
                        echo "\" readonly=\"readonly\">
                </div>
                <div class=\"col-md-2\">
                  <span class=\"btn btn-default js-alter-school-name\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                        // line 110
                        echo $this->env->getExtension('routing')->getPath("admin_edu_cloud_apply_for_sms");
                        echo "\">修改</span>
                </div>
              </div>  
            ";
                    }
                    // line 114
                    echo "
          ";
                } elseif (($this->getAttribute(                // line 115
(isset($context["smsStatus"]) ? $context["smsStatus"] : null), "status", array()) == "auditing")) {
                    // line 116
                    echo "            ";
                    if ((isset($context["hasSchoolName"]) ? $context["hasSchoolName"] : null)) {
                        // line 117
                        echo "              <div class=\"form-group\">
                <div class=\"col-md-3 control-label\">
                  <label for=\"name\" class=\"pull-right\">网校名称</label>
                </div>
                <div class=\"col-md-5 controls\">
                  <input type=\"text\" id=\"name\" name=\"sms-school-name\" class=\"form-control js-school-name\" value=\"";
                        // line 122
                        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("cloud_sms.sms_school_name"), ""), "html", null, true);
                        echo "\" readonly=\"readonly\">
                </div>
              </div>
            ";
                    }
                    // line 126
                    echo "
            <div class=\"alert alert-warning\">
              <span>网校名称【";
                    // line 128
                    echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("cloud_sms.sms_school_candidate_name"), ""), "html", null, true);
                    echo "】正在审核中 <a href=\"#js-apply-details\" class=\"btn btn-default btn-sm\" data-toggle=\"modal\">详情</a></span>
            </div>
                
            <div class = \"modal";
                    // line 131
                    echo "\" id=\"js-apply-details\" role = \"dialog\">
              <div class = \"modal-dialog\">
                <div class = \"modal-content\">
                  <div class = \"modal-header\">
                     <h4>申请详情</h4>
                  </div>
                  <div class = \"modal-body\">                                
                    <table class=\"table table-striped order-table\">
                      <tbody>
                        <tr> 
                          <th style=\"text-align: center;\" width=\"30%\">网校名称</th>
                          <td>";
                    // line 142
                    echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("cloud_sms.sms_school_candidate_name"), ""), "html", null, true);
                    echo "</td> 
                        </tr>
                        <tr> 
                          <th style=\"text-align: center;\" width=\"30%\">审核时间</th>
                          <td>
                            审核需1到3个工作日
                            ";
                    // line 148
                    if (("" != _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("cloud_sms.sms_school_name"), ""))) {
                        // line 149
                        echo "                              ，期间短信验证功能仍可以正常使用
                            ";
                    }
                    // line 151
                    echo "                          </td> 
                        </tr>
                        <tr> 
                          <th style=\"text-align: center;\" width=\"30%\">审核状态</th> 
                          <td> 审核中 </td> 
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class = \"modal-footer\">
                    <a class = \"btn btn-primary\" data-dismiss = \"modal\">关闭</a>
                  </div>
                </div>
              </div>
            </div>
          ";
                }
                // line 167
                echo "
          ";
                // line 168
                if ((isset($context["hasSchoolName"]) ? $context["hasSchoolName"] : null)) {
                    // line 169
                    echo "            <div class=\"js-usage\" ";
                    if ((_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("cloud_sms.sms_enabled"), "") != "1")) {
                        echo "style=\"display:none;\" ";
                    }
                    echo ">
              <legend>短信验证</legend>
              <table class=\"table table-bordered\">
                <thead>
                  <tr>
                    <th style=\"width:20%\"></th>
                    <th style=\"width:30%\">短信类型</th>
                    <th style=\"width:10%\">类型编号</th>
                    <th style=\"width:20%\">发送方式</th>
                    <th style=\"width:20%\">启用状态</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                  </tr>
                  <tr>
                    <td rowspan=\"4\" style=\"text-align:center;vertical-align:middle;font-size:18px;\">身份验证
                    </td>
                    <td>手机绑定</td>
                    <td>
                      1
                      <span class=\"glyphicon glyphicon-question-sign text-muted pull-right\" id=\"article-property-tips1\" data-toggle=\"tooltip\" data-placement=\"bottom\" href=\"javascript:\" title=\"\" data-original-title=\"\"></span> 
                      <div id=\"article-property-tips1-html\" style=\"display:none;\">
                        <div style=\"width:250px;font-size:14px;\">
                          <span style=\"color:blue;\"> 短信内容:</span><br>
                          “【<span id=\"js-sms-school-name\">网校通知</span>】您的验证码是：123456(请勿泄露)，此验证码30分钟内输入有效。";
                    // line 194
                    echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("cloud_sms.sms_school_name"), ""), "html", null, true);
                    echo "”<br>
                          <span style=\"color:blue;\"> 发送对象:</span><br>
                          单个用户
                          <br>
                        </div>
                      </div>
                    </td>
                    <td rowspan=\"4\" style=\"text-align:center;vertical-align:middle;font-size:18px;\">自动单发
                    <td class=\"radios\" style=\"text-align:center;\">
                      <label>
                        <input type=\"hidden\" name=\"sms_bind\" value=\"on\" >默认开启
                      </label>
                    </td>
                    </td>
                  </tr>
                  <tr>
                    <td>登录密码重置</td>
                    <td>
                      2
                      <span class=\"glyphicon glyphicon-question-sign text-muted pull-right\" id=\"article-property-tips2\" data-toggle=\"tooltip\" data-placement=\"bottom\" href=\"javascript:\" title=\"\" data-original-title=\"\"></span> 
                      <div id=\"article-property-tips2-html\" style=\"display:none;\">
                        <div style=\"width:250px;font-size:14px;\">
                          <span style=\"color:blue;\"> 短信内容:</span><br>
                          “【<span id=\"js-sms-school-name\">网校通知</span>】您的验证码是：123456(请勿泄露)，此验证码30分钟内输入有效。";
                    // line 217
                    echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("cloud_sms.sms_school_name"), ""), "html", null, true);
                    echo "”<br>
                          <span style=\"color:blue;\"> 发送对象:</span><br>
                          单个用户
                          <br>
                        </div>
                      </div>
                    </td>
                    <td class=\"radios\" style=\"text-align:center;\">
                      <label>
                        <input type=\"hidden\" name=\"sms_forget_password\" value=\"on\"> 默认开启
                      </label>
                    </td>
                  </tr>
                  <tr>
                    <td>支付密码重置</td>
                    <td>
                      3
                      <span class=\"glyphicon glyphicon-question-sign text-muted pull-right\" id=\"article-property-tips3\" data-toggle=\"tooltip\" data-placement=\"bottom\" href=\"javascript:\" title=\"\" data-original-title=\"\"></span> 
                      <div id=\"article-property-tips3-html\" style=\"display:none;\">
                        <div style=\"width:250px;font-size:14px;\">
                          <span style=\"color:blue;\"> 短信内容:</span><br>
                          “【<span id=\"js-sms-school-name\">网校通知</span>】您的验证码是：123456(请勿泄露)，此验证码30分钟内输入有效。";
                    // line 238
                    echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("cloud_sms.sms_school_name"), ""), "html", null, true);
                    echo "”<br>
                          <span style=\"color:blue;\"> 发送对象:</span><br>
                          单个用户
                          <br>
                        </div>
                      </div>
                    </td>
                    <td class=\"radios\" style=\"text-align:center;\">
                      <label>
                        <input type=\"hidden\" name=\"sms_forget_pay_password\" value=\"on\"> 默认开启
                      </label>
                    </td>
                  </tr>
                  <tr>
                    <td>使用网站余额支付</td>
                    <td>
                      4
                      <span class=\"glyphicon glyphicon-question-sign text-muted pull-right\" id=\"article-property-tips4\" data-toggle=\"tooltip\" data-placement=\"bottom\" href=\"javascript:\" title=\"\" data-original-title=\"\"></span> 
                      <div id=\"article-property-tips4-html\" style=\"display:none;\">
                        <div style=\"width:250px;font-size:14px;\">
                          <span style=\"color:blue;\"> 短信内容:</span><br>
                          “【<span id=\"js-sms-school-name\">网校通知</span>】您的验证码是：123456(请勿泄露)，此验证码30分钟内输入有效。";
                    // line 259
                    echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("cloud_sms.sms_school_name"), ""), "html", null, true);
                    echo "”<br>
                          <span style=\"color:blue;\"> 发送对象:</span><br>
                          单个用户
                          <br>
                        </div>
                      </div>
                    </td>
                    <td class=\"radios\" style=\"text-align:center;\">
                      <label>
                        <input type=\"hidden\" name=\"sms_user_pay\" value=\"on\"> 默认开启
                      </label>
                    </td>
                  </tr>
                </tbody>
              </table>
              <table class=\"table table-bordered\">
                <thead>
                  <tr>
                    <th style=\"width:20%\"></th>
                    <th style=\"width:30%\">短信类型</th>
                    <th style=\"width:10%\">类型编号</th>
                    <th style=\"width:20%\">发送方式</th>
                    <th style=\"width:20%\">启用状态</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                  </tr>
                  <tr>
                    <td rowspan=\"9\" style=\"text-align:center;vertical-align:middle;font-size:18px;\">教务通知
                    </td>
                    <td>新";
                    // line 290
                    echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
                    echo "发布</td>
                    <td>
                      5
                      <span class=\"glyphicon glyphicon-question-sign text-muted pull-right\" id=\"article-property-tips5\" data-toggle=\"tooltip\" data-placement=\"bottom\" href=\"javascript:\" title=\"\" data-original-title=\"\"></span> 
                      <div id=\"article-property-tips5-html\" style=\"display:none;\">
                        <div style=\"width:250px;font-size:14px;\">
                          <span style=\"color:blue;\"> 短信内容:</span><br>
                          “【<span id=\"js-sms-school-name\">网校通知</span>】同学们，";
                    // line 297
                    echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
                    echo "：《班级名称》现已开始报名！";
                    echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("cloud_sms.sms_school_name"), ""), "html", null, true);
                    echo " 链接地址”<br>
                          <span style=\"color:blue;\"> 发送对象:</span><br>
                          所有用户
                          <br>
                          <span style=\"color:blue;\"> 发送方式:</span><br>
                          进入后台班级列表页中的［操作］列中进行手动发送。
                          <br>
                        </div>
                      </div>
                    </td>
                    <td rowspan=\"2\" style=\"text-align:center;vertical-align:middle;font-size:18px;\"> 
                    手动群发
                    </td>
                    <td class=\"radios\">
                      <label>
                        <input type=\"radio\" name=\"sms_classroom_publish\" value=\"on\"
                        ";
                    // line 313
                    if ((_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("cloud_sms.sms_classroom_publish"), "off") == "on")) {
                        // line 314
                        echo "                          checked=\"checked\"
                        ";
                    }
                    // line 315
                    echo "> 开启
                      </label>
                      <label>
                          <input type=\"radio\" name=\"sms_classroom_publish\" value=\"off\" 
                          ";
                    // line 319
                    if ((_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("cloud_sms.sms_classroom_publish"), "off") != "on")) {
                        // line 320
                        echo "                            checked=\"checked\"
                          ";
                    }
                    // line 321
                    echo "> 关闭
                      </label>
                    </td>
                  </tr>
                  <tr>
                    <td>新课程发布</td>
                    <td>
                      6
                      <span class=\"glyphicon glyphicon-question-sign text-muted pull-right\" id=\"article-property-tips6\" data-toggle=\"tooltip\" data-placement=\"bottom\" href=\"javascript:\" title=\"\" data-original-title=\"\"></span> 
                      <div id=\"article-property-tips6-html\" style=\"display:none;\">
                        <div style=\"width:250px;font-size:14px;\">
                          <span style=\"color:blue;\"> 短信内容:</span><br>
                          “【<span id=\"js-sms-school-name\">网校通知</span>】同学们，课程：《课程名称》现已开始报名！";
                    // line 333
                    echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("cloud_sms.sms_school_name"), ""), "html", null, true);
                    echo " 链接地址”<br>
                          <span style=\"color:blue;\"> 发送对象:</span><br>
                          所有用户（或者班级用户）
                          <br>
                          <span style=\"color:blue;\"> 发送方式:</span><br>
                          进入后台课程列表页中的［操作］列中进行手动发送。
                          <br>
                        </div>
                      </div>
                    </td>
                    <td class=\"radios\">
                      <label>
                        <input type=\"radio\" name=\"sms_course_publish\" value=\"on\"
                        ";
                    // line 346
                    if ((_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("cloud_sms.sms_course_publish"), "off") == "on")) {
                        // line 347
                        echo "                          checked=\"checked\"
                        ";
                    }
                    // line 348
                    echo "> 开启
                      </label>
                      <label>
                          <input type=\"radio\" name=\"sms_course_publish\" value=\"off\" 
                          ";
                    // line 352
                    if ((_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("cloud_sms.sms_course_publish"), "off") != "on")) {
                        // line 353
                        echo "                            checked=\"checked\"
                          ";
                    }
                    // line 354
                    echo "> 关闭
                      </label>
                    </td>
                  </tr>
                  <tr>
                    <td>新课时发布通知（普通课程）</td>
                    <td>
                      7
                      <span class=\"glyphicon glyphicon-question-sign text-muted pull-right\" id=\"article-property-tips7\" data-toggle=\"tooltip\" data-placement=\"bottom\" href=\"javascript:\" title=\"\" data-original-title=\"\"></span> 
                      <div id=\"article-property-tips7-html\" style=\"display:none;\">
                        <div style=\"width:250px;font-size:14px;\">
                          <span style=\"color:blue;\"> 短信内容:</span><br>
                          “【<span id=\"js-sms-school-name\">网校通知</span>】您的课程：《课程名称》－课时：《课时名》已发布！";
                    // line 366
                    echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("cloud_sms.sms_school_name"), ""), "html", null, true);
                    echo " 链接地址”<br><span <span style=\"color:blue;\"> 发送对象:</span><br>
                          课程用户
                          <br>
                        </div>
                      </div>
                    </td>
                    <td rowspan=\"4\" style=\"text-align:center;vertical-align:middle;font-size:18px;\"> 
                    自动群发
                    </td>
                    <td class=\"radios\">
                      <label>
                        <input type=\"radio\" name=\"sms_normal_lesson_publish\" value=\"on\"
                        ";
                    // line 378
                    if ((_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("cloud_sms.sms_normal_lesson_publish"), "off") == "on")) {
                        // line 379
                        echo "                          checked=\"checked\"
                        ";
                    }
                    // line 380
                    echo "> 开启
                      </label>
                      <label>
                          <input type=\"radio\" name=\"sms_normal_lesson_publish\" value=\"off\" 
                          ";
                    // line 384
                    if ((_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("cloud_sms.sms_normal_lesson_publish"), "off") != "on")) {
                        // line 385
                        echo "                            checked=\"checked\"
                          ";
                    }
                    // line 386
                    echo "> 关闭
                      </label>
                    </td>
                  </tr>
                  <tr>
                    <td>新课时发布通知（直播）</td>
                    <td>
                      8
                      <span class=\"glyphicon glyphicon-question-sign text-muted pull-right\" id=\"article-property-tips8\" data-toggle=\"tooltip\" data-placement=\"bottom\" href=\"javascript:\" title=\"\" data-original-title=\"\"></span> 
                      <div id=\"article-property-tips8-html\" style=\"display:none;\">
                        <div style=\"width:250px;font-size:14px;\">
                          <span style=\"color:blue;\"> 短信内容:</span><br>
                          “【<span id=\"js-sms-school-name\">网校通知</span>】课程：《课程名》－课时：《课时名》将在［开播时间］开播！";
                    // line 398
                    echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("cloud_sms.sms_school_name"), ""), "html", null, true);
                    echo " 链接地址”<br>
                          <span style=\"color:blue;\"> 发送对象:</span><br>
                          课程用户
                          <br>
                        </div>
                      </div>
                    </td>
                    <td class=\"radios\">
                      <label>
                        <input type=\"radio\" name=\"sms_live_lesson_publish\" value=\"on\"
                        ";
                    // line 408
                    if ((_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("cloud_sms.sms_live_lesson_publish"), "off") == "on")) {
                        // line 409
                        echo "                          checked=\"checked\"
                        ";
                    }
                    // line 410
                    echo "> 开启
                      </label>
                      <label>
                          <input type=\"radio\" name=\"sms_live_lesson_publish\" value=\"off\" 
                          ";
                    // line 414
                    if ((_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("cloud_sms.sms_live_lesson_publish"), "off") != "on")) {
                        // line 415
                        echo "                            checked=\"checked\"
                          ";
                    }
                    // line 416
                    echo "> 关闭
                      </label>
                    </td>
                  </tr>
                  ";
                    // line 438
                    echo "                  <tr>
                    <td>直播开播前通知（提前1天）</td>
                    <td>
                      9
                      <span class=\"glyphicon glyphicon-question-sign text-muted pull-right\" id=\"article-property-tips9\" data-toggle=\"tooltip\" data-placement=\"bottom\" href=\"javascript:\" title=\"\" data-original-title=\"\"></span> 
                      <div id=\"article-property-tips9-html\" style=\"display:none;\">
                        <div style=\"width:250px;font-size:14px;\">
                          <span style=\"color:blue;\"> 短信内容:</span><br>
                          “【<span id=\"js-sms-school-name\">网校通知</span>】课程：《课程名》－课时《课时名》将在［开播时间］开播！";
                    // line 446
                    echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("cloud_sms.sms_school_name"), ""), "html", null, true);
                    echo " 链接地址”<br>
                        </div>
                        <span style=\"color:blue;\"> 发送对象:</span><br>
                          课程用户
                          <br>
                      </div>
                    </td>
                    <td class=\"radios\">
                      <label>
                        <input type=\"radio\" name=\"sms_live_play_one_day\" value=\"on\"
                        ";
                    // line 456
                    if ((_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("cloud_sms.sms_live_play_one_day"), "off") == "on")) {
                        // line 457
                        echo "                          checked=\"checked\"
                        ";
                    }
                    // line 458
                    echo "> 开启
                      </label>
                      <label>
                          <input type=\"radio\" name=\"sms_live_play_one_day\" value=\"off\" 
                          ";
                    // line 462
                    if ((_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("cloud_sms.sms_live_play_one_day"), "off") != "on")) {
                        // line 463
                        echo "                            checked=\"checked\"
                          ";
                    }
                    // line 464
                    echo "> 关闭
                      </label>
                    </td>
                  </tr>
                  <tr>
                    <td>直播开播前通知（提前1小时）</td>
                    <td>
                      10
                      <span class=\"glyphicon glyphicon-question-sign text-muted pull-right\" id=\"article-property-tips10\" data-toggle=\"tooltip\" data-placement=\"bottom\" href=\"javascript:\" title=\"\" data-original-title=\"\"></span> 
                      <div id=\"article-property-tips10-html\" style=\"display:none;\">
                        <div style=\"width:250px;font-size:14px;\">
                          <span style=\"color:blue;\"> 短信内容:</span><br>
                          “【<span id=\"js-sms-school-name\">网校通知</span>】课程：《课程名》－课时：《课时名》将在［开播时间］开播！";
                    // line 476
                    echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("cloud_sms.sms_school_name"), ""), "html", null, true);
                    echo " 链接地址”<br>
                          <span style=\"color:blue;\"> 发送对象:</span><br>
                          课程用户
                          <br>
                        </div>
                      </div>
                    </td>
                    <td class=\"radios\">
                      <label>
                        <input type=\"radio\" name=\"sms_live_play_one_hour\" value=\"on\"
                        ";
                    // line 486
                    if ((_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("cloud_sms.sms_live_play_one_hour"), "off") == "on")) {
                        // line 487
                        echo "                          checked=\"checked\"
                        ";
                    }
                    // line 488
                    echo "> 开启
                      </label>
                      <label>
                        <input type=\"radio\" name=\"sms_live_play_one_hour\" value=\"off\"
                        ";
                    // line 492
                    if ((_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("cloud_sms.sms_live_play_one_hour"), "off") != "on")) {
                        // line 493
                        echo "                          checked=\"checked\"
                        ";
                    }
                    // line 494
                    echo "> 关闭
                      </label>
                    </td>
                  </tr>
                  <tr>
                    <td>作业完成批阅</td>
                    <td>
                      11
                      <span class=\"glyphicon glyphicon-question-sign text-muted pull-right\" id=\"article-property-tips11\" data-toggle=\"tooltip\" data-placement=\"bottom\" href=\"javascript:\" title=\"\" data-original-title=\"\"></span> 
                      <div id=\"article-property-tips11-html\" style=\"display:none;\">
                        <div style=\"width:250px;font-size:14px;\">
                          <span style=\"color:blue;\"> 短信内容:</span><br>
                          “【<span id=\"js-sms-school-name\">网校通知</span>】您的课程：《课程名》-作业：《课时名》的作业已被老师批阅，快来看看吧！";
                    // line 506
                    echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("cloud_sms.sms_school_name"), ""), "html", null, true);
                    echo "”<br>
                          <span style=\"color:blue;\"> 发送对象:</span><br>
                          单个用户
                          <br>
                        </div>
                      </div>
                    </td>
                    <td rowspan=\"2\" style=\"text-align:center;vertical-align:middle;font-size:18px;\"> 
                    自动单发
                    </td>
                    <td class=\"radios\">
                      ";
                    // line 517
                    if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("Homework")) {
                        // line 518
                        echo "                        <label>
                          <input type=\"radio\" name=\"sms_homework_check\" value=\"on\"
                          ";
                        // line 520
                        if ((_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("cloud_sms.sms_homework_check"), "off") == "on")) {
                            // line 521
                            echo "                            checked=\"checked\"
                          ";
                        }
                        // line 522
                        echo "> 开启
                        </label>
                        <label>
                          <input type=\"radio\" name=\"sms_homework_check\" value=\"off\" 
                          ";
                        // line 526
                        if ((_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("cloud_sms.sms_homework_check"), "off") != "on")) {
                            // line 527
                            echo "                            checked=\"checked\"
                          ";
                        }
                        // line 528
                        echo "> 关闭
                        </label>
                      ";
                    } else {
                        // line 531
                        echo "                        请先安装作业插件！
                      ";
                    }
                    // line 533
                    echo "                    </td>
                  </tr>
                  <tr>
                    <td>试卷完成批阅</td>
                    <td>
                      12
                      <span class=\"glyphicon glyphicon-question-sign text-muted pull-right\" id=\"article-property-tips12\" data-toggle=\"tooltip\" data-placement=\"bottom\" href=\"javascript:\" title=\"\" data-original-title=\"\"></span> 
                      <div id=\"article-property-tips12-html\" style=\"display:none;\">
                        <div style=\"width:250px;font-size:14px;\">
                          <span style=\"color:blue;\"> 短信内容:</span><br>
                          “【<span id=\"js-sms-school-name\">网校通知</span>】您的课程：《课程名》-试卷：《课时名》的试卷已被老师批阅，快来看看吧！";
                    // line 543
                    echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("cloud_sms.sms_school_name"), ""), "html", null, true);
                    echo "”<br>
                          <span style=\"color:blue;\"> 发送对象:</span><br>
                          单个用户
                          <br>
                        </div>
                      </div>
                    </td>
                    <td class=\"radios\">
                      <label>
                        <input type=\"radio\" name=\"sms_testpaper_check\" value=\"on\"
                        ";
                    // line 553
                    if ((_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("cloud_sms.sms_testpaper_check"), "off") == "on")) {
                        // line 554
                        echo "                          checked=\"checked\"
                        ";
                    }
                    // line 555
                    echo "> 开启
                      </label>
                      <label>
                          <input type=\"radio\" name=\"sms_testpaper_check\" value=\"off\" 
                          ";
                    // line 559
                    if ((_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("cloud_sms.sms_testpaper_check"), "off") != "on")) {
                        // line 560
                        echo "                            checked=\"checked\"
                          ";
                    }
                    // line 561
                    echo "> 关闭
                      </label>
                    </td>
                  </tr>
                </tbody>
              </table>
              <table class=\"table table-bordered\">
                <thead>
                  <tr>
                    <th style=\"width:20%\"></th>
                    <th style=\"width:30%\">短信类型</th>
                    <th style=\"width:10%\">类型编号</th>
                    <th style=\"width:20%\">发送方式</th>
                    <th style=\"width:20%\">启用状态</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                  </tr>
                  <tr>
                    <td rowspan=\"4\" style=\"text-align:center;vertical-align:middle;font-size:18px;\">支付成功回执
                    </td>
                    <td>课程购买</td>
                    <td>
                      13
                      <span class=\"glyphicon glyphicon-question-sign text-muted pull-right\" id=\"article-property-tips13\" data-toggle=\"tooltip\" data-placement=\"bottom\" href=\"javascript:\" title=\"\" data-original-title=\"\"></span> 
                      <div id=\"article-property-tips13-html\" style=\"display:none;\">
                        <div style=\"width:250px;font-size:14px;\">
                          <span style=\"color:blue;\"> 短信内容:</span><br>
                          “【<span id=\"js-sms-school-name\">网校通知</span>】你已成功购买课程《课程名称》，支付［订单金额］。";
                    // line 590
                    echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("cloud_sms.sms_school_name"), ""), "html", null, true);
                    echo "”<br>
                          <span style=\"color:blue;\"> 发送对象:</span><br>
                          单个用户
                          <br>
                        </div>
                      </div>
                    </td>
                    <td rowspan=\"4\" style=\"text-align:center;vertical-align:middle;font-size:18px;\">自动单发
                    </td>
                    <td rowspan=\"4\" class=\"radios\" style=\"vertical-align:middle;\">
                      <label>
                        <input type=\"radio\" name=\"sms_order_pay_success\" value=\"on\"
                        ";
                    // line 602
                    if ((_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("cloud_sms.sms_order_pay_success"), "off") == "on")) {
                        // line 603
                        echo "                          checked=\"checked\"
                        ";
                    }
                    // line 604
                    echo "> 开启
                      </label>
                      <label>
                          <input type=\"radio\" name=\"sms_order_pay_success\" value=\"off\" 
                          ";
                    // line 608
                    if ((_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("cloud_sms.sms_order_pay_success"), "off") != "on")) {
                        // line 609
                        echo "                            checked=\"checked\"
                          ";
                    }
                    // line 610
                    echo "> 关闭
                      </label>
                    </td>
                  </tr>
                  <tr>
                    <td>班级购买</td>
                    <td>
                      14
                      <span class=\"glyphicon glyphicon-question-sign text-muted pull-right\" id=\"article-property-tips14\" data-toggle=\"tooltip\" data-placement=\"bottom\" href=\"javascript:\" title=\"\" data-original-title=\"\"></span> 
                      <div id=\"article-property-tips14-html\" style=\"display:none;\">
                        <div style=\"width:250px;font-size:14px;\">
                          <span style=\"color:blue;\"> 短信内容:</span><br>
                          “【<span id=\"js-sms-school-name\">网校通知</span>】你已成功购买班级《班级名称》，支付［订单金额］。";
                    // line 622
                    echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("cloud_sms.sms_school_name"), ""), "html", null, true);
                    echo "”<br>
                          <span style=\"color:blue;\"> 发送对象:</span><br>
                          单个用户
                          <br>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>会员购买</td>
                    <td>
                      15
                      <span class=\"glyphicon glyphicon-question-sign text-muted pull-right\" id=\"article-property-tips15\" data-toggle=\"tooltip\" data-placement=\"bottom\" href=\"javascript:\" title=\"\" data-original-title=\"\"></span> 
                      <div id=\"article-property-tips15-html\" style=\"display:none;\">
                        <div style=\"width:250px;font-size:14px;\">
                          <span style=\"color:blue;\"> 短信内容:</span><br>
                          “【<span id=\"js-sms-school-name\">网校通知</span>】你已成功购买《会员名称》，支付［订单金额］。";
                    // line 638
                    echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("cloud_sms.sms_school_name"), ""), "html", null, true);
                    echo "”<br>
                          <span style=\"color:blue;\"> 发送对象:</span><br>
                          单个用户
                          <br>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>虚拟币充值</td>
                    <td>
                      16
                      <span class=\"glyphicon glyphicon-question-sign text-muted pull-right\" id=\"article-property-tips16\" data-toggle=\"tooltip\" data-placement=\"bottom\" href=\"javascript:\" title=\"\" data-original-title=\"\"></span> 
                      <div id=\"article-property-tips16-html\" style=\"display:none;\">
                        <div style=\"width:250px;font-size:14px;\">
                          <span style=\"color:blue;\"> 短信内容:</span><br>
                          “【<span id=\"js-sms-school-name\">网校通知</span>】你已成功购买《虚拟币面值》《单位》，支付［订单金额］。";
                    // line 654
                    echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("cloud_sms.sms_school_name"), ""), "html", null, true);
                    echo "”<br>
                          <span style=\"color:blue;\"> 发送对象:</span><br>
                          单个用户
                          <br>
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          ";
                }
                // line 666
                echo "        </fieldset>

        ";
                // line 668
                if ((isset($context["hasSchoolName"]) ? $context["hasSchoolName"] : null)) {
                    // line 669
                    echo "          <div class=\"form-group\">
            <div class=\"controls col-md-offset-3 col-md-8\">
              <button type=\"submit\" class=\"btn btn-primary\">提交</button>
            </div>
          </div>
        ";
                }
                // line 675
                echo "        <input type=\"hidden\" name=\"register-mode\" value=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("auth.register_mode"), "html", null, true);
                echo "\">
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
                // line 676
                echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
                echo "\">

      </form>
    ";
            }
            // line 680
            echo "  ";
        }
        // line 681
        echo "\t
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:EduCloud:sms.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  976 => 681,  973 => 680,  966 => 676,  961 => 675,  953 => 669,  951 => 668,  947 => 666,  932 => 654,  913 => 638,  894 => 622,  880 => 610,  876 => 609,  874 => 608,  868 => 604,  864 => 603,  862 => 602,  847 => 590,  816 => 561,  812 => 560,  810 => 559,  804 => 555,  800 => 554,  798 => 553,  785 => 543,  773 => 533,  769 => 531,  764 => 528,  760 => 527,  758 => 526,  752 => 522,  748 => 521,  746 => 520,  742 => 518,  740 => 517,  726 => 506,  712 => 494,  708 => 493,  706 => 492,  700 => 488,  696 => 487,  694 => 486,  681 => 476,  667 => 464,  663 => 463,  661 => 462,  655 => 458,  651 => 457,  649 => 456,  636 => 446,  626 => 438,  620 => 416,  616 => 415,  614 => 414,  608 => 410,  604 => 409,  602 => 408,  589 => 398,  575 => 386,  571 => 385,  569 => 384,  563 => 380,  559 => 379,  557 => 378,  542 => 366,  528 => 354,  524 => 353,  522 => 352,  516 => 348,  512 => 347,  510 => 346,  494 => 333,  480 => 321,  476 => 320,  474 => 319,  468 => 315,  464 => 314,  462 => 313,  441 => 297,  431 => 290,  397 => 259,  373 => 238,  349 => 217,  323 => 194,  292 => 169,  290 => 168,  287 => 167,  269 => 151,  265 => 149,  263 => 148,  254 => 142,  241 => 131,  235 => 128,  231 => 126,  224 => 122,  217 => 117,  214 => 116,  212 => 115,  209 => 114,  202 => 110,  196 => 107,  189 => 102,  182 => 98,  175 => 96,  172 => 95,  169 => 94,  166 => 93,  157 => 86,  153 => 85,  151 => 84,  145 => 80,  141 => 79,  139 => 78,  128 => 69,  126 => 68,  121 => 65,  115 => 62,  111 => 61,  108 => 60,  105 => 59,  102 => 58,  91 => 50,  75 => 36,  73 => 35,  68 => 33,  65 => 32,  41 => 11,  39 => 10,  36 => 9,  33 => 8,  29 => 1,  27 => 6,  25 => 4,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* */
/* {% set menu = 'admin_edu_cloud_sms' %} */
/* */
/* {% set script_controller = 'educloud/sms-setting' %}*/
/* */
/* {% block main %}*/
/* */
/* 	{% if is_trial() %}*/
/* 		<div class="row form-group">*/
/*       		<div class="help-block">*/
/*         		</br></br>*/
/*         		<script>*/
/* 		          	var _hmt = _hmt || [];*/
/* 		        </script>*/
/* 		        <script charset="utf-8" src="http://wpa.b.qq.com/cgi/wpa.php"></script>*/
/* */
/*         		<p style = "text-align: center;font-size:16px">短信发送服务由EduSoho教育云提供 <a href="http://open.edusoho.com/educloud" target="_blank">了解详情</a></p>*/
/* */
/*         		<p style = "text-align:center;font-size:16px">当前版本为试⽤版, 不能进行短信服务设置。如需购买授权版,请联系销售人员。 */
/* 		        电话：0571-86819929 或 */
/*                 <span id="BizQQWPA" onclick="_hmt.push(['_trackEvent', 'advisory', 'click', 'qq'])"><a id="BizQQWPA" href="javascript:" style='text-decoration:none;'>QQ：800023860 </a>。</span>*/
/* 		        </p>*/
/* */
/*         		<script type="text/javascript">*/
/*             		BizQQWPA.addCustom({aty: '0', a: '0', nameAccount: 800023860, selector: 'BizQQWPA'}); */
/*         		</script>*/
/*         		</br></br>*/
/*       		</div>*/
/*     	</div>*/
/* 	{% else %}	*/
/*     {{ web_macro.flash_messages() }}*/
/* */
/*     {% if not smsStatus or smsStatus.status == 'error' %}*/
/*       <div class="panel panel-default">*/
/*         <table class="table table-striped table-hover" style="word-break:break-all;">*/
/*           <thead>*/
/*             <tr>*/
/*               <th style="text-align: center; width: 70%">原因</th>*/
/*               <th style="text-align: center; width: 30%">操作</th>*/
/*             </tr>*/
/*           </thead>*/
/*           <tbody style="text-align: center;">*/
/*             <tr>*/
/*               <td>*/
/*                 您还未开通云短信服务*/
/*               </td>*/
/*               <td>*/
/*                 <span class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal" data-url="{{path('admin_edu_cloud_apply_for_sms')}}" > 申请开通云短信 </span>*/
/*               </td>*/
/*             </tr>*/
/*           </tbody>*/
/*         </table>*/
/*       </div>*/
/* */
/*     {% else %}*/
/*       {% set hasSchoolName = ('' != setting('cloud_sms.sms_school_name')|default('')) %}*/
/*       {% if smsStatus.status == "failed" and hasSchoolName and ('on' == setting('cloud_sms.show_message')|default('off')) %}*/
/*         <div class="alert alert-danger">*/
/*           <a href="{{path("admin_edu_cloud_sms_no_message")}}" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></a>*/
/*           {{ smsStatus.schoolNameError }}*/
/*         </div>*/
/*       {% endif %}*/
/* */
/*       <form class="form-horizontal" method="post" id="sms-form" novalidate="">*/
/*         <fieldset>*/
/*           {% if hasSchoolName %}*/
/*             <legend>短信设置</legend>*/
/*             <div class="form-group">*/
/*               <div class="col-md-3 control-label">*/
/*                 <label class="pull-right">短信功能</label>*/
/*               </div>*/
/* */
/*               <div class="controls col-md-8 radios">*/
/*                 <label>*/
/*                   <input type="radio" name="sms_enabled" value="1"*/
/*                   {% if (setting('cloud_sms.sms_enabled')|default('')) == '1' %}*/
/*                     checked="checked"*/
/*                   {% endif %}> 开启*/
/*                 </label>*/
/*                 <label>*/
/*                   <input type="radio" name="sms_enabled" value="0" */
/*                   {% if (setting('cloud_sms.sms_enabled')|default('')) != '1' %}*/
/*                     checked="checked"*/
/*                   {% endif %}> 关闭*/
/*                 </label>*/
/*                 <p class="help-block">短信最低￥0.055/条，点击<a href="http://open.edusoho.com/quotation/cloud/sms" target="_blank">这里</a>了解详情。</p>*/
/*               </div>*/
/*             </div>*/
/* */
/*           {% endif %}*/
/*           {% if smsStatus.status in ['passed','failed'] %}*/
/*             {% if ( not hasSchoolName ) and (smsStatus.status == 'failed') %}*/
/*               <div class="alert alert-danger">*/
/*                 您的网校名称“{{setting('cloud_sms.sms_school_candidate_name')|default('')}}”未通过审核，原因是：{{ smsStatus.message|default('网校名称不符合规范') }}*/
/* */
/*                 <span class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal" data-url="{{path('admin_edu_cloud_apply_for_sms')}}" > 重新申请 </span>*/
/*               </div>*/
/* */
/*             {% else %}*/
/*               <div class="form-group">  */
/*                 <div class="col-md-3 control-label">*/
/*                   <label for="sms-school-name" class="pull-right">网校名称</label>*/
/*                 </div>*/
/*                 <div class="col-md-5 controls">*/
/*                   <input type="text" id="name" name="sms-school-name" class="form-control js-school-name" value="{{setting('cloud_sms.sms_school_name')|default('')}}" readonly="readonly">*/
/*                 </div>*/
/*                 <div class="col-md-2">*/
/*                   <span class="btn btn-default js-alter-school-name" data-toggle="modal" data-target="#modal" data-url="{{path('admin_edu_cloud_apply_for_sms')}}">修改</span>*/
/*                 </div>*/
/*               </div>  */
/*             {% endif %}*/
/* */
/*           {% elseif  smsStatus.status == 'auditing' %}*/
/*             {% if hasSchoolName %}*/
/*               <div class="form-group">*/
/*                 <div class="col-md-3 control-label">*/
/*                   <label for="name" class="pull-right">网校名称</label>*/
/*                 </div>*/
/*                 <div class="col-md-5 controls">*/
/*                   <input type="text" id="name" name="sms-school-name" class="form-control js-school-name" value="{{setting('cloud_sms.sms_school_name')|default('')}}" readonly="readonly">*/
/*                 </div>*/
/*               </div>*/
/*             {% endif %}*/
/* */
/*             <div class="alert alert-warning">*/
/*               <span>网校名称【{{setting('cloud_sms.sms_school_candidate_name')|default('')}}】正在审核中 <a href="#js-apply-details" class="btn btn-default btn-sm" data-toggle="modal">详情</a></span>*/
/*             </div>*/
/*                 */
/*             <div class = "modal{#  fade #}" id="js-apply-details" role = "dialog">*/
/*               <div class = "modal-dialog">*/
/*                 <div class = "modal-content">*/
/*                   <div class = "modal-header">*/
/*                      <h4>申请详情</h4>*/
/*                   </div>*/
/*                   <div class = "modal-body">                                */
/*                     <table class="table table-striped order-table">*/
/*                       <tbody>*/
/*                         <tr> */
/*                           <th style="text-align: center;" width="30%">网校名称</th>*/
/*                           <td>{{ setting('cloud_sms.sms_school_candidate_name')|default('') }}</td> */
/*                         </tr>*/
/*                         <tr> */
/*                           <th style="text-align: center;" width="30%">审核时间</th>*/
/*                           <td>*/
/*                             审核需1到3个工作日*/
/*                             {% if '' != (setting('cloud_sms.sms_school_name')|default('')) %}*/
/*                               ，期间短信验证功能仍可以正常使用*/
/*                             {% endif %}*/
/*                           </td> */
/*                         </tr>*/
/*                         <tr> */
/*                           <th style="text-align: center;" width="30%">审核状态</th> */
/*                           <td> 审核中 </td> */
/*                         </tr>*/
/*                       </tbody>*/
/*                     </table>*/
/*                   </div>*/
/*                   <div class = "modal-footer">*/
/*                     <a class = "btn btn-primary" data-dismiss = "modal">关闭</a>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*           {% endif %}*/
/* */
/*           {% if hasSchoolName %}*/
/*             <div class="js-usage" {% if (setting('cloud_sms.sms_enabled')|default('')) != '1' %}style="display:none;" {% endif %}>*/
/*               <legend>短信验证</legend>*/
/*               <table class="table table-bordered">*/
/*                 <thead>*/
/*                   <tr>*/
/*                     <th style="width:20%"></th>*/
/*                     <th style="width:30%">短信类型</th>*/
/*                     <th style="width:10%">类型编号</th>*/
/*                     <th style="width:20%">发送方式</th>*/
/*                     <th style="width:20%">启用状态</th>*/
/*                   </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                   <tr>*/
/*                   </tr>*/
/*                   <tr>*/
/*                     <td rowspan="4" style="text-align:center;vertical-align:middle;font-size:18px;">身份验证*/
/*                     </td>*/
/*                     <td>手机绑定</td>*/
/*                     <td>*/
/*                       1*/
/*                       <span class="glyphicon glyphicon-question-sign text-muted pull-right" id="article-property-tips1" data-toggle="tooltip" data-placement="bottom" href="javascript:" title="" data-original-title=""></span> */
/*                       <div id="article-property-tips1-html" style="display:none;">*/
/*                         <div style="width:250px;font-size:14px;">*/
/*                           <span style="color:blue;"> 短信内容:</span><br>*/
/*                           “【<span id="js-sms-school-name">网校通知</span>】您的验证码是：123456(请勿泄露)，此验证码30分钟内输入有效。{{setting('cloud_sms.sms_school_name')|default('')}}”<br>*/
/*                           <span style="color:blue;"> 发送对象:</span><br>*/
/*                           单个用户*/
/*                           <br>*/
/*                         </div>*/
/*                       </div>*/
/*                     </td>*/
/*                     <td rowspan="4" style="text-align:center;vertical-align:middle;font-size:18px;">自动单发*/
/*                     <td class="radios" style="text-align:center;">*/
/*                       <label>*/
/*                         <input type="hidden" name="sms_bind" value="on" >默认开启*/
/*                       </label>*/
/*                     </td>*/
/*                     </td>*/
/*                   </tr>*/
/*                   <tr>*/
/*                     <td>登录密码重置</td>*/
/*                     <td>*/
/*                       2*/
/*                       <span class="glyphicon glyphicon-question-sign text-muted pull-right" id="article-property-tips2" data-toggle="tooltip" data-placement="bottom" href="javascript:" title="" data-original-title=""></span> */
/*                       <div id="article-property-tips2-html" style="display:none;">*/
/*                         <div style="width:250px;font-size:14px;">*/
/*                           <span style="color:blue;"> 短信内容:</span><br>*/
/*                           “【<span id="js-sms-school-name">网校通知</span>】您的验证码是：123456(请勿泄露)，此验证码30分钟内输入有效。{{setting('cloud_sms.sms_school_name')|default('')}}”<br>*/
/*                           <span style="color:blue;"> 发送对象:</span><br>*/
/*                           单个用户*/
/*                           <br>*/
/*                         </div>*/
/*                       </div>*/
/*                     </td>*/
/*                     <td class="radios" style="text-align:center;">*/
/*                       <label>*/
/*                         <input type="hidden" name="sms_forget_password" value="on"> 默认开启*/
/*                       </label>*/
/*                     </td>*/
/*                   </tr>*/
/*                   <tr>*/
/*                     <td>支付密码重置</td>*/
/*                     <td>*/
/*                       3*/
/*                       <span class="glyphicon glyphicon-question-sign text-muted pull-right" id="article-property-tips3" data-toggle="tooltip" data-placement="bottom" href="javascript:" title="" data-original-title=""></span> */
/*                       <div id="article-property-tips3-html" style="display:none;">*/
/*                         <div style="width:250px;font-size:14px;">*/
/*                           <span style="color:blue;"> 短信内容:</span><br>*/
/*                           “【<span id="js-sms-school-name">网校通知</span>】您的验证码是：123456(请勿泄露)，此验证码30分钟内输入有效。{{setting('cloud_sms.sms_school_name')|default('')}}”<br>*/
/*                           <span style="color:blue;"> 发送对象:</span><br>*/
/*                           单个用户*/
/*                           <br>*/
/*                         </div>*/
/*                       </div>*/
/*                     </td>*/
/*                     <td class="radios" style="text-align:center;">*/
/*                       <label>*/
/*                         <input type="hidden" name="sms_forget_pay_password" value="on"> 默认开启*/
/*                       </label>*/
/*                     </td>*/
/*                   </tr>*/
/*                   <tr>*/
/*                     <td>使用网站余额支付</td>*/
/*                     <td>*/
/*                       4*/
/*                       <span class="glyphicon glyphicon-question-sign text-muted pull-right" id="article-property-tips4" data-toggle="tooltip" data-placement="bottom" href="javascript:" title="" data-original-title=""></span> */
/*                       <div id="article-property-tips4-html" style="display:none;">*/
/*                         <div style="width:250px;font-size:14px;">*/
/*                           <span style="color:blue;"> 短信内容:</span><br>*/
/*                           “【<span id="js-sms-school-name">网校通知</span>】您的验证码是：123456(请勿泄露)，此验证码30分钟内输入有效。{{setting('cloud_sms.sms_school_name')|default('')}}”<br>*/
/*                           <span style="color:blue;"> 发送对象:</span><br>*/
/*                           单个用户*/
/*                           <br>*/
/*                         </div>*/
/*                       </div>*/
/*                     </td>*/
/*                     <td class="radios" style="text-align:center;">*/
/*                       <label>*/
/*                         <input type="hidden" name="sms_user_pay" value="on"> 默认开启*/
/*                       </label>*/
/*                     </td>*/
/*                   </tr>*/
/*                 </tbody>*/
/*               </table>*/
/*               <table class="table table-bordered">*/
/*                 <thead>*/
/*                   <tr>*/
/*                     <th style="width:20%"></th>*/
/*                     <th style="width:30%">短信类型</th>*/
/*                     <th style="width:10%">类型编号</th>*/
/*                     <th style="width:20%">发送方式</th>*/
/*                     <th style="width:20%">启用状态</th>*/
/*                   </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                   <tr>*/
/*                   </tr>*/
/*                   <tr>*/
/*                     <td rowspan="9" style="text-align:center;vertical-align:middle;font-size:18px;">教务通知*/
/*                     </td>*/
/*                     <td>新{{ setting('classroom.name')|default("班级") }}发布</td>*/
/*                     <td>*/
/*                       5*/
/*                       <span class="glyphicon glyphicon-question-sign text-muted pull-right" id="article-property-tips5" data-toggle="tooltip" data-placement="bottom" href="javascript:" title="" data-original-title=""></span> */
/*                       <div id="article-property-tips5-html" style="display:none;">*/
/*                         <div style="width:250px;font-size:14px;">*/
/*                           <span style="color:blue;"> 短信内容:</span><br>*/
/*                           “【<span id="js-sms-school-name">网校通知</span>】同学们，{{ setting('classroom.name')|default("班级") }}：《班级名称》现已开始报名！{{setting('cloud_sms.sms_school_name')|default('')}} 链接地址”<br>*/
/*                           <span style="color:blue;"> 发送对象:</span><br>*/
/*                           所有用户*/
/*                           <br>*/
/*                           <span style="color:blue;"> 发送方式:</span><br>*/
/*                           进入后台班级列表页中的［操作］列中进行手动发送。*/
/*                           <br>*/
/*                         </div>*/
/*                       </div>*/
/*                     </td>*/
/*                     <td rowspan="2" style="text-align:center;vertical-align:middle;font-size:18px;"> */
/*                     手动群发*/
/*                     </td>*/
/*                     <td class="radios">*/
/*                       <label>*/
/*                         <input type="radio" name="sms_classroom_publish" value="on"*/
/*                         {% if (setting('cloud_sms.sms_classroom_publish')|default('off')) == 'on' %}*/
/*                           checked="checked"*/
/*                         {% endif %}> 开启*/
/*                       </label>*/
/*                       <label>*/
/*                           <input type="radio" name="sms_classroom_publish" value="off" */
/*                           {% if (setting('cloud_sms.sms_classroom_publish')|default('off')) != 'on' %}*/
/*                             checked="checked"*/
/*                           {% endif %}> 关闭*/
/*                       </label>*/
/*                     </td>*/
/*                   </tr>*/
/*                   <tr>*/
/*                     <td>新课程发布</td>*/
/*                     <td>*/
/*                       6*/
/*                       <span class="glyphicon glyphicon-question-sign text-muted pull-right" id="article-property-tips6" data-toggle="tooltip" data-placement="bottom" href="javascript:" title="" data-original-title=""></span> */
/*                       <div id="article-property-tips6-html" style="display:none;">*/
/*                         <div style="width:250px;font-size:14px;">*/
/*                           <span style="color:blue;"> 短信内容:</span><br>*/
/*                           “【<span id="js-sms-school-name">网校通知</span>】同学们，课程：《课程名称》现已开始报名！{{setting('cloud_sms.sms_school_name')|default('')}} 链接地址”<br>*/
/*                           <span style="color:blue;"> 发送对象:</span><br>*/
/*                           所有用户（或者班级用户）*/
/*                           <br>*/
/*                           <span style="color:blue;"> 发送方式:</span><br>*/
/*                           进入后台课程列表页中的［操作］列中进行手动发送。*/
/*                           <br>*/
/*                         </div>*/
/*                       </div>*/
/*                     </td>*/
/*                     <td class="radios">*/
/*                       <label>*/
/*                         <input type="radio" name="sms_course_publish" value="on"*/
/*                         {% if (setting('cloud_sms.sms_course_publish')|default('off')) == 'on' %}*/
/*                           checked="checked"*/
/*                         {% endif %}> 开启*/
/*                       </label>*/
/*                       <label>*/
/*                           <input type="radio" name="sms_course_publish" value="off" */
/*                           {% if (setting('cloud_sms.sms_course_publish')|default('off')) != 'on' %}*/
/*                             checked="checked"*/
/*                           {% endif %}> 关闭*/
/*                       </label>*/
/*                     </td>*/
/*                   </tr>*/
/*                   <tr>*/
/*                     <td>新课时发布通知（普通课程）</td>*/
/*                     <td>*/
/*                       7*/
/*                       <span class="glyphicon glyphicon-question-sign text-muted pull-right" id="article-property-tips7" data-toggle="tooltip" data-placement="bottom" href="javascript:" title="" data-original-title=""></span> */
/*                       <div id="article-property-tips7-html" style="display:none;">*/
/*                         <div style="width:250px;font-size:14px;">*/
/*                           <span style="color:blue;"> 短信内容:</span><br>*/
/*                           “【<span id="js-sms-school-name">网校通知</span>】您的课程：《课程名称》－课时：《课时名》已发布！{{setting('cloud_sms.sms_school_name')|default('')}} 链接地址”<br><span <span style="color:blue;"> 发送对象:</span><br>*/
/*                           课程用户*/
/*                           <br>*/
/*                         </div>*/
/*                       </div>*/
/*                     </td>*/
/*                     <td rowspan="4" style="text-align:center;vertical-align:middle;font-size:18px;"> */
/*                     自动群发*/
/*                     </td>*/
/*                     <td class="radios">*/
/*                       <label>*/
/*                         <input type="radio" name="sms_normal_lesson_publish" value="on"*/
/*                         {% if (setting('cloud_sms.sms_normal_lesson_publish')|default('off')) == 'on' %}*/
/*                           checked="checked"*/
/*                         {% endif %}> 开启*/
/*                       </label>*/
/*                       <label>*/
/*                           <input type="radio" name="sms_normal_lesson_publish" value="off" */
/*                           {% if (setting('cloud_sms.sms_normal_lesson_publish')|default('off')) != 'on' %}*/
/*                             checked="checked"*/
/*                           {% endif %}> 关闭*/
/*                       </label>*/
/*                     </td>*/
/*                   </tr>*/
/*                   <tr>*/
/*                     <td>新课时发布通知（直播）</td>*/
/*                     <td>*/
/*                       8*/
/*                       <span class="glyphicon glyphicon-question-sign text-muted pull-right" id="article-property-tips8" data-toggle="tooltip" data-placement="bottom" href="javascript:" title="" data-original-title=""></span> */
/*                       <div id="article-property-tips8-html" style="display:none;">*/
/*                         <div style="width:250px;font-size:14px;">*/
/*                           <span style="color:blue;"> 短信内容:</span><br>*/
/*                           “【<span id="js-sms-school-name">网校通知</span>】课程：《课程名》－课时：《课时名》将在［开播时间］开播！{{setting('cloud_sms.sms_school_name')|default('')}} 链接地址”<br>*/
/*                           <span style="color:blue;"> 发送对象:</span><br>*/
/*                           课程用户*/
/*                           <br>*/
/*                         </div>*/
/*                       </div>*/
/*                     </td>*/
/*                     <td class="radios">*/
/*                       <label>*/
/*                         <input type="radio" name="sms_live_lesson_publish" value="on"*/
/*                         {% if (setting('cloud_sms.sms_live_lesson_publish')|default('off')) == 'on' %}*/
/*                           checked="checked"*/
/*                         {% endif %}> 开启*/
/*                       </label>*/
/*                       <label>*/
/*                           <input type="radio" name="sms_live_lesson_publish" value="off" */
/*                           {% if (setting('cloud_sms.sms_live_lesson_publish')|default('off')) != 'on' %}*/
/*                             checked="checked"*/
/*                           {% endif %}> 关闭*/
/*                       </label>*/
/*                     </td>*/
/*                   </tr>*/
/*                   {#<tr>*/
/*                     <td>预约辅导开课通知</td>*/
/*                     <td>9</td>*/
/*                     <td class="radios">*/
/*                       <label>*/
/*                         <input type="radio" name="sms_user_pay" value="on"*/
/*                         {% if (setting('cloud_sms.sms_user_pay')|default('off')) == 'on' %}*/
/*                           checked="checked"*/
/*                         {% endif %}> 开启*/
/*                       </label>*/
/*                       <label>*/
/*                           <input type="radio" name="sms_user_pay" value="off" */
/*                           {% if (setting('cloud_sms.sms_user_pay')|default('off')) != 'on' %}*/
/*                             checked="checked"*/
/*                           {% endif %}> 关闭*/
/*                       </label>*/
/*                     </td>*/
/*                   </tr> #}*/
/*                   <tr>*/
/*                     <td>直播开播前通知（提前1天）</td>*/
/*                     <td>*/
/*                       9*/
/*                       <span class="glyphicon glyphicon-question-sign text-muted pull-right" id="article-property-tips9" data-toggle="tooltip" data-placement="bottom" href="javascript:" title="" data-original-title=""></span> */
/*                       <div id="article-property-tips9-html" style="display:none;">*/
/*                         <div style="width:250px;font-size:14px;">*/
/*                           <span style="color:blue;"> 短信内容:</span><br>*/
/*                           “【<span id="js-sms-school-name">网校通知</span>】课程：《课程名》－课时《课时名》将在［开播时间］开播！{{setting('cloud_sms.sms_school_name')|default('')}} 链接地址”<br>*/
/*                         </div>*/
/*                         <span style="color:blue;"> 发送对象:</span><br>*/
/*                           课程用户*/
/*                           <br>*/
/*                       </div>*/
/*                     </td>*/
/*                     <td class="radios">*/
/*                       <label>*/
/*                         <input type="radio" name="sms_live_play_one_day" value="on"*/
/*                         {% if (setting('cloud_sms.sms_live_play_one_day')|default('off')) == 'on' %}*/
/*                           checked="checked"*/
/*                         {% endif %}> 开启*/
/*                       </label>*/
/*                       <label>*/
/*                           <input type="radio" name="sms_live_play_one_day" value="off" */
/*                           {% if (setting('cloud_sms.sms_live_play_one_day')|default('off')) != 'on' %}*/
/*                             checked="checked"*/
/*                           {% endif %}> 关闭*/
/*                       </label>*/
/*                     </td>*/
/*                   </tr>*/
/*                   <tr>*/
/*                     <td>直播开播前通知（提前1小时）</td>*/
/*                     <td>*/
/*                       10*/
/*                       <span class="glyphicon glyphicon-question-sign text-muted pull-right" id="article-property-tips10" data-toggle="tooltip" data-placement="bottom" href="javascript:" title="" data-original-title=""></span> */
/*                       <div id="article-property-tips10-html" style="display:none;">*/
/*                         <div style="width:250px;font-size:14px;">*/
/*                           <span style="color:blue;"> 短信内容:</span><br>*/
/*                           “【<span id="js-sms-school-name">网校通知</span>】课程：《课程名》－课时：《课时名》将在［开播时间］开播！{{setting('cloud_sms.sms_school_name')|default('')}} 链接地址”<br>*/
/*                           <span style="color:blue;"> 发送对象:</span><br>*/
/*                           课程用户*/
/*                           <br>*/
/*                         </div>*/
/*                       </div>*/
/*                     </td>*/
/*                     <td class="radios">*/
/*                       <label>*/
/*                         <input type="radio" name="sms_live_play_one_hour" value="on"*/
/*                         {% if (setting('cloud_sms.sms_live_play_one_hour')|default('off')) == 'on' %}*/
/*                           checked="checked"*/
/*                         {% endif %}> 开启*/
/*                       </label>*/
/*                       <label>*/
/*                         <input type="radio" name="sms_live_play_one_hour" value="off"*/
/*                         {% if (setting('cloud_sms.sms_live_play_one_hour')|default('off')) != 'on' %}*/
/*                           checked="checked"*/
/*                         {% endif %}> 关闭*/
/*                       </label>*/
/*                     </td>*/
/*                   </tr>*/
/*                   <tr>*/
/*                     <td>作业完成批阅</td>*/
/*                     <td>*/
/*                       11*/
/*                       <span class="glyphicon glyphicon-question-sign text-muted pull-right" id="article-property-tips11" data-toggle="tooltip" data-placement="bottom" href="javascript:" title="" data-original-title=""></span> */
/*                       <div id="article-property-tips11-html" style="display:none;">*/
/*                         <div style="width:250px;font-size:14px;">*/
/*                           <span style="color:blue;"> 短信内容:</span><br>*/
/*                           “【<span id="js-sms-school-name">网校通知</span>】您的课程：《课程名》-作业：《课时名》的作业已被老师批阅，快来看看吧！{{setting('cloud_sms.sms_school_name')|default('')}}”<br>*/
/*                           <span style="color:blue;"> 发送对象:</span><br>*/
/*                           单个用户*/
/*                           <br>*/
/*                         </div>*/
/*                       </div>*/
/*                     </td>*/
/*                     <td rowspan="2" style="text-align:center;vertical-align:middle;font-size:18px;"> */
/*                     自动单发*/
/*                     </td>*/
/*                     <td class="radios">*/
/*                       {% if (is_plugin_installed('Homework')) %}*/
/*                         <label>*/
/*                           <input type="radio" name="sms_homework_check" value="on"*/
/*                           {% if (setting('cloud_sms.sms_homework_check')|default('off')) == 'on' %}*/
/*                             checked="checked"*/
/*                           {% endif %}> 开启*/
/*                         </label>*/
/*                         <label>*/
/*                           <input type="radio" name="sms_homework_check" value="off" */
/*                           {% if (setting('cloud_sms.sms_homework_check')|default('off')) != 'on' %}*/
/*                             checked="checked"*/
/*                           {% endif %}> 关闭*/
/*                         </label>*/
/*                       {% else %}*/
/*                         请先安装作业插件！*/
/*                       {% endif %}*/
/*                     </td>*/
/*                   </tr>*/
/*                   <tr>*/
/*                     <td>试卷完成批阅</td>*/
/*                     <td>*/
/*                       12*/
/*                       <span class="glyphicon glyphicon-question-sign text-muted pull-right" id="article-property-tips12" data-toggle="tooltip" data-placement="bottom" href="javascript:" title="" data-original-title=""></span> */
/*                       <div id="article-property-tips12-html" style="display:none;">*/
/*                         <div style="width:250px;font-size:14px;">*/
/*                           <span style="color:blue;"> 短信内容:</span><br>*/
/*                           “【<span id="js-sms-school-name">网校通知</span>】您的课程：《课程名》-试卷：《课时名》的试卷已被老师批阅，快来看看吧！{{setting('cloud_sms.sms_school_name')|default('')}}”<br>*/
/*                           <span style="color:blue;"> 发送对象:</span><br>*/
/*                           单个用户*/
/*                           <br>*/
/*                         </div>*/
/*                       </div>*/
/*                     </td>*/
/*                     <td class="radios">*/
/*                       <label>*/
/*                         <input type="radio" name="sms_testpaper_check" value="on"*/
/*                         {% if (setting('cloud_sms.sms_testpaper_check')|default('off')) == 'on' %}*/
/*                           checked="checked"*/
/*                         {% endif %}> 开启*/
/*                       </label>*/
/*                       <label>*/
/*                           <input type="radio" name="sms_testpaper_check" value="off" */
/*                           {% if (setting('cloud_sms.sms_testpaper_check')|default('off')) != 'on' %}*/
/*                             checked="checked"*/
/*                           {% endif %}> 关闭*/
/*                       </label>*/
/*                     </td>*/
/*                   </tr>*/
/*                 </tbody>*/
/*               </table>*/
/*               <table class="table table-bordered">*/
/*                 <thead>*/
/*                   <tr>*/
/*                     <th style="width:20%"></th>*/
/*                     <th style="width:30%">短信类型</th>*/
/*                     <th style="width:10%">类型编号</th>*/
/*                     <th style="width:20%">发送方式</th>*/
/*                     <th style="width:20%">启用状态</th>*/
/*                   </tr>*/
/*                 </thead>*/
/*                 <tbody>*/
/*                   <tr>*/
/*                   </tr>*/
/*                   <tr>*/
/*                     <td rowspan="4" style="text-align:center;vertical-align:middle;font-size:18px;">支付成功回执*/
/*                     </td>*/
/*                     <td>课程购买</td>*/
/*                     <td>*/
/*                       13*/
/*                       <span class="glyphicon glyphicon-question-sign text-muted pull-right" id="article-property-tips13" data-toggle="tooltip" data-placement="bottom" href="javascript:" title="" data-original-title=""></span> */
/*                       <div id="article-property-tips13-html" style="display:none;">*/
/*                         <div style="width:250px;font-size:14px;">*/
/*                           <span style="color:blue;"> 短信内容:</span><br>*/
/*                           “【<span id="js-sms-school-name">网校通知</span>】你已成功购买课程《课程名称》，支付［订单金额］。{{setting('cloud_sms.sms_school_name')|default('')}}”<br>*/
/*                           <span style="color:blue;"> 发送对象:</span><br>*/
/*                           单个用户*/
/*                           <br>*/
/*                         </div>*/
/*                       </div>*/
/*                     </td>*/
/*                     <td rowspan="4" style="text-align:center;vertical-align:middle;font-size:18px;">自动单发*/
/*                     </td>*/
/*                     <td rowspan="4" class="radios" style="vertical-align:middle;">*/
/*                       <label>*/
/*                         <input type="radio" name="sms_order_pay_success" value="on"*/
/*                         {% if (setting('cloud_sms.sms_order_pay_success')|default('off')) == 'on' %}*/
/*                           checked="checked"*/
/*                         {% endif %}> 开启*/
/*                       </label>*/
/*                       <label>*/
/*                           <input type="radio" name="sms_order_pay_success" value="off" */
/*                           {% if (setting('cloud_sms.sms_order_pay_success')|default('off')) != 'on' %}*/
/*                             checked="checked"*/
/*                           {% endif %}> 关闭*/
/*                       </label>*/
/*                     </td>*/
/*                   </tr>*/
/*                   <tr>*/
/*                     <td>班级购买</td>*/
/*                     <td>*/
/*                       14*/
/*                       <span class="glyphicon glyphicon-question-sign text-muted pull-right" id="article-property-tips14" data-toggle="tooltip" data-placement="bottom" href="javascript:" title="" data-original-title=""></span> */
/*                       <div id="article-property-tips14-html" style="display:none;">*/
/*                         <div style="width:250px;font-size:14px;">*/
/*                           <span style="color:blue;"> 短信内容:</span><br>*/
/*                           “【<span id="js-sms-school-name">网校通知</span>】你已成功购买班级《班级名称》，支付［订单金额］。{{setting('cloud_sms.sms_school_name')|default('')}}”<br>*/
/*                           <span style="color:blue;"> 发送对象:</span><br>*/
/*                           单个用户*/
/*                           <br>*/
/*                         </div>*/
/*                       </div>*/
/*                     </td>*/
/*                   </tr>*/
/*                   <tr>*/
/*                     <td>会员购买</td>*/
/*                     <td>*/
/*                       15*/
/*                       <span class="glyphicon glyphicon-question-sign text-muted pull-right" id="article-property-tips15" data-toggle="tooltip" data-placement="bottom" href="javascript:" title="" data-original-title=""></span> */
/*                       <div id="article-property-tips15-html" style="display:none;">*/
/*                         <div style="width:250px;font-size:14px;">*/
/*                           <span style="color:blue;"> 短信内容:</span><br>*/
/*                           “【<span id="js-sms-school-name">网校通知</span>】你已成功购买《会员名称》，支付［订单金额］。{{setting('cloud_sms.sms_school_name')|default('')}}”<br>*/
/*                           <span style="color:blue;"> 发送对象:</span><br>*/
/*                           单个用户*/
/*                           <br>*/
/*                         </div>*/
/*                       </div>*/
/*                     </td>*/
/*                   </tr>*/
/*                   <tr>*/
/*                     <td>虚拟币充值</td>*/
/*                     <td>*/
/*                       16*/
/*                       <span class="glyphicon glyphicon-question-sign text-muted pull-right" id="article-property-tips16" data-toggle="tooltip" data-placement="bottom" href="javascript:" title="" data-original-title=""></span> */
/*                       <div id="article-property-tips16-html" style="display:none;">*/
/*                         <div style="width:250px;font-size:14px;">*/
/*                           <span style="color:blue;"> 短信内容:</span><br>*/
/*                           “【<span id="js-sms-school-name">网校通知</span>】你已成功购买《虚拟币面值》《单位》，支付［订单金额］。{{setting('cloud_sms.sms_school_name')|default('')}}”<br>*/
/*                           <span style="color:blue;"> 发送对象:</span><br>*/
/*                           单个用户*/
/*                           <br>*/
/*                         </div>*/
/*                       </div>*/
/*                     </td>*/
/*                   </tr>*/
/*                 </tbody>*/
/*               </table>*/
/*             </div>*/
/*           {% endif %}*/
/*         </fieldset>*/
/* */
/*         {% if hasSchoolName %}*/
/*           <div class="form-group">*/
/*             <div class="controls col-md-offset-3 col-md-8">*/
/*               <button type="submit" class="btn btn-primary">提交</button>*/
/*             </div>*/
/*           </div>*/
/*         {% endif %}*/
/*         <input type="hidden" name="register-mode" value="{{ setting('auth.register_mode')}}">*/
/*         <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/* */
/*       </form>*/
/*     {% endif %}*/
/*   {% endif %}*/
/* 	*/
/* {% endblock %}*/
