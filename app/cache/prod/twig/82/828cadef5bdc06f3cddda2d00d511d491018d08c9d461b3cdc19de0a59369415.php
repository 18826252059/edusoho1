<?php

/* TopxiaAdminBundle:System:progressBar.html.twig */
class __TwigTemplate_0b964c0f27255651e50195ee50d365d200d208fccc5df963fd1f8d88e43fc3c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaAdminBundle:System:progressBar.html.twig", 1);
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
        echo "优化课程文件";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "  <div id=\"optimize-files-progress\" class=\"optimize-files-progress\" style=\"display:none;\">
    <div class=\"progress progress-striped active\">
      <div class=\"progress-bar progress-bar-success\" style=\"width: 0%\"></div>
    </div>
    <div class=\"text-success progress-text\"></div>
  </div>
  <div id=\"optimize-url\" data-url=\"";
        // line 11
        echo $this->env->getExtension('routing')->getUrl("admin_optimize_remove_upload_files");
        echo "\"></div>
";
    }

    // line 14
    public function block_footer($context, array $blocks = array())
    {
        // line 15
        echo "   <strong class=\"text text-danger\" id=\"optimize-hint\">正在优化课程文件，请不要关闭当前窗口...</strong>
  <button id=\"finish-optimize-btn\" data-loading-text=\"正在优化, 请稍等...\" class=\"btn btn-primary\" style=\"display:none;\"data-dismiss=\"modal\">完成优化</button>
  <script>app.load('optimize/optimize-modal')</script>
";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:progressBar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 15,  53 => 14,  47 => 11,  39 => 5,  36 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaWebBundle::bootstrap-modal-layout.html.twig' %}*/
/* */
/* {% block title %}优化课程文件{% endblock %}*/
/* {% block body %}*/
/*   <div id="optimize-files-progress" class="optimize-files-progress" style="display:none;">*/
/*     <div class="progress progress-striped active">*/
/*       <div class="progress-bar progress-bar-success" style="width: 0%"></div>*/
/*     </div>*/
/*     <div class="text-success progress-text"></div>*/
/*   </div>*/
/*   <div id="optimize-url" data-url="{{ url('admin_optimize_remove_upload_files')}}"></div>*/
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/*    <strong class="text text-danger" id="optimize-hint">正在优化课程文件，请不要关闭当前窗口...</strong>*/
/*   <button id="finish-optimize-btn" data-loading-text="正在优化, 请稍等..." class="btn btn-primary" style="display:none;"data-dismiss="modal">完成优化</button>*/
/*   <script>app.load('optimize/optimize-modal')</script>*/
/* {% endblock %}*/
