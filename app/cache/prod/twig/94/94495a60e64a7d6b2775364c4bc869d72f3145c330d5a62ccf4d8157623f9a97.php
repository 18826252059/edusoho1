<?php

/* ClassroomBundle:Classroom/Review:do.html.twig */
class __TwigTemplate_aca3d7a1112bc003b2b0ec9f7ef41003c253e01ac1ab54c44603fb999c44f574 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "  <div id=\"review\" class=\"clearfix\">
    ";
        // line 2
        if ( !(isset($context["review"]) ? $context["review"] : null)) {
            // line 3
            echo "      <a style=\"display:none;float:right;\" href=\"javascript:\" class=\"review\" >评价</a><a href=\"javascript:\" class=\"unreview\" style=\"float:right;\"  >收起</a>
      ";
        } else {
            // line 5
            echo "      <a href=\"javascript:\" class=\"review btn btn-primary pull-right\" >重新评价</a><a href=\"javascript:\" class=\"unreview\" style=\"float:right;display:none;\"  >收起</a>
    ";
        }
        // line 7
        echo "          
  </div>

    <div >
     <form id=\"review-form\" method=\"post\" action=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_reviews", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
        echo "\" ";
        if ((isset($context["review"]) ? $context["review"] : null)) {
            echo " style=\"display:none;\"";
        }
        echo ">
      ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

    <div class=\"form-group clearfix\">
      <div class=\"controls pull-left\">
        请打分： <span id=\"my-course-rate\" data-rating=\"";
        // line 16
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["review"]) ? $context["review"] : null), "rating", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["review"]) ? $context["review"] : null), "rating", array()), 0)) : (0)), "html", null, true);
        echo "\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_reviews", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()))), "html", null, true);
        echo "\" data-img-path=\"";
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "basePath", array()) . "/assets/img/raty"), "html", null, true);
        echo "\" class=\"mrm\"></span>
        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "rating", array()), 'widget');
        echo "
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"controls\">
        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "content", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "评价详细内容", "data-display" => "评价详细内容", "rows" => 6)));
        echo "
      </div>
    </div>

    ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'rest');
        echo "
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">
    <div class=\"reviewDiv\"></div>
    <button class=\"btn btn-primary\" type=\"submit\" data-toggle=\"form-submit\" data-target=\"#review-form\" style=\"float:right;\">保存</button><br>
  </form>
</div>";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:Classroom/Review:do.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 28,  77 => 27,  70 => 23,  61 => 17,  53 => 16,  46 => 12,  38 => 11,  32 => 7,  28 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/*   <div id="review" class="clearfix">*/
/*     {% if not review %}*/
/*       <a style="display:none;float:right;" href="javascript:" class="review" >评价</a><a href="javascript:" class="unreview" style="float:right;"  >收起</a>*/
/*       {% else %}*/
/*       <a href="javascript:" class="review btn btn-primary pull-right" >重新评价</a><a href="javascript:" class="unreview" style="float:right;display:none;"  >收起</a>*/
/*     {% endif %}*/
/*           */
/*   </div>*/
/* */
/*     <div >*/
/*      <form id="review-form" method="post" action="{{ path('classroom_reviews', {id:classroom.id}) }}" {% if review %} style="display:none;"{% endif %}>*/
/*       {{ web_macro.flash_messages() }}*/
/* */
/*     <div class="form-group clearfix">*/
/*       <div class="controls pull-left">*/
/*         请打分： <span id="my-course-rate" data-rating="{{ review.rating|default(0) }}" data-url="{{ path('classroom_reviews', {id: classroom.id}) }}" data-img-path="{{ app.request.basePath ~ '/assets/img/raty'}}" class="mrm"></span>*/
/*         {{ form_widget(form.rating) }}*/
/*       </div>*/
/*     </div>*/
/* */
/*     <div class="form-group">*/
/*       <div class="controls">*/
/*         {{ form_widget(form.content, {attr:{class:'form-control', placeholder:'评价详细内容', 'data-display':'评价详细内容', rows:6}}) }}*/
/*       </div>*/
/*     </div>*/
/* */
/*     {{ form_rest(form) }}*/
/*     <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/*     <div class="reviewDiv"></div>*/
/*     <button class="btn btn-primary" type="submit" data-toggle="form-submit" data-target="#review-form" style="float:right;">保存</button><br>*/
/*   </form>*/
/* </div>*/
