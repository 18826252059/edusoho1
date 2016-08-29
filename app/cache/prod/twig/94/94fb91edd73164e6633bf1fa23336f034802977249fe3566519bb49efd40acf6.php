<?php

/* TopxiaAdminBundle:LoginRecord:table-tr.html.twig */
class __TwigTemplate_762dcaa38ffe58ebcd3add486feb6b21c2258b2a44651fd9bd3dfedddb9ed531 extends Twig_Template
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
        $context["admin_macro"] = $this->loadTemplate("TopxiaAdminBundle::macro.html.twig", "TopxiaAdminBundle:LoginRecord:table-tr.html.twig", 1);
        // line 2
        echo "<tr id=\"user-table-tr-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "html", null, true);
        echo "\">
  <td>
    <strong>";
        // line 4
        echo $context["admin_macro"]->getuser_link((isset($context["user"]) ? $context["user"] : null));
        echo "</strong>
  </td>
  <td>
    ";
        // line 7
        $context["emailArr"] = twig_split_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array()), "@");
        // line 8
        echo "    ";
        if (($this->getAttribute((isset($context["emailArr"]) ? $context["emailArr"] : null), 1, array(), "array") != "edusoho.net")) {
            // line 9
            echo "      ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array()), "html", null, true);
            echo "
    ";
        } else {
            // line 11
            echo "      暂无
    ";
        }
        // line 13
        echo "  </td>
  <td>
    <span class=\"text-sm\">";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["logRecord"]) ? $context["logRecord"] : null), "createdTime", array()), "Y-n-d H:i:s"), "html", null, true);
        echo "</span>
    <br>
    <a class=\"text-muted text-sm\" href=\"http://www.baidu.com/s?wd=";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["logRecord"]) ? $context["logRecord"] : null), "ip", array()), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["logRecord"]) ? $context["logRecord"] : null), "ip", array()), "html", null, true);
        echo "</a>
  </td>
  <td>
    ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["logRecord"]) ? $context["logRecord"] : null), "location", array()), "html", null, true);
        echo "
  </td>
  <td>
    <a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_login_record_details", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "\" data-url=\"\" class=\"btn btn-default btn-sm\">查看</a>
  </td>
</tr>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:LoginRecord:table-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 23,  65 => 20,  57 => 17,  52 => 15,  48 => 13,  44 => 11,  38 => 9,  35 => 8,  33 => 7,  27 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% import 'TopxiaAdminBundle::macro.html.twig' as admin_macro %}*/
/* <tr id="user-table-tr-{{ user.id }}">*/
/*   <td>*/
/*     <strong>{{ admin_macro.user_link(user) }}</strong>*/
/*   </td>*/
/*   <td>*/
/*     {% set emailArr = user.email|split('@') %}*/
/*     {% if emailArr[1] != 'edusoho.net' %}*/
/*       {{ user.email }}*/
/*     {% else %}*/
/*       暂无*/
/*     {% endif %}*/
/*   </td>*/
/*   <td>*/
/*     <span class="text-sm">{{ logRecord.createdTime|date('Y-n-d H:i:s') }}</span>*/
/*     <br>*/
/*     <a class="text-muted text-sm" href="http://www.baidu.com/s?wd={{ logRecord.ip }}" target="_blank">{{ logRecord.ip }}</a>*/
/*   </td>*/
/*   <td>*/
/*     {{ logRecord.location }}*/
/*   </td>*/
/*   <td>*/
/*     <a href="#modal" data-toggle="modal" data-url="{{ path('admin_login_record_details', {id:user.id}) }}" data-url="" class="btn btn-default btn-sm">查看</a>*/
/*   </td>*/
/* </tr>*/
