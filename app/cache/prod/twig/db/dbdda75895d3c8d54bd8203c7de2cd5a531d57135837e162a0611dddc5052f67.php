<?php

/* TopxiaAdminBundle:OperationAnalysis:join-lesson.table.html.twig */
class __TwigTemplate_e03dc5c8e0959f0004d3fbe2c5ecc79d8817c60b2240dc256876b6213f6e1f39 extends Twig_Template
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
              <th>用户名</th>
              <th>加入课程</th>
              <th>加入时间</th>
              <th>课程价格</th>
            </tr>
          </thead>
          <tbody>
            ";
        // line 11
        if ((isset($context["JoinLessonDetail"]) ? $context["JoinLessonDetail"] : null)) {
            // line 12
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["JoinLessonDetail"]) ? $context["JoinLessonDetail"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                // line 13
                echo "            ";
                if ((($this->getAttribute($this->getAttribute((isset($context["courses"]) ? $context["courses"] : null), $this->getAttribute($context["data"], "targetId", array()), array(), "array", false, true), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["courses"]) ? $context["courses"] : null), $this->getAttribute($context["data"], "targetId", array()), array(), "array", false, true), "title", array()), null)) : (null))) {
                    // line 14
                    echo "              <tr>
                  <td> ";
                    // line 15
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : null), "user_link", array(0 => $this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["data"], "userId", array()), array(), "array")), "method"), "html", null, true);
                    echo "</td>
                   <td><a href=\"";
                    // line 16
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($context["data"], "targetId", array()))), "html", null, true);
                    echo "\" target=\"_blank\"><strong>";
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["courses"]) ? $context["courses"] : null), $this->getAttribute($context["data"], "targetId", array()), array(), "array", false, true), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["courses"]) ? $context["courses"] : null), $this->getAttribute($context["data"], "targetId", array()), array(), "array", false, true), "title", array()), "")) : ("")), "html", null, true);
                    echo "</strong></a><br></td>
                   <td>";
                    // line 17
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["data"], "createdTime", array()), "Y-m-d H:i:s"), "html", null, true);
                    echo "</td>
                   <td class=\"text-danger\">";
                    // line 18
                    if (($this->getAttribute($context["data"], "amount", array()) == 0)) {
                        echo "免费";
                    } else {
                        echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "amount", array()), "html", null, true);
                    }
                    echo "</td>
              </tr>
            ";
                } else {
                    // line 21
                    echo "              <tr>
                  <td> ";
                    // line 22
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : null), "user_link", array(0 => $this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["data"], "userId", array()), array(), "array")), "method"), "html", null, true);
                    echo "</td>
                   <td><strong>此课程已不存在</strong><br></td>
                   <td>";
                    // line 24
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["data"], "createdTime", array()), "Y-m-d H:i:s"), "html", null, true);
                    echo "</td>
                   <td class=\"text-danger\">";
                    // line 25
                    if (($this->getAttribute($context["data"], "amount", array()) == 0)) {
                        echo "免费";
                    } else {
                        echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "amount", array()), "html", null, true);
                    }
                    echo "</td>
              </tr>
            ";
                }
                // line 28
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "            ";
        }
        // line 30
        echo "          </tbody>
      </table>    
      ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:OperationAnalysis:join-lesson.table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 32,  99 => 30,  96 => 29,  90 => 28,  80 => 25,  76 => 24,  71 => 22,  68 => 21,  58 => 18,  54 => 17,  48 => 16,  44 => 15,  41 => 14,  38 => 13,  33 => 12,  31 => 11,  19 => 1,);
    }
}
/*       <table id="user-table" class="table table-striped table-hover" data-search-form="#user-search-form">*/
/*           <thead>*/
/*             <tr>*/
/*               <th>用户名</th>*/
/*               <th>加入课程</th>*/
/*               <th>加入时间</th>*/
/*               <th>课程价格</th>*/
/*             </tr>*/
/*           </thead>*/
/*           <tbody>*/
/*             {% if JoinLessonDetail %}*/
/*             {% for data in JoinLessonDetail %}*/
/*             {% if courses[data.targetId].title|default(null) %}*/
/*               <tr>*/
/*                   <td> {{ admin_macro.user_link(users[data.userId]) }}</td>*/
/*                    <td><a href="{{ path('course_show', {id:data.targetId}) }}" target="_blank"><strong>{{ courses[data.targetId].title|default("") }}</strong></a><br></td>*/
/*                    <td>{{data.createdTime|date("Y-m-d H:i:s")}}</td>*/
/*                    <td class="text-danger">{% if data.amount==0 %}免费{% else %}{{data.amount}}{% endif %}</td>*/
/*               </tr>*/
/*             {% else %}*/
/*               <tr>*/
/*                   <td> {{ admin_macro.user_link(users[data.userId]) }}</td>*/
/*                    <td><strong>此课程已不存在</strong><br></td>*/
/*                    <td>{{data.createdTime|date("Y-m-d H:i:s")}}</td>*/
/*                    <td class="text-danger">{% if data.amount==0 %}免费{% else %}{{data.amount}}{% endif %}</td>*/
/*               </tr>*/
/*             {% endif %}*/
/*             {% endfor %}*/
/*             {% endif %}*/
/*           </tbody>*/
/*       </table>    */
/*       {{ web_macro.paginator(paginator) }}*/
