<?php

/* TopxiaWebBundle:Default:live-course.html.twig */
class __TwigTemplate_c9892c95ed746e796166f9befb5cdca88ef46787c5967a7b820e384a69e592ed extends Twig_Template
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
        $context["RecentLiveCourses"] = $this->env->getExtension('topxia_data_twig')->getData("RecentLiveCourses", array("count" => 4));
        // line 2
        if ((isset($context["RecentLiveCourses"]) ? $context["RecentLiveCourses"] : null)) {
            echo " 
  <section class=\"live-course-section ";
            // line 3
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "background", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "background", array()), "")) : ("")), "html", null, true);
            echo "\"> 
    <div class=\"container\"> 
      <div class=\"text-line gray\"> 
        <h5><span>";
            // line 6
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "title", array()), $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "defaultTitle", array()))) : ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "defaultTitle", array()))), "html", null, true);
            echo "</span><div class=\"line\"></div></h5> 
        <div class=\"subtitle\">";
            // line 7
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "subTitle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "subTitle", array()), $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "defaultSubTitle", array()))) : ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "defaultSubTitle", array()))), "html", null, true);
            echo "</div> 
      </div>
      <div class=\"course-list\"> 
        <div class=\"row\"> 
          ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["RecentLiveCourses"]) ? $context["RecentLiveCourses"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                echo " 
            <div class=\"col-lg-3 col-md-4 col-sm-6\"> 
              ";
                // line 13
                $this->loadTemplate("TopxiaWebBundle:Course:Widget/course-grid.html.twig", "TopxiaWebBundle:Default:live-course.html.twig", 13)->display(array_merge($context, array("course" => $context["course"])));
                echo " 

              ";
                // line 15
                $context["lesson"] = (($this->getAttribute($context["course"], "lesson", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($context["course"], "lesson", array(), "array"), null)) : (null));
                echo " 
              ";
                // line 16
                if ((((isset($context["lesson"]) ? $context["lesson"] : null) && (twig_date_format_filter($this->env, "now", "U") >= $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "startTime", array()))) && (twig_date_format_filter($this->env, "now", "U") <= $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "endTime", array())))) {
                    echo " 
                <div class=\"course-date visible-lg\"> 
                  <div class=\"btn-circle btn-live  btn-circle-md\"> 
                    <i class=\"es-icon es-icon-videocam\"></i> 
                  </div> 
                  <div class=\"date\"> 
                    正在直播 
                  </div> 
                </div> 
              ";
                } else {
                    // line 25
                    echo " 
                <div class=\"course-date visible-lg\"> 
                  <div class=\"btn-circle btn-circle-md\"> 
                    <i class=\"es-icon es-icon-videocam\"></i> 
                  </div> 
                  <div class=\"date\"> 
                    ";
                    // line 31
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "startTime", array()), "n月j日 H:i"), "html", null, true);
                    echo " 
                  </div> 
                </div> 
              ";
                }
                // line 34
                echo " 

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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo " 

          ";
            // line 39
            $context["emptyCourseNum"] = (4 - twig_length_filter($this->env, (isset($context["RecentLiveCourses"]) ? $context["RecentLiveCourses"] : null)));
            echo " 
          ";
            // line 40
            if (((isset($context["emptyCourseNum"]) ? $context["emptyCourseNum"] : null) > 0)) {
                echo " 
            ";
                // line 41
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["emptyCourseNum"]) ? $context["emptyCourseNum"] : null)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    echo " 
              <div class=\"col-lg-3 col-md-4 col-sm-6 visible-lg\"> 
                <div class=\"course-item course-default\"> 
                  <i class=\"es-icon es-icon-videocam\"></i> 
                  <br> 
                  敬请期待 
                </div> 
                <div class=\"course-date\"> 
                  <div class=\"btn-circle btn-circle-md\"> 
                    <i class=\"es-icon es-icon-accesstime\"></i> 
                  </div> 
                </div> 
              </div> 
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo " 
          ";
            }
            // line 55
            echo " 
        </div> 
      </div> 
      <div class=\"text-center mvl\"> 
        <a href=\"";
            // line 59
            echo $this->env->getExtension('routing')->getPath("live_course_explore");
            echo "\" class=\"btn btn-default btn-lg\"> 
          更多直播 <i class=\"mrs-o es-icon es-icon-chevronright\"></i> 
        </a> 
      </div> 
    </div> 
  </section> 
";
        }
        // line 65
        echo " ";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:live-course.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 65,  160 => 59,  154 => 55,  150 => 54,  128 => 41,  124 => 40,  120 => 39,  116 => 37,  99 => 34,  92 => 31,  84 => 25,  71 => 16,  67 => 15,  62 => 13,  42 => 11,  35 => 7,  31 => 6,  25 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set RecentLiveCourses = data('RecentLiveCourses',{ 'count':4}) %}*/
/* {% if RecentLiveCourses %} */
/*   <section class="live-course-section {{config.background|default("")}}"> */
/*     <div class="container"> */
/*       <div class="text-line gray"> */
/*         <h5><span>{{ config.title|default(config.defaultTitle) }}</span><div class="line"></div></h5> */
/*         <div class="subtitle">{{ config.subTitle|default(config.defaultSubTitle) }}</div> */
/*       </div>*/
/*       <div class="course-list"> */
/*         <div class="row"> */
/*           {% for course in RecentLiveCourses %} */
/*             <div class="col-lg-3 col-md-4 col-sm-6"> */
/*               {% include 'TopxiaWebBundle:Course:Widget/course-grid.html.twig' with {course:course} %} */
/* */
/*               {% set lesson = course['lesson']|default(null) %} */
/*               {% if lesson and "now"|date("U") >= lesson.startTime and "now"|date("U") <= lesson.endTime %} */
/*                 <div class="course-date visible-lg"> */
/*                   <div class="btn-circle btn-live  btn-circle-md"> */
/*                     <i class="es-icon es-icon-videocam"></i> */
/*                   </div> */
/*                   <div class="date"> */
/*                     正在直播 */
/*                   </div> */
/*                 </div> */
/*               {% else %} */
/*                 <div class="course-date visible-lg"> */
/*                   <div class="btn-circle btn-circle-md"> */
/*                     <i class="es-icon es-icon-videocam"></i> */
/*                   </div> */
/*                   <div class="date"> */
/*                     {{ lesson.startTime|date('n月j日 H:i') }} */
/*                   </div> */
/*                 </div> */
/*               {% endif %} */
/* */
/*             </div> */
/*           {% endfor %} */
/* */
/*           {% set emptyCourseNum = 4 - RecentLiveCourses|length %} */
/*           {% if emptyCourseNum > 0 %} */
/*             {% for i in range(1, emptyCourseNum) %} */
/*               <div class="col-lg-3 col-md-4 col-sm-6 visible-lg"> */
/*                 <div class="course-item course-default"> */
/*                   <i class="es-icon es-icon-videocam"></i> */
/*                   <br> */
/*                   敬请期待 */
/*                 </div> */
/*                 <div class="course-date"> */
/*                   <div class="btn-circle btn-circle-md"> */
/*                     <i class="es-icon es-icon-accesstime"></i> */
/*                   </div> */
/*                 </div> */
/*               </div> */
/*             {% endfor %} */
/*           {% endif %} */
/*         </div> */
/*       </div> */
/*       <div class="text-center mvl"> */
/*         <a href="{{ path('live_course_explore') }}" class="btn btn-default btn-lg"> */
/*           更多直播 <i class="mrs-o es-icon es-icon-chevronright"></i> */
/*         </a> */
/*       </div> */
/*     </div> */
/*   </section> */
/* {% endif %} */
