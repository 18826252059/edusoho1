<?php

/* TopxiaWebBundle:Course/Note:note-list-item.html.twig */
class __TwigTemplate_f1785067c6c12fa974c3d1ced42e86b35d49d10dd3bf6780ed838859e0edcfed extends Twig_Template
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
        echo " <div class=\"media note-item\">
  <div class=\"media-left\">
    ";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "user_avatar", array(0 => (isset($context["user"]) ? $context["user"] : null), 1 => "", 2 => "avatar-sm", 3 => true), "method"), "html", null, true);
        echo "
  </div>
  <div class=\"media-body\">
    <div class=\"content\">
      ";
        // line 7
        echo $this->getAttribute((isset($context["note"]) ? $context["note"] : null), "content", array());
        echo "
    </div>
    <a href=\"javascript:;\" class=\"more more-show\">[展开全文]</a>
    <div class=\"metas clearfix\">
      ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "user_link", array(0 => (isset($context["user"]) ? $context["user"] : null), 1 => "name", 2 => false), "method"), "html", null, true);
        echo " · <span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('topxia_web_twig')->smarttimeFilter($this->getAttribute((isset($context["note"]) ? $context["note"] : null), "updatedTime", array())), "html", null, true);
        echo "</span>
      ";
        // line 12
        $this->loadTemplate("TopxiaWebBundle:Course/Note:note-mates.html.twig", "TopxiaWebBundle:Course/Note:note-list-item.html.twig", 12)->display($context);
        // line 13
        echo "      <span class=\"metas-sns\">
        <span class=\"icon-favour\">
          <a href=\"javascript:;\" class=\"js-like ";
        // line 15
        if ((isset($context["userLike"]) ? $context["userLike"] : null)) {
            echo "color-primary";
        }
        echo "\" data-like-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_note_like", array("noteId" => $this->getAttribute((isset($context["note"]) ? $context["note"] : null), "id", array()))), "html", null, true);
        echo "\" data-cancel-like-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("course_note_cancel_like", array("noteId" => $this->getAttribute((isset($context["note"]) ? $context["note"] : null), "id", array()))), "html", null, true);
        echo "\">
            <i class=\"es-icon es-icon-thumbup\"></i>
            <span class=\"js-like-num\">";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["note"]) ? $context["note"] : null), "likeNum", array()), "html", null, true);
        echo "</span>
          </a>
        </span>
      </span>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course/Note:note-list-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 17,  49 => 15,  45 => 13,  43 => 12,  37 => 11,  30 => 7,  23 => 3,  19 => 1,);
    }
}
/*  <div class="media note-item">*/
/*   <div class="media-left">*/
/*     {{ web_macro.user_avatar(user, '', 'avatar-sm', true) }}*/
/*   </div>*/
/*   <div class="media-body">*/
/*     <div class="content">*/
/*       {{ note.content|raw }}*/
/*     </div>*/
/*     <a href="javascript:;" class="more more-show">[展开全文]</a>*/
/*     <div class="metas clearfix">*/
/*       {{ web_macro.user_link(user, 'name', false) }} · <span>{{ note.updatedTime|smart_time }}</span>*/
/*       {% include 'TopxiaWebBundle:Course/Note:note-mates.html.twig' %}*/
/*       <span class="metas-sns">*/
/*         <span class="icon-favour">*/
/*           <a href="javascript:;" class="js-like {% if userLike %}color-primary{% endif %}" data-like-url="{{ path('course_note_like', {noteId:note.id}) }}" data-cancel-like-url="{{ path('course_note_cancel_like', {noteId:note.id}) }}">*/
/*             <i class="es-icon es-icon-thumbup"></i>*/
/*             <span class="js-like-num">{{ note.likeNum }}</span>*/
/*           </a>*/
/*         </span>*/
/*       </span>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
/* */
