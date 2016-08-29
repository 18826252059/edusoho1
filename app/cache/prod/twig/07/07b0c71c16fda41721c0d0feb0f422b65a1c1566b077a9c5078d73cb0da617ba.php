<?php

/* TopxiaWebBundle:Announcement:announcement-list-modal.html.twig */
class __TwigTemplate_e4c3c86aa9a6abb8c1d16e2b0725c1c4e43105243cc981f6de67c69e7d8d1973 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Announcement:announcement-modal-layout.html.twig", "TopxiaWebBundle:Announcement:announcement-list-modal.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Announcement:announcement-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["tab"] = "list";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "\t<div class=\"announcement-list\">
\t";
        // line 7
        if ((isset($context["announcements"]) ? $context["announcements"] : null)) {
            // line 8
            echo "\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["announcements"]) ? $context["announcements"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["announcement"]) {
                // line 9
                echo "        <div class=\"alert alert-default alert-edit clearfix\" role=\"alert\">
          <div class=\"alert-header\">
            <i class=\"icon-click es-icon es-icon-chevronright\"></i>
            <span class=\"title\">
              ";
                // line 13
                echo $this->env->getExtension('topxia_web_twig')->plainTextFilter($this->getAttribute($context["announcement"], "content", array()), 40);
                echo "
            </span>
            
            ";
                // line 16
                if ((isset($context["canManage"]) ? $context["canManage"] : null)) {
                    // line 17
                    echo "\t            <span class=\"editor\">
                ";
                    // line 18
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["announcement"], "createdTime", array()), "Y-m-d"), "html", null, true);
                    echo "
\t              <a class=\"mlm\" data-target=\"#modal\"  data-toggle=\"modal\" data-url=\"";
                    // line 19
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("announcement_update", array("id" => $this->getAttribute($context["announcement"], "id", array()), "targetType" => (isset($context["targetType"]) ? $context["targetType"] : null), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : null))), "html", null, true);
                    echo "\"><i class=\"es-icon es-icon-edit\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"编辑\"></i></a>
\t              <a href=\"javascript:;\" data-role=\"delete\" data-url=\"";
                    // line 20
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("announcement_delete", array("id" => $this->getAttribute($context["announcement"], "id", array()), "targetType" => (isset($context["targetType"]) ? $context["targetType"] : null), "targetId" => (isset($context["targetId"]) ? $context["targetId"] : null))), "html", null, true);
                    echo "\"><i class=\"es-icon es-icon-delete ml10\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"删除\"></i></a>
              </span>
            ";
                } else {
                    // line 23
                    echo "            \t<span class=\"data\">";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["announcement"], "createdTime", array()), "Y-m-d H:i:s"), "html", null, true);
                    echo "</span>
        \t  ";
                }
                // line 25
                echo "            
          </div>
          <div class=\"details\">
            ";
                // line 28
                echo $this->getAttribute($context["announcement"], "content", array());
                echo "
          </div>
        </div>

  \t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['announcement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "    
  ";
        } else {
            // line 34
            echo "\t\t<div class=\"alert alert-edit\">暂无公告</div>
\t";
        }
        // line 36
        echo "  </div>

\t<script>
\t\tapp.load('announcement/announcement');
\t</script>

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Announcement:announcement-list-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 36,  101 => 34,  97 => 32,  86 => 28,  81 => 25,  75 => 23,  69 => 20,  65 => 19,  61 => 18,  58 => 17,  56 => 16,  50 => 13,  44 => 9,  39 => 8,  37 => 7,  34 => 6,  31 => 5,  27 => 1,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:Announcement:announcement-modal-layout.html.twig' %}*/
/* */
/* {% set tab="list" %}*/
/* */
/* {% block content %}*/
/* 	<div class="announcement-list">*/
/* 	{% if announcements %}*/
/* 		{% for announcement in announcements %}*/
/*         <div class="alert alert-default alert-edit clearfix" role="alert">*/
/*           <div class="alert-header">*/
/*             <i class="icon-click es-icon es-icon-chevronright"></i>*/
/*             <span class="title">*/
/*               {{ announcement.content|plain_text(40) }}*/
/*             </span>*/
/*             */
/*             {% if canManage %}*/
/* 	            <span class="editor">*/
/*                 {{ announcement.createdTime|date('Y-m-d') }}*/
/* 	              <a class="mlm" data-target="#modal"  data-toggle="modal" data-url="{{ path('announcement_update',{id:announcement.id, targetType:targetType,  targetId:targetId}) }}"><i class="es-icon es-icon-edit" data-toggle="tooltip" data-placement="top" title="编辑"></i></a>*/
/* 	              <a href="javascript:;" data-role="delete" data-url="{{ path('announcement_delete',{id:announcement.id, targetType:targetType, targetId:targetId}) }}"><i class="es-icon es-icon-delete ml10" data-toggle="tooltip" data-placement="top" title="删除"></i></a>*/
/*               </span>*/
/*             {% else %}*/
/*             	<span class="data">{{ announcement.createdTime|date('Y-m-d H:i:s') }}</span>*/
/*         	  {% endif %}*/
/*             */
/*           </div>*/
/*           <div class="details">*/
/*             {{ announcement.content|raw }}*/
/*           </div>*/
/*         </div>*/
/* */
/*   	{% endfor %}    */
/*   {% else %}*/
/* 		<div class="alert alert-edit">暂无公告</div>*/
/* 	{% endif %}*/
/*   </div>*/
/* */
/* 	<script>*/
/* 		app.load('announcement/announcement');*/
/* 	</script>*/
/* */
/* {% endblock %}*/
