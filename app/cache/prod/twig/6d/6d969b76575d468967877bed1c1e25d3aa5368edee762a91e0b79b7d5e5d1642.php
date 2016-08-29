<?php

/* TopxiaAdminBundle:CloudSetting:key.html.twig */
class __TwigTemplate_5561aefe415937979158f6eecf65860b1958dc5515db16b9912b1ea4190c774f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle:CloudSetting:layout.html.twig", "TopxiaAdminBundle:CloudSetting:key.html.twig", 1);
        $this->blocks = array(
            'maincontent' => array($this, 'block_maincontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle:CloudSetting:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["submenu"] = "key";
        // line 5
        $context["script_controller"] = "setting/cloud-key";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_maincontent($context, array $blocks = array())
    {
        // line 8
        echo "  ";
        if ($this->env->getExtension('topxia_web_twig')->isTrial()) {
            // line 9
            echo "    <div class=\"row form-group\">
      <div class=\"help-block\">
        </br></br>
        <script>
          var _hmt = _hmt || [];
        </script>
        <script charset=\"utf-8\" src=\"http://wpa.b.qq.com/cgi/wpa.php\"></script>

        <p style = \"text-align:center;font-size:16px\">当前版本为试用版,不能进行更多操作。如需购买授权版,请联系销售人员。电话：0571-86819929 或 
        <span id=\"BizQQWPA\" onclick=\"_hmt.push(['_trackEvent', 'advisory', 'click', 'qq'])\"><a id=\"BizQQWPA\" href=\"javascript:\" style='text-decoration:none;'>QQ：800023860 </a>。</span>
        </p>
        <script type=\"text/javascript\">
            BizQQWPA.addCustom({aty: '0', a: '0', nameAccount: 800023860, selector: 'BizQQWPA'}); 
        </script>
        </br>
      </div>
    </div>
    <hr>
  ";
        } else {
            // line 28
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
            echo "

    <form class=\"form-horizontal\" id=\"cloud-setting-form\" method=\"post\" novalidate>
      <div class=\"form-group\">
        <label class=\"col-md-3 control-label\">AccessKey</label>
        <div class=\"col-md-6\">
          <p class=\"form-control-static\">";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("storage.cloud_access_key"), "html", null, true);
            echo "</p>
        </div>
      </div>

      <div class=\"form-group\">
        <label class=\"col-md-3 control-label\">SecretKey</label>
        <div class=\"col-md-6\">
          <p class=\"form-control-static\">
            ";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("storage.cloud_secret_key"), "html", null, true);
            echo "
          </p>
        </div>
      </div>

      ";
            // line 47
            if (_twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("developer.debug"), 0)) {
                // line 48
                echo "      <div class=\"form-group\">
        <div class=\"col-md-6 col-md-offset-3\">
          <a href=\"";
                // line 50
                echo $this->env->getExtension('routing')->getPath("admin_setting_cloud_key_update");
                echo "\" class=\"btn btn-sm btn-default\">设置新的授权码</a>
          </div>
      </div>
      ";
            }
            // line 54
            echo "
      <div class=\"form-group\" id=\"loading-text\">
        <div class=\"col-md-6 col-md-offset-3\">
          <p class=\"text-warning\"><strong>正在读取授权信息，请稍等...</strong></p>
        </div>
      </div>

      <div id=\"key-license-info\" data-url=\"";
            // line 61
            echo $this->env->getExtension('routing')->getPath("admin_setting_cloud_key_info");
            echo "\">
        
      </div>

      <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
            echo "\">
    </form>
  ";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:CloudSetting:key.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 65,  111 => 61,  102 => 54,  95 => 50,  91 => 48,  89 => 47,  81 => 42,  70 => 34,  60 => 28,  39 => 9,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle:CloudSetting:layout.html.twig' %}*/
/* */
/* {% set submenu = 'key' %}*/
/* */
/* {% set script_controller = 'setting/cloud-key' %}*/
/* */
/* {% block maincontent %}*/
/*   {% if is_trial() %}*/
/*     <div class="row form-group">*/
/*       <div class="help-block">*/
/*         </br></br>*/
/*         <script>*/
/*           var _hmt = _hmt || [];*/
/*         </script>*/
/*         <script charset="utf-8" src="http://wpa.b.qq.com/cgi/wpa.php"></script>*/
/* */
/*         <p style = "text-align:center;font-size:16px">当前版本为试用版,不能进行更多操作。如需购买授权版,请联系销售人员。电话：0571-86819929 或 */
/*         <span id="BizQQWPA" onclick="_hmt.push(['_trackEvent', 'advisory', 'click', 'qq'])"><a id="BizQQWPA" href="javascript:" style='text-decoration:none;'>QQ：800023860 </a>。</span>*/
/*         </p>*/
/*         <script type="text/javascript">*/
/*             BizQQWPA.addCustom({aty: '0', a: '0', nameAccount: 800023860, selector: 'BizQQWPA'}); */
/*         </script>*/
/*         </br>*/
/*       </div>*/
/*     </div>*/
/*     <hr>*/
/*   {% else %}*/
/*     {{ web_macro.flash_messages() }}*/
/* */
/*     <form class="form-horizontal" id="cloud-setting-form" method="post" novalidate>*/
/*       <div class="form-group">*/
/*         <label class="col-md-3 control-label">AccessKey</label>*/
/*         <div class="col-md-6">*/
/*           <p class="form-control-static">{{ setting('storage.cloud_access_key') }}</p>*/
/*         </div>*/
/*       </div>*/
/* */
/*       <div class="form-group">*/
/*         <label class="col-md-3 control-label">SecretKey</label>*/
/*         <div class="col-md-6">*/
/*           <p class="form-control-static">*/
/*             {{ setting('storage.cloud_secret_key') }}*/
/*           </p>*/
/*         </div>*/
/*       </div>*/
/* */
/*       {% if setting("developer.debug")|default(0) %}*/
/*       <div class="form-group">*/
/*         <div class="col-md-6 col-md-offset-3">*/
/*           <a href="{{ path('admin_setting_cloud_key_update') }}" class="btn btn-sm btn-default">设置新的授权码</a>*/
/*           </div>*/
/*       </div>*/
/*       {% endif %}*/
/* */
/*       <div class="form-group" id="loading-text">*/
/*         <div class="col-md-6 col-md-offset-3">*/
/*           <p class="text-warning"><strong>正在读取授权信息，请稍等...</strong></p>*/
/*         </div>*/
/*       </div>*/
/* */
/*       <div id="key-license-info" data-url="{{ path('admin_setting_cloud_key_info') }}">*/
/*         */
/*       </div>*/
/* */
/*       <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*     </form>*/
/*   {% endif %}*/
/* {% endblock %}*/
