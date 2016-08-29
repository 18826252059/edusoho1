<?php

/* TopxiaAdminBundle:Teacher:index.html.twig */
class __TwigTemplate_300a0ebe2241ea2aa06f8eec8df7b467f5de207e98a38b8ffbbca65b4c1e7200 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Teacher:index.html.twig", 1);
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
        $context["menu"] = "admin_teacher";
        // line 5
        $context["script_controller"] = "user/teacher-list";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        // line 8
        echo "
<table id=\"teacher-table\" class=\"table table-striped table-hover\" data-search-form=\"#user-search-form\">
  <thead>
    <tr>
      <th>用户名</th>
      <th>推荐教师</th>
      <th>最近登录</th>
      <th>操作</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 19
        if ((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users"))) {
            // line 20
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 21
                echo "        ";
                $this->loadTemplate("TopxiaAdminBundle:Teacher:tr.html.twig", "TopxiaAdminBundle:Teacher:index.html.twig", 21)->display(array_merge($context, array("user" => $context["user"])));
                // line 22
                echo "      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "    ";
        } else {
            // line 24
            echo "       <tr><td colspan=\"20\"><div class=\"empty\">暂无教师记录</div></td></tr>
    ";
        }
        // line 26
        echo "  </tbody>
</table>
 ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
        echo " 
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Teacher:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 28,  93 => 26,  89 => 24,  86 => 23,  72 => 22,  69 => 21,  51 => 20,  49 => 19,  36 => 8,  33 => 7,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set menu = 'admin_teacher' %}*/
/* */
/* {% set script_controller = 'user/teacher-list' %}*/
/* */
/* {% block main %}*/
/* */
/* <table id="teacher-table" class="table table-striped table-hover" data-search-form="#user-search-form">*/
/*   <thead>*/
/*     <tr>*/
/*       <th>用户名</th>*/
/*       <th>推荐教师</th>*/
/*       <th>最近登录</th>*/
/*       <th>操作</th>*/
/*     </tr>*/
/*   </thead>*/
/*   <tbody>*/
/*     {% if users %}*/
/*       {% for user in users %}*/
/*         {% include 'TopxiaAdminBundle:Teacher:tr.html.twig' with {user:user} %}*/
/*       {% endfor %}*/
/*     {% else %}*/
/*        <tr><td colspan="20"><div class="empty">暂无教师记录</div></td></tr>*/
/*     {% endif %}*/
/*   </tbody>*/
/* </table>*/
/*  {{ web_macro.paginator(paginator) }} */
/* {% endblock %}*/
