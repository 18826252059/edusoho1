<?php

/* TopxiaWebBundle:Settings:nickname.html.twig */
class __TwigTemplate_61f8bafdd47ad6ee98e0a67cb36ea3d1e618d297ea59eddf0cc38e3c6646b09c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Settings:layout.html.twig", "TopxiaWebBundle:Settings:nickname.html.twig", 1);
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
        $context["script_controller"] = "settings/nickname";
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
        $this->loadTemplate("TopxiaWebBundle:Settings:nickname.html.twig", "TopxiaWebBundle:Settings:nickname.html.twig", 9, "92323647")->display(array_merge($context, array("class" => "panel-col")));
        // line 41
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Settings:nickname.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 41,  47 => 9,  44 => 8,  41 => 7,  34 => 3,  30 => 1,  28 => 5,  26 => 4,  11 => 1,);
    }
}


/* TopxiaWebBundle:Settings:nickname.html.twig */
class __TwigTemplate_61f8bafdd47ad6ee98e0a67cb36ea3d1e618d297ea59eddf0cc38e3c6646b09c_92323647 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 9
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Bootstrap:panel.html.twig", "TopxiaWebBundle:Settings:nickname.html.twig", 9);
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

    // line 10
    public function block_heading($context, array $blocks = array())
    {
        echo "用户名修改";
    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        // line 12
        echo "
\t    \t<form id=\"nickname-form\" class=\"form-horizontal\" method=\"post\" enctype=\"multipart/form-data\">

\t        ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "
\t        \t\t
\t\t    <div class=\"form-group\">
\t\t      <div class=\"col-md-2 control-label\"> 
\t\t        <label for=\"nickname\">用户名</label> 
\t\t      </div>
\t\t      <div class=\"col-md-8 controls\">
\t\t       <input data-url=";
        // line 22
        echo $this->env->getExtension('routing')->getPath("update_nickname_check");
        echo " type=\"text\" id=\"nickname\" name=\"nickname\" class=\"form-control\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "nickname", array()), "html", null, true);
        echo "\">
\t\t      </div>
\t\t    </div>

\t        <div class=\"row\">
\t            <div class=\"col-md-7 col-md-offset-2\">
\t             <button type=\"submit\" class=\"btn btn-primary\">提交</button>
\t\t    \t <a class=\"btn btn-link\" href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("settings");
        echo "\">返回</a>
\t            </div>
\t        </div>

\t           <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
\t        </form>
        

\t    ";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Settings:nickname.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 33,  132 => 29,  120 => 22,  110 => 15,  105 => 12,  102 => 11,  96 => 10,  78 => 9,  49 => 41,  47 => 9,  44 => 8,  41 => 7,  34 => 3,  30 => 1,  28 => 5,  26 => 4,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:Settings:layout.html.twig' %}*/
/* */
/* {% block title %}实名认证 - {{ parent() }}{% endblock %}*/
/* {% set side_nav = 'profile' %}*/
/* {% set script_controller = 'settings/nickname' %}*/
/* */
/* {% block main %}*/
/* */
/* {% embed "TopxiaWebBundle:Bootstrap:panel.html.twig" with {class:'panel-col'} %}*/
/* 		{% block heading %}用户名修改{% endblock %}*/
/*     	{% block body %}*/
/* */
/* 	    	<form id="nickname-form" class="form-horizontal" method="post" enctype="multipart/form-data">*/
/* */
/* 	        {{ web_macro.flash_messages() }}*/
/* 	        		*/
/* 		    <div class="form-group">*/
/* 		      <div class="col-md-2 control-label"> */
/* 		        <label for="nickname">用户名</label> */
/* 		      </div>*/
/* 		      <div class="col-md-8 controls">*/
/* 		       <input data-url={{path ('update_nickname_check') }} type="text" id="nickname" name="nickname" class="form-control" value="{{app.user.nickname}}">*/
/* 		      </div>*/
/* 		    </div>*/
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
/* */
/* 	    {% endblock %}*/
/* */
/* */
/* {% endembed %}*/
/* */
/* {% endblock %}*/
