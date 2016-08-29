<?php

/* TopxiaAdminBundle:LoginRecord:login-record-details.html.twig */
class __TwigTemplate_9498c05a32cc548739b5858e0f9541c5742234bfa99e398805cd2b874f1fb0ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaAdminBundle:LoginRecord:login-record-details.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["modal_class"] = "modal-lg";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nickname", array()), "html", null, true);
        echo "登录日志";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
<div id=\"login-record-details\">

  <table class=\"table table-bordered\" id=\"\">
    <thead>
      <tr>
        <th>登录时间</th>
        <th>登录IP</th>
        <th>登录地点</th>
      </tr>
    </thead>
    <tbody>
      ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["loginRecords"]) ? $context["loginRecords"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["loginRecord"]) {
            // line 19
            echo "        <tr>
          <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["loginRecord"], "createdTime", array()), "Y-n-d H:i:s"), "html", null, true);
            echo "</td>
          <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["loginRecord"], "ip", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["loginRecord"], "location", array()), "html", null, true);
            echo "</td>
        </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['loginRecord'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    </tbody>
  </table>
  ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["loginRecordPaginator"]) ? $context["loginRecordPaginator"] : null)), "method"), "html", null, true);
        echo "
</div>

";
    }

    // line 34
    public function block_footer($context, array $blocks = array())
    {
        // line 35
        echo "  <button type=\"button\" class=\"btn btn-primary\" data-dismiss=\"modal\">关闭</button>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:LoginRecord:login-record-details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 35,  93 => 34,  85 => 27,  81 => 25,  72 => 22,  68 => 21,  64 => 20,  61 => 19,  57 => 18,  43 => 6,  40 => 5,  33 => 4,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% set modal_class = 'modal-lg' %}*/
/* {% block title %}{{ user.nickname }}登录日志{% endblock %}*/
/* {% block body %}*/
/* */
/* <div id="login-record-details">*/
/* */
/*   <table class="table table-bordered" id="">*/
/*     <thead>*/
/*       <tr>*/
/*         <th>登录时间</th>*/
/*         <th>登录IP</th>*/
/*         <th>登录地点</th>*/
/*       </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*       {% for loginRecord in loginRecords %}*/
/*         <tr>*/
/*           <td>{{ loginRecord.createdTime|date('Y-n-d H:i:s') }}</td>*/
/*           <td>{{ loginRecord.ip }}</td>*/
/*           <td>{{ loginRecord.location }}</td>*/
/*         </tr>*/
/*       {% endfor %}*/
/*     </tbody>*/
/*   </table>*/
/*   {{ web_macro.paginator(loginRecordPaginator) }}*/
/* </div>*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/* {% block footer %}*/
/*   <button type="button" class="btn btn-primary" data-dismiss="modal">关闭</button>*/
/* {% endblock %}*/
