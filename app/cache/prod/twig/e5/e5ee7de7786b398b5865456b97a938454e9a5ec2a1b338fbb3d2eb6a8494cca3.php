<?php

/* TopxiaWebBundle:QuizQuestionTest:testpaper-result-objective.html.twig */
class __TwigTemplate_770f3b44a83abad5ee6a02900343c18a22711d0ce38738ad900ecfb64e9f7454 extends Twig_Template
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
        echo "<div class=\"media testpaper-result\">
  <div class=\"testpaper-result-total\">
    <div class=\"well\">
      <div class=\"testpaper-result-total-score\">";
        // line 4
        if (($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()) == "finished")) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "score", array()), "html", null, true);
        } else {
            echo "?";
        }
        echo " <small>分</small></div>
      <small class=\"text-muted\">总分 ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paper"]) ? $context["paper"] : null), "score", array()), "html", null, true);
        echo " 分</small>
    </div>
  </div>
  <div class=\"media-body\">
    <div class=\"table-responsive\">
      <table class=\"table table-bordered table-condensed testpaper-result-table\">
        <thead>
            <th></th>
            ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["paper"]) ? $context["paper"] : null), "metas", array()), "question_type_seq", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 14
            echo "              <th>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('topxia_web_twig')->getDict("questionType"), $context["type"], array(), "array"), "html", null, true);
            echo " <small class=\"text-muted\">(";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["accuracy"]) ? $context["accuracy"] : null), $context["type"], array(), "array"), "all", array()), "html", null, true);
            echo "道)</small></th>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "        </thead>
        <tbody>
          <tr>
            <th>答对</th>
            ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["paper"]) ? $context["paper"] : null), "metas", array()), "question_type_seq", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 21
            echo "              ";
            if (($context["type"] == "essay")) {
                // line 22
                echo "                ";
                if (($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()) == "finished")) {
                    // line 23
                    echo "                  <td><span class=\"text-success\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["accuracy"]) ? $context["accuracy"] : null), $context["type"], array(), "array"), "right", array()), "html", null, true);
                    echo " <small>道</small></span></td>
                ";
                } else {
                    // line 25
                    echo "                  <td rowspan=\"4\" style=\"vertical-align:middle\"><span class=\"text-success\" style=\"font-size:40px\">?</span></td>
                ";
                }
                // line 27
                echo "              ";
            } else {
                // line 28
                echo "                ";
                if ((($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()) == "finished") ||  !(($this->getAttribute($this->getAttribute((isset($context["accuracy"]) ? $context["accuracy"] : null), $context["type"], array(), "array", false, true), "hasEssay", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["accuracy"]) ? $context["accuracy"] : null), $context["type"], array(), "array", false, true), "hasEssay", array()), false)) : (false)))) {
                    // line 29
                    echo "                  <td><span class=\"text-success\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["accuracy"]) ? $context["accuracy"] : null), $context["type"], array(), "array"), "right", array()), "html", null, true);
                    echo " <small>道</small></span></td>
                ";
                } else {
                    // line 31
                    echo "                  <td rowspan=\"4\" style=\"vertical-align:middle\"><span class=\"text-success\" style=\"font-size:40px\">?</span></td>
                ";
                }
                // line 33
                echo "              ";
            }
            // line 34
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "          </tr>
          <tr>
            <th>答错</th>
            ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["paper"]) ? $context["paper"] : null), "metas", array()), "question_type_seq", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 39
            echo "              ";
            if (($context["type"] == "essay")) {
                // line 40
                echo "                ";
                if (($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()) == "finished")) {
                    // line 41
                    echo "                  <td><span class=\"text-danger\">";
                    echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["accuracy"]) ? $context["accuracy"] : null), $context["type"], array(), "array"), "wrong", array()) + $this->getAttribute($this->getAttribute((isset($context["accuracy"]) ? $context["accuracy"] : null), $context["type"], array(), "array"), "partRight", array())), "html", null, true);
                    echo " <small>道</small></span></td>
                ";
                }
                // line 43
                echo "              ";
            } else {
                // line 44
                echo "                ";
                if ((($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()) == "finished") ||  !(($this->getAttribute($this->getAttribute((isset($context["accuracy"]) ? $context["accuracy"] : null), $context["type"], array(), "array", false, true), "hasEssay", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["accuracy"]) ? $context["accuracy"] : null), $context["type"], array(), "array", false, true), "hasEssay", array()), false)) : (false)))) {
                    // line 45
                    echo "                  <td><span class=\"text-danger\">";
                    echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["accuracy"]) ? $context["accuracy"] : null), $context["type"], array(), "array"), "wrong", array()) + $this->getAttribute($this->getAttribute((isset($context["accuracy"]) ? $context["accuracy"] : null), $context["type"], array(), "array"), "partRight", array())), "html", null, true);
                    echo " <small>道";
                    if (((($context["type"] == "choice") && ($this->getAttribute($this->getAttribute((isset($context["accuracy"]) ? $context["accuracy"] : null), $context["type"], array(), "array"), "partRight", array()) != 0)) || (($context["type"] == "uncertain_choice") && ($this->getAttribute($this->getAttribute((isset($context["accuracy"]) ? $context["accuracy"] : null), $context["type"], array(), "array"), "partRight", array()) != 0)))) {
                        echo "（其中有";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["accuracy"]) ? $context["accuracy"] : null), $context["type"], array(), "array"), "partRight", array()), "html", null, true);
                        echo "道漏选）";
                    }
                    echo "</small></span></td>
                ";
                }
                // line 47
                echo "              ";
            }
            // line 48
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "          </tr>
          <tr>
            <th>未答</th>
            ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["paper"]) ? $context["paper"] : null), "metas", array()), "question_type_seq", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 53
            echo "              ";
            if (($context["type"] == "essay")) {
                // line 54
                echo "                ";
                if (($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()) == "finished")) {
                    // line 55
                    echo "                  <td><span class=\"text-muted\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["accuracy"]) ? $context["accuracy"] : null), $context["type"], array(), "array"), "noAnswer", array()), "html", null, true);
                    echo " <small>道</small></span></td>
                ";
                }
                // line 57
                echo "              ";
            } else {
                // line 58
                echo "                ";
                if ((($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()) == "finished") ||  !(($this->getAttribute($this->getAttribute((isset($context["accuracy"]) ? $context["accuracy"] : null), $context["type"], array(), "array", false, true), "hasEssay", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["accuracy"]) ? $context["accuracy"] : null), $context["type"], array(), "array", false, true), "hasEssay", array()), false)) : (false)))) {
                    // line 59
                    echo "                  <td><span class=\"text-muted\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["accuracy"]) ? $context["accuracy"] : null), $context["type"], array(), "array"), "noAnswer", array()), "html", null, true);
                    echo " <small>道</small></span></td>
                ";
                }
                // line 61
                echo "              ";
            }
            // line 62
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "          </tr>
          <tr>
            <th>得分</th>
            ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["paper"]) ? $context["paper"] : null), "metas", array()), "question_type_seq", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["type"]) {
            // line 67
            echo "              ";
            if (($context["type"] == "essay")) {
                // line 68
                echo "                ";
                if (($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()) == "finished")) {
                    // line 69
                    echo "                  <td><span class=\"text-score\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["accuracy"]) ? $context["accuracy"] : null), $context["type"], array(), "array"), "score", array()), "html", null, true);
                    echo " <small>分</small></span></td>
                ";
                }
                // line 71
                echo "              ";
            } else {
                // line 72
                echo "                ";
                if ((($this->getAttribute((isset($context["paperResult"]) ? $context["paperResult"] : null), "status", array()) == "finished") ||  !(($this->getAttribute($this->getAttribute((isset($context["accuracy"]) ? $context["accuracy"] : null), $context["type"], array(), "array", false, true), "hasEssay", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["accuracy"]) ? $context["accuracy"] : null), $context["type"], array(), "array", false, true), "hasEssay", array()), false)) : (false)))) {
                    // line 73
                    echo "                  <td><span class=\"text-score\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["accuracy"]) ? $context["accuracy"] : null), $context["type"], array(), "array"), "score", array()), "html", null, true);
                    echo " <small>分</small></span></td>
                ";
                }
                // line 75
                echo "              ";
            }
            // line 76
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['type'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:QuizQuestionTest:testpaper-result-objective.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 77,  235 => 76,  232 => 75,  226 => 73,  223 => 72,  220 => 71,  214 => 69,  211 => 68,  208 => 67,  204 => 66,  199 => 63,  193 => 62,  190 => 61,  184 => 59,  181 => 58,  178 => 57,  172 => 55,  169 => 54,  166 => 53,  162 => 52,  157 => 49,  151 => 48,  148 => 47,  136 => 45,  133 => 44,  130 => 43,  124 => 41,  121 => 40,  118 => 39,  114 => 38,  109 => 35,  103 => 34,  100 => 33,  96 => 31,  90 => 29,  87 => 28,  84 => 27,  80 => 25,  74 => 23,  71 => 22,  68 => 21,  64 => 20,  58 => 16,  47 => 14,  43 => 13,  32 => 5,  24 => 4,  19 => 1,);
    }
}
/* <div class="media testpaper-result">*/
/*   <div class="testpaper-result-total">*/
/*     <div class="well">*/
/*       <div class="testpaper-result-total-score">{% if paperResult.status == 'finished' %}{{ paperResult.score }}{% else %}?{% endif %} <small>分</small></div>*/
/*       <small class="text-muted">总分 {{ paper.score }} 分</small>*/
/*     </div>*/
/*   </div>*/
/*   <div class="media-body">*/
/*     <div class="table-responsive">*/
/*       <table class="table table-bordered table-condensed testpaper-result-table">*/
/*         <thead>*/
/*             <th></th>*/
/*             {% for type in paper.metas.question_type_seq %}*/
/*               <th>{{ dict('questionType')[type] }} <small class="text-muted">({{ accuracy[type].all }}道)</small></th>*/
/*             {% endfor %}*/
/*         </thead>*/
/*         <tbody>*/
/*           <tr>*/
/*             <th>答对</th>*/
/*             {% for type in paper.metas.question_type_seq %}*/
/*               {% if type == 'essay' %}*/
/*                 {% if paperResult.status == 'finished' %}*/
/*                   <td><span class="text-success">{{ accuracy[type].right }} <small>道</small></span></td>*/
/*                 {% else %}*/
/*                   <td rowspan="4" style="vertical-align:middle"><span class="text-success" style="font-size:40px">?</span></td>*/
/*                 {% endif %}*/
/*               {% else %}*/
/*                 {% if paperResult.status == 'finished' or not accuracy[type].hasEssay|default(false) %}*/
/*                   <td><span class="text-success">{{ accuracy[type].right }} <small>道</small></span></td>*/
/*                 {% else %}*/
/*                   <td rowspan="4" style="vertical-align:middle"><span class="text-success" style="font-size:40px">?</span></td>*/
/*                 {% endif %}*/
/*               {% endif %}*/
/*             {% endfor %}*/
/*           </tr>*/
/*           <tr>*/
/*             <th>答错</th>*/
/*             {% for type in paper.metas.question_type_seq %}*/
/*               {% if type == 'essay' %}*/
/*                 {% if paperResult.status == 'finished' %}*/
/*                   <td><span class="text-danger">{{ accuracy[type].wrong + accuracy[type].partRight }} <small>道</small></span></td>*/
/*                 {% endif %}*/
/*               {% else %}*/
/*                 {% if paperResult.status == 'finished' or not accuracy[type].hasEssay|default(false) %}*/
/*                   <td><span class="text-danger">{{ accuracy[type].wrong + accuracy[type].partRight }} <small>道{% if type == 'choice' and accuracy[type].partRight != 0 or  type == 'uncertain_choice' and accuracy[type].partRight != 0 %}（其中有{{accuracy[type].partRight}}道漏选）{% endif %}</small></span></td>*/
/*                 {% endif %}*/
/*               {% endif %}*/
/*             {% endfor %}*/
/*           </tr>*/
/*           <tr>*/
/*             <th>未答</th>*/
/*             {% for type in paper.metas.question_type_seq %}*/
/*               {% if type == 'essay' %}*/
/*                 {% if paperResult.status == 'finished' %}*/
/*                   <td><span class="text-muted">{{ accuracy[type].noAnswer }} <small>道</small></span></td>*/
/*                 {% endif %}*/
/*               {% else %}*/
/*                 {% if paperResult.status == 'finished' or not accuracy[type].hasEssay|default(false) %}*/
/*                   <td><span class="text-muted">{{ accuracy[type].noAnswer }} <small>道</small></span></td>*/
/*                 {% endif %}*/
/*               {% endif %}*/
/*             {% endfor %}*/
/*           </tr>*/
/*           <tr>*/
/*             <th>得分</th>*/
/*             {% for type in paper.metas.question_type_seq %}*/
/*               {% if type == 'essay' %}*/
/*                 {% if paperResult.status == 'finished' %}*/
/*                   <td><span class="text-score">{{ accuracy[type].score }} <small>分</small></span></td>*/
/*                 {% endif %}*/
/*               {% else %}*/
/*                 {% if paperResult.status == 'finished' or not accuracy[type].hasEssay|default(false) %}*/
/*                   <td><span class="text-score">{{ accuracy[type].score }} <small>分</small></span></td>*/
/*                 {% endif %}*/
/*               {% endif %}*/
/*             {% endfor %}*/
/*           </tr>*/
/*         </tbody>*/
/*       </table>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
