<?php

/* TopxiaAdminBundle:Default:system.status.html.twig */
class __TwigTemplate_c3df9461b7416bc2dbbe6096d0c5116e34897230bd0c66302ba0c5a5064fb14d extends Twig_Template
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
        echo "<table class=\"table table-condensed table-bordered table-striped table-hover\" >
  ";
        // line 2
        $context["status"] = 0;
        // line 3
        echo "  ";
        if (((isset($context["error"]) ? $context["error"] : null) != "error")) {
            // line 4
            echo "    ";
            if ((isset($context["mainAppUpgrade"]) ? $context["mainAppUpgrade"] : null)) {
                // line 5
                echo "      ";
                $context["status"] = 1;
                // line 6
                echo "      <tr>
        <td>主系统</td>
        <td>
          <a class=\"btn btn-xs btn-info pull-right\" href=\"";
                // line 9
                echo $this->env->getExtension('routing')->getPath("admin_app_upgrades");
                echo "\">立即更新</a>
          <span class=\"glyphicon glyphicon-info-sign text-info\"></span>
          当前版本: ";
                // line 11
                echo twig_escape_filter($this->env, twig_constant("Topxia\\System::VERSION"), "html", null, true);
                echo "&nbsp;
          下一版本: ";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["mainAppUpgrade"]) ? $context["mainAppUpgrade"] : null), "package", array()), "toVersion", array()), "html", null, true);
                echo "&nbsp;
          最新版本: ";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mainAppUpgrade"]) ? $context["mainAppUpgrade"] : null), "latestVersion", array()), "html", null, true);
                echo "
        </td>
      </tr>
    ";
            } else {
                // line 17
                echo "      <tr>
        <td>主系统</td>
        <td>
          <span class=\"glyphicon glyphicon-ok-sign text-success\"></span>
          已是最新版本 ";
                // line 21
                echo twig_escape_filter($this->env, twig_constant("Topxia\\System::VERSION"), "html", null, true);
                echo "
        </td>
      </tr>
    ";
            }
            // line 25
            echo "
  ";
        }
        // line 27
        echo "
      ";
        // line 28
        if (((isset($context["error"]) ? $context["error"] : null) == "error")) {
            // line 29
            echo "        <tr><td>主系统</td><td rowspan=\"4\"><div class=\"empty\"><span  style=\"color:#cc0000;float:left;text-align:left;\">云平台参数设置不正确，会影响到系统正常的运行，<a href=\"";
            echo $this->env->getExtension('routing')->getPath("admin_setting_cloud");
            echo "\">请修改设置。</a></sapn></div></td></tr>
        <tr><td>应用更新</td></tr>

        <tr ><td>新应用</td></tr>

        <tr><td>云视频</td></tr>

      ";
        } else {
            // line 37
            echo "        <tr><td>应用更新</td><td>";
            if ((isset($context["app_count"]) ? $context["app_count"] : null)) {
                // line 38
                echo "          ";
                if (((((array_key_exists("status", $context)) ? (_twig_default_filter((isset($context["status"]) ? $context["status"] : null), 0)) : (0)) == 1) && ((isset($context["app_count"]) ? $context["app_count"] : null) == 1))) {
                    // line 39
                    echo "          <span class=\"glyphicon glyphicon-ok-sign text-success\"></span> 所有应用都已是最新版本
          ";
                } else {
                    // line 40
                    echo "<span class=\"glyphicon glyphicon-info-sign text-info\"></span> 还有 <span class=\"badge\" style=\"background-color:#cc0000;\">
          ";
                    // line 41
                    if ((((array_key_exists("status", $context)) ? (_twig_default_filter((isset($context["status"]) ? $context["status"] : null), 0)) : (0)) == 1)) {
                        echo twig_escape_filter($this->env, ((isset($context["app_count"]) ? $context["app_count"] : null) - 1), "html", null, true);
                    } else {
                        // line 42
                        echo "          ";
                        echo twig_escape_filter($this->env, (isset($context["app_count"]) ? $context["app_count"] : null), "html", null, true);
                        echo "
          ";
                    }
                    // line 43
                    echo "</span> 个应用没有更新 <a class=\"btn btn-xs btn-info pull-right\" href=\"";
                    echo $this->env->getExtension('routing')->getPath("admin_app_upgrades");
                    echo "\">立即更新</a>
          ";
                }
                // line 45
                echo "          ";
            } else {
                echo "<span class=\"glyphicon glyphicon-ok-sign text-success\"></span> 所有应用都已是最新版本
      ";
            }
            // line 46
            echo "</td></tr>

        <tr><td>新应用</td><td>";
            // line 48
            if (((isset($context["unInstallAppCount"]) ? $context["unInstallAppCount"] : null) > 0)) {
                echo "<span class=\"glyphicon glyphicon-info-sign text-info\"></span> 还有 <span class=\"badge\">";
                echo twig_escape_filter($this->env, (isset($context["unInstallAppCount"]) ? $context["unInstallAppCount"] : null), "html", null, true);
                echo "</span> 个应用没有安装<a class=\"pull-right\" href=\"";
                echo $this->env->getExtension('routing')->getPath("admin_app_center", array("postStatus" => "all"));
                echo "\">查看</a>";
            } else {
                echo "<span class=\"glyphicon glyphicon-ok-sign text-success\"></span> 已安装了全部应用
      ";
            }
            // line 49
            echo "</td></tr>

        <tr><td>云视频</td><td>";
            // line 51
            if (($this->env->getExtension('topxia_web_twig')->getSetting("storage.cloud_bucket") != "")) {
                echo "<span class=\"glyphicon glyphicon-ok-sign text-success\"></span> 已开通";
                if (($this->env->getExtension('topxia_web_twig')->getSetting("storage.upload_mode") != "cloud")) {
                    echo "(尚未启用)<a class=\"pull-right\" href=\"";
                    echo $this->env->getExtension('routing')->getPath("admin_setting_cloud_video");
                    echo "\">查看</a>";
                }
            } else {
                echo "<span class=\"glyphicon glyphicon-info-sign text-info\"></span> 还未开通<a class=\"pull-right\" href=\"";
                echo $this->env->getExtension('routing')->getPath("admin_setting_cloud_video");
                echo "\">查看</a>
      ";
            }
            // line 52
            echo "</td></tr>
      ";
        }
        // line 54
        echo "        <tr>
          <td>直播</td>
          <td>
            ";
        // line 57
        if (($this->env->getExtension('topxia_web_twig')->getSetting("course.live_student_capacity", 0) > 0)) {
            // line 58
            echo "              <span class=\"glyphicon glyphicon-ok-sign text-success\"></span> 
              已开通
              ";
            // line 60
            if (($this->env->getExtension('topxia_web_twig')->getSetting("course.live_course_enabled") == 0)) {
                // line 61
                echo "                (尚未启用)
                <a class=\"pull-right\" href=\"";
                // line 62
                echo $this->env->getExtension('routing')->getPath("admin_setting_course_setting");
                echo "#live-course-set\">查看</a>
              ";
            } else {
                // line 64
                echo "                ";
                if ((twig_length_filter($this->env, (isset($context["liveCourseStatus"]) ? $context["liveCourseStatus"] : null)) > 0)) {
                    // line 65
                    echo "                  ";
                    if ((((($this->getAttribute((isset($context["liveCourseStatus"]) ? $context["liveCourseStatus"] : null), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["liveCourseStatus"]) ? $context["liveCourseStatus"] : null), "type", array()), "")) : ("")) == "normal") && ((($this->getAttribute((isset($context["liveCourseStatus"]) ? $context["liveCourseStatus"] : null), "expire", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["liveCourseStatus"]) ? $context["liveCourseStatus"] : null), "expire", array()), 0)) : (0)) > 0))) {
                        // line 66
                        echo "                    (有效期至";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (($this->getAttribute((isset($context["liveCourseStatus"]) ? $context["liveCourseStatus"] : null), "expire", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["liveCourseStatus"]) ? $context["liveCourseStatus"] : null), "expire", array()), "0")) : ("0")), "Y-m-d"), "html", null, true);
                        echo " )
                  ";
                    } elseif (((($this->getAttribute(                    // line 67
(isset($context["liveCourseStatus"]) ? $context["liveCourseStatus"] : null), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["liveCourseStatus"]) ? $context["liveCourseStatus"] : null), "type", array()), "")) : ("")) == "tryOut")) {
                        echo " 
                    (体验用户)
                  ";
                    }
                    // line 69
                    echo "                  
                ";
                }
                // line 71
                echo "              ";
            }
            // line 72
            echo "
            ";
        } else {
            // line 74
            echo "              <span class=\"glyphicon glyphicon-info-sign text-info\"></span> 
              还未开通
              <a class=\"pull-right\" href=\"";
            // line 76
            echo $this->env->getExtension('routing')->getPath("admin_setting_course_setting");
            echo "#live-course-set\">查看</a>
            ";
        }
        // line 78
        echo "          </td>
        </tr>

        <tr><td>移动客户端</td><td>";
        // line 81
        if ((($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("mobile"), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("mobile"), "enabled", array()), null)) : (null))) {
            echo "<span class=\"glyphicon glyphicon-ok-sign text-success\"></span> 已启用";
        } else {
            echo "<span class=\"glyphicon glyphicon-info-sign text-info\"></span> 还未启用<a class=\"pull-right\" href=\"";
            echo $this->env->getExtension('routing')->getPath("admin_setting_mobile");
            echo "\">查看</a>
      ";
        }
        // line 82
        echo "</td></tr>

</table>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Default:system.status.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 82,  227 => 81,  222 => 78,  217 => 76,  213 => 74,  209 => 72,  206 => 71,  202 => 69,  196 => 67,  191 => 66,  188 => 65,  185 => 64,  180 => 62,  177 => 61,  175 => 60,  171 => 58,  169 => 57,  164 => 54,  160 => 52,  146 => 51,  142 => 49,  131 => 48,  127 => 46,  121 => 45,  115 => 43,  109 => 42,  105 => 41,  102 => 40,  98 => 39,  95 => 38,  92 => 37,  80 => 29,  78 => 28,  75 => 27,  71 => 25,  64 => 21,  58 => 17,  51 => 13,  47 => 12,  43 => 11,  38 => 9,  33 => 6,  30 => 5,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* <table class="table table-condensed table-bordered table-striped table-hover" >*/
/*   {% set status = 0  %}*/
/*   {% if error != "error" %}*/
/*     {% if mainAppUpgrade %}*/
/*       {% set status = 1 %}*/
/*       <tr>*/
/*         <td>主系统</td>*/
/*         <td>*/
/*           <a class="btn btn-xs btn-info pull-right" href="{{path("admin_app_upgrades")}}">立即更新</a>*/
/*           <span class="glyphicon glyphicon-info-sign text-info"></span>*/
/*           当前版本: {{ constant('Topxia\\System::VERSION') }}&nbsp;*/
/*           下一版本: {{ mainAppUpgrade.package.toVersion }}&nbsp;*/
/*           最新版本: {{ mainAppUpgrade.latestVersion }}*/
/*         </td>*/
/*       </tr>*/
/*     {% else %}*/
/*       <tr>*/
/*         <td>主系统</td>*/
/*         <td>*/
/*           <span class="glyphicon glyphicon-ok-sign text-success"></span>*/
/*           已是最新版本 {{ constant('Topxia\\System::VERSION') }}*/
/*         </td>*/
/*       </tr>*/
/*     {% endif %}*/
/* */
/*   {% endif %}*/
/* */
/*       {% if error == "error" %}*/
/*         <tr><td>主系统</td><td rowspan="4"><div class="empty"><span  style="color:#cc0000;float:left;text-align:left;">云平台参数设置不正确，会影响到系统正常的运行，<a href="{{path('admin_setting_cloud')}}">请修改设置。</a></sapn></div></td></tr>*/
/*         <tr><td>应用更新</td></tr>*/
/* */
/*         <tr ><td>新应用</td></tr>*/
/* */
/*         <tr><td>云视频</td></tr>*/
/* */
/*       {% else %}*/
/*         <tr><td>应用更新</td><td>{% if app_count %}*/
/*           {% if status|default(0) == 1 and app_count == 1 %}*/
/*           <span class="glyphicon glyphicon-ok-sign text-success"></span> 所有应用都已是最新版本*/
/*           {% else %}<span class="glyphicon glyphicon-info-sign text-info"></span> 还有 <span class="badge" style="background-color:#cc0000;">*/
/*           {% if status|default(0) == 1 %}{{app_count - 1}}{% else %}*/
/*           {{app_count}}*/
/*           {% endif %}</span> 个应用没有更新 <a class="btn btn-xs btn-info pull-right" href="{{path("admin_app_upgrades")}}">立即更新</a>*/
/*           {% endif %}*/
/*           {% else %}<span class="glyphicon glyphicon-ok-sign text-success"></span> 所有应用都已是最新版本*/
/*       {% endif %}</td></tr>*/
/* */
/*         <tr><td>新应用</td><td>{% if unInstallAppCount>0 %}<span class="glyphicon glyphicon-info-sign text-info"></span> 还有 <span class="badge">{{unInstallAppCount}}</span> 个应用没有安装<a class="pull-right" href="{{path("admin_app_center",{postStatus : 'all'})}}">查看</a>{% else %}<span class="glyphicon glyphicon-ok-sign text-success"></span> 已安装了全部应用*/
/*       {% endif %}</td></tr>*/
/* */
/*         <tr><td>云视频</td><td>{% if setting("storage.cloud_bucket")!="" %}<span class="glyphicon glyphicon-ok-sign text-success"></span> 已开通{% if setting("storage.upload_mode") != 'cloud' %}(尚未启用)<a class="pull-right" href="{{path("admin_setting_cloud_video")}}">查看</a>{% endif %}{% else %}<span class="glyphicon glyphicon-info-sign text-info"></span> 还未开通<a class="pull-right" href="{{path("admin_setting_cloud_video")}}">查看</a>*/
/*       {% endif %}</td></tr>*/
/*       {% endif %}*/
/*         <tr>*/
/*           <td>直播</td>*/
/*           <td>*/
/*             {% if setting("course.live_student_capacity", 0)>0 %}*/
/*               <span class="glyphicon glyphicon-ok-sign text-success"></span> */
/*               已开通*/
/*               {% if setting("course.live_course_enabled")==0 %}*/
/*                 (尚未启用)*/
/*                 <a class="pull-right" href="{{path("admin_setting_course_setting")}}#live-course-set">查看</a>*/
/*               {% else %}*/
/*                 {% if (liveCourseStatus|length) > 0 %}*/
/*                   {% if (liveCourseStatus.type|default('')) == "normal" and liveCourseStatus.expire|default(0) > 0  %}*/
/*                     (有效期至{{(liveCourseStatus.expire|default('0'))|date('Y-m-d')}} )*/
/*                   {% elseif (liveCourseStatus.type|default('')) == "tryOut" %} */
/*                     (体验用户)*/
/*                   {% endif %}                  */
/*                 {% endif %}*/
/*               {% endif %}*/
/* */
/*             {% else %}*/
/*               <span class="glyphicon glyphicon-info-sign text-info"></span> */
/*               还未开通*/
/*               <a class="pull-right" href="{{path("admin_setting_course_setting")}}#live-course-set">查看</a>*/
/*             {% endif %}*/
/*           </td>*/
/*         </tr>*/
/* */
/*         <tr><td>移动客户端</td><td>{% if setting("mobile").enabled|default(null) %}<span class="glyphicon glyphicon-ok-sign text-success"></span> 已启用{% else %}<span class="glyphicon glyphicon-info-sign text-info"></span> 还未启用<a class="pull-right" href="{{path("admin_setting_mobile")}}">查看</a>*/
/*       {% endif %}</td></tr>*/
/* */
/* </table>*/
