<?php

/* TopxiaWebBundle:Group:upload-modal.html.twig */
class __TwigTemplate_8000eacf00679ba0bec9539c9c12db21dc4cdff3a7c02807f3a5807adb602e58 extends Twig_Template
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
        echo "
<div class=\"modal fade\" id=\"uploadModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
        <h4 class=\"modal-title\" id=\"myModalLabel\">上传附件</h4>
      </div>
      <div class=\"modal-body\">
        <button class=\"btn btn-default btn-sm upload-img\" style=\"height:33px;\" type=\"button\" data-url=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("group_upload", array("group" => "user"));
        echo "\"  >上传</button>
        <span> (大小不能超过<span style=\"color:red;\">2</span>MB，文件类型支持png ,jpg ,gif ,doc ,xls ,txt ,rar ,zip .)</span>

        <table id=\"block-table\" class=\"table table-striped table-condensed mtl\">
          <tr >
          <th width=\"60%\">文件名</th>
          <th>描述</th>
          <th>";
        // line 17
        echo twig_escape_filter($this->env, (($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("coin"), "coin_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("coin"), "coin_name", array()), "")) : ("")), "html", null, true);
        echo "</th>
          <th>操作</th>
          </tr>
          ";
        // line 20
        if (((array_key_exists("thread", $context)) ? (_twig_default_filter((isset($context["thread"]) ? $context["thread"] : null), null)) : (null))) {
            // line 21
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attachs"]) ? $context["attachs"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["attach"]) {
                // line 22
                echo "            <tr id=\"file-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["attach"], "id", array()), "html", null, true);
                echo "\">
              <td><label class=\"control-label\"><span class=\"glyphicon glyphicon-folder-close\"></span> ";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["attach"], "title", array()), "html", null, true);
                echo "</label></td>
              <td><input type=\"hidden\" name=\"id[]\" value=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["attach"], "fileId", array()), "html", null, true);
                echo "\"/><input type=\"text\" class=\"form-control\" name=\"description[]\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["attach"], "title", array()), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["attach"], "description", array()), "html", null, true);
                echo "\"></td>
              <td><input type=\"text\" name=\"coin[]\" class=\"form-control\" value=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["attach"], "coin", array()), "html", null, true);
                echo "\"></td>
              <td><button type=\"button\" class=\"del-file btn btn-default\" data-id=\"";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["attach"], "id", array()), "html", null, true);
                echo "\">删除</button></td>
            </tr>       
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attach'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "        ";
        }
        // line 30
        echo "        </table>
      </div>
      <div class=\"modal-footer\">
          <div class=\"pull-left text-muted\">用户下载附件扣除的";
        // line 33
        echo twig_escape_filter($this->env, (($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("coin"), "coin_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("coin"), "coin_name", array()), "")) : ("")), "html", null, true);
        echo "会在扣除50%之后添加到您的账户
          </div>
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">取消</button>
        <button type=\"button\" class=\"btn btn-primary\" id=\"sure\">确定</button>
      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Group:upload-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 33,  86 => 30,  83 => 29,  74 => 26,  70 => 25,  62 => 24,  58 => 23,  53 => 22,  48 => 21,  46 => 20,  40 => 17,  30 => 10,  19 => 1,);
    }
}
/* */
/* <div class="modal fade" id="uploadModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*   <div class="modal-dialog">*/
/*     <div class="modal-content">*/
/*       <div class="modal-header">*/
/*         <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>*/
/*         <h4 class="modal-title" id="myModalLabel">上传附件</h4>*/
/*       </div>*/
/*       <div class="modal-body">*/
/*         <button class="btn btn-default btn-sm upload-img" style="height:33px;" type="button" data-url="{{ path('group_upload', {group:'user'}) }}"  >上传</button>*/
/*         <span> (大小不能超过<span style="color:red;">2</span>MB，文件类型支持png ,jpg ,gif ,doc ,xls ,txt ,rar ,zip .)</span>*/
/* */
/*         <table id="block-table" class="table table-striped table-condensed mtl">*/
/*           <tr >*/
/*           <th width="60%">文件名</th>*/
/*           <th>描述</th>*/
/*           <th>{{setting('coin').coin_name|default('')}}</th>*/
/*           <th>操作</th>*/
/*           </tr>*/
/*           {% if thread|default(null) %}*/
/*           {% for attach in attachs %}*/
/*             <tr id="file-{{attach.id}}">*/
/*               <td><label class="control-label"><span class="glyphicon glyphicon-folder-close"></span> {{attach.title}}</label></td>*/
/*               <td><input type="hidden" name="id[]" value="{{attach.fileId}}"/><input type="text" class="form-control" name="description[]" title="{{attach.title}}" value="{{attach.description}}"></td>*/
/*               <td><input type="text" name="coin[]" class="form-control" value="{{attach.coin}}"></td>*/
/*               <td><button type="button" class="del-file btn btn-default" data-id="{{attach.id}}">删除</button></td>*/
/*             </tr>       */
/*           {% endfor %}*/
/*         {% endif %}*/
/*         </table>*/
/*       </div>*/
/*       <div class="modal-footer">*/
/*           <div class="pull-left text-muted">用户下载附件扣除的{{setting('coin').coin_name|default('')}}会在扣除50%之后添加到您的账户*/
/*           </div>*/
/*         <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>*/
/*         <button type="button" class="btn btn-primary" id="sure">确定</button>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
