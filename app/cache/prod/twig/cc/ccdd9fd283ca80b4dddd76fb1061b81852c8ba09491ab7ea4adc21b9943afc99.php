<?php

/* TopxiaAdminBundle:User:user-approve-info-modal.html.twig */
class __TwigTemplate_337f93d7e18a792b4a2299602df049ea72c151bc4383a7ba0e59ab80cd094f2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaAdminBundle:User:user-approve-info-modal.html.twig", 1);
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
        echo "    用户认证查看
";
    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        // line 10
        echo "  <div class=\"form-horizontal\">
  ";
        // line 11
        $this->loadTemplate("TopxiaAdminBundle:User:user-approval-form-content.html.twig", "TopxiaAdminBundle:User:user-approve-info-modal.html.twig", 11)->display($context);
        // line 12
        echo "  </div>
";
    }

    // line 15
    public function block_footer($context, array $blocks = array())
    {
        // line 16
        echo "  <div class=\"pull-right\">
    <button type=\"button\" class=\"btn btn-primary \" data-dismiss=\"modal\">关闭</button>    
  </div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:User:user-approve-info-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 16,  54 => 15,  49 => 12,  47 => 11,  44 => 10,  41 => 9,  36 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% set modalSize = 'large' %}*/
/* */
/* {% block title %}*/
/*     用户认证查看*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*   <div class="form-horizontal">*/
/*   {% include 'TopxiaAdminBundle:User:user-approval-form-content.html.twig' %}*/
/*   </div>*/
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/*   <div class="pull-right">*/
/*     <button type="button" class="btn btn-primary " data-dismiss="modal">关闭</button>    */
/*   </div>*/
/* {% endblock %}*/
