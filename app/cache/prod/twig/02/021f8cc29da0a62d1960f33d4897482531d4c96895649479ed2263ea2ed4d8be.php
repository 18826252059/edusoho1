<?php

/* TopxiaAdminBundle:User:roles-modal.html.twig */
class __TwigTemplate_7d00470b14eb4db1f5b98583cc62960aa44b051cbe415fc887daa04a8fe483dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaAdminBundle:User:roles-modal.html.twig", 1);
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
        echo "设置用户组";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "
<form id=\"user-roles-form\" class=\"form-horizontal\" method=\"post\" action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_user_roles", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "\" data-currentuser=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "id", array()), "html", null, true);
        echo "\" data-edituser=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "html", null, true);
        echo "\">
  <div class=\"checkboxs\">
  \t";
        // line 10
        if (twig_in_filter("ROLE_SUPER_ADMIN", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "roles", array()))) {
            // line 11
            echo "    ";
            echo $this->env->getExtension('topxia_html_twig')->checkboxs("roles", $this->env->getExtension('topxia_web_twig')->getDict("userRole"), $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "roles", array()));
            echo "
    ";
        } else {
            // line 13
            echo "    <label>
    \t<input type=\"checkbox\" name=\"roles[]\" value=\"ROLE_USER\" ";
            // line 14
            if (twig_in_filter("ROLE_USER", $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "roles", array()))) {
                echo "checked=\"checked\"";
            }
            echo ">";
            if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
            } else {
                echo "学员";
            }
            // line 15
            echo "    </label>
    <label>
    \t<input type=\"checkbox\" name=\"roles[]\" value=\"ROLE_TEACHER\" ";
            // line 17
            if (twig_in_filter("ROLE_TEACHER", $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "roles", array()))) {
                echo "checked=\"checked\"";
            }
            echo ">教师
    </label>
    <label>
      <input type=\"checkbox\" name=\"roles[]\" value=\"ROLE_ADMIN\" ";
            // line 20
            if (twig_in_filter("ROLE_ADMIN", $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "roles", array()))) {
                echo "checked=\"checked\"";
            }
            echo ">管理员
    </label>
    ";
        }
        // line 23
        echo "  </div>
  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
</form>
";
    }

    // line 29
    public function block_footer($context, array $blocks = array())
    {
        // line 30
        echo "  <button id=\"change-user-roles-btn\" data-submiting-text=\"正在提交\" class=\"btn btn-primary pull-right\" data-toggle=\"form-submit\" data-target=\"#user-roles-form\"  data-user=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["default"]) ? $context["default"] : null), "user_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["default"]) ? $context["default"] : null), "user_name", array()), "学员")) : ("学员")), "html", null, true);
        echo "\" >保存</button>
  <button type=\"button\" class=\"btn btn-link pull-right\" data-dismiss=\"modal\">取消</button>
  <script>app.load('user/roles-modal')</script>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:User:roles-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 30,  105 => 29,  98 => 24,  95 => 23,  87 => 20,  79 => 17,  75 => 15,  65 => 14,  62 => 13,  56 => 11,  54 => 10,  45 => 8,  42 => 7,  39 => 6,  33 => 5,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% set modalSize = 'large' %}*/
/* */
/* {% block title %}设置用户组{% endblock %}*/
/* {% block body %}*/
/* */
/* <form id="user-roles-form" class="form-horizontal" method="post" action="{{ url('admin_user_roles', {id:user.id}) }}" data-currentuser="{{ app.user.id }}" data-edituser="{{ user.id }}">*/
/*   <div class="checkboxs">*/
/*   	{% if 'ROLE_SUPER_ADMIN' in app.user.roles %}*/
/*     {{ checkboxs('roles', dict('userRole'), user.roles) }}*/
/*     {% else %}*/
/*     <label>*/
/*     	<input type="checkbox" name="roles[]" value="ROLE_USER" {% if 'ROLE_USER' in user.roles %}checked="checked"{% endif %}>{% if setting('default.user_name') %}{{setting('default.user_name')|default('学员')}}{% else %}学员{% endif %}*/
/*     </label>*/
/*     <label>*/
/*     	<input type="checkbox" name="roles[]" value="ROLE_TEACHER" {% if 'ROLE_TEACHER' in user.roles %}checked="checked"{% endif %}>教师*/
/*     </label>*/
/*     <label>*/
/*       <input type="checkbox" name="roles[]" value="ROLE_ADMIN" {% if 'ROLE_ADMIN' in user.roles %}checked="checked"{% endif %}>管理员*/
/*     </label>*/
/*     {% endif %}*/
/*   </div>*/
/*   <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/* </form>*/
/* {% endblock %}*/
/* */
/* */
/* {% block footer %}*/
/*   <button id="change-user-roles-btn" data-submiting-text="正在提交" class="btn btn-primary pull-right" data-toggle="form-submit" data-target="#user-roles-form"  data-user="{{default.user_name|default('学员')}}" >保存</button>*/
/*   <button type="button" class="btn btn-link pull-right" data-dismiss="modal">取消</button>*/
/*   <script>app.load('user/roles-modal')</script>*/
/* {% endblock %}*/
