<?php

/* TopxiaAdminBundle:App:upgrades.html.twig */
class __TwigTemplate_9a908e2ddcfbf69e1dfa3a870cf8e6e3407090823f19f39a98a3137e9699cf64 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::cloud-app-layout.html.twig", "TopxiaAdminBundle:App:upgrades.html.twig", 1);
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
        $context["script_controller"] = "app/upgrades";
        // line 5
        $context["menu"] = "admin_app_upgrades";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
<div class=\"panel\">
  ";
        // line 10
        if ((isset($context["apps"]) ? $context["apps"] : null)) {
            echo "<div class=\"panel-heading\"><h4>";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["apps"]) ? $context["apps"] : null)), "html", null, true);
            echo "个可用更新</h4></div>";
        }
        // line 11
        if (((array_key_exists("status", $context)) ? (_twig_default_filter((isset($context["status"]) ? $context["status"] : null), null)) : (null))) {
            // line 12
            echo "  <div class=\"alert alert-danger\">AccessKey或者SecretKey设置不正确，会影响到系统正常的运行，<a href=\"";
            echo $this->env->getExtension('routing')->getPath("admin_setting_cloud");
            echo "\">请修改设置。</a></div>
";
        } else {
            // line 14
            if ((isset($context["apps"]) ? $context["apps"] : null)) {
                // line 15
                echo "  <table class=\"table table-striped table-hover\" id=\"app-table-container\">
    <thead>

    </thead>
    <tbody>
      ";
                // line 20
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["apps"]) ? $context["apps"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["app"]) {
                    // line 21
                    echo "        <tr>
          <td>
            <img src=\"http://open.edusoho.com/files/product/";
                    // line 23
                    echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "icon", array()), "html", null, true);
                    echo "\" class=\"app-img pull-left mrl mtm\"/>
          </td>

         <td width=\"26%\">
            <div class=\"mtm \">
              <a href=\"#\" class=\"\"> <h4><strong class=\"text-primary\">";
                    // line 28
                    echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "name", array()), "html", null, true);
                    echo "</strong></h4></a> ";
                    if ($this->env->getExtension('topxia_web_twig')->versionCompare($this->getAttribute($this->getAttribute($context["app"], "package", array()), "edusohoMinVersion", array()), (isset($context["version"]) ? $context["version"] : null), ">")) {
                        echo "<div class=\"text-danger\">需要主系统";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["app"], "package", array()), "edusohoMinVersion", array()), "html", null, true);
                        echo "及更高版本</div>";
                    }
                    // line 29
                    echo "           </div>

          <!-- <div class=\"info mtm mbm clearfix\"> -->
            <div class=\"left-info pull-left\">
 
            <div class=\"text-muted\"><small>开发者：";
                    // line 34
                    echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "developerName", array()), "html", null, true);
                    echo "</small></div>
            
            <div class=\"class-rating mtm\">
              <span class=\"text-muted\">版本：";
                    // line 37
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["app"], "package", array()), "toVersion", array()), "html", null, true);
                    echo "</span>
            </div>
            
            <div class=\"middle-info\">
              <div class=\"text-muted\">最后更新：";
                    // line 41
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["app"], "package", array()), "createdTime", array()), "Y-m-d"), "html", null, true);
                    echo "</div>
            </div>

            <!-- </div> -->
            </div>

          </td>

          <td>
            <div class=\"info mtm mbm clearfix\">
              <div class=\"pull-left short-long-text\">
                <div class=\"short-text text-muted\">";
                    // line 52
                    echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($this->getAttribute($context["app"], "package", array()), "description", array()), 80);
                    echo " <span class=\"trigger\">(展开)</span></div>
                <div class=\"long-text text-muted\">";
                    // line 53
                    echo $this->getAttribute($this->getAttribute($context["app"], "package", array()), "description", array());
                    echo " <span class=\"trigger\">(收起)</span></div>
              </div>
            </div>
          </td>

          <td>
            <a href=\"#\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                    // line 59
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_app_package_update_modal", array("id" => $this->getAttribute($this->getAttribute($context["app"], "package", array()), "id", array()), "type" => "upgrade")), "html", null, true);
                    echo "\" class=\"btn btn-primary ";
                    if ($this->env->getExtension('topxia_web_twig')->versionCompare($this->getAttribute($this->getAttribute($context["app"], "package", array()), "edusohoMinVersion", array()), (isset($context["version"]) ? $context["version"] : null), ">")) {
                        echo "disabled";
                    }
                    echo " mrl\" data-keyboard=\"false\" data-backdrop=\"static\" style=\"margin-top:40px;\" >更新</a>
          </td>
        </tr>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['app'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                echo "    </tbody>
  </table>
";
            } else {
                // line 66
                echo "当前已是最新版本!
";
            }
        }
        // line 69
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:App:upgrades.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 69,  153 => 66,  148 => 63,  134 => 59,  125 => 53,  121 => 52,  107 => 41,  100 => 37,  94 => 34,  87 => 29,  79 => 28,  71 => 23,  67 => 21,  63 => 20,  56 => 15,  54 => 14,  48 => 12,  46 => 11,  40 => 10,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::cloud-app-layout.html.twig' %}*/
/* */
/* {% set script_controller = 'app/upgrades' %}*/
/* */
/* {% set menu = 'admin_app_upgrades' %}*/
/* */
/* {% block main %}*/
/* */
/* <div class="panel">*/
/*   {% if apps %}<div class="panel-heading"><h4>{{ apps|length}}个可用更新</h4></div>{% endif %}*/
/* {% if status|default(null) %}*/
/*   <div class="alert alert-danger">AccessKey或者SecretKey设置不正确，会影响到系统正常的运行，<a href="{{path('admin_setting_cloud')}}">请修改设置。</a></div>*/
/* {% else %}*/
/* {% if apps %}*/
/*   <table class="table table-striped table-hover" id="app-table-container">*/
/*     <thead>*/
/* */
/*     </thead>*/
/*     <tbody>*/
/*       {% for app in apps %}*/
/*         <tr>*/
/*           <td>*/
/*             <img src="http://open.edusoho.com/files/product/{{ app.icon }}" class="app-img pull-left mrl mtm"/>*/
/*           </td>*/
/* */
/*          <td width="26%">*/
/*             <div class="mtm ">*/
/*               <a href="#" class=""> <h4><strong class="text-primary">{{ app.name }}</strong></h4></a> {% if version_compare(app.package.edusohoMinVersion, version, ">") %}<div class="text-danger">需要主系统{{app.package.edusohoMinVersion}}及更高版本</div>{% endif %}*/
/*            </div>*/
/* */
/*           <!-- <div class="info mtm mbm clearfix"> -->*/
/*             <div class="left-info pull-left">*/
/*  */
/*             <div class="text-muted"><small>开发者：{{ app.developerName }}</small></div>*/
/*             */
/*             <div class="class-rating mtm">*/
/*               <span class="text-muted">版本：{{ app.package.toVersion }}</span>*/
/*             </div>*/
/*             */
/*             <div class="middle-info">*/
/*               <div class="text-muted">最后更新：{{ app.package.createdTime|date('Y-m-d') }}</div>*/
/*             </div>*/
/* */
/*             <!-- </div> -->*/
/*             </div>*/
/* */
/*           </td>*/
/* */
/*           <td>*/
/*             <div class="info mtm mbm clearfix">*/
/*               <div class="pull-left short-long-text">*/
/*                 <div class="short-text text-muted">{{ app.package.description|plain_text(80) }} <span class="trigger">(展开)</span></div>*/
/*                 <div class="long-text text-muted">{{ app.package.description|raw }} <span class="trigger">(收起)</span></div>*/
/*               </div>*/
/*             </div>*/
/*           </td>*/
/* */
/*           <td>*/
/*             <a href="#" data-toggle="modal" data-target="#modal" data-url="{{ path('admin_app_package_update_modal', {id:app.package.id, type:'upgrade'}) }}" class="btn btn-primary {% if version_compare(app.package.edusohoMinVersion, version, ">") %}disabled{% endif %} mrl" data-keyboard="false" data-backdrop="static" style="margin-top:40px;" >更新</a>*/
/*           </td>*/
/*         </tr>*/
/*       {% endfor %}*/
/*     </tbody>*/
/*   </table>*/
/* {% else %}*/
/* 当前已是最新版本!*/
/* {% endif %}*/
/* {% endif %}*/
/* </div>*/
/* {% endblock %}*/
