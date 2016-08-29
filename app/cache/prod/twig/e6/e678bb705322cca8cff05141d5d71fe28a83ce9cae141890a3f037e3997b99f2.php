<?php

/* TopxiaWebBundle:Order:paid-course.html.twig */
class __TwigTemplate_9aaf1a07a0c9338eaa425bc0e758a8dd23116b102d30e978cae63ae4b5422c51 extends Twig_Template
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
        echo "<div class=\"order-detail-item clearfix\">
  <h4>您已购买过：</h4>
  <div class=\"paid-courses\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["paidCourses"]) ? $context["paidCourses"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["paidCourse"]) {
            // line 5
            echo "    <div class=\"course-item clearfix\">
      <div class=\"course-img\">
        <a href=\"";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($context["paidCourse"], "id", array()))), "html", null, true);
            echo "\" target=\"_blank\"><img  src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute($context["paidCourse"], "middlePicture", array()), "course.png"), "html", null, true);
            echo "\" alt=\"\"></a>
      </div>
      <div class=\"course-title\">
        <h4><a class=\"link-light\" href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_show", array("id" => $this->getAttribute($context["paidCourse"], "id", array()))), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["paidCourse"], "title", array()), "html", null, true);
            echo "</a></h4>
      </div>
      <div class=\"course-info\">
        抵扣：
        <span style=\"font-size: 18px\">";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["paidCourse"], "afterDiscountPrice", array()), "html", null, true);
            echo "</span>
        <span> ";
            // line 15
            if ((((array_key_exists("priceType", $context)) ? (_twig_default_filter((isset($context["priceType"]) ? $context["priceType"] : null), "RMB")) : ("RMB")) == "RMB")) {
                // line 16
                echo "          元
        ";
            } elseif ((((            // line 17
array_key_exists("priceType", $context)) ? (_twig_default_filter((isset($context["priceType"]) ? $context["priceType"] : null), "RMB")) : ("RMB")) == "Coin")) {
                // line 18
                echo "          ";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getSetting("coin.coin_name"), "html", null, true);
                echo "
        ";
            }
            // line 19
            echo " </span> 
      </div>
    </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['paidCourse'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo " 
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Order:paid-course.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 22,  66 => 19,  60 => 18,  58 => 17,  55 => 16,  53 => 15,  49 => 14,  40 => 10,  32 => 7,  28 => 5,  24 => 4,  19 => 1,);
    }
}
/* <div class="order-detail-item clearfix">*/
/*   <h4>您已购买过：</h4>*/
/*   <div class="paid-courses">*/
/*     {% for paidCourse in paidCourses %}*/
/*     <div class="course-item clearfix">*/
/*       <div class="course-img">*/
/*         <a href="{{path("course_show", {id:paidCourse.id})}}" target="_blank"><img  src="{{ filepath(paidCourse.middlePicture, 'course.png') }}" alt=""></a>*/
/*       </div>*/
/*       <div class="course-title">*/
/*         <h4><a class="link-light" href="{{path("course_show", {id:paidCourse.id})}}" target="_blank">{{paidCourse.title}}</a></h4>*/
/*       </div>*/
/*       <div class="course-info">*/
/*         抵扣：*/
/*         <span style="font-size: 18px">{{paidCourse.afterDiscountPrice}}</span>*/
/*         <span> {% if priceType|default('RMB') == "RMB" %}*/
/*           元*/
/*         {% elseif priceType|default('RMB') == "Coin" %}*/
/*           {{setting("coin.coin_name")}}*/
/*         {% endif %} </span> */
/*       </div>*/
/*     </div>*/
/*     {% endfor %} */
/*   </div>*/
/* </div>*/
/* */
