<?php

/* TopxiaAdminBundle:ProductBaseFileManage:index.html.twig */
class __TwigTemplate_d04bb4cf8dee5bd9aa062ad5f884ff8a988e02b05113ed9c2f87b3530deec192 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle:ProductBase:layout.html.twig", "TopxiaAdminBundle:ProductBaseFileManage:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle:ProductBase:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["side_nav"] = "picture";
        // line 4
        $context["tab"] = "productBase";
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
        <button class=\"btn btn-info btn-sm pull-right\"
        data-html5-url=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_batch_upload_product_files", array("id" => $this->getAttribute((isset($context["productBase"]) ? $context["productBase"] : null), "id", array()), "targetType" => "productBase")), "html", null, true);
        echo "\"
        data-normal-url=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("product_manage_upload_product_files", array("id" => $this->getAttribute((isset($context["productBase"]) ? $context["productBase"] : null), "id", array()), "targetType" => "productBase")), "html", null, true);
        echo "\"
        data-storage=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["storageSetting"]) ? $context["storageSetting"] : null), "upload_mode", array()), "html", null, true);
        echo "\"
        >
        <i class=\"glyphicon glyphicon-cloud-upload\"></i>上传基地图片
        </button>
      文件管理
    </div>
    <div class=\"panel-body\" id=\"file-manage-panel\">
      <ul class=\"nav nav-tabs mbm\">
        <li ";
        // line 25
        if (((isset($context["type"]) ? $context["type"] : null) == "productBase")) {
            echo " class=\"active\" ";
        }
        echo ">
        <a href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_files", array("id" => $this->getAttribute((isset($context["productBase"]) ? $context["productBase"] : null), "id", array()), "type" => "productBase")), "html", null, true);
        echo "\">基地图片</a></li>
        ";
        // line 28
        echo "      </ul>
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
        // line 40
        if (((isset($context["type"]) ? $context["type"] : null) == "productBase")) {
            // line 41
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
                // line 42
                echo "              ";
                $this->loadTemplate("TopxiaAdminBundle:ProductBaseFileManage:tbody-tr.html.twig", "TopxiaAdminBundle:ProductBaseFileManage:index.html.twig", 42)->display($context);
                // line 43
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
                // line 44
                echo "              <tr class=\"empty\"><td colspan=\"20\">无文件记录</td></tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['uploadFile'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "          ";
        }
        // line 47
        echo "        </tbody>
      </table>
      
      <label class=\"checkbox-inline mrm mbm\"><input type=\"checkbox\" data-role=\"batch-select\"> 全选</label>
      
      <div class=\"btn-group mbm\">
        <button class=\"btn btn-danger btn-sm\" data-role=\"batch-delete\" data-name=\"文件记录\" data-url=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_upload_course_delete_files", array("id" => $this->getAttribute((isset($context["productBase"]) ? $context["productBase"] : null), "id", array()), "type" => (isset($context["tab"]) ? $context["tab"] : null))), "html", null, true);
        echo "\">
        <i class=\"glyphicon glyphicon-trash\"></i>
        删除</button>
      </div>
      
      <nav class=\"text-center\">
        ";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
      </nav>
      ";
        // line 61
        if (((isset($context["type"]) ? $context["type"] : null) == "coursematerial")) {
            // line 62
            echo "        <div class=\"alert alert-info\">
          <ul>
            <li>上传备用资料文件成功后，在添加课时资料时可直接选取。</li>
            ";
            // line 66
            echo "          </ul>
        </div>
      ";
        }
        // line 69
        echo "      
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:ProductBaseFileManage:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 69,  175 => 66,  170 => 62,  168 => 61,  163 => 59,  154 => 53,  146 => 47,  143 => 46,  136 => 44,  123 => 43,  120 => 42,  101 => 41,  99 => 40,  85 => 28,  81 => 26,  75 => 25,  64 => 17,  60 => 16,  56 => 15,  46 => 7,  43 => 6,  36 => 2,  32 => 1,  30 => 5,  28 => 4,  26 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle:ProductBase:layout.html.twig' %}*/
/* {% block title %}文件管理 - {{ parent() }}{% endblock %}*/
/* {% set side_nav = 'picture' %}*/
/* {% set tab = 'productBase' %}*/
/* {% set script_controller = 'course-manage-file/index' %}*/
/* {% block main %}*/
/*   <style type="text/css">*/
/*   .tooltip-inner{*/
/*   max-width: 600px;*/
/*   }*/
/*   </style>*/
/*   <div class="panel panel-default panel-col">*/
/*     <div class="panel-heading">*/
/*         <button class="btn btn-info btn-sm pull-right"*/
/*         data-html5-url="{{ path('product_batch_upload_product_files', {id:productBase.id, targetType:'productBase'}) }}"*/
/*         data-normal-url="{{ path('product_manage_upload_product_files', {id:productBase.id, targetType:'productBase'}) }}"*/
/*         data-storage="{{storageSetting.upload_mode}}"*/
/*         >*/
/*         <i class="glyphicon glyphicon-cloud-upload"></i>上传基地图片*/
/*         </button>*/
/*       文件管理*/
/*     </div>*/
/*     <div class="panel-body" id="file-manage-panel">*/
/*       <ul class="nav nav-tabs mbm">*/
/*         <li {% if type == 'productBase' %} class="active" {% endif %}>*/
/*         <a href="{{ path('course_manage_files', {id:productBase.id, type:'productBase'}) }}">基地图片</a></li>*/
/*         {#<li {% if type == 'coursematerial' %} class="active" {% endif %}><a href="{{ path('course_manage_files', {id:course.id, type:'coursematerial'}) }}">备用资料文件</a></li>#}*/
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
/*           {% if type == 'productBase' %}*/
/*             {% for uploadFile in courseLessons %}*/
/*               {% include 'TopxiaAdminBundle:ProductBaseFileManage:tbody-tr.html.twig' %}*/
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
/*         <button class="btn btn-danger btn-sm" data-role="batch-delete" data-name="文件记录" data-url="{{ path('course_manage_upload_course_delete_files', {id:productBase.id, type:tab}) }}">*/
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
/*             {#<li><strong><a href="{{ path('course_materials', {id:course.id}) }}">课程资料区</a></strong>显示的是所有课时下的资料文件。</li>#}*/
/*           </ul>*/
/*         </div>*/
/*       {% endif %}*/
/*       */
/*     </div>*/
/*   </div>*/
/* {% endblock %}*/
