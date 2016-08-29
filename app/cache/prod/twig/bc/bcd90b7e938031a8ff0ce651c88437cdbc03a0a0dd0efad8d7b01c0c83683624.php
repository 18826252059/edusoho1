<?php

/* TopxiaAdminBundle:Theme:index.html.twig */
class __TwigTemplate_89e8108676533f8a4317a726e440cab8764aaf0c6f9278b652a1c5f7bdbca0d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Theme:index.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["script_controller"] = "setting/theme";
        // line 5
        $context["menu"] = "admin_setting_theme";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
  <table class=\"table table-striped table-hover\" id=\"theme-table\">
    <thead>
    <tr>
      <th>名称</th>
      <th width=\"10%\">主题版本</th>
      <th>作者</th>
      <th>操作</th>
    </tr>
    </thead>
    <tbody>
      ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["themes"]) ? $context["themes"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["theme"]) {
            // line 20
            echo "        <tr>
          <td>

            <div class=\"media\">
              <img class=\"media-object pull-left\" src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((("themes/" . $this->getAttribute($context["theme"], "uri", array())) . "/") . $this->getAttribute($context["theme"], "thumb", array()))), "html", null, true);
            echo "\" width=\"150\">
              <div class=\"media-body\">
                <h5 class=\"media-heading\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["theme"], "name", array()), "html", null, true);
            echo "</h5>
                ";
            // line 27
            echo (($this->getAttribute($context["theme"], "description", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["theme"], "description", array()), "")) : (""));
            echo "
                ";
            // line 28
            if ((($this->getAttribute($context["theme"], "setting", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["theme"], "setting", array()), null)) : (null))) {
                // line 29
                echo "                  <a href=\"../";
                echo twig_escape_filter($this->env, $this->getAttribute($context["theme"], "setting", array()), "html", null, true);
                echo "\">设置</a>
                ";
            }
            // line 31
            echo "              </div>
            </div>
          </td>
          <td>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["theme"], "version", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["theme"], "author", array()), "html", null, true);
            echo "</td>
          <td>
            ";
            // line 37
            if (($this->getAttribute((isset($context["currentTheme"]) ? $context["currentTheme"] : null), "uri", array()) == $this->getAttribute($context["theme"], "uri", array()))) {
                // line 38
                echo "              <span class=\"text-success\">当前正在使用该主题</span>
            ";
            } else {
                // line 40
                echo "              <button class=\"btn btn-default btn-sm use-theme-btn\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_setting_theme_change", array("uri" => $this->getAttribute($context["theme"], "uri", array()))), "html", null, true);
                echo "\">使用</button>
            ";
            }
            // line 42
            echo "            ";
            if ((($this->getAttribute($context["theme"], "uri", array()) == "jianmo") && ($this->getAttribute((isset($context["currentTheme"]) ? $context["currentTheme"] : null), "uri", array()) == "jianmo"))) {
                // line 43
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_theme_manage", array("uri" => $this->getAttribute($context["theme"], "uri", array()))), "html", null, true);
                echo "\"class=\"btn btn-primary\" >管理</a>
            ";
            }
            // line 45
            echo "            ";
            if (((($this->getAttribute($context["theme"], "uri", array()) == "graceful") && ($this->getAttribute((isset($context["currentTheme"]) ? $context["currentTheme"] : null), "uri", array()) == "graceful")) && $this->env->getExtension('topxia_web_twig')->versionCompare($this->getAttribute($context["theme"], "version", array()), "1.4.14", ">="))) {
                // line 46
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_theme_manage", array("uri" => $this->getAttribute($context["theme"], "uri", array()))), "html", null, true);
                echo "\"class=\"btn btn-primary\" >管理</a>
            ";
            }
            // line 48
            echo "          </td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['theme'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "    </tbody>
  </table>


";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Theme:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 51,  124 => 48,  118 => 46,  115 => 45,  109 => 43,  106 => 42,  100 => 40,  96 => 38,  94 => 37,  89 => 35,  85 => 34,  80 => 31,  74 => 29,  72 => 28,  68 => 27,  64 => 26,  59 => 24,  53 => 20,  49 => 19,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set script_controller = 'setting/theme' %}*/
/* */
/* {% set menu = 'admin_setting_theme' %}*/
/* */
/* {% block main %}*/
/* */
/*   <table class="table table-striped table-hover" id="theme-table">*/
/*     <thead>*/
/*     <tr>*/
/*       <th>名称</th>*/
/*       <th width="10%">主题版本</th>*/
/*       <th>作者</th>*/
/*       <th>操作</th>*/
/*     </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*       {% for theme in themes %}*/
/*         <tr>*/
/*           <td>*/
/* */
/*             <div class="media">*/
/*               <img class="media-object pull-left" src="{{ asset('themes/' ~ theme.uri ~ '/' ~ theme.thumb) }}" width="150">*/
/*               <div class="media-body">*/
/*                 <h5 class="media-heading">{{ theme.name }}</h5>*/
/*                 {{ theme.description|default('')|raw }}*/
/*                 {% if theme.setting|default(null) %}*/
/*                   <a href="../{{ theme.setting }}">设置</a>*/
/*                 {% endif %}*/
/*               </div>*/
/*             </div>*/
/*           </td>*/
/*           <td>{{ theme.version }}</td>*/
/*           <td>{{ theme.author }}</td>*/
/*           <td>*/
/*             {% if currentTheme.uri == theme.uri %}*/
/*               <span class="text-success">当前正在使用该主题</span>*/
/*             {% else %}*/
/*               <button class="btn btn-default btn-sm use-theme-btn" data-url="{{ path('admin_setting_theme_change', {uri:theme.uri}) }}">使用</button>*/
/*             {% endif %}*/
/*             {% if theme.uri == 'jianmo' and currentTheme.uri == 'jianmo' %}*/
/*             <a href="{{ path('admin_theme_manage', {uri:theme.uri}) }}"class="btn btn-primary" >管理</a>*/
/*             {% endif %}*/
/*             {% if theme.uri == 'graceful' and currentTheme.uri == 'graceful' and version_compare(theme.version,'1.4.14','>=') %}*/
/*             <a href="{{ path('admin_theme_manage', {uri:theme.uri}) }}"class="btn btn-primary" >管理</a>*/
/*             {% endif %}*/
/*           </td>*/
/*         </tr>*/
/*       {% endfor %}*/
/*     </tbody>*/
/*   </table>*/
/* */
/* */
/* {% endblock %}*/
