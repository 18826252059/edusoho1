<?php

/* TopxiaWebBundle:CourseTestpaperManage:testpaper-form-build-fields.html.twig */
class __TwigTemplate_e4d42f6337de9889f3c2d8ddb3df4045f0f03ed24d575d2a7fcfd94d6f2877f9 extends Twig_Template
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
        echo "  <div class=\"form-group\">
  <div class=\"col-md-2 control-label\"><label for=\"testpaper-percentage-field\">生成方式</label></div>
  <div class=\"col-md-8 controls radios\">
       ";
        // line 4
        echo $this->env->getExtension('topxia_html_twig')->radios("mode", array("rand" => "随机生成", "difficulty" => "按难易程度"), "rand");
        echo "
  </div>
</div>

<div class=\"form-group difficulty-form-group hidden\">
  <div class=\"col-md-2 control-label\"><label for=\"testpaper-percentage-field\">试卷难度</label></div>
  <div class=\"col-md-8 controls form-control-static\">
      <div class=\"difficulty-percentage-slider\"></div>
      <div class=\"help-block\">
          <span class=\"simple-percentage-text\"></span>
          <span class=\"normal-percentage-text\"></span>
          <span class=\"difficulty-percentage-text\"></span>
          <br><span class=\"text-info\">如果某个难度的题目数不够，将会随机选择题目来补充。</span>
      </div>
  </div>
</div>

<div class=\"form-group\">
  <div class=\"col-md-2 control-label\"><label for=\"testpaper-range-field\">出题范围</label></div>
  <div class=\"col-md-8 controls radios\">
       ";
        // line 24
        echo $this->env->getExtension('topxia_html_twig')->radios("range", array("course" => "整个课程", "lesson" => "按课时范围"), "course");
        echo "
       <input type=\"hidden\" name=\"ranges\" value=\"\">
       <div id=\"testpaper-range-selects\" style=\"display:none; margin-top:8px;\">
         <select class=\"form-control width-input width-input-large\" id=\"testpaper-range-start\" >
           ";
        // line 28
        echo $this->env->getExtension('topxia_html_twig')->selectOptions((isset($context["ranges"]) ? $context["ranges"] : null));
        echo "
         </select>
         <span class=\"text-muted mrs\">到</span>
         <select class=\"form-control width-input width-input-large\" id=\"testpaper-range-end\">
           ";
        // line 32
        echo $this->env->getExtension('topxia_html_twig')->selectOptions((isset($context["ranges"]) ? $context["ranges"] : null));
        echo "
         </select>
       </div>
  </div>
</div>

<div class=\"form-group\">
  <style>.testpaper-question-option-item{margin-left:-12px;margin-bottom:5px;}</style>
  <div class=\"col-md-2 control-label\"><label>题目设置</label></div>
  <div class=\"col-md-10 controls\" id=\"testpaper-question-options\">
    ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["types"]) ? $context["types"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 43
            echo "      <div class=\"testpaper-question-option-item\">
          <button type=\"button\" class=\"btn btn-link testpaper-question-option-item-sort-handler\"><span class=\"glyphicon glyphicon-move\"></span></button>
          <span style=\"min-width:85px;display:inline-block;_display:inline;\">";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "name", array()), "html", null, true);
            echo "</span>
          <span class=\"mlm\">题目数量:</span>
          <input type=\"text\" class=\"form-control width-input width-input-mini input-sm item-number\" name=\"counts[";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "key", array()), "html", null, true);
            echo "]\"  value=\"0\" />/
          <span class=\"text-info question-num\" role=\"questionNum\" type=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "key", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["questionNums"]) ? $context["questionNums"] : null), $this->getAttribute($context["type"], "key", array()), array(), "array", false, true), "questionNum", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["questionNums"]) ? $context["questionNums"] : null), $this->getAttribute($context["type"], "key", array()), array(), "array", false, true), "questionNum", array(), "array"), 0)) : (0)), "html", null, true);
            echo "</span>

          <span class=\"mlm\">题目分值:</span>
          <input type=\"text\" class=\"form-control width-input width-input-mini input-sm item-score\" name=\"scores[";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "key", array()), "html", null, true);
            echo "]\"  value=\"2\" />

          ";
            // line 53
            if ($this->getAttribute($context["type"], "hasMissScore", array())) {
                // line 54
                echo "            <span class=\"mlm\">漏选分值:</span>
            <input type=\"text\" class=\"form-control width-input width-input-mini input-sm item-miss-score\" name=\"missScores[";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($context["type"], "key", array()), "html", null, true);
                echo "]\"  value=\"0\" />
          ";
            }
            // line 57
            echo "      </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "  </div>
</div>

<input type=\"hidden\" name=\"percentages[simple]\">
<input type=\"hidden\" name=\"percentages[normal]\">
<input type=\"hidden\" name=\"percentages[difficulty]\">

<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseTestpaperManage:testpaper-form-build-fields.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 67,  122 => 60,  114 => 57,  109 => 55,  106 => 54,  104 => 53,  99 => 51,  91 => 48,  87 => 47,  82 => 45,  78 => 43,  74 => 42,  61 => 32,  54 => 28,  47 => 24,  24 => 4,  19 => 1,);
    }
}
/*   <div class="form-group">*/
/*   <div class="col-md-2 control-label"><label for="testpaper-percentage-field">生成方式</label></div>*/
/*   <div class="col-md-8 controls radios">*/
/*        {{ radios('mode', {'rand':'随机生成', 'difficulty':'按难易程度'}, 'rand') }}*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="form-group difficulty-form-group hidden">*/
/*   <div class="col-md-2 control-label"><label for="testpaper-percentage-field">试卷难度</label></div>*/
/*   <div class="col-md-8 controls form-control-static">*/
/*       <div class="difficulty-percentage-slider"></div>*/
/*       <div class="help-block">*/
/*           <span class="simple-percentage-text"></span>*/
/*           <span class="normal-percentage-text"></span>*/
/*           <span class="difficulty-percentage-text"></span>*/
/*           <br><span class="text-info">如果某个难度的题目数不够，将会随机选择题目来补充。</span>*/
/*       </div>*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="form-group">*/
/*   <div class="col-md-2 control-label"><label for="testpaper-range-field">出题范围</label></div>*/
/*   <div class="col-md-8 controls radios">*/
/*        {{ radios('range', {'course':'整个课程', 'lesson':'按课时范围'}, 'course') }}*/
/*        <input type="hidden" name="ranges" value="">*/
/*        <div id="testpaper-range-selects" style="display:none; margin-top:8px;">*/
/*          <select class="form-control width-input width-input-large" id="testpaper-range-start" >*/
/*            {{ select_options(ranges) }}*/
/*          </select>*/
/*          <span class="text-muted mrs">到</span>*/
/*          <select class="form-control width-input width-input-large" id="testpaper-range-end">*/
/*            {{ select_options(ranges) }}*/
/*          </select>*/
/*        </div>*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="form-group">*/
/*   <style>.testpaper-question-option-item{margin-left:-12px;margin-bottom:5px;}</style>*/
/*   <div class="col-md-2 control-label"><label>题目设置</label></div>*/
/*   <div class="col-md-10 controls" id="testpaper-question-options">*/
/*     {% for type in types %}*/
/*       <div class="testpaper-question-option-item">*/
/*           <button type="button" class="btn btn-link testpaper-question-option-item-sort-handler"><span class="glyphicon glyphicon-move"></span></button>*/
/*           <span style="min-width:85px;display:inline-block;_display:inline;">{{type.name}}</span>*/
/*           <span class="mlm">题目数量:</span>*/
/*           <input type="text" class="form-control width-input width-input-mini input-sm item-number" name="counts[{{type.key}}]"  value="0" />/*/
/*           <span class="text-info question-num" role="questionNum" type="{{type.key}}">{{questionNums[type.key]["questionNum"]|default(0)}}</span>*/
/* */
/*           <span class="mlm">题目分值:</span>*/
/*           <input type="text" class="form-control width-input width-input-mini input-sm item-score" name="scores[{{type.key}}]"  value="2" />*/
/* */
/*           {% if type.hasMissScore %}*/
/*             <span class="mlm">漏选分值:</span>*/
/*             <input type="text" class="form-control width-input width-input-mini input-sm item-miss-score" name="missScores[{{type.key}}]"  value="0" />*/
/*           {% endif %}*/
/*       </div>*/
/* */
/*     {% endfor %}*/
/*   </div>*/
/* </div>*/
/* */
/* <input type="hidden" name="percentages[simple]">*/
/* <input type="hidden" name="percentages[normal]">*/
/* <input type="hidden" name="percentages[difficulty]">*/
/* */
/* <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
