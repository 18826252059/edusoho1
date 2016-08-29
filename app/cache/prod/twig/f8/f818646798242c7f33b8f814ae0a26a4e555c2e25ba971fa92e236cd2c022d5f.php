<?php

/* TopxiaWebBundle:Group:search.html.twig */
class __TwigTemplate_3940cd11199fb507bcf32a3db1b45e5f3c97c75524013ff45c46cbe6c92f50b9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Group:layout.html.twig", "TopxiaWebBundle:Group:search.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Group:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "搜索 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "  <ol class=\"breadcrumb breadcrumb-o\" style=\"margin-top:-18px\">
    <li><a href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("homepage.name", "首页"), "html", null, true);
        echo "</a></li>
    <li><a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("group");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("group.name", "小组主页"), "html", null, true);
        echo "</a></li>
    <li><a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("group_search_group");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("search.name", "搜索小组"), "html", null, true);
        echo "</a></li>
  </ol>
  
  <div class=\"row\">
    <div class=\"col-md-9 group-main\">
      <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
          <h3 class=\"panel-title\">所有小组</h3>
        </div>

        <div class=\"panel-body\">
          ";
        // line 18
        if ((isset($context["groups"]) ? $context["groups"] : null)) {
            // line 19
            echo "          <div class=\"row\">
            ";
            // line 20
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 21
                echo "              ";
                $this->loadTemplate("TopxiaWebBundle:Group:group-media-small.html.twig", "TopxiaWebBundle:Group:search.html.twig", 21)->display($context);
                // line 22
                echo "            ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "          </div>
          <div class=\"text-center\">
            ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
            echo "
          </div>
          ";
        } else {
            // line 28
            echo "          <div class=\"empty\">暂无小组信息</div>
          ";
        }
        // line 30
        echo "
        </div>
      </div>
    </div>
    ";
        // line 34
        $this->loadTemplate("TopxiaWebBundle:Group:sidebar.html.twig", "TopxiaWebBundle:Group:search.html.twig", 34)->display($context);
        // line 35
        echo "  </div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Group:search.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 35,  129 => 34,  123 => 30,  119 => 28,  113 => 25,  109 => 23,  95 => 22,  92 => 21,  75 => 20,  72 => 19,  70 => 18,  54 => 7,  48 => 6,  42 => 5,  39 => 4,  36 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:Group:layout.html.twig' %}*/
/* {% block title %}搜索 - {{ parent() }}{% endblock %}*/
/* {% block content %}*/
/*   <ol class="breadcrumb breadcrumb-o" style="margin-top:-18px">*/
/*     <li><a href="{{path('homepage')}}">{{ setting('homepage.name', '首页') }}</a></li>*/
/*     <li><a href="{{path('group')}}">{{setting('group.name', '小组主页')}}</a></li>*/
/*     <li><a href="{{path('group_search_group')}}">{{setting('search.name', '搜索小组')}}</a></li>*/
/*   </ol>*/
/*   */
/*   <div class="row">*/
/*     <div class="col-md-9 group-main">*/
/*       <div class="panel panel-default">*/
/*         <div class="panel-heading">*/
/*           <h3 class="panel-title">所有小组</h3>*/
/*         </div>*/
/* */
/*         <div class="panel-body">*/
/*           {% if groups %}*/
/*           <div class="row">*/
/*             {% for group in groups %}*/
/*               {% include 'TopxiaWebBundle:Group:group-media-small.html.twig'  %}*/
/*             {% endfor %}*/
/*           </div>*/
/*           <div class="text-center">*/
/*             {{ web_macro.paginator(paginator) }}*/
/*           </div>*/
/*           {% else %}*/
/*           <div class="empty">暂无小组信息</div>*/
/*           {% endif %}*/
/* */
/*         </div>*/
/*       </div>*/
/*     </div>*/
/*     {% include 'TopxiaWebBundle:Group:sidebar.html.twig' %}*/
/*   </div>*/
/* {% endblock %}*/
