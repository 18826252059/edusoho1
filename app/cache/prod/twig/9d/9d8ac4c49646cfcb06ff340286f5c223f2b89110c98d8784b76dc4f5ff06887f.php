<?php

/* TopxiaWebBundle:CourseFileManage:tbody-tr.html.twig */
class __TwigTemplate_94f80a0a91ea51e08379864202d75855c0048e29132797e46f7983324d72ecad extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:CourseFileManage:tbody-tr.html.twig", 1);
        // line 2
        $context["quality"] = "";
        // line 3
        echo "  
<tr id=\"upload-file-tr-";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "id", array()), "html", null, true);
        echo "\" data-role=\"item\" data-convertHash=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "convertHash", array()), "html", null, true);
        echo "\">

  <td><input value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "id", array()), "html", null, true);
        echo "\" type=\"checkbox\" data-role=\"batch-item\" ></td>

  <td>
    ";
        // line 9
        if (($this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "storage", array()) == "cloud")) {
            // line 10
            echo "      <span class=\"glyphicon glyphicon-cloud text-muted\" title=\"云文件\"></span>
    ";
        }
        // line 12
        echo "
    ";
        // line 13
        if (($this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "convertStatus", array()) == "waiting")) {
            // line 14
            echo "      <a rel=\"tooltip\" title data-original-title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "filename", array()), "html", null, true);
            echo "\"  >";
            echo $this->env->getExtension('topxia_web_twig')->subTextFilter($this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "filename", array()), 30);
            echo "</a>
      <br><span class=\"text-warning text-sm\">正在文件格式转换</span>
      ";
            // line 16
            if ((((isset($context["now"]) ? $context["now"] : null) - $this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "updatedTime", array())) > 28800)) {
                // line 17
                echo "        <a href=\"javascript:;\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_file_convert", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "fileId" => $this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "id", array()))), "html", null, true);
                echo "\" class=\"convert-file-btn text-danger\">重新转换</a>
      ";
            }
            // line 19
            echo "    ";
        } elseif (($this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "convertStatus", array()) == "doing")) {
            // line 20
            echo "      <a rel=\"tooltip\" title data-original-title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "filename", array()), "html", null, true);
            echo "\"  >";
            echo $this->env->getExtension('topxia_web_twig')->subTextFilter($this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "filename", array()), 30);
            echo "</a>
      <br><span class=\"text-info text-sm\">正在文件格式转换</span>
      ";
            // line 22
            if ((($this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "type", array()) == "ppt") && (((isset($context["now"]) ? $context["now"] : null) - $this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "updatedTime", array())) > 1800))) {
                // line 23
                echo "        <a href=\"javascript:;\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_file_convert", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "fileId" => $this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "id", array()))), "html", null, true);
                echo "\" class=\"convert-file-btn text-danger\">重新转换</a>
      ";
            }
            // line 25
            echo "    ";
        } elseif (($this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "convertStatus", array()) == "error")) {
            // line 26
            echo "      <a rel=\"tooltip\" title data-original-title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "filename", array()), "html", null, true);
            echo "\"  >";
            echo $this->env->getExtension('topxia_web_twig')->subTextFilter($this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "filename", array()), 30);
            echo "</a>
      <br><span class=\"text-danger text-sm\">文件格式转换失败，<a href=\"javascript:;\" data-url=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_file_convert", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "fileId" => $this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"convert-file-btn\">重新转换</a></span>
    ";
        } else {
            // line 29
            echo "      ";
            if (twig_in_filter($this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "targetType", array()), array(0 => "courselesson", 1 => "coursematerial"))) {
                // line 30
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_file_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "fileId" => $this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "id", array()))), "html", null, true);
                echo "\" target=\"_blank\" rel=\"tooltip\" title data-original-title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "filename", array()), "html", null, true);
                echo "\"  >";
                echo $this->env->getExtension('topxia_web_twig')->subTextFilter($this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "filename", array()), 30);
                echo "</a>
        ";
                // line 31
                if (((($this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "type", array()) == "ppt") &&  !(($this->getAttribute($this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "metas2", array(), "any", false, true), "length", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "metas2", array(), "any", false, true), "length", array()), null)) : (null))) && ($this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "targetType", array()) == "courselesson"))) {
                    // line 32
                    echo "          <br><a href=\"javascript:;\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_file_convert", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "fileId" => $this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "id", array()))), "html", null, true);
                    echo "\" class=\"convert-file-btn text-danger\">重新转换</a>
        ";
                }
                // line 34
                echo "      ";
            } else {
                // line 35
                echo "          <a rel=\"tooltip\" title data-original-title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "filename", array()), "html", null, true);
                echo "\"  >";
                echo $this->env->getExtension('topxia_web_twig')->subTextFilter($this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "filename", array()), 30);
                echo "</a>
      ";
            }
            // line 37
            echo "    ";
        }
        // line 38
        echo "
    ";
        // line 39
        if (($this->env->getExtension('topxia_web_twig')->getSetting("developer.debug") && (($this->getAttribute($this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "convertParams", array(), "any", false, true), "convertor", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "convertParams", array(), "any", false, true), "convertor", array()), null)) : (null)))) {
            // line 40
            echo "      <a href=\"javascript:;\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_file_convert", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "fileId" => $this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"convert-file-btn text-danger\">重新转换(调试模式)</a>
    ";
        }
        // line 42
        echo "    ";
        if (($this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "useNum", array()) == 0)) {
            // line 43
            echo "    <br>
    <span class=\"label label-danger tip\">未使用</span>
    ";
        } else {
            // line 46
            echo "    <br>
    ";
        }
        // line 48
        echo "    ";
        if (((($this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "type", array()) == "cloud") && ($this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "convertStatus", array()) == "none")) && ($this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "type", array()) != "flash"))) {
            // line 49
            echo "      <span class=\"label label-default tip\">未转码</span>
    ";
        }
        // line 51
        echo "    ";
        if (($this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "convertStatus", array()) == "success")) {
            // line 52
            echo "
      <span class=\"label label-success tip\">已转码</span>
    ";
        }
        // line 55
        echo "
    ";
        // line 56
        if ((($this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "type", array()) == "video") && (($this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "metas2", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "metas2", array()), null)) : (null)))) {
            // line 57
            echo "      ";
            if (($this->getAttribute($this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "convertParams", array()), "videoQuality", array()) == "low")) {
                // line 58
                echo "      ";
                $context["quality"] = "流畅画质";
                // line 59
                echo "      ";
            } elseif (($this->getAttribute($this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "convertParams", array()), "videoQuality", array()) == "normal")) {
                // line 60
                echo "      ";
                $context["quality"] = "标准画质";
                // line 61
                echo "      ";
            } elseif (($this->getAttribute($this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "convertParams", array()), "videoQuality", array()) == "high")) {
                // line 62
                echo "      ";
                $context["quality"] = "精细画质";
                // line 63
                echo "      ";
            }
            // line 64
            echo "      ";
            if ((($this->getAttribute($this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "metas2", array(), "any", false, true), "shd", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "metas2", array(), "any", false, true), "shd", array()), null)) : (null))) {
                // line 65
                echo "      ";
                if (($this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "useNum", array()) != 0)) {
                    echo "<br>";
                }
                // line 66
                echo "      <span class=\"label label-info  tip\" data-toggle=\"tooltip\" title=\"";
                echo twig_escape_filter($this->env, (isset($context["quality"]) ? $context["quality"] : null), "html", null, true);
                echo "\">超清</span>
      ";
            } elseif ((($this->getAttribute($this->getAttribute(            // line 67
(isset($context["uploadFile"]) ? $context["uploadFile"] : null), "metas2", array(), "any", false, true), "hd", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "metas2", array(), "any", false, true), "hd", array()), null)) : (null))) {
                // line 68
                echo "      ";
                if (($this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "useNum", array()) != 0)) {
                    echo "<br>";
                }
                // line 69
                echo "      <span class=\"label label-info  tip\" data-toggle=\"tooltip\" title=\"";
                echo twig_escape_filter($this->env, (isset($context["quality"]) ? $context["quality"] : null), "html", null, true);
                echo "\">高清</span>
      ";
            } elseif ((($this->getAttribute($this->getAttribute(            // line 70
(isset($context["uploadFile"]) ? $context["uploadFile"] : null), "metas2", array(), "any", false, true), "sd", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "metas2", array(), "any", false, true), "sd", array()), null)) : (null))) {
                // line 71
                echo "      ";
                if (($this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "useNum", array()) != 0)) {
                    echo "<br>";
                }
                // line 72
                echo "      <span class=\"label label-info  tip\" data-toggle=\"tooltip\" title=\"";
                echo twig_escape_filter($this->env, (isset($context["quality"]) ? $context["quality"] : null), "html", null, true);
                echo "\">标清</span>
      ";
            }
            // line 74
            echo "      
    ";
        }
        // line 76
        echo "  </td>
  <td> 
    ";
        // line 78
        echo $this->env->getExtension('topxia_web_twig')->getDictText("fileType", $this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "type", array()));
        echo "
  </td>
  <td>";
        // line 80
        echo $context["web_macro"]->getbytesToSize($this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "size", array()));
        echo "</td>
  <td> 
    <span class=\"text-sm\">";
        // line 82
        echo $context["web_macro"]->getuser_link((($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "updatedUserId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "updatedUserId", array()), array(), "array"), null)) : (null)));
        echo "</span>
    <br>
    <span class=\"text-muted text-sm\">";
        // line 84
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "updatedTime", array()), "Y-n-d H:i"), "html", null, true);
        echo "</span>
  </td>

</tr>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseFileManage:tbody-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 84,  254 => 82,  249 => 80,  244 => 78,  240 => 76,  236 => 74,  230 => 72,  225 => 71,  223 => 70,  218 => 69,  213 => 68,  211 => 67,  206 => 66,  201 => 65,  198 => 64,  195 => 63,  192 => 62,  189 => 61,  186 => 60,  183 => 59,  180 => 58,  177 => 57,  175 => 56,  172 => 55,  167 => 52,  164 => 51,  160 => 49,  157 => 48,  153 => 46,  148 => 43,  145 => 42,  139 => 40,  137 => 39,  134 => 38,  131 => 37,  123 => 35,  120 => 34,  114 => 32,  112 => 31,  103 => 30,  100 => 29,  95 => 27,  88 => 26,  85 => 25,  79 => 23,  77 => 22,  69 => 20,  66 => 19,  60 => 17,  58 => 16,  50 => 14,  48 => 13,  45 => 12,  41 => 10,  39 => 9,  33 => 6,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% import "TopxiaWebBundle::macro.html.twig" as web_macro %}*/
/* {% set quality = "" %}*/
/*   */
/* <tr id="upload-file-tr-{{uploadFile.id}}" data-role="item" data-convertHash="{{uploadFile.convertHash}}">*/
/* */
/*   <td><input value="{{uploadFile.id}}" type="checkbox" data-role="batch-item" ></td>*/
/* */
/*   <td>*/
/*     {% if uploadFile.storage == 'cloud' %}*/
/*       <span class="glyphicon glyphicon-cloud text-muted" title="云文件"></span>*/
/*     {% endif %}*/
/* */
/*     {% if uploadFile.convertStatus == 'waiting' %}*/
/*       <a rel="tooltip" title data-original-title="{{ uploadFile.filename }}"  >{{ uploadFile.filename|sub_text(30) }}</a>*/
/*       <br><span class="text-warning text-sm">正在文件格式转换</span>*/
/*       {% if ( now - uploadFile.updatedTime ) > 28800 %}*/
/*         <a href="javascript:;" data-url="{{ path('course_manage_file_convert', {id:course.id, fileId:uploadFile.id}) }}" class="convert-file-btn text-danger">重新转换</a>*/
/*       {% endif %}*/
/*     {% elseif uploadFile.convertStatus == 'doing' %}*/
/*       <a rel="tooltip" title data-original-title="{{ uploadFile.filename }}"  >{{ uploadFile.filename|sub_text(30) }}</a>*/
/*       <br><span class="text-info text-sm">正在文件格式转换</span>*/
/*       {% if uploadFile.type == 'ppt' and ( now - uploadFile.updatedTime ) > 1800 %}*/
/*         <a href="javascript:;" data-url="{{ path('course_manage_file_convert', {id:course.id, fileId:uploadFile.id}) }}" class="convert-file-btn text-danger">重新转换</a>*/
/*       {% endif %}*/
/*     {% elseif uploadFile.convertStatus == 'error' %}*/
/*       <a rel="tooltip" title data-original-title="{{ uploadFile.filename }}"  >{{ uploadFile.filename|sub_text(30) }}</a>*/
/*       <br><span class="text-danger text-sm">文件格式转换失败，<a href="javascript:;" data-url="{{ path('course_manage_file_convert', {id:course.id, fileId:uploadFile.id}) }}" class="convert-file-btn">重新转换</a></span>*/
/*     {% else %}*/
/*       {% if uploadFile.targetType in ['courselesson', 'coursematerial'] %}*/
/*         <a href="{{ path('course_manage_file_show', {id:course.id, fileId:uploadFile.id}) }}" target="_blank" rel="tooltip" title data-original-title="{{ uploadFile.filename }}"  >{{ uploadFile.filename|sub_text(30) }}</a>*/
/*         {% if uploadFile.type == 'ppt' and ( not uploadFile.metas2.length|default(null) ) and uploadFile.targetType == 'courselesson'  %}*/
/*           <br><a href="javascript:;" data-url="{{ path('course_manage_file_convert', {id:course.id, fileId:uploadFile.id}) }}" class="convert-file-btn text-danger">重新转换</a>*/
/*         {% endif %}*/
/*       {% else %}*/
/*           <a rel="tooltip" title data-original-title="{{ uploadFile.filename }}"  >{{ uploadFile.filename|sub_text(30) }}</a>*/
/*       {% endif %}*/
/*     {% endif %}*/
/* */
/*     {% if setting('developer.debug') and uploadFile.convertParams.convertor|default(null) %}*/
/*       <a href="javascript:;" data-url="{{ path('course_manage_file_convert', {id:course.id, fileId:uploadFile.id}) }}" class="convert-file-btn text-danger">重新转换(调试模式)</a>*/
/*     {% endif %}*/
/*     {% if uploadFile.useNum == 0 %}*/
/*     <br>*/
/*     <span class="label label-danger tip">未使用</span>*/
/*     {% else %}*/
/*     <br>*/
/*     {% endif %}*/
/*     {% if uploadFile.type == "cloud" and uploadFile.convertStatus == 'none' and uploadFile.type != 'flash' %}*/
/*       <span class="label label-default tip">未转码</span>*/
/*     {% endif %}*/
/*     {% if uploadFile.convertStatus == 'success' %}*/
/* */
/*       <span class="label label-success tip">已转码</span>*/
/*     {% endif %}*/
/* */
/*     {% if uploadFile.type == "video" and uploadFile.metas2|default(null) %}*/
/*       {% if uploadFile.convertParams.videoQuality == "low" %}*/
/*       {% set quality = "流畅画质" %}*/
/*       {% elseif uploadFile.convertParams.videoQuality == "normal" %}*/
/*       {% set quality = "标准画质" %}*/
/*       {% elseif uploadFile.convertParams.videoQuality == "high" %}*/
/*       {% set quality = "精细画质" %}*/
/*       {% endif %}*/
/*       {% if uploadFile.metas2.shd|default(null) %}*/
/*       {% if uploadFile.useNum != 0 %}<br>{% endif %}*/
/*       <span class="label label-info  tip" data-toggle="tooltip" title="{{quality}}">超清</span>*/
/*       {% elseif uploadFile.metas2.hd|default(null) %}*/
/*       {% if uploadFile.useNum != 0 %}<br>{% endif %}*/
/*       <span class="label label-info  tip" data-toggle="tooltip" title="{{quality}}">高清</span>*/
/*       {% elseif uploadFile.metas2.sd|default(null) %}*/
/*       {% if uploadFile.useNum != 0 %}<br>{% endif %}*/
/*       <span class="label label-info  tip" data-toggle="tooltip" title="{{quality}}">标清</span>*/
/*       {% endif %}*/
/*       */
/*     {% endif %}*/
/*   </td>*/
/*   <td> */
/*     {{ dict_text('fileType', uploadFile.type) }}*/
/*   </td>*/
/*   <td>{{ web_macro.bytesToSize(uploadFile.size) }}</td>*/
/*   <td> */
/*     <span class="text-sm">{{ web_macro.user_link(users[uploadFile.updatedUserId]|default(null)) }}</span>*/
/*     <br>*/
/*     <span class="text-muted text-sm">{{ uploadFile.updatedTime|date('Y-n-d H:i')}}</span>*/
/*   </td>*/
/* */
/* </tr>*/