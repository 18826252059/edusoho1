<?php

/* TopxiaAdminBundle:User:approval-header.html.twig */
class __TwigTemplate_d84768f8162059ddbd30cbb9fb776846807bc9267965037db8b85084469936f9 extends Twig_Template
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
        echo "<div class=\"page-header\"><h1>实名认证</h1>
</div>
<ul class=\"nav nav-tabs\">
  <li ";
        // line 4
        if (((isset($context["submenu"]) ? $context["submenu"] : null) == "approving")) {
            echo " class=\"active\" ";
        }
        echo " >
    <a  href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("admin_approval_approving");
        echo "\">审核中</a>
  </li>
  <li ";
        // line 7
        if (((isset($context["submenu"]) ? $context["submenu"] : null) == "approved")) {
            echo " class=\"active\" ";
        }
        echo " >
    <a  href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("admin_approval_approved");
        echo "\">审核成功</a>
  </li>
</ul>
<br>

<form id=\"user-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate>  
  <div class=\"form-group\">
    <select id=\"keywordType\" class=\"form-control\" name=\"keywordType\">
          ";
        // line 16
        $context["options"] = array("" => "--关键词类型--", "nickname" => "用户名", "email" => "邮件地址");
        // line 17
        echo "          ";
        echo $this->env->getExtension('topxia_html_twig')->selectOptions((isset($context["options"]) ? $context["options"] : null), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "keywordType"), "method"));
        echo "
    </select>

  </div>

  <div class=\"form-group\">
    <input type=\"text\" id=\"keyword\" name=\"keyword\" class=\"form-control\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "query", array()), "get", array(0 => "keyword"), "method"), "html", null, true);
        echo "\" placeholder=\"关键词\">
  </div>

  <button class=\"btn btn-primary\">搜索</button>

</form>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:User:approval-header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 23,  54 => 17,  52 => 16,  41 => 8,  35 => 7,  30 => 5,  24 => 4,  19 => 1,);
    }
}
/* <div class="page-header"><h1>实名认证</h1>*/
/* </div>*/
/* <ul class="nav nav-tabs">*/
/*   <li {% if submenu == 'approving' %} class="active" {% endif %} >*/
/*     <a  href="{{ path('admin_approval_approving') }}">审核中</a>*/
/*   </li>*/
/*   <li {% if submenu == 'approved' %} class="active" {% endif %} >*/
/*     <a  href="{{ path('admin_approval_approved') }}">审核成功</a>*/
/*   </li>*/
/* </ul>*/
/* <br>*/
/* */
/* <form id="user-search-form" class="form-inline well well-sm" action="" method="get" novalidate>  */
/*   <div class="form-group">*/
/*     <select id="keywordType" class="form-control" name="keywordType">*/
/*           {% set options = {'':'--关键词类型--','nickname':'用户名','email':'邮件地址'} %}*/
/*           {{ select_options(options, app.request.get('keywordType')) }}*/
/*     </select>*/
/* */
/*   </div>*/
/* */
/*   <div class="form-group">*/
/*     <input type="text" id="keyword" name="keyword" class="form-control" value="{{ app.request.query.get('keyword') }}" placeholder="关键词">*/
/*   </div>*/
/* */
/*   <button class="btn btn-primary">搜索</button>*/
/* */
/* </form>*/
