<?php

/* TopxiaWebBundle:CourseStudentManage:defined-show-modal.html.twig */
class __TwigTemplate_279c9a53f48a5e2735a5d6f45f1bdb8d2adb31ec1ba7d6cb81bdae766a13ff45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:CourseStudentManage:defined-show-modal.html.twig", 1);
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
\t";
        // line 8
        if ((isset($context["userinfoFields"]) ? $context["userinfoFields"] : null)) {
            // line 9
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["userinfoFields"]) ? $context["userinfoFields"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 10
                echo "\t\t";
                if (($context["field"] == "truename")) {
                    // line 11
                    echo "\t\t<tr>
\t\t\t<th width=\"25%\">姓名</th>
\t\t\t<td>
\t\t\t\t";
                    // line 14
                    if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "truename", array())) {
                        // line 15
                        echo "\t\t\t\t\t";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "truename", array()), "html", null, true);
                        echo "
\t\t\t\t";
                    } else {
                        // line 17
                        echo "\t\t\t\t\t暂无
\t\t\t\t";
                    }
                    // line 19
                    echo "\t\t\t</td>
\t\t</tr>
\t\t";
                } elseif ((                // line 21
$context["field"] == "gender")) {
                    // line 22
                    echo "\t\t<tr>
\t\t\t<th width=\"25%\">性别</th>
\t\t\t";
                    // line 24
                    if (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "gender", array()) == "male")) {
                        // line 25
                        echo "\t\t\t\t<td>男</td>
\t\t\t";
                    } elseif (($this->getAttribute(                    // line 26
(isset($context["profile"]) ? $context["profile"] : null), "gender", array()) == "female")) {
                        // line 27
                        echo "\t\t\t\t<td>女</td>
\t\t\t";
                    } elseif (($this->getAttribute(                    // line 28
(isset($context["profile"]) ? $context["profile"] : null), "gender", array()) == "secret")) {
                        // line 29
                        echo "\t\t\t\t<td>暂无</td>
\t\t\t";
                    }
                    // line 31
                    echo "\t\t</tr>
\t\t";
                } elseif ((                // line 32
$context["field"] == "job")) {
                    // line 33
                    echo "\t\t<tr>
\t\t\t<th width=\"25%\">职务</th>
\t\t\t<td>
\t\t\t\t";
                    // line 36
                    if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "job", array())) {
                        // line 37
                        echo "\t\t\t\t\t";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "job", array()), "html", null, true);
                        echo "
\t\t\t\t";
                    } else {
                        // line 39
                        echo "\t\t\t\t\t暂无
\t\t\t\t";
                    }
                    // line 41
                    echo "\t\t\t</td>
\t\t</tr>
\t\t";
                } elseif ((                // line 43
$context["field"] == "company")) {
                    // line 44
                    echo "\t\t<tr>
\t\t\t<th width=\"25%\">公司</th>
\t\t\t<td>
\t\t\t\t";
                    // line 47
                    if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "company", array())) {
                        // line 48
                        echo "\t\t\t\t\t";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "company", array()), "html", null, true);
                        echo "
\t\t\t\t";
                    } else {
                        // line 50
                        echo "\t\t\t\t\t暂无
\t\t\t\t";
                    }
                    // line 52
                    echo "\t\t\t</td>
\t\t</tr>
\t\t";
                } elseif ((                // line 54
$context["field"] == "mobile")) {
                    // line 55
                    echo "\t\t<tr>
\t\t\t<th>手机号码</th>
\t\t\t<td>
\t\t\t\t";
                    // line 58
                    if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "mobile", array())) {
                        // line 59
                        echo "\t\t\t\t\t";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "mobile", array()), "html", null, true);
                        echo "
\t\t\t\t";
                    } else {
                        // line 61
                        echo "\t\t\t\t\t暂无
\t\t\t\t";
                    }
                    // line 63
                    echo "\t\t\t</td>
\t\t</tr>
\t\t";
                } elseif ((                // line 65
$context["field"] == "title")) {
                    // line 66
                    echo "\t\t<tr>
\t\t\t<th>头衔</th>
\t\t\t<td>
\t\t\t\t";
                    // line 69
                    if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "title", array())) {
                        // line 70
                        echo "\t\t\t\t\t";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "title", array()), "html", null, true);
                        echo "
\t\t\t\t";
                    } else {
                        // line 72
                        echo "\t\t\t\t\t暂无
\t\t\t\t";
                    }
                    // line 74
                    echo "\t\t\t</td>
\t\t</tr>
\t\t";
                } elseif ((                // line 76
$context["field"] == "signature")) {
                    // line 77
                    echo "\t\t<tr>
\t\t\t<th>个人签名</th>
\t\t\t<td>
\t\t\t\t";
                    // line 80
                    if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "signature", array())) {
                        // line 81
                        echo "\t\t\t\t\t";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "signature", array()), "html", null, true);
                        echo "
\t\t\t\t";
                    } else {
                        // line 83
                        echo "\t\t\t\t\t暂无
\t\t\t\t";
                    }
                    // line 85
                    echo "\t\t\t</td>
\t\t</tr>
\t\t";
                } elseif ((                // line 87
$context["field"] == "about")) {
                    // line 88
                    echo "\t\t<tr>
\t\t\t<th>自我介绍</th>
\t\t\t<td>
\t\t\t\t";
                    // line 91
                    if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "about", array())) {
                        // line 92
                        echo "\t\t\t\t\t";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "about", array()), "html", null, true);
                        echo "
\t\t\t\t";
                    } else {
                        // line 94
                        echo "\t\t\t\t\t暂无
\t\t\t\t";
                    }
                    // line 96
                    echo "\t\t\t</td>
\t\t</tr>
\t\t";
                } elseif ((                // line 98
$context["field"] == "weibo")) {
                    // line 99
                    echo "\t\t<tr>
\t\t\t<th>微博</th>
\t\t\t<td>
\t\t\t\t";
                    // line 102
                    if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "weibo", array())) {
                        // line 103
                        echo "\t\t\t\t\t";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "weibo", array()), "html", null, true);
                        echo "
\t\t\t\t";
                    } else {
                        // line 105
                        echo "\t\t\t\t\t暂无
\t\t\t\t";
                    }
                    // line 107
                    echo "\t\t\t</td>
\t\t</tr>
\t\t";
                } elseif ((                // line 109
$context["field"] == "weixin")) {
                    // line 110
                    echo "\t\t<tr>
\t\t\t<th>微信</th>
\t\t\t<td>
\t\t\t\t";
                    // line 113
                    if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "weixin", array())) {
                        // line 114
                        echo "\t\t\t\t\t";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "weixin", array()), "html", null, true);
                        echo "
\t\t\t\t";
                    } else {
                        // line 116
                        echo "\t\t\t\t\t暂无
\t\t\t\t";
                    }
                    // line 118
                    echo "\t\t\t</td>
\t\t</tr>
\t\t";
                } elseif ((                // line 120
$context["field"] == "qq")) {
                    // line 121
                    echo "\t\t<tr>
\t\t\t<th>QQ</th>
\t\t\t<td>
\t\t\t\t";
                    // line 124
                    if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "qq", array())) {
                        // line 125
                        echo "\t\t\t\t\t";
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "qq", array()), "html", null, true);
                        echo "
\t\t\t\t";
                    } else {
                        // line 127
                        echo "\t\t\t\t\t暂无
\t\t\t\t";
                    }
                    // line 129
                    echo "\t\t\t</td>
\t\t</tr>
\t\t";
                }
                // line 132
                echo "\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["userFields"]) ? $context["userFields"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["userField"]) {
                    // line 133
                    echo "\t\t";
                    if (($context["field"] == $this->getAttribute($context["userField"], "fieldName", array()))) {
                        // line 134
                        echo "\t\t<tr>
\t\t\t<th>";
                        // line 135
                        echo twig_escape_filter($this->env, $this->getAttribute($context["userField"], "title", array()), "html", null, true);
                        echo "</th>
\t\t\t<td>
\t\t\t\t";
                        // line 137
                        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute($context["userField"], "fieldName", array()), array(), "array")) {
                            // line 138
                            echo "\t\t\t\t\t";
                            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute($context["userField"], "fieldName", array()), array(), "array"), "html", null, true);
                            echo "
\t\t\t\t";
                        } else {
                            // line 140
                            echo "\t\t\t\t\t暂无
\t\t\t\t";
                        }
                        // line 142
                        echo "\t\t\t</td>
\t\t</tr>
\t\t";
                    }
                    // line 145
                    echo "\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['userField'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 146
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 147
            echo "\t";
        }
        // line 148
        echo "
</table>

";
    }

    // line 153
    public function block_footer($context, array $blocks = array())
    {
        // line 154
        echo "\t\t<button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">关闭</button>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseStudentManage:defined-show-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  365 => 154,  362 => 153,  355 => 148,  352 => 147,  346 => 146,  340 => 145,  335 => 142,  331 => 140,  325 => 138,  323 => 137,  318 => 135,  315 => 134,  312 => 133,  307 => 132,  302 => 129,  298 => 127,  292 => 125,  290 => 124,  285 => 121,  283 => 120,  279 => 118,  275 => 116,  269 => 114,  267 => 113,  262 => 110,  260 => 109,  256 => 107,  252 => 105,  246 => 103,  244 => 102,  239 => 99,  237 => 98,  233 => 96,  229 => 94,  223 => 92,  221 => 91,  216 => 88,  214 => 87,  210 => 85,  206 => 83,  200 => 81,  198 => 80,  193 => 77,  191 => 76,  187 => 74,  183 => 72,  177 => 70,  175 => 69,  170 => 66,  168 => 65,  164 => 63,  160 => 61,  154 => 59,  152 => 58,  147 => 55,  145 => 54,  141 => 52,  137 => 50,  131 => 48,  129 => 47,  124 => 44,  122 => 43,  118 => 41,  114 => 39,  108 => 37,  106 => 36,  101 => 33,  99 => 32,  96 => 31,  92 => 29,  90 => 28,  87 => 27,  85 => 26,  82 => 25,  80 => 24,  76 => 22,  74 => 21,  70 => 19,  66 => 17,  60 => 15,  58 => 14,  53 => 11,  50 => 10,  45 => 9,  43 => 8,  39 => 6,  36 => 5,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% block title %}个人详细信息{% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* <table class="table table-striped table-condenseda table-bordered">*/
/* 	{% if userinfoFields %}*/
/* 	{% for field in userinfoFields %}*/
/* 		{% if field == 'truename' %}*/
/* 		<tr>*/
/* 			<th width="25%">姓名</th>*/
/* 			<td>*/
/* 				{% if profile.truename %}*/
/* 					{{ profile.truename }}*/
/* 				{% else %}*/
/* 					暂无*/
/* 				{% endif %}*/
/* 			</td>*/
/* 		</tr>*/
/* 		{% elseif field == 'gender' %}*/
/* 		<tr>*/
/* 			<th width="25%">性别</th>*/
/* 			{% if profile.gender == 'male' %}*/
/* 				<td>男</td>*/
/* 			{% elseif profile.gender == 'female' %}*/
/* 				<td>女</td>*/
/* 			{% elseif profile.gender == 'secret' %}*/
/* 				<td>暂无</td>*/
/* 			{% endif %}*/
/* 		</tr>*/
/* 		{% elseif field == 'job' %}*/
/* 		<tr>*/
/* 			<th width="25%">职务</th>*/
/* 			<td>*/
/* 				{% if profile.job %}*/
/* 					{{ profile.job }}*/
/* 				{% else %}*/
/* 					暂无*/
/* 				{% endif %}*/
/* 			</td>*/
/* 		</tr>*/
/* 		{% elseif field == 'company' %}*/
/* 		<tr>*/
/* 			<th width="25%">公司</th>*/
/* 			<td>*/
/* 				{% if profile.company %}*/
/* 					{{ profile.company }}*/
/* 				{% else %}*/
/* 					暂无*/
/* 				{% endif %}*/
/* 			</td>*/
/* 		</tr>*/
/* 		{% elseif field == 'mobile' %}*/
/* 		<tr>*/
/* 			<th>手机号码</th>*/
/* 			<td>*/
/* 				{% if profile.mobile %}*/
/* 					{{ profile.mobile }}*/
/* 				{% else %}*/
/* 					暂无*/
/* 				{% endif %}*/
/* 			</td>*/
/* 		</tr>*/
/* 		{% elseif field == 'title' %}*/
/* 		<tr>*/
/* 			<th>头衔</th>*/
/* 			<td>*/
/* 				{% if profile.title %}*/
/* 					{{ profile.title }}*/
/* 				{% else %}*/
/* 					暂无*/
/* 				{% endif %}*/
/* 			</td>*/
/* 		</tr>*/
/* 		{% elseif field == 'signature' %}*/
/* 		<tr>*/
/* 			<th>个人签名</th>*/
/* 			<td>*/
/* 				{% if profile.signature %}*/
/* 					{{ profile.signature }}*/
/* 				{% else %}*/
/* 					暂无*/
/* 				{% endif %}*/
/* 			</td>*/
/* 		</tr>*/
/* 		{% elseif field == 'about' %}*/
/* 		<tr>*/
/* 			<th>自我介绍</th>*/
/* 			<td>*/
/* 				{% if profile.about %}*/
/* 					{{ profile.about }}*/
/* 				{% else %}*/
/* 					暂无*/
/* 				{% endif %}*/
/* 			</td>*/
/* 		</tr>*/
/* 		{% elseif field == 'weibo' %}*/
/* 		<tr>*/
/* 			<th>微博</th>*/
/* 			<td>*/
/* 				{% if profile.weibo %}*/
/* 					{{ profile.weibo }}*/
/* 				{% else %}*/
/* 					暂无*/
/* 				{% endif %}*/
/* 			</td>*/
/* 		</tr>*/
/* 		{% elseif field == 'weixin' %}*/
/* 		<tr>*/
/* 			<th>微信</th>*/
/* 			<td>*/
/* 				{% if profile.weixin %}*/
/* 					{{ profile.weixin }}*/
/* 				{% else %}*/
/* 					暂无*/
/* 				{% endif %}*/
/* 			</td>*/
/* 		</tr>*/
/* 		{% elseif field == 'qq' %}*/
/* 		<tr>*/
/* 			<th>QQ</th>*/
/* 			<td>*/
/* 				{% if profile.qq %}*/
/* 					{{ profile.qq }}*/
/* 				{% else %}*/
/* 					暂无*/
/* 				{% endif %}*/
/* 			</td>*/
/* 		</tr>*/
/* 		{% endif %}*/
/* 	{% for userField in userFields %}*/
/* 		{% if field == userField.fieldName %}*/
/* 		<tr>*/
/* 			<th>{{userField.title}}</th>*/
/* 			<td>*/
/* 				{% if profile[userField.fieldName] %}*/
/* 					{{ profile[userField.fieldName] }}*/
/* 				{% else %}*/
/* 					暂无*/
/* 				{% endif %}*/
/* 			</td>*/
/* 		</tr>*/
/* 		{% endif %}*/
/* 	{% endfor %}*/
/* 	{% endfor %}*/
/* 	{% endif %}*/
/* */
/* </table>*/
/* */
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/* 		<button type="button" class="btn btn-primary" data-dismiss="modal">关闭</button>*/
/* {% endblock %}*/
