<?php

/* TopxiaAdminBundle:App:center.html.twig */
class __TwigTemplate_57a3619ea357d43ce23a238610b235536497158013b4e137f2cc3c056dbba30f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::cloud-app-layout.html.twig", "TopxiaAdminBundle:App:center.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::cloud-app-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["menu"] = "admin_app_center";
        // line 5
        $context["script_controller"] = "app/center";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
  <div class=\"mbl btn-group\">

      <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getUrl("admin_app_center", array("postStatus" => "all"));
        echo "\" type=\"button\" class=\"btn btn-default btn-sm ";
        if (((isset($context["type"]) ? $context["type"] : null) == "all")) {
            echo " btn-primary";
        }
        echo "\">全部</a>

      <a href=\" ";
        // line 13
        echo $this->env->getExtension('routing')->getUrl("admin_app_center", array("postStatus" => "theme"));
        echo "\" type=\"button\" class=\"btn btn-default btn-sm ";
        if (((isset($context["type"]) ? $context["type"] : null) == "theme")) {
            echo "btn-primary";
        }
        echo "\">主题</a>

      <a href=\" ";
        // line 15
        echo $this->env->getExtension('routing')->getUrl("admin_app_center", array("postStatus" => "app"));
        echo "\" type=\"button\" class=\"btn btn-default btn-sm ";
        if (((isset($context["type"]) ? $context["type"] : null) == "app")) {
            echo "btn-primary";
        }
        echo "\">应用</a>
  </div>


  <div class=\"checkbox-group appTypeChoices\" RepeatDirection=\"Horizontal\" id=\"appTypeChoices\" name=\"appTypeChoices\" style=\"float:right;margin-top:-45px;\">
      <div class=\"sortedCourses\">
      <input type=\"checkbox\" name=\"appTypeChoices\" id=\"installedApps\" 
         value=\"installedApps\"  ";
        // line 22
        if ((((array_key_exists("appTypeChoices", $context)) ? (_twig_default_filter((isset($context["appTypeChoices"]) ? $context["appTypeChoices"] : null), null)) : (null)) == "installedApps")) {
            echo " data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_app_center", array("postStatus" => (isset($context["type"]) ? $context["type"] : null), "showType" => "unhidden")), "html", null, true);
            echo "\"  checked  ";
        } else {
            echo " data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_app_center", array("postStatus" => (isset($context["type"]) ? $context["type"] : null), "showType" => "hidden")), "html", null, true);
            echo "\" ";
        }
        echo ">
         隐藏已购应用
      <input type=\"hidden\" name=\"type\" value= '";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
        echo "' id=\"type\">
      </div>
  </div>


  ";
        // line 29
        if ((((array_key_exists("status", $context)) ? (_twig_default_filter((isset($context["status"]) ? $context["status"] : null), null)) : (null)) == "error")) {
            // line 30
            echo "    <div class=\"alert alert-danger\">AccessKey或者SecretKey设置不正确，会影响到系统正常的运行，<a href=\"";
            echo $this->env->getExtension('routing')->getPath("admin_setting_cloud");
            echo "\">请修改设置。</a></div>
  ";
        } elseif ((((        // line 31
array_key_exists("status", $context)) ? (_twig_default_filter((isset($context["status"]) ? $context["status"] : null), null)) : (null)) == "unlink")) {
            // line 32
            echo "    <div class=\"alert alert-danger\">您的服务器无法连接到更新服务器，请检查网络连接状况。</div>
  ";
        } else {
            // line 34
            echo "  <table class=\"table table-striped table-hover\" id=\"app-table-container\">
    <thead>

    </thead>
    <tbody>

      ";
            // line 40
            if (((isset($context["type"]) ? $context["type"] : null) == "all")) {
                // line 41
                echo "      ";
                $context["apps"] = (isset($context["apps"]) ? $context["apps"] : null);
                // line 42
                echo "      ";
            } elseif (((isset($context["type"]) ? $context["type"] : null) == "theme")) {
                // line 43
                echo "      ";
                $context["apps"] = (isset($context["theme"]) ? $context["theme"] : null);
                // line 44
                echo "      ";
            } elseif (((isset($context["type"]) ? $context["type"] : null) == "app")) {
                // line 45
                echo "      ";
                $context["apps"] = (isset($context["allApp"]) ? $context["allApp"] : null);
                // line 46
                echo "      ";
            }
            // line 47
            echo "
      ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["apps"]) ? $context["apps"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["app"]) {
                // line 49
                echo "        ";
                $context["installedApp"] = (($this->getAttribute((isset($context["installedApps"]) ? $context["installedApps"] : null), $this->getAttribute($context["app"], "code", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["installedApps"]) ? $context["installedApps"] : null), $this->getAttribute($context["app"], "code", array()), array(), "array"), null)) : (null));
                // line 50
                echo "
           ";
                // line 51
                if ((((array_key_exists("appTypeChoices", $context)) ? (_twig_default_filter((isset($context["appTypeChoices"]) ? $context["appTypeChoices"] : null), null)) : (null)) == "installedApps")) {
                    // line 52
                    echo "
                         ";
                    // line 53
                    if ((((($this->getAttribute($context["app"], "purchased", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["app"], "purchased", array()), false)) : (false)) == true) || (isset($context["installedApp"]) ? $context["installedApp"] : null))) {
                        // line 54
                        echo "                            
                            ";
                        // line 55
                        if ((isset($context["installedApp"]) ? $context["installedApp"] : null)) {
                            // line 56
                            echo "                            ";
                        } else {
                            // line 57
                            echo "                            ";
                            $this->loadTemplate("TopxiaAdminBundle:App:app-detail.html.twig", "TopxiaAdminBundle:App:center.html.twig", 57)->display($context);
                            // line 58
                            echo "                            <div class=\"right-info pull-right\">
                            <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                            // line 59
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_app_package_update_modal", array("id" => $this->getAttribute($context["app"], "latestPackageId", array()), "type" => "install")), "html", null, true);
                            echo "\" class=\"btn btn-primary app-btn\" data-keyboard=\"false\" data-backdrop=\"static\">安装</a>
                            </div>
                              </td>
                            </tr>
                            ";
                        }
                        // line 64
                        echo "                         ";
                    } else {
                        // line 65
                        echo "
                          ";
                        // line 66
                        $this->loadTemplate("TopxiaAdminBundle:App:app-detail.html.twig", "TopxiaAdminBundle:App:center.html.twig", 66)->display($context);
                        // line 67
                        echo "                            <div class=\"right-info pull-right\">
                              ";
                        // line 68
                        if (((($this->getAttribute($context["app"], "userAccess", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["app"], "userAccess", array()), null)) : (null)) == "impossible")) {
                            // line 69
                            echo "                                <a href=\"http://open.edusoho.com\" class=\"user-access\" target=_blank>商业专属</a>
                              ";
                        } else {
                            // line 71
                            echo "                                  ";
                            if (($this->getAttribute($context["app"], "price", array()) == 0)) {
                                // line 72
                                echo "                                   <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_app_package_update_modal", array("id" => $this->getAttribute($context["app"], "latestPackageId", array()), "type" => "install")), "html", null, true);
                                echo "\" class=\"btn btn-primary app-btn\" data-keyboard=\"false\" data-backdrop=\"static\">安装</a>
                                  ";
                            } else {
                                // line 74
                                echo "                                     <a href=\"http://open.edusoho.com/app/";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "code", array()), "html", null, true);
                                echo "\" class=\"btn btn-warning app-btn\" target=\"_blank\">购买</a>
                                  ";
                            }
                            // line 76
                            echo "                                    <p class=\"mtm\"><span class=\"text-muted\">价格：</sapn><span class=\"price\"> ¥ ";
                            if (($this->getAttribute($context["app"], "price", array()) > 0)) {
                                echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "price", array()), "html", null, true);
                            } else {
                                echo "免费";
                            }
                            echo "</sapn></p>
                                ";
                        }
                        // line 78
                        echo "                            </div>
                              </td>
                            </tr>
                         ";
                    }
                    // line 81
                    echo "                

            ";
                } else {
                    // line 84
                    echo "              ";
                    $this->loadTemplate("TopxiaAdminBundle:App:app-detail.html.twig", "TopxiaAdminBundle:App:center.html.twig", 84)->display($context);
                    // line 85
                    echo "              <div class=\"right-info pull-right\">

                 ";
                    // line 87
                    if ((((($this->getAttribute($context["app"], "purchased", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["app"], "purchased", array()), false)) : (false)) == true) || (isset($context["installedApp"]) ? $context["installedApp"] : null))) {
                        // line 88
                        echo "            
                    ";
                        // line 89
                        if ((isset($context["installedApp"]) ? $context["installedApp"] : null)) {
                            // line 90
                            echo "                      <a href=\"javascript:;\" class=\"btn btn-default disabled app-btn\">已购买</a>
                    ";
                        } else {
                            // line 92
                            echo "                      <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_app_package_update_modal", array("id" => $this->getAttribute($context["app"], "latestPackageId", array()), "type" => "install")), "html", null, true);
                            echo "\" class=\"btn btn-primary app-btn\" data-keyboard=\"false\" data-backdrop=\"static\">安装</a>
                    ";
                        }
                        // line 94
                        echo "                    
                    <p class=\"mtm\"><span class=\"text-muted\">价格：</sapn><span class=\"price\"> ¥ ";
                        // line 95
                        if (($this->getAttribute($context["app"], "price", array()) > 0)) {
                            echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "price", array()), "html", null, true);
                        } else {
                            echo "免费";
                        }
                        echo "</sapn></p>
                 ";
                    } else {
                        // line 97
                        echo "                    ";
                        if (((($this->getAttribute($context["app"], "userAccess", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["app"], "userAccess", array()), null)) : (null)) == "impossible")) {
                            // line 98
                            echo "                      <a href=\"http://www.edusoho.com/product/system\" class=\"user-access\" target=_blank>商业专属</a>
                    ";
                        } else {
                            // line 100
                            echo "                      ";
                            if (($this->getAttribute($context["app"], "price", array()) == 0)) {
                                // line 101
                                echo "                       <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_app_package_update_modal", array("id" => $this->getAttribute($context["app"], "latestPackageId", array()), "type" => "install")), "html", null, true);
                                echo "\" class=\"btn btn-primary app-btn\" data-keyboard=\"false\" data-backdrop=\"static\">安装</a>
                      ";
                            } else {
                                // line 103
                                echo "                         <a href=\"http://open.edusoho.com/app/";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "code", array()), "html", null, true);
                                echo "\" class=\"btn btn-warning app-btn\" target=\"_blank\">购买</a>
                      ";
                            }
                            // line 105
                            echo "                        <p class=\"mtm\"><span class=\"text-muted\">价格：</sapn><span class=\"price\"> ¥ ";
                            if (($this->getAttribute($context["app"], "price", array()) > 0)) {
                                echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "price", array()), "html", null, true);
                            } else {
                                echo "免费";
                            }
                            echo "</sapn></p>
                    ";
                        }
                        // line 107
                        echo "                 ";
                    }
                    echo " 
               
              </div> 
                </td>
              </tr>
                ";
                }
                // line 113
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['app'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 115
            echo "    </tbody>
  </table>
  ";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:App:center.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  336 => 115,  321 => 113,  311 => 107,  301 => 105,  295 => 103,  289 => 101,  286 => 100,  282 => 98,  279 => 97,  270 => 95,  267 => 94,  261 => 92,  257 => 90,  255 => 89,  252 => 88,  250 => 87,  246 => 85,  243 => 84,  238 => 81,  232 => 78,  222 => 76,  216 => 74,  210 => 72,  207 => 71,  203 => 69,  201 => 68,  198 => 67,  196 => 66,  193 => 65,  190 => 64,  182 => 59,  179 => 58,  176 => 57,  173 => 56,  171 => 55,  168 => 54,  166 => 53,  163 => 52,  161 => 51,  158 => 50,  155 => 49,  138 => 48,  135 => 47,  132 => 46,  129 => 45,  126 => 44,  123 => 43,  120 => 42,  117 => 41,  115 => 40,  107 => 34,  103 => 32,  101 => 31,  96 => 30,  94 => 29,  86 => 24,  73 => 22,  59 => 15,  50 => 13,  41 => 11,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::cloud-app-layout.html.twig' %}*/
/* */
/* {% set menu = 'admin_app_center' %}*/
/* */
/* {% set script_controller = 'app/center' %}*/
/* */
/* {% block main %}*/
/* */
/*   <div class="mbl btn-group">*/
/* */
/*       <a href="{{ url('admin_app_center', {postStatus: 'all' }) }}" type="button" class="btn btn-default btn-sm {% if type == 'all'%} btn-primary{% endif %}">全部</a>*/
/* */
/*       <a href=" {{ url('admin_app_center', {postStatus: 'theme' }) }}" type="button" class="btn btn-default btn-sm {% if type == 'theme'%}btn-primary{% endif %}">主题</a>*/
/* */
/*       <a href=" {{ url('admin_app_center', {postStatus: 'app' }) }}" type="button" class="btn btn-default btn-sm {% if type == 'app'%}btn-primary{% endif %}">应用</a>*/
/*   </div>*/
/* */
/* */
/*   <div class="checkbox-group appTypeChoices" RepeatDirection="Horizontal" id="appTypeChoices" name="appTypeChoices" style="float:right;margin-top:-45px;">*/
/*       <div class="sortedCourses">*/
/*       <input type="checkbox" name="appTypeChoices" id="installedApps" */
/*          value="installedApps"  {% if appTypeChoices|default(null)  == 'installedApps' %} data-url="{{path('admin_app_center',{postStatus: type,showType:'unhidden'})}}"  checked  {% else %} data-url="{{path('admin_app_center',{postStatus: type,showType:'hidden'}) }}" {% endif %}>*/
/*          隐藏已购应用*/
/*       <input type="hidden" name="type" value= '{{type}}' id="type">*/
/*       </div>*/
/*   </div>*/
/* */
/* */
/*   {% if status|default(null) == 'error' %}*/
/*     <div class="alert alert-danger">AccessKey或者SecretKey设置不正确，会影响到系统正常的运行，<a href="{{path('admin_setting_cloud')}}">请修改设置。</a></div>*/
/*   {% elseif  status|default(null) == 'unlink' %}*/
/*     <div class="alert alert-danger">您的服务器无法连接到更新服务器，请检查网络连接状况。</div>*/
/*   {% else %}*/
/*   <table class="table table-striped table-hover" id="app-table-container">*/
/*     <thead>*/
/* */
/*     </thead>*/
/*     <tbody>*/
/* */
/*       {% if type == 'all' %}*/
/*       {% set apps = apps %}*/
/*       {% elseif type == 'theme'%}*/
/*       {% set apps = theme %}*/
/*       {% elseif type == 'app' %}*/
/*       {% set apps = allApp %}*/
/*       {% endif  %}*/
/* */
/*       {% for app in apps %}*/
/*         {% set installedApp = installedApps[app.code]|default(null) %}*/
/* */
/*            {% if appTypeChoices|default(null)  == 'installedApps' %}*/
/* */
/*                          {% if app.purchased|default(false) == true or installedApp %}*/
/*                             */
/*                             {% if installedApp %}*/
/*                             {% else %}*/
/*                             {% include 'TopxiaAdminBundle:App:app-detail.html.twig'  %}*/
/*                             <div class="right-info pull-right">*/
/*                             <a href="#" data-toggle="modal" data-target="#modal" data-url="{{ path('admin_app_package_update_modal', {id:app.latestPackageId, type:'install'})}}" class="btn btn-primary app-btn" data-keyboard="false" data-backdrop="static">安装</a>*/
/*                             </div>*/
/*                               </td>*/
/*                             </tr>*/
/*                             {% endif %}*/
/*                          {% else %}*/
/* */
/*                           {% include 'TopxiaAdminBundle:App:app-detail.html.twig'  %}*/
/*                             <div class="right-info pull-right">*/
/*                               {% if app.userAccess|default(null) == "impossible" %}*/
/*                                 <a href="http://open.edusoho.com" class="user-access" target=_blank>商业专属</a>*/
/*                               {% else %}*/
/*                                   {% if app.price == 0 %}*/
/*                                    <a href="#" data-toggle="modal" data-target="#modal" data-url="{{ path('admin_app_package_update_modal', {id:app.latestPackageId, type:'install'})}}" class="btn btn-primary app-btn" data-keyboard="false" data-backdrop="static">安装</a>*/
/*                                   {% else %}*/
/*                                      <a href="http://open.edusoho.com/app/{{ app.code }}" class="btn btn-warning app-btn" target="_blank">购买</a>*/
/*                                   {% endif %}*/
/*                                     <p class="mtm"><span class="text-muted">价格：</sapn><span class="price"> ¥ {% if app.price > 0 %}{{ app.price}}{% else %}免费{% endif %}</sapn></p>*/
/*                                 {% endif %}*/
/*                             </div>*/
/*                               </td>*/
/*                             </tr>*/
/*                          {% endif %}                */
/* */
/*             {% else %}*/
/*               {% include 'TopxiaAdminBundle:App:app-detail.html.twig'  %}*/
/*               <div class="right-info pull-right">*/
/* */
/*                  {% if app.purchased|default(false) == true or installedApp %}*/
/*             */
/*                     {% if installedApp %}*/
/*                       <a href="javascript:;" class="btn btn-default disabled app-btn">已购买</a>*/
/*                     {% else %}*/
/*                       <a href="#" data-toggle="modal" data-target="#modal" data-url="{{ path('admin_app_package_update_modal', {id:app.latestPackageId, type:'install'})}}" class="btn btn-primary app-btn" data-keyboard="false" data-backdrop="static">安装</a>*/
/*                     {% endif %}*/
/*                     */
/*                     <p class="mtm"><span class="text-muted">价格：</sapn><span class="price"> ¥ {% if app.price > 0 %}{{ app.price}}{% else %}免费{% endif %}</sapn></p>*/
/*                  {% else %}*/
/*                     {% if app.userAccess|default(null) == "impossible" %}*/
/*                       <a href="http://www.edusoho.com/product/system" class="user-access" target=_blank>商业专属</a>*/
/*                     {% else %}*/
/*                       {% if app.price == 0 %}*/
/*                        <a href="#" data-toggle="modal" data-target="#modal" data-url="{{ path('admin_app_package_update_modal', {id:app.latestPackageId, type:'install'})}}" class="btn btn-primary app-btn" data-keyboard="false" data-backdrop="static">安装</a>*/
/*                       {% else %}*/
/*                          <a href="http://open.edusoho.com/app/{{ app.code }}" class="btn btn-warning app-btn" target="_blank">购买</a>*/
/*                       {% endif %}*/
/*                         <p class="mtm"><span class="text-muted">价格：</sapn><span class="price"> ¥ {% if app.price > 0 %}{{ app.price}}{% else %}免费{% endif %}</sapn></p>*/
/*                     {% endif %}*/
/*                  {% endif %} */
/*                */
/*               </div> */
/*                 </td>*/
/*               </tr>*/
/*                 {% endif %}*/
/* */
/*       {% endfor %}*/
/*     </tbody>*/
/*   </table>*/
/*   {% endif %}*/
/* {% endblock %}*/
