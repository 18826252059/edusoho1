<?php

/* TopxiaWebBundle:Default:latest-reviews-block.html.twig */
class __TwigTemplate_78a93c18dafc8d42cd2e9d134d9e795a427e42e513c33aed7512e74bd260c00c extends Twig_Template
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
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Default:latest-reviews-block.html.twig", 1);
        // line 2
        if ((isset($context["reviews"]) ? $context["reviews"] : null)) {
            // line 3
            echo "\t<div class=\"es-box\">
\t\t<div class=\"es-box-heading\"><h2>";
            // line 4
            if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
            } else {
                echo "学员";
            }
            echo "评价</h2></div>
\t<ul class=\"media-list latest-review-list\">
\t\t";
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["reviews"]) ? $context["reviews"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                // line 7
                echo "\t\t  ";
                $context["author"] = (($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["review"], "userId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["review"], "userId", array()), array(), "array"), null)) : (null));
                // line 8
                echo "\t\t  ";
                $context["course"] = (($this->getAttribute((isset($context["courses"]) ? $context["courses"] : null), $this->getAttribute($context["review"], "courseId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courses"]) ? $context["courses"] : null), $this->getAttribute($context["review"], "courseId", array()), array(), "array"), null)) : (null));
                // line 9
                echo "\t\t  ";
                if (((isset($context["author"]) ? $context["author"] : null) && (isset($context["course"]) ? $context["course"] : null))) {
                    // line 10
                    echo "\t\t\t  <li class=\"media\">
\t\t\t  \t
\t\t\t  \t";
                    // line 12
                    echo $context["web_macro"]->getuser_avatar((isset($context["author"]) ? $context["author"] : null), "author-picture-link", "author-picture");
                    echo "
\t\t\t  \t";
                    // line 13
                    echo $context["web_macro"]->getuser_link((isset($context["author"]) ? $context["author"] : null), "author-nickname");
                    echo "
\t\t\t  \t
\t\t\t  \t<span class=\"text-muted\">说：</span> <br>
\t\t\t  \t<div class=\"review-content\">";
                    // line 16
                    echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($context["review"], "content", array()), 50);
                    echo "</div>

\t\t\t\t  <div class=\"review-footer\">
\t\t\t\t\t  <a href=\"";
                    // line 19
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
                    echo "\" class=\"course-title\"> 《 ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
                    echo " 》</a>
\t\t\t\t\t  <span class=\"divider\"></span>
\t\t\t\t\t  <span class=\"stars-";
                    // line 21
                    echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "rating", array()), "html", null, true);
                    echo "\">&nbsp;</span>
\t\t\t\t  </div>
\t\t\t  </li>
\t\t  ";
                }
                // line 25
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "\t</ul>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:latest-reviews-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 26,  82 => 25,  75 => 21,  68 => 19,  62 => 16,  56 => 13,  52 => 12,  48 => 10,  45 => 9,  42 => 8,  39 => 7,  35 => 6,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% import "TopxiaWebBundle::macro.html.twig" as web_macro %}*/
/* {% if reviews %}*/
/* 	<div class="es-box">*/
/* 		<div class="es-box-heading"><h2>{% if setting('default.user_name') %}{{setting('default.user_name')|default('学员')}}{% else %}学员{% endif %}评价</h2></div>*/
/* 	<ul class="media-list latest-review-list">*/
/* 		{% for review in reviews %}*/
/* 		  {% set author = users[review.userId]|default(null) %}*/
/* 		  {% set course = courses[review.courseId]|default(null) %}*/
/* 		  {% if author and course %}*/
/* 			  <li class="media">*/
/* 			  	*/
/* 			  	{{ web_macro.user_avatar(author,'author-picture-link','author-picture') }}*/
/* 			  	{{ web_macro.user_link(author, 'author-nickname')}}*/
/* 			  	*/
/* 			  	<span class="text-muted">说：</span> <br>*/
/* 			  	<div class="review-content">{{ review.content|plain_text(50) }}</div>*/
/* */
/* 				  <div class="review-footer">*/
/* 					  <a href="{{ path('course_show', {id:course.id}) }}" class="course-title"> 《 {{ course.title }} 》</a>*/
/* 					  <span class="divider"></span>*/
/* 					  <span class="stars-{{review.rating }}">&nbsp;</span>*/
/* 				  </div>*/
/* 			  </li>*/
/* 		  {% endif %}*/
/* 		{% endfor %}*/
/* 	</ul>*/
/* 	</div>*/
/* {% endif %}*/
