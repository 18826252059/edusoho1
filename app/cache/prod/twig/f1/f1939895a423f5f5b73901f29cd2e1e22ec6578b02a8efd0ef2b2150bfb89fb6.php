<?php

/* TopxiaAdminBundle:Block:block-visual-history.html.twig */
class __TwigTemplate_501c196a5757f9725c7c4a8a27de4429fdb40bb9f74e4a60afc2298b217a0bf6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Block:block-visual-history.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
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
        $context["menu"] = "admin_block_visual_edit_history";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_page_title($context, array $blocks = array())
    {
        echo " 编辑内容 ";
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "
  ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "
  <table id=\"block-history-table\" class=\"visual-block-history-table table table-striped table-condensed\">
    <thead>
      <th>修改时间</th>
      <th>修改用户</th>
      <th>操作</th>
    </thead>
    <tbody>
      ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blockHistorys"]) ? $context["blockHistorys"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["blockHistory"]) {
            // line 17
            echo "        <tr id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["blockHistory"], "id", array()), "html", null, true);
            echo "\">
          <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["blockHistory"], "createdTime", array()), "Y-n-d H:i:s"), "html", null, true);
            echo "</td>
          <td>";
            // line 19
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["historyUsers"]) ? $context["historyUsers"] : null), $this->getAttribute($context["blockHistory"], "userId", array()), array(), "array", false, true), "nickname", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["historyUsers"]) ? $context["historyUsers"] : null), $this->getAttribute($context["blockHistory"], "userId", array()), array(), "array", false, true), "nickname", array()), "用户已删除")) : ("用户已删除")), "html", null, true);
            echo "</td>
          <td>
            <a class=\"btn btn-xs btn-default edit-btn\" 
            href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_blockhistory_preview", array("id" => $this->getAttribute($context["blockHistory"], "id", array()))), "html", null, true);
            echo "\" target=\"_blank\"> 预览 </a>
            
            ";
            // line 24
            if ($this->getAttribute($context["blockHistory"], "data", array())) {
                // line 25
                echo "              <a class=\"btn btn-xs btn-default edit-btn\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_block_recovery", array("blockId" => $this->getAttribute((isset($context["block"]) ? $context["block"] : null), "id", array()), "historyId" => $this->getAttribute($context["blockHistory"], "id", array()))), "html", null, true);
                echo "\">恢复此内容</a>
            ";
            }
            // line 27
            echo "          </td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blockHistory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </tbody>
    </table>
  ";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Block:block-visual-history.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 32,  95 => 30,  87 => 27,  81 => 25,  79 => 24,  74 => 22,  68 => 19,  64 => 18,  59 => 17,  55 => 16,  44 => 8,  41 => 7,  38 => 6,  32 => 4,  28 => 1,  26 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set menu = 'admin_block_visual_edit_history' %}*/
/* {% block page_title %} 编辑内容 {% endblock %}*/
/* */
/* {% block main %}*/
/* */
/*   {{ web_macro.flash_messages() }}*/
/*   <table id="block-history-table" class="visual-block-history-table table table-striped table-condensed">*/
/*     <thead>*/
/*       <th>修改时间</th>*/
/*       <th>修改用户</th>*/
/*       <th>操作</th>*/
/*     </thead>*/
/*     <tbody>*/
/*       {% for blockHistory in blockHistorys %}*/
/*         <tr id="{{ blockHistory.id }}">*/
/*           <td>{{ blockHistory.createdTime |date('Y-n-d H:i:s') }}</td>*/
/*           <td>{{ historyUsers[blockHistory.userId].nickname|default('用户已删除') }}</td>*/
/*           <td>*/
/*             <a class="btn btn-xs btn-default edit-btn" */
/*             href="{{ path('admin_blockhistory_preview', {id:blockHistory.id}) }}" target="_blank"> 预览 </a>*/
/*             */
/*             {% if blockHistory.data %}*/
/*               <a class="btn btn-xs btn-default edit-btn" href="{{ path('admin_block_recovery', {blockId:block.id, historyId:blockHistory.id})}}">恢复此内容</a>*/
/*             {% endif %}*/
/*           </td>*/
/*         </tr>*/
/*       {% endfor %}*/
/*     </tbody>*/
/*     </table>*/
/*   {{ web_macro.paginator(paginator) }} */
/* {% endblock %}*/
/* */
