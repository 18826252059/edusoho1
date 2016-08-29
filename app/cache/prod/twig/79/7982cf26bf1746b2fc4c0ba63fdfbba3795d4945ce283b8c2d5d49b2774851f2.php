<?php

/* TopxiaWebBundle:Course:announcement-show-all-modal.html.twig */
class __TwigTemplate_4660fa4556a1de9c351b6318e5ccb0145601291211fee7a5263b8095f6cd39d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:Course:announcement-show-all-modal.html.twig", 1);
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
        // line 38
        $context["hideFooter"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "查看本课程的所有公告";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
<table class=\"table table-bordered\">
        <thead>
          <tr>
            <th>创建者</th>
            <th>公告内容</th>
            <th>创建时间</th>
            <th>更新时间</th>
          </tr>
        </thead>
        <tbody>
        \t";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["announcements"]) ? $context["announcements"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["announcement"]) {
            // line 18
            echo "\t\t          <tr>
\t\t            <td > ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["announcement"], "userId", array()), array(), "array"), "nickname", array()), "html", null, true);
            echo " </td>
\t\t            <td>";
            // line 20
            echo $this->getAttribute($context["announcement"], "content", array());
            echo "</td>
\t\t            <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["announcement"], "createdTime", array()), "Y-n-d H:i:s"), "html", null, true);
            echo "</td>
\t\t            ";
            // line 22
            if (($this->getAttribute($context["announcement"], "updatedTime", array()) == 0)) {
                // line 23
                echo "\t\t               <td> 尚未更新</td> 
\t\t            ";
            } else {
                // line 25
                echo "\t\t            <td>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["announcement"], "createdTime", array()), "Y-n-d H:i:s"), "html", null, true);
                echo "</td>
\t\t            ";
            }
            // line 27
            echo "\t\t          </tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['announcement'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "        </tbody>
</table>

";
    }

    // line 34
    public function block_footer($context, array $blocks = array())
    {
        // line 35
        echo "    <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">退出</button>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:announcement-show-all-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 35,  100 => 34,  93 => 29,  86 => 27,  80 => 25,  76 => 23,  74 => 22,  70 => 21,  66 => 20,  62 => 19,  59 => 18,  55 => 17,  42 => 6,  39 => 5,  33 => 3,  29 => 1,  27 => 38,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% block title %}查看本课程的所有公告{% endblock %}*/
/* */
/* {% block body %}*/
/* */
/* <table class="table table-bordered">*/
/*         <thead>*/
/*           <tr>*/
/*             <th>创建者</th>*/
/*             <th>公告内容</th>*/
/*             <th>创建时间</th>*/
/*             <th>更新时间</th>*/
/*           </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         	{% for announcement in announcements %}*/
/* 		          <tr>*/
/* 		            <td > {{ users[announcement.userId].nickname}} </td>*/
/* 		            <td>{{ announcement.content | raw }}</td>*/
/* 		            <td>{{ announcement.createdTime|date('Y-n-d H:i:s')}}</td>*/
/* 		            {% if announcement.updatedTime == 0 %}*/
/* 		               <td> 尚未更新</td> */
/* 		            {% else %}*/
/* 		            <td>{{ announcement.createdTime|date('Y-n-d H:i:s')}}</td>*/
/* 		            {% endif %}*/
/* 		          </tr>*/
/* 			{% endfor %}*/
/*         </tbody>*/
/* </table>*/
/* */
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/*     <button type="button" class="btn btn-default" data-dismiss="modal">退出</button>*/
/* {% endblock %}*/
/* */
/* {% set hideFooter = true %}*/
/* */
