<?php

/* TopxiaWebBundle:EsBar:ListContent/consult.html.twig */
class __TwigTemplate_0ca381a2d5981f03e9ff1f5231a812f5555a2f75421d149c3d9a39708b4554fc extends Twig_Template
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
        if ($this->env->getExtension('topxia_web_twig')->getSetting("consult.enabled", 0)) {
            // line 2
            echo "  ";
            $context["consult"] = $this->env->getExtension('topxia_web_twig')->getSetting("consult");
            // line 3
            echo "  <div class=\"bar-popover-content\" style=\"display:none;\">
    <div id=\"bar-qq-content\"> 
      ";
            // line 5
            $context["countQq"] = 0;
            // line 6
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "qq", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["qq"]) {
                if ( !twig_test_empty($this->getAttribute($context["qq"], "name", array()))) {
                    // line 7
                    echo "        ";
                    $context["countQq"] = 1;
                    // line 8
                    echo "      ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qq'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            echo "
      ";
            // line 10
            if (((isset($context["countQq"]) ? $context["countQq"] : $this->getContext($context, "countQq")) > 0)) {
                // line 11
                echo "      <div class=\"row mtm\">
        ";
                // line 12
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "qq", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["qq"]) {
                    if ( !twig_test_empty($this->getAttribute($context["qq"], "name", array()))) {
                        // line 13
                        echo "          ";
                        if ((($this->getAttribute($context["qq"], "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["qq"], "url", array()), false)) : (false))) {
                            // line 14
                            echo "            <div class=\"col-xs-6 mbm text-overflow\">
              <a class=\"link-light\" href=\"";
                            // line 15
                            echo $this->getAttribute($context["qq"], "url", array());
                            echo "\" target=\"_blank\"><img class=\"mrs\" src=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/v2/img/bar_qq.png"), "html", null, true);
                            echo "\" alt=\"\" title=\"点击这里给我发消息\" alt=\"\">
                ";
                            // line 16
                            echo twig_escape_filter($this->env, $this->getAttribute($context["qq"], "name", array()), "html", null, true);
                            echo "
              </a>
            </div>
          ";
                        } else {
                            // line 20
                            echo "            <div class=\"col-xs-6 mbm text-overflow\">
              <a class=\"link-light\" href=\"http://wpa.qq.com/msgrd?v=3&uin=";
                            // line 21
                            echo twig_escape_filter($this->env, $this->getAttribute($context["qq"], "number", array()), "html", null, true);
                            echo "&site=qq&menu=yes\" target=\"_blank\"><img class=\"mrs\" src=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/v2/img/bar_qq.png"), "html", null, true);
                            echo "\" alt=\"\" title=\"点击这里给我发消息\" alt=\"\">
                ";
                            // line 22
                            echo twig_escape_filter($this->env, $this->getAttribute($context["qq"], "name", array()), "html", null, true);
                            echo "
              </a>
            </div>
          ";
                        }
                        // line 26
                        echo "        ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qq'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "      </div>
      <hr>
      ";
            }
            // line 30
            echo "
      <div class=\"row\">
        ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "qqgroup", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["qqgroup"]) {
                if ( !twig_test_empty($this->getAttribute($context["qqgroup"], "name", array()))) {
                    // line 33
                    echo "          <div class=\"col-xs-6 mbm\">
            <p class=\"text-overflow\">
              <img class=\"mrs\" src=\"";
                    // line 35
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/v2/img/bar_qq_group.png"), "html", null, true);
                    echo "\" alt=\"\">
              ";
                    // line 36
                    echo twig_escape_filter($this->env, $this->getAttribute($context["qqgroup"], "name", array()), "html", null, true);
                    echo "
            </p>
            
            ";
                    // line 39
                    if ( !(($this->getAttribute($context["qqgroup"], "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["qqgroup"], "url", array()), false)) : (false))) {
                        // line 40
                        echo "              <p class=\"text-overflow\">
                ";
                        // line 41
                        echo twig_escape_filter($this->env, $this->getAttribute($context["qqgroup"], "number", array()), "html", null, true);
                        echo "
              </p>
            ";
                    }
                    // line 44
                    echo "
            ";
                    // line 45
                    if ((($this->getAttribute($context["qqgroup"], "url", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["qqgroup"], "url", array()), false)) : (false))) {
                        // line 46
                        echo "              <p class=\"text-overflow\">
                ";
                        // line 47
                        echo $this->getAttribute($context["qqgroup"], "url", array());
                        echo "
              </p>
            ";
                    }
                    // line 50
                    echo "            
          </div>
        ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['qqgroup'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "      </div>
    </div>

    <div id=\"bar-phone-content\">
      ";
            // line 57
            if ( !twig_test_empty($this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "worktime", array()))) {
                // line 58
                echo "        <p class=\"mtm\"><i class=\"es-icon es-icon-accesstime mrm\"></i>工作时间： ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "worktime", array()), "html", null, true);
                echo "</p>
      ";
            }
            // line 60
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "phone", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["phone"]) {
                if ( !twig_test_empty($this->getAttribute($context["phone"], "name", array()))) {
                    // line 61
                    echo "        <p class=\"mtm\"><i class=\"es-icon es-icon-phone mrm\"></i>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["phone"], "name", array()), "html", null, true);
                    echo "： ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["phone"], "number", array()), "html", null, true);
                    echo "</p>
      ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['phone'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "      ";
            if ( !twig_test_empty($this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "email", array()))) {
                // line 64
                echo "        <p class=\"mtm\"><i class=\"es-icon es-icon-mail mrm\"></i>邮箱： <a class=\"link-light\" href=\"mailto:";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "email", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "email", array()), "html", null, true);
                echo "</a></p>
      ";
            }
            // line 66
            echo "    </div>

    ";
            // line 68
            if ( !twig_test_empty($this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "webchatURI", array()))) {
                // line 69
                echo "      <div id=\"bar-weixin-content\">
        <img width=\"110\" class=\"img-responsive\" src=\"";
                // line 70
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "webchatURI", array())), "html", null, true);
                echo "\" alt=\"\">
      </div>
    ";
            }
            // line 73
            echo "  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:EsBar:ListContent/consult.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 73,  215 => 70,  212 => 69,  210 => 68,  206 => 66,  198 => 64,  195 => 63,  183 => 61,  177 => 60,  171 => 58,  169 => 57,  163 => 53,  154 => 50,  148 => 47,  145 => 46,  143 => 45,  140 => 44,  134 => 41,  131 => 40,  129 => 39,  123 => 36,  119 => 35,  115 => 33,  110 => 32,  106 => 30,  101 => 27,  94 => 26,  87 => 22,  81 => 21,  78 => 20,  71 => 16,  65 => 15,  62 => 14,  59 => 13,  54 => 12,  51 => 11,  49 => 10,  46 => 9,  39 => 8,  36 => 7,  30 => 6,  28 => 5,  24 => 3,  21 => 2,  19 => 1,);
    }
}
/* {% if setting('consult.enabled', 0)  %}*/
/*   {% set consult = setting('consult') %}*/
/*   <div class="bar-popover-content" style="display:none;">*/
/*     <div id="bar-qq-content"> */
/*       {% set countQq = 0 %}*/
/*       {% for qq in consult.qq if qq.name is not empty %}*/
/*         {% set countQq = 1 %}*/
/*       {% endfor %}*/
/* */
/*       {% if countQq > 0 %}*/
/*       <div class="row mtm">*/
/*         {% for qq in consult.qq if qq.name is not empty %}*/
/*           {% if qq.url|default(false) %}*/
/*             <div class="col-xs-6 mbm text-overflow">*/
/*               <a class="link-light" href="{{ qq.url|raw }}" target="_blank"><img class="mrs" src="{{asset("assets/v2/img/bar_qq.png")}}" alt="" title="点击这里给我发消息" alt="">*/
/*                 {{ qq.name }}*/
/*               </a>*/
/*             </div>*/
/*           {% else %}*/
/*             <div class="col-xs-6 mbm text-overflow">*/
/*               <a class="link-light" href="http://wpa.qq.com/msgrd?v=3&uin={{ qq.number }}&site=qq&menu=yes" target="_blank"><img class="mrs" src="{{asset("assets/v2/img/bar_qq.png")}}" alt="" title="点击这里给我发消息" alt="">*/
/*                 {{ qq.name }}*/
/*               </a>*/
/*             </div>*/
/*           {% endif %}*/
/*         {% endfor %}*/
/*       </div>*/
/*       <hr>*/
/*       {% endif %}*/
/* */
/*       <div class="row">*/
/*         {% for qqgroup in consult.qqgroup if qqgroup.name is not empty %}*/
/*           <div class="col-xs-6 mbm">*/
/*             <p class="text-overflow">*/
/*               <img class="mrs" src="{{asset("assets/v2/img/bar_qq_group.png")}}" alt="">*/
/*               {{ qqgroup.name }}*/
/*             </p>*/
/*             */
/*             {% if not qqgroup.url|default(false) %}*/
/*               <p class="text-overflow">*/
/*                 {{ qqgroup.number }}*/
/*               </p>*/
/*             {% endif %}*/
/* */
/*             {% if qqgroup.url|default(false) %}*/
/*               <p class="text-overflow">*/
/*                 {{ qqgroup.url|raw }}*/
/*               </p>*/
/*             {% endif %}*/
/*             */
/*           </div>*/
/*         {% endfor %}*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div id="bar-phone-content">*/
/*       {% if consult.worktime is not empty %}*/
/*         <p class="mtm"><i class="es-icon es-icon-accesstime mrm"></i>工作时间： {{ consult.worktime }}</p>*/
/*       {% endif %}*/
/*       {% for phone in consult.phone if phone.name is not empty %}*/
/*         <p class="mtm"><i class="es-icon es-icon-phone mrm"></i>{{ phone.name }}： {{ phone.number }}</p>*/
/*       {% endfor %}*/
/*       {% if consult.email is not empty %}*/
/*         <p class="mtm"><i class="es-icon es-icon-mail mrm"></i>邮箱： <a class="link-light" href="mailto:{{consult.email}}">{{consult.email}}</a></p>*/
/*       {% endif %}*/
/*     </div>*/
/* */
/*     {% if consult.webchatURI is not empty %}*/
/*       <div id="bar-weixin-content">*/
/*         <img width="110" class="img-responsive" src="{{ asset(consult.webchatURI) }}" alt="">*/
/*       </div>*/
/*     {% endif %}*/
/*   </div>*/
/* {% endif %}*/
/* */
