<?php

/* TopxiaWebBundle:Group:add-thread.html.twig */
class __TwigTemplate_7d7e051e285bdd17d7bec5716469d3a4be0da06d6728968847a81b2f0e4c2434 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Group:layout.html.twig", "TopxiaWebBundle:Group:add-thread.html.twig", 1);
        $this->blocks = array(
            'group_body' => array($this, 'block_group_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Group:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["script_controller"] = "group/group";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_group_body($context, array $blocks = array())
    {
        // line 4
        echo "<style>
.ke-icon-hidden {
        background-image: url('";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getDefaultPath("iconfont-hide.png"), "html", null, true);
        echo "');
        background-position:center;
        width: 16px;
        height: 16px;
}  
.ke-icon-accessory {

        background-image: url('/assets/img/default/iconfont-accessory.png');
        background-position:center;
        width: 16px;
        height: 16px;
}
.ke-icon-accessory-red {

        background-image: url('/assets/img/default/iconfont-accessory-red.png');
        background-position:center;
        width: 16px;
        height: 16px;
}

</style>
";
        // line 27
        if ((((array_key_exists("thread", $context)) ? (_twig_default_filter((isset($context["thread"]) ? $context["thread"] : null), null)) : (null)) && (isset($context["attachs"]) ? $context["attachs"] : null))) {
            // line 28
            echo "  <div id=\"hasAttach\"></div>
";
        }
        // line 30
        echo "  <div class=\"panel panel-default\">
    <div class=\"panel-heading\">
      ";
        // line 32
        if (((array_key_exists("thread", $context)) ? (_twig_default_filter((isset($context["thread"]) ? $context["thread"] : null), null)) : (null))) {
            // line 33
            echo "      <h3 class=\"panel-title\">编辑话题</h3>
      ";
        } else {
            // line 35
            echo "      <h3 class=\"panel-title\">发表话题</h3>
      ";
        }
        // line 37
        echo "    </div>
    <div class=\"panel-body\">
      <form id=\"user-thread-form\" class=\"form-horizontal thread-form\" method=\"post\">

        <div class=\"form-group\">
          <label class=\"col-xs-2 control-label\" for=\"thread_title\">标题</label>
          <div class=\"col-sm-7 col-xs-10 controls\">
            <input type=\"text\" id=\"thread_title\" name=\"thread[title]\" class=\"form-control\" value=\"";
        // line 44
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "title", array()), "")) : ("")), "html", null, true);
        echo "\">
            <div class=\"help-block\" style=\"display:none;\"></div>
          </div>
        </div>

        <div class=\"form-group\">
          <label class=\"col-xs-2 control-label\" for=\"";
        // line 50
        if ($this->env->getExtension('topxia_web_twig')->isFeatureEnabled("group_reward")) {
            echo "thread_content1";
        } else {
            echo "thread_content";
        }
        echo "\">内容</label>
          <div class=\"col-sm-7 col-xs-10 controls\">
            ";
        // line 52
        if ($this->env->getExtension('topxia_web_twig')->isFeatureEnabled("group_reward")) {
            // line 53
            echo "            <textarea name=\"thread[content]\" rows=\"10\" id=\"thread_content1\" class=\"form-control\" data-image-upload-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("default"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "content", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "content", array()), "")) : ("")), "html", null, true);
            echo "</textarea>
            ";
        } else {
            // line 55
            echo "            <textarea name=\"thread[content]\" rows=\"10\" id=\"thread_content\" class=\"form-control\" data-image-upload-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_upload", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("default"))), "html", null, true);
            echo "\" data-image-download-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("editor_download", array("token" => $this->env->getExtension('topxia_web_twig')->makeUpoadToken("default"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "content", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["thread"]) ? $context["thread"] : null), "content", array()), "")) : ("")), "html", null, true);
            echo "</textarea>
            ";
        }
        // line 57
        echo "          </div>
        </div>

        <div class=\"row\">
          <div class=\"col-sm-7 col-xs-10 col-xs-offset-2\">
            ";
        // line 62
        if (((array_key_exists("thread", $context)) ? (_twig_default_filter((isset($context["thread"]) ? $context["thread"] : null), null)) : (null))) {
            // line 63
            echo "            <button id=\"groupthread-save-btn\" data-submiting-text=\"正在修改\" type=\"submit\" class=\"btn btn-primary\">修改</button>
            ";
        } else {
            // line 65
            echo "            <button id=\"groupthread-save-btn\" data-submiting-text=\"正在创建\" type=\"submit\" class=\"btn btn-primary\">发布</button>
            ";
        }
        // line 67
        echo "          </div>
        </div>
        
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
        <input type=\"hidden\" name=\"files\">
      </form>
      
    </div>
  </div>

  <div class=\"modal fade\" id=\"myModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\"><span aria-hidden=\"true\">&times;</span><span class=\"sr-only\">Close</span></button>
        <h4 class=\"modal-title\" id=\"myModalLabel\">插入隐藏内容</h4>
      </div>
      <div class=\"modal-body\">
          
      <form  class=\"form-horizontal\" method=\"post\" >

        <div class=\"row form-group\">
          <div class=\"col-md-4 control\">
            <label class=\"control-label\"> 请输入要隐藏的内容:</label>
          </div>
          <div class=\"col-md-7 controls\">
            <textarea class=\"form-control\" rows=\"3\" id=\"text\" > </textarea>
          </div>

        </div>

        <div class=\"form-group\">        
          <div class=\"controls\">
            <div class=\"col-md-4 control\">
            <input type=\"radio\" id=\"type0\" name=\"type\" required=\"required\" value=\"coin\" checked=true>
            <label for=\"amount\" class=\"control-label\"> 查看所需";
        // line 102
        echo twig_escape_filter($this->env, (($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("coin"), "coin_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("coin"), "coin_name", array()), "")) : ("")), "html", null, true);
        echo ":</label>
            </div>
            <div class=\"col-md-3 controls\">
               <input name=\"amount\" class=\"form-control\" tyoe=\"text\" id=\"amount\"/>
            </div>
          </div>
        </div>

        <div class=\"row form-group\">
          <div class=\"col-md-4 control\">
            <input type=\"radio\" id=\"type1\" name=\"type\" required=\"required\" value=\"reply\" >
            <label for=\"amount\" class=\"control-label\"> 回复话题后可见</label>
          </div>

        </div>

      </form>
      </div>
      <div class=\"modal-footer\">
          <div class=\"pull-left text-muted\">隐藏话题获得的";
        // line 121
        echo twig_escape_filter($this->env, (($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("coin"), "coin_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('topxia_web_twig')->getSetting("coin"), "coin_name", array()), "")) : ("")), "html", null, true);
        echo "会在扣除50%之后添加到您的账户
          </div>
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">取消</button>
        <button type=\"button\" class=\"btn btn-primary\" id=\"insert\">插入</button>
      </div>
    </div>
  </div>
</div>

";
        // line 130
        $this->loadTemplate("TopxiaWebBundle:Group:upload-modal.html.twig", "TopxiaWebBundle:Group:add-thread.html.twig", 130)->display($context);
        // line 131
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Group:add-thread.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 131,  220 => 130,  208 => 121,  186 => 102,  151 => 70,  146 => 67,  142 => 65,  138 => 63,  136 => 62,  129 => 57,  119 => 55,  111 => 53,  109 => 52,  100 => 50,  91 => 44,  82 => 37,  78 => 35,  74 => 33,  72 => 32,  68 => 30,  64 => 28,  62 => 27,  38 => 6,  34 => 4,  31 => 3,  27 => 1,  25 => 2,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:Group:layout.html.twig' %}*/
/* {% set script_controller = 'group/group' %}*/
/* {% block group_body %}*/
/* <style>*/
/* .ke-icon-hidden {*/
/*         background-image: url('{{default_path("iconfont-hide.png")}}');*/
/*         background-position:center;*/
/*         width: 16px;*/
/*         height: 16px;*/
/* }  */
/* .ke-icon-accessory {*/
/* */
/*         background-image: url('/assets/img/default/iconfont-accessory.png');*/
/*         background-position:center;*/
/*         width: 16px;*/
/*         height: 16px;*/
/* }*/
/* .ke-icon-accessory-red {*/
/* */
/*         background-image: url('/assets/img/default/iconfont-accessory-red.png');*/
/*         background-position:center;*/
/*         width: 16px;*/
/*         height: 16px;*/
/* }*/
/* */
/* </style>*/
/* {% if thread|default(null) and attachs %}*/
/*   <div id="hasAttach"></div>*/
/* {% endif %}*/
/*   <div class="panel panel-default">*/
/*     <div class="panel-heading">*/
/*       {% if thread|default(null) %}*/
/*       <h3 class="panel-title">编辑话题</h3>*/
/*       {% else %}*/
/*       <h3 class="panel-title">发表话题</h3>*/
/*       {% endif %}*/
/*     </div>*/
/*     <div class="panel-body">*/
/*       <form id="user-thread-form" class="form-horizontal thread-form" method="post">*/
/* */
/*         <div class="form-group">*/
/*           <label class="col-xs-2 control-label" for="thread_title">标题</label>*/
/*           <div class="col-sm-7 col-xs-10 controls">*/
/*             <input type="text" id="thread_title" name="thread[title]" class="form-control" value="{{thread.title|default('')}}">*/
/*             <div class="help-block" style="display:none;"></div>*/
/*           </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*           <label class="col-xs-2 control-label" for="{% if is_feature_enabled('group_reward') %}thread_content1{% else %}thread_content{% endif %}">内容</label>*/
/*           <div class="col-sm-7 col-xs-10 controls">*/
/*             {% if is_feature_enabled('group_reward') %}*/
/*             <textarea name="thread[content]" rows="10" id="thread_content1" class="form-control" data-image-upload-url="{{ path('editor_upload', {token:upload_token('default')}) }}">{{thread.content|default('')}}</textarea>*/
/*             {% else %}*/
/*             <textarea name="thread[content]" rows="10" id="thread_content" class="form-control" data-image-upload-url="{{ path('editor_upload', {token:upload_token('default')}) }}" data-image-download-url="{{ path('editor_download', {token:upload_token('default')}) }}">{{thread.content|default('')}}</textarea>*/
/*             {% endif %}*/
/*           </div>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*           <div class="col-sm-7 col-xs-10 col-xs-offset-2">*/
/*             {% if thread|default(null) %}*/
/*             <button id="groupthread-save-btn" data-submiting-text="正在修改" type="submit" class="btn btn-primary">修改</button>*/
/*             {% else %}*/
/*             <button id="groupthread-save-btn" data-submiting-text="正在创建" type="submit" class="btn btn-primary">发布</button>*/
/*             {% endif %}*/
/*           </div>*/
/*         </div>*/
/*         */
/*         <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*         <input type="hidden" name="files">*/
/*       </form>*/
/*       */
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">*/
/*   <div class="modal-dialog">*/
/*     <div class="modal-content">*/
/*       <div class="modal-header">*/
/*         <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>*/
/*         <h4 class="modal-title" id="myModalLabel">插入隐藏内容</h4>*/
/*       </div>*/
/*       <div class="modal-body">*/
/*           */
/*       <form  class="form-horizontal" method="post" >*/
/* */
/*         <div class="row form-group">*/
/*           <div class="col-md-4 control">*/
/*             <label class="control-label"> 请输入要隐藏的内容:</label>*/
/*           </div>*/
/*           <div class="col-md-7 controls">*/
/*             <textarea class="form-control" rows="3" id="text" > </textarea>*/
/*           </div>*/
/* */
/*         </div>*/
/* */
/*         <div class="form-group">        */
/*           <div class="controls">*/
/*             <div class="col-md-4 control">*/
/*             <input type="radio" id="type0" name="type" required="required" value="coin" checked=true>*/
/*             <label for="amount" class="control-label"> 查看所需{{setting('coin').coin_name|default('')}}:</label>*/
/*             </div>*/
/*             <div class="col-md-3 controls">*/
/*                <input name="amount" class="form-control" tyoe="text" id="amount"/>*/
/*             </div>*/
/*           </div>*/
/*         </div>*/
/* */
/*         <div class="row form-group">*/
/*           <div class="col-md-4 control">*/
/*             <input type="radio" id="type1" name="type" required="required" value="reply" >*/
/*             <label for="amount" class="control-label"> 回复话题后可见</label>*/
/*           </div>*/
/* */
/*         </div>*/
/* */
/*       </form>*/
/*       </div>*/
/*       <div class="modal-footer">*/
/*           <div class="pull-left text-muted">隐藏话题获得的{{setting('coin').coin_name|default('')}}会在扣除50%之后添加到您的账户*/
/*           </div>*/
/*         <button type="button" class="btn btn-default" data-dismiss="modal">取消</button>*/
/*         <button type="button" class="btn btn-primary" id="insert">插入</button>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
/* {% include 'TopxiaWebBundle:Group:upload-modal.html.twig' %}*/
/* */
/* {% endblock %}*/
