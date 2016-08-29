<?php

/* TopxiaWebBundle:LessonMaterialPlugin:index.html.twig */
class __TwigTemplate_d3a38360c1136267d1da2146b4aee6ca4501a19663b2f0fb5dde8b0f1cd8f01d extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:LessonMaterialPlugin:index.html.twig", 1);
        // line 2
        echo "
";
        // line 3
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) != "live")) {
            // line 4
            echo "<h5>课时简介</h5>
<div class=\"lesson-about\">
\t";
            // line 6
            if ($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "summary", array())) {
                // line 7
                echo "    ";
                echo nl2br($this->env->getExtension('topxia_web_twig')->spaceToNbsp($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "summary", array())));
                echo "
\t";
            } else {
                // line 9
                echo "\t  此课时无简介。
\t";
            }
            // line 11
            echo "</div>
";
        }
        // line 13
        echo "
";
        // line 14
        if (((twig_in_filter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()), array(0 => "video", 1 => "audio")) && $this->env->getExtension('topxia_web_twig')->getSetting("course.student_download_media")) && (isset($context["file"]) ? $context["file"] : null))) {
            // line 15
            echo "<h5>课时音视频文件下载</h5>
<div class=\"lesson-about\">
  <a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_lesson_media_download", array("courseId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "courseId", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->fileSizeFilter($this->getAttribute((isset($context["file"]) ? $context["file"] : null), "size", array())), "html", null, true);
            echo " (点击下载)</a>
</div>
";
        }
        // line 20
        echo "

<h5>课时资料</h5>

";
        // line 24
        if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "status", array()) == "published")) {
            // line 25
            echo "  <ul class=\"media-list toolbar-pane-list\">
  ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["materials"]) ? $context["materials"] : null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["material"]) {
                // line 27
                echo "    <li class=\"media list-item\">
      <div class=\"media-body list-item-body\">
        ";
                // line 29
                if ($this->getAttribute($context["material"], "link", array())) {
                    // line 30
                    echo "          <div class=\"title\">
            <a href=\"";
                    // line 31
                    echo twig_escape_filter($this->env, $this->getAttribute($context["material"], "link", array()), "html", null, true);
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["material"], "title", array()), "html", null, true);
                    echo "</a>
            <span class=\"glyphicon glyphicon-new-window text-muted text-sm\" title=\"网络链接资料\"></span>
          </div>
        ";
                } else {
                    // line 35
                    echo "        \t<div class=\"title\">
        \t\t<a href=\"";
                    // line 36
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_material_download", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "materialId" => $this->getAttribute($context["material"], "id", array()))), "html", null, true);
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["material"], "title", array()), "html", null, true);
                    echo "</a>
        \t\t<span class=\"meta\">(";
                    // line 37
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->fileSizeFilter($this->getAttribute($context["material"], "fileSize", array())), "html", null, true);
                    echo ")</span>
        \t</div>
        \t<div class=\"summary\">";
                    // line 39
                    echo twig_escape_filter($this->env, $this->getAttribute($context["material"], "description", array()), "html", null, true);
                    echo "</div>
        ";
                }
                // line 41
                echo "      </div>
    </li>
    ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 44
                echo "      <li class=\"empty-item\" style=\"text-align:left;margin-left:10px;\">此课时无资料</li>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['material'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "  </ul>
";
        } else {
            // line 48
            echo "  <div class=\"lesson-about\">此课时尚未发布，不能下载课时资料</div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:LessonMaterialPlugin:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 48,  130 => 46,  123 => 44,  116 => 41,  111 => 39,  106 => 37,  100 => 36,  97 => 35,  88 => 31,  85 => 30,  83 => 29,  79 => 27,  74 => 26,  71 => 25,  69 => 24,  63 => 20,  55 => 17,  51 => 15,  49 => 14,  46 => 13,  42 => 11,  38 => 9,  32 => 7,  30 => 6,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% import "TopxiaWebBundle::macro.html.twig" as web_macro %}*/
/* */
/* {% if lesson.type != 'live' %}*/
/* <h5>课时简介</h5>*/
/* <div class="lesson-about">*/
/* 	{% if lesson.summary  %}*/
/*     {{ lesson.summary|space2nbsp|raw|nl2br}}*/
/* 	{% else %}*/
/* 	  此课时无简介。*/
/* 	{% endif %}*/
/* </div>*/
/* {% endif %}*/
/* */
/* {% if lesson.type in ['video', 'audio'] and setting('course.student_download_media') and file %}*/
/* <h5>课时音视频文件下载</h5>*/
/* <div class="lesson-about">*/
/*   <a href="{{ path('course_lesson_media_download', {courseId:lesson.courseId, lessonId:lesson.id}) }}">{{ file.size|file_size }} (点击下载)</a>*/
/* </div>*/
/* {% endif %}*/
/* */
/* */
/* <h5>课时资料</h5>*/
/* */
/* {% if lesson.status == 'published' %}*/
/*   <ul class="media-list toolbar-pane-list">*/
/*   {% for material in materials %}*/
/*     <li class="media list-item">*/
/*       <div class="media-body list-item-body">*/
/*         {% if material.link %}*/
/*           <div class="title">*/
/*             <a href="{{ material.link }}" target="_blank">{{ material.title }}</a>*/
/*             <span class="glyphicon glyphicon-new-window text-muted text-sm" title="网络链接资料"></span>*/
/*           </div>*/
/*         {% else %}*/
/*         	<div class="title">*/
/*         		<a href="{{ path('course_material_download', {courseId:course.id, materialId:material.id}) }}" target="_blank">{{ material.title }}</a>*/
/*         		<span class="meta">({{ material.fileSize|file_size }})</span>*/
/*         	</div>*/
/*         	<div class="summary">{{ material.description }}</div>*/
/*         {% endif %}*/
/*       </div>*/
/*     </li>*/
/*     {% else %}*/
/*       <li class="empty-item" style="text-align:left;margin-left:10px;">此课时无资料</li>*/
/*   {% endfor %}*/
/*   </ul>*/
/* {% else %}*/
/*   <div class="lesson-about">此课时尚未发布，不能下载课时资料</div>*/
/* {% endif %}*/
