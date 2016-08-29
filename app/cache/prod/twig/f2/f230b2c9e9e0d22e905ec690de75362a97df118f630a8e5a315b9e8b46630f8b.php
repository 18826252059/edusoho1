<?php

/* TopxiaAdminBundle:System/Report:status.html.twig */
class __TwigTemplate_2372d22a85ff2d0972ce1f5b96bb78b14b04f5be69326f76a36468cdccbc1785 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:System/Report:status.html.twig", 1);
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
        $context["menu"] = "admin_report_status";
        // line 4
        $context["script_controller"] = "system/report-status";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "  <table  class=\"table table-striped table-bordered\">
    <thead>
      <tr>
        <th width=\"40%\">环境检测</th>
        <th width=\"20%\">推荐配置</th>
        <th width=\"20%\">当前状态</th>
        <th width=\"20%\">最低要求</th>
      </tr>
    </thead>
    <tbody>

      <tr>
        <td>操作系统</td>
        <td>Linux</td>
        <td>
          <span class=\"text-success\">√ ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "os", array()), "html", null, true);
        echo "</span>
        </td>
        <td>--</td>
      </tr>

      <tr>
        <td>PHP版本 （<a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("admin_report_status_php");
        echo "\" >更多信息</a>）</td>
        <td>5.5.x</td>
        <td>
          ";
        // line 31
        if ($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "phpVersionOk", array())) {
            // line 32
            echo "            <span class=\"text-success\">√ ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "phpVersion", array()), "html", null, true);
            echo "</span>
          ";
        } else {
            // line 34
            echo "            <span class=\"text-danger\">X ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "phpVersion", array()), "html", null, true);
            echo "</span>
          ";
        }
        // line 36
        echo "        </td>
        <td>5.3.3</td>
      </tr>

      <tr>
        <td>PHP运行用户</td>
        <td>-</td>
        <td>
          <span class=\"text-success\">√ ";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "user", array()), "html", null, true);
        echo "</span>
        </td>
        <td>-</td>
      </tr>

      <tr>
        <td>安全模式</td>
        <td>关闭</td>
        <td>
          ";
        // line 53
        if (($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "safemode", array()) == "Off")) {
            // line 54
            echo "              <span class=\"text-danger\">X 开启</span>
          ";
        } else {
            // line 56
            echo "            <span class=\"text-success\">√ 关闭</span>
          ";
        }
        // line 58
        echo "        </td>
        <td>关闭</td>
      </tr>

      <tr>
        <td>PDO_MySQL</td>
        <td>必须</td>
        <td>
          ";
        // line 66
        if ($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "pdoMysqlOk", array())) {
            // line 67
            echo "            <span class=\"text-success\">√ 已安装</span>
          ";
        } else {
            // line 69
            echo "            <span class=\"text-danger\">X 尚未安装MySQL_PDO</span>
          ";
        }
        // line 71
        echo "        </td>
        <td>必须</td>
      </tr>

      <tr>
        <td>
          文件上传大小
          <div class=\"text-muted\">该值决定可以上传视频的最大大小</div>
        </td>
        <td>大于200M</td>
        <td>
          ";
        // line 82
        if ($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "uploadMaxFilesizeOk", array())) {
            // line 83
            echo "            <span class=\"text-success\">√ ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "uploadMaxFilesize", array()), "html", null, true);
            echo "</span>
          ";
        } else {
            // line 85
            echo "            <span class=\"text-danger\">X ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "uploadMaxFilesize", array()), "html", null, true);
            echo "</span>
          ";
        }
        // line 87
        echo "        </td>
        <td>2M</td>
      </tr>

      <tr>
        <td>
          表单数据大小
          <div class=\"text-muted\">该值不能小于文件上传大小的值</div>
        </td>
        <td>大于200M</td>
        <td>
          ";
        // line 98
        if ($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "postMaxsizeOk", array())) {
            // line 99
            echo "            <span class=\"text-success\">√ ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "postMaxsize", array()), "html", null, true);
            echo "</span>
          ";
        } else {
            // line 101
            echo "            <span class=\"text-danger\">X ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "postMaxsize", array()), "html", null, true);
            echo "</span>
          ";
        }
        // line 103
        echo "        </td>
        <td>8M</td>
      </tr>

      <tr>
        <td>
          PHP脚本最大执行时间
          <div class=\"text-muted\">该值决定上传视频时，最长可使用的时间</div>
        </td>
        <td>大于300秒</td>
        <td>
          ";
        // line 114
        if ($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "maxExecutionTimeOk", array())) {
            // line 115
            echo "            <span class=\"text-success\">√ ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "maxExecutionTime", array()), "html", null, true);
            echo "秒</span>
          ";
        } else {
            // line 117
            echo "            <span class=\"text-danger\">X ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["env"]) ? $context["env"] : null), "maxExecutionTime", array()), "html", null, true);
            echo "秒</span>
          ";
        }
        // line 119
        echo "        </td>
        <td>30秒</td>
      </tr>

      <tr>
        <td>
          PHP扩展：mbstring
          <div class=\"text-muted\">该扩展用于处理中文字符</div>
        </td>
        <td>必须</td>
        <td>
          ";
        // line 130
        if ($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "mbstringOk", array())) {
            // line 131
            echo "            <span class=\"text-success\">√ 已安装</span>
          ";
        } else {
            // line 133
            echo "            <span class=\"text-danger\">X 尚未安装</span>
          ";
        }
        // line 135
        echo "        </td>
        <td>必须</td>
      </tr>

      <tr>
        <td>
          PHP扩展：curl
          <div class=\"text-muted\">该扩展用于远程读取文件</div>
        </td>
        <td>必须</td>
        <td>
          ";
        // line 146
        if ($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "curlOk", array())) {
            // line 147
            echo "            <span class=\"text-success\">√ 已安装</span>
          ";
        } else {
            // line 149
            echo "            <span class=\"text-danger\">X 尚未安装</span>
          ";
        }
        // line 151
        echo "        </td>
        <td>必须</td>
      </tr>

      <tr>
        <td>
          PHP扩展：GD
          <div class=\"text-muted\">该扩展用于处理图片</div>
        </td>
        <td>必须</td>
        <td>
          ";
        // line 162
        if ($this->getAttribute((isset($context["env"]) ? $context["env"] : null), "gdOk", array())) {
            // line 163
            echo "            <span class=\"text-success\">√ 已安装</span>
          ";
        } else {
            // line 165
            echo "            <span class=\"text-danger\">X 尚未安装</span>
          ";
        }
        // line 167
        echo "        </td>
        <td>必须</td>
      </tr>
    </tbody>
  </table>

  <table class=\"table table-hover table-striped table-bordered\">
    <thead>
      <tr>
        <th width=\"60%\">通信情况</th>
        <th width=\"40%\">状态</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>与Discuz Ucenter的连接</td>
        <td><span class=\"text-muted js-ucenter-check\" data-url=\"";
        // line 183
        echo $this->env->getExtension('routing')->getPath("admin_report_status_ucenter");
        echo "\">正在检测.....</span></td>
      </tr>
      <tr>
        <td>邮件发送 <i class=\"glyphicon glyphicon-info-sign text-info\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"每次检测，都会向当前用户发一封测试邮件，请保证当前用户的邮箱正确,邮件异常请到系统日志查看\"></i></td>
        <td><span class=\"text-muted js-email-send-check\" data-url=\"";
        // line 187
        echo $this->env->getExtension('routing')->getPath("admin_report_status_email_send");
        echo "\">正在检测.....</span></td>
      </tr>
    </tbody>
  </table>

  <div style=\"overflow:auto;max-height:400px;word-break:break-all;\">
    <table class=\"table table-hover table-striped table-bordered\" id=\"direcory-check-table\" data-url=\"";
        // line 193
        echo $this->env->getExtension('routing')->getPath("admin_report_status_directory");
        echo "\">
      <thead>
        <tr>
          <th width=\"60%\">系统文件、目录权限检查</th>
          <th width=\"20%\">当前状态</th>
          <th width=\"20%\">所需状态</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td colspan=\"6\" style=\"text-align: center;color: #c1c1c1;padding: 50px;\">正常扫描文件......</td>
        </tr>
      </tbody>
    </table>
  </div>
  

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System/Report:status.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 193,  309 => 187,  302 => 183,  284 => 167,  280 => 165,  276 => 163,  274 => 162,  261 => 151,  257 => 149,  253 => 147,  251 => 146,  238 => 135,  234 => 133,  230 => 131,  228 => 130,  215 => 119,  209 => 117,  203 => 115,  201 => 114,  188 => 103,  182 => 101,  176 => 99,  174 => 98,  161 => 87,  155 => 85,  149 => 83,  147 => 82,  134 => 71,  130 => 69,  126 => 67,  124 => 66,  114 => 58,  110 => 56,  106 => 54,  104 => 53,  92 => 44,  82 => 36,  76 => 34,  70 => 32,  68 => 31,  62 => 28,  53 => 22,  36 => 7,  33 => 6,  29 => 1,  27 => 4,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set menu = 'admin_report_status' %}*/
/* {% set script_controller = 'system/report-status' %}*/
/* */
/* {% block main %}*/
/*   <table  class="table table-striped table-bordered">*/
/*     <thead>*/
/*       <tr>*/
/*         <th width="40%">环境检测</th>*/
/*         <th width="20%">推荐配置</th>*/
/*         <th width="20%">当前状态</th>*/
/*         <th width="20%">最低要求</th>*/
/*       </tr>*/
/*     </thead>*/
/*     <tbody>*/
/* */
/*       <tr>*/
/*         <td>操作系统</td>*/
/*         <td>Linux</td>*/
/*         <td>*/
/*           <span class="text-success">√ {{ env.os }}</span>*/
/*         </td>*/
/*         <td>--</td>*/
/*       </tr>*/
/* */
/*       <tr>*/
/*         <td>PHP版本 （<a href="{{ path('admin_report_status_php') }}" >更多信息</a>）</td>*/
/*         <td>5.5.x</td>*/
/*         <td>*/
/*           {% if env.phpVersionOk %}*/
/*             <span class="text-success">√ {{ env.phpVersion }}</span>*/
/*           {% else %}*/
/*             <span class="text-danger">X {{ env.phpVersion }}</span>*/
/*           {% endif %}*/
/*         </td>*/
/*         <td>5.3.3</td>*/
/*       </tr>*/
/* */
/*       <tr>*/
/*         <td>PHP运行用户</td>*/
/*         <td>-</td>*/
/*         <td>*/
/*           <span class="text-success">√ {{ env.user }}</span>*/
/*         </td>*/
/*         <td>-</td>*/
/*       </tr>*/
/* */
/*       <tr>*/
/*         <td>安全模式</td>*/
/*         <td>关闭</td>*/
/*         <td>*/
/*           {% if env.safemode == 'Off' %}*/
/*               <span class="text-danger">X 开启</span>*/
/*           {% else %}*/
/*             <span class="text-success">√ 关闭</span>*/
/*           {% endif %}*/
/*         </td>*/
/*         <td>关闭</td>*/
/*       </tr>*/
/* */
/*       <tr>*/
/*         <td>PDO_MySQL</td>*/
/*         <td>必须</td>*/
/*         <td>*/
/*           {% if env.pdoMysqlOk %}*/
/*             <span class="text-success">√ 已安装</span>*/
/*           {% else %}*/
/*             <span class="text-danger">X 尚未安装MySQL_PDO</span>*/
/*           {% endif %}*/
/*         </td>*/
/*         <td>必须</td>*/
/*       </tr>*/
/* */
/*       <tr>*/
/*         <td>*/
/*           文件上传大小*/
/*           <div class="text-muted">该值决定可以上传视频的最大大小</div>*/
/*         </td>*/
/*         <td>大于200M</td>*/
/*         <td>*/
/*           {% if env.uploadMaxFilesizeOk %}*/
/*             <span class="text-success">√ {{ env.uploadMaxFilesize }}</span>*/
/*           {% else %}*/
/*             <span class="text-danger">X {{ env.uploadMaxFilesize }}</span>*/
/*           {% endif %}*/
/*         </td>*/
/*         <td>2M</td>*/
/*       </tr>*/
/* */
/*       <tr>*/
/*         <td>*/
/*           表单数据大小*/
/*           <div class="text-muted">该值不能小于文件上传大小的值</div>*/
/*         </td>*/
/*         <td>大于200M</td>*/
/*         <td>*/
/*           {% if env.postMaxsizeOk %}*/
/*             <span class="text-success">√ {{ env.postMaxsize }}</span>*/
/*           {% else %}*/
/*             <span class="text-danger">X {{ env.postMaxsize }}</span>*/
/*           {% endif %}*/
/*         </td>*/
/*         <td>8M</td>*/
/*       </tr>*/
/* */
/*       <tr>*/
/*         <td>*/
/*           PHP脚本最大执行时间*/
/*           <div class="text-muted">该值决定上传视频时，最长可使用的时间</div>*/
/*         </td>*/
/*         <td>大于300秒</td>*/
/*         <td>*/
/*           {% if env.maxExecutionTimeOk %}*/
/*             <span class="text-success">√ {{ env.maxExecutionTime }}秒</span>*/
/*           {% else %}*/
/*             <span class="text-danger">X {{ env.maxExecutionTime }}秒</span>*/
/*           {% endif %}*/
/*         </td>*/
/*         <td>30秒</td>*/
/*       </tr>*/
/* */
/*       <tr>*/
/*         <td>*/
/*           PHP扩展：mbstring*/
/*           <div class="text-muted">该扩展用于处理中文字符</div>*/
/*         </td>*/
/*         <td>必须</td>*/
/*         <td>*/
/*           {% if env.mbstringOk %}*/
/*             <span class="text-success">√ 已安装</span>*/
/*           {% else %}*/
/*             <span class="text-danger">X 尚未安装</span>*/
/*           {% endif %}*/
/*         </td>*/
/*         <td>必须</td>*/
/*       </tr>*/
/* */
/*       <tr>*/
/*         <td>*/
/*           PHP扩展：curl*/
/*           <div class="text-muted">该扩展用于远程读取文件</div>*/
/*         </td>*/
/*         <td>必须</td>*/
/*         <td>*/
/*           {% if env.curlOk %}*/
/*             <span class="text-success">√ 已安装</span>*/
/*           {% else %}*/
/*             <span class="text-danger">X 尚未安装</span>*/
/*           {% endif %}*/
/*         </td>*/
/*         <td>必须</td>*/
/*       </tr>*/
/* */
/*       <tr>*/
/*         <td>*/
/*           PHP扩展：GD*/
/*           <div class="text-muted">该扩展用于处理图片</div>*/
/*         </td>*/
/*         <td>必须</td>*/
/*         <td>*/
/*           {% if env.gdOk %}*/
/*             <span class="text-success">√ 已安装</span>*/
/*           {% else %}*/
/*             <span class="text-danger">X 尚未安装</span>*/
/*           {% endif %}*/
/*         </td>*/
/*         <td>必须</td>*/
/*       </tr>*/
/*     </tbody>*/
/*   </table>*/
/* */
/*   <table class="table table-hover table-striped table-bordered">*/
/*     <thead>*/
/*       <tr>*/
/*         <th width="60%">通信情况</th>*/
/*         <th width="40%">状态</th>*/
/*       </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*       <tr>*/
/*         <td>与Discuz Ucenter的连接</td>*/
/*         <td><span class="text-muted js-ucenter-check" data-url="{{ path('admin_report_status_ucenter') }}">正在检测.....</span></td>*/
/*       </tr>*/
/*       <tr>*/
/*         <td>邮件发送 <i class="glyphicon glyphicon-info-sign text-info" data-toggle="tooltip" data-placement="top" title="每次检测，都会向当前用户发一封测试邮件，请保证当前用户的邮箱正确,邮件异常请到系统日志查看"></i></td>*/
/*         <td><span class="text-muted js-email-send-check" data-url="{{ path('admin_report_status_email_send') }}">正在检测.....</span></td>*/
/*       </tr>*/
/*     </tbody>*/
/*   </table>*/
/* */
/*   <div style="overflow:auto;max-height:400px;word-break:break-all;">*/
/*     <table class="table table-hover table-striped table-bordered" id="direcory-check-table" data-url="{{ path('admin_report_status_directory') }}">*/
/*       <thead>*/
/*         <tr>*/
/*           <th width="60%">系统文件、目录权限检查</th>*/
/*           <th width="20%">当前状态</th>*/
/*           <th width="20%">所需状态</th>*/
/*         </tr>*/
/*       </thead>*/
/*       <tbody>*/
/*         <tr>*/
/*           <td colspan="6" style="text-align: center;color: #c1c1c1;padding: 50px;">正常扫描文件......</td>*/
/*         </tr>*/
/*       </tbody>*/
/*     </table>*/
/*   </div>*/
/*   */
/* */
/* {% endblock %}*/
