<?php

/* ClassroomBundle:Classroom:content-layout.html.twig */
class __TwigTemplate_689bc7ae1af8f3f0b0e974a5a5fcb1ee01682d4f85994bef20c8ac99adfa2a0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'keywords' => array($this, 'block_keywords'),
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'main' => array($this, 'block_main'),
            'side' => array($this, 'block_side'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate(((array_key_exists("layout", $context)) ? (_twig_default_filter((isset($context["layout"]) ? $context["layout"] : null), "ClassroomBundle:Classroom:layout.html.twig")) : ("ClassroomBundle:Classroom:layout.html.twig")), "ClassroomBundle:Classroom:content-layout.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_keywords($context, array $blocks = array())
    {
        // line 3
        echo "  ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ClassroomBundle:Classroom:keywords", array("classroom" => (isset($context["classroom"]) ? $context["classroom"] : null))));
        echo "
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"class-detail row\" id=\"detail-content\">
  <div class=\"col-lg-9 col-md-8 class-detail-main\">

    ";
        // line 10
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Announcement:block", array("targetObject" => (isset($context["classroom"]) ? $context["classroom"] : null), "targetType" => "classroom")));
        echo "

    <section class=\"es-section\">
      ";
        // line 13
        if (array_key_exists("nav", $context)) {
            // line 14
            echo "        ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ClassroomBundle:Classroom:dashboard", array("classroom" => (isset($context["classroom"]) ? $context["classroom"] : null), "nav" => (isset($context["nav"]) ? $context["nav"] : null), "member" => (isset($context["member"]) ? $context["member"] : null))));
            echo "
      ";
        }
        // line 16
        echo "      <div class=\"class-detail-content\">
        ";
        // line 17
        $this->displayBlock('main', $context, $blocks);
        // line 19
        echo "      </div>
    </section>
  </div>

  <aside class=\"col-lg-3 col-md-4 class-sidebar\">
    ";
        // line 24
        $this->displayBlock('side', $context, $blocks);
        // line 40
        echo "  </aside>

  ";
        // line 42
        if ( !((array_key_exists("canLook", $context)) ? (_twig_default_filter((isset($context["canLook"]) ? $context["canLook"] : null), false)) : (false))) {
            // line 43
            echo "    <input type=\"hidden\" name=\"access-intercept-check\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_canview", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\">
    ";
            // line 44
            $this->loadTemplate("ClassroomBundle:ClassroomThread:access-intercept-modal.html.twig", "ClassroomBundle:Classroom:content-layout.html.twig", 44)->display($context);
            // line 45
            echo "  ";
        }
        // line 46
        echo "</div>
";
    }

    // line 17
    public function block_main($context, array $blocks = array())
    {
        // line 18
        echo "        ";
    }

    // line 24
    public function block_side($context, array $blocks = array())
    {
        // line 25
        echo "      ";
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("ClassroomPlan")) {
            // line 26
            echo "        ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ClassroomPlanBundle:ClassroomPlan:todayUserTaskBlock", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))));
            echo "
      ";
        }
        // line 28
        echo "
      ";
        // line 29
        if ($this->env->getExtension('topxia_web_twig')->isPermitRole($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "Take", true)) {
            // line 30
            echo "        ";
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ClassroomBundle:Classroom:signPage", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))));
            echo "
      ";
        }
        // line 32
        echo "      
      ";
        // line 33
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ClassroomBundle:Classroom:teachersBlock", array("classroom" => (isset($context["classroom"]) ? $context["classroom"] : null))));
        echo "

      ";
        // line 35
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ClassroomBundle:Classroom:latestMembersBlock", array("classroom" => (isset($context["classroom"]) ? $context["classroom"] : null))));
        echo "

      ";
        // line 37
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("ClassroomBundle:Classroom:classroomStatusBlock", array("classroom" => (isset($context["classroom"]) ? $context["classroom"] : null))));
        echo "
      
    ";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom:content-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 37,  142 => 35,  137 => 33,  134 => 32,  128 => 30,  126 => 29,  123 => 28,  117 => 26,  114 => 25,  111 => 24,  107 => 18,  104 => 17,  99 => 46,  96 => 45,  94 => 44,  89 => 43,  87 => 42,  83 => 40,  81 => 24,  74 => 19,  72 => 17,  69 => 16,  63 => 14,  61 => 13,  55 => 10,  50 => 7,  47 => 6,  41 => 5,  34 => 3,  31 => 2,  22 => 1,);
    }
}
/* {% extends layout|default('ClassroomBundle:Classroom:layout.html.twig') %}*/
/* {% block keywords %}*/
/*   {{ render(controller('ClassroomBundle:Classroom:keywords',{classroom: classroom} )) }}*/
/* {% endblock %}*/
/* {% block title %}{{ parent() }}{% endblock %}*/
/* {% block content %}*/
/* <div class="class-detail row" id="detail-content">*/
/*   <div class="col-lg-9 col-md-8 class-detail-main">*/
/* */
/*     {{ render(controller('TopxiaWebBundle:Announcement:block',{targetObject:classroom,targetType:'classroom'})) }}*/
/* */
/*     <section class="es-section">*/
/*       {% if nav is defined %}*/
/*         {{ render(controller('ClassroomBundle:Classroom:dashboard',{classroom:classroom, nav:nav, member:member})) }}*/
/*       {% endif %}*/
/*       <div class="class-detail-content">*/
/*         {% block main %}*/
/*         {% endblock %}*/
/*       </div>*/
/*     </section>*/
/*   </div>*/
/* */
/*   <aside class="col-lg-3 col-md-4 class-sidebar">*/
/*     {% block side %}*/
/*       {% if is_plugin_installed('ClassroomPlan') %}*/
/*         {{ render(controller('ClassroomPlanBundle:ClassroomPlan:todayUserTaskBlock',{classroomId:classroom.id})) }}*/
/*       {% endif %}*/
/* */
/*       {% if classroom_permit(classroom.id, 'Take', true) %}*/
/*         {{ render(controller('ClassroomBundle:Classroom:signPage',{classroomId:classroom.id})) }}*/
/*       {% endif %}*/
/*       */
/*       {{ render(controller('ClassroomBundle:Classroom:teachersBlock',{classroom:classroom})) }}*/
/* */
/*       {{ render(controller('ClassroomBundle:Classroom:latestMembersBlock',{classroom:classroom})) }}*/
/* */
/*       {{ render(controller('ClassroomBundle:Classroom:classroomStatusBlock',{classroom:classroom})) }}*/
/*       */
/*     {% endblock %}*/
/*   </aside>*/
/* */
/*   {% if not canLook|default(false) %}*/
/*     <input type="hidden" name="access-intercept-check" value="{{ path('classroom_canview', {classroomId:classroom.id}) }}">*/
/*     {% include 'ClassroomBundle:ClassroomThread:access-intercept-modal.html.twig' %}*/
/*   {% endif %}*/
/* </div>*/
/* {% endblock %}*/
