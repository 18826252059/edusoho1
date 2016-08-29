<?php

/* TopxiaWebBundle:Question:question-actions.html.twig */
class __TwigTemplate_48b8c3a76cb6ddc57c003a54e7d8cc77d25c5090b6fcc9da5be424d1c42dfcd5 extends Twig_Template
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
        $this->env->getExtension('topxia_web_twig')->loadScript("topxiawebbundle/controller/quiz-question/do-homework");
        // line 3
        echo "
<!-- ";
        // line 4
        if ((twig_in_filter("mark", (isset($context["flags"]) ? $context["flags"] : null)) && ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : null), null)) : (null)))) {
            // line 5
            echo "  <a class=\"btn btn-link btn-muted btn-sm marking text-muted\"><span class=\"glyphicon glyphicon-bookmark text-muted\"></span> 标记</a>
  <a class=\"btn btn-link btn-sm unMarking\" style=\"display:none\"><span class=\"glyphicon glyphicon-bookmark\"></span> 取消标记</a>
";
        }
        // line 8
        echo "
";
        // line 9
        if ((twig_in_filter("favorite", (isset($context["flags"]) ? $context["flags"] : null)) && ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : null), null)) : (null)))) {
            // line 10
            echo "  <button data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_favorite_question", array("id" => $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array()), "id", array()), "targetType" => "testpaper", "targetId" => $this->getAttribute((isset($context["paper"]) ? $context["paper"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-link btn-muted btn-sm btn-default favorite-btn\" ";
            if (twig_in_filter($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array()), "id", array()), (isset($context["favorites"]) ? $context["favorites"] : null))) {
                echo "style=\"display:none\"";
            }
            echo "><span class=\"glyphicon glyphicon-star-empty text-muted\"></span> 收藏</button>
  <button data-url=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_unfavorite_question", array("id" => $this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array()), "id", array()), "targetType" => "testpaper", "targetId" => $this->getAttribute((isset($context["paper"]) ? $context["paper"] : null), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-link btn-sm unfavorite-btn\" ";
            if (!twig_in_filter($this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array()), "id", array()), (isset($context["favorites"]) ? $context["favorites"] : null))) {
                echo "style=\"display:none\"";
            }
            echo "><span class=\"glyphicon glyphicon-star\"></span> 取消收藏</button>
";
        }
        // line 12
        echo " -->

";
        // line 14
        if ((twig_in_filter("analysis", (isset($context["flags"]) ? $context["flags"] : null)) && (($this->getAttribute((isset($context["itemResult"]) ? $context["itemResult"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["itemResult"]) ? $context["itemResult"] : null), "id", array()), null)) : (null)))) {
            // line 15
            echo "  ";
            if (( !$this->getAttribute($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "question", array()), "analysis", array()) == "")) {
                // line 16
                echo "    <a class=\"btn btn-sm btn-link analysis-btn\"><span class=\"glyphicon glyphicon-chevron-down\"></span> 展开解析</a>
    <a class=\"btn btn-sm btn-link unanalysis-btn\" style=\"display:none\"><span class=\"glyphicon glyphicon-chevron-up\"></span> 收起解析</a>
  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Question:question-actions.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 16,  62 => 15,  60 => 14,  56 => 12,  47 => 11,  38 => 10,  36 => 9,  33 => 8,  28 => 5,  26 => 4,  23 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% set favorites = favorites|default([]) %}*/
/* {% do load_script('topxiawebbundle/controller/quiz-question/do-homework') %}*/
/* */
/* <!-- {% if 'mark' in flags and id|default(null) %}*/
/*   <a class="btn btn-link btn-muted btn-sm marking text-muted"><span class="glyphicon glyphicon-bookmark text-muted"></span> 标记</a>*/
/*   <a class="btn btn-link btn-sm unMarking" style="display:none"><span class="glyphicon glyphicon-bookmark"></span> 取消标记</a>*/
/* {% endif %}*/
/* */
/* {% if 'favorite' in flags and id|default(null) %}*/
/*   <button data-url="{{ path('my_favorite_question', {id:item.question.id, targetType:'testpaper', targetId:paper.id}) }}" class="btn btn-link btn-muted btn-sm btn-default favorite-btn" {% if item.question.id in favorites %}style="display:none"{% endif %}><span class="glyphicon glyphicon-star-empty text-muted"></span> 收藏</button>*/
/*   <button data-url="{{ path('my_unfavorite_question', {id:item.question.id, targetType:'testpaper', targetId:paper.id}) }}" class="btn btn-link btn-sm unfavorite-btn" {% if item.question.id not in favorites %}style="display:none"{% endif %}><span class="glyphicon glyphicon-star"></span> 取消收藏</button>*/
/* {% endif %} -->*/
/* */
/* {% if 'analysis' in flags and itemResult.id|default(null) %}*/
/*   {% if not item.question.analysis == '' %}*/
/*     <a class="btn btn-sm btn-link analysis-btn"><span class="glyphicon glyphicon-chevron-down"></span> 展开解析</a>*/
/*     <a class="btn btn-sm btn-link unanalysis-btn" style="display:none"><span class="glyphicon glyphicon-chevron-up"></span> 收起解析</a>*/
/*   {% endif %}*/
/* {% endif %}*/
