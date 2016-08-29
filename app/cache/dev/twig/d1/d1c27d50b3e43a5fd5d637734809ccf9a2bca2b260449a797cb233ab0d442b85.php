<?php

/* TopxiaWebBundle:Course:Part/normal-sidebar-belong-classrooms.html.twig */
class __TwigTemplate_a4317f5eda0e563a62d3521c218e802fcd11ab49e0fcb37c39a7b5c83da34f1f extends Twig_Template
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
            echo "  <div class=\"panel panel-default belongs-class\">
    <div class=\"panel-heading\">
      <h3 class=\"panel-title\"> <i class=\"es-icon es-icon-locallibrary\"></i>
        所属";
            // line 5
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "
      </h3>
    </div>
    <div class=\"panel-body\">
      ";
            // line 9
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["classrooms"]) ? $context["classrooms"] : $this->getContext($context, "classrooms")));
            foreach ($context['_seq'] as $context["_key"] => $context["classroom"]) {
                // line 10
                echo "        <div class=\"media\">
          <div class=\"media-left\">
            <a href=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute($context["classroom"], "id", array()))), "html", null, true);
                echo "\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($context["classroom"], "smallPicture", array()), "classroom.png"), "html", null, true);
                echo "\" alt=\"\"></a>
          </div>
          <div class=\"media-body\">
            <a href=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute($context["classroom"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["classroom"], "title", array()), "html", null, true);
                echo "</a>
          </div>
        </div>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classroom'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "    </div>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:Part/normal-sidebar-belong-classrooms.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 19,  49 => 15,  41 => 12,  37 => 10,  33 => 9,  26 => 5,  21 => 2,  19 => 1,);
    }
}
/* {% if classrooms %}*/
/*   <div class="panel panel-default belongs-class">*/
/*     <div class="panel-heading">*/
/*       <h3 class="panel-title"> <i class="es-icon es-icon-locallibrary"></i>*/
/*         所属{{setting('classroom.name')|default('班级')}}*/
/*       </h3>*/
/*     </div>*/
/*     <div class="panel-body">*/
/*       {% for classroom in classrooms %}*/
/*         <div class="media">*/
/*           <div class="media-left">*/
/*             <a href="{{ path('classroom_show', {id: classroom.id}) }}"><img src="{{ filepath(classroom.smallPicture, 'classroom.png') }}" alt=""></a>*/
/*           </div>*/
/*           <div class="media-body">*/
/*             <a href="{{ path('classroom_show', {id: classroom.id}) }}">{{ classroom.title }}</a>*/
/*           </div>*/
/*         </div>*/
/*       {% endfor %}*/
/*     </div>*/
/*   </div>*/
/* {% endif %}*/
