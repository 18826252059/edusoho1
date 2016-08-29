<?php

/* TopxiaAdminBundle:MoneyCard:index-batch.html.twig */
class __TwigTemplate_5011f5129e7cc3f04e51124daaf968c603ca287af9fceb0fe6d87d8475bd0c26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle:User:layout.html.twig", "TopxiaAdminBundle:MoneyCard:index-batch.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle:User:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["menu"] = "money_card";
        // line 7
        $context["script_controller"] = "money-card/batch-list";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "用户管理 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 9
    public function block_main($context, array $blocks = array())
    {
        // line 10
        echo "
<div class=\"page-header clearfix\">
  <button class=\"btn btn-info btn-sm pull-right\" id=\"add-navigation-btn\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("admin_money_card_create");
        echo "\">生成充值卡</button>
  <h1 class=\"pull-left\">充值卡管理</h1>
</div>

<ul class=\"nav nav-tabs\">
  <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("admin_money_card");
        echo "\">充值卡</a></li>
  <li class=\"active\"><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("admin_money_card_batch");
        echo "\">生成记录</a></li>
</ul>

    <table id=\"money-card-batch-table\" class=\"table table-striped table-hover\" data-search-form=\"#money-card-batch-search-form\">
      <thead>
        <tr>
          <th>生成批次</th>
          <th>金额</th>
          <th>卡号前缀</th>
          <th>卡号位数</th>
          <th>有效期</th>
          <th>生成张数</th>
          <th>已充张数</th>
          <th>未充张数</th>
          <th>生成人</th>
          <th>操作</th>
        </tr>
      </thead>
      <tbody>
      ";
        // line 37
        if ((isset($context["batchs"]) ? $context["batchs"] : null)) {
            // line 38
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["batchs"]) ? $context["batchs"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["batch"]) {
                // line 39
                echo "            ";
                $this->loadTemplate("TopxiaAdminBundle:MoneyCard:batch-table-tr.html.twig", "TopxiaAdminBundle:MoneyCard:index-batch.html.twig", 39)->display(array_merge($context, array("batch" => $context["batch"])));
                // line 40
                echo "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['batch'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "      </tbody>
    </table>
      ";
        } else {
            // line 44
            echo "      </tbody>
    </table>
    <div class='empty'>数据库君表示自己非常不给力，啥都没找到~~</div>
      ";
        }
        // line 48
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:MoneyCard:index-batch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 48,  124 => 44,  119 => 41,  105 => 40,  102 => 39,  84 => 38,  82 => 37,  60 => 18,  56 => 17,  48 => 12,  44 => 10,  41 => 9,  34 => 3,  30 => 1,  28 => 7,  26 => 5,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle:User:layout.html.twig' %}*/
/* */
/* {% block title %}用户管理 - {{ parent() }}{% endblock %}*/
/* */
/* {% set menu = 'money_card' %}*/
/* */
/* {% set script_controller = 'money-card/batch-list' %}*/
/* */
/* {% block main %}*/
/* */
/* <div class="page-header clearfix">*/
/*   <button class="btn btn-info btn-sm pull-right" id="add-navigation-btn" data-toggle="modal" data-target="#modal" data-url="{{path('admin_money_card_create')}}">生成充值卡</button>*/
/*   <h1 class="pull-left">充值卡管理</h1>*/
/* </div>*/
/* */
/* <ul class="nav nav-tabs">*/
/*   <li><a href="{{ path('admin_money_card') }}">充值卡</a></li>*/
/*   <li class="active"><a href="{{ path('admin_money_card_batch') }}">生成记录</a></li>*/
/* </ul>*/
/* */
/*     <table id="money-card-batch-table" class="table table-striped table-hover" data-search-form="#money-card-batch-search-form">*/
/*       <thead>*/
/*         <tr>*/
/*           <th>生成批次</th>*/
/*           <th>金额</th>*/
/*           <th>卡号前缀</th>*/
/*           <th>卡号位数</th>*/
/*           <th>有效期</th>*/
/*           <th>生成张数</th>*/
/*           <th>已充张数</th>*/
/*           <th>未充张数</th>*/
/*           <th>生成人</th>*/
/*           <th>操作</th>*/
/*         </tr>*/
/*       </thead>*/
/*       <tbody>*/
/*       {% if batchs %}*/
/*         {% for batch in batchs %}*/
/*             {% include 'TopxiaAdminBundle:MoneyCard:batch-table-tr.html.twig' with {batch:batch} %}*/
/*         {% endfor %}*/
/*       </tbody>*/
/*     </table>*/
/*       {% else %}*/
/*       </tbody>*/
/*     </table>*/
/*     <div class='empty'>数据库君表示自己非常不给力，啥都没找到~~</div>*/
/*       {% endif %}*/
/*     {{ web_macro.paginator(paginator) }}*/
/* */
/* {% endblock %}*/
