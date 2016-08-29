<?php

/* TopxiaAdminBundle:User:show-modal.html.twig */
class __TwigTemplate_493911b8219d169c379377ff42945564e8753a5b2fe54fc15be87a5835f0ba6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaAdminBundle:User:show-modal.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "个人详细信息";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
<table class=\"table table-striped table-condenseda table-bordered\">
  <tr>
    <th width=\"25%\">用户名</th>
    <td width=\"75%\">
      <a class=\"pull-right\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "\" target=\"_blank\">个人主页</a>
      ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nickname", array()), "html", null, true);
        echo "
    </td>
  </tr>

  <tr>
    <th>Email</th>
    <td>
      ";
        // line 19
        $context["emailArr"] = twig_split_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array()), "@");
        // line 20
        echo "      ";
        if (($this->getAttribute((isset($context["emailArr"]) ? $context["emailArr"] : null), 1, array(), "array") != "edusoho.net")) {
            // line 21
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array()), "html", null, true);
            echo "
      ";
        } else {
            // line 23
            echo "        暂无
      ";
        }
        // line 25
        echo "    </td>
  </tr>

  <tr>
    <th>用户组</th>
    <td>
      ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "roles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 32
            echo "        ";
            echo $this->env->getExtension('topxia_web_twig')->getDictText("userRole", $context["role"]);
            echo "
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "    </td>
  </tr>

  <tr>
    <th>注册时间/IP</th>
    <td>
      ";
        // line 40
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "createdTime", array()), "Y-n-d H:i:s"), "html", null, true);
        echo "
      /
      ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "createdIp", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getConvertIP($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "createdIp", array())), "html", null, true);
        echo "
    </td>
  </tr>

  <tr>
    <th>最近登录时间/IP</th>
    <td> 
      ";
        // line 49
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "loginTime", array()) == 0)) {
            // line 50
            echo "          --
      ";
        } else {
            // line 52
            echo "          ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "loginTime", array()), "Y-n-d H:i:s"), "html", null, true);
            echo "
      ";
        }
        // line 54
        echo "      ";
        if ( !twig_test_empty((($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "loginIp", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "loginIp", array()))) : ("")))) {
            // line 55
            echo "           / ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "loginIp", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getConvertIP($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "loginIp", array())), "html", null, true);
            echo "
      ";
        }
        // line 57
        echo "     </td>
  </tr>

  <tr>
    <th>姓名</th>
    <td>
      ";
        // line 63
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "truename", array())) {
            // line 64
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "truename", array()), "html", null, true);
            echo "
      ";
        } else {
            // line 66
            echo "        暂无
      ";
        }
        // line 68
        echo "    </td>
  </tr>

  <tr>
    <th>性别</th>
    <td>
      ";
        // line 74
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "gender", array())) {
            // line 75
            echo "        ";
            if (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "gender", array()) == "male")) {
                echo "男性";
            }
            // line 76
            echo "        ";
            if (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "gender", array()) == "female")) {
                echo "女性";
            }
            // line 77
            echo "        ";
            if (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "gender", array()) == "secret")) {
                echo "秘密";
            }
            // line 78
            echo "      ";
        } else {
            // line 79
            echo "        暂无
      ";
        }
        // line 81
        echo "    </td>
  </tr>

";
        // line 94
        echo " 
   <tr>
    <th>身份证号</th>
    <td>
      ";
        // line 98
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "idcard", array())) {
            // line 99
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "idcard", array()), "html", null, true);
            echo "
      ";
        } else {
            // line 101
            echo "        暂无
      ";
        }
        // line 103
        echo "    </td>
  </tr>

  <tr>
    <th>手机号码</th>
    <td>
      ";
        // line 109
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "verifiedMobile", array())) {
            // line 110
            echo "        ";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "verifiedMobile", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "verifiedMobile", array()), "")) : ("")), "html", null, true);
            echo "<span class=\"text-success\">(已绑定)</span> 
      ";
        } elseif ($this->getAttribute(        // line 111
(isset($context["profile"]) ? $context["profile"] : null), "mobile", array())) {
            // line 112
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "mobile", array()), "html", null, true);
            echo "<span class=\"text-danger\">(未绑定)</span>
      ";
        } else {
            // line 114
            echo "        ";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "mobile", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "mobile", array()), "暂无")) : ("暂无")), "html", null, true);
            echo "
      ";
        }
        // line 116
        echo "    </td>
  </tr>

";
        // line 140
        echo "
  <tr>
    <th>公司</th>
    <td>
      ";
        // line 144
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "company", array())) {
            // line 145
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "company", array()), "html", null, true);
            echo "
      ";
        } else {
            // line 147
            echo "        暂无
      ";
        }
        // line 149
        echo "    </td>
  </tr>

  <tr>
    <th>职务</th>
    <td>
      ";
        // line 155
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "job", array())) {
            // line 156
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "job", array()), "html", null, true);
            echo "
      ";
        } else {
            // line 158
            echo "        暂无
      ";
        }
        // line 160
        echo "    </td>
  </tr>


  <tr>
    <th>头衔</th>
    <td>
    ";
        // line 167
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "title", array())) {
            // line 168
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "title", array()), "html", null, true);
            echo "
      ";
        } else {
            // line 170
            echo "        暂无
      ";
        }
        // line 172
        echo "    </td>
  </tr>

  <tr>
    <th>个人签名</th>
    <td>
    ";
        // line 178
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "signature", array())) {
            // line 179
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "signature", array()), "html", null, true);
            echo "
      ";
        } else {
            // line 181
            echo "        暂无
      ";
        }
        // line 183
        echo "    </td>
  </tr>

  <tr>
    <th>自我介绍</th>
    <td>
    ";
        // line 189
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "about", array())) {
            // line 190
            echo "        ";
            echo $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "about", array());
            echo "
      ";
        } else {
            // line 192
            echo "        暂无
      ";
        }
        // line 194
        echo "    </td>
  </tr>

  <tr>
    <th>个人网站</th>
    <td>
      ";
        // line 200
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "site", array())) {
            // line 201
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "site", array()), "html", null, true);
            echo "
      ";
        } else {
            // line 203
            echo "        暂无
      ";
        }
        // line 205
        echo "    </td>
  </tr>

  <tr>
    <th>微博</th>
    <td>
      ";
        // line 211
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "weibo", array())) {
            // line 212
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "weibo", array()), "html", null, true);
            echo "
      ";
        } else {
            // line 214
            echo "        暂无
      ";
        }
        // line 216
        echo "    </td>
  </tr>

  <tr>
    <th>微信</th>
    <td>
      ";
        // line 222
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "weixin", array())) {
            // line 223
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "weixin", array()), "html", null, true);
            echo "
      ";
        } else {
            // line 225
            echo "        暂无
      ";
        }
        // line 227
        echo "    </td>
  </tr>

  <tr>
    <th>QQ</th>
    <td>
      ";
        // line 233
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "qq", array())) {
            // line 234
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "qq", array()), "html", null, true);
            echo "
      ";
        } else {
            // line 236
            echo "        暂无
      ";
        }
        // line 238
        echo "    </td>
  </tr>

</table>
<hr>
<table class=\"table table-striped table-condenseda table-bordered\">
    ";
        // line 244
        if ((isset($context["fields"]) ? $context["fields"] : null)) {
            // line 245
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 246
                echo "    <tr>
        <th width=\"25%\">";
                // line 247
                echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "title", array()), "html", null, true);
                echo "</th>
        <td>
          ";
                // line 249
                if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array")) {
                    // line 250
                    echo "            ";
                    if (($this->getAttribute($context["field"], "type", array()) == "date")) {
                        // line 251
                        echo "            ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array"), "Y-m-d"), "html", null, true);
                        echo "
            ";
                    } else {
                        // line 253
                        echo "            ";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array"), "html", null, true);
                        echo "
            ";
                    }
                    // line 255
                    echo "          ";
                } else {
                    // line 256
                    echo "            暂无
          ";
                }
                // line 258
                echo "        </td>
    </tr>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 261
            echo "  ";
        }
        // line 262
        echo "  </table>
";
    }

    // line 265
    public function block_footer($context, array $blocks = array())
    {
        // line 266
        echo "  <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">关闭</button>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:User:show-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  498 => 266,  495 => 265,  490 => 262,  487 => 261,  479 => 258,  475 => 256,  472 => 255,  466 => 253,  460 => 251,  457 => 250,  455 => 249,  450 => 247,  447 => 246,  442 => 245,  440 => 244,  432 => 238,  428 => 236,  422 => 234,  420 => 233,  412 => 227,  408 => 225,  402 => 223,  400 => 222,  392 => 216,  388 => 214,  382 => 212,  380 => 211,  372 => 205,  368 => 203,  362 => 201,  360 => 200,  352 => 194,  348 => 192,  342 => 190,  340 => 189,  332 => 183,  328 => 181,  322 => 179,  320 => 178,  312 => 172,  308 => 170,  302 => 168,  300 => 167,  291 => 160,  287 => 158,  281 => 156,  279 => 155,  271 => 149,  267 => 147,  261 => 145,  259 => 144,  253 => 140,  248 => 116,  242 => 114,  236 => 112,  234 => 111,  229 => 110,  227 => 109,  219 => 103,  215 => 101,  209 => 99,  207 => 98,  201 => 94,  196 => 81,  192 => 79,  189 => 78,  184 => 77,  179 => 76,  174 => 75,  172 => 74,  164 => 68,  160 => 66,  154 => 64,  152 => 63,  144 => 57,  136 => 55,  133 => 54,  127 => 52,  123 => 50,  121 => 49,  109 => 42,  104 => 40,  96 => 34,  87 => 32,  83 => 31,  75 => 25,  71 => 23,  65 => 21,  62 => 20,  60 => 19,  50 => 12,  46 => 11,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% block title %}个人详细信息{% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* <table class="table table-striped table-condenseda table-bordered">*/
/*   <tr>*/
/*     <th width="25%">用户名</th>*/
/*     <td width="75%">*/
/*       <a class="pull-right" href="{{ path('user_show', {id:user.id}) }}" target="_blank">个人主页</a>*/
/*       {{ user.nickname }}*/
/*     </td>*/
/*   </tr>*/
/* */
/*   <tr>*/
/*     <th>Email</th>*/
/*     <td>*/
/*       {% set emailArr = user.email|split('@') %}*/
/*       {% if emailArr[1] != 'edusoho.net' %}*/
/*         {{ user.email }}*/
/*       {% else %}*/
/*         暂无*/
/*       {% endif %}*/
/*     </td>*/
/*   </tr>*/
/* */
/*   <tr>*/
/*     <th>用户组</th>*/
/*     <td>*/
/*       {% for role in user.roles %}*/
/*         {{ dict_text('userRole', role) }}*/
/*       {% endfor %}*/
/*     </td>*/
/*   </tr>*/
/* */
/*   <tr>*/
/*     <th>注册时间/IP</th>*/
/*     <td>*/
/*       {{ user.createdTime|date('Y-n-d H:i:s') }}*/
/*       /*/
/*       {{ user.createdIp }} {{convertIP(user.createdIp)}}*/
/*     </td>*/
/*   </tr>*/
/* */
/*   <tr>*/
/*     <th>最近登录时间/IP</th>*/
/*     <td> */
/*       {% if user.loginTime == 0 %}*/
/*           --*/
/*       {% else %}*/
/*           {{ user.loginTime|date('Y-n-d H:i:s') }}*/
/*       {% endif %}*/
/*       {% if user.loginIp|default is not empty %}*/
/*            / {{ user.loginIp }} {{convertIP(user.loginIp)}}*/
/*       {% endif %}*/
/*      </td>*/
/*   </tr>*/
/* */
/*   <tr>*/
/*     <th>姓名</th>*/
/*     <td>*/
/*       {% if profile.truename %}*/
/*         {{ profile.truename }}*/
/*       {% else %}*/
/*         暂无*/
/*       {% endif %}*/
/*     </td>*/
/*   </tr>*/
/* */
/*   <tr>*/
/*     <th>性别</th>*/
/*     <td>*/
/*       {% if profile.gender %}*/
/*         {% if profile.gender == 'male' %}男性{% endif %}*/
/*         {% if profile.gender == 'female' %}女性{% endif %}*/
/*         {% if profile.gender == 'secret' %}秘密{% endif %}*/
/*       {% else %}*/
/*         暂无*/
/*       {% endif %}*/
/*     </td>*/
/*   </tr>*/
/* */
/* {#   <tr>*/
/*     <th>类型</th>*/
/*     <td>*/
/*       {% if profile.iam %}*/
/*         {{ profile.iam }}*/
/*       {% else %}*/
/*         暂无*/
/*       {% endif %}*/
/*     </td>*/
/*   </tr> #}*/
/*  */
/*    <tr>*/
/*     <th>身份证号</th>*/
/*     <td>*/
/*       {% if profile.idcard %}*/
/*         {{ profile.idcard }}*/
/*       {% else %}*/
/*         暂无*/
/*       {% endif %}*/
/*     </td>*/
/*   </tr>*/
/* */
/*   <tr>*/
/*     <th>手机号码</th>*/
/*     <td>*/
/*       {% if user.verifiedMobile %}*/
/*         {{ user.verifiedMobile|default('')}}<span class="text-success">(已绑定)</span> */
/*       {% elseif profile.mobile %}*/
/*         {{ profile.mobile }}<span class="text-danger">(未绑定)</span>*/
/*       {% else %}*/
/*         {{ profile.mobile|default('暂无') }}*/
/*       {% endif %}*/
/*     </td>*/
/*   </tr>*/
/* */
/* {#   <tr>*/
/*     <th>学校</th>*/
/*     <td>*/
/*       {% if profile.school %}*/
/*         {{ profile.school }}*/
/*       {% else %}*/
/*         暂无*/
/*       {% endif %}*/
/*     </td>*/
/*   </tr>*/
/* */
/*   <tr>*/
/*     <th>班级</th>*/
/*     <td>*/
/*       {% if profile.class %}*/
/*         {{ profile.class }}*/
/*       {% else %}*/
/*         暂无*/
/*       {% endif %}*/
/*     </td>*/
/*   </tr> #}*/
/* */
/*   <tr>*/
/*     <th>公司</th>*/
/*     <td>*/
/*       {% if profile.company %}*/
/*         {{ profile.company }}*/
/*       {% else %}*/
/*         暂无*/
/*       {% endif %}*/
/*     </td>*/
/*   </tr>*/
/* */
/*   <tr>*/
/*     <th>职务</th>*/
/*     <td>*/
/*       {% if profile.job %}*/
/*         {{ profile.job }}*/
/*       {% else %}*/
/*         暂无*/
/*       {% endif %}*/
/*     </td>*/
/*   </tr>*/
/* */
/* */
/*   <tr>*/
/*     <th>头衔</th>*/
/*     <td>*/
/*     {% if profile.title %}*/
/*         {{ profile.title }}*/
/*       {% else %}*/
/*         暂无*/
/*       {% endif %}*/
/*     </td>*/
/*   </tr>*/
/* */
/*   <tr>*/
/*     <th>个人签名</th>*/
/*     <td>*/
/*     {% if profile.signature %}*/
/*         {{ profile.signature }}*/
/*       {% else %}*/
/*         暂无*/
/*       {% endif %}*/
/*     </td>*/
/*   </tr>*/
/* */
/*   <tr>*/
/*     <th>自我介绍</th>*/
/*     <td>*/
/*     {% if profile.about %}*/
/*         {{ profile.about | raw }}*/
/*       {% else %}*/
/*         暂无*/
/*       {% endif %}*/
/*     </td>*/
/*   </tr>*/
/* */
/*   <tr>*/
/*     <th>个人网站</th>*/
/*     <td>*/
/*       {% if profile.site %}*/
/*         {{ profile.site }}*/
/*       {% else %}*/
/*         暂无*/
/*       {% endif %}*/
/*     </td>*/
/*   </tr>*/
/* */
/*   <tr>*/
/*     <th>微博</th>*/
/*     <td>*/
/*       {% if profile.weibo %}*/
/*         {{ profile.weibo }}*/
/*       {% else %}*/
/*         暂无*/
/*       {% endif %}*/
/*     </td>*/
/*   </tr>*/
/* */
/*   <tr>*/
/*     <th>微信</th>*/
/*     <td>*/
/*       {% if profile.weixin %}*/
/*         {{ profile.weixin }}*/
/*       {% else %}*/
/*         暂无*/
/*       {% endif %}*/
/*     </td>*/
/*   </tr>*/
/* */
/*   <tr>*/
/*     <th>QQ</th>*/
/*     <td>*/
/*       {% if profile.qq %}*/
/*         {{ profile.qq }}*/
/*       {% else %}*/
/*         暂无*/
/*       {% endif %}*/
/*     </td>*/
/*   </tr>*/
/* */
/* </table>*/
/* <hr>*/
/* <table class="table table-striped table-condenseda table-bordered">*/
/*     {% if fields %}*/
/*   {% for field in fields %}*/
/*     <tr>*/
/*         <th width="25%">{{field.title}}</th>*/
/*         <td>*/
/*           {% if profile[field.fieldName] %}*/
/*             {% if field.type=="date"%}*/
/*             {{ profile[field.fieldName]|date("Y-m-d") }}*/
/*             {% else %}*/
/*             {{ profile[field.fieldName] }}*/
/*             {% endif %}*/
/*           {% else %}*/
/*             暂无*/
/*           {% endif %}*/
/*         </td>*/
/*     </tr>*/
/*   {% endfor %}*/
/*   {% endif %}*/
/*   </table>*/
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/*   <button type="button" class="btn btn-primary" data-dismiss="modal">关闭</button>*/
/* {% endblock %}*/
