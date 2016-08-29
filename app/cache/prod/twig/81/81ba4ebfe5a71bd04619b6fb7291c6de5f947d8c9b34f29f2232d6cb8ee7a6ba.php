<?php

/* TopxiaWebBundle:LiveCourse:rating-courses-block.html.twig */
class __TwigTemplate_c2e6097a135b51bf8a6dae5dbbb892e2e014650b4a3b907b0829b527b03ae07a extends Twig_Template
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
        if ((isset($context["courses"]) ? $context["courses"] : null)) {
            // line 2
            echo "  <div class=\"panel panel-default\">
    <div class=\"panel-heading\">
      <h3 class=\"panel-title\">好评课程</h3>
    </div>
    <div class=\"panel-body\">
  \t\t<ul class=\"media-list mtl\">
  \t\t\t";
            // line 8
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : null));
            foreach ($context['_seq'] as $context["key"] => $context["course"]) {
                // line 9
                echo "          <li class=\"media live-rating-course\">
          \t<span class=\"rank_num\">";
                // line 10
                echo twig_escape_filter($this->env, ($context["key"] + 1), "html", null, true);
                echo "</span>
          \t<div class=\"media-body\">
          \t\t<a href=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
                echo "\">
          \t\t\t";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
                echo "
          \t\t</a>
          \t\t";
                // line 15
                if (($context["key"] == 0)) {
                    // line 16
                    echo "          \t\t<div class=\"mts rating first-rating stars-";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["course"], "rating", array())), "html", null, true);
                    echo "\">&nbsp;</div>
          \t\t";
                } else {
                    // line 18
                    echo "          \t\t<div class=\"mts rating other-rating stars-";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, $this->getAttribute($context["course"], "rating", array())), "html", null, true);
                    echo "\">&nbsp;</div>
          \t\t";
                }
                // line 20
                echo "          \t</div>
      \t  </li>
      \t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "      </ul>
  \t</div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:LiveCourse:rating-courses-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 23,  66 => 20,  60 => 18,  54 => 16,  52 => 15,  47 => 13,  41 => 12,  36 => 10,  33 => 9,  29 => 8,  21 => 2,  19 => 1,);
    }
}
/* {% if courses %}*/
/*   <div class="panel panel-default">*/
/*     <div class="panel-heading">*/
/*       <h3 class="panel-title">好评课程</h3>*/
/*     </div>*/
/*     <div class="panel-body">*/
/*   		<ul class="media-list mtl">*/
/*   			{% for key,course in courses %}*/
/*           <li class="media live-rating-course">*/
/*           	<span class="rank_num">{{key+1}}</span>*/
/*           	<div class="media-body">*/
/*           		<a href="{{ path('course_show' , {id:course.id})}}" title="{{ course.title}}">*/
/*           			{{ course.title }}*/
/*           		</a>*/
/*           		{% if key == 0%}*/
/*           		<div class="mts rating first-rating stars-{{ (course.rating)|number_format }}">&nbsp;</div>*/
/*           		{% else %}*/
/*           		<div class="mts rating other-rating stars-{{ (course.rating)|number_format }}">&nbsp;</div>*/
/*           		{% endif %}*/
/*           	</div>*/
/*       	  </li>*/
/*       	{% endfor %}*/
/*       </ul>*/
/*   	</div>*/
/*   </div>*/
/* {% endif %}*/
