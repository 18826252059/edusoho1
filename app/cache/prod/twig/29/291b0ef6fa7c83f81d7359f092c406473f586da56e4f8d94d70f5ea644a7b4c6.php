<?php

/* ClassroomBundle:ClassroomManage:create-modal.html.twig */
class __TwigTemplate_7ba278eecc2b0aea6a554b0bfe82c20a4343209324097f51e584f0286766ba34 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "ClassroomBundle:ClassroomManage:create-modal.html.twig", 1);
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
        echo "添加学员";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "
<form id=\"student-create-form\" class=\"form-horizontal\" method=\"post\" action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_student_create", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
        echo "\">
  ";
        // line 9
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "status", array()) == "published")) {
            // line 10
            echo "  \t<div class=\"row form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"student-nickname\">学员</label>
      </div>
      <div class=\"col-md-7 controls\">
        <input type=\"text\" id=\"student-nickname\" name=\"queryfield\" class=\"form-control\" 
        data-url=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_manage_student_check", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
            echo "\" placeholder='邮箱/手机/用户名' >
      \t<div class=\"help-block\">只能添加系统中已注册的用户</div>
    \t</div>
    </div>

    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"buy-price\">购买价格</label>
      </div>
      <div class=\"col-md-7 controls\">
        <input type=\"text\" id=\"buy-price\" name=\"price\" value=\"0\" class=\"form-control\">
        <div class=\"help-block\">
          本课程的价格为                         
                         ";
            // line 29
            if (($this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_enabled") && ($this->env->getExtension('topxia_web_twig')->getSetting("coin.price_type") == "Coin"))) {
                // line 30
                echo "                             ";
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "price", array()) * $this->env->getExtension('topxia_web_twig')->getSetting("coin.cash_rate")), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
                echo "
                          ";
            } else {
                // line 32
                echo "                              ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "price", array()), "html", null, true);
                echo "元
                          ";
            }
            // line 34
            echo "        </div>
      </div>
    </div>

    <div class=\"row form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"student-remark\">备注</label>
      </div>
      <div class=\"col-md-7 controls\">
        <input type=\"text\" id=\"student-remark\" name=\"remark\" class=\"form-control\">
        <div class=\"help-block\">选填</div>
      </div>
    </div>
  ";
        } else {
            // line 48
            echo "    <div class=\"empty\">";
            echo $this->env->getExtension('topxia_web_twig')->getDictText("classroomStatus", $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "status", array()));
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "不能添加学员，请";
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "发布后再添加。</div>
  ";
        }
        // line 50
        echo "
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

</form>

";
    }

    // line 57
    public function block_footer($context, array $blocks = array())
    {
        // line 58
        echo "  ";
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "status", array()) == "published")) {
            // line 59
            echo "    <button id=\"student-create-form-submit\" type=\"submit\" class=\"btn btn-primary pull-right\" data-toggle=\"form-submit\" data-target=\"#student-create-form\" data-submiting-text=\"正在保存...\" data-user=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["default"]) ? $context["default"] : null), "user_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["default"]) ? $context["default"] : null), "user_name", array()), "学员")) : ("学员")), "html", null, true);
            echo "\">保存</button>
  ";
        }
        // line 61
        echo "  <button type=\"button\" class=\"btn btn-link pull-right\" data-dismiss=\"modal\">取消</button>
  <script>app.load('classroombundle/controller/classroom/student-create')</script>
";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomManage:create-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 61,  134 => 59,  131 => 58,  128 => 57,  119 => 51,  116 => 50,  107 => 48,  91 => 34,  85 => 32,  77 => 30,  75 => 29,  59 => 16,  51 => 10,  49 => 9,  45 => 8,  42 => 7,  39 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% set modalSize = 'large' %}*/
/* */
/* {% block title %}添加学员{% endblock %}*/
/* {% block body %}*/
/* */
/* <form id="student-create-form" class="form-horizontal" method="post" action="{{ path('classroom_manage_student_create', {id:classroom.id}) }}">*/
/*   {% if classroom.status == 'published' %}*/
/*   	<div class="row form-group">*/
/*       <div class="col-md-2 control-label">*/
/*         <label for="student-nickname">学员</label>*/
/*       </div>*/
/*       <div class="col-md-7 controls">*/
/*         <input type="text" id="student-nickname" name="queryfield" class="form-control" */
/*         data-url="{{ path('classroom_manage_student_check',{id:classroom.id})}}" placeholder='邮箱/手机/用户名' >*/
/*       	<div class="help-block">只能添加系统中已注册的用户</div>*/
/*     	</div>*/
/*     </div>*/
/* */
/*     <div class="row form-group">*/
/*       <div class="col-md-2 control-label">*/
/*         <label for="buy-price">购买价格</label>*/
/*       </div>*/
/*       <div class="col-md-7 controls">*/
/*         <input type="text" id="buy-price" name="price" value="0" class="form-control">*/
/*         <div class="help-block">*/
/*           本课程的价格为                         */
/*                          {% if setting('coin.coin_enabled') and setting('coin.price_type') == 'Coin' %}*/
/*                              {{classroom.price * setting('coin.cash_rate') }} {{setting('coin.coin_name')}}*/
/*                           {% else %}*/
/*                               {{ classroom.price }}元*/
/*                           {% endif %}*/
/*         </div>*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div class="row form-group">*/
/*       <div class="col-md-2 control-label">*/
/*         <label for="student-remark">备注</label>*/
/*       </div>*/
/*       <div class="col-md-7 controls">*/
/*         <input type="text" id="student-remark" name="remark" class="form-control">*/
/*         <div class="help-block">选填</div>*/
/*       </div>*/
/*     </div>*/
/*   {% else %}*/
/*     <div class="empty">{{dict_text('classroomStatus', classroom.status)}}{{setting("classroom.name")|default("班级")}}不能添加学员，请{{setting("classroom.name")|default("班级")}}发布后再添加。</div>*/
/*   {% endif %}*/
/* */
/*   <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/* */
/* </form>*/
/* */
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/*   {% if classroom.status == 'published' %}*/
/*     <button id="student-create-form-submit" type="submit" class="btn btn-primary pull-right" data-toggle="form-submit" data-target="#student-create-form" data-submiting-text="正在保存..." data-user="{{default.user_name|default('学员')}}">保存</button>*/
/*   {% endif %}*/
/*   <button type="button" class="btn btn-link pull-right" data-dismiss="modal">取消</button>*/
/*   <script>app.load('classroombundle/controller/classroom/student-create')</script>*/
/* {% endblock %}*/
/* */
