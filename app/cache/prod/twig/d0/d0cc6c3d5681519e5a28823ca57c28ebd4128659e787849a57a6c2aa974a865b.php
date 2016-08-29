<?php

/* TopxiaWebBundle:CourseLesson:lesson-data-modal.html.twig */
class __TwigTemplate_dcb7f80aa6ea456dbd71f3ee19bb774c102d54fe34097cac1629ec80b8a7f268 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:CourseLesson:lesson-data-modal.html.twig", 2);
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

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "title", array()), "html", null, true);
        echo "课时的数据";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "  <div class=\"table-responsive\">
    <table class=\"table table-bordered\" style=\"word-break:break-all;text-align:center;\">
      <tr class=\"active\">
        <td>用户名</td>
        <td>加入课时时间</td>
        <td>完成课时时间</td>
        <td width=\"18%\">课时学习时长（分）</td>
        <td width=\"18%\">音视频时长（分）</td>
        <td width=\"18%\">音视频学习时长（分）</td>
        <td>最近考试得分</td>
      </tr>
      ";
        // line 16
        if ((isset($context["students"]) ? $context["students"] : null)) {
            // line 17
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["students"]) ? $context["students"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
                // line 18
                echo "          <tr>
            <td>";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "nickname", array()), "html", null, true);
                echo "</td>
            <td>";
                // line 20
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["student"], "startTime", array()), "Y-m-d H:i:s"), "html", null, true);
                echo "</td>
            <td>";
                // line 21
                if ($this->getAttribute($context["student"], "finishedTime", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["student"], "finishedTime", array()), "Y-m-d H:i:s"), "html", null, true);
                } else {
                    echo "----";
                }
                echo "</td>
            <td>";
                // line 22
                echo twig_escape_filter($this->env, twig_round(($this->getAttribute($context["student"], "learnTime", array()) / 60), 0, "floor"), "html", null, true);
                echo "</td>
            <td>
              ";
                // line 24
                if (twig_in_filter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()), array(0 => "live"))) {
                    // line 25
                    echo "                ----
              ";
                } else {
                    // line 27
                    echo "                ";
                    echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "length", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "length", array()), "----")) : ("----")), "html", null, true);
                    echo "
              ";
                }
                // line 29
                echo "            </td>
            <td>";
                // line 30
                if ((($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) == "video") || ($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) == "audio"))) {
                    echo twig_escape_filter($this->env, twig_round(($this->getAttribute($context["student"], "watchTime", array()) / 60), 0, "floor"), "html", null, true);
                } else {
                    echo "----";
                }
                echo "</td>
            <td>";
                // line 31
                if (($this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : null), "type", array()) == "testpaper")) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["student"], "result", array()), "html", null, true);
                } else {
                    echo "----";
                }
                echo "</td>
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "      ";
        }
        // line 35
        echo "      
      
    </table>
    <nav class=\"text-center\">
      ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
    </nav>
  </div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseLesson:lesson-data-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 39,  125 => 35,  122 => 34,  109 => 31,  101 => 30,  98 => 29,  92 => 27,  88 => 25,  86 => 24,  81 => 22,  73 => 21,  69 => 20,  65 => 19,  62 => 18,  57 => 17,  55 => 16,  42 => 5,  39 => 4,  32 => 3,  28 => 2,  26 => 1,  11 => 2,);
    }
}
/* {% set modal_class= "modal-lg" %}*/
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* {% block title %}{{lesson.title}}课时的数据{% endblock %}*/
/* {% block body %}*/
/*   <div class="table-responsive">*/
/*     <table class="table table-bordered" style="word-break:break-all;text-align:center;">*/
/*       <tr class="active">*/
/*         <td>用户名</td>*/
/*         <td>加入课时时间</td>*/
/*         <td>完成课时时间</td>*/
/*         <td width="18%">课时学习时长（分）</td>*/
/*         <td width="18%">音视频时长（分）</td>*/
/*         <td width="18%">音视频学习时长（分）</td>*/
/*         <td>最近考试得分</td>*/
/*       </tr>*/
/*       {% if students %}*/
/*         {% for student in students %}*/
/*           <tr>*/
/*             <td>{{student.nickname}}</td>*/
/*             <td>{{student.startTime|date('Y-m-d H:i:s')}}</td>*/
/*             <td>{% if student.finishedTime %}{{student.finishedTime|date('Y-m-d H:i:s')}}{% else %}----{% endif %}</td>*/
/*             <td>{{(student.learnTime/60)|round(0, 'floor')}}</td>*/
/*             <td>*/
/*               {% if lesson.type in ['live'] %}*/
/*                 ----*/
/*               {% else %}*/
/*                 {{lesson.length|default('----')}}*/
/*               {% endif %}*/
/*             </td>*/
/*             <td>{% if lesson.type == "video" or lesson.type == "audio" %}{{(student.watchTime/60)|round(0, 'floor')}}{% else %}----{% endif %}</td>*/
/*             <td>{% if lesson.type == "testpaper" %}{{student.result}}{% else %}----{% endif %}</td>*/
/*           </tr>*/
/*         {% endfor %}*/
/*       {% endif %}*/
/*       */
/*       */
/*     </table>*/
/*     <nav class="text-center">*/
/*       {{ web_macro.paginator(paginator) }}*/
/*     </nav>*/
/*   </div>*/
/* {% endblock %}*/
