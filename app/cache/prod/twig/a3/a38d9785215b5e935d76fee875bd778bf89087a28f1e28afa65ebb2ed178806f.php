<?php

/* TopxiaWebBundle:Course:explore.html.twig */
class __TwigTemplate_fb9cbcfd58ae62a95013e97042620c7c1bd58d0814ba022d42639cb110b7184a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Course:explore.html.twig", 1);
        $this->blocks = array(
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
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
        // line 3
        $context["bodyClass"] = "course-list-page bg-blank";
        // line 4
        $context["siteNav"] = "course/explore";
        // line 5
        $context["script_controller"] = "course/explore";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 7
    public function block_keywords($context, array $blocks = array())
    {
        if ((isset($context["categoryArray"]) ? $context["categoryArray"] : null)) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categoryArray"]) ? $context["categoryArray"] : null), "name", array()), "html", null, true);
            if ((isset($context["categoryParent"]) ? $context["categoryParent"] : null)) {
                echo ",";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["categoryParent"]) ? $context["categoryParent"] : null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["categoryParent"]) ? $context["categoryParent"] : null), "name", array()), "")) : ("")), "html", null, true);
            }
        } else {
            echo "全部";
        }
    }

    // line 8
    public function block_description($context, array $blocks = array())
    {
        echo $this->env->getExtension('topxia_web_twig')->plainTextFilter(((array_key_exists("categoryArrayDescription", $context)) ? (_twig_default_filter((isset($context["categoryArrayDescription"]) ? $context["categoryArrayDescription"] : null), "")) : ("")), 100);
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["categoryArray"]) ? $context["categoryArray"] : null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["categoryArray"]) ? $context["categoryArray"] : null), "name", array()), "全部")) : ("全部")), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.name"), "html", null, true);
        if ($this->env->getExtension('topxia_web_twig')->getSetting("site.slogan")) {
            echo " - ";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("site.slogan"), "html", null, true);
        }
        if ( !$this->env->getExtension('topxia_web_twig')->getSetting("copyright.owned")) {
            echo " - Powered By 隆平现代农业科技服务有限公司";
        }
        // line 10
        echo "    ";
    }

    // line 12
    public function block_top_content($context, array $blocks = array())
    {
        // line 13
        echo "  <div class=\"es-banner\">
    <div class=\"container\">
      <div class=\"title\">
        <i class=\"es-icon es-icon-viewcomfy\"></i>
        课程列表
      </div>

      ";
        // line 20
        $context["classrooms"] = $this->env->getExtension('topxia_data_twig')->getData("Classrooms", array("count" => 1));
        // line 21
        echo "      ";
        if (((array_key_exists("classrooms", $context)) ? (_twig_default_filter((isset($context["classrooms"]) ? $context["classrooms"] : null), null)) : (null))) {
            // line 22
            echo "        <a class=\"btn btn-primary btn-lg more\" href=\"";
            echo $this->env->getExtension('routing')->getPath("classroom_explore");
            echo "\">
          查看";
            // line 23
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "
        </a>
      ";
        }
        // line 26
        echo "    </div>
  </div>
";
    }

    // line 30
    public function block_content($context, array $blocks = array())
    {
        // line 31
        echo "  ";
        $context["type"] = (($this->getAttribute((isset($context["fliter"]) ? $context["fliter"] : null), "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["fliter"]) ? $context["fliter"] : null), "type", array()), "all")) : ("all"));
        // line 32
        echo "  ";
        $context["price"] = (($this->getAttribute((isset($context["fliter"]) ? $context["fliter"] : null), "price", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["fliter"]) ? $context["fliter"] : null), "price", array()), "all")) : ("all"));
        // line 33
        echo "  ";
        $context["orderBy"] = ((array_key_exists("orderBy", $context)) ? (_twig_default_filter((isset($context["orderBy"]) ? $context["orderBy"] : null), "latest")) : ("latest"));
        // line 34
        echo "  ";
        $context["currentLevelId"] = (($this->getAttribute((isset($context["fliter"]) ? $context["fliter"] : null), "currentLevelId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["fliter"]) ? $context["fliter"] : null), "currentLevelId", array()), "all")) : ("all"));
        // line 35
        echo "  ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Category:treeNav", array("category" => ((array_key_exists("category", $context)) ? (_twig_default_filter((isset($context["category"]) ? $context["category"] : null), "")) : ("")), "path" => "course_explore", "fliter" => array("type" => (isset($context["type"]) ? $context["type"] : null), "price" => (isset($context["price"]) ? $context["price"] : null), "currentLevelId" => (isset($context["currentLevelId"]) ? $context["currentLevelId"] : null)), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null))));
        echo "
  <div class=\"es-filter\">
    <ul class=\"nav nav-sort\">
      <li>
        <a href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_explore", array("category" => (isset($context["category"]) ? $context["category"] : null), "fliter" => array("type" => (isset($context["type"]) ? $context["type"] : null), "price" => (isset($context["price"]) ? $context["price"] : null), "currentLevelId" => (isset($context["currentLevelId"]) ? $context["currentLevelId"] : null)), "orderBy" => "latest")), "html", null, true);
        echo "\" class=\"";
        if (((isset($context["orderBy"]) ? $context["orderBy"] : null) == "latest")) {
            echo " active ";
        }
        echo "\">
          最新
        </a>
      </li>
      <li>
        <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_explore", array("category" => (isset($context["category"]) ? $context["category"] : null), "fliter" => array("type" => (isset($context["type"]) ? $context["type"] : null), "price" => (isset($context["price"]) ? $context["price"] : null), "currentLevelId" => (isset($context["currentLevelId"]) ? $context["currentLevelId"] : null)), "orderBy" => "studentNum")), "html", null, true);
        echo "\" class=\"";
        if (((isset($context["orderBy"]) ? $context["orderBy"] : null) == "studentNum")) {
            echo " active ";
        }
        echo "\">
          最热
        </a>
      </li>
      <li>
        <a href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_explore", array("category" => (isset($context["category"]) ? $context["category"] : null), "fliter" => array("type" => (isset($context["type"]) ? $context["type"] : null), "price" => (isset($context["price"]) ? $context["price"] : null), "currentLevelId" => (isset($context["currentLevelId"]) ? $context["currentLevelId"] : null)), "orderBy" => "recommendedSeq")), "html", null, true);
        echo "\" class=\"";
        if (((isset($context["orderBy"]) ? $context["orderBy"] : null) == "recommendedSeq")) {
            echo " active ";
        }
        echo "\">
          推荐
        </a>
      </li>
    </ul>
    <div class=\"filter hidden-xs\">
      ";
        // line 55
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("vip")) {
            // line 56
            echo "        <div class=\"btn-group\">
          <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\"><i class=\"es-icon es-icon-crown text-warning\"></i>
            ";
            // line 58
            if (((isset($context["currentLevelId"]) ? $context["currentLevelId"] : null) == "all")) {
                echo "会员课程";
            }
            // line 59
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["levels"]) ? $context["levels"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["level"]) {
                if (($this->getAttribute($context["level"], "id", array()) == (isset($context["currentLevelId"]) ? $context["currentLevelId"] : null))) {
                    echo twig_escape_filter($this->env, $this->getAttribute($context["level"], "name", array()), "html", null, true);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['level'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "          </button>
          <ul class=\"dropdown-menu\" role=\"menu\">
          <li role=\"presentation\"class=\"";
            // line 62
            if (((isset($context["currentLevelId"]) ? $context["currentLevelId"] : null) == "all")) {
                echo "active ";
            }
            echo "\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_explore", array("category" => (isset($context["category"]) ? $context["category"] : null), "fliter" => array("type" => (isset($context["type"]) ? $context["type"] : null), "price" => (isset($context["price"]) ? $context["price"] : null), "currentLevelId" => "all"), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null))), "html", null, true);
            echo "\">全部</a></li>
          ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["levels"]) ? $context["levels"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["level"]) {
                // line 64
                echo "            <li role=\"presentation\"class=\"";
                if (($this->getAttribute($context["level"], "id", array()) == (isset($context["currentLevelId"]) ? $context["currentLevelId"] : null))) {
                    echo "active ";
                }
                echo "\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_explore", array("category" => (isset($context["category"]) ? $context["category"] : null), "fliter" => array("type" => (isset($context["type"]) ? $context["type"] : null), "price" => (isset($context["price"]) ? $context["price"] : null), "currentLevelId" => $this->getAttribute($context["level"], "id", array())), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["level"], "name", array()), "html", null, true);
                echo "</a></li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['level'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 66
            echo "          </ul>
        </div>
      ";
        }
        // line 69
        echo "      ";
        // line 70
        echo "        ";
        // line 71
        echo "        ";
        // line 72
        echo "          ";
        // line 73
        echo "        ";
        // line 74
        echo "          ";
        // line 75
        echo "        ";
        // line 76
        echo "      ";
        // line 77
        echo "      <label class=\"checkbox-inline\">
        <input type=\"checkbox\" ";
        // line 78
        if (((isset($context["price"]) ? $context["price"] : null) == "free")) {
            echo "checked=\"true\" ";
        }
        echo " id=\"free\" value=\"
        ";
        // line 79
        if (((isset($context["price"]) ? $context["price"] : null) == "all")) {
            // line 80
            echo "          ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_explore", array("category" => (isset($context["category"]) ? $context["category"] : null), "fliter" => array("type" => (isset($context["type"]) ? $context["type"] : null), "price" => "free", "currentLevelId" => (isset($context["currentLevelId"]) ? $context["currentLevelId"] : null)), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null))), "html", null, true);
            echo "
        ";
        } else {
            // line 81
            echo " 
          ";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_explore", array("category" => (isset($context["category"]) ? $context["category"] : null), "fliter" => array("type" => (isset($context["type"]) ? $context["type"] : null), "price" => "all", "currentLevelId" => (isset($context["currentLevelId"]) ? $context["currentLevelId"] : null)), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null))), "html", null, true);
            echo "
        ";
        }
        // line 84
        echo "        \"> 免费课程
      </label>
    </div>
  </div>

  <div class=\"course-list\">
    <div class=\"row\">
      ";
        // line 91
        if ((isset($context["courses"]) ? $context["courses"] : null)) {
            // line 92
            echo "        ";
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
                // line 93
                echo "          <div class=\"col-lg-3 col-md-4 col-sm-6\">
            ";
                // line 94
                $this->loadTemplate("TopxiaWebBundle:Course:Widget/course-grid.html.twig", "TopxiaWebBundle:Course:explore.html.twig", 94)->display($context);
                // line 95
                echo "          </div>
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
            // line 97
            echo "      ";
        } else {
            // line 98
            echo "        <div class=\"empty\">该分类下无课程</div>
      ";
        }
        // line 100
        echo "    </div>
  </div>
  <nav class=\"text-center\">
    ";
        // line 103
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
  </nav>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:explore.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 103,  325 => 100,  321 => 98,  318 => 97,  303 => 95,  301 => 94,  298 => 93,  280 => 92,  278 => 91,  269 => 84,  264 => 82,  261 => 81,  255 => 80,  253 => 79,  247 => 78,  244 => 77,  242 => 76,  240 => 75,  238 => 74,  236 => 73,  234 => 72,  232 => 71,  230 => 70,  228 => 69,  223 => 66,  208 => 64,  204 => 63,  196 => 62,  192 => 60,  180 => 59,  176 => 58,  172 => 56,  170 => 55,  157 => 49,  145 => 44,  133 => 39,  125 => 35,  122 => 34,  119 => 33,  116 => 32,  113 => 31,  110 => 30,  104 => 26,  98 => 23,  93 => 22,  90 => 21,  88 => 20,  79 => 13,  76 => 12,  72 => 10,  59 => 9,  53 => 8,  39 => 7,  35 => 1,  33 => 5,  31 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::layout.html.twig' %}*/
/* */
/* {% set bodyClass = 'course-list-page bg-blank' %}*/
/* {% set siteNav = 'course/explore' %}*/
/* {% set script_controller = 'course/explore' %}*/
/* */
/* {% block keywords %}{% if categoryArray %}{{categoryArray.name}}{% if categoryParent %}{{ ','}}{{ categoryParent.name|default('') }}{% endif %}{% else %}{{ '全部' }}{% endif %}{% endblock %}*/
/*   {% block description %}{{ categoryArrayDescription|default('')|plain_text(100) }}{% endblock %}*/
/*     {% block title %}{{ categoryArray.name|default('全部') }} - {{setting('site.name')}}{% if setting('site.slogan') %}{{' - '}}{{setting('site.slogan')}}{% endif %}{% if not setting('copyright.owned') %} - Powered By 隆平现代农业科技服务有限公司{% endif %}*/
/*     {% endblock %}*/
/* */
/* {% block top_content %}*/
/*   <div class="es-banner">*/
/*     <div class="container">*/
/*       <div class="title">*/
/*         <i class="es-icon es-icon-viewcomfy"></i>*/
/*         课程列表*/
/*       </div>*/
/* */
/*       {% set classrooms = data('Classrooms',{count:1}) %}*/
/*       {% if classrooms|default(null) %}*/
/*         <a class="btn btn-primary btn-lg more" href="{{path('classroom_explore')}}">*/
/*           查看{{ setting('classroom.name')|default('班级') }}*/
/*         </a>*/
/*       {% endif %}*/
/*     </div>*/
/*   </div>*/
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*   {% set type = fliter.type|default('all') %}*/
/*   {% set price = fliter.price|default('all')%}*/
/*   {% set orderBy = orderBy|default('latest')%}*/
/*   {% set currentLevelId = fliter.currentLevelId|default('all')%}*/
/*   {{ render(controller('TopxiaWebBundle:Category:treeNav',{category:category|default(''), path:'course_explore',fliter:{type: type,price: price,currentLevelId: currentLevelId},orderBy:orderBy})) }}*/
/*   <div class="es-filter">*/
/*     <ul class="nav nav-sort">*/
/*       <li>*/
/*         <a href="{{ path('course_explore', {category:category, fliter: {type: type,price: price,currentLevelId: currentLevelId},orderBy: 'latest'}) }}" class="{% if (orderBy == 'latest') %} active {% endif %}">*/
/*           最新*/
/*         </a>*/
/*       </li>*/
/*       <li>*/
/*         <a href="{{ path('course_explore', {category:category, fliter: {type: type,price: price,currentLevelId: currentLevelId},orderBy: 'studentNum'}) }}" class="{% if (orderBy == 'studentNum') %} active {% endif %}">*/
/*           最热*/
/*         </a>*/
/*       </li>*/
/*       <li>*/
/*         <a href="{{ path('course_explore', {category:category, fliter: {type: type,price: price,currentLevelId: currentLevelId},orderBy: 'recommendedSeq'}) }}" class="{% if (orderBy == 'recommendedSeq') %} active {% endif %}">*/
/*           推荐*/
/*         </a>*/
/*       </li>*/
/*     </ul>*/
/*     <div class="filter hidden-xs">*/
/*       {% if is_plugin_installed('vip')%}*/
/*         <div class="btn-group">*/
/*           <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="es-icon es-icon-crown text-warning"></i>*/
/*             {% if (currentLevelId == 'all') %}会员课程{% endif %}*/
/*             {% for level in levels%}{% if (level.id == currentLevelId) %}{{level.name}}{% endif %}{% endfor %}*/
/*           </button>*/
/*           <ul class="dropdown-menu" role="menu">*/
/*           <li role="presentation"class="{% if (currentLevelId == 'all') %}active {% endif %}"><a href="{{ path('course_explore', {category:category, fliter: {type: type,price: price,currentLevelId: 'all'},orderBy: orderBy}) }}">全部</a></li>*/
/*           {% for level in levels %}*/
/*             <li role="presentation"class="{% if (level.id == currentLevelId) %}active {% endif %}"><a href="{{ path('course_explore', {category:category, fliter: {type: type,price: price,currentLevelId: level.id},orderBy: orderBy}) }}">{{level.name}}</a></li>*/
/*           {% endfor %}*/
/*           </ul>*/
/*         </div>*/
/*       {% endif %}*/
/*       {#<label class="checkbox-inline">#}*/
/*         {#<input type="checkbox" {% if type == 'live'%}checked="true" {% endif %} id="live" value="#}*/
/*         {#{% if type == 'all'%}#}*/
/*           {#{{ path('course_explore', {category:category, fliter: {type: 'live',price: price,currentLevelId: currentLevelId},orderBy: orderBy}) }} #}*/
/*         {#{% else %} #}*/
/*           {#{{ path('course_explore', {category:category, fliter: {type: 'all',price: price,currentLevelId: currentLevelId},orderBy: orderBy}) }} #}*/
/*         {#{% endif %}"> 直播课程#}*/
/*       {#</label>#}*/
/*       <label class="checkbox-inline">*/
/*         <input type="checkbox" {% if price == 'free'%}checked="true" {% endif %} id="free" value="*/
/*         {% if price == 'all'%}*/
/*           {{ path('course_explore', {category:category, fliter: {type: type,price: 'free',currentLevelId: currentLevelId},orderBy: orderBy}) }}*/
/*         {% else %} */
/*           {{ path('course_explore', {category:category, fliter: {type: type,price: 'all',currentLevelId: currentLevelId},orderBy: orderBy}) }}*/
/*         {% endif %}*/
/*         "> 免费课程*/
/*       </label>*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="course-list">*/
/*     <div class="row">*/
/*       {% if courses %}*/
/*         {% for course in courses %}*/
/*           <div class="col-lg-3 col-md-4 col-sm-6">*/
/*             {% include 'TopxiaWebBundle:Course:Widget/course-grid.html.twig' %}*/
/*           </div>*/
/*         {% endfor %}*/
/*       {% else %}*/
/*         <div class="empty">该分类下无课程</div>*/
/*       {% endif %}*/
/*     </div>*/
/*   </div>*/
/*   <nav class="text-center">*/
/*     {{ web_macro.paginator(paginator) }}*/
/*   </nav>*/
/* {% endblock %}*/
