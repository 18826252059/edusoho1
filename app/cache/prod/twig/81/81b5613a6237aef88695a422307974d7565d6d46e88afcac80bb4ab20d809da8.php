<?php

/* TopxiaAdminBundle:OperationAnalysis:paid-classroom.table.html.twig */
class __TwigTemplate_2338c8dc83cefe1673ce90f83e5d568a4ebee9e80f5d7ac7066066d124f638eb extends Twig_Template
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
              <th>班级</th>
              <th>购买者</th>
              <th>课程价格</th>
              <th>购买价格</th>
              <th>下单&付款时间</th>
            </tr>
          </thead>
          <tbody>
            ";
        // line 12
        if ((isset($context["paidClassroomDetail"]) ? $context["paidClassroomDetail"] : null)) {
            // line 13
            echo "            
            ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["paidClassroomDetail"]) ? $context["paidClassroomDetail"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                // line 15
                echo "
            ";
                // line 16
                if ((($this->getAttribute($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), $this->getAttribute($context["data"], "targetId", array()), array(), "array", false, true), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), $this->getAttribute($context["data"], "targetId", array()), array(), "array", false, true), "title", array()), null)) : (null))) {
                    // line 17
                    echo "              <tr>
                   <td> <a href=\"";
                    // line 18
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($context["data"], "targetId", array()))), "html", null, true);
                    echo "\" target=\"_blank\"><strong>";
                    echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), $this->getAttribute($context["data"], "targetId", array()), array(), "array", false, true), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), $this->getAttribute($context["data"], "targetId", array()), array(), "array", false, true), "title", array()), "此课程已不存在")) : ("此课程已不存在")), "html", null, true);
                    echo "</strong><br><span class=\"text-muted text-sm\">订单号:";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "sn", array()), "html", null, true);
                    echo "</span></td>
                   <td>";
                    // line 19
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : null), "user_link", array(0 => $this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["data"], "userId", array()), array(), "array")), "method"), "html", null, true);
                    echo "</td>
                   <td class=\"text-danger\">";
                    // line 20
                    echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "totalPrice", array()), "html", null, true);
                    echo "</td>
                    <td class=\"text-danger\">";
                    // line 21
                    echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "amount", array()), "html", null, true);
                    echo "</td>
                   <td>";
                    // line 22
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["data"], "createdTime", array()), "Y-m-d H:i:s"), "html", null, true);
                    echo "<br>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["data"], "paidTime", array()), "Y-m-d H:i:s"), "html", null, true);
                    echo "</td>
              </tr>
              ";
                } else {
                    // line 25
                    echo "              <tr class=\"danger\">                   
                    <td> 此课程已不存在</strong><br><span class=\"text-muted text-sm\">订单号:";
                    // line 26
                    echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "sn", array()), "html", null, true);
                    echo "</span></td>
                   <td>";
                    // line 27
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : null), "user_link", array(0 => $this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["data"], "userId", array()), array(), "array")), "method"), "html", null, true);
                    echo "</td>
                   <td class=\"text-danger\">--</td>
                    <td class=\"text-danger\">";
                    // line 29
                    echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "amount", array()), "html", null, true);
                    echo "</td>
                   <td>";
                    // line 30
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["data"], "createdTime", array()), "Y-m-d H:i:s"), "html", null, true);
                    echo "<br>";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["data"], "paidTime", array()), "Y-m-d H:i:s"), "html", null, true);
                    echo "</td>
              </tr>
              ";
                }
                // line 33
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "            ";
        }
        // line 35
        echo "          </tbody>
      </table>    
      ";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:OperationAnalysis:paid-classroom.table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 37,  110 => 35,  107 => 34,  101 => 33,  93 => 30,  89 => 29,  84 => 27,  80 => 26,  77 => 25,  69 => 22,  65 => 21,  61 => 20,  57 => 19,  49 => 18,  46 => 17,  44 => 16,  41 => 15,  37 => 14,  34 => 13,  32 => 12,  19 => 1,);
    }
}
/*       <table id="user-table" class="table table-striped table-hover" data-search-form="#user-search-form">*/
/*           <thead>*/
/*             <tr>*/
/*               <th>班级</th>*/
/*               <th>购买者</th>*/
/*               <th>课程价格</th>*/
/*               <th>购买价格</th>*/
/*               <th>下单&付款时间</th>*/
/*             </tr>*/
/*           </thead>*/
/*           <tbody>*/
/*             {% if paidClassroomDetail %}*/
/*             */
/*             {% for data in paidClassroomDetail %}*/
/* */
/*             {%  if  classroom[data.targetId].title|default(null)  %}*/
/*               <tr>*/
/*                    <td> <a href="{{ path('course_show', {id:data.targetId}) }}" target="_blank"><strong>{{ classroom[data.targetId].title|default("此课程已不存在") }}</strong><br><span class="text-muted text-sm">订单号:{{data.sn}}</span></td>*/
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
