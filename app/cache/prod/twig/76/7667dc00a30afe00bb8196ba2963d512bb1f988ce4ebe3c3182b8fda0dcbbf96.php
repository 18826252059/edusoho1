<?php

/* CustomWebBundle:Classroom:latest-members-block.html.twig */
class __TwigTemplate_b0db9abf823c6fdab711ab055e5d1067714ef1065dd57f25efe8c4c842fcd5b6 extends Twig_Template
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
        if ((isset($context["users"]) ? $context["users"] : null)) {
            // line 2
            echo "    <div class=\"left-h2 g-mt10 g-mb10 unshow-h2\">培育班成员
\t\t\t<span class=\"classes-member\">
    ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["students"]) ? $context["students"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 5
                echo "        ";
                if (($this->getAttribute($context["loop"], "index", array()) < 6)) {
                    // line 6
                    echo "        <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($context["user"], "mediumAvatar", array()), "avatar.png"), "html", null, true);
                    echo "\" width=\"25\" height=\"25\">
        ";
                }
                // line 8
                echo "    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "\t\t\t</span>
        <a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_member", array("classroomId" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), "type" => "all")), "html", null, true);
            echo "\"><span class=\"course-rightPoint g-fr c-666\">";
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "studentNum", array()) + $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "auditorNum", array())), "html", null, true);
            echo "人</span></a>
    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "CustomWebBundle:Classroom:latest-members-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 10,  65 => 9,  51 => 8,  45 => 6,  42 => 5,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if users %}*/
/*     <div class="left-h2 g-mt10 g-mb10 unshow-h2">培育班成员*/
/* 			<span class="classes-member">*/
/*     {% for  user in students %}*/
/*         {% if loop.index < 6%}*/
/*         <img src="{{ filepath(user.mediumAvatar, 'avatar.png') }}" width="25" height="25">*/
/*         {% endif %}*/
/*     {% endfor %}*/
/* 			</span>*/
/*         <a href="{{ path('classroom_member',{classroomId:classroom.id,type:'all'}) }}"><span class="course-rightPoint g-fr c-666">{{ classroom.studentNum + classroom.auditorNum }}人</span></a>*/
/*     </div>*/
/* {% endif %}*/
