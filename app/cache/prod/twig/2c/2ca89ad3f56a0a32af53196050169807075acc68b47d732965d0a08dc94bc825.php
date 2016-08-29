<?php

/* ClassroomBundle:ClassroomAdmin:index.html.twig */
class __TwigTemplate_b57590c92c9bd170e384751cde426baebe847e2870daec6c867293ea9eb69119 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "ClassroomBundle:ClassroomAdmin:index.html.twig", 1);
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
        $context["menu"] = "admin_classroom_manage";
        // line 5
        $context["script_controller"] = "classroombundle/controller/classroom-admin/classroom";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "
";
        // line 8
        if ($this->env->getExtension('topxia_web_twig')->getSetting("classroom.enabled")) {
            // line 9
            echo "
  <form id=\"message-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate>

    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" placeholder=\"";
            // line 13
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "名称\" name=\"title\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "get", array(0 => "title"), "method"), "html", null, true);
            echo "\">
    </div>

    <button class=\"btn btn-primary\">搜索</button>

  </form>
  ";
            // line 19
            if ((isset($context["classroomInfo"]) ? $context["classroomInfo"] : null)) {
                // line 20
                echo "  <table class=\"table table-striped table-hover\" id=\"classroom-table\">
    <thead>
    <tr>
      <th width=\"40%\">";
                // line 23
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
                echo "名称</th>
      <th>课程数</th>
      <th>学员数</th>
      <th>价格</th>
      <th>状态</th>
      <th>操作</th>
    </tr>
    </thead>
    <tbody>

   ";
                // line 33
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["classroomInfo"]) ? $context["classroomInfo"] : null));
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
                    // line 34
                    echo "      ";
                    $context["category"] = (($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), $this->getAttribute($context["classroom"], "categoryId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), $this->getAttribute($context["classroom"], "categoryId", array()), array(), "array"), null)) : (null));
                    // line 35
                    echo "      ";
                    $this->loadTemplate("ClassroomBundle:ClassroomAdmin:table-tr.html.twig", "ClassroomBundle:ClassroomAdmin:index.html.twig", 35)->display(array_merge($context, array("classroom" => $context["classroom"], "category" => (isset($context["category"]) ? $context["category"] : null))));
                    // line 36
                    echo "
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
                // line 38
                echo "
    </tbody>

  </table>
  ";
            } else {
                // line 43
                echo "    <div class=\"empty\">暂无";
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
                echo "信息!</div>
  ";
            }
            // line 45
            echo "  <div class=\"pull-right\">
 ";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
            echo "
</div>

";
        } else {
            // line 50
            echo "<div class=\"well\">


班级功能未开启，请先在<a href=\"";
            // line 53
            echo $this->env->getExtension('routing')->getPath("admin_classroom_setting");
            echo "\"> 系统-课程设置-班级 </a>中设置开启

</div>
";
        }
        // line 57
        echo "
";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomAdmin:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 57,  144 => 53,  139 => 50,  132 => 46,  129 => 45,  123 => 43,  116 => 38,  101 => 36,  98 => 35,  95 => 34,  78 => 33,  65 => 23,  60 => 20,  58 => 19,  47 => 13,  41 => 9,  39 => 8,  36 => 7,  33 => 6,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set menu = 'admin_classroom_manage' %}*/
/* */
/* {% set script_controller='classroombundle/controller/classroom-admin/classroom' %}*/
/* {% block main %}*/
/* */
/* {% if setting("classroom.enabled") %}*/
/* */
/*   <form id="message-search-form" class="form-inline well well-sm" action="" method="get" novalidate>*/
/* */
/*     <div class="form-group">*/
/*       <input class="form-control" type="text" placeholder="{{setting("classroom.name")|default("班级")}}名称" name="title" value="{{ app.request.get('title') }}">*/
/*     </div>*/
/* */
/*     <button class="btn btn-primary">搜索</button>*/
/* */
/*   </form>*/
/*   {% if classroomInfo%}*/
/*   <table class="table table-striped table-hover" id="classroom-table">*/
/*     <thead>*/
/*     <tr>*/
/*       <th width="40%">{{setting("classroom.name")|default("班级")}}名称</th>*/
/*       <th>课程数</th>*/
/*       <th>学员数</th>*/
/*       <th>价格</th>*/
/*       <th>状态</th>*/
/*       <th>操作</th>*/
/*     </tr>*/
/*     </thead>*/
/*     <tbody>*/
/* */
/*    {% for classroom in classroomInfo %}*/
/*       {% set category = categories[classroom.categoryId]|default(null) %}*/
/*       {% include 'ClassroomBundle:ClassroomAdmin:table-tr.html.twig' with {classroom:classroom,category:category} %}*/
/* */
/*    {% endfor %}*/
/* */
/*     </tbody>*/
/* */
/*   </table>*/
/*   {% else %}*/
/*     <div class="empty">暂无{{setting("classroom.name")|default("班级")}}信息!</div>*/
/*   {% endif %}*/
/*   <div class="pull-right">*/
/*  {{ web_macro.paginator(paginator) }}*/
/* </div>*/
/* */
/* {% else %}*/
/* <div class="well">*/
/* */
/* */
/* 班级功能未开启，请先在<a href="{{ path('admin_classroom_setting') }}"> 系统-课程设置-班级 </a>中设置开启*/
/* */
/* </div>*/
/* {% endif %}*/
/* */
/* {% endblock %}*/
