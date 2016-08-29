<?php

/* TopxiaAdminBundle:OperationAnalysis:finished-lesson.table.html.twig */
class __TwigTemplate_149c1de9fd0422a9cfa7cfa3187b511649500896ff9fdc1304f4ee0bc7757931 extends Twig_Template
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
        echo "      <table id=\"user-table\" class=\"table table-striped table-hover\" data-search-form=\"#user-search-form\">
          <thead>
            <tr>
              <th>课时</th>
              <th>课时类型</th>
              <th>";
        // line 6
        if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
        } else {
            echo "学员";
        }
        echo "</th>
            </tr>
          </thead>
          <tbody>
            ";
        // line 10
        if ((isset($context["finishedLessonDetail"]) ? $context["finishedLessonDetail"] : null)) {
            // line 11
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["finishedLessonDetail"]) ? $context["finishedLessonDetail"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                // line 12
                echo "              <tr>
                   <td> <strong>";
                // line 13
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["lessons"]) ? $context["lessons"] : null), $this->getAttribute($context["data"], "lessonId", array()), array(), "array", false, true), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["lessons"]) ? $context["lessons"] : null), $this->getAttribute($context["data"], "lessonId", array()), array(), "array", false, true), "title", array()), "")) : ("")), "html", null, true);
                echo "</strong><br><span class=\"text-muted text-sm\">属于课程:";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["courses"]) ? $context["courses"] : null), $this->getAttribute($context["data"], "courseId", array()), array(), "array"), "title", array()), "html", null, true);
                echo "</span></td>
                   <td>";
                // line 14
                if (($this->getAttribute($this->getAttribute((isset($context["lessons"]) ? $context["lessons"] : null), $this->getAttribute($context["data"], "lessonId", array()), array(), "array"), "type", array()) == "text")) {
                    echo "图文
                  ";
                } elseif (($this->getAttribute($this->getAttribute(                // line 15
(isset($context["lessons"]) ? $context["lessons"] : null), $this->getAttribute($context["data"], "lessonId", array()), array(), "array"), "type", array()) == "video")) {
                    echo "视频
                  ";
                } elseif (($this->getAttribute($this->getAttribute(                // line 16
(isset($context["lessons"]) ? $context["lessons"] : null), $this->getAttribute($context["data"], "lessonId", array()), array(), "array"), "type", array()) == "audio")) {
                    echo "音频
                  ";
                } elseif (($this->getAttribute($this->getAttribute(                // line 17
(isset($context["lessons"]) ? $context["lessons"] : null), $this->getAttribute($context["data"], "lessonId", array()), array(), "array"), "type", array()) == "ppt")) {
                    echo "PPT
                  ";
                } elseif (($this->getAttribute($this->getAttribute(                // line 18
(isset($context["lessons"]) ? $context["lessons"] : null), $this->getAttribute($context["data"], "lessonId", array()), array(), "array"), "type", array()) == "testpaper")) {
                    echo "试卷
                  ";
                }
                // line 19
                echo "</td>
                   <td>";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : null), "user_link", array(0 => $this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["data"], "userId", array()), array(), "array")), "method"), "html", null, true);
                echo "<br>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["data"], "finishedTime", array()), "Y-m-d H:i:s"), "html", null, true);
                echo "</td>
              </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "            ";
        }
        // line 24
        echo "          </tbody>
      </table>    
      ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:OperationAnalysis:finished-lesson.table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 26,  91 => 24,  88 => 23,  77 => 20,  74 => 19,  69 => 18,  65 => 17,  61 => 16,  57 => 15,  53 => 14,  47 => 13,  44 => 12,  39 => 11,  37 => 10,  26 => 6,  19 => 1,);
    }
}
/*       <table id="user-table" class="table table-striped table-hover" data-search-form="#user-search-form">*/
/*           <thead>*/
/*             <tr>*/
/*               <th>课时</th>*/
/*               <th>课时类型</th>*/
/*               <th>{% if setting('default.user_name') %}{{setting('default.user_name')|default('学员')}}{% else %}学员{% endif %}</th>*/
/*             </tr>*/
/*           </thead>*/
/*           <tbody>*/
/*             {% if finishedLessonDetail %}*/
/*             {% for data in finishedLessonDetail %}*/
/*               <tr>*/
/*                    <td> <strong>{{lessons[data.lessonId].title|default("")}}</strong><br><span class="text-muted text-sm">属于课程:{{courses[data.courseId].title}}</span></td>*/
/*                    <td>{% if lessons[data.lessonId].type=="text" %}图文*/
/*                   {% elseif lessons[data.lessonId].type=="video" %}视频*/
/*                   {% elseif lessons[data.lessonId].type=="audio" %}音频*/
/*                   {% elseif lessons[data.lessonId].type=="ppt" %}PPT*/
/*                   {% elseif lessons[data.lessonId].type=="testpaper" %}试卷*/
/*                   {% endif %}</td>*/
/*                    <td>{{ admin_macro.user_link(users[data.userId]) }}<br>{{data.finishedTime|date("Y-m-d H:i:s")}}</td>*/
/*               </tr>*/
/*             {% endfor %}*/
/*             {% endif %}*/
/*           </tbody>*/
/*       </table>    */
/*       {{ web_macro.paginator(paginator) }}*/
