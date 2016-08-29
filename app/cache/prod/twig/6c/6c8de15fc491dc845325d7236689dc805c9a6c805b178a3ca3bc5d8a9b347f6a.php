<?php

/* TopxiaWebBundle:EsBar/ListContent/StudyPlace:my-classroom.html.twig */
class __TwigTemplate_0f8f794392ab08e0cfc114a87aee06f2e73bd2e4d97db2c69c9ea236e0a582e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:EsBar:ListContent/study-place.html.twig", "TopxiaWebBundle:EsBar/ListContent/StudyPlace:my-classroom.html.twig", 1);
        $this->blocks = array(
            'myStudyPlace' => array($this, 'block_myStudyPlace'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:EsBar:ListContent/study-place.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["esBarMenu"] = "classroom";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_myStudyPlace($context, array $blocks = array())
    {
        // line 5
        echo "
";
        // line 6
        if ((isset($context["classrooms"]) ? $context["classrooms"] : null)) {
            // line 7
            echo "  <!-- 班级 -->
  <div class=\"recommend-class-list\">
    ";
            // line 9
            $context["classroomCount"] = 15;
            // line 10
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["classrooms"]) ? $context["classrooms"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["classroom"]) {
                // line 11
                echo "      ";
                $context["classroomCount"] = $this->getAttribute($context["loop"], "length", array());
                // line 12
                echo "      <div class=\"class-item\">
        <div class=\"class-bg-layer\"></div>
        <div class=\"class-item-bg\">
          <a class=\"class-img\" target=\"_blank\" href=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute($context["classroom"], "id", array()))), "html", null, true);
                echo "\">
            <img class=\"img-responsive\" src=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($context["classroom"], "middlePicture", array()), "classroom.png"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["classroom"], "title", array()), "html", null, true);
                echo "\">
          </a>
          <h3><a class=\"link-dark\" target=\"_blank\" href=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute($context["classroom"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["classroom"], "title", array()), "html", null, true);
                echo "</a></h3>
        </div>
      </div>
    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classroom'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "    ";
            if (((isset($context["classroomCount"]) ? $context["classroomCount"] : null) >= 15)) {
                // line 23
                echo "      <p class=\"text-center\"><a class=\"link-light\" href=\"";
                echo $this->env->getExtension('routing')->getPath("my_classrooms");
                echo "\" target=\"_blank\">更多<i class=\"es-icon es-icon-angledoubleright\"></i></a></p>
    ";
            }
            // line 25
            echo "  </div>
";
        } else {
            // line 27
            echo "  <div class=\"empty\">暂无";
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:EsBar/ListContent/StudyPlace:my-classroom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 27,  111 => 25,  105 => 23,  102 => 22,  82 => 18,  75 => 16,  71 => 15,  66 => 12,  63 => 11,  45 => 10,  43 => 9,  39 => 7,  37 => 6,  34 => 5,  31 => 4,  27 => 1,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:EsBar:ListContent/study-place.html.twig' %}*/
/* */
/* {% set esBarMenu = 'classroom' %}*/
/* {% block myStudyPlace %}*/
/* */
/* {% if classrooms %}*/
/*   <!-- 班级 -->*/
/*   <div class="recommend-class-list">*/
/*     {% set classroomCount = 15 %}*/
/*     {% for classroom in classrooms %}*/
/*       {% set classroomCount = loop.length %}*/
/*       <div class="class-item">*/
/*         <div class="class-bg-layer"></div>*/
/*         <div class="class-item-bg">*/
/*           <a class="class-img" target="_blank" href="{{ path('classroom_show',{id:classroom.id}) }}">*/
/*             <img class="img-responsive" src="{{ filepath(classroom.middlePicture, 'classroom.png') }}" alt="{{ classroom.title }}">*/
/*           </a>*/
/*           <h3><a class="link-dark" target="_blank" href="{{ path('classroom_show',{id:classroom.id}) }}">{{ classroom.title }}</a></h3>*/
/*         </div>*/
/*       </div>*/
/*     {% endfor %}*/
/*     {% if classroomCount >= 15 %}*/
/*       <p class="text-center"><a class="link-light" href="{{ path('my_classrooms') }}" target="_blank">更多<i class="es-icon es-icon-angledoubleright"></i></a></p>*/
/*     {% endif %}*/
/*   </div>*/
/* {% else %}*/
/*   <div class="empty">暂无{{ setting('classroom.name')|default("班级") }}</div>*/
/* {% endif %}*/
/* {% endblock %}*/
/* */
/* */
/* */
