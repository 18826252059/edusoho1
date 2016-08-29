<?php

/* TopxiaAdminBundle:Theme:theme-edit-config-li.html.twig */
class __TwigTemplate_84f94708f3977c651aad657e7016d264f5bdaeec7c7e24899b01d951e681956a extends Twig_Template
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
        echo "<li class=\"list-group-item clearfix theme-edit-item\" data-code=\"theme_edit_item_";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pendant"]) ? $context["pendant"] : null), "code", array()), "html", null, true);
        echo "\" id=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pendant"]) ? $context["pendant"] : null), "id", array()), "html", null, true);
        echo "\">
  <div class=\"col-md-4 \">
    <span class=\"glyphicon glyphicon-move edit-sort\"></span>
    <label>
      <input type=\"checkbox\" class=\"check-block\" ";
        // line 5
        if (((array_key_exists("isChoiced", $context)) ? (_twig_default_filter((isset($context["isChoiced"]) ? $context["isChoiced"] : null), null)) : (null))) {
            echo "checked";
        }
        echo "><span class=\"default-title\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pendant"]) ? $context["pendant"] : null), "defaultTitle", array()), "html", null, true);
        echo "</span>
    </label>
  </div>
  <div class=\"col-md-4\">
    &nbsp;";
        // line 9
        if ((($this->getAttribute((isset($context["pendant"]) ? $context["pendant"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["pendant"]) ? $context["pendant"] : null), "title", array()), null)) : (null))) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pendant"]) ? $context["pendant"] : null), "title", array()), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pendant"]) ? $context["pendant"] : null), "defaultTitle", array()), "html", null, true);
        }
        // line 10
        echo "  </div>
  <div class=\"col-md-3\"></div>
  <div class=\"col-md-1\">
    ";
        // line 13
        if (!twig_in_filter($this->getAttribute((isset($context["pendant"]) ? $context["pendant"] : null), "code", array()), array(0 => "login-box"))) {
            // line 14
            echo "      ";
            if (($this->getAttribute((isset($context["pendant"]) ? $context["pendant"] : null), "code", array()) != "middle-banner")) {
                // line 15
                echo "        <button class=\"btn btn-primary btn-sm item-edit-btn\" ";
                if ( !((array_key_exists("isChoiced", $context)) ? (_twig_default_filter((isset($context["isChoiced"]) ? $context["isChoiced"] : null), null)) : (null))) {
                    echo "style=\"display:none;\"";
                }
                echo " data-title=\"Edit\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_themes_config_edit", array("uri" => ((array_key_exists("uri", $context)) ? (_twig_default_filter((isset($context["uri"]) ? $context["uri"] : null), null)) : (null)), "config" => (isset($context["pendant"]) ? $context["pendant"] : null))), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-pencil\"></span> 编辑</button>
      ";
            } elseif (($this->getAttribute(            // line 16
(isset($context["pendant"]) ? $context["pendant"] : null), "code", array()) == "middle-banner")) {
                // line 17
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_block", array("category" => _twig_default_filter("theme", "all"))), "html", null, true);
                echo "\" target=\"_blank\" class=\"btn btn-primary btn-sm item-set-btn\" ";
                if ( !((array_key_exists("isChoiced", $context)) ? (_twig_default_filter((isset($context["isChoiced"]) ? $context["isChoiced"] : null), null)) : (null))) {
                    echo "style=\"display:none;\"";
                }
                echo "><span class=\"glyphicon glyphicon-wrench\"></span> 设置</a>
      ";
            }
            // line 19
            echo "    ";
        }
        // line 20
        echo "  </div>
</li>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Theme:theme-edit-config-li.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 20,  77 => 19,  67 => 17,  65 => 16,  56 => 15,  53 => 14,  51 => 13,  46 => 10,  40 => 9,  29 => 5,  19 => 1,);
    }
}
/* <li class="list-group-item clearfix theme-edit-item" data-code="theme_edit_item_{{ pendant.code }}" id="{{ pendant.id }}">*/
/*   <div class="col-md-4 ">*/
/*     <span class="glyphicon glyphicon-move edit-sort"></span>*/
/*     <label>*/
/*       <input type="checkbox" class="check-block" {% if isChoiced|default(null) %}checked{% endif %}><span class="default-title">{{ pendant.defaultTitle }}</span>*/
/*     </label>*/
/*   </div>*/
/*   <div class="col-md-4">*/
/*     &nbsp;{% if pendant.title|default(null) %}{{ pendant.title }}{% else %}{{ pendant.defaultTitle }}{% endif %}*/
/*   </div>*/
/*   <div class="col-md-3"></div>*/
/*   <div class="col-md-1">*/
/*     {% if pendant.code not in ['login-box']%}*/
/*       {% if pendant.code != 'middle-banner' %}*/
/*         <button class="btn btn-primary btn-sm item-edit-btn" {% if not isChoiced|default(null) %}style="display:none;"{% endif %} data-title="Edit" data-toggle="modal" data-target="#modal" data-url="{{path('admin_themes_config_edit', {uri:uri|default(null),config:pendant})}}"><span class="glyphicon glyphicon-pencil"></span> 编辑</button>*/
/*       {% elseif pendant.code == 'middle-banner' %}*/
/*         <a href="{{path('admin_block', {category:'theme'|default('all')})}}" target="_blank" class="btn btn-primary btn-sm item-set-btn" {% if not isChoiced|default(null) %}style="display:none;"{% endif %}><span class="glyphicon glyphicon-wrench"></span> 设置</a>*/
/*       {% endif %}*/
/*     {% endif %}*/
/*   </div>*/
/* </li>*/
