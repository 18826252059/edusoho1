<?php

/* TopxiaAdminBundle::layout.html.twig */
class __TwigTemplate_b5e6e685efd355633c9327b516e77811ab0c845cf5c8ddfca72c98d236bbd89f extends Twig_Template
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
            'page_buttons2' => array($this, 'block_page_buttons2'),
            'page_buttons' => array($this, 'block_page_buttons'),
            'page_content' => array($this, 'block_page_content'),
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
        $context["menu"] = ((array_key_exists("menu", $context)) ? (_twig_default_filter((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), null)) : (null));
        // line 7
        $context["menu_breadcrumb"] = $this->env->getExtension('topxia_menu_twig')->getMenuBreadcrumb("admin", (isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")));
        // line 8
        $context["menu_current"] = twig_last($this->env, (isset($context["menu_breadcrumb"]) ? $context["menu_breadcrumb"] : $this->getContext($context, "menu_breadcrumb")));
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
                    $context["m"] = $this->env->getExtension('topxia_web_twig')->arrayMerge($context["m"], array("router_params" => (isset($context["parameter"]) ? $context["parameter"] : $this->getContext($context, "parameter")), "router_name" => "admin_app_center"));
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
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nickname", array()), "html", null, true);
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
        // line 208
        echo "    </div>
  </div>

  ";
        // line 211
        $this->displayBlock('footer', $context, $blocks);
        // line 214
        echo "
  ";
        // line 215
        $this->loadTemplate("TopxiaWebBundle::script_boot.html.twig", "TopxiaAdminBundle::layout.html.twig", 215)->display(array_merge($context, array("script_main" => $this->env->getExtension('assets')->getAssetUrl("bundles/topxiaadmin/js/admin-app.js"))));
        // line 216
        echo "  <div id=\"modal\" class=\"modal\" ></div>
  ";
        // line 217
        if (($this->env->getExtension('topxia_web_twig')->getSetting("copyright.thirdCopyright") != 1)) {
            // line 218
            echo "    <div class=\"fixed-bar\">
      <a href=\"";
            // line 219
            echo $this->env->getExtension('routing')->getPath("admin_feedback");
            echo "\"  target='_blank' class=\"icon-question-text feedback\">
        <i class=\"es-icon es-icon-help\"></i>
        <span>产品<br/>反馈</span>
      </a>
    </div>
  ";
        }
        // line 225
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
        $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, (isset($context["menu_breadcrumb"]) ? $context["menu_breadcrumb"] : $this->getContext($context, "menu_breadcrumb"))));
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
            if (($this->getAttribute($context["loop"], "index", array()) == twig_length_filter($this->env, (isset($context["menu_breadcrumb"]) ? $context["menu_breadcrumb"] : $this->getContext($context, "menu_breadcrumb"))))) {
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
        echo "              ";
        $this->displayBlock('page_buttons2', $context, $blocks);
        // line 153
        echo "
            </div>
            <div class=\"pull-right\">

              ";
        // line 157
        $this->displayBlock('page_buttons', $context, $blocks);
        // line 164
        echo "
            </div>
          </div>
";
        // line 167
        $this->displayBlock('page_content', $context, $blocks);
        // line 204
        echo "          ";
        $this->displayBlock('main', $context, $blocks);
        // line 205
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
                if ((!twig_in_filter($this->getAttribute($context["m"], "code", array()), (isset($context["array"]) ? $context["array"] : $this->getContext($context, "array"))) || $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"))) {
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
                        echo $context["self_macro"]->getmenu_link_html($context, $context["m"], (isset($context["menuClass"]) ? $context["menuClass"] : $this->getContext($context, "menuClass")));
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
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["menu_current"]) ? $context["menu_current"] : null), "fullname", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu_current"]) ? $context["menu_current"] : null), "fullname", array()), $this->getAttribute((isset($context["menu_current"]) ? $context["menu_current"] : $this->getContext($context, "menu_current")), "name", array()))) : ($this->getAttribute((isset($context["menu_current"]) ? $context["menu_current"] : $this->getContext($context, "menu_current")), "name", array()))), "html", null, true);
    }

    // line 145
    public function block_page_buttons2($context, array $blocks = array())
    {
        // line 146
        echo "                ";
        // line 147
        echo "                  ";
        // line 148
        echo "                    ";
        // line 149
        echo "                    <a class=\"btn btn-info btn-sm mhs\" href=\"./user/import\"><i class=\"glyphicon glyphicon-import\"></i> 批量导入</a>
                  ";
        // line 151
        echo "                ";
        // line 152
        echo "              ";
    }

    // line 157
    public function block_page_buttons($context, array $blocks = array())
    {
        // line 158
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('topxia_menu_twig')->getMenuChildren("admin", $this->getAttribute((isset($context["menu_current"]) ? $context["menu_current"] : $this->getContext($context, "menu_current")), "code", array()), 2));
        foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
            // line 159
            echo "                  ";
            if ( !(($this->getAttribute((isset($context["menu_hiddens"]) ? $context["menu_hiddens"] : null), $this->getAttribute($context["m"], "code", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu_hiddens"]) ? $context["menu_hiddens"] : null), $this->getAttribute($context["m"], "code", array()), array(), "array"), false)) : (false))) {
                // line 160
                echo "                    ";
                echo $context["self_macro"]->getmenu_link_html($context, $context["m"], "btn btn-success btn-sm");
                echo "
                  ";
            }
            // line 162
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 163
        echo "              ";
    }

    // line 167
    public function block_page_content($context, array $blocks = array())
    {
        // line 168
        echo "          ";
        $context["menu_breadcrumb_length"] = twig_length_filter($this->env, (isset($context["menu_breadcrumb"]) ? $context["menu_breadcrumb"] : $this->getContext($context, "menu_breadcrumb")));
        // line 169
        echo "
          ";
        // line 170
        if (((isset($context["menu_breadcrumb_length"]) ? $context["menu_breadcrumb_length"] : $this->getContext($context, "menu_breadcrumb_length")) >= 3)) {
            // line 171
            echo "            ";
            $context["tabMenus"] = $this->env->getExtension('topxia_menu_twig')->getMenuChildren("admin", (($this->getAttribute($this->getAttribute((isset($context["menu_breadcrumb"]) ? $context["menu_breadcrumb"] : null), 1, array(), "array", false, true), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["menu_breadcrumb"]) ? $context["menu_breadcrumb"] : null), 1, array(), "array", false, true), "code", array()), null)) : (null)), 1);
            // line 172
            echo "          ";
        }
        // line 173
        echo "
          ";
        // line 174
        if (((isset($context["menu_breadcrumb_length"]) ? $context["menu_breadcrumb_length"] : $this->getContext($context, "menu_breadcrumb_length")) >= 4)) {
            // line 175
            echo "            ";
            $context["subTabMenus"] = $this->env->getExtension('topxia_menu_twig')->getMenuChildren("admin", (($this->getAttribute($this->getAttribute((isset($context["menu_breadcrumb"]) ? $context["menu_breadcrumb"] : null), 2, array(), "array", false, true), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["menu_breadcrumb"]) ? $context["menu_breadcrumb"] : null), 2, array(), "array", false, true), "code", array()), null)) : (null)), 1);
            // line 176
            echo "          ";
        }
        // line 177
        echo "
          ";
        // line 178
        $this->displayBlock('content_header', $context, $blocks);
        // line 179
        echo "          
          ";
        // line 180
        if ((((array_key_exists("tabMenus", $context)) ? (_twig_default_filter((isset($context["tabMenus"]) ? $context["tabMenus"] : $this->getContext($context, "tabMenus")), null)) : (null)) && ($this->getAttribute((isset($context["menu_current"]) ? $context["menu_current"] : $this->getContext($context, "menu_current")), "group", array()) == 1))) {
            // line 181
            echo "            <ul class=\"nav nav-tabs mbm\">
              ";
            // line 182
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tabMenus"]) ? $context["tabMenus"] : $this->getContext($context, "tabMenus")));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 183
                echo "                <li ";
                if (($this->getAttribute($context["m"], "code", array()) == (($this->getAttribute((isset($context["menu_main"]) ? $context["menu_main"] : null), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu_main"]) ? $context["menu_main"] : null), "code", array()), null)) : (null)))) {
                    echo "class=\"active\"";
                }
                echo ">
                  ";
                // line 184
                if ( !(($this->getAttribute((isset($context["menu_hiddens"]) ? $context["menu_hiddens"] : null), $this->getAttribute($context["m"], "code", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu_hiddens"]) ? $context["menu_hiddens"] : null), $this->getAttribute($context["m"], "code", array()), array(), "array"), false)) : (false))) {
                    // line 185
                    echo "                    ";
                    echo $context["self_macro"]->getmenu_link_html($context, $context["m"], (($this->getAttribute($context["m"], "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["m"], "class", array()), "")) : ("")));
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
        if ((((array_key_exists("subTabMenus", $context)) ? (_twig_default_filter((isset($context["subTabMenus"]) ? $context["subTabMenus"] : $this->getContext($context, "subTabMenus")), null)) : (null)) && ($this->getAttribute((isset($context["menu_current"]) ? $context["menu_current"] : $this->getContext($context, "menu_current")), "group", array()) == 1))) {
            // line 193
            echo "            <ul class=\"nav nav-pills mbl small\">
              ";
            // line 194
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["subTabMenus"]) ? $context["subTabMenus"] : $this->getContext($context, "subTabMenus")));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 195
                echo "                <li ";
                if (($this->getAttribute($context["m"], "code", array()) == (($this->getAttribute($this->getAttribute((isset($context["menu_breadcrumb"]) ? $context["menu_breadcrumb"] : null), 3, array(), "array", false, true), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["menu_breadcrumb"]) ? $context["menu_breadcrumb"] : null), 3, array(), "array", false, true), "code", array()), null)) : (null)))) {
                    echo "class=\"active\"";
                }
                echo ">
                  ";
                // line 196
                if ( !(($this->getAttribute((isset($context["menu_hiddens"]) ? $context["menu_hiddens"] : null), $this->getAttribute($context["m"], "code", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu_hiddens"]) ? $context["menu_hiddens"] : null), $this->getAttribute($context["m"], "code", array()), array(), "array"), false)) : (false))) {
                    // line 197
                    echo "                    ";
                    echo $context["self_macro"]->getmenu_link_html($context, $context["m"]);
                    echo "
                  ";
                }
                // line 199
                echo "                </li>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 201
            echo "            </ul>
          ";
        }
    }

    // line 178
    public function block_content_header($context, array $blocks = array())
    {
    }

    // line 204
    public function block_main($context, array $blocks = array())
    {
    }

    // line 211
    public function block_footer($context, array $blocks = array())
    {
        // line 212
        echo "    ";
        echo $this->env->getExtension('topxia_web_twig')->getSetting("site.analytics");
        echo " 
  ";
    }

    // line 228
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
            // line 229
            echo "  <a 
  ";
            // line 230
            if ((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class"))) {
                // line 231
                echo "    class=\"";
                echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
                echo "\"
  ";
            }
            // line 233
            echo "  ";
            if (((($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "mode", array()), null)) : (null)) == "modal")) {
                // line 234
                echo "    data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_menu_twig')->getMenuPath($this->env, $context, (isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu"))), "html", null, true);
                echo "\"
    data-toggle=\"modal\"
    data-target=\"#modal\"
  ";
            } else {
                // line 238
                echo "    href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_menu_twig')->getMenuPath($this->env, $context, (isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu"))), "html", null, true);
                echo "\"
  ";
            }
            // line 240
            echo "  ";
            if ((($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "blank", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "blank", array()), false)) : (false))) {
                // line 241
                echo "    target=\"blank\"
  ";
            }
            // line 243
            echo "  >";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "name", array()), "html", null, true);
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
        return array (  710 => 243,  706 => 241,  703 => 240,  697 => 238,  689 => 234,  686 => 233,  680 => 231,  678 => 230,  675 => 229,  661 => 228,  654 => 212,  651 => 211,  646 => 204,  641 => 178,  635 => 201,  628 => 199,  622 => 197,  620 => 196,  613 => 195,  609 => 194,  606 => 193,  604 => 192,  601 => 191,  597 => 189,  590 => 187,  584 => 185,  582 => 184,  575 => 183,  571 => 182,  568 => 181,  566 => 180,  563 => 179,  561 => 178,  558 => 177,  555 => 176,  552 => 175,  550 => 174,  547 => 173,  544 => 172,  541 => 171,  539 => 170,  536 => 169,  533 => 168,  530 => 167,  526 => 163,  520 => 162,  514 => 160,  511 => 159,  506 => 158,  503 => 157,  499 => 152,  497 => 151,  494 => 149,  492 => 148,  490 => 147,  488 => 146,  485 => 145,  479 => 142,  475 => 137,  468 => 135,  461 => 133,  457 => 131,  451 => 129,  448 => 128,  446 => 127,  443 => 126,  440 => 125,  437 => 124,  433 => 123,  429 => 121,  424 => 120,  421 => 119,  415 => 205,  412 => 204,  410 => 167,  405 => 164,  403 => 157,  397 => 153,  394 => 145,  389 => 142,  383 => 138,  381 => 119,  377 => 117,  374 => 116,  369 => 49,  363 => 46,  359 => 45,  355 => 44,  351 => 43,  346 => 42,  343 => 41,  339 => 32,  325 => 31,  319 => 29,  313 => 27,  310 => 26,  292 => 25,  289 => 24,  282 => 225,  273 => 219,  270 => 218,  268 => 217,  265 => 216,  263 => 215,  260 => 214,  258 => 211,  253 => 208,  251 => 116,  237 => 105,  232 => 103,  226 => 100,  220 => 97,  214 => 94,  209 => 91,  202 => 89,  199 => 88,  193 => 85,  186 => 84,  184 => 83,  179 => 82,  173 => 79,  166 => 78,  163 => 77,  161 => 76,  158 => 75,  155 => 74,  152 => 73,  149 => 72,  146 => 71,  143 => 70,  140 => 69,  136 => 68,  126 => 64,  111 => 52,  107 => 51,  104 => 50,  102 => 49,  99 => 48,  97 => 41,  94 => 40,  89 => 38,  84 => 37,  82 => 36,  78 => 34,  73 => 33,  71 => 24,  66 => 22,  55 => 13,  53 => 12,  51 => 11,  49 => 10,  47 => 9,  45 => 8,  43 => 7,  41 => 6,  37 => 4,  35 => 3,  33 => 2,  31 => 1,);
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
/*               {#批量导入#}*/
/*               {% block page_buttons2 %}*/
/*                 {#{% for m in menu_children('admin', menu_current.code, 3) %}#}*/
/*                   {#{% if not menu_hiddens[m.code]|default(false) %}#}*/
/*                     {#<a class="btn btn-info btn-sm mhs" href="{{ path('classroom_manage_student_import', {id:19}) }}"><i class="glyphicon glyphicon-import"></i> 批量导入</a>#}*/
/*                     <a class="btn btn-info btn-sm mhs" href="./user/import"><i class="glyphicon glyphicon-import"></i> 批量导入</a>*/
/*                   {#{% endif %}#}*/
/*                 {#{% endfor %}#}*/
/*               {% endblock %}*/
/* */
/*             </div>*/
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
/* {% block page_content %}*/
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
/* {% endblock %}*/
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
