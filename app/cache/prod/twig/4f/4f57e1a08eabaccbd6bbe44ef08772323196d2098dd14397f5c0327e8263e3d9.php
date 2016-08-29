<?php

/* TopxiaAdminBundle:CloudSetting:key-license-info.html.twig */
class __TwigTemplate_d698dda1a2eb6a43c03e7ae34a56c39dff9b4782da2d7040cb5f8fc5adde5be1 extends Twig_Template
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
        if ((($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "error", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "error", array()), null)) : (null))) {
            // line 2
            echo "
  <div class=\"form-group\">
    <div class=\"col-md-6 col-md-offset-3\">
      <div class=\"alert alert-danger key-error-alert\">
        ";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->removeCopyright("授权码不正确，请重新设置！如您是商业用户，请联系EduSoho官方。"), "html", null, true);
            echo "
      </div>
    </div>
  </div>

";
        } else {
            // line 12
            echo "
  ";
            // line 13
            if ( !(($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "licenseDomains", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "licenseDomains", array()), null)) : (null))) {
                // line 14
                echo "
  <div class=\"form-group\">
    <label class=\"col-md-3 control-label\">授权域名</label>
    <div class=\"col-md-6\">
      <p class=\"form-control-static\">";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "server", array()), "get", array(0 => "HTTP_HOST"), "method"), "html", null, true);
                echo " <span class=\"text-warning\">(尚未授权)</span></p>
      <p class=\"help-block\">域名绑定后，才能在应用中心购买应用；域名一旦绑定后，就不可更改！</p>
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-6 col-md-offset-3\">
      <button type=\"button\" class=\"btn btn-sm btn-warning key-bind-btn\" data-url=\"";
                // line 25
                echo $this->env->getExtension('routing')->getPath("admin_setting_cloud_key_bind");
                echo "\" data-loading-text=\"正在绑定域名，请稍等...\">绑定授权域名</button>
    </div>
  </div>

  ";
            } else {
                // line 30
                echo "
    <div class=\"form-group\">
      <label class=\"col-md-3 control-label\">授权信息</label>
      <div class=\"col-md-6\">
        <p class=\"form-control-static\">";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "levelName", array()), "html", null, true);
                echo "</p>
      </div>
    </div>

    <div class=\"form-group\">
      <label class=\"col-md-3 control-label\">授权域名</label>
      <div class=\"col-md-6\">
        <p class=\"form-control-static text-success\">";
                // line 41
                if (((($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "licenseDomainCount", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "licenseDomainCount", array()), 1)) : (1)) == 1)) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "licenseDomains", array()), "html", null, true);
                } else {
                    echo "<span class=\"license-domain\" data-toggle=\"tooltip\" data-placement=\"bottom\" title=\"";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "licenseDomains", array()), ";"));
                    foreach ($context['_seq'] as $context["_key"] => $context["doman"]) {
                        echo twig_escape_filter($this->env, $context["doman"], "html", null, true);
                        echo "
        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['doman'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 42
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "licenseDomainCount", array()), "html", null, true);
                    echo "个</span>";
                }
                echo "</p>
        ";
                // line 43
                if (!twig_in_filter((isset($context["currentHost"]) ? $context["currentHost"] : null), twig_split_filter($this->env, $this->getAttribute((isset($context["info"]) ? $context["info"] : null), "licenseDomains", array()), ";"))) {
                    // line 44
                    echo "          <div class=\"alert alert-danger\">
            当前域名";
                    // line 45
                    echo twig_escape_filter($this->env, (isset($context["currentHost"]) ? $context["currentHost"] : null), "html", null, true);
                    echo " 与授权域名不符，将会影响";
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->removeCopyright("EduSoho"), "html", null, true);
                    echo "系统功能的使用；请使用授权域名访问此系统。
          </div>
        ";
                }
                // line 48
                echo "      </div>
    </div>



    ";
                // line 53
                if ($this->getAttribute((isset($context["info"]) ? $context["info"] : null), "copyright", array())) {
                    // line 54
                    echo "      <div class=\"form-group\">
        <label class=\"col-md-3 control-label\">版权名称</label>
        <div class=\"col-md-6\">
          <input id=\"field-copyrightName\" class=\"form-control\" type=\"text\" name=\"copyrightName\" value=\"";
                    // line 57
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("copyright.name", ""), "html", null, true);
                    echo "\">
          <p class=\"help-block\">填写版权名称后，网站前台页面底部将会显示“Powered By 你的版权名称”，为空则不显示版权信息。</p>
        </div>
      </div>

      <div class=\"form-group\">
        <div class=\"col-md-6 col-md-offset-3\">
          <button class=\"btn btn-primary save-copyright-btn\" data-url=\"";
                    // line 64
                    echo $this->env->getExtension('routing')->getPath("admin_setting_cloud_key_copyright");
                    echo "\" data-loading-text=\"正在保存...\">保存版权名称</button>
        </div>
      </div>
    ";
                } else {
                    // line 68
                    echo "    <div class=\"form-group\">
        <label class=\"col-md-3 control-label\">版权信息</label>
        <div class=\"col-md-6\">
          <p class=\"form-control-static\">未去除版权信息</p>
        </div>
      </div>
    ";
                }
                // line 75
                echo "



  ";
            }
            // line 80
            echo "
";
        }
        // line 82
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:CloudSetting:key-license-info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 82,  163 => 80,  156 => 75,  147 => 68,  140 => 64,  130 => 57,  125 => 54,  123 => 53,  116 => 48,  108 => 45,  105 => 44,  103 => 43,  96 => 42,  81 => 41,  71 => 34,  65 => 30,  57 => 25,  47 => 18,  41 => 14,  39 => 13,  36 => 12,  27 => 6,  21 => 2,  19 => 1,);
    }
}
/* {% if info.error|default(null) %}*/
/* */
/*   <div class="form-group">*/
/*     <div class="col-md-6 col-md-offset-3">*/
/*       <div class="alert alert-danger key-error-alert">*/
/*         {{ '授权码不正确，请重新设置！如您是商业用户，请联系EduSoho官方。'|copyright_less }}*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* */
/* {% else %}*/
/* */
/*   {% if not info.licenseDomains|default(null) %}*/
/* */
/*   <div class="form-group">*/
/*     <label class="col-md-3 control-label">授权域名</label>*/
/*     <div class="col-md-6">*/
/*       <p class="form-control-static">{{ app.request.server.get('HTTP_HOST') }} <span class="text-warning">(尚未授权)</span></p>*/
/*       <p class="help-block">域名绑定后，才能在应用中心购买应用；域名一旦绑定后，就不可更改！</p>*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="form-group">*/
/*     <div class="col-md-6 col-md-offset-3">*/
/*       <button type="button" class="btn btn-sm btn-warning key-bind-btn" data-url="{{ path('admin_setting_cloud_key_bind') }}" data-loading-text="正在绑定域名，请稍等...">绑定授权域名</button>*/
/*     </div>*/
/*   </div>*/
/* */
/*   {% else %}*/
/* */
/*     <div class="form-group">*/
/*       <label class="col-md-3 control-label">授权信息</label>*/
/*       <div class="col-md-6">*/
/*         <p class="form-control-static">{{ info.levelName }}</p>*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*       <label class="col-md-3 control-label">授权域名</label>*/
/*       <div class="col-md-6">*/
/*         <p class="form-control-static text-success">{% if info.licenseDomainCount|default(1) == 1 %}{{ info.licenseDomains }}{% else %}<span class="license-domain" data-toggle="tooltip" data-placement="bottom" title="{% for doman in info.licenseDomains|split(';') %}{{doman}}*/
/*         {% endfor %}">{{info.licenseDomainCount}}个</span>{% endif %}</p>*/
/*         {% if currentHost not in info.licenseDomains|split(';') %}*/
/*           <div class="alert alert-danger">*/
/*             当前域名{{ currentHost }} 与授权域名不符，将会影响{{ 'EduSoho'|copyright_less }}系统功能的使用；请使用授权域名访问此系统。*/
/*           </div>*/
/*         {% endif %}*/
/*       </div>*/
/*     </div>*/
/* */
/* */
/* */
/*     {% if info.copyright %}*/
/*       <div class="form-group">*/
/*         <label class="col-md-3 control-label">版权名称</label>*/
/*         <div class="col-md-6">*/
/*           <input id="field-copyrightName" class="form-control" type="text" name="copyrightName" value="{{ setting('copyright.name', '') }}">*/
/*           <p class="help-block">填写版权名称后，网站前台页面底部将会显示“Powered By 你的版权名称”，为空则不显示版权信息。</p>*/
/*         </div>*/
/*       </div>*/
/* */
/*       <div class="form-group">*/
/*         <div class="col-md-6 col-md-offset-3">*/
/*           <button class="btn btn-primary save-copyright-btn" data-url="{{ path('admin_setting_cloud_key_copyright') }}" data-loading-text="正在保存...">保存版权名称</button>*/
/*         </div>*/
/*       </div>*/
/*     {% else %}*/
/*     <div class="form-group">*/
/*         <label class="col-md-3 control-label">版权信息</label>*/
/*         <div class="col-md-6">*/
/*           <p class="form-control-static">未去除版权信息</p>*/
/*         </div>*/
/*       </div>*/
/*     {% endif %}*/
/* */
/* */
/* */
/* */
/*   {% endif %}*/
/* */
/* {% endif %}*/
/* */
/* */
