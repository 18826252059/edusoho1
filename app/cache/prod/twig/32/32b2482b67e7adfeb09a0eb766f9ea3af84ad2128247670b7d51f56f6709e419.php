<?php

/* CustomWebBundle:Course:normal-sidebar-students.html.twig */
class __TwigTemplate_fe8f5d4f2fa1ed991dfa234991d903f02cb015c970ba2ebc03482d251ba7a8e8 extends Twig_Template
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
        echo "<div class=\"left-h2 g-mt10 g-mb10 unshow-h2\">学过
\t\t\t\t\t<span class=\"classes-member\">
                        ";
        // line 3
        if ((isset($context["students"]) ? $context["students"] : null)) {
            // line 4
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["members"]) ? $context["members"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
                // line 5
                echo "                                    ";
                if (($this->getAttribute($context["loop"], "index", array()) < 6)) {
                    // line 6
                    echo "                                    ";
                    $context["student"] = $this->getAttribute((isset($context["students"]) ? $context["students"] : null), $this->getAttribute($context["member"], "userId", array()), array(), "array");
                    // line 7
                    echo "                                    <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["student"]) ? $context["student"] : null), "mediumAvatar", array()), "avatar.png"), "html", null, true);
                    echo "\" width=\"25\" height=\"25\">
                                    ";
                }
                // line 9
                echo "                                ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "                        ";
        }
        // line 11
        echo "\t\t\t\t\t</span>
    <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_member", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "type" => "all")), "html", null, true);
        echo "\"><span class=\"course-rightPoint g-fr c-666\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "studentNum", array()), "html", null, true);
        echo "人</span></a>
</div>";
    }

    public function getTemplateName()
    {
        return "CustomWebBundle:Course:normal-sidebar-students.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 12,  72 => 11,  69 => 10,  55 => 9,  49 => 7,  46 => 6,  43 => 5,  25 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div class="left-h2 g-mt10 g-mb10 unshow-h2">学过*/
/* 					<span class="classes-member">*/
/*                         {% if students %}*/
/*                                 {% for member in members %}*/
/*                                     {% if loop.index < 6 %}*/
/*                                     {% set student = students[member.userId] %}*/
/*                                     <img src="{{ filepath(student.mediumAvatar, 'avatar.png')}}" width="25" height="25">*/
/*                                     {% endif %}*/
/*                                 {% endfor %}*/
/*                         {% endif %}*/
/* 					</span>*/
/*     <a href="{{ path('course_member',{courseId:course.id,type:'all'}) }}"><span class="course-rightPoint g-fr c-666">{{ course.studentNum }}人</span></a>*/
/* </div>*/
