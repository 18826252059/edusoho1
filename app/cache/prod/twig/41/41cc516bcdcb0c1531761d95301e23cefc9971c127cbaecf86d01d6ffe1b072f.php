<?php

/* TopxiaAdminBundle:App:installed.html.twig */
class __TwigTemplate_f081af4e2a718979834f884a578ece2b44f4678dd267ff5714fcb7a4e0c8e679 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::cloud-app-layout.html.twig", "TopxiaAdminBundle:App:installed.html.twig", 1);
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
        $context["script_controller"] = "app/installed";
        // line 5
        $context["menu"] = "admin_app_installed";
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
        echo $this->env->getExtension('routing')->getUrl("admin_app_installed", array("postStatus" => "all"));
        echo "\" type=\"button\" class=\"btn btn-default btn-sm ";
        if (((isset($context["type"]) ? $context["type"] : null) == "all")) {
            echo " btn-primary";
        }
        echo "\">全部</a>

      <a href=\" ";
        // line 13
        echo $this->env->getExtension('routing')->getUrl("admin_app_installed", array("postStatus" => "theme"));
        echo "\" type=\"button\" class=\"btn btn-default btn-sm ";
        if (((isset($context["type"]) ? $context["type"] : null) == "theme")) {
            echo "btn-primary";
        }
        echo "\">主题</a>

      <a href=\" ";
        // line 15
        echo $this->env->getExtension('routing')->getUrl("admin_app_installed", array("postStatus" => "app"));
        echo "\" type=\"button\" class=\"btn btn-default btn-sm ";
        if (((isset($context["type"]) ? $context["type"] : null) == "app")) {
            echo "btn-primary";
        }
        echo "\">应用</a>
  </div>

  <table class=\"table table-striped table-hover\">
    <thead>
    </thead>
    <tbody>
      ";
        // line 22
        if (((isset($context["type"]) ? $context["type"] : null) == "all")) {
            // line 23
            echo "      ";
            $context["apps"] = (isset($context["apps"]) ? $context["apps"] : null);
            // line 24
            echo "      ";
        } elseif (((isset($context["type"]) ? $context["type"] : null) == "theme")) {
            // line 25
            echo "      ";
            $context["apps"] = (isset($context["theme"]) ? $context["theme"] : null);
            // line 26
            echo "      ";
        } elseif (((isset($context["type"]) ? $context["type"] : null) == "app")) {
            // line 27
            echo "      ";
            $context["apps"] = (isset($context["plugin"]) ? $context["plugin"] : null);
            // line 28
            echo "      ";
        }
        // line 29
        echo "
      ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["apps"]) ? $context["apps"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["app"]) {
            // line 31
            echo "  
        ";
            // line 32
            if ((((($this->getAttribute($context["app"], "installed", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["app"], "installed", array()), 0)) : (0)) || $this->getAttribute($context["app"], "purchased", array())) || (((($this->getAttribute($context["app"], "userAccess", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["app"], "userAccess", array()), null)) : (null)) == "ok") && (($this->getAttribute($context["app"], "price", array()) == 0) &&  !$this->getAttribute($context["app"], "licensed", array()))))) {
                // line 33
                echo "        <tr>
          <td>
              ";
                // line 35
                if (($this->getAttribute($context["app"], "code", array()) == "MAIN")) {
                    // line 36
                    echo "                <img src=\"/assets/img/default/MAIN_icon.png\" class=\"app-img pull-left mrl mtm\"/>
              ";
                } else {
                    // line 38
                    echo "                <img src=\"http://open.edusoho.com/files/product/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "icon", array()), "html", null, true);
                    echo "\" class=\"app-img pull-left mrl mtm\"/>
              ";
                }
                // line 40
                echo "              
            <div class=\"mtm\">
              
                <h4>
                  <a target=\"_blank\" href=\"http://open.edusoho.com/app/";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "code", array()), "html", null, true);
                echo "\"><strong class=\"text-primary\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "name", array()), "html", null, true);
                echo "</strong>
                  </a>            
                </h4>     
    
            </div>
            
            <div class=\"info mtm mbm clearfix\">
              <div class=\"left-info pull-left\">

                <div class=\"text-muted\">作者： ";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "developerName", array()), "html", null, true);
                echo "</div>
                <div class=\"mts text-muted\">";
                // line 54
                if (($this->getAttribute($context["app"], "type", array()) == "theme")) {
                    echo "主题";
                } else {
                    echo "应用";
                }
                // line 55
                echo "                </div>
                <div class=\"class-rating mtm\">
                  ";
                // line 57
                if ((($this->getAttribute($context["app"], "installed", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["app"], "installed", array()), 0)) : (0))) {
                    // line 58
                    echo "                  <span class=\"text-muted\">版本：";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "version", array()), "html", null, true);
                    echo "</span>
                  ";
                } else {
                    // line 60
                    echo "                  <span class=\"text-muted\">版本：";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "latestVersion", array()), "html", null, true);
                    echo "</span>
                  ";
                }
                // line 62
                echo "                </div>
              </div>

              <div class=\"middle-info pull-left \">
                ";
                // line 66
                if ((($this->getAttribute($context["app"], "installed", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["app"], "installed", array()), 0)) : (0))) {
                    // line 67
                    echo "                  <div class=\"text-muted\">最后更新： ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["app"], "updatedTime", array()), "Y-m-d"), "html", null, true);
                    echo "</div>
                ";
                } else {
                    // line 69
                    echo "                  <div class=\"text-muted\">最后更新： ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["app"], "latestTime", array()), "Y-m-d"), "html", null, true);
                    echo "</div>
                ";
                }
                // line 71
                echo "              </div>
              
              ";
                // line 73
                if ((($this->getAttribute($context["app"], "installed", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["app"], "installed", array()), 0)) : (0))) {
                    // line 74
                    echo "              <div class=\"right-info pull-right\">

                  ";
                    // line 76
                    if (($this->env->getExtension('topxia_web_twig')->getSetting("developer.debug") && (twig_lower_filter($this->env, $this->getAttribute($context["app"], "code", array())) != "main"))) {
                        // line 77
                        echo "                    <br>
                    <a href=\"javascript:;\" data-url=\"";
                        // line 78
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_app_uninstall", array("code" => $this->getAttribute($context["app"], "code", array()))), "html", null, true);
                        echo "\" class=\"btn btn-danger uninstall-btn mtm\">卸载</a>
                  ";
                    }
                    // line 80
                    echo "              </div>
              ";
                } else {
                    // line 82
                    echo "              <div class=\"right-info pull-right\">
                  <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                    // line 83
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_app_package_update_modal", array("id" => $this->getAttribute($context["app"], "latestPackageId", array()), "type" => "install")), "html", null, true);
                    echo "\" class=\"btn btn-primary\" data-keyboard=\"false\" data-backdrop=\"static\">安装
                  </a>

              </div>
              ";
                }
                // line 88
                echo "            </div>
          </td>
    
        </tr>
        ";
            }
            // line 93
            echo "
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['app'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "    </tbody>
  </table>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:App:installed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 95,  231 => 93,  224 => 88,  216 => 83,  213 => 82,  209 => 80,  204 => 78,  201 => 77,  199 => 76,  195 => 74,  193 => 73,  189 => 71,  183 => 69,  177 => 67,  175 => 66,  169 => 62,  163 => 60,  157 => 58,  155 => 57,  151 => 55,  145 => 54,  141 => 53,  127 => 44,  121 => 40,  115 => 38,  111 => 36,  109 => 35,  105 => 33,  103 => 32,  100 => 31,  96 => 30,  93 => 29,  90 => 28,  87 => 27,  84 => 26,  81 => 25,  78 => 24,  75 => 23,  73 => 22,  59 => 15,  50 => 13,  41 => 11,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::cloud-app-layout.html.twig' %}*/
/* */
/* {% set script_controller = 'app/installed' %}*/
/* */
/* {% set menu = 'admin_app_installed' %}*/
/* */
/* {% block main %}*/
/* */
/*   <div class="mbl btn-group">*/
/* */
/*       <a href="{{ url('admin_app_installed', {postStatus: 'all'}) }}" type="button" class="btn btn-default btn-sm {% if type == 'all'%} btn-primary{% endif %}">全部</a>*/
/* */
/*       <a href=" {{ url('admin_app_installed', {postStatus: 'theme'}) }}" type="button" class="btn btn-default btn-sm {% if type == 'theme'%}btn-primary{% endif %}">主题</a>*/
/* */
/*       <a href=" {{ url('admin_app_installed', {postStatus: 'app'}) }}" type="button" class="btn btn-default btn-sm {% if type == 'app'%}btn-primary{% endif %}">应用</a>*/
/*   </div>*/
/* */
/*   <table class="table table-striped table-hover">*/
/*     <thead>*/
/*     </thead>*/
/*     <tbody>*/
/*       {% if type == 'all' %}*/
/*       {% set apps = apps %}*/
/*       {% elseif type == 'theme'%}*/
/*       {% set apps = theme %}*/
/*       {% elseif type == 'app' %}*/
/*       {% set apps = plugin %}*/
/*       {% endif  %}*/
/* */
/*       {% for app in apps %}*/
/*   */
/*         {% if app.installed|default(0) or app.purchased or (app.userAccess|default(null) == "ok" ) and (app.price == 0 and not  app.licensed ) %}*/
/*         <tr>*/
/*           <td>*/
/*               {% if app.code == "MAIN" %}*/
/*                 <img src="/assets/img/default/MAIN_icon.png" class="app-img pull-left mrl mtm"/>*/
/*               {% else %}*/
/*                 <img src="http://open.edusoho.com/files/product/{{ app.icon }}" class="app-img pull-left mrl mtm"/>*/
/*               {% endif %}*/
/*               */
/*             <div class="mtm">*/
/*               */
/*                 <h4>*/
/*                   <a target="_blank" href="http://open.edusoho.com/app/{{ app.code }}"><strong class="text-primary">{{ app.name }}</strong>*/
/*                   </a>            */
/*                 </h4>     */
/*     */
/*             </div>*/
/*             */
/*             <div class="info mtm mbm clearfix">*/
/*               <div class="left-info pull-left">*/
/* */
/*                 <div class="text-muted">作者： {{ app.developerName }}</div>*/
/*                 <div class="mts text-muted">{% if app.type == "theme" %}主题{% else %}应用{% endif %}*/
/*                 </div>*/
/*                 <div class="class-rating mtm">*/
/*                   {% if app.installed|default(0) %}*/
/*                   <span class="text-muted">版本：{{ app.version }}</span>*/
/*                   {% else %}*/
/*                   <span class="text-muted">版本：{{ app.latestVersion }}</span>*/
/*                   {% endif %}*/
/*                 </div>*/
/*               </div>*/
/* */
/*               <div class="middle-info pull-left ">*/
/*                 {% if app.installed|default(0) %}*/
/*                   <div class="text-muted">最后更新： {{ app.updatedTime|date('Y-m-d') }}</div>*/
/*                 {% else %}*/
/*                   <div class="text-muted">最后更新： {{ app.latestTime|date('Y-m-d') }}</div>*/
/*                 {% endif %}*/
/*               </div>*/
/*               */
/*               {% if app.installed|default(0) %}*/
/*               <div class="right-info pull-right">*/
/* */
/*                   {% if setting('developer.debug') and app.code|lower != 'main' %}*/
/*                     <br>*/
/*                     <a href="javascript:;" data-url="{{ path('admin_app_uninstall', {code:app.code}) }}" class="btn btn-danger uninstall-btn mtm">卸载</a>*/
/*                   {% endif %}*/
/*               </div>*/
/*               {% else %}*/
/*               <div class="right-info pull-right">*/
/*                   <a href="#" data-toggle="modal" data-target="#modal" data-url="{{ path('admin_app_package_update_modal', {id:app.latestPackageId, type:'install'}) }}" class="btn btn-primary" data-keyboard="false" data-backdrop="static">安装*/
/*                   </a>*/
/* */
/*               </div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </td>*/
/*     */
/*         </tr>*/
/*         {% endif %}*/
/* */
/*       {% endfor %}*/
/*     </tbody>*/
/*   </table>*/
/* */
/* {% endblock %}*/
