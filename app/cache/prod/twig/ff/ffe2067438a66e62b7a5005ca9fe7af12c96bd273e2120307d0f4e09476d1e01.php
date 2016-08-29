<?php

/* TopxiaWebBundle:Course:info-modal.html.twig */
class __TwigTemplate_4df8797c49c298c1602c68173883fa1f168900005c603d30a9dab008818f5fb0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:Course:info-modal.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["modal_class"] = "modal-lg";
        // line 5
        $context["hide_footer"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "课程信息";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "
<dl class=\"course-modal-infos\">
  <dt>简介</dt>
  <dd>";
        // line 13
        echo $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "about", array());
        echo "</dd>

  ";
        // line 15
        if ((isset($context["category"]) ? $context["category"] : null)) {
            // line 16
            echo "  <dt>分类</dt>
  <dd>
    <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_explore", array("category" => (($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "code", array()), $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id", array()))) : ($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id", array()))))), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name", array()), "html", null, true);
            echo "</a>
  </dd>
  ";
        }
        // line 21
        echo "
  ";
        // line 22
        if ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "tags", array())) {
            // line 23
            echo "    <dt>标签</dt>
    <dd>
      <ul class=\"list-inline\">
        ";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 27
                echo "          <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tag_show", array("name" => $this->getAttribute($context["tag"], "name", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", array()), "html", null, true);
                echo "</a></li>
        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 29
                echo "          <li>暂无标签</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "      </ul>
    </dd>
  ";
        }
        // line 34
        echo "
  ";
        // line 35
        if ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "goals", array())) {
            // line 36
            echo "    <dt>课程目标</dt>
    <dd>
      <ul>
        ";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "goals", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["goal"]) {
                // line 40
                echo "          <li>";
                echo twig_escape_filter($this->env, $context["goal"], "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['goal'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "      </ul>
    </dd>
  ";
        }
        // line 45
        echo "
  ";
        // line 46
        if ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "audiences", array())) {
            // line 47
            echo "    <dt>适合人群</dt>
    <dd>
      <ul>
        ";
            // line 50
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "audiences", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["audience"]) {
                // line 51
                echo "          <li>";
                echo twig_escape_filter($this->env, $context["audience"], "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['audience'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "      </ul>
    </dd>
  ";
        }
        // line 56
        echo "</dl>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:info-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 56,  155 => 53,  146 => 51,  142 => 50,  137 => 47,  135 => 46,  132 => 45,  127 => 42,  118 => 40,  114 => 39,  109 => 36,  107 => 35,  104 => 34,  99 => 31,  92 => 29,  82 => 27,  77 => 26,  72 => 23,  70 => 22,  67 => 21,  59 => 18,  55 => 16,  53 => 15,  48 => 13,  43 => 10,  40 => 9,  34 => 7,  30 => 1,  28 => 5,  26 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% set modal_class = 'modal-lg' %}*/
/* */
/* {% set hide_footer = true %}*/
/* */
/* {% block title %}课程信息{% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* <dl class="course-modal-infos">*/
/*   <dt>简介</dt>*/
/*   <dd>{{ course.about|raw }}</dd>*/
/* */
/*   {% if category %}*/
/*   <dt>分类</dt>*/
/*   <dd>*/
/*     <a href="{{ path('course_explore', {category:category.code|default(category.id)}) }}" target="_blank">{{ category.name }}</a>*/
/*   </dd>*/
/*   {% endif %}*/
/* */
/*   {% if course.tags %}*/
/*     <dt>标签</dt>*/
/*     <dd>*/
/*       <ul class="list-inline">*/
/*         {% for tag in tags %}*/
/*           <li><a href="{{ path('tag_show', {name:tag.name}) }}">{{ tag.name }}</a></li>*/
/*         {% else %}*/
/*           <li>暂无标签</li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </dd>*/
/*   {% endif %}*/
/* */
/*   {% if course.goals %}*/
/*     <dt>课程目标</dt>*/
/*     <dd>*/
/*       <ul>*/
/*         {% for goal in course.goals %}*/
/*           <li>{{ goal }}</li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </dd>*/
/*   {% endif %}*/
/* */
/*   {% if course.audiences %}*/
/*     <dt>适合人群</dt>*/
/*     <dd>*/
/*       <ul>*/
/*         {% for audience in course.audiences %}*/
/*           <li>{{ audience }}</li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </dd>*/
/*   {% endif %}*/
/* </dl>*/
/* {% endblock %}*/
