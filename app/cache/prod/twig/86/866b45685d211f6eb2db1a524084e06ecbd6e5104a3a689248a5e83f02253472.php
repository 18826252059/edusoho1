<?php

/* TopxiaAdminBundle:Default:latest-users-block.html.twig */
class __TwigTemplate_27f05e63069a95364eedbd07622b49fc8508157473749f7228a11e7bd1c43094 extends Twig_Template
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
        $context["admin_macro"] = $this->loadTemplate("TopxiaAdminBundle::macro.html.twig", "TopxiaAdminBundle:Default:latest-users-block.html.twig", 1);
        // line 2
        echo "<div class=\"col-md-6\">
 \t<div class=\"panel panel-default\">
\t
\t \t<div class=\"panel-heading\">
\t \t\t<h3 class=\"panel-title\">新注册用户</h3>
\t \t</div>

    ";
        // line 9
        if ((isset($context["users"]) ? $context["users"] : null)) {
            // line 10
            echo "  \t\t<table class=\"table table-condensed table-striped table-hover\">
        <thead>
          <tr>
            <th width=\"40%\">用户名</th>
            <th width=\"25%\" >注册来源</th>
            <th width=\"25%\">注册时间</th>
          </tr>
        </thead>
        <tbody>
        \t";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 20
                echo "        \t\t<tr>
              <td>
              \t";
                // line 22
                echo $context["admin_macro"]->getuser_link($context["user"]);
                echo "
              \t<br>
              \t<span class=\"text-muted text-sm\">";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
                echo "</span>
              </td>
              <td>
              \t";
                // line 27
                echo $this->env->getExtension('topxia_web_twig')->getDictText("userType", $this->getAttribute($context["user"], "type", array()));
                echo "
              </td>
              <td>
              \t<span class=\"text-sm\">";
                // line 30
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "createdTime", array()), "Y-n-d H:i:s"), "html", null, true);
                echo "</span>
              \t<br>
              \t<a class=\"text-muted text-sm\" href=\"http://www.baidu.com/s?wd=";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "createdIp", array()), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "createdIp", array()), "html", null, true);
                echo "</a>
              </td>
        \t\t</tr>
        \t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "        </tbody>
      </table>
    ";
        } else {
            // line 39
            echo "      <div class=\"empty\">暂无新注册用户</div>
    ";
        }
        // line 41
        echo "\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Default:latest-users-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 41,  90 => 39,  85 => 36,  73 => 32,  68 => 30,  62 => 27,  56 => 24,  51 => 22,  47 => 20,  43 => 19,  32 => 10,  30 => 9,  21 => 2,  19 => 1,);
    }
}
/* {% import "TopxiaAdminBundle::macro.html.twig" as admin_macro %}*/
/* <div class="col-md-6">*/
/*  	<div class="panel panel-default">*/
/* 	*/
/* 	 	<div class="panel-heading">*/
/* 	 		<h3 class="panel-title">新注册用户</h3>*/
/* 	 	</div>*/
/* */
/*     {% if users %}*/
/*   		<table class="table table-condensed table-striped table-hover">*/
/*         <thead>*/
/*           <tr>*/
/*             <th width="40%">用户名</th>*/
/*             <th width="25%" >注册来源</th>*/
/*             <th width="25%">注册时间</th>*/
/*           </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         	{% for user in users %}*/
/*         		<tr>*/
/*               <td>*/
/*               	{{ admin_macro.user_link(user) }}*/
/*               	<br>*/
/*               	<span class="text-muted text-sm">{{ user.email }}</span>*/
/*               </td>*/
/*               <td>*/
/*               	{{ dict_text('userType', user.type) }}*/
/*               </td>*/
/*               <td>*/
/*               	<span class="text-sm">{{user.createdTime | date('Y-n-d H:i:s') }}</span>*/
/*               	<br>*/
/*               	<a class="text-muted text-sm" href="http://www.baidu.com/s?wd={{ user.createdIp }}" target="_blank">{{user.createdIp}}</a>*/
/*               </td>*/
/*         		</tr>*/
/*         	{% endfor %}*/
/*         </tbody>*/
/*       </table>*/
/*     {% else %}*/
/*       <div class="empty">暂无新注册用户</div>*/
/*     {% endif %}*/
/* 	</div>*/
/* </div>*/
