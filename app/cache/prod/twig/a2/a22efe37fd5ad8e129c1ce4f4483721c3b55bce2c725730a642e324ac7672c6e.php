<?php

/* TopxiaAdminBundle:OperationAnalysis:paid-lesson.table.html.twig */
class __TwigTemplate_fe3078706f6889aa31084d90261e5655164c0b4b83e2b5993254a4f09bda05e8 extends Twig_Template
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
              <th>课程</th>
              <th>购买者</th>
              <th>课程价格</th>
              <th>购买价格</th>
              <th>下单&付款时间</th>
            </tr>
          </thead>
          <tbody>
            ";
        // line 12
        if ((isset($context["paidCourseDetail"]) ? $context["paidCourseDetail"] : null)) {
            // line 13
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["paidCourseDetail"]) ? $context["paidCourseDetail"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                // line 14
                echo "
            ";
                // line 15
                if ((($this->getAttribute($this->getAttribute((isset($context["courses"]) ? $context["courses"] : null), $this->getAttribute($context["data"], "targetId", array()), array(), "array", false, true), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["courses"]) ? $context["courses"] : null), $this->getAttribute($context["data"], "targetId", array()), array(), "array", false, true), "title", array()), null)) : (null))) {
                    // line 16
                    echo "              <tr>
                   <td> <a href=\"";
                    // line 17
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($context["data"], "targetId", array()))), "html", null, true);
                    echo "\" target=\"_blank\"><strong>";
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["courses"]) ? $context["courses"] : null), $this->getAttribute($context["data"], "targetId", array()), array(), "array", false, true), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["courses"]) ? $context["courses"] : null), $this->getAttribute($context["data"], "targetId", array()), array(), "array", false, true), "title", array()), "此课程已不存在")) : ("此课程已不存在")), "html", null, true);
                    echo "</strong><br><span class=\"text-muted text-sm\">订单号:";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "sn", array()), "html", null, true);
                    echo "</span></td>
                   <td>";
                    // line 18
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : null), "user_link", array(0 => $this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["data"], "userId", array()), array(), "array")), "method"), "html", null, true);
                    echo "</td>
                   <td class=\"text-danger\">";
                    // line 19
                    echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "totalPrice", array()), "html", null, true);
                    echo "</td>
                    <td class=\"text-danger\">";
                    // line 20
                    echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "amount", array()), "html", null, true);
                    echo "</td>
                   <td>";
                    // line 21
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["data"], "createdTime", array()), "Y-m-d H:i:s"), "html", null, true);
                    echo "<br>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["data"], "paidTime", array()), "Y-m-d H:i:s"), "html", null, true);
                    echo "</td>
              </tr>
              ";
                } else {
                    // line 24
                    echo "              <tr class=\"danger\">                   
                    <td> 此课程已不存在</strong><br><span class=\"text-muted text-sm\">订单号:";
                    // line 25
                    echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "sn", array()), "html", null, true);
                    echo "</span></td>
                   <td>";
                    // line 26
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : null), "user_link", array(0 => $this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["data"], "userId", array()), array(), "array")), "method"), "html", null, true);
                    echo "</td>
                   <td class=\"text-danger\">--</td>
                    <td class=\"text-danger\">";
                    // line 28
                    echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "amount", array()), "html", null, true);
                    echo "</td>
                   <td>";
                    // line 29
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["data"], "createdTime", array()), "Y-m-d H:i:s"), "html", null, true);
                    echo "<br>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["data"], "paidTime", array()), "Y-m-d H:i:s"), "html", null, true);
                    echo "</td>
              </tr>
              ";
                }
                // line 32
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "            ";
        }
        // line 34
        echo "          </tbody>
      </table>    
      ";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:OperationAnalysis:paid-lesson.table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 36,  108 => 34,  105 => 33,  99 => 32,  91 => 29,  87 => 28,  82 => 26,  78 => 25,  75 => 24,  67 => 21,  63 => 20,  59 => 19,  55 => 18,  47 => 17,  44 => 16,  42 => 15,  39 => 14,  34 => 13,  32 => 12,  19 => 1,);
    }
}
/*       <table id="user-table" class="table table-striped table-hover" data-search-form="#user-search-form">*/
/*           <thead>*/
/*             <tr>*/
/*               <th>课程</th>*/
/*               <th>购买者</th>*/
/*               <th>课程价格</th>*/
/*               <th>购买价格</th>*/
/*               <th>下单&付款时间</th>*/
/*             </tr>*/
/*           </thead>*/
/*           <tbody>*/
/*             {% if paidCourseDetail %}*/
/*             {% for data in paidCourseDetail %}*/
/* */
/*             {%  if  courses[data.targetId].title|default(null)  %}*/
/*               <tr>*/
/*                    <td> <a href="{{ path('course_show', {id:data.targetId}) }}" target="_blank"><strong>{{ courses[data.targetId].title|default("此课程已不存在") }}</strong><br><span class="text-muted text-sm">订单号:{{data.sn}}</span></td>*/
/*                    <td>{{ admin_macro.user_link(users[data.userId]) }}</td>*/
/*                    <td class="text-danger">{{ data.totalPrice }}</td>*/
/*                     <td class="text-danger">{{ data.amount }}</td>*/
/*                    <td>{{data.createdTime|date("Y-m-d H:i:s")}}<br>{{data.paidTime|date("Y-m-d H:i:s")}}</td>*/
/*               </tr>*/
/*               {% else %}*/
/*               <tr class="danger">                   */
/*                     <td> 此课程已不存在</strong><br><span class="text-muted text-sm">订单号:{{data.sn}}</span></td>*/
/*                    <td>{{ admin_macro.user_link(users[data.userId]) }}</td>*/
/*                    <td class="text-danger">--</td>*/
/*                     <td class="text-danger">{{ data.amount }}</td>*/
/*                    <td>{{data.createdTime|date("Y-m-d H:i:s")}}<br>{{data.paidTime|date("Y-m-d H:i:s")}}</td>*/
/*               </tr>*/
/*               {% endif  %}*/
/*             {% endfor %}*/
/*             {% endif %}*/
/*           </tbody>*/
/*       </table>    */
/*       {{ web_macro.paginator(paginator) }}*/
