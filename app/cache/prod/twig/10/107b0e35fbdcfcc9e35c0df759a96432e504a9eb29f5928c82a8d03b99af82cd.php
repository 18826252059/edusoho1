<?php

/* TopxiaAdminBundle:Navigation:navigation-modal.html.twig */
class __TwigTemplate_847fea36af1bdcd1d2ac28a2dd7af882ce59d4e72cc62123faf5b7f0620e2a48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaAdminBundle:Navigation:navigation-modal.html.twig", 1);
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
        // line 2
        $context["block"] = ((array_key_exists("block", $context)) ? (_twig_default_filter((isset($context["block"]) ? $context["block"] : null), null)) : (null));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        // line 5
        if ((($this->getAttribute((isset($context["navigation"]) ? $context["navigation"] : null), "id", array()) == 0) && ($this->getAttribute((isset($context["navigation"]) ? $context["navigation"] : null), "type", array()) == "top"))) {
            // line 6
            echo "新增顶部导航
";
        } elseif ((($this->getAttribute(        // line 7
(isset($context["navigation"]) ? $context["navigation"] : null), "id", array()) > 0) && ($this->getAttribute((isset($context["navigation"]) ? $context["navigation"] : null), "type", array()) == "top"))) {
            // line 8
            echo "编辑顶部导航
";
        } elseif ((($this->getAttribute(        // line 9
(isset($context["navigation"]) ? $context["navigation"] : null), "id", array()) == 0) && ($this->getAttribute((isset($context["navigation"]) ? $context["navigation"] : null), "type", array()) == "foot"))) {
            // line 10
            echo "新增底部导航
";
        } elseif ((($this->getAttribute(        // line 11
(isset($context["navigation"]) ? $context["navigation"] : null), "id", array()) > 0) && ($this->getAttribute((isset($context["navigation"]) ? $context["navigation"] : null), "type", array()) == "foot"))) {
            // line 12
            echo "编辑底部导航
";
        }
        // line 14
        echo "
";
    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        // line 18
        echo "
  <form class=\"form-horizontal\" id=\"navigation-form\"
  ";
        // line 20
        if (($this->getAttribute((isset($context["navigation"]) ? $context["navigation"] : null), "id", array()) == 0)) {
            // line 21
            echo "    action=\"";
            echo $this->env->getExtension('routing')->getPath("admin_navigation_create");
            echo "\"
  ";
        } else {
            // line 23
            echo "    action=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_navigation_update", array("id" => $this->getAttribute((isset($context["navigation"]) ? $context["navigation"] : null), "id", array()))), "html", null, true);
            echo "\" 
  ";
        }
        // line 25
        echo " method=\"post\">

  ";
        // line 27
        if ((isset($context["parentNavigation"]) ? $context["parentNavigation"] : null)) {
            // line 28
            echo "  <div class=\"row form-group\">
    <div class=\"col-md-3 control-label\"><label>上级导航</label></div>
    <div class=\"col-md-8 controls\"> 
      ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["parentNavigation"]) ? $context["parentNavigation"] : null), "name", array()), "html", null, true);
            echo "
      <div class=\"help-block\">请注意：增加子导航后，对应的上级导航链接将不起作用。</div>
    </div>
  </div>
  ";
        }
        // line 36
        echo "

 <div class=\"row form-group\">
  <div class=\"col-md-3 control-label\"><label for=\"name\">名称</label></div>
  <div class=\"col-md-8 controls\"> 
    <input class=\"form-control\" type=\"text\" id=\"name\" value=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["navigation"]) ? $context["navigation"] : null), "name", array()), "html", null, true);
        echo "\" name=\"name\"></div>
</div>
<p></p>

<div class=\"row form-group\">
  <div class=\"col-md-3 control-label\"><label for=\"url\">链接地址</label></div>
  <div class=\"col-md-8 controls\"> <input class=\"form-control\" type=\"text\" id=\"url\" ";
        // line 47
        if ($this->getAttribute((isset($context["navigation"]) ? $context["navigation"] : null), "url", array())) {
            echo " value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["navigation"]) ? $context["navigation"] : null), "url", array()), "html", null, true);
            echo "\" ";
        } else {
            echo " value=\"http://\" ";
        }
        echo " name=\"url\" ></div>
</div>

<p></p>

<input type=\"hidden\" name=\"type\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["navigation"]) ? $context["navigation"] : null), "type", array()), "html", null, true);
        echo "\" >

<div class=\"row form-group\">
          <div class=\"col-md-3 control-label\"><label>新开窗口</label></div>
          <div class=\"col-md-8 controls radios\"> 
            <div id=\"isNewWin\">
              <input type=\"radio\" name=\"isNewWin\"  value=\"0\"
               ";
        // line 59
        if (($this->getAttribute((isset($context["navigation"]) ? $context["navigation"] : null), "isNewWin", array()) == 0)) {
            echo " checked=\"checked\" ";
        }
        echo ">
              <label >否</label>
              <input type=\"radio\" name=\"isNewWin\"  value=\"1\"
              ";
        // line 62
        if (($this->getAttribute((isset($context["navigation"]) ? $context["navigation"] : null), "isNewWin", array()) == 1)) {
            echo " checked=\"checked\" ";
        }
        echo ">
              <label >是</label>
            </div>
          </div>
</div>

<div class=\"row form-group\">
      <div class=\"col-md-3 control-label\">
        <label>状态</label>
      </div>
      <div class=\"col-md-8 controls radios\">
        <div id=\"isOpen\">
          <input type=\"radio\" name=\"isOpen\"  value=\"1\" 
          ";
        // line 75
        if (($this->getAttribute((isset($context["navigation"]) ? $context["navigation"] : null), "isOpen", array()) == 1)) {
            echo " checked=\"checked\" ";
        }
        echo ">
          <label>开启</label>
          <input type=\"radio\" name=\"isOpen\"  value=\"0\"
           ";
        // line 78
        if (($this->getAttribute((isset($context["navigation"]) ? $context["navigation"] : null), "isOpen", array()) == 0)) {
            echo " checked=\"checked\" ";
        }
        echo ">
          <label>关闭</label>
        </div>
      </div>
</div>
<input type=\"hidden\" name=\"parentId\" value=\"";
        // line 83
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["parentNavigation"]) ? $context["parentNavigation"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["parentNavigation"]) ? $context["parentNavigation"] : null), "id", array()), 0)) : (0)), "html", null, true);
        echo "\">
<input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

  </form>

  <script type=\"text/javascript\">
  ";
        // line 89
        if (($this->getAttribute((isset($context["navigation"]) ? $context["navigation"] : null), "id", array()) == 0)) {
            // line 90
            echo "    app.load('navigation/create-modal')
  ";
        } else {
            // line 92
            echo "    app.load('navigation/edit-modal')
  ";
        }
        // line 94
        echo "  </script>
  
";
    }

    // line 98
    public function block_footer($context, array $blocks = array())
    {
        // line 99
        echo "  <button type=\"button\" class=\"btn btn-link\" data-dismiss=\"modal\">取消</button>
  <button id=\"navigation-save-btn\" data-submiting-text=\"正在提交\" type=\"submit\" class=\"btn btn-primary\" data-toggle=\"form-submit\" data-target=\"#navigation-form\">保存</button>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Navigation:navigation-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 99,  214 => 98,  208 => 94,  204 => 92,  200 => 90,  198 => 89,  190 => 84,  186 => 83,  176 => 78,  168 => 75,  150 => 62,  142 => 59,  132 => 52,  118 => 47,  109 => 41,  102 => 36,  94 => 31,  89 => 28,  87 => 27,  83 => 25,  77 => 23,  71 => 21,  69 => 20,  65 => 18,  62 => 17,  57 => 14,  53 => 12,  51 => 11,  48 => 10,  46 => 9,  43 => 8,  41 => 7,  38 => 6,  36 => 5,  33 => 4,  29 => 1,  27 => 2,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* {% set block = block|default(null) %}*/
/* */
/* {% block title %}*/
/* {% if navigation.id == 0 and navigation.type =='top' %}*/
/* 新增顶部导航*/
/* {% elseif navigation.id > 0 and navigation.type =='top'%}*/
/* 编辑顶部导航*/
/* {% elseif navigation.id == 0 and navigation.type =='foot'%}*/
/* 新增底部导航*/
/* {% elseif navigation.id > 0 and navigation.type =='foot'%}*/
/* 编辑底部导航*/
/* {% endif %}*/
/* */
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*   <form class="form-horizontal" id="navigation-form"*/
/*   {% if navigation.id == 0 %}*/
/*     action="{{ path('admin_navigation_create') }}"*/
/*   {% else %}*/
/*     action="{{ path('admin_navigation_update', {id:navigation.id}) }}" */
/*   {% endif %}*/
/*  method="post">*/
/* */
/*   {% if parentNavigation %}*/
/*   <div class="row form-group">*/
/*     <div class="col-md-3 control-label"><label>上级导航</label></div>*/
/*     <div class="col-md-8 controls"> */
/*       {{ parentNavigation.name }}*/
/*       <div class="help-block">请注意：增加子导航后，对应的上级导航链接将不起作用。</div>*/
/*     </div>*/
/*   </div>*/
/*   {% endif %}*/
/* */
/* */
/*  <div class="row form-group">*/
/*   <div class="col-md-3 control-label"><label for="name">名称</label></div>*/
/*   <div class="col-md-8 controls"> */
/*     <input class="form-control" type="text" id="name" value="{{navigation.name}}" name="name"></div>*/
/* </div>*/
/* <p></p>*/
/* */
/* <div class="row form-group">*/
/*   <div class="col-md-3 control-label"><label for="url">链接地址</label></div>*/
/*   <div class="col-md-8 controls"> <input class="form-control" type="text" id="url" {% if navigation.url %} value="{{navigation.url}}" {% else %} value="http://" {% endif %} name="url" ></div>*/
/* </div>*/
/* */
/* <p></p>*/
/* */
/* <input type="hidden" name="type" value="{{ navigation.type }}" >*/
/* */
/* <div class="row form-group">*/
/*           <div class="col-md-3 control-label"><label>新开窗口</label></div>*/
/*           <div class="col-md-8 controls radios"> */
/*             <div id="isNewWin">*/
/*               <input type="radio" name="isNewWin"  value="0"*/
/*                {% if navigation.isNewWin == 0 %} checked="checked" {% endif %}>*/
/*               <label >否</label>*/
/*               <input type="radio" name="isNewWin"  value="1"*/
/*               {% if navigation.isNewWin == 1 %} checked="checked" {% endif %}>*/
/*               <label >是</label>*/
/*             </div>*/
/*           </div>*/
/* </div>*/
/* */
/* <div class="row form-group">*/
/*       <div class="col-md-3 control-label">*/
/*         <label>状态</label>*/
/*       </div>*/
/*       <div class="col-md-8 controls radios">*/
/*         <div id="isOpen">*/
/*           <input type="radio" name="isOpen"  value="1" */
/*           {% if navigation.isOpen == 1 %} checked="checked" {% endif %}>*/
/*           <label>开启</label>*/
/*           <input type="radio" name="isOpen"  value="0"*/
/*            {% if navigation.isOpen == 0 %} checked="checked" {% endif %}>*/
/*           <label>关闭</label>*/
/*         </div>*/
/*       </div>*/
/* </div>*/
/* <input type="hidden" name="parentId" value="{{ parentNavigation.id|default(0) }}">*/
/* <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/* */
/*   </form>*/
/* */
/*   <script type="text/javascript">*/
/*   {% if navigation.id  == 0  %}*/
/*     app.load('navigation/create-modal')*/
/*   {% else %}*/
/*     app.load('navigation/edit-modal')*/
/*   {% endif %}*/
/*   </script>*/
/*   */
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/*   <button type="button" class="btn btn-link" data-dismiss="modal">取消</button>*/
/*   <button id="navigation-save-btn" data-submiting-text="正在提交" type="submit" class="btn btn-primary" data-toggle="form-submit" data-target="#navigation-form">保存</button>*/
/* {% endblock %}*/
/* */
