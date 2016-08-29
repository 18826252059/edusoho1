<?php

/* TopxiaWebBundle:CourseFileManage:tbody-tr-coursematerial.html.twig */
class __TwigTemplate_f5686c885249d12322e50fb3219208001e5227eabc868ed1a516b03468e0a5bf extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:CourseFileManage:tbody-tr-coursematerial.html.twig", 1);
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
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_file_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "fileId" => $this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "id", array()))), "html", null, true);
        echo "\" target=\"_blank\" rel=\"tooltip\" title data-original-title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "filename", array()), "html", null, true);
        echo "\"  >";
        echo $this->env->getExtension('topxia_web_twig')->subTextFilter($this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "filename", array()), 30);
        echo "</a>
  </td>
  <td> 
    ";
        // line 15
        echo $this->env->getExtension('topxia_web_twig')->getDictText("fileType", $this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "type", array()));
        echo "
  </td>
  <td>";
        // line 17
        echo $context["web_macro"]->getbytesToSize($this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "size", array()));
        echo "</td>
  <td> 
    <span class=\"text-sm\">";
        // line 19
        echo $context["web_macro"]->getuser_link((($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "updatedUserId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "updatedUserId", array()), array(), "array"), null)) : (null)));
        echo "</span>
    <br>
    <span class=\"text-muted text-sm\">";
        // line 21
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["uploadFile"]) ? $context["uploadFile"] : null), "updatedTime", array()), "Y-n-d H:i"), "html", null, true);
        echo "</span>
  </td>

</tr>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseFileManage:tbody-tr-coursematerial.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 21,  66 => 19,  61 => 17,  56 => 15,  45 => 12,  41 => 10,  39 => 9,  33 => 6,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
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
/*     <a href="{{ path('course_manage_file_show', {id:course.id, fileId:uploadFile.id}) }}" target="_blank" rel="tooltip" title data-original-title="{{ uploadFile.filename }}"  >{{ uploadFile.filename|sub_text(30) }}</a>*/
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
