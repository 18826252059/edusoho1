<?php

/* TopxiaAdminBundle:Coin:coin-table-course.html.twig */
class __TwigTemplate_131a8b3f8b6edea8ff116a46b20a63e814d394120bff93d5f26bbba1d8e44280 extends Twig_Template
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
        echo "<div class=\"table-responsive\" id = \"table-responsive\">
  <table class=\"table\" style=\"table-layout:fixed;word-break:break-all\">
    ";
        // line 3
        if (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "cash_model", array()) == "deduction")) {
            // line 4
            echo "    <tr>
      <th width=\"40%\">课程</th>
      <th>人民币价格</th>
      <th>最大可抵扣比率</th>
      <th>最大可抵扣金额</th>
      <th>最大可用";
            // line 9
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "虚拟币"), "html", null, true);
            echo "</th>
    </tr>
    ";
        } else {
            // line 12
            echo "    <tr>
      <th width=\"60%\">课程</th>
      <th>人民币价格</th>
      <th>";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
            echo "价格</th>
    </tr> 
    ";
        }
        // line 18
        echo "    ";
        if ((isset($context["items"]) ? $context["items"] : null)) {
            // line 19
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 20
                echo "        <tr>
          <td>
            <div class=\"clearfix\">
              <img class=\"pull-left mrl\" src=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($context["item"], "smallPicture", array()), "course.png"), "html", null, true);
                echo "\" style=\"width:100px;\"/>
              <a class=\"pull-left\" href=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
                echo "\" target=\"_blank\" >";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                echo "
              </a>
            </div>
          </td>
          <td>
            ";
                // line 29
                if (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "cash_model", array()) == "deduction")) {
                    // line 30
                    echo "              <span id=\"rmb";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                    echo "\" class=\"rmbPrice\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "originPrice", array()), "html", null, true);
                    echo "</span>
            ";
                } else {
                    // line 32
                    echo "              <input type=\"hidden\" class=\"rmb\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "originPrice", array()), "html", null, true);
                    echo "\" data-id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                    echo "\"/>
              ";
                    // line 33
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "originPrice", array()), "html", null, true);
                    echo "
            ";
                }
                // line 35
                echo "          </td>
          ";
                // line 36
                if (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "cash_model", array()) == "deduction")) {
                    // line 37
                    echo "            <td>
              <input id=\"rate";
                    // line 38
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                    echo "\" type=\"text\" class=\"form-control rate\" style=\"width:50px;display:inline-block\" value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "maxRate", array()), "html", null, true);
                    echo "\" name=\"item-rate[";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                    echo "]\" data-id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                    echo "\"/> <label>%</label>
            </td>
            <td>
              <span id=\"deRmb";
                    // line 41
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($this->getAttribute($context["item"], "maxRate", array()) * $this->getAttribute($context["item"], "originPrice", array())) / 100), 2, "."), "html", null, true);
                    echo "</sapn>
            </td>
          ";
                }
                // line 44
                echo "          <td>
            ";
                // line 45
                if (($this->getAttribute((isset($context["set"]) ? $context["set"] : null), "cash_model", array()) == "deduction")) {
                    // line 46
                    echo "              <span id=\"cash";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((($this->getAttribute($context["item"], "maxRate", array()) / 100) * $this->getAttribute($context["item"], "originPrice", array())) * $this->getAttribute((isset($context["set"]) ? $context["set"] : null), "cash_rate", array())), 2, ".", ","), "html", null, true);
                    echo "</sapn>
            ";
                } else {
                    // line 48
                    echo "              <div class=\"form-group\">
                <div class=\"controls\">
                  <input type=\"text\" id=\"cash";
                    // line 50
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                    echo "\" class=\"form-control cashPrice\" style=\"width:40%;\" value=\"";
                    if (($this->getAttribute($context["item"], "originCoinPrice", array()) > 0)) {
                        echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "originCoinPrice", array()), "html", null, true);
                    }
                    echo "\" name=\"item-cash[";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                    echo "]\"/>
                </div>
              </div>
            ";
                }
                // line 54
                echo "          </td>
        </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "    ";
        }
        // line 58
        echo "  </table>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Coin:coin-table-course.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 58,  164 => 57,  156 => 54,  143 => 50,  139 => 48,  131 => 46,  129 => 45,  126 => 44,  118 => 41,  106 => 38,  103 => 37,  101 => 36,  98 => 35,  93 => 33,  86 => 32,  78 => 30,  76 => 29,  66 => 24,  62 => 23,  57 => 20,  52 => 19,  49 => 18,  43 => 15,  38 => 12,  32 => 9,  25 => 4,  23 => 3,  19 => 1,);
    }
}
/* <div class="table-responsive" id = "table-responsive">*/
/*   <table class="table" style="table-layout:fixed;word-break:break-all">*/
/*     {% if set.cash_model =="deduction" %}*/
/*     <tr>*/
/*       <th width="40%">课程</th>*/
/*       <th>人民币价格</th>*/
/*       <th>最大可抵扣比率</th>*/
/*       <th>最大可抵扣金额</th>*/
/*       <th>最大可用{{ setting('coin.coin_name')|default('虚拟币') }}</th>*/
/*     </tr>*/
/*     {% else %}*/
/*     <tr>*/
/*       <th width="60%">课程</th>*/
/*       <th>人民币价格</th>*/
/*       <th>{{ setting('coin.coin_name') }}价格</th>*/
/*     </tr> */
/*     {% endif %}*/
/*     {% if items %}*/
/*       {% for item in items %}*/
/*         <tr>*/
/*           <td>*/
/*             <div class="clearfix">*/
/*               <img class="pull-left mrl" src="{{ filepath(item.smallPicture,'course.png') }}" style="width:100px;"/>*/
/*               <a class="pull-left" href="{{ path('course_show', {id:item.id}) }}" target="_blank" >{{item.title}}*/
/*               </a>*/
/*             </div>*/
/*           </td>*/
/*           <td>*/
/*             {% if set.cash_model =="deduction" %}*/
/*               <span id="rmb{{item.id}}" class="rmbPrice">{{item.originPrice}}</span>*/
/*             {% else %}*/
/*               <input type="hidden" class="rmb" value="{{item.originPrice}}" data-id="{{item.id}}"/>*/
/*               {{item.originPrice}}*/
/*             {% endif %}*/
/*           </td>*/
/*           {% if set.cash_model =="deduction" %}*/
/*             <td>*/
/*               <input id="rate{{item.id}}" type="text" class="form-control rate" style="width:50px;display:inline-block" value="{{ item.maxRate }}" name="item-rate[{{item.id}}]" data-id="{{item.id}}"/> <label>%</label>*/
/*             </td>*/
/*             <td>*/
/*               <span id="deRmb{{item.id}}">{{ (item.maxRate * item.originPrice / 100)|number_format(2, '.') }}</sapn>*/
/*             </td>*/
/*           {% endif %}*/
/*           <td>*/
/*             {% if set.cash_model =="deduction" %}*/
/*               <span id="cash{{item.id}}">{{ (item.maxRate / 100 * item.originPrice * set.cash_rate)|number_format(2, '.', ',') }}</sapn>*/
/*             {% else %}*/
/*               <div class="form-group">*/
/*                 <div class="controls">*/
/*                   <input type="text" id="cash{{item.id}}" class="form-control cashPrice" style="width:40%;" value="{% if item.originCoinPrice > 0 %}{{ item.originCoinPrice }}{% endif %}" name="item-cash[{{item.id}}]"/>*/
/*                 </div>*/
/*               </div>*/
/*             {% endif %}*/
/*           </td>*/
/*         </tr>*/
/*       {% endfor %}*/
/*     {% endif %}*/
/*   </table>*/
/* </div>*/
