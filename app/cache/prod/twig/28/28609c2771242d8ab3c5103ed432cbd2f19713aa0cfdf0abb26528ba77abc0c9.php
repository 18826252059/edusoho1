<?php

/* ClassroomBundle:Classroom/Teacher:list.html.twig */
class __TwigTemplate_30f06a6a8ea54f1f16324576f19f79505731f1563ab97e69c98867364b5f00d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ClassroomBundle:Classroom:content-layout.html.twig", "ClassroomBundle:Classroom/Teacher:list.html.twig", 1);
        $this->blocks = array(
            'description' => array($this, 'block_description'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ClassroomBundle:Classroom:content-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["nav"] = "teachers";
        // line 5
        $this->env->getExtension('topxia_web_twig')->loadScript("classroombundle/controller/classroom/detail/teacher-list");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_description($context, array $blocks = array())
    {
        echo $this->env->getExtension('topxia_web_twig')->plainTextFilter(((array_key_exists("classroomDescription", $context)) ? (_twig_default_filter((isset($context["classroomDescription"]) ? $context["classroomDescription"] : null), "")) : ("")), 100);
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "
  <div class=\"teacher-list no-shadow row\">
  ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["teachers"]) ? $context["teachers"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["teacher"]) {
            // line 10
            echo "    ";
            $context["isFollowed"] = _twig_default_filter(twig_in_filter($this->getAttribute($context["teacher"], "id", array()), (isset($context["Myfollowings"]) ? $context["Myfollowings"] : null)), false);
            // line 11
            echo "    ";
            $context["member"] = $this->getAttribute((isset($context["members"]) ? $context["members"] : null), $this->getAttribute($context["teacher"], "id", array()), array(), "array");
            // line 12
            echo "    ";
            $this->loadTemplate("ClassroomBundle:Classroom/Teacher:item.html.twig", "ClassroomBundle:Classroom/Teacher:list.html.twig", 12)->display($context);
            // line 13
            echo "  ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['teacher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "  </div>

";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom/Teacher:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 14,  73 => 13,  70 => 12,  67 => 11,  64 => 10,  47 => 9,  43 => 7,  40 => 6,  34 => 4,  30 => 1,  28 => 5,  26 => 3,  11 => 1,);
    }
}
/* {% extends 'ClassroomBundle:Classroom:content-layout.html.twig' %}*/
/* */
/* {% set nav = 'teachers' %}*/
/* {% block description %}{{ classroomDescription|default('')|plain_text(100) }}{% endblock %}*/
/* {% do load_script('classroombundle/controller/classroom/detail/teacher-list') %}*/
/* {% block main %}*/
/* */
/*   <div class="teacher-list no-shadow row">*/
/*   {% for teacher in teachers %}*/
/*     {% set isFollowed = (teacher.id in Myfollowings)|default(false) %}*/
/*     {% set member = members[teacher.id] %}*/
/*     {% include 'ClassroomBundle:Classroom/Teacher:item.html.twig' %}*/
/*   {% endfor %}*/
/*   </div>*/
/* */
/* {% endblock %}*/
/* */
