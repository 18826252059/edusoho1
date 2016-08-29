<?php

/* TopxiaAdminBundle:OperationAnalysis:course-sum.table.html.twig */
class __TwigTemplate_7eef34bcb4d428dc0b37209a1df5653944fe609a7ee75002155aed1abaf9913b extends Twig_Template
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
              <th>创建者</th>
              <th>";
        // line 6
        if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
        } else {
            echo "学员";
        }
        echo "数</th>
              <th>价格</th>
            </tr>
          </thead>
          <tbody>
            ";
        // line 11
        if ((isset($context["courseSumDetail"]) ? $context["courseSumDetail"] : null)) {
            // line 12
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["courseSumDetail"]) ? $context["courseSumDetail"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                // line 13
                echo "              <tr>
                  <td> <a href=\"";
                // line 14
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($context["data"], "id", array()))), "html", null, true);
                echo "\" target=\"_blank\"><strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "title", array()), "html", null, true);
                echo "</strong></a><br><span class=\"text-muted text-sm\">分类：";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), $this->getAttribute($context["data"], "categoryId", array()), array(), "array", false, true), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), $this->getAttribute($context["data"], "categoryId", array()), array(), "array", false, true), "name", array()), "--")) : ("--")), "html", null, true);
                echo "</span></td>
                   <td>";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : null), "user_link", array(0 => $this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["data"], "userId", array()), array(), "array")), "method"), "html", null, true);
                echo "<br>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["data"], "createdTime", array()), "Y-m-d H:i:s"), "html", null, true);
                echo "</td>
                   <td>";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "studentNum", array()), "html", null, true);
                echo "</td>
                   <td class=\"text-danger\">";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "price", array()), "html", null, true);
                echo "</td>
              </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 20
            echo "            ";
        }
        // line 21
        echo "          </tbody>
      </table>    
      ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:OperationAnalysis:course-sum.table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 23,  78 => 21,  75 => 20,  66 => 17,  62 => 16,  56 => 15,  48 => 14,  45 => 13,  40 => 12,  38 => 11,  26 => 6,  19 => 1,);
    }
}
/*       <table id="user-table" class="table table-striped table-hover" data-search-form="#user-search-form">*/
/*           <thead>*/
/*             <tr>*/
/*               <th>课程</th>*/
/*               <th>创建者</th>*/
/*               <th>{% if setting('default.user_name') %}{{setting('default.user_name')|default('学员')}}{% else %}学员{% endif %}数</th>*/
/*               <th>价格</th>*/
/*             </tr>*/
/*           </thead>*/
/*           <tbody>*/
/*             {% if courseSumDetail %}*/
/*             {% for data in courseSumDetail %}*/
/*               <tr>*/
/*                   <td> <a href="{{ path('course_show', {id:data.id}) }}" target="_blank"><strong>{{ data.title }}</strong></a><br><span class="text-muted text-sm">分类：{{ categories[data.categoryId].name|default('--') }}</span></td>*/
/*                    <td>{{ admin_macro.user_link(users[data.userId]) }}<br>{{data.createdTime|date("Y-m-d H:i:s")}}</td>*/
/*                    <td>{{data.studentNum}}</td>*/
/*                    <td class="text-danger">{{data.price}}</td>*/
/*               </tr>*/
/*             {% endfor %}*/
/*             {% endif %}*/
/*           </tbody>*/
/*       </table>    */
/*       {{ web_macro.paginator(paginator) }}*/
