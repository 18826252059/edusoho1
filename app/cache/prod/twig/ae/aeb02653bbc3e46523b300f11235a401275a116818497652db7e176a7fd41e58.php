<?php

/* TopxiaAdminBundle:Tag:index.html.twig */
class __TwigTemplate_2c24271c3ba0776fff51e6115eec554f887cccdf3b0bc1da3f2261089e0e6b60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Tag:index.html.twig", 1);
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
        $context["menu"] = "admin_course_tag";
        // line 4
        $context["script_controller"] = "tag/list";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        // line 6
        echo "
<table id=\"tag-table\" class=\"table table-striped\">
    <thead>
        <th width=\"10%\">ID</th>
        <th width=\"60%\">名称</th>
        <th width=\"20%\">添加时间</th>
        <th width=\"10%\">操作</th>
    </thead>
    <tbody>
      ";
        // line 15
        if ((isset($context["tags"]) ? $context["tags"] : null)) {
            // line 16
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
                // line 17
                echo "          ";
                $this->loadTemplate("TopxiaAdminBundle:Tag:list-tr.html.twig", "TopxiaAdminBundle:Tag:index.html.twig", 17)->display($context);
                // line 18
                echo "        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "      ";
        } else {
            // line 20
            echo "       <tr><td colspan=\"20\"><div class=\"empty\">暂无标签记录</div></td></tr>
      ";
        }
        // line 22
        echo "
    </tbody>
</table>

";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "


";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Tag:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 26,  91 => 22,  87 => 20,  84 => 19,  70 => 18,  67 => 17,  49 => 16,  47 => 15,  36 => 6,  33 => 5,  29 => 1,  27 => 4,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set menu = 'admin_course_tag' %}*/
/* {% set script_controller = 'tag/list' %}*/
/* {% block main %}*/
/* */
/* <table id="tag-table" class="table table-striped">*/
/*     <thead>*/
/*         <th width="10%">ID</th>*/
/*         <th width="60%">名称</th>*/
/*         <th width="20%">添加时间</th>*/
/*         <th width="10%">操作</th>*/
/*     </thead>*/
/*     <tbody>*/
/*       {% if tags %}*/
/*         {% for tag in tags %}*/
/*           {% include 'TopxiaAdminBundle:Tag:list-tr.html.twig' %}*/
/*         {% endfor %}*/
/*       {% else %}*/
/*        <tr><td colspan="20"><div class="empty">暂无标签记录</div></td></tr>*/
/*       {% endif %}*/
/* */
/*     </tbody>*/
/* </table>*/
/* */
/* {{ web_macro.paginator(paginator) }}*/
/* */
/* */
/* {% endblock %}*/
