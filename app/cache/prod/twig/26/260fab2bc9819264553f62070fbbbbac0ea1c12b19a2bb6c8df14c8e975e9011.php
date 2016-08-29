<?php

/* TopxiaWebBundle::float-consult.html.twig */
class __TwigTemplate_7d102899b3530ed73579e86c9b0f8ffcffdf782a6f74be8ce7005c6c0f8dd845 extends Twig_Template
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
        $context["consult"] = $this->env->getExtension('topxia_web_twig')->getSetting("consult");
        // line 2
        echo "<div id=\"float-consult\" class=\"float-consult hidden-xs\">
  <div class=\"btn-group-vertical\">

    ";
        // line 5
        $context["break"] = 0;
        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "qq", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["qq"]) {
            if (( !twig_test_empty($this->getAttribute($context["qq"], "name", array())) && ((isset($context["break"]) ? $context["break"] : null) == 0))) {
                // line 7
                echo "      <span class=\"btn btn-consult-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "color", array()), "html", null, true);
                echo " float-consult-qq-btn\" data-container=\".float-consult-qq-btn\" data-title=\"QQ客服\" data-content-element=\"#consult-qq-content\"><span class=\"icon icon-qq\"></span></span>
      ";
                // line 8
                $context["break"] = 1;
                // line 9
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qq'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "
    ";
        // line 11
        $context["break"] = 0;
        // line 12
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "qqgroup", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["qqgroup"]) {
            if (( !twig_test_empty($this->getAttribute($context["qqgroup"], "name", array())) && ((isset($context["break"]) ? $context["break"] : null) == 0))) {
                // line 13
                echo "      <span class=\"btn btn-consult-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "color", array()), "html", null, true);
                echo " float-consult-qqgroup-btn\" data-container=\".float-consult-qqgroup-btn\" data-title=\"QQ群\" data-content-element=\"#consult-qqgroup-content\"><span class=\"icon icon-qqgroup\"></span></span>
      ";
                // line 14
                $context["break"] = 1;
                // line 15
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qqgroup'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
    ";
        // line 17
        $context["break"] = 0;
        // line 18
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "phone", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
            if (( !twig_test_empty($this->getAttribute($context["phone"], "name", array())) && ((isset($context["break"]) ? $context["break"] : null) == 0))) {
                // line 19
                echo "      <span class=\"btn btn-consult-";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "color", array()), "html", null, true);
                echo " float-consult-phone-btn\" data-container=\".float-consult-phone-btn\" data-title=\"电话客服\" data-content-element=\"#consult-phone-content\"><span class=\"icon icon-phone\"></span></span>
      ";
                // line 20
                $context["break"] = 1;
                // line 21
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "
    ";
        // line 23
        if ( !twig_test_empty($this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "webchatURI", array()))) {
            // line 24
            echo "      <span class=\"btn btn-consult-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "color", array()), "html", null, true);
            echo " float-consult-weixin-btn\" data-container=\".float-consult-weixin-btn\" data-title=\"微信公众号\" data-content-element=\"#consult-weixin-content\"><span class=\"icon icon-weixin\"></span></span>
    ";
        }
        // line 26
        echo "
    ";
        // line 27
        if ( !twig_test_empty($this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "email", array()))) {
            // line 28
            echo "      <span class=\"btn btn-consult-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "color", array()), "html", null, true);
            echo " float-consult-email-btn\" data-container=\".float-consult-email-btn\" data-title=\"电子邮箱\" data-content-element=\"#consult-email-content\"><span class=\"icon icon-email\"></span></span>
    ";
        }
        // line 30
        echo "  </div>

  <div class=\"consult-contents\">
    <div id=\"consult-qq-content\">
      ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "qq", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["qq"]) {
            if ( !twig_test_empty($this->getAttribute($context["qq"], "name", array()))) {
                // line 35
                echo "        ";
                if ( !(($this->getAttribute($context["qq"], "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["qq"], "url", array()), false)) : (false))) {
                    // line 36
                    echo "        <p>
          <a target=\"_blank\" href=\"http://wpa.qq.com/msgrd?v=3&uin=";
                    // line 37
                    echo twig_escape_filter($this->env, $this->getAttribute($context["qq"], "number", array()), "html", null, true);
                    echo "&site=qq&menu=yes\" >
            <img border=\"0\" src=\"http://wpa.qq.com/pa?p=2:";
                    // line 38
                    echo twig_escape_filter($this->env, $this->getAttribute($context["qq"], "number", array()), "html", null, true);
                    echo ":52\" alt=\"\" title=\"点击这里给我发消息\"/>
            ";
                    // line 39
                    echo twig_escape_filter($this->env, $this->getAttribute($context["qq"], "name", array()), "html", null, true);
                    echo "
          </a>
        </p>
        ";
                } else {
                    // line 43
                    echo "          <p>
            <a href=\"";
                    // line 44
                    echo $this->getAttribute($context["qq"], "url", array());
                    echo "\" target=\"_blank\">
            <img border=\"0\" src=\"http://wpa.qq.com/pa?p=2:";
                    // line 45
                    echo twig_escape_filter($this->env, $this->getAttribute($context["qq"], "number", array()), "html", null, true);
                    echo ":52\" alt=\"\" title=\"点击这里给我发消息\"/>
              ";
                    // line 46
                    echo twig_escape_filter($this->env, $this->getAttribute($context["qq"], "name", array()), "html", null, true);
                    echo "
            </a>
          </p>
        ";
                }
                // line 50
                echo "      ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qq'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "    </div>

    <div id=\"consult-qqgroup-content\">
      ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "qqgroup", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["qqgroup"]) {
            if ( !twig_test_empty($this->getAttribute($context["qqgroup"], "name", array()))) {
                // line 55
                echo "        <p>
          <span class=\"icon icon-qqgroup text-muted\" style=\"font-size:14px;\"></span>
          ";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($context["qqgroup"], "name", array()), "html", null, true);
                echo "
          <br> <span class=\"text-info\" style=\"margin-left:20px;\">";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["qqgroup"], "number", array()), "html", null, true);
                echo "</span>
        </p>
      ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qqgroup'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "    </div>
    <div id=\"consult-phone-content\">
      <p>
        <strong>服务时间：</strong> ";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "worktime", array()), "html", null, true);
        echo "
      </p>

      ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "phone", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
            if ( !twig_test_empty($this->getAttribute($context["phone"], "name", array()))) {
                // line 68
                echo "        <p>
          ";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute($context["phone"], "name", array()), "html", null, true);
                echo "： ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["phone"], "number", array()), "html", null, true);
                echo "
        </p>
      ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phone'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "    </div>


    <div id=\"consult-weixin-content\">
      <img src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "webchatURI", array())), "html", null, true);
        echo "\" class=\"qrcode center-block\">
    </div>

    <div id=\"consult-email-content\">
     <a href=\"mailto:";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "email", array()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["consult"]) ? $context["consult"] : null), "email", array()), "html", null, true);
        echo "</a>
    </div>

  </div>
</div>

";
        // line 86
        $this->env->getExtension('topxia_web_twig')->loadScript("../util/float-consult");
        // line 87
        echo "  ";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle::float-consult.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 87,  260 => 86,  249 => 80,  242 => 76,  236 => 72,  224 => 69,  221 => 68,  216 => 67,  210 => 64,  205 => 61,  195 => 58,  191 => 57,  187 => 55,  182 => 54,  177 => 51,  170 => 50,  163 => 46,  159 => 45,  155 => 44,  152 => 43,  145 => 39,  141 => 38,  137 => 37,  134 => 36,  131 => 35,  126 => 34,  120 => 30,  114 => 28,  112 => 27,  109 => 26,  103 => 24,  101 => 23,  98 => 22,  91 => 21,  89 => 20,  84 => 19,  78 => 18,  76 => 17,  73 => 16,  66 => 15,  64 => 14,  59 => 13,  53 => 12,  51 => 11,  48 => 10,  41 => 9,  39 => 8,  34 => 7,  28 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }
}
/* {% set consult = setting('consult') %}*/
/* <div id="float-consult" class="float-consult hidden-xs">*/
/*   <div class="btn-group-vertical">*/
/* */
/*     {% set break = 0 %}*/
/*     {% for qq in consult.qq if qq.name is not empty and break == 0 %}*/
/*       <span class="btn btn-consult-{{consult.color}} float-consult-qq-btn" data-container=".float-consult-qq-btn" data-title="QQ客服" data-content-element="#consult-qq-content"><span class="icon icon-qq"></span></span>*/
/*       {% set break = 1 %}*/
/*     {% endfor %}*/
/* */
/*     {% set break = 0 %}*/
/*     {% for qqgroup in consult.qqgroup if qqgroup.name is not empty and break == 0 %}*/
/*       <span class="btn btn-consult-{{consult.color}} float-consult-qqgroup-btn" data-container=".float-consult-qqgroup-btn" data-title="QQ群" data-content-element="#consult-qqgroup-content"><span class="icon icon-qqgroup"></span></span>*/
/*       {% set break = 1 %}*/
/*     {% endfor %}*/
/* */
/*     {% set break = 0 %}*/
/*     {% for phone in consult.phone if phone.name is not empty and break == 0 %}*/
/*       <span class="btn btn-consult-{{consult.color}} float-consult-phone-btn" data-container=".float-consult-phone-btn" data-title="电话客服" data-content-element="#consult-phone-content"><span class="icon icon-phone"></span></span>*/
/*       {% set break = 1 %}*/
/*     {% endfor %}*/
/* */
/*     {% if consult.webchatURI is not empty %}*/
/*       <span class="btn btn-consult-{{consult.color}} float-consult-weixin-btn" data-container=".float-consult-weixin-btn" data-title="微信公众号" data-content-element="#consult-weixin-content"><span class="icon icon-weixin"></span></span>*/
/*     {% endif %}*/
/* */
/*     {% if consult.email is not empty %}*/
/*       <span class="btn btn-consult-{{consult.color}} float-consult-email-btn" data-container=".float-consult-email-btn" data-title="电子邮箱" data-content-element="#consult-email-content"><span class="icon icon-email"></span></span>*/
/*     {% endif %}*/
/*   </div>*/
/* */
/*   <div class="consult-contents">*/
/*     <div id="consult-qq-content">*/
/*       {% for qq in consult.qq if qq.name is not empty %}*/
/*         {% if not qq.url|default(false) %}*/
/*         <p>*/
/*           <a target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin={{ qq.number }}&site=qq&menu=yes" >*/
/*             <img border="0" src="http://wpa.qq.com/pa?p=2:{{ qq.number }}:52" alt="" title="点击这里给我发消息"/>*/
/*             {{ qq.name }}*/
/*           </a>*/
/*         </p>*/
/*         {% else %}*/
/*           <p>*/
/*             <a href="{{ qq.url|raw }}" target="_blank">*/
/*             <img border="0" src="http://wpa.qq.com/pa?p=2:{{ qq.number }}:52" alt="" title="点击这里给我发消息"/>*/
/*               {{ qq.name }}*/
/*             </a>*/
/*           </p>*/
/*         {% endif %}*/
/*       {% endfor %}*/
/*     </div>*/
/* */
/*     <div id="consult-qqgroup-content">*/
/*       {% for qqgroup in consult.qqgroup if qqgroup.name is not empty %}*/
/*         <p>*/
/*           <span class="icon icon-qqgroup text-muted" style="font-size:14px;"></span>*/
/*           {{qqgroup.name}}*/
/*           <br> <span class="text-info" style="margin-left:20px;">{{qqgroup.number}}</span>*/
/*         </p>*/
/*       {% endfor %}*/
/*     </div>*/
/*     <div id="consult-phone-content">*/
/*       <p>*/
/*         <strong>服务时间：</strong> {{ consult.worktime }}*/
/*       </p>*/
/* */
/*       {% for phone in consult.phone if phone.name is not empty %}*/
/*         <p>*/
/*           {{ phone.name }}： {{ phone.number }}*/
/*         </p>*/
/*       {% endfor %}*/
/*     </div>*/
/* */
/* */
/*     <div id="consult-weixin-content">*/
/*       <img src="{{ asset(consult.webchatURI) }}" class="qrcode center-block">*/
/*     </div>*/
/* */
/*     <div id="consult-email-content">*/
/*      <a href="mailto:{{consult.email}}">{{ consult.email }}</a>*/
/*     </div>*/
/* */
/*   </div>*/
/* </div>*/
/* */
/* {% do load_script('../util/float-consult') %}*/
/*   */
