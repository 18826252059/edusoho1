<?php

/* TopxiaWebBundle:Coin:coin-content-show.html.twig */
class __TwigTemplate_26f1d4982dba02634268f2a181a898beb93c14ef5f658e790aa036b11c9aeb7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Coin:coin-content-show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'description' => array($this, 'block_description'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 7
        $context["bodyClass"] = "coin-detail-page";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
        echo "说明 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_description($context, array $blocks = array())
    {
        echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute((isset($context["coinSetting"]) ? $context["coinSetting"] : null), "coin_content", array()), 100);
    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        // line 9
        echo "<div class=\"es-section\">
  <div class=\"section-header\"><h1>";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
        echo "说明</h1></div>
  
  ";
        // line 12
        if ($this->getAttribute((isset($context["coinSetting"]) ? $context["coinSetting"] : null), "coin_content", array())) {
            // line 13
            echo "  \t";
            echo $this->getAttribute((isset($context["coinSetting"]) ? $context["coinSetting"] : null), "coin_content", array());
            echo "
  ";
        } else {
            // line 15
            echo "    <div class=\"empty\">当前页面尚未编辑内容，请在管理后台编辑。</div>
  ";
        }
        // line 17
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Coin:coin-content-show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 17,  66 => 15,  60 => 13,  58 => 12,  53 => 10,  50 => 9,  47 => 8,  41 => 4,  33 => 3,  29 => 1,  27 => 7,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::layout.html.twig' %}*/
/* */
/* {% block title %}{{setting('coin.coin_name')}}说明 - {{ parent() }}{% endblock %}*/
/* {% block description %}{{ coinSetting.coin_content|plain_text(100) }}{% endblock %}*/
/* */
/* */
/* {% set bodyClass = 'coin-detail-page' %}*/
/* {% block content %}*/
/* <div class="es-section">*/
/*   <div class="section-header"><h1>{{setting('coin.coin_name')}}说明</h1></div>*/
/*   */
/*   {% if coinSetting.coin_content %}*/
/*   	{{ coinSetting.coin_content|raw }}*/
/*   {% else %}*/
/*     <div class="empty">当前页面尚未编辑内容，请在管理后台编辑。</div>*/
/*   {% endif %}*/
/* </div>*/
/* {% endblock %}*/
