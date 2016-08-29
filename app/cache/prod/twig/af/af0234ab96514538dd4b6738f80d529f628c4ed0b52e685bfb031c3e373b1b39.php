<?php

/* TopxiaAdminBundle:User:user-table-tr.html.twig */
class __TwigTemplate_afeca6b8f85db7d23772c3e6193af9e0a2cba3dfb3968e6fae378375959f3b54 extends Twig_Template
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
        $context["admin_macro"] = $this->loadTemplate("TopxiaAdminBundle::macro.html.twig", "TopxiaAdminBundle:User:user-table-tr.html.twig", 1);
        // line 2
        echo "<tr id=\"user-table-tr-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "html", null, true);
        echo "\">
  <td>
    <strong>";
        // line 4
        echo $context["admin_macro"]->getuser_link((isset($context["user"]) ? $context["user"] : null));
        echo "</strong>
    ";
        // line 5
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "locked", array())) {
            // line 6
            echo "      <label class=\"label label-danger\">禁</label>
    ";
        }
        // line 8
        echo "
    <br>
    <span class=\"text-muted text-sm\">
      ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "roles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 12
            echo "        ";
            echo $this->env->getExtension('topxia_web_twig')->getDictText("userRole", $context["role"]);
            echo "
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    </span>
  </td>

  <td>
    ";
        // line 18
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "verifiedMobile", array())) {
            // line 19
            echo "      ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "verifiedMobile", array()), "html", null, true);
            echo "<span class=\"text-success\">(已绑定)</span>
    ";
        } elseif ($this->getAttribute(        // line 20
(isset($context["profile"]) ? $context["profile"] : null), "mobile", array())) {
            // line 21
            echo "      ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "mobile", array()), "html", null, true);
            echo "<span class=\"text-danger\">(未绑定)</span>
    ";
        } else {
            // line 23
            echo "       -- 
    ";
        }
        // line 25
        echo "  </td>

  <td>
    ";
        // line 28
        $context["emailArr"] = twig_split_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array()), "@");
        // line 29
        echo "    ";
        if (($this->getAttribute((isset($context["emailArr"]) ? $context["emailArr"] : null), 1, array(), "array") != "edusoho.net")) {
            // line 30
            echo "      ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array()), "html", null, true);
            echo "
    ";
        } else {
            // line 32
            echo "      --
    ";
        }
        // line 34
        echo "    
    <br>
    ";
        // line 36
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "emailVerified", array())) {
            // line 37
            echo "      <label class=\"label label-success\" title=\"该Email地址已验证\">已验证</label>
    ";
        }
        // line 39
        echo "  </td>

  <td>
    <span class=\"text-sm\">";
        // line 42
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "createdTime", array()), "Y-n-d H:i:s"), "html", null, true);
        echo "</span>
    <br>
    <span class=\"text-muted text-sm\">
    <a class=\"text-muted text-sm\" href=\"http://www.baidu.com/s?wd=";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "createdIp", array()), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "createdIp", array()), "html", null, true);
        echo "</a>
    ";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getConvertIP($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "createdIp", array())), "html", null, true);
        echo "
  </span>
    <span></span>
  </td>
  <td>
    <span class=\"text-sm\">
      ";
        // line 52
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "loginTime", array()) == 0)) {
            // line 53
            echo "       --
      ";
        } else {
            // line 55
            echo "        ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "loginTime", array()), "Y-n-d H:i:s"), "html", null, true);
            echo "
      ";
        }
        // line 57
        echo "    </span>
    <br>
    <span class=\"text-muted text-sm\">
    <a class=\"text-muted text-sm\" href=\"http://www.baidu.com/s?wd=";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "loginIp", array()), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "loginIp", array()), "html", null, true);
        echo "</a>
    ";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getConvertIP($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "loginIp", array())), "html", null, true);
        echo "
  </span>
  </td>
  <td>
    <div class=\"btn-group\">
      <a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_show", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "\" data-url=\"\" class=\"btn btn-default btn-sm\">查看</a>
      <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
        <span class=\"caret\"></span>
      </a>
      <ul class=\"dropdown-menu\">
        <li><a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_edit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "\">编辑用户信息</a></li>

        ";
        // line 73
        if (!twig_in_filter("ROLE_SUPER_ADMIN", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "roles", array()))) {
            // line 74
            echo "            ";
            if (twig_in_filter("ROLE_SUPER_ADMIN", $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "roles", array()))) {
                // line 75
                echo "                  <li></li>
             ";
            } else {
                // line 77
                echo "                   <li><a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_roles", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
                echo "\">设置用户组</a></li>
            ";
            }
            // line 79
            echo "       ";
        } else {
            // line 80
            echo "                   <li><a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_roles", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
            echo "\">设置用户组</a></li>
        ";
        }
        // line 82
        echo "
        ";
        // line 83
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 84
            echo "
        <li><a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_avatar", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
            echo "\">修改用户头像</a></li>

        ";
            // line 88
            echo "
        ";
        }
        // line 90
        echo "
          ";
        // line 92
        echo "         ";
        if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
            // line 93
            echo "
              <li><a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_exeternal_roles", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
            echo "\">设置用户角色</a></li>

        ";
        }
        // line 97
        echo "
        <li><a class=\"send-emailverify-email\" href=\"javascript:\" data-url=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_send_emailverify_email", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "\">发送Email验证邮件</a></li>
        ";
        // line 99
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "locked", array())) {
            // line 100
            echo "          <li><a class=\"unlock-user\" href=\"javascript:\" title=\"解禁用户";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nickname", array()), "html", null, true);
            echo "\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_unlock", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
            echo "\">解禁用户</a></li>
        ";
        } else {
            // line 102
            echo "              ";
            if (!twig_in_filter("ROLE_SUPER_ADMIN", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "roles", array()))) {
                // line 103
                echo "                    ";
                if (twig_in_filter("ROLE_SUPER_ADMIN", $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "roles", array()))) {
                    // line 104
                    echo "                          <li></li>
                           ";
                } else {
                    // line 106
                    echo "                            <li><a class=\"lock-user\" href=\"javascript:\" title=\"封禁用户";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nickname", array()), "html", null, true);
                    echo "\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_lock", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
                    echo "\">封禁用户</a></li>
                    ";
                }
                // line 108
                echo "               ";
            } else {
                // line 109
                echo "                   <li><a class=\"lock-user\" href=\"javascript:\" title=\"封禁用户";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nickname", array()), "html", null, true);
                echo "\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_user_lock", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
                echo "\">封禁用户</a></li>
              ";
            }
            // line 111
            echo "        ";
        }
        // line 112
        echo "      </ul>
    </div>
  </td>
</tr>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:User:user-table-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 112,  282 => 111,  274 => 109,  271 => 108,  263 => 106,  259 => 104,  256 => 103,  253 => 102,  245 => 100,  243 => 99,  239 => 98,  236 => 97,  230 => 94,  227 => 93,  224 => 92,  221 => 90,  217 => 88,  212 => 85,  209 => 84,  207 => 83,  204 => 82,  198 => 80,  195 => 79,  189 => 77,  185 => 75,  182 => 74,  180 => 73,  175 => 71,  167 => 66,  159 => 61,  153 => 60,  148 => 57,  142 => 55,  138 => 53,  136 => 52,  127 => 46,  121 => 45,  115 => 42,  110 => 39,  106 => 37,  104 => 36,  100 => 34,  96 => 32,  90 => 30,  87 => 29,  85 => 28,  80 => 25,  76 => 23,  70 => 21,  68 => 20,  63 => 19,  61 => 18,  55 => 14,  46 => 12,  42 => 11,  37 => 8,  33 => 6,  31 => 5,  27 => 4,  21 => 2,  19 => 1,);
    }
}
/* {% import 'TopxiaAdminBundle::macro.html.twig' as admin_macro %}*/
/* <tr id="user-table-tr-{{ user.id }}">*/
/*   <td>*/
/*     <strong>{{ admin_macro.user_link(user) }}</strong>*/
/*     {% if user.locked %}*/
/*       <label class="label label-danger">禁</label>*/
/*     {% endif %}*/
/* */
/*     <br>*/
/*     <span class="text-muted text-sm">*/
/*       {% for role in user.roles %}*/
/*         {{ dict_text('userRole', role) }}*/
/*       {% endfor %}*/
/*     </span>*/
/*   </td>*/
/* */
/*   <td>*/
/*     {% if user.verifiedMobile %}*/
/*       {{ user.verifiedMobile }}<span class="text-success">(已绑定)</span>*/
/*     {% elseif profile.mobile %}*/
/*       {{ profile.mobile }}<span class="text-danger">(未绑定)</span>*/
/*     {% else %}*/
/*        -- */
/*     {% endif %}*/
/*   </td>*/
/* */
/*   <td>*/
/*     {% set emailArr = user.email|split('@') %}*/
/*     {% if emailArr[1] != 'edusoho.net' %}*/
/*       {{ user.email }}*/
/*     {% else %}*/
/*       --*/
/*     {% endif %}*/
/*     */
/*     <br>*/
/*     {% if user.emailVerified %}*/
/*       <label class="label label-success" title="该Email地址已验证">已验证</label>*/
/*     {% endif %}*/
/*   </td>*/
/* */
/*   <td>*/
/*     <span class="text-sm">{{ user.createdTime|date('Y-n-d H:i:s') }}</span>*/
/*     <br>*/
/*     <span class="text-muted text-sm">*/
/*     <a class="text-muted text-sm" href="http://www.baidu.com/s?wd={{ user.createdIp }}" target="_blank">{{ user.createdIp }}</a>*/
/*     {{convertIP(user.createdIp)}}*/
/*   </span>*/
/*     <span></span>*/
/*   </td>*/
/*   <td>*/
/*     <span class="text-sm">*/
/*       {% if user.loginTime == 0 %}*/
/*        --*/
/*       {% else %}*/
/*         {{ user.loginTime|date('Y-n-d H:i:s') }}*/
/*       {% endif %}*/
/*     </span>*/
/*     <br>*/
/*     <span class="text-muted text-sm">*/
/*     <a class="text-muted text-sm" href="http://www.baidu.com/s?wd={{ user.loginIp }}" target="_blank">{{ user.loginIp }}</a>*/
/*     {{convertIP(user.loginIp)}}*/
/*   </span>*/
/*   </td>*/
/*   <td>*/
/*     <div class="btn-group">*/
/*       <a href="#modal" data-toggle="modal" data-url="{{ path('admin_user_show', {id:user.id}) }}" data-url="" class="btn btn-default btn-sm">查看</a>*/
/*       <a href="#" type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">*/
/*         <span class="caret"></span>*/
/*       </a>*/
/*       <ul class="dropdown-menu">*/
/*         <li><a href="#modal" data-toggle="modal" data-url="{{ path('admin_user_edit', {id:user.id}) }}">编辑用户信息</a></li>*/
/* */
/*         {% if 'ROLE_SUPER_ADMIN' not in app.user.roles %}*/
/*             {% if 'ROLE_SUPER_ADMIN' in user.roles %}*/
/*                   <li></li>*/
/*              {% else %}*/
/*                    <li><a href="#modal" data-toggle="modal" data-url="{{ path('admin_user_roles', {id:user.id}) }}">设置用户组</a></li>*/
/*             {% endif %}*/
/*        {% else %}*/
/*                    <li><a href="#modal" data-toggle="modal" data-url="{{ path('admin_user_roles', {id:user.id}) }}">设置用户组</a></li>*/
/*         {% endif %}*/
/* */
/*         {% if is_granted('ROLE_SUPER_ADMIN') %}*/
/* */
/*         <li><a href="#modal" data-toggle="modal" data-url="{{ path('admin_user_avatar', {id:user.id}) }}">修改用户头像</a></li>*/
/* */
/*         {#<li><a href="#modal" data-toggle="modal" data-url="{{ path('admin_user_change_password', {userId:user.id}) }}">修改密码</a></li>#}*/
/* */
/*         {% endif %}*/
/* */
/*           {# 新增动态的用户角色 #}*/
/*          {% if is_granted('ROLE_SUPER_ADMIN') %}*/
/* */
/*               <li><a href="#modal" data-toggle="modal" data-url="{{ path('admin_user_exeternal_roles', {id:user.id}) }}">设置用户角色</a></li>*/
/* */
/*         {% endif %}*/
/* */
/*         <li><a class="send-emailverify-email" href="javascript:" data-url="{{ path('admin_user_send_emailverify_email', {id:user.id}) }}">发送Email验证邮件</a></li>*/
/*         {% if user.locked %}*/
/*           <li><a class="unlock-user" href="javascript:" title="解禁用户{{ user.nickname }}" data-url="{{ path('admin_user_unlock', {id:user.id }) }}">解禁用户</a></li>*/
/*         {% else %}*/
/*               {% if 'ROLE_SUPER_ADMIN' not in app.user.roles %}*/
/*                     {% if 'ROLE_SUPER_ADMIN' in user.roles %}*/
/*                           <li></li>*/
/*                            {% else %}*/
/*                             <li><a class="lock-user" href="javascript:" title="封禁用户{{ user.nickname }}" data-url="{{ path('admin_user_lock', {id:user.id}) }}">封禁用户</a></li>*/
/*                     {% endif %}*/
/*                {% else %}*/
/*                    <li><a class="lock-user" href="javascript:" title="封禁用户{{ user.nickname }}" data-url="{{ path('admin_user_lock', {id:user.id}) }}">封禁用户</a></li>*/
/*               {% endif %}*/
/*         {% endif %}*/
/*       </ul>*/
/*     </div>*/
/*   </td>*/
/* </tr>*/
/* */
/* */
