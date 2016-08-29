<?php

/* TopxiaWebBundle:Course/Part:normal-header-recommend-classrooms.html.twig */
class __TwigTemplate_805855b8c99476d0aa82e1156ec8ff9ce23261b8ef70cb3c5dbbd281ddaa6e0f extends Twig_Template
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
        if ((isset($context["classrooms"]) ? $context["classrooms"] : $this->getContext($context, "classrooms"))) {
            // line 2
            echo "  <div class=\"panel panel-default panel-class hidden-sm\" id=\"panel-class\">
    <div class=\"panel-heading\">
      <a href=\"";
            // line 4
            echo $this->env->getExtension('routing')->getPath("classroom_explore");
            echo "\" class=\"more\"><i class=\"es-icon es-icon-morehoriz\"></i></a>
      <h3 class=\"panel-title\">
        <i class=\"es-icon es-icon-locallibrary\"></i>
        推荐";
            // line 7
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "
      </h3>
    </div>
    <div class=\"panel-body\">
      <div class=\"swiper-container\">
        <div class=\"swiper-wrapper\">
          ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["classrooms"]) ? $context["classrooms"] : $this->getContext($context, "classrooms")));
            foreach ($context['_seq'] as $context["_key"] => $context["classroom"]) {
                // line 14
                echo "            <div class=\"swiper-slide swiper-hidden\">
              <a class=\"class-img\" href=\"";
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
              <h5 style=\"margin-bottom:0\"><a class=\"link-dark text-overflow\" href=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute($context["classroom"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["classroom"], "title", array()), "html", null, true);
                echo "</a></h5>
            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classroom'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "        </div>
        ";
            // line 22
            if ((twig_length_filter($this->env, (isset($context["classrooms"]) ? $context["classrooms"] : $this->getContext($context, "classrooms"))) > 1)) {
                // line 23
                echo "          <a href=\"javascipt:;\" class=\"arrow-prev\">
            <i class=\"es-icon es-icon-chevronleft\"></i>
          </a>
          <a href=\"javascipt:;\" class=\"arrow-next\">
            <i class=\"es-icon es-icon-chevronright\"></i>
          </a>
        ";
            }
            // line 30
            echo "      </div>
    </div>
  </div>
  ";
            // line 33
            $this->env->getExtension('topxia_web_twig')->loadScript("course/recommend-classroom");
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course/Part:normal-header-recommend-classrooms.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 33,  83 => 30,  74 => 23,  72 => 22,  69 => 21,  58 => 18,  51 => 16,  47 => 15,  44 => 14,  40 => 13,  31 => 7,  25 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% if classrooms %}*/
/*   <div class="panel panel-default panel-class hidden-sm" id="panel-class">*/
/*     <div class="panel-heading">*/
/*       <a href="{{path('classroom_explore')}}" class="more"><i class="es-icon es-icon-morehoriz"></i></a>*/
/*       <h3 class="panel-title">*/
/*         <i class="es-icon es-icon-locallibrary"></i>*/
/*         推荐{{ setting('classroom.name')|default('班级') }}*/
/*       </h3>*/
/*     </div>*/
/*     <div class="panel-body">*/
/*       <div class="swiper-container">*/
/*         <div class="swiper-wrapper">*/
/*           {% for classroom in classrooms %}*/
/*             <div class="swiper-slide swiper-hidden">*/
/*               <a class="class-img" href="{{ path('classroom_show', {id:classroom.id}) }}">*/
/*                 <img class="img-responsive" src="{{ filepath(classroom.middlePicture, 'classroom.png') }}" alt="{{ classroom.title }}">*/
/*               </a>*/
/*               <h5 style="margin-bottom:0"><a class="link-dark text-overflow" href="{{ path('classroom_show', {id:classroom.id}) }}">{{ classroom.title }}</a></h5>*/
/*             </div>*/
/*           {% endfor %}*/
/*         </div>*/
/*         {% if classrooms|length > 1 %}*/
/*           <a href="javascipt:;" class="arrow-prev">*/
/*             <i class="es-icon es-icon-chevronleft"></i>*/
/*           </a>*/
/*           <a href="javascipt:;" class="arrow-next">*/
/*             <i class="es-icon es-icon-chevronright"></i>*/
/*           </a>*/
/*         {% endif %}*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/*   {% do load_script('course/recommend-classroom') %}*/
/* {% endif %}*/
