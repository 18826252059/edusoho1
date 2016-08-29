<?php

/* TopxiaAdminBundle:Course:search-to-fill-banner.html.twig */
class __TwigTemplate_71c51fa4174121181c0a880b547be0a5d9e6ba4aa8422b0db3e714cb1cb7b936 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaAdminBundle:Course:search-to-fill-banner.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "选课";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<div>
\t<div>
\t\t<form action=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("admin_course_search_to_fill_banner");
        echo "\" class=\"form-inline\" role=\"search-form\">
\t\t\t<div class=\"form-group \">
\t\t\t\t<input type=\"text\" class=\"form-control\" name=\"key\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, ((array_key_exists("key", $context)) ? (_twig_default_filter((isset($context["key"]) ? $context["key"] : null), "")) : ("")), "html", null, true);
        echo "\"
\t\t\t\tplaceholder=\"课程名称\"
\t\t\t\t/>
\t\t\t</div>
\t\t\t<button type=\"button\" class=\"btn btn-primary\">搜索</button>
\t\t</form>
\t</div>
\t<div role=\"course-list\">
\t\t<ul class=\"course-grids\">
\t\t";
        // line 18
        if ((isset($context["courses"]) ? $context["courses"] : null)) {
            // line 19
            echo "\t\t\t";
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
                // line 20
                echo "\t\t\t";
                $this->loadTemplate("TopxiaAdminBundle:Course:course-item.html.twig", "TopxiaAdminBundle:Course:search-to-fill-banner.html.twig", 20)->display(array_merge($context, array("course" => $context["course"])));
                // line 21
                echo "\t\t\t";
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
            // line 22
            echo "\t\t";
        } else {
            // line 23
            echo "\t\t\t<div class=\"empty\">无课程记录</div>
\t\t";
        }
        // line 25
        echo "\t\t</ul>
\t</div>
</div>

";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo "

";
    }

    // line 32
    public function block_footer($context, array $blocks = array())
    {
        // line 33
        echo "  <button type=\"button\" class=\"btn btn-primary pull-right\" data-dismiss=\"modal\">关闭</button>
  <script>app.load('course/search-to-fill-banner')</script>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Course:search-to-fill-banner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 33,  117 => 32,  110 => 29,  104 => 25,  100 => 23,  97 => 22,  83 => 21,  80 => 20,  62 => 19,  60 => 18,  48 => 9,  43 => 7,  39 => 5,  36 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% block title %}选课{% endblock %}*/
/* {% block body %}*/
/* <div>*/
/* 	<div>*/
/* 		<form action="{{path('admin_course_search_to_fill_banner')}}" class="form-inline" role="search-form">*/
/* 			<div class="form-group ">*/
/* 				<input type="text" class="form-control" name="key" value="{{ key|default('') }}"*/
/* 				placeholder="课程名称"*/
/* 				/>*/
/* 			</div>*/
/* 			<button type="button" class="btn btn-primary">搜索</button>*/
/* 		</form>*/
/* 	</div>*/
/* 	<div role="course-list">*/
/* 		<ul class="course-grids">*/
/* 		{% if courses %}*/
/* 			{% for course in courses %}*/
/* 			{% include 'TopxiaAdminBundle:Course:course-item.html.twig' with {course:course} %}*/
/* 			{% endfor %}*/
/* 		{% else %}*/
/* 			<div class="empty">无课程记录</div>*/
/* 		{% endif %}*/
/* 		</ul>*/
/* 	</div>*/
/* </div>*/
/* */
/* {{ web_macro.paginator(paginator) }}*/
/* */
/* {% endblock %}*/
/* {% block footer %}*/
/*   <button type="button" class="btn btn-primary pull-right" data-dismiss="modal">关闭</button>*/
/*   <script>app.load('course/search-to-fill-banner')</script>*/
/* {% endblock %}*/
