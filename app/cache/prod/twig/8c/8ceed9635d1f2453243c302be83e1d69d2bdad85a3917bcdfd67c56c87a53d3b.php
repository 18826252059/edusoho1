<?php

/* TopxiaWebBundle:CourseTestpaperManage:tr.html.twig */
class __TwigTemplate_3c0c74def70e879d5ac5b78ecdd36f1527cab297e7c7630495731d65569efbe3 extends Twig_Template
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
        $context["macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:CourseTestpaperManage:tr.html.twig", 1);
        // line 2
        echo "<tr data-role='item'>
    <td><input value=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "id", array()), "html", null, true);
        echo "\" type=\"checkbox\" data-role=\"batch-item\" ></td>
    <td>
      <a href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_preview_test", array("testId" => $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "id", array()))), "html", null, true);
        echo "\" target=\"_blank\">";
        echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "name", array()), 40);
        echo "</a>
    </td>
    <td>
      ";
        // line 8
        if (($this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "status", array()) == "draft")) {
            echo "草稿";
        }
        // line 9
        echo "      ";
        if (($this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "status", array()) == "open")) {
            echo "已发布";
        }
        // line 10
        echo "      ";
        if (($this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "status", array()) == "closed")) {
            echo "已关闭";
        }
        // line 11
        echo "    </td>
    <td>
      ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "itemCount", array()), "html", null, true);
        echo "题 <span class=\"text-muted\">/</span> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "score", array()), "html", null, true);
        echo "分
      ";
        // line 14
        if (($this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "passedScore", array()) > 0)) {
            // line 15
            echo "        <div class=\"text-muted\"><small>及格：";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "passedScore", array()), "html", null, true);
            echo "分</small></div>
      ";
        }
        // line 17
        echo "    </td>
    <td>
      ";
        // line 19
        if (($this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "limitedTime", array()) > 0)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "limitedTime", array()), "html", null, true);
            echo "分钟";
        } else {
            echo "无限制";
        }
        // line 20
        echo "    </td>
    <td>
      ";
        // line 22
        echo $context["macro"]->getuser_link((isset($context["user"]) ? $context["user"] : null));
        echo "
      <br />
      <span class=\"text-muted text-sm\">";
        // line 24
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "updatedTime", array()), "Y-n-d H:i:s"), "html", null, true);
        echo "</span>
    </td>
    <td>
        <div class=\"btn-group\">
          <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_preview_test", array("testId" => $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default btn-sm\" target=\"_blank\">预览</a>

          <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
              <span class=\"caret\"></span>
          </a>

          <ul class=\"dropdown-menu pull-right\">
            ";
        // line 35
        if (twig_in_filter($this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "status", array()), array(0 => "draft", 1 => "closed"))) {
            // line 36
            echo "              <li><a class=\"open-testpaper\" href=\"javascript:\" title=\"发布试卷";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "name", array()), "html", null, true);
            echo "\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_testpaper_publish", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "id" => $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-ok\"></span> 发布试卷</a></li>
            ";
        }
        // line 38
        echo "            ";
        if (($this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "status", array()) == "open")) {
            // line 39
            echo "              <li><a class=\"close-testpaper\" href=\"javascript:\" title=\"关闭试卷";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "name", array()), "html", null, true);
            echo "\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_testpaper_close", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "id" => $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-list\"></span> 关闭试卷</a></li>
            ";
        }
        // line 41
        echo "
            ";
        // line 42
        if (($this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "status", array()) == "draft")) {
            // line 43
            echo "              <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_testpaper_update", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "id" => $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-edit\"></span> 编辑试卷信息</a></li>
              <li><a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_testpaper_items", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "testpaperId" => $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-list\"></span> 管理题目</a></li>
              <li><a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_testpaper_items_reset", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "testpaperId" => $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-repeat\"></span> 重新生成题目</a></li>
              <li><a href=\"javascript:\" data-name='试卷' data-role='item-delete' data-url=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_testpaper_delete", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "testpaperId" => $this->getAttribute((isset($context["testpaper"]) ? $context["testpaper"] : null), "id", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-remove-circle\"></span> 删除试卷</a></li>
            ";
        }
        // line 48
        echo "          </ul>
        </div>
    </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseTestpaperManage:tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 48,  145 => 46,  141 => 45,  137 => 44,  132 => 43,  130 => 42,  127 => 41,  119 => 39,  116 => 38,  108 => 36,  106 => 35,  96 => 28,  89 => 24,  84 => 22,  80 => 20,  73 => 19,  69 => 17,  63 => 15,  61 => 14,  55 => 13,  51 => 11,  46 => 10,  41 => 9,  37 => 8,  29 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% import 'TopxiaWebBundle::macro.html.twig' as macro %}*/
/* <tr data-role='item'>*/
/*     <td><input value="{{ testpaper.id }}" type="checkbox" data-role="batch-item" ></td>*/
/*     <td>*/
/*       <a href="{{ path('course_manage_preview_test', {testId:testpaper.id}) }}" target="_blank">{{ testpaper.name|plain_text(40) }}</a>*/
/*     </td>*/
/*     <td>*/
/*       {% if testpaper.status == 'draft' %}草稿{% endif %}*/
/*       {% if testpaper.status == 'open' %}已发布{% endif %}*/
/*       {% if testpaper.status == 'closed' %}已关闭{% endif %}*/
/*     </td>*/
/*     <td>*/
/*       {{ testpaper.itemCount}}题 <span class="text-muted">/</span> {{testpaper.score}}分*/
/*       {% if testpaper.passedScore > 0 %}*/
/*         <div class="text-muted"><small>及格：{{ testpaper.passedScore }}分</small></div>*/
/*       {% endif %}*/
/*     </td>*/
/*     <td>*/
/*       {% if testpaper.limitedTime > 0 %}{{ testpaper.limitedTime}}分钟{% else %}无限制{% endif %}*/
/*     </td>*/
/*     <td>*/
/*       {{ macro.user_link(user) }}*/
/*       <br />*/
/*       <span class="text-muted text-sm">{{testpaper.updatedTime | date('Y-n-d H:i:s')}}</span>*/
/*     </td>*/
/*     <td>*/
/*         <div class="btn-group">*/
/*           <a href="{{ path('course_manage_preview_test', {testId:testpaper.id}) }}" class="btn btn-default btn-sm" target="_blank">预览</a>*/
/* */
/*           <a href="#" type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">*/
/*               <span class="caret"></span>*/
/*           </a>*/
/* */
/*           <ul class="dropdown-menu pull-right">*/
/*             {% if testpaper.status in ['draft', 'closed'] %}*/
/*               <li><a class="open-testpaper" href="javascript:" title="发布试卷{{ testpaper.name }}" data-url="{{ path('course_manage_testpaper_publish', {courseId:course.id, id:testpaper.id}) }}"><span class="glyphicon glyphicon-ok"></span> 发布试卷</a></li>*/
/*             {% endif %}*/
/*             {% if testpaper.status == 'open' %}*/
/*               <li><a class="close-testpaper" href="javascript:" title="关闭试卷{{ testpaper.name }}" data-url="{{ path('course_manage_testpaper_close', {courseId:course.id, id:testpaper.id}) }}"><span class="glyphicon glyphicon-list"></span> 关闭试卷</a></li>*/
/*             {% endif %}*/
/* */
/*             {% if testpaper.status == 'draft' %}*/
/*               <li><a href="{{ path('course_manage_testpaper_update', {courseId:course.id,id:testpaper.id}) }}"><span class="glyphicon glyphicon-edit"></span> 编辑试卷信息</a></li>*/
/*               <li><a href="{{ path('course_manage_testpaper_items', {courseId:course.id,testpaperId:testpaper.id}) }}"><span class="glyphicon glyphicon-list"></span> 管理题目</a></li>*/
/*               <li><a href="{{ path('course_manage_testpaper_items_reset', {courseId:course.id, testpaperId:testpaper.id}) }}"><span class="glyphicon glyphicon-repeat"></span> 重新生成题目</a></li>*/
/*               <li><a href="javascript:" data-name='试卷' data-role='item-delete' data-url="{{ path('course_manage_testpaper_delete', {courseId:course.id, testpaperId:testpaper.id}) }}"><span class="glyphicon glyphicon-remove-circle"></span> 删除试卷</a></li>*/
/*             {% endif %}*/
/*           </ul>*/
/*         </div>*/
/*     </td>*/
/* </tr>*/
