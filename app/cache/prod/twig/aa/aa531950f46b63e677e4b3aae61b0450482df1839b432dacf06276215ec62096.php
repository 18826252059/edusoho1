<?php

/* TopxiaWebBundle:CourseFileManage:index.html.twig */
class __TwigTemplate_625d8a675f8d5d5e7fe88b99cc777663b63328f04b8413908e61f1141547e720 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:CourseManage:layout.html.twig", "TopxiaWebBundle:CourseFileManage:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:CourseManage:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["side_nav"] = "files";
        // line 4
        $context["tab"] = "courseLesson";
        // line 5
        $context["script_controller"] = "course-manage-file/index";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "文件管理 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "  <style type=\"text/css\">
  .tooltip-inner{
  max-width: 600px;
  }
  </style>
  <div class=\"panel panel-default panel-col\">
    <div class=\"panel-heading\">
      ";
        // line 14
        if (((isset($context["type"]) ? $context["type"] : null) == "courselesson")) {
            // line 15
            echo "        <button class=\"btn btn-info btn-sm pull-right\"
        data-html5-url=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_batch_upload_course_files", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "targetType" => "courselesson")), "html", null, true);
            echo "\"
        data-normal-url=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_upload_course_files", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "targetType" => "courselesson")), "html", null, true);
            echo "\"
        data-storage=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()), "html", null, true);
            echo "\"
        >
        <i class=\"glyphicon glyphicon-cloud-upload\"></i>上传课时文件
        </button>
      ";
        } elseif ((        // line 22
(isset($context["type"]) ? $context["type"] : null) == "coursematerial")) {
            // line 23
            echo "        <button class=\"btn btn-info btn-sm pull-right\"
        data-html5-url=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_batch_upload_course_files", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "targetType" => "coursematerial")), "html", null, true);
            echo "\"
        data-normal-url=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_upload_course_files", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "targetType" => "coursematerial")), "html", null, true);
            echo "\"
        data-storage=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()), "html", null, true);
            echo "\"
        >
        <i class=\"glyphicon glyphicon-cloud-upload\"></i>上传备用资料文件
        </button>
      ";
        }
        // line 31
        echo "      文件管理
    </div>
    <div class=\"panel-body\" id=\"file-manage-panel\">
      <ul class=\"nav nav-tabs mbm\">
        <li ";
        // line 35
        if (((isset($context["type"]) ? $context["type"] : null) == "courselesson")) {
            echo " class=\"active\" ";
        }
        echo ">
        <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_files", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "courselesson")), "html", null, true);
        echo "\">课时文件</a></li>
        <li ";
        // line 37
        if (((isset($context["type"]) ? $context["type"] : null) == "coursematerial")) {
            echo " class=\"active\" ";
        }
        echo "><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_files", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "coursematerial")), "html", null, true);
        echo "\">备用资料文件</a></li>
      </ul>
      <table class=\"table table-striped table-hover\" id=\"course-lesson-table\">
        <thead>
          <tr>
            <th width=\"5%\"><input type=\"checkbox\"  data-role=\"batch-select\"></th>
            <th>文件名</th>
            <th>类型</th>
            <th>大小</th>
            <th>最后更新</th>
          </tr>
        </thead>
        <tbody>
          ";
        // line 50
        if (((isset($context["type"]) ? $context["type"] : null) == "courselesson")) {
            // line 51
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["courseLessons"]) ? $context["courseLessons"] : null));
            $context['_iterated'] = false;
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["uploadFile"]) {
                // line 52
                echo "              ";
                $this->loadTemplate("TopxiaWebBundle:CourseFileManage:tbody-tr.html.twig", "TopxiaWebBundle:CourseFileManage:index.html.twig", 52)->display($context);
                // line 53
                echo "            ";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            if (!$context['_iterated']) {
                // line 54
                echo "              <tr class=\"empty\"><td colspan=\"20\">无文件记录</td></tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uploadFile'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "          ";
        } elseif (((isset($context["type"]) ? $context["type"] : null) == "coursematerial")) {
            // line 57
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["courseLessons"]) ? $context["courseLessons"] : null));
            $context['_iterated'] = false;
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["uploadFile"]) {
                // line 58
                echo "              ";
                $this->loadTemplate("TopxiaWebBundle:CourseFileManage:tbody-tr-coursematerial.html.twig", "TopxiaWebBundle:CourseFileManage:index.html.twig", 58)->display($context);
                // line 59
                echo "            ";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            if (!$context['_iterated']) {
                // line 60
                echo "              <tr class=\"empty\"><td colspan=\"20\">无文件记录</td></tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uploadFile'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "          ";
        }
        // line 63
        echo "        </tbody>
      </table>
      
      <label class=\"checkbox-inline mrm mbm\"><input type=\"checkbox\" data-role=\"batch-select\"> 全选</label>
      
      <div class=\"btn-group mbm\">
        <button class=\"btn btn-danger btn-sm\" data-role=\"batch-delete\" data-name=\"文件记录\" data-url=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_upload_course_delete_files", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => (isset($context["tab"]) ? $context["tab"] : null))), "html", null, true);
        echo "\">
        <i class=\"glyphicon glyphicon-trash\"></i>
        删除</button>
      </div>
      
      <nav class=\"text-center\">
        ";
        // line 75
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
      </nav>
      ";
        // line 77
        if (((isset($context["type"]) ? $context["type"] : null) == "coursematerial")) {
            // line 78
            echo "        <div class=\"alert alert-info\">
          <ul>
            <li>上传备用资料文件成功后，在添加课时资料时可直接选取。</li>
            <li><strong><a href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_materials", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\">课程资料区</a></strong>显示的是所有课时下的资料文件。</li>
          </ul>
        </div>
      ";
        }
        // line 85
        echo "      
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseFileManage:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 85,  253 => 81,  248 => 78,  246 => 77,  241 => 75,  232 => 69,  224 => 63,  221 => 62,  214 => 60,  201 => 59,  198 => 58,  179 => 57,  176 => 56,  169 => 54,  156 => 53,  153 => 52,  134 => 51,  132 => 50,  112 => 37,  108 => 36,  102 => 35,  96 => 31,  88 => 26,  84 => 25,  80 => 24,  77 => 23,  75 => 22,  68 => 18,  64 => 17,  60 => 16,  57 => 15,  55 => 14,  46 => 7,  43 => 6,  36 => 2,  32 => 1,  30 => 5,  28 => 4,  26 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:CourseManage:layout.html.twig' %}*/
/* {% block title %}文件管理 - {{ parent() }}{% endblock %}*/
/* {% set side_nav = 'files' %}*/
/* {% set tab = 'courseLesson' %}*/
/* {% set script_controller = 'course-manage-file/index' %}*/
/* {% block main %}*/
/*   <style type="text/css">*/
/*   .tooltip-inner{*/
/*   max-width: 600px;*/
/*   }*/
/*   </style>*/
/*   <div class="panel panel-default panel-col">*/
/*     <div class="panel-heading">*/
/*       {% if type == 'courselesson' %}*/
/*         <button class="btn btn-info btn-sm pull-right"*/
/*         data-html5-url="{{ path('course_manage_batch_upload_course_files', {id:course.id, targetType:'courselesson'}) }}"*/
/*         data-normal-url="{{ path('course_manage_upload_course_files', {id:course.id, targetType:'courselesson'}) }}"*/
/*         data-storage="{{storageSetting.upload_mode}}"*/
/*         >*/
/*         <i class="glyphicon glyphicon-cloud-upload"></i>上传课时文件*/
/*         </button>*/
/*       {% elseif type == 'coursematerial' %}*/
/*         <button class="btn btn-info btn-sm pull-right"*/
/*         data-html5-url="{{ path('course_manage_batch_upload_course_files', {id:course.id, targetType:'coursematerial'}) }}"*/
/*         data-normal-url="{{ path('course_manage_upload_course_files', {id:course.id, targetType:'coursematerial'}) }}"*/
/*         data-storage="{{storageSetting.upload_mode}}"*/
/*         >*/
/*         <i class="glyphicon glyphicon-cloud-upload"></i>上传备用资料文件*/
/*         </button>*/
/*       {% endif %}*/
/*       文件管理*/
/*     </div>*/
/*     <div class="panel-body" id="file-manage-panel">*/
/*       <ul class="nav nav-tabs mbm">*/
/*         <li {% if type == 'courselesson' %} class="active" {% endif %}>*/
/*         <a href="{{ path('course_manage_files', {id:course.id, type:'courselesson'}) }}">课时文件</a></li>*/
/*         <li {% if type == 'coursematerial' %} class="active" {% endif %}><a href="{{ path('course_manage_files', {id:course.id, type:'coursematerial'}) }}">备用资料文件</a></li>*/
/*       </ul>*/
/*       <table class="table table-striped table-hover" id="course-lesson-table">*/
/*         <thead>*/
/*           <tr>*/
/*             <th width="5%"><input type="checkbox"  data-role="batch-select"></th>*/
/*             <th>文件名</th>*/
/*             <th>类型</th>*/
/*             <th>大小</th>*/
/*             <th>最后更新</th>*/
/*           </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*           {% if type == 'courselesson' %}*/
/*             {% for uploadFile in courseLessons %}*/
/*               {% include 'TopxiaWebBundle:CourseFileManage:tbody-tr.html.twig' %}*/
/*             {% else %}*/
/*               <tr class="empty"><td colspan="20">无文件记录</td></tr>*/
/*             {% endfor %}*/
/*           {% elseif type == 'coursematerial' %}*/
/*             {% for uploadFile in courseLessons %}*/
/*               {% include 'TopxiaWebBundle:CourseFileManage:tbody-tr-coursematerial.html.twig' %}*/
/*             {% else %}*/
/*               <tr class="empty"><td colspan="20">无文件记录</td></tr>*/
/*             {% endfor %}*/
/*           {% endif %}*/
/*         </tbody>*/
/*       </table>*/
/*       */
/*       <label class="checkbox-inline mrm mbm"><input type="checkbox" data-role="batch-select"> 全选</label>*/
/*       */
/*       <div class="btn-group mbm">*/
/*         <button class="btn btn-danger btn-sm" data-role="batch-delete" data-name="文件记录" data-url="{{ path('course_manage_upload_course_delete_files', {id:course.id, type:tab}) }}">*/
/*         <i class="glyphicon glyphicon-trash"></i>*/
/*         删除</button>*/
/*       </div>*/
/*       */
/*       <nav class="text-center">*/
/*         {{ web_macro.paginator(paginator) }}*/
/*       </nav>*/
/*       {% if type == 'coursematerial' %}*/
/*         <div class="alert alert-info">*/
/*           <ul>*/
/*             <li>上传备用资料文件成功后，在添加课时资料时可直接选取。</li>*/
/*             <li><strong><a href="{{ path('course_materials', {id:course.id}) }}">课程资料区</a></strong>显示的是所有课时下的资料文件。</li>*/
/*           </ul>*/
/*         </div>*/
/*       {% endif %}*/
/*       */
/*     </div>*/
/*   </div>*/
/* {% endblock %}*/
