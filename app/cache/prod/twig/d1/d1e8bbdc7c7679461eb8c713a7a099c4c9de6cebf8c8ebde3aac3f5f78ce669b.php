<?php

/* TopxiaWebBundle:Course:favorite-block.html.twig */
class __TwigTemplate_01c27debae0914248069041b369fdea8b33e273f922d7053bc81ff5fa6aa0327 extends Twig_Template
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
        echo "
";
        // line 2
        if (((isset($context["favoriteStatus"]) ? $context["favoriteStatus"] : null) == 1)) {
            echo " 
  <a class=\"mrm \" href=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_unfavorite", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\"  ><i class=\"glyphicon glyphicon-star\"></i> 取消收藏 </a>
";
        } elseif ((        // line 4
(isset($context["favoriteStatus"]) ? $context["favoriteStatus"] : null) == 0)) {
            // line 5
            echo "  <a class=\"mrm\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_favorite", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\"  ><i class=\"glyphicon glyphicon-star-empty\"></i> 收藏课程 </a>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:favorite-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  30 => 4,  26 => 3,  22 => 2,  19 => 1,);
    }
}
/* */
/* {% if favoriteStatus == 1 %} */
/*   <a class="mrm " href="{{ path('course_unfavorite', {id:course.id}) }}"  ><i class="glyphicon glyphicon-star"></i> 取消收藏 </a>*/
/* {% elseif favoriteStatus == 0 %}*/
/*   <a class="mrm" href="{{ path('course_favorite', {id:course.id}) }}"  ><i class="glyphicon glyphicon-star-empty"></i> 收藏课程 </a>*/
/* {% endif %}*/
