<?php

/* TopxiaWebBundle:CourseTestpaperManage:item-get-table.html.twig */
class __TwigTemplate_06d8586fde5aa140716c5986f79e31ab9e556b27d039256c325762e4fb959696 extends Twig_Template
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
        echo "<table class=\"table table-bordered\">
  <th>
    
    <td>单选题</td>
    <td>多选题</td>
    <td>不定向选择题</td>
    <td>填空题</td>
    <td>判断题</td>
    <td>问答题</td>
    <td>材料题</td>
  </th>
  <tr>
    <td>题数</td>
    <td class=\"single_choice_num\">";
        // line 14
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "single_choice", array(), "any", false, true), "num", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "single_choice", array(), "any", false, true), "num", array()), 0)) : (0)), "html", null, true);
        echo "</td>
    <td class=\"choice_num\">";
        // line 15
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "choice", array(), "any", false, true), "num", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "choice", array(), "any", false, true), "num", array()), 0)) : (0)), "html", null, true);
        echo "</td>
    <td class=\"uncertain_choice_num\">";
        // line 16
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "uncertain_choice", array(), "any", false, true), "num", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "uncertain_choice", array(), "any", false, true), "num", array()), 0)) : (0)), "html", null, true);
        echo "</td>
    <td class=\"fill_num\">";
        // line 17
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "fill", array(), "any", false, true), "num", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "fill", array(), "any", false, true), "num", array()), 0)) : (0)), "html", null, true);
        echo "</td>
    <td class=\"determine_num\">";
        // line 18
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "determine", array(), "any", false, true), "num", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "determine", array(), "any", false, true), "num", array()), 0)) : (0)), "html", null, true);
        echo "</td>
    <td class=\"essay_num\">";
        // line 19
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "essay", array(), "any", false, true), "num", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "essay", array(), "any", false, true), "num", array()), 0)) : (0)), "html", null, true);
        echo "</td>
    <td class=\"material_num\">";
        // line 20
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "material", array(), "any", false, true), "num", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "material", array(), "any", false, true), "num", array()), 0)) : (0)), "html", null, true);
        echo "</td>
  </tr>
  <tr>
    <td>分数</td>
    <td>";
        // line 24
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "single_choice", array(), "any", false, true), "score", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "single_choice", array(), "any", false, true), "score", array()), 0)) : (0)), "html", null, true);
        echo "</td>
    <td>";
        // line 25
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "choice", array(), "any", false, true), "score", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "choice", array(), "any", false, true), "score", array()), 0)) : (0)), "html", null, true);
        echo "</td>
    <td>";
        // line 26
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "uncertain_choice", array(), "any", false, true), "score", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "uncertain_choice", array(), "any", false, true), "score", array()), 0)) : (0)), "html", null, true);
        echo "</td>
    <td>";
        // line 27
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "fill", array(), "any", false, true), "score", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "fill", array(), "any", false, true), "score", array()), 0)) : (0)), "html", null, true);
        echo "</td>
    <td>";
        // line 28
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "determine", array(), "any", false, true), "score", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "determine", array(), "any", false, true), "score", array()), 0)) : (0)), "html", null, true);
        echo "</td>
    <td>";
        // line 29
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "essay", array(), "any", false, true), "score", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "essay", array(), "any", false, true), "score", array()), 0)) : (0)), "html", null, true);
        echo "</td>
    <td>";
        // line 30
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "material", array(), "any", false, true), "score", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["items"]) ? $context["items"] : null), "material", array(), "any", false, true), "score", array()), 0)) : (0)), "html", null, true);
        echo "</td>
  </tr>
  <input type=\"hidden\" value=\"";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["suggestHours"]) ? $context["suggestHours"] : null), "html", null, true);
        echo "\" class=\"suggestHoursHidden\"/>
</table>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseTestpaperManage:item-get-table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 32,  89 => 30,  85 => 29,  81 => 28,  77 => 27,  73 => 26,  69 => 25,  65 => 24,  58 => 20,  54 => 19,  50 => 18,  46 => 17,  42 => 16,  38 => 15,  34 => 14,  19 => 1,);
    }
}
/* <table class="table table-bordered">*/
/*   <th>*/
/*     */
/*     <td>单选题</td>*/
/*     <td>多选题</td>*/
/*     <td>不定向选择题</td>*/
/*     <td>填空题</td>*/
/*     <td>判断题</td>*/
/*     <td>问答题</td>*/
/*     <td>材料题</td>*/
/*   </th>*/
/*   <tr>*/
/*     <td>题数</td>*/
/*     <td class="single_choice_num">{{ items.single_choice.num|default(0) }}</td>*/
/*     <td class="choice_num">{{ items.choice.num|default(0) }}</td>*/
/*     <td class="uncertain_choice_num">{{ items.uncertain_choice.num|default(0) }}</td>*/
/*     <td class="fill_num">{{ items.fill.num|default(0) }}</td>*/
/*     <td class="determine_num">{{ items.determine.num|default(0) }}</td>*/
/*     <td class="essay_num">{{ items.essay.num|default(0) }}</td>*/
/*     <td class="material_num">{{ items.material.num|default(0) }}</td>*/
/*   </tr>*/
/*   <tr>*/
/*     <td>分数</td>*/
/*     <td>{{ items.single_choice.score|default(0) }}</td>*/
/*     <td>{{ items.choice.score|default(0) }}</td>*/
/*     <td>{{ items.uncertain_choice.score|default(0) }}</td>*/
/*     <td>{{ items.fill.score|default(0) }}</td>*/
/*     <td>{{ items.determine.score|default(0) }}</td>*/
/*     <td>{{ items.essay.score|default(0) }}</td>*/
/*     <td>{{ items.material.score|default(0) }}</td>*/
/*   </tr>*/
/*   <input type="hidden" value="{{ suggestHours }}" class="suggestHoursHidden"/>*/
/* </table>*/
