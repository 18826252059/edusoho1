<?php

/* TopxiaAdminBundle:System:course-select.html.twig */
class __TwigTemplate_4e0bc5d90eb8dd0c5817e4c0491c54485d8488317e73f92a25816fd46b1f5319 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:System:course-select.html.twig", 1);
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
        $context["menu"] = "admin_operation_mobile_select_manage";
        // line 5
        $context["script_controller"] = "operation/course-grid";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "<style>

.course-grids {
  margin:0 -15px 0 0;
  padding:0;
  list-style: none;
}

.course-grid {
  display: inline-block;
  vertical-align: top;
  margin: 15px 15px 15px 0;
  border: 1px solid #e1e1e1;
  border-radius: 4px;
}

.course-grid .series-mode-label {
  position: absolute;
  top: 10px;
  right: 10px;
  font-size: 12px;
}

.course-grid .grid-body {
  position: relative;
  width: 170px;
  display: block;
  overflow: hidden;
  border-radius: 4px;
  color: #353535;
}

.grid-body a{
  text-decoration: none;
}

.course-grid .title {
  display: block;
  padding: 10px;
  min-height: 52px;
  color: #555;
  font-weight: bold;
}

.course-grid .add-course {
  font-size: 80px;
  height: 148px;
  text-align: center;
  padding-top: 30px;
}

</style>
";
        // line 61
        if (($this->env->getExtension('topxia_web_twig')->getSetting("mobile.enabled") == 1)) {
            // line 62
            echo "
";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
            echo "

<form class=\"form-horizontal\" id=\"mobile-form\" method=\"post\">

  <fieldset>

    <div class=\"help-block\">所选择的课程将会在客户端【每周精选】栏目中显示，最多选择三门。<br>
    </div>
    <div class=\"form-group\">
      <input type='hidden' name=\"courseIds\" value=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["mobile"]) ? $context["mobile"] : null), "courseIds", array()), "html", null, true);
            echo "\"/>
      <div class=\"col-md-12\" role=\"course-item-container\">
        <ul class=\"course-grids\">
          ";
            // line 75
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(((array_key_exists("courses", $context)) ? (_twig_default_filter((isset($context["courses"]) ? $context["courses"] : null), null)) : (null)));
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
                // line 76
                echo "          ";
                $this->loadTemplate("TopxiaAdminBundle:Course:course-item.html.twig", "TopxiaAdminBundle:System:course-select.html.twig", 76)->display(array_merge($context, array("course" => $context["course"], "showDelBtn" => true)));
                // line 77
                echo "          ";
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
            // line 78
            echo "          <li class=\"course-grid related-course-grid\" role=\"add-course\" 
          style=\"cursor:pointer
          ";
            // line 80
            if ((twig_length_filter($this->env, (isset($context["courses"]) ? $context["courses"] : null)) >= 3)) {
                // line 81
                echo "          ;display:none
          ";
            }
            // line 83
            echo "          \"
          data-backdrop=\"static\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
            // line 84
            echo $this->env->getExtension('routing')->getPath("admin_course_search");
            echo "\">
            <div class=\"add-course grid-body glyphicon glyphicon-plus\">
              
            </div>
          </li>
        </ul>
      </div>
    </div>
  </fieldset>

  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
            echo "\">
  
  <div class=\"row form-group\">
    <div class=\"controls col-md-offset-2 col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">提交</button>
    </div>
  </div>

</form>

";
        } else {
            // line 105
            echo "<div class=\"well\" style=\"text-align:center;\">


移动端未开启，请先在<a href=\"";
            // line 108
            echo $this->env->getExtension('routing')->getPath("admin_setting_mobile");
            echo "\"> 系统-课程设置-移动端设置 </a>中设置开启

</div>
";
        }
        // line 112
        echo "
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:course-select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 112,  192 => 108,  187 => 105,  173 => 94,  160 => 84,  157 => 83,  153 => 81,  151 => 80,  147 => 78,  133 => 77,  130 => 76,  113 => 75,  107 => 72,  95 => 63,  92 => 62,  90 => 61,  36 => 9,  33 => 8,  29 => 1,  27 => 5,  25 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% set menu = 'admin_operation_mobile_select_manage' %}*/
/* */
/* {% set script_controller = 'operation/course-grid' %}*/
/* */
/* */
/* {% block main %}*/
/* <style>*/
/* */
/* .course-grids {*/
/*   margin:0 -15px 0 0;*/
/*   padding:0;*/
/*   list-style: none;*/
/* }*/
/* */
/* .course-grid {*/
/*   display: inline-block;*/
/*   vertical-align: top;*/
/*   margin: 15px 15px 15px 0;*/
/*   border: 1px solid #e1e1e1;*/
/*   border-radius: 4px;*/
/* }*/
/* */
/* .course-grid .series-mode-label {*/
/*   position: absolute;*/
/*   top: 10px;*/
/*   right: 10px;*/
/*   font-size: 12px;*/
/* }*/
/* */
/* .course-grid .grid-body {*/
/*   position: relative;*/
/*   width: 170px;*/
/*   display: block;*/
/*   overflow: hidden;*/
/*   border-radius: 4px;*/
/*   color: #353535;*/
/* }*/
/* */
/* .grid-body a{*/
/*   text-decoration: none;*/
/* }*/
/* */
/* .course-grid .title {*/
/*   display: block;*/
/*   padding: 10px;*/
/*   min-height: 52px;*/
/*   color: #555;*/
/*   font-weight: bold;*/
/* }*/
/* */
/* .course-grid .add-course {*/
/*   font-size: 80px;*/
/*   height: 148px;*/
/*   text-align: center;*/
/*   padding-top: 30px;*/
/* }*/
/* */
/* </style>*/
/* {% if setting("mobile.enabled") == 1 %}*/
/* */
/* {{ web_macro.flash_messages() }}*/
/* */
/* <form class="form-horizontal" id="mobile-form" method="post">*/
/* */
/*   <fieldset>*/
/* */
/*     <div class="help-block">所选择的课程将会在客户端【每周精选】栏目中显示，最多选择三门。<br>*/
/*     </div>*/
/*     <div class="form-group">*/
/*       <input type='hidden' name="courseIds" value="{{mobile.courseIds}}"/>*/
/*       <div class="col-md-12" role="course-item-container">*/
/*         <ul class="course-grids">*/
/*           {% for course in courses|default(null) %}*/
/*           {% include 'TopxiaAdminBundle:Course:course-item.html.twig' with {course:course, showDelBtn:true} %}*/
/*           {% endfor %}*/
/*           <li class="course-grid related-course-grid" role="add-course" */
/*           style="cursor:pointer*/
/*           {% if courses|length >= 3 %}*/
/*           ;display:none*/
/*           {% endif %}*/
/*           "*/
/*           data-backdrop="static" data-toggle="modal" data-target="#modal" data-url="{{path('admin_course_search')}}">*/
/*             <div class="add-course grid-body glyphicon glyphicon-plus">*/
/*               */
/*             </div>*/
/*           </li>*/
/*         </ul>*/
/*       </div>*/
/*     </div>*/
/*   </fieldset>*/
/* */
/*   <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*   */
/*   <div class="row form-group">*/
/*     <div class="controls col-md-offset-2 col-md-8">*/
/*       <button type="submit" class="btn btn-primary">提交</button>*/
/*     </div>*/
/*   </div>*/
/* */
/* </form>*/
/* */
/* {% else %}*/
/* <div class="well" style="text-align:center;">*/
/* */
/* */
/* 移动端未开启，请先在<a href="{{ path('admin_setting_mobile') }}"> 系统-课程设置-移动端设置 </a>中设置开启*/
/* */
/* </div>*/
/* {% endif %}*/
/* */
/* {% endblock %}*/
