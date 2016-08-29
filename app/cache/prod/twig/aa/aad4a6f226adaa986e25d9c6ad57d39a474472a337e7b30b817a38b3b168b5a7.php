<?php

/* TopxiaAdminBundle:User:user-approve-modal.html.twig */
class __TwigTemplate_2d62930b1c41109a5d8e098c04a92477f360cb39364677bbd8033524c094e449 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaAdminBundle:User:user-approve-modal.html.twig", 1);
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
        $context["modalSize"] = "large";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "    用户认证审核
";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "
<form id=\"approve-form\" class=\"form-horizontal\" method=\"post\" action=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_approval_approve", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "\">

  ";
        // line 12
        $this->loadTemplate("TopxiaAdminBundle:User:user-approval-form-content.html.twig", "TopxiaAdminBundle:User:user-approve-modal.html.twig", 12)->display($context);
        // line 13
        echo "
  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"note\">备注</label>
    </div>
    <div class=\"col-md-8\">
    <textarea id=\"note\" name=\"note\" class=\"form-control\" rows=\"3\"></textarea>
    </div>
</div>


  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
  <input id=\"form_status\" type=\"hidden\" name=\"form_status\" >
</form>
";
    }

    // line 29
    public function block_footer($context, array $blocks = array())
    {
        // line 30
        echo "<div class=\"pull-right\">

  <button type=\"button\" class=\"btn btn-link\" data-dismiss=\"modal\">取消</button>


  <button type=\"submit\" class=\"btn btn-danger user-approve-btn\" data-toggle=\"form-submit\" data-status='fail' data-target=\"#approve-form\">审核失败</button>
  <button type=\"submit\" class=\"btn btn-success user-approve-btn\" data-toggle=\"form-submit\" data-status='success' data-target=\"#approve-form\">审核成功</button>


  <script>app.load('user/approve')</script>
    
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:User:user-approve-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 30,  75 => 29,  67 => 24,  54 => 13,  52 => 12,  47 => 10,  44 => 9,  41 => 8,  36 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% set modalSize = 'large' %}*/
/* */
/* {% block title %}*/
/*     用户认证审核*/
/* {% endblock %}*/
/* {% block body %}*/
/* */
/* <form id="approve-form" class="form-horizontal" method="post" action="{{ path('admin_approval_approve', {id:user.id}) }}">*/
/* */
/*   {% include 'TopxiaAdminBundle:User:user-approval-form-content.html.twig' %}*/
/* */
/*   <div class="row form-group">*/
/*     <div class="col-md-3 control-label">*/
/*       <label for="note">备注</label>*/
/*     </div>*/
/*     <div class="col-md-8">*/
/*     <textarea id="note" name="note" class="form-control" rows="3"></textarea>*/
/*     </div>*/
/* </div>*/
/* */
/* */
/*   <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*   <input id="form_status" type="hidden" name="form_status" >*/
/* </form>*/
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/* <div class="pull-right">*/
/* */
/*   <button type="button" class="btn btn-link" data-dismiss="modal">取消</button>*/
/* */
/* */
/*   <button type="submit" class="btn btn-danger user-approve-btn" data-toggle="form-submit" data-status='fail' data-target="#approve-form">审核失败</button>*/
/*   <button type="submit" class="btn btn-success user-approve-btn" data-toggle="form-submit" data-status='success' data-target="#approve-form">审核成功</button>*/
/* */
/* */
/*   <script>app.load('user/approve')</script>*/
/*     */
/* </div>*/
/* {% endblock %}*/
