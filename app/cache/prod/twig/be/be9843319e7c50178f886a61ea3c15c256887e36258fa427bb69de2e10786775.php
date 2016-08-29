<?php

/* TopxiaWebBundle:Default:recommend-classroom.html.twig */
class __TwigTemplate_8c3a28fe428718c4998f41b37c9caf0c48f0ff93b76cb4904fd04267c398c0d7 extends Twig_Template
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
        echo "<!-- 推荐班级 --> 
";
        // line 2
        $context["RecommendClassrooms"] = $this->env->getExtension('topxia_data_twig')->getData("RecommendClassrooms", array("count" => (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "count", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "count", array()), 4)) : (4))));
        echo " 
";
        // line 3
        if ((isset($context["RecommendClassrooms"]) ? $context["RecommendClassrooms"] : null)) {
            echo " 
  <section class=\"class-section ";
            // line 4
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "background", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "background", array()), "")) : ("")), "html", null, true);
            echo "\"> 
    <div class=\"container\"> 
      <div class=\"text-line\"> 
        <h5> 
          <span>";
            // line 8
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "title", array()), "推荐班级")) : ("推荐班级")), "html", null, true);
            echo "</span> 
          <div class=\"line\"></div> 
        </h5> 
        <div class=\"subtitle\">";
            // line 11
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "subTitle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "subTitle", array()), $this->getAttribute((isset($context["config"]) ? $context["config"] : null), "defaultSubTitle", array()))) : ($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "defaultSubTitle", array()))), "html", null, true);
            echo "</div> 
      </div> 
      <div class=\"recommend-class-list row\"> 
        ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["RecommendClassrooms"]) ? $context["RecommendClassrooms"] : null));
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
                echo " 
          <div class=\"col-md-3 col-sm-6\"> 
             ";
                // line 16
                $this->loadTemplate("ClassroomBundle:Classroom:class-grid.html.twig", "TopxiaWebBundle:Default:recommend-classroom.html.twig", 16)->display($context);
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classroom'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo " 
      </div> 
      <div class=\"text-center mvl\"> 
        <a href=\"";
            // line 21
            echo $this->env->getExtension('routing')->getPath("classroom_explore");
            echo "\" class=\"btn btn-default btn-lg\"> 
          更多";
            // line 22
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo " <i class=\"mrs-o es-icon es-icon-chevronright\"></i> 
        </a> 
      </div> 
    </div> 
  </section> 
";
        }
        // line 27
        echo " ";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:recommend-classroom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 27,  95 => 22,  91 => 21,  86 => 18,  69 => 16,  49 => 14,  43 => 11,  37 => 8,  30 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* <!-- 推荐班级 --> */
/* {% set RecommendClassrooms = data('RecommendClassrooms',{'count':config.count|default(4)})%} */
/* {% if RecommendClassrooms %} */
/*   <section class="class-section {{config.background|default("")}}"> */
/*     <div class="container"> */
/*       <div class="text-line"> */
/*         <h5> */
/*           <span>{{config.title|default("推荐班级")}}</span> */
/*           <div class="line"></div> */
/*         </h5> */
/*         <div class="subtitle">{{ config.subTitle|default(config.defaultSubTitle) }}</div> */
/*       </div> */
/*       <div class="recommend-class-list row"> */
/*         {% for classroom in RecommendClassrooms %} */
/*           <div class="col-md-3 col-sm-6"> */
/*              {% include 'ClassroomBundle:Classroom:class-grid.html.twig' %} */
/*           </div> */
/*         {% endfor %} */
/*       </div> */
/*       <div class="text-center mvl"> */
/*         <a href="{{ path('classroom_explore') }}" class="btn btn-default btn-lg"> */
/*           更多{{ setting('classroom.name')|default("班级") }} <i class="mrs-o es-icon es-icon-chevronright"></i> */
/*         </a> */
/*       </div> */
/*     </div> */
/*   </section> */
/* {% endif %} */
