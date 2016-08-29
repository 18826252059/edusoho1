<?php

/* TopxiaWebBundle:Settings:approval.html.twig */
class __TwigTemplate_6f63f42683aad77cbd26394e734ccda80e425ab398938b9df54375c09f1fd9dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Settings:layout.html.twig", "TopxiaWebBundle:Settings:approval.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Settings:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["side_nav"] = "profile";
        // line 5
        $context["script_controller"] = "settings/approval";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "实名认证 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
";
        // line 9
        $this->loadTemplate("TopxiaWebBundle:Settings:approval.html.twig", "TopxiaWebBundle:Settings:approval.html.twig", 9, "964586579")->display(array_merge($context, array("class" => "panel-col")));
        // line 84
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Settings:approval.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 84,  47 => 9,  44 => 8,  41 => 7,  34 => 3,  30 => 1,  28 => 5,  26 => 4,  11 => 1,);
    }
}


/* TopxiaWebBundle:Settings:approval.html.twig */
class __TwigTemplate_6f63f42683aad77cbd26394e734ccda80e425ab398938b9df54375c09f1fd9dc_964586579 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Bootstrap:panel.html.twig", "TopxiaWebBundle:Settings:approval.html.twig", 9);
        $this->blocks = array(
            'heading' => array($this, 'block_heading'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Bootstrap:panel.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 11
    public function block_heading($context, array $blocks = array())
    {
        echo "  实名认证
    \t";
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        // line 15
        echo "
    \t";
        // line 16
        if (twig_in_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "approvalStatus", array()), array(0 => "approved", 1 => "unapprove", 2 => "approve_fail"))) {
            // line 17
            echo "\t    \t<form id=\"approval-form\" class=\"form-horizontal\" method=\"post\" enctype=\"multipart/form-data\">

\t        \t";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
            echo "
\t        \t\t
\t\t\t\t    <div class=\"form-group\">
\t\t\t\t      <div class=\"col-md-2 control-label\"> 
\t\t\t\t        <label for=\"truename\">真实姓名</label> 
\t\t\t\t      </div>
\t\t\t\t      <div class=\"col-md-8 controls\">
\t\t\t\t       <input type=\"text\" id=\"truename\" name=\"truename\" class=\"form-control\" value=\"\">
\t\t\t\t      </div>
\t\t\t\t    </div>

\t\t\t\t    <div class=\"form-group\">
\t\t\t\t      <div class=\"col-md-2 control-label\"> 
\t\t\t\t        <label for=\"idcard\">身份证号</label> 
\t\t\t\t      </div>
\t\t\t\t      <div class=\"col-md-8 controls\">
\t\t\t\t       <input type=\"text\" id=\"idcard\" name=\"idcard\" class=\"form-control\" value=\"\">
\t\t\t\t      </div>
\t\t\t\t    </div>


\t\t\t\t\t<div class=\"form-group\">

\t\t\t\t      <div class=\"col-md-2 control-label\">
\t\t\t\t      <label>照片要求</label>
\t\t\t\t      </div>
\t\t\t\t      <div class=\"controls col-md-8 controls\">
\t\t\t\t        <p class=\"text-warning\">证件必须是清晰彩色原件电子版，可以是扫描或者数码相机拍摄照片。<br />图片格式支持jpg、gif、png，每张图片文件大小不能超过2M。</p>
\t\t\t\t      </div>
\t\t\t\t    </div>

\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t      <div class=\"col-md-2 control-label\">
\t\t\t\t      <label for=\"faceImg\">身份证正面照</label>
\t\t\t\t      </div>
\t\t\t\t      <div class=\"controls col-md-8 controls\">
\t\t\t\t        <input type=\"file\" id=\"faceImg\" name=\"faceImg\" accept=\"image/bmp,image/jpeg,image/png\">
\t\t\t\t      </div>
\t\t\t\t    </div>

\t\t\t\t    <div class=\"form-group\">
\t\t\t\t      <div class=\"col-md-2 control-label\">
\t\t\t\t      <label for=\"backImg\">身份证反面照</label>
\t\t\t\t      </div>
\t\t\t\t      <div class=\"controls col-md-8 controls\">
\t\t\t\t        <input type=\"file\" id=\"backImg\" name=\"backImg\" accept=\"image/bmp,image/jpeg,image/png\">
\t\t\t\t      </div>
\t\t\t\t    </div>

\t        <div class=\"row\">
\t            <div class=\"col-md-7 col-md-offset-2\">
\t             <button type=\"submit\" class=\"btn btn-primary\">提交</button>
\t\t    \t <a class=\"btn btn-link\" href=\"";
            // line 71
            echo $this->env->getExtension('routing')->getPath("settings");
            echo "\">返回</a>
\t            </div>
\t        </div>

\t           <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
            echo "\">
\t        </form>
        
        ";
        }
        // line 79
        echo "
\t    ";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Settings:approval.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 79,  177 => 75,  170 => 71,  115 => 19,  111 => 17,  109 => 16,  106 => 15,  103 => 14,  96 => 11,  78 => 9,  49 => 84,  47 => 9,  44 => 8,  41 => 7,  34 => 3,  30 => 1,  28 => 5,  26 => 4,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:Settings:layout.html.twig' %}*/
/* */
/* {% block title %}实名认证 - {{ parent() }}{% endblock %}*/
/* {% set side_nav = 'profile' %}*/
/* {% set script_controller = 'settings/approval' %}*/
/* */
/* {% block main %}*/
/* */
/* {% embed "TopxiaWebBundle:Bootstrap:panel.html.twig" with {class:'panel-col'} %}*/
/*     	*/
/*     	{% block heading %}  实名认证*/
/*     	{% endblock %}*/
/* */
/*     	{% block body %}*/
/* */
/*     	{% if app.user.approvalStatus in ['approved', 'unapprove', 'approve_fail'] %}*/
/* 	    	<form id="approval-form" class="form-horizontal" method="post" enctype="multipart/form-data">*/
/* */
/* 	        	{{ web_macro.flash_messages() }}*/
/* 	        		*/
/* 				    <div class="form-group">*/
/* 				      <div class="col-md-2 control-label"> */
/* 				        <label for="truename">真实姓名</label> */
/* 				      </div>*/
/* 				      <div class="col-md-8 controls">*/
/* 				       <input type="text" id="truename" name="truename" class="form-control" value="">*/
/* 				      </div>*/
/* 				    </div>*/
/* */
/* 				    <div class="form-group">*/
/* 				      <div class="col-md-2 control-label"> */
/* 				        <label for="idcard">身份证号</label> */
/* 				      </div>*/
/* 				      <div class="col-md-8 controls">*/
/* 				       <input type="text" id="idcard" name="idcard" class="form-control" value="">*/
/* 				      </div>*/
/* 				    </div>*/
/* */
/* */
/* 					<div class="form-group">*/
/* */
/* 				      <div class="col-md-2 control-label">*/
/* 				      <label>照片要求</label>*/
/* 				      </div>*/
/* 				      <div class="controls col-md-8 controls">*/
/* 				        <p class="text-warning">证件必须是清晰彩色原件电子版，可以是扫描或者数码相机拍摄照片。<br />图片格式支持jpg、gif、png，每张图片文件大小不能超过2M。</p>*/
/* 				      </div>*/
/* 				    </div>*/
/* */
/* 					<div class="form-group">*/
/* 				      <div class="col-md-2 control-label">*/
/* 				      <label for="faceImg">身份证正面照</label>*/
/* 				      </div>*/
/* 				      <div class="controls col-md-8 controls">*/
/* 				        <input type="file" id="faceImg" name="faceImg" accept="image/bmp,image/jpeg,image/png">*/
/* 				      </div>*/
/* 				    </div>*/
/* */
/* 				    <div class="form-group">*/
/* 				      <div class="col-md-2 control-label">*/
/* 				      <label for="backImg">身份证反面照</label>*/
/* 				      </div>*/
/* 				      <div class="controls col-md-8 controls">*/
/* 				        <input type="file" id="backImg" name="backImg" accept="image/bmp,image/jpeg,image/png">*/
/* 				      </div>*/
/* 				    </div>*/
/* */
/* 	        <div class="row">*/
/* 	            <div class="col-md-7 col-md-offset-2">*/
/* 	             <button type="submit" class="btn btn-primary">提交</button>*/
/* 		    	 <a class="btn btn-link" href="{{ path('settings') }}">返回</a>*/
/* 	            </div>*/
/* 	        </div>*/
/* */
/* 	           <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/* 	        </form>*/
/*         */
/*         {% endif %}*/
/* */
/* 	    {% endblock %}*/
/* */
/* */
/* {% endembed %}*/
/* */
/* {% endblock %}*/
