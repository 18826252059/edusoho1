<?php

/* TopxiaWebBundle:Course:archiveCourse.html.twig */
class __TwigTemplate_d2ca72fffacb2d772614c87cb2e4a1ac75f0e5d74cc124e29e58a2de3c86a44c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Course:archiveCourse.html.twig", 1);
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
        echo " -";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_keywords($context, array $blocks = array())
    {
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", array()), "html", null, true);
            if ( !$this->getAttribute($context["loop"], "last", array())) {
                echo ",";
            }
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 5
    public function block_description($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, ((array_key_exists("courseDescription", $context)) ? (_twig_default_filter((isset($context["courseDescription"]) ? $context["courseDescription"] : null), "")) : ("")), "html", null, true);
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "
<div class=\"es-row-wrap container-gap\">
\t<div class=\"row\">
\t    <div class=\"col-md-12\">
\t      <div class=\"page-header\"><h1>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
        echo "</h1></div>
\t    </div>
\t</div>

  \t<div class=\"row article-row\">
\t  \t<div class=\"col-md-8 mbl\">
\t  \t\t<dl class=\"course-infos\">
    <dt class=\"thread-title\">简介</dt>
    <dd class=\"thread-body\">";
        // line 20
        echo $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "about", array());
        echo "</dd>

    ";
        // line 22
        if ((isset($context["category"]) ? $context["category"] : null)) {
            // line 23
            echo "    <dt>分类</dt>
    <dd class=\"mbm\">
      <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_explore", array("category" => (($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "code", array()), $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id", array()))) : ($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "id", array()))))), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name", array()), "html", null, true);
            echo "</a>
    </dd>
    ";
        }
        // line 28
        echo "
    ";
        // line 29
        if ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "goals", array())) {
            // line 30
            echo "      <dt>课程目标</dt>
      <dd>
        <ul>
          ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "goals", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["goal"]) {
                // line 34
                echo "            <li>";
                echo twig_escape_filter($this->env, $context["goal"], "html", null, true);
                echo "</li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['goal'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "        </ul>
      </dd>
    ";
        }
        // line 39
        echo "
    ";
        // line 40
        if ($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "audiences", array())) {
            // line 41
            echo "      <dt>适合人群</dt>
      <dd>
        <ul>
          ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "audiences", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["audience"]) {
                // line 45
                echo "            <li>";
                echo twig_escape_filter($this->env, $context["audience"], "html", null, true);
                echo "</li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['audience'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "        </ul>
      </dd>
    ";
        }
        // line 50
        echo "  </dl>
\t\t  \t\t";
        // line 51
        if ((isset($context["tags"]) ? $context["tags"] : null)) {
            // line 52
            echo "\t\t  \t\t<div class=\"mtm\">课程标签：
\t\t  \t\t\t";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 54
                echo "\t\t  \t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tag_show", array("name" => $this->getAttribute($context["tag"], "name", array()))), "html", null, true);
                echo "\" class=\"mrs\"><span class=\"label label-info\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "name", array()), "html", null, true);
                echo "</span></a>
\t\t  \t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "\t\t  \t\t</div>
\t\t  \t\t";
        }
        // line 58
        echo "\t  \t\t<a class=\"btn btn-primary mtl nav-btn\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\"><span class=\"glyphicon glyphicon-play\"></span> 查看课程</a>
\t\t</div>
\t  \t<div class=\"col-md-4\">
\t  \t\t<div class=\"panel panel-default\">
\t\t\t    <div class=\"panel-heading\">
\t\t\t      <h3 class=\"panel-title\">课时列表</h3>
\t\t\t    </div>
\t\t    <div class=\"panel-body\">
\t\t    \t";
        // line 66
        if ((isset($context["lessons"]) ? $context["lessons"] : null)) {
            // line 67
            echo "\t\t        <ul class=\"media-list\">
\t\t    \t";
            // line 68
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["lessons"]) ? $context["lessons"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lesson"]) {
                // line 69
                echo "\t\t            <li class=\"media\">
\t\t              <div class=\"media-body\"><a href=\"";
                // line 70
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_archive_lesson", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "lessonId" => $this->getAttribute($context["lesson"], "id", array()))), "html", null, true);
                echo "\">第";
                echo twig_escape_filter($this->env, $this->getAttribute($context["lesson"], "number", array()), "html", null, true);
                echo "课时： ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["lesson"], "title", array()), "html", null, true);
                echo "</a></div>
\t\t            </li>
\t\t        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lesson'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "\t\t        </ul>
\t\t        ";
        } else {
            // line 75
            echo "\t\t        <div class=\"empty\">课程暂无相关课时</div>
\t\t        ";
        }
        // line 77
        echo "\t\t    </div>
\t\t  </div>
\t  \t</div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:archiveCourse.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 77,  245 => 75,  241 => 73,  228 => 70,  225 => 69,  221 => 68,  218 => 67,  216 => 66,  204 => 58,  200 => 56,  189 => 54,  185 => 53,  182 => 52,  180 => 51,  177 => 50,  172 => 47,  163 => 45,  159 => 44,  154 => 41,  152 => 40,  149 => 39,  144 => 36,  135 => 34,  131 => 33,  126 => 30,  124 => 29,  121 => 28,  113 => 25,  109 => 23,  107 => 22,  102 => 20,  91 => 12,  85 => 8,  82 => 7,  76 => 5,  39 => 4,  31 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::layout.html.twig' %}*/
/* */
/* {% block title %}{{ course.title }} -{{ parent() }}{% endblock %}*/
/* {% block keywords %}{% for tag in tags %}{{tag.name}}{% if not loop.last%}{{','}}{% endif %}{% endfor %}{% endblock %}*/
/* {% block description %}{{ courseDescription|default('') }}{% endblock %}*/
/* */
/* {% block content %}*/
/* */
/* <div class="es-row-wrap container-gap">*/
/* 	<div class="row">*/
/* 	    <div class="col-md-12">*/
/* 	      <div class="page-header"><h1>{{ course.title }}</h1></div>*/
/* 	    </div>*/
/* 	</div>*/
/* */
/*   	<div class="row article-row">*/
/* 	  	<div class="col-md-8 mbl">*/
/* 	  		<dl class="course-infos">*/
/*     <dt class="thread-title">简介</dt>*/
/*     <dd class="thread-body">{{ course.about|raw }}</dd>*/
/* */
/*     {% if category %}*/
/*     <dt>分类</dt>*/
/*     <dd class="mbm">*/
/*       <a href="{{ path('course_explore', {category:category.code|default(category.id)}) }}" target="_blank">{{ category.name }}</a>*/
/*     </dd>*/
/*     {% endif %}*/
/* */
/*     {% if course.goals %}*/
/*       <dt>课程目标</dt>*/
/*       <dd>*/
/*         <ul>*/
/*           {% for goal in course.goals %}*/
/*             <li>{{ goal }}</li>*/
/*           {% endfor %}*/
/*         </ul>*/
/*       </dd>*/
/*     {% endif %}*/
/* */
/*     {% if course.audiences %}*/
/*       <dt>适合人群</dt>*/
/*       <dd>*/
/*         <ul>*/
/*           {% for audience in course.audiences %}*/
/*             <li>{{ audience }}</li>*/
/*           {% endfor %}*/
/*         </ul>*/
/*       </dd>*/
/*     {% endif %}*/
/*   </dl>*/
/* 		  		{% if tags %}*/
/* 		  		<div class="mtm">课程标签：*/
/* 		  			{% for tag in tags %}*/
/* 		  			<a href="{{ path('tag_show', {name:tag.name}) }}" class="mrs"><span class="label label-info">{{ tag.name }}</span></a>*/
/* 		  			{% endfor %}*/
/* 		  		</div>*/
/* 		  		{% endif %}*/
/* 	  		<a class="btn btn-primary mtl nav-btn" href="{{ path('course_show',{id:course.id})}}"><span class="glyphicon glyphicon-play"></span> 查看课程</a>*/
/* 		</div>*/
/* 	  	<div class="col-md-4">*/
/* 	  		<div class="panel panel-default">*/
/* 			    <div class="panel-heading">*/
/* 			      <h3 class="panel-title">课时列表</h3>*/
/* 			    </div>*/
/* 		    <div class="panel-body">*/
/* 		    	{% if lessons %}*/
/* 		        <ul class="media-list">*/
/* 		    	{% for lesson in lessons %}*/
/* 		            <li class="media">*/
/* 		              <div class="media-body"><a href="{{ path('course_archive_lesson',{ id:course.id,lessonId:lesson.id })}}">第{{ lesson.number }}课时： {{ lesson.title }}</a></div>*/
/* 		            </li>*/
/* 		        {% endfor %}*/
/* 		        </ul>*/
/* 		        {% else %}*/
/* 		        <div class="empty">课程暂无相关课时</div>*/
/* 		        {% endif %}*/
/* 		    </div>*/
/* 		  </div>*/
/* 	  	</div>*/
/* 	</div>*/
/* </div>*/
/* {% endblock %}*/
