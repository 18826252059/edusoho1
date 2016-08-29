<?php

/* TopxiaAdminBundle:Course:lesson-data.html.twig */
class __TwigTemplate_8bb6263b4b856838e35c97e2a42ab1d4a78c82a1bdbb08ce3b06db4d5208e12c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Course:lesson-data.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["menu"] = "admin_course_data";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"table-responsive\">
        <table class=\"table table-bordered\" style=\"word-break:break-all;text-align:center;\">
          <tr class=\"active\">
            <td>课时名</td>
            <td>课时学习人数</td>
            <td>课时完成人数</td>
            <td>课时平均学习时长(分)</td>
            <td>音视频时长(分)</td>
            <td>音视频平均观看时长(分)</td>
            <td>测试平均得分</td>
          </tr>
          ";
        // line 17
        if ((isset($context["lessons"]) ? $context["lessons"] : null)) {
            // line 18
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["lessons"]) ? $context["lessons"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["lesson"]) {
                // line 19
                echo "              <tr>
                <td>";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($context["lesson"], "title", array()), "html", null, true);
                if (($this->getAttribute($context["lesson"], "type", array()) == "text")) {
                    echo "（图文）";
                } elseif (($this->getAttribute($context["lesson"], "type", array()) == "video")) {
                    echo "（视频）";
                } elseif (($this->getAttribute($context["lesson"], "type", array()) == "audio")) {
                    echo "（音频）";
                } elseif (($this->getAttribute($context["lesson"], "type", array()) == "testpaper")) {
                    echo "（试卷）";
                } elseif (($this->getAttribute($context["lesson"], "type", array()) == "ppt")) {
                    echo "（ppt）";
                }
                echo "</td>
                <td>";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["lesson"], "LearnedNum", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["lesson"], "finishedNum", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 23
                echo twig_escape_filter($this->env, twig_round(($this->getAttribute($context["lesson"], "learnTime", array()) / 60), 0, "floor"), "html", null, true);
                echo "</td>
                <td>";
                // line 24
                if ((($this->getAttribute($context["lesson"], "type", array()) == "audio") || ($this->getAttribute($context["lesson"], "type", array()) == "video"))) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["lesson"], "length", array()), "html", null, true);
                } else {
                    echo "----";
                }
                echo "</td>
                <td>";
                // line 25
                if ((($this->getAttribute($context["lesson"], "mediaSource", array()) != "self") && ($this->getAttribute($context["lesson"], "type", array()) == "video"))) {
                    echo "无";
                } elseif ((($this->getAttribute($context["lesson"], "type", array()) == "audio") || ($this->getAttribute($context["lesson"], "type", array()) == "video"))) {
                    echo twig_escape_filter($this->env, twig_round(($this->getAttribute($context["lesson"], "watchTime", array()) / 60), 0, "floor"), "html", null, true);
                } else {
                    echo "----";
                }
                echo "</td>
                <td>";
                // line 26
                if (($this->getAttribute($context["lesson"], "type", array()) == "testpaper")) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["lesson"], "score", array()), "html", null, true);
                } else {
                    echo "----";
                }
                echo "</td>
              </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lesson'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "          ";
        }
        // line 30
        echo "        </table>
  
    </div>


";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Course:lesson-data.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 30,  115 => 29,  102 => 26,  92 => 25,  84 => 24,  80 => 23,  76 => 22,  72 => 21,  57 => 20,  54 => 19,  49 => 18,  47 => 17,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set menu = 'admin_course_data' %}*/
/* */
/* {% block main %}*/
/*     <div class="table-responsive">*/
/*         <table class="table table-bordered" style="word-break:break-all;text-align:center;">*/
/*           <tr class="active">*/
/*             <td>课时名</td>*/
/*             <td>课时学习人数</td>*/
/*             <td>课时完成人数</td>*/
/*             <td>课时平均学习时长(分)</td>*/
/*             <td>音视频时长(分)</td>*/
/*             <td>音视频平均观看时长(分)</td>*/
/*             <td>测试平均得分</td>*/
/*           </tr>*/
/*           {% if lessons %}*/
/*             {% for lesson in lessons %}*/
/*               <tr>*/
/*                 <td>{{lesson.title}}{% if lesson.type == "text" %}（图文）{% elseif lesson.type == 'video' %}（视频）{% elseif lesson.type == 'audio' %}（音频）{% elseif lesson.type == 'testpaper' %}（试卷）{% elseif lesson.type == 'ppt' %}（ppt）{% endif %}</td>*/
/*                 <td>{{lesson.LearnedNum}}</td>*/
/*                 <td>{{lesson.finishedNum}}</td>*/
/*                 <td>{{(lesson.learnTime/60)|round(0, 'floor')}}</td>*/
/*                 <td>{% if lesson.type =='audio' or lesson.type =='video' %}{{lesson.length}}{% else %}----{% endif %}</td>*/
/*                 <td>{% if lesson.mediaSource != 'self' and lesson.type == 'video' %}无{% elseif lesson.type =='audio' or lesson.type =='video'%}{{(lesson.watchTime/60)|round(0, 'floor')}}{% else %}----{% endif %}</td>*/
/*                 <td>{% if lesson.type =='testpaper' %}{{lesson.score}}{% else %}----{% endif %}</td>*/
/*               </tr>*/
/*             {% endfor %}*/
/*           {% endif %}*/
/*         </table>*/
/*   */
/*     </div>*/
/* */
/* */
/* {% endblock %}*/
