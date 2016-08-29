<?php

/* TopxiaAdminBundle:Theme:edit.html.twig */
class __TwigTemplate_a52bed6ddd3c1e63ef6eba5bea78b7979878387a7aa95cbd8b6f31515c1f7af9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaAdminBundle:Theme:edit.html.twig", 1);
        // line 2
        $context["admin_macro"] = $this->loadTemplate("TopxiaAdminBundle::macro.html.twig", "TopxiaAdminBundle:Theme:edit.html.twig", 2);
        // line 3
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"\"> <!--<![endif]-->
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <meta content=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\" name=\"csrf-token\" />
  <title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
  ";
        // line 14
        if ($this->env->getExtension('topxia_web_twig')->getSetting("site.favicon")) {
            // line 15
            echo "  <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('topxia_web_twig')->getSetting("site.favicon")), "html", null, true);
            echo "\" rel=\"shortcut icon\" />
  ";
        }
        // line 17
        echo "  <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/gallery2/bootstrap/3.1.1/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/common.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiaadmin/css/admin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiaadmin/css/admin_v2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/bootstrap-extends.css"), "html", null, true);
        echo "\" />
  <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiaweb/css/web.css"), "html", null, true);
        echo "\" />
  ";
        // line 23
        $this->displayBlock('javascripts', $context, $blocks);
        // line 24
        echo "  <!--[if lt IE 9]>
    <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/html5shiv.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/respond.min.js"), "html", null, true);
        echo "\"></script>
  <![endif]-->
</head>

";
        // line 30
        $context["nav"] = ((array_key_exists("nav", $context)) ? (_twig_default_filter((isset($context["nav"]) ? $context["nav"] : null), null)) : (null));
        // line 31
        $context["menu"] = ((array_key_exists("menu", $context)) ? (_twig_default_filter((isset($context["menu"]) ? $context["menu"] : null), null)) : (null));
        // line 32
        $context["script_controller"] = "topxiawebbundle/controller/theme/edit";
        // line 33
        echo "
<body>

<script id=\"theme-config\" type=\"text/x-handlebars-template\">";
        // line 36
        echo twig_jsonencode_filter((isset($context["themeConfig"]) ? $context["themeConfig"] : null));
        echo "</script>
<script id=\"theme-all-config\" type=\"text/x-handlebars-template\">";
        // line 37
        echo twig_jsonencode_filter((isset($context["allConfig"]) ? $context["allConfig"] : null));
        echo "</script>

<nav class=\"navbar navbar-inverse site-navbar navbar-fixed-top\" role=\"navigation\">
  <div class=\"container\">
    <div class=\"col-md-1\"></div>
    <div class=\"col-md-10\"> 
      <a class=\"navbar-brand\">主题编辑</a>
      <ul class=\"nav navbar-nav navbar-right\">
      <li><a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("admin_setting_theme");
        echo "\"><i class=\"glyphicon glyphicon-remove\"></i>取消</a></li>
      <li><a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_confirm_themes_config", array("uri" => (isset($context["themeUri"]) ? $context["themeUri"] : null))), "html", null, true);
        echo "\"><i class=\"glyphicon glyphicon-ok\"></i> 应用</a></li>
      </ul>
    </div>
    <div class=\"col-md-1\"></div>
  </div>
</nav>
<div class=\"container\">
  <div class=\"col-md-1\"></div>
  <div class=\"col-md-10\">
     <!-- Nav tabs -->
    <ul class=\"nav nav-tabs\" role=\"tablist\">
      <li class=\"active\"><a href=\"#left\" role=\"tab\" data-toggle=\"tab\">组件</a></li>
      <li><a href=\"#maincolor\" role=\"tab\" data-toggle=\"tab\">配色方案</a></li>
      <a href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_reset_currentTheme_config", array("uri" => (isset($context["themeUri"]) ? $context["themeUri"] : null))), "html", null, true);
        echo "\" class=\"btn btn-primary pull-right\">全部重置</a>
    </ul>

    <!-- Tab panes -->
    <div class=\"tab-content\" id=\"theme-edit-content\" data-url=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_save_themes_config", array("uri" => (isset($context["themeUri"]) ? $context["themeUri"] : null))), "html", null, true);
        echo "\">
      <div class=\"tab-pane active\" id=\"left\">
          <div class=\"panel panel-default\">
            <!-- Default panel contents -->
            <div class=\"panel-heading clearfix\">
              <div class=\"col-md-4 \">
                挂件名称
              </div>
              <div class=\"col-md-4\">
                自定义名称
              </div>

            </div>

            <!-- List group -->
            <ul class=\"list-group module-item-list theme-edit-block theme-custom-left-block\">
              ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($this->getAttribute($this->getAttribute((isset($context["themeConfig"]) ? $context["themeConfig"] : null), "blocks", array(), "any", false, true), "left", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["themeConfig"]) ? $context["themeConfig"] : null), "blocks", array(), "any", false, true), "left", array()), array())) : (array())));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["pendant"]) {
            // line 80
            echo "
                ";
            // line 81
            $this->loadTemplate("TopxiaAdminBundle:Theme:theme-edit-config-li.html.twig", "TopxiaAdminBundle:Theme:edit.html.twig", 81)->display(array_merge($context, array("isChoiced" => true, "uri" => (isset($context["themeUri"]) ? $context["themeUri"] : null))));
            // line 82
            echo "                
              ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pendant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        echo "
              ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($this->getAttribute($this->getAttribute((isset($context["allConfig"]) ? $context["allConfig"] : null), "blocks", array(), "any", false, true), "left", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["allConfig"]) ? $context["allConfig"] : null), "blocks", array(), "any", false, true), "left", array()), array())) : (array())));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["pendant"]) {
            // line 86
            echo "                ";
            if ( !$this->env->getExtension('topxia_web_twig')->isExistInSubArrayById($context["pendant"], (($this->getAttribute($this->getAttribute((isset($context["themeConfig"]) ? $context["themeConfig"] : null), "blocks", array(), "any", false, true), "left", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["themeConfig"]) ? $context["themeConfig"] : null), "blocks", array(), "any", false, true), "left", array()), array())) : (array())))) {
                // line 87
                echo "
                  ";
                // line 88
                $this->loadTemplate("TopxiaAdminBundle:Theme:theme-edit-config-li.html.twig", "TopxiaAdminBundle:Theme:edit.html.twig", 88)->display(array_merge($context, array("isChoiced" => false, "uri" => (isset($context["themeUri"]) ? $context["themeUri"] : null))));
                // line 89
                echo "                
                ";
            }
            // line 91
            echo "              ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pendant'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "            </ul>
          </div>
      </div>


      <div class=\"tab-pane\" id=\"maincolor\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">主色调</div>
          <form class=\"panel-body form-inline radios theme-custom-color-block\">
            <div class=\"form-group\">
              <div class=\"col-lg-3\">
                <label class=\"input-group check-box\">
                  <span class=\"input-group-addon\">
                    <input type=\"radio\" checked=\"checked\" name=\"maincolor\" value=\"default\">
                  </span>
                  <div class=\"mod-cpanel-basic-color\" style=\"background:#46c37b; display:table-cell;height:35px\"></div>
                </label>
              </div>

              <div class=\"col-lg-3\">
                <label class=\"input-group check-box\">
                  <span class=\"input-group-addon\">
                    <input type=\"radio\" checked=\"checked\" name=\"maincolor\" value=\"green-light\">
                  </span>
                  <div class=\"mod-cpanel-basic-color\" style=\"background:#81d867; display:table-cell;height:35px\"></div>
                </label>
              </div>

              <div class=\"col-lg-3\">
                <label class=\"input-group check-box\">
                  <span class=\"input-group-addon\">
                    <input type=\"radio\" name=\"maincolor\" value=\"purple\">
                  </span>
                  <div class=\"mod-cpanel-basic-color\" style=\"background:#773cec; display:table-cell;height:35px\"></div>
                </label>
              </div>

              <div class=\"col-lg-3\">
                <label class=\"input-group check-box\">
                  <span class=\"input-group-addon\">
                    <input type=\"radio\" name=\"maincolor\" value=\"purple-light\">
                  </span>
                  <div class=\"mod-cpanel-basic-color\" style=\"background:#9e9abd; display:table-cell;height:35px\"></div>
                </label>
              </div>

              <div class=\"col-lg-3\">
                <label class=\"input-group check-box\">
                  <span class=\"input-group-addon\">
                    <input type=\"radio\" name=\"maincolor\" value=\"orange\">
                  </span>
                  <div class=\"mod-cpanel-basic-color\" style=\"background:#ff7200; display:table-cell;height:35px\"></div>
                </label>
              </div>

              <div class=\"col-lg-3\">
                <label class=\"input-group check-box\">
                  <span class=\"input-group-addon\">
                    <input type=\"radio\" name=\"maincolor\" value=\"orange-light\">
                  </span>
                  <div class=\"mod-cpanel-basic-color\" style=\"background:#f9b469; display:table-cell;height:35px\"></div>
                </label>
              </div>
             
              <div class=\"col-lg-3\">
                <label class=\"input-group check-box\">
                  <span class=\"input-group-addon\">
                    <input type=\"radio\" name=\"maincolor\" value=\"blue\">
                  </span>
                  <div class=\"mod-cpanel-basic-color\" style=\"background:#0081e6; display:table-cell;height:35px\"></div>
                </label>
              </div>

              <div class=\"col-lg-3\">
                <label class=\"input-group check-box\">
                  <span class=\"input-group-addon\">
                    <input type=\"radio\" name=\"maincolor\" value=\"blue-light\">
                  </span>
                  <div class=\"mod-cpanel-basic-color\" style=\"background:#4bbbfa; display:table-cell;height:35px\"></div>
                </label>
              </div>

              <div class=\"col-lg-3\">
                <label class=\"input-group check-box\">
                  <span class=\"input-group-addon\">
                    <input type=\"radio\" name=\"maincolor\" value=\"red\">
                  </span>
                  <div class=\"mod-cpanel-basic-color\" style=\"background:#cf010e; display:table-cell;height:35px\"></div>
                </label>
              </div>

              <div class=\"col-lg-3\">
                <label class=\"input-group check-box\">
                  <span class=\"input-group-addon\">
                    <input type=\"radio\" name=\"maincolor\" value=\"red-light\">
                  </span>
                  <div class=\"mod-cpanel-basic-color\" style=\"background:#fd5f56; display:table-cell;height:35px\"></div>
                </label>
              </div>

            </div>  
          </form>
        </div>

        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">导航配色</div>
          <form class=\"panel-body form-inline radios theme-custom-navigationcolor-block\">
            <div class=\"form-group\">
              <div class=\"col-lg-3\">
                <label class=\"input-group check-box\">
                  <span class=\"input-group-addon\">
                    <input type=\"radio\" checked=\"checked\" name=\"navigationcolor\" value=\"default\">
                  </span>
                  <div class=\"mod-cpanel-basic-color\" style=\"background:#212121; display:table-cell;height:35px\"></div>
                </label>
              </div>

              <div class=\"col-lg-3\">
                <label class=\"input-group check-box\">
                  <span class=\"input-group-addon\">
                    <input type=\"radio\" name=\"navigationcolor\" value=\"white\">
                  </span>
                  <div class=\"mod-cpanel-basic-color\" style=\"background:#fff; display:table-cell;height:35px\"></div>
                </label>
              </div>

              <div class=\"col-lg-3\">
                <label class=\"input-group check-box\">
                  <span class=\"input-group-addon\">
                    <input type=\"radio\" name=\"navigationcolor\" value=\"green\">
                  </span>
                  <div class=\"mod-cpanel-basic-color\" style=\"background:#46c37b; display:table-cell;height:35px\"></div>
                </label>
              </div>

              <div class=\"col-lg-3\">
                <label class=\"input-group check-box\">
                  <span class=\"input-group-addon\">
                    <input type=\"radio\" name=\"navigationcolor\" value=\"green-light\">
                  </span>
                  <div class=\"mod-cpanel-basic-color\" style=\"background:#81d867; display:table-cell;height:35px\"></div>
                </label>
              </div>

              <div class=\"col-lg-3\">
                <label class=\"input-group check-box\">
                  <span class=\"input-group-addon\">
                    <input type=\"radio\" name=\"navigationcolor\" value=\"purple\">
                  </span>
                  <div class=\"mod-cpanel-basic-color\" style=\"background:#773cec; display:table-cell;height:35px\"></div>
                </label>
              </div>

              <div class=\"col-lg-3\">
                <label class=\"input-group check-box\">
                  <span class=\"input-group-addon\">
                    <input type=\"radio\" name=\"navigationcolor\" value=\"purple-light\">
                  </span>
                  <div class=\"mod-cpanel-basic-color\" style=\"background:#9e9abd; display:table-cell;height:35px\"></div>
                </label>
              </div>

              <div class=\"col-lg-3\">
                <label class=\"input-group check-box\">
                  <span class=\"input-group-addon\">
                    <input type=\"radio\" name=\"navigationcolor\" value=\"orange\">
                  </span>
                  <div class=\"mod-cpanel-basic-color\" style=\"background:#ff7200; display:table-cell;height:35px\"></div>
                </label>
              </div>

              <div class=\"col-lg-3\">
                <label class=\"input-group check-box\">
                  <span class=\"input-group-addon\">
                    <input type=\"radio\" name=\"navigationcolor\" value=\"orange-light\">
                  </span>
                  <div class=\"mod-cpanel-basic-color\" style=\"background:#f9b469; display:table-cell;height:35px\"></div>
                </label>
              </div>

              <div class=\"col-lg-3\">
                <label class=\"input-group check-box\">
                  <span class=\"input-group-addon\">
                    <input type=\"radio\" name=\"navigationcolor\" value=\"blue\">
                  </span>
                  <div class=\"mod-cpanel-basic-color\" style=\"background:#0081e6; display:table-cell;height:35px\"></div>
                </label>
              </div>

              <div class=\"col-lg-3\">
                <label class=\"input-group check-box\">
                  <span class=\"input-group-addon\">
                    <input type=\"radio\" name=\"navigationcolor\" value=\"blue-light\">
                  </span>
                  <div class=\"mod-cpanel-basic-color\" style=\"background:#4bbbfa; display:table-cell;height:35px\"></div>
                </label>
              </div>

              <div class=\"col-lg-3\">
                <label class=\"input-group check-box\">
                  <span class=\"input-group-addon\">
                    <input type=\"radio\" name=\"navigationcolor\" value=\"red\">
                  </span>
                  <div class=\"mod-cpanel-basic-color\" style=\"background:#cf010e; display:table-cell;height:35px\"></div>
                </label>
              </div>

              <div class=\"col-lg-3\">
                <label class=\"input-group check-box\">
                  <span class=\"input-group-addon\">
                    <input type=\"radio\" name=\"navigationcolor\" value=\"red-light\">
                  </span>
                  <div class=\"mod-cpanel-basic-color\" style=\"background:#fd5f56; display:table-cell;height:35px\"></div>
                </label>
              </div>
             
            </div>  
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<div class=\"mod-preview-mask\">
  <iframe src=\"";
        // line 317
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_themes_show", array("uri" => (isset($context["themeUri"]) ? $context["themeUri"] : null))), "html", null, true);
        echo "\" marginheight=\"0\" marginwidth=\"0\" frameborder=\"0\" scrolling=\"no\" width=\"100%\" height=\"100%\" id=\"iframepage\" name=\"iframepage\">
  </iframe>
  <div class=\"pm-iframe\"></div>
</div>

<div class=\"col-md-1\"></div>

  ";
        // line 324
        $this->loadTemplate("TopxiaWebBundle::script_boot.html.twig", "TopxiaAdminBundle:Theme:edit.html.twig", 324)->display(array_merge($context, array("script_main" => $this->env->getExtension('assets')->getAssetUrl("bundles/topxiaadmin/js/admin-app.js"))));
        // line 325
        echo "
<div id=\"modal\" class=\"modal\"></div>

</body>
</html>


<style>
  body {
    padding-bottom: 0
  }
  .list-group {
    height: 244px;
    overflow:auto;
  }

  #iframepage {

  }
  .mod-preview-mask {
    width: 100%;
    min-height: 100%;
    position: relative;
    border-top: 1px solid #ddd;
  }

  iframe {
    z-index: 1024;
  }

  .radios, .checkboxs {
    padding-top: 20px;
    vertical-align: middle;
  }

  .mod-preview-mask .pm-iframe {
    position: absolute;
    z-index: 1023;
    left: 0;
    top: 0;
    border: none;
    opacity: 0;
    filter: alpha(opacity=0);
    width: 100%;
    height: 100%;
  }

  .mod-cpanel-basic-color {
    width: 85px;
    height: 25px;
    border: 1px solid #aaa;
    cursor: pointer;
  }

  .edit-sort {
    color: #aaa;
    margin-right: 20px;
  }

  .edit-sort:hover {
    color: #444;
  }
</style>";
    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        echo "EduSoho主题编辑";
    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Theme:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  559 => 23,  553 => 13,  487 => 325,  485 => 324,  475 => 317,  248 => 92,  234 => 91,  230 => 89,  228 => 88,  225 => 87,  222 => 86,  205 => 85,  202 => 84,  187 => 82,  185 => 81,  182 => 80,  165 => 79,  146 => 63,  139 => 59,  123 => 46,  119 => 45,  108 => 37,  104 => 36,  99 => 33,  97 => 32,  95 => 31,  93 => 30,  86 => 26,  82 => 25,  79 => 24,  77 => 23,  73 => 22,  69 => 21,  65 => 20,  61 => 19,  57 => 18,  52 => 17,  46 => 15,  44 => 14,  40 => 13,  36 => 12,  25 => 3,  23 => 2,  21 => 1,);
    }
}
/* {% import "TopxiaWebBundle::macro.html.twig" as web_macro %}*/
/* {% import "TopxiaAdminBundle::macro.html.twig" as admin_macro %}*/
/* <!DOCTYPE html>*/
/* <!--[if lt IE 7]>      <html class="lt-ie9 lt-ie8 lt-ie7"> <![endif]-->*/
/* <!--[if IE 7]>         <html class="lt-ie9 lt-ie8"> <![endif]-->*/
/* <!--[if IE 8]>         <html class="lt-ie9"> <![endif]-->*/
/* <!--[if gt IE 8]><!--> <html class=""> <!--<![endif]-->*/
/* <head>*/
/*   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">*/
/*   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">*/
/*   <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*   <meta content="{{ csrf_token('site') }}" name="csrf-token" />*/
/*   <title>{% block title %}EduSoho主题编辑{% endblock %}</title>*/
/*   {% if setting('site.favicon') %}*/
/*   <link href="{{ asset(setting('site.favicon')) }}" rel="shortcut icon" />*/
/*   {% endif %}*/
/*   <link href="{{ asset('assets/libs/gallery2/bootstrap/3.1.1/css/bootstrap.css') }}" rel="stylesheet" />*/
/*   <link href="{{ asset('assets/css/common.css') }}" rel="stylesheet" />*/
/*   <link href="{{ asset('bundles/topxiaadmin/css/admin.css') }}" rel="stylesheet" />*/
/*   <link href="{{ asset('bundles/topxiaadmin/css/admin_v2.css') }}" rel="stylesheet" />*/
/*   <link rel="stylesheet" media="screen" href="{{ asset('assets/css/bootstrap-extends.css') }}" />*/
/*   <link rel="stylesheet" media="screen" href="{{ asset('bundles/topxiaweb/css/web.css') }}" />*/
/*   {% block javascripts %}{% endblock %}*/
/*   <!--[if lt IE 9]>*/
/*     <script src="{{ asset('assets/libs/html5shiv.js') }}"></script>*/
/*     <script src="{{ asset('assets/libs/respond.min.js') }}"></script>*/
/*   <![endif]-->*/
/* </head>*/
/* */
/* {% set nav = nav|default(null) %}*/
/* {% set menu = menu|default(null) %}*/
/* {% set script_controller = 'topxiawebbundle/controller/theme/edit' %}*/
/* */
/* <body>*/
/* */
/* <script id="theme-config" type="text/x-handlebars-template">{{ themeConfig|json_encode|raw }}</script>*/
/* <script id="theme-all-config" type="text/x-handlebars-template">{{ allConfig|json_encode|raw }}</script>*/
/* */
/* <nav class="navbar navbar-inverse site-navbar navbar-fixed-top" role="navigation">*/
/*   <div class="container">*/
/*     <div class="col-md-1"></div>*/
/*     <div class="col-md-10"> */
/*       <a class="navbar-brand">主题编辑</a>*/
/*       <ul class="nav navbar-nav navbar-right">*/
/*       <li><a href="{{ path('admin_setting_theme') }}"><i class="glyphicon glyphicon-remove"></i>取消</a></li>*/
/*       <li><a href="{{ path('admin_confirm_themes_config',{uri:themeUri}) }}"><i class="glyphicon glyphicon-ok"></i> 应用</a></li>*/
/*       </ul>*/
/*     </div>*/
/*     <div class="col-md-1"></div>*/
/*   </div>*/
/* </nav>*/
/* <div class="container">*/
/*   <div class="col-md-1"></div>*/
/*   <div class="col-md-10">*/
/*      <!-- Nav tabs -->*/
/*     <ul class="nav nav-tabs" role="tablist">*/
/*       <li class="active"><a href="#left" role="tab" data-toggle="tab">组件</a></li>*/
/*       <li><a href="#maincolor" role="tab" data-toggle="tab">配色方案</a></li>*/
/*       <a href="{{ path('admin_reset_currentTheme_config', {uri:themeUri}) }}" class="btn btn-primary pull-right">全部重置</a>*/
/*     </ul>*/
/* */
/*     <!-- Tab panes -->*/
/*     <div class="tab-content" id="theme-edit-content" data-url="{{ path('admin_save_themes_config',{uri:themeUri}) }}">*/
/*       <div class="tab-pane active" id="left">*/
/*           <div class="panel panel-default">*/
/*             <!-- Default panel contents -->*/
/*             <div class="panel-heading clearfix">*/
/*               <div class="col-md-4 ">*/
/*                 挂件名称*/
/*               </div>*/
/*               <div class="col-md-4">*/
/*                 自定义名称*/
/*               </div>*/
/* */
/*             </div>*/
/* */
/*             <!-- List group -->*/
/*             <ul class="list-group module-item-list theme-edit-block theme-custom-left-block">*/
/*               {% for pendant in themeConfig.blocks.left|default([]) %}*/
/* */
/*                 {% include 'TopxiaAdminBundle:Theme:theme-edit-config-li.html.twig' with {isChoiced:true,uri:themeUri} %}*/
/*                 */
/*               {% endfor %}*/
/* */
/*               {% for pendant in allConfig.blocks.left|default([]) %}*/
/*                 {% if not is_exist_in_subarray_by_id(pendant, themeConfig.blocks.left|default([])) %}*/
/* */
/*                   {% include 'TopxiaAdminBundle:Theme:theme-edit-config-li.html.twig' with {isChoiced:false,uri:themeUri} %}*/
/*                 */
/*                 {% endif %}*/
/*               {% endfor %}*/
/*             </ul>*/
/*           </div>*/
/*       </div>*/
/* */
/* */
/*       <div class="tab-pane" id="maincolor">*/
/*         <div class="panel panel-default">*/
/*           <div class="panel-heading">主色调</div>*/
/*           <form class="panel-body form-inline radios theme-custom-color-block">*/
/*             <div class="form-group">*/
/*               <div class="col-lg-3">*/
/*                 <label class="input-group check-box">*/
/*                   <span class="input-group-addon">*/
/*                     <input type="radio" checked="checked" name="maincolor" value="default">*/
/*                   </span>*/
/*                   <div class="mod-cpanel-basic-color" style="background:#46c37b; display:table-cell;height:35px"></div>*/
/*                 </label>*/
/*               </div>*/
/* */
/*               <div class="col-lg-3">*/
/*                 <label class="input-group check-box">*/
/*                   <span class="input-group-addon">*/
/*                     <input type="radio" checked="checked" name="maincolor" value="green-light">*/
/*                   </span>*/
/*                   <div class="mod-cpanel-basic-color" style="background:#81d867; display:table-cell;height:35px"></div>*/
/*                 </label>*/
/*               </div>*/
/* */
/*               <div class="col-lg-3">*/
/*                 <label class="input-group check-box">*/
/*                   <span class="input-group-addon">*/
/*                     <input type="radio" name="maincolor" value="purple">*/
/*                   </span>*/
/*                   <div class="mod-cpanel-basic-color" style="background:#773cec; display:table-cell;height:35px"></div>*/
/*                 </label>*/
/*               </div>*/
/* */
/*               <div class="col-lg-3">*/
/*                 <label class="input-group check-box">*/
/*                   <span class="input-group-addon">*/
/*                     <input type="radio" name="maincolor" value="purple-light">*/
/*                   </span>*/
/*                   <div class="mod-cpanel-basic-color" style="background:#9e9abd; display:table-cell;height:35px"></div>*/
/*                 </label>*/
/*               </div>*/
/* */
/*               <div class="col-lg-3">*/
/*                 <label class="input-group check-box">*/
/*                   <span class="input-group-addon">*/
/*                     <input type="radio" name="maincolor" value="orange">*/
/*                   </span>*/
/*                   <div class="mod-cpanel-basic-color" style="background:#ff7200; display:table-cell;height:35px"></div>*/
/*                 </label>*/
/*               </div>*/
/* */
/*               <div class="col-lg-3">*/
/*                 <label class="input-group check-box">*/
/*                   <span class="input-group-addon">*/
/*                     <input type="radio" name="maincolor" value="orange-light">*/
/*                   </span>*/
/*                   <div class="mod-cpanel-basic-color" style="background:#f9b469; display:table-cell;height:35px"></div>*/
/*                 </label>*/
/*               </div>*/
/*              */
/*               <div class="col-lg-3">*/
/*                 <label class="input-group check-box">*/
/*                   <span class="input-group-addon">*/
/*                     <input type="radio" name="maincolor" value="blue">*/
/*                   </span>*/
/*                   <div class="mod-cpanel-basic-color" style="background:#0081e6; display:table-cell;height:35px"></div>*/
/*                 </label>*/
/*               </div>*/
/* */
/*               <div class="col-lg-3">*/
/*                 <label class="input-group check-box">*/
/*                   <span class="input-group-addon">*/
/*                     <input type="radio" name="maincolor" value="blue-light">*/
/*                   </span>*/
/*                   <div class="mod-cpanel-basic-color" style="background:#4bbbfa; display:table-cell;height:35px"></div>*/
/*                 </label>*/
/*               </div>*/
/* */
/*               <div class="col-lg-3">*/
/*                 <label class="input-group check-box">*/
/*                   <span class="input-group-addon">*/
/*                     <input type="radio" name="maincolor" value="red">*/
/*                   </span>*/
/*                   <div class="mod-cpanel-basic-color" style="background:#cf010e; display:table-cell;height:35px"></div>*/
/*                 </label>*/
/*               </div>*/
/* */
/*               <div class="col-lg-3">*/
/*                 <label class="input-group check-box">*/
/*                   <span class="input-group-addon">*/
/*                     <input type="radio" name="maincolor" value="red-light">*/
/*                   </span>*/
/*                   <div class="mod-cpanel-basic-color" style="background:#fd5f56; display:table-cell;height:35px"></div>*/
/*                 </label>*/
/*               </div>*/
/* */
/*             </div>  */
/*           </form>*/
/*         </div>*/
/* */
/*         <div class="panel panel-default">*/
/*           <div class="panel-heading">导航配色</div>*/
/*           <form class="panel-body form-inline radios theme-custom-navigationcolor-block">*/
/*             <div class="form-group">*/
/*               <div class="col-lg-3">*/
/*                 <label class="input-group check-box">*/
/*                   <span class="input-group-addon">*/
/*                     <input type="radio" checked="checked" name="navigationcolor" value="default">*/
/*                   </span>*/
/*                   <div class="mod-cpanel-basic-color" style="background:#212121; display:table-cell;height:35px"></div>*/
/*                 </label>*/
/*               </div>*/
/* */
/*               <div class="col-lg-3">*/
/*                 <label class="input-group check-box">*/
/*                   <span class="input-group-addon">*/
/*                     <input type="radio" name="navigationcolor" value="white">*/
/*                   </span>*/
/*                   <div class="mod-cpanel-basic-color" style="background:#fff; display:table-cell;height:35px"></div>*/
/*                 </label>*/
/*               </div>*/
/* */
/*               <div class="col-lg-3">*/
/*                 <label class="input-group check-box">*/
/*                   <span class="input-group-addon">*/
/*                     <input type="radio" name="navigationcolor" value="green">*/
/*                   </span>*/
/*                   <div class="mod-cpanel-basic-color" style="background:#46c37b; display:table-cell;height:35px"></div>*/
/*                 </label>*/
/*               </div>*/
/* */
/*               <div class="col-lg-3">*/
/*                 <label class="input-group check-box">*/
/*                   <span class="input-group-addon">*/
/*                     <input type="radio" name="navigationcolor" value="green-light">*/
/*                   </span>*/
/*                   <div class="mod-cpanel-basic-color" style="background:#81d867; display:table-cell;height:35px"></div>*/
/*                 </label>*/
/*               </div>*/
/* */
/*               <div class="col-lg-3">*/
/*                 <label class="input-group check-box">*/
/*                   <span class="input-group-addon">*/
/*                     <input type="radio" name="navigationcolor" value="purple">*/
/*                   </span>*/
/*                   <div class="mod-cpanel-basic-color" style="background:#773cec; display:table-cell;height:35px"></div>*/
/*                 </label>*/
/*               </div>*/
/* */
/*               <div class="col-lg-3">*/
/*                 <label class="input-group check-box">*/
/*                   <span class="input-group-addon">*/
/*                     <input type="radio" name="navigationcolor" value="purple-light">*/
/*                   </span>*/
/*                   <div class="mod-cpanel-basic-color" style="background:#9e9abd; display:table-cell;height:35px"></div>*/
/*                 </label>*/
/*               </div>*/
/* */
/*               <div class="col-lg-3">*/
/*                 <label class="input-group check-box">*/
/*                   <span class="input-group-addon">*/
/*                     <input type="radio" name="navigationcolor" value="orange">*/
/*                   </span>*/
/*                   <div class="mod-cpanel-basic-color" style="background:#ff7200; display:table-cell;height:35px"></div>*/
/*                 </label>*/
/*               </div>*/
/* */
/*               <div class="col-lg-3">*/
/*                 <label class="input-group check-box">*/
/*                   <span class="input-group-addon">*/
/*                     <input type="radio" name="navigationcolor" value="orange-light">*/
/*                   </span>*/
/*                   <div class="mod-cpanel-basic-color" style="background:#f9b469; display:table-cell;height:35px"></div>*/
/*                 </label>*/
/*               </div>*/
/* */
/*               <div class="col-lg-3">*/
/*                 <label class="input-group check-box">*/
/*                   <span class="input-group-addon">*/
/*                     <input type="radio" name="navigationcolor" value="blue">*/
/*                   </span>*/
/*                   <div class="mod-cpanel-basic-color" style="background:#0081e6; display:table-cell;height:35px"></div>*/
/*                 </label>*/
/*               </div>*/
/* */
/*               <div class="col-lg-3">*/
/*                 <label class="input-group check-box">*/
/*                   <span class="input-group-addon">*/
/*                     <input type="radio" name="navigationcolor" value="blue-light">*/
/*                   </span>*/
/*                   <div class="mod-cpanel-basic-color" style="background:#4bbbfa; display:table-cell;height:35px"></div>*/
/*                 </label>*/
/*               </div>*/
/* */
/*               <div class="col-lg-3">*/
/*                 <label class="input-group check-box">*/
/*                   <span class="input-group-addon">*/
/*                     <input type="radio" name="navigationcolor" value="red">*/
/*                   </span>*/
/*                   <div class="mod-cpanel-basic-color" style="background:#cf010e; display:table-cell;height:35px"></div>*/
/*                 </label>*/
/*               </div>*/
/* */
/*               <div class="col-lg-3">*/
/*                 <label class="input-group check-box">*/
/*                   <span class="input-group-addon">*/
/*                     <input type="radio" name="navigationcolor" value="red-light">*/
/*                   </span>*/
/*                   <div class="mod-cpanel-basic-color" style="background:#fd5f56; display:table-cell;height:35px"></div>*/
/*                 </label>*/
/*               </div>*/
/*              */
/*             </div>  */
/*           </form>*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
/* <div class="mod-preview-mask">*/
/*   <iframe src="{{ path('admin_themes_show',{uri:themeUri}) }}" marginheight="0" marginwidth="0" frameborder="0" scrolling="no" width="100%" height="100%" id="iframepage" name="iframepage">*/
/*   </iframe>*/
/*   <div class="pm-iframe"></div>*/
/* </div>*/
/* */
/* <div class="col-md-1"></div>*/
/* */
/*   {% include 'TopxiaWebBundle::script_boot.html.twig' with {script_main: asset('bundles/topxiaadmin/js/admin-app.js')} %}*/
/* */
/* <div id="modal" class="modal"></div>*/
/* */
/* </body>*/
/* </html>*/
/* */
/* */
/* <style>*/
/*   body {*/
/*     padding-bottom: 0*/
/*   }*/
/*   .list-group {*/
/*     height: 244px;*/
/*     overflow:auto;*/
/*   }*/
/* */
/*   #iframepage {*/
/* */
/*   }*/
/*   .mod-preview-mask {*/
/*     width: 100%;*/
/*     min-height: 100%;*/
/*     position: relative;*/
/*     border-top: 1px solid #ddd;*/
/*   }*/
/* */
/*   iframe {*/
/*     z-index: 1024;*/
/*   }*/
/* */
/*   .radios, .checkboxs {*/
/*     padding-top: 20px;*/
/*     vertical-align: middle;*/
/*   }*/
/* */
/*   .mod-preview-mask .pm-iframe {*/
/*     position: absolute;*/
/*     z-index: 1023;*/
/*     left: 0;*/
/*     top: 0;*/
/*     border: none;*/
/*     opacity: 0;*/
/*     filter: alpha(opacity=0);*/
/*     width: 100%;*/
/*     height: 100%;*/
/*   }*/
/* */
/*   .mod-cpanel-basic-color {*/
/*     width: 85px;*/
/*     height: 25px;*/
/*     border: 1px solid #aaa;*/
/*     cursor: pointer;*/
/*   }*/
/* */
/*   .edit-sort {*/
/*     color: #aaa;*/
/*     margin-right: 20px;*/
/*   }*/
/* */
/*   .edit-sort:hover {*/
/*     color: #444;*/
/*   }*/
/* </style>*/
