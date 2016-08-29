<?php

/* TopxiaAdminBundle:Block:index.html.twig */
class __TwigTemplate_7ecd86791ab435ce585dca419bbb10e2f61825979e7cdfe1ad747eeb8bd6137d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Block:index.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["menu"] = "admin_operation_block";
        // line 5
        $context["script_controller"] = "block/list";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo " ";
        $this->loadTemplate("TopxiaAdminBundle:Block:table.html.twig", "TopxiaAdminBundle:Block:index.html.twig", 7)->display($context);
        // line 8
        echo "<table id=\"block-table\" class=\"table table-striped\">
  <thead>
    <tr>
      <th width=\"50%\">标题</th>
      <th width=\"25%\">最近更新</th>
      <th width=\"25%\">操作</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 17
        if ((isset($context["blocks"]) ? $context["blocks"] : null)) {
            // line 18
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["blocks"]) ? $context["blocks"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 19
                echo "        ";
                $context["latestHistory"] = (($this->getAttribute((isset($context["latestHistories"]) ? $context["latestHistories"] : null), $this->getAttribute($context["block"], "id", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["latestHistories"]) ? $context["latestHistories"] : null), $this->getAttribute($context["block"], "id", array()), array(), "array"), null)) : (null));
                // line 20
                echo "        ";
                $context["latestUpdateUser"] = (($this->getAttribute((isset($context["users"]) ? $context["users"] : null), (($this->getAttribute((isset($context["latestHistory"]) ? $context["latestHistory"] : null), "userId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["latestHistory"]) ? $context["latestHistory"] : null), "userId", array()), null)) : (null)), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["users"]) ? $context["users"] : null), (($this->getAttribute((isset($context["latestHistory"]) ? $context["latestHistory"] : null), "userId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["latestHistory"]) ? $context["latestHistory"] : null), "userId", array()), null)) : (null)), array(), "array"), null)) : (null));
                // line 21
                echo "        ";
                $this->loadTemplate("TopxiaAdminBundle:Block:list-tr.html.twig", "TopxiaAdminBundle:Block:index.html.twig", 21)->display($context);
                // line 22
                echo "        
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "  ";
        } else {
            // line 25
            echo "        <tr><td colspan=\"20\"><div class=\"empty\">暂无编辑区记录</div></td></tr>
  ";
        }
        // line 27
        echo "   </tbody>
</table>
 ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo " 
 <style>
.form-control.quicksearch{
  display:inline;
  float:right;
  width:auto;
  padding:4px 12px;
}
<style>

.price{

  color: #e57259;
  font-size: 16px;

}

.ui-autocomplete {
    border:1px solid #ccc;
    background-color: #FFFFFF;
    box-shadow: 2px 2px 3px #EEEEEE;
}
.ui-autocomplete-ctn{
    margin:0;
    padding:0;
}
.ui-autocomplete-item {
    width: 180px;
    overflow:hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
    line-height: 30px;
    padding:0 10px 0 10px;
    cursor: default;
}
.ui-autocomplete-item-hover {
    background:#f2f2f2;
}
.ui-autocomplete-item-hl {
    background:#F6FF94;
}
</style>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Block:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 29,  101 => 27,  97 => 25,  94 => 24,  79 => 22,  76 => 21,  73 => 20,  70 => 19,  52 => 18,  50 => 17,  39 => 8,  36 => 7,  33 => 6,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set menu = 'admin_operation_block' %}*/
/* */
/* {% set script_controller = 'block/list' %}*/
/* {% block main %}*/
/*  {% include 'TopxiaAdminBundle:Block:table.html.twig'%}*/
/* <table id="block-table" class="table table-striped">*/
/*   <thead>*/
/*     <tr>*/
/*       <th width="50%">标题</th>*/
/*       <th width="25%">最近更新</th>*/
/*       <th width="25%">操作</th>*/
/*     </tr>*/
/*   </thead>*/
/*   <tbody>*/
/*     {% if blocks %}*/
/*       {% for block in blocks %}*/
/*         {% set latestHistory = latestHistories[block.id]|default(null) %}*/
/*         {% set latestUpdateUser = users[latestHistory.userId|default(null)]|default(null) %}*/
/*         {% include 'TopxiaAdminBundle:Block:list-tr.html.twig' %}*/
/*         */
/*       {% endfor %}*/
/*   {% else %}*/
/*         <tr><td colspan="20"><div class="empty">暂无编辑区记录</div></td></tr>*/
/*   {% endif %}*/
/*    </tbody>*/
/* </table>*/
/*  {{ web_macro.paginator(paginator) }} */
/*  <style>*/
/* .form-control.quicksearch{*/
/*   display:inline;*/
/*   float:right;*/
/*   width:auto;*/
/*   padding:4px 12px;*/
/* }*/
/* <style>*/
/* */
/* .price{*/
/* */
/*   color: #e57259;*/
/*   font-size: 16px;*/
/* */
/* }*/
/* */
/* .ui-autocomplete {*/
/*     border:1px solid #ccc;*/
/*     background-color: #FFFFFF;*/
/*     box-shadow: 2px 2px 3px #EEEEEE;*/
/* }*/
/* .ui-autocomplete-ctn{*/
/*     margin:0;*/
/*     padding:0;*/
/* }*/
/* .ui-autocomplete-item {*/
/*     width: 180px;*/
/*     overflow:hidden;*/
/*     text-overflow: ellipsis;*/
/*     white-space: nowrap;*/
/*     line-height: 30px;*/
/*     padding:0 10px 0 10px;*/
/*     cursor: default;*/
/* }*/
/* .ui-autocomplete-item-hover {*/
/*     background:#f2f2f2;*/
/* }*/
/* .ui-autocomplete-item-hl {*/
/*     background:#F6FF94;*/
/* }*/
/* </style>*/
/* {% endblock %}*/
/* */
