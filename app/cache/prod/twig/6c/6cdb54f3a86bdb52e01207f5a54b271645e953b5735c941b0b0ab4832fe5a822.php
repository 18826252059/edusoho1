<?php

/* TopxiaAdminBundle:System:user-fields.modal.delete.html.twig */
class __TwigTemplate_9a4d4fad2576a6584ad07c9274e59199779f1cd826b9f6f08006015a01972e35 extends Twig_Template
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
        <h4 class=\"modal-title\">删除字段</h4>
      </div>
      <form method=\"post\" class=\"form-horizontal\" id=\"field-save-form\" action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_user_fields_delete", array("id" => $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "id", array()))), "html", null, true);
        echo "\">
      <div class=\"modal-body\">
            
            <div class=\"form-group \">
             <label class=\"col-md-10 col-md-offset-2\" for=
             \"title\">确定要删除 <b style=\"color:red;\">";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["field"]) ? $context["field"] : null), "title", array()), "html", null, true);
        echo " </b>字段吗？<br><b style=\"color:red;\">所有该字段的历史数据都将一起删除！</b><br>如要保留历史数据，请隐藏该字段</label>
            </div>
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
       </div> 
      
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">取消</button>
        <button type=\"submit\" class=\"btn btn-primary\" id=\"save-btn\">确定删除</button>
      </div>
      </form>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:user-fields.modal.delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 15,  36 => 13,  28 => 8,  19 => 1,);
    }
}
/* <div  id="modal">*/
/*   <div class="modal-dialog">*/
/*     <div class="modal-content">*/
/*       <div class="modal-header">*/
/*         <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>*/
/*         <h4 class="modal-title">删除字段</h4>*/
/*       </div>*/
/*       <form method="post" class="form-horizontal" id="field-save-form" action="{{url('admin_user_fields_delete',{id:field.id})}}">*/
/*       <div class="modal-body">*/
/*             */
/*             <div class="form-group ">*/
/*              <label class="col-md-10 col-md-offset-2" for=*/
/*              "title">确定要删除 <b style="color:red;">{{field.title}} </b>字段吗？<br><b style="color:red;">所有该字段的历史数据都将一起删除！</b><br>如要保留历史数据，请隐藏该字段</label>*/
/*             </div>*/
/*             <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*        </div> */
/*       */
/*       <div class="modal-footer">*/
/*         <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>*/
/*         <button type="submit" class="btn btn-primary" id="save-btn">确定删除</button>*/
/*       </div>*/
/*       </form>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
