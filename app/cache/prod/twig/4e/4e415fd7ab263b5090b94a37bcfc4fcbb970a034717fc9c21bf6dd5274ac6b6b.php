<?php

/* TopxiaAdminBundle:CourseDisk:tr.html.twig */
class __TwigTemplate_1733341f90f654159c728e8d40f0440a00fecddc80500be7fded728446abe576 extends Twig_Template
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
        $context["admin_macro"] = $this->loadTemplate("TopxiaAdminBundle::macro.html.twig", "TopxiaAdminBundle:CourseDisk:tr.html.twig", 1);
        // line 2
        echo "<tr id=\"disk-table-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["file"]) ? $context["file"] : null), "id", array()), "html", null, true);
        echo "\" data-role=\"item\">
  <td><input value=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["file"]) ? $context["file"] : null), "id", array()), "html", null, true);
        echo "\" type=\"checkbox\"  data-role=\"batch-item\" ></td>
  <td class=\"text-primary\">";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["file"]) ? $context["file"] : null), "filename", array()), "html", null, true);
        echo "</td>
  <td class=\"text-info\">
    ";
        // line 6
        echo $context["admin_macro"]->getbytesToSize($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "size", array()));
        echo "
  </td>

  <td>";
        // line 9
        echo $this->env->getExtension('topxia_web_twig')->getDictText("fileType:html", $this->getAttribute((isset($context["file"]) ? $context["file"] : null), "type", array()));
        echo "</td>

  <td>
      ";
        // line 12
        if (($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "storage", array()) == "local")) {
            // line 13
            echo "       本地存储
      ";
        } elseif (($this->getAttribute(        // line 14
(isset($context["file"]) ? $context["file"] : null), "storage", array()) == "cloud")) {
            // line 15
            echo "       云视频
      ";
        }
        // line 17
        echo "  </td>

  <td>
    ";
        // line 20
        echo $context["admin_macro"]->getuser_link((isset($context["creator"]) ? $context["creator"] : null));
        echo "
  </td>
  
  <td>
    ";
        // line 24
        if (($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "createdTime", array()) > 0)) {
            // line 25
            echo "      <span class=\"text-muted text-sm\" title=\"创建时间\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["file"]) ? $context["file"] : null), "createdTime", array()), "Y-n-d H:i:s"), "html", null, true);
            echo "</span>      
    ";
        } else {
            // line 27
            echo "      --
    ";
        }
        // line 29
        echo "  </td>

  <td>
  <button class=\"btn btn-default btn-sm\" data-role=\"item-delete\" data-name=\"文件\" data-url=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_course_disk_delete", array("id" => $this->getAttribute((isset($context["file"]) ? $context["file"] : null), "id", array()))), "html", null, true);
        echo "\">删除</button>
</td>


</tr>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:CourseDisk:tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 32,  82 => 29,  78 => 27,  72 => 25,  70 => 24,  63 => 20,  58 => 17,  54 => 15,  52 => 14,  49 => 13,  47 => 12,  41 => 9,  35 => 6,  30 => 4,  26 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% import "TopxiaAdminBundle::macro.html.twig" as admin_macro %}*/
/* <tr id="disk-table-{{file.id}}" data-role="item">*/
/*   <td><input value="{{file.id}}" type="checkbox"  data-role="batch-item" ></td>*/
/*   <td class="text-primary">{{file.filename}}</td>*/
/*   <td class="text-info">*/
/*     {{ admin_macro.bytesToSize(file.size) }}*/
/*   </td>*/
/* */
/*   <td>{{ dict_text('fileType:html', file.type) }}</td>*/
/* */
/*   <td>*/
/*       {% if file.storage == 'local' %}*/
/*        本地存储*/
/*       {% elseif file.storage == 'cloud' %}*/
/*        云视频*/
/*       {% endif %}*/
/*   </td>*/
/* */
/*   <td>*/
/*     {{ admin_macro.user_link(creator) }}*/
/*   </td>*/
/*   */
/*   <td>*/
/*     {% if file.createdTime > 0 %}*/
/*       <span class="text-muted text-sm" title="创建时间">{{ file.createdTime |date('Y-n-d H:i:s') }}</span>      */
/*     {% else %}*/
/*       --*/
/*     {% endif %}*/
/*   </td>*/
/* */
/*   <td>*/
/*   <button class="btn btn-default btn-sm" data-role="item-delete" data-name="文件" data-url="{{ path('admin_course_disk_delete', {id:file.id}) }}">删除</button>*/
/* </td>*/
/* */
/* */
/* </tr>*/
