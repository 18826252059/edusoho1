<?php

/* TopxiaWebBundle:Course:archive.html.twig */
class __TwigTemplate_5618ce0e893c571c912820a097cc2beee5fc7b6266527e7c2eac526b27249561 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Course:archive.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "课程存档 -";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 3
    public function block_keywords($context, array $blocks = array())
    {
        echo "课程存档";
    }

    // line 4
    public function block_description($context, array $blocks = array())
    {
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "  <div class=\"es-section\">
    <div class=\"section-header\"><h1>课程存档</h1></div>
    ";
        // line 8
        if ((isset($context["courses"]) ? $context["courses"] : null)) {
            // line 9
            echo "      <ul class=\"media-list\">
        ";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                // line 11
                echo "          ";
                $context["teacher"] = (($this->getAttribute((isset($context["users"]) ? $context["users"] : null), twig_first($this->env, $this->getAttribute($context["course"], "teacherIds", array())), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["users"]) ? $context["users"] : null), twig_first($this->env, $this->getAttribute($context["course"], "teacherIds", array())), array(), "array"), null)) : (null));
                // line 12
                echo "          ";
                $context["tags"] = $this->getAttribute($context["course"], "tags", array());
                // line 13
                echo "          <li class=\"media\">
            <h4><a href=\"";
                // line 14
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_archive_show", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
                echo "</a></h4>
            <div class=\"fsn text-muted\">
              ";
                // line 16
                if ((isset($context["teacher"]) ? $context["teacher"] : null)) {
                    // line 17
                    echo "                教师： <a class=\"teacher-nickname mrl\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "id", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : null), "nickname", array()), "html", null, true);
                    echo "</a>
              ";
                }
                // line 19
                echo "              ";
                if ((isset($context["tags"]) ? $context["tags"] : null)) {
                    // line 20
                    echo "                <span class=\"text-muted\">标签：</span>
                ";
                    // line 21
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                        // line 22
                        echo "                  <a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tag_show", array("name" => $this->getAttribute($context["tag"], "name", array()))), "html", null, true);
                        echo "\" class=\"mrs\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", array()), "html", null, true);
                        echo "</a>
                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 24
                    echo "              ";
                }
                // line 25
                echo "            </div>
          </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "      </ul>
    ";
        } else {
            // line 30
            echo "      <div class=\"empty\">目前暂时无课程</div>
    ";
        }
        // line 32
        echo "    <nav class=\"text-center\">
      ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
    </nav>
  </div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:archive.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 33,  131 => 32,  127 => 30,  123 => 28,  115 => 25,  112 => 24,  101 => 22,  97 => 21,  94 => 20,  91 => 19,  83 => 17,  81 => 16,  74 => 14,  71 => 13,  68 => 12,  65 => 11,  61 => 10,  58 => 9,  56 => 8,  52 => 6,  49 => 5,  44 => 4,  38 => 3,  31 => 2,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::layout.html.twig' %}*/
/* {% block title %}课程存档 -{{ parent() }}{% endblock %}*/
/* {% block keywords %}{{'课程存档'}}{% endblock %}*/
/* {% block description %}{% endblock %}*/
/* {% block content %}*/
/*   <div class="es-section">*/
/*     <div class="section-header"><h1>课程存档</h1></div>*/
/*     {% if courses %}*/
/*       <ul class="media-list">*/
/*         {% for course in courses %}*/
/*           {% set teacher = users[course.teacherIds|first]|default(null) %}*/
/*           {% set tags = course.tags %}*/
/*           <li class="media">*/
/*             <h4><a href="{{ path('course_archive_show', {id:course.id}) }}">{{ course.title }}</a></h4>*/
/*             <div class="fsn text-muted">*/
/*               {% if teacher %}*/
/*                 教师： <a class="teacher-nickname mrl" href="{{ path('user_show', {id:teacher.id}) }}">{{ teacher.nickname }}</a>*/
/*               {% endif %}*/
/*               {% if tags %}*/
/*                 <span class="text-muted">标签：</span>*/
/*                 {% for tag in tags %}*/
/*                   <a href="{{ path('tag_show', {name:tag.name}) }}" class="mrs">{{ tag.name }}</a>*/
/*                 {% endfor %}*/
/*               {% endif %}*/
/*             </div>*/
/*           </li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     {% else %}*/
/*       <div class="empty">目前暂时无课程</div>*/
/*     {% endif %}*/
/*     <nav class="text-center">*/
/*       {{ web_macro.paginator(paginator) }}*/
/*     </nav>*/
/*   </div>*/
/* {% endblock %}*/
