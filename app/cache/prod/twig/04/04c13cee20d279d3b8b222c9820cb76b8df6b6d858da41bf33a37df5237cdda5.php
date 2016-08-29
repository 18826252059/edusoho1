<?php

/* ClassroomBundle:Classroom:explore.html.twig */
class __TwigTemplate_4ab27d48f767bce6f4cd9d951ef3d1e0d2381b40206e35e4adc70aa4358375be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "ClassroomBundle:Classroom:explore.html.twig", 1);
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
        // line 2
        $context["bodyClass"] = "classroom-list-page bg-blank";
        // line 3
        $context["script_controller"] = "classroombundle/controller/classroom/explore";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
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

    // line 5
    public function block_description($context, array $blocks = array())
    {
        echo $this->env->getExtension('topxia_web_twig')->plainTextFilter(((array_key_exists("categoryArrayDescription", $context)) ? (_twig_default_filter((isset($context["categoryArrayDescription"]) ? $context["categoryArrayDescription"] : null), "")) : ("")), 100);
    }

    // line 6
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
        // line 7
        echo "    ";
    }

    // line 9
    public function block_top_content($context, array $blocks = array())
    {
        // line 10
        echo "  <div class=\"es-banner\">
    <div class=\"container\">
      <div class=\"title\">
        <i class=\"es-icon es-icon-viewcomfy\"></i>
        ";
        // line 14
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
        echo "列表
      </div>
      <a class=\"btn btn-primary btn-lg more\" href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("course_explore");
        echo "\">
        查看课程
      </a>
    </div>
  </div>
  
";
    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        // line 24
        echo "  ";
        $context["price"] = (($this->getAttribute((isset($context["fliter"]) ? $context["fliter"] : null), "price", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["fliter"]) ? $context["fliter"] : null), "price", array()), "all")) : ("all"));
        // line 25
        echo "  ";
        $context["orderBy"] = ((array_key_exists("orderBy", $context)) ? (_twig_default_filter((isset($context["orderBy"]) ? $context["orderBy"] : null), "createdTime")) : ("createdTime"));
        // line 26
        echo "  ";
        $context["currentLevelId"] = (($this->getAttribute((isset($context["fliter"]) ? $context["fliter"] : null), "currentLevelId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["fliter"]) ? $context["fliter"] : null), "currentLevelId", array()), "all")) : ("all"));
        // line 27
        echo "  ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TopxiaWebBundle:Category:treeNav", array("category" => (isset($context["category"]) ? $context["category"] : null), "path" => "classroom_explore", "fliter" => array("price" => (isset($context["price"]) ? $context["price"] : null), "currentLevelId" => (isset($context["currentLevelId"]) ? $context["currentLevelId"] : null)), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null))));
        echo "
  <div class=\"es-filter\">
    <ul class=\"nav nav-sort\">
      <li>
        <a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_explore", array("category" => (isset($context["category"]) ? $context["category"] : null), "fliter" => array("price" => (isset($context["price"]) ? $context["price"] : null), "currentLevelId" => (isset($context["currentLevelId"]) ? $context["currentLevelId"] : null)), "orderBy" => "createdTime")), "html", null, true);
        echo "\" class=\"";
        if (((isset($context["orderBy"]) ? $context["orderBy"] : null) == "createdTime")) {
            echo " active ";
        }
        echo "\">
          最新
        </a>
      </li>
      <li>
        <a href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_explore", array("category" => (isset($context["category"]) ? $context["category"] : null), "fliter" => array("price" => (isset($context["price"]) ? $context["price"] : null), "currentLevelId" => (isset($context["currentLevelId"]) ? $context["currentLevelId"] : null)), "orderBy" => "studentNum")), "html", null, true);
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
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_explore", array("category" => (isset($context["category"]) ? $context["category"] : null), "fliter" => array("price" => (isset($context["price"]) ? $context["price"] : null), "currentLevelId" => (isset($context["currentLevelId"]) ? $context["currentLevelId"] : null)), "orderBy" => "recommendedSeq")), "html", null, true);
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
        // line 47
        if ($this->env->getExtension('topxia_web_twig')->isPluginInstalled("vip")) {
            // line 48
            echo "        <div class=\"btn-group\">
          <button type=\"button\" class=\"btn dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\"><i class=\"es-icon es-icon-crown text-warning\"></i>
            ";
            // line 50
            if (((isset($context["currentLevelId"]) ? $context["currentLevelId"] : null) == "all")) {
                echo "会员";
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            }
            // line 51
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
            // line 52
            echo "          </button>
          <ul class=\"dropdown-menu\" role=\"menu\">
          <li role=\"presentation\"class=\"";
            // line 54
            if (((isset($context["currentLevelId"]) ? $context["currentLevelId"] : null) == "all")) {
                echo "active ";
            }
            echo "\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_explore", array("category" => (isset($context["category"]) ? $context["category"] : null), "fliter" => array("price" => (isset($context["price"]) ? $context["price"] : null), "currentLevelId" => "all"), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null))), "html", null, true);
            echo "\">全部</a></li>
          ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["levels"]) ? $context["levels"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["level"]) {
                // line 56
                echo "            <li role=\"presentation\"class=\"";
                if (($this->getAttribute($context["level"], "id", array()) == (isset($context["currentLevelId"]) ? $context["currentLevelId"] : null))) {
                    echo "active ";
                }
                echo "\"><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_explore", array("category" => (isset($context["category"]) ? $context["category"] : null), "fliter" => array("price" => (isset($context["price"]) ? $context["price"] : null), "currentLevelId" => $this->getAttribute($context["level"], "id", array())), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["level"], "name", array()), "html", null, true);
                echo "</a></li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['level'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "          </ul>
        </div>
      ";
        }
        // line 61
        echo "      <label class=\"checkbox-inline hidden-xs\">
        <input type=\"checkbox\" ";
        // line 62
        if (((isset($context["price"]) ? $context["price"] : null) == "free")) {
            echo "checked=\"true\" ";
        }
        echo " id=\"free\" value=\"
        ";
        // line 63
        if (((isset($context["price"]) ? $context["price"] : null) == "all")) {
            // line 64
            echo "          ";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_explore", array("category" => (isset($context["category"]) ? $context["category"] : null), "fliter" => array("price" => "free", "currentLevelId" => (isset($context["currentLevelId"]) ? $context["currentLevelId"] : null)), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null))), "html", null, true);
            echo "
        ";
        } else {
            // line 65
            echo " 
          ";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_explore", array("category" => (isset($context["category"]) ? $context["category"] : null), "fliter" => array("price" => "all", "currentLevelId" => (isset($context["currentLevelId"]) ? $context["currentLevelId"] : null)), "orderBy" => (isset($context["orderBy"]) ? $context["orderBy"] : null))), "html", null, true);
            echo "
        ";
        }
        // line 68
        echo "        \"> 免费";
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
        echo "
      </label>
    </div>
  </div>
  <div class=\"class-list row\">
    ";
        // line 73
        if ((isset($context["classrooms"]) ? $context["classrooms"] : null)) {
            // line 74
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["classrooms"]) ? $context["classrooms"] : null));
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
            foreach ($context['_seq'] as $context["_key"] => $context["classroom"]) {
                // line 75
                echo "        <div class=\"col-md-4 col-sm-6\">
          <div class=\"class-item\">
            <div class=\"class-img\">
              <a href=\"";
                // line 78
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_show", array("id" => $this->getAttribute($context["classroom"], "id", array()))), "html", null, true);
                echo "\" target=\"_blank\">
                ";
                // line 79
                echo $this->env->getExtension('topxia_web_twig')->makeLazyImg($this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($context["classroom"], "middlePicture", array()), "classroom.png"), "img-responsive", $this->getAttribute($context["classroom"], "title", array()), "lazyload_class.png");
                echo "
                <h3>";
                // line 80
                echo twig_escape_filter($this->env, $this->getAttribute($context["classroom"], "title", array()), "html", null, true);
                echo "</h3>
                <div class=\"image-overlay\"></div>
              </a>
            </div>
            <div class=\"class-serve\">
              ";
                // line 85
                $this->loadTemplate("ClassroomBundle:Classroom:service-block.html.twig", "ClassroomBundle:Classroom:explore.html.twig", 85)->display(array_merge($context, array("services" => $this->getAttribute($context["classroom"], "service", array()))));
                // line 86
                echo "            </div>
            <ul class=\"class-data clearfix\">
              <li><i class=\"es-icon es-icon-book\"></i>";
                // line 88
                echo twig_escape_filter($this->env, $this->getAttribute($context["classroom"], "courseNum", array()), "html", null, true);
                echo "</li>
              <li><i class=\"es-icon es-icon-people\"></i>";
                // line 89
                echo twig_escape_filter($this->env, ($this->getAttribute($context["classroom"], "studentNum", array()) + $this->getAttribute($context["classroom"], "auditorNum", array())), "html", null, true);
                echo "</li>
              <li><i class=\"es-icon es-icon-textsms\"></i>";
                // line 90
                echo twig_escape_filter($this->env, $this->getAttribute($context["classroom"], "threadNum", array()), "html", null, true);
                echo "</li>
            </ul>
          </div>
        </div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classroom'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 95
            echo "      
    ";
        } else {
            // line 97
            echo "      <div class=\"empty\">目前暂时无";
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "</div>
    ";
        }
        // line 99
        echo "  </div>
  <nav class=\"text-center\">
    ";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "
  </nav>
";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom:explore.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  337 => 101,  333 => 99,  327 => 97,  323 => 95,  304 => 90,  300 => 89,  296 => 88,  292 => 86,  290 => 85,  282 => 80,  278 => 79,  274 => 78,  269 => 75,  251 => 74,  249 => 73,  240 => 68,  235 => 66,  232 => 65,  226 => 64,  224 => 63,  218 => 62,  215 => 61,  210 => 58,  195 => 56,  191 => 55,  183 => 54,  179 => 52,  167 => 51,  162 => 50,  158 => 48,  156 => 47,  143 => 41,  131 => 36,  119 => 31,  111 => 27,  108 => 26,  105 => 25,  102 => 24,  99 => 23,  88 => 16,  83 => 14,  77 => 10,  74 => 9,  70 => 7,  57 => 6,  51 => 5,  37 => 4,  33 => 1,  31 => 3,  29 => 2,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::layout.html.twig' %}*/
/* {% set bodyClass = 'classroom-list-page bg-blank' %}*/
/* {% set script_controller = 'classroombundle/controller/classroom/explore' %}*/
/* {% block keywords %}{% if categoryArray %}{{categoryArray.name}}{% if categoryParent %}{{ ','}}{{ categoryParent.name|default('') }}{% endif %}{% else %}{{ '全部' }}{% endif %}{% endblock %}*/
/*   {% block description %}{{ categoryArrayDescription|default('')|plain_text(100) }}{% endblock %}*/
/*     {% block title %}{{ categoryArray.name|default('全部')  }} - {{setting('site.name')}}{% if setting('site.slogan') %}{{' - '}}{{ setting('site.slogan')}}{% endif %}{% if not setting('copyright.owned') %} - Powered By 隆平现代农业科技服务有限公司{% endif %}*/
/*     {% endblock %}*/
/* */
/* {% block top_content %}*/
/*   <div class="es-banner">*/
/*     <div class="container">*/
/*       <div class="title">*/
/*         <i class="es-icon es-icon-viewcomfy"></i>*/
/*         {{ setting('classroom.name')|default("班级") }}列表*/
/*       </div>*/
/*       <a class="btn btn-primary btn-lg more" href="{{ path('course_explore') }}">*/
/*         查看课程*/
/*       </a>*/
/*     </div>*/
/*   </div>*/
/*   */
/* {% endblock %}*/
/* {% block content %}*/
/*   {% set price = fliter.price|default('all')%}*/
/*   {% set orderBy = orderBy|default('createdTime')%}*/
/*   {% set currentLevelId = fliter.currentLevelId|default('all')%}*/
/*   {{ render(controller('TopxiaWebBundle:Category:treeNav',{category:category, path:'classroom_explore',fliter:{price: price,currentLevelId: currentLevelId},orderBy:orderBy})) }}*/
/*   <div class="es-filter">*/
/*     <ul class="nav nav-sort">*/
/*       <li>*/
/*         <a href="{{ path('classroom_explore', {category:category, fliter: {price: price,currentLevelId: currentLevelId},orderBy: 'createdTime'}) }}" class="{% if (orderBy == 'createdTime') %} active {% endif %}">*/
/*           最新*/
/*         </a>*/
/*       </li>*/
/*       <li>*/
/*         <a href="{{ path('classroom_explore', {category:category, fliter: {price: price,currentLevelId: currentLevelId},orderBy: 'studentNum'}) }}" class="{% if (orderBy == 'studentNum') %} active {% endif %}">*/
/*           最热*/
/*         </a>*/
/*       </li>*/
/*       <li>*/
/*         <a href="{{ path('classroom_explore', {category:category, fliter: {price: price,currentLevelId: currentLevelId},orderBy: 'recommendedSeq'}) }}" class="{% if (orderBy == 'recommendedSeq') %} active {% endif %}">*/
/*           推荐*/
/*         </a>*/
/*       </li>*/
/*     </ul>*/
/*     <div class="filter hidden-xs">*/
/*       {% if is_plugin_installed('vip')%}*/
/*         <div class="btn-group">*/
/*           <button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="es-icon es-icon-crown text-warning"></i>*/
/*             {% if (currentLevelId == 'all') %}会员{{ setting('classroom.name')|default("班级") }}{% endif %}*/
/*             {% for level in levels%}{% if (level.id == currentLevelId) %}{{level.name}}{% endif %}{% endfor %}*/
/*           </button>*/
/*           <ul class="dropdown-menu" role="menu">*/
/*           <li role="presentation"class="{% if (currentLevelId == 'all') %}active {% endif %}"><a href="{{ path('classroom_explore', {category:category, fliter: {price: price,currentLevelId: 'all'},orderBy: orderBy}) }}">全部</a></li>*/
/*           {% for level in levels %}*/
/*             <li role="presentation"class="{% if (level.id == currentLevelId) %}active {% endif %}"><a href="{{ path('classroom_explore', {category:category, fliter: {price: price,currentLevelId: level.id},orderBy: orderBy}) }}">{{level.name}}</a></li>*/
/*           {% endfor %}*/
/*           </ul>*/
/*         </div>*/
/*       {% endif %}*/
/*       <label class="checkbox-inline hidden-xs">*/
/*         <input type="checkbox" {% if price == 'free'%}checked="true" {% endif %} id="free" value="*/
/*         {% if price == 'all'%}*/
/*           {{ path('classroom_explore', {category:category, fliter: {price: 'free',currentLevelId: currentLevelId},orderBy: orderBy}) }}*/
/*         {% else %} */
/*           {{ path('classroom_explore', {category:category, fliter: {price: 'all',currentLevelId: currentLevelId},orderBy: orderBy}) }}*/
/*         {% endif %}*/
/*         "> 免费{{ setting('classroom.name')|default("班级") }}*/
/*       </label>*/
/*     </div>*/
/*   </div>*/
/*   <div class="class-list row">*/
/*     {% if classrooms %}*/
/*       {% for classroom in classrooms %}*/
/*         <div class="col-md-4 col-sm-6">*/
/*           <div class="class-item">*/
/*             <div class="class-img">*/
/*               <a href="{{ path('classroom_show', {id:classroom.id}) }}" target="_blank">*/
/*                 {{ lazy_img(filepath(classroom.middlePicture, 'classroom.png'), 'img-responsive', classroom.title, 'lazyload_class.png') }}*/
/*                 <h3>{{ classroom.title }}</h3>*/
/*                 <div class="image-overlay"></div>*/
/*               </a>*/
/*             </div>*/
/*             <div class="class-serve">*/
/*               {% include 'ClassroomBundle:Classroom:service-block.html.twig' with {'services':classroom.service} %}*/
/*             </div>*/
/*             <ul class="class-data clearfix">*/
/*               <li><i class="es-icon es-icon-book"></i>{{classroom.courseNum}}</li>*/
/*               <li><i class="es-icon es-icon-people"></i>{{classroom.studentNum + classroom.auditorNum }}</li>*/
/*               <li><i class="es-icon es-icon-textsms"></i>{{classroom.threadNum}}</li>*/
/*             </ul>*/
/*           </div>*/
/*         </div>*/
/*       {% endfor %}*/
/*       */
/*     {% else %}*/
/*       <div class="empty">目前暂时无{{ setting('classroom.name')|default("班级") }}</div>*/
/*     {% endif %}*/
/*   </div>*/
/*   <nav class="text-center">*/
/*     {{ web_macro.paginator(paginator) }}*/
/*   </nav>*/
/* {% endblock %}*/
