<?php

/* TopxiaAdminBundle::layout.html.twig */
class __TwigTemplate_2121d92257be0bcd797eef7fb57245ec766c69c6cb6600b7765654e0787706c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'content' => array($this, 'block_content'),
            'sidebar' => array($this, 'block_sidebar'),
            'page_title' => array($this, 'block_page_title'),
            'page_buttons' => array($this, 'block_page_buttons'),
            'content_header' => array($this, 'block_content_header'),
            'main' => array($this, 'block_main'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaAdminBundle::layout.html.twig", 1);
        // line 2
        $context["admin_macro"] = $this->loadTemplate("TopxiaAdminBundle::macro.html.twig", "TopxiaAdminBundle::layout.html.twig", 2);
        // line 3
        $context["self_macro"] = $this;
        // line 4
        echo "
<!DOCTYPE html>
";
        // line 6
        $context["menu"] = ((array_key_exists("menu", $context)) ? (_twig_default_filter((isset($context["menu"]) ? $context["menu"] : null), null)) : (null));
        // line 7
        $context["menu_breadcrumb"] = $this->env->getExtension('topxia_menu_twig')->getMenuBreadcrumb("admin", (isset($context["menu"]) ? $context["menu"] : null));
        // line 8
        $context["menu_current"] = twig_last($this->env, (isset($context["menu_breadcrumb"]) ? $context["menu_breadcrumb"] : null));
        // line 9
        $context["menu_nav"] = (($this->getAttribute((isset($context["menu_breadcrumb"]) ? $context["menu_breadcrumb"] : null), 0, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu_breadcrumb"]) ? $context["menu_breadcrumb"] : null), 0, array(), "array"), null)) : (null));
        // line 10
        $context["menu_sidebar"] = (($this->getAttribute((isset($context["menu_breadcrumb"]) ? $context["menu_breadcrumb"] : null), 1, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu_breadcrumb"]) ? $context["menu_breadcrumb"] : null), 1, array(), "array"), null)) : (null));
        // line 11
        $context["menu_main"] = (($this->getAttribute((isset($context["menu_breadcrumb"]) ? $context["menu_breadcrumb"] : null), 2, array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu_breadcrumb"]) ? $context["menu_breadcrumb"] : null), 2, array(), "array"), null)) : (null));
        // line 12
        $context["menu_hiddens"] = $this->env->getExtension('topxia_web_twig')->getSetting("menu_hiddens", array());
        // line 13
        echo "<!--[if lt IE 7]>      <html class=\"lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"\"> <!--<![endif]-->
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
  <meta name=\"renderer\" content=\"webkit\">
  <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
  <meta content=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\" name=\"csrf-token\" />
  <title>
    ";
        // line 24
        $this->displayBlock('title', $context, $blocks);
        // line 33
        echo "    ";
        if ( !$this->env->getExtension('topxia_web_twig')->getSetting("copyright.owned")) {
            echo " | 智慧湘农云平台";
        }
        // line 34
        echo "  </title>

  ";
        // line 36
        if ($this->env->getExtension('topxia_web_twig')->getSetting("site.favicon")) {
            // line 37
            echo "    <link rel=\"icon\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('topxia_web_twig')->getSetting("site.favicon")), "html", null, true);
            echo "\" type=\"image/x-icon\" />
    <link href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('topxia_web_twig')->getSetting("site.favicon")), "html", null, true);
            echo "\" rel=\"shortcut icon\" />
  ";
        }
        // line 40
        echo "  
  ";
        // line 41
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 48
        echo "
  ";
        // line 49
        $this->displayBlock('javascripts', $context, $blocks);
        // line 50
        echo "  <!--[if lt IE 9]>
    <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/html5shiv.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/respond.min.js"), "html", null, true);
        echo "\"></script>
  <![endif]-->
</head>
<body>
  <div class=\"navbar navbar-inverse navbar-fixed-top\">
    <div class=\"container\">
      <div class=\"navbar-header\">
        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
          <span class=\"icon-bar\"></span>
        </button>
        <a class=\"navbar-brand\" href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getUrl("admin");
        echo "\">";
        if ( !$this->env->getExtension('topxia_web_twig')->getSetting("copyright.owned")) {
        }
        echo "管理后台</a>
      </div>
      <div class=\"navbar-collapse collapse\">
        <ul class=\"nav navbar-nav\">
           ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('topxia_menu_twig')->getMenuChildren("admin", "admin", 1));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 69
            echo "            ";
            if (($this->getAttribute($context["m"], "code", array()) == "admin_app")) {
                // line 70
                echo "               ";
                if ( !$this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
                    // line 71
                    echo "                ";
                    $context["parameter"] = array("postStatus" => "all");
                    // line 72
                    echo "                ";
                    $context["m"] = $this->env->getExtension('topxia_web_twig')->arrayMerge($context["m"], array("router_params" => (isset($context["parameter"]) ? $context["parameter"] : null), "router_name" => "admin_app_center"));
                    // line 73
                    echo "               ";
                }
                // line 74
                echo "            ";
            }
            // line 75
            echo "
            ";
            // line 76
            if (($this->getAttribute($context["m"], "code", array()) == "admin_system")) {
                // line 77
                echo "              ";
                if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
                    // line 78
                    echo "              <li ";
                    if (($this->getAttribute($context["m"], "code", array()) == (($this->getAttribute((isset($context["menu_nav"]) ? $context["menu_nav"] : null), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu_nav"]) ? $context["menu_nav"] : null), "code", array()), null)) : (null)))) {
                        echo "class=\"active\"";
                    }
                    echo ">
              ";
                    // line 79
                    echo $context["self_macro"]->getmenu_link_html($context, $context["m"]);
                    echo "
              </li>
              ";
                }
                // line 82
                echo "            ";
            } else {
                echo "    
              ";
                // line 83
                if ( !(($this->getAttribute($context["m"], "code", array()) == "admin_app") && (($this->env->getExtension('topxia_web_twig')->getSetting("copyright.thirdCopyright") == 1) || $this->env->getExtension('topxia_web_twig')->isWithoutNetwork()))) {
                    // line 84
                    echo "                <li ";
                    if (($this->getAttribute($context["m"], "code", array()) == (($this->getAttribute((isset($context["menu_nav"]) ? $context["menu_nav"] : null), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu_nav"]) ? $context["menu_nav"] : null), "code", array()), null)) : (null)))) {
                        echo "class=\"active\"";
                    }
                    echo ">
                  ";
                    // line 85
                    echo $context["self_macro"]->getmenu_link_html($context, $context["m"]);
                    echo "
                </li>
              ";
                }
                // line 88
                echo "            ";
            }
            // line 89
            echo "
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "        </ul>

        <ul class=\"nav navbar-nav navbar-right\">
          <li data-url=\"";
        // line 94
        echo $this->env->getExtension('routing')->getPath("admin_common_admin");
        echo "\">
            <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" ><span class=\"glyphicon glyphicon-list admin-star\"></span> 常用</a>
            <ul class=\"dropdown-menu shortcuts\">
              ";
        // line 97
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaAdminBundle:CommonAdmin:commonAdmin"));
        echo "
            </ul>
          </li>
          <li><a href=\"";
        // line 100
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\"><i class=\"glyphicon glyphicon-home\"></i> 回首页</a></li>

          <li class=\"dropdown\">
                <a href=\"javascript:;\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"glyphicon glyphicon-user\"></i> ";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "nickname", array()), "html", null, true);
        echo " <span class=\"glyphicon glyphicon-chevron-down\"></span></a>
                <ul class=\"dropdown-menu main-list\">
                  <li><a href=\"";
        // line 105
        echo $this->env->getExtension('routing')->getPath("lplogout");
        echo "\"><i class=\"glyphicon glyphicon-off\"></i> 退出</a></li>
                </ul>
              </li>
        </ul>

      </div><!--/.navbar-collapse -->
    </div>
  </div>
  
  <div class=\"container\">
    <div class=\"row\">
      ";
        // line 116
        $this->displayBlock('content', $context, $blocks);
        // line 196
        echo "    </div>
  </div>

  ";
        // line 199
        $this->displayBlock('footer', $context, $blocks);
        // line 202
        echo "
  ";
        // line 203
        $this->loadTemplate("TopxiaWebBundle::script_boot.html.twig", "TopxiaAdminBundle::layout.html.twig", 203)->display(array_merge($context, array("script_main" => $this->env->getExtension('assets')->getAssetUrl("bundles/topxiaadmin/js/admin-app.js"))));
        // line 204
        echo "  <div id=\"modal\" class=\"modal\" ></div>
  ";
        // line 205
        if (($this->env->getExtension('topxia_web_twig')->getSetting("copyright.thirdCopyright") != 1)) {
            // line 206
            echo "    <div class=\"fixed-bar\">
      <a href=\"";
            // line 207
            echo $this->env->getExtension('routing')->getPath("admin_feedback");
            echo "\"  target='_blank' class=\"icon-question-text feedback\">
        <i class=\"es-icon es-icon-help\"></i>
        <span>产品<br/>反馈</span>
      </a>
    </div>
  ";
        }
        // line 213
        echo "</body>
</html>

";
    }

    // line 24
    public function block_title($context, array $blocks = array())
    {
        // line 25
        echo "      ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["menu_breadcrumb"]) ? $context["menu_breadcrumb"] : null)));
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
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 26
            echo "        ";
            if (($this->getAttribute($context["loop"], "index", array()) == twig_length_filter($this->env, (isset($context["menu_breadcrumb"]) ? $context["menu_breadcrumb"] : null)))) {
                // line 27
                echo "          ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "name", array()), "html", null, true);
                echo "
        ";
            } else {
                // line 29
                echo "          ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["m"], "name", array()), "html", null, true);
                echo " -
        ";
            }
            // line 31
            echo "      ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "    ";
    }

    // line 41
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 42
        echo "  <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/libs/gallery2/bootstrap/3.1.1/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  <link href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/common.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  <link href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiaadmin/css/admin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  <link href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/topxiaadmin/css/admin_v2.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  <link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/v2/css/es-icon.css"), "html", null, true);
        echo "\" />
  ";
    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 116
    public function block_content($context, array $blocks = array())
    {
        // line 117
        echo "
        <div class=\"col-md-2\">
          ";
        // line 119
        $this->displayBlock('sidebar', $context, $blocks);
        // line 138
        echo "        </div>

        <div class=\"col-md-10\">
          <div class=\"page-header clearfix\">
            <h1 class=\"pull-left\">";
        // line 142
        $this->displayBlock('page_title', $context, $blocks);
        echo "</h1>
            <div class=\"pull-right\">

              ";
        // line 145
        $this->displayBlock('page_buttons', $context, $blocks);
        // line 152
        echo "
            </div>
          </div>

          ";
        // line 156
        $context["menu_breadcrumb_length"] = twig_length_filter($this->env, (isset($context["menu_breadcrumb"]) ? $context["menu_breadcrumb"] : null));
        // line 157
        echo "
          ";
        // line 158
        if (((isset($context["menu_breadcrumb_length"]) ? $context["menu_breadcrumb_length"] : null) >= 3)) {
            // line 159
            echo "            ";
            $context["tabMenus"] = $this->env->getExtension('topxia_menu_twig')->getMenuChildren("admin", (($this->getAttribute($this->getAttribute((isset($context["menu_breadcrumb"]) ? $context["menu_breadcrumb"] : null), 1, array(), "array", false, true), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["menu_breadcrumb"]) ? $context["menu_breadcrumb"] : null), 1, array(), "array", false, true), "code", array()), null)) : (null)), 1);
            // line 160
            echo "          ";
        }
        // line 161
        echo "
          ";
        // line 162
        if (((isset($context["menu_breadcrumb_length"]) ? $context["menu_breadcrumb_length"] : null) >= 4)) {
            // line 163
            echo "            ";
            $context["subTabMenus"] = $this->env->getExtension('topxia_menu_twig')->getMenuChildren("admin", (($this->getAttribute($this->getAttribute((isset($context["menu_breadcrumb"]) ? $context["menu_breadcrumb"] : null), 2, array(), "array", false, true), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["menu_breadcrumb"]) ? $context["menu_breadcrumb"] : null), 2, array(), "array", false, true), "code", array()), null)) : (null)), 1);
            // line 164
            echo "          ";
        }
        // line 165
        echo "
          ";
        // line 166
        $this->displayBlock('content_header', $context, $blocks);
        // line 167
        echo "          
          ";
        // line 168
        if ((((array_key_exists("tabMenus", $context)) ? (_twig_default_filter((isset($context["tabMenus"]) ? $context["tabMenus"] : null), null)) : (null)) && ($this->getAttribute((isset($context["menu_current"]) ? $context["menu_current"] : null), "group", array()) == 1))) {
            // line 169
            echo "            <ul class=\"nav nav-tabs mbm\">
              ";
            // line 170
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tabMenus"]) ? $context["tabMenus"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 171
                echo "                <li ";
                if (($this->getAttribute($context["m"], "code", array()) == (($this->getAttribute((isset($context["menu_main"]) ? $context["menu_main"] : null), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu_main"]) ? $context["menu_main"] : null), "code", array()), null)) : (null)))) {
                    echo "class=\"active\"";
                }
                echo ">
                  ";
                // line 172
                if ( !(($this->getAttribute((isset($context["menu_hiddens"]) ? $context["menu_hiddens"] : null), $this->getAttribute($context["m"], "code", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu_hiddens"]) ? $context["menu_hiddens"] : null), $this->getAttribute($context["m"], "code", array()), array(), "array"), false)) : (false))) {
                    // line 173
                    echo "                    ";
                    echo $context["self_macro"]->getmenu_link_html($context, $context["m"], (($this->getAttribute($context["m"], "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["m"], "class", array()), "")) : ("")));
                    echo "
                  ";
                }
                // line 175
                echo "                </li>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 177
            echo "            </ul>
          ";
        }
        // line 179
        echo "
          ";
        // line 180
        if ((((array_key_exists("subTabMenus", $context)) ? (_twig_default_filter((isset($context["subTabMenus"]) ? $context["subTabMenus"] : null), null)) : (null)) && ($this->getAttribute((isset($context["menu_current"]) ? $context["menu_current"] : null), "group", array()) == 1))) {
            // line 181
            echo "            <ul class=\"nav nav-pills mbl small\">
              ";
            // line 182
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["subTabMenus"]) ? $context["subTabMenus"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 183
                echo "                <li ";
                if (($this->getAttribute($context["m"], "code", array()) == (($this->getAttribute($this->getAttribute((isset($context["menu_breadcrumb"]) ? $context["menu_breadcrumb"] : null), 3, array(), "array", false, true), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["menu_breadcrumb"]) ? $context["menu_breadcrumb"] : null), 3, array(), "array", false, true), "code", array()), null)) : (null)))) {
                    echo "class=\"active\"";
                }
                echo ">
                  ";
                // line 184
                if ( !(($this->getAttribute((isset($context["menu_hiddens"]) ? $context["menu_hiddens"] : null), $this->getAttribute($context["m"], "code", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu_hiddens"]) ? $context["menu_hiddens"] : null), $this->getAttribute($context["m"], "code", array()), array(), "array"), false)) : (false))) {
                    // line 185
                    echo "                    ";
                    echo $context["self_macro"]->getmenu_link_html($context, $context["m"]);
                    echo "
                  ";
                }
                // line 187
                echo "                </li>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 189
            echo "            </ul>
          ";
        }
        // line 191
        echo "
          ";
        // line 192
        $this->displayBlock('main', $context, $blocks);
        // line 193
        echo "        </div>

      ";
    }

    // line 119
    public function block_sidebar($context, array $blocks = array())
    {
        // line 120
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('topxia_menu_twig')->getMenuChildren("admin", (($this->getAttribute((isset($context["menu_nav"]) ? $context["menu_nav"] : null), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu_nav"]) ? $context["menu_nav"] : null), "code", array()), null)) : (null))));
        foreach ($context['_seq'] as $context["_key"] => $context["groupedMenus"]) {
            // line 121
            echo "
              <div class=\"list-group\">
                ";
            // line 123
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["groupedMenus"]);
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 124
                echo "                ";
                $context["array"] = array("0" => "admin_my_cloud", "1" => "admin_setting_cloud_video", "2" => "admin_setting_cloud");
                // line 125
                echo "                 ";
                if ((!twig_in_filter($this->getAttribute($context["m"], "code", array()), (isset($context["array"]) ? $context["array"] : null)) || $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"))) {
                    // line 126
                    echo "                            
                  ";
                    // line 127
                    if ( !(($this->getAttribute((isset($context["menu_hiddens"]) ? $context["menu_hiddens"] : null), $this->getAttribute($context["m"], "code", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu_hiddens"]) ? $context["menu_hiddens"] : null), $this->getAttribute($context["m"], "code", array()), array(), "array"), false)) : (false))) {
                        // line 128
                        echo "                    ";
                        $context["menuClass"] = ((($this->getAttribute($context["m"], "code", array()) == (($this->getAttribute((isset($context["menu_sidebar"]) ? $context["menu_sidebar"] : null), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu_sidebar"]) ? $context["menu_sidebar"] : null), "code", array()), null)) : (null)))) ? ("list-group-item active") : ("list-group-item"));
                        // line 129
                        echo "                    ";
                        echo $context["self_macro"]->getmenu_link_html($context, $context["m"], (isset($context["menuClass"]) ? $context["menuClass"] : null));
                        echo "
                  ";
                    }
                    // line 131
                    echo "                      
                  ";
                }
                // line 133
                echo "
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 135
            echo "              </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['groupedMenus'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 137
        echo "          ";
    }

    // line 142
    public function block_page_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["menu_current"]) ? $context["menu_current"] : null), "fullname", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu_current"]) ? $context["menu_current"] : null), "fullname", array()), $this->getAttribute((isset($context["menu_current"]) ? $context["menu_current"] : null), "name", array()))) : ($this->getAttribute((isset($context["menu_current"]) ? $context["menu_current"] : null), "name", array()))), "html", null, true);
    }

    // line 145
    public function block_page_buttons($context, array $blocks = array())
    {
        // line 146
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('topxia_menu_twig')->getMenuChildren("admin", $this->getAttribute((isset($context["menu_current"]) ? $context["menu_current"] : null), "code", array()), 2));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 147
            echo "                  ";
            if ( !(($this->getAttribute((isset($context["menu_hiddens"]) ? $context["menu_hiddens"] : null), $this->getAttribute($context["m"], "code", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu_hiddens"]) ? $context["menu_hiddens"] : null), $this->getAttribute($context["m"], "code", array()), array(), "array"), false)) : (false))) {
                // line 148
                echo "                    ";
                echo $context["self_macro"]->getmenu_link_html($context, $context["m"], "btn btn-success btn-sm");
                echo "
                  ";
            }
            // line 150
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        echo "              ";
    }

    // line 166
    public function block_content_header($context, array $blocks = array())
    {
    }

    // line 192
    public function block_main($context, array $blocks = array())
    {
    }

    // line 199
    public function block_footer($context, array $blocks = array())
    {
        // line 200
        echo "    ";
        echo $this->env->getExtension('topxia_web_twig')->getSetting("site.analytics");
        echo " 
  ";
    }

    // line 216
    public function getmenu_link_html($___context__ = null, $__menu__ = null, $__class__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "_context" => $___context__,
            "menu" => $__menu__,
            "class" => $__class__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 217
            echo "  <a 
  ";
            // line 218
            if ((isset($context["class"]) ? $context["class"] : null)) {
                // line 219
                echo "    class=\"";
                echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
                echo "\"
  ";
            }
            // line 221
            echo "  ";
            if (((($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "mode", array()), null)) : (null)) == "modal")) {
                // line 222
                echo "    data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_menu_twig')->getMenuPath($this->env, $context, (isset($context["menu"]) ? $context["menu"] : null)), "html", null, true);
                echo "\"
    data-toggle=\"modal\"
    data-target=\"#modal\"
  ";
            } else {
                // line 226
                echo "    href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_menu_twig')->getMenuPath($this->env, $context, (isset($context["menu"]) ? $context["menu"] : null)), "html", null, true);
                echo "\"
  ";
            }
            // line 228
            echo "  ";
            if ((($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "blank", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "blank", array()), false)) : (false))) {
                // line 229
                echo "    target=\"blank\"
  ";
            }
            // line 231
            echo "  >";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "name", array()), "html", null, true);
            echo "</a>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  677 => 231,  673 => 229,  670 => 228,  664 => 226,  656 => 222,  653 => 221,  647 => 219,  645 => 218,  642 => 217,  628 => 216,  621 => 200,  618 => 199,  613 => 192,  608 => 166,  604 => 151,  598 => 150,  592 => 148,  589 => 147,  584 => 146,  581 => 145,  575 => 142,  571 => 137,  564 => 135,  557 => 133,  553 => 131,  547 => 129,  544 => 128,  542 => 127,  539 => 126,  536 => 125,  533 => 124,  529 => 123,  525 => 121,  520 => 120,  517 => 119,  511 => 193,  509 => 192,  506 => 191,  502 => 189,  495 => 187,  489 => 185,  487 => 184,  480 => 183,  476 => 182,  473 => 181,  471 => 180,  468 => 179,  464 => 177,  457 => 175,  451 => 173,  449 => 172,  442 => 171,  438 => 170,  435 => 169,  433 => 168,  430 => 167,  428 => 166,  425 => 165,  422 => 164,  419 => 163,  417 => 162,  414 => 161,  411 => 160,  408 => 159,  406 => 158,  403 => 157,  401 => 156,  395 => 152,  393 => 145,  387 => 142,  381 => 138,  379 => 119,  375 => 117,  372 => 116,  367 => 49,  361 => 46,  357 => 45,  353 => 44,  349 => 43,  344 => 42,  341 => 41,  337 => 32,  323 => 31,  317 => 29,  311 => 27,  308 => 26,  290 => 25,  287 => 24,  280 => 213,  271 => 207,  268 => 206,  266 => 205,  263 => 204,  261 => 203,  258 => 202,  256 => 199,  251 => 196,  249 => 116,  235 => 105,  230 => 103,  224 => 100,  218 => 97,  212 => 94,  207 => 91,  200 => 89,  197 => 88,  191 => 85,  184 => 84,  182 => 83,  177 => 82,  171 => 79,  164 => 78,  161 => 77,  159 => 76,  156 => 75,  153 => 74,  150 => 73,  147 => 72,  144 => 71,  141 => 70,  138 => 69,  134 => 68,  124 => 64,  109 => 52,  105 => 51,  102 => 50,  100 => 49,  97 => 48,  95 => 41,  92 => 40,  87 => 38,  82 => 37,  80 => 36,  76 => 34,  71 => 33,  69 => 24,  64 => 22,  53 => 13,  51 => 12,  49 => 11,  47 => 10,  45 => 9,  43 => 8,  41 => 7,  39 => 6,  35 => 4,  33 => 3,  31 => 2,  29 => 1,);
    }
}
/* {% import "TopxiaWebBundle::macro.html.twig" as web_macro %}*/
/* {% import "TopxiaAdminBundle::macro.html.twig" as admin_macro %}*/
/* {% import _self as self_macro %}*/
/* */
/* <!DOCTYPE html>*/
/* {% set menu = menu|default(null) %}*/
/* {% set menu_breadcrumb = menu_breadcrumb('admin', menu) %}*/
/* {% set menu_current = menu_breadcrumb|last %}*/
/* {% set menu_nav = menu_breadcrumb[0]|default(null) %}*/
/* {% set menu_sidebar = menu_breadcrumb[1]|default(null) %}*/
/* {% set menu_main = menu_breadcrumb[2]|default(null) %}*/
/* {% set menu_hiddens = setting('menu_hiddens', []) %}*/
/* <!--[if lt IE 7]>      <html class="lt-ie9 lt-ie8 lt-ie7"> <![endif]-->*/
/* <!--[if IE 7]>         <html class="lt-ie9 lt-ie8"> <![endif]-->*/
/* <!--[if IE 8]>         <html class="lt-ie9"> <![endif]-->*/
/* <!--[if gt IE 8]><!--> <html class=""> <!--<![endif]-->*/
/* <head>*/
/*   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">*/
/*   <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">*/
/*   <meta name="renderer" content="webkit">*/
/*   <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*   <meta content="{{ csrf_token('site') }}" name="csrf-token" />*/
/*   <title>*/
/*     {% block title %}*/
/*       {% for m in menu_breadcrumb|reverse %}*/
/*         {% if loop.index == menu_breadcrumb|length %}*/
/*           {{ m.name }}*/
/*         {% else %}*/
/*           {{ m.name }} -*/
/*         {% endif %}*/
/*       {% endfor %}*/
/*     {% endblock %}*/
/*     {% if not setting('copyright.owned') %} | 智慧湘农云平台{% endif %}*/
/*   </title>*/
/* */
/*   {% if setting('site.favicon') %}*/
/*     <link rel="icon" href="{{ asset(setting('site.favicon')) }}" type="image/x-icon" />*/
/*     <link href="{{ asset(setting('site.favicon')) }}" rel="shortcut icon" />*/
/*   {% endif %}*/
/*   */
/*   {% block stylesheets %}*/
/*   <link href="{{ asset('assets/libs/gallery2/bootstrap/3.1.1/css/bootstrap.css') }}" rel="stylesheet" />*/
/*   <link href="{{ asset('assets/css/common.css') }}" rel="stylesheet" />*/
/*   <link href="{{ asset('bundles/topxiaadmin/css/admin.css') }}" rel="stylesheet" />*/
/*   <link href="{{ asset('bundles/topxiaadmin/css/admin_v2.css') }}" rel="stylesheet" />*/
/*   <link rel="stylesheet" media="screen" href="{{ asset('assets/v2/css/es-icon.css') }}" />*/
/*   {% endblock %}*/
/* */
/*   {% block javascripts %}{% endblock %}*/
/*   <!--[if lt IE 9]>*/
/*     <script src="{{ asset('assets/libs/html5shiv.js') }}"></script>*/
/*     <script src="{{ asset('assets/libs/respond.min.js') }}"></script>*/
/*   <![endif]-->*/
/* </head>*/
/* <body>*/
/*   <div class="navbar navbar-inverse navbar-fixed-top">*/
/*     <div class="container">*/
/*       <div class="navbar-header">*/
/*         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">*/
/*           <span class="icon-bar"></span>*/
/*           <span class="icon-bar"></span>*/
/*           <span class="icon-bar"></span>*/
/*         </button>*/
/*         <a class="navbar-brand" href="{{ url('admin') }}">{% if not setting('copyright.owned') %}{% endif %}管理后台</a>*/
/*       </div>*/
/*       <div class="navbar-collapse collapse">*/
/*         <ul class="nav navbar-nav">*/
/*            {% for m in menu_children('admin', 'admin', 1) %}*/
/*             {% if m.code == "admin_app" %}*/
/*                {% if not is_granted('ROLE_SUPER_ADMIN') %}*/
/*                 {% set parameter = {'postStatus':'all'} %}*/
/*                 {% set m = m|array_merge({'router_params':parameter,'router_name':'admin_app_center'}) %}*/
/*                {% endif %}*/
/*             {% endif %}*/
/* */
/*             {% if m.code == "admin_system" %}*/
/*               {% if is_granted('ROLE_SUPER_ADMIN') %}*/
/*               <li {% if m.code == menu_nav.code|default(null) %}class="active"{% endif %}>*/
/*               {{ self_macro.menu_link_html(_context, m) }}*/
/*               </li>*/
/*               {% endif %}*/
/*             {% else %}    */
/*               {% if not (m.code == 'admin_app' and (setting('copyright.thirdCopyright') == 1 or is_without_network())) %}*/
/*                 <li {% if m.code == menu_nav.code|default(null)  %}class="active"{% endif %}>*/
/*                   {{ self_macro.menu_link_html(_context, m) }}*/
/*                 </li>*/
/*               {% endif %}*/
/*             {% endif %}*/
/* */
/*           {% endfor %}*/
/*         </ul>*/
/* */
/*         <ul class="nav navbar-nav navbar-right">*/
/*           <li data-url="{{path('admin_common_admin')}}">*/
/*             <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" ><span class="glyphicon glyphicon-list admin-star"></span> 常用</a>*/
/*             <ul class="dropdown-menu shortcuts">*/
/*               {{ render(controller('TopxiaAdminBundle:CommonAdmin:commonAdmin')) }}*/
/*             </ul>*/
/*           </li>*/
/*           <li><a href="{{ path('homepage') }}"><i class="glyphicon glyphicon-home"></i> 回首页</a></li>*/
/* */
/*           <li class="dropdown">*/
/*                 <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i> {{ app.user.nickname }} <span class="glyphicon glyphicon-chevron-down"></span></a>*/
/*                 <ul class="dropdown-menu main-list">*/
/*                   <li><a href="{{ path('lplogout') }}"><i class="glyphicon glyphicon-off"></i> 退出</a></li>*/
/*                 </ul>*/
/*               </li>*/
/*         </ul>*/
/* */
/*       </div><!--/.navbar-collapse -->*/
/*     </div>*/
/*   </div>*/
/*   */
/*   <div class="container">*/
/*     <div class="row">*/
/*       {% block content %}*/
/* */
/*         <div class="col-md-2">*/
/*           {% block sidebar %}*/
/*             {% for groupedMenus in menu_children('admin', menu_nav.code|default(null)) %}*/
/* */
/*               <div class="list-group">*/
/*                 {% for m in groupedMenus %}*/
/*                 {% set array = {'0':'admin_my_cloud','1':'admin_setting_cloud_video','2':'admin_setting_cloud'} %}*/
/*                  {% if m.code not in  array or is_granted('ROLE_SUPER_ADMIN') %}*/
/*                             */
/*                   {% if not menu_hiddens[m.code]|default(false)  %}*/
/*                     {% set menuClass = m.code == menu_sidebar.code|default(null) ? 'list-group-item active' : 'list-group-item' %}*/
/*                     {{ self_macro.menu_link_html(_context, m, menuClass) }}*/
/*                   {% endif %}*/
/*                       */
/*                   {% endif %}*/
/* */
/*                 {% endfor %}*/
/*               </div>*/
/*             {% endfor %}*/
/*           {% endblock %}*/
/*         </div>*/
/* */
/*         <div class="col-md-10">*/
/*           <div class="page-header clearfix">*/
/*             <h1 class="pull-left">{% block page_title %}{{ menu_current.fullname|default(menu_current.name) }}{% endblock %}</h1>*/
/*             <div class="pull-right">*/
/* */
/*               {% block page_buttons %}*/
/*                 {% for m in menu_children('admin', menu_current.code, 2) %}*/
/*                   {% if not menu_hiddens[m.code]|default(false) %}*/
/*                     {{ self_macro.menu_link_html(_context, m, 'btn btn-success btn-sm') }}*/
/*                   {% endif %}*/
/*                 {% endfor %}*/
/*               {% endblock %}*/
/* */
/*             </div>*/
/*           </div>*/
/* */
/*           {% set menu_breadcrumb_length = menu_breadcrumb|length %}*/
/* */
/*           {% if menu_breadcrumb_length >= 3 %}*/
/*             {% set tabMenus = menu_children('admin', menu_breadcrumb[1].code|default(null), 1) %}*/
/*           {% endif %}*/
/* */
/*           {% if menu_breadcrumb_length >= 4 %}*/
/*             {% set subTabMenus = menu_children('admin', menu_breadcrumb[2].code|default(null), 1) %}*/
/*           {% endif %}*/
/* */
/*           {% block content_header %}{% endblock %}*/
/*           */
/*           {% if tabMenus|default(null) and menu_current.group == 1 %}*/
/*             <ul class="nav nav-tabs mbm">*/
/*               {% for m in tabMenus %}*/
/*                 <li {% if m.code == menu_main.code|default(null) %}class="active"{% endif %}>*/
/*                   {% if not menu_hiddens[m.code]|default(false) %}*/
/*                     {{ self_macro.menu_link_html(_context, m, m.class|default('')) }}*/
/*                   {% endif %}*/
/*                 </li>*/
/*               {% endfor %}*/
/*             </ul>*/
/*           {% endif %}*/
/* */
/*           {% if subTabMenus|default(null) and menu_current.group == 1 %}*/
/*             <ul class="nav nav-pills mbl small">*/
/*               {% for m in subTabMenus %}*/
/*                 <li {% if m.code == menu_breadcrumb[3].code|default(null) %}class="active"{% endif %}>*/
/*                   {% if not menu_hiddens[m.code]|default(false) %}*/
/*                     {{ self_macro.menu_link_html(_context, m) }}*/
/*                   {% endif %}*/
/*                 </li>*/
/*               {% endfor %}*/
/*             </ul>*/
/*           {% endif %}*/
/* */
/*           {% block main %}{% endblock %}*/
/*         </div>*/
/* */
/*       {% endblock %}*/
/*     </div>*/
/*   </div>*/
/* */
/*   {% block footer %}*/
/*     {{ setting('site.analytics')|raw }} */
/*   {% endblock %}*/
/* */
/*   {% include 'TopxiaWebBundle::script_boot.html.twig' with {script_main: asset('bundles/topxiaadmin/js/admin-app.js')} %}*/
/*   <div id="modal" class="modal" ></div>*/
/*   {% if setting('copyright.thirdCopyright') != 1 %}*/
/*     <div class="fixed-bar">*/
/*       <a href="{{path('admin_feedback')}}"  target='_blank' class="icon-question-text feedback">*/
/*         <i class="es-icon es-icon-help"></i>*/
/*         <span>产品<br/>反馈</span>*/
/*       </a>*/
/*     </div>*/
/*   {% endif %}*/
/* </body>*/
/* </html>*/
/* */
/* {% macro menu_link_html(_context, menu, class) %}*/
/*   <a */
/*   {% if class %}*/
/*     class="{{ class }}"*/
/*   {% endif %}*/
/*   {% if menu.mode|default(null) == 'modal' %}*/
/*     data-url="{{ menu_path(menu) }}"*/
/*     data-toggle="modal"*/
/*     data-target="#modal"*/
/*   {% else %}*/
/*     href="{{ menu_path(menu) }}"*/
/*   {% endif %}*/
/*   {% if menu.blank|default(false) %}*/
/*     target="blank"*/
/*   {% endif %}*/
/*   >{{ menu.name }}</a>*/
/* {% endmacro %}*/
