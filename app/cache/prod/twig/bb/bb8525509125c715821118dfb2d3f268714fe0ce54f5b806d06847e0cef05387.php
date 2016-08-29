<?php

/* TopxiaAdminBundle:Announcement:index.html.twig */
class __TwigTemplate_ade37c6b1ad2360c5333dbe3b86c06e572497cad4060a819777696cbd0258835 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Announcement:index.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["script_controller"] = "announcement/index";
        // line 5
        $context["menu"] = "admin_announcement";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
        <table id=\"announcement-table\" class=\"table table-striped\">
          <thead>
            <tr>
              <th width=\"28%\">公告信息</th>
              <th>发布时间</th>
              <th>结束时间</th>
              <th>状态</th>
              <th>发布人</th>
              <th>操作</th>
            </tr>
          </thead>
          <tbody>
          ";
        // line 21
        if ((isset($context["announcements"]) ? $context["announcements"] : null)) {
            // line 22
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["announcements"]) ? $context["announcements"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["announcement"]) {
                // line 23
                echo "            <tr>
              <td><a href=\"";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["announcement"], "url", array()), "html", null, true);
                echo "\" target=\"_content\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["announcement"], "content", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 25
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["announcement"], "startTime", array()), "Y-m-d H:i"), "html", null, true);
                echo "</td>
              <td>";
                // line 26
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["announcement"], "endTime", array()), "Y-m-d H:i"), "html", null, true);
                echo "</td>
              <td>
                ";
                // line 28
                if (((isset($context["now"]) ? $context["now"] : null) < $this->getAttribute($context["announcement"], "startTime", array()))) {
                    // line 29
                    echo "                  即将开始
                ";
                } elseif ((                // line 30
(isset($context["now"]) ? $context["now"] : null) > $this->getAttribute($context["announcement"], "endTime", array()))) {
                    // line 31
                    echo "                  已结束
                ";
                } else {
                    // line 33
                    echo "                  显示中
                ";
                }
                // line 35
                echo "              </td>
              <td>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["announcement"], "userId", array()), array(), "array"), "nickname", array()), "html", null, true);
                echo "</td>
              <td>  
                <div class=\"btn-group\">
                  <a  data-url=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_announcement_edit", array("id" => $this->getAttribute($context["announcement"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-default btn-sm\"  data-toggle=\"modal\" data-target=\"#modal\">编辑</a>
                  <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
                    <span class=\"caret\"></span>
                  </a>
                  <ul class=\"dropdown-menu\">
                   <li><a href=\"javascript::\" data-url=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_announcement_delete", array("id" => $this->getAttribute($context["announcement"], "id", array()))), "html", null, true);
                echo "\" class=\"delete-btn\"><span class=\"glyphicon glyphicon-trash\"></span> 删除</a></li>
                   
                </ul>
                </div>
            </td>
            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['announcement'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "          ";
        }
        // line 52
        echo "          </tbody>
        </table>

        ";
        // line 55
        if ( !(isset($context["announcements"]) ? $context["announcements"] : null)) {
            // line 56
            echo "        <div class=\"empty\">暂无公告</div>
        ";
        }
        // line 58
        echo "
        ";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
   
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Announcement:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 59,  135 => 58,  131 => 56,  129 => 55,  124 => 52,  121 => 51,  108 => 44,  100 => 39,  94 => 36,  91 => 35,  87 => 33,  83 => 31,  81 => 30,  78 => 29,  76 => 28,  71 => 26,  67 => 25,  61 => 24,  58 => 23,  53 => 22,  51 => 21,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set script_controller = 'announcement/index' %}*/
/* */
/* {% set menu = 'admin_announcement' %}*/
/* */
/* {% block main %}*/
/* */
/*         <table id="announcement-table" class="table table-striped">*/
/*           <thead>*/
/*             <tr>*/
/*               <th width="28%">公告信息</th>*/
/*               <th>发布时间</th>*/
/*               <th>结束时间</th>*/
/*               <th>状态</th>*/
/*               <th>发布人</th>*/
/*               <th>操作</th>*/
/*             </tr>*/
/*           </thead>*/
/*           <tbody>*/
/*           {% if announcements %}*/
/*             {% for announcement in announcements %}*/
/*             <tr>*/
/*               <td><a href="{{announcement.url}}" target="_content">{{announcement.content}}</td>*/
/*               <td>{{announcement.startTime|date('Y-m-d H:i')}}</td>*/
/*               <td>{{announcement.endTime|date('Y-m-d H:i')}}</td>*/
/*               <td>*/
/*                 {% if now < announcement.startTime %}*/
/*                   即将开始*/
/*                 {% elseif now > announcement.endTime  %}*/
/*                   已结束*/
/*                 {% else %}*/
/*                   显示中*/
/*                 {% endif %}*/
/*               </td>*/
/*               <td>{{users[announcement.userId].nickname}}</td>*/
/*               <td>  */
/*                 <div class="btn-group">*/
/*                   <a  data-url="{{ path('admin_announcement_edit',{id:announcement.id}) }}" class="btn btn-default btn-sm"  data-toggle="modal" data-target="#modal">编辑</a>*/
/*                   <a href="#" type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown">*/
/*                     <span class="caret"></span>*/
/*                   </a>*/
/*                   <ul class="dropdown-menu">*/
/*                    <li><a href="javascript::" data-url="{{path('admin_announcement_delete',{id:announcement.id})}}" class="delete-btn"><span class="glyphicon glyphicon-trash"></span> 删除</a></li>*/
/*                    */
/*                 </ul>*/
/*                 </div>*/
/*             </td>*/
/*             </tr>*/
/*             {% endfor %}*/
/*           {% endif %}*/
/*           </tbody>*/
/*         </table>*/
/* */
/*         {% if not announcements %}*/
/*         <div class="empty">暂无公告</div>*/
/*         {% endif %}*/
/* */
/*         {{ web_macro.paginator(paginator) }}*/
/*    */
/* {% endblock %}*/
