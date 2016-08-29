<?php

/* ClassroomBundle:ClassroomAdmin:recommend-list.html.twig */
class __TwigTemplate_882b9ebb412acf6c160cf8c6790825df00cacccdcd61e9274d92528fdd90c171 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "ClassroomBundle:ClassroomAdmin:recommend-list.html.twig", 1);
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
        $context["script_controller"] = "classroombundle/controller/classroom-admin/recommend-list";
        // line 4
        $context["menu"] = "admin_classroom_recommend";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        // line 7
        echo "
  <table class=\"table table-striped table-hover\" id=\"classroom-table\">
    <thead>
    <tr>
      <th>顺序号</th>
      <th width=\"50%\">";
        // line 12
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
        echo "名称</th>
      <th>创建时间</th>
      <th>推荐时间</th>
      <th>操作</th>
    </tr>
    </thead>
    <tbody>
      ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["classrooms"]) ? $context["classrooms"] : null));
        $context['_iterated'] = false;
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
            // line 20
            echo "        ";
            $this->loadTemplate("ClassroomBundle:ClassroomAdmin:recommend-tr.html.twig", "ClassroomBundle:ClassroomAdmin:recommend-list.html.twig", 20)->display($context);
            // line 21
            echo "      ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 22
            echo "        <tr><td colspan=\"20\"><div class=\"empty\">暂无推荐";
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
            echo "</div></td></tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classroom'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    </tbody>
  </table>

  <nav class=\"text-center\">
    ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo " 
  </nav>

";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomAdmin:recommend-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 28,  96 => 24,  87 => 22,  74 => 21,  71 => 20,  53 => 19,  43 => 12,  36 => 7,  33 => 6,  29 => 1,  27 => 4,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set script_controller = 'classroombundle/controller/classroom-admin/recommend-list' %}*/
/* {% set menu = 'admin_classroom_recommend' %}*/
/* */
/* {% block main %}*/
/* */
/*   <table class="table table-striped table-hover" id="classroom-table">*/
/*     <thead>*/
/*     <tr>*/
/*       <th>顺序号</th>*/
/*       <th width="50%">{{setting("classroom.name")|default("班级")}}名称</th>*/
/*       <th>创建时间</th>*/
/*       <th>推荐时间</th>*/
/*       <th>操作</th>*/
/*     </tr>*/
/*     </thead>*/
/*     <tbody>*/
/*       {% for classroom in classrooms %}*/
/*         {% include 'ClassroomBundle:ClassroomAdmin:recommend-tr.html.twig' %}*/
/*       {% else %}*/
/*         <tr><td colspan="20"><div class="empty">暂无推荐{{setting("classroom.name")|default("班级")}}</div></td></tr>*/
/*       {% endfor %}*/
/*     </tbody>*/
/*   </table>*/
/* */
/*   <nav class="text-center">*/
/*     {{ web_macro.paginator(paginator) }} */
/*   </nav>*/
/* */
/* {% endblock %}*/
