<?php

/* TopxiaAdminBundle:User:edit-modal.html.twig */
class __TwigTemplate_97fd5b3c3594d1f6580710399b2bc4c7406fc6e1e891df5951494b3d9786e0d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaAdminBundle:User:edit-modal.html.twig", 1);
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
        // line 3
        $context["modalSize"] = "large";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "编辑用户信息";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "
<form id=\"user-edit-form\" class=\"form-horizontal\" method=\"post\" action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_user_edit", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "\">

  <div class=\"row form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"truename\">姓名</label>
    </div>
    <div class=\"col-md-7 controls\">
      <input type=\"text\" id=\"truename\" name=\"truename\" class=\"form-control\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "truename", array()), "html", null, true);
        echo "\" >
    </div>
  </div>

  <div class=\"row form-group\">
    <div class=\"col-md-2 control-label\">
      <label for=\"gender\">性别</label>
    </div>
    <div class=\"col-md-7 controls radios\">
      <div id=\"gender\">
        <input type=\"radio\" id=\"gender_0\" name=\"gender\" value=\"male\"
        ";
        // line 26
        if (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "gender", array()) == "male")) {
            echo " checked=\"checked\" ";
        }
        echo ">
        <label for=\"gender_0\">男</label>

        <input type=\"radio\" id=\"gender_1\" name=\"gender\" value=\"female\"
        ";
        // line 30
        if (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "gender", array()) == "female")) {
            echo " checked=\"checked\" ";
        }
        echo ">
        <label for=\"gender_1\">女</label>
      </div>

    </div>
  </div>

    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\"> 
        <label for=\"idcard\">身份证号</label>
      </div>
      <div class=\"col-md-7 controls\">
        <input type=\"text\" id=\"idcard\" name=\"idcard\" class=\"form-control\" value=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "idcard", array()), "html", null, true);
        echo "\">
     </div>
    </div>

    ";
        // line 46
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "verifiedMobile", array())) > 0)) {
            // line 47
            echo "      <div class=\"row form-group\">
        <div class=\"col-md-2 control-label\"> 
          <label for=\"mobile\">手机号码</label>
        </div>
        <div class=\"col-md-7 controls\">
          <div class=\"control-text\"> ";
            // line 52
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "verifiedMobile", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "verifiedMobile", array()), "")) : ("")), "html", null, true);
            echo "<span class=\"text-success\">(已绑定)</span> </div>
       </div>
      </div>
    ";
        } else {
            // line 56
            echo "      <div class=\"row form-group\">
        <div class=\"col-md-2 control-label\"> 
          <label for=\"mobile\">手机号码</label>
        </div>
        <div class=\"col-md-7 controls\">
          <input type=\"text\" id=\"mobile\" name=\"mobile\" class=\"form-control\" value=\"";
            // line 61
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "mobile", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "mobile", array()), "")) : ("")), "html", null, true);
            echo "\">
       </div>
      </div>
    ";
        }
        // line 65
        echo "
    <div class=\"row form-group\">
        <div class=\"col-md-2 control-label\"> 
          <label for=\"company\">公司</label>
        </div>
        <div class=\"col-md-7 controls\">
          <input type=\"text\" id=\"company\" name=\"company\" class=\"form-control\" value=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "company", array()), "html", null, true);
        echo "\">
       </div>
    </div>
    
    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\"> 
        <label for=\"job\">职务</label>
      </div>
      <div class=\"col-md-7 controls\">
        <input type=\"text\" id=\"job\" name=\"job\" class=\"form-control\" value=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "job", array()), "html", null, true);
        echo "\">
     </div>
    </div>

    <p></p>
    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\"> 
        <label for=\"title\">头衔</label>
      </div>
      <div class=\"col-md-7 controls\">
        <input type=\"text\" id=\"title\" name=\"title\" class=\"form-control\" value=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "title", array()), "html", null, true);
        echo "\">
     </div>
    </div>
    <p></p>
    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\"> 
        <label for=\"signature\">个人签名</label>
      </div>
      <div class=\"col-md-7 controls\">
        <textarea type=\"text\" rows=\"5\" maxlength=\"150\" id=\"signature\" name=\"signature\" class=\"form-control\">";
        // line 99
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "signature", array()), "html", null, true);
        echo "</textarea>
     </div>
    </div>
    <p></p>
    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\"> 
        <label for=\"about\">自我介绍</label>
      </div>
      <div class=\"col-md-7 controls\">
        <textarea id=\"about\" name=\"about\" data-image-upload-url=\"";
        // line 108
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("default"))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "about", array()), "html", null, true);
        echo "</textarea>
      </div>
    </div>
    <p></p>
    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\"> 
        <label for=\"site\">个人主页</label>
      </div>
      <div class=\"col-md-7 controls\">
        <input type=\"text\" id=\"site\" name=\"site\" class=\"form-control\" value=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "site", array()), "html", null, true);
        echo "\">
     </div>
    </div>
    <p></p>
  <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\"> 
        <label for=\"weibo\">微博</label>
      </div>
      <div class=\"col-md-7 controls\">
        <input type=\"text\" id=\"weibo\" name=\"weibo\" class=\"form-control\" value=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "weibo", array()), "html", null, true);
        echo "\">
     </div>
    </div>
    <p></p>
    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\"> 
        <label for=\"qq\">QQ</label>
      </div>
      <div class=\"col-md-7 controls\">
        <input type=\"text\" id=\"qq\" name=\"qq\" class=\"form-control\" value=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "qq", array()), "html", null, true);
        echo "\">
     </div>
    </div>
    <p></p>
    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\"> 
        <label for=\"weixin\">微信</label>
      </div>
      <div class=\"col-md-7 controls\">
        <input type=\"text\" id=\"weixin\" name=\"weixin\" class=\"form-control\" value=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), "weixin", array()), "html", null, true);
        echo "\">
     </div>
    </div> 

    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">           

";
        // line 150
        if ((isset($context["fields"]) ? $context["fields"] : null)) {
            // line 151
            echo "          <hr>
          ";
            // line 152
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["fields"]) ? $context["fields"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 153
                echo "          ";
                if (($this->getAttribute($context["field"], "type", array()) == "text")) {
                    // line 154
                    echo "          <div class=\"form-group\">
            <label for=\"";
                    // line 155
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" class=\"col-md-2 control-label\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "title", array()), "html", null, true);
                    echo "</label>
            <div class=\"col-md-7 controls\">
              <textarea id=\"";
                    // line 157
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" name=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "type", array()), "html", null, true);
                    echo " form-control\" >";
                    echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array"), "")) : ("")), "html", null, true);
                    echo "</textarea>
              <div class=\"help-block\" style=\"display:none;\"></div>
            </div>
          </div>
          ";
                } elseif (($this->getAttribute(                // line 161
$context["field"], "type", array()) == "int")) {
                    // line 162
                    echo "          <div class=\"form-group\">
            <label for=\"";
                    // line 163
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" class=\"col-md-2 control-label\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "title", array()), "html", null, true);
                    echo "</label>
            <div class=\"col-md-7 controls\">
              <input type=\"text\" id=\"";
                    // line 165
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" placeholder=\"最大值为9位整数\" name=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "type", array()), "html", null, true);
                    echo " form-control\"  value=\"";
                    echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array"), "")) : ("")), "html", null, true);
                    echo "\">
              <div class=\"help-block\" style=\"display:none;\"></div>
            </div>
          </div>
          ";
                } elseif (($this->getAttribute(                // line 169
$context["field"], "type", array()) == "float")) {
                    // line 170
                    echo "          <div class=\"form-group\">
            <label for=\"";
                    // line 171
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" class=\"col-md-2 control-label\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "title", array()), "html", null, true);
                    echo "</label>
            <div class=\"col-md-7 controls\">
              <input type=\"text\" id=\"";
                    // line 173
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" placeholder=\"保留到2位小数\" name=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "type", array()), "html", null, true);
                    echo " form-control\" value=\"";
                    echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array"), "")) : ("")), "html", null, true);
                    echo "\">
              <div class=\"help-block\" style=\"display:none;\"></div>
            </div>
          </div>
          ";
                } elseif (($this->getAttribute(                // line 177
$context["field"], "type", array()) == "date")) {
                    // line 178
                    echo "          <div class=\"form-group\">
            <label for=\"";
                    // line 179
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" class=\"col-md-2 control-label\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "title", array()), "html", null, true);
                    echo "</label>
            <div class=\"col-md-7 controls\">
              <input type=\"text\" id=\"";
                    // line 181
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" name=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "type", array()), "html", null, true);
                    echo " form-control\"   value=\"";
                    if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array")) {
                        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array"), "html", null, true);
                    }
                    echo "\">
              <div class=\"help-block\" style=\"display:none;\"></div>
            </div>
          </div>
          ";
                } elseif (($this->getAttribute(                // line 185
$context["field"], "type", array()) == "varchar")) {
                    // line 186
                    echo "          <div class=\"form-group\">
            <label for=\"";
                    // line 187
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" class=\"col-md-2 control-label\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "title", array()), "html", null, true);
                    echo "</label>
            <div class=\"col-md-7 controls\">
              <input type=\"text\" id=\"";
                    // line 189
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" name=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["field"], "fieldName", array()), "html", null, true);
                    echo "\" class=\"form-control\"  value=\"";
                    echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : null), $this->getAttribute($context["field"], "fieldName", array()), array(), "array"), "")) : ("")), "html", null, true);
                    echo "\">
              <div class=\"help-block\" style=\"display:none;\"></div>
            </div>
          </div>
          ";
                }
                // line 194
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 195
            echo "          ";
        }
        // line 196
        echo "
</form>
";
    }

    // line 200
    public function block_footer($context, array $blocks = array())
    {
        // line 201
        echo "  <button id=\"edit-user-btn\" data-submiting-text=\"正在提交\" type=\"submit\" class=\"btn btn-primary pull-right\" data-toggle=\"form-submit\" data-target=\"#user-edit-form\">保存</button>
  <button type=\"button\" class=\"btn btn-link pull-right\" data-dismiss=\"modal\">取消</button>
  <script>app.load('user/edit-modal')</script>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:User:edit-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  405 => 201,  402 => 200,  396 => 196,  393 => 195,  387 => 194,  375 => 189,  368 => 187,  365 => 186,  363 => 185,  348 => 181,  341 => 179,  338 => 178,  336 => 177,  323 => 173,  316 => 171,  313 => 170,  311 => 169,  298 => 165,  291 => 163,  288 => 162,  286 => 161,  273 => 157,  266 => 155,  263 => 154,  260 => 153,  256 => 152,  253 => 151,  251 => 150,  246 => 148,  239 => 144,  227 => 135,  215 => 126,  203 => 117,  189 => 108,  177 => 99,  165 => 90,  152 => 80,  140 => 71,  132 => 65,  125 => 61,  118 => 56,  111 => 52,  104 => 47,  102 => 46,  95 => 42,  78 => 30,  69 => 26,  55 => 15,  45 => 8,  42 => 7,  39 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% set modalSize = 'large' %}*/
/* */
/* {% block title %}编辑用户信息{% endblock %}*/
/* {% block body %}*/
/* */
/* <form id="user-edit-form" class="form-horizontal" method="post" action="{{ url('admin_user_edit', {id:user.id}) }}">*/
/* */
/*   <div class="row form-group">*/
/*     <div class="col-md-2 control-label">*/
/*       <label for="truename">姓名</label>*/
/*     </div>*/
/*     <div class="col-md-7 controls">*/
/*       <input type="text" id="truename" name="truename" class="form-control" value="{{profile.truename}}" >*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="row form-group">*/
/*     <div class="col-md-2 control-label">*/
/*       <label for="gender">性别</label>*/
/*     </div>*/
/*     <div class="col-md-7 controls radios">*/
/*       <div id="gender">*/
/*         <input type="radio" id="gender_0" name="gender" value="male"*/
/*         {% if profile.gender == 'male' %} checked="checked" {% endif %}>*/
/*         <label for="gender_0">男</label>*/
/* */
/*         <input type="radio" id="gender_1" name="gender" value="female"*/
/*         {% if profile.gender == 'female' %} checked="checked" {% endif %}>*/
/*         <label for="gender_1">女</label>*/
/*       </div>*/
/* */
/*     </div>*/
/*   </div>*/
/* */
/*     <div class="row form-group">*/
/*       <div class="col-md-2 control-label"> */
/*         <label for="idcard">身份证号</label>*/
/*       </div>*/
/*       <div class="col-md-7 controls">*/
/*         <input type="text" id="idcard" name="idcard" class="form-control" value="{{profile.idcard}}">*/
/*      </div>*/
/*     </div>*/
/* */
/*     {% if (user.verifiedMobile|length) > 0 %}*/
/*       <div class="row form-group">*/
/*         <div class="col-md-2 control-label"> */
/*           <label for="mobile">手机号码</label>*/
/*         </div>*/
/*         <div class="col-md-7 controls">*/
/*           <div class="control-text"> {{user.verifiedMobile|default('')}}<span class="text-success">(已绑定)</span> </div>*/
/*        </div>*/
/*       </div>*/
/*     {% else %}*/
/*       <div class="row form-group">*/
/*         <div class="col-md-2 control-label"> */
/*           <label for="mobile">手机号码</label>*/
/*         </div>*/
/*         <div class="col-md-7 controls">*/
/*           <input type="text" id="mobile" name="mobile" class="form-control" value="{{profile.mobile|default('')}}">*/
/*        </div>*/
/*       </div>*/
/*     {% endif %}*/
/* */
/*     <div class="row form-group">*/
/*         <div class="col-md-2 control-label"> */
/*           <label for="company">公司</label>*/
/*         </div>*/
/*         <div class="col-md-7 controls">*/
/*           <input type="text" id="company" name="company" class="form-control" value="{{profile.company}}">*/
/*        </div>*/
/*     </div>*/
/*     */
/*     <div class="row form-group">*/
/*       <div class="col-md-2 control-label"> */
/*         <label for="job">职务</label>*/
/*       </div>*/
/*       <div class="col-md-7 controls">*/
/*         <input type="text" id="job" name="job" class="form-control" value="{{profile.job}}">*/
/*      </div>*/
/*     </div>*/
/* */
/*     <p></p>*/
/*     <div class="row form-group">*/
/*       <div class="col-md-2 control-label"> */
/*         <label for="title">头衔</label>*/
/*       </div>*/
/*       <div class="col-md-7 controls">*/
/*         <input type="text" id="title" name="title" class="form-control" value="{{profile.title}}">*/
/*      </div>*/
/*     </div>*/
/*     <p></p>*/
/*     <div class="row form-group">*/
/*       <div class="col-md-2 control-label"> */
/*         <label for="signature">个人签名</label>*/
/*       </div>*/
/*       <div class="col-md-7 controls">*/
/*         <textarea type="text" rows="5" maxlength="150" id="signature" name="signature" class="form-control">{{profile.signature}}</textarea>*/
/*      </div>*/
/*     </div>*/
/*     <p></p>*/
/*     <div class="row form-group">*/
/*       <div class="col-md-2 control-label"> */
/*         <label for="about">自我介绍</label>*/
/*       </div>*/
/*       <div class="col-md-7 controls">*/
/*         <textarea id="about" name="about" data-image-upload-url="{{ path('editor_upload', {token:upload_token('default')}) }}">{{profile.about}}</textarea>*/
/*       </div>*/
/*     </div>*/
/*     <p></p>*/
/*     <div class="row form-group">*/
/*       <div class="col-md-2 control-label"> */
/*         <label for="site">个人主页</label>*/
/*       </div>*/
/*       <div class="col-md-7 controls">*/
/*         <input type="text" id="site" name="site" class="form-control" value="{{profile.site}}">*/
/*      </div>*/
/*     </div>*/
/*     <p></p>*/
/*   <div class="row form-group">*/
/*       <div class="col-md-2 control-label"> */
/*         <label for="weibo">微博</label>*/
/*       </div>*/
/*       <div class="col-md-7 controls">*/
/*         <input type="text" id="weibo" name="weibo" class="form-control" value="{{profile.weibo}}">*/
/*      </div>*/
/*     </div>*/
/*     <p></p>*/
/*     <div class="row form-group">*/
/*       <div class="col-md-2 control-label"> */
/*         <label for="qq">QQ</label>*/
/*       </div>*/
/*       <div class="col-md-7 controls">*/
/*         <input type="text" id="qq" name="qq" class="form-control" value="{{profile.qq}}">*/
/*      </div>*/
/*     </div>*/
/*     <p></p>*/
/*     <div class="row form-group">*/
/*       <div class="col-md-2 control-label"> */
/*         <label for="weixin">微信</label>*/
/*       </div>*/
/*       <div class="col-md-7 controls">*/
/*         <input type="text" id="weixin" name="weixin" class="form-control" value="{{profile.weixin}}">*/
/*      </div>*/
/*     </div> */
/* */
/*     <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">           */
/* */
/* {% if fields %}*/
/*           <hr>*/
/*           {% for field in fields %}*/
/*           {% if field.type=="text" %}*/
/*           <div class="form-group">*/
/*             <label for="{{field.fieldName}}" class="col-md-2 control-label">{{field.title}}</label>*/
/*             <div class="col-md-7 controls">*/
/*               <textarea id="{{field.fieldName}}" name="{{field.fieldName}}" class="{{field.type}} form-control" >{{ profile[field.fieldName]|default('') }}</textarea>*/
/*               <div class="help-block" style="display:none;"></div>*/
/*             </div>*/
/*           </div>*/
/*           {% elseif field.type=="int" %}*/
/*           <div class="form-group">*/
/*             <label for="{{field.fieldName}}" class="col-md-2 control-label">{{field.title}}</label>*/
/*             <div class="col-md-7 controls">*/
/*               <input type="text" id="{{field.fieldName}}" placeholder="最大值为9位整数" name="{{field.fieldName}}" class="{{field.type}} form-control"  value="{{ profile[field.fieldName]|default('') }}">*/
/*               <div class="help-block" style="display:none;"></div>*/
/*             </div>*/
/*           </div>*/
/*           {% elseif field.type=="float" %}*/
/*           <div class="form-group">*/
/*             <label for="{{field.fieldName}}" class="col-md-2 control-label">{{field.title}}</label>*/
/*             <div class="col-md-7 controls">*/
/*               <input type="text" id="{{field.fieldName}}" placeholder="保留到2位小数" name="{{field.fieldName}}" class="{{field.type}} form-control" value="{{ profile[field.fieldName]|default('') }}">*/
/*               <div class="help-block" style="display:none;"></div>*/
/*             </div>*/
/*           </div>*/
/*           {% elseif field.type=="date" %}*/
/*           <div class="form-group">*/
/*             <label for="{{field.fieldName}}" class="col-md-2 control-label">{{field.title}}</label>*/
/*             <div class="col-md-7 controls">*/
/*               <input type="text" id="{{field.fieldName}}" name="{{field.fieldName}}" class="{{field.type}} form-control"   value="{% if profile[field.fieldName] %}{{profile[field.fieldName]}}{% endif %}">*/
/*               <div class="help-block" style="display:none;"></div>*/
/*             </div>*/
/*           </div>*/
/*           {% elseif field.type=="varchar" %}*/
/*           <div class="form-group">*/
/*             <label for="{{field.fieldName}}" class="col-md-2 control-label">{{field.title}}</label>*/
/*             <div class="col-md-7 controls">*/
/*               <input type="text" id="{{field.fieldName}}" name="{{field.fieldName}}" class="form-control"  value="{{ profile[field.fieldName]|default('') }}">*/
/*               <div class="help-block" style="display:none;"></div>*/
/*             </div>*/
/*           </div>*/
/*           {% endif %}*/
/*           {% endfor %}*/
/*           {% endif %}*/
/* */
/* </form>*/
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/*   <button id="edit-user-btn" data-submiting-text="正在提交" type="submit" class="btn btn-primary pull-right" data-toggle="form-submit" data-target="#user-edit-form">保存</button>*/
/*   <button type="button" class="btn btn-link pull-right" data-dismiss="modal">取消</button>*/
/*   <script>app.load('user/edit-modal')</script>*/
/* {% endblock %}*/
