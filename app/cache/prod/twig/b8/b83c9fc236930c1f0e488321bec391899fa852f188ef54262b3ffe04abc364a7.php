<?php

/* TopxiaAdminBundle:User:user-approval-form-content.html.twig */
class __TwigTemplate_e7ba503c9bf697f69eb8b755e3133bca0219a5b091b0f5a95c5cd77e27770032 extends Twig_Template
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
        echo "  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"nickname\">用户名</label>
    </div>
    <div style=\"margin-top: 7px;\">
    ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nickname", array()), "html", null, true);
        echo "
    </div>
  </div>

   <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"truename\">真实姓名</label>
    </div>
    <div style=\"margin-top: 7px;\">
      ";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userApprovalInfo"]) ? $context["userApprovalInfo"] : null), "truename", array()), "html", null, true);
        echo "
    </div>
  </div>

  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"idcard\">身份证号码</label>
    </div>
    <div style=\"margin-top: 7px;\">
      ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["userApprovalInfo"]) ? $context["userApprovalInfo"] : null), "idcard", array()), "html", null, true);
        echo "
    </div>
  </div>

  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"faceImg\">身份证正面照</label>
    </div>
    <div>
     <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("show_idcard", array("userId" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "type" => "face")), "html", null, true);
        echo "\" target=\"_blank\">
     <img src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("show_idcard", array("userId" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "type" => "face")), "html", null, true);
        echo "\" width=\"400\" />
     </a>
    </div>
  </div>

    <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\">
      <label for=\"faceImg\">身份证反面照</label>
    </div>
    <div>
     <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("show_idcard", array("userId" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "type" => "back")), "html", null, true);
        echo "\" target=\"_blank\">
          <img src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("show_idcard", array("userId" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "type" => "back")), "html", null, true);
        echo "\" width=\"400\" />
      </a>
    </div>
  </div>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:User:user-approval-form-content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 45,  79 => 44,  66 => 34,  62 => 33,  50 => 24,  38 => 15,  26 => 6,  19 => 1,);
    }
}
/*   <div class="row form-group">*/
/*     <div class="col-md-3 control-label">*/
/*       <label for="nickname">用户名</label>*/
/*     </div>*/
/*     <div style="margin-top: 7px;">*/
/*     {{ user.nickname }}*/
/*     </div>*/
/*   </div>*/
/* */
/*    <div class="row form-group">*/
/*     <div class="col-md-3 control-label">*/
/*       <label for="truename">真实姓名</label>*/
/*     </div>*/
/*     <div style="margin-top: 7px;">*/
/*       {{userApprovalInfo.truename}}*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="row form-group">*/
/*     <div class="col-md-3 control-label">*/
/*       <label for="idcard">身份证号码</label>*/
/*     </div>*/
/*     <div style="margin-top: 7px;">*/
/*       {{userApprovalInfo.idcard}}*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="row form-group">*/
/*     <div class="col-md-3 control-label">*/
/*       <label for="faceImg">身份证正面照</label>*/
/*     </div>*/
/*     <div>*/
/*      <a href="{{ url('show_idcard', {userId: user.id, type:'face'})}}" target="_blank">*/
/*      <img src="{{url('show_idcard', {userId: user.id, type:'face'})}}" width="400" />*/
/*      </a>*/
/*     </div>*/
/*   </div>*/
/* */
/*     <div class="row form-group">*/
/*     <div class="col-md-3 control-label">*/
/*       <label for="faceImg">身份证反面照</label>*/
/*     </div>*/
/*     <div>*/
/*      <a href="{{url('show_idcard', {userId: user.id, type: 'back'})}}" target="_blank">*/
/*           <img src="{{url('show_idcard', {userId: user.id, type: 'back'})}}" width="400" />*/
/*       </a>*/
/*     </div>*/
/*   </div>*/
