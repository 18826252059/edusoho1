<?php

/* TopxiaWebBundle:Settings:binds.html.twig */
class __TwigTemplate_5ba289e2395fa21a097977dad54931e820108fcbb349efeea26c80bab560d793 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Settings:layout.html.twig", "TopxiaWebBundle:Settings:binds.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Settings:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["side_nav"] = "binds";
        // line 7
        $context["settings"] = $this->env->getExtension('topxia_web_twig')->getSetting("login_bind", array());
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " 第三方登录 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        // line 10
        echo "  ";
        $this->loadTemplate("TopxiaWebBundle:Settings:binds.html.twig", "TopxiaWebBundle:Settings:binds.html.twig", 10, "1565874053")->display(array_merge($context, array("class" => "panel-col")));
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Settings:binds.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 10,  41 => 9,  34 => 3,  30 => 1,  28 => 7,  26 => 5,  11 => 1,);
    }
}


/* TopxiaWebBundle:Settings:binds.html.twig */
class __TwigTemplate_5ba289e2395fa21a097977dad54931e820108fcbb349efeea26c80bab560d793_1565874053 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->loadTemplate("TopxiaWebBundle:Bootstrap:panel.html.twig", "TopxiaWebBundle:Settings:binds.html.twig", 10);
        $this->blocks = array(
            'heading' => array($this, 'block_heading'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Bootstrap:panel.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_heading($context, array $blocks = array())
    {
        echo "第三方登录";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "      ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "
       <ul class=\"media-list\">
          ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) ? $context["clients"] : null));
        foreach ($context['_seq'] as $context["type"] => $context["client"]) {
            echo " 
          ";
            // line 16
            if (((($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), ($context["type"] . "_enabled"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), ($context["type"] . "_enabled"), array(), "array"), false)) : (false)) && ($context["type"] != "weixinmob"))) {
                // line 17
                echo "            <li class=\"media\">
              ";
                // line 18
                if ((($this->getAttribute($context["client"], "large_icon_img", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["client"], "large_icon_img", array()), null)) : (null))) {
                    // line 19
                    echo "                <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["client"], "large_icon_img", array())), "html", null, true);
                    echo "\" class=\" media-object pull-left\">
              ";
                }
                // line 21
                echo "              <div class=\"media-body\">
                ";
                // line 22
                if (((($this->getAttribute($context["client"], "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["client"], "status", array()), null)) : (null)) == "bind")) {
                    // line 23
                    echo "                  <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("settings_binds_unbind", array("type" => $context["type"])), "html", null, true);
                    echo "\" class=\"unbind btn btn-default pull-right\">取消绑定</a>
                ";
                } else {
                    // line 25
                    echo "                  <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("settings_binds_bind", array("type" => $context["type"])), "html", null, true);
                    echo "\" class=\"bind btn btn-primary pull-right\">绑定</a>
                ";
                }
                // line 27
                echo "
                <div>";
                // line 28
                if (($context["type"] == "weixinweb")) {
                    echo "微信登录";
                } else {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "name", array()), "html", null, true);
                }
                echo "</div>
                ";
                // line 29
                if (((($this->getAttribute($context["client"], "status", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["client"], "status", array()), null)) : (null)) == "bind")) {
                    // line 30
                    echo "                  <div class=\"text-success\">已绑定</div>
                ";
                } else {
                    // line 32
                    echo "                  <div class=\"text-muted\">未绑定</div>
                ";
                }
                // line 34
                echo "
              </div>
            </li>
          ";
            }
            // line 38
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['client'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
      </ul>
    ";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Settings:binds.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 38,  162 => 34,  158 => 32,  154 => 30,  152 => 29,  144 => 28,  141 => 27,  135 => 25,  129 => 23,  127 => 22,  124 => 21,  118 => 19,  116 => 18,  113 => 17,  111 => 16,  105 => 15,  99 => 13,  96 => 12,  90 => 11,  44 => 10,  41 => 9,  34 => 3,  30 => 1,  28 => 7,  26 => 5,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:Settings:layout.html.twig' %}*/
/* */
/* {% block title %} 第三方登录 - {{ parent() }}{% endblock %}*/
/* */
/* {% set side_nav = 'binds' %}*/
/* */
/* {% set settings = setting('login_bind', []) %}*/
/* */
/* {% block main %}*/
/*   {% embed "TopxiaWebBundle:Bootstrap:panel.html.twig" with {class:'panel-col'} %}*/
/*     {% block heading %}第三方登录{% endblock %}*/
/*     {% block body %}*/
/*       {{ web_macro.flash_messages() }}*/
/*        <ul class="media-list">*/
/*           {% for type, client in clients %} */
/*           {% if settings[type ~ '_enabled']|default(false) and type != 'weixinmob' %}*/
/*             <li class="media">*/
/*               {% if client.large_icon_img|default(null) %}*/
/*                 <img src="{{ asset(client.large_icon_img) }}" class=" media-object pull-left">*/
/*               {% endif %}*/
/*               <div class="media-body">*/
/*                 {% if client.status|default(null) == 'bind' %}*/
/*                   <a href="{{ path('settings_binds_unbind', {'type':type}) }}" class="unbind btn btn-default pull-right">取消绑定</a>*/
/*                 {% else %}*/
/*                   <a href="{{ path('settings_binds_bind', {'type':type}) }}" class="bind btn btn-primary pull-right">绑定</a>*/
/*                 {% endif %}*/
/* */
/*                 <div>{% if type == 'weixinweb'%}微信登录{% else %}{{ client.name }}{% endif %}</div>*/
/*                 {% if client.status|default(null) == 'bind' %}*/
/*                   <div class="text-success">已绑定</div>*/
/*                 {% else %}*/
/*                   <div class="text-muted">未绑定</div>*/
/*                 {% endif %}*/
/* */
/*               </div>*/
/*             </li>*/
/*           {% endif %}*/
/*         {% endfor %} */
/*       </ul>*/
/*     {% endblock %}*/
/*   {% endembed %}*/
/* {% endblock %}*/
