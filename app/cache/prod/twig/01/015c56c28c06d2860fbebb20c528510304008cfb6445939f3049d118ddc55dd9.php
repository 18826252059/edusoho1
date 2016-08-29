<?php

/* TopxiaWebBundle:User:classroom-learning.html.twig */
class __TwigTemplate_a0742fc90948736a0015bfb4df060226983ff9ad9f253cd3d902de3bfbd472b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:User:layout.html.twig", "TopxiaWebBundle:User:classroom-learning.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:User:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["pageNav"] = "learning";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "在学";
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_main($context, array $blocks = array())
    {
        // line 5
        echo "  ";
        if ((isset($context["classrooms"]) ? $context["classrooms"] : null)) {
            // line 6
            echo "    <div class=\"recommend-class-list row\">
      ";
            // line 7
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["classrooms"]) ? $context["classrooms"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["classroom"]) {
                if (((($this->getAttribute($context["classroom"], "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["classroom"], "status", array()), "")) : ("")) != "closed")) {
                    // line 8
                    echo "        ";
                    $context["teachers"] = (($this->getAttribute($context["classroom"], "teachers", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($context["classroom"], "teachers", array(), "array"), null)) : (null));
                    // line 9
                    echo "        <div class=\"col-md-3 col-sm-6\">
          <div class=\"class-item\">
            <div class=\"class-bg-layer\"></div>
            <div class=\"class-item-bg\">
              <a class=\"class-img\" href=\"";
                    // line 13
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute($context["classroom"], "id", array()))), "html", null, true);
                    echo "\">
                <img class=\"img-responsive\" src=\"";
                    // line 14
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($context["classroom"], "middlePicture", array()), "classroom.png"), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["classroom"], "title", array()), "html", null, true);
                    echo "\">
              </a>
              <h3><a class=\"link-dark\" href=\"";
                    // line 16
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute($context["classroom"], "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["classroom"], "title", array()), "html", null, true);
                    echo "</a></h3>
            </div>
          </div>
        </div>
      ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classroom'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "    </div>
  ";
        } else {
            // line 23
            echo "    <div class=\"empty\">无在学的";
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "！</div>
  ";
        }
        // line 25
        echo "
  ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:User:classroom-learning.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 26,  99 => 25,  93 => 23,  89 => 21,  75 => 16,  68 => 14,  64 => 13,  58 => 9,  55 => 8,  50 => 7,  47 => 6,  44 => 5,  41 => 4,  32 => 2,  28 => 1,  26 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:User:layout.html.twig' %}*/
/* {% block title %}在学{{ setting('classroom.name')|default("班级") }} - {{ parent() }}{% endblock %}*/
/* {% set pageNav = 'learning' %}*/
/* {% block main %}*/
/*   {% if classrooms %}*/
/*     <div class="recommend-class-list row">*/
/*       {% for classroom in classrooms if classroom.status|default('') != 'closed' %}*/
/*         {% set teachers = classroom['teachers']|default(null) %}*/
/*         <div class="col-md-3 col-sm-6">*/
/*           <div class="class-item">*/
/*             <div class="class-bg-layer"></div>*/
/*             <div class="class-item-bg">*/
/*               <a class="class-img" href="{{ path('classroom_show', {id:classroom.id}) }}">*/
/*                 <img class="img-responsive" src="{{ filepath(classroom.middlePicture, 'classroom.png') }}" alt="{{ classroom.title }}">*/
/*               </a>*/
/*               <h3><a class="link-dark" href="{{ path('classroom_show', {id:classroom.id}) }}">{{ classroom.title }}</a></h3>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/*       {% endfor %}*/
/*     </div>*/
/*   {% else %}*/
/*     <div class="empty">无在学的{{ setting('classroom.name')|default("班级") }}！</div>*/
/*   {% endif %}*/
/* */
/*   {{ web_macro.paginator(paginator) }}*/
/* {% endblock %}*/
