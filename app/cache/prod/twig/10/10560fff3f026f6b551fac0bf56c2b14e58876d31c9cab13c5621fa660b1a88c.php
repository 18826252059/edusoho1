<?php

/* CustomAdminBundle:ExternalRole:roles-modal.html.twig */
class __TwigTemplate_fe1b1421e103fa2fc7ce5a931e2d80c2fd60650a26bd141cd769438de9121e00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "CustomAdminBundle:ExternalRole:roles-modal.html.twig", 1);
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

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "设置用户角色";
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "    <form id=\"user-roles-form\" class=\"form-horizontal\" method=\"post\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_user_exeternal_roles", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
        echo "\">
        <div class=\"checkboxs\">
              <select class=\"form-control\" name=\"roleId\">
                  ";
        // line 12
        if (twig_test_empty($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "externalRoleId", array()))) {
            // line 13
            echo "                      <option>--请选择--</option>
                  ";
        }
        // line 15
        echo "                  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["roles"]) ? $context["roles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 16
            echo "                  ";
            if (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "externalRoleId", array()) == $this->getAttribute($context["role"], "role_id", array()))) {
                // line 17
                echo "                    <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["role"], "role_id", array()), "html", null, true);
                echo "\" selected>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["role"], "role_name", array()), "html", null, true);
                echo "</option>
                  ";
            } else {
                // line 19
                echo "                      <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["role"], "role_id", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["role"], "role_name", array()), "html", null, true);
                echo "</option>
                  ";
            }
            // line 21
            echo "                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "              </select>
        </div>
        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
    </form>
";
    }

    // line 28
    public function block_footer($context, array $blocks = array())
    {
        // line 29
        echo "    <button id=\"change-user-roles-btn\" data-submiting-text=\"正在提交\" class=\"btn btn-primary pull-right\" data-toggle=\"form-submit\" data-target=\"#user-roles-form\"  data-user=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["default"]) ? $context["default"] : null), "user_name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["default"]) ? $context["default"] : null), "user_name", array()), "学员")) : ("学员")), "html", null, true);
        echo "\" >保存</button>
    <button type=\"button\" class=\"btn btn-link pull-right\" data-dismiss=\"modal\">取消</button>
";
    }

    public function getTemplateName()
    {
        return "CustomAdminBundle:ExternalRole:roles-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 29,  96 => 28,  89 => 24,  85 => 22,  79 => 21,  71 => 19,  63 => 17,  60 => 16,  55 => 15,  51 => 13,  49 => 12,  42 => 9,  39 => 8,  33 => 7,  29 => 1,  27 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% set modalSize = 'large' %}*/
/* */
/* */
/* */
/* {% block title %}设置用户角色{% endblock %}*/
/* {% block body %}*/
/*     <form id="user-roles-form" class="form-horizontal" method="post" action="{{  url('admin_user_exeternal_roles', {id:user.id}) }}">*/
/*         <div class="checkboxs">*/
/*               <select class="form-control" name="roleId">*/
/*                   {% if user.externalRoleId is empty %}*/
/*                       <option>--请选择--</option>*/
/*                   {% endif %}*/
/*                   {% for role in roles %}*/
/*                   {% if user.externalRoleId == role.role_id%}*/
/*                     <option value="{{ role.role_id }}" selected>{{ role.role_name }}</option>*/
/*                   {% else %}*/
/*                       <option value="{{ role.role_id }}">{{ role.role_name }}</option>*/
/*                   {% endif %}*/
/*                   {%  endfor %}*/
/*               </select>*/
/*         </div>*/
/*         <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*     </form>*/
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/*     <button id="change-user-roles-btn" data-submiting-text="正在提交" class="btn btn-primary pull-right" data-toggle="form-submit" data-target="#user-roles-form"  data-user="{{default.user_name|default('学员')}}" >保存</button>*/
/*     <button type="button" class="btn btn-link pull-right" data-dismiss="modal">取消</button>*/
/* {% endblock %}*/
