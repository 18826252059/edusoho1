<?php

/* TopxiaWebBundle:Course:lesson-list.html.twig */
class __TwigTemplate_265f72c09c3daf1349cd070b1cf815533175ab2055b99c48bdbf68a02a9987e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Course:normal-layout.html.twig", "TopxiaWebBundle:Course:lesson-list.html.twig", 1);
        $this->blocks = array(
            'course_main' => array($this, 'block_course_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Course:normal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["tab"] = "lesson-list";
        // line 5
        $this->env->getExtension('topxia_web_twig')->loadScript("course/show");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_course_main($context, array $blocks = array())
    {
        // line 8
        echo "
  <div class=\"course-detail-content\">

    <div class=\"es-piece\">
      <div class=\"piece-body\">
        ";
        // line 13
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:CourseLesson:list", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "member" => (isset($context["member"]) ? $context["member"] : null), "previewUrl" => $this->env->getExtension('routing')->getPath("course_lessons_preview", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))))));
        echo "
        
      </div>
    </div>
    
  </div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:lesson-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 13,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:Course:normal-layout.html.twig' %}*/
/* */
/* {% set tab = 'lesson-list' %}*/
/* */
/* {% do load_script('course/show') %}*/
/* */
/* {% block course_main %}*/
/* */
/*   <div class="course-detail-content">*/
/* */
/*     <div class="es-piece">*/
/*       <div class="piece-body">*/
/*         {{ render(controller('TopxiaWebBundle:CourseLesson:list',{courseId: course.id, member: member, previewUrl: path('course_lessons_preview', {courseId:course.id})} )) }}*/
/*         */
/*       </div>*/
/*     </div>*/
/*     */
/*   </div>*/
/* */
/* {% endblock %}*/
