<?php

/* TopxiaWebBundle:QuizQuestionTest:flag.html.twig */
class __TwigTemplate_3bb9ac5db1e8548ca7814eeffc79de8bce001205f44643994f4c644793806b5e extends Twig_Template
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
        $context["favorites"] = ((array_key_exists("favorites", $context)) ? (_twig_default_filter((isset($context["favorites"]) ? $context["favorites"] : null), array())) : (array()));
        // line 2
        echo "
";
        // line 3
        if ((twig_in_filter("mark", (isset($context["flags"]) ? $context["flags"] : null)) && ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : null), null)) : (null)))) {
            // line 4
            echo "  <a class=\"btn btn-link btn-muted btn-sm marking text-muted\"><span class=\"glyphicon glyphicon-bookmark text-muted\"></span> 标记</a>
  <a class=\"btn btn-link btn-sm unMarking\" style=\"display:none\"><span class=\"glyphicon glyphicon-bookmark\"></span> 取消标记</a>
";
        }
        // line 7
        echo "
";
        // line 8
        if ((twig_in_filter("favorite", (isset($context["flags"]) ? $context["flags"] : null)) && ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : null), null)) : (null)))) {
            // line 9
            echo "  <button data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_favorite_question", array("id" => $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array()), "id", array()), "targetType" => "testpaper", "targetId" => $this->getAttribute((isset($context["paper"]) ? $context["paper"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-sm btn-default favorite-btn\" ";
            if (twig_in_filter($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array()), "id", array()), (isset($context["favorites"]) ? $context["favorites"] : null))) {
                echo "style=\"display:none\"";
            }
            echo "><span class=\"glyphicon glyphicon-star-empty\"></span> 收藏</button>
  <button data-url=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_unfavorite_question", array("id" => $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array()), "id", array()), "targetType" => "testpaper", "targetId" => $this->getAttribute((isset($context["paper"]) ? $context["paper"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-link btn-sm unfavorite-btn\" ";
            if (!twig_in_filter($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array()), "id", array()), (isset($context["favorites"]) ? $context["favorites"] : null))) {
                echo "style=\"display:none\"";
            }
            echo "><span class=\"glyphicon glyphicon-star\"></span> 取消收藏</button>
";
        }
        // line 12
        echo "
";
        // line 13
        if ((twig_in_filter("analysis", (isset($context["flags"]) ? $context["flags"] : null)) && ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : null), null)) : (null)))) {
            // line 14
            echo "  ";
            if (( !$this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array()), "analysis", array()) == "")) {
                // line 15
                echo "    <a class=\"btn btn-sm btn-link analysis-btn\"><span class=\"glyphicon glyphicon-chevron-down\"></span> 展开解析</a>
    <a class=\"btn btn-sm btn-link unanalysis-btn\" style=\"display:none\"><span class=\"glyphicon glyphicon-chevron-up\"></span> 收起解析</a>
  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:QuizQuestionTest:flag.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 15,  59 => 14,  57 => 13,  54 => 12,  45 => 10,  36 => 9,  34 => 8,  31 => 7,  26 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set favorites = favorites|default([]) %}*/
/* */
/* {% if 'mark' in flags and id|default(null) %}*/
/*   <a class="btn btn-link btn-muted btn-sm marking text-muted"><span class="glyphicon glyphicon-bookmark text-muted"></span> 标记</a>*/
/*   <a class="btn btn-link btn-sm unMarking" style="display:none"><span class="glyphicon glyphicon-bookmark"></span> 取消标记</a>*/
/* {% endif %}*/
/* */
/* {% if 'favorite' in flags and id|default(null) %}*/
/*   <button data-url="{{ path('my_favorite_question', {id:item.question.id, targetType:'testpaper', targetId:paper.id}) }}" class="btn btn-sm btn-default favorite-btn" {% if item.question.id in favorites %}style="display:none"{% endif %}><span class="glyphicon glyphicon-star-empty"></span> 收藏</button>*/
/*   <button data-url="{{ path('my_unfavorite_question', {id:item.question.id, targetType:'testpaper', targetId:paper.id}) }}" class="btn btn-link btn-sm unfavorite-btn" {% if item.question.id not in favorites %}style="display:none"{% endif %}><span class="glyphicon glyphicon-star"></span> 取消收藏</button>*/
/* {% endif %}*/
/* */
/* {% if 'analysis' in flags and id|default(null) %}*/
/*   {% if not item.question.analysis == '' %}*/
/*     <a class="btn btn-sm btn-link analysis-btn"><span class="glyphicon glyphicon-chevron-down"></span> 展开解析</a>*/
/*     <a class="btn btn-sm btn-link unanalysis-btn" style="display:none"><span class="glyphicon glyphicon-chevron-up"></span> 收起解析</a>*/
/*   {% endif %}*/
/* {% endif %}*/
