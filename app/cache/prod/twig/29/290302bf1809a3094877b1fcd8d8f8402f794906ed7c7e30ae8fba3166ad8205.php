<?php

/* TopxiaWebBundle:CourseStudentManage:show-modal.html.twig */
class __TwigTemplate_ad122259f030e1df934808911d154c74b5fbf1a4be667922a27f7f3e6bb0cae0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:CourseStudentManage:show-modal.html.twig", 1);
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
\t<tr>
\t\t<th width=\"25%\">用户名</th>
\t\t<td width=\"75%\">
\t\t\t<a class=\"pull-right\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("user_show", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "\" target=\"_blank\">个人主页</a>
\t\t\t";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nickname", array()), "html", null, true);
        echo "
\t\t</td>
\t</tr>

\t<tr>
\t\t<th>Email</th>
\t\t<td>
\t\t  ";
        // line 19
        $context["emailArr"] = twig_split_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array()), "@");
        // line 20
        echo "\t      ";
        if (($this->getAttribute((isset($context["emailArr"]) ? $context["emailArr"] : null), 1, array(), "array") != "edusoho.net")) {
            // line 21
            echo "\t        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "email", array()), "html", null, true);
            echo "
\t      ";
        } else {
            // line 23
            echo "\t        暂无
\t      ";
        }
        // line 25
        echo "\t\t</td>
\t</tr>

\t<tr>
\t\t<th>姓名</th>
\t\t<td>
\t\t\t";
        // line 31
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "truename", array())) {
            // line 32
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "truename", array()), "html", null, true);
            echo "
\t\t\t";
        } else {
            // line 34
            echo "\t\t\t\t暂无
\t\t\t";
        }
        // line 36
        echo "\t\t</td>
\t</tr>

\t<tr>
\t\t<th>性别</th>
\t\t<td>
\t\t\t";
        // line 42
        if (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "gender", array()) == "mail")) {
            // line 43
            echo "\t\t\t\t男
\t\t\t";
        } elseif (($this->getAttribute(        // line 44
(isset($context["profile"]) ? $context["profile"] : null), "gender", array()) == "femail")) {
            // line 45
            echo "\t\t\t\t女
\t\t\t";
        } else {
            // line 47
            echo "\t\t\t\t暂无
\t\t\t";
        }
        // line 49
        echo "\t\t</td>
\t</tr>

\t<tr>
\t\t<th>公司</th>
\t\t<td>
\t\t\t";
        // line 55
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "company", array())) {
            // line 56
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "company", array()), "html", null, true);
            echo "
\t\t\t";
        } else {
            // line 58
            echo "\t\t\t\t暂无
\t\t\t";
        }
        // line 60
        echo "\t\t</td>
\t</tr>

\t<tr>
\t\t<th>职务</th>
\t\t<td>
\t\t\t";
        // line 66
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "job", array())) {
            // line 67
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "job", array()), "html", null, true);
            echo "
\t\t\t";
        } else {
            // line 69
            echo "\t\t\t\t暂无
\t\t\t";
        }
        // line 71
        echo "\t\t</td>
\t</tr>

\t<tr>
\t\t<th>头衔</th>
\t\t<td>
\t\t";
        // line 77
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "title", array())) {
            // line 78
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "title", array()), "html", null, true);
            echo "
\t\t\t";
        } else {
            // line 80
            echo "\t\t\t\t暂无
\t\t\t";
        }
        // line 82
        echo "\t\t</td>
\t</tr>

\t<tr>
\t\t<th>电话</th>
\t\t<td>
\t\t";
        // line 88
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "mobile", array())) {
            // line 89
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "mobile", array()), "html", null, true);
            echo "
\t\t\t";
        } else {
            // line 91
            echo "\t\t\t\t暂无
\t\t\t";
        }
        // line 93
        echo "\t\t</td>
\t</tr>

\t<tr>
\t\t<th>个人签名</th>
\t\t<td>
\t\t";
        // line 99
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "signature", array())) {
            // line 100
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "signature", array()), "html", null, true);
            echo "
\t\t\t";
        } else {
            // line 102
            echo "\t\t\t\t暂无
\t\t\t";
        }
        // line 104
        echo "\t\t</td>
\t</tr>

\t<tr>
\t\t<th>自我介绍</th>
\t\t<td>
\t\t";
        // line 110
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "about", array())) {
            // line 111
            echo "\t\t\t\t";
            echo $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "about", array());
            echo "
\t\t\t";
        } else {
            // line 113
            echo "\t\t\t\t暂无
\t\t\t";
        }
        // line 115
        echo "\t\t</td>
\t</tr>

\t<tr>
\t\t<th>个人网站</th>
\t\t<td>
\t\t\t";
        // line 121
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "site", array())) {
            // line 122
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "site", array()), "html", null, true);
            echo "
\t\t\t";
        } else {
            // line 124
            echo "\t\t\t\t暂无
\t\t\t";
        }
        // line 126
        echo "\t\t</td>
\t</tr>

\t<tr>
\t\t<th>微博</th>
\t\t<td>
\t\t\t";
        // line 132
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "weibo", array())) {
            // line 133
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "weibo", array()), "html", null, true);
            echo "
\t\t\t";
        } else {
            // line 135
            echo "\t\t\t\t暂无
\t\t\t";
        }
        // line 137
        echo "\t\t</td>
\t</tr>

\t<tr>
\t\t<th>微信</th>
\t\t<td>
\t\t\t";
        // line 143
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "weixin", array())) {
            // line 144
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "weixin", array()), "html", null, true);
            echo "
\t\t\t";
        } else {
            // line 146
            echo "\t\t\t\t暂无
\t\t\t";
        }
        // line 148
        echo "\t\t</td>
\t</tr>

\t<tr>
\t\t<th>QQ</th>
\t\t<td>
\t\t\t";
        // line 154
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "qq", array())) {
            // line 155
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "qq", array()), "html", null, true);
            echo "
\t\t\t";
        } else {
            // line 157
            echo "\t\t\t\t暂无
\t\t\t";
        }
        // line 159
        echo "\t\t</td>
\t</tr>\t
";
        // line 161
        if ((isset($context["userFields"]) ? $context["userFields"] : null)) {
            // line 162
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["userFields"]) ? $context["userFields"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["userField"]) {
                // line 163
                echo "\t<tr>
\t\t<th width=\"25%\">";
                // line 164
                echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "title", array()), "html", null, true);
                echo "</th>
\t\t<td>
\t\t\t";
                // line 166
                if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute($context["userField"], "fieldName", array()), array(), "array")) {
                    // line 167
                    echo "\t\t\t\t";
                    if (($this->getAttribute($context["userField"], "type", array()) == "date")) {
                        // line 168
                        echo "\t\t\t\t\t";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute($context["userField"], "fieldName", array()), array(), "array"), "Y-m-d"), "html", null, true);
                        echo "
\t\t\t\t";
                    } else {
                        // line 170
                        echo "\t\t\t\t\t";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute($context["userField"], "fieldName", array()), array(), "array"), "html", null, true);
                        echo "
\t\t\t\t";
                    }
                    // line 172
                    echo "\t\t  ";
                } else {
                    // line 173
                    echo "\t\t\t\t暂无
\t\t  ";
                }
                // line 175
                echo "\t\t</td>
\t</tr>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userField'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 178
            echo "  ";
        }
        // line 179
        echo "  </table>
</table>

";
    }

    // line 184
    public function block_footer($context, array $blocks = array())
    {
        // line 185
        echo "\t<button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">关闭</button>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseStudentManage:show-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  382 => 185,  379 => 184,  372 => 179,  369 => 178,  361 => 175,  357 => 173,  354 => 172,  348 => 170,  342 => 168,  339 => 167,  337 => 166,  332 => 164,  329 => 163,  324 => 162,  322 => 161,  318 => 159,  314 => 157,  308 => 155,  306 => 154,  298 => 148,  294 => 146,  288 => 144,  286 => 143,  278 => 137,  274 => 135,  268 => 133,  266 => 132,  258 => 126,  254 => 124,  248 => 122,  246 => 121,  238 => 115,  234 => 113,  228 => 111,  226 => 110,  218 => 104,  214 => 102,  208 => 100,  206 => 99,  198 => 93,  194 => 91,  188 => 89,  186 => 88,  178 => 82,  174 => 80,  168 => 78,  166 => 77,  158 => 71,  154 => 69,  148 => 67,  146 => 66,  138 => 60,  134 => 58,  128 => 56,  126 => 55,  118 => 49,  114 => 47,  110 => 45,  108 => 44,  105 => 43,  103 => 42,  95 => 36,  91 => 34,  85 => 32,  83 => 31,  75 => 25,  71 => 23,  65 => 21,  62 => 20,  60 => 19,  50 => 12,  46 => 11,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% block title %}个人详细信息{% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* <table class="table table-striped table-condenseda table-bordered">*/
/* 	<tr>*/
/* 		<th width="25%">用户名</th>*/
/* 		<td width="75%">*/
/* 			<a class="pull-right" href="{{ path('user_show', {id:user.id}) }}" target="_blank">个人主页</a>*/
/* 			{{ user.nickname }}*/
/* 		</td>*/
/* 	</tr>*/
/* */
/* 	<tr>*/
/* 		<th>Email</th>*/
/* 		<td>*/
/* 		  {% set emailArr = user.email|split('@') %}*/
/* 	      {% if emailArr[1] != 'edusoho.net' %}*/
/* 	        {{ user.email }}*/
/* 	      {% else %}*/
/* 	        暂无*/
/* 	      {% endif %}*/
/* 		</td>*/
/* 	</tr>*/
/* */
/* 	<tr>*/
/* 		<th>姓名</th>*/
/* 		<td>*/
/* 			{% if profile.truename %}*/
/* 				{{ profile.truename }}*/
/* 			{% else %}*/
/* 				暂无*/
/* 			{% endif %}*/
/* 		</td>*/
/* 	</tr>*/
/* */
/* 	<tr>*/
/* 		<th>性别</th>*/
/* 		<td>*/
/* 			{% if profile.gender == 'mail' %}*/
/* 				男*/
/* 			{% elseif profile.gender == 'femail' %}*/
/* 				女*/
/* 			{% else %}*/
/* 				暂无*/
/* 			{% endif %}*/
/* 		</td>*/
/* 	</tr>*/
/* */
/* 	<tr>*/
/* 		<th>公司</th>*/
/* 		<td>*/
/* 			{% if profile.company %}*/
/* 				{{ profile.company }}*/
/* 			{% else %}*/
/* 				暂无*/
/* 			{% endif %}*/
/* 		</td>*/
/* 	</tr>*/
/* */
/* 	<tr>*/
/* 		<th>职务</th>*/
/* 		<td>*/
/* 			{% if profile.job %}*/
/* 				{{ profile.job }}*/
/* 			{% else %}*/
/* 				暂无*/
/* 			{% endif %}*/
/* 		</td>*/
/* 	</tr>*/
/* */
/* 	<tr>*/
/* 		<th>头衔</th>*/
/* 		<td>*/
/* 		{% if profile.title %}*/
/* 				{{ profile.title }}*/
/* 			{% else %}*/
/* 				暂无*/
/* 			{% endif %}*/
/* 		</td>*/
/* 	</tr>*/
/* */
/* 	<tr>*/
/* 		<th>电话</th>*/
/* 		<td>*/
/* 		{% if profile.mobile %}*/
/* 				{{ profile.mobile }}*/
/* 			{% else %}*/
/* 				暂无*/
/* 			{% endif %}*/
/* 		</td>*/
/* 	</tr>*/
/* */
/* 	<tr>*/
/* 		<th>个人签名</th>*/
/* 		<td>*/
/* 		{% if profile.signature %}*/
/* 				{{ profile.signature }}*/
/* 			{% else %}*/
/* 				暂无*/
/* 			{% endif %}*/
/* 		</td>*/
/* 	</tr>*/
/* */
/* 	<tr>*/
/* 		<th>自我介绍</th>*/
/* 		<td>*/
/* 		{% if profile.about %}*/
/* 				{{ profile.about | raw }}*/
/* 			{% else %}*/
/* 				暂无*/
/* 			{% endif %}*/
/* 		</td>*/
/* 	</tr>*/
/* */
/* 	<tr>*/
/* 		<th>个人网站</th>*/
/* 		<td>*/
/* 			{% if profile.site %}*/
/* 				{{ profile.site }}*/
/* 			{% else %}*/
/* 				暂无*/
/* 			{% endif %}*/
/* 		</td>*/
/* 	</tr>*/
/* */
/* 	<tr>*/
/* 		<th>微博</th>*/
/* 		<td>*/
/* 			{% if profile.weibo %}*/
/* 				{{ profile.weibo }}*/
/* 			{% else %}*/
/* 				暂无*/
/* 			{% endif %}*/
/* 		</td>*/
/* 	</tr>*/
/* */
/* 	<tr>*/
/* 		<th>微信</th>*/
/* 		<td>*/
/* 			{% if profile.weixin %}*/
/* 				{{ profile.weixin }}*/
/* 			{% else %}*/
/* 				暂无*/
/* 			{% endif %}*/
/* 		</td>*/
/* 	</tr>*/
/* */
/* 	<tr>*/
/* 		<th>QQ</th>*/
/* 		<td>*/
/* 			{% if profile.qq %}*/
/* 				{{ profile.qq }}*/
/* 			{% else %}*/
/* 				暂无*/
/* 			{% endif %}*/
/* 		</td>*/
/* 	</tr>	*/
/* {% if userFields %}*/
/* 	{% for userField in userFields %}*/
/* 	<tr>*/
/* 		<th width="25%">{{userField.title}}</th>*/
/* 		<td>*/
/* 			{% if profile[userField.fieldName] %}*/
/* 				{% if userField.type=="date"%}*/
/* 					{{ profile[userField.fieldName]|date("Y-m-d") }}*/
/* 				{% else %}*/
/* 					{{ profile[userField.fieldName] }}*/
/* 				{% endif %}*/
/* 		  {% else %}*/
/* 				暂无*/
/* 		  {% endif %}*/
/* 		</td>*/
/* 	</tr>*/
/*   {% endfor %}*/
/*   {% endif %}*/
/*   </table>*/
/* </table>*/
/* */
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/* 	<button type="button" class="btn btn-primary" data-dismiss="modal">关闭</button>*/
/* {% endblock %}*/
