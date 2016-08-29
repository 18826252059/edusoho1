<?php

/* ClassroomBundle:ClassroomManage:teacher-info.html.twig */
class __TwigTemplate_e81bd93dc696a67258a2ed7c9c600be9187cccd0cf938a1bacf33f1c0c3d60fb extends Twig_Template
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
        echo "
";
        // line 2
        if ((isset($context["user"]) ? $context["user"] : null)) {
            // line 3
            echo "  <div class=\"col-md-7 col-md-offset-2\">
    <img src=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->getFpath($this->getAttribute((isset($context["user"]) ? $context["user"] : null), "smallAvatar", array()), "avatar.png"), "html", null, true);
            echo "\" class=\"avatar-small\">
    <span class=\"nickname mlm\">";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nickname", array()), "html", null, true);
            echo "</span>
    <input type=\"hidden\" name=\"headTeacherId\" value=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()), "html", null, true);
            echo "\" />
  <div>
";
        } else {
            // line 9
            echo "  <div class=\"col-md-7 col-md-offset-2\" style=\"color:#a94442;\">教师不存在</div>
";
        }
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomManage:teacher-info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 9,  35 => 6,  31 => 5,  27 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
/* */
/* {% if user %}*/
/*   <div class="col-md-7 col-md-offset-2">*/
/*     <img src="{{ filepath(user.smallAvatar, 'avatar.png') }}" class="avatar-small">*/
/*     <span class="nickname mlm">{{user.nickname}}</span>*/
/*     <input type="hidden" name="headTeacherId" value="{{user.id}}" />*/
/*   <div>*/
/* {% else %}*/
/*   <div class="col-md-7 col-md-offset-2" style="color:#a94442;">教师不存在</div>*/
/* {% endif %}*/
