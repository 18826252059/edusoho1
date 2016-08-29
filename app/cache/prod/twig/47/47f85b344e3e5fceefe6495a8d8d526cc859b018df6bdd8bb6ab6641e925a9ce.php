<?php

/* TopxiaAdminBundle:System:user-fields.modal.edit.html.twig */
class __TwigTemplate_319713e41c0784ecc29e3feaddfac3b4f7a52a21f63c9d6c3999659e1d5d7eec extends Twig_Template
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
        echo "<div  id=\"modal\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
        <h4 class=\"modal-title\">编辑字段</h4>
      </div>
      <form method=\"post\" class=\"form-horizontal\" id=\"field-save-form\" action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_user_fields_edit", array("id" => $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "id", array()))), "html", null, true);
        echo "\">
      <div class=\"modal-body\">
            
            <div class=\"form-group \"> 
             <label class=\"col-md-4 control-label\" for=
             \"title\">字段名称</label>
              <div class=\"col-md-6 controls\">
              <input type=\"text\"  name=\"title\" id=\"title\"  value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "title", array()), "html", null, true);
        echo "\" class=\"form-control\">
              </div>
            </div>

            <div class=\"form-group \"> 
             <label class=\"col-md-4 control-label\" for=\"seq\">字段类型</label>
              <div class=\"col-md-6 controls\">
              ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "fieldName", array()), "html", null, true);
        echo "
              </div>
            </div>

            <div class=\"form-group \"> 
             <label class=\"col-md-4 control-label\" for=\"seq\">显示序号</label>
              <div class=\"col-md-6 controls\">
              <input type=\"text\"  name=\"seq\" id=\"seq\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "seq", array()), "html", null, true);
        echo "\" class=\"form-control\">
              </div>
            </div>

            <div class=\"form-group \"> 
             <label class=\"col-md-4 control-label\">是否启用、显示</label>
             <div class=\"col-md-2\"><input type=\"checkbox\"  ";
        // line 35
        if (($this->getAttribute((isset($context["field"]) ? $context["field"] : null), "enabled", array()) == 1)) {
            echo " checked=checked";
        }
        echo " name=\"enabled\" vaule=\"1\" style=\"height:18px;width:18px;\"></div>
            </div>
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
       </div> 
      
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">取消</button>
        <button type=\"submit\" class=\"btn btn-primary\" id=\"save-btn\">保存</button>
      </div>
      </form>
    </div>
  </div>
</div>
<script type=\"text/javascript\"> app.load('system/save-modal') </script>";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:user-fields.modal.edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 37,  67 => 35,  58 => 29,  48 => 22,  38 => 15,  28 => 8,  19 => 1,);
    }
}
/* <div  id="modal">*/
/*   <div class="modal-dialog">*/
/*     <div class="modal-content">*/
/*       <div class="modal-header">*/
/*         <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>*/
/*         <h4 class="modal-title">编辑字段</h4>*/
/*       </div>*/
/*       <form method="post" class="form-horizontal" id="field-save-form" action="{{url('admin_user_fields_edit',{id:field.id})}}">*/
/*       <div class="modal-body">*/
/*             */
/*             <div class="form-group "> */
/*              <label class="col-md-4 control-label" for=*/
/*              "title">字段名称</label>*/
/*               <div class="col-md-6 controls">*/
/*               <input type="text"  name="title" id="title"  value="{{field.title}}" class="form-control">*/
/*               </div>*/
/*             </div>*/
/* */
/*             <div class="form-group "> */
/*              <label class="col-md-4 control-label" for="seq">字段类型</label>*/
/*               <div class="col-md-6 controls">*/
/*               {{field.fieldName}}*/
/*               </div>*/
/*             </div>*/
/* */
/*             <div class="form-group "> */
/*              <label class="col-md-4 control-label" for="seq">显示序号</label>*/
/*               <div class="col-md-6 controls">*/
/*               <input type="text"  name="seq" id="seq" value="{{field.seq}}" class="form-control">*/
/*               </div>*/
/*             </div>*/
/* */
/*             <div class="form-group "> */
/*              <label class="col-md-4 control-label">是否启用、显示</label>*/
/*              <div class="col-md-2"><input type="checkbox"  {% if field.enabled==1 %} checked=checked{% endif %} name="enabled" vaule="1" style="height:18px;width:18px;"></div>*/
/*             </div>*/
/*             <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*        </div> */
/*       */
/*       <div class="modal-footer">*/
/*         <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>*/
/*         <button type="submit" class="btn btn-primary" id="save-btn">保存</button>*/
/*       </div>*/
/*       </form>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* <script type="text/javascript"> app.load('system/save-modal') </script>*/
