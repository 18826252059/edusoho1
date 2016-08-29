<?php

/* TopxiaWebBundle:Search:index.html.twig */
class __TwigTemplate_10f7083d2c683ade6d48afed12d25f0ac9e51a5b9b00cc6af6d8039f9313809a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Search:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'top_content' => array($this, 'block_top_content'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        $context["bodyClass"] = "bg-blank";
        // line 5
        $this->env->getExtension('topxia_web_twig')->loadScript("search/search");
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "搜索：";
        if ((isset($context["keywords"]) ? $context["keywords"] : null)) {
            echo twig_escape_filter($this->env, (isset($context["keywords"]) ? $context["keywords"] : null), "html", null, true);
        } else {
            echo "全部课程";
        }
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 7
    public function block_top_content($context, array $blocks = array())
    {
        // line 8
        echo "  <div class=\"course-banner es-banner\">
    <div class=\"container\">
      <div class=\"title\">
        <span>搜索</span>SEARCH
      </div>
    </div>
  </div>
";
    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        // line 18
        echo "  
  <!-- 核心内容区 -->

  <div class=\"course-filter search-filter\" id=\"course-filter\">
    <div class=\"result-declare\">
      共找到<span>";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["count"]) ? $context["count"] : null), "html", null, true);
        echo "</span>门";
        if ((isset($context["keywords"]) ? $context["keywords"] : null)) {
            echo "<span>“";
            echo twig_escape_filter($this->env, (isset($context["keywords"]) ? $context["keywords"] : null), "html", null, true);
            echo "”</span>相关";
        }
        echo "课程
    </div>
    <ul class=\"nav nav-pills hidden-xs\" role=\"tablist\">
      <li role=\"presentation\" class=\"";
        // line 26
        if ( !(isset($context["fliter"]) ? $context["fliter"] : null)) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("search");
        echo "\">全部课程</a></li>
      ";
        // line 27
        if ((isset($context["isShowVipSearch"]) ? $context["isShowVipSearch"] : null)) {
            // line 28
            echo "        ";
            if ((isset($context["currentUserVipLevel"]) ? $context["currentUserVipLevel"] : null)) {
                // line 29
                echo "          <li role=\"presentation\" class=\"";
                if (((isset($context["fliter"]) ? $context["fliter"] : null) == "vip")) {
                    echo "active";
                }
                echo "\">
            <a href=\"";
                // line 30
                echo $this->env->getExtension('routing')->getPath("search", array("fliter" => "vip"));
                echo "\">会员课程</a>
          </li>
        ";
            }
            // line 33
            echo "      ";
        }
        // line 34
        echo "      <li role=\"presentation\" class=\"";
        if (((isset($context["fliter"]) ? $context["fliter"] : null) == "free")) {
            echo "active";
        }
        echo "\">
          <a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("search", array("fliter" => "free"));
        echo "\">免费课程</a>
      </li>
      <li role=\"presentation\" class=\"";
        // line 37
        if (((isset($context["fliter"]) ? $context["fliter"] : null) == "live")) {
            echo "active";
        }
        echo "\">
          <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("search", array("fliter" => "live"));
        echo "\">直播课程</a>
      </li>
    </ul>
    <div class=\"btn-group visible-xs\">
      <button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">";
        // line 42
        echo $this->env->getExtension('topxia_web_twig')->getDictText("searchCourseType", ((array_key_exists("fliter", $context)) ? (_twig_default_filter((isset($context["fliter"]) ? $context["fliter"] : null), "all")) : ("all")));
        echo " 
      <span class=\"caret\"></span></button>

      <ul class=\"dropdown-menu\" role=\"menu\">
        <li role=\"presentation\" class=\"";
        // line 46
        if ( !(isset($context["fliter"]) ? $context["fliter"] : null)) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("search");
        echo "\">全部课程</a></li>
        ";
        // line 47
        if ((isset($context["isShowVipSearch"]) ? $context["isShowVipSearch"] : null)) {
            // line 48
            echo "            ";
            if ((isset($context["currentUserVipLevel"]) ? $context["currentUserVipLevel"] : null)) {
                // line 49
                echo "              <li role=\"presentation\" class=\"";
                if (((isset($context["fliter"]) ? $context["fliter"] : null) == "vip")) {
                    echo "active";
                }
                echo "\">
                <a href=\"";
                // line 50
                echo $this->env->getExtension('routing')->getPath("search", array("fliter" => "vip"));
                echo "\">会员课程</a>
              </li>
          ";
            }
            // line 53
            echo "        ";
        }
        // line 54
        echo "        <li role=\"presentation\" class=\"";
        if (((isset($context["fliter"]) ? $context["fliter"] : null) == "free")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 55
        echo $this->env->getExtension('routing')->getPath("search", array("fliter" => "free"));
        echo "\">免费课程</a>
        </li>
        <li role=\"presentation\" class=\"";
        // line 57
        if (((isset($context["fliter"]) ? $context["fliter"] : null) == "live")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("search", array("fliter" => "live"));
        echo "\">直播课程</a>
        </li>
      </ul>
    </div>

  </div>

    <!-- 课程列表 -->
  <div class=\"course-list\">
      ";
        // line 67
        if ((isset($context["courses"]) ? $context["courses"] : null)) {
            // line 68
            echo "        <div class=\"row\">
          ";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                // line 70
                echo "            <div class=\"col-lg-3 col-md-4 col-sm-6\">
              ";
                // line 71
                $this->loadTemplate("TopxiaWebBundle:Course:Widget/course-grid.html.twig", "TopxiaWebBundle:Search:index.html.twig", 71)->display(array_merge($context, array("course" => $context["course"])));
                // line 72
                echo "            </div>
          ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "        </div>
      ";
        } else {
            // line 76
            echo "        <div class=\"empty\">没有搜到相关课程，请换个关键词试试！</div>
      ";
        }
        // line 78
        echo "
  </div>

  <nav class=\"text-center\">
    ";
        // line 82
        if ((isset($context["courses"]) ? $context["courses"] : null)) {
            // line 83
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
            echo " 
    ";
        }
        // line 85
        echo "  </nav>

  <!-- /核心内容区 -->

";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Search:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 85,  262 => 83,  260 => 82,  254 => 78,  250 => 76,  246 => 74,  231 => 72,  229 => 71,  226 => 70,  209 => 69,  206 => 68,  204 => 67,  192 => 58,  186 => 57,  181 => 55,  174 => 54,  171 => 53,  165 => 50,  158 => 49,  155 => 48,  153 => 47,  145 => 46,  138 => 42,  131 => 38,  125 => 37,  120 => 35,  113 => 34,  110 => 33,  104 => 30,  97 => 29,  94 => 28,  92 => 27,  84 => 26,  72 => 23,  65 => 18,  62 => 17,  51 => 8,  48 => 7,  35 => 3,  31 => 1,  29 => 5,  27 => 4,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::layout.html.twig' %}*/
/* */
/* {% block title %}搜索：{% if keywords %}{{ keywords }}{% else %}全部课程{% endif %} - {{ parent() }}{% endblock %}*/
/* {% set bodyClass = 'bg-blank' %}*/
/* {% do load_script('search/search') %}*/
/* */
/* {% block top_content %}*/
/*   <div class="course-banner es-banner">*/
/*     <div class="container">*/
/*       <div class="title">*/
/*         <span>搜索</span>SEARCH*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*   */
/*   <!-- 核心内容区 -->*/
/* */
/*   <div class="course-filter search-filter" id="course-filter">*/
/*     <div class="result-declare">*/
/*       共找到<span>{{ count }}</span>门{% if keywords %}<span>“{{ keywords }}”</span>相关{% endif %}课程*/
/*     </div>*/
/*     <ul class="nav nav-pills hidden-xs" role="tablist">*/
/*       <li role="presentation" class="{% if not fliter %}active{% endif %}"><a href="{{ path('search') }}">全部课程</a></li>*/
/*       {% if isShowVipSearch  %}*/
/*         {% if currentUserVipLevel  %}*/
/*           <li role="presentation" class="{% if fliter == 'vip' %}active{% endif %}">*/
/*             <a href="{{ path('search',{fliter:'vip'}) }}">会员课程</a>*/
/*           </li>*/
/*         {% endif %}*/
/*       {% endif %}*/
/*       <li role="presentation" class="{% if fliter == 'free' %}active{% endif %}">*/
/*           <a href="{{ path('search',{fliter:'free'}) }}">免费课程</a>*/
/*       </li>*/
/*       <li role="presentation" class="{% if fliter == 'live' %}active{% endif %}">*/
/*           <a href="{{ path('search',{fliter:'live'}) }}">直播课程</a>*/
/*       </li>*/
/*     </ul>*/
/*     <div class="btn-group visible-xs">*/
/*       <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false">{{ dict_text('searchCourseType',fliter|default('all')) }} */
/*       <span class="caret"></span></button>*/
/* */
/*       <ul class="dropdown-menu" role="menu">*/
/*         <li role="presentation" class="{% if not fliter %}active{% endif %}"><a href="{{ path('search') }}">全部课程</a></li>*/
/*         {% if isShowVipSearch  %}*/
/*             {% if currentUserVipLevel  %}*/
/*               <li role="presentation" class="{% if fliter == 'vip' %}active{% endif %}">*/
/*                 <a href="{{ path('search',{fliter:'vip'}) }}">会员课程</a>*/
/*               </li>*/
/*           {% endif %}*/
/*         {% endif %}*/
/*         <li role="presentation" class="{% if fliter == 'free' %}active{% endif %}">*/
/*             <a href="{{ path('search',{fliter:'free'}) }}">免费课程</a>*/
/*         </li>*/
/*         <li role="presentation" class="{% if fliter == 'live' %}active{% endif %}">*/
/*             <a href="{{ path('search',{fliter:'live'}) }}">直播课程</a>*/
/*         </li>*/
/*       </ul>*/
/*     </div>*/
/* */
/*   </div>*/
/* */
/*     <!-- 课程列表 -->*/
/*   <div class="course-list">*/
/*       {% if courses %}*/
/*         <div class="row">*/
/*           {% for course in courses %}*/
/*             <div class="col-lg-3 col-md-4 col-sm-6">*/
/*               {% include 'TopxiaWebBundle:Course:Widget/course-grid.html.twig' with {course:course}%}*/
/*             </div>*/
/*           {% endfor %}*/
/*         </div>*/
/*       {% else %}*/
/*         <div class="empty">没有搜到相关课程，请换个关键词试试！</div>*/
/*       {% endif %}*/
/* */
/*   </div>*/
/* */
/*   <nav class="text-center">*/
/*     {% if courses %}*/
/*     {{ web_macro.paginator(paginator) }} */
/*     {% endif %}*/
/*   </nav>*/
/* */
/*   <!-- /核心内容区 -->*/
/* */
/* {% endblock %}*/
