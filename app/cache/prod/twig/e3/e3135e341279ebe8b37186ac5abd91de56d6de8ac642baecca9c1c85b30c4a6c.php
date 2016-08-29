<?php

/* TopxiaAdminBundle:AppPackageUpdate:modal.html.twig */
class __TwigTemplate_327c6de956bb622169c2ad1f861d8c8d5a66f9dc311d399d3abe671ffbddac59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaAdminBundle:AppPackageUpdate:modal.html.twig", 1);
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
        $context["updateName"] = ((($this->getAttribute((isset($context["package"]) ? $context["package"] : null), "type", array()) == "upgrade")) ? ("升级") : ("安装"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["updateName"]) ? $context["updateName"] : null), "html", null, true);
        echo "应用";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "
<table class=\"table\">
  <thead>
    <tr>
      <th width=\"40%\">应用名称</th>
      <th width=\"25%\">版本</th>
      <th>备份数据库</th>
      <th>备份文件</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["package"]) ? $context["package"] : null), "product", array()), "name", array()), "html", null, true);
        echo "</td>
      <td>
        ";
        // line 23
        if (($this->getAttribute((isset($context["package"]) ? $context["package"] : null), "type", array()) == "upgrade")) {
            // line 24
            echo "          <strong class=\"text-muted\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["package"]) ? $context["package"] : null), "fromVersion", array()), "html", null, true);
            echo "</strong> -&gt; <strong class=\"text-success\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["package"]) ? $context["package"] : null), "toVersion", array()), "html", null, true);
            echo "</strong>
        ";
        } else {
            // line 26
            echo "          <strong class=\"text-success\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["package"]) ? $context["package"] : null), "toVersion", array()), "html", null, true);
            echo "</strong>
        ";
        }
        // line 28
        echo "      </td>
      <td>";
        // line 29
        if (($this->getAttribute((isset($context["package"]) ? $context["package"] : null), "backupDB", array()) == 1)) {
            echo "是";
        } elseif (($this->getAttribute((isset($context["package"]) ? $context["package"] : null), "backupDB", array()) == 0)) {
            echo "否";
        }
        echo "</td>
      <td>";
        // line 30
        if (($this->getAttribute((isset($context["package"]) ? $context["package"] : null), "backupFile", array()) == 1)) {
            echo "是";
        } elseif (($this->getAttribute((isset($context["package"]) ? $context["package"] : null), "backupFile", array()) == 0)) {
            echo "否";
        }
        echo "</td>
    </tr>
  </tbody>
</table>

<div id=\"package-update-progress\" class=\"package-update-progress\" style=\"display:none;\">
  <div class=\"progress progress-striped active\">
    <div class=\"progress-bar progress-bar-success\" style=\"width: 0%\"></div>
  </div>
  <div class=\"text-success progress-text\"></div>
</div>

<script type=\"text/javascript\"> app.load('app/package-update-modal') </script>
";
    }

    // line 45
    public function block_footer($context, array $blocks = array())
    {
        // line 46
        echo "  <button id=\"begin-update\" type=\"button\" class=\"btn btn-primary pull-right\"
    data-check-environment-url=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_app_package_update_check_environment", array("id" => $this->getAttribute((isset($context["package"]) ? $context["package"] : null), "id", array()))), "html", null, true);
        echo "\"
    data-check-depends-url=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_app_package_update_check_depends", array("id" => $this->getAttribute((isset($context["package"]) ? $context["package"] : null), "id", array()))), "html", null, true);
        echo "\"
    data-check-last-error-url=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_app_package_update_check_last_error", array("id" => $this->getAttribute((isset($context["package"]) ? $context["package"] : null), "id", array()))), "html", null, true);
        echo "\"
    data-backup-file-url=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_app_package_update_backup_file", array("id" => $this->getAttribute((isset($context["package"]) ? $context["package"] : null), "id", array()))), "html", null, true);
        echo "\"
    data-backup-db-url=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_app_package_update_backup_db", array("id" => $this->getAttribute((isset($context["package"]) ? $context["package"] : null), "id", array()))), "html", null, true);
        echo "\"
    data-check-download-extract-url=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_app_package_update_check_download_and_extract", array("id" => $this->getAttribute((isset($context["package"]) ? $context["package"] : null), "id", array()))), "html", null, true);
        echo "\"
    data-download-extract-url=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_app_package_update_download_and_extract", array("id" => $this->getAttribute((isset($context["package"]) ? $context["package"] : null), "id", array()))), "html", null, true);
        echo "\"
    data-begin-upgrade-url=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_app_package_update_begin_upgrade", array("id" => $this->getAttribute((isset($context["package"]) ? $context["package"] : null), "id", array()), "type" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "type"), "method"))), "html", null, true);
        echo "\"
  >开始";
        // line 55
        echo twig_escape_filter($this->env, (isset($context["updateName"]) ? $context["updateName"] : null), "html", null, true);
        echo "</button>

  <strong class=\"text text-danger\" id=\"updating-hint\" style=\"display:none;\">正在安装，请不要关闭当前窗口...</strong>

  <button id=\"finish-update-btn\" data-loading-text=\"正在完成安装/升级, 请稍等...\" class=\"btn btn-primary\" style=\"display:none\">完成安装/升级</button>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:AppPackageUpdate:modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 55,  145 => 54,  141 => 53,  137 => 52,  133 => 51,  129 => 50,  125 => 49,  121 => 48,  117 => 47,  114 => 46,  111 => 45,  89 => 30,  81 => 29,  78 => 28,  72 => 26,  64 => 24,  62 => 23,  57 => 21,  43 => 9,  40 => 8,  33 => 6,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% set updateName = package.type == 'upgrade' ? '升级' : '安装' %}*/
/* */
/* */
/* {% block title %}{{ updateName }}应用{% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* <table class="table">*/
/*   <thead>*/
/*     <tr>*/
/*       <th width="40%">应用名称</th>*/
/*       <th width="25%">版本</th>*/
/*       <th>备份数据库</th>*/
/*       <th>备份文件</th>*/
/*     </tr>*/
/*   </thead>*/
/*   <tbody>*/
/*     <tr>*/
/*       <td>{{ package.product.name }}</td>*/
/*       <td>*/
/*         {% if package.type == 'upgrade' %}*/
/*           <strong class="text-muted">{{ package.fromVersion }}</strong> -&gt; <strong class="text-success">{{ package.toVersion }}</strong>*/
/*         {% else %}*/
/*           <strong class="text-success">{{ package.toVersion }}</strong>*/
/*         {% endif %}*/
/*       </td>*/
/*       <td>{% if package.backupDB == 1 %}是{% elseif package.backupDB == 0 %}否{% endif %}</td>*/
/*       <td>{% if package.backupFile == 1 %}是{% elseif package.backupFile == 0 %}否{% endif %}</td>*/
/*     </tr>*/
/*   </tbody>*/
/* </table>*/
/* */
/* <div id="package-update-progress" class="package-update-progress" style="display:none;">*/
/*   <div class="progress progress-striped active">*/
/*     <div class="progress-bar progress-bar-success" style="width: 0%"></div>*/
/*   </div>*/
/*   <div class="text-success progress-text"></div>*/
/* </div>*/
/* */
/* <script type="text/javascript"> app.load('app/package-update-modal') </script>*/
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/*   <button id="begin-update" type="button" class="btn btn-primary pull-right"*/
/*     data-check-environment-url="{{ path('admin_app_package_update_check_environment', {id:package.id}) }}"*/
/*     data-check-depends-url="{{ path('admin_app_package_update_check_depends', {id:package.id}) }}"*/
/*     data-check-last-error-url="{{ path('admin_app_package_update_check_last_error', {id:package.id}) }}"*/
/*     data-backup-file-url="{{ path('admin_app_package_update_backup_file', {id:package.id}) }}"*/
/*     data-backup-db-url="{{ path('admin_app_package_update_backup_db', {id:package.id}) }}"*/
/*     data-check-download-extract-url="{{ path('admin_app_package_update_check_download_and_extract', {id:package.id}) }}"*/
/*     data-download-extract-url="{{ path('admin_app_package_update_download_and_extract', {id:package.id}) }}"*/
/*     data-begin-upgrade-url="{{ path('admin_app_package_update_begin_upgrade', {id:package.id, type:app.request.get('type')}) }}"*/
/*   >开始{{ updateName }}</button>*/
/* */
/*   <strong class="text text-danger" id="updating-hint" style="display:none;">正在安装，请不要关闭当前窗口...</strong>*/
/* */
/*   <button id="finish-update-btn" data-loading-text="正在完成安装/升级, 请稍等..." class="btn btn-primary" style="display:none">完成安装/升级</button>*/
/* {% endblock %}*/
