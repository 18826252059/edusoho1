<?php

/* TopxiaWebBundle:Group:transfer-group-form.html.twig */
class __TwigTemplate_54a51ff56eecdbc45785cf93512bd743f71b8e8465ecf5b6a22aec63d181dbeb extends Twig_Template
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
        echo "<form id=\"transfer-group-form\" class=\"form-horizontal\" method=\"post\">
    <div class=\"form-group\">
      <label class=\"col-xs-2 control-label\" for=\"user_nickname\">转移给</label>
      <div class=\"col-xs-7 controls\">
        <input type=\"text\"  id=\"username\" name=\"user[name]\" class=\"form-control\"
        data-url=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("group_thread_check_user");
        echo "\" data-display=\"用户用户名\"  placeholder=\"请输入用户用户名\">
        <div class=\"help-block\" style=\"display:none;\"></div>
      </div>
    </div>

    <div class=\"row\">
      <div class=\"col-xs-7 col-xs-offset-2\">
        <button id=\"transfer-group-btn\" data-submiting-text=\"正在转移\" type=\"submit\" class=\"btn btn-primary\">转移</button>
      </div>
    </div>
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
       
</form>
<br>
<div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
        <h4 class=\"modal-title\" id=\"myModalLabel\">请输入您的登录密码</h4>
      </div>          
      <form  class=\"form-horizontal\" method=\"post\" action=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("group_transfer", array("id" => $this->getAttribute((isset($context["groupinfo"]) ? $context["groupinfo"] : null), "id", array()))), "html", null, true);
        echo "\">
        <div class=\"modal-body\">
              <div class=\"form-group\">
                <div class=\"col-md-7 controls\">
                  <input type=\"hidden\" id=\"nickname\"  name=\"user[nickname]\" class=\"form-control \" 
                 value=\"aria-labelledby\">
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-md-2 control-label\" >密码</label>
                <div class=\"col-md-7 controls\">
                  <input type=\"password\"  name=\"user[password]\" class=\"form-control\" value=\"\"
                 ><input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
                </div>
              </div>
        </div>
        <div class=\"modal-footer\">
              <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">关闭</button>
              <button type=\"submit\" class=\"btn btn-primary\" >确认转移小组</button>
        </div>   
      </form>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Group:transfer-group-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 39,  53 => 27,  39 => 16,  26 => 6,  19 => 1,);
    }
}
/* <form id="transfer-group-form" class="form-horizontal" method="post">*/
/*     <div class="form-group">*/
/*       <label class="col-xs-2 control-label" for="user_nickname">转移给</label>*/
/*       <div class="col-xs-7 controls">*/
/*         <input type="text"  id="username" name="user[name]" class="form-control"*/
/*         data-url="{{path('group_thread_check_user')}}" data-display="用户用户名"  placeholder="请输入用户用户名">*/
/*         <div class="help-block" style="display:none;"></div>*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*       <div class="col-xs-7 col-xs-offset-2">*/
/*         <button id="transfer-group-btn" data-submiting-text="正在转移" type="submit" class="btn btn-primary">转移</button>*/
/*       </div>*/
/*     </div>*/
/*     <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*        */
/* </form>*/
/* <br>*/
/* <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*   <div class="modal-dialog">*/
/*     <div class="modal-content">*/
/*       <div class="modal-header">*/
/*         <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>*/
/*         <h4 class="modal-title" id="myModalLabel">请输入您的登录密码</h4>*/
/*       </div>          */
/*       <form  class="form-horizontal" method="post" action="{{path('group_transfer',{id:groupinfo.id})}}">*/
/*         <div class="modal-body">*/
/*               <div class="form-group">*/
/*                 <div class="col-md-7 controls">*/
/*                   <input type="hidden" id="nickname"  name="user[nickname]" class="form-control " */
/*                  value="aria-labelledby">*/
/*                 </div>*/
/*               </div>*/
/*               <div class="form-group">*/
/*                 <label class="col-md-2 control-label" >密码</label>*/
/*                 <div class="col-md-7 controls">*/
/*                   <input type="password"  name="user[password]" class="form-control" value=""*/
/*                  ><input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*                 </div>*/
/*               </div>*/
/*         </div>*/
/*         <div class="modal-footer">*/
/*               <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>*/
/*               <button type="submit" class="btn btn-primary" >确认转移小组</button>*/
/*         </div>   */
/*       </form>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
