<?php

/* TopxiaWebBundle:Course:info.html.twig */
class __TwigTemplate_4884a29d41f2bf90a2b68d085b07967be582bd6c6f092b51096959a3f1a798d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Course:normal-layout.html.twig", "TopxiaWebBundle:Course:info.html.twig", 1);
        $this->blocks = array(
            'course_main' => array($this, 'block_course_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Course:normal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["tab"] = "info";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_course_main($context, array $blocks = array())
    {
        // line 6
        echo "
  <div class=\"course-detail-content\">

    <div class=\"es-piece\">
      <div class=\"piece-body p-lg clearfix\">
        ";
        // line 11
        if ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "about", array())) {
            // line 12
            echo "          ";
            echo $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "about", array());
            echo "
        ";
        } else {
            // line 14
            echo "          <div class=\"text-muted\">暂无课程简介</div>
        ";
        }
        // line 16
        echo "
        ";
        // line 17
        if ((isset($context["category"]) ? $context["category"] : null)) {
            // line 18
            echo "          <p><strong>分类：</strong><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_explore", array("category" => (($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "code", array()), $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id", array()))) : ($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id", array()))))), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name", array()), "html", null, true);
            echo "</a></p>
        ";
        }
        // line 20
        echo "
        ";
        // line 21
        if ((isset($context["tags"]) ? $context["tags"] : null)) {
            // line 22
            echo "          <p><strong>标签：</strong>
            ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 24
                echo "              <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tag_show", array("name" => $this->getAttribute($context["tag"], "name", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", array()), "html", null, true);
                echo "</a>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "          </p>
        ";
        }
        // line 28
        echo "
      </div>
    </div>

    ";
        // line 32
        if ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "goals", array())) {
            // line 33
            echo "      <div class=\"es-piece\">
        <div class=\"piece-header\">
          课程目标
        </div>
        <div class=\"piece-body\">
          <ul class=\"piece-body-list\">
            ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "goals", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["goal"]) {
                // line 40
                echo "            <li>
              <i class=\"es-icon es-icon-chevronright\"></i> ";
                // line 41
                echo twig_escape_filter($this->env, $context["goal"], "html", null, true);
                echo "
            </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['goal'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "          </ul>
        </div>
      </div>
    ";
        }
        // line 48
        echo "
    ";
        // line 49
        if ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "audiences", array())) {
            // line 50
            echo "      <div class=\"es-piece\">
        <div class=\"piece-header\">
          适合人群
        </div>
        <div class=\"piece-body\">
          <ul class=\"piece-body-list\">
            ";
            // line 56
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "audiences", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["audience"]) {
                // line 57
                echo "            <li>
              <i class=\"es-icon es-icon-chevronright\"></i> ";
                // line 58
                echo twig_escape_filter($this->env, $context["audience"], "html", null, true);
                echo "
            </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['audience'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "          </ul>
        </div>
      </div>
    ";
        }
        // line 65
        echo "  </div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 65,  160 => 61,  151 => 58,  148 => 57,  144 => 56,  136 => 50,  134 => 49,  131 => 48,  125 => 44,  116 => 41,  113 => 40,  109 => 39,  101 => 33,  99 => 32,  93 => 28,  89 => 26,  78 => 24,  74 => 23,  71 => 22,  69 => 21,  66 => 20,  58 => 18,  56 => 17,  53 => 16,  49 => 14,  43 => 12,  41 => 11,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:Course:normal-layout.html.twig' %}*/
/* */
/* {% set tab = 'info' %}*/
/* */
/* {% block course_main %}*/
/* */
/*   <div class="course-detail-content">*/
/* */
/*     <div class="es-piece">*/
/*       <div class="piece-body p-lg clearfix">*/
/*         {% if course.about %}*/
/*           {{ course.about|raw }}*/
/*         {% else %}*/
/*           <div class="text-muted">暂无课程简介</div>*/
/*         {% endif %}*/
/* */
/*         {% if category %}*/
/*           <p><strong>分类：</strong><a href="{{ path('course_explore', {category:category.code|default(category.id)}) }}" target="_blank">{{ category.name }}</a></p>*/
/*         {% endif %}*/
/* */
/*         {% if tags %}*/
/*           <p><strong>标签：</strong>*/
/*             {% for tag in tags %}*/
/*               <a href="{{ path('tag_show', {name:tag.name}) }}">{{ tag.name }}</a>*/
/*             {% endfor %}*/
/*           </p>*/
/*         {% endif %}*/
/* */
/*       </div>*/
/*     </div>*/
/* */
/*     {% if course.goals %}*/
/*       <div class="es-piece">*/
/*         <div class="piece-header">*/
/*           课程目标*/
/*         </div>*/
/*         <div class="piece-body">*/
/*           <ul class="piece-body-list">*/
/*             {% for goal in course.goals %}*/
/*             <li>*/
/*               <i class="es-icon es-icon-chevronright"></i> {{ goal }}*/
/*             </li>*/
/*             {% endfor %}*/
/*           </ul>*/
/*         </div>*/
/*       </div>*/
/*     {% endif %}*/
/* */
/*     {% if course.audiences %}*/
/*       <div class="es-piece">*/
/*         <div class="piece-header">*/
/*           适合人群*/
/*         </div>*/
/*         <div class="piece-body">*/
/*           <ul class="piece-body-list">*/
/*             {% for audience in course.audiences %}*/
/*             <li>*/
/*               <i class="es-icon es-icon-chevronright"></i> {{ audience }}*/
/*             </li>*/
/*             {% endfor %}*/
/*           </ul>*/
/*         </div>*/
/*       </div>*/
/*     {% endif %}*/
/*   </div>*/
/* {% endblock %}*/
