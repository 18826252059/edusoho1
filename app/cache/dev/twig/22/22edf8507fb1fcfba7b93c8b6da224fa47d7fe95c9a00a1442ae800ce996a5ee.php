<?php

/* ClassroomBundle:ClassroomThread:access-intercept-modal.html.twig */
class __TwigTemplate_bd4a00a56bc731dcc21c0748c08ac5766e4519224a64fb633d95be621af928da extends Twig_Template
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
        echo "<div class=\"modal access-intercept-modal\" style=\"display: none;\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h4 class=\"modal-title\">提示</h4>
      </div>
      <div class=\"modal-body\">
        <h4>您尚未成为";
        // line 8
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
        echo "成员，请先成为";
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('topxia_web_twig')->getSetting("classroom.name"), "班级"), "html", null, true);
        echo "成员。</h4>
      </div>
      
      <div class=\"modal-footer\">
        <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("classroom_become_auditor", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-primary\">加入旁听生</a>
      </div>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomThread:access-intercept-modal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 12,  28 => 8,  19 => 1,);
    }
}
/* <div class="modal access-intercept-modal" style="display: none;">*/
/*   <div class="modal-dialog">*/
/*     <div class="modal-content">*/
/*       <div class="modal-header">*/
/*         <h4 class="modal-title">提示</h4>*/
/*       </div>*/
/*       <div class="modal-body">*/
/*         <h4>您尚未成为{{ setting('classroom.name')|default("班级") }}成员，请先成为{{ setting('classroom.name')|default("班级") }}成员。</h4>*/
/*       </div>*/
/*       */
/*       <div class="modal-footer">*/
/*         <a href="{{ path('classroom_become_auditor', {id:classroom.id}) }}" class="btn btn-primary">加入旁听生</a>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </div>*/
