<?php

/* TopxiaWebBundle:MyTeaching:threads.html.twig */
class __TwigTemplate_417faae766ca8e921ab629ffe0e8b076f27d326cffbd7cd32612a66f476017fe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:My:layout.html.twig", "TopxiaWebBundle:MyTeaching:threads.html.twig", 1);
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
        // line 20
        if (((isset($context["type"]) ? $context["type"] : null) == "question")) {
            // line 21
            $context["side_nav"] = "my-teaching-questions";
        } elseif ((        // line 22
(isset($context["type"]) ? $context["type"] : null) == "discussion")) {
            // line 23
            $context["side_nav"] = "my-teaching-discussions";
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo " 

";
        // line 5
        if (((isset($context["type"]) ? $context["type"] : null) == "question")) {
            // line 6
            echo "\t";
            if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
            } else {
                echo "学员";
            }
            echo "问答
";
            // line 7
            $context["side_nav"] = "my-teaching-questions";
            // line 8
            echo "
";
        } elseif ((        // line 9
(isset($context["type"]) ? $context["type"] : null) == "discussion")) {
            // line 10
            echo "\t";
            if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
            } else {
                echo "学员";
            }
            echo "话题
";
            // line 11
            $context["side_nav"] = "my-teaching-discussions";
            // line 12
            echo "
";
        }
        // line 14
        echo "
- ";
        // line 15
        $this->displayParentBlock("title", $context, $blocks);
        echo "

";
    }

    // line 26
    public function block_main($context, array $blocks = array())
    {
        // line 27
        echo "
<div class=\"panel panel-default panel-col\">
  \t<div class=\"panel-heading\">
\t\t";
        // line 30
        if (((isset($context["type"]) ? $context["type"] : null) == "question")) {
            // line 31
            echo "\t\t\t";
            if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
            } else {
                echo "学员";
            }
            echo "问答
\t\t";
        } elseif ((        // line 32
(isset($context["type"]) ? $context["type"] : null) == "discussion")) {
            // line 33
            echo "\t\t\t";
            if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
            } else {
                echo "学员";
            }
            echo "话题
\t\t";
        }
        // line 35
        echo "\t</div>

  <div class=\"panel-body\">

    ";
        // line 39
        if (((isset($context["type"]) ? $context["type"] : null) == "discussion")) {
            // line 40
            echo "\t    ";
            $this->loadTemplate("TopxiaWebBundle:MyTeaching:tab.html.twig", "TopxiaWebBundle:MyTeaching:threads.html.twig", 40)->display($context);
            // line 41
            echo "    ";
        }
        // line 42
        echo "
    ";
        // line 43
        if ((isset($context["threads"]) ? $context["threads"] : null)) {
            // line 44
            echo "\t\t
\t    ";
            // line 45
            $this->loadTemplate("TopxiaWebBundle:MyThread:thread-list.html.twig", "TopxiaWebBundle:MyTeaching:threads.html.twig", 45)->display(array_merge($context, array("type" => (isset($context["type"]) ? $context["type"] : null))));
            // line 46
            echo "\t  ";
        } else {
            // line 47
            echo "\t  
\t  \t";
            // line 48
            if (((isset($context["type"]) ? $context["type"] : null) == "question")) {
                // line 49
                echo "\t\t\t<div class=\"empty\">您的课程中还没有";
                if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
                    echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
                } else {
                    echo "学员";
                }
                echo "提问过...</div>
\t\t";
            } elseif ((            // line 50
(isset($context["type"]) ? $context["type"] : null) == "discussion")) {
                // line 51
                echo "\t\t\t<div class=\"empty\">您的课程中还没有";
                if ($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name")) {
                    echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("default.user_name"), "学员"), "html", null, true);
                } else {
                    echo "学员";
                }
                echo "话题...</div>
\t\t";
            }
            // line 53
            echo "\t    
\t  ";
        }
        // line 55
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:MyTeaching:threads.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 55,  172 => 53,  162 => 51,  160 => 50,  151 => 49,  149 => 48,  146 => 47,  143 => 46,  141 => 45,  138 => 44,  136 => 43,  133 => 42,  130 => 41,  127 => 40,  125 => 39,  119 => 35,  109 => 33,  107 => 32,  98 => 31,  96 => 30,  91 => 27,  88 => 26,  81 => 15,  78 => 14,  74 => 12,  72 => 11,  63 => 10,  61 => 9,  58 => 8,  56 => 7,  47 => 6,  45 => 5,  39 => 3,  35 => 1,  32 => 23,  30 => 22,  28 => 21,  26 => 20,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle:My:layout.html.twig' %}*/
/* */
/* {% block title %} */
/* */
/* {% if type == 'question' %}*/
/* 	{% if setting('default.user_name') %}{{setting('default.user_name')|default('学员')}}{% else %}学员{% endif %}问答*/
/* {% set side_nav = 'my-teaching-questions' %}*/
/* */
/* {% elseif type == 'discussion' %}*/
/* 	{% if setting('default.user_name') %}{{setting('default.user_name')|default('学员')}}{% else %}学员{% endif %}话题*/
/* {% set side_nav = 'my-teaching-discussions' %}*/
/* */
/* {% endif %}*/
/* */
/* - {{ parent() }}*/
/* */
/* {% endblock %}*/
/* */
/* */
/* {% if type == 'question' %}*/
/* 	{% set side_nav = 'my-teaching-questions' %}*/
/* {% elseif type == 'discussion' %}*/
/* 	{% set side_nav = 'my-teaching-discussions' %}*/
/* {% endif %}*/
/* */
/* {% block main %}*/
/* */
/* <div class="panel panel-default panel-col">*/
/*   	<div class="panel-heading">*/
/* 		{% if type == 'question' %}*/
/* 			{% if setting('default.user_name') %}{{setting('default.user_name')|default('学员')}}{% else %}学员{% endif %}问答*/
/* 		{% elseif type == 'discussion' %}*/
/* 			{% if setting('default.user_name') %}{{setting('default.user_name')|default('学员')}}{% else %}学员{% endif %}话题*/
/* 		{% endif %}*/
/* 	</div>*/
/* */
/*   <div class="panel-body">*/
/* */
/*     {% if type == 'discussion' %}*/
/* 	    {% include 'TopxiaWebBundle:MyTeaching:tab.html.twig'%}*/
/*     {% endif %}*/
/* */
/*     {% if threads %}*/
/* 		*/
/* 	    {% include 'TopxiaWebBundle:MyThread:thread-list.html.twig'  with {type: type} %}*/
/* 	  {% else %}*/
/* 	  */
/* 	  	{% if type == 'question' %}*/
/* 			<div class="empty">您的课程中还没有{% if setting('default.user_name') %}{{setting('default.user_name')|default('学员')}}{% else %}学员{% endif %}提问过...</div>*/
/* 		{% elseif type == 'discussion' %}*/
/* 			<div class="empty">您的课程中还没有{% if setting('default.user_name') %}{{setting('default.user_name')|default('学员')}}{% else %}学员{% endif %}话题...</div>*/
/* 		{% endif %}*/
/* 	    */
/* 	  {% endif %}*/
/*   </div>*/
/* </div>*/
/* {% endblock %}*/
