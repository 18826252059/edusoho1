<?php

/* TopxiaWebBundle:MyTask:task-calendar.html.twig */
class __TwigTemplate_f2ead23aeb875eb27c385ac0a39237b5f115035411a57dc860144eb695ae8e6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 6
        echo "
";
        // line 7
        $this->env->getExtension('topxia_web_twig')->loadScript("topxiawebbundle/controller/mytask/fullcalendar");
        // line 8
        echo "

<style>

  .panel-body {
    margin: 20px 10px;
    padding: 0;
    font-size: 14px;
  }

  #calendar {
    max-width: 900px;
    margin: 0 auto;
  }

</style>

<div class=\"panel-body\" >
  ";
        // line 26
        $context["url"] = $this->env->getExtension('routing')->getPath("my_task_calendar");
        // line 27
        echo "  <input id='datajson' hidden='hidden' data-fullcalendarevents='";
        echo twig_escape_filter($this->env, (isset($context["taskjson"]) ? $context["taskjson"] : null), "html", null, true);
        echo "' data-url='";
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "' data-today='";
        echo twig_escape_filter($this->env, (isset($context["today"]) ? $context["today"] : null), "html", null, true);
        echo "'></input>
  <div id=\"calendar\"></div>
</div>
";
    }

    // line 1
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 2
        echo "
  <link href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/fullcalendar/fullcalendar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
  <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/fullcalendar/fullcalendar.print.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media='print' />
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyTask:task-calendar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 4,  68 => 3,  65 => 2,  62 => 1,  49 => 27,  47 => 26,  27 => 8,  25 => 7,  22 => 6,  20 => 1,);
    }
}
/* {% block stylesheets %}*/
/* */
/*   <link href="{{ asset('assets/css/fullcalendar/fullcalendar.css') }}" rel="stylesheet" />*/
/*   <link href="{{ asset('assets/css/fullcalendar/fullcalendar.print.css') }}" rel="stylesheet" media='print' />*/
/* {% endblock %}*/
/* */
/* {% do load_script('topxiawebbundle/controller/mytask/fullcalendar') %}*/
/* */
/* */
/* <style>*/
/* */
/*   .panel-body {*/
/*     margin: 20px 10px;*/
/*     padding: 0;*/
/*     font-size: 14px;*/
/*   }*/
/* */
/*   #calendar {*/
/*     max-width: 900px;*/
/*     margin: 0 auto;*/
/*   }*/
/* */
/* </style>*/
/* */
/* <div class="panel-body" >*/
/*   {% set url = path('my_task_calendar') %}*/
/*   <input id='datajson' hidden='hidden' data-fullcalendarevents='{{taskjson}}' data-url='{{ url }}' data-today='{{today}}'></input>*/
/*   <div id="calendar"></div>*/
/* </div>*/
/* */
