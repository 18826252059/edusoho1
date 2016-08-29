<?php

/* TopxiaWebBundle:CourseMaterialManage:material-modal.html.twig */
class __TwigTemplate_4dabffb33029b3b76ae21133201a203a5702d109ca80ffe2bdf8c69a0bebed7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:CourseMaterialManage:material-modal.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["modal_class"] = "modal-lg";
        // line 49
        $context["hide_footer"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "添加资料";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "
<form id=\"course-material-form\" class=\"form-horizontal\" action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_material_upload", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "id", array()))), "html", null, true);
        echo "\" enctype=\"multipart/form-data\" method=\"post\">
  <div class=\"form-group\">
    <div class=\"col-md-10 col-md-offset-1  controls\">
      <ul class=\"list-group\" id=\"material-list\" ";
        // line 11
        if ( !(isset($context["materials"]) ? $context["materials"] : null)) {
            echo "style=\"display:none;\"";
        }
        echo ">
        ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["materials"]) ? $context["materials"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["material"]) {
            // line 13
            echo "          ";
            $this->loadTemplate("TopxiaWebBundle:CourseMaterialManage:list-item.html.twig", "TopxiaWebBundle:CourseMaterialManage:material-modal.html.twig", 13)->display($context);
            // line 14
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['material'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "      </ul>
      ";
        // line 16
        if ( !(isset($context["materials"]) ? $context["materials"] : null)) {
            // line 17
            echo "        <span class=\"control-text text-warning\">暂无资料，请上传。</span>
      ";
        }
        // line 19
        echo "    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-10 col-md-offset-1 controls\" id=\"material-file-chooser\">
      ";
        // line 24
        $this->loadTemplate("TopxiaWebBundle:CourseMaterialManage:file-chooser.html.twig", "TopxiaWebBundle:CourseMaterialManage:material-modal.html.twig", 24)->display($context);
        // line 25
        echo "      <input type=\"hidden\" name=\"fileId\">
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-10 col-md-offset-1 controls\">
      <textarea class=\"form-control\" name=\"description\" rows=\"2\" placeholder=\"填写资料简介 (可选)\"></textarea>
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-10 col-md-offset-1 controls\">
      <button class=\"btn btn-primary\" id=\"material-upload-btn\" type=\"submit\">添加</button>
    </div>
  </div>

  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

</form>

<script>app.load('course-manage/material-modal')</script>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseMaterialManage:material-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 41,  110 => 25,  108 => 24,  101 => 19,  97 => 17,  95 => 16,  92 => 15,  78 => 14,  75 => 13,  58 => 12,  52 => 11,  46 => 8,  43 => 7,  40 => 6,  34 => 5,  30 => 1,  28 => 49,  26 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% set modal_class = 'modal-lg' %}*/
/* */
/* {% block title %}添加资料{% endblock %}*/
/* {% block body %}*/
/* */
/* <form id="course-material-form" class="form-horizontal" action="{{ path('course_manage_material_upload', {courseId:course.id, lessonId:lesson.id}) }}" enctype="multipart/form-data" method="post">*/
/*   <div class="form-group">*/
/*     <div class="col-md-10 col-md-offset-1  controls">*/
/*       <ul class="list-group" id="material-list" {% if not materials %}style="display:none;"{% endif %}>*/
/*         {% for material in materials %}*/
/*           {% include 'TopxiaWebBundle:CourseMaterialManage:list-item.html.twig' %}*/
/*         {% endfor %}*/
/*       </ul>*/
/*       {% if not materials %}*/
/*         <span class="control-text text-warning">暂无资料，请上传。</span>*/
/*       {% endif %}*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="form-group">*/
/*     <div class="col-md-10 col-md-offset-1 controls" id="material-file-chooser">*/
/*       {% include 'TopxiaWebBundle:CourseMaterialManage:file-chooser.html.twig' %}*/
/*       <input type="hidden" name="fileId">*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="form-group">*/
/*     <div class="col-md-10 col-md-offset-1 controls">*/
/*       <textarea class="form-control" name="description" rows="2" placeholder="填写资料简介 (可选)"></textarea>*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="form-group">*/
/*     <div class="col-md-10 col-md-offset-1 controls">*/
/*       <button class="btn btn-primary" id="material-upload-btn" type="submit">添加</button>*/
/*     </div>*/
/*   </div>*/
/* */
/*   <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/* */
/* </form>*/
/* */
/* <script>app.load('course-manage/material-modal')</script>*/
/* */
/* {% endblock %}*/
/* */
/* {% set hide_footer = true %}*/
