<?php

/* TopxiaWebBundle:Course:normal-layout.html.twig */
class __TwigTemplate_d6fbd79b0684ba5bcf69773d8f504921c1481f11d39d9bda5a846c0f3f1fc87c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Course:normal-layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'top_content' => array($this, 'block_top_content'),
            'content' => array($this, 'block_content'),
            'course_main' => array($this, 'block_course_main'),
            'dashboard_relatedCoursesBlock' => array($this, 'block_dashboard_relatedCoursesBlock'),
            'course_sidebar' => array($this, 'block_course_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 10
        $context["bodyClass"] = "course-dashboard-page";
        // line 11
        $context["script_arguments"] = array("course_uri" => $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_keywords($context, array $blocks = array())
    {
        // line 6
        echo "  ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Course:keywords", array("course" => (isset($context["course"]) ? $context["course"] : null))));
        echo "
";
    }

    // line 8
    public function block_description($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ((array_key_exists("courseAbout", $context)) ? (_twig_default_filter((isset($context["courseAbout"]) ? $context["courseAbout"] : null), "")) : ("")), "html", null, true);
    }

    // line 13
    public function block_top_content($context, array $blocks = array())
    {
        // line 14
        echo "  ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Part/Course:header", array("course" => (isset($context["course"]) ? $context["course"] : null), "member" => (isset($context["member"]) ? $context["member"] : null))));
        echo "
";
    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        // line 18
        echo "  <div class=\"course-detail row\">
    <div class=\"col-lg-9 col-md-8  course-detail-main\">

      ";
        // line 21
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Announcement:block", array("targetObject" => (isset($context["course"]) ? $context["course"] : null), "targetType" => "course")));
        echo "

      <section class=\"es-section\">
        ";
        // line 24
        $this->loadTemplate("TopxiaWebBundle:Course:Part/normal-nav.html.twig", "TopxiaWebBundle:Course:normal-layout.html.twig", 24)->display($context);
        // line 25
        echo "        ";
        $this->displayBlock('course_main', $context, $blocks);
        // line 26
        echo "      </section>
      ";
        // line 27
        $this->displayBlock('dashboard_relatedCoursesBlock', $context, $blocks);
        // line 32
        echo "    </div>

    <div class=\"col-lg-3 col-md-4  course-sidebar\">
      ";
        // line 35
        $this->displayBlock('course_sidebar', $context, $blocks);
        // line 47
        echo "    </div>
  </div>
";
    }

    // line 25
    public function block_course_main($context, array $blocks = array())
    {
    }

    // line 27
    public function block_dashboard_relatedCoursesBlock($context, array $blocks = array())
    {
        // line 28
        echo "        ";
        if (($this->env->getExtension('topxia_web_twig')->getSetting("course.relatedCourses") == 1)) {
            // line 29
            echo "          ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Course:relatedCoursesBlock", array("course" => (isset($context["course"]) ? $context["course"] : null))));
            echo "
        ";
        }
        // line 31
        echo "      ";
    }

    // line 35
    public function block_course_sidebar($context, array $blocks = array())
    {
        // line 36
        echo "        ";
        if (((array_key_exists("member", $context)) ? (_twig_default_filter((isset($context["member"]) ? $context["member"] : null), null)) : (null))) {
            // line 37
            echo "          ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Part/Course:belongClassrooms", array("course" => (isset($context["course"]) ? $context["course"] : null))));
            echo "
        ";
        }
        // line 39
        echo "        ";
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "parentId", array()) == 0)) {
            // line 40
            echo "          ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Part/Course:recommendClassrooms", array("course" => (isset($context["course"]) ? $context["course"] : null))));
            echo "
        ";
        }
        // line 42
        echo "        ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Part/Course:teachers", array("course" => (isset($context["course"]) ? $context["course"] : null))));
        echo "
        ";
        // line 43
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Part/Course:students", array("course" => (isset($context["course"]) ? $context["course"] : null))));
        echo "
        ";
        // line 44
        $this->loadTemplate("TopxiaWebBundle:Course:Part/normal-sidebar-statuses.html.twig", "TopxiaWebBundle:Course:normal-layout.html.twig", 44)->display($context);
        // line 45
        echo "
      ";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:normal-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 45,  162 => 44,  158 => 43,  153 => 42,  147 => 40,  144 => 39,  138 => 37,  135 => 36,  132 => 35,  128 => 31,  122 => 29,  119 => 28,  116 => 27,  111 => 25,  105 => 47,  103 => 35,  98 => 32,  96 => 27,  93 => 26,  90 => 25,  88 => 24,  82 => 21,  77 => 18,  74 => 17,  67 => 14,  64 => 13,  58 => 8,  51 => 6,  48 => 5,  40 => 3,  36 => 1,  34 => 11,  32 => 10,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::layout.html.twig' %}*/
/* */
/* {% block title %}{{ course.title }} - {{ parent() }}{% endblock %}*/
/* */
/* {% block keywords %}*/
/*   {{ render(controller('TopxiaWebBundle:Course:keywords',{course: course} )) }}*/
/* {% endblock %}*/
/* {% block description %}{{ courseAbout|default('') }}{% endblock %}*/
/* */
/* {% set bodyClass = 'course-dashboard-page' %}*/
/* {% set script_arguments = {course_uri: path('course_show', {id:course.id})} %}*/
/* */
/* {% block top_content %}*/
/*   {{ render(controller('TopxiaWebBundle:Part/Course:header',{course: course, member: member})) }}*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*   <div class="course-detail row">*/
/*     <div class="col-lg-9 col-md-8  course-detail-main">*/
/* */
/*       {{ render(controller('TopxiaWebBundle:Announcement:block',{targetObject:course,targetType:'course'})) }}*/
/* */
/*       <section class="es-section">*/
/*         {% include 'TopxiaWebBundle:Course:Part/normal-nav.html.twig' %}*/
/*         {% block course_main %}{% endblock %}*/
/*       </section>*/
/*       {% block dashboard_relatedCoursesBlock %}*/
/*         {% if setting('course.relatedCourses') == 1 %}*/
/*           {{ render(controller('TopxiaWebBundle:Course:relatedCoursesBlock',{course:course})) }}*/
/*         {% endif %}*/
/*       {% endblock %}*/
/*     </div>*/
/* */
/*     <div class="col-lg-3 col-md-4  course-sidebar">*/
/*       {% block course_sidebar %}*/
/*         {% if member|default(null) %}*/
/*           {{ render(controller('TopxiaWebBundle:Part/Course:belongClassrooms',{course: course})) }}*/
/*         {% endif %}*/
/*         {% if course.parentId == 0 %}*/
/*           {{ render(controller('TopxiaWebBundle:Part/Course:recommendClassrooms',{course: course})) }}*/
/*         {% endif %}*/
/*         {{ render(controller('TopxiaWebBundle:Part/Course:teachers',{course: course})) }}*/
/*         {{ render(controller('TopxiaWebBundle:Part/Course:students',{course: course})) }}*/
/*         {% include 'TopxiaWebBundle:Course:Part/normal-sidebar-statuses.html.twig' %}*/
/* */
/*       {% endblock %}*/
/*     </div>*/
/*   </div>*/
/* {% endblock %}*/
/* */
