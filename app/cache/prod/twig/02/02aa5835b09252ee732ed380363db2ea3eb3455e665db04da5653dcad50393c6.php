<?php

/* TopxiaWebBundle:Course:course-data-modal.html.twig */
class __TwigTemplate_e74f12449d0d416e1b3e6287c5920e3010ddd7490336ed93d9a4f44de8d70a5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:Course:course-data-modal.html.twig", 2);
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
        // line 1
        $context["modal_class"] = "modal-lg";
        // line 2
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
        echo "课程的数据";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "  <div class=\"table-responsive\">
        <table class=\"table table-bordered\" style=\"word-break:break-all;text-align:center;\">
          <tr class=\"active\">
            <td>用户名</td>
            <td>加入课程时间</td>
            <td>完成课程时间</td>
            <td>课程学习天数</td>
            <td>课程学习时长（分）</td>
            <td>提问数</td>
            <td>笔记数</td>
          </tr>

          ";
        // line 18
        if ((isset($context["students"]) ? $context["students"] : null)) {
            // line 19
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["students"]) ? $context["students"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
                // line 20
                echo "            <tr>
            <td>";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "nickname", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 22
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["student"], "createdTime", array()), "Y-m-d H:i:s"), "html", null, true);
                echo "</td>
            <td>";
                // line 23
                if ((($this->getAttribute($context["student"], "fininshTime", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["student"], "fininshTime", array()), null)) : (null))) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["student"], "fininshTime", array()), "Y-m-d H:i:s"), "html", null, true);
                } else {
                    echo "----";
                }
                echo "</td>
            <td>";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "fininshDay", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 25
                echo twig_escape_filter($this->env, twig_round(((($this->getAttribute($context["student"], "learnTime", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["student"], "learnTime", array()), 0)) : (0)) / 60), 0, "floor"), "html", null, true);
                echo "</td>
            <td>";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "questionCount", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "noteNum", array()), "html", null, true);
                echo "</td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "          ";
        }
        // line 31
        echo "         
         
        </table>
     ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
  </div>


";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:course-data-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 34,  106 => 31,  103 => 30,  94 => 27,  90 => 26,  86 => 25,  82 => 24,  74 => 23,  70 => 22,  66 => 21,  63 => 20,  58 => 19,  56 => 18,  42 => 6,  39 => 5,  32 => 4,  28 => 2,  26 => 1,  11 => 2,);
    }
}
/* {% set modal_class= "modal-lg" %}*/
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% block title %}{{course.title}}课程的数据{% endblock %}*/
/* {% block body %}*/
/*   <div class="table-responsive">*/
/*         <table class="table table-bordered" style="word-break:break-all;text-align:center;">*/
/*           <tr class="active">*/
/*             <td>用户名</td>*/
/*             <td>加入课程时间</td>*/
/*             <td>完成课程时间</td>*/
/*             <td>课程学习天数</td>*/
/*             <td>课程学习时长（分）</td>*/
/*             <td>提问数</td>*/
/*             <td>笔记数</td>*/
/*           </tr>*/
/* */
/*           {% if students %}*/
/*             {% for student in students %}*/
/*             <tr>*/
/*             <td>{{student.nickname}}</td>*/
/*             <td>{{student.createdTime|date('Y-m-d H:i:s')}}</td>*/
/*             <td>{% if student.fininshTime|default(null) %}{{student.fininshTime|date('Y-m-d H:i:s')}}{% else %}----{% endif %}</td>*/
/*             <td>{{student.fininshDay}}</td>*/
/*             <td>{{(student.learnTime|default(0)/60)|round(0, 'floor')}}</td>*/
/*             <td>{{student.questionCount}}</td>*/
/*             <td>{{student.noteNum}}</td>*/
/*             </tr>*/
/*             {% endfor %}*/
/*           {% endif %}*/
/*          */
/*          */
/*         </table>*/
/*      {{ web_macro.paginator(paginator) }}*/
/*   </div>*/
/* */
/* */
/* {% endblock %}*/
/* */
