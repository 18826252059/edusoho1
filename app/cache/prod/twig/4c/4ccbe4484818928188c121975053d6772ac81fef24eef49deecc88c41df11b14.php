<?php

/* TopxiaWebBundle:CourseManage:price.html.twig */
class __TwigTemplate_e52ffd9212dd53e26f6cb01e7d34355b16028a056a1bb8697e6d341e73a8fc62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:CourseManage:layout.html.twig", "TopxiaWebBundle:CourseManage:price.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:CourseManage:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["side_nav"] = "price";
        // line 6
        $context["script_controller"] = "course-manage/price";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "价格设置 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading\">价格设置</div>
  <div class=\"panel-body\">
    ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

    ";
        // line 14
        $context["currency"] = ((($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled") && ($this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type") == "Coin"))) ? ("coin") : ("default"));
        // line 15
        echo "    ";
        $context["coinRate"] = $this->env->getExtension('topxia_web_twig')->getSetting("coin.cash_rate", 1);
        // line 16
        echo "
    ";
        // line 17
        if ((isset($context["canModifyPrice"]) ? $context["canModifyPrice"] : null)) {
            // line 18
            echo "      <form class=\"form-horizontal\" id=\"price-form\" method=\"post\" action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_manage_price", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\" data-cashrate=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.cash_rate", 1), "html", null, true);
            echo "\">
        ";
            // line 19
            if (((isset($context["currency"]) ? $context["currency"] : null) == "coin")) {
                // line 20
                echo "          <div class=\"form-group\">
            <label class=\"col-md-2 control-label\">";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
                echo "价格</label>
            <div class=\"col-md-8 controls\">
              <input type=\"text\" name=\"coinPrice\" class=\"form-control course-current-price\" value=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "originCoinPrice", array()), "html", null, true);
                echo "\">
              <div class=\"help-block\">
                <span class=\"text-muted\">";
                // line 25
                echo twig_escape_filter($this->env, (isset($context["coinRate"]) ? $context["coinRate"] : null), "html", null, true);
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
                echo " = １元</span>
              </div>
              ";
                // line 27
                if ((isset($context["discount"]) ? $context["discount"] : null)) {
                    // line 28
                    echo "                <div class=\"alert alert-warning\">
                  <small>当前课程正处于「";
                    // line 29
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["discount"]) ? $context["discount"] : null), "name", array()), "html", null, true);
                    echo "」打折活动中。
                  折扣： <strong>";
                    // line 30
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "discount", array()), "html", null, true);
                    echo " 折</strong>，
                  折后价：<strong> <span class=\"course-discount-price\" data-discount=\"";
                    // line 31
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "discount", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "coinPrice", array()), "html", null, true);
                    echo "</span> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
                    echo "</strong>。</small>  
                </div>
              ";
                }
                // line 34
                echo "            </div>
          </div>

          <div class=\"form-group\">
            <label class=\"col-md-2 control-label\">手机端价格</label>
            <div class=\"col-md-8 controls\">
              <input type=\"text\" name=\"price\" class=\"form-control\" value=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "originPrice", array()), "html", null, true);
                echo "\">
              <div class=\"help-block\">因手机端不支持虚拟币支付，价格仍显示为人民币价格。</div>
            </div>
          </div>

        ";
            } else {
                // line 46
                echo "          <div class=\"form-group\">
            <label class=\"col-md-2 control-label\">价格</label>
            <div class=\"col-md-8 controls\">
              <input type=\"text\" name=\"price\" class=\"form-control course-current-price\" value=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "originPrice", array()), "html", null, true);
                echo "\">
              <div class=\"help-block\">
              </div>
              ";
                // line 52
                if ((isset($context["discount"]) ? $context["discount"] : null)) {
                    // line 53
                    echo "                <div class=\"alert alert-warning\">
                  当前课程正处于「";
                    // line 54
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["discount"]) ? $context["discount"] : null), "name", array()), "html", null, true);
                    echo "」打折活动中。<br>
                  折扣： <strong>";
                    // line 55
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "discount", array()), "html", null, true);
                    echo " 折</strong>，
                  折后价：<strong><span class=\"course-discount-price\" data-discount=\"";
                    // line 56
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "discount", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "price", array()), "html", null, true);
                    echo "</span> 元</strong>。
                </div>
              ";
                }
                // line 59
                echo "            </div>
          </div>
        ";
            }
            // line 62
            echo "
        ";
            // line 63
            if (($this->env->getExtension('topxia_web_twig')->isPluginInstalled("Vip") && $this->env->getExtension('topxia_web_twig')->getSetting("vip.enabled"))) {
                // line 64
                echo "          <div class=\"form-group\">
            <label class=\"col-md-2 control-label\">会员课程设置</label>
            <div class=\"col-md-8 controls\">
              <select name=\"vipLevelId\" class=\"form-control width-input width-input-large\">
                ";
                // line 68
                echo $this->env->getExtension('topxia_html_twig')->selectOptions((isset($context["levels"]) ? $context["levels"] : null), $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "vipLevelId", array()), "无");
                echo "
              </select>
              <div class=\"help-block\">设置会员课程后，该会员及更高等级会员，可免费学习。</div>
            </div>
          </div>
        ";
            }
            // line 74
            echo "
        ";
            // line 75
            if (($this->env->getExtension('topxia_web_twig')->getSetting("storage.upload_mode") == "cloud")) {
                // line 76
                echo "        <div class=\"form-group\">
            <label class=\"col-md-2 control-label\">开启视频试看</label>
            <div class=\"col-md-8 controls radios\">
              ";
                // line 79
                echo $this->env->getExtension('topxia_html_twig')->radios("tryLookable", array(1 => "是", 0 => "否"), (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "tryLookable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "tryLookable", array()), 0)) : (0)));
                echo "
              <div class=\"help-block\">视频试看功能仅云视频支持</div>
            </div>
        </div>

        <div class=\"form-group ";
                // line 84
                if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "tryLookable", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "tryLookable", array()), 0)) : (0)) != 1)) {
                    echo "hide";
                }
                echo "\" id = \"tryLookTimeGroup\">
            <label class=\"col-md-2 control-label\">试看时长</label>
            <div class=\"col-md-8 controls\">
               <select name=\"tryLookTime\" class='form-control width-input width-input-large'>
                ";
                // line 88
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 10));
                foreach ($context['_seq'] as $context["_key"] => $context["minute"]) {
                    // line 89
                    echo "                  <option value=\"";
                    echo twig_escape_filter($this->env, $context["minute"], "html", null, true);
                    echo "\" ";
                    if (($context["minute"] == $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "tryLookTime", array()))) {
                        echo "selected";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, $context["minute"], "html", null, true);
                    echo "分钟</option>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['minute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 91
                echo "               </select>
              <div class=\"help-block\"></div>
            </div>
        </div>
        ";
            }
            // line 96
            echo "
        <div class=\"form-group\">
          <div class=\"col-md-offset-2 col-md-8 controls\">
            <button class=\"btn btn-fat btn-primary\" id=\"price-save-btn\" type=\"submit\">保存</button>
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
            echo "\">
          </div>
        </div>

      </form>
    ";
        } else {
            // line 106
            echo "      <div class=\"alert alert-danger\">抱歉，您无权设置课程价格，如有需要请联系网站管理员！</div>
    ";
        }
        // line 108
        echo "
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseManage:price.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  262 => 108,  258 => 106,  249 => 100,  243 => 96,  236 => 91,  221 => 89,  217 => 88,  208 => 84,  200 => 79,  195 => 76,  193 => 75,  190 => 74,  181 => 68,  175 => 64,  173 => 63,  170 => 62,  165 => 59,  157 => 56,  153 => 55,  149 => 54,  146 => 53,  144 => 52,  138 => 49,  133 => 46,  124 => 40,  116 => 34,  106 => 31,  102 => 30,  98 => 29,  95 => 28,  93 => 27,  87 => 25,  82 => 23,  77 => 21,  74 => 20,  72 => 19,  65 => 18,  63 => 17,  60 => 16,  57 => 15,  55 => 14,  50 => 12,  44 => 8,  41 => 7,  34 => 3,  30 => 1,  28 => 6,  26 => 5,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:CourseManage:layout.html.twig' %}*/
/* */
/* {% block title %}价格设置 - {{ parent() }}{% endblock %}*/
/* */
/* {% set side_nav = 'price' %}*/
/* {% set script_controller = 'course-manage/price' %}*/
/* {% block main %}*/
/* */
/* <div class="panel panel-default panel-col">*/
/*   <div class="panel-heading">价格设置</div>*/
/*   <div class="panel-body">*/
/*     {{ web_macro.flash_messages() }}*/
/* */
/*     {% set currency = (setting('coin.coin_enabled') and setting('coin.price_type') == 'Coin') ? 'coin' : 'default' %}*/
/*     {% set coinRate = setting('coin.cash_rate', 1) %}*/
/* */
/*     {% if canModifyPrice %}*/
/*       <form class="form-horizontal" id="price-form" method="post" action="{{path('course_manage_price',{id:course.id})}}" data-cashrate="{{setting('coin.cash_rate', 1)}}">*/
/*         {% if currency == 'coin' %}*/
/*           <div class="form-group">*/
/*             <label class="col-md-2 control-label">{{setting('coin.coin_name')}}价格</label>*/
/*             <div class="col-md-8 controls">*/
/*               <input type="text" name="coinPrice" class="form-control course-current-price" value="{{course.originCoinPrice}}">*/
/*               <div class="help-block">*/
/*                 <span class="text-muted">{{ coinRate }}{{setting('coin.coin_name')}} = １元</span>*/
/*               </div>*/
/*               {% if discount %}*/
/*                 <div class="alert alert-warning">*/
/*                   <small>当前课程正处于「{{ discount.name }}」打折活动中。*/
/*                   折扣： <strong>{{ course.discount }} 折</strong>，*/
/*                   折后价：<strong> <span class="course-discount-price" data-discount="{{ course.discount }}">{{ course.coinPrice }}</span> {{setting('coin.coin_name')}}</strong>。</small>  */
/*                 </div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/* */
/*           <div class="form-group">*/
/*             <label class="col-md-2 control-label">手机端价格</label>*/
/*             <div class="col-md-8 controls">*/
/*               <input type="text" name="price" class="form-control" value="{{course.originPrice}}">*/
/*               <div class="help-block">因手机端不支持虚拟币支付，价格仍显示为人民币价格。</div>*/
/*             </div>*/
/*           </div>*/
/* */
/*         {% else %}*/
/*           <div class="form-group">*/
/*             <label class="col-md-2 control-label">价格</label>*/
/*             <div class="col-md-8 controls">*/
/*               <input type="text" name="price" class="form-control course-current-price" value="{{course.originPrice}}">*/
/*               <div class="help-block">*/
/*               </div>*/
/*               {% if discount %}*/
/*                 <div class="alert alert-warning">*/
/*                   当前课程正处于「{{ discount.name }}」打折活动中。<br>*/
/*                   折扣： <strong>{{ course.discount }} 折</strong>，*/
/*                   折后价：<strong><span class="course-discount-price" data-discount="{{ course.discount }}">{{ course.price }}</span> 元</strong>。*/
/*                 </div>*/
/*               {% endif %}*/
/*             </div>*/
/*           </div>*/
/*         {% endif %}*/
/* */
/*         {% if is_plugin_installed('Vip') and setting('vip.enabled') %}*/
/*           <div class="form-group">*/
/*             <label class="col-md-2 control-label">会员课程设置</label>*/
/*             <div class="col-md-8 controls">*/
/*               <select name="vipLevelId" class="form-control width-input width-input-large">*/
/*                 {{ select_options(levels, course.vipLevelId, '无') }}*/
/*               </select>*/
/*               <div class="help-block">设置会员课程后，该会员及更高等级会员，可免费学习。</div>*/
/*             </div>*/
/*           </div>*/
/*         {% endif %}*/
/* */
/*         {% if setting('storage.upload_mode') == 'cloud' %}*/
/*         <div class="form-group">*/
/*             <label class="col-md-2 control-label">开启视频试看</label>*/
/*             <div class="col-md-8 controls radios">*/
/*               {{ radios('tryLookable', {1:'是', 0:'否'}, course.tryLookable|default(0)) }}*/
/*               <div class="help-block">视频试看功能仅云视频支持</div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="form-group {% if course.tryLookable|default(0) !=1 %}hide{% endif %}" id = "tryLookTimeGroup">*/
/*             <label class="col-md-2 control-label">试看时长</label>*/
/*             <div class="col-md-8 controls">*/
/*                <select name="tryLookTime" class='form-control width-input width-input-large'>*/
/*                 {% for minute in 1..10 %}*/
/*                   <option value="{{ minute }}" {% if minute == course.tryLookTime %}selected{% endif %}>{{minute}}分钟</option>*/
/*                 {% endfor %}*/
/*                </select>*/
/*               <div class="help-block"></div>*/
/*             </div>*/
/*         </div>*/
/*         {% endif %}*/
/* */
/*         <div class="form-group">*/
/*           <div class="col-md-offset-2 col-md-8 controls">*/
/*             <button class="btn btn-fat btn-primary" id="price-save-btn" type="submit">保存</button>*/
/*             <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*           </div>*/
/*         </div>*/
/* */
/*       </form>*/
/*     {% else %}*/
/*       <div class="alert alert-danger">抱歉，您无权设置课程价格，如有需要请联系网站管理员！</div>*/
/*     {% endif %}*/
/* */
/*   </div>*/
/* </div>*/
/* {% endblock %}*/
