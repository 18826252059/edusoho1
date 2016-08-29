<?php

/* TopxiaAdminBundle:DeveloperSetting:version.html.twig */
class __TwigTemplate_62db735f074284cc6c60a6195b17883e0dbef95127caad8866cf762a5bf98a07 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:DeveloperSetting:version.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "应用版本修改 - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"page-header\"><h1>应用版本修改</h1></div>

";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : null), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"form-horizontal\" method=\"post\" novalidate>

  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label>应用</label>
    </div>
    <div class=\"controls col-md-8\">
      <select class=\"form-control\" name=\"code\">
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["apps"]) ? $context["apps"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["app"]) {
            // line 19
            echo "          <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "code", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "name", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "code", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["app"], "version", array()), "html", null, true);
            echo "</option>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['app'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "      </select>
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-3 control-label\">
      <label>回滚到版本</label>
    </div>
    <div class=\"controls col-md-8\">
      <input class=\"form-control\" type=\"text\" name=\"version\" value=\"\">
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"controls col-md-offset-3 col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">提交</button>
    </div>
  </div>

  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("site"), "html", null, true);
        echo "\">

</form>

<div class=\"alert alert-danger\">
  <h4>注意事项</h4>
  <ul>
    <li>此功能，为开发人员调试时使用，请不要使用随意使用，不然将造成不可预知的后果！</li>
  </ul>
</div>

";
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:DeveloperSetting:version.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 40,  75 => 21,  60 => 19,  56 => 18,  43 => 8,  39 => 6,  36 => 5,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'TopxiaAdminBundle::layout.html.twig' %}*/
/* */
/* {% block title %}应用版本修改 - {{ parent() }}{% endblock %}*/
/* */
/* {% block content %}*/
/* <div class="page-header"><h1>应用版本修改</h1></div>*/
/* */
/* {{ web_macro.flash_messages() }}*/
/* */
/* <form class="form-horizontal" method="post" novalidate>*/
/* */
/*   <div class="form-group">*/
/*     <div class="col-md-3 control-label">*/
/*       <label>应用</label>*/
/*     </div>*/
/*     <div class="controls col-md-8">*/
/*       <select class="form-control" name="code">*/
/*         {% for app in apps %}*/
/*           <option value="{{ app.code }}">{{ app.name }} - {{ app.code }} - {{ app.version }}</option>*/
/*         {% endfor %}*/
/*       </select>*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="form-group">*/
/*     <div class="col-md-3 control-label">*/
/*       <label>回滚到版本</label>*/
/*     </div>*/
/*     <div class="controls col-md-8">*/
/*       <input class="form-control" type="text" name="version" value="">*/
/*     </div>*/
/*   </div>*/
/* */
/*   <div class="form-group">*/
/*     <div class="controls col-md-offset-3 col-md-8">*/
/*       <button type="submit" class="btn btn-primary">提交</button>*/
/*     </div>*/
/*   </div>*/
/* */
/*   <input type="hidden" name="_csrf_token" value="{{ csrf_token('site') }}">*/
/* */
/* </form>*/
/* */
/* <div class="alert alert-danger">*/
/*   <h4>注意事项</h4>*/
/*   <ul>*/
/*     <li>此功能，为开发人员调试时使用，请不要使用随意使用，不然将造成不可预知的后果！</li>*/
/*   </ul>*/
/* </div>*/
/* */
/* {% endblock %}*/
