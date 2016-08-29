<?php

/* TopxiaAdminBundle:OperationAnalysis:lesson.table.html.twig */
class __TwigTemplate_c627b0d70d2878f03e9b879e682b3a119adfa93da4d0fc8501aa9eb43e8f3a48 extends Twig_Template
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
        echo "      <table id=\"user-table\" class=\"table table-striped table-hover\" data-search-form=\"#user-search-form\" style=\"word-break:break-all;\">
          <thead>
            <tr>
              <th>课时</th>
              <th>课时类型</th>
              <th>创建者</th>
            </tr>
          </thead>
          <tbody>
            ";
        // line 10
        if ((isset($context["lessonDetail"]) ? $context["lessonDetail"] : null)) {
            // line 11
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["lessonDetail"]) ? $context["lessonDetail"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                // line 12
                echo "              <tr>
                   <td style=\"width:50%\"> <strong>";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "title", array()), "html", null, true);
                echo "</strong><br><span class=\"text-muted text-sm\">属于课程:";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["courses"]) ? $context["courses"] : null), $this->getAttribute($context["data"], "courseId", array()), array(), "array"), "title", array()), "html", null, true);
                echo "</span></td>
                   <td>";
                // line 14
                if (($this->getAttribute($context["data"], "type", array()) == "text")) {
                    echo "图文
                  ";
                } elseif (($this->getAttribute(                // line 15
$context["data"], "type", array()) == "video")) {
                    echo "视频
                  ";
                } elseif (($this->getAttribute(                // line 16
$context["data"], "type", array()) == "audio")) {
                    echo "音频
                  ";
                } elseif (($this->getAttribute(                // line 17
$context["data"], "type", array()) == "ppt")) {
                    echo "PPT
                  ";
                } elseif (($this->getAttribute(                // line 18
$context["data"], "type", array()) == "testpaper")) {
                    echo "试卷
                  ";
                } elseif (($this->getAttribute(                // line 19
$context["data"], "type", array()) == "live")) {
                    echo "直播
                  ";
                } elseif (($this->getAttribute(                // line 20
$context["data"], "type", array()) == "flash")) {
                    echo "Flash
                  ";
                } elseif (($this->getAttribute(                // line 21
$context["data"], "type", array()) == "document")) {
                    echo "文档
                  ";
                }
                // line 22
                echo "</td>
                   <td>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : null), "user_link", array(0 => $this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($this->getAttribute((isset($context["courses"]) ? $context["courses"] : null), $this->getAttribute($context["data"], "courseId", array()), array(), "array"), "userId", array()), array(), "array")), "method"), "html", null, true);
                echo "<br>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["data"], "createdTime", array()), "Y-m-d H:i:s"), "html", null, true);
                echo "</td>
              </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "            ";
        }
        // line 27
        echo "          </tbody>
      </table>    
      ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:OperationAnalysis:lesson.table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 29,  96 => 27,  93 => 26,  82 => 23,  79 => 22,  74 => 21,  70 => 20,  66 => 19,  62 => 18,  58 => 17,  54 => 16,  50 => 15,  46 => 14,  40 => 13,  37 => 12,  32 => 11,  30 => 10,  19 => 1,);
    }
}
/*       <table id="user-table" class="table table-striped table-hover" data-search-form="#user-search-form" style="word-break:break-all;">*/
/*           <thead>*/
/*             <tr>*/
/*               <th>课时</th>*/
/*               <th>课时类型</th>*/
/*               <th>创建者</th>*/
/*             </tr>*/
/*           </thead>*/
/*           <tbody>*/
/*             {% if lessonDetail %}*/
/*             {% for data in lessonDetail %}*/
/*               <tr>*/
/*                    <td style="width:50%"> <strong>{{ data.title }}</strong><br><span class="text-muted text-sm">属于课程:{{courses[data.courseId].title}}</span></td>*/
/*                    <td>{% if data.type=="text" %}图文*/
/*                   {% elseif data.type=="video" %}视频*/
/*                   {% elseif data.type=="audio" %}音频*/
/*                   {% elseif data.type=="ppt" %}PPT*/
/*                   {% elseif data.type=="testpaper" %}试卷*/
/*                   {% elseif data.type=="live" %}直播*/
/*                   {% elseif data.type=="flash" %}Flash*/
/*                   {% elseif data.type=="document" %}文档*/
/*                   {% endif %}</td>*/
/*                    <td>{{ admin_macro.user_link(users[courses[data.courseId].userId]) }}<br>{{data.createdTime|date("Y-m-d H:i:s")}}</td>*/
/*               </tr>*/
/*             {% endfor %}*/
/*             {% endif %}*/
/*           </tbody>*/
/*       </table>    */
/*       {{ web_macro.paginator(paginator) }}*/
