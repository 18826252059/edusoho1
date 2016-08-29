<?php

/* TopxiaAdminBundle:Invite:invite-modal.html.twig */
class __TwigTemplate_273714f5c0bc6d05ebad5f7dd46905b30a6ae48973d51425472cee9b559cc2a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaAdminBundle:Invite:invite-modal.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "详情";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "
  <table class=\"table table-hover table-striped\" >
  <thead>
  \t<tr>
  \t<th>用户</th>
  \t<th>消费订单总额</th>
    <th>订单虚拟币总额</th>
    <th>订单现金总额</th>
  \t</tr>
  </thead>
  <tbody>
  \t";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["details"]) ? $context["details"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["detail"]) {
            // line 19
            echo "\t\t  <tr>
  \t\t<td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["detail"], "nickname", array()), "html", null, true);
            echo "</td>
  \t\t<td>";
            // line 21
            echo twig_escape_filter($this->env, (($this->getAttribute($context["detail"], "totalPrice", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["detail"], "totalPrice", array()), "0")) : ("0")), "html", null, true);
            echo "</td>
      <td>";
            // line 22
            echo twig_escape_filter($this->env, (($this->getAttribute($context["detail"], "coinAmountTotalPrice", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["detail"], "coinAmountTotalPrice", array()), "0")) : ("0")), "html", null, true);
            echo "</td>
      <td>";
            // line 23
            echo twig_escape_filter($this->env, (($this->getAttribute($context["detail"], "amountTotalPrice", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["detail"], "amountTotalPrice", array()), "0")) : ("0")), "html", null, true);
            echo "</td>
  \t\t</tr>
  \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['detail'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "\t
  </tbody>
  </table>
    

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Invite:invite-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 25,  70 => 23,  66 => 22,  62 => 21,  58 => 20,  55 => 19,  51 => 18,  38 => 7,  35 => 6,  29 => 4,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* */
/* {% block title %}详情{% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*   <table class="table table-hover table-striped" >*/
/*   <thead>*/
/*   	<tr>*/
/*   	<th>用户</th>*/
/*   	<th>消费订单总额</th>*/
/*     <th>订单虚拟币总额</th>*/
/*     <th>订单现金总额</th>*/
/*   	</tr>*/
/*   </thead>*/
/*   <tbody>*/
/*   	{% for detail in details %}*/
/* 		  <tr>*/
/*   		<td>{{detail.nickname}}</td>*/
/*   		<td>{{detail.totalPrice|default('0')}}</td>*/
/*       <td>{{detail.coinAmountTotalPrice|default('0')}}</td>*/
/*       <td>{{detail.amountTotalPrice|default('0')}}</td>*/
/*   		</tr>*/
/*   	{% endfor %}	*/
/*   </tbody>*/
/*   </table>*/
/*     */
/* */
/* {% endblock %}*/
