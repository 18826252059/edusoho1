<?php

/* TopxiaWebBundle:MyNotebook:index.html.twig */
class __TwigTemplate_549055905dc0c9aaa4f44f6faab23c55e11b4a06c5a26c7d683427a0e235aaef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:My:layout.html.twig", "TopxiaWebBundle:MyNotebook:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:My:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 5
        $context["side_nav"] = "my-notes";
        // line 6
        $context["script_controller"] = "my/notebooks";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "我的课程 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        // line 9
        echo "
<div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading\">我的笔记</div>
  <div class=\"panel-body\">
    <ul class=\"media-list notebook-list\" id=\"notebook-list\">
      ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courseMembers"]) ? $context["courseMembers"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 15
            echo "        ";
            $context["course"] = $this->getAttribute((isset($context["courses"]) ? $context["courses"] : null), $this->getAttribute($context["member"], "courseId", array()), array(), "array");
            // line 16
            echo "              <div class=\"media\">
                <img class=\"pull-left media-object\" src=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "largePicture", array()), "course.png"), "html", null, true);
            echo "\">
                <div class=\"media-body\">
                  <h4 class=\"media-heading\">";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
            echo "</h4>
                  <div class=\"notebook-metas\">
                    <span class=\"notebook-number\">共 ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["member"], "noteNum", array()), "html", null, true);
            echo " 篇笔记</span>
                  </div>
                  <div class=\"notebook-metas\">
                    ";
            // line 24
            if (($this->getAttribute($context["member"], "noteLastUpdateTime", array()) > 0)) {
                // line 25
                echo "                      <span class=\"notebook-time\">最后更新 ";
                echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->smarttimeFilter($this->getAttribute($context["member"], "noteLastUpdateTime", array())), "html", null, true);
                echo "</span>
                    ";
            }
            // line 27
            echo "                    <a class=\"pull-right notebook-go\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("my_notebook_show", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\">查看笔记</a>
                  </div>
                </div>
              </div>
      ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 32
            echo "        <li class=\"empty\">你还没有写过笔记</li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "    </ul>
    ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : null)), "method"), "html", null, true);
        echo " 
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyNotebook:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 35,  104 => 34,  97 => 32,  86 => 27,  80 => 25,  78 => 24,  72 => 21,  67 => 19,  62 => 17,  59 => 16,  56 => 15,  51 => 14,  44 => 9,  41 => 8,  34 => 3,  30 => 1,  28 => 6,  26 => 5,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:My:layout.html.twig' %}*/
/* */
/* {% block title %}我的课程 - {{ parent() }}{% endblock %}*/
/* */
/* {% set side_nav = 'my-notes' %}*/
/* {% set script_controller = 'my/notebooks' %}*/
/* */
/* {% block main %}*/
/* */
/* <div class="panel panel-default panel-col">*/
/*   <div class="panel-heading">我的笔记</div>*/
/*   <div class="panel-body">*/
/*     <ul class="media-list notebook-list" id="notebook-list">*/
/*       {% for member in courseMembers %}*/
/*         {% set course = courses[member.courseId] %}*/
/*               <div class="media">*/
/*                 <img class="pull-left media-object" src="{{ filepath(course.largePicture, 'course.png') }}">*/
/*                 <div class="media-body">*/
/*                   <h4 class="media-heading">{{course.title}}</h4>*/
/*                   <div class="notebook-metas">*/
/*                     <span class="notebook-number">共 {{ member.noteNum }} 篇笔记</span>*/
/*                   </div>*/
/*                   <div class="notebook-metas">*/
/*                     {% if member.noteLastUpdateTime > 0 %}*/
/*                       <span class="notebook-time">最后更新 {{ member.noteLastUpdateTime | smart_time }}</span>*/
/*                     {% endif %}*/
/*                     <a class="pull-right notebook-go" href="{{ path('my_notebook_show', {courseId: course.id }) }}">查看笔记</a>*/
/*                   </div>*/
/*                 </div>*/
/*               </div>*/
/*       {% else %}*/
/*         <li class="empty">你还没有写过笔记</li>*/
/*       {% endfor %}*/
/*     </ul>*/
/*     {{ web_macro.paginator(paginator) }} */
/*   </div>*/
/* </div>*/
/* {% endblock %}*/
