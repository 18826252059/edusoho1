<?php

/* TopxiaAdminBundle:OperationAnalysis:login.table.html.twig */
class __TwigTemplate_651ddf984fcbe098a497e77aec78701905bc885c09c4437c801d40c81f6e227b extends Twig_Template
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
              <th>IP地址</th>
              <th>登录时间</th>
            </tr>
          </thead>
          <tbody>
            ";
        // line 10
        if ((isset($context["loginDetail"]) ? $context["loginDetail"] : null)) {
            // line 11
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["loginDetail"]) ? $context["loginDetail"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                // line 12
                echo "              <tr>
                <td>";
                // line 13
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : null), "user_link", array(0 => $this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["data"], "userId", array()), array(), "array")), "method"), "html", null, true);
                echo "</td>
                <td>";
                // line 14
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "ip", array()), "html", null, true);
                echo "</td>
                <td>";
                // line 15
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["data"], "createdTime", array()), "Y-m-d H:i:s"), "html", null, true);
                echo "</td>
              </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "            ";
        }
        // line 19
        echo "          </tbody>
      </table>    
      ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:OperationAnalysis:login.table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 21,  60 => 19,  57 => 18,  48 => 15,  44 => 14,  40 => 13,  37 => 12,  32 => 11,  30 => 10,  19 => 1,);
    }
}
/*       <table id="user-table" class="table table-striped table-hover" data-search-form="#user-search-form">*/
/*           <thead>*/
/*             <tr>*/
/*               <th>用户名</th>*/
/*               <th>IP地址</th>*/
/*               <th>登录时间</th>*/
/*             </tr>*/
/*           </thead>*/
/*           <tbody>*/
/*             {% if loginDetail %}*/
/*             {% for data in loginDetail %}*/
/*               <tr>*/
/*                 <td>{{ admin_macro.user_link(users[data.userId]) }}</td>*/
/*                 <td>{{data.ip}}</td>*/
/*                 <td>{{data.createdTime|date("Y-m-d H:i:s")}}</td>*/
/*               </tr>*/
/*             {% endfor %}*/
/*             {% endif %}*/
/*           </tbody>*/
/*       </table>    */
/*       {{ web_macro.paginator(paginator) }}*/
