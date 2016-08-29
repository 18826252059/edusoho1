<?php

/* TopxiaAdminBundle:Coin:coin-table-classroom.html.twig */
class __TwigTemplate_49928544f1a7bf303b8c0f1ce72eb2ce3b3e7434218a5b15dfff941a0c842fbf extends Twig_Template
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
    <tr>
      <th width=\"40%\">班级</th>
      <th>人民币价格</th>
      <th>最大可抵扣比率</th>
      <th>最大可抵扣金额</th>
      <th>最大可用";
        // line 8
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "虚拟币"), "html", null, true);
        echo "</th>
    </tr>
    ";
        // line 10
        if ((isset($context["items"]) ? $context["items"] : null)) {
            // line 11
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 12
                echo "        <tr>
          <td>
            <div class=\"chearfix\">
              <img class=\"pull-left mrl\" src=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($context["item"], "smallPicture", array()), "classroom.png"), "html", null, true);
                echo "\" style=\"width:100px;\"/>
              <a class=\"pull-left\" href=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
                echo "\" target=\"_blank\" >";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
                echo "
              </a>
            </div>
          </td>
          <td>
          <span id=\"rmb";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "\" class=\"rmbPrice\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "price", array()), "html", null, true);
                echo "</span>
          <td>
            <input id=\"rate";
                // line 23
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
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (($this->getAttribute($context["item"], "maxRate", array()) * $this->getAttribute($context["item"], "price", array())) / 100), 2, "."), "html", null, true);
                echo "</sapn>
          </td>
          <td>
            <span id=\"cash";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, ((($this->getAttribute($context["item"], "maxRate", array()) / 100) * $this->getAttribute($context["item"], "price", array())) * $this->getAttribute((isset($context["set"]) ? $context["set"] : null), "cash_rate", array())), 2, "."), "html", null, true);
                echo "</sapn>
          </td>
        </tr>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "    ";
        }
        // line 34
        echo "  </table>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Coin:coin-table-classroom.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 34,  98 => 33,  86 => 29,  78 => 26,  66 => 23,  59 => 21,  49 => 16,  45 => 15,  40 => 12,  35 => 11,  33 => 10,  28 => 8,  19 => 1,);
    }
}
/* <div class="table-responsive" id = "table-responsive">*/
/*   <table class="table" style="table-layout:fixed;word-break:break-all">*/
/*     <tr>*/
/*       <th width="40%">班级</th>*/
/*       <th>人民币价格</th>*/
/*       <th>最大可抵扣比率</th>*/
/*       <th>最大可抵扣金额</th>*/
/*       <th>最大可用{{ setting('coin.coin_name')|default('虚拟币') }}</th>*/
/*     </tr>*/
/*     {% if items %}*/
/*       {% for item in items %}*/
/*         <tr>*/
/*           <td>*/
/*             <div class="chearfix">*/
/*               <img class="pull-left mrl" src="{{ filepath(item.smallPicture, 'classroom.png') }}" style="width:100px;"/>*/
/*               <a class="pull-left" href="{{ path('classroom_show', {id:item.id}) }}" target="_blank" >{{item.title}}*/
/*               </a>*/
/*             </div>*/
/*           </td>*/
/*           <td>*/
/*           <span id="rmb{{item.id}}" class="rmbPrice">{{item.price}}</span>*/
/*           <td>*/
/*             <input id="rate{{item.id}}" type="text" class="form-control rate" style="width:50px;display:inline-block" value="{{ item.maxRate }}" name="item-rate[{{item.id}}]" data-id="{{item.id}}"/> <label>%</label>*/
/*           </td>*/
/*           <td>*/
/*             <span id="deRmb{{item.id}}">{{ (item.maxRate * item.price / 100)|number_format(2,'.') }}</sapn>*/
/*           </td>*/
/*           <td>*/
/*             <span id="cash{{item.id}}">{{ (item.maxRate / 100 * item.price * set.cash_rate)|number_format(2, '.') }}</sapn>*/
/*           </td>*/
/*         </tr>*/
/*       {% endfor %}*/
/*     {% endif %}*/
/*   </table>*/
/* </div>*/
