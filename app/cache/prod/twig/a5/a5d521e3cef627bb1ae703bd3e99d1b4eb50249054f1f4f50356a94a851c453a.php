<?php

/* TopxiaWebBundle:Card:index.html.twig */
class __TwigTemplate_f9d81a30e007f2424c1106d3960085a5bfff80912be49650381702cb00e24be4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Card:layout.html.twig", "TopxiaWebBundle:Card:index.html.twig", 1);
        $this->blocks = array(
            'main_body' => array($this, 'block_main_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Card:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["main_nav"] = "cards";
        // line 4
        $context["script_controller"] = "topxiawebbundle/controller/card/index";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_main_body($context, array $blocks = array())
    {
        // line 7
        echo "  ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "cookies", array()), "get", array(0 => "modalOpened"), "method") == 1)) {
            // line 8
            echo "    <a href=\"#modal\" class=\"receive-modal hidden\" data-toggle=\"modal\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("card_info", array("cardType" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "cardType"), "method"), "cardId" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "cardId"), "method"))), "html", null, true);
            echo "\" ><span class=\"\"></span></a>
  ";
        }
        // line 10
        echo "  <div class=\"clearfix mbl\">
    <ul class=\"nav nav-pills inline-block\">
      <li role=\"presentation\" ";
        // line 12
        if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "cardType"), "method") == "") || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "cardType"), "method") == "coupon"))) {
            echo " class=\"active\"";
        }
        echo "><a href=\"";
        echo $this->env->getExtension('routing')->getPath("my_cards", array("cardType" => ""));
        echo "\">优惠券</a></li>
    ";
        // line 13
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("MoneyCard")) {
            // line 14
            echo "      <li role=\"presentation\" ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "cardType"), "method") == "moneyCard")) {
                echo " class=\"active\"";
            }
            echo "><a href=\"";
            echo $this->env->getExtension('routing')->getPath("my_cards", array("cardType" => "moneyCard"));
            echo "\">学习卡</a></li>
    ";
        }
        // line 16
        echo "    </ul>

    <div class=\"pull-right btn-group\">
    ";
        // line 19
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("MoneyCard")) {
            // line 20
            echo "        <a role=\"filter-change\" class=\"btn btn-default ";
            if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "filter"), "method") == "") || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "filter"), "method") == "all"))) {
                echo "btn-primary";
            }
            echo "\" data-url='";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_cards", array("cardType" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "cardType"), "method"), "filter" => "")), "html", null, true);
            echo "'>全部</a>
        <a role=\"filter-change\" class=\"btn btn-default ";
            // line 21
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "filter"), "method") == "useable")) {
                echo "btn-primary";
            }
            echo "\" data-url='";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_cards", array("cardType" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "cardType"), "method"), "filter" => "useable")), "html", null, true);
            echo "'>未使用</a>
        <a role=\"filter-change\" class=\"btn btn-default ";
            // line 22
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "filter"), "method") == "used")) {
                // line 23
                echo "btn-primary";
            }
            echo "\" data-url='";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_cards", array("cardType" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "cardType"), "method"), "filter" => "used")), "html", null, true);
            echo "'>已使用</a>
        <a role=\"filter-change\" class=\"btn btn-default ";
            // line 24
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "filter"), "method") == "outdate")) {
                echo "btn-primary";
            }
            echo "\" data-url='";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_cards", array("cardType" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "cardType"), "method"), "filter" => "outdate")), "html", null, true);
            echo "'>已过期</a>
      ";
        }
        // line 26
        echo "
      ";
        // line 27
        if (($this->env->getExtension('topxia_web_twig')->isPluginInstalled("MoneyCard") && ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "cardType"), "method") == "moneyCard"))) {
            // line 28
            echo "        <a role=\"filter-change\" class=\"btn btn-default ";
            if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "filter"), "method") == "invalid")) {
                echo "btn-primary";
            }
            echo "\" data-url='";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_cards", array("cardType" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "cardType"), "method"), "filter" => "invalid")), "html", null, true);
            echo "'>已作废</a> 
      ";
        }
        // line 30
        echo "    </div>
  </div>
  <div class=\"card-pack-list\">
    <div class=\"row\">
      ";
        // line 34
        if ((($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled") != 0) || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "cardType"), "method") != "moneyCard"))) {
            // line 35
            echo "        ";
            if ( !(null === (isset($context["cards"]) ? $context["cards"] : null))) {
                // line 36
                echo "          ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["cards"]) ? $context["cards"] : null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
                    // line 37
                    echo "            <div class=\"col-lg-4 col-md-6 col-sm-6\">
              ";
                    // line 38
                    if (($this->getAttribute($context["card"], "cardType", array()) == "coupon")) {
                        // line 39
                        echo "                ";
                        $this->loadTemplate((("TopxiaWebBundle:Card:coupon-" . $this->getAttribute($context["card"], "status", array())) . ".html.twig"), "TopxiaWebBundle:Card:index.html.twig", 39)->display(array_merge($context, array("cardDetail" => $this->getAttribute((isset($context["cardDetails"]) ? $context["cardDetails"] : null), $this->getAttribute($context["card"], "cardId", array()), array(), "array"))));
                        // line 40
                        echo "              ";
                    }
                    // line 41
                    echo "              ";
                    if ((($this->getAttribute($context["card"], "cardType", array()) == "moneyCard") && $this->env->getExtension('topxia_web_twig')->isPluginInstalled("moneyCard"))) {
                        echo "  
                ";
                        // line 42
                        $this->loadTemplate((("TopxiaWebBundle:Card:moneycard-" . $this->getAttribute($context["card"], "status", array())) . ".html.twig"), "TopxiaWebBundle:Card:index.html.twig", 42)->display(array_merge($context, array("cardDetail" => $this->getAttribute((isset($context["cardDetails"]) ? $context["cardDetails"] : null), $this->getAttribute($context["card"], "cardId", array()), array(), "array"))));
                        // line 43
                        echo "              ";
                    }
                    // line 44
                    echo "            </div>
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "        ";
            } else {
                // line 47
                echo "          <div class=\"empty\">没有搜索到符合条件的";
                if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "cardType"), "method") == "") || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "cardType"), "method") == "coupon"))) {
                    echo "优惠券";
                } else {
                    echo "学习卡";
                }
                echo "</div>
        ";
            }
            // line 49
            echo "      ";
        } else {
            // line 50
            echo "        <div class=\"empty\">网站没有开启";
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "虚拟币"), "html", null, true);
            echo "功能,学习卡功能暂时没法使用</div>
      ";
        }
        // line 52
        echo "    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Card:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  213 => 52,  207 => 50,  204 => 49,  194 => 47,  191 => 46,  176 => 44,  173 => 43,  171 => 42,  166 => 41,  163 => 40,  160 => 39,  158 => 38,  155 => 37,  137 => 36,  134 => 35,  132 => 34,  126 => 30,  116 => 28,  114 => 27,  111 => 26,  102 => 24,  95 => 23,  93 => 22,  85 => 21,  76 => 20,  74 => 19,  69 => 16,  59 => 14,  57 => 13,  49 => 12,  45 => 10,  39 => 8,  36 => 7,  33 => 6,  29 => 1,  27 => 4,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:Card:layout.html.twig' %}*/
/* */
/* {% set main_nav = 'cards' %}*/
/* {% set script_controller = 'topxiawebbundle/controller/card/index' %}*/
/* */
/* {% block main_body %}*/
/*   {% if app.request.cookies.get('modalOpened') == 1 %}*/
/*     <a href="#modal" class="receive-modal hidden" data-toggle="modal" data-url="{{ path('card_info',{'cardType':app.request.query.get('cardType'),'cardId':app.request.query.get('cardId')}) }}" ><span class=""></span></a>*/
/*   {% endif %}*/
/*   <div class="clearfix mbl">*/
/*     <ul class="nav nav-pills inline-block">*/
/*       <li role="presentation" {% if app.request.query.get('cardType')=='' or app.request.query.get('cardType')=='coupon' %} class="active"{% endif %}><a href="{{ path('my_cards',{ cardType:''}) }}">优惠券</a></li>*/
/*     {% if is_plugin_installed("MoneyCard") %}*/
/*       <li role="presentation" {% if app.request.query.get('cardType')=='moneyCard' %} class="active"{% endif %}><a href="{{ path('my_cards',{ cardType:'moneyCard'}) }}">学习卡</a></li>*/
/*     {% endif %}*/
/*     </ul>*/
/* */
/*     <div class="pull-right btn-group">*/
/*     {% if is_plugin_installed("MoneyCard") %}*/
/*         <a role="filter-change" class="btn btn-default {% if app.request.query.get('filter') == '' or app.request.query.get('filter') == 'all' %}btn-primary{% endif %}" data-url='{{ path('my_cards',{cardType:app.request.query.get('cardType'),filter:''}) }}'>全部</a>*/
/*         <a role="filter-change" class="btn btn-default {% if app.request.query.get('filter') == 'useable' %}btn-primary{% endif %}" data-url='{{ path('my_cards',{cardType:app.request.query.get('cardType'),filter:'useable'}) }}'>未使用</a>*/
/*         <a role="filter-change" class="btn btn-default {% if app.request.query*/
/*         .get('filter') == 'used' %}btn-primary{% endif %}" data-url='{{ path('my_cards',{cardType:app.request.query.get('cardType'),filter:'used'}) }}'>已使用</a>*/
/*         <a role="filter-change" class="btn btn-default {% if app.request.query.get('filter') == 'outdate' %}btn-primary{% endif %}" data-url='{{ path('my_cards',{cardType:app.request.query.get('cardType'),filter:'outdate'}) }}'>已过期</a>*/
/*       {% endif %}*/
/* */
/*       {% if is_plugin_installed("MoneyCard") and app.request.query.get('cardType') == "moneyCard" %}*/
/*         <a role="filter-change" class="btn btn-default {% if app.request.query.get('filter') == 'invalid' %}btn-primary{% endif %}" data-url='{{ path('my_cards',{cardType:app.request.query.get('cardType'),filter:'invalid'}) }}'>已作废</a> */
/*       {% endif %}*/
/*     </div>*/
/*   </div>*/
/*   <div class="card-pack-list">*/
/*     <div class="row">*/
/*       {% if setting('coin.coin_enabled') != 0 or app.request.query.get('cardType') != 'moneyCard' %}*/
/*         {% if cards is not null %}*/
/*           {% for card in cards %}*/
/*             <div class="col-lg-4 col-md-6 col-sm-6">*/
/*               {% if card.cardType == 'coupon'%}*/
/*                 {% include 'TopxiaWebBundle:Card:coupon-'~card.status~'.html.twig' with {cardDetail:cardDetails[card.cardId]} %}*/
/*               {% endif %}*/
/*               {% if card.cardType == 'moneyCard' and is_plugin_installed('moneyCard') %}  */
/*                 {% include 'TopxiaWebBundle:Card:moneycard-'~card.status~'.html.twig' with {cardDetail:cardDetails[card.cardId]} %}*/
/*               {% endif %}*/
/*             </div>*/
/*           {% endfor %}*/
/*         {% else %}*/
/*           <div class="empty">没有搜索到符合条件的{% if app.request.query.get('cardType')=='' or app.request.query.get('cardType')=='coupon' %}优惠券{% else %}学习卡{% endif %}</div>*/
/*         {% endif %}*/
/*       {% else %}*/
/*         <div class="empty">网站没有开启{{setting('coin.coin_name')|default('虚拟币')}}功能,学习卡功能暂时没法使用</div>*/
/*       {% endif %}*/
/*     </div>*/
/*   </div>*/
/* {% endblock %}*/
